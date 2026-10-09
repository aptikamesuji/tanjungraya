<?php
/**
 * landing.php (Kecamatan Tanjung Raya, Kabupaten Mesuji)
 * -----------------------------------------------------------------
 * File ini sekarang cuma "perakit" (orchestrator).
 * Semua DATA ada di config.php.
 * Semua TAMPILAN dipecah per bagian di includes/*.php.
 * Kalau mau ubah 1 bagian, buka file includes-nya langsung,
 * tidak perlu scroll file raksasa lagi.
 * -----------------------------------------------------------------
 */
require __DIR__ . '/includes/functions.php';
$cfg = require __DIR__ . '/config.php';

// Ambil data dari config supaya nama variabel pendek dipakai di includes.
$pengumumanList  = $cfg['pengumuman'];
$galeriList      = $cfg['galeri'];
$wilayahList     = $cfg['wilayah'];
$infografis      = $cfg['infografis'];
$beritaKecamatan = $cfg['berita_kecamatan'];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-amber-400 selection:text-slate-950 overflow-x-hidden">

<?php require __DIR__ . '/includes/announcement.php'; ?>
<?php require __DIR__ . '/includes/navbar.php'; ?>
<?php require __DIR__ . '/includes/hero.php'; ?>
<?php require __DIR__ . '/includes/layanan.php'; ?>
<?php require __DIR__ . '/includes/modal-pengumuman.php'; ?>
<?php require __DIR__ . '/includes/profil.php'; ?>
<?php require __DIR__ . '/includes/modal-camat.php'; ?>
<?php require __DIR__ . '/includes/wilayah.php'; ?>
<?php require __DIR__ . '/includes/infografis.php'; ?>
<?php require __DIR__ . '/includes/berita.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>

<?php require __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
