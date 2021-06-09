-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 03:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desalemahmakmur`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text DEFAULT NULL,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(3, 'Gunung Merapi', '<p><strong>Gunung Merapi</strong> (ketinggian puncak 2.930 mdpl, per 2010) (<a href=\"https://id.wikipedia.org/wiki/Hanacaraka\">Hanacaraka</a>:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah <a href=\"https://id.wikipedia.org/wiki/Gunung_berapi\">gunung berapi</a> di bagian tengah <a href=\"https://id.wikipedia.org/wiki/Pulau_Jawa\">Pulau Jawa</a> dan merupakan salah satu gunung api teraktif di <a href=\"https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a>. Lereng sisi selatan berada dalam administrasi <a href=\"https://id.wikipedia.org/wiki/Kabupaten_Sleman\">Kabupaten Sleman</a>, <a href=\"https://id.wikipedia.org/wiki/Daerah_Istimewa_Yogyakarta\">Daerah Istimewa Yogyakarta</a>, dan sisanya berada dalam wilayah Provinsi <a href=\"https://id.wikipedia.org/wiki/Jawa_Tengah\">Jawa Tengah</a>, yaitu <a href=\"https://id.wikipedia.org/wiki/Kabupaten_Magelang\">Kabupaten Magelang</a> di sisi barat, <a href=\"https://id.wikipedia.org/wiki/Kabupaten_Boyolali\">Kabupaten Boyolali</a> di sisi utara dan timur, serta <a href=\"https://id.wikipedia.org/wiki/Kabupaten_Klaten\">Kabupaten Klaten</a> di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan <a href=\"https://id.wikipedia.org/wiki/Taman_Nasional_Gunung_Merapi\">Taman Nasional Gunung Merapi</a> sejak tahun 2004.</p>\r\n\r\n<p>Gunung ini berpotensi kebencanaan yang tinggi karena menurut catatan modern mengalami <a href=\"https://id.wikipedia.org/wiki/Erupsi\">erupsi</a> setiap dua sampai lima tahun sekali dan dikelilingi oleh permukiman yang padat. Sejak tahun <a href=\"https://id.wikipedia.org/wiki/1548\">1548</a>, gunung ini sudah meletus sebanyak 68 kali.[<em><a href=\"https://id.wikipedia.org/wiki/Wikipedia:Kutip_sumber_tulisan\">butuh rujukan</a></em>] <a href=\"https://id.wikipedia.org/wiki/Kota_Magelang\">Kota Magelang</a> dan <a href=\"https://id.wikipedia.org/wiki/Kota_Yogyakarta\">Kota Yogyakarta</a> adalah kota besar terdekat, berjarak kurang dari 30&nbsp;km dari puncaknya. Di lerengnya masih terdapat permukiman sampai ketinggian 1.700 meter dan hanya berjarak empat kilometer dari puncak. Oleh karena tingkat kepentingannya ini, Merapi menjadi salah satu dari enam belas gunung api dunia yang termasuk dalam proyek <a href=\"https://id.wikipedia.org/wiki/Gunung_Api_Dekade_Ini\">Gunung Api Dekade Ini</a> (<em><a href=\"https://id.wikipedia.org/w/index.php?title=Wikipedia:Decade_Volcanoes&amp;action=edit&amp;redlink=1\">Decade Volcanoes</a></em>).<a href=\"https://id.wikipedia.org/wiki/Gunung_Merapi#cite_note-1\">[1]</a></p>\r\n\r\n<p>Sumber : Wikipedia</p>\r\n', 'ef7b8d6af85d06486326abd4f8849b68.jpg', '2021-01-09 08:56:19'),
(4, 'Perayaan Panen', '<p><strong>Perayaan Panen</strong> adalah sebuah <a href=\"https://id.wikipedia.org/w/index.php?title=Perayaan&amp;action=edit&amp;redlink=1\">perayaan</a> tahunan yang diadakan sepanjang masa <a href=\"https://id.wikipedia.org/wiki/Panen\">panen</a> besar di sebuah wilayah. Karena perbedaan iklim dan masa tanam di seluruh dunia, perayaan-perayaan panen dapat ditemukan di berbagai waktu di tempat-tempat yang berbeda. Perayaan panen biasanya meliputi acara makan-makan keluarga atau masyarakat dengan makanan yang dipanen dari tanaman-tanaman yang telah matang pada masa perayaan tersebut. Kelimpahan pangan dan bebas dari kebutuhan kerja dalam bidang tersebut adalah dua alasan utama dari perayaan panen: makan, bergembira bersama, kontes, musik dan percintaan adalah hal umum dari perayaan panen di seluruh dunia.</p>\r\n\r\n<p>Perayaan panen di Asia meliputi <a href=\"https://id.wikipedia.org/w/index.php?title=Perayaan_Pertengahan_Musim_Gugur&amp;action=edit&amp;redlink=1\">Perayaan Pertengahan Musim Gugur</a> (中秋節) di Tiongkok, salah satu perayaan panen paling besar di dunia. Di Iran, <a href=\"https://id.wikipedia.org/w/index.php?title=Mehrgan&amp;action=edit&amp;redlink=1\">Mehrgan</a> dirayakan dalam gaya yang tak biasa di Persepolis. Tak hanya masa panen, namun juga saat ketika pajak dikumpulkan. Para wisatawan dari belahan Kekaisaran Persia membawa hadiah-hadiah kepada raja karena telah berjasa terhadap perayaan tersebut. Di India, <a href=\"https://id.wikipedia.org/wiki/Makar_Sankranti\">Makar Sankranti</a>, <a href=\"https://id.wikipedia.org/w/index.php?title=Thai_Pongal&amp;action=edit&amp;redlink=1\">Thai Pongal</a>, <a href=\"https://id.wikipedia.org/w/index.php?title=Uttarayana&amp;action=edit&amp;redlink=1\">Uttarayana</a>, <a href=\"https://id.wikipedia.org/wiki/Lohri\">Lohri</a>, dan <a href=\"https://id.wikipedia.org/w/index.php?title=Bihu&amp;action=edit&amp;redlink=1\">Magh Bihu atau Bhogali Bihu</a> pada Januari, <a href=\"https://id.wikipedia.org/wiki/Holi\">Holi</a> pada Februari&ndash;Maret, <a href=\"https://id.wikipedia.org/w/index.php?title=Vaisakhi&amp;action=edit&amp;redlink=1\">Vaisakhi</a> pada April dan <a href=\"https://id.wikipedia.org/wiki/Onam\">Onam</a> pada Agustus&ndash;September adalah beberapa perayaan panen penting.</p>\r\n', 'ef97e2efac06a5de0efef0922df30355.jpg', '2021-01-09 11:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_id` int(2) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `role_id`, `foto`) VALUES
(1, 'Ahmad Maulid Ridwan', 'amaulid65', 'amaulid@gmail.com', '123456', 1, 'cicle.jpg'),
(2, 'Dasum', 'dasum11', 'dasum@gmail.com', '123456', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakepalakeluarga`
--

CREATE TABLE `tb_datakepalakeluarga` (
  `id_kk` int(11) NOT NULL,
  `nikk` varchar(30) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `nama_anak1` varchar(50) NOT NULL,
  `nama_anak2` varchar(50) NOT NULL,
  `nama_anak3` varchar(50) NOT NULL,
  `nama_anak4` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datakepalakeluarga`
--

INSERT INTO `tb_datakepalakeluarga` (`id_kk`, `nikk`, `nama_kepala_keluarga`, `nama_istri`, `nama_anak1`, `nama_anak2`, `nama_anak3`, `nama_anak4`, `user_id`) VALUES
(1, '3215200998788889', 'Ahmad', 'anis', 'ahmad maulid ridwan', 'ahmad husaeni', '', '', 0),
(2, '321520222022298', 'Karim', 'Siti Fadilah', 'Andrea', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(9) UNSIGNED NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `foto`) VALUES
(1008, '3213434234234', 'Ahmad Maulid Ridwan ', 'Bandung', '1994-10-11', 'LAKI-LAKI', 'Karawang', 'Islam', 'Belum Kawin', 'WIRASWASTA', 'Indonesia', ''),
(1009, '4323423423432', 'Monty Brekke', 'Bekasi', '1990-11-11', 'LAKI-LAKI', 'Bekasi', 'Islam', 'Kawin', 'WIRAUSAHA', 'Indonesia', ''),
(1010, '321434453455', 'Siti Fatimah', 'Karawang', '2000-09-09', 'PEREMPUAN', 'Tempuran', 'Islam', 'Kawin', 'WIRASWASTA', 'Indonesia', ''),
(1011, '321432354543', 'Mulyawati', 'Karawang', '1980-05-02', 'PEREMPUAN', 'Tempuran', 'Islam', 'Kawin', 'GURU/DOSEN', 'Indonesia', ''),
(1012, '4324234223423', 'Aprillia ', 'Karawang', '1998-11-01', 'PEREMPUAN', 'Tempuran', 'Islam', 'Janda', 'KARYAWAN', 'Indonesia', ''),
(1013, '3215201909190004', 'Wahyudi Prabowo', 'Karawang', '1980-10-01', 'LAKI-LAKI', 'Tempuran', 'Islam', 'Kawin', 'GURU/DOSEN', 'Indonesia', ''),
(1014, '3215202908990002', 'Ahmad Alfatih', 'Karawang', '1998-01-02', 'LAKI-LAKI', 'Tempuran', 'Islam', 'Belum Kawin', 'WIRAUSAHA', 'Indonesia', ''),
(1019, '2342342342', 'Ahmad Musa', 'bekasi', '1995-09-04', 'LAKI-LAKI', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', 'Katolik', 'Belum Kawin', 'WIRAUSAHA', 'Indonesia', ''),
(1021, '320522019', 'Ajid Muhammad', 'Karawang', '2021-01-08', 'LAKI-LAKI', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', 'Hindu', 'Belum Kawin', 'GURU/DOSEN', 'Indonesia', ''),
(1024, '3215201508930003', 'Luthi Husen', 'Karawang', '1994-06-03', 'LAKI-LAKI', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', 'Katolik', 'Duda', 'KARYAWAN', 'Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting_domisili`
--

CREATE TABLE `tb_setting_domisili` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `alamat_desa` varchar(100) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `nama_kades` varchar(50) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `end_konten` varchar(255) NOT NULL,
  `logo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setting_domisili`
--

INSERT INTO `tb_setting_domisili` (`id`, `header`, `alamat_desa`, `jenis_surat`, `nama_kades`, `konten`, `end_konten`, `logo`) VALUES
(2, 'PEMERINTAHAN KABUPATEN KARAWANG <br>KECAMATAN TEMPURAN <br>DESA LEMAH MAKMUR\r\n', 'Pasir Konci 01 Desa Lemah Makmur Kec. Tempuran Kab. Karawang 41385', 'SURAT KETERANGAN DOMISILI', 'Badru', 'Berdasarkan Permohonan serta catatan kependudukan yang ada di kantor kami, nama tersebut benar berdomisili di ', 'Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya mohon kepada yang berkepentingan untuk mengetahui dan maklum adanya.', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting_sktm`
--

CREATE TABLE `tb_setting_sktm` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `alamat_desa` varchar(100) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `nama_kades` varchar(50) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `end_konten` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setting_sktm`
--

INSERT INTO `tb_setting_sktm` (`id`, `header`, `alamat_desa`, `jenis_surat`, `nama_kades`, `konten`, `end_konten`, `logo`) VALUES
(1, 'PEMERINTAHAN KABUPATEN KARAWANG <br>KECAMATAN TEMPURAN <br>DESA LEMAH MAKMUR', 'Kp.Pasir Konci Desa Lemah Makmur Kec. Tempuran Kab. Karawang 41385', 'SURAT KETERANGAN TIDAK MAMPU', 'Badru Zaman', 'Surat Keterangan ini digunakan untuk : ', 'Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mesti', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sktm`
--

CREATE TABLE `tb_sktm` (
  `id_sktm` int(11) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `dibuat_oleh` varchar(100) NOT NULL,
  `surat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sktm`
--

INSERT INTO `tb_sktm` (`id_sktm`, `keperluan`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `pekerjaan`, `agama`, `alamat`, `tanggal_dibuat`, `dibuat_oleh`, `surat_id`) VALUES
(24, 'Keringanan Rumah sakit', 'Ahmad jae', 'bekasi', '1999-12-01', 'LAKI-LAKI', 'WIRASWASTA', 'ISLAM', 'Tempuran', '2021-01-15', 'amaulid65', 1),
(25, 'Beasiswa Kuliah', 'Sandi Noviansyah', 'Karawang', '1999-02-16', 'LAKI-LAKI', 'WIRASWASTA', 'ISLAM', 'Karawang', '2021-01-15', 'amaulid65', 1),
(26, 'RUMAH SAKIT', 'Jahadi', 'Karawang', '1981-11-18', 'LAKI-LAKI', 'WIRAUSAHA', 'ISLAM', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', '2021-01-16', 'amaulid65', 1),
(27, 'Beasiswa', 'Dahlia puji ast', 'Karawang', '2021-01-13', 'PEREMPUAN', 'WIRASWASTA', 'ISLAM', 'Tempuran', '2021-01-17', 'amaulid65', 1),
(28, 'Beasiswa Sekolah', 'Sandi Noviansyah', 'Karawang', '2017-01-04', 'LAKI-LAKI', 'WIRASWASTA', 'ISLAM', 'Tempuran', '2021-01-18', 'amaulid65', 1),
(29, 'Keringanan Kredit', 'Alif', 'Karawang', '2017-11-09', 'LAKI-LAKI', 'KARYAWAN SWASTA', 'ISLAM', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', '2021-01-18', 'amaulid65', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_domisili`
--

CREATE TABLE `tb_surat_domisili` (
  `id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `dibuat_oleh` varchar(255) NOT NULL,
  `surat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_domisili`
--

INSERT INTO `tb_surat_domisili` (`id_surat`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `tanggal_dibuat`, `dibuat_oleh`, `surat_id`) VALUES
(15, 'Ahmad Maulid Ridwan', 'Purwakarta', '1994-02-02', 'LAKI-LAKI', 'ISLAM', 'KAWIN', 'WIRASWASTA', 'Kp.Pasir Konci Desa Lemah Makmur Kecamatan Tempuran Kab Karawang', '2021-01-18', 'amaulid65', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`) VALUES
(1, 'amaulid65', 'Ahmad Maulid Ridwan', '123123'),
(2, 'jajaja', 'jaja miharja', '123123'),
(3, 'admin', 'admin ', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_datakepalakeluarga`
--
ALTER TABLE `tb_datakepalakeluarga`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik_2` (`nik`),
  ADD KEY `nik_3` (`nik`);

--
-- Indexes for table `tb_setting_domisili`
--
ALTER TABLE `tb_setting_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_setting_sktm`
--
ALTER TABLE `tb_setting_sktm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_surat` (`jenis_surat`),
  ADD KEY `jenis_surat_2` (`jenis_surat`);

--
-- Indexes for table `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD PRIMARY KEY (`id_sktm`),
  ADD KEY `surat_id` (`surat_id`);

--
-- Indexes for table `tb_surat_domisili`
--
ALTER TABLE `tb_surat_domisili`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `surat_id` (`surat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_datakepalakeluarga`
--
ALTER TABLE `tb_datakepalakeluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- AUTO_INCREMENT for table `tb_sktm`
--
ALTER TABLE `tb_sktm`
  MODIFY `id_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_surat_domisili`
--
ALTER TABLE `tb_surat_domisili`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_surat_domisili`
--
ALTER TABLE `tb_surat_domisili`
  ADD CONSTRAINT `tb_surat_domisili_ibfk_1` FOREIGN KEY (`surat_id`) REFERENCES `tb_setting_domisili` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
