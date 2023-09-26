@extends('layouts.velonic')
@section('container-velonic')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title mb-0"> Basic Wizard</h4>
                </div>
                <div class="card-body">
                    <div id="basicwizard">

                        <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                            <li class="nav-item">
                                <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                    <i class="ri-account-circle-line fw-normal fs-20 align-middle me-1"></i>
                                    <span class="d-none d-sm-inline">Dalam Antrian</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                    <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                    <span class="d-none d-sm-inline">Antrian Selesai</span>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content b-0 mb-0">
                            <div class="tab-pane" id="basictab1">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- ############ PAGE START-->
                                        <div class="padding">
                                            <div class="box">
                                                <div class="box-header">

                                                </div>
                                                <div class="card">
                                                    <div class="card-header"></div>
                                                    <div class="card-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="table-konsultasi">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama</th>
                                                                        <th>Tanggal Reservasi</th>
                                                                        <th>Jenis Pelayanan</th>
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

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <ul class="list-inline wizard mb-0">
                                    <li class="next list-inline-item float-end">
                                        <a href="javascript:void(0);" class="btn btn-info">Add More Info <i
                                                class="ri-arrow-right-line ms-1"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane" id="basictab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="padding">
                                            <div class="box">
                                                <div class="box-header">

                                                </div>
                                                <div class="card">
                                                    <div class="card-header"></div>
                                                    <div class="card-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-striped"
                                                                id="table-konsultasi-selesai">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama</th>
                                                                        <th>Tanggal Reservasi</th>
                                                                        <th>Jenis Pelayanan</th>
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

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <ul class="pager wizard mb-0 list-inline">
                                    <li class="previous list-inline-item">
                                        <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i>
                                            Back to Account</button>
                                    </li>
                                    <li class="next list-inline-item float-end">
                                        <button type="button" class="btn btn-info">Add More Info <i
                                                class="ri-arrow-right-line ms-1"></i></button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane" id="basictab3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                            <h3 class="mt-0">Thank you !</h3>

                                            <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui.
                                                Aliquam
                                                mattis dictum aliquet.</p>

                                            <div class="mb-3">
                                                <div class="form-check d-inline-block">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">I agree with the
                                                        Terms and Conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <ul class="pager wizard mb-0 list-inline mt-1">
                                    <li class="previous list-inline-item">
                                        <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i>
                                            Back to Profile</button>
                                    </li>
                                    <li class="next list-inline-item float-end">
                                        <button type="button" class="btn btn-info">Submit</button>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- tab-content -->
                    </div> <!-- end #basicwizard-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end col -->
    <script src="/page-script/pelayanan.js"></script>
    <!-- ############ PAGE END-->
@endsection
