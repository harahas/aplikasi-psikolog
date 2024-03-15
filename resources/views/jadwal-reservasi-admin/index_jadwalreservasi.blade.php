@extends('layouts.velonic')
@section('container-velonic')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-konsultasi">
                <h4>Tabel Jadwal Reservasi</h4>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Klien</th>
                        <th>Jenis Konseling</th>
                        <th>Tanggal Konseling</th>
                        <th>Nominal Transaksi</th>
                        <th>Status</th>
                        <th>Masalah dan Harapan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                </tbody>
            </table>
        </div>


    </div>
</div>
@include('jadwal-reservasi-admin.modal-bukti-bayar')
@include('jadwal-reservasi-admin.modal-hope')
<script src="/page-script/jadwal_reservasi.js"></script>
@endsection
