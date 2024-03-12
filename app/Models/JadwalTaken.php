<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalTaken extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'unique';
    }

    public function getWaktu($unique_reservasi)
    {
        $query = DB::table('jadwal_takens as a')
            ->join('reservasis as b', 'a.unique_reservasi', '=', 'b.unique')
            ->join('setting_jadwals as c', 'a.unique_setting_jadwal', '=', 'c.unique')
            ->select('a.*', 'b.unique as bunique', 'c.jam_awal', 'c.jam_akhir')
            ->where('b.unique', $unique_reservasi)
            ->get();
        return $query;
    }

    public function getJumlahSesi($unique_reservasi)
    {
        $query = JadwalTaken::where('unique_reservasi', $unique_reservasi)->count('id');
        return $query;
    }
}
