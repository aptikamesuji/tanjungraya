<?php
/**
 * config.php
 * Semua DATA konten kecamatan taruh di sini.
 * Tujuan: kalau mau ganti isi (teks, gambar, statistik), edit di sini saja,
 * tidak perlu sentuh file tampilan (includes/*.php).
 */

return [
    'title'       => 'Kecamatan Tanjung Raya — Portal Resmi Pemerintah Kabupaten Mesuji',
    'description' => 'Pusat layanan publik terpadu, informasi administrasi kependudukan, transparansi pembangunan, dan berita kegiatan Kecamatan Tanjung Raya Kabupaten Mesuji.',
    'logo'        => '',
    'telepon'     => '(0726) XXX-XXX',
    'email'       => 'tanjungraya@mesujikab.go.id',
    'alamat'      => 'Jl. Poros Kecamatan Tanjung Raya',

    'pengumuman' => [
        [
            'tanggal'  => '18 Agustus 2026',
            'kategori' => 'Penting',
            'judul'    => 'Jadwal Pelayanan Terpadu Keliling Administrasi Kependudukan',
            'isi'      => 'Pelayanan jemput bola e-KTP, KK, dan Akta Kelahiran akan hadir di Balai Desa Brabasan pada hari Kamis, 20 Agustus 2026 mulai pukul 08.30 WIB.'
        ],
        [
            'tanggal'  => '15 Agustus 2026',
            'kategori' => 'Pertanian',
            'judul'    => 'Distribusi Pupuk Bersubsidi Tahap III',
            'isi'      => 'Bagi kelompok tani yang terdaftar dalam e-RDKK, pengambilan alokasi pupuk bersubsidi dapat berkoordinasi langsung dengan PPL setempat.'
        ]
    ],

    'galeri' => [
        ['title' => 'Musrenbang Kecamatan Tanjung Raya', 'category' => 'pemerintahan', 'img' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=800&auto=format&fit=crop', 'date' => '18 Agustus 2026'],
        ['title' => 'Penyaluran Bantuan Bibit Pertanian', 'category' => 'perekonomian', 'img' => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=800&auto=format&fit=crop', 'date' => '10 Agustus 2026'],
        ['title' => 'Aksi Penurunan Stunting Bersama TP PKK', 'category' => 'sosial', 'img' => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=800&auto=format&fit=crop', 'date' => '12 Agustus 2026'],
        ['title' => 'Rapat Koordinasi Kepala Desa & BPD', 'category' => 'pemerintahan', 'img' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop', 'date' => '25 Juli 2026']
    ],

    'wilayah' => [
        ['nama' => 'Desa Brabasan', 'tipe' => 'Desa Mandiri', 'penduduk' => '7.420 Jiwa', 'kepala' => 'Kepala Desa Brabasan'],
        ['nama' => 'Desa Bujung Buring', 'tipe' => 'Desa Berkembang', 'penduduk' => '4.150 Jiwa', 'kepala' => 'Kepala Desa Bujung Buring'],
        ['nama' => 'Desa Sri Tanjung', 'tipe' => 'Desa Mandiri', 'penduduk' => '5.890 Jiwa', 'kepala' => 'Kepala Desa Sri Tanjung'],
        ['nama' => 'Desa Mekar Jaya', 'tipe' => 'Desa Berkembang', 'penduduk' => '3.820 Jiwa', 'kepala' => 'Kepala Desa Mekar Jaya']
    ],

    'infografis' => [
        'total_penduduk' => '42.850+',
        'jumlah_kk'      => '12.430',
        'laki_laki'      => '21.920',
        'perempuan'      => '20.930',
        'jumlah_desa'    => '21 Desa'
    ],

    'berita_kecamatan' => [
        [
            'tanggal'    => '18 Agustus 2026',
            'kategori'   => 'Pemerintahan',
            'judul'      => 'Musyawarah Perencanaan Pembangunan (Musrenbang) Tingkat Kecamatan Tanjung Raya',
            'deskripsi'  => 'Penyusunan prioritas pembangunan infrastruktur dan pemberdayaan ekonomi desa bersama seluruh kepala desa se-Tanjung Raya.',
            'image'      => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=800&auto=format&fit=crop'
        ],
        [
            'tanggal'    => '10 Agustus 2026',
            'kategori'   => 'Ketahanan Pangan',
            'judul'      => 'Penyerahan Bantuan Bibit Unggul & Pupuk Bagi Kelompok Tani Tanjung Raya',
            'deskripsi'  => 'Komitmen nyata kecamatan dalam mendukung produktivitas hasil pertanian lokal demi kesejahteraan para petani Mesuji.',
            'image'      => 'https://images.unsplash.com/photo-1592982537447-7440770cbfc9?q=80&w=800&auto=format&fit=crop'
        ],
        [
            'tanggal'    => '25 Juli 2026',
            'kategori'   => 'Koordinasi',
            'judul'      => 'Rapat Koordinasi Bulanan Bersama Seluruh Kepala Desa & BPD',
            'deskripsi'  => 'Evaluasi penyerapan dana desa serta peningkatan kualitas administrasi keuangan dan ketertiban wilayah.',
            'image'      => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=800&auto=format&fit=crop'
        ]
    ],
];
