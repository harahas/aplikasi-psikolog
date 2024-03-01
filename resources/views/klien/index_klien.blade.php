@extends('layouts.velonic')
@section('container-velonic')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped" id="table-konsultasi">
                <h4>Tabel Klien </h4>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Klien</th>
                        <th>No Handphone</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hamni Rahma Hasibuan</td>
                        <td>085860568027</td>
                        <td>28 Desember 2000</td>
                        <td>Perum Garden Center Asri</td>
                        <td>

                            <button type="button" class="btn btn-dark"><i class="ri-history-fill"></i> </button>
                            <button type="button" class="btn btn-secondary"><i class="mdi mdi-account-details"></i> </button>
                            <button type="button" class="btn btn-info"><i class="ri-whatsapp-line"></i> </button>

                        </td>
                    </tr>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
