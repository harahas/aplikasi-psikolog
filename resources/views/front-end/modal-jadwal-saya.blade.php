<div class="modal fade" id="modal-reschedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <h5>Reschedule Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/reschedule-jadwal" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 d-flex">
                            <div class="form-gorup">
                                <div class="mb-3">
                                    <input type="hidden" id="current_unique" name="unique_reservasi">
                                    <label for="new_tanggal">Pilih Tanggal</label>
                                    <input type="text" class="form-control" name="new_tanggal" id="new_tanggal" required>
                                    <div class="form-group">
                                        <label>Pilih Waktu:</label>
                                        <div id="waktu"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-reschedule" disabled="true">Reschedule</button>
                </div>
            </form>
        </div>
    </div>
</div>
