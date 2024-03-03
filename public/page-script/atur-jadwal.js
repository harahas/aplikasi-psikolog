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
                        <input type="radio" value="${a.unique}" name="waktu" id="waktu2">&nbsp;${a.jam_awal} - ${a.jam_akhir}
                    </label>`
                    })
                } else {
                    jam += `<span class="text-danger">Tidak Ada Jadwal Untuk Konseling, Silahkan pilih tanggal lain!</span>`
                }
                waktu.html(jam)
            }
        });
    })
});
