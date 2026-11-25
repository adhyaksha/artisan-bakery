<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Artisan Bakery</title>
    <link rel="shortcut icon" href="../../assets/img/favicon-rounded.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body class="h-screen w-full bg-[#271812]">
    <div>
        <div class="min-h-screen flex items-center justify-center">
            <div class="w-full max-w-md bg-[#E8D5B7] p-8 rounded-4xl shadow-lg">

                <!-- ini bagian judul login -->
                <section class="pb-5">

                    <div class="flex flex-row items-center pb-10">
                        <img class="h-16 w-16 rounded-xl" src="../../assets/img/roti.png" alt="">
                        <p class="flex-1 font-inria text-[#BC7B3F] font-bold text-2xl text-center">Artisan Bakery</p>
                        <div class="w-16"></div>
                    </div>

                <div class="pb-5">
                    <p class="text-[#2B2B2B]/50 text-xs text-center">Roti segar di panggang setiap hari. Masuk untuk pemesanan <br> & mendapat diskon</p>
                </div>

                <div class="flex items-center gap-3">
                    <hr class="flex-1 border-[#797878]">
                    <p class="text-[#2B2B2B]/50 text-sm font-inter">MASUK</p>
                    <hr class="flex-1 border-[#797878]">
                </div>

                </section>

                <!-- ini bagian main login -->
                <div class="pb-5">
                    <!-- ini bagian input pertama -->
                    <div class="pb-4">
                        <label for="username" class="block text-sm font-inter">Username</label>
                        <input type="text" id="username" placeholder="Masukan Username" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300 ">
                    </div>

                    <!-- ini bagian input dua -->
                    <div class="">
                        <label for="password" class="block text-sm font-inter">Password</label>
                        <input type="text" id="password" placeholder="masukan Password" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300">
                    </div>
                </div>

                <!-- ini bagian button dan kata kata -->
                <div class="">
                    <div class="py-5">
                        <p class="text-[#2B2B2B]/50 text-sm text-center">Masuk untuk mendapat kan diskon & kemudahan dalam <br> setiap pemesaan makanan, minuman</p>
                    </div>

                <form action="../process/logic-login.php" method="POST" class="flex justify-center py-5">
                    <button class="flex items-center bg-[#C18B55] rounded-xl text-sm text-white font-bold py-2 px-5 hover:bg-[#96643B] cursor-pointer duration-300">Masuk ke dalam <img src="../../assets/img/roti-bg.png" alt="" class="w-8 h-8"></button>
                </form>

                <button type="submit" onclick="window.location.href='../books/cerita.php'">hallo</button>

                <div class="">
                    <div class="py-5">
                        <hr class="border-[#797878] w-full">
                    </div>
                    <div class="flex justify-center">
                        <p class="text-[#000000]/50 text-sm">Belum ada akun member? <a href="register.php" class="text-[#B1773E] cursor-pointer text-sm">Daftar dan dapatkan diskon 15%</a></p>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>