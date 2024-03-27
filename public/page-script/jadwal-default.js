$(document).ready(function () {
    let table = $("#table-jadwal").DataTable({
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
        autoWidth: false,
        serverSide: true,
        ajax: {
            url: "/dataTablesJadwalDefault",
        },
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
                data: "jam_awal",
            },
            {
                data: "jam_akhir",
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
                className: "text-center", // kelas CSS untuk memposisikan isi ke tengah
            },
            {
                searchable: false,
                orderable: false,
                targets: 0, // Kolom nomor, dimulai dari 0
            },
        ],
    });

    // nampilin modal
    $("#btn-add-data").on('click', function () {
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
            url: "/jadwal-default",
            type: "POST",
            dataType: 'json',
            success: function (response) {
                if (response.errors) {
                    displayErrors(response.errors)
                } else {
                    $("#title-modal").html('');
                    $("#btn-action").html('');
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
    $("#table-jadwal").on("click", ".edit-button", function () {
        let unique = $(this).data("unique");
        $.ajax({
            url: "/jadwal-default/" + unique + "/edit",
            type: "get",
            dataType: "json",
            success: function (response) {
                $("#unique").val(response.data.unique);
                $("#jam_awal").val(response.data.jam_awal);
                $("#jam_akhir").val(response.data.jam_akhir);
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
            data: form + "&_method=PUT",
            url: "/jadwal-default/" + $("#unique").val(),
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
    $("#table-jadwal").on("click", ".delete-button", function () {
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
                    data: {
                        _token: token,
                        _method: "DELETE"
                    },
                    url: "/jadwal-default/" + unique,
                    type: "POST",
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
});
