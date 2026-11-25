<?php
require_once __DIR__ . '/../process/active-ui.php';
require_once __DIR__ . '/../../config/database.php';

$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");

// kalau query gagal, tampilkan penyebabnya (boleh dihapus kalau sudah jalan)
if (!$result) {
    die('Query gagal: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Artisan Bakery</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
    <link rel="shortcut icon" href="../../assets/img/favicon-rounded.png" type="image/x-icon">
</head>

<body>
    <!-- navbar.php sudah memanggil side-keranjang.php di dalamnya, jadi tidak perlu dipanggil lagi di sini -->
    <?php require_once __DIR__ . '/../components/navbar.php'; ?>

    <main>
        <!--main satu-->
        <section class="flex flex-col items-center justify-center bg-[#F8EFE2] py-20">
            <div class="mx-auto flex max-w-6xl flex-col items-center gap-4 px-8">
                <p class="font-playfair text-[#493020] text-5xl text-center">Pilih yang hangat <br> untuk harimu.</p>
                <p class="text-xs text-gray-400">Semua pesanan disiapkan setelah kamu melakukan pemesanan.</p>
            </div>
        </section>

        <!-- main dua -->
        <section>
            <div class="mx-auto max-w-7xl px-4 py-25">
                <div class="">
                    <p class="font-sans text-[#96492a] pb-2 tracking-widest font-semibold">PILIHAN DARI DAPUR KAMI</p>
                    <div class="flex flex-row items-center justify-between pb-5">
                        <p class="font-playfair text-5xl text-[#493020]">Temukan favoritmu</p>
                        <div class="">
                            <img src="" alt="">
                            <input type="text" id="search" placeholder="Cari menu..."  class="border border-gray-300 rounded-full mt-4 px-9 py-2 ">
                        </div>
                    </div>
                </div>

                <!-- TOMBOL FILTER KATEGORI (mini navbar) -->
                <ul id="filter" class="flex flex-row gap-3">
                    <li><button type="button" data-kategori="semua" class="filter-btn cursor-pointer rounded-full border border-[#E8D5B7] bg-[#4A2C17] px-5 py-2 text-xs font-bold text-white transition-colors duration-300">Semua</button></li>
                    <li><button type="button" data-kategori="roti" class="filter-btn cursor-pointer rounded-full border border-[#E8D5B7] px-5 py-2 text-xs font-bold text-[#70452B] transition-colors duration-300 hover:border-[#C18B55]">Roti</button></li>
                    <li><button type="button" data-kategori="pastry" class="filter-btn cursor-pointer rounded-full border border-[#E8D5B7] px-5 py-2 text-xs font-bold text-[#70452B] transition-colors duration-300 hover:border-[#C18B55]">Pastry</button></li>
                    <li><button type="button" data-kategori="minuman" class="filter-btn cursor-pointer rounded-full border border-[#E8D5B7] px-5 py-2 text-xs font-bold text-[#70452B] transition-colors duration-300 hover:border-[#C18B55]">Minuman</button></li>
                </ul>

                <!-- GRID KARTU: 3 kolom, bentuk kartu sama seperti desain Figma -->
                <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="produk-card overflow-hidden rounded-3xl border border-[#E8D5B7] bg-[#FDFBF7]"
                            data-kategori="<?= strtolower(htmlspecialchars($row['kategori'])) ?>">

                            <?php if ($row['foto']): ?>
                                <img src="../../assets/img/<?= htmlspecialchars($row['foto']) ?>"
                                    alt="<?= htmlspecialchars($row['nama']) ?>"
                                    class="h-56 w-full object-cover">
                            <?php else: ?>
                                <div class="h-56 w-full bg-gray-200"></div>
                            <?php endif; ?>

                            <div class="flex flex-col gap-2 p-5">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-[#A97543]"><?= htmlspecialchars($row['kategori']) ?></p>
                                <h3 class="font-playfair text-xl font-bold text-[#2B2B2B]"><?= htmlspecialchars($row['nama']) ?></h3>
                                <p class="text-xs text-[#2B2B2B]/50"><?= htmlspecialchars($row['deskripsi']) ?></p>
                                <div class="flex flex-row items-center justify-between">
                                    <p class="mt-1 text-sm font-bold text-[#70452B]">Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                                        <form action="../process/logic-keranjang.php" method="post">
                                            <!-- WAJIB: memberi tahu PHP produk mana yang diklik -->
                                            <input type="hidden" name="id_produk" value="<?= (int) $row['id_produk'] ?>">
                                            <button type="submit" class="cursor-pointer bg-[#70452B] hover:bg-[#976a4e] text-white px-4 py-2 rounded-full duration-300">+</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </section>


    </main>
    <script src="../../assets/js/script.js"></script>
    <!-- JS keranjang dipanggil langsung di sini supaya pasti ter-load di halaman ini -->
    <script src="../../assets/js/keranjang.js"></script>
</body>
</html>