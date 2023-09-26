$(document).ready(function () {
    let table = $("#table-konsultasi").DataTable({
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
        ajax: {
            url: "/datatablesKonsultasi",

        },
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
                data: "tanggal",
            },
            {
                data: "jenispelayanan",
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
                targets: [5], // index kolom atau sel yang ingin diatur
                className: "text-center", // kelas CSS untuk memposisikan isi ke tengah
            },
            {
                searchable: false,
                orderable: false,
                targets: 0, // Kolom nomor, dimulai dari 0
            },
        ],
    });

    let table2 = $("#table-konsultasi-selesai").DataTable({
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
        ajax: {
            url: "/datatablesKonsultasiSelesai",

        },
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
                data: "tanggal",
            },
            {
                data: "jenispelayanan",
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
                targets: [5], // index kolom atau sel yang ingin diatur
                className: "text-center", // kelas CSS untuk memposisikan isi ke tengah
            },
            {
                searchable: false,
                orderable: false,
                targets: 0, // Kolom nomor, dimulai dari 0
            },
        ],
    });

    //KONSUL SELESAI
    $("#table-konsultasi").on("click", ".selesai-button", function () {
        Swal.fire({
            title: 'Apa yakin ingin di selesaikan?',
            text: "Anda akan menyeselsaikan konsultasi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya Selesaikan!'
        }).then((result) => {
            if (result.isConfirmed) {
                $("#spinner").html(loader)
                const unique = $(this).attr("data-unique");
                //req dengan ajax
                $.ajax({
                    data: {
                        unique: unique //kirim data apa
                    },
                    url: "/changeStatus",
                    method: "GET",
                    dataType: "json",
                    success: function (response) {
                        $("#spinner").html("")
                        table.ajax.reload()
                        table2.ajax.reload()
                        Swal.fire(
                            'Done!',
                            'Konsultasi Telah Selesai.',
                            'success'
                        )

                    }
                })

            }
        })



    })
})