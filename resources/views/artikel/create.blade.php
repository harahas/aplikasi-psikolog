@extends('layouts.velonic')
@section('container-velonic')
<div class="row">
    <div class="col">
        <div class="card ">
            <div class="card-header">Tambah Data</div>
            <div class="card-body">
                <form action="">
                    {{-- Buatkan form untuk input data title, slug, except, body dan upload image dan buatkan satu button tambah data --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" readonly>
                        </div>
                        <label for="body" class="form-label">Body</label>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Drag Photo">
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //tangkap element input title
    let title = document.querySelector("#title")
    //tangkap element input slug
    let slug = document.querySelector("#slug")

    //ketika title selesai di ketik
    title.addEventListener("change", function() {
        fetch('/createSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

</script>
@endsection
