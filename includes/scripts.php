<script>
  AOS.init({ once: true, duration: 800, offset: 50 });

  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));

  /**
   * initModal()
   * Fungsi generik buka/tutup modal dengan animasi fade + scale.
   * Dipakai ulang untuk modal Pengumuman dan modal Camat
   * (di kode asli, logic ini di-copy-paste 2x — sekarang cukup 1 fungsi).
   */
  function initModal(openBtnId, modalId, contentId, closeBtnIds) {
    const openBtn   = document.getElementById(openBtnId);
    const modal     = document.getElementById(modalId);
    const content   = document.getElementById(contentId);

    function show() {
      modal.classList.remove('hidden');
      setTimeout(() => {
        modal.classList.remove('opacity-0');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
      }, 10);
    }

    function hide() {
      modal.classList.add('opacity-0');
      content.classList.remove('scale-100');
      content.classList.add('scale-95');
      setTimeout(() => modal.classList.add('hidden'), 300);
    }

    if (openBtn) openBtn.addEventListener('click', show);
    closeBtnIds.forEach(id => {
      const btn = document.getElementById(id);
      if (btn) btn.addEventListener('click', hide);
    });
  }

  initModal('openPengumumanModal', 'pengumumanModal', 'pengumumanModalContent', ['closePengumumanModal', 'closePengumumanBtn']);
  initModal('openCamatModal', 'camatModal', 'camatModalContent', ['closeCamatModal', 'closeCamatModalBtn']);
</script>
