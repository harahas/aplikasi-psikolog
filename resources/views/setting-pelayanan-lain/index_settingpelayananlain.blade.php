@extends('layouts.velonic')
@section('container-velonic')
<div class="row mb-2">
    <div class="col">
        <button id="tambah_pelayanan_lain" type="button" class="btn btn-primary me-md-1 d-flex align-items-center">
            <i class="ri-check-double-line me-1"></i><span>Tambah Pelayanan</span>
        </button>
    </div>
</div>
<div class="card">
    <div class="card-header">

        <h4>Tabel Daftar Pelayanan</h4>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped" id="table-settingpelayananlain">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelayanan</th>
                        <th>Harga Pelayanan</th>
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
@include('setting-pelayanan-lain.modal_settingpelayananlain')
<script src="/page-script/settingpelayananlain.js"></script>
@endsection
