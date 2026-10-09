<!-- ANNOUNCEMENT BAR / PENGUMUMAN BERJALAN ATAS -->
<div class="bg-gradient-to-r from-amber-500 via-amber-600 to-yellow-600 text-slate-950 px-4 py-2.5 text-xs font-semibold shadow-md relative z-50">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2">
    <div class="flex items-center gap-2 text-center sm:text-left">
      <span class="bg-slate-950 text-amber-400 text-[10px] uppercase font-extrabold px-2 py-0.5 rounded-full tracking-wider animate-pulse">Pengumuman</span>
      <span class="font-bold">📢 <?= e($pengumumanList[0]['judul']) ?> — <?= e($pengumumanList[0]['isi']) ?></span>
    </div>
    <button type="button" id="openPengumumanModal" class="underline hover:text-white font-bold cursor-pointer whitespace-nowrap">
      Lihat Semua Pengumuman (<?= count($pengumumanList) ?>) →
    </button>
  </div>
</div>

<!-- TOP BAR INFORMASI KABUPATEN MESUJI -->
<div class="bg-mesuji-deep text-slate-300 text-xs py-2 px-4 border-b border-white/10 hidden md:block">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <div class="flex items-center gap-6">
      <span class="flex items-center gap-2">📍 Pusat Pemerintahan Tanjung Raya, Kab. Mesuji, Lampung</span>
      <span class="flex items-center gap-2">📞 Layanan: <?= e($cfg['telepon'] ?? '(0726) XXX-XXX') ?></span>
      <span class="flex items-center gap-2">✉️ <?= e($cfg['email'] ?? 'tanjungraya@mesujikab.go.id') ?></span>
    </div>
    <div class="flex items-center gap-3 font-medium">
      <span class="text-amber-400">Kabupaten Mesuji "Bumi Ragab Begawe Caram"</span>
      <span>|</span>
      <a href="https://lapor.go.id" target="_blank" class="hover:text-amber-400 transition">LAPOR!</a>
    </div>
  </div>
</div>
