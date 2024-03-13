<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SettingPembayaran;
use App\Http\Controllers\Controller;
use App\Models\pelayanan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class SettingPembayaranController extends Controller
{
    //
    public function simpanSettingPelayanan(Request $request)
    {
        // rules validasi
        $rules = [
            'nama_pelayanan' => 'required',
            'jenis_pelayanan' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',

        ];
        $pesan = [
            'nama_pelayanan.required' => 'Nama tidak boleh kosong',
            'jenis_pelayanan.required' => 'jenis tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',

        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        // jika ada rules yang tidak terpenuhi
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'unique' => Str::orderedUuid(),
                'nama_pelayanan' => $request->nama_pelayanan,
                'jenis_pelayanan' => $request->jenis_pelayanan,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,

            ];
            SettingPembayaran::create($data);
            return response()->json(['success' => 'Data Berhasil Di Simpan']);
        }
    }
    public function getSettingPelayanan($unique)
    {
        $pelayanan = SettingPembayaran::where('unique', $unique)->first();

        if (!$pelayanan) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return response()->json(['pelayanan' => $pelayanan]);
    }

    public function datatableSettingPembayaran(Request $request)
    {
        $query = SettingPembayaran::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =

                '
        <button class="btn btn-rounded btn-sm btn-warning text-dark edit-button btn-edit-pelayanan mt-1 d-flex align-items-left" title="Edit Data" data-unique="' . $row->unique . '"><i class=" ri-edit-box-line">Edit</i></button>
        <button class="btn btn-rounded btn-sm btn-danger text-white delete-button mt-1 d-flex align-items-left" title="Hapus Data" data-unique="' . $row->unique . '"    data-token="' . csrf_token() . '"><i class="ri-delete-bin-line">Hapus</i></button>';
            return $actionBtn;
        })->make(true);
    }
    public function updateSettingPelayanan(Request $request)
    {
        $rules = [
            'unique' => 'required',
            'nama_pelayanan' => 'required',
            'jenis_pelayanan' => 'required',
            'harga' => 'required|numeric',
            'keterangan' => 'required',
        ];

        $messages = [
            'unique.required' => 'Silahkan Memilih Data yang Akan Diupdate',
            'nama_pelayanan.required' => 'Nama Pelayanan tidak boleh kosong',
            'jenis_pelayanan.required' => 'Jenis Pelayanan tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.numeric' => 'Harga harus berupa angka',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $pelayanan = SettingPembayaran::where('unique', $request->input('unique'))->first();

            if (!$pelayanan) {
                return response()->json(['error' => 'Data not found'], 404);
            }

            $data = [
                'nama_pelayanan' => $request->input('nama_pelayanan'),
                'jenis_pelayanan' => $request->input('jenis_pelayanan'),
                'harga' => $request->input('harga'),
                'keterangan' => $request->input('keterangan'),
                // tambahkan kolom lainnya sesuai kebutuhan
            ];

            $pelayanan->update($data);

            return response()->json(['success' => 'Data updated successfully', 'pelayanan' => $pelayanan]);
        }
    }
    public function deletePelayanan($unique)
    {
        $pelayanan = SettingPembayaran::where('unique', $unique);

        if (!$pelayanan->first()) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $pelayanan->delete();

        return response()->json(['success' => 'Data deleted successfully']);
    }
}
