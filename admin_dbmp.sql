-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2022 at 12:22 PM
-- Server version: 5.7.35-0ubuntu0.18.04.2
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_dbmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasi` longtext COLLATE utf8mb4_unicode_ci,
  `keunggulan` longtext COLLATE utf8mb4_unicode_ci,
  `garansi` longtext COLLATE utf8mb4_unicode_ci,
  `lainnya` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_member`, `img_barang`, `nama_barang`, `instagram`, `link_ig`, `facebook`, `link_fb`, `harga`, `kondisi`, `berat`, `kategori`, `daerah`, `spesifikasi`, `keunggulan`, `garansi`, `lainnya`, `created_at`, `updated_at`) VALUES
(5, '106', '5KYfWKVreCXGLbXmYcBUDf43bGXrV2ZbXC7ODiAmS.jpg', 'SanDisk CZ50 Cruzer Blade (16 GB)', NULL, NULL, NULL, NULL, '60000', 'Baru', '-tdk ada', 'aksesoris komputer', 'Gianyar', 'SANDISK USB Flash disk 16 GB / Flash Drive Cruzer Blade CZ50 ORIGINAL', 'Desain Kompak\r\nSebuah aksesori yang ideal untuk Anda pengguna data, SanDisk Cruzer Blade memiliki desain unik Blade. Memiliki dimensi 5.6 x 3.6 x 1 cm, USB drive ini mudah dimasukkan ke dalam dompet atau saku baju.\r\n\r\nKapasitas Besar\r\nTersedia dalam berbagai kapasitas, SanDisk Cruzer Blade memiliki cukup ruang untuk menyimpan semua file penting Anda. Foto favorit, lagu, dokumen, dan file pribadi lainnya akan berada disana kapanpun Anda membutuhkannya.\r\n\r\nTransfer File yang Mudah\r\nUntuk memindahkan file ke SanDisk Cruzer Blade, cukup pasang drive USB ini ke port USB Anda dan drag file yang diinginkan ke folder USB flash disk. Tidak memerlukan driver atau instalasi tambahan.\r\n\r\nSanDisk SecureAccess\r\nSanDisk Cruzer Blade memiliki software SecureAccess, agar Anda dapat membuat folder yang dapat dilindungi dengan menggunakan password. File Anda akan dilindungi dengan enkripsi 128-bit AES, sehingga Anda dapat berbagi drive dengan tetap menjaga file informasi penting secara aman', 'Garansi RESMI 5 tahun', 'Detail produk\r\nBawa dan simpan setiap file favorit Anda menggunakan USB Flash Disk keluaran SanDisk ini, SanDisk Cruzer Blade. Dengan bentuk yang kecil namun cepat untuk men-transfer konten digital dari komputer ke komputer lainnya. SanDisk Cruzer Blade memiliki fitur SanDisk SecureAccess yang melindungi file didalam USB flash disk dari akses ilegal serta nikmati fitur backup online yang aman dari YuuWaa untuk mengakses file secara online dimana saja.', NULL, NULL),
(9, '106', '9z7pimFv3Cgyt6HWHv94ve1yL2HCVAakor7wod25U.png', 'Apple Watch Series 6 40mm GPS, Gold, Pink Sand Sport Band', NULL, NULL, NULL, NULL, '7999000', 'Baru', '-tdk ada', 'aksesoris pria', 'Gianyar', 'vPoin-poin fitur utama\r\n• Model GPS memungkinkan Anda menjawab panggilan dan membalas teks dari pergelangan tangan Anda\r\n• Ukur oksigen darah Anda dengan sensor dan aplikasi yang sepenuhnya baru1\r\n• Periksa detak jantung Anda kapan saja dengan aplikasi Detak Jantung\r\n• Dapatkan pemberitahuan untuk detak jantung tinggi dan rendah\r\n• Layar Retina yang Selalu Aktif kini 2,5 kali lebih terang di luar ruang ketika pergelangan Anda tak terangkat\r\n• S6 SiP kini hingga 20% lebih cepat daripada Series 5\r\n• Wi-Fi 5 GHz dan chip Ultra Wideband U1\r\n• Pantau aktivitas harian Anda melalui Apple Watch dan lihat tren Anda di aplikasi Kebugaran di iPhone\r\n• Ukur olahraga seperti berlari, berjalan, bersepeda, yoga, berenang, dan menari\r\n• Desain siap dipakai berenang2\r\n• Selaraskan musik dan podcast favorit Anda\r\n• Kompas bawaan dan pembacaan ketinggian secara real time\r\n• Mampu mendeteksi apabila Anda terjatuh dengan keras dan akan menghubungi layanan panggilan darurat secara otomatis untuk Anda\r\n• Panggilan darurat SOS membantu Anda mendapatkan bantuan melalui pergelangan tangan Anda3\r\n• watchOS 7 dengan pemantauan tidur, petunjuk arah bersepeda, dan wajah jam baru yang dapat disesuaikan\r\n• Casing aluminium tersedia dalam berbagai warna baru', 'Legal\r\nApple Watch Series 6 memerlukan iPhone 6s atau lebih baru dengan iOS 14 atau lebih baru.\r\n1Pengukuran aplikasi Oksigen Darah bukan untuk tujuan medis, termasuk diagnosis mandiri atau konsultasi dengan dokter, dan hanya dirancang untuk tujuan kebugaran dan kesehatan secara umum. \r\n2standar ISO 22810:2010. Sesuai untuk aktivitas air dangkal seperti berenang. Tidak disarankan untuk perendaman melebihi kedalaman dangkal dan aktivitas air berkecepatan tinggi.\r\n3Agar dapat melakukan Panggilan darurat SOS, iPhone Anda harus berada dalam jarak dekat. Jika tidak, Apple Watch perlu terhubung ke jaringan Wi-Fi yang dikenal dan Anda perlu mengatur Panggilan Wi-Fi.', '12 bulan garansi resmi', 'Apple Watch Series 6 memungkinkan Anda mengukur kadar oksigen darah dengan sensor dan aplikasi baru yang revolusioner.1 Pantau detak jantung Anda. Lihat metrik kebugaran Anda pada layar Retina Selalu Aktif yang disempurnakan, kini 2,5 kali lebih terang di luar ruang ketika pergelangan Anda tak terangkat. Atur rutinitas waktu tidur dan pantau tidur Anda. Jawab panggilan dan pesan langsung dari pergelangan tangan Anda. Perangkat canggih untuk hidup yang lebih sehat, lebih aktif, dan lebih terhubung.', NULL, NULL),
(10, '106', '10ZQSWkQEqmocyIgKjxC84uW7CKBrprSJX2Epzwwky.png', 'ASY KAOS PRIA II KAOS DISTRO SABLON DIGITAL BERKUALITAS BISA UNISEX 008', NULL, NULL, NULL, NULL, '40000', 'Baru', '-tdk ada', 'pakaian pria', 'Gianyar', 'UKURAN ,, LEBAR-PANJANG\r\n Bisa untuk ,, Family seragam dll\r\n     BAHAN COTTON 30S\r\nM 45CM X 62CM\r\nL 48CM X65CM\r\nXL 51CM X68CM\r\nXXL JUMBO 60X72CM\r\n\r\nADA BERBAGAI VARIAN WARNA ✓ \r\n             TERSEDIA WARNA\r\n1. HITAM\r\n2. PUTIH \r\n3. MARUN\r\n4. ABU TUA/GREY\r\n5. NEVI\r\n6. HIJAU ARMY', 'KUALITAS PRODUK TERJAMIN ,, HARGA BERSAING .\r\nINGAT . . apabila ada kerusakan produk cacat/bs kami akan bertanggung jawab !!!\r\nSABLON MENGGUNAKAN PRINTING DIGITAL SEHINGGA MENDAPATKAN HASIL YG BAGUS\r\nDITARIK TIDAK PECAH DAN TIDAK LUNTUR', '-tdk ada', 'sebelum order ada baiknya membaca deskripsi dibawa ini\r\nukuran kita lokal .. CONTOH : Yang biasa pakai ukuran M,, bisa naikin satu size jadi order.size. L. aja ya ,, di harap kan pilih sesuai varian warna dan size nya (tulis dalam catatan) ,, karna beda ukuran beda harga ,, kalau tidak akan di kirim secara RANDOM ,,1kg(6baju) TERIMA KASIH .', NULL, NULL),
(11, '106', '11qk16PbsAebpYMUIVGcXNEtr9HNBBe5hYRpcxp82u.png', 'Baju Distro / Kaos Distro / Atasan Pria / ONICLAY BUNGA', NULL, NULL, NULL, NULL, '35000', 'Bekas', '-tdk ada', 'pakaian wanita', 'Klungkung', 'Bahan : COMBED 30s\r\nSablon : RUBBER\r\nUkuran : L & XL\r\nL : (Panjang 70cm, Lebar 50cm)\r\nXL : (Panjang 72cm, Lebar 52cm)', '-tdk ada', '-tdk ada', 'Mohon sebelum melakukan transaksi pembelian produk kami .. Tanya stock lebih dlu, karena produk keluar setiap harinya.. \r\n\r\nCantumkan alamat dengan benar dan lengkap..\r\nApabila tidak mencantumkan alamat lengkap, Paket tidak sampai dluar tanggung jawab kami..', NULL, NULL),
(12, '106', '12eVUFCIB9HzFmnJxPKfqnL9yN9Q3ADxTAUkcUWVxl.png', 'Kaos murah Kaos distro murah baju distro pria t-shirt murah combed30s sail way', NULL, NULL, NULL, NULL, '30000', 'Baru', '- tdk ada', 'pakaian pria', 'Klungkung', 'UKURAN  L \r\nLebar dada 105 cm\r\npanjang kaos 72 cm\r\nUKURAN XL \r\nLINGKAR DADA 112\r\nPANJANG KAOS 75CM', 'kaos distro\r\nproduk lokal\r\nbahan cotton combed 30s\r\nbahan lembut tidak panas\r\njahitan double stick dan rapih', '-tdk ada', 'barang sesuai dengan foto tanpa edit\r\nbarang selalu ready selama iklan masih tersedia', NULL, NULL),
(25, '106', 'BUi4y31QUgGqVVSeaNbK8SDPsx4F1LLOi2sEj3LE.jpg', 'Komputer 2 in 1', NULL, NULL, NULL, NULL, '11099000', 'Baru', '2 kg', 'komputer', 'Badung', '-', '-', '-', '-', NULL, NULL),
(34, '106', 'qKKQYQvnJx9e7ELn13joBimGRMCmCgQb9Ayy6wCC.jpg', 'laptop', NULL, NULL, NULL, NULL, '1', 'Baru', '-', 'pakaian pria', 'Buleleng', '-', '-', '-', '-', NULL, NULL),
(35, '110', 'wwOiN7oTkw5LSesTTCMzu5BWzL4wfwXwo0udPHRf.jpg', 'Kursi Banquet Cover Straith', NULL, NULL, NULL, NULL, '15000', 'Bekas', '-', 'penyewaan', 'Tabanan', 'Kursi Banquet Plus Cover Straith', '-', '-', '-', NULL, NULL),
(36, '261', 'ELyXgwNJiRHF8ia35gEr8RfBpM2wADPMpaZ59yyh.jpg', 'Pie susu chandra', NULL, NULL, NULL, NULL, '1000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', '-', '-', '-', '-', NULL, NULL),
(37, '110', 'YJnZsoQpVtuuLZJPtu0YY8dHDrRwpC55y0v7mKIA.jpg', 'Dekorasi Stage', NULL, NULL, NULL, NULL, '3000000', 'Baru', '-', 'penyewaan', 'Tabanan', 'Dekorasi Natural Dan Backdrop Event', 'Ramah Lingkungan', '-', '-', NULL, NULL),
(38, '106', 'OczrhzkcigsNl37SogwZolVH4LCRJjRUoPpYvdwC.jpg', 'Jaket bagus', NULL, NULL, NULL, NULL, '1200000', 'Baru', '200gr', 'pakaian pria', 'Denpasar', '-', '-', '-', '-', NULL, NULL),
(39, '269', 'yq4S1zKaJgE6ixulJqpyLhHpdiOvfgNXPwrDERVL.jpg', 'GELANG KRISTAL SEMARA RATIH', NULL, NULL, NULL, NULL, '175000', 'Baru', '-', 'aksesoris wanita', 'Badung', 'Di Blessing dengan mantra green tara yaitu mantra membawa keberuntungan. Di buat sesuai dengan batu karakter Sang Hyang Semara Ratih', '- Menarik Rejeki\r\n- Mengharmoniskan hubungan suami istri \r\n- Meresakan Emosi \r\n- Meredakan Penyakit \r\n- Memghalau emergi negatif \r\n- Kasih Sayang', '-', NULL, NULL, NULL),
(40, '269', 'ImGKJLzDOityApfFZYLzieLk5NTpKIKXxSAni6Im.jpg', 'KALUNG TRIDATU GOLDSAND', NULL, NULL, NULL, NULL, '110000', 'Baru', '-', 'aksesoris wanita', 'Badung', '--Kalung Tridatu GOLD SAND--\r\n----------------------------\r\nKalung ini terbuat dr :\r\n🍃BENANG TRIDATU yg mana di percaya sebagai sarana perlindungan dari kekuatan Negatif ,sehingga dapat terhindar dari hal-hal negatif dan bs brpkir lbh bijaksana\r\n🍃BATU KRISTAL GOLD SAND (ASLI) yg di percaya memiliki sangat banyak manfaat sperti mendatangkan rejeki, melancarkan usaha/bisnis,meredakan emosi, memperluas sudut pandang dan lain sebagainya\r\n🍃KAYU GAHARU yg di percaya sbagai Kayu Suci.dapat menetralisir energi negatif dan meredakan penyakit\r\n🍃GENITRI di percaya dapat meredakan stress,membuat pikiran menjadi lbih positif, membuat tubuh lebih rilex, membawa keberuntungan \r\n***', NULL, '-', '*TIDAK ADA EFEK NEGATIF SAMA SEKALI KARENA BAHAN MENGGUNAKAN UNSUR ALAM\r\n***', NULL, NULL),
(41, '269', 'QBxK5DOWIanBR4rBXb9oomFbafeiBQqv4GjJ3fxN.jpg', 'SET POHON KRISTAL', NULL, NULL, NULL, NULL, '285000', 'Baru', '-', 'perlengkapan rumah', 'Badung', 'SATU SET LENGKAP :\r\n✅pohon rejeki kristal dg batu asli (pasupati alam)\r\n✅Patung Dewi Laksmi mini atau Dewa Ganesha \r\n✅Tempat Dupa \r\n✅ Tatakan (Dulang) \r\n✅ Gelang Tridatu', 'Memiliki Banyak manfaat seperti  : \r\n*menarik rejeki\r\n*membawa rasa damai\r\n*memperbaiki hubungan \r\n*membawa keberuntungan\r\n*menjaga keharmonisan\r\n*meredakan penyakit \r\n*memperluas sudut pandang\r\n*meningkatkan rasa percaya diri\r\n*menghalau energi2 negatif .\r\n**', '-', 'Cocok di Letakkan di Tempat usaha ataupun di rumah', NULL, NULL),
(42, '269', 'yGdur5tz1gzrJsJkmqa3yAqXxIW1d2h6SM50HBWU.jpg', 'GELANG KANJENG RATU KIDUL', NULL, NULL, NULL, NULL, '150000', 'Baru', '200 gram', 'aksesoris wanita', 'Badung', 'Gelang kristal pasupati \r\nGreen aventurine Kanjeng Bunda Ratu Segara Kidul 🙏\r\n\r\nDg menggunakan batu Kristal Green Aventurine (ASLI)\r\n dikenal sebagai ‘Batu Kesempatan, yaitu yang mewujudkan kemakmuran dan kekayaan. Tidak hanya merupakan penarik keberuntungan dan peluang juga membawa optimisme dan semangat hidup, yang memungkinkan seseorang untuk bergerak maju dengan percaya diri dan untuk meraih perubahan.', 'Manfaatnya :\r\n*Keberuntungan\r\n*Kelancaran rejeki\r\n*Kemakmuran dan kekayaan\r\n*Membuka aura kecantikan dan kewibawaan\r\n*Welas asih', '-', '-', NULL, NULL),
(43, '110', 'BLmjTc5B52yBVcvym72qP5rZNEghvzyHscFrnjbu.jpg', 'Tenda Vip 10x20 mtr', NULL, NULL, NULL, NULL, '4000000', 'Bekas', '-', 'penyewaan', 'Tabanan', 'Tenda Dekorasi', '-', '-', '-', NULL, NULL),
(44, '110', 'NwarT4LctiIrjSscCtTbY0fsXBR89kkc7sxoShJU.jpg', 'Tombol Sirine Peresmian', NULL, NULL, NULL, NULL, '500000', 'Bekas', '-', 'penyewaan', 'Tabanan', '-', '-', '-', '-', NULL, NULL),
(45, '261', '56dPFc2XbGPgyu0VFb7zaFejlVWAUjCFjJWoOzBB.jpg', 'Tumpeng beras merah', NULL, NULL, NULL, NULL, '1000000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', 'Tumpeng beras merah untuk 25porsi', 'Rasa dan tampilan adalah menu utama kami', '-', '*Melayani pesanan berbagai tema \r\n  tumpeng \r\n*ukuran menyesuaikan budget *melayani pengiriman seluruh bali \r\n*keluar kota dikenakan ongkir', NULL, NULL),
(46, '261', 'gqKTrp4Df9PQZn2JfCUR9EVLM1Ni1SiijVESkNhK.jpg', 'Nasi kotak', NULL, NULL, NULL, NULL, '25000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', 'Harga mulai 20.000 \r\n\r\nMenu menyesuaikan budget', 'Rasa dan tampilan adalah kwalitas', '-', '-', NULL, NULL),
(50, '257', 'rVFB92hteC8LJ5K7glDmuOcTSUP5ebKWrwRbzkoR.jpg', 'Dudukan kompor', NULL, NULL, NULL, NULL, '400000', 'Baru', '-', 'perlengkapan rumah', 'Badung', 'Tinggi 70 cm\r\nLebar 40 cm', 'Praktis siap pakai', '-', 'Yang minat silahkan order\r\nWa : 082144038341\r\nTlpn. 08174744949', NULL, NULL),
(51, '257', 'XBGIKm0QebUb4bGZPYg8Gny8IOWHeEnG4p7JxQkb.jpg', 'Studio recording', NULL, NULL, NULL, NULL, '1500000', 'Baru', '-', 'elektronik', 'Badung', '-', '-', '-', 'Studio recording lagu\r\nPembuatan iklan\r\nDan lain lain', NULL, NULL),
(52, '257', 'DnPfr9OVotLcb5xfhYuFj2h9ihHQtimfeuVtQJKr.jpg', 'Stroller', NULL, NULL, NULL, NULL, '1100000', 'Bekas', '-', 'perlengkapan rumah', 'Badung', '-', '-', '-', 'Jual stroller kembar\r\nBarang masih utuh pemakaian baru sebentar', NULL, NULL),
(53, '257', 'Msy6Mn3tftgJj3PMm9vGztwss5h9mMio9gSHUTu8.jpg', 'Pembuatan kanopi', NULL, NULL, NULL, NULL, '450000', 'Baru', '-', 'perlengkapan rumah', 'Badung', '-', '-', '-', 'Jasa pembuatan kanopi\r\nHarga menyesuaikan ukuran dan bahan\r\nChat wa.082144038341\r\nUntuk tanya jawab', NULL, NULL),
(55, '110', 'BUaBjEDl2AdlZbPZtiIYdlIrRzmptr6WfnkjpVfi.jpg', 'Produksi Rigging', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'jasa', 'Tabanan', 'Rigging Bahan Galvanis', 'Ukuran Bisa Menyesuaikan', '-', '-', NULL, NULL),
(56, '110', '5YH1yoYZCXTWu6T9kHHQ6w3uLeEStaTnhnxGpJdA.jpg', 'Jemuran Handuk', NULL, NULL, NULL, NULL, '600000', 'Baru', '-', 'jasa', 'Tabanan', 'Jemuran Handuk terbuat dari pipa galvanis 1/2\' dengan roda', 'Praktis, Kuat, Mudah dipindahkan', '-', '-', NULL, NULL),
(59, '269', 'zcHCXlmaFDSxbhZsYYt2eND0l7JSxQcDAPalF7re.jpg', 'Pohon Kristal Rambut Sedana Asli', NULL, NULL, NULL, NULL, '650000', 'Baru', '500 Gram', 'perlengkapan rumah', 'Badung', 'Pohon kristal rambut sedana asli\r\nPohon ini memakai batu rambut sedana asli yg serat didalamnya hidup jika aura disekitar kita positif\r\nSemakin banyak serat akan semakin bagus aliran rejeki nya\r\nSeratnya bisa terlihat tanpa bantuan senter karna kwalitas batu yg sudah dipilih dan sudah dibersihkan secara Niskala sehingga bebas dari aura negatif\r\nDilengkapi dengan pis bolong pancadatu dan genitri untuk menambah harmonisasi kehidupan dan untuk keseimbangan dalam kehidupan', '✔menarik rejeki\r\n✔membawa keberuntungan\r\n✔melancarkan usaha/bisnis \r\n✔menghalau energi negatif \r\n----------', '-', 'Tidak ada pantangan & smuan agama bisa', NULL, NULL),
(62, '108', '621ugt388qRCuzL2TvL1IsGh5k4eRmP5bTxDqzY0NA.jpg', 'Sate lilit ayam', NULL, NULL, NULL, NULL, '30000', 'Baru', '250', 'makanan dan minuman', 'Denpasar', 'Melayani menu diet', 'Daging full dada tanpa gula dan minyak', '-', '-', NULL, NULL),
(63, '110', 'jgbSLMZJvPSrjxfiVo7CnpjG17KpcslirFc88bAt.jpg', 'Event Management', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'jasa', 'Tabanan', 'Event Konsep, Budgeting, Productions, Organize, Etc', '-', '-', '-', NULL, NULL),
(64, '110', 'BCNhGb42uYphDyMc5azoK5rMdqMlvFnJi7HyBhLm.jpg', 'Meja Bulat Kaki Lipat. Diameter 150cm', NULL, NULL, NULL, NULL, '900000', 'Baru', '-', 'jasa', 'Tabanan', 'Meja Bulat Bahan Multiplex 18mm, Rangka Siku 4x4inti, Kaki Hollow Galvanis 4x4x1.8mm,', 'Kaki Bisa dilipat, Lebih Praktis dalam penyimpanan dan bongkat muat.', '-', 'Sangat Cocok Untuk Kebutuhan Rental / Dekorasi', NULL, NULL),
(65, '110', '4scV2MwhivYQJDVdnZLZEBQRML6NXAZKbbhVv8up.jpg', 'Wedding Decorator', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'penyewaan', 'Tabanan', 'Decor Florist, Meja, Kursi, Tenda, Sound System, DLL', '-', '-', '-', NULL, NULL),
(66, '257', '4CmImSXnq73fVbYHc8K1bR2r316GOlIqgs4Oj2n4.jpg', 'Rak', NULL, NULL, NULL, NULL, '1234567', 'Baru', '-', 'perlengkapan rumah', 'Badung', '-', '-', '-', 'Jual rak siap di order\r\nTanya jawab \r\nWa. 082144038341', NULL, NULL),
(67, '257', 'Lp5tRpbLB5Vooio7syOorzf2hBfWt7M8iqolFiTZ.jpg', 'Meja lipat', NULL, NULL, NULL, NULL, '1234567', 'Baru', '-', 'perlengkapan rumah', 'Badung', '-', '-', '-', 'Jual meja lipat\r\nSiap di order\r\nHarga menyesuaikan dengan ukuran\r\nTanya jawab \r\nWa. 082144038341', NULL, NULL),
(68, '257', 'jAOiiCkShQxHQpLdczIsu13Prm5sLMcv5rcJWg0r.jpg', 'Trallis jendela', NULL, NULL, NULL, NULL, '1234567', 'Baru', '-', 'jasa', 'Badung', '-', '-', '-', 'Pembuatan trallis jendela\r\nHarga menyesuaikan dengan motif dan ukuran\r\nUntuk tanya jawab\r\nWa. 082144038341', NULL, NULL),
(69, '110', 'nKBhNPRatW2fzmaRjLyKMXxWi7mByLLzfp3ZJcbT.jpg', 'Produksi Sanggah Surya', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'lain lain', 'Tabanan', 'Bahan Galvanis, Tahan Karat', 'Knockdown', '-', '-', NULL, NULL),
(71, '257', 'C97iFg07j3F2y40mEHcnBYpY3LJvH0hcd32zmxFo.jpg', 'Trallis tangga', NULL, NULL, NULL, NULL, '1234567', 'Baru', '-', 'jasa', 'Badung', '-', '-', '-', 'Pembuatan trallis tangga\r\nHarga menyesuaikan motif dan ukuran\r\nYuk yang mau tanya jawab\r\nWa.082144038341', NULL, NULL),
(72, '261', 'fkPILdpIB7jsdeLh8NV1JrIqGOzMUVOj5eEfv5DL.jpg', 'nasi kotak', NULL, NULL, NULL, NULL, '45000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', '-', '-', '-', 'menu bisa ditentukan sendiri harga akan menyesuaikan', NULL, NULL),
(76, '261', '76Xfx3rLSCNE2Ttmqj9IzQk8Dj3Qgshp7cfMNBoQm0.jpg', 'Buffee prasmanan', NULL, NULL, NULL, NULL, '50000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', 'Paket buffee prasmanan', 'Bisa menyesuaikan budget \r\nMelayani seluruh bali luar kota ongkir menyesuaikan', '-', '-', NULL, NULL),
(77, '110', 'm7Co1penhaQ2xRtIJRgAymdWO24zKubU4lsaKuzZ.jpg', 'Event Production', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'jasa', 'Tabanan', 'Perencanaan, Perijinan,   Design/konsep, Produksi,  Organize,', '-', '-', '-', NULL, NULL),
(78, '267', 'IQdhhcT1AsATQIxVAY1HDTcnHjEv30esTyNTjAKz.jpg', 'Tabungan program bank penebel', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'perkantoran', 'Denpasar', '-', '-', '-', '-', NULL, NULL),
(79, '309', 'PLhiV1UHsN9Zfo6XJO279T1CpQFBmyfbhLSNy0z6.jpg', 'Rigging Panggung', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'penyewaan', 'Badung', 'Ukuran 8 x 12 mtr', 'Kuat dan kokoh', '-', '-', NULL, NULL),
(82, '110', 'A6zwR0G5183e3Ro4uFidLL6gzcyVrWqlOhFkr2L4.jpg', 'Trajang Calonarang', NULL, NULL, NULL, NULL, '123456', 'Bekas', '-', 'penyewaan', 'Tabanan', 'Trajang Cocok Untuk Calonarang, Tinggi 3mtr, ukuran Deck 3x3mtr\r\nKonstruksi Rigging Tower 40x40cm', 'Kuat dan Aman', '-', '-', NULL, NULL),
(83, '110', 'VrZwiyvAh9aLTUOqeHwTKoYQIKz5qfJOU7AUqW3J.jpg', 'Sound System', NULL, NULL, NULL, NULL, '123456', 'Bekas', '-', 'penyewaan', 'Tabanan', 'Sistem Tata Suara Segala Macam Event', 'Spesifikasi Sesuai Kebutuhan', '-', '-', NULL, NULL),
(85, '313', 'TmDJYbkAqcUOlUpj6klzQ8gCydkF7NFNtgF1VXAv.jpg', 'Stir Karimun Estilo PNP semua Suzuki', NULL, NULL, NULL, NULL, '700000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Kondisi bekas utuh layak pakai fungsi normal', '-', 'Garansi uang kembali apabila tidak sesuai dengan diskripsi', '-', NULL, NULL),
(86, '313', 'Guz2YBymUIqJmxQhnAzQJDdad1ydl8FXTeeJoyZW.jpg', 'Stir ST trungtung PNP semua Suzuki', NULL, NULL, NULL, NULL, '500000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Menjual stir bekas Suzuki layak pakai hanya bekas pakai semua fungsi normal', 'Bekas istimewa', 'Garansi uang kembali apabila tidak sesuai diskripsi', '-', NULL, NULL),
(87, '313', '4JItsKIyZRCzhXJRpCFIBckvdpDtMjh2XNBQBHYM.jpg', 'Box filter udara LJ 80/kotrik', NULL, NULL, NULL, NULL, '500000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Box filter udara LJ 80 siap pakai jamin tanpa kropos', '-', '-', '-', NULL, NULL),
(88, '324', 'ZyxNPpRJIs8RJcmfnO95Bm71A9sll2oP1Icy5Q3F.jpg', 'KIPAS GENGGAM LED', NULL, NULL, NULL, NULL, '40.000', 'Baru', '-', 'perlengkapan rumah', 'Denpasar', 'KIPAS USB VANSTAR \r\nsperivikasi :\r\n* material plastik tebal\r\n* Batrai tanam, pengisian dgn cara di cas listrik\r\n* Ukuran 14,5 x 15,8 cm\r\n* portable bisa di bawa kemana mana', 'mudah di bawa kemana2 ,bisa masuk ke dalam Tas', 'Garansi hanya 2hari', '-sangat best seller', NULL, NULL),
(89, '325', 'k1ARoo9RSE30AgHUzZqIySNikU2F3zGQf0M8u5Lm.jpg', 'Steples tembak', NULL, NULL, NULL, NULL, '80000', 'Baru', '-', 'lain lain', 'Karangasem', '-', '-', '-', '-', NULL, NULL),
(90, '338', 'r8DwInBjkqHtECyWuj9rubEEQgnUVheAy1gtYEIm.jpg', 'Bengkel mobil', NULL, NULL, NULL, NULL, '123456', 'Bekas', '-', 'jasa', 'Denpasar', 'Memperbaiki segala merk mobil tune up ganti oli turun mesin dll', 'kwalitas kerja dengan bengkel yg sudah berpengalaman selama puluhan tahun ( owner langsung turun tangan )', '-', '-', NULL, NULL),
(91, '313', '2iK8Hm0Hh6ZUAZ76rlPH6E30zSLoCvWrIf0UVSEe.jpg', 'Visco fan eks 7k', NULL, NULL, NULL, NULL, '350000', 'Bekas', '2kg', 'otomotif', 'Badung', 'Visco fan eks kijang ORI copotan kondisi normal tinggal pasang', '-', '-', '-', NULL, NULL),
(92, '317', 'AoyZXNOxz8CdL9W2zNpcVqz1uezQ6EGscvdoPL7u.jpg', 'Kabel Serabut tembaga hitam 2x1,5 Orenchi', NULL, NULL, NULL, NULL, '505500', 'Baru', '-', 'elektronik', 'Badung', 'Menjual alat listrik melayani eceran dan grosir', '-', '-', '-', NULL, NULL),
(93, '317', 'tlqIYVrsQu15coJlVwaQoZ0wPb7TG4YBiU4wvA53.jpg', 'Kabel Serabut tembaga hitam 2x1,5 Orenchi', NULL, NULL, NULL, NULL, '252750', 'Baru', '-', 'elektronik', 'Badung', 'Kabel Serabut tembaga panjang 50 yard', '-', '-', '-', NULL, NULL),
(94, '342', '7kZ7Vj32kCOaydGPgMSUeHbg9EZk4bpIKJJCbhk6.jpg', 'Lulur dalam', NULL, NULL, NULL, NULL, '125000', 'Baru', '1000', 'dapur kita', 'Denpasar', '-', 'Daging selalu presh', '-', '-', NULL, NULL),
(96, '110', 'nDwdAKjdXBGStTXVvKkB5yjDVqC0PxyFgjZWxQJ8.jpg', 'Q-Line Pita Merah', NULL, NULL, NULL, NULL, '150000', 'Bekas', '-', 'penyewaan', 'Tabanan', 'Batas Antrean pita merah max. 2mtr', 'Praktis dan mudah set up', '-', '-', NULL, NULL),
(97, '108', '3bL8avzi0SJEuUeZoa1OjWXbnzjH8K2LNrSmxC7Q.jpg', 'Menu mealplane', NULL, NULL, NULL, NULL, '30000', 'Baru', '250', 'makanan dan minuman', 'Denpasar', 'Melayani makanan diet dari program herbalife', 'Ayam sambal matah tanpa minyak dan gula', '-', '-', NULL, NULL),
(98, '108', 'F7k3wrovXdjh0hbh44YVsVFQFsQYMtBUDIoopPjE.jpg', 'Bihun dgn dada ayam', NULL, NULL, NULL, NULL, '35000', 'Baru', 'Dada ayam 250 gr', 'makanan dan minuman', 'Denpasar', '-', 'Tanpa minyak dan gula', '-', 'Bisa di antar', NULL, NULL),
(99, '342', 'NLEG8p3GDuskqPUrUt5QstPNmmy2HeVAn3BHp1w2.jpg', 'Daging sapi kelas 1', NULL, NULL, NULL, NULL, '105000', 'Baru', '1000', 'dapur kita', 'Denpasar', '-', 'Daging selalu presh', '-', '-', NULL, NULL),
(100, '364', 'wnhHVrAejdDeZNh4Kpo8S6w7tXBB2cvmqjDt1zI2.jpg', 'pia dhian', NULL, NULL, NULL, NULL, '60.000', 'Baru', '500 gram', 'makanan dan minuman', 'Gianyar', 'halal', 'rasanya enak dan gurih', '1 bln', 'jajan oleh oleh khas bali', NULL, NULL),
(103, '328', 'Cj0dWNgMQld20FnGai0gBoasx6DBpP5uDbpHwnL3.jpg', 'T-Shirt', NULL, NULL, NULL, NULL, '100000', 'Baru', '-', 'pakaian pria', 'Denpasar', 'Tersedia Size M L XL', 'Bahan Catton Combet Nyaman Di Pakek', '-', 'Mohon Konfirmasi Dulu Sama Admin Sebelum Pemesanan', NULL, NULL),
(104, '328', 'q9OpBsIR8dQwvUhbOUqphQk5R4P9DoDZADPKPQfB.jpg', 'Singlet', NULL, NULL, NULL, NULL, '90000', 'Baru', '-', 'pakaian pria', 'Denpasar', 'Tersedia Size L XL', '-', '-', 'Mohon Konfirmasi Dulu Sama Admin Sebelum Pemesanan', NULL, NULL),
(105, '328', '3DCrm5OPDbZaRhGM1yTi3mQarzhERUjFklCwSvGl.jpg', 'Pie Susu Chandra', NULL, NULL, NULL, NULL, '45000', 'Baru', '-', 'makanan dan minuman', 'Denpasar', 'Satu Kotak isi 50 Pcs', '-', '-', '-', NULL, NULL),
(106, '328', 'lY7yD3KQMqyzr1mLh9STzShEx5OSLJEgpiIGZdo3.jpg', 'CCTV', NULL, NULL, NULL, NULL, '2500000', 'Baru', '-', 'lain lain', 'Denpasar', 'Tersedia Beberapa Paket CCTV Murah dan Berkwalitas\r\n* Paket 2 Camera\r\n* Paket 4 Camera\r\n* Paket 6 Camera\r\n* Paket 8 Camera\r\n* Paket 16 Camera', 'Produk dijamin Bagus', 'Garansi Produk 1 Tahun', 'Banyak pilihan merek diantaranya : Dahua, SPC, Hillook, Hikvizion', NULL, NULL),
(107, '313', 'roMKJtHFuzzwTS4dV86JIv1fGS3vT0dWjTppTRhe.jpg', 'Stir kijang super', NULL, NULL, NULL, NULL, '600000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Stir kijang super original copotan kondisi siap pakai hanya minus pemakaian wajar fungsi normal tinggal pasang', 'Bekas berkualitas', 'Garansi uang kembali apabila tidak fungsi normal', 'Menjual barang bekas asli dan kualitas tentu nya mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(108, '313', '85RzPDVR64QbatmG8pfQDGhumCeFGNyYjoQ0527a.jpg', 'Stir Mitsubishi Lancer', NULL, NULL, NULL, NULL, '350000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Kondisi super mulus istimewa fungsi normal', 'Bekas berkualitas istimewa', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(109, '313', '4sPR5IRDmwW692spP3nitzVrIMP3Pkwr3HbKqUnW.jpg', 'Dudukan plat nomor fj hardtop', NULL, NULL, NULL, NULL, '425000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Rumah plat nomor beserta lampunya bekas asli Toyota hardtop kondisi utuh tanpa kropos tinggal repaint ulang', 'Bekas asli berkualitas', 'Garansi apabila tidak asli', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(110, '313', 'kg0kLeveJdXJZfAECdWxDNKXNHhBSgoWutfk8vRE.jpg', 'Gril hardtop copotan', NULL, NULL, NULL, NULL, '425000', 'Bekas', '2kg', 'otomotif', 'Badung', 'Grill depan eks Toyota hardtop kondisi utuh layak pakai', 'Bekas berkualitas tinggal pasang atau repaint sesuai selera', 'Garansi uang kembali apabila tidak sesuai', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(111, '313', 'TedLSUDCnJw0FXd8win8Xh9P26r49Llg3cRcFQA0.jpg', 'Gigi bolu fj 80 rasio 10:37', NULL, NULL, NULL, NULL, '1500000', 'Bekas', '12kg', 'otomotif', 'Badung', 'Gigi bolu atau satelit copotan Toyota fj hardtop 10:37', 'Kondisi bekas super istimewa', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Untuk hrg tertera per biji tersedia 2biji mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(112, '313', 'BhCubNnMcoCFDsoKLEJk749tnHXpoudgng9cUdXv.jpg', 'Stoplamp kijang Efi 03', NULL, NULL, NULL, NULL, '800000', 'Bekas', '3kg', 'otomotif', 'Badung', 'Stop lamp set ORI copotan kijang Efi 03 04 kondisi super istimewa mulus utuh no minus', 'Bekas berkualitas istimewa', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(113, '313', 'TSFJKO6ujxqKJdeflgnyY31sNDbn0c7lMaZ52mer.jpg', 'Headlamp/Reflektor kijang Efi 03 04', NULL, NULL, NULL, NULL, '900000', 'Bekas', '6kg', 'otomotif', 'Badung', 'Reflektor kijang Efi 03 original bekas kondisi utuh tidak pecah atau retak', 'Bekas berkualitas istimewa', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(114, '313', 'Igtrnl6xwJhbeBBmuaxCWdk5bJlpLPZbi6GQQToo.jpg', 'TM TC BJ PNP Toyota Dina', NULL, NULL, NULL, NULL, '8500000', 'Bekas', '80kg', 'otomotif', 'Badung', 'Transmisi 4speed dan transfercase 4WD BJ PNP Toyota Dina kondisi siap pakai', 'Bekas copotan fungsi normal', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(115, '313', 'PsKaGmfReS2Fdq8tRL8ltjndOV7uKsilQZf4L1vj.jpg', 'Stoplamp original baru star prima', NULL, NULL, NULL, NULL, '550000', 'Baru', '1kg', 'otomotif', 'Badung', 'Stoplamp Assy belakang Astrea star prima original baru mulus', 'Barang baru stok lama', 'Garansi uang kembali apabila tidak sesuai diskripsi', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(116, '313', 'VQaWAhSgZlUfuArE0nU3Grk6EhtJxg6FVVC5xeNC.jpg', 'Jok belakang APV arena GL', NULL, NULL, NULL, NULL, '1100000', 'Bekas', '30kg', 'otomotif', 'Badung', 'Jok paling belakang eks APV cocok untuk rubahan dimobil lainnya kondisi sangat bagus kulit asli masih terpasang mulus dan bersih', 'Bekas berkualitas istimewa', '-', 'Mohon tanyakan stock terlebih dahulu sebelum belanja terimakasih', NULL, NULL),
(117, '313', 'dji6InQYRDrs0V6sH1d1VcFrBBffqw1tMCE10vAl.jpg', 'Jasa towing dan derek', NULL, NULL, NULL, NULL, '1000000', 'Bekas', '-', 'jasa', 'Badung', 'Yg membutuhkan jasa towing angkut mobil motor dibali dan barang lainnya siap bantu kirim keluar kota atau provinsi harga menyesuaikan jarak', 'Siap melayani kebutuhan angkutan barang dan kendaraan anda', '-', 'Mohon konfirmasi langsung apabila dibutuhkan kapan saja dan dimana saja siap menjemput wa 082145153068\r\nTerimakasih', NULL, NULL),
(118, '402', 'yQklhsJwgN1djIXfrXJlA3UGnFJOuintNRqixtMz.jpg', 'Canang', NULL, NULL, NULL, NULL, '123456', 'Baru', '-', 'lain lain', 'Denpasar', 'Melayani grosir dan eceran', '-', '-', '-', NULL, NULL),
(120, '395', 'b1mHJCdsopKpwv4RkSMw5F2lFrQVhFnDTEd5pVH9.jpg', 'Tugu karang', NULL, NULL, NULL, NULL, '1900000', 'Baru', '-', 'seni dan kerajinan', 'Denpasar', 'Jual segala Pelinggih pasir mlela dan sanggah kayu', '-', '-', '-', NULL, NULL),
(121, '413', 'LjXjAhePfyGqXXnNO0DnKnmrqFlbD4c8MKonYpxx.jpg', 'Toyota Calya', NULL, NULL, NULL, NULL, '159850000', 'Baru', '-', 'otomotif', 'Denpasar', '-', '-', '-', 'TAHUN BARU MOBIL BARU\" 🥳😎\r\n\r\nDi obral stok 2021 : \r\n• Diskon Besar\r\n• Free Service 4th/50.000km*\r\n• Free Aksesoris \r\n• Free Emergency Call 5th\r\n\r\nInfo Pemesanan & Boking service\r\nRia kt \r\nTlp/Wa 👉🏻081239183356\r\n\r\nAtau klik link 👇🏻👇🏻👇🏻\r\n\r\nwww.promotoyotadibali.net', NULL, NULL),
(122, '413', 'OPJlwEmyD1yocTDO9gi3Cz14Llh9Fi12wxfkyToi.jpg', 'Toyota Yaris', NULL, NULL, NULL, NULL, '307450000', 'Baru', '-', 'otomotif', 'Denpasar', '-', '-', '-', 'TAHUN BARU MOBIL BARU\" 🥳😎\r\n\r\nDi obral stok 2021 : \r\n• Diskon Besar\r\n• Free Service 4th/50.000km*\r\n• Free Aksesoris \r\n• Free Emergency Call 5th\r\n\r\nInfo Pemesanan & Boking service\r\nRia kt \r\nTlp/Wa 👉🏻081239183356\r\n\r\nAtau klik link 👇🏻👇🏻👇🏻\r\n\r\nwww.promotoyotadibali.net', NULL, NULL),
(123, '413', 'oSHqQyOqr6V0faQdy72LV9qtca7D80gAqxRJWiIj.jpg', 'Toyota Rush', NULL, NULL, NULL, NULL, '296250000', 'Baru', '-', 'otomotif', 'Denpasar', '-', '-', '-', 'TAHUN BARU MOBIL BARU\" 🥳😎\r\n\r\nDi obral stok 2021 : \r\n• Diskon Besar\r\n• Free Service 4th/50.000km*\r\n• Free Aksesoris \r\n• Free Emergency Call 5th\r\n\r\nInfo Pemesanan & Boking service\r\nRia kt \r\nTlp/Wa 👉🏻081239183356\r\n\r\nAtau klik link 👇🏻👇🏻👇🏻\r\n\r\nwww.promotoyotadibali.net', NULL, NULL),
(124, '413', 'OjEQYsJABrrr3GVbQmzjfWop2UJ6W1X7QP1xhMLQ.jpg', 'Toyota Raize', NULL, NULL, NULL, NULL, '236250000', 'Baru', '-', 'otomotif', 'Denpasar', '-', '-', '-', 'TAHUN BARU MOBIL BARU\" 🥳😎\r\n\r\nDi obral stok 2021 : \r\n• Diskon Besar\r\n• Free Service 4th/50.000km*\r\n• Free Aksesoris \r\n• Free Emergency Call 5th\r\n\r\nInfo Pemesanan & Boking service\r\nRia kt \r\nTlp/Wa 👉🏻081239183356\r\n\r\nAtau klik link 👇🏻👇🏻👇🏻\r\n\r\nwww.promotoyotadibali.net', NULL, NULL);

--
-- Triggers `barang`
--
DELIMITER $$
CREATE TRIGGER `kirim_notifikasi` AFTER INSERT ON `barang` FOR EACH ROW BEGIN
INSERT INTO notification
SET 
id=new.id,
id_member=new.id_member,
nama_barang=new.nama_barang,
img_barang=new.img_barang,
daerah=new.daerah,
tanggal_berakhir=DATE_ADD(CURDATE(), INTERVAL 1 DAY);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `default_referal`
--

CREATE TABLE `default_referal` (
  `id` int(11) NOT NULL,
  `referal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `default_referal`
--

INSERT INTO `default_referal` (`id`, `referal`) VALUES
(1, 'BM0001');

-- --------------------------------------------------------

--
-- Table structure for table `default_user`
--

CREATE TABLE `default_user` (
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_member` int(11) NOT NULL,
  `point_member` int(11) NOT NULL,
  `point_idr_member` int(11) NOT NULL,
  `expiredDay` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `default_user`
--

INSERT INTO `default_user` (`type`, `price_member`, `point_member`, `point_idr_member`, `expiredDay`, `created_at`, `updated_at`) VALUES
('normal', 250000, 1, 25000, 750, '2021-10-26 16:00:00', '2021-10-26 16:00:00'),
('platinum', 1000000, 1, 20000, 0, '2021-10-26 16:00:00', '2021-10-26 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklanpict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `date_add` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `level`, `iklanpict`, `link`, `description`, `date_add`, `date_end`, `created_at`, `updated_at`) VALUES
(66, 'Home1', 'Home1O8c1LdxH15RsFJBaLAg6o12U27AwiqWaCShzfsLb.png', '-', '-', '2022-01-04', '2022-01-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `nama`, `img_kategori`, `level`) VALUES
(1, 'bahan pokok', 'Bahan Pokok', 'q8mi2HPASiJWAawpuQeW1iCZv39xbi5H1ZGpENjw.png', 'member'),
(2, 'pakaian pria', 'Pakaian Pria', 'VY7rZRnR7hKZ5HiyLTtqqaHLW4J7zymzCQ16R40E.png', 'member'),
(3, 'pakaian wanita', 'Pakaian Wanita', 'B3QiK4mCRFxQpSAYTIrVJGX61n8J3xU0Bs0Yydrv.png', 'member'),
(4, 'sepatu pria', 'Sepatu Pria', '6qLKjVOCH7hYWhii7ACaebtpDXGS48xZY9wW3DqU.png', 'member'),
(5, 'sepatu wanita', 'Sepatu Wanita', 'MZ1BnEEK0eNoCI2GultmjBboZv0p6M4J6y5gTPgE.png', 'member'),
(6, 'perlengkapan rumah', 'Perlengkapan Rumah', '9aSV2GT380uiAxlZzeunXAF3wkWeRhxrnBBD7wus.png', 'member'),
(7, 'elektronik', 'Elektronik', 'TNjMV07hCpWbZuvxcd8rgZj4kzhXG562SGvQowMK.png', 'member'),
(8, 'smartphone', 'Smartphone', 'l5s8xjGP5rRe29anGBpRFohsloVYI4wr6fQudxPO.png', 'member'),
(9, 'komputer', 'Komputer', 'Fp79z8Q4cSjcjtZDGUxSdiilZ5x6LgiL7pIUwD6W.png', 'member'),
(10, 'kecantikan', 'Perawatan & Kecantikan', 'tSIofXyQTRhnW5LITzlmjImTEwkZ2bFBfH5L4Vgf.png', 'member'),
(11, 'aksesoris pria', 'Aksesoris Pria', '6ImQ2jCPshKny0SSVCAJMINOAB2ghIdX6CZTQJjb.png', 'member'),
(12, 'aksesoris wanita', 'Aksesoris Wanita', 'cyZL8XuV7vKrV6yXIwekHqDeoxy9RxsmwjWjkSmp.png', 'member'),
(13, 'otomotif', 'Otomotif', 'GHdhTLeVjTRLeYy4b7uootMIfAEAd8a5whiyfUCY.png', 'member'),
(15, 'aksesoris smartphone', 'Aksesoris Smartphone', 'FKhGWFlTcggYUAWtTqK31sPtVgy8Q7lqFAeTyoxW.png', 'member'),
(16, 'aksesoris komputer', 'Aksesoris Komputer', 'HiaCj85Q893PYZ9Gumzv6kpOpdX5uKdHTWRYATZu.png', 'member'),
(18, 'dapur kita', 'dapur kita', 'WQ26BsNJGxqUsn7UgEmiILJwVuFJrYqPAhgZkVBz.png', 'member'),
(19, 'rumah kita', 'rumah kita', 'Ior7DxY0b3BnNDPOwcdLrg9KHD1dn0QK2A1WqP5L.png', 'member'),
(20, 'seni dan kerajinan', 'seni dan kerajinan', 'QRGX1yMbGOUWCMSDIdvGZIUmZTj7rCcNLN55szX0.png', 'member'),
(21, 'makanan dan minuman', 'makanan dan minuman', '6ccU6L7EENFxdk6082nn4ZJWDavI9BEJHg82NDqS.png', 'member'),
(22, 'buku, film, dan musik', 'buku, film, dan musik', 'kiIxgLuYbZE952ANiDFB2JyGJfdFA4oZUGUJgsWW.png', 'member'),
(23, 'kesehatan', 'kesehatan', 'BHAsh2l6LqyrQVwFO2GMcDF9oS9gqGlHrIbfibTR.png', 'member'),
(24, 'lowongan pekerjaan', 'lowongan pekerjaan', 'u4SkFlRmPwL1X5MUAdIXb3Co15m7s2lpMhH8EAll.png', 'member'),
(25, 'alat musik', 'alat musik', 'CUXIA4N81lj903zmzKmp1GsoR0QA26lGTkEjUOt7.png', 'member'),
(26, 'penyewaan', 'penyewaan', 'd8Wuoos2KRCzRk1Z232TjSVxU5QV6VXosOFt9ufU.png', 'member'),
(27, 'penyewaan rumah', 'penyewaan rumah', 'cjsaCe2hSJQP8cHXcoIudGUhIn1tNPofqDq3R0p3.png', 'member'),
(28, 'peralatan olah raga', 'peralatan olah raga', '6j0Hc49mYatDhH65isAwBpEBHc65uSoEhlGD7tNM.png', NULL),
(29, 'kebutuhan hewan dan peliharaan', 'kebutuhan hewan dan peliharaan', 'nenrwHVNecXB9arWRa484X6DsMavIRmyAmTRx9PI.png', NULL),
(30, 'hobi kita', 'hobi kita', 'VjMfrKxQUGcqgyfRxr2JBakvP169giAuKkneFD83.png', NULL),
(31, 'perkantoran', 'perkantoran', '5eLQUqzuauzJAtyw688xc5ZSV4IIvCgoiHnd0oZD.png', 'member'),
(32, 'entertainment', 'entertainment', 'McDo5y16damaHzRD7IaAs2Bf1FKKQbOxdHcuok5S.png', 'member'),
(34, 'jasa', 'jasa', '980BU9QorilBiHgfz2c35blZD8LiDQAnLdbf22U6.png', 'member'),
(35, 'lain lain', 'lain-lain', 'VzDCNmNplRDQSErplmlqfbosBCA4IVv8k3jWMZN3.png', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(49, '2021_01_18_070647_create_likes_table', 1),
(50, '2021_01_20_045129_add_soft_deletes_to_likes_table', 1),
(161, '2014_10_12_000000_create_member_table', 2),
(162, '2014_10_12_100000_create_password_resets_table', 2),
(163, '2019_08_19_000000_create_failed_jobs_table', 2),
(164, '2021_10_25_010627_create_barangs_table', 2),
(165, '2021_10_26_064135_create_kategori_table', 2),
(166, '2021_10_26_064628_create_toko_table', 2),
(167, '2021_01_16_144334_create_posts_table', 3),
(168, '2021_11_17_062313_create_wilayah_table', 3),
(169, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(170, '2021_11_21_113719_create_notification_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id`, `register_no`, `reg_point`, `reg_from`, `created_at`, `updated_at`) VALUES
(40, 'BM0002', '1', 'BM0002-1', '2021-12-01 17:01:33', '2021-12-01 17:01:33'),
(42, 'BM0002', '1', 'BM0002-2', '2021-12-01 17:01:33', '2021-12-01 17:01:33'),
(169, 'BM0003', '1', 'BM0003-1', '2021-12-06 15:32:43', '2021-12-06 15:32:43'),
(173, 'BM0004', '1', 'BM0004-1', '2021-12-07 14:42:57', '2021-12-07 14:42:57'),
(175, 'BM0003-1', '1', 'BM0003-2', '2021-12-13 12:54:53', '2021-12-13 12:54:53'),
(176, 'BM0003', '1', 'BM0003-2', '2021-12-13 12:54:53', '2021-12-13 12:54:53'),
(177, 'BM0003-1', '1', 'BM0003-3', '2021-12-13 13:09:33', '2021-12-13 13:09:33'),
(178, 'BM0003', '1', 'BM0003-3', '2021-12-13 13:09:33', '2021-12-13 13:09:33'),
(179, 'BM0002-2', '1', 'BM0002-3', '2021-12-13 14:35:55', '2021-12-13 14:35:55'),
(180, 'BM0002', '1', 'BM0002-3', '2021-12-13 14:35:55', '2021-12-13 14:35:55'),
(181, 'BM0005', '1', 'BM0005-1', '2021-12-13 14:54:27', '2021-12-13 14:54:27'),
(182, 'BM0002-2', '1', 'BM0002-4', '2021-12-13 15:23:15', '2021-12-13 15:23:15'),
(183, 'BM0002', '1', 'BM0002-4', '2021-12-13 15:23:15', '2021-12-13 15:23:15'),
(184, 'BM0003-2', '1', 'BM0003-4', '2021-12-13 15:44:41', '2021-12-13 15:44:41'),
(185, 'BM0003-1', '1', 'BM0003-4', '2021-12-13 15:44:41', '2021-12-13 15:44:41'),
(186, 'BM0003', '1', 'BM0003-4', '2021-12-13 15:44:41', '2021-12-13 15:44:41'),
(187, 'BM0005', '1', 'BM0005-2', '2021-12-13 16:38:22', '2021-12-13 16:38:22'),
(188, 'BM0005', '1', 'BM0005-3', '2021-12-13 19:41:31', '2021-12-13 19:41:31'),
(189, 'BM0002-2', '1', 'BM0002-5', '2021-12-13 22:09:35', '2021-12-13 22:09:35'),
(190, 'BM0002', '1', 'BM0002-5', '2021-12-13 22:09:35', '2021-12-13 22:09:35'),
(191, 'BM0002-2', '1', 'BM0002-6', '2021-12-13 22:21:47', '2021-12-13 22:21:47'),
(192, 'BM0002', '1', 'BM0002-6', '2021-12-13 22:21:47', '2021-12-13 22:21:47'),
(193, 'BM0002-2', '1', 'BM0002-7', '2021-12-13 22:22:36', '2021-12-13 22:22:36'),
(194, 'BM0002', '1', 'BM0002-7', '2021-12-13 22:22:36', '2021-12-13 22:22:36'),
(195, 'BM0002-2', '1', 'BM0002-8', '2021-12-13 22:39:04', '2021-12-13 22:39:04'),
(196, 'BM0002', '1', 'BM0002-8', '2021-12-13 22:39:04', '2021-12-13 22:39:04'),
(197, 'BM0003-2', '1', 'BM0003-5', '2021-12-14 07:47:38', '2021-12-14 07:47:38'),
(198, 'BM0003-1', '1', 'BM0003-5', '2021-12-14 07:47:38', '2021-12-14 07:47:38'),
(199, 'BM0003', '1', 'BM0003-5', '2021-12-14 07:47:38', '2021-12-14 07:47:38'),
(200, 'BM0003-1', '1', 'BM0003-6', '2021-12-14 08:05:30', '2021-12-14 08:05:30'),
(201, 'BM0003', '1', 'BM0003-6', '2021-12-14 08:05:30', '2021-12-14 08:05:30'),
(202, 'BM0005', '1', 'BM0005-4', '2021-12-14 11:21:58', '2021-12-14 11:21:58'),
(203, 'BM0002-2', '1', 'BM0002-9', '2021-12-14 11:46:20', '2021-12-14 11:46:20'),
(204, 'BM0002', '1', 'BM0002-9', '2021-12-14 11:46:20', '2021-12-14 11:46:20'),
(205, 'BM0005', '1', 'BM0005-5', '2021-12-14 12:22:45', '2021-12-14 12:22:45'),
(206, 'BM0005-2', '1', 'BM0005-6', '2021-12-14 12:46:52', '2021-12-14 12:46:52'),
(207, 'BM0005', '1', 'BM0005-6', '2021-12-14 12:46:52', '2021-12-14 12:46:52'),
(208, 'BM0005-1', '1', 'BM0005-7', '2021-12-14 15:26:43', '2021-12-14 15:26:43'),
(209, 'BM0005', '1', 'BM0005-7', '2021-12-14 15:26:43', '2021-12-14 15:26:43'),
(210, 'BM0004-1', '1', 'BM0004-2', '2021-12-15 08:33:27', '2021-12-15 08:33:27'),
(211, 'BM0004', '1', 'BM0004-2', '2021-12-15 08:33:27', '2021-12-15 08:33:27'),
(212, 'BM0002-2', '1', 'BM0002-10', '2021-12-15 15:29:43', '2021-12-15 15:29:43'),
(213, 'BM0002', '1', 'BM0002-10', '2021-12-15 15:29:43', '2021-12-15 15:29:43'),
(214, 'BM0002-2', '1', 'BM0002-11', '2021-12-16 09:12:02', '2021-12-16 09:12:02'),
(215, 'BM0002', '1', 'BM0002-11', '2021-12-16 09:12:02', '2021-12-16 09:12:02'),
(216, 'BM0004-1', '1', 'BM0004-3', '2021-12-16 16:19:48', '2021-12-16 16:19:48'),
(217, 'BM0004', '1', 'BM0004-3', '2021-12-16 16:19:48', '2021-12-16 16:19:48'),
(218, 'BM0002-2', '1', 'BM0002-12', '2021-12-17 15:20:09', '2021-12-17 15:20:09'),
(219, 'BM0002', '1', 'BM0002-12', '2021-12-17 15:20:09', '2021-12-17 15:20:09'),
(220, 'BM0002-2', '1', 'BM0002-13', '2021-12-17 18:46:38', '2021-12-17 18:46:38'),
(221, 'BM0002', '1', 'BM0002-13', '2021-12-17 18:46:38', '2021-12-17 18:46:38'),
(222, 'BM0003-2', '1', 'BM0003-7', '2021-12-18 17:40:56', '2021-12-18 17:40:56'),
(223, 'BM0003-1', '1', 'BM0003-7', '2021-12-18 17:40:56', '2021-12-18 17:40:56'),
(224, 'BM0003', '1', 'BM0003-7', '2021-12-18 17:40:56', '2021-12-18 17:40:56'),
(225, 'BM0004-1', '1', 'BM0004-4', '2021-12-18 17:47:34', '2021-12-18 17:47:34'),
(226, 'BM0004', '1', 'BM0004-4', '2021-12-18 17:47:34', '2021-12-18 17:47:34'),
(227, 'BM0002-2', '1', 'BM0002-14', '2021-12-19 09:31:02', '2021-12-19 09:31:02'),
(228, 'BM0002', '1', 'BM0002-14', '2021-12-19 09:31:02', '2021-12-19 09:31:02'),
(229, 'BM0002-14', '1', 'BM0002-15', '2021-12-19 18:52:51', '2021-12-19 18:52:51'),
(230, 'BM0002-2', '1', 'BM0002-15', '2021-12-19 18:52:51', '2021-12-19 18:52:51'),
(231, 'BM0002', '1', 'BM0002-15', '2021-12-19 18:52:51', '2021-12-19 18:52:51'),
(232, 'BM0002-14', '1', 'BM0002-16', '2021-12-19 18:59:15', '2021-12-19 18:59:15'),
(233, 'BM0002-2', '1', 'BM0002-16', '2021-12-19 18:59:15', '2021-12-19 18:59:15'),
(234, 'BM0002', '1', 'BM0002-16', '2021-12-19 18:59:15', '2021-12-19 18:59:15'),
(235, 'BM0002-4', '1', 'BM0002-17', '2021-12-21 14:07:50', '2021-12-21 14:07:50'),
(236, 'BM0002-2', '1', 'BM0002-17', '2021-12-21 14:07:50', '2021-12-21 14:07:50'),
(237, 'BM0002', '1', 'BM0002-17', '2021-12-21 14:07:50', '2021-12-21 14:07:50'),
(238, 'BM0002-4', '1', 'BM0002-18', '2021-12-21 14:32:35', '2021-12-21 14:32:35'),
(239, 'BM0002-2', '1', 'BM0002-18', '2021-12-21 14:32:35', '2021-12-21 14:32:35'),
(240, 'BM0002', '1', 'BM0002-18', '2021-12-21 14:32:35', '2021-12-21 14:32:35'),
(241, 'BM0002-14', '1', 'BM0002-19', '2021-12-21 14:48:47', '2021-12-21 14:48:47'),
(242, 'BM0002-2', '1', 'BM0002-19', '2021-12-21 14:48:47', '2021-12-21 14:48:47'),
(243, 'BM0002', '1', 'BM0002-19', '2021-12-21 14:48:47', '2021-12-21 14:48:47'),
(244, 'BM0002-4', '1', 'BM0002-20', '2021-12-21 14:51:55', '2021-12-21 14:51:55'),
(245, 'BM0002-2', '1', 'BM0002-20', '2021-12-21 14:51:55', '2021-12-21 14:51:55'),
(246, 'BM0002', '1', 'BM0002-20', '2021-12-21 14:51:55', '2021-12-21 14:51:55'),
(247, 'BM0002-4', '1', 'BM0002-21', '2021-12-21 15:01:25', '2021-12-21 15:01:25'),
(248, 'BM0002-2', '1', 'BM0002-21', '2021-12-21 15:01:25', '2021-12-21 15:01:25'),
(249, 'BM0002', '1', 'BM0002-21', '2021-12-21 15:01:25', '2021-12-21 15:01:25'),
(250, 'BM0002-4', '1', 'BM0002-22', '2021-12-21 15:02:57', '2021-12-21 15:02:57'),
(251, 'BM0002-2', '1', 'BM0002-22', '2021-12-21 15:02:57', '2021-12-21 15:02:57'),
(252, 'BM0002', '1', 'BM0002-22', '2021-12-21 15:02:57', '2021-12-21 15:02:57'),
(253, 'BM0002-4', '1', 'BM0002-23i', '2021-12-21 16:06:09', '2021-12-21 16:06:09'),
(254, 'BM0005-2', '1', 'BM0005-8', '2021-12-21 18:36:33', '2021-12-21 18:36:33'),
(255, 'BM0005', '1', 'BM0005-8', '2021-12-21 18:36:33', '2021-12-21 18:36:33'),
(256, 'BM0004-1', '1', 'BM0004-5', '2021-12-22 12:48:31', '2021-12-22 12:48:31'),
(257, 'BM0004', '1', 'BM0004-5', '2021-12-22 12:48:31', '2021-12-22 12:48:31'),
(258, 'BM0000', '1', 'BM0002-1', '2021-12-01 17:01:33', '2021-12-01 17:01:33'),
(259, 'BM6597', '1', 'BM0002-1', '2021-12-01 17:01:33', '2021-12-01 17:01:33'),
(260, 'BM0003-2', '1', 'BM0003-8', '2021-12-22 14:16:23', '2021-12-22 14:16:23'),
(261, 'BM0003-1', '1', 'BM0003-8', '2021-12-22 14:16:23', '2021-12-22 14:16:23'),
(262, 'BM0003', '1', 'BM0003-8', '2021-12-22 14:16:23', '2021-12-22 14:16:23'),
(263, 'BM0002', '1', 'BM0002-23', '2021-12-23 11:33:17', '2021-12-23 11:33:17'),
(264, 'BM0004-1', '1', 'BM0004-6', '2021-12-23 11:43:15', '2021-12-23 11:43:15'),
(265, 'BM0004', '1', 'BM0004-6', '2021-12-23 11:43:15', '2021-12-23 11:43:15'),
(266, 'BM0005', '1', 'BM0005-9', '2021-12-23 21:12:48', '2021-12-23 21:12:48'),
(267, 'BM0005-2', '1', 'BM0005-10', '2021-12-23 22:27:40', '2021-12-23 22:27:40'),
(268, 'BM0005', '1', 'BM0005-10', '2021-12-23 22:27:40', '2021-12-23 22:27:40'),
(269, 'BM0004-4', '1', 'BM0004-7', '2021-12-24 10:30:58', '2021-12-24 10:30:58'),
(270, 'BM0004-1', '1', 'BM0004-7', '2021-12-24 10:30:58', '2021-12-24 10:30:58'),
(271, 'BM0004', '1', 'BM0004-7', '2021-12-24 10:30:58', '2021-12-24 10:30:58'),
(272, 'BM0006', '1', 'BM0006-1', '2021-12-24 11:22:04', '2021-12-24 11:22:04'),
(273, 'BM0011', '1', 'BM0011-1', '2021-12-24 11:25:02', '2021-12-24 11:25:02'),
(274, 'BM0008', '1', 'BM0008-1', '2021-12-24 11:25:39', '2021-12-24 11:25:39'),
(275, 'BM0002', '1', 'BM0002-23i', NULL, NULL),
(276, 'BM0002-2', '1', 'BM0002-23i', NULL, NULL),
(277, 'BM0002-2', '1', 'BM0002-23', NULL, NULL),
(278, 'BM0014', '1', 'BM0014-1', '2021-12-24 11:28:25', '2021-12-24 11:28:25'),
(279, 'BM0007', '1', 'BM0007-1', '2021-12-24 11:32:41', '2021-12-24 11:32:41'),
(280, 'BM0015', '1', 'BM0015-1', '2021-12-24 11:34:25', '2021-12-24 11:34:25'),
(281, 'BM0004-4', '1', 'BM0004-8', '2021-12-24 11:49:22', '2021-12-24 11:49:22'),
(282, 'BM0004-1', '1', 'BM0004-8', '2021-12-24 11:49:22', '2021-12-24 11:49:22'),
(283, 'BM0004', '1', 'BM0004-8', '2021-12-24 11:49:22', '2021-12-24 11:49:22'),
(284, 'BM0009', '1', 'BM0009-1', '2021-12-24 12:19:12', '2021-12-24 12:19:12'),
(285, 'BM0006-1', '1', 'BM0006-2', '2021-12-25 06:58:00', '2021-12-25 06:58:00'),
(286, 'BM0006', '1', 'BM0006-2', '2021-12-25 06:58:00', '2021-12-25 06:58:00'),
(287, 'BM0006-1', '1', 'BM0006-3', '2021-12-25 07:32:10', '2021-12-25 07:32:10'),
(288, 'BM0006', '1', 'BM0006-3', '2021-12-25 07:32:10', '2021-12-25 07:32:10'),
(289, 'BM0006-1', '1', 'BM0006-4', '2021-12-25 07:34:37', '2021-12-25 07:34:37'),
(290, 'BM0006', '1', 'BM0006-4', '2021-12-25 07:34:37', '2021-12-25 07:34:37'),
(291, 'BM0006-1', '1', 'BM0006-5', '2021-12-25 08:19:40', '2021-12-25 08:19:40'),
(292, 'BM0006', '1', 'BM0006-5', '2021-12-25 08:19:40', '2021-12-25 08:19:40'),
(293, 'BM0003-2', '1', 'BM0003-9', '2021-12-25 10:18:02', '2021-12-25 10:18:02'),
(294, 'BM0003-1', '1', 'BM0003-9', '2021-12-25 10:18:02', '2021-12-25 10:18:02'),
(295, 'BM0003', '1', 'BM0003-9', '2021-12-25 10:18:02', '2021-12-25 10:18:02'),
(296, 'BM0003-9', '1', 'BM0003-10', '2021-12-25 12:39:17', '2021-12-25 12:39:17'),
(297, 'BM0003-2', '1', 'BM0003-10', '2021-12-25 12:39:17', '2021-12-25 12:39:17'),
(298, 'BM0003-1', '1', 'BM0003-10', '2021-12-25 12:39:17', '2021-12-25 12:39:17'),
(299, 'BM0003', '1', 'BM0003-10', '2021-12-25 12:39:17', '2021-12-25 12:39:17'),
(300, 'BM0002-2', '1', 'BM0002-24', '2021-12-25 12:50:45', '2021-12-25 12:50:45'),
(301, 'BM0002', '1', 'BM0002-24', '2021-12-25 12:50:45', '2021-12-25 12:50:45'),
(302, 'BM0003-10', '1', 'BM0003-11', '2021-12-25 12:51:20', '2021-12-25 12:51:20'),
(303, 'BM0003-9', '1', 'BM0003-11', '2021-12-25 12:51:20', '2021-12-25 12:51:20'),
(304, 'BM0003-2', '1', 'BM0003-11', '2021-12-25 12:51:20', '2021-12-25 12:51:20'),
(305, 'BM0003-1', '1', 'BM0003-11', '2021-12-25 12:51:20', '2021-12-25 12:51:20'),
(306, 'BM0003', '1', 'BM0003-11', '2021-12-25 12:51:20', '2021-12-25 12:51:20'),
(307, 'BM0001', '1', 'BM0001-1', '2021-12-25 13:38:51', '2021-12-25 13:38:51'),
(308, 'BM0002-2', '1', 'BM0002-25', '2021-12-25 13:46:32', '2021-12-25 13:46:32'),
(309, 'BM0002', '1', 'BM0002-25', '2021-12-25 13:46:32', '2021-12-25 13:46:32'),
(310, 'BM0012', '1', 'BM0012-1', '2021-12-25 14:03:05', '2021-12-25 14:03:05'),
(311, 'BM0005-2', '1', 'BM0005-11', '2021-12-25 15:56:45', '2021-12-25 15:56:45'),
(312, 'BM0005', '1', 'BM0005-11', '2021-12-25 15:56:45', '2021-12-25 15:56:45'),
(313, 'BM0001', '1', 'BM0001-2', '2021-12-25 18:06:52', '2021-12-25 18:06:52'),
(314, 'BM0007-1', '1', 'BM0007-2', '2021-12-26 11:02:58', '2021-12-26 11:02:58'),
(315, 'BM0007', '1', 'BM0007-2', '2021-12-26 11:02:58', '2021-12-26 11:02:58'),
(316, 'BM0003-10', '1', 'BM0003-12', '2021-12-26 12:52:45', '2021-12-26 12:52:45'),
(317, 'BM0003-9', '1', 'BM0003-12', '2021-12-26 12:52:45', '2021-12-26 12:52:45'),
(318, 'BM0003-2', '1', 'BM0003-12', '2021-12-26 12:52:45', '2021-12-26 12:52:45'),
(319, 'BM0003-1', '1', 'BM0003-12', '2021-12-26 12:52:45', '2021-12-26 12:52:45'),
(320, 'BM0003', '1', 'BM0003-12', '2021-12-26 12:52:45', '2021-12-26 12:52:45'),
(321, 'BM0003-2', '1', 'BM0003-13', '2021-12-26 15:42:36', '2021-12-26 15:42:36'),
(322, 'BM0003-1', '1', 'BM0003-13', '2021-12-26 15:42:36', '2021-12-26 15:42:36'),
(323, 'BM0003', '1', 'BM0003-13', '2021-12-26 15:42:36', '2021-12-26 15:42:36'),
(324, 'BM0003-2', '1', 'BM0003-14', '2021-12-26 18:42:17', '2021-12-26 18:42:17'),
(325, 'BM0003-1', '1', 'BM0003-14', '2021-12-26 18:42:17', '2021-12-26 18:42:17'),
(326, 'BM0003', '1', 'BM0003-14', '2021-12-26 18:42:17', '2021-12-26 18:42:17'),
(327, 'BM0012-1', '1', 'BM0012-2', '2021-12-27 08:20:37', '2021-12-27 08:20:37'),
(328, 'BM0012', '1', 'BM0012-2', '2021-12-27 08:20:37', '2021-12-27 08:20:37'),
(329, 'BM0003-2', '1', 'BM0003-15', '2021-12-27 20:24:30', '2021-12-27 20:24:30'),
(330, 'BM0003-1', '1', 'BM0003-15', '2021-12-27 20:24:30', '2021-12-27 20:24:30'),
(331, 'BM0003', '1', 'BM0003-15', '2021-12-27 20:24:30', '2021-12-27 20:24:30'),
(332, 'BM0003-15', '1', 'BM0003-16', '2021-12-27 21:06:29', '2021-12-27 21:06:29'),
(333, 'BM0003-2', '1', 'BM0003-16', '2021-12-27 21:06:29', '2021-12-27 21:06:29'),
(334, 'BM0003-1', '1', 'BM0003-16', '2021-12-27 21:06:29', '2021-12-27 21:06:29'),
(335, 'BM0003', '1', 'BM0003-16', '2021-12-27 21:06:29', '2021-12-27 21:06:29'),
(336, 'BM0002-9', '1', 'BM0002-26', '2021-12-27 21:12:08', '2021-12-27 21:12:08'),
(337, 'BM0002-2', '1', 'BM0002-26', '2021-12-27 21:12:08', '2021-12-27 21:12:08'),
(338, 'BM0002', '1', 'BM0002-26', '2021-12-27 21:12:08', '2021-12-27 21:12:08'),
(339, 'BM0002-9', '1', 'BM0002-27', '2021-12-27 21:21:32', '2021-12-27 21:21:32'),
(340, 'BM0002-2', '1', 'BM0002-27', '2021-12-27 21:21:32', '2021-12-27 21:21:32'),
(341, 'BM0002', '1', 'BM0002-27', '2021-12-27 21:21:32', '2021-12-27 21:21:32'),
(342, 'BM0003-2', '1', 'BM0003-17', '2021-12-28 10:32:38', '2021-12-28 10:32:38'),
(343, 'BM0003-1', '1', 'BM0003-17', '2021-12-28 10:32:38', '2021-12-28 10:32:38'),
(344, 'BM0003', '1', 'BM0003-17', '2021-12-28 10:32:38', '2021-12-28 10:32:38'),
(345, 'BM0003-17', '1', 'BM0003-18', '2021-12-28 10:52:28', '2021-12-28 10:52:28'),
(346, 'BM0003-2', '1', 'BM0003-18', '2021-12-28 10:52:28', '2021-12-28 10:52:28'),
(347, 'BM0003-1', '1', 'BM0003-18', '2021-12-28 10:52:28', '2021-12-28 10:52:28'),
(348, 'BM0003', '1', 'BM0003-18', '2021-12-28 10:52:28', '2021-12-28 10:52:28'),
(349, 'BM0014-1', '1', 'BM0014-2', '2021-12-28 11:16:47', '2021-12-28 11:16:47'),
(350, 'BM0014', '1', 'BM0014-2', '2021-12-28 11:16:47', '2021-12-28 11:16:47'),
(351, 'BM0002-2', '1', 'BM0002-28', '2021-12-28 12:15:38', '2021-12-28 12:15:38'),
(352, 'BM0002', '1', 'BM0002-28', '2021-12-28 12:15:38', '2021-12-28 12:15:38'),
(353, 'BM0003-2', '1', 'BM0003-19', '2021-12-28 17:01:56', '2021-12-28 17:01:56'),
(354, 'BM0003-1', '1', 'BM0003-19', '2021-12-28 17:01:56', '2021-12-28 17:01:56'),
(355, 'BM0003', '1', 'BM0003-19', '2021-12-28 17:01:56', '2021-12-28 17:01:56'),
(356, 'BM0003-2', '1', 'BM0003-20', '2021-12-28 17:18:58', '2021-12-28 17:18:58'),
(357, 'BM0003-1', '1', 'BM0003-20', '2021-12-28 17:18:58', '2021-12-28 17:18:58'),
(358, 'BM0003', '1', 'BM0003-20', '2021-12-28 17:18:58', '2021-12-28 17:18:58'),
(359, 'BM0003-2', '1', 'BM0003-21', '2021-12-28 17:52:07', '2021-12-28 17:52:07'),
(360, 'BM0003-1', '1', 'BM0003-21', '2021-12-28 17:52:07', '2021-12-28 17:52:07'),
(361, 'BM0003', '1', 'BM0003-21', '2021-12-28 17:52:07', '2021-12-28 17:52:07'),
(363, 'BM0005-2', '1', 'BM0005-12', '2021-12-29 11:22:02', '2021-12-29 11:22:02'),
(364, 'BM0005', '1', 'BM0005-12', '2021-12-29 11:22:02', '2021-12-29 11:22:02'),
(365, 'BM0004-1', '1', 'BM0004-9', '2021-12-29 11:22:02', '2021-12-29 11:22:02'),
(366, 'BM0004', '1', 'BM0004-9', '2021-12-29 11:22:02', '2021-12-29 11:22:02'),
(367, 'BM0003-2', '1', 'BM0003-22', '2021-12-29 14:23:02', '2021-12-29 14:23:02'),
(368, 'BM0003-1', '1', 'BM0003-22', '2021-12-29 14:23:02', '2021-12-29 14:23:02'),
(369, 'BM0003', '1', 'BM0003-22', '2021-12-29 14:23:02', '2021-12-29 14:23:02'),
(370, 'BM0001', '1', 'BM0001-3', '2021-12-29 16:20:59', '2021-12-29 16:20:59'),
(371, 'BM0006-5', '1', 'BM0006-6', '2021-12-30 09:52:37', '2021-12-30 09:52:37'),
(372, 'BM0006-1', '1', 'BM0006-6', '2021-12-30 09:52:37', '2021-12-30 09:52:37'),
(373, 'BM0006', '1', 'BM0006-6', '2021-12-30 09:52:37', '2021-12-30 09:52:37'),
(374, 'BM0005', '1', 'BM0005-13', '2021-12-30 18:30:59', '2021-12-30 18:30:59'),
(375, 'BM0003-10', '1', 'BM0003-23', '2021-12-31 15:11:02', '2021-12-31 15:11:02'),
(376, 'BM0003-9', '1', 'BM0003-23', '2021-12-31 15:11:02', '2021-12-31 15:11:02'),
(377, 'BM0003-2', '1', 'BM0003-23', '2021-12-31 15:11:02', '2021-12-31 15:11:02'),
(378, 'BM0003-1', '1', 'BM0003-23', '2021-12-31 15:11:02', '2021-12-31 15:11:02'),
(379, 'BM0003', '1', 'BM0003-23', '2021-12-31 15:11:02', '2021-12-31 15:11:02'),
(380, 'BM0003-23', '1', 'BM0003-24', '2021-12-31 15:41:13', '2021-12-31 15:41:13'),
(381, 'BM0003-10', '1', 'BM0003-24', '2021-12-31 15:41:13', '2021-12-31 15:41:13'),
(382, 'BM0003-9', '1', 'BM0003-24', '2021-12-31 15:41:13', '2021-12-31 15:41:13'),
(383, 'BM0003-2', '1', 'BM0003-24', '2021-12-31 15:41:13', '2021-12-31 15:41:13'),
(384, 'BM0003', '1', 'BM0003-24', '2021-12-31 15:41:13', '2021-12-31 15:41:13'),
(385, 'BM0003-7', '1', 'BM0003-25', '2021-12-31 20:27:36', '2021-12-31 20:27:36'),
(386, 'BM0003-2', '1', 'BM0003-25', '2021-12-31 20:27:36', '2021-12-31 20:27:36'),
(387, 'BM0003-1', '1', 'BM0003-25', '2021-12-31 20:27:36', '2021-12-31 20:27:36'),
(388, 'BM0003', '1', 'BM0003-25', '2021-12-31 20:27:36', '2021-12-31 20:27:36'),
(389, 'BM0003-24', '1', 'BM0003-26', '2022-01-01 17:54:47', '2022-01-01 17:54:47'),
(390, 'BM0003-23', '1', 'BM0003-26', NULL, NULL),
(391, 'BM0003-10', '1', 'BM0003-26', NULL, NULL),
(392, 'BM0003-9', '1', 'BM0003-26', NULL, NULL),
(393, 'BM0003', '1', 'BM0003-26', NULL, NULL),
(394, 'BM0004-1', '1', 'BM0004-10', '2022-01-02 12:56:24', '2022-01-02 12:56:24'),
(395, 'BM0004', '1', 'BM0004-10', '2022-01-02 12:56:24', '2022-01-02 12:56:24'),
(396, 'BM0002-11', '1', 'BM0002-29', '2022-01-02 19:48:30', '2022-01-02 19:48:30'),
(397, 'BM0002-2', '1', 'BM0002-29', '2022-01-02 19:48:30', '2022-01-02 19:48:30'),
(398, 'BM0002', '1', 'BM0002-29', '2022-01-02 19:48:30', '2022-01-02 19:48:30'),
(399, 'BM0005', '1', 'BM0005-14', '2022-01-03 16:27:57', '2022-01-03 16:27:57'),
(400, 'BM0006-1', '1', 'BM0006-7', '2022-01-03 18:30:07', '2022-01-03 18:30:07'),
(401, 'BM0006', '1', 'BM0006-7', '2022-01-03 18:30:07', '2022-01-03 18:30:07'),
(402, 'BM0005', '1', 'BM0005-15', '2022-01-03 19:35:13', '2022-01-03 19:35:13'),
(403, 'BM0002-2', '1', 'BM0002-30', '2022-01-03 20:17:11', '2022-01-03 20:17:11'),
(404, 'BM0002', '1', 'BM0002-30', '2022-01-03 20:17:11', '2022-01-03 20:17:11'),
(405, 'BM0002-30', '1', 'BM0002-31', '2022-01-04 12:09:03', '2022-01-04 12:09:03'),
(406, 'BM0002-2', '1', 'BM0002-31', '2022-01-04 12:09:03', '2022-01-04 12:09:03'),
(407, 'BM0002', '1', 'BM0002-31', '2022-01-04 12:09:03', '2022-01-04 12:09:03'),
(408, 'BM0005-2', '1', 'BM0005-16', '2022-01-04 14:34:29', '2022-01-04 14:34:29'),
(409, 'BM0005', '1', 'BM0005-16', '2022-01-04 14:34:29', '2022-01-04 14:34:29'),
(410, 'BM0005', '1', 'BM0005-17', '2022-01-04 15:28:22', '2022-01-04 15:28:22'),
(411, 'BM0005-16', '1', 'BM0005-18', '2022-01-04 20:17:12', '2022-01-04 20:17:12'),
(412, 'BM0005-2', '1', 'BM0005-18', '2022-01-04 20:17:12', '2022-01-04 20:17:12'),
(413, 'BM0005', '1', 'BM0005-18', '2022-01-04 20:17:12', '2022-01-04 20:17:12'),
(414, 'BM0003-2', '1', 'BM0003-27', '2022-01-04 20:31:21', '2022-01-04 20:31:21'),
(415, 'BM0003-1', '1', 'BM0003-27', '2022-01-04 20:31:21', '2022-01-04 20:31:21'),
(416, 'BM0003', '1', 'BM0003-27', '2022-01-04 20:31:21', '2022-01-04 20:31:21'),
(417, 'BM0003-27', '1', 'BM0003-28', '2022-01-04 20:48:31', '2022-01-04 20:48:31'),
(418, 'BM0003-2', '1', 'BM0003-28', '2022-01-04 20:48:31', '2022-01-04 20:48:31'),
(419, 'BM0003-1', '1', 'BM0003-28', '2022-01-04 20:48:31', '2022-01-04 20:48:31'),
(420, 'BM0003', '1', 'BM0003-28', '2022-01-04 20:48:31', '2022-01-04 20:48:31'),
(421, 'BM0003-28', '1', 'BM0003-29', '2022-01-04 21:04:04', '2022-01-04 21:04:04'),
(422, 'BM0003-27', '1', 'BM0003-29', '2022-01-04 21:04:04', '2022-01-04 21:04:04'),
(423, 'BM0003-2', '1', 'BM0003-29', '2022-01-04 21:04:04', '2022-01-04 21:04:04'),
(424, 'BM0003-1', '1', 'BM0003-29', '2022-01-04 21:04:04', '2022-01-04 21:04:04'),
(425, 'BM0003', '1', 'BM0003-29', '2022-01-04 21:04:04', '2022-01-04 21:04:04'),
(426, 'BM0003-29', '1', 'BM0003-30', '2022-01-04 21:13:25', '2022-01-04 21:13:25'),
(427, 'BM0003-28', '1', 'BM0003-30', '2022-01-04 21:13:25', '2022-01-04 21:13:25'),
(428, 'BM0003-27', '1', 'BM0003-30', '2022-01-04 21:13:25', '2022-01-04 21:13:25'),
(429, 'BM0003-2', '1', 'BM0003-30', '2022-01-04 21:13:25', '2022-01-04 21:13:25'),
(430, 'BM0003', '1', 'BM0003-30', '2022-01-04 21:13:25', '2022-01-04 21:13:25'),
(431, 'BM0003-2', '1', 'BM0003-31', '2022-01-05 07:33:27', '2022-01-05 07:33:27'),
(432, 'BM0003-1', '1', 'BM0003-31', '2022-01-05 07:33:27', '2022-01-05 07:33:27'),
(433, 'BM0003', '1', 'BM0003-31', '2022-01-05 07:33:27', '2022-01-05 07:33:27'),
(434, 'BM0005-16', '1', 'BM0005-19', '2022-01-05 11:04:22', '2022-01-05 11:04:22'),
(435, 'BM0005-2', '1', 'BM0005-19', '2022-01-05 11:04:22', '2022-01-05 11:04:22'),
(436, 'BM0005', '1', 'BM0005-19', '2022-01-05 11:04:22', '2022-01-05 11:04:22'),
(437, 'BM0003-2', '1', 'BM0003-32', '2022-01-05 11:17:47', '2022-01-05 11:17:47'),
(438, 'BM0003-1', '1', 'BM0003-32', '2022-01-05 11:17:47', '2022-01-05 11:17:47'),
(439, 'BM0003', '1', 'BM0003-32', '2022-01-05 11:17:47', '2022-01-05 11:17:47'),
(440, 'BM0005-16', '1', 'BM0005-20', '2022-01-05 11:51:12', '2022-01-05 11:51:12'),
(441, 'BM0005-2', '1', 'BM0005-20', '2022-01-05 11:51:12', '2022-01-05 11:51:12'),
(442, 'BM0005', '1', 'BM0005-20', '2022-01-05 11:51:12', '2022-01-05 11:51:12'),
(443, 'BM0005-16', '1', 'BM0005-21', '2022-01-05 14:18:01', '2022-01-05 14:18:01'),
(444, 'BM0005-2', '1', 'BM0005-21', '2022-01-05 14:18:01', '2022-01-05 14:18:01'),
(445, 'BM0005', '1', 'BM0005-21', '2022-01-05 14:18:01', '2022-01-05 14:18:01'),
(446, 'BM0003-2', '1', 'BM0003-33', '2022-01-06 14:28:27', '2022-01-06 14:28:27'),
(447, 'BM0003-1', '1', 'BM0003-33', '2022-01-06 14:28:27', '2022-01-06 14:28:27'),
(448, 'BM0003', '1', 'BM0003-33', '2022-01-06 14:28:27', '2022-01-06 14:28:27'),
(449, 'BM0003-2', '1', 'BM0003-34', '2022-01-06 18:38:19', '2022-01-06 18:38:19'),
(450, 'BM0003-1', '1', 'BM0003-34', '2022-01-06 18:38:19', '2022-01-06 18:38:19'),
(451, 'BM0003', '1', 'BM0003-34', '2022-01-06 18:38:19', '2022-01-06 18:38:19'),
(452, 'BM0002-2', '1', 'BM0002-32', '2022-01-07 10:50:53', '2022-01-07 10:50:53'),
(453, 'BM0002', '1', 'BM0002-32', '2022-01-07 10:50:53', '2022-01-07 10:50:53'),
(454, 'BM0001', '1', 'BM0001-4', '2022-01-07 13:08:23', '2022-01-07 13:08:23'),
(455, 'BM0001', '1', 'BM0001-5', '2022-01-07 13:09:57', '2022-01-07 13:09:57'),
(456, 'BM0001', '1', 'BM0001-6', '2022-01-07 13:10:58', '2022-01-07 13:10:58'),
(457, 'BM0005-16', '1', 'BM0005-22', '2022-01-07 14:52:47', '2022-01-07 14:52:47'),
(458, 'BM0005-2', '1', 'BM0005-22', '2022-01-07 14:52:47', '2022-01-07 14:52:47'),
(459, 'BM0005', '1', 'BM0005-22', '2022-01-07 14:52:47', '2022-01-07 14:52:47'),
(460, 'BM0004-1', '1', 'BM0004-11', '2022-01-08 17:21:15', '2022-01-08 17:21:15'),
(461, 'BM0004', '1', 'BM0004-11', '2022-01-08 17:21:15', '2022-01-08 17:21:15'),
(462, 'BM0004-1', '1', 'BM0004-12', '2022-01-08 18:37:39', '2022-01-08 18:37:39'),
(463, 'BM0004', '1', 'BM0004-12', '2022-01-08 18:37:39', '2022-01-08 18:37:39');

--
-- Triggers `point`
--
DELIMITER $$
CREATE TRIGGER `point` BEFORE INSERT ON `point` FOR EACH ROW BEGIN
	UPDATE register 
    SET point_reg = point_reg + 1
    WHERE register_no = NEW.register_no;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_reff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_root` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `root_number` int(255) DEFAULT NULL,
  `root_flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_expired` date DEFAULT NULL,
  `expired_flag` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `point_reg` int(11) DEFAULT NULL,
  `paid_status` tinyint(1) DEFAULT '0',
  `VA_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VA_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VA_expired` datetime DEFAULT NULL,
  `VA_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `register_no`, `reg_password`, `reg_reff`, `reg_root`, `root_number`, `root_flag`, `id_member`, `tgl_daftar`, `tgl_expired`, `expired_flag`, `point_reg`, `paid_status`, `VA_number`, `VA_bank`, `VA_expired`, `VA_amount`, `created_at`, `updated_at`) VALUES
(20, 'BM0001', NULL, 'BM0001', 'BM0001', 1, '1', '100', '2021-12-01', '2200-12-01', 'no', 6, 1, NULL, NULL, NULL, NULL, NULL, '2021-12-02 20:32:01'),
(80, 'BM0002', NULL, 'BM0002', 'BM0002', 1, '1', '107', '2021-12-01', '2080-12-01', 'no', 33, 1, NULL, NULL, NULL, NULL, NULL, '2021-12-01 17:01:33'),
(88, 'BM6597', NULL, 'BM0000', 'BM9999', 1, '1', '106', NULL, NULL, 'no', 1, 1, '9881602921112906', 'BNI', '2021-11-30 18:44:34', 1000000, '2021-11-29 18:44:34', '2021-12-01 15:25:56'),
(89, 'BM0003', NULL, 'BM0003', 'BM0003', 1, '1', '108', '2021-12-04', '2200-12-01', 'no', 34, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'BM0004', NULL, 'BM0004', 'BM0004', 1, '1', '109', '2021-12-07', '2200-12-07', 'no', 12, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'BM0005', NULL, 'BM0005', 'BM0005', 1, '1', '110', '2021-12-13', '2200-12-13', 'no', 22, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'BM9999', NULL, 'BM9999', 'BM9999', 1, '1', '199', '2021-12-01', NULL, 'no', 9, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'BM0006', NULL, 'BM0006', 'BM0006', 1, '1', '92', '2021-12-13', '2200-12-13', 'no', 7, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'BM0007', NULL, 'BM0007', 'BM0007', 1, '1', '93', '2021-12-20', '2200-12-20', 'no', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'BM0008', NULL, 'BM0008', 'BM0008', 1, '1', '94', '2021-12-20', '2200-12-20', 'no', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'BM0009', NULL, 'BM0009', 'BM0009', 1, '1', '95', '2021-12-14', '2200-12-14', 'no', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'BM0010', NULL, 'BM0010', 'BM0010', 1, '1', '96', '2021-12-20', '2200-12-20', 'no', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'BM0011', NULL, 'BM0011', 'BM0011', 1, '1', '97', '2021-12-20', '2200-12-20', 'no', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'BM0012', NULL, 'BM0012', 'BM0012', 1, '1', '98', '2021-12-20', '2200-12-20', 'no', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'BM0013', NULL, 'BM0013', 'BM0013', 1, '1', '99', '2021-12-20', '2200-12-20', 'no', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'BM0014', NULL, 'BM0014', 'BM0014', 1, '1', '105', '2021-12-20', '2200-12-20', 'no', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'BM0015', NULL, 'BM0015', 'BM0015', 1, '1', '102', '2021-12-20', '2200-12-20', 'no', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'BM0016', NULL, 'BM0016', 'BM0016', 1, '1', '103', '2021-12-20', '2200-12-20', 'no', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'BM0002-1', NULL, 'BM0002', 'BM0002', 1, '0', '183', '2021-12-01', '2023-12-21', 'no', NULL, 1, '9881602921120127', 'BNI', '2021-12-02 16:50:45', 250000, '2021-12-01 16:50:45', '2021-12-01 16:51:52'),
(144, 'BM0002-2', NULL, 'BM0002', 'BM0002', 2, '0', '184', '2021-12-01', '2023-12-21', 'no', 31, 1, '9881602921120128', 'BNI', '2021-12-02 17:00:27', 250000, '2021-12-01 17:00:27', '2021-12-01 17:01:33'),
(196, 'BM0003-1', NULL, 'BM0003', 'BM0003', 1, '0', '252', '2021-12-06', '2023-12-26', 'no', 30, 1, '9881602921120601', 'BNI', '2021-12-07 15:32:14', 250000, NULL, '2021-12-06 15:32:43'),
(201, 'BM0004-1', NULL, 'BM0004', 'BM0004', 1, '0', '257', '2021-12-07', '2023-12-27', 'no', 11, 1, '9881602921120701', 'BNI', '2021-12-08 14:42:34', 250000, NULL, '2021-12-07 14:42:57'),
(205, 'BM0003-2', NULL, 'BM0003-1', 'BM0003', 2, '0', '261', '2021-12-13', '2024-01-02', 'no', 29, 1, '9881299321121302', 'BNI', '2021-12-14 12:44:38', 250000, NULL, '2021-12-13 12:54:53'),
(206, 'BM0003-3', NULL, 'BM0003-1', 'BM0003', 3, '0', '262', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121303', 'BNI', '2021-12-14 13:06:49', 250000, NULL, '2021-12-13 13:09:33'),
(209, 'BM0002-3', NULL, 'BM0002-2', 'BM0002', 3, '0', '265', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121306', 'BNI', '2021-12-14 14:34:22', 250000, NULL, '2021-12-13 14:35:55'),
(210, 'BM0005-1', NULL, 'BM0005', 'BM0005', 1, '0', '266', '2021-12-13', '2024-01-02', 'no', 1, 1, '9881299321121307', 'BNI', '2021-12-14 14:50:33', 250000, NULL, '2021-12-13 14:54:27'),
(211, 'BM0002-4', NULL, 'BM0002-2', 'BM0002', 4, '0', '267', '2021-12-13', '2024-01-02', 'no', 6, 1, '9881299321121308', 'BNI', '2021-12-14 15:19:01', 250000, NULL, '2021-12-13 15:23:15'),
(212, 'BM0003-4', NULL, 'BM0003-2', 'BM0003', 4, '0', '268', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121309', 'BNI', '2021-12-14 15:41:40', 250000, NULL, '2021-12-13 15:44:41'),
(213, 'BM0005-2', NULL, 'BM0005', 'BM0005', 2, '0', '269', '2021-12-13', '2024-01-02', 'no', 11, 1, '9881299321121310', 'BNI', '2021-12-14 16:26:18', 250000, NULL, '2021-12-13 16:38:22'),
(214, 'BM0005-3', NULL, 'BM0005', 'BM0005', 3, '0', '270', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121311', 'BNI', '2021-12-14 19:36:01', 250000, NULL, '2021-12-13 19:41:31'),
(215, 'BM0002-5', NULL, 'BM0002-2', 'BM0002', 5, '0', '271', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121312', 'BNI', '2021-12-14 22:08:27', 250000, NULL, '2021-12-13 22:09:35'),
(216, 'BM0002-6', NULL, 'BM0002-2', 'BM0002', 6, '0', '272', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121313', 'BNI', '2021-12-14 22:20:40', 250000, NULL, '2021-12-13 22:21:47'),
(217, 'BM0002-7', NULL, 'BM0002-2', 'BM0002', 7, '0', '273', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121314', 'BNI', '2021-12-14 22:21:04', 250000, NULL, '2021-12-13 22:22:36'),
(218, 'BM0002-8', NULL, 'BM0002-2', 'BM0002', 8, '0', '274', '2021-12-13', '2024-01-02', 'no', NULL, 1, '9881299321121315', 'BNI', '2021-12-14 22:38:00', 250000, NULL, '2021-12-13 22:39:04'),
(220, 'BM0003-5', NULL, 'BM0003-2', 'BM0003', 5, '0', '276', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121401', 'BNI', '2021-12-15 07:45:27', 250000, NULL, '2021-12-14 07:47:38'),
(221, 'BM0003-6', NULL, 'BM0003-1', 'BM0003', 6, '0', '277', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121402', 'BNI', '2021-12-15 08:02:49', 250000, NULL, '2021-12-14 08:05:30'),
(223, 'BM0005-4', NULL, 'BM0005', 'BM0005', 4, '0', '279', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121404', 'BNI', '2021-12-15 10:19:06', 250000, NULL, '2021-12-14 11:21:58'),
(226, 'BM0002-9', NULL, 'BM0002-2', 'BM0002', 9, '0', '282', '2021-12-14', '2024-01-03', 'no', 2, 1, '9881299321121407', 'BNI', '2021-12-15 11:40:45', 250000, NULL, '2021-12-14 11:46:20'),
(227, 'BM0005-5', NULL, 'BM0005', 'BM0005', 5, '0', '283', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121408', 'BNI', '2021-12-15 11:56:23', 250000, NULL, '2021-12-14 12:22:45'),
(228, 'BM0005-6', NULL, 'BM0005-2', 'BM0005', 6, '0', '284', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121409', 'BNI', '2021-12-15 12:40:10', 250000, NULL, '2021-12-14 12:46:52'),
(229, 'BM0005-7', NULL, 'BM0005-1', 'BM0005', 7, '0', '285', '2021-12-14', '2024-01-03', 'no', NULL, 1, '9881299321121410', 'BNI', '2021-12-15 15:22:49', 250000, NULL, '2021-12-14 15:26:43'),
(230, 'BM0004-2', NULL, 'BM0004-1', 'BM0004', 2, '0', '286', '2021-12-15', '2024-01-04', 'no', NULL, 1, '9881299321121411', 'BNI', '2021-12-15 21:43:42', 250000, NULL, '2021-12-15 08:33:27'),
(231, 'BM0002-10', NULL, 'BM0002-2', 'BM0002', 10, '0', '287', '2021-12-15', '2024-01-04', 'no', NULL, 1, '9881299321121501', 'BNI', '2021-12-16 15:28:08', 250000, NULL, '2021-12-15 15:29:43'),
(232, 'BM0002-11', NULL, 'BM0002-2', 'BM0002', 11, '0', '288', '2021-12-16', '2024-01-05', 'no', 1, 1, '9881299321121601', 'BNI', '2021-12-17 09:11:15', 250000, NULL, '2021-12-16 09:12:02'),
(237, 'BM0004-3', NULL, 'BM0004-1', 'BM0004', 3, '0', '293', '2021-12-16', '2024-01-05', 'no', NULL, 1, '9881299321121606', 'BNI', '2021-12-17 16:16:53', 250000, NULL, '2021-12-16 16:19:48'),
(239, 'BM0002-12', NULL, 'BM0002-2', 'BM0002', 12, '0', '295', '2021-12-17', '2024-01-06', 'no', NULL, 1, '9881299321121702', 'BNI', '2021-12-18 15:18:59', 250000, NULL, '2021-12-17 15:20:09'),
(240, 'BM0002-13', NULL, 'BM0002-2', 'BM0002', 13, '0', '296', '2021-12-17', '2024-01-06', 'no', NULL, 1, '9881299321121703', 'BNI', '2021-12-18 18:44:34', 250000, NULL, '2021-12-17 18:46:38'),
(241, 'BM0003-7', NULL, 'BM0003-2', 'BM0003', 7, '0', '297', '2021-12-18', '2024-01-07', 'no', 1, 1, '9881299321121801', 'BNI', '2021-12-19 17:37:57', 250000, NULL, '2021-12-18 17:40:56'),
(242, 'BM0004-4', NULL, 'BM0004-1', 'BM0004', 4, '0', '298', '2021-12-18', '2024-01-07', 'no', 2, 1, '9881299321121802', 'BNI', '2021-12-19 17:44:38', 250000, NULL, '2021-12-18 17:47:34'),
(243, 'BM0002-14', NULL, 'BM0002-2', 'BM0002', 14, '0', '299', '2021-12-19', '2024-01-08', 'no', 3, 1, '9881299321121901', 'BNI', '2021-12-20 09:29:29', 250000, NULL, '2021-12-19 09:31:02'),
(244, 'BM0002-15', NULL, 'BM0002-14', 'BM0002', 15, '0', '300', '2021-12-19', '2024-01-08', 'no', NULL, 1, '9881299321121902', 'BNI', '2021-12-20 18:51:20', 250000, NULL, '2021-12-19 18:52:51'),
(245, 'BM0002-16', NULL, 'BM0002-14', 'BM0002', 16, '0', '301', '2021-12-19', '2024-01-08', 'no', NULL, 1, '9881299321121903', 'BNI', '2021-12-20 18:57:53', 250000, NULL, '2021-12-19 18:59:15'),
(246, 'BM0002-17', NULL, 'BM0002-4', 'BM0002', 17, '0', '302', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122101', 'BNI', '2021-12-22 13:59:49', 250000, NULL, '2021-12-21 14:07:50'),
(247, 'BM0002-18', NULL, 'BM0002-4', 'BM0002', 18, '0', '303', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122102', 'BNI', '2021-12-22 14:19:52', 250000, NULL, '2021-12-21 14:32:35'),
(248, 'BM0002-19', NULL, 'BM0002-14', 'BM0002', 19, '0', '304', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122103', 'BNI', '2021-12-22 14:45:16', 250000, NULL, '2021-12-21 14:48:47'),
(249, 'BM0002-20', NULL, 'BM0002-4', 'BM0002', 20, '0', '305', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122104', 'BNI', '2021-12-22 14:48:06', 250000, NULL, '2021-12-21 14:51:55'),
(250, 'BM0002-21', NULL, 'BM0002-4', 'BM0002', 21, '0', '306', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122105', 'BNI', '2021-12-22 14:53:56', 250000, NULL, '2021-12-21 15:01:25'),
(251, 'BM0002-22', NULL, 'BM0002-4', 'BM0002', 22, '0', '307', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122106', 'BNI', '2021-12-22 14:59:53', 250000, NULL, '2021-12-21 15:02:57'),
(252, 'BM0002-23i', NULL, 'BM0002-4', 'BM0002', 1, '0', '308', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122107', 'BNI', '2021-12-22 15:15:04', 250000, NULL, '2021-12-21 16:06:09'),
(253, 'BM0005-8', NULL, 'BM0005-2', 'BM0005', 8, '0', '309', '2021-12-21', '2024-01-10', 'no', NULL, 1, '9881299321122108', 'BNI', '2021-12-22 18:31:54', 250000, NULL, '2021-12-21 18:36:33'),
(254, 'BM0004-5', NULL, 'BM0004-1', 'BM0004', 5, '0', '310', '2021-12-22', '2024-01-11', 'no', NULL, 1, '9881299321122201', 'BNI', '2021-12-23 12:15:11', 250000, NULL, '2021-12-22 12:48:31'),
(255, 'BM0003-8', NULL, 'BM0003-2', 'BM0003', 8, '0', '311', '2021-12-22', '2024-01-11', 'no', NULL, 1, '9881299321122202', 'BNI', '2021-12-23 14:14:31', 250000, NULL, '2021-12-22 14:16:23'),
(256, 'BM0000', NULL, '', 'BM9999', 1, '0', '152', '2021-12-13', '2024-01-02', 'no', 1, 1, '', '', '2021-12-14 13:06:49', 250000, NULL, '2021-12-13 13:09:33'),
(257, 'BM0002-23', NULL, 'BM0002', 'BM0002', 23, '0', '312', '2021-12-23', '2024-01-12', 'no', NULL, 1, '9881299321122301', 'BNI', '2021-12-24 10:32:30', 250000, NULL, '2021-12-23 11:33:17'),
(258, 'BM0004-6', NULL, 'BM0004-1', 'BM0004', 6, '0', '313', '2021-12-23', '2024-01-12', 'no', NULL, 1, '9881299321122302', 'BNI', '2021-12-24 11:35:50', 250000, NULL, '2021-12-23 11:43:15'),
(259, 'BM0005-9', NULL, 'BM0005', 'BM0005', 9, '0', '314', '2021-12-23', '2024-01-12', 'no', NULL, 1, '9881299321122303', 'BNI', '2021-12-24 21:10:35', 250000, NULL, '2021-12-23 21:12:48'),
(260, 'BM0005-10', NULL, 'BM0005-2', 'BM0005', 10, '0', '315', '2021-12-23', '2024-01-12', 'no', NULL, 1, '9881299321122304', 'BNI', '2021-12-24 22:25:00', 250000, NULL, '2021-12-23 22:27:40'),
(262, 'BM0004-7', NULL, 'BM0004-4', 'BM0004', 7, '0', '317', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122402', 'BNI', '2021-12-25 10:28:34', 250000, NULL, '2021-12-24 10:30:58'),
(263, 'BM0006-1', NULL, 'BM0006', 'BM0006', 1, '0', '318', '2021-12-24', '2024-01-13', 'no', 6, 1, '9881299321122403', 'BNI', '2021-12-25 11:19:20', 250000, NULL, '2021-12-24 11:22:04'),
(264, 'BM0008-1', NULL, 'BM0008', 'BM0008', 1, '0', '319', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122404', 'BNI', '2021-12-25 11:19:49', 250000, NULL, '2021-12-24 11:25:39'),
(265, 'BM0011-1', NULL, 'BM0011', 'BM0011', 1, '0', '320', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122405', 'BNI', '2021-12-25 11:20:55', 250000, NULL, '2021-12-24 11:25:02'),
(266, 'BM0014-1', NULL, 'BM0014', 'BM0014', 1, '0', '321', '2021-12-24', '2024-01-13', 'no', 1, 1, '9881299321122406', 'BNI', '2021-12-25 11:25:37', 250000, NULL, '2021-12-24 11:28:25'),
(267, 'BM0007-1', NULL, 'BM0007', 'BM0007', 1, '0', '322', '2021-12-24', '2024-01-13', 'no', 1, 1, '9881299321122407', 'BNI', '2021-12-25 11:29:15', 250000, NULL, '2021-12-24 11:32:41'),
(268, 'BM0015-1', NULL, 'BM0015', 'BM0015', 1, '0', '323', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122408', 'BNI', '2021-12-25 11:30:43', 250000, NULL, '2021-12-24 11:34:25'),
(269, 'BM0004-8', NULL, 'BM0004-4', 'BM0004', 8, '0', '324', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122409', 'BNI', '2021-12-25 11:42:51', 250000, NULL, '2021-12-24 11:49:22'),
(270, 'BM0009-1', NULL, 'BM0009', 'BM0009', 1, '0', '325', '2021-12-24', '2024-01-13', 'no', NULL, 1, '9881299321122410', 'BNI', '2021-12-25 12:17:42', 250000, NULL, '2021-12-24 12:19:12'),
(271, '5106040112820004', NULL, 'BM0010', 'BM0010', NULL, '0', '326', NULL, NULL, 'no', NULL, 0, '9881299321122411', 'BNI', '2021-12-25 15:58:56', 250000, NULL, '2021-12-24 15:58:56'),
(272, 'BM0006-2', NULL, 'BM0006-1', 'BM0006', 2, '0', '327', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122501', 'BNI', '2021-12-26 06:52:17', 250000, NULL, '2021-12-25 06:58:00'),
(273, 'BM0006-4', NULL, 'BM0006-1', 'BM0006', 4, '0', '328', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122502', 'BNI', '2021-12-26 07:27:15', 250000, NULL, '2021-12-25 07:34:37'),
(274, 'BM0006-3', NULL, 'BM0006-1', 'BM0006', 3, '0', '329', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122503', 'BNI', '2021-12-26 07:29:43', 250000, NULL, '2021-12-25 07:32:10'),
(275, 'BM0006-5', NULL, 'BM0006-1', 'BM0006', 5, '0', '330', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122504', 'BNI', '2021-12-26 08:08:47', 250000, NULL, '2021-12-25 08:19:40'),
(276, '5101010612850004', NULL, 'BM0001', 'BM0001', NULL, '0', '331', NULL, NULL, 'no', NULL, 0, '9881299321122505', 'BNI', '2021-12-26 08:47:37', 250000, NULL, '2021-12-25 08:47:37'),
(277, '5106014201990001', NULL, 'BM0001', 'BM0001', NULL, '0', '332', NULL, NULL, 'no', NULL, 0, '9881299321122506', 'BNI', '2021-12-26 08:51:46', 250000, NULL, '2021-12-25 08:51:46'),
(278, '5108042807940001', NULL, 'BM0001', 'BM0001', NULL, '0', '333', NULL, NULL, 'no', NULL, 0, '9881299321122507', 'BNI', '2021-12-26 09:04:18', 250000, NULL, '2021-12-25 09:04:19'),
(279, '5108061612920004', NULL, 'BM0001', 'BM0001', NULL, '0', '334', NULL, NULL, 'no', NULL, 0, '9881299321122508', 'BNI', '2021-12-26 09:12:42', 250000, NULL, '2021-12-25 09:12:42'),
(280, '5108052903890004', NULL, 'BM0001', 'BM0001', NULL, '0', '335', NULL, NULL, 'no', NULL, 0, '9881299321122509', 'BNI', '2021-12-26 09:19:08', 250000, NULL, '2021-12-25 09:19:09'),
(281, '5102107012900001', NULL, 'BM0006-4', 'BM0006', NULL, '0', '336', NULL, NULL, 'no', NULL, 0, '9881299321122510', 'BNI', '2021-12-26 09:27:25', 250000, NULL, '2021-12-25 09:27:25'),
(283, 'BM0003-9', NULL, 'BM0003-2', 'BM0003', 9, '0', '338', '2021-12-25', '2024-01-14', 'no', 6, 1, '9881299321122512', 'BNI', '2021-12-26 10:16:10', 250000, NULL, '2021-12-25 10:18:02'),
(284, '5171044809950002', NULL, 'BM0001', 'BM0001', NULL, '0', '339', NULL, NULL, 'no', NULL, 0, '9881299321122513', 'BNI', '2021-12-26 11:31:36', 250000, NULL, '2021-12-25 11:31:36'),
(285, '5014031702790003', NULL, 'BM0001', 'BM0001', NULL, '0', '340', NULL, NULL, 'no', NULL, 0, '9881299321122514', 'BNI', '2021-12-26 11:37:54', 250000, NULL, '2021-12-25 11:37:54'),
(286, 'BM0002-24', NULL, 'BM0002-2', 'BM0002', 24, '0', '341', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122515', 'BNI', '2021-12-26 12:25:56', 250000, NULL, '2021-12-25 12:50:45'),
(287, 'BM0003-10', NULL, 'BM0003-9', 'BM0003', 10, '0', '342', '2021-12-25', '2024-01-14', 'no', 5, 1, '9881299321122516', 'BNI', '2021-12-26 12:35:04', 250000, NULL, '2021-12-25 12:39:17'),
(288, 'BM0003-11', NULL, 'BM0003-10', 'BM0003', 11, '0', '343', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122517', 'BNI', '2021-12-26 12:48:05', 250000, NULL, '2021-12-25 12:51:20'),
(289, '5108060803970006', NULL, 'BM0001', 'BM0001', NULL, '0', '344', NULL, NULL, 'no', NULL, 0, '9881299321122518', 'BNI', '2021-12-26 12:54:32', 250000, NULL, '2021-12-25 12:54:32'),
(290, '5171012409790003', NULL, 'BM0006-1', 'BM0006', NULL, '0', '345', NULL, NULL, 'no', NULL, 0, '9881299321122519', 'BNI', '2021-12-26 12:59:28', 250000, NULL, '2021-12-25 12:59:28'),
(291, 'BM0001-1', NULL, 'BM0001', 'BM0001', 1, '0', '346', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122520', 'BNI', '2021-12-26 13:35:08', 250000, NULL, '2021-12-25 13:38:51'),
(292, 'BM0002-25', NULL, 'BM0002-2', 'BM0002', 25, '0', '347', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122521', 'BNI', '2021-12-26 13:43:47', 250000, NULL, '2021-12-25 13:46:32'),
(293, 'BM0012-1', NULL, 'BM0012', 'BM0012', 1, '0', '348', '2021-12-25', '2024-01-14', 'no', 1, 1, '9881299321122522', 'BNI', '2021-12-26 14:00:28', 250000, NULL, '2021-12-25 14:03:05'),
(294, '5108090107900233', NULL, 'BM0012-1', 'BM0012', NULL, '0', '349', NULL, NULL, 'no', NULL, 0, '9881299321122523', 'BNI', '2021-12-26 14:49:55', 250000, NULL, '2021-12-25 14:49:55'),
(295, '5106020712940002', NULL, 'BM0001', 'BM0001', NULL, '0', '350', NULL, NULL, 'no', NULL, 0, '9881299321122524', 'BNI', '2021-12-26 15:38:47', 250000, NULL, '2021-12-25 15:38:47'),
(296, 'BM0005-11', NULL, 'BM0005-2', 'BM0005', 11, '0', '351', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122525', 'BNI', '2021-12-26 15:51:45', 250000, NULL, '2021-12-25 15:56:45'),
(297, '5104040107640026', NULL, 'BM0001', 'BM0001', NULL, '0', '352', NULL, NULL, 'no', NULL, 0, '9881299321122526', 'BNI', '2021-12-26 16:52:44', 250000, NULL, '2021-12-25 16:52:45'),
(298, 'BM0001-2', NULL, 'BM0001', 'BM0001', 2, '0', '353', '2021-12-25', '2024-01-14', 'no', NULL, 1, '9881299321122527', 'BNI', '2021-12-26 18:04:33', 250000, NULL, '2021-12-25 18:06:52'),
(300, '5104026007970001', NULL, 'BM0006-1', 'BM0006', NULL, '0', '355', NULL, NULL, 'no', NULL, 0, '9881299321122529', 'BNI', '2021-12-26 20:12:46', 250000, NULL, '2021-12-25 20:12:46'),
(301, '5107046810930004', NULL, 'BM0001', 'BM0001', NULL, '0', '356', NULL, NULL, 'no', NULL, 0, '9881299321122530', 'BNI', '2021-12-26 21:52:08', 250000, NULL, '2021-12-25 21:52:09'),
(302, '5108051510900003', NULL, 'BM0006-1', 'BM0006', NULL, '0', '357', NULL, NULL, 'no', NULL, 0, '9881299321122531', 'BNI', '2021-12-26 23:34:40', 250000, NULL, '2021-12-25 23:34:40'),
(303, '5107046007940003', NULL, 'BM0006-1', 'BM0006', NULL, '0', '358', NULL, NULL, 'no', NULL, 0, '9881299321122601', 'BNI', '2021-12-27 06:23:40', 250000, NULL, '2021-12-26 06:23:40'),
(305, 'BM0007-2', NULL, 'BM0007-1', 'BM0007', 2, '0', '360', '2021-12-26', '2024-01-15', 'no', NULL, 1, '9881299321122603', 'BNI', '2021-12-27 10:55:42', 250000, NULL, '2021-12-26 11:02:58'),
(306, 'BM0003-12', NULL, 'BM0003-10', 'BM0003', 12, '0', '361', '2021-12-26', '2024-01-15', 'no', NULL, 1, '9881299321122604', 'BNI', '2021-12-27 12:48:40', 250000, NULL, '2021-12-26 12:52:45'),
(307, 'BM0003-13', NULL, 'BM0003-2', 'BM0003', 13, '0', '362', '2021-12-26', '2024-01-15', 'no', NULL, 1, '9881299321122605', 'BNI', '2021-12-27 15:40:04', 250000, NULL, '2021-12-26 15:42:36'),
(308, 'BM0003-14', NULL, 'BM0003-2', 'BM0003', 14, '0', '363', '2021-12-26', '2024-01-15', 'no', NULL, 1, '9881299321122606', 'BNI', '2021-12-27 18:37:58', 250000, NULL, '2021-12-26 18:42:17'),
(309, 'BM0012-2', NULL, 'BM0012-1', 'BM0012', 2, '0', '364', '2021-12-27', '2024-01-16', 'no', NULL, 1, '9881299321122701', 'BNI', '2021-12-28 08:03:26', 250000, NULL, '2021-12-27 08:20:37'),
(310, 'BM0003-15', NULL, 'BM0003-2', 'BM0003', 15, '0', '365', '2021-12-27', '2024-01-16', 'no', 1, 1, '9881299321122702', 'BNI', '2021-12-28 20:21:40', 250000, NULL, '2021-12-27 20:24:30'),
(311, 'BM0002-26', NULL, 'BM0002-9', 'BM0002', 26, '0', '366', '2021-12-27', '2024-01-16', 'no', NULL, 1, '9881299321122703', 'BNI', '2021-12-28 20:27:13', 250000, NULL, '2021-12-27 21:12:08'),
(312, 'BM0002-28', NULL, 'BM0002-2', 'BM0002', 28, '0', '367', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122704', 'BNI', '2021-12-28 20:36:35', 250000, NULL, '2021-12-28 12:15:38'),
(313, 'BM0003-16', NULL, 'BM0003-15', 'BM0003', 16, '0', '368', '2021-12-27', '2024-01-16', 'no', NULL, 1, '9881299321122705', 'BNI', '2021-12-28 21:03:48', 250000, NULL, '2021-12-27 21:06:29'),
(314, 'BM0002-27', NULL, 'BM0002-9', 'BM0002', 27, '0', '369', '2021-12-27', '2024-01-16', 'no', NULL, 1, '9881299321122706', 'BNI', '2021-12-28 21:14:39', 250000, NULL, '2021-12-27 21:21:32'),
(316, 'BM0014-2', NULL, 'BM0014-1', 'BM0014', 2, '0', '371', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122801', 'BNI', '2021-12-29 09:11:38', 250000, NULL, '2021-12-28 11:16:47'),
(317, 'BM0003-17', NULL, 'BM0003-2', 'BM0003', 17, '0', '372', '2021-12-28', '2024-01-17', 'no', 1, 1, '9881299321122802', 'BNI', '2021-12-29 10:31:11', 250000, NULL, '2021-12-28 10:32:38'),
(318, 'BM0003-18', NULL, 'BM0003-17', 'BM0003', 18, '0', '373', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122803', 'BNI', '2021-12-29 10:48:04', 250000, NULL, '2021-12-28 10:52:28'),
(320, 'BM0003-19', NULL, 'BM0003-2', 'BM0003', 19, '0', '375', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122805', 'BNI', '2021-12-29 17:00:16', 250000, NULL, '2021-12-28 17:01:56'),
(321, 'BM0003-20', NULL, 'BM0003-2', 'BM0003', 20, '0', '376', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122806', 'BNI', '2021-12-29 17:02:25', 250000, NULL, '2021-12-28 17:18:58'),
(322, 'BM0003-21', NULL, 'BM0003-2', 'BM0003', 21, '0', '377', '2021-12-28', '2024-01-17', 'no', NULL, 1, '9881299321122807', 'BNI', '2021-12-29 17:41:28', 250000, NULL, '2021-12-28 17:52:07'),
(323, 'BM0005-12', NULL, 'BM0005-2', 'BM0005', 12, '0', '378', '2021-12-29', '2024-01-18', 'no', NULL, 1, '9881299321122808', 'BNI', '2021-12-29 21:05:58', 250000, NULL, '2021-12-29 11:22:02'),
(324, 'BM0004-9', NULL, 'BM0004-1', 'BM0004', 9, '0', '379', '2021-12-29', '2024-01-18', 'no', NULL, 1, '9881299321122901', 'BNI', '2021-12-30 07:24:58', 250000, NULL, '2021-12-29 11:22:02'),
(325, '5101020301960001', NULL, 'BM0001', 'BM0001', NULL, '0', '380', NULL, NULL, 'no', NULL, 0, '9881299321122902', 'BNI', '2021-12-30 07:35:28', 250000, NULL, '2021-12-29 07:35:29'),
(326, '5104033006830002', NULL, 'BM0011', 'BM0011', NULL, '0', '381', NULL, NULL, 'no', NULL, 0, '9881299321122903', 'BNI', '2021-12-30 10:48:18', 250000, NULL, '2021-12-29 10:48:18'),
(327, 'BM0003-22', NULL, 'BM0003-2', 'BM0003', 22, '0', '382', '2021-12-29', '2024-01-18', 'no', NULL, 1, '9881299321122904', 'BNI', '2021-12-30 14:21:11', 250000, NULL, '2021-12-29 14:23:02'),
(328, '5107070906940001', NULL, 'BM0001', 'BM0001', NULL, '0', '383', NULL, NULL, 'no', NULL, 0, '9881299321122905', 'BNI', '2021-12-30 15:14:30', 250000, NULL, '2021-12-29 15:14:31'),
(329, 'BM0001-3', NULL, 'BM0001', 'BM0001', 3, '0', '384', '2021-12-29', '2024-01-18', 'no', NULL, 1, '9881299321122906', 'BNI', '2021-12-30 16:16:41', 250000, NULL, '2021-12-29 16:20:59'),
(330, 'BM0006-6', NULL, 'BM0006-5', 'BM0006', 6, '0', '385', '2021-12-30', '2024-01-19', 'no', NULL, 1, '9881299321123001', 'BNI', '2021-12-31 09:47:38', 250000, NULL, '2021-12-30 09:52:37'),
(331, 'BM0005-13', NULL, 'BM0005', 'BM0005', 13, '0', '386', '2021-12-30', '2024-01-19', 'no', NULL, 1, '9881299321123002', 'BNI', '2021-12-31 18:29:35', 250000, NULL, '2021-12-30 18:30:59'),
(332, 'BM0003-23', NULL, 'BM0003-10', 'BM0003', 23, '0', '387', '2021-12-31', '2024-01-20', 'no', 2, 1, '9881299321123101', 'BNI', '2022-01-01 15:09:00', 250000, NULL, '2021-12-31 15:11:02'),
(333, 'BM0003-24', NULL, 'BM0003-23', 'BM0003', 24, '0', '388', '2021-12-31', '2024-01-20', 'no', 1, 1, '9881299321123102', 'BNI', '2022-01-01 15:38:19', 250000, NULL, '2021-12-31 15:41:13'),
(334, 'BM0003-25', NULL, 'BM0003-7', 'BM0003', 25, '0', '389', '2021-12-31', '2024-01-20', 'no', NULL, 1, '9881299321123103', 'BNI', '2022-01-01 20:25:56', 250000, NULL, '2021-12-31 20:27:36'),
(335, 'BM0003-26', NULL, 'BM0003-24', 'BM0003', 26, '0', '390', '2022-01-01', '2024-01-21', 'no', NULL, 1, '9881299321123104', 'BNI', '2022-01-02 17:40:57', 250000, NULL, '2022-01-01 17:54:47'),
(336, 'BM0004-10', NULL, 'BM0004-1', 'BM0004', 10, '0', '391', '2022-01-02', '2024-01-22', 'no', NULL, 1, '9881299321123105', 'BNI', '2022-01-03 12:53:33', 250000, NULL, '2022-01-02 12:56:24'),
(337, 'BM0002-29', NULL, 'BM0002-11', 'BM0002', 29, '0', '392', '2022-01-02', '2024-01-22', 'no', NULL, 1, '9881299321123106', 'BNI', '2022-01-03 19:13:00', 250000, NULL, '2022-01-02 19:48:30'),
(338, '5208030406740002', NULL, 'BM0002-11', 'BM0002', NULL, '0', '393', NULL, NULL, 'no', NULL, 0, '9881299321123107', 'BNI', '2022-01-03 20:49:41', 250000, NULL, '2022-01-02 20:49:41'),
(339, 'BM0005-14', NULL, 'BM0005', 'BM0005', 14, '0', '394', '2022-01-03', '2024-01-23', 'no', NULL, 1, '9881299321123108', 'BNI', '2022-01-04 16:24:28', 250000, NULL, '2022-01-03 16:27:57'),
(340, 'BM0006-7', NULL, 'BM0006-1', 'BM0006', 7, '0', '395', '2022-01-03', '2024-01-23', 'no', NULL, 1, '9881299321123109', 'BNI', '2022-01-04 18:28:23', 250000, NULL, '2022-01-03 18:30:07'),
(341, 'BM0005-15', NULL, 'BM0005', 'BM0005', 15, '0', '396', '2022-01-03', '2024-01-23', 'no', NULL, 1, '9881299321123110', 'BNI', '2022-01-04 19:33:16', 250000, NULL, '2022-01-03 19:35:13'),
(342, 'BM0002-30', NULL, 'BM0002-2', 'BM0002', 30, '0', '397', '2022-01-03', '2024-01-23', 'no', 1, 1, '9881299321123111', 'BNI', '2022-01-04 20:15:43', 250000, NULL, '2022-01-03 20:17:11'),
(343, 'BM0002-31', NULL, 'BM0002-30', 'BM0002', 31, '0', '398', '2022-01-04', '2024-01-24', 'no', NULL, 1, '9881299321123112', 'BNI', '2022-01-05 11:07:55', 250000, NULL, '2022-01-04 12:09:03'),
(344, 'BM0005-16', NULL, 'BM0005-2', 'BM0005', 16, '0', '399', '2022-01-04', '2024-01-24', 'no', 5, 1, '9881299321123113', 'BNI', '2022-01-05 14:31:37', 250000, NULL, '2022-01-04 14:34:29'),
(345, 'BM0005-17', NULL, 'BM0005', 'BM0005', 17, '0', '400', '2022-01-04', '2024-01-24', 'no', NULL, 1, '9881299321123114', 'BNI', '2022-01-05 15:24:39', 250000, NULL, '2022-01-04 15:28:22'),
(346, 'BM0005-18', NULL, 'BM0005-16', 'BM0005', 18, '0', '401', '2022-01-04', '2024-01-24', 'no', NULL, 1, '9881299321123115', 'BNI', '2022-01-05 20:08:25', 250000, NULL, '2022-01-04 20:17:12'),
(347, 'BM0003-27', NULL, 'BM0003-2', 'BM0003', 27, '0', '402', '2022-01-04', '2024-01-24', 'no', 3, 1, '9881299321123116', 'BNI', '2022-01-05 20:29:15', 250000, NULL, '2022-01-04 20:31:21'),
(348, 'BM0003-28', NULL, 'BM0003-27', 'BM0003', 28, '0', '403', '2022-01-04', '2024-01-24', 'no', 2, 1, '9881299321123117', 'BNI', '2022-01-05 20:46:06', 250000, NULL, '2022-01-04 20:48:31'),
(349, 'BM0003-29', NULL, 'BM0003-28', 'BM0003', 29, '0', '404', '2022-01-04', '2024-01-24', 'no', 1, 1, '9881299321123118', 'BNI', '2022-01-05 21:02:32', 250000, NULL, '2022-01-04 21:04:04'),
(350, 'BM0003-30', NULL, 'BM0003-29', 'BM0003', 30, '0', '405', '2022-01-04', '2024-01-24', 'no', NULL, 1, '9881299321123119', 'BNI', '2022-01-05 21:11:45', 250000, NULL, '2022-01-04 21:13:25'),
(351, 'BM0003-31', NULL, 'BM0003-2', 'BM0003', 31, '0', '406', '2022-01-05', '2024-01-25', 'no', NULL, 1, '9881299321123120', 'BNI', '2022-01-06 07:31:19', 250000, NULL, '2022-01-05 07:33:27'),
(352, 'BM0005-19', NULL, 'BM0005-16', 'BM0005', 19, '0', '407', '2022-01-05', '2024-01-25', 'no', NULL, 1, '9881299321123121', 'BNI', '2022-01-06 11:02:09', 250000, NULL, '2022-01-05 11:04:22'),
(353, 'BM0003-32', NULL, 'BM0003-2', 'BM0003', 32, '0', '408', '2022-01-05', '2024-01-25', 'no', NULL, 1, '9881299321123122', 'BNI', '2022-01-06 11:15:48', 250000, NULL, '2022-01-05 11:17:47'),
(354, 'BM0005-20', NULL, 'BM0005-16', 'BM0005', 20, '0', '409', '2022-01-05', '2024-01-25', 'no', NULL, 1, '9881299321123123', 'BNI', '2022-01-06 11:47:49', 250000, NULL, '2022-01-05 11:51:12'),
(355, 'BM0005-21', NULL, 'BM0005-16', 'BM0005', 21, '0', '410', '2022-01-05', '2024-01-25', 'no', NULL, 1, '9881299321123124', 'BNI', '2022-01-06 14:16:24', 250000, NULL, '2022-01-05 14:18:01'),
(356, 'BM0003-33', NULL, 'BM0003-2', 'BM0003', 33, '0', '411', '2022-01-06', '2024-01-26', 'no', NULL, 1, '9881299321123125', 'BNI', '2022-01-07 14:26:35', 250000, NULL, '2022-01-06 14:28:27'),
(357, 'BM0003-34', NULL, 'BM0003-2', 'BM0003', 34, '0', '412', '2022-01-06', '2024-01-26', 'no', NULL, 1, '9881299321123126', 'BNI', '2022-01-07 18:35:13', 250000, NULL, '2022-01-06 18:38:19'),
(358, 'BM0002-32', NULL, 'BM0002-2', 'BM0002', 32, '0', '413', '2022-01-07', '2024-01-27', 'no', NULL, 1, '9881299321123127', 'BNI', '2022-01-08 10:48:03', 250000, NULL, '2022-01-07 10:50:53'),
(359, 'BM0001-4', NULL, 'BM0001', 'BM0001', 4, '0', '414', '2022-01-07', '2024-01-27', 'no', NULL, 1, '9881299321123128', 'BNI', '2022-01-08 13:07:38', 250000, NULL, '2022-01-07 13:08:23'),
(360, 'BM0001-5', NULL, 'BM0001', 'BM0001', 5, '0', '415', '2022-01-07', '2024-01-27', 'no', NULL, 1, '9881299321123129', 'BNI', '2022-01-08 13:09:19', 250000, NULL, '2022-01-07 13:09:57'),
(361, 'BM0001-6', NULL, 'BM0001', 'BM0001', 6, '0', '416', '2022-01-07', '2024-01-27', 'no', NULL, 1, '9881299321123130', 'BNI', '2022-01-08 13:09:29', 250000, NULL, '2022-01-07 13:10:58'),
(362, 'BM0005-22', NULL, 'BM0005-16', 'BM0005', 22, '0', '417', '2022-01-07', '2024-01-27', 'no', NULL, 1, '9881299321123131', 'BNI', '2022-01-08 14:49:41', 250000, NULL, '2022-01-07 14:52:47'),
(363, 'BM0000', NULL, '', 'BM9999', 1, '0', '90', '2021-12-13', '2024-01-02', 'no', NULL, 1, '', '', '2021-12-14 13:06:49', 250000, NULL, '2021-12-13 13:09:33'),
(364, 'BM0004-11', NULL, 'BM0004-1', 'BM0004', 11, '0', '419', '2022-01-08', '2024-01-28', 'no', NULL, 1, '9881299321123132', 'BNI', '2022-01-09 17:18:21', 250000, NULL, '2022-01-08 17:21:15'),
(365, 'BM0004-12', NULL, 'BM0004-1', 'BM0004', 12, '0', '420', '2022-01-08', '2024-01-28', 'no', NULL, 1, '9881299321123133', 'BNI', '2022-01-09 18:35:44', 250000, NULL, '2022-01-08 18:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_toko` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `id_member`, `img_toko`, `nama_toko`, `alamat_toko`, `deskripsi`, `instagram`, `link_ig`, `facebook`, `link_fb`, `telpon`, `created_at`, `updated_at`) VALUES
(1, '106', 'BM6597komputer1.jpg', 'Bima Store', 'Jl.Apung No.58 Denpasar', 'Menjual Pakaian Pria dan Wanita', NULL, NULL, NULL, NULL, NULL, '2021-11-30 19:32:05', '2021-11-30 19:32:05'),
(6, '110', '1954IMG_20190808_150918.jpg', 'CV. ManikBerlian', 'Tabanan-Bali', 'Event Organizer & Productions\r\nII\r\nMenyewakan Sarana Dekorasi & Pesta', NULL, NULL, NULL, NULL, NULL, '2021-12-13 06:28:12', '2021-12-13 06:28:12'),
(7, '184', '52929352D624-3532-4F24-AF08-07F50AAA73E0.jpeg', 'REMA GROUP', 'Jln Siulan 3 no 5', 'Melayani sepenuh hari\r\nHub 08123644960', NULL, NULL, NULL, NULL, NULL, '2021-12-13 06:54:11', '2021-12-13 06:54:11'),
(8, '261', '656320210617_162843.jpg', 'Mahkota catering', 'Jl kaswari gg dahlia no 9', 'Melayani segala jenis pesta anda', NULL, NULL, NULL, NULL, NULL, '2021-12-13 07:10:46', '2021-12-13 07:10:46'),
(9, '269', '75262A71D321-D1A7-4580-80D0-2F252BA87953.jpeg', 'KenOlshop', '-', 'Pakaian dan accessories', NULL, NULL, NULL, NULL, NULL, '2021-12-13 09:39:34', '2021-12-13 09:39:34'),
(10, '272', '63974_innova-attitude-black_0.png', 'Trimana Transport', 'Jl.siulan ill No.5', 'Sewa mobil di bali.', NULL, NULL, NULL, NULL, NULL, '2021-12-13 14:33:19', '2021-12-13 14:33:19'),
(11, '265', '809020171207_104218.jpg', 'Rareangon bali', 'Marga tabanan', 'Jual ayam aduan', NULL, NULL, NULL, NULL, NULL, '2021-12-13 14:55:38', '2021-12-13 14:55:38'),
(12, '257', '5951IMG20210716085415.jpg', 'Wiwi shop', 'Banjar cemenggon desa penarungan Mengwi badung', 'Belanja lebih aman,murah,dan berkualitas', NULL, NULL, NULL, NULL, NULL, '2021-12-14 02:24:09', '2021-12-14 02:24:09'),
(13, '267', '5358FB_IMG_16394925979757957.jpg', 'BANK PENEBEL', 'Jalan hayam wuruk no 98 dps', 'Solusi masalah keuangan anda', NULL, NULL, NULL, NULL, NULL, '2021-12-14 14:41:43', '2021-12-14 14:41:43'),
(14, '287', '8883C20D2B83-EF63-4558-98DE-07A75BA0FE99.jpeg', 'Head Up Barbershop', 'Jl. Batubulan no 7', 'Barbershop dengan kualitas terbaik, menyediakan segala jenis product rambut, silahkan kunjungi dan buktikan.', NULL, NULL, NULL, NULL, NULL, '2021-12-15 07:43:48', '2021-12-15 07:43:48'),
(15, '286', '6586FB_IMG_1639563605731.jpg', 'Warung megaconk', 'Jln igusti Ngurah Rai .Mengwi badung', 'Makanan', NULL, NULL, NULL, NULL, NULL, '2021-12-15 10:23:03', '2021-12-15 10:23:03'),
(17, '108', '9859IMG_161896576906F.jpg', 'Citra', 'Jl kaswari gg dahlia no 9', 'Menyediakan berbagai kebutuhan bahan pokok dan jadi', NULL, NULL, NULL, NULL, NULL, '2021-12-15 23:31:47', '2021-12-15 23:31:47'),
(20, '296', '3240IMG20211031144807.jpg', 'Warung Mektut', 'Br Gelumpang, Sukawati, Giayar', 'Jual air kesehatan, rujak, tipat cantok dan aneka minuman.', NULL, NULL, NULL, NULL, NULL, '2021-12-17 10:59:22', '2021-12-17 10:59:22'),
(21, '109', '2033IMG-20210919-WA0005.jpg', 'Maha shop', 'Banjar cemenggon desa penarungan mengwi badung', 'Kualitas terjamin\r\nHarga bersaing', NULL, NULL, NULL, NULL, NULL, '2021-12-17 12:48:38', '2021-12-17 12:48:38'),
(22, '297', '1873IMG_20211218_054757_932.jpg', 'Tya Novia', 'Gianyar', 'Mc (Master Of Ceremony) & Singer Dangdut Koplo', NULL, NULL, NULL, NULL, NULL, '2021-12-18 09:43:43', '2021-12-18 09:43:43'),
(24, '301', '9751IMG-20211219-WA0028.jpeg', 'Wira electric', 'Jln siulan gg pura taman no 38 denpasar timur', 'Mengerjakan pemasangan listrik dan plumbing \r\nWA 08179794382', NULL, NULL, NULL, NULL, NULL, '2021-12-19 11:15:57', '2021-12-19 11:15:57'),
(25, '282', '3477C4A171D2-7197-4F0D-A210-51A759931587.jpeg', 'TRIMART', 'Jl Keboiwa No 126 Denpasar Barat', 'Menjual alat alat tulis, dan sembako\r\nHub 087861444407', NULL, NULL, NULL, NULL, NULL, '2021-12-21 04:25:03', '2021-12-21 04:25:03'),
(26, '309', '39311640083345311938674141836190591.jpg', 'KOJO DEKORASI', 'Desa Kutuh - Pandawa', 'Menyewakan Alat Alat Dekorasi', NULL, NULL, NULL, NULL, NULL, '2021-12-21 10:43:25', '2021-12-21 10:43:25'),
(27, '313', '3413Screenshot_2021-06-13-23-07-32-556_com.facebook.katana.jpg', 'Liong classic part', 'Sempidi Mengwi Badung', 'Menjual part bekas copotan motor dan mobil', NULL, NULL, NULL, NULL, NULL, '2021-12-23 03:55:07', '2021-12-23 03:55:07'),
(28, '324', '3732TOKO.jpg', 'TOKO LISTRIK JAYA INDAH 2', 'JLN TRENGGANA(SAMPING ACK) DENPASAR', 'MELAYANI PEMBELIAN ECER DAN GROSIR', NULL, NULL, NULL, NULL, NULL, '2021-12-24 04:04:11', '2021-12-24 04:04:11'),
(29, '325', '354520211217_220358.jpg', 'I wayan suarjana.', 'Sibetan', 'Menyewakan dan menjual', NULL, NULL, NULL, NULL, NULL, '2021-12-24 04:27:00', '2021-12-24 04:27:00'),
(30, '327', '9376FB_IMG_1638968157494.jpg', 'Bali Giri Sugidana', 'Jl.Jendral Sudirman No.98 Amlapura', 'Toko Bahagia untuk menjual Produk dan Jasa. Keuntungan penjualan disalurkan untuk pembangunan jalan ke Lempuyang', NULL, NULL, NULL, NULL, NULL, '2021-12-24 23:03:30', '2021-12-24 23:03:30'),
(31, '338', '299716404026558007607943250912671752.jpg', 'Mayung bengkel mobil honda', 'jln.Kusuma Dewa II .No.10x', 'Menerima perbaikan segala merek mobil', NULL, NULL, NULL, NULL, NULL, '2021-12-25 02:26:37', '2021-12-25 02:26:37'),
(32, '317', '238020211225_112633.jpg', 'Inti Jaya Perkasa, CV', 'Jl Pura Dalem Solo Sedang Abiansemal Badung Bali', 'Supplier Alat Listrik', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:30:25', '2021-12-25 03:30:25'),
(33, '342', '5797IMG20210910030054.jpg', 'GT sapi', 'Lantai 1 pasar Badung', 'Menjual daging sapi segar', NULL, NULL, NULL, NULL, NULL, '2021-12-25 05:10:34', '2021-12-25 05:10:34'),
(35, '347', '8912IMG_20211120_092357.jpg', 'UD ARis', 'Jl siulan no 25 denpasar', 'Jual bahan bangunan\r\nHub 0361 461496', NULL, NULL, NULL, NULL, NULL, '2021-12-25 05:55:24', '2021-12-25 05:55:24'),
(36, '351', '6053IMG_20210805_191727.jpg', 'Lobo Dekorasi', 'Jln tukad yeh aya IX no 100 renon', 'Mengerjakan semua kebutuhan Dekorasi ,baik pembuatan tenda,meja panggung dan pintu besi serta canopy ,dll', NULL, NULL, NULL, NULL, NULL, '2021-12-25 10:12:14', '2021-12-25 10:12:14'),
(38, '361', '9353IMG_20211202_133756.jpg', 'Toko Candra', 'Pasar Cokroaminoto', 'Menjual alat alat upacara seperti : pejati, prayascita, daksina, dll, (menerima pesanan)', NULL, NULL, NULL, NULL, NULL, '2021-12-26 05:10:40', '2021-12-26 05:10:40'),
(39, '362', '921320211216_164818.jpg', 'Toko Dika', 'Jl.Jayagiri XXI.Gang B.no 4', 'Jual alat2 packaging dan Atk', NULL, NULL, NULL, NULL, NULL, '2021-12-26 08:01:51', '2021-12-26 08:01:51'),
(41, '364', '75370AE705F3-983D-4389-94DA-9030F4651D11.jpeg', 'pia dhian', 'jln batu yang gang tunjung sari 2 no 1', 'jual pie susu', NULL, NULL, NULL, NULL, NULL, '2021-12-27 00:24:17', '2021-12-27 00:24:17'),
(42, '328', '3983Surat jalan  Kencana baru.jpg', 'Dewata Kencana', 'Jalan Jepun Pipil No 24 Gatsu Timur Denpasar', 'Event Organizer\r\nPenyewaan Tenda\r\nPembuatan Tenda\r\nPenjualan T-Shirt\r\nDll', NULL, NULL, NULL, NULL, NULL, '2021-12-27 11:26:13', '2021-12-27 11:26:13'),
(43, '397', '2742IMG_20200817_170349_1.jpg', 'Toko Bu Dayu', 'Pasar pudak batubulan', 'Jual pejati, alat upakara, dll hub hp 081997603803', NULL, NULL, NULL, NULL, NULL, '2022-01-03 12:27:15', '2022-01-03 12:27:15'),
(44, '405', '899420210811_080719.jpg', 'Garam', 'Jl antasura gg tangkas no 2', 'Menjual garam grosir dan eceran', NULL, NULL, NULL, NULL, NULL, '2022-01-04 13:24:57', '2022-01-04 13:24:57'),
(45, '402', '6793IMG-20220102-WA0001.jpeg', 'Canang sari', 'Jl gunung sanghyang gg Ayodya no 3', 'Silahkan diorder bosku harga bersahabat☺☺☺👍👍👍', NULL, NULL, NULL, NULL, NULL, '2022-01-04 13:31:42', '2022-01-04 13:31:42'),
(46, '412', '8152LOGO.jpg', 'Warung Babi Genyol Arta Nadi', 'Jln raya semer 47', 'Olahan daging babi', NULL, NULL, NULL, NULL, NULL, '2022-01-06 10:45:22', '2022-01-06 10:45:22'),
(47, '413', '1574Screenshot_2022-01-06-15-39-12-35_7352322957d4404136654ef4adb64504.jpg', 'Ria Toyota Bali', 'Denpasar', 'Menjual Jenis Kendaraan Mobil Toyota  dan Melayani Tukar tambah segala Merk Kendaraan', NULL, NULL, NULL, NULL, NULL, '2022-01-07 02:53:35', '2022-01-07 02:53:35'),
(48, '417', '6539Screenshot_2021_1214_073134.jpg', 'Yeni Cake & Kitchen', 'Jl. gunung patas 1, gang Vaving No.5', 'Toko Roti dan Aneka Kue', NULL, NULL, NULL, NULL, NULL, '2022-01-07 06:58:57', '2022-01-07 06:58:57'),
(49, '395', '2647Screenshot_2021-11-06-10-45-26-63.jpg', 'Karisma sanggah', 'Jln Trengguli tembau kaje no 63a', 'Jual segala Pelinggih pasir mlela', NULL, NULL, NULL, NULL, NULL, '2022-01-07 12:33:17', '2022-01-07 12:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point_total` int(11) DEFAULT NULL,
  `point_tarik` int(11) DEFAULT NULL,
  `point_sisa` int(11) DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `referal`, `image`, `image_profile`, `nik`, `jenis_kelamin`, `kota`, `kecamatan`, `kabupaten`, `provinsi`, `negara`, `telp`, `hp`, `point_total`, `point_tarik`, `point_sisa`, `bank`, `no_rek`, `no_register`, `username`, `role`, `instagram`, `link_ig`, `facebook`, `link_fb`) VALUES
(90, 'pegawai', 'test@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'pegawai', 'pegawai', NULL, NULL, NULL, NULL),
(92, 'I Gede Astawa', 'gedeary0000@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, 'BM0006', '-', NULL, '5171010908790004A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082235310109', NULL, NULL, NULL, NULL, NULL, NULL, 'gedeary', 'member', NULL, NULL, NULL, NULL),
(93, 'I Kadek Narena S. I.kom., M. I.kom.', 'ikadeknarena@gmail.com', NULL, '$2y$10$MhtaJRZarGFoz9xe.LOkKu1HVkoZAEvKikv5YgQzUNxkalpbkPKGK', NULL, NULL, '2021-12-24 03:21:54', 'Jalan Nuansa Hijau Timur X No. 7 Ubung Kaja', 'BM0007', '-', '93ECYouXnwwIgjPS5upDxOsSuGQTtPlJR2PzMW6cSK.jpg', '-', 'Laki-laki', 'Denpasar', 'Denpasar Utara', NULL, 'Bali', 'Indonesia', NULL, '081338719608', NULL, NULL, NULL, 'BNI', '0231297952', NULL, 'BM0007', 'member', NULL, NULL, NULL, NULL),
(94, 'Ni Luh Christina Pramika', 'BM0008@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, 'BM0008', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0008', 'member', NULL, NULL, NULL, NULL),
(95, 'I Wayan Putu Suarjana', 'wayanputusuarjanaa@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, 'BM0009', '-', NULL, '5107060304840001A', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'wayanputusuarjana', 'member', NULL, NULL, NULL, NULL),
(96, 'Made Derawa', 'BM0010@gmail.com', NULL, '$2y$10$oH6AWs.9weBbPhzAHYSfl.KT.mkCJ8RyoMoFdGJR0zia3v6XM/DSu', NULL, NULL, '2021-12-24 03:15:03', 'Br. Batih,', 'BM0010', '-', '96BlrDgOaWH0GGHprj2joujWo1YNGvlKw72GyXLY8o.jpg', '-', 'Laki-laki', 'Siakin', 'Kintamani', 'Bangli', 'Bali', 'Indonesia', NULL, '081337393733', NULL, NULL, NULL, 'BNI', NULL, NULL, 'BM0010', 'member', NULL, NULL, NULL, NULL),
(97, 'I Gede Sudiarta', 'BM0011@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, '-', 'BM0011', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0011', 'member', NULL, NULL, NULL, NULL),
(98, 'I Komang Wiarta', 'BM0012@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, '-', 'BM0012', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0012', 'member', NULL, NULL, NULL, NULL),
(99, 'Ni Kadek Nita Pramesti', 'BM0013@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'JL Bali Cliff BR Kangin Ungasan', 'BM0013', '-', '99xPvvevEUFwU5QOIPuo7x2P0DMD7nr087p7MKAHoY.jpg', '5103056810990004A', 'Perempuan', NULL, 'Kuta selatan', 'Badung', 'Bali', 'Indonesia', NULL, '087765478220', NULL, NULL, NULL, 'BNI', NULL, NULL, 'BM0013', 'member', NULL, NULL, NULL, NULL),
(100, 'BOOMBEST OFFICE', 'info@boombest.net', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, 'BM0000', '', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'boombest', 'member', NULL, NULL, NULL, NULL),
(101, 'I Wayan Agus Sudantha', 'BM0015@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'Jl Pantai Sindu II No 1', 'BM0015', '-', NULL, '51710120002840003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0015', 'member', NULL, NULL, NULL, NULL),
(102, 'Made Andika Prayoga', 'BM0015A@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, '-', 'BM0016', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0015', 'member', NULL, NULL, NULL, NULL),
(105, 'I Wayan Agus Sudantha', 'tetstupidpro@gmail.com', NULL, '$2y$10$B.iXNzViU3oBYNWl/0R4F.TNHQGSNa0vm9PLPg5RrCC7.XBbwou1S', NULL, NULL, '2021-12-24 05:44:46', 'JL. Pantai Sindu II/ 1 Sanur, Sindu Kaja', 'BM0014', '-', NULL, '5171012002840003A', 'Laki-laki', NULL, 'Denpasar Selatan', 'Denpasar', 'Bali', 'Indonesia', NULL, '087860026049', NULL, NULL, NULL, 'BNI', NULL, NULL, 'BM0014', 'member', NULL, NULL, NULL, NULL),
(106, 'MemberIT', 'bimatest@gmail.com', NULL, '$2y$10$8cxs/ZxqMP66x/D4FFiITeOuVV/QWgDVK/f0LbARCYGQwYuVOgbRO', NULL, NULL, '2021-12-12 15:45:05', 'Jln. Perum Dewata Perma,B1/21,Sading,Mengwi', 'BM6597', 'BM6597GdCdLhlqBXnCfLDF7HZq5QkhLZegVbap89LITCyP.png', '10658894h3URv2rVJehCymKlrDeXLGZ1AeQRcbLZVIz.jpg', '161355481894141A', 'Laki-laki', 'Mengwi', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '08761163636', NULL, NULL, NULL, 'BNI', '0987766', NULL, 'membertest', 'member', NULL, NULL, NULL, NULL),
(107, 'I Putu Martana SH', 'putumartana402A@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'BR. DINAS WATES TENGAH', 'BM0000', '107WWxg2C82Nkqp4JhbyzFrShmv3mUpbayfZJBgV6Lj.jpg', '107yO3dJWaXfHSWRdl1SVR4T7xtWos7RPoNDsDHZoAd.jpg', '5107072703600002A', 'Laki-laki', 'Karangasem', 'SELAT', 'KARANGASEM', 'BALI', 'INDONESIA', NULL, '08123644960', NULL, NULL, NULL, 'BNI', '1301339364', NULL, 'Kiano569', 'member', NULL, NULL, NULL, NULL),
(108, 'DESAK MADE CITRAWATI', 'platinum3@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'Jl kaswari gg dahlia no 9', 'BM0000', '-', '108ZvkSKxL7TcKBNjxJmXrhbONjzXVaj1GKvZGV9CEI.jpg', '5107065806760001A', 'Perempuan', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Infonesia', NULL, '087846054837', NULL, NULL, NULL, 'BNI', NULL, NULL, 'citrawati', 'member', NULL, NULL, NULL, NULL),
(109, 'AA Sri Mahayani', 'aasrimahayani34@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'Banjar cemenggon', 'BM0004', '-', '109234Zcq5gTvQNRLLrAX5EsaHeM6f2Vwh074rXu9D1.jpg', '5103025003820008A', NULL, 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '081239624461', NULL, NULL, NULL, NULL, '1317564712', NULL, 'srimahayani', 'member', NULL, NULL, NULL, NULL),
(110, 'I Wayan Sukawibawa ST', 'wayan@boombest.net', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, 'Perum. Purikampial, Block C122, Lingk. Wisma Nusa Permai, Kel. Benoa', 'BM0000', '-', '110kxrmO7Yf2Oh29vl5dXKhKZelFdlNW2NspkbQojy6.jpg', '5171011308810004A', 'Laki-laki', 'Kabupaten Badung', 'Kuta Selatan', 'Badung', 'Bali', 'Indonesia', NULL, '081239225999', NULL, NULL, NULL, 'BNI', '1301131151', NULL, 'Sukawibawa', 'member', NULL, NULL, NULL, NULL),
(152, 'Admin1', '', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, '2021-11-30 20:39:51', NULL, '', '', '152xSggIPtdh9xSwrdIEXXZ3rBI3pQbxy0LrvGFhM8B.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', NULL, NULL, NULL, NULL),
(183, 'NI KADEK PUSPARINI', 'puspa@gmail.com', NULL, '$2y$10$6.WiiCh/zgv/nGhlHmmIButlCgFjI5HO5pOC11A2IMLNsNBv0Lvu6', NULL, NULL, '2021-12-01 16:51:52', 'BR. DINAS WATES TENGAH', 'BM0002-1', '1836ZgE1c3CkJ8fyB4Ng9CckpCjHa9FXxAJ8Vvwifr9.jpg', NULL, '510704903830001', 'Perempuan', 'Karangasem', 'Selat', 'Karangasem', 'Bali', 'Indonesia', NULL, '082147915200', NULL, NULL, NULL, 'BNI', NULL, NULL, 'puspa', 'member', NULL, NULL, NULL, NULL),
(184, 'I Putu Martana', 'putumartana402@gmail.com', NULL, '$2y$10$6.WiiCh/zgv/nGhlHmmIButlCgFjI5HO5pOC11A2IMLNsNBv0Lvu6', NULL, NULL, '2021-12-01 17:01:33', 'BR. DINAS WATES TENGAH', 'BM0002-2', '/home/admin/web/member.boombest.net/public_html/thumbnails', '1842JHouuo7fRHuAC1cLhzBhlxEjlREjnyuLXWHV9mE.jpg', '510707270380002', NULL, 'Karangasem', 'Selat', 'Karangasem', 'Bali', 'Indonesia', NULL, '08123644960', NULL, NULL, NULL, 'BNI', '2703808889', NULL, 'martana', 'member', NULL, NULL, NULL, NULL),
(199, 'IT DEVELOPMENT', 'ngrnana@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, NULL, NULL, 'BM0000', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '888', NULL, NULL, NULL, NULL, NULL, NULL, 'IT', 'member', NULL, NULL, NULL, NULL),
(252, 'I PUTU ARYA PUTRA', 'putuputra676@gmail.com', NULL, '$2y$10$hUeweY5N.zfdO5GnwQhSaegfyA6HipwcK5milUI2KYOzutp1b0m76', NULL, NULL, '2021-12-06 15:32:43', 'jl kaswari gg dahlia no 9', 'BM0003-1', '/home/admin/web/member.boombest.net/public_html/thumbnails', '252En6rbf5MFZ5a81bbajObWSXheLgJ0AO6mKkJzhqk.jpg', '5107061710030002', 'Laki-laki', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '082359051753', NULL, NULL, NULL, 'BNI', NULL, NULL, 'aryaputra', 'member', NULL, NULL, NULL, NULL),
(257, 'I Gusti Ngurah Adi Yoga', 'ngradi@boombest.net', NULL, '$2y$10$63i0Yv1JgnnZbbBSL2VVMOxv.Odo1MaYJasHaPH8s8wfqEZ1oulKq', NULL, NULL, '2021-12-07 14:42:57', 'Banjar cemenggon desa penarungan Mengwi Badung bali', 'BM0004-1', '/home/admin/web/member.boombest.net/public_html/thumbnails', '257tIQgFYFstnMsIrfqT7hk3JZV5InNn7MTezFNRszz.webp', '5103020705790008', 'Laki-laki', 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '082144038341', NULL, NULL, NULL, 'BNI', '1301329968', NULL, 'ngurahadi', 'member', NULL, NULL, NULL, NULL),
(261, 'I Ketut Sujana', 'ketutsujana1407@gmail.com', NULL, '$2y$10$NT7OE3IlJ6pFJgkk4XjkZO.yZeqTnibKTgKpcFUytbKRYijIa72b6', NULL, NULL, '2021-12-14 00:29:10', 'Jl kaswari gg dahlia no 9', 'BM0003-2', '1639370678.jpg', '261NOsYGXgy4AvziBT8WKrzhe2ZjxVa0H2Jcwgmhwww.jpg', '5107061407800001', 'Laki-laki', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '081805393532', NULL, NULL, NULL, 'BNI', '1301336487', NULL, 'sujana', 'member', NULL, NULL, NULL, NULL),
(262, 'I Wayan Adityawan', 'adityawanwayan4@gmail.com', NULL, '$2y$10$6.WiiCh/zgv/nGhlHmmIButlCgFjI5HO5pOC11A2IMLNsNBv0Lvu6', NULL, NULL, '2021-12-13 13:09:33', NULL, 'BM0003-3', '1639372009.jpg', NULL, '5107061910990001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082147154740', NULL, NULL, NULL, NULL, NULL, NULL, 'adityawan', 'member', NULL, NULL, NULL, NULL),
(265, 'I wayan sriada', 'yansrikandi@gmail.com', NULL, '$2y$10$rZBclNXPW4YPiCaR00jhWe1HGQLgkIDyGf25/kVOSin04ITcuFZs6', NULL, NULL, '2021-12-13 14:35:55', NULL, 'BM0002-3', 'empty', NULL, '5108090808770006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087860180169', NULL, NULL, NULL, NULL, NULL, NULL, 'Srikandi', 'member', NULL, NULL, NULL, NULL),
(266, 'Ni Wayan Widi Rahayu', 'widir06@gmail.com', NULL, '$2y$10$m53GaSE8c0Dq348s6V4Wn.N.UunvMi0VEAXYX4L6bAktAJ4ZrvPdi', NULL, NULL, '2021-12-14 07:28:35', 'Jl. Sibakan', 'BM0005-1', 'empty', NULL, '5107016711970001', 'Perempuan', NULL, 'Rendang', 'Karangasem', 'Bali', 'Indonesia', NULL, '+62 821-4691-0198', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Widi Rahayu', 'member', NULL, NULL, NULL, NULL),
(267, 'NI LUH SRI ANIASIH', 'sridefaa@gmail.com', NULL, '$2y$10$WgDpOtkVTk.4D/fEg2r9tOnoO5RGlCW6l2tZxJETycNAYiEViF3tK', NULL, NULL, '2021-12-13 15:23:15', NULL, 'BM0002-4', 'empty', '267WZdTqCJEYcfogZsyJVlz9ucIkYjql535QQKO7BVU.jpg', '5101046803840001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085333578734', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Sridefaa', 'member', NULL, NULL, NULL, NULL),
(268, 'Luh widiastuti', 'lhwdst@gmail.com', NULL, '$2y$10$ax4nsTL71.Jb49bt7nuvoeJw6EbfiyMiszmtZzVqf8r3gkSSU/GDq', NULL, NULL, '2021-12-13 15:44:41', NULL, 'BM0003-4', 'empty', NULL, '5108095908000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081246784248', NULL, NULL, NULL, NULL, NULL, NULL, 'Widia', 'member', NULL, NULL, NULL, NULL),
(269, 'Komang Sulasih', 'kenolshop2020@gmail.com', NULL, '$2y$10$8cxs/ZxqMP66x/D4FFiITeOuVV/QWgDVK/f0LbARCYGQwYuVOgbRO', NULL, NULL, '2021-12-13 16:38:22', 'Puri Kampial Blok C/122', 'BM0005-2', 'empty', '269fC8s1DU262Ybw8syik9oHFF6brny6t8YMJ5T2QLe.jpg', '5171014309820001', 'Perempuan', 'Nusa Dua', 'Kuta Selatan', 'Badung', 'Bali', 'Indonesia', NULL, '081805570707', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Ken Olshop', 'member', NULL, NULL, NULL, NULL),
(270, 'I wayan sukertono', 'vananggi74@gmail.com', NULL, '$2y$10$ECUx5gvN1bcCA3SqzIYvZuOEuVTrnKd18DfP6foSGPZP3OcksvEg6', NULL, NULL, '2021-12-13 19:41:31', NULL, 'BM0005-3', 'empty', NULL, '5102060802740005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'O81805530484', NULL, NULL, NULL, NULL, NULL, NULL, 'Pak anggi', 'member', NULL, NULL, NULL, NULL),
(271, 'I Nengah sriadi', 'sriaditya848@gmail.com', NULL, '$2y$10$c6JIAOQtIRfx/9Rci01m8OMf/aktxITgBce0Th3/5PTu.D9ZN19Qu', NULL, NULL, '2021-12-13 22:09:35', NULL, 'BM0002-5', 'empty', NULL, '510809080877004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087860708448', NULL, NULL, NULL, NULL, NULL, NULL, 'Sriaditya', 'member', NULL, NULL, NULL, NULL),
(272, 'Dana', '58danaoye@gmail.com', NULL, '$2y$10$p6rPn4ynYe6SDY2phoi8vupklO9OAhQPYOFdBFyx/l4kD1WxZuXVq', NULL, NULL, '2021-12-13 22:21:47', NULL, 'BM0002-6', 'empty', '272925nPPmF88vVWYartcBMdquXCnbwHMj8s51WPBg3.jpg', '5107062304900001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085239194471', NULL, NULL, NULL, NULL, NULL, NULL, 'Erwanto', 'member', NULL, NULL, NULL, NULL),
(273, 'Putu Subawa', 'bawachakep@gmail.com', NULL, '$2y$10$w3P1d7VAvLnECSAcKRk0PuX3NiJi93Il2MFGjyj7LmIoOBgisR0g.', NULL, NULL, '2021-12-13 22:22:36', NULL, 'BM0002-7', 'empty', NULL, '5108030101800012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085776433115', NULL, NULL, NULL, NULL, NULL, NULL, 'Putu Bejo', 'member', NULL, NULL, NULL, NULL),
(274, 'I MADE ANDIKA KURNIAWAN', 'dikaswara89@gmail.com', NULL, '$2y$10$lMNeA6fEIQcy1jpx/PbCJe9bV6sD9ehVUzIc/zept4CCcJMpCdqMO', NULL, NULL, '2021-12-13 22:39:04', 'Banjar sengguan penarungan', 'BM0002-8', 'empty', '274YaO8nWDkCltg4faMjEoTSYNfK0BMgM6REOYKmKwH.jpg', '5103023003900002', 'Laki-laki', 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '082341485771', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Dika89', 'member', NULL, NULL, NULL, NULL),
(276, 'Kadek sudiatnata', 'madesimpen42@gmail.com', NULL, '$2y$10$SpUGMEhDucDKEHkXTEYfgO3I1LkuiUjG7o9TeWtglEYUbw2/O8Q5u', NULL, NULL, '2021-12-14 07:47:38', NULL, 'BM0003-5', '1639439127.jpg', NULL, '5107061811010002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '083850038964', NULL, NULL, NULL, NULL, NULL, NULL, 'Kadek', 'member', NULL, NULL, NULL, NULL),
(277, 'Ketut Andre Candra Winata', 'candraandre02@gmail.com', NULL, '$2y$10$dJ3kja.TCQzbRo4hcKFZTuMeaEU1XlUNjzxHiUrH0rkrr9TtbGe5u', NULL, NULL, '2021-12-14 08:05:30', NULL, 'BM0003-6', '1639440169.jpg', NULL, '5171042208040001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085792116283', NULL, NULL, NULL, NULL, NULL, NULL, 'Andre', 'member', NULL, NULL, NULL, NULL),
(279, 'I Komang Wika Dana', 'komangwika97@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, '2021-12-14 11:21:58', NULL, 'BM0005-4', '1639448346.jpg', NULL, '5101031504870004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081236048843', NULL, NULL, NULL, NULL, NULL, NULL, 'WIKA', 'member', NULL, NULL, NULL, NULL),
(282, 'Ni komang tri puspa yuli widyandari', 'tri.puspa@yahoo.com', NULL, '$2y$10$MvUpCwqnekkgiO8DvhHpxuSpT.RK0JTTaVH0UFENarjGdHDlXegS2', NULL, NULL, '2021-12-14 11:46:20', 'Jl Taman Wedasari gg Drupadi no 7A', 'BM0002-9', '1639453245.jpg', '282lb55lvF42FPTvcDbS7BonSYKDJ7GgDRtFn5s0FH3.jpg', '5108094707850003', NULL, 'Denpasar', 'Denpasar Barat', 'Denpasar', 'Bali', 'Indonesia', NULL, '087861444407', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Tri puspa', 'member', NULL, NULL, NULL, NULL),
(283, 'I Made Sudarta', 'imadestabiz@gmail.com', NULL, '$2y$10$5gITRkPJf8RVP4HSHNEvGekyP/aas188h2bL6ifWUPX702m4aZHHa', NULL, NULL, '2021-12-14 12:22:45', 'Jl. Segara No.25, Ds.Pangkung Tibah', 'BM0005-5', '1639454183.jpg', '283T0jJMJU17laRhx9Oc7Ipi0YIteWmgXcLqDhdnucK.jpg', '5102062502700001', 'Laki-laki', 'Tabanan', 'Kediri', 'Tabanan', 'Bali', 'Indonesia', NULL, '085792594646', NULL, NULL, NULL, 'BNI', '9000008531502', NULL, 'MATAHARI', 'member', NULL, NULL, NULL, NULL),
(284, 'Suryadi', 'suyadisurya58537@gmail.com', NULL, '$2y$10$iBt7TcIoA9LyG8Py3TPD6uar0QEa.fklKj1VcMTquPNfiRXbvKGii', NULL, NULL, '2021-12-14 12:46:52', NULL, 'BM0005-6', '1639456810.jpg', NULL, '5102050506870001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '083119986000', NULL, NULL, NULL, NULL, NULL, NULL, 'Surya', 'member', NULL, NULL, NULL, NULL),
(285, 'Ni Wayan Buda Sunarsih', 'kemilangmanagement@gmail.com', NULL, '$2y$10$UPJj2NOYamP7/GG7BhAVUuMDN.1Yjhg68BhpNagTYZTPtSXmM3s7u', NULL, NULL, '2021-12-14 15:26:43', 'Jl. Tukad Balian', 'BM0005-7', '1639466569.jpg', '285XiW7DqHuZwLBbUGzRU5Ro0qNMEtLCxAXxkPIvLKs.jpg', '5171036009730001', 'Perempuan', NULL, 'Denpasar Selatan', NULL, 'Bali', 'Indonesia', NULL, '+62 821-4422-7841', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Sunarsih', 'member', NULL, NULL, NULL, NULL),
(286, 'I Wayan gede Mega diputra', 'megaaconk81@gmail.com', NULL, '$2y$10$lBEfHcEdGR1QCL0T7qfdd.KGFPi6g14y6eGHAZ6FVF3gjPqxoFpKi', NULL, NULL, '2021-12-15 08:33:27', 'Banjar Delod bale agung', 'BM0004-2', '1639489422.jpg', '286IpvWJWDQEKxgRYNbTAy6106mB67OgcG7J6mMmT5B.jpg', '51030260610610006', 'Laki-laki', 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '082339944001', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Mega diputra', 'member', NULL, NULL, NULL, NULL),
(287, 'I kadek adi santika', 'adisantika45@gmail.com', NULL, '$2y$10$.FUD7EK6RV6iZlNitPe.zeQOBeoKYXceWplV6nYybDWgI4cq/77NO', NULL, NULL, '2021-12-15 15:29:43', NULL, 'BM0002-10', '1639553287.jpg', NULL, '5107071307910001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082144335893', NULL, NULL, NULL, NULL, NULL, NULL, 'Adisantika45', 'member', NULL, NULL, NULL, NULL),
(288, 'Ahmadi', 'ahmadysaputra@gmail.com', NULL, '$2y$10$AVUxSNch6Xdz0IqD.2PLxuKCngUyNDDI8FDOJRa1/NgAYwJG8kKPq', NULL, NULL, '2021-12-16 09:12:02', 'Jl, Gatot SUbroto VI', 'BM0002-11', '1639617075.jpg', NULL, '5204131508890001', 'Laki-laki', 'Denpasar', 'Dauh Puri Kaje', 'Denpasar Utara', 'Bali', 'Indonesia', NULL, '081237287724', NULL, NULL, NULL, 'BNI', '0210426508', NULL, 'Non Anin', 'member', NULL, NULL, NULL, NULL),
(293, 'Yong Sagita Swastika', 'yongsagita@gmail.com', NULL, '$2y$10$ZSYOvkOo9I8H4JrN0Y.ucuA.mm0l6WCSM03J2hvtySFIitQpgoAqW', NULL, NULL, '2021-12-16 16:19:48', 'Jalan Tanah Ayu No. 8 X Br. Pane ,Sibang Gede', 'BM0004-3', '1639642613.jpg', '293LkF3dAxAYIxHn8btpQNJpyqW2ZlrDPV9547P0Zo5.jpg', '5171023011610002', 'Laki-laki', 'Badung', 'Abiansemal', 'Badung', 'Bali', 'Indonesia', NULL, '0817347345', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Yong', 'member', NULL, NULL, NULL, NULL),
(295, 'I MADE SUTAMA', 'Sutamamomon61@gmail.com', NULL, '$2y$10$RIzfdUhZeyb8bbpsoGUrEepCAnBkI9EyBJbdO.592KRijApkCmPCu', NULL, NULL, '2021-12-17 15:20:09', NULL, 'BM0002-12', '1639725538.jpg', NULL, '5107082701840001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085348484048', NULL, NULL, NULL, NULL, NULL, NULL, 'Sutama', 'member', NULL, NULL, NULL, NULL),
(296, 'Made Bakat', 'fe_ubud@freightexpressindo.com', NULL, '$2y$10$OUa5zYoGGI3wzihLfWNRs.lDPJy/lji/7GR6fYP36FecNK1WSFCd2', NULL, NULL, '2021-12-17 18:46:38', NULL, 'BM0002-13', '1639737874.jpg', NULL, '5108092709660001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082236333126', NULL, NULL, NULL, NULL, NULL, NULL, 'Madebakat', 'member', NULL, NULL, NULL, NULL),
(297, 'Ni Putu Novia Sariyasa Dewi', 'tyanovia6@gmail.com', NULL, '$2y$10$.d2MWNgIatOt6AjihTd.su2A/4XGy5JK7c2kWW5DsY9.koqluo5PK', NULL, NULL, '2021-12-18 17:40:56', 'Prumahan Amerta Nadi Gang Culeg Blok E No 8', 'BM0003-7', '1639820277.jpg', '297Y1oMmpAitUHKyVeEs64w3xTCXsjGwPE2gWNaWZXs.jpg', '5104036111970002', NULL, 'Gianyar', 'Sukawati', 'Gianyar', 'Bali', 'Indonesia', NULL, '085792295971', NULL, NULL, NULL, 'BNI', '1177584779', NULL, 'TyaNovia', 'member', NULL, NULL, NULL, NULL),
(298, 'Ikadek sumarata', 'kadeksumarata880@gmail.com', NULL, '$2y$10$v.af/T6B2mLvkBECWJrlk.WBqazO4oB3BFA60e6.s5aA.Qw09LW1.', NULL, NULL, '2021-12-18 17:47:34', 'Perum bhayangkara 2a no 30', 'BM0004-4', '1639820678.jpg', NULL, '5107071905840002', NULL, 'Mangupura', 'Abian semal', 'Badung', 'Bali', 'Indonesia', NULL, '08124665592', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Semarajaya', 'member', NULL, NULL, NULL, NULL),
(299, 'Ni Nyoman Erlawati', 'erlawati123@gmail.com', NULL, '$2y$10$3aCZaFlxT4hRC4pFSAHiv.IWyauXpnEx1LlA1aac2Cb22zHGT/jZ.', NULL, NULL, '2021-12-19 09:31:02', 'Jl siulan gg Sekar sari 4 no 9a', 'BM0002-14', '1639877368.jpg', '299DpYVQYTCYi1bzlhitjcgekv2wA94p8izJmOvNLnZ.jpg', '5107075407540001', 'Perempuan', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '08124649676', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Erlawati', 'member', NULL, NULL, NULL, NULL),
(300, 'Nengah aryoka prayoga', 'nghprayoga@gmail.com', NULL, '$2y$10$rz3vMuFfNVoW/5W29vQDl.zCr5N.VkLl8nWTjvNeWMTOQv.IODtyW', NULL, NULL, '2021-12-19 18:52:51', 'Jl. siulan Gg pura taman no. 18B', 'BM0002-15', '300cssi278ZYCPr3UxwBeAUyRWBQQtt9sWClYgCWs9R.jpg', '3003OQHe93UqSorIlQX8cFrnbT5UWQngKk73gKRk8gv.jpg', '5107062009900001', 'Laki-laki', 'Denpasar', 'Denpasar Timur', 'Denpasar', 'Bali', 'Indonesia', NULL, '082144840932', NULL, NULL, NULL, 'BNI', '1301277180', NULL, 'Prayoga90', 'member', NULL, NULL, NULL, NULL),
(301, 'I kadek wiranata', 'wiraelectric@gmail.com', NULL, '$2y$10$Xvj5f6YCNGjj9UhDwhG07.eLeH4xD72P.IIKinIf39lZ2i5dGNT5O', NULL, NULL, '2021-12-19 18:59:15', NULL, 'BM0002-16', '1639911473.jpg', NULL, '5107032806890002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08179794382', NULL, NULL, NULL, NULL, NULL, NULL, 'Wira89', 'member', NULL, NULL, NULL, NULL),
(302, 'NI NYOMAN NENDRAWATI', 'ayuknendrawati209@gmail.com', NULL, '$2y$10$22DFG4UeX/OiOKC.lsnJKuiu2ZsFYDVQeVyV/wXO.hUsMgqLJKiX.', NULL, NULL, '2021-12-21 14:07:50', NULL, 'BM0002-17', '1640066389.jpg', NULL, '5171026009870001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081933104348', NULL, NULL, NULL, NULL, NULL, NULL, 'Nendrawati', 'member', NULL, NULL, NULL, NULL),
(303, 'Ni wayan desiani', 'niwayandesiani1983@gmail.com', NULL, '$2y$10$rax6cM.ZUQiXMPc6Xh1.ouUwY2yqxvPfF0NW6FbBQKn6Z1D1hTxDq', NULL, NULL, '2021-12-21 14:32:35', NULL, 'BM0002-18', '1640067592.jpg', '303NnnoQuIoWtgm9vvfvaJAGWuSpHLaGk3ILYvbPNXV.jpg', '5171036612830002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085932231785', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Depa', 'member', NULL, NULL, NULL, NULL),
(304, 'KADEK ARI REMPIYANI', 'arik48622@gmail.com', NULL, '$2y$10$Y2kn/fSqBeBpKeaFukfWhe27M5sAzzIAcAdN80kIONRBkmhTWyQby', NULL, NULL, '2021-12-21 14:48:47', 'JLN . SIULAN GG.MAWAR NO.1', 'BM0002-19', '1640069116.jpg', NULL, '5171024602930002', 'Perempuan', 'DENPASAR', 'DENPASAR TIMUR', NULL, NULL, NULL, NULL, '087860307366', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Kadek Ari', 'member', NULL, NULL, NULL, NULL),
(305, 'Ni Luh Putu Yulistyari', 'putuyulistyari81@gmail.com', NULL, '$2y$10$dIMQd5XpeCOkyjv4KwbTMOaQ7M2KpyXf8iO1sSnlZdOGr8U2RDX9C', NULL, NULL, '2021-12-21 14:51:55', NULL, 'BM0002-20', '1640069286.jpg', '3057Evp4a5a0R4kOSTlHxVAu04R8xkSJgDt9UH5uD84.jpg', '5108045607820004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082237907873', NULL, NULL, NULL, 'BNI', NULL, NULL, 'putuyulistyari', 'member', NULL, NULL, NULL, NULL),
(306, 'Nengah susilawati', 'sussywt@gmail.com', NULL, '$2y$10$WNbBLdLbsNhDWMcJRjkSyeB1TV9OehztYblAJ3zGw4TB9AazMKs1q', NULL, NULL, '2021-12-21 15:01:25', NULL, 'BM0002-21', '1640069635.jpg', '306fV5bdDVv2eNhZbOYAi6colOy7g0tvlcPjmPgZCtz.jpg', '5103066805750007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081936080542', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Susila', 'member', NULL, NULL, NULL, NULL),
(307, 'Ketut gumianis permata utami', 'gumianis.permata.utami@gmail.com', NULL, '$2y$10$TcUKw.iBRvggGDbxzYagluYbfLWvC461FGNL.je6N0HxAp3uptncm', NULL, NULL, '2021-12-21 15:02:57', NULL, 'BM0002-22', '1640069993.jpg', NULL, '5171015011960002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087899609203', NULL, NULL, NULL, NULL, NULL, NULL, 'Permata', 'member', NULL, NULL, NULL, NULL),
(308, 'I GUSTI AYU WEDAYANTI', 'wedayanti_gustiayu@yahoo.co.id', NULL, '$2y$10$z7yub49K7H8AES7CNIHRbOtzSJiUV.F/ZxcGfrL4wbNW/OuqmQMpe', NULL, NULL, '2021-12-21 16:06:09', NULL, 'BM0001-1', '1640070904.jpg', NULL, '5171046806900005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081916273541', NULL, NULL, NULL, NULL, NULL, NULL, 'Weda28', 'member', NULL, NULL, NULL, NULL),
(309, 'Nyoman sunada', 'nyomansunada41@gmail.com', NULL, '$2y$10$Hilt5fYbsrUY74QvQKwxN.ZCU5E/BL5VfNmsVKC6C6q0MXD8k/6KC', NULL, NULL, '2021-12-21 18:36:33', NULL, 'BM0005-8', '1640082714.jpg', NULL, '5103050410720006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08123978609', NULL, NULL, NULL, NULL, NULL, NULL, 'Kojo', 'member', NULL, NULL, NULL, NULL),
(310, 'Iketut widiana', 'tutwidiana@gmail.com', NULL, '$2y$10$X08saGmQ47y1tLcxQLeNi.T7igZOJl0tj237sXkC5KEt0BWboQjPu', NULL, NULL, '2021-12-22 12:48:31', 'Jalan Legian gang panti no 4', 'BM0004-5', '1640146511.jpg', '310tg4FYAZcL3fuJIy2DdbcWErkDtMppHDt8NhgZuep.jpg', '5103010504740010', 'Laki-laki', 'Mangupura', 'Kuta', 'Badung', 'Bali', 'Indonesia', NULL, '08123665040', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Widiana', 'member', NULL, NULL, NULL, NULL),
(311, 'Kadek arik miastuti putri', 'miastutiputri92@gmail.com', NULL, '$2y$10$M8z9YPAfd8HR8hxt90WFPuCVEnu.8Bz3Ba4sn.kRlW5mGcVdcMSaq', NULL, NULL, '2021-12-22 14:16:23', NULL, 'BM0003-8', '1640153670.jpg', NULL, '5171044705920009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085797988997', NULL, NULL, NULL, NULL, NULL, NULL, 'Mia', 'member', NULL, NULL, NULL, NULL),
(312, 'I Putu Sweca', 'ksusedanagraha@gmail.com', NULL, '$2y$10$EnidGcBf9uePwJVoIeUUC.syv4G6eA94MYKiCsu73aOfnZr6icaDC', NULL, NULL, '2021-12-23 11:33:17', NULL, 'BM0002-23', '1640226750.jpg', NULL, '5171020710680001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08123944047', NULL, NULL, NULL, NULL, NULL, NULL, 'I Putu Sweca', 'member', NULL, NULL, NULL, NULL),
(313, 'Iputu Setyawan', 'putu.liong72@gmail.com', NULL, '$2y$10$QigAI0IW0Rui7X312QgK1eDgDAytgjbPzEC5ioJMzYdMnsYYBRQQG', NULL, NULL, '2021-12-23 11:43:15', 'Gg taman bhayangkara ll no 21Lingk umegunung', 'BM0004-6', '1640230550.jpg', '313eZSZmeFuH4WPYJBdmG5MI32q2Nfeyv5v0TYg4kzc.jpg', '415965', NULL, 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '082145153068', NULL, NULL, NULL, NULL, NULL, NULL, 'Liong', 'member', NULL, NULL, NULL, NULL),
(314, 'I Gusti Ketut Arya Wisana', 'aryawisana123@gmail.com', NULL, '$2y$10$y.wQZQ07RxRIwbSbHTx7ZOvNeUsOwhxVUzTWOVyiHOYGu2OKKj8JS', NULL, NULL, '2021-12-23 21:12:48', NULL, 'BM0005-9', '1640265035.jpg', NULL, '5171021606660001', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '081337584292', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Aryawisana', 'member', NULL, NULL, NULL, NULL),
(315, 'I MADE BERATHA SATTWIKA', 'kadekmbs@gmail.com', NULL, '$2y$10$O0Cly8lrUjPzL./rdyDDZuTr1FITr..Z.R6aaeanXHPLjVKhc5i1u', NULL, NULL, '2021-12-23 22:27:40', NULL, 'BM0005-10', '1640269500.jpg', NULL, '5107042804940003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '‪0282145064819‬', NULL, NULL, NULL, NULL, NULL, NULL, 'MBSdekor28', 'member', NULL, NULL, NULL, NULL),
(317, 'Moch junaidi abdillah', 'junaidi_b_mas@yahoo.co.id', NULL, '$2y$10$gQUBklzaAQA.D.54pMiN7Onso5X6phpi0XETTIx67ACg765c27xqG', NULL, NULL, '2021-12-24 10:30:58', 'Jl Pura dalem solo', 'BM0004-7', '1640312914.jpg', NULL, '3506151403760003', 'Laki-laki', 'Sedang', 'Abiansemal', 'Badung', 'Bali', 'Indonesia', NULL, '081246393231', NULL, NULL, NULL, 'BCA', '7730470619', NULL, 'Inti Jaya Perkasa, CV', 'member', NULL, NULL, NULL, NULL),
(318, 'I gede astawa', 'gedeary1111@gmail.com', NULL, '$2y$10$Hb2jExrypeW8hjCqvsDuaOEyEOkEe2iB9P3nzd48WGv0pfWWbunVm', NULL, NULL, '2021-12-24 11:22:04', 'Jl jepun pipil no 24', 'BM0006-1', '1640315959.jpg', '318tS42No0046hZrvDRWDG1crKO5jTiXl629u4YWRRl.jpg', '5171010908790004', 'Laki-laki', 'Denpasar', 'Denpasar timur', 'Denpasar', 'Bali', 'Indonesia', NULL, '082235310109', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Gedeastawa79', 'member', NULL, NULL, NULL, NULL),
(319, 'Ni Luh Christina Prapmika Jayanti', 'christinaprapmika@gmail.com', NULL, '$2y$10$CFxhSYkbPUQPI/WKusZm9.OlA6G/rbgjyWNuROPE7So4MplN8KSCK', NULL, NULL, '2021-12-24 11:25:39', NULL, 'BM0008-1', '1640315989.jpg', NULL, '5103014804920003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081916101107', NULL, NULL, NULL, NULL, NULL, NULL, 'Titin Prapmika', 'member', NULL, NULL, NULL, NULL),
(320, 'I gede sudiarta', 'psd.production@yahoo.com', NULL, '$2y$10$4BevNE2Q2Lf/OX4sJlBWpeIendo3qbRG.ENbZX4sXlsc.CrWlBhZO', NULL, NULL, '2021-12-24 11:25:02', 'Jln batuyang no 32', 'BM0011-1', '1640316055.jpg', '320Ozsjcvok1rnWHLxWrIixILjBgtlU0g1DofN1oE12.jpg', '5108090810720002', NULL, 'Batubulan', 'Sukawati', 'Gianyar', 'Bali', 'Indonesia', NULL, '081239326424', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Gdsudiarta', 'member', NULL, NULL, NULL, NULL),
(321, 'I Wayan Agus Sudantha', 'neumankh@gmail.com', NULL, '$2y$10$G9ycouGHtzcQ.81VLVAVJ.v8vUJY8RW6Z2/QEDB3de2LBOfnpxhQi', NULL, NULL, '2021-12-24 11:28:25', 'Jl. Pantai Sindu II / 1 Sanur', 'BM0014-1', '1640316337.jpg', '321wapdogMPLZ3Kf4YUZ7NEkTjV9v801ToFpEP4IlRO.jpg', '5171014511840003', 'Laki-laki', 'Denpasar', 'Denpasar Selatan', 'Denpasar', 'Bali', 'Indonesia', NULL, '081338799769', NULL, NULL, NULL, 'BNI', NULL, NULL, 'tetstupidpro', 'member', NULL, NULL, NULL, NULL),
(322, 'I Kadek Narena S. I.kom., M. I.kom.', 'ren_regenzee@yahoo.com', NULL, '$2y$10$9oD03DyT2kqTuv0TeS5TNetxnW2rxy6TNN3QBGJzOv7GjyBRgB1S2', NULL, NULL, '2021-12-24 11:32:41', 'Jalan Nuansa Hijau Timur X No. 7 Ubung Kaja', 'BM0007-1', '1640316555.jpg', '3228OU2xm5HMTQHyMwtp7PwtNpHLdL3SARJD9qJZbpC.jpg', '51070525072507900004', 'Laki-laki', 'Denpasar', 'Denpasar Utara', NULL, 'Bali', 'Indonesia', NULL, '081338719608', NULL, NULL, NULL, 'BNI', '0231297952', NULL, 'Naren257', 'member', NULL, NULL, NULL, NULL),
(323, 'Anak Agung Ayu Asih Eriani', 'ayueriani825@gmail.com', NULL, '$2y$10$gw4qCUCSTUoIfWs1hyvK4.uEU9EGD4.OmzpfbubHbNceaEwZ63laO', NULL, NULL, '2021-12-24 11:34:25', NULL, 'BM0016-1', '1640316643.jpg', NULL, '5171026912760001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081339030672', NULL, NULL, NULL, NULL, NULL, NULL, 'Ayu eriani', 'member', NULL, NULL, NULL, NULL),
(324, 'NI KADEK WIDIANTARI', 'Kkadekwidya980@gmail.com', NULL, '$2y$10$0zEBWIBo5fPmRGU.AolgPuuFT2udDbP9NFylqEBV6K3YGNPLEkjPy', NULL, NULL, '2021-12-24 11:49:22', 'JL TRENGGANA(SAMPING ACK)', 'BM0004-8', '1640317371.jpg', '324yJ9hZPSKCjizrwfHDqexBzGA8lArm2MhRa2p8Yub.jpg', '5107076609880002', NULL, 'DENPASAR', 'DENPASAR UTARA', 'DENPASAR', 'BALI', 'INDONESIA', NULL, '087861686351 / 087861031312', NULL, NULL, NULL, NULL, NULL, NULL, 'JAYA INDAH 02', 'member', NULL, NULL, NULL, NULL),
(325, 'I wayan putu suarjana', 'wayanputusuarjana1@gmail.com', NULL, '$2y$10$hPEpAhuiZk/KDBDQPHG2Yeh.eizt7/QwHFYC7X4Ocsv/BJymjicri', NULL, NULL, '2021-12-24 12:19:12', NULL, 'BM0009-1', '1640319462.jpg', NULL, '5107060304840001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081999913871', NULL, NULL, NULL, NULL, NULL, NULL, 'Suarjana', 'member', NULL, NULL, NULL, NULL),
(326, 'Made derawa', 'mdrawa82@gmail.com', NULL, '$2y$10$G3NveYSiBPqL4XTW/nvi.e2FPIN8Prdhz8O7nKmmlvAJmkGj7FQL6', NULL, NULL, NULL, NULL, 'BM0010', '1640332736.jpg', NULL, '5106040112820004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081337393733', NULL, NULL, NULL, NULL, NULL, NULL, 'De drawa', 'member', NULL, NULL, NULL, NULL),
(327, 'I Putu Gede Mahendra Giri', 'rama_production@yahoo.com', NULL, '$2y$10$adI1oQ5QcFHa065Lw2gONeVL8issc1K7xgsNLvZAAxuGpv1hNgO1m', NULL, NULL, '2021-12-25 06:58:00', 'Jl.Ahmad Yani,Gg.Mawar No.B8', 'BM0006-2', '1640386337.jpg', '327C0jqwWoyAWFK28wlcsGHGPTjwlyhQ7NrHvFCMyKq.jpg', '510704090685000', 'Laki-laki', 'Amlapura', 'Karangasem', 'Karangasem', 'Bali', 'Indonesia', NULL, '081236550571', NULL, NULL, NULL, 'BNI', '0287028020', NULL, 'mahendragiri', 'member', NULL, NULL, NULL, NULL),
(328, 'I Putu Putrawa', 'gusbrenda88@gmail.com', NULL, '$2y$10$v0CnK/uM09rvbZ4sXNN80ucT67XWNt.7hTcqDIYUuAh.QWBGdZhDe', NULL, NULL, '2021-12-25 07:34:37', 'Jalan Mudutaki IV No 4 Tegal Jaya', 'BM0006-4', '1640388435.jpg', '328xFXvWG3Yofy0dBomeWZGuHgsdFzXzodf7FFxy0A1.jpg', '5107041910880002', 'Laki-laki', 'Badung', 'Kuta Utara', 'Badung', 'Bali', 'Indonesia', NULL, '081943430499', NULL, NULL, NULL, 'BCA', '6115240050', NULL, 'Iyan', 'member', NULL, NULL, NULL, NULL),
(329, 'Ni made neli ambarawati', 'evanary0000@gmail.com', NULL, '$2y$10$fPAmIZwQYSxW//NPp74OleQUwqadWo85KIA5QgMBECTbkJzihZ4ZC', NULL, NULL, '2021-12-25 07:32:10', NULL, 'BM0006-3', '1640388583.jpg', NULL, '5171014104810007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081236066236', NULL, NULL, NULL, NULL, NULL, NULL, 'Ambarawati81', 'member', NULL, NULL, NULL, NULL),
(330, 'I Nyoman Surata', 'tisonbali@gmail.com', NULL, '$2y$10$DnUzvdsYUzlwf8FAO/OJa.KzNprrMwCY3eEwYHF7whBdvpRgYFFaK', NULL, NULL, '2021-12-25 08:19:40', NULL, 'BM0006-5', '1640390927.jpg', NULL, '5107020809380003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081337227718', NULL, NULL, NULL, NULL, NULL, NULL, 'Tison18', 'member', NULL, NULL, NULL, NULL),
(331, 'I made dwiadnyana', 'dwiadnyana24@gmail.com', NULL, '$2y$10$Hq0tVo3oFHfAk7uuW/ljOOAYnZwxqLPPvec2gt9FIZylscO9GRnpi', NULL, NULL, NULL, NULL, 'BM0001', '1640393257.jpg', NULL, '5101010612850004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081805648508', NULL, NULL, NULL, NULL, NULL, NULL, 'Dwiadnyana24@gmail.cim', 'member', NULL, NULL, NULL, NULL),
(332, 'Ni Putu Riska Dewi', 'riskadewi9966@gmail.com', NULL, '$2y$10$HoTjORDmvTzkbjeNYcfcUOurhxYUVzxWeUMoeT8G/uBsn2K/elEg6', NULL, NULL, NULL, NULL, 'BM0001', '1640393506.jpg', NULL, '5106014201990001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085739907065', NULL, NULL, NULL, NULL, NULL, NULL, 'Riska Dewi', 'member', NULL, NULL, NULL, NULL),
(333, 'Putu sugiastawan', 'astawasugi9@gmail.com', NULL, '$2y$10$7QqhgbrpyhIjfVrqcgmlK.GgbzQNLMi1f6px6Gpz0Z7cw.8oKgEPC', NULL, NULL, NULL, NULL, 'BM0001', '1640394258.jpg', NULL, '5108042807940001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0881038742738', NULL, NULL, NULL, NULL, NULL, NULL, 'Sugiastawan', 'member', NULL, NULL, NULL, NULL),
(334, 'Gede subiakta', 'aktalovina999@gmail.com', NULL, '$2y$10$wZaqTCW2IZCjTBpP5.RHvuGreR0cIV6sIYa4baca79QxzcaLVmRZq', NULL, NULL, NULL, NULL, 'BM0001', '1640394762.jpg', NULL, '5108061612920004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081936549208', NULL, NULL, NULL, NULL, NULL, NULL, 'Aktalovina', 'member', NULL, NULL, NULL, NULL),
(335, 'Kadek yudi Umara Merta', 'lightingyudi@gmail.com', NULL, '$2y$10$8IBrqcI.bM5K3Rh46IRJ3e9Tp.mVLhiIy59So0soHoZx7D8y90dZe', NULL, NULL, NULL, NULL, 'BM0001', '1640395148.jpg', NULL, '5108052903890004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08179788442', NULL, NULL, NULL, NULL, NULL, NULL, 'Kadek yudi', 'member', NULL, NULL, NULL, NULL),
(336, 'Desak made mita dwiyanti', 'desakmita58@gmail.com', NULL, '$2y$10$u6CLZgvT9/IpuXsI5/FCU.HCg8QFr91VK/3DA7Ixd.veAWf4HAKLm', NULL, NULL, NULL, NULL, 'BM0006-4', '1640395645.jpg', NULL, '5102107012900001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085857282153', NULL, NULL, NULL, NULL, NULL, NULL, 'Desak mita', 'member', NULL, NULL, NULL, NULL),
(338, 'Ni Made Budastri Dewi', 'budastridewi0202@gmail.com', NULL, '$2y$10$NguaAgBoU4a6pZUnhLDfNOO6/66UJxT7FZs9rGhdEWXXkWBfz1xD6', NULL, NULL, '2021-12-25 10:18:02', 'Jln. Kusuma Dewa II.10x', 'BM0003-9', '1640398570.jpg', '3386jF9FW1VNfCmnHwjrF040J1mZYVG08chH3hSxXEx.jpg', '5102094202000004', 'Perempuan', 'Denpasar', 'Denpasar Utara', NULL, 'Bali', 'indonesia', NULL, '083119277217', NULL, NULL, NULL, 'BNI', NULL, NULL, 'budastri_dewi', 'member', NULL, NULL, NULL, NULL),
(339, 'Kadek molirah sopi diani', 'myrahdian@gmail.com', NULL, '$2y$10$WWX/MKP5I1Y5l7IZ6ZA0Lu.QBkCEobfl4/zFGRdYkk2yWsz1WyFsa', NULL, NULL, NULL, NULL, 'BM0001', '1640403096.jpg', NULL, '5171044809950002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085857920363', NULL, NULL, NULL, NULL, NULL, NULL, 'Mirah', 'member', NULL, NULL, NULL, NULL),
(340, 'I Putu Mujianto', 'putumujianto2@gmail.com', NULL, '$2y$10$.28TfGXTpA9ZUjAdwTp70OYHSxMJyTf2Msv0F2ygIPcUoB3NhpInS', NULL, NULL, NULL, NULL, 'BM0001', '1640403474.jpg', NULL, '5014031702790003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081353000279', NULL, NULL, NULL, NULL, NULL, NULL, 'Brama kumbara', 'member', NULL, NULL, NULL, NULL),
(341, 'IWAYAN GEDE SUDARSANA', 'wsudarsana212@gmail.com', NULL, '$2y$10$cVX7AgDUV/6kF/JOZp1v3OR5rcu6i.VjkteR2qwq4tofeF4YLHSVe', NULL, NULL, '2021-12-25 12:50:45', NULL, 'BM0002-24', '1640406356.jpg', NULL, '5107071707720001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081239198675', NULL, NULL, NULL, NULL, NULL, NULL, 'SUDARSANA', 'member', NULL, NULL, NULL, NULL),
(342, 'I nyoman gunawan SE', 'howkoming@gmail.com', NULL, '$2y$10$wbGUNYiLMOA.57Z/TUXcu.J7pGQGzRN91TBPMYnagAOspHx.ACR2u', NULL, NULL, '2021-12-25 12:39:17', 'Jl Kusuma dewa 1no 17', 'BM0003-10', '1640406904.jpg', '342ZxJPDeZJ7XwxJcDOSliPIitqSe36bAoo36cLBEDT.jpg', '5171043006790002', 'Laki-laki', 'Denpasar', 'Denpasar utara', NULL, 'Bali', 'Indonesia', NULL, '081353354441', NULL, NULL, NULL, 'BNI', NULL, NULL, 'koming', 'member', NULL, NULL, NULL, NULL),
(343, 'Ni putu ayu purnadewi', 'purnadewiputuayu5@gmail.com', NULL, '$2y$10$.b7ET7b286fkov6Nei0i/uX/ySVt9K/AVSHkbGXZjpJ8Jlsgt8SU2', NULL, NULL, '2021-12-25 12:51:20', NULL, 'BM0003-11', '1640407685.jpg', NULL, '5171044209800002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081353686657', NULL, NULL, NULL, NULL, NULL, NULL, 'Purnadewi', 'member', NULL, NULL, NULL, NULL),
(344, 'Wayan Anggi Martha Putra', 'anggimartabagus@gmail.com', NULL, '$2y$10$vfGTGP4FLtifLX/DW8GS4.BDLzXecK9BjuHfpk7RcXnjpxLZ3bc9m', NULL, NULL, NULL, NULL, 'BM0001', '1640408072.jpg', NULL, '5108060803970006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081338060853', NULL, NULL, NULL, NULL, NULL, NULL, 'Wayan anggi', 'member', NULL, NULL, NULL, NULL),
(345, 'I KETUT PUTRA', 'iketutputraputra@yahoo.com', NULL, '$2y$10$qibyvfDfcntlNvKQaq5d5OcAAbPQ.tLTm2mus9wGCJX6Z0Ua2C4g6', NULL, NULL, NULL, NULL, 'BM0006-1', '1640408368.jpg', NULL, '5171012409790003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08124643421', NULL, NULL, NULL, NULL, NULL, NULL, 'Putra123', 'member', NULL, NULL, NULL, NULL),
(346, 'Ni ketut laksmi dewi', 'laksmidewi1233@gmail.com', NULL, '$2y$10$9zCmxbM2QOYvcxIOgWdUHutzE1CmCwsR1kHSN3ny3ToajSDYm7NES', NULL, NULL, '2021-12-25 13:38:51', NULL, 'BM0001-1', '1640410508.jpg', NULL, '5107075909750001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081237405437', NULL, NULL, NULL, NULL, NULL, NULL, 'Laksmi', 'member', NULL, NULL, NULL, NULL),
(347, 'Ni ketut yudariwati', 'kharismawannn@gmail.com', NULL, '$2y$10$XmplXf1ly0TqsmxPdcu0Z.ygtcWqIsp1a0fYUp3c5L5D.Tj0fIxO6', NULL, NULL, '2021-12-25 13:46:32', NULL, 'BM0002-25', '1640411027.jpg', NULL, '5171025010670002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081337917472', NULL, NULL, NULL, NULL, NULL, NULL, 'Yudariwati', 'member', NULL, NULL, NULL, NULL),
(348, 'i komang wiarta', 'komangwiarta123@icloud.com', NULL, '$2y$10$IbdSdWIkjElSZPYI9LezAO.Ju4DE4O2p2A7httBFZ5uUIFThd41nC', NULL, NULL, '2021-12-25 14:03:05', 'jalan batuyang kangin gang tunjung sari 2 no 1', 'BM0012-1', '1640412028.jpg', '348FcLsp3Ovy3IIQz3Ufdh9KFNGjl3PzSusXikJvSE9.jpg', '5101021404850003', 'Laki-laki', 'gianyar', 'sukawati', 'gianyar', 'bali', 'indonesia', NULL, '081236128766', NULL, NULL, NULL, 'BNI', NULL, NULL, 'mangwi', 'member', NULL, NULL, NULL, NULL),
(349, 'Gede putra yasa', 'yasa.ewok26@gmail.com', NULL, '$2y$10$LrgI9R.SNDsJx7p80STB.OYcj9ww7.R2KD5POhQE5rfX2vl0FWOry', NULL, NULL, NULL, NULL, 'BM0012-1', '1640414994.png', NULL, '5108090107900233', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082144442226', NULL, NULL, NULL, NULL, NULL, NULL, 'Gede yasa', 'member', NULL, NULL, NULL, NULL),
(350, 'Anak agung gede destrha pramana putra', 'gungdestra@gmail.com', NULL, '$2y$10$D4vpZf6mJidnal7N9MVZ9.MSNrQUjdywWkbQ9EwaSsdwlDew14rcq', NULL, NULL, NULL, NULL, 'BM0001', '1640417927.jpg', NULL, '5106020712940002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085964283347', NULL, NULL, NULL, NULL, NULL, NULL, 'gungdestra', 'member', NULL, NULL, NULL, NULL),
(351, 'I wayan gede arthana', 'wayangede316@gmail.com', NULL, '$2y$10$CskcTRfynVDTrh9t7n48Bu7ma.H9fRyCIQgtquu6t2RPQ5Zy79STu', NULL, NULL, '2021-12-25 15:56:45', NULL, 'BM0005-11', '1640418705.jpg', '351Ysr3VIpqhP4hzkeSrHpnS2DbvCvxJvkVhtUajY6o.jpg', '5171011411650003', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '081999635646', NULL, NULL, NULL, 'BNI', NULL, NULL, 'gedearthana1965', 'member', NULL, NULL, NULL, NULL),
(352, 'I Wayan mebet', 'madetrimi87@gmail.com', NULL, '$2y$10$GZ71Jw53EV5Oax2.Q6V6HeQx7aUrkf9CgF3JgP0YZvH1ls2gSB3v2', NULL, NULL, NULL, NULL, 'BM0001', '1640422364.jpg', NULL, '5104040107640026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081999141675', NULL, NULL, NULL, NULL, NULL, NULL, 'Mebet@', 'member', NULL, NULL, NULL, NULL),
(353, 'I MADE SUSANTA', 'desankekaei90@gmail.com', NULL, '$2y$10$Uv0LZf6tcQTnrhWIOha22OFOz3O5cbLzpLRLuSGCIhbqzNN8gK/Ry', NULL, NULL, '2021-12-25 18:06:52', NULL, 'BM0001-2', '1640426672.jpg', NULL, '5106031807900002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087861396414', NULL, NULL, NULL, NULL, NULL, NULL, 'DESAN', 'member', NULL, NULL, NULL, NULL),
(355, 'Ni komang widiari', 'komangwidiari6@gmail.com', NULL, '$2y$10$1Ss9gDRcxhxReO1K80O8TuUDlQDz0L4EYbZ8Iy89ecIH/5pJHtK5K', NULL, NULL, NULL, NULL, 'BM0006-1', '1640434365.jpg', NULL, '5104026007970001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0895370417877', NULL, NULL, NULL, NULL, NULL, NULL, 'Widiari20', 'member', NULL, NULL, NULL, NULL),
(356, 'Ni Kadek sekartini', 'tiniboni5@gmail.com', NULL, '$2y$10$1xQivH.V69cMyeerr6RQL.C/tvTznGP64dyDowyVJh2/Y08OUe5Q6', NULL, NULL, NULL, NULL, 'BM0001', '1640440328.jpg', NULL, '5107046810930004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085935111755', NULL, NULL, NULL, NULL, NULL, NULL, 'BM0001', 'member', NULL, NULL, NULL, NULL),
(357, 'Gusti kompiang arta negara', 'Gustichant@gmail.com', NULL, '$2y$10$DZK8.4yvKwoOZFOKSVBDqumJiW5Dp3xoTDq3IqukAbvo.O7ms61tW', NULL, NULL, NULL, NULL, 'BM0006-1', '1640446480.jpg', NULL, '5108051510900003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082144427547', NULL, NULL, NULL, NULL, NULL, NULL, 'Gustichant', 'member', NULL, NULL, NULL, NULL),
(358, 'Ni Ketut Yuli Sinarsih', 'yulisinarsihy@gmail.com', NULL, '$2y$10$lp/1EH3pmpeLjdnoWtCX1.mFdqUdo58kazxu43/BGI0DrW2ts5T.G', NULL, NULL, NULL, NULL, 'BM0006-1', '1640471020.heic', NULL, '5107046007940003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082144414222', NULL, NULL, NULL, NULL, NULL, NULL, 'Yulisean', 'member', NULL, NULL, NULL, NULL),
(360, 'Ni Luh Juliani', 'niluhjuliani0101@gmail.com', NULL, '$2y$10$lVcO7EONUVV/Rr9rEuRvMeCKFa4wocRFDva3Op/RnT.G6C5hvow/e', NULL, NULL, '2021-12-26 11:02:58', NULL, 'BM0007-2', '1640487342.jpg', '360Cehq6jyOY1ktXIaEjOWOujoWSuAZZAZdjHRjQDD0.jpg', '5107054101020007', 'Perempuan', NULL, NULL, NULL, NULL, NULL, NULL, '082145097018', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Juliani123', 'member', NULL, NULL, NULL, NULL),
(361, 'I Ketut Hadihasa, S.H', 'hadihasa8@gmail.com', NULL, '$2y$10$dEkseh4lXHf0Jkzm0JaNR.g1QuRwbYi3HwLJumT0TDI.D9oid9uwy', NULL, NULL, '2021-12-26 12:52:45', 'Jalan Cokroaminoto Gang Swari D No 7', 'BM0003-12', '1640494120.jpg', '361Htp1GOxDSAhhZCCwvJVAvjdskebOvC0hFXnS5v1b.jpg', '5171041409750001', 'Laki-laki', 'Denpasar', 'Denpasar Utara', NULL, 'Bali', 'Indonesia', NULL, '082145551400', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Tut Adi', 'member', NULL, NULL, NULL, NULL),
(362, 'I Ketut Darma', 'ketutdarma40@gmail.com', NULL, '$2y$10$esyThZ6Lcz2cQ.x4AIywSurORPpp6Py2T3fzp6DA7Ikg2M6YrDOxy', NULL, NULL, '2021-12-26 15:42:36', NULL, 'BM0003-13', '1640504404.jpg', NULL, '5171020405730001', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '081805657395', NULL, NULL, NULL, NULL, NULL, NULL, 'Darma', 'member', NULL, NULL, NULL, NULL),
(363, 'I nyoman budiasa', 'subrathavigo@gmail.com', NULL, '$2y$10$TMvmtAETHzGKt7L9EOjYsu5HoORMXTJ32erT0FRMkzfHhDaD9bthy', NULL, NULL, '2021-12-26 18:42:17', NULL, 'BM0003-14', '1640515078.jpg', NULL, '5108080312860001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081916318123', NULL, NULL, NULL, NULL, NULL, NULL, 'Odon', 'member', NULL, NULL, NULL, NULL),
(364, 'wayan kicen', 'wiartakomang14@gmail.com', NULL, '$2y$10$ZDWwQ.CfD3Mqi/0c4.Do1Ojg.5tVW5xdsjTQ0oiswJD4vk5fJse/2', NULL, NULL, '2021-12-27 08:20:37', NULL, 'BM0012-2', '1640563406.jpg', NULL, '5101025811890002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081239166566', NULL, NULL, NULL, NULL, NULL, NULL, 'kadek devi', 'member', NULL, NULL, NULL, NULL),
(365, 'I Made Parwata', 'mdparwata@gmail.com', NULL, '$2y$10$5umd9uydSVgu3stPkKyQhO/JEJGulVwyUCgven4SbJFLPCAju.BV6', NULL, NULL, '2021-12-27 20:24:30', 'Jl. Cekomaria Gg. Banteng V no. 17 Denpasar', 'BM0003-15', '1640607700.jpg', NULL, '5171020911680002', 'Laki-laki', 'DENPASAR', 'Denpasar Utara', 'Denpasar', 'Bali', 'Indonesia', NULL, '081323589410', NULL, NULL, NULL, 'BNI', '0797796659', NULL, 'parwata', 'member', NULL, NULL, NULL, NULL),
(366, 'Ni Wayan Sri Valentini', 'sri.valentini1992@gmail.com', NULL, '$2y$10$Vw62oOjX/W.Ckc7Kq7E3seOLQ8hEihWE51r.BGSPh5.S3/I4biT/O', NULL, NULL, '2021-12-27 21:12:08', NULL, 'BM0002-26', '1640608033.jpg', NULL, '5104035002920001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081933110414', NULL, NULL, NULL, NULL, NULL, NULL, 'Sri Valentini', 'member', NULL, NULL, NULL, NULL),
(367, 'Ida ayu ari agustini', 'dayuariagustini_82@gmail.com.id', NULL, '$2y$10$.kIjMd/4MyNfzT1Z6yuGMeC.pBDqr3sql278sGx3u/eHoO2RAknBC', NULL, NULL, '2021-12-28 12:15:38', NULL, 'BM0002-28', '1640608595.jpg', NULL, '5171036608820021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087860888686', NULL, NULL, NULL, NULL, NULL, NULL, 'Dayu ari', 'member', NULL, NULL, NULL, NULL),
(368, 'Ni Luh Made Indah Hariyani', 'indahhariyani2301@gmail.com', NULL, '$2y$10$0Wa8nCAhxK2Pd2iWN2QucOnqasZJlyxiShSRI1V1LdL/W5sgn1SP2', NULL, NULL, '2021-12-27 21:06:29', 'Jl. Cekomaria Gg. Banteng V no. 17 Denpasar', 'BM0003-16', '1640610228.jpg', NULL, '5171026301690001', 'Perempuan', 'Denpasar', 'Denpasar Utara', 'Denpasar', 'Bali', 'Indonesia', NULL, '082129396509', NULL, NULL, NULL, 'BNI', '0629979999', NULL, 'Indah', 'member', NULL, NULL, NULL, NULL),
(369, 'Gede Bayudara', 'bayu221177@gmail.com', NULL, '$2y$10$1e9gKqsaFnF2ZFWsqvXbVedF.cylWK3n0G/g0vsAxIZDI.zHA.kGG', NULL, NULL, '2021-12-27 21:21:32', 'Jl. Taman Wedasari Gang Drupadi No 7 Padang Sambian Kaja', 'BM0002-27', '1640610878.jpg', '369uoZJ6eLBplksd55qOAhWO2Pqe5UVt4szYrcuWOWe.jpg', '5108092211780002', 'Laki-laki', 'Denpasar', 'Denpasar Barat', 'Denpasar', 'Bali', 'Indonesia', NULL, '081999920005', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Bayu Takur', 'member', NULL, NULL, NULL, NULL),
(371, 'i nyoman gede ringin samkara', 'r.samkara@gmail.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, '2021-12-28 11:16:47', NULL, 'BM0014-2', '1640653898.jpg', NULL, '5171023001840001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0818554285', NULL, NULL, NULL, NULL, NULL, NULL, 'drum shed', 'member', NULL, NULL, NULL, NULL),
(372, 'A. A. NGR. WIRANDA ADIYASA', 'Wiranda.adiyasa@gmail.com', NULL, '$2y$10$26AgKYxMQ1yVr2Q3XmRBPOwZAXSgmJVu7TePCovRwGh2tWJWm71ji', NULL, NULL, '2021-12-28 10:32:38', NULL, 'BM0003-17', '1640658671.jpg', NULL, '5171032811790004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081933028125', NULL, NULL, NULL, NULL, NULL, NULL, 'Wiranda', 'member', NULL, NULL, NULL, NULL),
(373, 'Sagung ayu sri yudanti', 'sri.yudanti86@gmail.com', NULL, '$2y$10$MGKI2hbtMgTeRMWwBU2nBOse78aARtVPckSZA9BuN3iSSe.KQRayO', NULL, NULL, '2021-12-28 10:52:28', 'Br celuk buruan blahbatuh', 'BM0003-18', '1640659684.jpg', NULL, '5103024404860005', 'Perempuan', 'Gianyar', 'Blahbatuh', 'Gianyar', 'Bali', 'Indonesia', NULL, '085100776716', NULL, NULL, NULL, 'BNI', '286833945', NULL, 'Sagung sri', 'member', NULL, NULL, NULL, NULL),
(375, 'I Gede Sujana, ST', 'interblockkangkaang@gmail.com', NULL, '$2y$10$7dW87WUPb.zFw0MznEaK1eeTB9.kIhRAlBAA7vJ3osjw3p7R64k.i', NULL, NULL, '2021-12-28 17:01:56', 'Jl. Kaswari, Gg. XI no 19 Penatih Denpasar', 'BM0003-19', '1640682016.jpg', '375YjcvNfoFphjal2p1IbmbzanbutaroOtmUW3PZbnb.jpg', '5107051806820001', 'Laki-laki', 'Denpasar', 'Denpasar Timur', 'Denpasar', 'Bali', 'Indonesia', NULL, '08174735554', NULL, NULL, NULL, 'BNI', '0126921430', NULL, 'Moleh', 'member', NULL, NULL, NULL, NULL),
(376, 'Gede Purnama Jaya', 'vrproject.movie@gmail.com', NULL, '$2y$10$b//.07eUPM3gwhjX3jRU4uon1/Akj6lVIEGuy9GEHT4VCC0aYj7DS', NULL, NULL, '2021-12-28 17:18:58', 'Perum Raya Kampial Blok J No. 1', 'BM0003-20', '376SYCERtCtzzw0zYR3sTs9oATWY3UQ7ZtZUh0vAhqt.jpg', NULL, '5171031010840021', 'Laki-laki', 'Badung', 'Kuta Selatan', 'Badung', 'Bali', 'Indonesia', NULL, '087860172848', NULL, NULL, NULL, 'BNI', NULL, NULL, 'GedeVR', 'member', NULL, NULL, NULL, NULL),
(377, 'Anak agung Made Widia adinata se', 'gungde1989@gmail.com', NULL, '$2y$10$99hVWk7euNAl.ef8oYdOUuxqV2XgRkcR1/MOV2Axki7KG/R0IoytO', NULL, NULL, '2021-12-28 17:52:07', NULL, 'BM0003-21', '1640684488.jpg', NULL, '5171030712890004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085739055315', NULL, NULL, NULL, NULL, NULL, NULL, 'Gung de', 'member', NULL, NULL, NULL, NULL),
(378, 'I Wayan Ambara Putra', 'ambara77@gmail.com', NULL, '$2y$10$joVrL4xWYYL3B4XHMTTTxOSZp0QwqCctOpJP3QrhKpPkbsFnLe7iK', NULL, NULL, '2021-12-29 11:22:02', NULL, 'BM0005-12', '1640696758.jpg', NULL, '5103051310840003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081236852851', NULL, NULL, NULL, NULL, NULL, NULL, 'ambara77', 'member', NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `referal`, `image`, `image_profile`, `nik`, `jenis_kelamin`, `kota`, `kecamatan`, `kabupaten`, `provinsi`, `negara`, `telp`, `hp`, `point_total`, `point_tarik`, `point_sisa`, `bank`, `no_rek`, `no_register`, `username`, `role`, `instagram`, `link_ig`, `facebook`, `link_fb`) VALUES
(379, 'Igusti Ngurah jaya kusuma', 'rahjaya89@gmail.com', NULL, '$2y$10$bcKQ5EXG7brBBdgPkthfBOmWkOX.I7pX6uuiLUYf15TuoQGyU69B2', NULL, NULL, '2021-12-29 11:22:02', NULL, 'BM0004-9', '1640733898.jpg', NULL, '5103020902890003', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '087761010709', NULL, NULL, NULL, NULL, NULL, NULL, 'Jayakusuma', 'member', NULL, NULL, NULL, NULL),
(380, 'I PUTU AGUS KARIANA', 'aguskariana65@gmail.com', NULL, '$2y$10$Evt6vPTXXfgnT0MTDBSuo.lHanbzzxfV6IWe9vc3KBO00DAX7h1MG', NULL, NULL, NULL, NULL, 'BM0001', '1640734528.jpg', NULL, '5101020301960001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082340167701', NULL, NULL, NULL, NULL, NULL, NULL, 'bernat069', 'member', NULL, NULL, NULL, NULL),
(381, 'Anak agung gde agung pramartha', 'agungparamartha99@gmail.com', NULL, '$2y$10$ZkSfSxRnsQhFsKAUZMf98eeWBOh/R0VH7AylsabTzYaCRwrMjmAWy', NULL, NULL, NULL, NULL, 'BM0011', '1640746098.jpg', NULL, '5104033006830002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081999505687', NULL, NULL, NULL, NULL, NULL, NULL, '81999505687', 'member', NULL, NULL, NULL, NULL),
(382, 'Dewa made arta wijaya', 'dewaarthawijaya@gmail.com', NULL, '$2y$10$k2/6UL4rR225VBJvxkb3beJBhzlpkdeAoLfsXWAp/EMQnwfim47k2', NULL, NULL, '2021-12-29 14:23:02', NULL, 'BM0003-22', '1640758871.jpg', '382uV79HQljoX7VcjteTSDgc91pvNHGXUdFFvakr5il.jpg', '5108040506880002', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '081915664025', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Artawijaya', 'member', NULL, NULL, NULL, NULL),
(383, 'I gede budiana', 'botakdtowel1@gmail.com', NULL, '$2y$10$DoCpm8xrQnNrHwZrbv3U7e19xWMNPd9btz6x/VLtsj9fPzPdCSgCK', NULL, NULL, NULL, NULL, 'BM0001', '1640762070.jpg', NULL, '5107070906940001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085737082655', NULL, NULL, NULL, NULL, NULL, NULL, 'Gede', 'member', NULL, NULL, NULL, NULL),
(384, 'Komang Agus Irwan', 'ajoez.irwan@gmail.com', NULL, '$2y$10$MzK6CMKyGJ6OxWFuyJexLOp0sWRsRiaF3MIsQeCWRwEiCnQ/Vbmmq', NULL, NULL, '2021-12-29 16:20:59', NULL, 'BM0001-3', '1640765801.jpg', NULL, '5171041909800001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08170501715', NULL, NULL, NULL, NULL, NULL, NULL, 'agus irwan', 'member', NULL, NULL, NULL, NULL),
(385, 'I Nyoman Suparta', 'sinyo1145@gmail.com', NULL, '$2y$10$w8M.Y6jnlic.aQkCOtoRU.wWSWkhdQ.8CdM5i6H8SV5pt09idr2ty', NULL, NULL, '2021-12-30 09:52:37', NULL, 'BM0006-6', '1640828858.jpg', NULL, '5107070708820001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087865111145', NULL, NULL, NULL, NULL, NULL, NULL, 'Kebab 88', 'member', NULL, NULL, NULL, NULL),
(386, 'I PUTU ADI SUTHA PUTRA', 'adisutha88@gmail.com', NULL, '$2y$10$qje7aB1xdRCyFmwyDabY3.Zx9MaDqTSpMn6cIWO4yeVJugcwZpLF.', NULL, NULL, '2021-12-30 18:30:59', 'Jl. Raya Beringkit - Gulingan, Timur Diklat Agama', 'BM0005-13', '1640860175.jpg', '386stXyKmHa3Um2OPeHCVHyQkWcgTJkICTEVPK3Vr7e.jpg', '5103021204890005', 'Laki-laki', 'Mengwi', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '085738968218', NULL, NULL, NULL, 'BNI', NULL, NULL, 'SUTHA', 'member', NULL, NULL, NULL, NULL),
(387, 'I wayan mulyadi', 'moeltapean@gmail.com', NULL, '$2y$10$LnsgvopkZdUYETuF1rC1O.3lgfWi09npEAAm9jl.LPpMRceppgOe.', NULL, NULL, '2021-12-31 15:11:02', 'Jl kembang matahari no 23', 'BM0003-23', '1640934540.jpg', '387CXlvsadgIqtbB65dmIXQfUBrF8UqhqEih0XWcxkS.jpg', '5171020604780002', 'Laki-laki', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '081238348181', NULL, NULL, NULL, 'BNI', '0416327924', NULL, 'Mul', 'member', NULL, NULL, NULL, NULL),
(388, 'Ni luh putu gatawati', 'niluhgatawati@gmail.com', NULL, '$2y$10$XCz6V5mRrebtzADhky0.F.9ToHYqKISEYKx8Vr.h/1mTcJh2NvU32', NULL, NULL, '2021-12-31 15:41:13', NULL, 'BM0003-24', '1640936299.jpg', '388QgpRlukJMoeaayFAea2VmTtxsyHdDsclz3TZaOJY.jpg', '5171026012770004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082145372422', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Gata', 'member', NULL, NULL, NULL, NULL),
(389, 'Ni Kadek Ayu Febriyanti', 'febriyanti12204@gmail.com', NULL, '$2y$10$hSpDpwUetvROOt6HONR5F.qxq2nUYx9DRLG1jtqvikAPjsNvgZb16', NULL, NULL, '2021-12-31 12:46:48', 'Jalan Raya Singapadu, Perum Amertha Nadi, Blok E No. 8 Singapadu, Sukawati Gianyar. Bali', 'BM0003-25', '1640953556.jpg', '389Fa9nUnMkqhahj02trNm8ezLJZBrhWnHfP6Qn5ztv.jpg', '5104035202040002', 'Perempuan', 'Gianyar', 'Sukawati', 'Gianyar', 'Bali', 'Indonesia', NULL, '081959034586', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Febriyanti', 'member', NULL, NULL, NULL, NULL),
(390, 'Lenny Ernawati', 'lenny.elkoga@gmail.com', NULL, '$2y$10$VZxp/gwNUcF0Uv9V4ob0hueUjO6AAkGItOyhc26PImUuKLCwimcR2', NULL, NULL, '2022-01-01 17:54:47', NULL, 'BM0001-4', '1641030057.jpg', NULL, '5171027010770002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081237052152', NULL, NULL, NULL, NULL, NULL, NULL, 'Lenny', 'member', NULL, NULL, NULL, NULL),
(391, 'I gusti ngurah pramana putra', 'ode707@yahoo.com', NULL, '$2y$10$ktNz1za6nB.RnFYYLUGdNeKEWimEj/8lXibzKzsHZCGt0XYBfphZS', NULL, NULL, '2022-01-02 12:56:24', 'Banjar cemenggon penarungan', 'BM0004-10', '1641099213.jpg', '391EJf7K6xeuXQrzKo1w9yrOAz3NmCyn9HbyX2ne6vP.jpg', '5103022803920006', 'Laki-laki', 'Mangupura', 'Mengwi', 'Badung', 'Bali', 'Indonesia', NULL, '085738532429', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Ode707', 'member', NULL, NULL, NULL, NULL),
(392, 'Mandiara', 'dyaraanantha25@gmail.com', NULL, '$2y$10$KicEJpHvGyX77btwM2LS1.5GUmOVoOMJdV4U.Q2bBlQA6q4BjM2r2', NULL, NULL, '2022-01-02 19:48:30', NULL, 'BM0002-29', '1641121980.jpg', NULL, '5204056905900001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081337332247', NULL, NULL, NULL, NULL, NULL, NULL, 'Dyara', 'member', NULL, NULL, NULL, NULL),
(393, 'M mujahidin', 'dimaspanjaitan74@gmail.com', NULL, '$2y$10$6C/tFS40M3G.PoxFkr/GveQ3BYv7qZbSAbHY0oHBvJu.RWXbZ.v.S', NULL, NULL, NULL, NULL, 'BM0002-11', '1641127781.mp4', NULL, '5208030406740002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082339723040', NULL, NULL, NULL, NULL, NULL, NULL, 'M mujahidin', 'member', NULL, NULL, NULL, NULL),
(394, 'i wayan budayasa', 'dalikblack@gmail.com', NULL, '$2y$10$GwGkE27HKOVhHObx9WohXusXmsBm1.YG9YP/fRsE1UKk7L2koFbGi', NULL, NULL, '2022-01-03 16:27:57', NULL, 'BM0005-14', '1641198267.jpg', NULL, '5105043112870011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081339586357', NULL, NULL, NULL, NULL, NULL, NULL, 'budiagung', 'member', NULL, NULL, NULL, NULL),
(395, 'Gede Sumadi darma', 'adidarma027@gmail.com', NULL, '$2y$10$8cxs/ZxqMP66x/D4FFiITeOuVV/QWgDVK/f0LbARCYGQwYuVOgbRO', NULL, NULL, '2022-01-03 18:30:07', 'Jl Trengguli no 63A', 'BM0006-7', '1641205703.jpg', '395gm9UE9cpIkoIaFKpqzbTpRD9KXnrHlgSG7rfgGvh.jpg', '5108071010830003', 'Laki-laki', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '087860140027', NULL, NULL, NULL, 'BNI', NULL, NULL, 'adi darma', 'member', NULL, NULL, NULL, NULL),
(396, 'Agus widiantara', 'cvchantidewata@gmail.com', NULL, '$2y$10$SK.SLWtfmTr8HXtoa6drYOCfY8HiBIwXEyJBRjTU1kK9Rt6a7cDC.', 'inz2nMraCx4kRbF7Hq1UJvsuJB0N5ClU70X3SLjVED9ZXHxwmNjBM5djquuK', NULL, '2022-01-03 19:35:13', NULL, 'BM0005-15', '1641209596.jpg', NULL, '5103022103880004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0818999211', NULL, NULL, NULL, NULL, NULL, NULL, 'Agus widhi', 'member', NULL, NULL, NULL, NULL),
(397, 'Ida ayu putu sasih purnamasari', 'dayusasih76@gmail.com', NULL, '$2y$10$AXYjRPO9wARfse.BhiH/7uAhu2vxEHYvAmef0jHKqF1xuL.Bb8Z4y', NULL, NULL, '2022-01-03 20:17:11', 'Jln Dewi sri gg jeruk no 12', 'BM0002-30', '1641212143.jpg', '397P4oDYOtXDidlLyyQUE2PZW5ipp8fNqBAJtHmXyZu.jpg', '5104014409760004', 'Perempuan', 'Gianyar', 'Sukawati', 'Gianyar', 'Bali', 'Indonesia', NULL, '081997603803', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Bu dayu', 'member', NULL, NULL, NULL, NULL),
(398, 'I ketut adi atmanadi', 'atmanadiadi@gmail.com', NULL, '$2y$10$WkHNn3X4yN3HOuBKAcplyu0HQwIscR42JUkwHmjYxabUDH/oGsr4G', NULL, NULL, '2022-01-04 12:09:03', NULL, 'BM0002-31', '1641265675.jpg', NULL, '5104712511770001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081238166277', NULL, NULL, NULL, NULL, NULL, NULL, 'Blady', 'member', NULL, NULL, NULL, NULL),
(399, 'I Wayan Sukawibawa', 'yansuka44@gmail.com', NULL, '$2y$10$0dP6sF7pqfMuA8M3dweLg.uSBeI78gvOafVpRGpC87kmnTSSlAqXS', NULL, NULL, '2022-01-04 14:34:29', 'Kampial Nusa Dua', 'BM0005-16', '1641277897.jpg', '399GKisoZTNFsjJMIamASuYKSCfRkyYQXUvQmNMcb4b.jpg', '5171011308810004', 'Laki-laki', 'Badung', 'Kuta Selatan', 'Badung', 'Bali', 'Indonesia', NULL, '081239225999', NULL, NULL, NULL, 'BNI', NULL, NULL, 'yansuka', 'member', NULL, NULL, NULL, NULL),
(400, 'I Wayan Agus Muliana', 'agusmuliana@icloud.com', NULL, '$2y$10$Gaq2yi1iDO5Yh4ub.YYcVOukmQZvf5PrcJpHnfx0U14X4a/jflgi.', NULL, NULL, '2022-01-04 15:28:22', NULL, 'BM0005-17', '1641281079.jpg', NULL, '5104030511870001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081238491903', NULL, NULL, NULL, NULL, NULL, NULL, 'Agus', 'member', NULL, NULL, NULL, NULL),
(401, 'I kadek widiana', 'fadekwish@mail.com', NULL, '$2y$10$uWLRsyUKmUPoo.MVoisl2e7bNk.3PyUsuxxqQC458JLwQFIGOU2mG', NULL, NULL, '2022-01-04 20:17:12', NULL, 'BM0005-18', '1641298105.jpg', NULL, '5171011805740005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081805585888', NULL, NULL, NULL, NULL, NULL, NULL, 'Wish', 'member', NULL, NULL, NULL, NULL),
(402, 'Ni Komang murtini', 'tutmotol37@gmail.com', NULL, '$2y$10$dLWCjtN9YmfveTC71ZSXjOADcY7n.J9IqoOmZXDekGjtI8T9O2zvy', NULL, NULL, '2022-01-04 20:31:21', 'Jl gunung sanghyang gang Ayodya no 3', 'BM0003-27', '1641299355.jpg', '402NgRwE2sXrkhrO2ZUnXQz62qQvRs0NCMLbAui26Qw.jpg', '5107065104880002', 'Perempuan', 'Denpasar', 'Denpasar barat', NULL, 'Bali', 'Indonesia', NULL, '087897461115', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Murtini', 'member', NULL, NULL, NULL, NULL),
(403, 'I ketut budiasa', 'motolajus5@gmail.com', NULL, '$2y$10$kuZTLDRVHWCHn1txjAh2C.ne4z.hWiV4nwKzUkqIzwWjBy8uIMviC', NULL, NULL, '2022-01-04 20:48:31', 'Jl gunung Sanghyang gang Ayodya no 3', 'BM0003-28', '1641300366.jpg', '403c3y0JoBa7zvxqHsQON1UyYGri0ktHzJ9xtF5l7pl.jpg', '5107062310870001', 'Laki-laki', 'Denpasar', 'Denpasar barat', NULL, 'Bali', 'Indonesia', NULL, '087754456331', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Budiasa', 'member', NULL, NULL, NULL, NULL),
(404, 'Ni komang sutini', 'komangsutini526@gmail.com', NULL, '$2y$10$VD4GoQJhirjjjRIyC94CbOHGNiTuvi/j50GT70jF0HRGqy7d7cweG', NULL, NULL, '2022-01-04 21:04:04', 'Jl antasura gg tangkas no 2', 'BM0003-29', '1641301352.jpg', '4045HIBpuIb8omCqbMo8snDSgfbYNnv4jWs54DjrBo3.jpg', '5107067012760018', 'Perempuan', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '085337696776', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Sutini', 'member', NULL, NULL, NULL, NULL),
(405, 'I wayan suta', 'sutawayan20@gmail.com', NULL, '$2y$10$B8NeKg2iKgH3q61WL8PCNuHQGKAOGBiZbbeKbdxZ.hVNLSWMprbim', NULL, NULL, '2022-01-04 21:13:25', 'Jl antasura gg tangkas no 2', 'BM0003-30', '1641301905.jpg', '405lxpcshyOJ5zDmQtcNHv5KMAS2JSqNUysVblesCeJ.jpg', '5107061802750002', 'Laki-laki', 'Denpasar', 'Denpasar timur', NULL, 'Bali', 'Indonesia', NULL, '083116110029', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Suta', 'member', NULL, NULL, NULL, NULL),
(406, 'Ngurah Ariesta', 'ngurahariesta@gmail.com', NULL, '$2y$10$05Y1KIjTkroV3ICy75HgY.Wh4HQIMF4G4oEXp222esgt/WAu0J7PC', NULL, NULL, '2022-01-05 07:33:27', NULL, 'BM0003-31', '1641339079.jpg', NULL, '5104022203890001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081916465955', NULL, NULL, NULL, NULL, NULL, NULL, 'Ngurah', 'member', NULL, NULL, NULL, NULL),
(407, 'I wayan rina daruka', 'giriaudiorental@gmail.com', NULL, '$2y$10$pdvrwYm54Kls/AA8X1TzmuoH0SsgYeXm1qisZvday/Xs0A6qbIMBy', NULL, NULL, '2022-01-05 11:04:22', NULL, 'BM0005-19', '1641351729.jpg', NULL, '5104063009910001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085737070464', NULL, NULL, NULL, NULL, NULL, NULL, 'Rinadaruka1991', 'member', NULL, NULL, NULL, NULL),
(408, 'Ida Bagus Pradnyana putra', 'pradnyanaputra.pp@gmail.com', NULL, '$2y$10$RXB.jm49dXUoiaOZpYX2jOCr0mVBJEBZuT86StKzrvvdHPDuqSBsu', NULL, NULL, '2022-01-05 11:17:47', NULL, 'BM0003-32', '1641352548.jpg', NULL, '5171031611750002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087862220389', NULL, NULL, NULL, NULL, NULL, NULL, 'Pradnyana', 'member', NULL, NULL, NULL, NULL),
(409, 'Nyoman Yudi Astara', 'nyomanyudiastara2@gmail.com', NULL, '$2y$10$x0ak3N8ruzS/IPyXm4OEXueT96N7C06yhsSf6CptbDALOw75olQxy', NULL, NULL, '2022-01-05 11:51:12', NULL, 'BM0005-20', '1641354469.jpg', NULL, '5103060606710011', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, '087860887780', NULL, NULL, NULL, 'BNI', NULL, NULL, 'yudiastara', 'member', NULL, NULL, NULL, NULL),
(410, 'Putu Eka Purnama Putra', 'infoduwurstudio@gmail.com', NULL, '$2y$10$mJmSuWz5odt71WRHSH9b4OzLSJPZgc8YXJIWObV0u/GCmIxRKol1G', NULL, NULL, '2022-01-05 14:18:01', 'Jln Cenigan Sari IV No 29. DenSeL. Ruko duwurstudio.', 'BM0005-21', '1641363384.jpg', NULL, '5171010611870005', 'Laki-laki', 'Kota Denpasar', 'Sesetan', 'Kota Denpasar', 'Bali', 'Indonesia', NULL, '081999816272', NULL, NULL, NULL, 'BNI', NULL, NULL, 'duwurstudio', 'member', NULL, NULL, NULL, NULL),
(411, 'Ni putu intan prasetya dewi', 'intanprasetyadew@gmail.com', NULL, '$2y$10$TOD3hF8mH0VDASTxyILQCu4SYG6hf8r591j8laa2w3iZ1xQrEz6e6', NULL, NULL, '2022-01-06 14:28:27', 'Br penarukan kaja', 'BM0003-33', '1641450395.jpg', '411YWKgGOvzHmeWszORTJnvhQHlW1V8ueQwZ8wzDpiJ.jpg', '5102045902990003', 'Perempuan', 'Tabanan', 'Kerambitan', 'Tabanan', 'Bali', 'Indonesia', NULL, '081997779792', NULL, NULL, NULL, 'BNI', '1117631187', NULL, 'Intan', 'member', NULL, NULL, NULL, NULL),
(412, 'I wayan katik suriarta', 'wayankatiksuriarta863@gmail.com', NULL, '$2y$10$FBffc32yqEk6jZGOSKjvlO2rBsXZ78bht12UbNI7Sn8qqFncjs88a', NULL, NULL, '2022-01-06 18:38:19', 'Jln raya semer 47', 'BM0003-34', '1641465313.jpg', '412VQNCLxNR4h2hwBsCLrYbj0cpVLPS3WcQ2aOuH8ld.jpg', '51070710120001', 'Laki-laki', 'Badung', 'Kuta utara', 'Badung', 'Bali', 'Indonesia', NULL, '081236553373', NULL, NULL, NULL, 'BNI', '0436330148', NULL, 'Katik', 'member', NULL, NULL, NULL, NULL),
(413, 'Ria kt', 'niketutriadi@gmail.com', NULL, '$2y$10$yqfWf9SruV7a/Um9McMyJ.32zCQzJKp9SwO3iIdCszgiXRjxfCS6O', NULL, NULL, '2022-01-07 10:50:53', 'Dangintukadaya', 'BM0002-32', '1641523683.jpg', '413LIe7P70mVFJPK2aTLDVfGYoTgHJL93kV1DIBSwPL.jpg', '5108075708840007', 'Perempuan', 'Jembrana', 'Dangintukadaya', 'Jembrana', 'Bali', 'Indonesia', NULL, '081239183356', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Ria kt', 'member', NULL, NULL, NULL, NULL),
(414, 'Luh Sukariani', 'sukarianianik204@gmail.com', NULL, '$2y$10$1566GW.bfyvN8U95D6FLs.RKDSkNUSlnpvuSogNt8ceRmCpNaE8UW', NULL, NULL, '2022-01-07 13:08:23', 'Jl. Sekar Wangi 3 no 14 kesiman', 'BM0001-4', '1641532058.jpg', NULL, '5104016309860002', 'Perempuan', 'Denpasar Timur', 'Kesiman kertalangu', 'Denpasar', 'Bali', 'indonesia', NULL, '081246196255', NULL, NULL, NULL, 'BNI', '1323357287', NULL, 'Anik', 'member', NULL, NULL, NULL, NULL),
(415, 'Kadek Wiwin Indah Aprilia', 'wiwinindah1704@gmail.com', NULL, '$2y$10$jygV24bJnd1vZVtMv4kkHe1TIeHsavMNiibLFw4NhZGABkhZY4.TG', NULL, NULL, '2022-01-07 13:09:57', 'Jl. Gelogor Carik Perumahan Cuculan Permai No.30', 'BM0001-5', '1641532159.jpg', NULL, '5171015704990013', 'Perempuan', 'Denpasar', 'Denpasar Selatan', NULL, 'Bali', 'Indonesia', NULL, '085738844953', NULL, NULL, NULL, 'BNI', '1230211229', NULL, 'Wiwin', 'member', NULL, NULL, NULL, NULL),
(416, 'Ni Made Susi Kartika', 'made.susi79@gmail.com', NULL, '$2y$10$/rmuNx7Wg9mcooB611qJxOLpq6yLOAG3D4t2U9Wnh9tzEZlFHz5pK', NULL, NULL, '2022-01-07 13:10:58', 'Banjar Apityeh', 'BM0001-6', '1641532169.jpg', NULL, '5102096307980001', 'Perempuan', NULL, 'Baturiti', 'Tabanan', 'Bali', 'Indonesia', NULL, '081210504889', NULL, NULL, NULL, 'BNI', '1301342775', NULL, 'Kartika', 'member', NULL, NULL, NULL, NULL),
(417, 'I Wayan Gede Widhiarta', 'widiarta33@gmail.com', NULL, '$2y$10$BbKTqIZI3SIqeKN6cMyon.7gCjMiuiveO.tdw6yttUfKPf1.zrM/W', NULL, NULL, '2022-01-07 14:52:47', NULL, 'BM0005-22', '1641538181.jpg', NULL, '5171031105870018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081999373438', NULL, NULL, NULL, NULL, NULL, NULL, 'widiarta33', 'member', NULL, NULL, NULL, NULL),
(419, 'Inengah todya', 'balivalentinebatering@gmail.com', NULL, '$2y$10$FbKjDgYspPqTGyi0MK5.DueBA/4mcrikbXCgw4j29IZYtxRsNjXE2', NULL, NULL, '2022-01-08 17:21:15', 'Jalan Cenigan sari sesetan', 'BM0004-11', '1641633501.jpg', '419ZTHdTT4Fve9eBShdy6NuQVvpTbSEhaxCDW9rfunW.jpg', '5171012507760001', 'Laki-laki', 'Denpasar', 'Densel', 'Denpasar', 'Bali', 'Indonesia', NULL, '087862132000', NULL, NULL, NULL, 'BNI', NULL, NULL, 'Todya', 'member', NULL, NULL, NULL, NULL),
(420, 'I Wayan sumantara', 'mangkutara69@gmail.com', NULL, '$2y$10$8M3jCOQsggsHFLOfc/jRF.1w41bN/Lp5Fjn9riA71fQbX70YDcc8W', NULL, NULL, '2022-01-08 18:37:39', NULL, 'BM0004-12', '1641638144.jpg', NULL, '5171030604810019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087772488444', NULL, NULL, NULL, NULL, NULL, NULL, 'Papitara', 'member', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` bigint(20) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `nama_daerah` varchar(255) NOT NULL,
  `img_daerah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `daerah`, `nama_daerah`, `img_daerah`, `created_at`, `updated_at`) VALUES
(1, 'Badung', 'Kabupaten Badung', 'badung.png', NULL, NULL),
(2, 'Bangli', 'Kabupaten Bangli', 'bangli.png', NULL, NULL),
(3, 'Buleleng', 'Kabupaten Buleleng', 'buleleng.png', NULL, NULL),
(4, 'Gianyar', 'Kabupaten Gianyar', 'gianyar.png', NULL, NULL),
(5, 'Jembrana', 'Kabupaten Jembrana', 'jembrana.png', NULL, NULL),
(6, 'Karangasem', 'Kabupaten Karangasem', 'karangasem.png', NULL, NULL),
(7, 'Klungkung', 'Kabupaten Klungkung', 'klungkung.png', NULL, NULL),
(8, 'Tabanan', 'Kabupaten Tabanan', 'tabanan.png', NULL, NULL),
(9, 'Denpasar', 'Kota Denpasar', 'denpasar.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_referal`
--
ALTER TABLE `default_referal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_user`
--
ALTER TABLE `default_user`
  ADD UNIQUE KEY `default_user_type_unique` (`type`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `default_referal`
--
ALTER TABLE `default_referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`admin_dbmp`@`localhost` EVENT `Notification_Event` ON SCHEDULE EVERY 1 SECOND STARTS '2021-12-01 14:19:26' ON COMPLETION PRESERVE ENABLE COMMENT 'hapus data notifikasi yang berakhir hari ini' DO DELETE FROM notification WHERE tanggal_berakhir <= NOW()$$

CREATE DEFINER=`admin_dbmp`@`localhost` EVENT `Iklan_Event` ON SCHEDULE EVERY 1 SECOND STARTS '2021-12-02 07:03:42' ON COMPLETION PRESERVE ENABLE COMMENT 'hapus data iklan yang berakhir hari ini' DO DELETE FROM iklan WHERE date_end < NOW()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
