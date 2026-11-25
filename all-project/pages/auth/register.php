<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Artisan Bakery</title>
    <link rel="stylesheet" href="../../assets/css/output.css">
</head>
<body class="h-screen w-full bg-[#271812]">
    <div class="">
        <div class="min-h-screen flex items-center justify-center">
            <div class="w-full max-w-md bg-[#E8D5B7] p-8 rounded-4xl shadow-lg">
                <!-- ini bagian judul login -->
                <div class="">
                    <div class="flex flex-row items-center pb-10">
                        <img class="h-16 w-16 rounded-xl" src="../../assets/img/roti.png" alt="">
                        <p class="flex-1 font-inria text-[#BC7B3F] font-bold text-2xl text-center">Artisan Bakery</p>
                        <div class="w-16"></div>
                    </div>

                    <div class="flex items-center gap-3">
                        <hr class="flex-1 border-[#797878]">
                        <p class="text-[#2B2B2B]/50 text-sm font-inter">silahkan lengkapi data di bawah ini</p>
                        <hr class="flex-1 border-[#797878]">
                    </div>
                </div>

                <!-- ini bagian form register -->
                <form action="../process/logic-submit.php" method="POST" class="mt-8 space-y-5">
                    <!-- bagian nama lengkap -->
                    <div class="">
                        <label for="nama" class="block text-sm font-inter">nama lengkap</label>
                        <input type="text" id="nama" placeholder="masukan nama lengkap" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300">
                    </div>

                    <!-- username -->
                    <div class="">
                        <label for="username" class="block text-sm font-inter">username</label>
                        <input type="text" id="username" placeholder="masukan username" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300">
                    </div>

                    <!-- password -->
                    <div class="">
                        <label for="password" class="block text-sm font-inter">password</label>
                        <input type="text" id="password" placeholder="masukan password" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300">
                    </div>

                    <!-- alamat -->
                    <div class="">
                        <label for="alamat" class="block text-sm font-inter">alamat</label>
                        <input type="text" id="alamat" placeholder="masukan alamat anda" class="border border-[#D3AB63] rounded-xl w-full mt-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#B8863A] focus:border-transparent duration-300">
                    </div>
                </form>

                <!-- ini bagian tombol submit -->
                <form action="../process/logic-submit.php" method="POST" class="pt-5 space-y-2">
                    <div class="">
                        <p class="text-[#2B2B2B]/50 text-center">Pastikan data anda sudah benar!!!</p>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="flex items-center bg-[#C18B55] rounded-xl text-sm text-white font bold py-2 px-5 hover:bg-[#96643B] cursor-pointer duration-300">Input data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>