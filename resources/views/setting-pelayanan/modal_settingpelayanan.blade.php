<!-- Modal -->
<div class="modal fade" id="modal-pelayanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-target="#standard-modal">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-3" id="title-modal">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> <!-- end modal header -->
            <div class="modal-body" style="padding:0 2em">
                <form id="form-pelayanan" action="javascript:;">
                    {{-- HIDDEN INPUT --}}
                    <input type="hidden" name="unique" id="unique">
                    @csrf
                    {{-- ./HIDDEN INPUT --}}
                    <div class="form-group mt-2 mb-2">
                        <label for="nama_pelayanan">nama_pelayanan</label><span class="text-danger">&nbsp;*</span>
                        <input type="text" class="form-control" id="nama_pelayanan" name="nama_pelayanan">
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="jenis_pelayanan">jenis_pelayanan</label><span class="text-danger">&nbsp;*</span>
                        <div class="mb-3">
                            <label for="" class="form-label">City</label>
                            <select class="form-select form-select-lg" name="jenis_pelayanan" id="jenis_pelayanan">
                                <option selected disabled>Pilih Jenis Pelayanan</option>
                                <option value="konseling">Konseling</option>
                                <option value="lainnya">Pelayanan Lainnya</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group mt-2 mb-2">
                        <label for="harga">harga</label><span class="text-danger">&nbsp;*</span>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="keterangan">keterangan</label><span class="text-danger">&nbsp;*</span>
                        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer" id="btn-action"></div>
        </div>
    </div>
</div>
