-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2020 pada 14.18
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sppd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip`
--

CREATE TABLE IF NOT EXISTS `tbl_arsip` (
`id_arsip` int(11) NOT NULL,
  `no_surat` varchar(500) NOT NULL,
  `kd_div` int(11) NOT NULL,
  `kd_jabatan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `finished_by` varchar(200) NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id_arsip`, `no_surat`, `kd_div`, `kd_jabatan`, `isi`, `finished_by`, `created_time`) VALUES
(1, '091822/BJM-20191204', 1, 3, 'oke', 'KEPALA SUBBAGIAN ORGANISASI DAN KEPEGAWAIAN', '2019-12-05 13:31:10'),
(2, '091822/BJM-20191208', 0, 0, 'skj kjasdjkas asda s as asdjkashka askasnhkasd asjhhas khadsnasd ', 'ADMIN', '2019-12-05 14:27:49'),
(3, '141/XI/MI-PPAT/2019', 0, 0, 'LAPORAN BULAN NOVEMBER 2019', 'ADMIN', '2019-12-05 15:24:26'),
(7, '142/XI/MI-PPAT/2019', 0, 0, 'Laporan Bulan November 2019', 'ADMIN', '2019-12-05 15:42:19'),
(8, 'UM/SISCO-BJM/261119.01', 5, 3, 'proses sesuai ketentuan yang berlaku', 'KEPALA SEKSI BINA PENGADAAN DAN PENETAPAN TANAH PEMERINTAH', '2019-12-05 15:52:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_disposisi`
--

CREATE TABLE IF NOT EXISTS `tbl_disposisi` (
`id_spt` int(10) NOT NULL,
  `no_spt` varchar(255) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `tempat` mediumtext NOT NULL,
  `dibuat_oleh` varchar(100) NOT NULL,
  `dibuat_tgl` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_spt`, `no_spt`, `nip`, `tujuan`, `tanggal`, `tempat`, `dibuat_oleh`, `dibuat_tgl`) VALUES
(1, '091822/BJM-201912011', '1', 'Tata Usaha', 'Kabag Tata Usaha', 'admin', 'KEPALA KANTOR WILAYAH BADAN PERTANAHAN NASIONAL', '2019-12-05 13:20:17'),
(2, '091822/BJM-20191204', '1', 'TATA USAHA', 'KEPALA BAGIAN TATA USAHA', 'oke', 'KEPALA KANTOR WILAYAH BADAN PERTANAHAN NASIONAL', '2019-12-05 13:27:30'),
(3, '091822/BJM-20191204', '1', 'TATA USAHA', 'KEPALA SUBBAGIAN ORGANISASI DAN KEPEGAWAIAN', 'oke', 'KEPALA BAGIAN TATA USAHA', '2019-12-05 13:29:02'),
(4, '091822/BJM-20191205', '1', 'TATA USAHA', 'KEPALA BAGIAN TATA USAHA', 'oke', 'KEPALA KANTOR WILAYAH BADAN PERTANAHAN NASIONAL', '2019-12-05 13:43:37'),
(5, '091822/BJM-20191205', '1', 'TATA USAHA', 'KEPALA SUBBAGIAN ORGANISASI DAN KEPEGAWAIAN', 'oke', 'KEPALA BAGIAN TATA USAHA', '2019-12-05 13:44:18'),
(6, '142/XI/MI-PPAT/2019', '0', 'HUBUNGAN HUKUM PERTANAHAN', 'KEPALA BIDANG HUBUNGAN HUKUM PERTANAHAN', 'Laporan Bulan November 2019', 'ADMIN', '2019-12-05 15:41:14'),
(7, '142/XI/MI-PPAT/2019', '0', 'HUBUNGAN HUKUM PERTANAHAN', 'KEPALA BIDANG HUBUNGAN HUKUM PERTANAHAN', 'Laporan Bulan November 2019', 'ADMIN', '2019-12-05 15:42:19'),
(8, 'UM/SISCO-BJM/261119.01', '5', 'PENGADAAN TANAH', 'KEPALA BIDANG PENGADAAN TANAH', 'proses sesuai ketentuan yang berlaku', 'KEPALA KANTOR WILAYAH BADAN PERTANAHAN NASIONAL', '2019-12-05 15:50:45'),
(9, 'UM/SISCO-BJM/261119.01', '5', 'PENGADAAN TANAH', 'KEPALA SEKSI BINA PENGADAAN DAN PENETAPAN TANAH PEMERINTAH', 'proses sesuai ketentuan yang berlaku', 'KEPALA BIDANG PENGADAAN TANAH', '2019-12-05 15:51:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE IF NOT EXISTS `tbl_divisi` (
`id` int(11) NOT NULL,
  `kd_div` int(11) NOT NULL,
  `kd_jabatan` int(11) NOT NULL,
  `nama_div` varchar(255) NOT NULL,
  `nama_sub` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id`, `kd_div`, `kd_jabatan`, `nama_div`, `nama_sub`) VALUES
(1, 1, 2, 'Tata Usaha', 'Kabag Tata Usaha'),
(2, 2, 2, 'Infratruktur Pertanahan', 'Kabid Infrastruktur Pertanahan'),
(3, 3, 2, 'Hubungan Hukum Pertanahan', 'Kabid Hubungan Hukum Pertanahan'),
(4, 4, 2, 'Penataan Pertanahan', 'Kabid Penataan Pertanahan'),
(5, 5, 2, 'Pengadaan Tanah', 'Kabid Pengadaan Pertanahan'),
(6, 6, 2, 'Penangann Masalah dan Pengendalian Pertanahan', 'Kabid Penangann Masalah dan Pengendalian Pertanahan'),
(7, 1, 3, 'Tata Usaha', 'Subag Perencanaan, Evaluasi dan Pelaporan'),
(8, 1, 3, 'Tata Usaha', 'Subag Organisasi dan Kepegawaian'),
(9, 1, 3, 'Tata Usaha', 'Subag Keuangan dan BMN'),
(10, 1, 3, 'Tata Usaha', 'Subag Umum dan Informasi'),
(13, 2, 3, 'Infratruktur Pertanahan', 'Seksi Pengukuran dan Pemetaan Dasar'),
(14, 2, 3, 'Infratruktur Pertanahan', 'Seksi Pengukuran dan Pemetaan Kodastral'),
(15, 2, 3, 'Infratruktur Pertanahan', 'Seksi Survei dan Pemetaan Tematik'),
(16, 3, 3, 'Hubungan Hukum Pertanahan', 'Seksi 1 HHP'),
(17, 3, 3, 'Hubungan Hukum Pertanahan', 'Seksi 2 HHP'),
(18, 3, 3, 'Hubungan Hukum Pertanahan', 'Seksi 3 HHP'),
(19, 4, 3, 'Penataan Pertanahan', 'seksi 1 pp'),
(20, 4, 3, 'Penataan Pertanahan', 'seksi 2 PP'),
(21, 4, 3, 'Penataan Pertanahan', 'seksi 3 pp'),
(22, 5, 3, 'Pengadaan Tanah', 'seksi 1 pt'),
(23, 5, 3, 'Pengadaan Tanah', 'seksi 2 pt'),
(24, 5, 3, 'Pengadaan Tanah', 'seksi 3 pt'),
(25, 6, 3, 'Penangann Masalah dan Pengendalian Pertanahan', 'seksi 1 pmpp'),
(26, 6, 3, 'Penangann Masalah dan Pengendalian Pertanahan', 'seksi 2 pmpp'),
(27, 6, 3, 'Penangann Masalah dan Pengendalian Pertanahan', 'seksi 3 pmpp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE IF NOT EXISTS `tbl_dokumen` (
`id_dok` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `lemrak` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_instansi`
--

CREATE TABLE IF NOT EXISTS `tbl_instansi` (
  `id_instansi` tinyint(1) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id_instansi`, `institusi`, `nama`, `status`, `alamat`, `kepsek`, `nip`, `website`, `email`, `logo`, `id_user`) VALUES
(1, 'Dinas Pendidikan Pemuda Dan Olahraga', 'SMK MasRud.com', 'Terakreditasi A', 'Sawahan, Nganjuk, Jawa Timur', 'M. Rudianto', '-', 'https://masrud.com', 'rudi@masrud.com', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klasifikasi`
--

CREATE TABLE IF NOT EXISTS `tbl_klasifikasi` (
`id_klasifikasi` int(5) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rinci`
--

CREATE TABLE IF NOT EXISTS `tbl_rinci` (
`id_rinci` int(11) NOT NULL,
  `no_spd` varchar(400) NOT NULL,
  `program` varchar(400) NOT NULL,
  `kegiatan` varchar(400) NOT NULL,
  `kode_rek` varchar(400) NOT NULL,
  `nama_rek` varchar(400) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `tgL_pulang` date NOT NULL,
  `nama` varchar(400) NOT NULL,
  `nip` varchar(400) NOT NULL,
  `jabatan` varchar(400) NOT NULL,
  `biaya_harian` decimal(10,0) NOT NULL,
  `biaya_riil` int(11) NOT NULL,
  `tiket_pergi` decimal(10,0) NOT NULL,
  `tiket_pulang` decimal(10,0) NOT NULL,
  `biaya_inap` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rinci`
--

INSERT INTO `tbl_rinci` (`id_rinci`, `no_spd`, `program`, `kegiatan`, `kode_rek`, `nama_rek`, `tgl_pergi`, `tgL_pulang`, `nama`, `nip`, `jabatan`, `biaya_harian`, `biaya_riil`, `tiket_pergi`, `tiket_pulang`, `biaya_inap`) VALUES
(3, 'Rahasia', 'uuyuy', 'uyuu', '7657667', '777', '2020-03-11', '2020-03-11', 'yuuttu', 'ini nip', 'uuytut', '7756', 566756, '5767', '7776', '67767');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sett`
--

CREATE TABLE IF NOT EXISTS `tbl_sett` (
`id_sett` int(11) NOT NULL,
  `kd_docno` varchar(10) NOT NULL,
  `docno` varchar(11) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `Keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sett`
--

INSERT INTO `tbl_sett` (`id_sett`, `kd_docno`, `docno`, `docname`, `bulan`, `tahun`, `Keterangan`) VALUES
(3, 'AG', '25', 'NOMOR AGENDA', '12', '2019', 'AGENDA +1'),
(4, 'KWT', '2', 'Nomor KWT', '03', '2020', 'KWT +1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_keluar` (
`id_surat` int(10) NOT NULL,
  `no_agenda` int(10) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_masuk` (
`id_surat` int(10) NOT NULL,
  `no_agenda` int(10) NOT NULL,
  `no_surat` varchar(250) NOT NULL,
  `asal_surat` char(250) NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `sts_surat` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat`, `no_agenda`, `no_surat`, `asal_surat`, `sifat`, `isi`, `lampiran`, `tgl_surat`, `tgl_terima`, `file`, `sts_surat`, `created_by`, `created_time`) VALUES
(1, 17, '091822/BJM-20191204', 'DINAS PENDIDIKAN', 'Sangat Rahasia', 'KJ', '', '2019-12-19', '2019-12-13', 'a15eb8c0d2f1a84a5b326d7c52621804.jpeg', 2, 'ADMIN', '2019-12-05 03:06:03'),
(2, 19, '091822/BJM-201912011', '1212', 'Rahasia', 'kjdka', '', '2019-12-04', '2019-12-06', '10deb09598d3deef3492b976ed8bb4fd.docx', 2, 'ADMIN', '2019-12-05 13:19:38'),
(3, 20, '091822/BJM-20191205', '123', 'Sangat Rahasia', 'SJK', '', '2019-12-25', '2019-12-18', 'a40f00885dac29dfeb36b3d4b38b5ce6.jpeg', 2, 'ADMIN', '2019-12-05 13:42:36'),
(4, 21, '091822/BJM-20191208', 'dari mana yaaaaa okeee ini sangatt panjaanggg seklai', 'Biasa', 'skj kjasdjkas asda s as asdjkashka askasnhkasd asjhhas khadsnasd ', '', '2019-12-09', '2019-12-20', '064f691e5173560b2384e0789feeb6f4.jpeg', 2, 'ADMIN', '2019-12-05 13:47:09'),
(5, 22, '091822/BJM-20191202', 'asa', 'Sangat Rahasia', 'oke', '1 bab', '2019-12-11', '2019-12-27', '4f90374e3353806368687e75dbf039a4.jpeg', 1, 'ADMIN', '2019-12-05 14:55:05'),
(6, 23, '141/XI/MI-PPAT/2019', 'MUHAMMAD IKHWAN,S.H.,M.KN.', 'Biasa', 'LAPORAN BULAN NOVEMBER 2019', '', '2019-12-23', '2019-12-12', 'da508e7c040ed0809837486c927d5946.jpeg', 0, 'ADMIN', '2019-12-05 15:24:20'),
(7, 24, '142/XI/MI-PPAT/2019', 'MUHAMMAD IKHWAN, S.H.,M.Kn.', 'Biasa', 'Laporan Bulan November 2019', '', '2019-12-04', '2019-12-05', 'c9cfff0edf8676b35a9a07849d62389c.jpeg', 2, 'ADMIN', '2019-12-05 15:29:17'),
(8, 25, 'UM/SISCO-BJM/261119.01', 'SISCO KJPP SATRIA SETIAWAN DAN REKAN', 'Biasa', 'Surat permohonan permintaan daftar nominatif dan Peta Bidang pengadaan Tanah pembangunan TPA Regional Banjarbaru', '', '2019-12-02', '2019-12-05', '3790243217ceca9aae5291c6aab689d2.jpeg', 2, 'ADMIN', '2019-12-05 15:49:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `nip` int(11) NOT NULL,
  `pangkat` varchar(10) NOT NULL,
  `jabatan` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nip`, `pangkat`, `jabatan`, `username`, `password`, `nama`) VALUES
(14, 'fffrtrtgsf', '2', 'KABID_PENGADAAN_TANAH', '3ea420ac9d749c07c28d87c824366745', 'PENGADAAN TANAH'),
(15, '6', '2', 'KABID_SENGKETA', '3ea420ac9d749c07c28d87c824366745', 'PENANGANAN MASALAH DAN PENGENDALIAN PERTANAHAN'),
(16, '1', '3', 'KASUBAG_PERENCANAAN', '3ea420ac9d749c07c28d87c824366745', 'SUBBAGIAN PERENCANAAN, EVALUASI DAN PELAPORAN'),
(17, '1', '3', 'KASUBAG_ORPEG', '3ea420ac9d749c07c28d87c824366745', 'SUBBAGIAN ORGANISASI DAN KEPEGAWAIAN'),
(18, '1', '3', 'KASUBAG_KEUANGAN', '3ea420ac9d749c07c28d87c824366745', 'SUBBAGIAN KEUANGAN DAN BMN'),
(19, '1', '3', 'KASUBAG_UMUM', '3ea420ac9d749c07c28d87c824366745', 'SUBBAGIAN UMUM DAN INFORMASI'),
(20, '0', '1', 'KAKANWIL', '3ea420ac9d749c07c28d87c824366745', 'KAKANWIL BPN KALSEL'),
(21, '2', '3', 'KASI_PPD', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENGUKURAN DAN PEMETAAN DASAR'),
(22, '2', '3', 'KASI_PPK', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENGUKURAN DAN PEMETAAN KADASTRAL'),
(23, '2', '3', 'KASI_SPT', '3ea420ac9d749c07c28d87c824366745', 'SEKSI SURVEI DAN PEMETAAN TEMATIK'),
(24, '3', '3', 'KASI_HTPT', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENETAPAN HAK TANAH DAN PEMBERDAYAAN HAK TANAH MASYARAKAT'),
(25, '3', '3', 'KASI_PHT', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENDAFTARAN HAK TANAH'),
(26, '3', '3', 'KASI_PTPP', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PEMELIHARAAN DATA HAK TANAH DAN PEMBINAAN PPAT'),
(27, '4', '3', 'KASI_PENATAGUNAAN', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENATAGUNAAN TANAH'),
(28, '4', '3', 'KASI_KONSOLIDASI', '3ea420ac9d749c07c28d87c824366745', 'SEKSI LANDREFORM DAN KONSOLIDASI TANAH'),
(29, '4', '3', 'KASI_PENATAAN_KAWASAN', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENATAAN KAWASAN TERTENTU'),
(30, '5', '3', 'KASI_PEMANFAATAN', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PEMANFAATAN TANAH PEMERINTAH'),
(31, '5', '3', 'KASI_PENGADAAN', '3ea420ac9d749c07c28d87c824366745', 'SEKSI BINA PENGADAAN DAN PENETAPAN TANAH PEMERINTAH'),
(32, '5', '3', 'KASI_PENILAIAN', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENILAIAN TANAH'),
(33, '6', '3', 'KASI_SENGKETA', '3ea420ac9d749c07c28d87c824366745', 'SEKSI SENGKETA DAN KONFLIK PERTANAHAN'),
(34, '6', '3', 'KASI_PERKARA', '3ea420ac9d749c07c28d87c824366745', 'SEKSI PENANGANAN PERKARA PERTANAHAN'),
(36, '0', '0', 'ADMIN', '73acd9a5972130b75066c82595a1fae3', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
 ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
 ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
 ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
 ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
 ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `tbl_rinci`
--
ALTER TABLE `tbl_rinci`
 ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
 ADD PRIMARY KEY (`id_sett`);

--
-- Indexes for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
 ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
 ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
MODIFY `id_spt` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
MODIFY `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rinci`
--
ALTER TABLE `tbl_rinci`
MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sett`
--
ALTER TABLE `tbl_sett`
MODIFY `id_sett` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
