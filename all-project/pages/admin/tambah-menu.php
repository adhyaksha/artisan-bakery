<?php
include '../../config.php';
// TODO: nanti tambahin cek login admin (session) di sini

$pesan = '';
$kategori_valid = ['roti', 'pastry', 'minuman'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama      = trim($_POST['nama']);
    $kategori  = $_POST['kategori'];
    $harga     = (int) $_POST['harga'];
    $deskripsi = trim($_POST['deskripsi']);
    $foto      = null;

    if (!in_array($kategori, $kategori_valid)) {
        $pesan = 'Kategori tidak valid.';
    }

    // upload foto (opsional)
    if ($pesan === '' && !empty($_FILES['foto']['name'])) {
        $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
            $foto = uniqid('menu_') . '.' . $ext;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../../uploads/' . $foto);
        } else {
            $pesan = 'Format foto harus jpg, png, atau webp.';
        }
    }

    if ($pesan === '') {
        $stmt = mysqli_prepare($conn, "INSERT INTO menu (nama, kategori, harga, deskripsi, foto) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssiss", $nama, $kategori, $harga, $deskripsi, $foto);
        mysqli_stmt_execute($stmt);
        $pesan = 'Menu berhasil ditambahkan!';
    }
}
?>

<form method="POST" enctype="multipart/form-data" class="max-w-md mx-auto p-4 flex flex-col gap-3">
  <?php if ($pesan): ?><p><?= htmlspecialchars($pesan) ?></p><?php endif; ?>

  <input type="text" name="nama" placeholder="Nama menu" required class="border rounded p-2">

  <select name="kategori" required class="border rounded p-2">
    <option value="roti">Roti</option>
    <option value="pastry">Pastry</option>
    <option value="minuman">Minuman</option>
  </select>

  <input type="number" name="harga" placeholder="Harga (contoh: 25000)" required class="border rounded p-2">
  <textarea name="deskripsi" placeholder="Deskripsi singkat" class="border rounded p-2"></textarea>
  <input type="file" name="foto" accept="image/*">

  <button type="submit" class="bg-[#4A2C17] text-white rounded p-2">Tambah Menu</button>
</form