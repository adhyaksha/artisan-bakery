<script>
    const tombol = document.querySelectorAll('.filter-btn');

    tombol.forEach(function (btn) {
        btn.addEventListener('click', function () {
            // 1. semua tombol dibikin "tidak aktif"
            tombol.forEach(function (b) {
                b.classList.remove('bg-[#4A2C17]', 'text-white');
                b.classList.add('text-[#70452B]');
            });

            // 2. tombol yang diklik dibikin "aktif"
            btn.classList.remove('text-[#70452B]');
            btn.classList.add('bg-[#4A2C17]', 'text-white');
        });
    });
</script>