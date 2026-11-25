<?php require_once __DIR__ . '/../process/active-ui.php'; ?>

<header class="flex flex-row border-b border-[#70452B] bg-[#E8D5B7] p-5 ">
    <div class="flex flex-1 flex-row items-center justify-center gap-5">
        <img class="h-13 w-13 rounded-xl" src="../../assets/img/roti.png" alt="">
        <p class="flex-1 font-inria text-[#BC7B3F] font-bold text-2xl">Artisan Bakery</p>
    </div>

    <nav class="flex flex-1 items-center justify-center">
        <ul class="flex flex-row gap-5">
            <?php foreach ($menu as $file => $nama): ?>
                <li>
                    <a href="<?= $file ?>" class="border-b-2 pb-1 transition-colors duration-300 <?= $halaman === basename($file) ? 'border-[#BC7B3F] text-[#BC7B3F]' : 'border-transparent text-[#2B2B2B]/50 hover:text-[#BC7B3F]' ?>"><?= $nama ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="flex flex-1 flex-row items-center justify-center gap-10">
        <form action="" method="POST" class="flex flex-row items-center justify-center gap-3 cursor-pointer hover:bg-[#d6af88]/50 py-1.5 px-3 rounded-full duration-300">
            <img class="h-8 w-8" src="../../assets/img/account.png" alt="">
            <p class="text-sm text-[#2B2B2B]/50 hover:text-white duration-300">account</p>
        </form>

        <!-- tombol keranjang: id="cart-open" yang dicari keranjang.js untuk membuka panel -->
        <button type="button" id="cart-open" class="cursor-pointer">
            <img class="w-9 h-9" src="../../assets/img/keranjang.png" alt="Keranjang">
        </button>
    </div>
</header>

<?php require_once __DIR__ . '/side-keranjang.php'; ?>