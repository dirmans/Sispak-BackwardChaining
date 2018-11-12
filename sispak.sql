-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 11:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kd_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `poin_gejala` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kd_gejala`, `nama_gejala`, `poin_gejala`) VALUES
('G001', 'Demam tinggi', 10),
('G002', 'Kondisi lemah', 4),
('G003', 'Diare', 7),
('G004', 'Kesulitan Bernapas', 4),
('G005', 'Pendarahan berwarna kehitaman yg keluar dari luban', 8),
('G006', 'Keluar air liur terus-menerus', 7),
('G007', 'Nafsu makan berkurang', 9),
('G008', 'Sering mendengkur', 10),
('G009', 'Selaput lendir kemerahan', 5),
('G010', 'Kurus dan bulu rontok', 10),
('G011', 'Selaput lendir menguning', 7),
('G012', 'Jalan sempoyongan dan berputar-putar', 6),
('G013', 'Keluar cairan dari hidung dan mata', 9),
('G014', 'Moncong kering dan pecah-pecah', 8),
('G015', 'Kornea mata keruh dan keputihan', 10),
('G016', 'Menggosok-gosokan badan kedinding', 10),
('G017', 'Kerontokan bulu	', 8),
('G018', 'Kerak pada permukaan kulit', 7),
('G019', 'Lepuhan bernanah pada kulit', 3),
('G020', 'Penebalan pada kulit', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `kd_pengetahuan` varchar(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`kd_pengetahuan`, `kd_penyakit`, `kd_gejala`, `pertanyaan`) VALUES
('PG001', 'P001', 'G001', 'Apakah sapi mengalami Apakah sapi mengalami Apakah sapi mengalami Kondisi lemah ? ? ?'),
('PG002', 'P001', 'G002', 'Apakah sapi mengalami Diare ?'),
('PG003', 'P001', 'G003', 'Apakah sapi mengalami Kesulitan Bernapas ?'),
('PG004', 'P001', 'G004', 'Apakah sapi mengalami Pendarahan berwarna kehitaman yg keluar dari luban ?'),
('PG005', 'P001', 'G005', 'Selesai'),
('PG006', 'P002', 'G004', 'Apakah sapi mengalami Keluar air liur terus-menerus ?'),
('PG007', 'P002', 'G006', 'Apakah sapi mengalami Nafsu makan berkurang ?'),
('PG008', 'P002', 'G007', 'Apakah sapi mengalami Sering mendengkur ?'),
('PG009', 'P002', 'G008', 'Apakah sapi mengalami Selaput lendir kemerahan ?'),
('PG010', 'P002', 'G009', 'Selesai'),
('PG011', 'P003', 'G001', 'Apakah sapi mengalami Nafsu makan berkurang ?'),
('PG012', 'P003', 'G007', 'Apakah sapi mengalami Kurus dan bulu rontok ?'),
('PG013', 'P003', 'G010', 'Apakah sapi mengalami Selaput lendir menguning ?'),
('PG014', 'P003', 'G011', 'Apakah sapi mengalami Jalan sempoyongan dan berputar-putar ?'),
('PG015', 'P003', 'G012', 'Selesai'),
('PG016', 'P004', 'G003', 'Apakah sapi mengalami Nafsu makan berkurang ?'),
('PG017', 'P004', 'G007', 'Apakah sapi mengalami Keluar cairan dari hidung dan mata ?'),
('PG018', 'P004', 'G013', 'Apakah sapi mengalami Moncong kering dan pecah-pecah ?'),
('PG019', 'P004', 'G014', 'Apakah sapi mengalami Kornea mata keruh dan keputihan ?'),
('PG020', 'P004', 'G015', 'Selesai'),
('PG021', 'P005', 'G016', 'Apakah sapi mengalami Kerontokan bulu	 ?'),
('PG022', 'P005', 'G017', 'Apakah sapi mengalami Kerak pada permukaan kulit ?'),
('PG023', 'P005', 'G018', 'Apakah sapi mengalami Lepuhan bernanah pada kulit ?'),
('PG024', 'P005', 'G019', 'Apakah sapi mengalami Penebalan pada kulit ?'),
('PG025', 'P005', 'G020', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Dirman', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kd_penyakit`, `nama_penyakit`, `penyebab`, `solusi`) VALUES
('P001', 'Antrax (Radang Limpa)', 'Penyakit ini disebabkan oleh bakteri Bacillus anthracis. Penyakit ini bersifat menular baik ke hewan ataupun manusia, faktor yang mempercepat penularan penyakit ini adalah musim panas, kekurangan makanan dan keletihan. Penularan dari hewan ke hewan terjadi melalui makanan dan minuman yang tercemar bakteri antrax. Sedangkan, penularan antrax ke manusia umumnya terjadi secara langsung yaitu kontak dengan hewan yang terkena antrax.', 'Pencegahan untuk mengurangi dan mencegah penyebarluasan penyakit antrax dapat dilakukan dengan :\r\n•	Penaganan yang ketat (tindakan karantina) dari daerah tertular ke daerah bebas\r\n•	Vaksinasi dengan vaksin spora avirulen secara teratur setiap tahun didaerah wabah\r\n•	Isolasi hewan dan tempat yang diduga terjangkit penyakit \r\n•	Hindari memberian pakan rumput tercampur tanah\r\n•	Desinfeksi kandang dan lingkungan sekitar kandang secara berkala.\r\nPengobatan hanya dapat dilakukan untuk penyakit pada tahap awal dengan pemberian antibiotika berspektrum luas seperti; Penisillin G, Oxytetracyclin atau Streptomycin.'),
('P002', 'Septicaemia Epizootica (SE/Ngorok)', 'Penyakit ini disebabkan oleh bakteri Pasteurella Multocida Serotipe 6B dan 6E. Faktor pemicu terjadinya infeksi berupa; cekaman atau stress seperti terlalu sering dipekerjakan, pemberian pakan yang berkualitas rendah, dan kandang yang penuh dan berdesakan. Penyakit ini juga bersifat menular ke hewan yang sehat melalui makanan dan minuman serta ekskreta hewan penderita.', 'Pencegahan untuk mengurangi dan mencegah penyebarluasan penyakit Septicaemia Epizootica dapat dilakukan dengan :\r\n•	Pada  daerah  bebas  SE  dilakukan  karantina  yang  ketat terhadap pemasukan hewan ternak ke daerah tersebut.\r\n•	Bagi daerah tertular dilakukan vaksinasi terhadap ternak yang sehat setidaknya setahun sekali.\r\n•	Bangkai hewan yang sakit dibakar atau dikubur\r\n•	Bersihkan kandang dengan disinfektan.\r\nPengobatan dapat dilakukan dengan diberikan antibiotika Oxytetracyclin, Streptomycin atau Preparat sulfa (sulfamezathine).'),
('P003', 'Surra (Mubeng/Sempoyongan)', 'Penyakit surra merupakan penyakit yang disebabkan oleh parasit Protozoa Trypanosoma Evansi. Faktor pemicu terjadinya infeksi berupa; cekaman misalnya stress, kurang pakan, kelehan, kedinginan dan sebagainya. Penyakit ini dapat menular melalui perantara lalat penghisap darah seperti Tabanidae, Stomoxys, Lyperosia, Charyops, dan Hematobia serta jenis Arthropoda yang lain seperti kutu.', 'Pencegahan untuk mengurangi dan mencegah penyebarluasan penyakit Surra dapat dilakukan dengan :\r\n•	Pembasmian serangga penghisap darah dengan tindakan penyemprotan kandang dan ternak dengan Asuntol atau insektisida lain yang aman bagi ternak\r\n•	Pembersihan tempat yang basah dan rimbun\r\n•	Pengeringan  tanah  dan  penertiban  pembuangan  kotoran dan sampah sisa makanan ternak\r\n•	Pemotongan  hewan  yang  sakit  di  malam  hari  untuk menghindari lalat.\r\n\r\nUntuk mengatasi penyakit Surra obat yang paling banyak digunakan adalah Suramin (Naganol, Bayer) dan Isometamidium chiorida (Trypamldium, specia).'),
('P004', 'Malignant Catarrhal Fever (MCF/Ingusan)', 'Penyakit ingusan adalah penyakit yand sibebabkan oleh virus yang termasuk kelompok Gammaherperviruses seperti Rhadinovirus Genus. Virus tersebut sering ditemukan di kambing atau domba, oleh karena itu sapi yang berdekatan dengan kambing atau domba yang tejangkit virus tersebut dapat terinfeksi juga.', 'Pencegahan untuk mengurangi dan mencegah penyebarluasan penyakit Ingusan dapat dilakukan dengan :\r\n•	Hindari  penggembalaan  secara  bersama  antara  sapi, kerbau dan domba pada satu lokasi\r\n•	Hindarkan pemasukan domba dari tempat lain karena domba adalah pembawa penyakit/carrier\r\n•	Meningkatkan  sanitasi  lingkungan  dan  tata  laksana pemeliharaan ternak.\r\nKarena penyebab penyakit Ingusan (Malignant Catarrhal Fever) adalah virus jadi tidak ada obat yang dapat menyembuhkan yang bisa dilakukan adalah pemberian obat yang tujuannya untuk menurunkan gejala klinis semata sesuai anjuran dokter, karena sifat penyakit ini dapat sembuh dengan sendirinya setelah melewati masa gejala klinis.'),
('P005', 'Scabies (Budug/Kudis)', 'Penyakit ini disebabkan oleh tungau Sarcoptes Scabei, Chorioptes Bovis serta kurangnya kebersihan kandang dan hewan. Penyakit ini bersifat zoonosis (menular dari hewan ke manusia). Penularan penyakit ini terjadi melalui kontak langsung antara hewan sakit dengan sehat atau melalui peralatan kandang yang tercemar oleh tungau.', 'Pencegahan untuk mengurangi dan mencegah penyebarluasan penyakit Scabies dapat dilakukan dengan :\r\n•	Letakkan kandang jauh dari tempat tinggal\r\n•	Sanitasi dan ventilasi kandang yang baik\r\n•	Pisahkan hewan sakit dengan hewan sehat\r\n•	Menghindari kontak langsung dengan ternak sakit.\r\n\r\nPengobatan yang dapat dilakukan dengan cara menggunakan minyak kelapa yang dicampur serbuk belerang dan kunyit lalu digosokan pada area kulit yang terinfeksi.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_hasil`
--

CREATE TABLE `tmp_hasil` (
  `id` int(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `poin_gejala` double NOT NULL,
  `poin_user` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_hasil`
--

INSERT INTO `tmp_hasil` (`id`, `kd_penyakit`, `kd_gejala`, `poin_gejala`, `poin_user`) VALUES
(51, 'P005', 'G016', 10, 0),
(52, 'P005', 'G017', 0, 0),
(53, 'P005', 'G018', 7, 0),
(54, 'P005', 'G019', 0, 0),
(55, 'P005', 'G020', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_relasi`
--

CREATE TABLE `tmp_relasi` (
  `id` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_relasi`
--

INSERT INTO `tmp_relasi` (`id`, `kd_penyakit`, `kd_gejala`) VALUES
(69, 'P005', 'G016'),
(70, 'P005', 'G017'),
(71, 'P005', 'G018'),
(72, 'P005', 'G019'),
(73, 'P005', 'G020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`kd_pengetahuan`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_relasi`
--
ALTER TABLE `tmp_relasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tmp_relasi`
--
ALTER TABLE `tmp_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
