$(document).ready(function () {
    let table = $("#table-konsultasi").DataTable({
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
            url: "/dataTablesJadwal",
            type: "GET",
            data: function (d) {
                d.id = $("#klien").val();
            }
        },
        searching: false,
        columns: [
            {
                data: null,
                orderable: false,
                render: function (data, type, row, meta) {
                    var pageInfo = $("#table-konsultasi").DataTable().page.info();
                    var index = meta.row + pageInfo.start + 1;
                    return index;
                },
            },
            {
                data: "nama",
            },
            {
                data: "nama_pelayanan",
            },
            {
                data: "tanggal",
            },
            {
                data: "nominal",
            },
            {
                data: "status",
                render: function (data, type, row, meta) {
                    if (data == 0) {
                        return type === "display"
                            ? '<button class="badge bg-danger border-0">Menunggu Konfirmasi</button>'
                            : data;
                    } else if (data == 1) {
                        return type === "display"
                            ? '<button class="badge bg-primary border-0">Dikonfirmasi</button>'
                            : data;
                    } else if (data == 2) {
                        return type === "display"
                            ? '<button class="badge bg-info border-0">Rechedule</button>'
                            : data;
                    } else if (data == 3) {
                        return type === "display"
                            ? '<button class="badge bg-success border-0">Selesai</button>'
                            : data;
                    } else if (data == 4) {
                        return type === "display"
                            ? '<button class="badge bg-secondary border-0">Kadaluarsa</button>'
                            : data;
                    }
                },
            },
            {
                data: "hope",
                render: function (data, type, row, meta) {
                    return type === "display"
                        ? `<button class="badge bg-success border-0" title="Lihat Harapan dan Deskripsi" id="view-hope" data-deskripsi="${data[0]}" data-harapan="${data[1]}" data-waktu="${data[2]}"><i class="ri-eye-line"></i></button>`
                        : data;
                }
            },
            {
                data: "action",
                orderable: true,
                searchable: true,
            },
        ],
        columnDefs: [
            {
                targets: [6, 7], // index kolom atau sel yang ingin diatur
                className: "text-center", // kelas CSS untuk memposisikan isi ke tengah
            },
            {
                searchable: false,
                orderable: false,
                targets: 0, // Kolom nomor, dimulai dari 0
            },
        ],
    });

    $("#klien").on("change", function () {
        table.ajax.reload()
    })


    $("#table-konsultasi").on("click", ".button-konfirmasi", function () {
        let unique = $(this).data("unique");
        Swal.fire({
            title: "Apakah Kamu Yakin?",
            text: "Kamu Menkonfirmasi Reservasi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Konfirmasi!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/konfirmasiPemesanan/" + unique,
                    type: "GET",
                    dataType: 'json',
                    success: function (response) {
                        Swal.fire("Success!", response.success, "success");
                        table.ajax.reload()
                    }
                });
            }
        });

    })
    $("#table-konsultasi").on("click", ".button-selesai", function () {
        let unique = $(this).data("unique");
        Swal.fire({
            title: "Apakah Kamu Yakin?",
            text: "Kamu Menyelesaikan Konsultasi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Selesaikan!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/selesaiPemesanan/" + unique,
                    type: "GET",
                    dataType: 'json',
                    success: function (response) {
                        Swal.fire("Success!", response.success, "success");
                        table.ajax.reload()
                    }
                });
            }
        });
    })
    $("#table-konsultasi").on("click", ".button-bukti-bayar", function () {
        let bukti = $(this).data("bukti");
        let modal = $("#modal-bukti-bayar")
        let image = $("#img-bukti-bayar")

        image.attr("src", bukti)
        modal.modal("show")
    })
    // VIEW HARAPAN AND DESKRIPSI
    $("#table-konsultasi").on("click", "#view-hope", function () {
        let harapan = $(this).data("harapan");
        let deskripsi = $(this).data("deskripsi");
        let waktu = $(this).data("waktu");
        $("#card-harapan").html(harapan)
        $("#card-deskripsi").html(deskripsi)
        $("#card-waktu").html(waktu)
        $("#modal-hope").modal("show");
    })
})
