$(document).ready(function() {
    // Menangani pengiriman formulir
    $('#alumniForm').submit(function(event) {
        event.preventDefault();  // Mencegah halaman refresh saat formulir disubmit

        // Ambil data dari form
        var nama = $('#nama').val();
        var tahunLulus = $('#tahun_lulus').val();
        var pekerjaan = $('#pekerjaan').val();

        // Tentukan ID (misalnya berdasarkan jumlah alumni yang sudah ada)
        var id = $('#alumniList tr').length + 1;

        // Buat baris baru untuk ditambahkan ke tabel
        var newRow = `<tr>
                        <td>${id}</td>
                        <td>${nama}</td>
                        <td>${tahunLulus}</td>
                        <td>${pekerjaan}</td>
                    </tr>`;

        // Tambahkan baris baru ke tabel
        $('#alumniList').append(newRow);

        // Kosongkan form setelah data berhasil ditambahkan
        $('#alumniForm')[0].reset();
    });
});
