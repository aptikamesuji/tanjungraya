<!-- INFOGRAFIS KEPENDUDUKAN SECTION -->
<section id="infografis" class="py-24 bg-gradient-to-br from-mesuji-deep via-mesuji-forest to-mesuji-deep text-white relative overflow-hidden mesuji-pattern">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
      <span class="text-amber-400 font-extrabold text-xs tracking-widest uppercase bg-amber-500/10 border border-amber-500/30 px-3.5 py-1.5 rounded-full">Statistik Demografi</span>
      <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white mt-3">Infografis Penduduk Tanjung Raya</h2>
      <p class="text-slate-300 mt-3 text-base">Data rekapitulasi kependudukan real-time untuk mendukung perencanaan program pembangunan daerah yang tepat sasaran.</p>
    </div>

    <?php
    // Mapping label supaya tidak menulis 4 blok kartu yang identik strukturnya.
    $statList = [
        ['nilai' => $infografis['total_penduduk'], 'label' => 'Total Jiwa Terdaftar'],
        ['nilai' => $infografis['jumlah_kk'], 'label' => 'Kepala Keluarga (KK)'],
        ['nilai' => $infografis['laki_laki'], 'label' => 'Penduduk Laki-Laki'],
        ['nilai' => $infografis['perempuan'], 'label' => 'Penduduk Perempuan'],
    ];
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php foreach ($statList as $index => $s): ?>
      <div class="glass-card p-8 rounded-3xl text-center shadow-xl border-white/10" data-aos="zoom-in" data-aos-delay="<?= ($index + 1) * 100 ?>">
        <span class="block text-4xl lg:text-5xl font-extrabold text-amber-400 font-display mb-2"><?= e($s['nilai']) ?></span>
        <span class="text-xs text-slate-300 uppercase tracking-widest font-bold"><?= e($s['label']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
