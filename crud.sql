-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2016 at 12:25 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE IF NOT EXISTS `data_pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `kode_klien` varchar(20) NOT NULL,
  `nama_pasien` varchar(99) NOT NULL,
  `umur_pasien` int(3) NOT NULL,
  `ttl_pasien` varchar(20) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `notelp_pasien` varchar(99) NOT NULL,
  `konselor_pasien` varchar(99) NOT NULL,
  `tgl_konseling` varchar(20) NOT NULL,
  `kelamin_pasien` varchar(99) NOT NULL,
  `alasan_tes` varchar(99) NOT NULL,
  `tahu_vct` varchar(99) NOT NULL,
  `dengar_hiv` varchar(99) NOT NULL,
  `dengar_dari` varchar(10) NOT NULL,
  `pengetahuan_hiv` varchar(99) NOT NULL,
  `risk_penularan` varchar(99) NOT NULL,
  `pasangan_sex` varchar(99) NOT NULL,
  `status_perkawinan` varchar(99) NOT NULL,
  `kelamin_pasangan` varchar(99) NOT NULL,
  `terakhir_risk` varchar(20) NOT NULL,
  `suku_bangsa` varchar(99) NOT NULL,
  `agama_pasien` varchar(99) NOT NULL,
  `pendidikan_terakhir` varchar(99) NOT NULL,
  `pekerjaan_pasien` varchar(99) NOT NULL,
  `tindak_lanjut` varchar(99) NOT NULL,
  `lama_konseling` varchar(99) NOT NULL,
  `status_risk` varchar(99) NOT NULL,
  `keluhan_pasien` varchar(99) NOT NULL,
  `situasi_konseling` varchar(99) NOT NULL,
  `punya_pasangan` varchar(99) NOT NULL,
  `status_pasangan` varchar(99) NOT NULL,
  `tanggal_tesdarah` varchar(20) NOT NULL,
  `indikasi_pasangan_ims` varchar(99) NOT NULL,
  `terapi_rujukan_ims` varchar(99) NOT NULL,
  `gejala_tb` varchar(99) NOT NULL,
  `terapi_rujukan_tb` varchar(99) NOT NULL,
  `pajanan_tpt_kerja` varchar(99) NOT NULL,
  `tgl_pajanan` varchar(20) NOT NULL,
  `jend_pajanan` varchar(99) NOT NULL,
  `tato_luka` varchar(99) NOT NULL,
  `tgl_tato` varchar(20) NOT NULL,
  `jend_tato` varchar(99) NOT NULL,
  `produk_darah` varchar(99) NOT NULL,
  `tgl_produk_darah` varchar(20) NOT NULL,
  `jend_produk_darah` varchar(99) NOT NULL,
  `seks_vagina` varchar(99) NOT NULL,
  `tgl_vagina` varchar(20) NOT NULL,
  `jend_vagina` varchar(99) NOT NULL,
  `seks_oral` varchar(99) NOT NULL,
  `tgl_oral` varchar(20) NOT NULL,
  `jend_oral` varchar(99) NOT NULL,
  `seks_anal` varchar(99) NOT NULL,
  `tgl_anal` varchar(20) NOT NULL,
  `jend_anal` varchar(99) NOT NULL,
  `ganti_suntik` varchar(99) NOT NULL,
  `tgl_suntik` varchar(20) NOT NULL,
  `jend_suntik` varchar(99) NOT NULL,
  `risk_odha` varchar(99) NOT NULL,
  `pasien_hamil` varchar(99) NOT NULL,
  `tahap_hamil` varchar(99) NOT NULL,
  `kontrasepsi_teratur` varchar(99) NOT NULL,
  `perlu_tes` varchar(99) NOT NULL,
  `tesulang_jend` varchar(99) NOT NULL,
  `tgl_tes_pertama` varchar(20) NOT NULL,
  `tgl_tes_ulang` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `kode_klien`, `nama_pasien`, `umur_pasien`, `ttl_pasien`, `alamat_pasien`, `notelp_pasien`, `konselor_pasien`, `tgl_konseling`, `kelamin_pasien`, `alasan_tes`, `tahu_vct`, `dengar_hiv`, `dengar_dari`, `pengetahuan_hiv`, `risk_penularan`, `pasangan_sex`, `status_perkawinan`, `kelamin_pasangan`, `terakhir_risk`, `suku_bangsa`, `agama_pasien`, `pendidikan_terakhir`, `pekerjaan_pasien`, `tindak_lanjut`, `lama_konseling`, `status_risk`, `keluhan_pasien`, `situasi_konseling`, `punya_pasangan`, `status_pasangan`, `tanggal_tesdarah`, `indikasi_pasangan_ims`, `terapi_rujukan_ims`, `gejala_tb`, `terapi_rujukan_tb`, `pajanan_tpt_kerja`, `tgl_pajanan`, `jend_pajanan`, `tato_luka`, `tgl_tato`, `jend_tato`, `produk_darah`, `tgl_produk_darah`, `jend_produk_darah`, `seks_vagina`, `tgl_vagina`, `jend_vagina`, `seks_oral`, `tgl_oral`, `jend_oral`, `seks_anal`, `tgl_anal`, `jend_anal`, `ganti_suntik`, `tgl_suntik`, `jend_suntik`, `risk_odha`, `pasien_hamil`, `tahap_hamil`, `kontrasepsi_teratur`, `perlu_tes`, `tesulang_jend`, `tgl_tes_pertama`, `tgl_tes_ulang`) VALUES
(1, '', 'Asep Awaluddin', 37, '1977-11-09', 'Jl. Cabe II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(2, '', 'Donny Maradona', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(3, '', 'Deni Sukmajaya', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(4, '', 'Dony Fyansyah', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(5, '', 'Yowanda', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(6, '', 'Doni Andrian', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(7, '', 'Davit Maryadi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(8, '', 'Febry Nelwan', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(9, '', 'Rahmat Saleh', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(10, '', 'Ahmad  Zulkarnain', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(11, '', 'Aan', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(12, '', 'Heryadi Ismail', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(13, '', 'Ahmad Ramdani', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(14, '', 'Agkim  Wat', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(15, '', 'Beni', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(16, '', 'M.Rendi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(17, '', 'Andi Subhan', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(18, '', 'M.Andi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(19, '', 'Andreas', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(20, '', 'Ilham', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(21, '', 'Hertoni', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(22, '', 'Tirtayasa', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(23, '', 'Wahyudi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(24, '', 'Yanwar Pribadi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(25, '', 'Budiyanto', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(26, '', 'Dennis', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(27, '', 'Sultan Dandi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(28, '', 'Anton', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(29, '', 'Herman', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00'),
(30, '', 'Andi', 37, '1977-11-09', 'Jl. Canna II no 57 Pondok Indah Ps. Ken RT 03 RW 08', '', 'dr. Ros', '2014-12-17', 'Laki-laki', 'Dirujuk dari tempat lain', 'TV', '2004', 'TV', 'Kurang', 'Seksual', 'Tetap', 'Belum Menikah', 'Wanita', '2014-10-01', 'Batak', 'Kristen', 'SMU/SLTA', 'Pegawai Swasta', 'Pemberian Informasi HIV/AIDS, Merujuk ke Laboratorium / Tes darah', '> 30 menit', 'Sedang', 'Diare, Penurunan berat badan', 'Klien tenang dan mampu mengendalikan diri', 'Ya', 'Tidak diketahui', '0000-00-00', 'Tidak', 'Ya', 'Tidak', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Ya', '0000-00-00', 'Ya', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', 'Ya', 'Ya', '2014-12-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_questioner`
--

CREATE TABLE IF NOT EXISTS `hasil_questioner` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `sifat_1` varchar(2) NOT NULL,
  `sifat_2` varchar(2) NOT NULL,
  `sifat_3` varchar(2) NOT NULL,
  `sifat_4` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hasil_questioner`
--


-- --------------------------------------------------------

--
-- Table structure for table `keterangan_hasil`
--

CREATE TABLE IF NOT EXISTS `keterangan_hasil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(5) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `keterangan_hasil`
--

INSERT INTO `keterangan_hasil` (`id`, `tipe`, `keterangan`) VALUES
(1, 'ESTJ', 'Orang ESTJ menggunakan fungsi berpikir untuk menyelidika dunia sejauh mereka sanggup. Mereka suka mengorganisasi orang lain dan menikmati kegiatan aktif saat sekarang. Dominasi berpikir dalam tipe ini membuat mereka menjadi sangat logis dalam berpikir dan berbicara, analitis, kritis dan memiliki penilaian obyektif, dan yakin bahwa segala sesuatu mempunyai alasan. Mereka cenderung untuk lebih memperhatikan pekerjaan mereka dan bukan manusia dibalik pekerjaan. Mereka senang mengorganisasi fakta, situasi dan kegiatan-kegiatang yang berhubungan dengan suatu proyek dan membuat suatu rencana dengan sistematis untuk mencapai tujuan-tujuan mereka secara tertulis. Mereka kurang sabar dengan kebingungan atau ketidakefektifan dan dapat menjadi keras ketika situasi mendorong ke arah kekerasan.ESTJ kadang-kadang membuat keputusan terlalu cepat sebelum mereka mempelajari situasinya dengan teliti. Mereka perlu berhenti dan mendengarkan pandangan orang lain, khususnya orang-orang posisi bawahan. Hal ini sulit bagi mereka. Akan tetapi, bila bila mereka tidak menggunakan  kesempatan itu maka mereka mungkin mengambil keputusan terlalu cepat, tanpa bukti yang cukup atau tanpa dukungan yang cukup kuat dari orang lain.Orang ESTJ perlu memperhatikan nilai-nilai hidup fungsi perasa. Karena mereka mungkin begitu asyik dengan pendekatan logis sehingga tanpa sadar mereka mengabaikan nilai-nilai hidup fungsi perasa, sekaligus pusat perhatian banyak orang. Bila nilai-nilai fungsi perasa terlalu diabaikan naka mereka akan membangun suatu tekanan dan berekpresi dengan cara yang tidak tepat.Walaupun orang ESTJ sangat bagus dalam melihat apa yang tidak logis dan tidak konsisten, mereka perlu mengembangkan seni menghargai orang lain. Salah satu aspek positif untuk melatih fungsi perasa adalah supaya mereka juga menghargai nilai hidup dan pikiran orang lain.'),
(2, 'ENTJ', 'Orang ENTJ mengorganisasi unit-unit kegiatannya dalam suatu sistem yang baik dan lancar. Mereka membuat rencana baik jangka panjang dan jangka pendek denga tepat. Mereka dapat melihat efektifitas dan efisiensi atas pekerjaannya. Mereka membuat keputusan berdasarkan data impersonal, ingin bekerja berdasarkan rencana yang matang, ingin menggunakan sistem operasional dan mengharapkan orang lain juga bersikap demikian.ENTJ selalu bekerja dalam posisi penanggung jawab dan senang bekerja sebagai pimpinan. Mereka tidak pernah lesu bekerja. Juga tidak gampang memanipulasi bidang pekerjaan orang lain.Mereka dapat mengurangi hal-hal yang kurang efisien, kurang efektif dan dapat membingungkan.\r\nKetika berada dirumah maka tidak ada anggota keluarga yang meragukan keadaan rumah, sebab pekerjaan di rumah baginya adalah sangat penting. Orang-orang ENTJ mengharapkan sesuatu yang lebih baik dari sesamanya, khususnya potensi – potensi mereka. Mereka mengharapkan kepribadian yang kuat, perkembangan otonomi diri yang kuat serta kepercayaan diri yang kuat. Orang ENTJ memberi petunjuk yang jelas   anak-anaknya. Anak-anaknya akan tahu apa yang diharapkan dari orang tuanya tersebut, khususnya harapan-harapan yang perlu ditaati. Apabila hal-hal diatas tidak berjalan sesuai dengan harapan maka ia juga tidak mengharapkan hal yang lebih dari kemampuan anak-anaknya. Tetapi bila diantara harapan orang tua dan respon anak-anak cocok maka akan menghasilkan suatu keluarga yang bahagia.'),
(3, 'ISTP', 'Orang bertipe kepribadian ISTP menggunakan fungsi berpikir untuk mencari prinsip-prinsip yang bisa menyalurkan informasi ke dalam kesadaran lewat indera-indera. Mereka sangat yang kuat. Mereka rajin mengumpulkan fakta dan mengatur data, namun tidak berminat mengatur situasi dan manusia, kecuali situasi dan orang-orang bersangkutan mempunyai kaitan langsung dengan pekerjaan mereka. Dalam relasi sosial mereka adalah sangat pemalu. Menjadi tidak pemalu jika berelasi dengan teman akrabnya. Kadang mereka begitu intens dengan salah satu minat, sampai-sampai mereka mengabaikan sekaligus terasing dari lingkungan sosial mereka.\r\nOrang bertipe kepribadian ISTP adalah pendiam dan sangat berhati-hati. Namun mereka akan berbicara banyak jika menyinggung subyek yang mereka kuasai dan minati. Mereka gampang menyesuaikan diri dalam kegiatan setiap hari, tetapi dapat berhenti bila salah satu dari prinsip hidup mereka dilangkahi. Mereka menyukai pekerjaan tangan, senang berolahraga dan senang informasy yang berhubungan dengan keinginan indra-indra.Orang tipe ini kadang begitu memperhatikan pendekatan logika berpikir, sampai-sampai mengabaikan apa yang menjadi perhatian orang lain dan dirinya sendiri. Mereka mungkin akan memutuskan sesuatu yang tidak begitu penting, hanya karena hal itu cukup logis. Kalau mereka membiarkan fungsi berpikir dan menekan nilai-nilai perasa maka fungsi perasa tersebut akan berbalik membangun tekanan, selanjutnya mencari jalan untuk berekspresi denga cara yang tidak tepat.Mereka kadang-kadang sulit menjadi orang yang taat. Walaupun tipe ini sangat bagus dalam menganalisis kesalahan, tipe ini juga kadang sulit untuk mengekspressikan penghargaan pada orang lain itu. Tetapi kalau mereka dapat mengekspresikan penghargaan itu maka hal itu sangat berguna dalam pekerjaan mereka, sekaligus sangat berguna dalam relasi antarpribadi dengan orang lain.\r\n'),
(4, 'INTP', 'Orang bertipe INTP menggunakan preferensi berpikir untuk menemukan prinsip-prinsip yang muncul dalam pikiran mereka. Mereka mengembangkan prinsip-prinsip ini untuk mengantisipasi konsekuensi hidup yang mereka jalani. Mereka sangat logikal, analitis, obyektif, kritis berfokus pada ide-ide dari pribadi yang berada dibalik ide-ide.Mereka cenderung mengorganisasi ide-ide dan pengetahuan dibanding situasi dan manusia. Mereka sangat cenderung mengikuti pikiran mereka. Secara Sosial mereka cenderung untuk memiliki sekelompok kecil orang atau teman yang senang berdiskusi tentang pikiran-pikiran mereka.Mereka begitu terikat dengan suatu ide hingga mereka dapat kehilangan jalan keluar eskternal.Orang INTP berpembawaan pendiam dan sangat hati-hati meskipun mereka dapat berbicara banyak dalam suatu subyek yang mereka kuasai. Mereka dapat menyesuaikan diri sejauh tidak melanggar prinsip-prinsip dasar yang dipegang.Minat mereka yang utama adalah melihat segala kemungkinan yang ada diatas keadaan sekarang. Mereka gampang memahami dan intuisi mereka menerangi wawasan kecerdikan dan keingintahuan intelektual mereka. Kalau mereka tidak berhasil mengembangkan fungsi pengamatan mereka maka mereka merasa merasa khawatir bahwa pengetahuan mereka akan berkurang.Kurang kontak dengan dunia luar dapat membawa diri mereka sulit dimengerti atau dipahami orang lain. Mereka ingin menegakkan kebenaran tetapi sering karena idealisme tersebut menjadikan mereka sangat kompleks sehingga orang lain sulit mengikutinya. Jika mereka belajar untuk menyederhanakan argumentasi maka pikiran-pikiran mereka akan dipahami dan diterima secara luas.\r\nOang INTP kadang telalu menekankan logika berpikir, sampai mereka mengabaikan apa orang lain perhatikan. Jika orang INTP membiarkan logika berpikir menindas nilai-nilai fungsi perasa maka hal itu dapat diekspresikan dalam cara yang kurang pantas. Walaupun mereka sangat baik dalam menganalisis apa yang salah dalam hubungan dengan suatu ide, sangat sulit bagi orang INTP mengekspresikan penghargaannya kepada orang lain. Tetapi jika mereka mencoba maka sangat berguna dalam pekerjaan dan dalam hubungan pribadi mereka bersama orang lain.\r\n'),
(5, 'ESFJ', 'Orang tipe ESFJ sangat simpatik dan penurut. Mereka sangat komit dengan orang-orang sekitar dan menempatkan harmoni diatas segala nilai dalam hubungan dengan orang lain.Mereka sangat besahabat dan menyenangkan. Mereka sangat sensitif khususnya tehadap sikap indiferen. Sebaliknya mereka sangat membutuhkan dukungan terus menerus.Kesenangan dan kepuasan mereka muncul dari kehidupan relasi dengan orang-orang sekitar.Orang orang ESFJ cenderung meingidolakan kualitas-kualitas kehidupan orang lain dan sangat menghormati pribadi-pribadi terhormat, institusi kadang loyal terhadap idealisme orang yang mereka kagumi.\r\nMereka memiliki talenta untuk menemukan nilai dibalik pendapat oang lain. Bahkan nilai-nilai itu berada dalam konflik, mereka tetap percaya bahwa harmonisasi dapat mewarnai seluruh situasi, dalam hal tersebut terjadi karena mereka adalah motor penggeraknya. Mereka selalu setuju dengan pendapat orang lain tanpa  alasan yang masuk akal.Mereka perlu berhati-hati karena sering mereka lebih berkosentrasi pada nilai-nilai hidup orang lain.Sering mereka lupa akan nilai-nilai hidup mereka sendiri.Mereka pada dasarnya tertarik pada realitas perspektif lewat kelima indera mereka sehingga mereka menjadi lebih praktis, realitas dan bertumpu pada dunia nyata. Mereka memiliki minat yang besar terhadap keunikan yang berbeda dari setiap manusia. Mereka memiliki minat yang besar terhadap keunikan yang berbeda dari setiap manusia. Mereka sangat menghargai dan menikmati keadaan ini. Mereka gampang menyesuaikan diri terhadap kehidupan rutin.\r\nOrang-orang bertipe ESFJ sangat sulit untuk melihat kebenaran atas problem-problem yang berhubungan  dengan orang lain. Jika mereka tidak setuju dengan fakta fakta mereka akan berusaha untuk menghindari fakta atau problem tersebut daripada mencari suatu solusi yang baik.\r\n'),
(6, 'ENFJ', 'Tipe Kepribadian ENFJ adalah tipe pemimpin didalam kelompok, Mereka sangat percaya diri dan yakin bahwa apa yang mereka sampaikan atau anjurkan akan diikuti oleh anggota kelompok.Mereka meletakkan kelompok atas kompromi dan kerjasama dengan anggota kelompok. Orang tipe ENFJ menempatkan nilai manusia diatas segala yang lain, yang dapat mengakibatkan bahwa mereka merasa bertanggung jawab atas perasaan orang lain.Mereka secara tidak sadar mengambil alih perasaan-perasaan orang lain menjadi bebannya sendiri. Tipe ini sangat memperhatikan orang lain, suportif dan gampang berkomunikasi dengan orang lain.Karena itu banyak orang datang kepada mereka untuk meminta bantuan dan dukungan.Jika mereka dipaksa untuk melepaskan dorongan memperhatikan orang lain maka mereka akan mengalami beban batin. Mereka merasa bersalah tidak dapat menolong orang lain yang membutuhkan pertololongan. Mereka sendiri akan menderita jika melepaskan hubungan antarpribadi yang bukan atas realitas hukum manusiawi. Mereka terlalu toleran pada orang lain, sehingga jarang memberi kritik dan sebaliknya selalu setuju.\r\nDalam berkomunikasi mereka mudah dipahami dan diterima, seperti mereka mudah menerima orang lain, demikian juga mereka menganggap bahwa orang lainpun mudah menerima mereka. Ketika ide dan pendapat mereka tidak diterima, mereka akan terkejut, bingun dan kadang merasa sakit. Walaupun ada perasaan seperti itu, tidak terjadi dalam frekuensi yang tinggi. Sebabnya, karena orang tipe ini memiliki kemampuan berbahasa yang bagus. Mereka gampang menyesuaikan bahan komunikasi mereka ketika bahan pembicaraan tiba-tiba berada pada tahap oposisi. Dalam kelompok mereka gampang berbicara tanpa merasa takut, entah dalam kelompok kecil entah besar. Karena mereka memiliki empati yang sangat tinggi maka sering kali mereka mengambil alih karakter, emosi-emosi dan keyakinan orang lain.Bahayanya secara tidak sadar mereka mengambil alih beban orang lain menjadi beban mereka sendiri.Mereka kadang-kadang kehilangan identitasnya sendiri. Mereka gampang meniru orang lain.Kadang-kadang mereka mengambil alih problem-problem orang lain, khususnya teman dekat mereka. Karena sebegitu tenggelam dalam emosi membuat mereka kadang-kadang menjadi sangat emosional. Mereka mampu menyesuaikan diri secara sosial dan menjadi teman yang sangat disenangi.Bahaya dari bentuk perhatian yang tinggi pada orang lain, dan karakter yang selalu setuju tersebut adalah mereka menjadi korban dari orang lain, yang makin lama semakin menuntut. Teman hidup ENFJ akan selalu berusaha  untuk menyenangkan dan merasa secara pribadi bertanggung jawab ketika kehidupan dalam rumah ta ngga tidak berjalan dengan lancar.Mereka tidak mengenal lelah untuk bekerja keras demi kebaikan orang lain. Dedikasi mereka kadang berdampingan dengan mimpi mereka.\r\nOrang bertipe ini senang memiliki segala sesuatu yang teratur dan terorganisasi dengan baik. Mereka cenderung merencanakan kerja dan pertemuan sosial lainnya jauh sebelumnya. Mereka sangat senang dengan situasi kompleks yang menuntut banyak data. Pada saat yang sama dengan situasi kompleks mereka dapat menyenangkan orang lain dengan karakter keluwesan yang penuh perhatian.Mereka adalah orang-orang yang populer dimanapun mereka berada. Karakter mereka tenang dan senang baik sebagai pemimpin maupun sebagai pengikut biasa.Karakter tersebut membuat mereka gampang diterima.Mereka dapat mengatur kegiatan dalam kelompok tanpa terlebih dahulu membuat persiapan. Mereka dapat menemukan peran bagi setiap anggota kelompoknya.\r\n'),
(7, 'ISFP', 'Orang yang berferensi ISFP sangat hangat dalam pergaulan, tetapi mereka tidak akan menampakkannya sampai mereka mengenal betul teman – teman disekelilingnya.kehangatan tersebut dalam hati. Bila mereka memperhatikan seseorang maka mereka memperhatikan dengan sepenuh hati dan bukan melalui kata-kata saja melainkan dengan perbuatan nyata. Mereka sangat setia dengan kebiasaan dan aturan yang berhubungan dengan hal atau orang yang sangat mereka perhatikan.Walaupun sangat melekat dan sangat yakin pada nilai hidup, mereka juga dapat dipengaruhi oleh orang yang sangat mereka perhatikan dan cintai. Walau loyalitas dan cita-cita menentukan dalam hidup mereka, hal ini sangat sulit untuk dibicarakan. Fungsi perasa mereka yang paling dalam jarang diekspresikan. Kelembutan hati mereka ditutupi dengan suatu sikap hati-hati sebagai orang pendiam.\r\nMereka sangat toleran, terbuka dan fleksibel dalam kegiatannya serta gampang menyesuaikan diri.Mereka tidak ingin mengakhiri segala sesuatunya secara terburu-buru. Mereka tidak memiliki kecenderungan memaksa atau menguasai orang lain. Orang yang paling mereka hargai adalah orang yang memahami nilai-nilai dan tujuan yang mereka ingin capai.\r\nMereka tertarik pada realitas yang dipahami lewat kelima indra, baik dari luar maupun dari dalam diri mereka sendiri. Senang dengan situasi dimana cita rasa, perbedaan, rasa keindahan dan keseimbangan menjadi penting.Mereka ingin memiliki suatu tujuan yang lebih mulia dalam pekerjaan mereka dibandingkan gaji yang mereka terima, berapapun jumlahnya.\r\nProblem yang sering muncul atas tipe orang ini adalah adanya perasaan kontras antara cita-cita dengan pemenuhannya yang aktual. Situasi ini sering menimbulkan perasaan tidak berdaya. Sebagai jaminannya mereka mengandalkan bahwa apa yang mereka lakukan sangat baik. Mereka merupakan orang tipe paling rendah hati, dan cenderung menilai rendah dan mengecilkan diri mereka sendiri.Jika mereka tidak menemukan jalan untuk mengekspresikan cita-cita mereka maka mereka akan menjadi sangat sensitif dan mudah sakit hati.\r\n'),
(8, 'INFP', 'Orang INFP menampilkan wajah yang tenang dan menyenangkan. Mereka memiliki kapasitas caring yang tidak selalu dimiliki tipe lain. Mereka penuh perhatian terhadap orang lain, memperhatikan hal-hal positif yang menonjol dari orang lain. Mereka memiliki prinsip dan nilai hidup yang sangat mereka junjung tinggi. Mereka adalah orang yang mampu mempertahankan kepercayaan dan prinsip-prinsip kehidupan. Mereka berani berkorban demi prinsip dan kepercayaan itu. Mereka selalu mencari kesatuan dalam hidup mereka, kesatuan antara tubuh dan jiwa, kesatuan antara emosi-emosi dan intelektualitas. Mereka kadang-kadang memiliki motivasi tragis yang tidak kentara dalam hidup mereka dan orang lain jarang mengetahuinya.\r\nOrang bertipe INFP komit terhadap hal-hal positif. Komitmen terhadap hal-hal yang baik tersebut menyebabkan mereka selalu berhati-hati pada hal-hal negatif dan hal-hal yang mengundang kejahatan.Kejahatan tersebut bisa tampil dalam pesona yang kurang senonoh. Orang tipe INFP kadang-kadang hidup dalam situasi yang paradoksal. Disatu pihak ia terdorong untuk mencapai kemurnian dan keutuhan, tetapi di pihak lain ada potensi mencari kesempatan untuk melakukan hal-hal ternoda dan kurang terpuji. Ketika mereka jatuh dalam godaan mereka bisa diajak untuk bertobat.\r\nOrang bertipe INFP sangat menghargai proses logika dalam setiap keputusannya.Mereka bereaksi dengan strategi keindahan melawan keburukan, kebaikan melawan kejahatan, kekuatan nilai moral melawan kelakuan tak bermoral.Pemikiran metafor dan kiasan muncul secara otomatis tetapi kadang menyiksa.Orang bertipe INFP gampang menyesuaikan diri, gampang membangun relasi dan pandai menjaga perasaan orang lain, tidak senang dengan gangguan telpon, dapat bekerja sendiri, sebaik bekerja bersama orang lain. Mereka sangat sabar dengan situasi yang kompleks, tetapi kurang sabar terhadap hal-hal kecil dan rutin. Mereka dapat melakukan kesalahan terhadap hal lain tetapi bukan pada nilai-nilai hidup.Mereka memiliki sifat mudah kecenderungan alami untuk pergi menolong sesama kapanpun mereka butuhkan.Mereka bersedia berkorban demi panggilan tersebut. Sebagai teman mereka komit dan ingin hidup dalam harmoni dan menghindari konflik. Mereka sangat sensitif terhadap perasaan orang lain dan senang menyenangkan orang lain, khususnya orang yang menjadi pusat perhatian mereka.Mereka takut dengan kemajuan yang harus dibayar dengan pengorbanan yang datang kemudian.Setan akan menyusup bila mereka mengalami kesuksesan, suasana indah, kesehatan, kekayaan, dan pengetahuan yang terlalu berlebihan. Mereka mengalami kesulitan dalam mengungkapkan afeksinya secara langsung, sebaliknya mereka lebih senang mengungkapkannya secara tidak langsung.'),
(9, 'ESTP', 'Orang bertipe ESTP gampang menyesuaikan diri dengan keadaan sekitarnya.Mereka gampang menangkap apa yang mereka melihat, dengar dan ketahui.Mereka secara alamiah menerima dan menggunakan fakta-fakta sekitar mereka apa bentuknya. Mereka menentukan solusi yang menyenangkan. Mereka mengatasi problem-problem dengan cara penyesuaian diri dan kadang-kadang menggunakan orang lain untuk proses penyesuaian diri. Mereka adalah orang yang terbuka dan toleran terhadap setiap orang.Mereka menggunakan barang-barang apa adanya.Mereka sangat baik dalam mencairkan suasana yang tegang dan situasi konflik.Mereka sangat aktif memperhatikan obyek-obyek kegiatan makanan, manusia atau apa saja yang ada disekitar mereka. Kemampuan mereka untk menggunakan indra-indra dapat dilihat dalam : kemampuan untuk melihat secara terus menerus kebutuhan saat itu, kemampuan untuk mengaplikasi dan mengingat hal-hal besar dalam fakta, memiliki seni merasakan dan menilai sesuatu, mampu menggunakan jaringan-jaringan dan hal-hal materi.\r\nFokus perhatian pada situasi sekarang dan penerimaan yang realitas terhadap apa yang ada, membuat mereka mampu menjadi pemecah problem. Karena mereka tidak terikat oleh kebutuhan untuk mengikuti prosedur-prosedur standar atau metode-metode standar maka mereka sering mampu melihat cara-cara untuk mencapai tujuan dengan menggunakan aturan-aturan, sistem-sistem yang ada dalam cara yang baru.Pemikiran abstrak dan teori-teori kurang dipercaya oleh orang-orang bertipe ESTP. Mereka baru dipercaya jika mereka sendiri merasakannya dalam pengalaman hidup mereka.Efektivitas mereka bergantung pada bagaimana mengembangkan fungsi penilai mereka.Mereka mungkin perlu mengembangkan fungsi berpikir sedemikian rupa  sehingga mereka dapat menggunakan prinsip-prinsip hidup yang mereka miliki untuk menyediakan standar perilaku, arah dan tujuan hidup mereka. Jika fungsi penilai tidak cukup dikembangkan untuk memberikan suatu karakter yang baik maka akan ada bahaya dalam penyesuaian diri.'),
(10, 'ESFP', 'Orang tipe ESFP gampang menyesuaikan diri dengan keadaan sekitarnya. Mereka juga gampang menangkap apa yang mereka lihat, dengar dan ketahui. Secara alamiah mereka menerima dan menggunakan fakta-fakta sekitar, apapun bentuknya.Mereka selalu mencari solusi yang menyenangkan dan tidak memaksakan diri mereka pada situasi sulit.Mereka yakin akan adanya solusi yang menyenangkan di saat mereka menguasai fakta-fakta sekitar.\r\nMereka mengatasi problem-problem dengan cara penyesuaian diri dan kadang-kadang menggunakan orang lain dalam proses itu. Umumnya orang senang dengan anjuran mereka. Mereka adalah orang yang terbuka dan toleran dengan setiap orang.Mereka menggunakan barang-barang secara apa adanya dan sangat baik dalam mencairkan situasi yang tegang dan konflik.Mereka sangat aktif memperhatikan obyek-obyek kegiatan makanan, manusia atau apa saja yang ada disekitar mereka. Kemampuan mereka untuk menggunakan indra-indra dapat dilihat dalam :, kemampuan untuk melihat secara terus menerus kebutuhan saat ini, kemampuan untuk mengaplikasikan dan mengingat hal-hal besar dalam fakta-fakta, memiliki seni merasakan dan menilai sesuatu, mampu menggunakan jaringan-jaringan dan hal-hal materi.Mereka membuat keputusan berdasarkan nilai personal perasaan daripada analisis logika berpikir. Fungsi perasa yang dimiliki membuat mereka sangat simpatik. Kata-kata mereka menyentuh,minat mereka terarah pada manusia.Mereka sangat bagus dalam kontak personal dengan orang lain, dan gampang untuk mengikuti aturan.Mereka belajar dari pengalaman dibandingkan dari buku.Pikiran-pikiran abstrak dan teori-teori hanya dipercaya setelah mereka mengalaminya dalam hidup harian.\r\nEfektivitas mereka bergantung pada bagaimana mengembankan fungsi penilai yang mereka miliki.Mereka mungkin perlu mengembangkan fungsi berpikir sedemikian rupa sehingga dapat menggunakan prinsip-prinsip hidup yang mereka miliki untuk menyediakan standar perilaku, arah dan tujuan hidup.Jika fungsi penilai tidak cukup dikembangkan untuk memberikan suatu karakter yang baik maka akan ada bahaya dalam penyesuaian diri, khususnya dalam menentukan waktu yang tepat dalam kehidupan percintaan mereka.'),
(11, 'ISTJ', 'Orang bertipe ISTJ punya ketergantungan ekstrem, realistis dan penghormatan yang praktis terhadap fakta-fakta. Mereka menyerap, mengingat menggunakan sejumlah fakta dan sangat hati-hati tentang akurasinya. Ketika mereka melihat bahwa kebutuhan untuk menyelesaikan sesuatu maka mereka akan menerima dan mengerjakannya dengan penuh tanggung jawab.Reaksi pribadi jarang tampak di wajah mereka, bahkan ketika sedang dalam keadaan krisis sekalipun. Mereka tampak tenang dan sabar. Hanya ketika akan mengenal mereka dengan lebih baik, baru Anda akan menemukan bahwa siapa sesungguhnya mereka yang berada dibalik ketenangan luar biasa itu. Mereka mengamati situasi dari suatu sudut pandang pribadi yang intensif. Ketika mereka sedang dalam tugas dan sedang berurusan dengan dunia, perilaku mereka sangat sensitif.\r\nOrang ISTJ adalah pekerja keras yang sistematis dan sangat teliti dengan bagian-bagian dan prosedur dari pekerjaannya. Mereka cenderung untuk menstabilkan segala sesuatu yang berhubungan dengan mereka. Orang bertipe ISTJ sering memilih pekerjaan dimana talenta-talenta mereka dalam organisasi, akurasinya diakui dan dihargai.Mereka akan mengalami masalah ketika mereka mengharapkan setiap orang untuk berpikir logis dan analitis seperti mereka.Mereka lalu akan masuk ke dalam bahaya menilai orang lain secara tidak tepat. Yang paling berguna adalah menggunakan fungsi berpikir mereka sendiri, dan mengembangkan pengamatan mereka untuk memahami orang lain. Mereka menggunakan indra-indra untuk menemukan apa yang sesungguhnya ada pada orang lain, yang sekaligus menjadi fakta untuk dihargai dan menolong orang lain tersebut.\r\nMasalah lain yang dihadapi tipe ini adalah bila fungsi berpkir mereka tidak dikembangkan dengan baik maka mereka cenderung mencurigai setiap imajinasi dan intuisi, tetapi tidak secara serius mendalaminya. Mereka juga akan menjadi orang yang suka mengasingkan diri dari pergaulan. Mereka akan terpikat terhadap ketertarikan indra-indra, tetapi tidak ada yang ditindaklanjuti. Mereka hanya tinggal pada terpikat saja.'),
(12, 'ISFJ', 'Orang bertipe ISFJ sangat tegantung secara ekstrem dan realistis terhadap fakta-fakta. Mereka menyerap, mengingat, menggunakan sejumlah fakta dan sangat teliti dan akurasinya.Mereka ingin supaya segala sesuatunya tampil dengan jelas dan terbuka. Reaksi pribadi yang jarang tampak dalam wajah mereka kadang sulit diterka oleh orang lain.Reaksi pribadi jarang tampak di wajah ini, membuat ia tetap tenang dan sabar walau bila berhadapan dengan krisis sebesar apapun.Hanya ketika anda mengenal mereka dengan lebih baik, baru Anda akan menemukan bahwa dibalik ketenangan itu mereka sedang memandang segala sesuatunnya dari sudut pandang yang tajam dan tampak dalam bentuk lelucon yang menghibur.\r\nOrang ISFJ adalah orang yang tahan sakit, pekerja keras, sangat sabar,baik hati, empati, besahabat. Perhatian, suportif dan menjadi orang yang sangat dibutuhkan dan memiliki preferensi perasa.Tipe ini dapat mengalami kesulitan bila mereka tidak mengembangkan preferensi penilainya. Bila perasa mereka tidak dikembangkan maka mereka tidak akan efektif dalam menghadapi dunia luar.Kalau memang itu yang tejadi maka mereka akan suka menarik diri, hati-hati dan pendiam. Akibat lebih lanjut adalah mereka cenderung mencurigai setiap imajinasi, intuisi dan tidak serius mendalaminya.\r\n'),
(13, 'ENTP', 'Orang ENTP sangat gandrung membuat pembaharuan. Mereka adalah orang yang selalu melihat kemungkinan dan carra baru dalam melaksanakan tugas. Mereka memiliki banyak sekali imajinasi dan sangat berinisiatif dalam memulai suatu pekerjaan.serta memiliki energi yang impulsif dalam mewujudkan proyek pekerjaan itu. Mereka sangat yakin akan kebenaran dan inspirasi-inspirasi dan tidak jemu dengan problem didalamnya.Mereka distimulasi oleh kesulitan-kesulitan dan sangat rajin menyelesaikan persoalan-persoalan itu.Mereka merasa senang memiliki kompetensi dalam berbagai macam bidang dan sangat menghargai hal ini dalam diri orang lain.Energi mereka muncul dai suatu minat yan g besar. Mereka penuh dengan kemungkinan-kemungkinan. Mereka juga tertarik pada begitu banyak hal yang membuat mereka mengalami kesulitan dalam kosentrasi dan menentukan prioritas.Penggunaan fungsi berpikir juga membuat orang ENTP lebih obyektif dalam pendekatan proyek yang ada dan terhadap orang yang hidup disekitar mereka.Mereka adalah pengamat ekstrem terhadap perilaku orang lain.Mereka cenderung memahami daripada mengadili orang lain.Orang bertipe ENTP tidak suka dengan pekerjaan yang tidak memberikan tantangan.\r\nKesulitan yang muncul dari orang ENTp adalah bahwa mereka membenci kehidupan yang rutin, menjadi bosan denga proyek sendiri setelah mengatasi problem-problem yang ada.Karena orang ENTP selalu tertarik tantangan dan kemungkinan baru dan perlu mengembangkan sisi penilai.Jika fungsi penilai mereka tidak dikembangkan maka mereka akan cenderung salah memilih proyek dan gagal menyelesaikannya atau inspirasi mereka tidak tuntas.'),
(14, 'ENFP', 'Orang-orang bertipe ini sangat memperhatikan sesamanya. Mereka memiliki talenta untuk melihat hidup ini dengan lebih optimis, penuh harapan, percaya kemungkinan-kemungkinan positif dan negatif. Mereka berjuang untuk menemukan hal yang otentik dari kehidupan walau kadang-kadang semuanya itu terjadi secara spontan dan dalam komunikasi nonverbal.Mereka meilhat pengalaman emosi yang intens sebagai sesuatu yang vital.Mereka bekerja keras untuk keharmonisan, tetapi selalu melihat diri mereka dalam bahaya kehilangan perasaan-perasaan mereka yang riil.Mereka sangat tajam dan masuk dalam suatu observasi dan kosnetrasi yang intens pada individu lain, sambil tetap sadar akan apa yang sedang terjadi pada diri mereka.Perhatian mereka terhadap sesama merupakan bagian dari hidupnya.Mereka selalu menginterprestasikan peristiwa-peristiwa dari orang sekitar, mampu memberikan arti khususpada kata-kata dan kegiatan-kegiatan. Interprestasi mereka cenderung negatif. Walaupun mereka memiliki pengamatan yang brilian, mereka dapat membuat kesalahan dalam penilaian, yang selanjutnya dapat membuat mereka merasa tidak aman.Karena mereka orang yang terlalu sensitif maka ada kemungkinan mereka mengalami ketegangan. Mereka selalu siap dalam situasi emergensi, karena mereka memiliki kemampuan tersebut.Mereka bosan dengan situasi orang yang bergarak lamban, dan menolak mengulangi pengalaman.Mereka adalah orang yang sangat antusias dan karena itu banyak orang kagum, serta percaya kepada mereka.Mereka senang berdikari, tidak aman kalau berada dibawah orang lain.Mereka adalah orang yang sangat antusias dan karena itu banyak orang kagum, serta percaya kepada mereka.Mereka adalah orang-orang yang optimis dan merasa kaget ketika orang atau peristiwa tidak muncul seperti yang diharapkan.Mereka dapat memecah banyak persoalan, khususnya masalah-masalh yang berhubungan dengan manusia.Mereka tidak terlalu menjalankan aturan-aturan yang diciptakan, tetapi mengharapkan sesamanya mengikutinya. Mereka adalah orang yang sangat boros dalam menggunakan uang. Bila mereka dipercayakan mengurus keuangan maka rumah mereka akan penuh dengan barang-barang mewah, sementara dipihak lain mengabaikan hal sangat perlu.'),
(15, 'INTJ', 'Orang btipe INTJ adalah orang yang paling percaya diri dari semua tipe. Mereka memiliki kemampuan kesadaran yang tinggi. Orang-orang tipe ini hanya merupakan satu persen dari seluruh penduduk dunia. Mereka hidup dalam suatu realitas introspektif.cenderung memperhatikan kemungkinan menggunakan fungsi berpikir dalam bentuk logika dan melihat semua peristiwa dan semua orang dalam perspektif positif.Keputusan-keputusan mereka muncul secara alamiah.Sekali memutuskan maka mereka tak akan mengubah keputusannya, Fokus kepada masa depan dan bukan masa lampau.Mereka  terhadap slogan atau kata-kata.dan gampang menyesuaikan diri pada peraturan bila aturan-aturan itu berguna.Orang-orang INTJ sangat sistematis dan logis dalam prinsip.menggunakan intuisinya untuk menguasai realitas.Orang-orang INTJ menginginkan harmonisasi dan keteraturan dirumah serta relasi mereka.Mereka percaya kepada intuisi mereka tentang sesama ketika membua pilihan. Emosi INTJ sulit dibaca, tetapi mereka sangat tepat dalam mengekspresikan reaksi emosi mereka. Kadang-kadang mereka bersikap dingin, menyembunyikan diri, dan tidak responsif.Padahal orang-orang INTJ adalah orang-orang yang sangat sensitif terhadap tanda-tanda dari orang-orang yang  mereka sangat perhatikan.Dalam situasi sosial mereka kadang-kadang tidak responsif.Mereka tidak menikmati kontak fisik dengan orang selain orang-orang yang mereka pilih.Mereka sangat otonom, kritis dan mengambil jarak terhadap orang lain. Preferensi tipe INTJ yang paling penting adalah Intuitif tetapi hal ini jarang ditampakkan. Sebaliknya fungsi berpikir digunakan ketika berhadapan dengan dunia dan manusia. Orang-orang INTJ sangat sensitif terhadap emosi-emosi dan dapat melakukan kesalahan serius ketika berhadapan dengan emosi-emosi itu.'),
(16, 'INFJ', 'Orang bertipe INTJ memusatkan diri pada kemungkinan berpikir dalam kerangka nilai-nilai dan gampang membuat keputusan. Tipe ini juga memiliki kepribadian yang reflektif dapat memahami dan bekerja dengan isu dunia manusia yang kompleks. Mereka memiliki visi kemanusiaan masa lalu, sekarang dan akan datang.Mereka selalu memiliki kemampuan untuk memahami fenomena psikis lebih baik daripada orang lain.Mereka memiliki kemampuan empati yang tinggi dan penuh perhatian pada emosi-emosi, peristiwa-peristiwa penting seseorang sebelum itu sadar akan semua itu.Perhatian yang demikian menyebabkan mereka dapat mengambil alih bentuk perasaan orang yang menderita atau sakit hati orang lain, hingga tingkat yang opaling sulit.Mereka juga dapat membaca kebaikan dan kejahatan orang lain walaupun mereka sendiri sulit menjelaskannya.\r\nMereka memiliki kualitas-kualitas dalam diri yang jarang dimiliki orang lain, namun kualitas itu mereka simpan dan hanya dibagikan kepada orang yang mereka percayai.Mereka senang berada sendirian, sangat konsisten dan menjunjung tinggi integritas.\r\nType INFJ sangat sensitif dalam menangani orang lain dan cenderung bekerja baik kalau pekerjaan itu direncanakan dan diorganisasi secara baik ketika berkontak dengan manusia.Mereka juga senang denga pekerjaan Problem Solving dapat memahami menggunakan sistem-sistem kemanusiaan secara kreatif dan humanistis.Bertipe sangat memperhatikan perasaan-perasaan orang lain, pendengar yang baik dan rela berkonsultasi dan bekerja sama dengan orang lain.Jika ada situasi permusuhan, kondisi kerja yang kurang bersahabat, dan kritik yang tetap pada diri mereka maka mereka cenderung kehilangan kepercayaan diri, menjadi kurang bahagia, tidak bisa bekerja, dan akhirnya bisa sakit fisik.Pasangan yang bertipe ini biasanya sangat memperhatikan ketenangan rumah, khususnya kesehatan fisik, juga ketenangan emosional antar pasangan dengan anak-anak mereka.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `questioner1`
--

CREATE TABLE IF NOT EXISTS `questioner1` (
  `id_questioner` int(11) NOT NULL AUTO_INCREMENT,
  `no1` varchar(11) NOT NULL,
  `no2` varchar(11) NOT NULL,
  `no3` varchar(11) NOT NULL,
  `no4` varchar(11) NOT NULL,
  `no5` varchar(11) NOT NULL,
  `no6` varchar(11) NOT NULL,
  `no7` varchar(11) NOT NULL,
  `no8` varchar(11) NOT NULL,
  `no9` varchar(11) NOT NULL,
  `no10` varchar(11) NOT NULL,
  `no11` varchar(11) NOT NULL,
  `no12` varchar(11) NOT NULL,
  `no13` varchar(11) NOT NULL,
  `no14` varchar(11) NOT NULL,
  `no15` varchar(11) NOT NULL,
  `no16` varchar(11) NOT NULL,
  `no17` varchar(11) NOT NULL,
  `klas_anti_sosial` varchar(6) DEFAULT NULL,
  `date` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  UNIQUE KEY `id_questioner` (`id_questioner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `questioner1`
--

INSERT INTO `questioner1` (`id_questioner`, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `no8`, `no9`, `no10`, `no11`, `no12`, `no13`, `no14`, `no15`, `no16`, `no17`, `klas_anti_sosial`, `date`, `id_pasien`) VALUES
(1, '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '0', 'Sedang', '2015-11-23', 1),
(2, '1', '1', '1', '0', '1', '0', '1', '1', '1', '0', '0', '1', '0', '0', '0', '0', '1', 'Kuat', '2015-11-23', 2),
(3, '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '1', '1', 'Kuat', '2015-11-23', 3),
(4, '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', 'Kuat', '2015-11-23', 4),
(5, '1', '0', '0', '0', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', 'Kuat', '2015-11-23', 5),
(6, '1', '0', '1', '1', '1', '0', '0', '0', '1', '1', '0', '1', '1', '1', '1', '0', '0', 'Kuat', '2015-11-23', 6),
(7, '1', '0', '0', '0', '1', '1', '1', '0', '1', '0', '1', '1', '0', '0', '0', '1', '1', 'Kuat', '2015-11-23', 7),
(8, '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', 'Lemah', '2015-11-23', 8),
(9, '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '1', 'Sedang', '2015-11-23', 9),
(10, '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', 'Sedang', '2015-11-23', 10),
(11, '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '0', 'Kuat', '2015-11-23', 11),
(12, '1', '0', '0', '1', '1', '1', '0', '0', '1', '1', '0', '1', '1', '1', '0', '0', '0', 'Kuat', '2015-11-23', 12),
(13, '0', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '1', 'Sedang', '2015-11-23', 13),
(14, '0', '0', '1', '0', '0', '0', '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', 'Sedang', '2015-11-23', 14),
(15, '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', 'Lemah', '2015-11-23', 15),
(16, '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '0', '0', '0', '1', '0', '1', 'Sedang', '2015-11-23', 16),
(17, '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '1', '0', '0', '1', '0', 'Sedang', '2015-11-23', 17),
(18, '0', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', 'Lemah', '2015-11-23', 18),
(19, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', 'Lemah', '2015-11-23', 19),
(20, '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', 'Lemah', '2015-11-23', 20),
(21, '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'Lemah', '2015-11-23', 21),
(22, '0', '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', 'Lemah', '2015-11-23', 22),
(23, '0', '1', '0', '0', '0', '1', '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', '0', 'Sedang', '2015-11-23', 23),
(24, '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', '1', '1', '1', 'Sedang', '2015-11-23', 24),
(25, '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', 'Kuat', '2015-11-23', 25),
(26, '1', '1', '0', '1', '1', '1', '1', '0', '0', '0', '1', '0', '0', '1', '0', '1', '0', 'Kuat', '2015-11-23', 26),
(27, '1', '0', '1', '1', '0', '0', '0', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', 'Kuat', '2015-11-23', 27),
(28, '0', '1', '1', '1', '1', '1', '0', '0', '1', '0', '0', '1', '1', '1', '1', '1', '1', 'Kuat', '2015-11-23', 28),
(29, '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', 'Sedang', '2015-11-23', 29),
(30, '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0', '0', '0', 'Kuat', '2015-11-23', 30);

-- --------------------------------------------------------

--
-- Table structure for table `questioner2`
--

CREATE TABLE IF NOT EXISTS `questioner2` (
  `id_questioner` int(11) NOT NULL AUTO_INCREMENT,
  `no1` varchar(11) NOT NULL,
  `no2` varchar(11) NOT NULL,
  `no3` varchar(11) NOT NULL,
  `no4` varchar(11) NOT NULL,
  `no5` varchar(11) NOT NULL,
  `no6` varchar(11) NOT NULL,
  `no7` varchar(11) NOT NULL,
  `no8` varchar(11) NOT NULL,
  `no9` varchar(11) NOT NULL,
  `no10` varchar(11) NOT NULL,
  `no11` varchar(11) NOT NULL,
  `no12` varchar(11) NOT NULL,
  `no13` varchar(11) NOT NULL,
  `no14` varchar(11) NOT NULL,
  `no15` varchar(11) NOT NULL,
  `no16` varchar(11) NOT NULL,
  `klas_borderline` varchar(6) DEFAULT NULL,
  `date` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  UNIQUE KEY `id_questioner` (`id_questioner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `questioner2`
--

INSERT INTO `questioner2` (`id_questioner`, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `no8`, `no9`, `no10`, `no11`, `no12`, `no13`, `no14`, `no15`, `no16`, `klas_borderline`, `date`, `id_pasien`) VALUES
(1, '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '1', '1', '1', '0', '1', '1', 'Kuat', '2015-11-23', 1),
(2, '1', '1', '1', '1', '0', '1', '0', '0', '0', '1', '1', '1', '1', '1', '0', '0', 'Kuat', '2015-11-23', 2),
(3, '0', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', 'Kuat', '2015-11-23', 3),
(4, '1', '0', '0', '0', '0', '1', '1', '1', '0', '0', '1', '1', '1', '0', '0', '1', 'Kuat', '2015-11-23', 4),
(5, '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '0', '1', '0', '0', '0', '1', 'Sedang', '2015-11-23', 5),
(6, '0', '0', '0', '1', '1', '1', '0', '0', '0', '1', '0', '1', '1', '0', '0', '0', 'Sedang', '2015-11-23', 6),
(7, '0', '0', '1', '0', '1', '0', '0', '1', '1', '0', '1', '0', '1', '0', '1', '0', 'Sedang', '2015-11-23', 7),
(8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '1', '1', '1', 'Sedang', '2015-11-23', 8),
(9, '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', 'Lemah', '2015-11-23', 9),
(10, '0', '1', '1', '1', '1', '1', '1', '0', '0', '1', '0', '1', '1', '1', '0', '0', 'Kuat', '2015-11-23', 10),
(11, '1', '1', '0', '1', '0', '1', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', 'Kuat', '2015-11-23', 11),
(12, '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '1', '1', '1', '0', 'Kuat', '2015-11-23', 12),
(13, '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '1', '0', '0', 'Sedang', '2015-11-23', 13),
(14, '0', '1', '0', '0', '0', '1', '1', '1', '0', '0', '1', '0', '1', '0', '0', '0', 'Sedang', '2015-11-23', 14),
(15, '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '0', 'Lemah', '2015-11-23', 15),
(16, '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', 'Sedang', '2015-11-23', 16),
(17, '0', '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'Sedang', '2015-11-23', 17),
(18, '0', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '1', '0', 'Lemah', '2015-11-23', 18),
(19, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', 'Lemah', '2015-11-23', 19),
(20, '1', '0', '1', '1', '1', '1', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', 'Kuat', '2015-11-23', 20),
(21, '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '1', '0', '0', '0', 'Lemah', '2015-11-23', 21),
(22, '1', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', 'Sedang', '2015-11-23', 22),
(23, '0', '1', '0', '0', '0', '1', '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', 'Sedang', '2015-11-23', 23),
(24, '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '1', '1', 'Sedang', '2015-11-23', 24),
(25, '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', 'Kuat', '2015-11-23', 25),
(26, '0', '0', '1', '0', '1', '0', '1', '0', '1', '0', '0', '0', '0', '1', '1', '1', 'Sedang', '2015-11-23', 26),
(27, '1', '1', '1', '0', '1', '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', '1', 'Kuat', '2015-11-23', 27),
(28, '0', '1', '1', '0', '1', '1', '0', '0', '0', '1', '0', '1', '0', '1', '0', '1', 'Kuat', '2015-11-23', 28),
(29, '1', '1', '0', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '0', '0', 'Kuat', '2015-11-23', 29),
(30, '1', '1', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '0', '1', '1', '1', 'Kuat', '2015-11-23', 30);

-- --------------------------------------------------------

--
-- Table structure for table `questioner3`
--

CREATE TABLE IF NOT EXISTS `questioner3` (
  `id_questioner` int(11) NOT NULL AUTO_INCREMENT,
  `no1` varchar(11) NOT NULL,
  `no2` varchar(11) NOT NULL,
  `no3` varchar(11) NOT NULL,
  `no4` varchar(11) NOT NULL,
  `no5` varchar(11) NOT NULL,
  `no6` varchar(11) NOT NULL,
  `no7` varchar(11) NOT NULL,
  `no8` varchar(11) NOT NULL,
  `no9` varchar(11) NOT NULL,
  `no10` varchar(11) NOT NULL,
  `no11` varchar(11) NOT NULL,
  `no12` varchar(11) NOT NULL,
  `no13` varchar(11) NOT NULL,
  `no14` varchar(11) NOT NULL,
  `no15` varchar(11) NOT NULL,
  `no16` varchar(11) NOT NULL,
  `no17` varchar(11) NOT NULL,
  `no18` varchar(11) NOT NULL,
  `no19` varchar(11) NOT NULL,
  `no20` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  PRIMARY KEY (`id_questioner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `questioner3`
--

INSERT INTO `questioner3` (`id_questioner`, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `no8`, `no9`, `no10`, `no11`, `no12`, `no13`, `no14`, `no15`, `no16`, `no17`, `no18`, `no19`, `no20`, `date`, `id_pasien`) VALUES
(8, 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'a', 'a', 'b', 'b', 'a', 'a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2015-10-27', 1),
(10, 'a', 'b', 'a', 'b', 'b', 'b', 'a', 'a', 'a', 'a', 'a', 'b', 'b', 'b', 'a', 'a', 'a', 'b', 'b', 'b', '2015-11-16', 1),
(11, 'b', 'a', 'a', 'a', 'a', 'b', 'a', 'b', 'a', 'b', 'a', 'b', 'a', 'a', 'b', 'a', 'b', 'b', 'a', 'a', '2015-11-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('1', 'ler'),
('2', '2'),
('a5', 'a5'),
('a7', 'a7'),
('admin', 'admin'),
('agus', 'agus'),
('asu', 'jancuk'),
('b', 'b'),
('bonek', 'bon'),
('bono', 'bono'),
('dia', 'dia'),
('dsadasd', '1234'),
('i', 'i'),
('jika', 'jika'),
('joni', 'joni'),
('jono', 'jono'),
('k', 'k'),
('kamu', 'kamu'),
('l', 'l'),
('m', 'm'),
('o', 'o'),
('p', 'p'),
('reda', '1234'),
('robot', 'robot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
