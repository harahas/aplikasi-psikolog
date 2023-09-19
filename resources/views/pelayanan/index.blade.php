@extends('layouts.velonic')
@section('container-velonic')

<!-- ############ PAGE START-->
<div class="padding">
    <div class="box">
      <div class="box-header">
        <h2>DataTables</h2>
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
  <script src="/page-script/pelayanan.js"></script>
  <!-- ############ PAGE END-->
@endsection