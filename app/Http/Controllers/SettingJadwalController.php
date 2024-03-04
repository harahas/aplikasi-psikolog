<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SettingJadwal;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class SettingJadwalController extends Controller
{
    //
    public function datatableSettingJadwal(Request $request)
    {
        $query = SettingJadwal::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =

                '
        <button class="btn btn-rounded btn-sm btn-warning text-dark edit-button btn-edit-jadwal " title="Edit Data" data-unique="' . $row->unique . '"><i class=" ri-edit-box-line">Edit</i></button>
        <button class="btn btn-rounded btn-sm btn-danger text-white btn-hapus-jadwal " title="Hapus Data" data-unique="' . $row->unique . '"    data-token="' . csrf_token() . '"><i class="ri-delete-bin-line">Hapus</i></button>';
            return $actionBtn;
        })->make(true);
    }
    public function simpanSettingJadwal(Request $request)
    {
        // rules validasi
        $rules = [
            'tanggal' => 'required',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',

        ];
        $pesan = [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam_awal.required' => 'Jam tidak boleh kosong',
            'jam_akhir.required' => 'Jam tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'unique' => Str::orderedUuid(),
                'tanggal' => $request->tanggal,
                'jam_awal' => $request->jam_awal,
                'jam_akhir' => $request->jam_akhir,
                'status' => 0

            ];
            SettingJadwal::create($data);
            return response()->json(['success' => 'Data Berhasil Di Simpan']);
        }
    }
    public function getSettingJadwal($unique)
    {
        $jadwal = SettingJadwal::where('unique', $unique)->first();

        if (!$jadwal) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json(['jadwal' => $jadwal]);
    }
    public function updateSettingJadwal(Request $request)
    {
        // rules validasi
        $rules = [
            'tanggal' => 'required',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',

        ];
        $pesan = [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam_awal.required' => 'Jam tidak boleh kosong',
            'jam_akhir.required' => 'Jam tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'tanggal' => $request->tanggal,
                'jam_awal' => $request->jam_awal,
                'jam_akhir' => $request->jam_akhir,
                'status' => 0

            ];
            SettingJadwal::where('unique', $request->unique)->update($data);
            return response()->json(['success' => 'Data Berhasil Di Simpan']);
        }
    }
    public function deleteJadwal($unique)
    {
        $jadwal = SettingJadwal::where('unique', $unique);

        if (!$jadwal->first()) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $jadwal->delete();

        return response()->json(['success' => 'Data deleted successfully']);
    }
    public function getWaktu(Request $request)
    {
        $waktu = SettingJadwal::where('tanggal', $request->tanggal)->where('status', 0)->get();
        return response()->json(['waktu' => $waktu]);
    }
}
