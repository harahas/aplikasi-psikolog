<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SettingPembayaran;
use App\Http\Controllers\Controller;
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
            'harga' => 'required',
            'keterangan' => 'required',

        ];
        $pesan = [
            'nama_pelayanan.required' => 'Nama tidak boleh kosong',
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
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,

            ];
            SettingPembayaran::create($data);
            return response()->json(['success' => 'Data Berhasil Di Simpan']);
        }
    }
    public function datatableSettingPembayaran(Request $request)
    {
        $query = SettingPembayaran::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =
                '
        <button class="btn btn-rounded btn-sm btn-warning text-dark edit-button" title="Edit Data" data-unique="' . $row->unique . '"><i class="fas fa-edit"></i>Edit</button>
        <button class="btn btn-rounded btn-sm btn-danger text-white delete-button" title="Hapus Data" data-unique="' . $row->unique . '" data-token="' . csrf_token() . '"><i class="fas fa-trash-alt"></i>Hapus</button>';
            return $actionBtn;
        })->make(true);
    }
}
