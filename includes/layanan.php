<!-- LAYANAN KECAMATAN SECTION -->
<section id="layanan" class="py-24 bg-[#FBF9F5] text-slate-900 relative border-y border-amber-900/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6" data-aos="fade-up">
      <div>
        <span class="text-amber-800 font-bold text-xs tracking-widest uppercase block mb-2">Kemudahan Akses</span>
        <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-[#0F2C1E]">Layanan Kecamatan</h2>
      </div>
      <div class="flex items-center gap-4">
        <p class="text-slate-600 text-sm max-w-sm">
          Berbagai pengurusan dokumen dan perizinan terpadu dengan standar operasional baku kantor kecamatan.
        </p>
        <a href="#kontak" class="hidden sm:inline-flex text-xs font-bold text-[#0F2C1E] hover:text-amber-600 items-center gap-1 whitespace-nowrap">
          Selengkapnya →
        </a>
      </div>
    </div>

    <?php
    // Data kartu layanan ditaruh sebagai array supaya tidak copy-paste HTML 4x.
    $layananList = [
        ['badge' => 'Kependudukan', 'judul' => 'Surat Pengantar KTP & KK', 'desk' => 'Pengurusan surat pengantar resmi untuk pembuatan baru, perubahan data, maupun pencetakan ulang KTP elektronik dan Kartu Keluarga warga.', 'estimasi' => '1 Hari Kerja', 'label' => 'Prosedur Resmi'],
        ['badge' => 'Administrasi Desa', 'judul' => 'Surat Keterangan Domisili', 'desk' => 'Surat keterangan tempat tinggal yang sah untuk keperluan administrasi perbankan, pindah sekolah, atau kelengkapan berkas usaha warga.', 'estimasi' => '15 Menit', 'label' => 'Tanpa Biaya'],
        ['badge' => 'Pertanahan', 'judul' => 'Legalisasi Surat Tanah', 'desk' => 'Legalisasi dokumen kepemilikan tanah, riwayat tanah, serta surat pelepasan hak untuk keperluan jual beli, hibah, maupun warisan.', 'estimasi' => '2 Hari Kerja', 'label' => 'Verifikasi Camat'],
        ['badge' => 'Perekonomian', 'judul' => 'Rekomendasi Izin Usaha', 'desk' => 'Surat rekomendasi camat sebagai syarat pengajuan izin usaha mikro dan kecil (IUMK) serta legalitas operasional tempat usaha di wilayah Tanjung Raya.', 'estimasi' => '1 Hari Kerja', 'label' => 'UMKM Mandiri'],
    ];
    ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php foreach ($layananList as $index => $l): ?>
      <div class="bg-white border border-amber-900/10 rounded-3xl p-8 shadow-xl shadow-amber-900/5 hover:-translate-y-2 hover:border-amber-500 transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
        <div>
          <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-600 font-bold mb-6 group-hover:bg-amber-500 group-hover:text-slate-950 transition">
            ✦
          </div>
          <span class="text-[10px] font-extrabold uppercase bg-emerald-50 text-emerald-800 px-2.5 py-1 rounded-md mb-3 inline-block"><?= e($l['badge']) ?></span>
          <h3 class="font-display font-bold text-xl text-[#0F2C1E] mb-3"><?= e($l['judul']) ?></h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-6"><?= e($l['desk']) ?></p>
        </div>
        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-amber-800">
          <span>⏱️ Estimasi: <?= e($l['estimasi']) ?></span>
          <span class="underline group-hover:text-amber-600"><?= e($l['label']) ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
