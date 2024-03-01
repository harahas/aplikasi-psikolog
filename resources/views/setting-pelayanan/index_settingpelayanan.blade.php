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
                        <th>Nama Pelayanan</th>
                        <th>Harga Persesi/Range</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Konseling Individu</td>
                        <td>Rp 300.000</td>
                        <td>Jangan biarkan kecemasan atau masalah lainnya menghambat kebahagiaanmu. Temukan langkah pertamamu menuju pemulihan dengan menjalani konsultasi bersama konsultan keluarga Akhlaqul Karimah.</td>
                        <td>
                            <span class="badge bg-warning">On Progres</span>
                        </td>
                        <td class=" d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-purple me-md-1 d-flex align-items-center">
                                <i class="ri-checkbox-line me-1"></i> <span>Edit</span>
                            </button>

                            <button type="button" class="btn btn-danger me-md-1 d-flex align-items-center">
                                <i class="ri-check-double-line me-1"></i><span>Hapus</span>
                            </button>
                        </td>
                    </tr>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
