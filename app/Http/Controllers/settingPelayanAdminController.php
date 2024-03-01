<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingPelayanAdminController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Setting Pelayanan'
        ];
        return view('setting-pelayanan.index_settingpelayanan', $data);
    }
}
