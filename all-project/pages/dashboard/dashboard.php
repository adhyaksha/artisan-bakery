<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dashborad Artisan Bakery</title>
    <link rel="shortcut icon" href="../../assets/img/favicon-rounded.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body class="bg-[#FAF6EF]">
    <header>
    <?php require_once __DIR__ . '/../components/navbar.php'; ?>
    </header>

    <main>
            <!-- main satu -->
        <section id="pertama" class="flex flex-row items-center justify-between max-w-6xl mx-auto min-h-screen">
            <!-- bagian kiri -->
            <div class="flex flex-col gap-6">
                <p class="text-[#C18B55] font-bold text-sm">DIBUAT SEGAR SETIAP HARI</p>
                <p class="text-[#493020] font-playfair text-5xl">Kehangatan kecil di setiap <br> <span class="block text-[#B88A60]">gigitan.</span></p>
                <p class="text-[#2B2B2B]/50 text-sm">Roti artisan, pastry berlapis, dan kopi yang di racik perlahan. <br> Dibuat setiap pagi dengan bahan terbaik untuk menemani harimu.</p>

                <div class="flex items-center gap-9">
                    <a href="../books/pemesanan.php" class="bg-[#70452B] px-4 py-2 rounded-full text-white hover:bg-[#A97543] hover:scale-102 cursor-pointer duration-300">Pesan sekarang →</a>
                    <a href="#tentang" class="text-[#70452B] border-b border-[#C18B55] pb-2">Kenali Kami</a>
                </div>
            </div>

            <!-- bagian kanan -->
            <div class="w-95 h-100 rounded-t-full overflow-hidden">
                <img src="../../assets/img/etalase-roti.jpg" class="h-full w-full object-cover rounded-b-3xl" alt="">
            </div>
        </section>



        <!-- main dua -->
        <section id="kedua" class="">
            <!-- bagian kepala -->
            <div class="mx-auto flex items-center justify-center bg-[#4e260e] px-4 py-4">
                <div class="flex flex-1 items-baseline justify-center gap-2">
                    <p class="text-white/90 font-playfair">24 jam</p>
                    <p class="text-white/50 text-xs">Fermantasi alami</p>
                </div>

                <span class="h-1.5 w-1.5 rounded-full bg-[#C18B55] text-xl"></span>

                <div class="flex flex-1 items-baseline justify-center gap-2">
                    <p class="text-white/90 font-playfair">100%</p>
                    <p class="text-white/50 text-xs">Butter premium</p>
                </div>

                <span class="h-1.5 w-1.5 rounded-full bg-[#C18B55]"></span>

                <div class="flex flex-1 items-baseline justify-center gap-2">
                    <p class="text-white/90 font-playfair text-xl">Setiap hari</p>
                    <p class="text-white/50 text-xs">Selalu dibuat baru</p>
                </div>
            </div>

            <!-- bagian isi -->
            <div class="mx-auto max-w-7xl px-4 py-4 pt-16">
                <div class="">
                    <p class="text-[#70452B] font-sans text-xs">FAVORIT PELANGGAN</p>
                    <div class="flex flex-row items-end justify-between py-3">
                        <p class="font-playfair text-4xl">Pilihan dari dapur kami</p>
                        <a href="../books/pemesanan.php" class="text-[#70452B] border-b border-[#C18B55] pb-2 ">Lihat semua manu →</a>
                    </div>

                    <div class="flex justify-center gap-10 py-3">
                        <!-- card satu -->
                        <div class="overflow-hidden rounded-3xl border border-[#E8D5B7] bg-[#FDFBF7]">
                            
                                <img src="../../assets/img/croisant.png" class="h-64 w-full object-cover" alt="">
                            
                            <div class="flex flex-col gap-2 p-5">
                                <p class="text-xs font-inter font-bold text-[#70452B]">PASTRY</p>
                                <p class="text-3xl font-playfair">Butter Crouisant</p>
                                <p class="text-xs font-inter text-gray-400">Renyah, berlapis, dengan butter premium.</p>
                            </div>
                        </div>

                        <!-- card dua -->
                        <div class=" overflow-hidden rounded-3xl border border-[#E8D5B7] bg-[#FDFBF7]">
                            
                                <img src="../../assets/img/sourdough.png" class="h-64 w-full object-cover" alt="">
                            
                            <div class="flex flex-col gap-2 p-5">
                                <p class="text-xs font-inter text-[#70452B]">ROTI</p>
                                <p class="text-3xl font-playfair">Country Sourdough</p>
                                <p class="text-xs font-inter text-gray-400">Renyah, berlapis, dengan butter premium.</p>
                            </div>
                        </div>


                        <!-- card ketigas -->
                        <div class=" overflow-hidden rounded-3xl border border-[#E8D5B7] bg-[#FDFBF7]">
                            
                                <img src="../../assets/img/croisant-coklat.png" class="h-64 w-full object-cover" alt="">
                            
                            <div class="flex flex-col gap-2 p-5">
                                <p class="text-xs font-inter text-[#70452B]">ROTI</p>
                                <p class="text-3xl font-playfair">Country Sourdough</p>
                                <p class="text-xs font-inter text-gray-400">Renyah, berlapis, dengan butter premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- main 3 -->
        <section id="tentang" class="flex items-center py-20">
            <div class="mx-auto flex w-full max-w-6xl items-center gap-16 px-8">
                <div class=shrink-0">
                    <img src="../../assets/img/main.png" class="h-95 w-102 rounded-t-full rounded-b-3xl object-cover" alt="">
                </div>

                <div class="flex flex-col gap-5">
                    <p class="font-sans text-[#70452B] text-sm tracking-widest">CERITA ARTISAN BAKERY</p>
                    <p class="font-playfair text-5xl">Perlahan dibuat, <br> sepenuh hati</p>
                    <p class="text-gray-400 text-sm">Kami percaya roti yang baik membutuhkan waktu. Setiap adonan dirawat dengan sabar, <br> dibentuk dengan tangan, dan dipanggang dalam jumlah kecil agar selalu sampai dalam <br> kondisi terbaik.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-[#70452B] flex flex-row items-center gap-9 p-5">
        <div class="flex flex-row items-center">
            <img src="../../assets/img/logo-putih.png" class="h-20 w-20" alt="">
            <p class="font-inria font-bold text-2xl text-white">Artisan Bakery</p>
        </div>
        <p class="text-white/50 text-xs">Roti hangat, hari yang lebih baik.</p>
    </footer>
</body>
</html>
