@extends('layouts.velonic')
@section('container-velonic')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3>Laporan Bulanan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="/cetak_laporan">
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <select class="form-select form-select-lg" name="bulan" id="bulan">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary" type="submit">Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
