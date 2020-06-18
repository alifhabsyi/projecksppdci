-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 01:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_spt` int(10) NOT NULL,
  `no_spt` varchar(255) NOT NULL,
  `no_suratm` varchar(300) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `dasar` varchar(255) NOT NULL,
  `tujuan_untuk` varchar(200) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `tempat` mediumtext NOT NULL,
  `dibuat_oleh` varchar(100) NOT NULL,
  `jabatan_admin` varchar(255) NOT NULL,
  `nip_admin` varchar(255) NOT NULL,
  `dibuat_tgl` datetime NOT NULL,
  `status_disposisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_spt`, `no_spt`, `no_suratm`, `nip`, `nama`, `jabatan`, `pangkat`, `dasar`, `tujuan_untuk`, `tanggal`, `tempat`, `dibuat_oleh`, `jabatan_admin`, `nip_admin`, `dibuat_tgl`, `status_disposisi`) VALUES
(17, '672', '5555555', '199312312019032021', 'LAILA ADAWIYAH, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'dsfdsfsd', 'dsfdsf', '2020-04-10', 'sdfsdf', ' kepala badan', ' BENDAHARA\r\n', ' 686688880', '2020-05-01 00:00:00', 'DIVERIFIKASI'),
(18, 'yd97qwd', '1241234234542353451212', '199312312019032021', 'LAILA ADAWIYAH, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'anu', 'adadfre', '2020-04-07', 'asdafadsf', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-04-26 00:00:00', 'PENDING'),
(19, '8098390', '900990sd78', '686688884', 'kasubag umpeg', 'BENDAHARA\r\n', 'IIIA', 'okelah', 'jadksd', '2020-04-26', '987987', ' kasubag umpeg', ' BENDAHARA\r\n', ' 686688884', '2020-05-01 00:00:00', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtl_usul`
--

CREATE TABLE `tbl_dtl_usul` (
  `dtl_usul` int(11) NOT NULL,
  `id_usul` varchar(500) NOT NULL,
  `nip` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dtl_usul`
--

INSERT INTO `tbl_dtl_usul` (`dtl_usul`, `id_usul`, `nip`, `nama`, `tgl_lahir`, `keterangan`) VALUES
(2, '2', '686688884', 'kasubag umpeg', '2020-04-07', 'jkas'),
(3, '11', '686688880', 'kepala badan', '2020-04-13', 'sd'),
(4, '13', '686688880', 'kepala badan', '2020-05-07', 'iuy'),
(5, '13', '686688884', 'kasubag umpeg', '2020-05-06', 'akjd'),
(6, '2', '6866882989', 'kasubag umpeg 2', '2020-04-07', 'jkas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rinci`
--

CREATE TABLE `tbl_rinci` (
  `no_kwt` varchar(300) NOT NULL,
  `no_sppd` varchar(400) NOT NULL,
  `program` varchar(400) NOT NULL,
  `kegiatan` varchar(400) NOT NULL,
  `kode_rek` varchar(400) NOT NULL,
  `nama_rek` varchar(400) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `nama` varchar(400) NOT NULL,
  `nip` varchar(400) NOT NULL,
  `jabatan` varchar(400) NOT NULL,
  `biaya_harian` decimal(10,0) NOT NULL,
  `biaya_riil` decimal(11,0) NOT NULL,
  `tiket_pergi` decimal(10,0) NOT NULL,
  `tiket_pulang` decimal(10,0) NOT NULL,
  `biaya_inap` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rinci`
--

INSERT INTO `tbl_rinci` (`no_kwt`, `no_sppd`, `program`, `kegiatan`, `kode_rek`, `nama_rek`, `tgl_pergi`, `tgl_pulang`, `nama`, `nip`, `jabatan`, `biaya_harian`, `biaya_riil`, `tiket_pergi`, `tiket_pulang`, `biaya_inap`) VALUES
('98', '6797', '778', '7', '7', '78', '2020-04-08', '2020-04-08', 'alif', '1378800880', '808', '8', '8', '8', '7878', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sett`
--

CREATE TABLE `tbl_sett` (
  `id_sett` int(11) NOT NULL,
  `kd_docno` varchar(10) NOT NULL,
  `docno` varchar(11) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `Keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sett`
--

INSERT INTO `tbl_sett` (`id_sett`, `kd_docno`, `docno`, `docname`, `bulan`, `tahun`, `Keterangan`) VALUES
(3, 'AG', '4', 'NOMOR AGENDA', '04', '2020', 'AGENDA +1'),
(4, 'KWT', '3', 'Nomor KWT', '03', '2020', 'KWT +1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sppd`
--

CREATE TABLE `tbl_sppd` (
  `no_spt` varchar(300) NOT NULL,
  `no_suratm` varchar(500) NOT NULL,
  `no_sppd` varchar(300) NOT NULL,
  `pejabat_perintah` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `pangkat` varchar(300) NOT NULL,
  `jabatan` varchar(300) NOT NULL,
  `tujuan_untuk` varchar(500) NOT NULL,
  `jenis_angkutan` varchar(300) NOT NULL,
  `dari` varchar(300) NOT NULL,
  `tempat_tujuan` varchar(300) NOT NULL,
  `lama_pd` int(11) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `instansi` varchar(300) NOT NULL,
  `mata_anggaran` varchar(300) NOT NULL,
  `dibuat_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sppd_dtl`
--

CREATE TABLE `tbl_sppd_dtl` (
  `dtl_sppd` int(11) NOT NULL,
  `no_sppd` varchar(300) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spt`
--

CREATE TABLE `tbl_spt` (
  `id_usul` int(11) NOT NULL,
  `no_suratm` varchar(300) NOT NULL,
  `no_spt` varchar(300) NOT NULL,
  `dasar` varchar(500) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nip` varchar(300) NOT NULL,
  `pangkat` varchar(300) NOT NULL,
  `jabatan` varchar(300) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `tempat_tujuan` varchar(300) NOT NULL,
  `tujuan_untuk` varchar(300) NOT NULL,
  `status_spt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spt`
--

INSERT INTO `tbl_spt` (`id_usul`, `no_suratm`, `no_spt`, `dasar`, `nama`, `nip`, `pangkat`, `jabatan`, `tgl_pergi`, `tgl_pulang`, `tempat_tujuan`, `tujuan_untuk`, `status_spt`) VALUES
(2, '5555555', '672', 'dsfdsfsd', 'LAILA ADAWIYAH, S.ST\r\n', '199312312019032021', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-04-22', '2020-04-30', 'sdfsdf', 'dsfdsf', 'DIVERIFIKASI'),
(7, '1241234234542353451212', 'yd97qwd', 'anu', 'LAILA ADAWIYAH, S.ST\r\n', '199312312019032021', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-04-01', '2020-04-02', 'asdafadsf', 'adadfre', 'DIVERIFIKASI'),
(8, '87', '688768', 'UIIOI ', 'kepala badan', '686688880', 'IIIA', 'BENDAHARA\r\n', '2020-04-17', '2020-04-20', 'TAK DITUJU', 'MENUJU', 'DIVERIFIKASI'),
(9, '900990sd78', '8098390', 'okelah', 'kasubag umpeg', '686688884', 'IIIA', 'BENDAHARA\r\n', '2020-04-26', '2020-04-27', '987987', 'jadksd', 'DIVERIFIKASI'),
(10, '87', '', 'jhh', 'edit aja lah anjxahiu', '134234523534', 'IA', 'KEPALA BADAN', '2020-04-11', '2020-04-07', '98', 'iuo', 'DIVERIFIKASI'),
(11, '900990das', '', 'kjhdskj', 'kasubag umpeg', '686688884', 'IIIA', 'BENDAHARA\r\n', '2020-03-31', '2020-04-08', 'kljl', 'jhags', 'PENDING'),
(12, 'iniulsu/1/20102', '', 'kemana', 'alif', '1378800880', 'IA', 'KASUBAG UMUM DAN KEPEGAWAIAN', '2020-05-07', '2020-05-11', 'disana', 'kemaan', 'PENDING'),
(13, '900990', '', '879', 'kasubag umpeg', '686688884', 'IIIA', 'BENDAHARA\r\n', '2020-05-20', '2020-05-21', 'iuoui', '09', 'DIVERIFIKASI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nama` varchar(250) NOT NULL,
  `tipeuser` int(11) NOT NULL,
  `nip_admin` bigint(100) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `pangkat` varchar(10) NOT NULL,
  `golongan` varchar(11) NOT NULL,
  `tmt_pangkat` date NOT NULL,
  `jabatan_admin` varchar(225) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `eselon` varchar(10) NOT NULL,
  `masakerja_thn` int(2) DEFAULT NULL,
  `masakerja_bln` int(2) DEFAULT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `diklat` varchar(100) NOT NULL,
  `sk_cpns` varchar(225) NOT NULL,
  `tmt_berkala` date NOT NULL,
  `tmt_pensiun` date NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nama`, `tipeuser`, `nip_admin`, `tempat_lahir`, `tgl_lahir`, `kelamin`, `pangkat`, `golongan`, `tmt_pangkat`, `jabatan_admin`, `tmt_jabatan`, `eselon`, `masakerja_thn`, `masakerja_bln`, `pendidikan`, `diklat`, `sk_cpns`, `tmt_berkala`, `tmt_pensiun`, `unit_kerja`, `username`, `password`) VALUES
('woycoba ', 0, 90909090, 'dimana ya', '2020-05-01', 'Wanita', 'IVB', 'Penata Ting', '2020-05-06', 'PENGELOLA PENILAIAN KINERJA PEGAWAI', '2020-05-07', 'IA', 2, 1, 'DIII', 'jksdjk', 'r023/wdw/wdw', '2020-05-08', '2020-05-15', 'wdjks', 'root', '0079fcb602361af76c4fd616d60f9414'),
('kepala badan', 3, 686688880, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'Wanita', 'IIIA', 'Penata Muda', '2019-03-01', 'BENDAHARA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT', 'kepalabadan', 'c4ca4238a0b923820dcc509a6f75849b'),
('kasubag umpeg', 2, 686688884, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'Wanita', 'IIIA', 'Penata Muda', '2019-03-01', 'BENDAHARA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'kasubag', 'c4ca4238a0b923820dcc509a6f75849b'),
('BENDAHARA\r\n', 1, 686688888, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'Wanita', 'IIIA', 'Penata Muda', '2019-03-01', 'BENDAHARA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'bendahara', 'c4ca4238a0b923820dcc509a6f75849b'),
('alif', 4, 1378800880, '802', '2020-04-10', 'Pria', 'IA', 'Juru Muda T', '2020-04-16', 'KASUBAG UMUM DAN KEPEGAWAIAN', '2020-04-09', 'IA', 1, 1, 'DIV', 'kj', 'ljlj', '2020-04-09', '2020-04-08', 'uwqwio', 'alif', 'c4ca4238a0b923820dcc509a6f75849b'),
('edit aja lah anjxahiu', 0, 134234523534, 'Tarakan', '1997-07-23', 'Pria', 'IA', 'Juru Muda', '2020-04-01', 'KEPALA BADAN', '2020-04-23', 'VA', 1, 12, 'DIII', 'ASDASD', '1221SDASDQ3E', '2020-04-01', '2020-04-30', 'ANU', 'admin', 'c4ca4238a0b923820dcc509a6f75849b'),
('woiwio', 4, 239018230918098, '929', '3892-02-09', 'Wanita', 'IVC', 'Pilih Golon', '2020-05-01', 'PRAMU KEBERSIHAN', '2020-05-19', 'IB', 2, 1, 'SLTA', 'iowoq', 'io1/23sd/1ds', '2020-05-20', '2020-05-22', '892', 'oke', 'noker'),
('LAILA ADAWIYAH, S.ST\r\n', 0, 199312312019032021, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'Wanita', 'IIIA', 'Penata Muda', '2019-03-01', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'ADMIN', 'c4ca4238a0b923820dcc509a6f75849b'),
('Muhammad Hafiz Ihsani', 0, 9223372036854775807, 'Tarakan', '1997-07-23', 'Pria', 'IVE', 'Pembina Uta', '2020-01-01', 'PENGELOLA DATABASE', '2020-01-01', 'VA', 1, 12, 'DIII', '', '112121/seskd/ssdsd/1111', '2020-01-01', '2065-01-01', 'Dinas Meme Indonesia', 'hafiz', '7bbc377c3b787a2c44447dce2e7c4e50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `tbl_dtl_usul`
--
ALTER TABLE `tbl_dtl_usul`
  ADD PRIMARY KEY (`dtl_usul`);

--
-- Indexes for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  ADD PRIMARY KEY (`id_sett`);

--
-- Indexes for table `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
  ADD PRIMARY KEY (`no_spt`);

--
-- Indexes for table `tbl_sppd_dtl`
--
ALTER TABLE `tbl_sppd_dtl`
  ADD PRIMARY KEY (`dtl_sppd`);

--
-- Indexes for table `tbl_spt`
--
ALTER TABLE `tbl_spt`
  ADD PRIMARY KEY (`id_usul`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nip_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_spt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_dtl_usul`
--
ALTER TABLE `tbl_dtl_usul`
  MODIFY `dtl_usul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sppd_dtl`
--
ALTER TABLE `tbl_sppd_dtl`
  MODIFY `dtl_sppd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_spt`
--
ALTER TABLE `tbl_spt`
  MODIFY `id_usul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
