@extends('layouts.velonic')
@section('container-velonic')
.<div class="row">
<div class="col">
<div class="card ">
 <div class="card-header">Tambah Data</div>
  <div class="card-body">
    {{-- Buatkan form untuk input data title, slug, except, body dan upload image dan buatkan satu button tambah data --}}
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tittle</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tittle">
    </div>
    <div class="mb-3">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Slug">
      </div>
        <label for="exampleFormControlInput1" class="form-label">Body</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Body">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Upload Image</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Drag Photo">
      
        
                    <button type="submit" class="btn btn-primary mt-3" >Upload</button>
                </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection