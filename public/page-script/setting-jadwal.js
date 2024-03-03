$(document).ready(function () {
    let table = $("#table-jadwal").DataTable({
        processing: true,
        responsive: true,
        responsive: !0,
        language: {
            paginate: {
                previous: "<i class='ri-arrow-left-s-line'>",
                next: "<i class='ri-arrow-right-s-line'>",
            },
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        },
        lengthChange: false,
        autoWidth: false,
        serverSide: true,
        ajax: "/datatableSettingJadwal",
        columns: [
            {
                data: null,
                orderable: false,
                render: function (data, type, row, meta) {
                    var pageInfo = $("#table-jadwal").DataTable().page.info();
                    var index = meta.row + pageInfo.start + 1;
                    return index;
                },
            },
            {
                data: "tanggal",
            },
            {
                data: "jam_awal",
            },
            {
                data: "jam_akhir",
            },
            {
                data: "status",
            },

            {
                data: "action",
                orderable: true,
                searchable: true,
            },
        ],
        columnDefs: [
            {
                targets: [3], // index kolom atau sel yang ingin diatur
                className: "text-left", // kelas CSS untuk memposisikan isi ke tengah
            },
            {
                searchable: false,
                orderable: false,
                targets: 0, // Kolom nomor, dimulai dari 0
            },
        ],
    });
    // nampilin modal
    $("#tambah_jadwal").on('click', function () {
        $("#modal-jadwal").modal('show');
        $("#title-modal").html('Tambah Jadwal');
        $("#btn-action").html(`<button id="simpan_jadwal" type="button" class="btn btn-primary me-md-1 d-flex align-items-center">
        <i class="ri-check-double-line me-1"></i><span>Simpan jadwal</span>
    </button>`)
    })
    // TAMBAH
    $("#modal-jadwal").on("click", "#simpan_jadwal", function () {
        let form = $("form[id='form-jadwal']").serialize()
        $.ajax({
            data: form,
            url: "/simpanSettingjadwal",
            type: "POST",
            dataType: 'json',
            success: function (response) {
                if (response.errors) {
                    displayErrors(response.errors)
                } else {
                    $("#title-modal").html('');
                    $("#btn-action").html('');
                    $("#tanggal").val('');
                    $("#jam_awal").val('');
                    $("#jam_akhir").val('');
                    table.ajax.reload()
                    $("#modal-jadwal").modal('hide');
                    Swal.fire("Good Job!", response.success, "success");
                }
            }
        });
    })
    // GET DATA DULU
    // Edit Data
    $("#table-jadwal").on("click", ".btn-edit-jadwal", function () {
        let unique = $(this).data("unique");
        $.ajax({
            url: "/getSettingJadwal/" + unique,
            type: "get",
            dataType: "json",
            success: function (response) {
                $("#unique").val(response.jadwal.unique);
                $("#tanggal").val(response.jadwal.tanggal);
                $("#jam_awal").val(response.waktu.jam_awal);
                $("#jam_akhir").val(response.waktu.jam_akhir);
                $("#title-modal").html("Edit Jadwal");
                $("#btn-action").html(
                    `<button type="button" class="btn btn-primary" id="update-data">Update Data</button>`
                );
                $("#modal-jadwal").modal("show");
            },
        });
    });
    // update data
    // update setting jadwal
    $("#btn-action").on("click", "#update-data", function () {
        let form = $("form[id='form-jadwal']").serialize();

        $.ajax({
            data: form,
            url: "/updateSettingJadwal",
            type: "POST",
            dataType: "json",
            success: function (response) {
                // Logika untuk menangani respon dari server
                if (response.errors) {
                    // Jika ada kesalahan validasi, tampilkan pesan error
                    displayErrors(response.errors);
                } else if (response.success) {
                    // Jika sukses, reload tabel dan tampilkan pesan sukses
                    table.ajax.reload();
                    $("#unique").val("");
                    $("#tanggal").val("");
                    $("#jam_awal").val("");
                    $("#jam_akhir").val("");
                    $("#modal-jadwal").modal("hide");
                    Swal.fire("Success!", response.success, "success");
                }
            },
            error: function (error) {
                console.error("Error:", error);
            }
        });

    });
    $("#table-jadwal").on("click", ".btn-hapus-jadwal", function () {
        let unique = $(this).data("unique");
        let token = $(this).data("token");
        Swal.fire({
            title: "Apakah Kamu Yakin?",
            text: "Kamu akan menghapus data jadwal!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/deleteJadwal/" + unique,
                    type: "POST",
                    data: {
                        _token: token,
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            table.ajax.reload();
                            Swal.fire("Deleted!", response.success, "success");
                        } else {
                            Swal.fire("Error!", response.error, "error");
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire("Error!", "Terjadi kesalahan saat menghapus data.", "error");
                    },
                });
            }
        });
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
