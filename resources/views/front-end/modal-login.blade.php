<!-- Modal -->
<style>
    /* CSS untuk membuat tombol dengan latar belakang gradient */
    .gradient-button {
        background: linear-gradient(to right, #045F4E, #2e2e2e);
        border: none;
        color: #fff;
        /* warna teks */
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-position 0.3s ease;
        /* animasi transisi */
        background-size: 200% 100%;
        /* ukuran latar belakang sebelum animasi */
    }

    .gradient-header {
        background: linear-gradient(to right, #045F4E, #2e2e2e);
        border: none;
        color: #fff;
        /* warna teks */
        padding: 10px 20px;
        text-decoration: none;
        font-size: 16px;
        border-radius: 2px;
        transition: background-position 0.3s ease;
        /* animasi transisi */
        background-size: 200% 100%;
        /* ukuran latar belakang sebelum animasi */
    }


    /* Animasi hover */
    .gradient-button:hover {
        background-position: right center;
        color: #fff;
        /* posisi latar belakang setelah animasi hover */
    }

    .bulet {
        height: 10vh;
        background-color: #045F4E;
    }

    .img-tengah {
        position: absolute;
        left: 40%;
        top: -30px;
    }

</style>
<div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <div class="img-tengah">
                    <img src="/img/logo.jpg" width="80vh" class="img-thumbnail rounded-circle" alt="">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff"></button>
            </div>
            <div class="modal-body ">
                <div class="error"></div>
                <form action="javascript:;" id="form-login">
                    @csrf
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Handphone</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukan No Handphone">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="gradient-button text-white rounded-pill" id="btn-login">Login</button>
                        <a href="/register_user" class="btn btn-outline-success rounded-pill">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
