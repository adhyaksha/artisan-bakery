<?php require_once __DIR__ . '/process/active-ui.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body>
    <header class="bg-[#F5EDE3] px-8 py-3">
    <div class="flex items-center">

        <!-- KIRI: logo -->
        <a href="../dashboard/dashboard.php" class="flex flex-1 items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-full border border-[#4A2C17]">
                <img src="../../assets/img/cup.svg" alt="" class="h-5 w-5">
            </div>
            <span class="font-playfair text-xl text-[#A9614B]">Amour Corner</span>
        </a>

        <!-- TENGAH: menu berbentuk pil -->
        <nav class="rounded-full border border-[#E8D5B7] bg-[#EFE2D0] p-1 shadow-sm">
            <ul class="flex items-center gap-1">
                <?php foreach ($menu as $file => $nama): ?>
                    <li>
                        <a href="<?= $file ?>"
                           class="block rounded-full px-5 py-2 text-xs transition-colors duration-300
                           <?= $halaman === basename($file)
                                ? 'bg-[#4A2C17] font-bold text-white'
                                : 'text-[#2B2B2B]/60 hover:text-[#2B2B2B]' ?>">
                            <?= $nama ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- KANAN: keranjang saja -->
        <div class="flex flex-1 items-center justify-end">
            <a href="../books/keranjang.php" class="flex h-10 items-center gap-2 rounded-full border border-[#E8D5B7] bg-[#FBF8F3] px-3 transition duration-300 hover:bg-[#EFE2D0]">
                <img src="../../assets/img/bag.svg" alt="Keranjang" class="h-4 w-4">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#2B1A10] text-[10px] font-bold text-white">2</span>
            </a>
        </div>

    </div>
</header>
</body>
</html>