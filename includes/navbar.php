<!-- NAVBAR UTAMA DINAMIS -->
<header id="navbar" class="sticky top-0 z-40 transition-all duration-300 bg-mesuji-forest/95 backdrop-blur-md border-b border-white/10 shadow-2xl">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    <a href="#" class="flex items-center gap-3 group">
      <div class="w-12 h-12 rounded-2xl bg-amber-500/10 flex items-center justify-center border border-amber-500/30 group-hover:scale-105 transition duration-300">
        <img src="<?= e($cfg['logo'] ?? '') ?>" alt="Logo Mesuji" class="w-8 h-8 object-contain" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/b/b5/Coat_of_arms_of_Mesuji_Regency.png'">
      </div>
      <div>
        <span class="block font-display font-extrabold text-white text-base tracking-wide group-hover:text-amber-400 transition">Kecamatan Tanjung Raya</span>
        <span class="block text-xs text-amber-300/80 font-medium tracking-wider uppercase">Kabupaten Mesuji — Lampung</span>
      </div>
    </a>

    <nav class="hidden lg:flex items-center gap-1">
      <a href="#" class="px-3 py-2 rounded-xl text-sm font-semibold text-amber-400 bg-white/5 border border-white/5">Beranda</a>
      <a href="#profil" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Profil Camat</a>
      <a href="#layanan" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Layanan</a>
      <a href="#wilayah" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Wilayah Desa</a>
      <a href="#infografis" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Penduduk</a>
      <a href="#galeri" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Galeri</a>
      <a href="#berita" class="px-3 py-2 rounded-xl text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 transition">Berita</a>
    </nav>

    <div class="hidden lg:flex items-center gap-3">
      <a href="#kontak" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-extrabold px-6 py-2.5 rounded-xl text-sm shadow-lg shadow-amber-500/20 transform hover:-translate-y-0.5 transition duration-300">
        Hubungi Kami
      </a>
    </div>

    <button id="mobileMenuBtn" class="lg:hidden text-white p-2 focus:outline-none">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>

  <div id="mobileMenu" class="hidden lg:hidden bg-mesuji-deep border-b border-white/10 px-6 py-6 space-y-3 shadow-2xl max-h-[80vh] overflow-y-auto">
    <a href="#" class="block text-amber-400 font-bold py-2">Beranda</a>
    <a href="#profil" class="block text-slate-300 hover:text-white py-2 mobile-link">Profil Camat</a>
    <a href="#layanan" class="block text-slate-300 hover:text-white py-2 mobile-link">Layanan Publik</a>
    <a href="#wilayah" class="block text-slate-300 hover:text-white py-2 mobile-link">Wilayah Desa &amp; Kelurahan</a>
    <a href="#infografis" class="block text-slate-300 hover:text-white py-2 mobile-link">Infografis Penduduk</a>
    <a href="#galeri" class="block text-slate-300 hover:text-white py-2 mobile-link">Galeri Kegiatan</a>
    <a href="#berita" class="block text-slate-300 hover:text-white py-2 mobile-link">Berita &amp; Agenda</a>
    <a href="#kontak" class="block text-center bg-amber-500 text-slate-950 font-bold py-3 rounded-xl mt-4">Hubungi Kami</a>
  </div>
</header>
