-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 04:25 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testpjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `unit`) VALUES
(1, 'aji', '8d045450ae16dc81213a75b725ee2760', 'UP Muara Tawar'),
(5, 'rosi', '45c6f0923e6a87454183b56c0935d253', 'Kantor Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(9) NOT NULL,
  `id_magang` int(9) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_rumah` varchar(130) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_telp_rumah` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `jenjang_pendidikan` varchar(50) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `nomor_induk` varchar(15) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `semester` int(3) NOT NULL,
  `no_telp_institusi` varchar(30) NOT NULL,
  `alamat_institusi` varchar(100) NOT NULL,
  `nama_pembimbing` varchar(60) NOT NULL,
  `no_telp_pembimbing` varchar(30) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `fakultas` varchar(100) NOT NULL,
  `konsentrasi_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_magang`, `nama_lengkap`, `tmpt_lahir`, `tgl_lahir`, `alamat_rumah`, `kota`, `no_telp_rumah`, `no_hp`, `jenis_kelamin`, `agama`, `hobi`, `jenjang_pendidikan`, `institusi`, `nomor_induk`, `jurusan`, `semester`, `no_telp_institusi`, `alamat_institusi`, `nama_pembimbing`, `no_telp_pembimbing`, `foto`, `fakultas`, `konsentrasi_jurusan`) VALUES
(1, 1, 'Putri', 'Surabaya', '1996-07-10', 'Wonokromo', 'Surabaya', '2346787', '087755676454', 'Perempuan', 'Islam', 'Menulis', 'Universitas/Perguruan Tinggi', 'Universitas Airlangga', '23456701', 'Perpustakaan', 5, '1234567', 'Surabaya', 'Arie Wibowo', '78343958', '02784_BG.jpg', 'Ilmu Sosial', 'Managemen data'),
(4, 3, 'Mona', 'Lamongan', '1996-07-19', 'Sukolilo', 'Surabaya', '4464665', '085789874889', 'Perempuan', 'Islam', 'Memasak', 'Universitas/Perguruan Tinggi', 'Politeknik Elektronika Negeri Surabaya', '2103141045', 'Teknik Informatika', 5, '24566667', 'Surabaya', 'Sarah', '5456575', '5c7e7f671f56f25f28efbcc9cc5d3bea.png', 'Departemen Teknik Informatika dan Komputer', 'Perangkat Lunak'),
(5, 3, 'Lisa', 'Gresik', '1997-08-07', 'Kedurus', 'Surabaya', '4355454', '088212435765', 'Perempuan', 'Islam', 'Memancing', 'Universitas/Perguruan Tinggi', 'Politeknik Elektronika Negeri Surabaya', '2103141055', 'Teknik Informatika', 5, '54534533', 'Surabaya', 'Sarah', '54656765', '01422_BG1.jpg', 'Departemen Teknik Informatika dan Komputer', 'Perangkat Lunak'),
(6, 4, 'Eko', 'Jombang', '1995-02-14', 'Benowo', 'Surabaya', '435454', '08789876675', 'Perempuan', 'Islam', 'Memancing', 'Universitas/Perguruan Tinggi', 'Institut Teknologi Sepuluh Nopember', '218901', 'Teknik Komputer', 5, '34343535', 'Surabaya', 'Putri', '54534534', '07219_BG1.jpg', 'Komputer', 'Hardware'),
(7, 4, 'Eka', 'Surabaya', '1996-02-07', 'Wonokromo', 'Surabaya', '35545454', '08988578755', 'Perempuan', 'Islam', 'Membaca', 'Universitas/Perguruan Tinggi', 'Institut Teknologi Sepuluh Nopember', '218902', 'Teknik Komputer', 5, '645656', 'Surabaya', 'Putri', '545454', '09475_HD.jpg', 'Komputer', 'Hardware'),
(8, 5, 'Alfiyah', 'Gresik', '1996-11-11', 'Menganti', 'Gresik', '1234567', '083856064151', 'Perempuan', 'Islam', 'Membaca', 'Universitas/Perguruan Tinggi', 'Politeknik Elektronika Negeri Surabaya', '2103141009', 'Teknik Informatika', 5, '2345678', 'Surabaya', 'aa', '34678910', '11808_BG.jpg', 'Departemen Teknik Informatika dan Komputer', 'Software'),
(9, 6, 'bfb', 'nnb', '2017-02-18', 'bvbv', 'jhkhj', 'h68678', '75675', 'Laki-laki', 'Islam', 'jgjh', 'SMA/SMK', 'ghg', '57567657', 'jhjhg', 0, '65767', 'hgjgjg', 'jghjhgj', '6575756', NULL, '-', 'jghjhg');

-- --------------------------------------------------------

--
-- Table structure for table `kelebihan`
--

CREATE TABLE IF NOT EXISTS `kelebihan` (
  `id_kelebihan` int(9) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `kelebihan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelebihan`
--

INSERT INTO `kelebihan` (`id_kelebihan`, `id_anggota`, `kelebihan`) VALUES
(1, 1, 'Suka Menolong'),
(2, 1, 'Baik Hati'),
(3, 1, 'Tidak Sombong'),
(10, 4, 'Cinta keluarga'),
(11, 4, 'Suka bekerja sama'),
(12, 4, 'Menyukai hal baru'),
(13, 5, 'Suka menolong'),
(14, 5, 'Suka bersedekah'),
(15, 5, 'Suka beribadah'),
(16, 6, 'Cinta alam'),
(17, 6, 'Suka menanam'),
(18, 6, 'Suka berkebun'),
(19, 7, 'Peduli'),
(20, 7, 'Bekerja keras'),
(21, 7, 'Selalu semangat'),
(22, 8, 'Suka Menolong'),
(23, 8, 'Baik Hati'),
(24, 8, 'Tidak Sombong'),
(25, 9, 'hfhgf'),
(26, 9, 'hjh'),
(27, 9, 'ghjghj');

-- --------------------------------------------------------

--
-- Table structure for table `kelemahan`
--

CREATE TABLE IF NOT EXISTS `kelemahan` (
  `id_kelemahan` int(9) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `kelemahan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelemahan`
--

INSERT INTO `kelemahan` (`id_kelemahan`, `id_anggota`, `kelemahan`) VALUES
(1, 1, 'Ceroboh'),
(2, 1, 'Tidak Disiplin'),
(3, 1, 'Cerewet'),
(10, 4, 'Lupa waktu'),
(11, 4, 'Kurang percaya diri'),
(12, 4, 'Kurang motivasi'),
(13, 5, 'Kurang terorganisir'),
(14, 5, 'Lupa Waktu'),
(15, 5, 'Ceroboh'),
(16, 6, 'Terlalu baik'),
(17, 6, 'Tidak suka berdiam diri'),
(18, 6, 'Suka bercerita'),
(19, 7, 'Terlalu bersemangat'),
(20, 7, 'Ceroboh'),
(21, 7, 'Lupa waktu'),
(22, 8, 'Ceroboh'),
(23, 8, 'Lupa Waktu'),
(24, 8, 'Tidak Disiplin'),
(25, 9, 'hkk'),
(26, 9, 'asds'),
(27, 9, 'mnnb');

-- --------------------------------------------------------

--
-- Table structure for table `layout_user`
--

CREATE TABLE IF NOT EXISTS `layout_user` (
`id_gbr` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `layout_user`
--

INSERT INTO `layout_user` (`id_gbr`, `gambar`) VALUES
(1, 'IMG6376441.jpg'),
(2, 'IMG637644.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE IF NOT EXISTS `magang` (
  `id_magang` int(9) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `anggota` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `perihal_surat` varchar(60) DEFAULT NULL,
  `nama_gambar_surat` varchar(100) DEFAULT NULL,
  `nama_file_proposal` varchar(100) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `konfirmasi` varchar(30) NOT NULL DEFAULT 'Belum dikonfirmasi',
  `no_surat_konfirmasi` int(9) NOT NULL,
  `bulan_surat_konfirmasi` int(3) NOT NULL,
  `tahun_surat_konfirmasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`id_magang`, `tipe`, `anggota`, `email`, `password`, `unit`, `tgl_masuk`, `tgl_mulai`, `tgl_keluar`, `nomor_surat`, `tgl_surat`, `perihal_surat`, `nama_gambar_surat`, `nama_file_proposal`, `status`, `konfirmasi`, `no_surat_konfirmasi`, `bulan_surat_konfirmasi`, `tahun_surat_konfirmasi`) VALUES
(1, 'Kerja Praktek', 1, 'alfiyah123@gmail.com', 'alfiyah123', 'Kantor Pusat', '2017-01-24', '2017-02-01', '2017-03-31', '123/v/434/2016', '2017-01-24', 'Permohonan Kerja Praktek', 'IMG_20170114_074758.jpg', 'Alfiyah_(2103141009)_-_Ajax.pdf', 0, 'Belum dikonfirmasi', 1, 1, 2017),
(3, 'Kerja Praktek', 2, 'alfiyah456@gmail.com', 'alfiyah456', 'Kantor Pusat', '2017-01-24', '2017-02-01', '2017-02-28', '124/v/434/2016', '2017-01-24', 'Permohonan Kerja Praktek', 'IMG_20170114_074855.jpg', 'Alfiyah_(2103141009)_-_BAB_III.pdf', -1, 'Belum dikonfirmasi', 3, 1, 2017),
(4, 'Kerja Praktek', 2, 'user1@gmail.com', 'user1', 'Kantor Pusat', '2017-01-24', '2017-03-01', '2017-04-30', '126/v/434/2016', '2017-01-25', 'Permohonan Kerja Praktek', 'IMG_20170114_0747581.jpg', 'Alfiyah(2103141009)-BAB_IV.pdf', 1, 'Diterima', 4, 1, 2017),
(5, 'Kerja Praktek', 1, 'alfiyah224@gmail.com', 'slfiysh', 'Kantor Pusat', '2017-01-26', '2017-02-01', '2017-02-28', '126/v/434/2016', '2017-01-11', 'Permohonan Kerja Praktek', 'IMG_20170114_075249.jpg', 'Proposal.pdf', 1, 'Diterima', 5, 1, 2017),
(6, 'Kerja Praktek', 1, 'user1@gmail.com', 'passuser1', 'UP Muara Karang', '2017-02-23', '2017-02-01', '2017-02-09', '123/v/436/2016', '2017-02-16', 'hgjghjhjhjh', '3SxL3fD.jpg', NULL, 0, 'Belum dikonfirmasi', 6, 2, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE IF NOT EXISTS `organisasi` (
  `id_organisasi` int(9) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `nama_organisasi` varchar(60) NOT NULL,
  `tahun_organisasi` varchar(5) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_anggota`, `nama_organisasi`, `tahun_organisasi`, `jabatan`) VALUES
(1, 1, 'BEM UNAIR', '2009', 'Bendahara'),
(3, 4, 'Himpunan Teknik Informatika', '2010', 'Staff Muda'),
(4, 8, 'HIMIT', '2013', 'Sekertaris');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
  `id_penelitian` int(9) NOT NULL,
  `id_magang` int(9) NOT NULL,
  `program` varchar(50) NOT NULL,
  `judul_penulisan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE IF NOT EXISTS `rekap` (
  `id_rekap` int(9) NOT NULL,
  `bulan_mulai` int(3) NOT NULL,
  `bulan_keluar` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun` int(5) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap`
--

INSERT INTO `rekap` (`id_rekap`, `bulan_mulai`, `bulan_keluar`, `nama_lengkap`, `institusi`, `jurusan`, `tahun`, `tipe`, `unit`) VALUES
(1, 3, 4, 'Eko', 'Institut Teknologi Sepuluh Nopember', 'Teknik Komputer', 2017, 'Kerja Praktek', 'Kantor Pusat'),
(2, 3, 4, 'Eka', 'Institut Teknologi Sepuluh Nopember', 'Teknik Komputer', 2017, 'Kerja Praktek', 'Kantor Pusat'),
(3, 2, 2, 'Alfiyah', 'Politeknik Elektronika Negeri Surabaya', 'Teknik Informatika', 2017, 'Kerja Praktek', 'Kantor Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id_training` int(9) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `nama_training` varchar(60) NOT NULL,
  `tahun_training` int(5) NOT NULL,
  `penanggungjawab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `id_anggota`, `nama_training`, `tahun_training`, `penanggungjawab`) VALUES
(1, 1, 'XL Future Leader', 2010, 'XL'),
(3, 5, 'Android Developer', 2011, 'Developer Surabaya'),
(4, 8, 'XL Future Leader', 2014, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`), ADD KEY `idx_anggota_magang` (`id_magang`);

--
-- Indexes for table `kelebihan`
--
ALTER TABLE `kelebihan`
 ADD PRIMARY KEY (`id_kelebihan`), ADD KEY `idx_kelebihan_anggota` (`id_anggota`);

--
-- Indexes for table `kelemahan`
--
ALTER TABLE `kelemahan`
 ADD PRIMARY KEY (`id_kelemahan`), ADD KEY `idx_kelemahan_anggota` (`id_anggota`);

--
-- Indexes for table `layout_user`
--
ALTER TABLE `layout_user`
 ADD PRIMARY KEY (`id_gbr`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
 ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
 ADD PRIMARY KEY (`id_organisasi`), ADD KEY `idx_organisasi_anggota` (`id_anggota`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
 ADD PRIMARY KEY (`id_penelitian`), ADD KEY `idx_penelitian_magang` (`id_magang`);

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
 ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
 ADD PRIMARY KEY (`id_training`), ADD KEY `idx_training_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `layout_user`
--
ALTER TABLE `layout_user`
MODIFY `id_gbr` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`);

--
-- Constraints for table `kelebihan`
--
ALTER TABLE `kelebihan`
ADD CONSTRAINT `kelebihan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `kelemahan`
--
ALTER TABLE `kelemahan`
ADD CONSTRAINT `kelemahan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `organisasi`
--
ALTER TABLE `organisasi`
ADD CONSTRAINT `organisasi_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `penelitian`
--
ALTER TABLE `penelitian`
ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
