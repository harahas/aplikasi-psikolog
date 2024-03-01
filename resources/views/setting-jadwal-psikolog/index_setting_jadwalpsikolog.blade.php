@extends('layouts.velonic')
@section('container-velonic')
<div class="row">
    <form action="">
        <div class="col-lg-6">
            <div class="row">
                <div class="col">

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="fs-15 mt-2">Pilih Hari :</h6>
                    <div class="form-check form-checkbox-secondary mb-1">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Senin</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Selasa</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Rabu</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Kamis</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Jum'at</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">Sabtu</label>
                    </div>


                </div>
                <div class="card-body">
                    <h6 class="fs-15 mt-2">Pilih Waktu :</h6>
                    <div class="form-check form-checkbox-secondary mb-1">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">08.00 - 09.00 </label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">09.00 - 10.00</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">10.00 - 11.00</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">13.00 - 14.00</label>
                    </div>
                    <div class="form-check form-checkbox-secondary mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor6">
                        <label class="form-check-label" for="customCheckcolor6">14.00 - 15.00</label>
                    </div>


                    <button class="btn btn-primary" type="button">Setting</button>

                </div><!-- end card-body -->
            </div> <!-- end card -->
        </div>

    </form><!-- end col -->

    <!-- end col -->
</div>

@endsection
