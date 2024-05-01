<?php

namespace App\Http\Controllers;

use FPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\JadwalTaken;

class LaporanController extends Controller

{
    public function index()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('laporan.index', $data);
    }
    public function cetak_konseling(Request $request)
    {
        $bulanan = $request->bulan;
        if ($bulanan == "01") {
            $namaBulan = "Januari";
        } elseif ($bulanan == "02") {
            $namaBulan = "Februari";
        } elseif ($bulanan == "03") {
            $namaBulan = "Maret";
        } elseif ($bulanan == "04") {
            $namaBulan = "April";
        } elseif ($bulanan == "05") {
            $namaBulan = "Mei";
        } elseif ($bulanan == "06") {
            $namaBulan = "Juni";
        } elseif ($bulanan == "07") {
            $namaBulan = "Juli";
        } elseif ($bulanan == "08") {
            $namaBulan = "Agustus";
        } elseif ($bulanan == "09") {
            $namaBulan = "September";
        } elseif ($bulanan == "10") {
            $namaBulan = "Oktober";
        } elseif ($bulanan == "11") {
            $namaBulan = "November";
        } elseif ($bulanan == "12") {
            $namaBulan = "Desember";
        }
        $year = date('Y', strtotime(Carbon::now()));
        $periode = "$year-$bulanan";
        $pdf = new FPDF();
        $pdf->AddPage('L', 'A4');

        $pdf->SetFillColor(34, 100, 34); // hijau tua (RGB)
        $pdf->Rect(0, 0, 8, 297, 'F');
        $imagePath = public_path('assets2/images/logosaya.png');
        $pdf->Image($imagePath, 229, 10, 60);
        // Teks di bawah logo
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetXY(10, 20); // atur posisi X dan Y
        $pdf->Cell(0, 10, 'Jln. Sukamulya, Tasikmalaya.', 0, 0.5, 'R');
        // $pdf->SetX(120);
        // $pdf->Cell(0, 10, '085-850-558-027', 0, 1, 'R');
        // $pdf->SetX(170);
        // $pdf->Cell(0, 10, 'Jawa Barat, Indonesia', 0, 1.5, 'R');
        $pdf->Ln(0); // spasi antara teks dan header tabel
        //Header
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(30);
        $pdf->SetXY(10, 15);
        $pdf->Cell(140, 5, 'LAPORAN RESERVASI', 0, 1, 'L');
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetXY(10, 20);
        $pdf->Cell(140, 5, 'Laporan Reservasi Konseling', 0, 1, 'L');
        $pdf->SetLineWidth(1);
        $pdf->Line(10, 36, 285, 36);
        $pdf->SetLineWidth(0);
        $pdf->Line(10, 37, 285, 37);
        $pdf->Ln(15);
        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(8, 5, 'Laporan Bulan: ' . $namaBulan . " $year", 0, 1, 'L');
        $pdf->Ln();

        //Membuat kolom judul tabel
        $pdf->SetFont('Arial', '', '10');
        $pdf->SetFillColor(255);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->Cell(8, 10, 'No', 1, '0', 'C', true);
        $pdf->Cell(40, 10, 'Nama Klien', 1, '0', 'C', true);
        $pdf->Cell(50, 10, 'Jenis Konseling', 1, '0', 'C', true);
        $pdf->Cell(70, 10, 'Waktu Konseling', 1, '0', 'C', true);
        $pdf->Cell(39, 10, 'Nominal Koseling', 1, '0', 'C', true);
        $pdf->Cell(37, 10, 'Tanggal Konseling', 1, '0', 'C', true);
        $pdf->Cell(32, 10, 'status', 1, '0', 'C', true);
        $pdf->Ln();

        $query = DB::table('reservasis as a')
            ->join('klien as b', 'a.unique_klien', '=', 'b.unique')
            ->join('setting_pembayarans as c', 'a.unique_setting_bayar', '=', 'c.unique')
            ->select('a.*', 'b.nama', 'b.no_hp', 'c.nama_pelayanan')
            ->where('a.tanggal', 'like', "%$periode%")
            ->get();

        $pdf->SetFont('Arial', '', '8');
        $pdf->SetFillColor(255);
        $pdf->SetTextColor(0);
        foreach ($query as $index =>  $row) {
            if ($row->status == 0) {
                $status = 'Belum dikonfimasi';
            } else if ($row->status == 1) {
                $status = 'Dikonfimasi';
            } else if ($row->status == 3) {
                $status = 'Selesai';
            } else if ($row->status == 4) {
                $status = 'Kadaluarsa';
            }
            $jadwals = new JadwalTaken();
            $jadwal = $jadwals->getWaktu($row->unique);
            $waktu = '';
            foreach ($jadwal as $row2) {
                $waktu .= "($row2->jam_awal - $row2->jam_akhir) ";
            }
            $pdf->Cell(8, 10, $index + 1, 1, '0', 'C', true);
            $pdf->Cell(40, 10, $row->nama, 1, '0', 'C', true);
            $pdf->Cell(50, 10, $row->nama_pelayanan, 1, '0', 'C', true);
            $pdf->Cell(70, 10, $waktu, 1, '0', 'C', true);
            $pdf->Cell(39, 10, 'Rp ' . number_format($row->nominal, 0, ',', '.'), 1, '0', 'C', true);
            $pdf->Cell(37, 10, $row->tanggal, 1, '0', 'C', true);
            $pdf->Cell(32, 10, $status, 1, '0', 'C', true);
            $pdf->Ln();
        }



        $pdf->Output('Laporan Konseling.pdf', 'I');
        exit;
    }
}
