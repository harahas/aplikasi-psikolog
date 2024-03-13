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
                        <th>No Handphone</th>
                        <th>Nama Pelayanan</th>
                        <th>Nominal Transaksi</th>
                        <th>Status</th>
                        <th>Bukti Transaksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hamni Rahma Hasibuan</td>
                        <td>085860568027</td>
                        <td>Konseling Individu Offline</td>
                        <td>Rp 300.000</td>
                        <td>
                            <span class="badge bg-warning">On Progress</span>
                        </td>
                        <td>
                            <img src="/assets2/images/users/avatar-1.jpg" width="35">
                        </td>
                        <td class="d-flex align-items-center">
                            <button type="button" class="btn btn-purple me-1">
                                <i class="ri-checkbox-line me-1"></i>
                                <span>Terima</span>
                            </button>

                            <button type="button" class="btn btn-dark me-1">
                                <i class="ri-check-double-line me-1"></i>
                                <span>Selesai</span>
                            </button>

                            <button type="button" class="btn btn-info me-1">
                                <i class="bi bi-whatsapp line me-1"></i>
                                <span>Hubungi</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
