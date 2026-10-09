<!-- FOOTER MODERN -->
<footer id="kontak" class="bg-mesuji-deep text-white pt-20 pb-10 border-t border-white/10 mesuji-pattern">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-16 border-b border-white/10">
      <div class="space-y-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center border border-amber-500/30">
            <img src="<?= e($cfg['logo'] ?? '') ?>" alt="Logo" class="w-7 h-7 object-contain" onerror="this.style.display='none'">
          </div>
          <span class="font-display font-bold text-lg text-white">Kecamatan Tanjung Raya</span>
        </div>
        <p class="text-slate-400 text-sm leading-relaxed">
          Pusat Pemerintahan Kecamatan Tanjung Raya Kabupaten Mesuji, berdedikasi tinggi dalam memberikan pelayanan publik prima, akuntabel, dan transparan.
        </p>
      </div>
      <div>
        <h4 class="font-display font-bold text-amber-400 uppercase tracking-wider text-sm mb-6">Alamat Kantor</h4>
        <p class="text-slate-300 text-sm leading-relaxed">
          <?= e($cfg['alamat'] ?? 'Jl. Poros Kecamatan Tanjung Raya') ?><br>
          Kabupaten Mesuji, Provinsi Lampung<br>
          Kode Pos 34691
        </p>
      </div>
      <div>
        <h4 class="font-display font-bold text-amber-400 uppercase tracking-wider text-sm mb-6">Kontak Resmi</h4>
        <ul class="space-y-3 text-slate-300 text-sm">
          <li>Email: <?= e($cfg['email'] ?? 'tanjungraya@mesujikab.go.id') ?></li>
          <li>Telp: <?= e($cfg['telepon'] ?? '(0726) XXX-XXX') ?></li>
        </ul>
      </div>
      <div>
        <h4 class="font-display font-bold text-amber-400 uppercase tracking-wider text-sm mb-6">Tautan Terkait</h4>
        <ul class="space-y-3 text-slate-300 text-sm">
          <li><a href="https://mesujikab.go.id" target="_blank" class="hover:text-amber-400 transition">Pemerintah Kabupaten Mesuji</a></li>
          <li><a href="https://lapor.go.id" target="_blank" class="hover:text-amber-400 transition">Layanan Aspirasi (LAPOR!)</a></li>
        </ul>
      </div>
    </div>
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-slate-500 text-xs">
      <p>Copyright &copy; 2026 Pemerintah Kabupaten Mesuji — Kecamatan Tanjung Raya. All rights reserved.</p>
      <p class="mt-4 sm:mt-0 text-amber-400/80 font-medium">Ragab Begawe Caram</p>
    </div>
  </div>
</footer>
