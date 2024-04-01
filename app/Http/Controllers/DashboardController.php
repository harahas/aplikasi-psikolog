<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klien;
use App\Models\Reservasi;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'jumlahKlien' => Klien::count('id'),
            'jumlahReservasiMasuk' => Reservasi::count('id'),
            'nominalMasuk' => Reservasi::sum('nominal')
        ];


        return view('dashboard.index', $data);
    }
}
