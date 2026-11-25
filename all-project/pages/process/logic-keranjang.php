<?php
session_start();
require_once __DIR__ . '/../../config/database.php';

header('Content-Type: application/json');

if (!isset($_SESSION['keranjang']) || !is_array($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

// 1. ubah keranjang: tambah / kurang / hapus
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_produk'])) {
    $id   = (int) $_POST['id_produk'];
    $aksi = $_POST['aksi'] ?? 'tambah';

    if ($aksi === 'tambah') {
        $cek = mysqli_prepare($conn, "SELECT id_produk FROM produk WHERE id_produk = ?");
        mysqli_stmt_bind_param($cek, 'i', $id);
        mysqli_stmt_execute($cek);
        mysqli_stmt_store_result($cek);

        if (mysqli_stmt_num_rows($cek) > 0) {
            $_SESSION['keranjang'][$id] = ($_SESSION['keranjang'][$id] ?? 0) + 1;
        }
    } elseif ($aksi === 'kurang' && isset($_SESSION['keranjang'][$id])) {
        $_SESSION['keranjang'][$id]--;
        if ($_SESSION['keranjang'][$id] <= 0) {
            unset($_SESSION['keranjang'][$id]);
        }
    } elseif ($aksi === 'hapus') {
        unset($_SESSION['keranjang'][$id]);
    }
}

// 2. susun isi keranjang untuk panel
$items = [];
$total = 0;

foreach ($_SESSION['keranjang'] as $id => $jumlah) {
    $stmt = mysqli_prepare($conn, "SELECT nama, harga FROM produk WHERE id_produk = ?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $p = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

    if ($p) {
        $subtotal = $p['harga'] * $jumlah;
        $total += $subtotal;
        $items[] = [
            'id_produk' => (int) $id,   // <- baru: dipakai tombol di panel
            'nama'      => $p['nama'],
            'jumlah'    => $jumlah,
            'subtotal'  => $subtotal,
        ];
    }
}

echo json_encode([
    'items' => $items,
    'total' => $total,
    'count' => array_sum($_SESSION['keranjang']),
]);