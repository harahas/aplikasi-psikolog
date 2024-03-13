@extends('layouts.velonic')
@section('container-velonic')
<div class="row mb-2">
    <div class="col">
        <button id="tambah_jadwal" type="button" class="btn btn-primary me-md-1 d-flex align-items-center">
            <i class="ri-check-double-line me-1"></i><span>Tambah Jadwal</span>
        </button>
    </div>
</div>
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped" id="table-jadwal">
                <h4>Tabel Jadwal Psikolog</h4>

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Jam Awal</th>
                        <th>Jam Akhir</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="/page-script/setting-jadwal.js"></script>
@include('setting-jadwal-psikolog.modal_settingjadwal')


@endsection
