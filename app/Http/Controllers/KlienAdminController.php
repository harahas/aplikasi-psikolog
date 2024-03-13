<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KlienAdminController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Klien'
        ];
        return view('klien.index_klien', $data);
    }

    public function change_password_klien(Request $request)
    {
        $rules = [
            'new_password' => 'required|min:7',
            'confirm_password' => 'required',
        ];
        $pesan = [
            'new_password.required' => 'Password tidak boleh kosong',
            'new_password.min' => 'Password minimal 7 karakter',
            'confirm_password.required' => 'Password tidak boleh kosong',
        ];
        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $data = [
                'password' => bcrypt($request->new_password)
            ];
            Klien::where('no_hp', $request->no_hp)->update($data);
            return response()->json(['success' => 'Password Berhasil Diubah!']);
        }
    }
}
