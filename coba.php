<?php
//Menangkap data dari form
$nama = $_POST ['nama'];
$umur = $_POST ['umur'];

//Menampilkan data yang dikirimkan
echo "Nama Anda:".htmlspecialchars ($nama). "<br>";
echo "Umur Anda:".htmlspecialchars ($umur). "tahun";
?>

$makananFavorit = ["Nasi Goreng","Sate","Bakso"]; //Array numerik
$dataDiri = [
    "nama" => "Nuryani",
    "umur" => 19,
    "hobi" => "Menyanyi"
    ]; // Array asosiatif

<?php
$a = 5;
$b = 10;

// Melakukan penjumlahan dan mencetak hasilnya dalam string
echo "Hasil dari penjumlahan $a dan $b adalah " . ($a + $b) . "."; 
?>