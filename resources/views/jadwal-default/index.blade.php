@extends('layouts.velonic')
@section('container-velonic')
<div class="row mb-2og">
    <div class="col-sm-12">
        <button class="btn btn-primary" id="btn-add-data">Tambah Jadwal</button>
    </div>
</div>
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-jadwal">
                <h4>Tabel Jadwal Default</h4>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jam Awal</th>
                        <th>Jam Akhir</th>
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
@include('jadwal-default.modal-jadwal')
<script src="/page-script/jadwal-default.js"></script>
@endsection
