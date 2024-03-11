$(document).ready(function () {
    // ATUR JADWAL USER
    //KETIKA TANGGAL BERUBAH
    $("#tanggal").on("change", function () {
        let waktu = $("#waktu")
        let tanggal = $(this).val()
        $.ajax({
            data: { tanggal: tanggal },
            url: "/getWaktu",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                let jam = `

                    `
                if (response.waktu.length > 0) {

                    response.waktu.forEach(function (a) {
                        jam += `<label class="btn">
                            <input type="checkbox" value="${a.unique}" name="waktu2[]" id="waktu2">&nbsp;${a.jam_awal} - ${a.jam_akhir}
                        </label><br>`
                    })
                } else {
                    jam += `<span class="text-danger">Tidak Ada Jadwal Untuk Konseling, Silahkan pilih tanggal lain!</span>`
                }
                waktu.html(jam)
            }
        });
    })
    $("#btn-next1").on("click", function () {
        if ($("input[name='waktu2[]']").prop('checked') == false) {
            Swal.fire("Warning!", "Silahkan pilih waktu konsultasi terlebih dahulu!", "warning");
            $("#pills-contact-tab").attr("disabled", "true");
        } else {
            $.ajax({
                data: $("form[id='form-update-profil']").serialize(),
                url: "/cekValidasiKonsul",
                type: "GET",
                dataType: 'json',
                success: function (response) {
                    if (response.errors) {
                        $("#pills-contact-tab").attr("disabled", "true");
                        displayErrors(response.errors);
                    } else {
                        $("#pills-contact").addClass("show active");
                        $("#pills-contact-tab").addClass("active");
                        $("#pills-profile").removeClass("show active");
                        $("#pills-profile-tab").removeClass("active");
                        $("#pills-contact-tab").removeAttr("disabled");
                    }
                }
            });
        }
    })
    $("#waktu").on("click", "[name='waktu2[]']", function () {
        let waktu = $("input[name='waktu2[]']:checked")
        let harga = parseInt($("#harga-sesi").val())
        let jumlah_sesi = $("#jumlah_sesi")
        let sesi = $("input[name='sesi']")
        if (waktu.length > 0) {
            $("#harga").val(
                new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0,
                })
                    .format(harga * waktu.length)
                    .replace(/\./g, ",")
            )
            jumlah_sesi.html(waktu.length)
            sesi.val(waktu.length)
            $("#total_bayar").html(
                new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0,
                })
                    .format(harga * waktu.length)
                    .replace(/\./g, ",")
            )
        } else {
            $("#harga").val(harga)
        }
    })
    let tanggal_tersedia = $("#tanggal-tersedia").val()
    let newTanggal = tanggal_tersedia.split('/')
    newTanggal.pop()
    flatpickr("#tanggal", {
        enable: newTanggal
    });
    //Hendler Error
    function displayErrors(errors) {
        // menghapus class 'is-invalid' dan pesan error sebelumnya
        $("input.form-control").removeClass("is-invalid");
        $("select.form-control").removeClass("is-invalid");
        $("div.invalid-feedback").remove();

        // menampilkan pesan error baru
        $.each(errors, function (field, messages) {
            let inputElement = $("input[name=" + field + "]");
            let selectElement = $("select[name=" + field + "]");
            let textAreaElement = $("textarea[name=" + field + "]");
            let feedbackElement = $(
                '<div class="invalid-feedback ml-2"></div>'
            );

            $(".btn-close").on("click", function () {
                inputElement.each(function () {
                    $(this).removeClass("is-invalid");
                });
                textAreaElement.each(function () {
                    $(this).removeClass("is-invalid");
                });
                selectElement.each(function () {
                    $(this).removeClass("is-invalid");
                });
            });

            $.each(messages, function (index, message) {
                feedbackElement.append(
                    $('<p class="p-0 m-0 text-center">' + message + "</p>")
                );
            });

            if (inputElement.length > 0) {
                inputElement.addClass("is-invalid");
                inputElement.after(feedbackElement);
            }

            if (selectElement.length > 0) {
                selectElement.addClass("is-invalid");
                selectElement.after(feedbackElement);
            }
            if (textAreaElement.length > 0) {
                textAreaElement.addClass("is-invalid");
                textAreaElement.after(feedbackElement);
            }
            inputElement.each(function () {
                if (inputElement.attr("type") == "text" || inputElement.attr("type") == "number") {
                    inputElement.on("click", function () {
                        $(this).removeClass("is-invalid");
                    });
                    inputElement.on("change", function () {
                        $(this).removeClass("is-invalid");
                    });
                } else if (inputElement.attr("type") == "date") {
                    inputElement.on("change", function () {
                        $(this).removeClass("is-invalid");
                    });
                } else if (inputElement.attr("type") == "password") {
                    inputElement.on("click", function () {
                        $(this).removeClass("is-invalid");
                    });
                } else if (inputElement.attr("type") == "email") {
                    inputElement.on("click", function () {
                        $(this).removeClass("is-invalid");
                    });
                }
            });
            textAreaElement.each(function () {
                textAreaElement.on("click", function () {
                    $(this).removeClass("is-invalid");
                });
            });
            selectElement.each(function () {
                selectElement.on("click", function () {
                    $(this).removeClass("is-invalid");
                });
            });
        });
    }
});
