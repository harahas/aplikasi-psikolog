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
            type: "GET",
            data: function (d) {
                d.matpel = $("#matkul-judul").val();
            },
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
            }
        })
    })
})