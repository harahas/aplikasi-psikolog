@extends('layouts.velonic')
@section('container-velonic')
<div class="row mb-2">
    <div class="col">
        <button id="tambah_pelayanan" type="button" class="btn btn-primary me-md-1 d-flex align-items-center">
            <i class="ri-check-double-line me-1"></i><span>Tambah Pelayanan</span>
        </button>
    </div>
</div>
<div class="card">
    <div class="card-header">

        <h4>Tabel Pelayanan Reservasi</h4>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped" id="table-settingpembayaran">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelayanan</th>
                        <th>Jenis Pelayanan</th>
                        <th>Harga Persesi/Range</th>
                        <th>Keterangan</th>
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
@include('setting-pelayanan.modal_settingpelayanan')
<script src="/page-script/settingpelayanan.js"></script>
@endsection
