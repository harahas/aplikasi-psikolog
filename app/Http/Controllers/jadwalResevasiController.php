<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jadwalResevasiController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Jadwal Konseling',
            'kliens' => Klien::all()
        ];
        return view('jadwal-reservasi-admin.index_jadwalreservasi', $data);
    }
}
