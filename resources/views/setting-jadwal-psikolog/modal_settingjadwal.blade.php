<!-- Modal -->
<div class="modal fade" id="modal-jadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-target="#standard-modal">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-3" id="title-modal">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> <!-- end modal header -->
            <div class="modal-body" style="padding:0 2em">
                <form id="form-jadwal" action="javascript:;">
                    {{-- HIDDEN INPUT --}}
                    <input type="hidden" name="unique" id="unique">
                    @csrf
                    {{-- ./HIDDEN INPUT --}}
                    <div class="form-group mt-2 mb-2">
                        <label for="tanggal">Tanggal</label><span class="text-danger">&nbsp;*</span>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="jam_awal">jam</label><span class="text-danger">&nbsp;*</span>
                        <input type="time" class="form-control" id="jam_awal" name="jam_awal">
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="jam_akhir">jam</label><span class="text-danger">&nbsp;*</span>
                        <input type="time" class="form-control" id="jam_akhir" name="jam_akhir">
                    </div>
                </form>
            </div>
            <div class="modal-footer" id="btn-action"></div>
        </div>
    </div>
</div>
