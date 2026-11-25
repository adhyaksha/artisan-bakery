(function () {
    // dihitung dari halaman yang sedang dibuka (views/books/pemesanan.php)
    const ALAMAT = '../process/logic-keranjang.php';

    const drawer  = document.getElementById('cart-drawer');
    const overlay = document.getElementById('cart-overlay');
    const kosong  = document.getElementById('cart-empty');
    const daftar  = document.getElementById('cart-list');
    const kaki    = document.getElementById('cart-footer');
    const total   = document.getElementById('cart-total');
    const label   = document.getElementById('cart-label');

    function rupiah(angka) {
        return 'Rp ' + Number(angka).toLocaleString('id-ID');
    }

    function tampil() {
        overlay.classList.remove('hidden');
        drawer.classList.remove('translate-x-full');
        drawer.removeAttribute('inert');
        document.body.classList.add('overflow-hidden');
    }

    function tutup() {
        overlay.classList.add('hidden');
        drawer.classList.add('translate-x-full');
        drawer.setAttribute('inert', '');
        document.body.classList.remove('overflow-hidden');
    }

    function tombolQty(teks, aksi, id) {
        const b = document.createElement('button');
        b.type = 'button';
        b.textContent = teks;
        b.dataset.aksi = aksi;
        b.dataset.id = id;
        b.className = 'flex h-6 w-6 cursor-pointer items-center justify-center rounded-full border border-[#E8D5B7] bg-white text-xs font-bold text-[#70452B] hover:bg-[#EFE2D0]';
        return b;
    }

    function isi(data) {
        const ada = data.items.length > 0;

        kosong.classList.toggle('hidden', ada);
        daftar.classList.toggle('hidden', !ada);
        kaki.classList.toggle('hidden', !ada);

        label.textContent = data.count + ' item';
        total.textContent = rupiah(data.total);

        daftar.innerHTML = '';
        data.items.forEach(function (it) {
            const baris = document.createElement('div');
            baris.className = 'mb-5 flex items-center justify-between gap-3 text-sm text-[#2B2B2B]';

            const kiri = document.createElement('div');
            const nama = document.createElement('p');
            nama.className = 'font-bold';
            nama.textContent = it.nama;

            const atur = document.createElement('div');
            atur.className = 'mt-2 flex items-center gap-2';
            const jumlah = document.createElement('span');
            jumlah.className = 'min-w-6 text-center text-xs';
            jumlah.textContent = it.jumlah;
            const hapus = document.createElement('button');
            hapus.type = 'button';
            hapus.textContent = 'Hapus';
            hapus.dataset.aksi = 'hapus';
            hapus.dataset.id = it.id_produk;
            hapus.className = 'ml-2 cursor-pointer text-[10px] text-[#B4583B] underline';
            atur.append(tombolQty('−', 'kurang', it.id_produk), jumlah, tombolQty('+', 'tambah', it.id_produk), hapus);
            kiri.append(nama, atur);

            const kanan = document.createElement('span');
            kanan.className = 'font-bold text-[#70452B]';
            kanan.textContent = rupiah(it.subtotal);

            baris.append(kiri, kanan);
            daftar.appendChild(baris);
        });

        const badge = document.getElementById('cart-count');
        if (badge) badge.textContent = data.count;
    }

    function kirim(opsi) {
        return fetch(ALAMAT, opsi).then(function (res) {
            if (!res.ok) throw new Error('HTTP ' + res.status);
            return res.json();
        });
    }

    function gagal(err) {
        console.error('Keranjang gagal dimuat:', err);
        alert('Keranjang gagal dimuat. Cek Console (F12) untuk detailnya.');
    }

    function muatLaluBuka() {
        kirim({ headers: { 'Accept': 'application/json' } })
            .then(function (data) { isi(data); tampil(); })
            .catch(gagal);
    }

    document.addEventListener('click', function (e) {
        const pembuka = e.target.closest('#cart-open, a[href*="keranjang.php"]');
        if (pembuka && !drawer.contains(pembuka)) {
            e.preventDefault();
            muatLaluBuka();
            return;
        }
        if (e.target.closest('#cart-close') || e.target.closest('#cart-to-menu') || e.target === overlay) {
            tutup();
            return;
        }
        // tombol + / − / hapus di dalam panel
        const btn = e.target.closest('[data-aksi]');
        if (btn && daftar.contains(btn)) {
            const fd = new FormData();
            fd.append('aksi', btn.dataset.aksi);
            fd.append('id_produk', btn.dataset.id);
            kirim({ method: 'POST', body: fd, headers: { 'Accept': 'application/json' } })
                .then(isi)
                .catch(gagal);
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') tutup();
    });

    // tombol "+" di kartu menu -> tambah tanpa pindah halaman
    document.addEventListener('submit', function (e) {
        const form = e.target;
        const aksi = form.getAttribute('action');
        if (!aksi || aksi.indexOf('logic-keranjang') === -1) return;

        e.preventDefault();
        kirim({ method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json' } })
            .then(function (data) { isi(data); tampil(); })
            .catch(gagal);
    });

    // isi badge navbar saat halaman dimuat (tanpa buka panel)
    kirim({ headers: { 'Accept': 'application/json' } }).then(isi).catch(function () {});
})();