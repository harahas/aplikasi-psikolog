<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalResevasiController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Jadwal Konseling'
        ];
        return view('jadwal-reservasi-admin.index_jadwalreservasi', $data);
    }
}
