-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 10:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padikita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'Ilham Bahtiar', 'ilham@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal_artikel` text NOT NULL,
  `gambar` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `tanggal_artikel`, `gambar`, `isi_artikel`) VALUES
(1, 'Halo Guys', '2018-11-26', '', '<p>ajdnalsndkadklansdj;asndcjw aerhklhh ljh</p>'),
(2, 'Penjelasan Padi', '2018-11-26', '', '<p>Padi (bahasa latin: Oryza sativa L.) merupakan salah satu tanaman budidaya terpenting dalam peradaban. Meskipun terutama mengacu pada jenis tanaman budidaya, padi juga digunakan untuk mengacu pada beberapa jenis dari marga (genus) yang sama, yang biasa disebut sebagai padi liar. Padi diduga berasal dari India atau Indocina dan masuk ke Indonesia dibawa oleh nenek moyang yang migrasi dari daratan Asia sekitar 1500 SM.&nbsp;</p><p>Produksi padi dunia menempati urutan ketiga dari semua serealia, setelah jagung dan gandum. Namun, padi merupakan sumber karbohidrat utama bagi mayoritas penduduk dunia. Sebagai negara agraris masyarakat Indonesia harus belajar cara budidaya tanaman padi yang baik dan benar. Karena sebagian besar masyarakat Indonesia mengkonsumsi nasi sebagai makanan pokok. Kandungan karbohidrat yang tinggi dan rasa yang enak membuat beras dipilih sebagai salah satu makanan favorit bagi masyarakat Indonesia. Oleh karena itu kebutuhan beras di Indonesia sangat besar sekali, sehingga pemerintah sampai mengimpor beras dari luar negeri untuk memenuhi kebutuhan dalam negeri.&nbsp;</p><p>Sebagai negara agraris Indonesia seharusnya bisa menghasilkan beras sendiri dari budidaya tanaman padi yang bisa tumbuh subuh di Indonesia. Maka dari itu peluang untuk membudidayakan padi sangat menjanjikan, apalagi dengan pertumbuhan penduduk yang sangat pesat pasti akan berpengaruh terhadap permintaan beras.</p><p>Biasanya banyak orang dari pedesaan memilih untuk merantau ke kota besar untuk menjadi kuli daripada membudidayakan tanaman padi.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `hargapadi`
--

CREATE TABLE `hargapadi` (
  `id_harga` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `hargapadi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hargapadi`
--

INSERT INTO `hargapadi` (`id_harga`, `kota`, `hargapadi`) VALUES
(1, 'Jember', 10000),
(3, 'Silo', 8000),
(4, 'Banyuwangi', 10000),
(5, 'Bondowoso', 4000),
(6, 'Lumajang', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `ciri_penyakit` varchar(1000) NOT NULL,
  `hasil_penyakit` varchar(1000) NOT NULL,
  `cara_atasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `ciri_penyakit`, `hasil_penyakit`, `cara_atasi`) VALUES
(1, 'daun melipat dan menggulung', 'Penyakit hawar daun ini merupakan bakteri yang tersebar luas dan dapat menurunkan hasil panen yang cukup signifikan. Penyakit ini menyerang saat kondisi musim hujan atau musim kemarau yang basah, terutama pada lahan sawah yang selalu tergenang dan kandungan pupuk N tinggi.', 'Pengendalian penyakit hawa daun bisa dengan pengaturan air yang cukup. Hindari penggenangan air yang terus menerus maisalkan 1 hari digenangi dan 3 hari dikeringkan. Selain itu bisa dengan menggunakan pola tanam yang mempunyai sirkulasi udara yang lebih baik, seperti jajar legowo.'),
(2, 'daun bercak', 'Penyakit bercak daun disebabkan oleh serangan jamur Helmintosporium oryzae. Jamur ini menyerang tanaman padi dari biji yang baru kecambah, pelepah daun, malai, dan buah yang baru tumbuh. Serangan jamur ini mempunyai gejala seperti biji padi busuk saat berkecambah, dan kemudian mati, tanaman padi dewasa busuk dan kering, dan biji bercak-bercak tetapi tetap berisi.', 'Pengendaliannya bisa dengan mencegah dengan perendaman benih menggunakan air hangat setelah dengan air dingin untuk mencegah tumbuhnya jamur.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `jenis_kelamin`, `nohp`, `alamat`, `kota`, `email`, `password`) VALUES
(1, 'Moch.Lembar Adjie B.', 'Perempuan', '0824174182', 'Kencong', 'Jember', 'adjiebramantya.ab@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `hargapadi`
--
ALTER TABLE `hargapadi`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hargapadi`
--
ALTER TABLE `hargapadi`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
