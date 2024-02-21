<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Klien extends Model
{
    use HasFactory;
    protected $table = "klien";
    protected $guarded = ["id"];

    public function attemptAuthentication($no_hp, $password)
    {
        $klien = $this->where('no_hp', $no_hp)->first();

        if (!$klien) {
            return false; // Jika email tidak ditemukan
        }

        // Jika password cocok
        if (Hash::check($password, $klien->password)) {
            return true;
        }

        return false; // Jika password tidak cocok
    }
}
