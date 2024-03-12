<div class="modal fade" id="modal-reschedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <h5>Reschedule Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/reschedule-jadwal" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 d-flex">
                            <div class="form-gorup">
                                <input type="hidden" id="current_unique" name="unique_reservasi">
                                <input type="hidden" id="current_sesi">
                                <input type="hidden" id="new_sesi">
                                <input type="hidden" id="current_nominal">
                                <input type="hidden" id="new_nominal" name="new_nominal">
                                <div class="mb-3">
                                    <label for="new_tanggal">Pilih Tanggal</label>
                                    <input type="text" class="form-control" name="new_tanggal" id="new_tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label>Pilih Waktu:</label>
                                    <div id="waktu"></div>
                                </div>
                                <div class="mb-3 d-none" id="bukti-bayar">
                                    <label for="bukti_bayar">Bukti Bayar</label>
                                    <input type="file" class="form-control" name="bukti_bayar" id="bukti_bayar">
                                    <small class="text-info" style="font-style: italic">Karna anda mereschedule melebihi sesi sebelumnya. Maka, silahkan upload sisa pembayaranya</small>
                                </div>
                                <div id="sisa-bayar"></div>
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
