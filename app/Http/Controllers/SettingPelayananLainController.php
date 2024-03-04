<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingPelayananLain;
use Yajra\DataTables\Facades\DataTables;

class SettingPelayananLainController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Setting Pelayanan Lain'
        ];
        return view('setting-pelayanan-lain.index_settingpelayananlain', $data);
    }
    public function datatableSettingPelayananLain(Request $request)
    {
        $query = SettingPelayananLain::all();
        return DataTables::of($query)->addColumn('action', function ($row) {
            $actionBtn =

                '
        <button class="btn btn-rounded btn-sm btn-warning text-dark edit-button btn-edit-pelayanan-lain mt-1 d-flex align-items-left" title="Edit Data" data-unique="' . $row->unique . '"><i class=" ri-edit-box-line">Edit</i></button>
        <button class="btn btn-rounded btn-sm btn-danger text-white btn-hapus-pelayanan-lain mt-1 d-flex align-items-left" title="Hapus Data" data-unique="' . $row->unique . '"    data-token="' . csrf_token() . '"><i class="ri-delete-bin-line">Hapus</i></button>';
            return $actionBtn;
        })->make(true);
    }
}
