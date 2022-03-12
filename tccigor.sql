-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Jan-2019 às 23:41
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tccigor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano`
--

DROP TABLE IF EXISTS `ano`;
CREATE TABLE IF NOT EXISTS `ano` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ano` varchar(255) DEFAULT NULL,
  `janeiro` varchar(255) DEFAULT NULL,
  `feveireiro` varchar(255) DEFAULT NULL,
  `marco` varchar(255) DEFAULT NULL,
  `abril` varchar(255) DEFAULT NULL,
  `maio` varchar(255) DEFAULT NULL,
  `junho` varchar(255) DEFAULT NULL,
  `julho` varchar(255) DEFAULT NULL,
  `agosto` varchar(255) DEFAULT NULL,
  `setembro` varchar(255) DEFAULT NULL,
  `outubro` varchar(255) DEFAULT NULL,
  `novembro` varchar(255) DEFAULT NULL,
  `dezembro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ano`
--

INSERT INTO `ano` (`id`, `ano`, `janeiro`, `feveireiro`, `marco`, `abril`, `maio`, `junho`, `julho`, `agosto`, `setembro`, `outubro`, `novembro`, `dezembro`) VALUES
(1, '2018', '5', '-', '-', '-', '-', '-', '5', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cubs`
--

DROP TABLE IF EXISTS `cubs`;
CREATE TABLE IF NOT EXISTS `cubs` (
  `id_cubs` int(255) NOT NULL AUTO_INCREMENT,
  `PB_R_1` varchar(255) DEFAULT NULL,
  `PB_PP_4` varchar(255) DEFAULT NULL,
  `PB_R_8` varchar(255) DEFAULT NULL,
  `PB_PIS` varchar(255) DEFAULT NULL,
  `PN_R_1` varchar(255) DEFAULT NULL,
  `PN_PP_4` varchar(255) DEFAULT NULL,
  `PN_R_8` varchar(255) DEFAULT NULL,
  `PN_R_16` varchar(255) DEFAULT NULL,
  `PA_R_1` varchar(255) DEFAULT NULL,
  `PA_R_8` varchar(255) DEFAULT NULL,
  `PA_R_16` varchar(255) DEFAULT NULL,
  `PN_CAL_8` varchar(255) DEFAULT NULL,
  `PN_CSL_8` varchar(255) DEFAULT NULL,
  `PN_CSL_16` varchar(255) DEFAULT NULL,
  `PA_CAL_8` varchar(255) DEFAULT NULL,
  `PA_CSL_8` varchar(255) DEFAULT NULL,
  `PA_CSL_16` varchar(255) DEFAULT NULL,
  `RP1Q` varchar(255) DEFAULT NULL,
  `GI` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cubs`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cubs`
--

INSERT INTO `cubs` (`id_cubs`, `PB_R_1`, `PB_PP_4`, `PB_R_8`, `PB_PIS`, `PN_R_1`, `PN_PP_4`, `PN_R_8`, `PN_R_16`, `PA_R_1`, `PA_R_8`, `PA_R_16`, `PN_CAL_8`, `PN_CSL_8`, `PN_CSL_16`, `PA_CAL_8`, `PA_CSL_8`, `PA_CSL_16`, `RP1Q`, `GI`) VALUES
(1, '1550.06', '1421.96', '1367.84', '1095', '1622.75', '1620.54', '1388.27', '1354.32', '2177.80', '1810.93', '1864.64', '1704.09', '1409.48', '1867.34', '1910.70', '1693.09', '2115.83', '1185.69', '731.64'),
(6, '4', '5', '4', '654', '654', '674', '897', '98', '765', '4', '657', '89', '756', '4', '87', '65', '498', '7', '654');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estados` int(255) NOT NULL AUTO_INCREMENT,
  `ac` varchar(255) DEFAULT NULL,
  `am` varchar(255) DEFAULT NULL,
  `ba` varchar(255) DEFAULT NULL,
  `ce` varchar(255) DEFAULT NULL,
  `df` varchar(255) DEFAULT NULL,
  `es` varchar(255) DEFAULT NULL,
  `go` varchar(255) DEFAULT NULL,
  `ma` varchar(255) DEFAULT NULL,
  `mt` varchar(255) DEFAULT NULL,
  `mg` varchar(255) DEFAULT NULL,
  `pr` varchar(255) DEFAULT NULL,
  `pb` varchar(255) DEFAULT NULL,
  `pa` varchar(255) DEFAULT NULL,
  `pe` varchar(255) DEFAULT NULL,
  `pi` varchar(255) DEFAULT NULL,
  `rn` varchar(255) DEFAULT NULL,
  `rj` varchar(255) DEFAULT NULL,
  `ro` varchar(255) DEFAULT NULL,
  `rr` varchar(255) DEFAULT NULL,
  `sc` varchar(255) DEFAULT NULL,
  `se` varchar(255) DEFAULT NULL,
  `ac_com` varchar(255) NOT NULL,
  `am_com` varchar(255) NOT NULL,
  `ba_com` varchar(255) NOT NULL,
  `ce_com` varchar(255) NOT NULL,
  `df_com` varchar(255) NOT NULL,
  `es_com` varchar(255) NOT NULL,
  `go_com` varchar(255) NOT NULL,
  `ma_com` varchar(255) NOT NULL,
  `mt_com` varchar(255) NOT NULL,
  `mg_com` varchar(255) NOT NULL,
  `pr_com` varchar(255) NOT NULL,
  `pb_com` varchar(255) NOT NULL,
  `pa_com` varchar(255) NOT NULL,
  `pe_com` varchar(255) NOT NULL,
  `pi_com` varchar(255) NOT NULL,
  `rn_com` varchar(255) NOT NULL,
  `rj_com` varchar(255) NOT NULL,
  `ro_com` varchar(255) NOT NULL,
  `rr_com` varchar(255) NOT NULL,
  `sc_com` varchar(255) NOT NULL,
  `se_com` varchar(255) NOT NULL,
  PRIMARY KEY (`id_estados`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estados`, `ac`, `am`, `ba`, `ce`, `df`, `es`, `go`, `ma`, `mt`, `mg`, `pr`, `pb`, `pa`, `pe`, `pi`, `rn`, `rj`, `ro`, `rr`, `sc`, `se`, `ac_com`, `am_com`, `ba_com`, `ce_com`, `df_com`, `es_com`, `go_com`, `ma_com`, `mt_com`, `mg_com`, `pr_com`, `pb_com`, `pa_com`, `pe_com`, `pi_com`, `rn_com`, `rj_com`, `ro_com`, `rr_com`, `sc_com`, `se_com`) VALUES
(5, '1', NULL, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
