<?php
/*
 * Panel keranjang yang muncul dari kanan.
 * Simpan di: pages/components/side-keranjang.php
 * Dipanggil di navbar.php (sesudah </header>).
 */
?>

<!-- latar gelap + blur di belakang panel -->
<div id="cart-overlay" class="fixed inset-0 z-40 hidden bg-[#2B1A10]/20 backdrop-blur-sm"></div>

<!-- panel keranjang -->
<aside id="cart-drawer"
       class="fixed right-0 top-0 z-50 flex h-full w-full max-w-md translate-x-full flex-col bg-[#FBF8F3] shadow-2xl transition-transform duration-300">

    <!-- kepala -->
    <div class="flex items-start justify-between border-b border-[#E8D5B7] px-8 py-6">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-[#B4583B]">Pesananmu</p>
            <div class="mt-1 flex items-baseline gap-3">
                <h2 class="font-playfair text-3xl text-[#2B2B2B]">Keranjang</h2>
                <span id="cart-label" class="text-xs text-[#2B2B2B]/50">0 item</span>
            </div>
        </div>

        <button id="cart-close" type="button" aria-label="Tutup keranjang"
                class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-[#E8D5B7] bg-white text-[#2B2B2B] transition duration-300 hover:bg-[#EFE2D0]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
            </svg>
        </button>
    </div>

    <!-- isi: kondisi kosong -->
    <div id="cart-empty" class="flex flex-1 flex-col items-center justify-center gap-3 px-8 text-center">
        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#F3E2C7] text-[#B4583B]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/>
            </svg>
        </div>
        <h3 class="font-playfair text-xl font-bold text-[#2B2B2B]">Keranjangmu masih kosong</h3>
        <p class="text-xs text-[#2B2B2B]/50">Pilih roti favorit untuk memulai pesanan.</p>
        <a id="cart-to-menu" href="../books/pemesanan.php"
           class="mt-2 rounded-full bg-[#4A2C17] px-6 py-3 text-xs font-bold text-white transition duration-300 hover:bg-[#70452B]">
            Lihat menu
        </a>
    </div>

    <!-- isi: daftar item (tampil kalau keranjang ada isinya) -->
    <div id="cart-list" class="hidden flex-1 overflow-y-auto px-8 py-6"></div>

    <!-- kaki: total + tombol bayar (tampil kalau keranjang ada isinya) -->
    <div id="cart-footer" class="hidden border-t border-[#E8D5B7] px-8 py-6">
        <div class="flex justify-between text-sm font-bold text-[#2B2B2B]">
            <span>Total</span>
            <span id="cart-total">Rp 0</span>
        </div>
        <a href="../books/keranjang.php"
           class="mt-4 block rounded-full bg-[#4A2C17] py-3 text-center text-sm font-bold text-white transition duration-300 hover:bg-[#70452B]">
            Lanjut bayar
        </a>
    </div>
</aside>

<!-- logika keranjang ada di file JS terpisah -->
<script src="../../assets/js/keranjang.js"></script>