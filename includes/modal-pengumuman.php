<!-- MODAL PENGUMUMAN RESMI -->
<div id="pengumumanModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
  <div id="pengumumanModalContent" class="bg-white rounded-3xl max-w-2xl w-full p-8 shadow-2xl relative transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
    <button type="button" id="closePengumumanModal" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-slate-100 hover:bg-red-100 text-slate-600 hover:text-red-600 flex items-center justify-center font-bold text-xl transition cursor-pointer">
      &times;
    </button>

    <div class="flex items-center gap-4 mb-6">
      <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 flex items-center justify-center text-2xl font-bold shadow-md">
        📢
      </div>
      <div>
        <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Papan Informasi Publik</span>
        <h3 class="font-display font-extrabold text-2xl text-mesuji-forest">Pengumuman &amp; Agenda Penting</h3>
      </div>
    </div>

    <div class="space-y-6 border-t border-b border-slate-100 py-6 my-4">
      <?php foreach ($pengumumanList as $p): ?>
      <div class="bg-slate-50 border border-slate-200 p-5 rounded-2xl space-y-2">
        <div class="flex items-center justify-between text-xs">
          <span class="bg-amber-100 text-amber-800 font-extrabold px-2.5 py-1 rounded-md uppercase"><?= e($p['kategori']) ?></span>
          <span class="text-slate-400 font-medium">📅 <?= e($p['tanggal']) ?></span>
        </div>
        <h4 class="font-display font-bold text-lg text-mesuji-forest"><?= e($p['judul']) ?></h4>
        <p class="text-slate-600 text-sm leading-relaxed"><?= e($p['isi']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-end pt-2">
      <button type="button" id="closePengumumanBtn" class="bg-mesuji-forest hover:bg-emerald-900 text-white font-bold px-6 py-2.5 rounded-xl transition cursor-pointer">
        Tutup Pengumuman
      </button>
    </div>
  </div>
</div>
