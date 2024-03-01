<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingJadwalAdminController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Setting Jadwal Psikolog'
        ];
        return view('setting-jadwal-psikolog.index_setting_jadwalpsikolog', $data);
    }
}
