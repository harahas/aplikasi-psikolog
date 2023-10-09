@extends('layouts.velonic')
@section('container-velonic')

<div class="row">
<div class="col">
<a href="/list_artikel/create" class="btn btn-primary">Tambah Artikel</a>
</div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <h3>Daftar Artikel</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-artikel">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<script src="/page-script/artikel.js"></script>
@endsection