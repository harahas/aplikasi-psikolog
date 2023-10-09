@extends('front-end.template')
@section('template')

    <section id="in-get-quote" class="in-get-quote-section position-relative" data-background="/assets/img/bg/get-qt.jpg">
        <div class="container d-flex justify-content-center" style="margin-top:100px">
            <div class="in-get-quote-content position-relative">
                <div class="in-get-quote-form-area">
                    <div class="in-contact-tab-area">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane animated fadeInUp show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
                                <div class="in-contact-form-title-area">
                                    <div class="form-title headline pera-content">
                                        <h3>Jadwalkan Konsultasi</h3>
                                        <p>Tuliskan data anda</p>
                                    </div>
                                    <div class="in-contact-form">
                                        <form action="/simpan_pelayanan" method="POST">
                                            @csrf
                                            <input type="text" name="nama" id="nama" placeholder="Nama" required>
                                            <textarea style="background-color:#F5F8F8" type="text" name="alamat" id="alamat" class="form-control mb-3 border-0" placeholder="Alamat" required></textarea>
                                            <input type="text" name="no_hp" id="no_hp" placeholder="No Telepon" required>
                                            <input type="date" name="tanggal" id="tanggal" class="mb-0" placeholder="Tanggal Konsultasi" required>
                                            <small class="text-success ms-2 fst-italic">Tanggal Konsultasi</small>
                                            <div class="in-insurance-type in-select position-relative mt-3">
                                                <select name="jenispelayanan" id="jenispelayanan">
                                                    <option value="">Pilih Pelayanan</option>
                                                    <option value="Konseling">Konseling</option>
                                                </select>
                                            </div>
                                            <textarea style="background-color:#F5F8F8" type="text" name="keterangan" id="keterangan" class="form-control mb-3 border-0" placeholder=" Keterangan"></textarea>
                                            <button type="submit">Jadwalkan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp" id="business" role="tabpanel" aria-labelledby="home-tab">
                                <div class="in-contact-form-title-area">
                                    <div class="form-title headline pera-content">
                                        <h3>Business Insurence</h3>
                                        <p>Get zip code to compare Home insurance</p>
                                    </div>
                                    <div class="in-contact-form">
                                        <form action="#" method="get">
                                            <input type="text" name="name" placeholder="Name">
                                            <input type="email" name="email" placeholder="Email">
                                            <div class="in-insurance-type in-select position-relative">
                                                <select>
                                                    <option value="#">Property Type</option>
                                                    <option value="#">Credit Insurance</option>
                                                    <option value="#">Transport Insurance</option>
                                                    <option value="#">Energy Insurance</option>
                                                    <option value="#">Employee Insurance</option>
                                                </select>
                                            </div>
                                            <button type="submit">Jadwalkan Sekarang!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection