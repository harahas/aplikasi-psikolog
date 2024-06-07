@extends('layouts.velonic')
@section('container-velonic')

<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card widget-flat text-bg-primary">
            <div class="card-body">
                <div class="float-end">
                    <h3><i class=" ri-user-heart-line"></i></h3>
                </div>
                <h5 class="badge bg-primary-subtle text-purple rounded-pill">Klien</h5>
                <h5 class="text mt-0">Jumlah Klien :</h5>
                <hr>
                <h5>{{ $jumlahKlien }} Orang</h5>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card widget-flat text-bg-purple">
            <div class="card-body">
                <div class="float-end">
                    <h3><i class="mdi mdi-calendar-import"></i></h3>
                </div>
                <h5 class="badge bg-primary-subtle text-purple rounded-pill">Reservasi</h5>
                <h5 class="text mt-0">Jumlah Reservasi Masuk :</h5>
                <hr>
                <h5>{{ $jumlahReservasiMasuk }} Reservasi</h5>

            </div>
        </div>
    </div>
    {{-- <div class="col-xl-3 col-sm-6">
        <div class="card widget-flat text-bg-secondary">
            <div class="card-body">
                <div class="float-end">
                    <h3><i class="bi bi-wallet2"></i></h3>
                </div>
                <h5 class="badge bg-primary-subtle text-purple rounded-pill">Pendapatan</h5>
                <h5 class="text mt-0">Pendapatan Masuk :</h5>
                <hr>
                <h5>Rp {{ number_format($nominalMasuk, 0, ',', '.') }} </h5>

</div>
</div>
</div> --}}
</div>


@endsection
