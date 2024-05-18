function getWilayah(nama, id, tujuan){
    console.log(window.location.origin);
// Mengirim permintaan AJAX ke server
    $.ajax({
        //url: '/'+nama+'/' + id + '/'+tujuan+'',
        url : ''+window.location.origin+'/wilayah.php?link='+nama+'&id='+id,
        method: 'GET',
        dataType: 'json', // Jika respons adalah JSON, pastikan ini disesuaikan
        success: function(data) {
            // Membersihkan opsi sebelum menambahkan yang baru
            $('#'+ nama).empty();
            $('#' + nama).append('<option value="">-- Pilih --</option>');
            // Menambahkan opsi ke elemen dengan ID 'kabupaten' berdasarkan respons JSON
            $.each(data, function(index, element) {
                // Membuat nama elemen ID dengan menggunakan nilai dari variabel tujuan
                var idElement = "id" + tujuan;
                var namaElement = "nama" + tujuan;
                
                // Membuat elemen <option> dengan nilai dan teks berdasarkan variabel idElement dan namaElement
                var option = $('<option>', {
                    value: element[idElement],
                    text: element[namaElement]
                });
                // Menambahkan elemen <option> ke elemen dengan ID 'kabupaten'
                $('#' + nama).append(option);
            });
        },
        error: function(xhr, status, error) {
            // Menangani kesalahan jika ada
            console.error(error);
        }
    });
}
