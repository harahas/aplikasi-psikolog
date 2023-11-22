$(document).ready(function () {
    $("#next-1").on("click", function () {
        let formdata = $('#basictab1 form').serializeArray();
        let data = {}
        $(formdata).each(function (index, obj) {
            data[obj.name] = obj.value;
        });

        $.ajax({
            data: $('#basictab1 form').serialize(),
            url: "/registerUser",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                if (response.errors) {
                    displayErrors(response.errors);
                } else {
                    let data = response.success;
                    let container = $("#data-input");
                    for (var key in data) {
                        if (data.hasOwnProperty(key)) {
                            // Membuat elemen input menggunakan jQuery
                            var inputElement = $('<input>').attr({
                                type: 'hidden', // Anda dapat mengganti ini sesuai kebutuhan (text, password, dll.)
                                value: data[key],
                                name: key // Menambahkan atribut name sesuai dengan nama properti objek
                            });

                            // // Membuat label (opsional) menggunakan jQuery
                            // var labelElement = $('<label>').text(key + ': ');

                            // Menambahkan elemen input dan label ke dalam div container menggunakan jQuery
                            // container.append(labelElement);
                            container.append(inputElement);

                            // Menambahkan spasi antara setiap elemen input menggunakan jQuery
                            container.append('<br>');
                        }
                    }
                    $("#basictab1").removeClass("active");
                    $("#basictab2").addClass("active");
                    $("#tab1").removeClass("show active");
                    $("#tab2").addClass("show active");
                    $("#tab2").removeClass("disabled");
                }
            }
        });

    })
    $("#next-2").on("click", function () {
        let formdata = $('#basictab2 form').serializeArray();
        let data = {}
        $(formdata).each(function (index, obj) {
            data[obj.name] = obj.value;
        });

        $.ajax({
            data: $('#basictab2 form').serialize(),
            url: "/registerUser2",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                if (response.errors) {
                    displayErrors(response.errors);
                } else {
                    let data = response.success;
                    let container = $("#data-input2");
                    for (var key in data) {
                        if (data.hasOwnProperty(key)) {
                            // Membuat elemen input menggunakan jQuery
                            var inputElement = $('<input>').attr({
                                type: 'hidden', // Anda dapat mengganti ini sesuai kebutuhan (text, password, dll.)
                                value: data[key],
                                name: key // Menambahkan atribut name sesuai dengan nama properti objek
                            });

                            // Membuat label (opsional) menggunakan jQuery
                            // var labelElement = $('<label>').text(key + ': ');

                            // Menambahkan elemen input dan label ke dalam div container menggunakan jQuery
                            // container.append(labelElement);
                            container.append(inputElement);

                            // Menambahkan spasi antara setiap elemen input menggunakan jQuery
                            container.append('<br>');
                        }
                    }
                    $("#basictab2").removeClass("active");
                    $("#basictab3").addClass("active");
                    $("#tab2").removeClass("show active");
                    $("#tab3").addClass("show active");
                    $("#tab3").removeClass("disabled");
                }
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
    // simpan data register
    $("#btnsimpan").on("click", function () {
        let formdata = $('form[id="simpan-data"] ').serializeArray();
        let data = {}
        $(formdata).each(function (index, obj) {
            data[obj.name] = obj.value;
        });
        let register = $('form[id="simpan-data"] ').serialize();
        console.log(register);
        // $.ajax({
        //     data:
        //         url: "",
        //     type: "",
        //     dataType: 'json',
        //     success: function (response) {
        //         if (response.errors) {
        //             displayErrors(response.errors);
        //         } else {
        //             table.ajax.reload();
        //             $("#modal-pelatih").modal("hide");
        //             Swal.fire("Good job!", response.success, "success");
        //         }
        //     }
        // });
    });
})