<?php
include 'database.php';

$action = $_GET['action'] ?? '';

if ($action == 'add') {
    $nama = $_POST['nama'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $pekerjaan = $_POST['pekerjaan'];

    $stmt = $pdo->prepare("INSERT INTO ALUMNII (nama, tahun_lulus, pekerjaan) VALUES (?, ?, ?)");
    $stmt->execute([$nama, $tahun_lulus, $pekerjaan]);
    echo json_encode(['status' => 'success']);
} elseif ($action == 'list') {
    $stmt = $pdo->query("SELECT * FROM ALUMNII ORDER BY id DESC");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
?>
