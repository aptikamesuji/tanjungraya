<!-- BERITA & AKTIVITAS SECTION -->
<section id="berita" class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6" data-aos="fade-up">
      <div>
        <span class="text-emerald-700 font-extrabold text-xs tracking-widest uppercase bg-emerald-100 px-3.5 py-1.5 rounded-lg">Warta Terkini</span>
        <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-mesuji-forest mt-2">Berita &amp; Agenda Kegiatan</h2>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($beritaKecamatan as $index => $bk): ?>
      <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200/80 shadow-xl hover:-translate-y-2 hover:border-amber-400 transition-all duration-300 flex flex-col group" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
        <div class="h-56 relative overflow-hidden bg-slate-900">
          <img src="<?= e($bk['image']) ?>" alt="<?= e($bk['judul']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-90">
          <div class="absolute inset-0 bg-gradient-to-t from-mesuji-deep/60 via-transparent to-transparent"></div>
          <span class="absolute top-4 left-4 bg-amber-500 text-slate-950 font-bold text-xs px-3.5 py-1.5 rounded-xl uppercase tracking-wider shadow-md"><?= e($bk['kategori']) ?></span>
        </div>
        <div class="p-8 flex flex-col flex-1">
          <span class="text-slate-400 text-xs font-semibold mb-2 block">📅 <?= e($bk['tanggal']) ?></span>
          <h3 class="font-display font-bold text-xl text-mesuji-forest group-hover:text-emerald-700 transition mb-3"><?= e($bk['judul']) ?></h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-1"><?= e($bk['deskripsi']) ?></p>
          <span class="font-bold text-sm text-emerald-700 inline-flex items-center gap-1 group-hover:translate-x-1 transition">Baca Selengkapnya →</span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
