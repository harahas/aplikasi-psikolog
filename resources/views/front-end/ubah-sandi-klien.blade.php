<!-- Modal -->
<div class="modal fade" id="modal-ubah-password-klien" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-3" id="title-modal">Ubah Password</h5>
                <button type="button" class="btn-close btn-close-password" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> <!-- end modal header -->
            <div class="modal-body" style="padding:0 2em">
                <div class="row mt-2 mb-2">
                    <div class="col-12">
                        <form action="javascript:;" id="form-ubah-password-klien">
                            @csrf
                            <input type="hidden" name="no_hp" value="{{ session('klien')->no_hp }}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="new_password">New Password &nbsp;<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="new_password" id="new_password">
                                        <span class="input-group-text" style="border: 1px solid rgb(180, 180, 180); cursor:pointer" id="eye"><i class="far fa-eye"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="confirm_password">Konfirmasi Password &nbsp;<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                                        <span class="input-group-text" style="border: 1px solid rgb(181, 181, 181); cursor:pointer" id="eye2"><i class="far fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer" id="btn-action">
                <button type="button" class="btn btn-primary btn-sm" id="btn-change-password-klien">Ubah Password</button>
            </div>
        </div>
    </div>
</div>
