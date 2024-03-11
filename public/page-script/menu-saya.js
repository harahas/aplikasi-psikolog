$(document).ready(function () {
    $('#btn-update-profil').on('click', function () {
        $.ajax({
            data: $('form[id="form-update-profil"]').serialize(),
            url: "/updateProfil",
            type: "POST",
            dataType: 'json',
            success: function (response) {
                if (response.errors) {
                    displayErrors(response.errors);
                } else {
                    Swal.fire("Good Job", response.success, "success");
                    setTimeout(function () {
                        document.location.reload();
                    }, 2000)
                }
            }
        });
    });
    $("#table-current-jadwal").on("click", ".reschedule", function () {
        let unique = $(this).data("unique");
        $("#current_unique").val(unique)
        let tanggal_tersedia = $("#tanggal_tersedia").val()
        let newTanggal = tanggal_tersedia.split('/')
        newTanggal.pop()
        flatpickr("#new_tanggal", {
            enable: newTanggal
        });
        $("#modal-reschedule").modal('show');
    })

    $("#modal-reschedule").on("click", "input[name='waktu2[]']", function () {
        let waktu = $("input[name='waktu2[]']:checked")
        if (waktu.length > 0) {
            $("#btn-reschedule").removeAttr("disabled")
        } else {
            $("#btn-reschedule").attr("disabled", "true")
        }
    })

    $("#new_tanggal").on("change", function () {
        $("#btn-reschedule").attr("disabled", "true")
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
