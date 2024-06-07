<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{

    public function index()
    {
        $today = Carbon::today();

        $data = [
            'title' => 'Dashboard',
            'jumlahKlien' => Klien::count('id'),
            'jumlahReservasiMasuk' => Reservasi::count('id'),
            'nominalMasuk' => Reservasi::where('status', 1)->sum('nominal'),
            'jumlahReservasiHariIni' => Reservasi::where('status', 1)
                ->whereDate('created_at', $today)
                ->count('id')
        ];

        return view('dashboard.index', $data);
    }
}
