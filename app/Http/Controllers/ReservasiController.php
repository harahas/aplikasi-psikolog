<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\JadwalTaken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SettingJadwal;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ReservasiController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'unique' => Str::orderedUuid(),
            'unique_klien' => $request->unique_klien,
            'unique_setting_bayar' => $request->unique_setting_bayar,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'harapan' => $request->harapan,
            'bukti_bayar' => $request->file('bukti_bayar')->store('bukti_bayar'),
            'nominal' => $request->nominal * $request->sesi,
            'status' => 0
        ];
        Reservasi::create($data);
        $latest = Reservasi::latest()->first();
        foreach ($request->waktu2 as $waktu) {
            $data2 = [
                'unique' => Str::orderedUuid(),
                'unique_reservasi' => $latest->unique,
                'unique_setting_jadwal' => $waktu
            ];
            JadwalTaken::create($data2);

            SettingJadwal::where('unique', $waktu)->update(['status' => 1]);
        }

        return redirect('/')->with('success', 'Reservasi Behasil Dilakukan');
    }

    public function dataTables(Request $request)
    {
        $reservasi = new Reservasi();
        $query = DB::table('reservasis as a')
            ->join('klien as b', 'a.unique_klien', '=', 'b.unique')
            ->join('setting_pembayarans as c', 'a.unique_setting_bayar', '=', 'c.unique')
            ->select('a.*', 'b.nama', 'b.no_hp', 'c.nama_pelayanan')
            ->get();
        foreach ($query as $row) {
            $row->nominal = $reservasi->rupiah($row->nominal);
        }
        return DataTables::of($query)->addColumn('action', function ($row) {
            $phone = str_split($row->no_hp);
            array_shift($phone);
            $newPhone = implode($phone);
            if ($row->status == 0) {

                $actionBtn =
                    '
                <div class="d-flex gap-1">
                <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center button-konfirmasi" data-unique="' . $row->unique . '">
                <i class="ri-checkbox-line me-1"></i> <span>Konfirmasi</span>
                </button>
                <a href="https://wa.me/62' . $newPhone . '" type="button" class="btn btn-info d-flex align-items-center" data-unique="' . $row->unique . '">
                <i class="bi bi-whatsapp line me-1"></i><span>Hubungi</span>
                </a>
                </div>
                <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center button-bukti-bayar" data-bukti="/storage/' . $row->bukti_bayar . '" data-unique="' . $row->unique . '">
                <i class="ri-checkbox-line me-1"></i> Bukti Bayar</button>
                ';
            } else if ($row->status == 2) {
                $actionBtn =
                    '
                <div class="d-flex gap-1">
                <a href="https://wa.me/62' . $newPhone . '" type="button" class="btn btn-info d-flex align-items-center" data-unique="' . $row->unique . '">
                <i class="bi bi-whatsapp line me-1"></i><span>Hubungi</span>
                </a>
                <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center button-bukti-bayar" data-bukti="/storage/' . $row->bukti_bayar . '" data-unique="' . $row->unique . '">Bukti Bayar</button>
                </div>
                ';
            } else if ($row->status == 1) {
                $actionBtn =
                    '
                <div class="d-flex gap-1">
                <button type="button" class="btn btn-dark me-md-1 d-flex align-items-center button-selesai" data-unique="' . $row->unique . '">
                <i class="ri-check-double-line me-1"></i><span>Selesai</span>
                </button>
                <a href="https://wa.me/62' . $newPhone . '" type="button" class="btn btn-info d-flex align-items-center" data-unique="' . $row->unique . '">
                <i class="bi bi-whatsapp line me-1"></i><span>Hubungi</span>
                </a>
                <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center button-bukti-bayar" data-bukti="/storage/' . $row->bukti_bayar . '" data-unique="' . $row->unique . '">Bukti Bayar</button>
                </div>
                ';
            } else if ($row->status == 3) {
                $actionBtn =
                    '
                <div class="d-flex gap-1">
                <a href="https://wa.me/62' . $newPhone . '" type="button" class="btn btn-info d-flex align-items-center" data-unique="' . $row->unique . '">
                <i class="bi bi-whatsapp line me-1"></i><span>Hubungi</span>
                </a>
                <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center button-bukti-bayar" data-bukti="/storage/' . $row->bukti_bayar . '" data-unique="' . $row->unique . '">Bukti Bayar</button>
                </div>
                ';
            }

            return $actionBtn;
        })->make(true);
    }

    public function confirm(Reservasi $reservasi)
    {
        Reservasi::where('unique', $reservasi->unique)->update(['status' => 1]);
        return response()->json(['success' => 'Reservasi Dikonfirmasi']);
    }

    public function done(Reservasi $reservasi)
    {
        Reservasi::where('unique', $reservasi->unique)->update(['status' => 3]);
        return response()->json(['success' => 'Konsultasi Selesai']);
    }
}
