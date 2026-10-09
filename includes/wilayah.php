<!-- WILAYAH DESA & KELURAHAN SECTION -->
<section id="wilayah" class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
      <span class="text-emerald-700 font-extrabold text-xs tracking-widest uppercase bg-emerald-100 px-3.5 py-1.5 rounded-full">Administrasi Wilayah</span>
      <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-mesuji-forest mt-3">Direktori Desa &amp; Kelurahan</h2>
      <p class="text-slate-600 mt-3 text-base">Kecamatan Tanjung Raya membawahi berbagai desa mandiri dan produktif yang siap melayani warga.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php foreach ($wilayahList as $index => $w): ?>
      <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-lg hover:border-amber-400 hover:-translate-y-1 transition duration-300 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
        <div>
          <div class="flex items-center justify-between mb-4">
            <span class="w-12 h-12 rounded-2xl bg-mesuji-forest text-amber-400 font-bold flex items-center justify-center text-lg shadow-md">🏡</span>
            <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full uppercase tracking-wider"><?= e($w['tipe']) ?></span>
          </div>
          <h3 class="font-display font-bold text-xl text-mesuji-forest mb-2"><?= e($w['nama']) ?></h3>
          <p class="text-slate-500 text-sm mb-4">Kawasan terintegrasi di bawah administrasi Kecamatan Tanjung Raya.</p>
        </div>
        <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-semibold">
          <span class="text-slate-600">Populasi: <strong class="text-mesuji-forest"><?= e($w['penduduk']) ?></strong></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
