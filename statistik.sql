-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 01:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(1, 'Perdata'),
(2, 'Pidana');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `jan_masuk` varchar(10) NOT NULL,
  `jan_putus` varchar(10) NOT NULL,
  `jan_sisa` varchar(10) NOT NULL,
  `feb_masuk` varchar(10) NOT NULL,
  `feb_putus` varchar(10) NOT NULL,
  `feb_sisa` varchar(10) NOT NULL,
  `mar_masuk` varchar(10) NOT NULL,
  `mar_putus` varchar(10) NOT NULL,
  `mar_sisa` varchar(10) NOT NULL,
  `apr_masuk` varchar(10) NOT NULL,
  `apr_putus` varchar(10) NOT NULL,
  `apr_sisa` varchar(10) NOT NULL,
  `mei_masuk` varchar(10) NOT NULL,
  `mei_putus` varchar(10) NOT NULL,
  `mei_sisa` varchar(10) NOT NULL,
  `jun_masuk` varchar(10) NOT NULL,
  `jun_putus` varchar(10) NOT NULL,
  `jun_sisa` varchar(10) NOT NULL,
  `jul_masuk` varchar(10) NOT NULL,
  `jul_putus` varchar(10) NOT NULL,
  `jul_sisa` varchar(10) NOT NULL,
  `agt_masuk` varchar(10) NOT NULL,
  `agt_putus` varchar(10) NOT NULL,
  `agt_sisa` varchar(10) NOT NULL,
  `sep_masuk` varchar(10) NOT NULL,
  `sep_putus` varchar(10) NOT NULL,
  `sep_sisa` varchar(10) NOT NULL,
  `okt_masuk` varchar(10) NOT NULL,
  `okt_putus` varchar(10) NOT NULL,
  `okt_sisa` varchar(10) NOT NULL,
  `nov_masuk` varchar(10) NOT NULL,
  `nov_putus` varchar(10) NOT NULL,
  `nov_sisa` varchar(10) NOT NULL,
  `des_masuk` varchar(10) NOT NULL,
  `des_putus` varchar(10) NOT NULL,
  `des_sisa` varchar(10) NOT NULL,
  `tahun_id` int(11) NOT NULL,
  `perkara_id` int(11) NOT NULL,
  `bagian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `jan_masuk`, `jan_putus`, `jan_sisa`, `feb_masuk`, `feb_putus`, `feb_sisa`, `mar_masuk`, `mar_putus`, `mar_sisa`, `apr_masuk`, `apr_putus`, `apr_sisa`, `mei_masuk`, `mei_putus`, `mei_sisa`, `jun_masuk`, `jun_putus`, `jun_sisa`, `jul_masuk`, `jul_putus`, `jul_sisa`, `agt_masuk`, `agt_putus`, `agt_sisa`, `sep_masuk`, `sep_putus`, `sep_sisa`, `okt_masuk`, `okt_putus`, `okt_sisa`, `nov_masuk`, `nov_putus`, `nov_sisa`, `des_masuk`, `des_putus`, `des_sisa`, `tahun_id`, `perkara_id`, `bagian_id`) VALUES
(1, '5', '1', '4', '5', '2', '3', '5', '3', '2', '5', '4', '1', '5', '1', '4', '5', '2', '3', '5', '3', '2', '5', '4', '1', '5', '1', '4', '5', '2', '3', '5', '3', '2', '5', '4', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'ketua', 'ketua'),
(2, 'ct', 'todar');

-- --------------------------------------------------------

--
-- Table structure for table `perkara`
--

CREATE TABLE `perkara` (
  `id_perkara` int(11) NOT NULL,
  `nama_perkara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perkara`
--

INSERT INTO `perkara` (`id_perkara`, `nama_perkara`) VALUES
(1, 'Gugatan'),
(2, 'Pidana Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `sem1_masuk` varchar(10) NOT NULL,
  `sem1_putus` varchar(10) NOT NULL,
  `sem1_sisa` varchar(10) NOT NULL,
  `sem2_masuk` varchar(10) NOT NULL,
  `sem2_putus` varchar(10) NOT NULL,
  `sem2_sisa` varchar(10) NOT NULL,
  `tahun_id` int(11) NOT NULL,
  `perkara_id` int(11) NOT NULL,
  `bagian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `sem1_masuk`, `sem1_putus`, `sem1_sisa`, `sem2_masuk`, `sem2_putus`, `sem2_sisa`, `tahun_id`, `perkara_id`, `bagian_id`) VALUES
(1, '30', '13', '17', '30', '17', '13', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `masuk_tahun` varchar(10) NOT NULL,
  `putus_tahun` varchar(10) NOT NULL,
  `sisa_tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`, `masuk_tahun`, `putus_tahun`, `sisa_tahun`) VALUES
(1, '2010', '60', '30', '30'),
(2, '2010', '84', '42', '42');

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id_triwulan` int(11) NOT NULL,
  `tri1_masuk` varchar(10) NOT NULL,
  `tri1_putus` varchar(10) NOT NULL,
  `tri1_sisa` varchar(10) NOT NULL,
  `tri2_masuk` varchar(10) NOT NULL,
  `tri2_putus` varchar(10) NOT NULL,
  `tri2_sisa` varchar(10) NOT NULL,
  `tri3_masuk` varchar(10) NOT NULL,
  `tri3_putus` varchar(10) NOT NULL,
  `tri3_sisa` varchar(10) NOT NULL,
  `tri4_masuk` varchar(10) NOT NULL,
  `tri4_putus` varchar(10) NOT NULL,
  `tri4_sisa` varchar(10) NOT NULL,
  `tahun_id` int(11) NOT NULL,
  `perkara_id` int(11) NOT NULL,
  `bagian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triwulan`
--

INSERT INTO `triwulan` (`id_triwulan`, `tri1_masuk`, `tri1_putus`, `tri1_sisa`, `tri2_masuk`, `tri2_putus`, `tri2_sisa`, `tri3_masuk`, `tri3_putus`, `tri3_sisa`, `tri4_masuk`, `tri4_putus`, `tri4_sisa`, `tahun_id`, `perkara_id`, `bagian_id`) VALUES
(1, '15', '6', '9', '15', '7', '8', '15', '8', '7', '15', '9', '6', 1, 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_bulan`
-- (See below for the actual view)
--
CREATE TABLE `v_bulan` (
`tahun` varchar(10)
,`id_tahun` int(11)
,`masuk_tahun` varchar(10)
,`putus_tahun` varchar(10)
,`sisa_tahun` varchar(10)
,`jan_masuk` varchar(10)
,`jan_putus` varchar(10)
,`jan_sisa` varchar(10)
,`feb_masuk` varchar(10)
,`feb_putus` varchar(10)
,`feb_sisa` varchar(10)
,`mar_masuk` varchar(10)
,`mar_putus` varchar(10)
,`mar_sisa` varchar(10)
,`apr_masuk` varchar(10)
,`apr_putus` varchar(10)
,`apr_sisa` varchar(10)
,`mei_masuk` varchar(10)
,`mei_putus` varchar(10)
,`mei_sisa` varchar(10)
,`jun_masuk` varchar(10)
,`jun_putus` varchar(10)
,`jun_sisa` varchar(10)
,`jul_masuk` varchar(10)
,`jul_putus` varchar(10)
,`jul_sisa` varchar(10)
,`agt_masuk` varchar(10)
,`agt_putus` varchar(10)
,`agt_sisa` varchar(10)
,`sep_masuk` varchar(10)
,`sep_putus` varchar(10)
,`sep_sisa` varchar(10)
,`okt_masuk` varchar(10)
,`okt_putus` varchar(10)
,`okt_sisa` varchar(10)
,`nov_masuk` varchar(10)
,`nov_putus` varchar(10)
,`nov_sisa` varchar(10)
,`des_masuk` varchar(10)
,`des_putus` varchar(10)
,`des_sisa` varchar(10)
,`id_bagian` int(11)
,`nama_bagian` varchar(50)
,`id_perkara` int(11)
,`nama_perkara` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_minutasi`
-- (See below for the actual view)
--
CREATE TABLE `v_minutasi` (
`nama_bagian` varchar(50)
,`nama_perkara` varchar(50)
,`id_perkara` int(11)
,`jan_masuk` varchar(10)
,`jan_putus` varchar(10)
,`jan_sisa` varchar(10)
,`feb_masuk` varchar(10)
,`feb_putus` varchar(10)
,`feb_sisa` varchar(10)
,`mar_masuk` varchar(10)
,`mar_putus` varchar(10)
,`mar_sisa` varchar(10)
,`apr_masuk` varchar(10)
,`apr_putus` varchar(10)
,`apr_sisa` varchar(10)
,`mei_masuk` varchar(10)
,`mei_putus` varchar(10)
,`mei_sisa` varchar(10)
,`jun_masuk` varchar(10)
,`jun_putus` varchar(10)
,`jun_sisa` varchar(10)
,`jul_masuk` varchar(10)
,`jul_putus` varchar(10)
,`jul_sisa` varchar(10)
,`agt_masuk` varchar(10)
,`agt_putus` varchar(10)
,`agt_sisa` varchar(10)
,`sep_masuk` varchar(10)
,`sep_putus` varchar(10)
,`sep_sisa` varchar(10)
,`okt_masuk` varchar(10)
,`okt_putus` varchar(10)
,`okt_sisa` varchar(10)
,`nov_masuk` varchar(10)
,`nov_putus` varchar(10)
,`nov_sisa` varchar(10)
,`des_masuk` varchar(10)
,`des_putus` varchar(10)
,`des_sisa` varchar(10)
,`id_bagian` int(11)
,`tahun` varchar(10)
,`masuk_tahun` varchar(10)
,`putus_tahun` varchar(10)
,`sisa_tahun` varchar(10)
,`id_tahun` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_semester`
-- (See below for the actual view)
--
CREATE TABLE `v_semester` (
`tahun` varchar(10)
,`masuk_tahun` varchar(10)
,`putus_tahun` varchar(10)
,`sisa_tahun` varchar(10)
,`id_tahun` int(11)
,`sem1_masuk` varchar(10)
,`sem1_putus` varchar(10)
,`sem1_sisa` varchar(10)
,`sem2_masuk` varchar(10)
,`sem2_putus` varchar(10)
,`sem2_sisa` varchar(10)
,`nama_bagian` varchar(50)
,`id_bagian` int(11)
,`nama_perkara` varchar(50)
,`id_perkara` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_triwulan`
-- (See below for the actual view)
--
CREATE TABLE `v_triwulan` (
`tahun` varchar(10)
,`masuk_tahun` varchar(10)
,`putus_tahun` varchar(10)
,`sisa_tahun` varchar(10)
,`id_tahun` int(11)
,`tri1_masuk` varchar(10)
,`tri1_putus` varchar(10)
,`tri1_sisa` varchar(10)
,`tri2_masuk` varchar(10)
,`tri2_putus` varchar(10)
,`tri2_sisa` varchar(10)
,`tri3_masuk` varchar(10)
,`tri3_putus` varchar(10)
,`tri3_sisa` varchar(10)
,`tri4_masuk` varchar(10)
,`tri4_putus` varchar(10)
,`tri4_sisa` varchar(10)
,`id_perkara` int(11)
,`nama_perkara` varchar(50)
,`id_bagian` int(11)
,`nama_bagian` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_bulan`
--
DROP TABLE IF EXISTS `v_bulan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_bulan`  AS  select `tahun`.`tahun` AS `tahun`,`tahun`.`id_tahun` AS `id_tahun`,`tahun`.`masuk_tahun` AS `masuk_tahun`,`tahun`.`putus_tahun` AS `putus_tahun`,`tahun`.`sisa_tahun` AS `sisa_tahun`,`bulan`.`jan_masuk` AS `jan_masuk`,`bulan`.`jan_putus` AS `jan_putus`,`bulan`.`jan_sisa` AS `jan_sisa`,`bulan`.`feb_masuk` AS `feb_masuk`,`bulan`.`feb_putus` AS `feb_putus`,`bulan`.`feb_sisa` AS `feb_sisa`,`bulan`.`mar_masuk` AS `mar_masuk`,`bulan`.`mar_putus` AS `mar_putus`,`bulan`.`mar_sisa` AS `mar_sisa`,`bulan`.`apr_masuk` AS `apr_masuk`,`bulan`.`apr_putus` AS `apr_putus`,`bulan`.`apr_sisa` AS `apr_sisa`,`bulan`.`mei_masuk` AS `mei_masuk`,`bulan`.`mei_putus` AS `mei_putus`,`bulan`.`mei_sisa` AS `mei_sisa`,`bulan`.`jun_masuk` AS `jun_masuk`,`bulan`.`jun_putus` AS `jun_putus`,`bulan`.`jun_sisa` AS `jun_sisa`,`bulan`.`jul_masuk` AS `jul_masuk`,`bulan`.`jul_putus` AS `jul_putus`,`bulan`.`jul_sisa` AS `jul_sisa`,`bulan`.`agt_masuk` AS `agt_masuk`,`bulan`.`agt_putus` AS `agt_putus`,`bulan`.`agt_sisa` AS `agt_sisa`,`bulan`.`sep_masuk` AS `sep_masuk`,`bulan`.`sep_putus` AS `sep_putus`,`bulan`.`sep_sisa` AS `sep_sisa`,`bulan`.`okt_masuk` AS `okt_masuk`,`bulan`.`okt_putus` AS `okt_putus`,`bulan`.`okt_sisa` AS `okt_sisa`,`bulan`.`nov_masuk` AS `nov_masuk`,`bulan`.`nov_putus` AS `nov_putus`,`bulan`.`nov_sisa` AS `nov_sisa`,`bulan`.`des_masuk` AS `des_masuk`,`bulan`.`des_putus` AS `des_putus`,`bulan`.`des_sisa` AS `des_sisa`,`bagian`.`id_bagian` AS `id_bagian`,`bagian`.`nama_bagian` AS `nama_bagian`,`perkara`.`id_perkara` AS `id_perkara`,`perkara`.`nama_perkara` AS `nama_perkara` from (((`tahun` join `bulan` on((`tahun`.`id_tahun` = `bulan`.`tahun_id`))) join `bagian` on((`bagian`.`id_bagian` = `bulan`.`bagian_id`))) join `perkara` on((`perkara`.`id_perkara` = `bulan`.`perkara_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_minutasi`
--
DROP TABLE IF EXISTS `v_minutasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_minutasi`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`perkara`.`nama_perkara` AS `nama_perkara`,`perkara`.`id_perkara` AS `id_perkara`,`bulan`.`jan_masuk` AS `jan_masuk`,`bulan`.`jan_putus` AS `jan_putus`,`bulan`.`jan_sisa` AS `jan_sisa`,`bulan`.`feb_masuk` AS `feb_masuk`,`bulan`.`feb_putus` AS `feb_putus`,`bulan`.`feb_sisa` AS `feb_sisa`,`bulan`.`mar_masuk` AS `mar_masuk`,`bulan`.`mar_putus` AS `mar_putus`,`bulan`.`mar_sisa` AS `mar_sisa`,`bulan`.`apr_masuk` AS `apr_masuk`,`bulan`.`apr_putus` AS `apr_putus`,`bulan`.`apr_sisa` AS `apr_sisa`,`bulan`.`mei_masuk` AS `mei_masuk`,`bulan`.`mei_putus` AS `mei_putus`,`bulan`.`mei_sisa` AS `mei_sisa`,`bulan`.`jun_masuk` AS `jun_masuk`,`bulan`.`jun_putus` AS `jun_putus`,`bulan`.`jun_sisa` AS `jun_sisa`,`bulan`.`jul_masuk` AS `jul_masuk`,`bulan`.`jul_putus` AS `jul_putus`,`bulan`.`jul_sisa` AS `jul_sisa`,`bulan`.`agt_masuk` AS `agt_masuk`,`bulan`.`agt_putus` AS `agt_putus`,`bulan`.`agt_sisa` AS `agt_sisa`,`bulan`.`sep_masuk` AS `sep_masuk`,`bulan`.`sep_putus` AS `sep_putus`,`bulan`.`sep_sisa` AS `sep_sisa`,`bulan`.`okt_masuk` AS `okt_masuk`,`bulan`.`okt_putus` AS `okt_putus`,`bulan`.`okt_sisa` AS `okt_sisa`,`bulan`.`nov_masuk` AS `nov_masuk`,`bulan`.`nov_putus` AS `nov_putus`,`bulan`.`nov_sisa` AS `nov_sisa`,`bulan`.`des_masuk` AS `des_masuk`,`bulan`.`des_putus` AS `des_putus`,`bulan`.`des_sisa` AS `des_sisa`,`bagian`.`id_bagian` AS `id_bagian`,`tahun`.`tahun` AS `tahun`,`tahun`.`masuk_tahun` AS `masuk_tahun`,`tahun`.`putus_tahun` AS `putus_tahun`,`tahun`.`sisa_tahun` AS `sisa_tahun`,`tahun`.`id_tahun` AS `id_tahun` from (((`bulan` join `bagian` on((`bagian`.`id_bagian` = `bulan`.`bagian_id`))) join `perkara` on((`perkara`.`id_perkara` = `bulan`.`perkara_id`))) join `tahun` on((`tahun`.`id_tahun` = `bulan`.`tahun_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_semester`
--
DROP TABLE IF EXISTS `v_semester`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_semester`  AS  select `tahun`.`tahun` AS `tahun`,`tahun`.`masuk_tahun` AS `masuk_tahun`,`tahun`.`putus_tahun` AS `putus_tahun`,`tahun`.`sisa_tahun` AS `sisa_tahun`,`tahun`.`id_tahun` AS `id_tahun`,`semester`.`sem1_masuk` AS `sem1_masuk`,`semester`.`sem1_putus` AS `sem1_putus`,`semester`.`sem1_sisa` AS `sem1_sisa`,`semester`.`sem2_masuk` AS `sem2_masuk`,`semester`.`sem2_putus` AS `sem2_putus`,`semester`.`sem2_sisa` AS `sem2_sisa`,`bagian`.`nama_bagian` AS `nama_bagian`,`bagian`.`id_bagian` AS `id_bagian`,`perkara`.`nama_perkara` AS `nama_perkara`,`perkara`.`id_perkara` AS `id_perkara` from (((`tahun` join `semester` on((`tahun`.`id_tahun` = `semester`.`tahun_id`))) join `bagian` on((`bagian`.`id_bagian` = `semester`.`bagian_id`))) join `perkara` on((`perkara`.`id_perkara` = `semester`.`perkara_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_triwulan`
--
DROP TABLE IF EXISTS `v_triwulan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_triwulan`  AS  select `tahun`.`tahun` AS `tahun`,`tahun`.`masuk_tahun` AS `masuk_tahun`,`tahun`.`putus_tahun` AS `putus_tahun`,`tahun`.`sisa_tahun` AS `sisa_tahun`,`tahun`.`id_tahun` AS `id_tahun`,`triwulan`.`tri1_masuk` AS `tri1_masuk`,`triwulan`.`tri1_putus` AS `tri1_putus`,`triwulan`.`tri1_sisa` AS `tri1_sisa`,`triwulan`.`tri2_masuk` AS `tri2_masuk`,`triwulan`.`tri2_putus` AS `tri2_putus`,`triwulan`.`tri2_sisa` AS `tri2_sisa`,`triwulan`.`tri3_masuk` AS `tri3_masuk`,`triwulan`.`tri3_putus` AS `tri3_putus`,`triwulan`.`tri3_sisa` AS `tri3_sisa`,`triwulan`.`tri4_masuk` AS `tri4_masuk`,`triwulan`.`tri4_putus` AS `tri4_putus`,`triwulan`.`tri4_sisa` AS `tri4_sisa`,`perkara`.`id_perkara` AS `id_perkara`,`perkara`.`nama_perkara` AS `nama_perkara`,`bagian`.`id_bagian` AS `id_bagian`,`bagian`.`nama_bagian` AS `nama_bagian` from (((`tahun` join `triwulan` on((`tahun`.`id_tahun` = `triwulan`.`tahun_id`))) join `perkara` on((`perkara`.`id_perkara` = `triwulan`.`perkara_id`))) join `bagian` on((`bagian`.`id_bagian` = `triwulan`.`bagian_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `perkara`
--
ALTER TABLE `perkara`
  ADD PRIMARY KEY (`id_perkara`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id_triwulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perkara`
--
ALTER TABLE `perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id_triwulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
