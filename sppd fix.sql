-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 09:32 AM
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
(33, 'spt1', 'halo', '19931231201903200', 'PEGAWAI, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'testing 1', 'jksd', '2020-11-21', 'skj', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-11-21 00:00:00', 'DIVERIFIKASI'),
(34, 'jh', 'halo2', '19931231201903202', 'KEPALA, S.ST\r\n', 'KEPALA BKD', 'IIIA', 'tetsing 3', 'kjas', '2020-11-21', 'ds', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-11-21 00:00:00', 'DIVERIFIKASI'),
(35, 'spt3', 'SM-01-CVD/2020', '19931231201903204', 'KASUBAG, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'asjkasjk', 'jk', '2020-11-21', 'kj', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-11-21 00:00:00', 'DIVERIFIKASI'),
(36, 'sptacccvd', 'SM-0122-CVD/2020', '19931231201903202', 'KEPALA, S.ST\r\n', 'KEPALA BKD', 'IIIA', 'covid', 'as', '2020-11-21', 'as', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-11-21 00:00:00', 'DIVERIFIKASI'),
(37, 'SPT/cvd2020', 'SM-111-CVD/2020', '19931231201903200', 'PEGAWAI, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'Penanganan Covid', 'Seminar', '2020-11-26', 'Banjarbaru', ' LAILA ADAWIYAH, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 199312312019032021', '2020-11-21 00:00:00', 'DIVERIFIKASI'),
(38, 'SPT-2020/202020', 'DM001/2020/12/10', '19931231201903200', 'PEGAWAI, S.ST\r\n', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'IIIA', 'Pelaksanaan Tugas Gugus Covid 19', 'Melaksanakan Pelatihan Gugus Covid 19', '2020-12-30', 'Banjarmasin', ' KASUBAG, S.ST\r\n', ' PRANATA KOMPUTER AHLI PERTAMA\r\n', ' 19931231201903204', '2020-12-24 00:00:00', 'DIVERIFIKASI');

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
(26, '29', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-11-21', 'jk'),
(27, '29', '19931231201903202', 'KEPALA, S.ST\r\n', '2020-11-22', 'jk'),
(28, '30', '19931231201903202', 'KEPALA, S.ST\r\n', '2020-11-22', 'kj'),
(29, '31', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-22', 'jk'),
(30, '32', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-11-21', 'as'),
(31, '32', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-21', 'as'),
(32, '32', '19931231201903206', 'SEKDA, S.ST\r\n', '2020-11-22', 'sa'),
(33, '33', '19931231201903200', 'PEGAWAI, S.ST\r\n', '1998-02-20', 'sa'),
(34, '33', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-01', 'as'),
(35, '33', '199312312019032021', 'LAILA ADAWIYAH, S.ST\r\n', '2020-11-20', 'dsds'),
(36, '34', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-12-23', 'we'),
(37, '35', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-12-01', '2999912');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rinci`
--

CREATE TABLE `tbl_rinci` (
  `id_kwt` int(11) NOT NULL,
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

INSERT INTO `tbl_rinci` (`id_kwt`, `no_kwt`, `no_sppd`, `program`, `kegiatan`, `kode_rek`, `nama_rek`, `tgl_pergi`, `tgl_pulang`, `nama`, `nip`, `jabatan`, `biaya_harian`, `biaya_riil`, `tiket_pergi`, `tiket_pulang`, `biaya_inap`) VALUES
(15, 'iu', 'sd', 'u8', '9', '7', '9', '2020-11-21', '2020-11-21', 'KEPALA, S.ST\r\n', '19931231201903202', 'KEPALA BKD', '78', '7', '7', '7', '7'),
(16, 'kwtcvd2020', 'sppdcvd20202', 'posaop', 'poop', '0980', 'po', '2020-11-26', '2020-11-29', 'KASUBAG, S.ST\r\n', '19931231201903204', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '100000', '2000000', '20000', '20000', '8000000'),
(17, 'KWT1-BKD/12/2020', 'SPPD2020/12/21', 'CVD', 'Protokol Kesehatan', '10.20.30.37613', 'BKD KANDANGAN', '2020-11-21', '2020-11-21', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '80000', '200000', '100000', '100000', '100000');

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
(3, 'AG', '2', 'NOMOR AGENDA', '12', '2020', 'AGENDA +1'),
(4, 'KWT', '1', 'Nomor KWT', '03', '2020', 'KWT +1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sppd`
--

CREATE TABLE `tbl_sppd` (
  `id` int(11) NOT NULL,
  `no_spt` varchar(500) NOT NULL,
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

--
-- Dumping data for table `tbl_sppd`
--

INSERT INTO `tbl_sppd` (`id`, `no_spt`, `no_suratm`, `no_sppd`, `pejabat_perintah`, `nama`, `nip`, `pangkat`, `jabatan`, `tujuan_untuk`, `jenis_angkutan`, `dari`, `tempat_tujuan`, `lama_pd`, `tgl_pergi`, `tgl_pulang`, `instansi`, `mata_anggaran`, `dibuat_tgl`) VALUES
(9, 'spt1', 'halo', 'dakjas aha', 'Kepala BKD, Diklat Kab. HSS', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'jksd', 'Darat', 'a', 'skj', 1, '2020-11-21', '2020-11-21', 'as', 'as', '2020-11-21'),
(10, 'spt1', 'halo', 'sd', 'Kepala BKD, Diklat Kab. HSS', 'KEPALA, S.ST\r\n', '19931231201903202', 'IIIA', 'KEPALA BKD', 'jksd', 'Darat', 'sd', 'skj', 1, '2020-11-21', '2020-11-21', 'dssd', 'sdds', '2020-11-21'),
(11, 'jh', 'halo2', 'sdsdd', 'Kepala BKD, Diklat Kab. HSS', 'KEPALA, S.ST\r\n', '19931231201903202', 'IIIA', 'KEPALA BKD', 'kjas', 'Darat', 'ds', 'ds', 1, '2020-11-21', '2020-11-21', 'sd', 'sd', '2020-11-21'),
(12, 'spt3', 'SM-01-CVD/2020', 'qqw', 'Kepala BKD, Diklat Kab. HSS', 'KASUBAG, S.ST\r\n', '19931231201903204', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'jk', 'Darat', 'sa', 'kj', 1, '2020-11-21', '2020-11-21', 'as', 'as', '2020-11-21'),
(13, 'SPT/cvd2020', 'SM-111-CVD/2020', 'sppdcvd2020', 'Kepala BKD, Diklat Kab. HSS', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'Seminar', 'Darat', 'Kandangan', 'Banjarbaru', 4, '2020-11-26', '2020-11-29', 'aj', 'as', '2020-11-21'),
(14, 'SPT/cvd2020', 'SM-111-CVD/2020', 'sppdcvd20202', 'Kepala BKD, Diklat Kab. HSS', 'KASUBAG, S.ST\r\n', '19931231201903204', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'Seminar', 'Darat', 'Kandangan', 'Banjarbaru', 4, '2020-11-26', '2020-11-29', 'sa', 'as', '2020-11-21'),
(15, 'SPT-2020/202020', 'DM001/2020/12/10', 'SPPD2020/12/20', 'Kepala BKD, Diklat Kab. HSS', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'Melaksanakan Pelatihan Gugus Covid 19', 'Darat', 'Kandangan', 'Banjarmasin', 2, '2020-12-30', '2020-12-31', 'KDG/BKD', '2020', '2020-12-24'),
(16, 'sptacccvd', 'SM-0122-CVD/2020', 'SPPD2020/12/21', 'Kepala BKD, Diklat Kab. HSS', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'as', 'Darat', 'Kandangan', 'as', 1, '2020-11-21', '2020-11-21', 'KDGBKD', '2020', '2020-12-24'),
(17, 'sptacccvd', 'SM-0122-CVD/2020', 'SPPD2020/12/22', 'Kepala BKD, Diklat Kab. HSS', 'KASUBAG, S.ST\r\n', '19931231201903204', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', 'as', 'Darat', 'Kandangan', 'as', 1, '2020-11-21', '2020-11-21', 'KDGBKD', '2020', '2020-12-24'),
(18, 'sptacccvd', 'SM-0122-CVD/2020', 'SPPD2020/12/23', 'Kepala BKD, Diklat Kab. HSS', 'SEKDA, S.ST\r\n', '19931231201903206', 'IIIA', 'Sekretaris Daerah', 'as', 'Darat', 'KANDANGAN', 'as', 1, '2020-11-21', '2020-11-21', 'KDGBKD', '2020', '2020-12-24');

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

--
-- Dumping data for table `tbl_sppd_dtl`
--

INSERT INTO `tbl_sppd_dtl` (`dtl_sppd`, `no_sppd`, `nip`, `nama`, `tgl_lahir`, `keterangan`) VALUES
(34, 'dakjas aha', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-11-21', 'jk'),
(35, 'sd', '19931231201903202', 'KEPALA, S.ST\r\n', '2020-11-22', 'jk'),
(36, 'sdsdd', '19931231201903202', 'KEPALA, S.ST\r\n', '2020-11-22', 'kj'),
(37, 'qqw', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-22', 'jk'),
(38, 'sppdcvd2020', '19931231201903200', 'PEGAWAI, S.ST\r\n', '1998-02-20', 'sa'),
(39, 'sppdcvd20202', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-01', 'as'),
(40, 'SPPD2020/12/20', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-12-01', '2999912'),
(41, 'SPPD2020/12/21', '19931231201903200', 'PEGAWAI, S.ST\r\n', '2020-11-21', 'as'),
(42, 'SPPD2020/12/22', '19931231201903204', 'KASUBAG, S.ST\r\n', '2020-11-21', 'as'),
(43, 'SPPD2020/12/23', '19931231201903206', 'SEKDA, S.ST\r\n', '2020-11-22', 'sa');

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
(29, 'halo', 'spt1', 'testing 1', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-11-21', '2020-11-21', 'skj', 'jksd', 'DIVERIFIKASI'),
(30, 'halo2', 'jh', 'tetsing 3', 'KEPALA, S.ST\r\n', '19931231201903202', 'IIIA', 'KEPALA BKD', '2020-11-21', '2020-11-21', 'ds', 'kjas', 'DIVERIFIKASI'),
(31, 'SM-01-CVD/2020', 'spt3', 'asjkasjk', 'KASUBAG, S.ST\r\n', '19931231201903204', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-11-21', '2020-11-21', 'kj', 'jk', 'DIVERIFIKASI'),
(32, 'SM-0122-CVD/2020', 'sptacccvd', 'covid', 'KEPALA, S.ST\r\n', '19931231201903202', 'IIIA', 'KEPALA BKD', '2020-11-21', '2020-11-21', 'as', 'as', 'DIVERIFIKASI'),
(33, 'SM-111-CVD/2020', 'SPT/cvd2020', 'Penanganan Covid', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-11-26', '2020-11-29', 'Banjarbaru', 'Seminar', 'DIVERIFIKASI'),
(34, 'SM-01-CVD/1230', '', '98', 'KASUBAG, S.ST\r\n', '19931231201903204', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-12-16', '2020-12-16', 'ewq', '9021', 'DIBATALKAN'),
(35, 'DM001/2020/12/10', 'SPT-2020/202020', 'Pelaksanaan Tugas Gugus Covid 19', 'PEGAWAI, S.ST\r\n', '19931231201903200', 'IIIA', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2020-12-30', '2020-12-31', 'Banjarmasin', 'Melaksanakan Pelatihan Gugus Covid 19', 'DIVERIFIKASI');

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
  `golongan` varchar(40) NOT NULL,
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
('PEGAWAI, S.ST\r\n', 4, 19931231201903200, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'LAKI_LAKI', 'IIIA', 'Penata Muda', '2019-03-01', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'PEGAWAI', 'c4ca4238a0b923820dcc509a6f75849b'),
('KEPALA, S.ST\r\n', 3, 19931231201903202, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'LAKI_LAKI', 'IIIA', 'Penata Muda', '2019-03-01', 'KEPALA BKD', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'KEPALA', 'c4ca4238a0b923820dcc509a6f75849b'),
('KASUBAG, S.ST\r\n', 2, 19931231201903204, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'LAKI_LAKI', 'IIIA', 'Penata Muda', '2019-03-01', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'KASUBAG', 'c4ca4238a0b923820dcc509a6f75849b'),
('BENDAHARA, S.ST\r\n', 1, 19931231201903205, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'LAKI_LAKI', 'IIIA', 'Penata Muda', '2019-03-01', 'BENDAHARA', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'BENDAHARA', 'c4ca4238a0b923820dcc509a6f75849b'),
('SEKDA, S.ST\r\n', 4, 19931231201903206, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'LAKI_LAKI', 'IIIA', 'Penata Muda', '2019-03-01', 'Sekretaris Daerah', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'SEKDA', 'c4ca4238a0b923820dcc509a6f75849b'),
('LAILA ADAWIYAH, S.ST\r\n', 0, 199312312019032021, 'HULU SUNGAI SELATAN\r\n', '1993-12-31', 'Wanita', 'IIIA', 'Penata Muda', '2019-03-01', 'PRANATA KOMPUTER AHLI PERTAMA\r\n', '2019-03-01', 'JFU', 0, 0, 'DIV', '', '', '0000-00-00', '2052-01-01', 'BKD, DIKLAT\r\n', 'ADMIN', 'c4ca4238a0b923820dcc509a6f75849b');

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
-- Indexes for table `tbl_rinci`
--
ALTER TABLE `tbl_rinci`
  ADD PRIMARY KEY (`id_kwt`);

--
-- Indexes for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  ADD PRIMARY KEY (`id_sett`);

--
-- Indexes for table `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_spt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_dtl_usul`
--
ALTER TABLE `tbl_dtl_usul`
  MODIFY `dtl_usul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_rinci`
--
ALTER TABLE `tbl_rinci`
  MODIFY `id_kwt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
  MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sppd`
--
ALTER TABLE `tbl_sppd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_sppd_dtl`
--
ALTER TABLE `tbl_sppd_dtl`
  MODIFY `dtl_sppd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_spt`
--
ALTER TABLE `tbl_spt`
  MODIFY `id_usul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
