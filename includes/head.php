<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($cfg['title'] ?? 'Kecamatan Tanjung Raya — Portal Resmi Pemerintah Kabupaten Mesuji') ?></title>
<meta name="description" content="<?= e($cfg['description'] ?? 'Pusat layanan publik terpadu, informasi administrasi kependudukan, transparansi pembangunan, dan berita kegiatan Kecamatan Tanjung Raya Kabupaten Mesuji.') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          mesuji: {
            forest: '#0F2C1E',
            deep: '#071810',
            gold: '#D4AF37',
            lightgold: '#F4E8B1',
            accent: '#1B4D3E',
            leaf: '#2D6A4F',
            surface: '#F4F7F5'
          }
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
          display: ['Plus Jakarta Sans', 'sans-serif']
        }
      }
    }
  }
</script>
<style>
  .mesuji-pattern {
    background-image: radial-gradient(#D4AF37 0.8px, transparent 0.8px), radial-gradient(#D4AF37 0.8px, #0F2C1E 0.8px);
    background-size: 36px 36px;
    background-position: 0 0, 18px 18px;
  }
  .glass-card {
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.08);
  }
  .floating-animation {
    animation: floating 4s ease-in-out infinite;
  }
  @keyframes floating {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
  .pulse-glow {
    box-shadow: 0 0 25px rgba(212, 175, 55, 0.3);
  }
</style>
