-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 07:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdrbol`
--

-- --------------------------------------------------------

--
-- Table structure for table `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id` int(11) NOT NULL,
  `hotel` double DEFAULT NULL,
  `penginapan` double DEFAULT NULL,
  `kamar` double DEFAULT NULL,
  `tempattidur` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_wil` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `angkutanudara`
--

CREATE TABLE `angkutanudara` (
  `id` int(11) NOT NULL,
  `penumpangberangkat` int(11) DEFAULT NULL,
  `barangmuat` double DEFAULT NULL,
  `bagasimuat` double DEFAULT NULL,
  `paketpos` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aram`
--

CREATE TABLE `aram` (
  `id` int(11) NOT NULL,
  `padisawah` double DEFAULT NULL,
  `padiladang` double DEFAULT NULL,
  `padi` double DEFAULT NULL,
  `jagung` double DEFAULT NULL,
  `kedelai` double DEFAULT NULL,
  `kacangtanah` double DEFAULT NULL,
  `kacanghijau` double DEFAULT NULL,
  `ubikayu` double DEFAULT NULL,
  `ubijalar` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asem`
--

CREATE TABLE `asem` (
  `id` int(11) NOT NULL,
  `padisawah` double DEFAULT NULL,
  `padiladang` double DEFAULT NULL,
  `padi` double DEFAULT NULL,
  `jagung` double DEFAULT NULL,
  `kedelai` double DEFAULT NULL,
  `kacangtanah` double DEFAULT NULL,
  `kacanghijau` double DEFAULT NULL,
  `ubikayu` double DEFAULT NULL,
  `ubijalar` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `atap`
--

CREATE TABLE `atap` (
  `id` int(11) NOT NULL,
  `padisawah` double DEFAULT NULL,
  `padiladang` double DEFAULT NULL,
  `padi` double DEFAULT NULL,
  `jagung` double DEFAULT NULL,
  `kedelai` double DEFAULT NULL,
  `kacangtanah` double DEFAULT NULL,
  `kacanghijau` double DEFAULT NULL,
  `ubikayu` double DEFAULT NULL,
  `ubijalar` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atap`
--

INSERT INTO `atap` (`id`, `padisawah`, `padiladang`, `padi`, `jagung`, `kedelai`, `kacangtanah`, `kacanghijau`, `ubikayu`, `ubijalar`, `fenomena`, `id_wil`, `id_satuan`, `id_tahun`, `created_at`, `updated_at`) VALUES
(1, 17, 17000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 2, 2017, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1490234562),
('admin', '5', 1492577657),
('admin', '7', 1520837333),
('bi', '2', 1492487113),
('bi', '7', 1520837333),
('distribusi', '4', 1492509451),
('distribusi', '7', 1520837334),
('produksi', '3', 1492508616),
('produksi', '7', 1520837334),
('sosial', '6', 1492578088),
('sosial', '7', 1520837334);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1490234414, 1490234414),
('/akomodasi/*', 2, NULL, NULL, NULL, 1492507508, 1492507508),
('/akomodasi/index', 2, NULL, NULL, NULL, 1492507567, 1492507567),
('/angkutanudara/*', 2, NULL, NULL, NULL, 1492507509, 1492507509),
('/angkutanudara/index', 2, NULL, NULL, NULL, 1492507566, 1492507566),
('/aram/*', 2, NULL, NULL, NULL, 1492507509, 1492507509),
('/aram/index', 2, NULL, NULL, NULL, 1492507566, 1492507566),
('/asem/*', 2, NULL, NULL, NULL, 1492507510, 1492507510),
('/asem/index', 2, NULL, NULL, NULL, 1492507565, 1492507565),
('/atap/*', 2, NULL, NULL, NULL, 1492507511, 1492507511),
('/atap/index', 2, NULL, NULL, NULL, 1492507564, 1492507564),
('/bapeda/*', 2, NULL, NULL, NULL, 1492507511, 1492507511),
('/bapeda/index', 2, NULL, NULL, NULL, 1492507564, 1492507564),
('/bi/*', 2, NULL, NULL, NULL, 1492487081, 1492487081),
('/bi/create', 2, NULL, NULL, NULL, 1492487269, 1492487269),
('/bi/delete', 2, NULL, NULL, NULL, 1492487270, 1492487270),
('/bi/index', 2, NULL, NULL, NULL, 1492487271, 1492487271),
('/bi/update', 2, NULL, NULL, NULL, 1492487271, 1492487271),
('/bi/view', 2, NULL, NULL, NULL, 1492487272, 1492487272),
('/bulan/*', 2, NULL, NULL, NULL, 1493178621, 1493178621),
('/debug/*', 2, NULL, NULL, NULL, 1492507513, 1492507513),
('/debug/default/*', 2, NULL, NULL, NULL, 1492507513, 1492507513),
('/debug/default/index', 2, NULL, NULL, NULL, 1492507563, 1492507563),
('/djbp/*', 2, NULL, NULL, NULL, 1492507514, 1492507514),
('/djbp/index', 2, NULL, NULL, NULL, 1492507563, 1492507563),
('/ekspormenurutbeberapagolongan/*', 2, NULL, NULL, NULL, 1492507514, 1492507514),
('/ekspormenurutbeberapagolongan/index', 2, NULL, NULL, NULL, 1492507562, 1492507562),
('/gii/*', 2, NULL, NULL, NULL, 1492507515, 1492507515),
('/gii/default/*', 2, NULL, NULL, NULL, 1492507516, 1492507516),
('/gii/default/index', 2, NULL, NULL, NULL, 1492507561, 1492507561),
('/ihk/*', 2, NULL, NULL, NULL, 1492507517, 1492507517),
('/ihk/index', 2, NULL, NULL, NULL, 1492507561, 1492507561),
('/ihp/*', 2, NULL, NULL, NULL, 1492507517, 1492507517),
('/ihp/index', 2, NULL, NULL, NULL, 1492507560, 1492507560),
('/ihpb/*', 2, NULL, NULL, NULL, 1492507517, 1492507517),
('/ihpb/index', 2, NULL, NULL, NULL, 1492507559, 1492507559),
('/impormenurutbeberapagolongan/*', 2, NULL, NULL, NULL, 1492507518, 1492507518),
('/impormenurutbeberapagolongan/index', 2, NULL, NULL, NULL, 1492507559, 1492507559),
('/inflasi/*', 2, NULL, NULL, NULL, 1492507519, 1492507519),
('/inflasi/index', 2, NULL, NULL, NULL, 1492507559, 1492507559),
('/klasifikasibintang/*', 2, NULL, NULL, NULL, 1492507519, 1492507519),
('/klasifikasibintang/index', 2, NULL, NULL, NULL, 1492507558, 1492507558),
('/mimin/*', 2, NULL, NULL, NULL, 1492507520, 1492507520),
('/mimin/role/*', 2, NULL, NULL, NULL, 1492507520, 1492507520),
('/mimin/role/index', 2, NULL, NULL, NULL, 1492507557, 1492507557),
('/mimin/route/*', 2, NULL, NULL, NULL, 1492507521, 1492507521),
('/mimin/route/generate', 2, NULL, NULL, NULL, 1492507556, 1492507556),
('/mimin/user/*', 2, NULL, NULL, NULL, 1492507521, 1492507521),
('/mimin/user/index', 2, NULL, NULL, NULL, 1492507555, 1492507555),
('/mimin/user/update', 2, NULL, NULL, NULL, 1492508493, 1492508493),
('/neracaperdagangankaltara/*', 2, NULL, NULL, NULL, 1492507523, 1492507523),
('/neracaperdagangankaltara/index', 2, NULL, NULL, NULL, 1492507555, 1492507555),
('/neracaperdagangankaltim/*', 2, NULL, NULL, NULL, 1492507523, 1492507523),
('/neracaperdagangankaltim/index', 2, NULL, NULL, NULL, 1492507554, 1492507554),
('/nilaibongkarkaltara/*', 2, NULL, NULL, NULL, 1492507524, 1492507524),
('/nilaibongkarkaltara/index', 2, NULL, NULL, NULL, 1492507553, 1492507553),
('/nilaibongkarkaltim/*', 2, NULL, NULL, NULL, 1492507524, 1492507524),
('/nilaibongkarkaltim/index', 2, NULL, NULL, NULL, 1492507553, 1492507553),
('/nilaimuatkaltara/*', 2, NULL, NULL, NULL, 1492507525, 1492507525),
('/nilaimuatkaltara/index', 2, NULL, NULL, NULL, 1492507552, 1492507552),
('/nilaimuatkaltaramuatkaltara/*', 2, NULL, NULL, NULL, 1492507525, 1492507525),
('/nilaimuatkaltaramuatkaltara/index', 2, NULL, NULL, NULL, 1492507551, 1492507551),
('/nilaimuatkaltim/*', 2, NULL, NULL, NULL, 1492507526, 1492507526),
('/nilaimuatkaltim/index', 2, NULL, NULL, NULL, 1492507551, 1492507551),
('/ntn/*', 2, NULL, NULL, NULL, 1492507526, 1492507526),
('/ntn/index', 2, NULL, NULL, NULL, 1492507550, 1492507550),
('/ntnp/*', 2, NULL, NULL, NULL, 1492507527, 1492507527),
('/ntnp/index', 2, NULL, NULL, NULL, 1492507550, 1492507550),
('/ntp/*', 2, NULL, NULL, NULL, 1492507528, 1492507528),
('/ntp/index', 2, NULL, NULL, NULL, 1492507549, 1492507549),
('/ntph/*', 2, NULL, NULL, NULL, 1492507528, 1492507528),
('/ntph/index', 2, NULL, NULL, NULL, 1492507548, 1492507548),
('/ntpp/*', 2, NULL, NULL, NULL, 1492507529, 1492507529),
('/ntpp/index', 2, NULL, NULL, NULL, 1492507547, 1492507547),
('/ntpr/*', 2, NULL, NULL, NULL, 1492507529, 1492507529),
('/ntpr/index', 2, NULL, NULL, NULL, 1492507545, 1492507545),
('/ntpt/*', 2, NULL, NULL, NULL, 1492507531, 1492507531),
('/ntpt/index', 2, NULL, NULL, NULL, 1492507545, 1492507545),
('/penduduk/*', 2, NULL, NULL, NULL, 1492507532, 1492507532),
('/penduduk/index', 2, NULL, NULL, NULL, 1492507545, 1492507545),
('/pendudukkerja/*', 2, NULL, NULL, NULL, 1492507532, 1492507532),
('/pendudukkerja/index', 2, NULL, NULL, NULL, 1492507544, 1492507544),
('/perkebunansemusim/*', 2, NULL, NULL, NULL, 1493087902, 1493087902),
('/perkebunantahunan/*', 2, NULL, NULL, NULL, 1493087903, 1493087903),
('/perkembanganekspor/*', 2, NULL, NULL, NULL, 1492507533, 1492507533),
('/perkembanganekspor/index', 2, NULL, NULL, NULL, 1492507544, 1492507544),
('/perkembanganimpor/*', 2, NULL, NULL, NULL, 1492507533, 1492507533),
('/perkembanganimpor/index', 2, NULL, NULL, NULL, 1492507543, 1492507543),
('/satuan/*', 2, NULL, NULL, NULL, 1493178626, 1493178626),
('/sayurbuahsemusim/*', 2, NULL, NULL, NULL, 1493178625, 1493178625),
('/sayurbuahsetahun/*', 2, NULL, NULL, NULL, 1493178625, 1493178625),
('/site/*', 2, NULL, NULL, NULL, 1492487092, 1492487092),
('/site/about', 2, NULL, NULL, NULL, 1492487279, 1492487279),
('/site/captcha', 2, NULL, NULL, NULL, 1492487279, 1492487279),
('/site/contact', 2, NULL, NULL, NULL, 1492487280, 1492487280),
('/site/error', 2, NULL, NULL, NULL, 1492487281, 1492487281),
('/site/index', 2, NULL, NULL, NULL, 1492487282, 1492487282),
('/site/login', 2, NULL, NULL, NULL, 1492487090, 1492487090),
('/site/logout', 2, NULL, NULL, NULL, 1492487091, 1492487091),
('/tanamanbiofarmaka/*', 2, NULL, NULL, NULL, 1493087913, 1493087913),
('/tanamanhias/*', 2, NULL, NULL, NULL, 1493087913, 1493087913),
('/triwulan/*', 2, NULL, NULL, NULL, 1493087914, 1493087914),
('/vlmebongkarkaltara/*', 2, NULL, NULL, NULL, 1492507535, 1492507535),
('/vlmebongkarkaltara/index', 2, NULL, NULL, NULL, 1492507540, 1492507540),
('/vlmebongkarkaltim/*', 2, NULL, NULL, NULL, 1492507535, 1492507535),
('/vlmebongkarkaltim/index', 2, NULL, NULL, NULL, 1492507540, 1492507540),
('/vlmemuatkaltara/*', 2, NULL, NULL, NULL, 1492507536, 1492507536),
('/vlmemuatkaltara/index', 2, NULL, NULL, NULL, 1492507539, 1492507539),
('/vlmemuatkaltim/*', 2, NULL, NULL, NULL, 1492507536, 1492507536),
('/vlmemuatkaltim/index', 2, NULL, NULL, NULL, 1492507538, 1492507538),
('admin', 1, NULL, NULL, NULL, 1490234404, 1493178633),
('bi', 1, NULL, NULL, NULL, 1492487077, 1492487288),
('distribusi', 1, NULL, NULL, NULL, 1492508431, 1492508431),
('produksi', 1, NULL, NULL, NULL, 1492508261, 1492508347),
('sosial', 1, NULL, NULL, NULL, 1492508374, 1492508400);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/*'),
('admin', '/akomodasi/*'),
('admin', '/akomodasi/index'),
('admin', '/angkutanudara/*'),
('admin', '/angkutanudara/index'),
('admin', '/aram/*'),
('admin', '/aram/index'),
('admin', '/asem/*'),
('admin', '/asem/index'),
('admin', '/atap/*'),
('admin', '/atap/index'),
('admin', '/bapeda/*'),
('admin', '/bapeda/index'),
('admin', '/bi/*'),
('admin', '/bi/index'),
('admin', '/bulan/*'),
('admin', '/debug/*'),
('admin', '/debug/default/*'),
('admin', '/debug/default/index'),
('admin', '/djbp/*'),
('admin', '/djbp/index'),
('admin', '/ekspormenurutbeberapagolongan/*'),
('admin', '/ekspormenurutbeberapagolongan/index'),
('admin', '/gii/*'),
('admin', '/gii/default/*'),
('admin', '/gii/default/index'),
('admin', '/ihk/*'),
('admin', '/ihk/index'),
('admin', '/ihp/*'),
('admin', '/ihp/index'),
('admin', '/ihpb/*'),
('admin', '/ihpb/index'),
('admin', '/impormenurutbeberapagolongan/*'),
('admin', '/impormenurutbeberapagolongan/index'),
('admin', '/inflasi/*'),
('admin', '/inflasi/index'),
('admin', '/klasifikasibintang/*'),
('admin', '/klasifikasibintang/index'),
('admin', '/mimin/*'),
('admin', '/mimin/role/*'),
('admin', '/mimin/role/index'),
('admin', '/mimin/route/*'),
('admin', '/mimin/route/generate'),
('admin', '/mimin/user/*'),
('admin', '/mimin/user/index'),
('admin', '/neracaperdagangankaltara/*'),
('admin', '/neracaperdagangankaltara/index'),
('admin', '/neracaperdagangankaltim/*'),
('admin', '/neracaperdagangankaltim/index'),
('admin', '/nilaibongkarkaltara/*'),
('admin', '/nilaibongkarkaltara/index'),
('admin', '/nilaibongkarkaltim/*'),
('admin', '/nilaibongkarkaltim/index'),
('admin', '/nilaimuatkaltara/*'),
('admin', '/nilaimuatkaltara/index'),
('admin', '/nilaimuatkaltaramuatkaltara/*'),
('admin', '/nilaimuatkaltaramuatkaltara/index'),
('admin', '/nilaimuatkaltim/*'),
('admin', '/nilaimuatkaltim/index'),
('admin', '/ntn/*'),
('admin', '/ntn/index'),
('admin', '/ntnp/*'),
('admin', '/ntnp/index'),
('admin', '/ntp/*'),
('admin', '/ntp/index'),
('admin', '/ntph/*'),
('admin', '/ntph/index'),
('admin', '/ntpp/*'),
('admin', '/ntpp/index'),
('admin', '/ntpr/*'),
('admin', '/ntpr/index'),
('admin', '/ntpt/*'),
('admin', '/ntpt/index'),
('admin', '/penduduk/*'),
('admin', '/penduduk/index'),
('admin', '/pendudukkerja/*'),
('admin', '/pendudukkerja/index'),
('admin', '/perkebunansemusim/*'),
('admin', '/perkebunantahunan/*'),
('admin', '/perkembanganekspor/*'),
('admin', '/perkembanganekspor/index'),
('admin', '/perkembanganimpor/*'),
('admin', '/perkembanganimpor/index'),
('admin', '/satuan/*'),
('admin', '/sayurbuahsemusim/*'),
('admin', '/sayurbuahsetahun/*'),
('admin', '/site/*'),
('admin', '/site/index'),
('admin', '/tanamanbiofarmaka/*'),
('admin', '/tanamanhias/*'),
('admin', '/triwulan/*'),
('admin', '/vlmebongkarkaltara/*'),
('admin', '/vlmebongkarkaltara/index'),
('admin', '/vlmebongkarkaltim/*'),
('admin', '/vlmebongkarkaltim/index'),
('admin', '/vlmemuatkaltara/*'),
('admin', '/vlmemuatkaltara/index'),
('admin', '/vlmemuatkaltim/*'),
('admin', '/vlmemuatkaltim/index'),
('bi', '/bi/*'),
('bi', '/bi/create'),
('bi', '/bi/delete'),
('bi', '/bi/index'),
('bi', '/bi/update'),
('bi', '/bi/view'),
('bi', '/site/*'),
('bi', '/site/about'),
('bi', '/site/captcha'),
('bi', '/site/contact'),
('bi', '/site/error'),
('bi', '/site/index'),
('bi', '/site/login'),
('bi', '/site/logout'),
('distribusi', '/akomodasi/*'),
('distribusi', '/akomodasi/index'),
('distribusi', '/angkutanudara/*'),
('distribusi', '/angkutanudara/index'),
('distribusi', '/ihk/*'),
('distribusi', '/ihk/index'),
('distribusi', '/ihp/*'),
('distribusi', '/ihp/index'),
('distribusi', '/ihpb/*'),
('distribusi', '/ihpb/index'),
('distribusi', '/impormenurutbeberapagolongan/*'),
('distribusi', '/impormenurutbeberapagolongan/index'),
('distribusi', '/inflasi/*'),
('distribusi', '/inflasi/index'),
('distribusi', '/klasifikasibintang/*'),
('distribusi', '/klasifikasibintang/index'),
('distribusi', '/mimin/user/update'),
('distribusi', '/neracaperdagangankaltara/*'),
('distribusi', '/neracaperdagangankaltara/index'),
('distribusi', '/neracaperdagangankaltim/*'),
('distribusi', '/neracaperdagangankaltim/index'),
('distribusi', '/nilaibongkarkaltara/*'),
('distribusi', '/nilaibongkarkaltara/index'),
('distribusi', '/nilaibongkarkaltim/*'),
('distribusi', '/nilaibongkarkaltim/index'),
('distribusi', '/nilaimuatkaltara/*'),
('distribusi', '/nilaimuatkaltara/index'),
('distribusi', '/nilaimuatkaltaramuatkaltara/*'),
('distribusi', '/nilaimuatkaltaramuatkaltara/index'),
('distribusi', '/nilaimuatkaltim/*'),
('distribusi', '/nilaimuatkaltim/index'),
('distribusi', '/ntn/*'),
('distribusi', '/ntn/index'),
('distribusi', '/ntnp/*'),
('distribusi', '/ntnp/index'),
('distribusi', '/ntp/*'),
('distribusi', '/ntp/index'),
('distribusi', '/ntph/*'),
('distribusi', '/ntph/index'),
('distribusi', '/ntpp/*'),
('distribusi', '/ntpp/index'),
('distribusi', '/ntpr/*'),
('distribusi', '/ntpr/index'),
('distribusi', '/ntpt/*'),
('distribusi', '/ntpt/index'),
('distribusi', '/perkembanganekspor/*'),
('distribusi', '/perkembanganekspor/index'),
('distribusi', '/perkembanganimpor/*'),
('distribusi', '/perkembanganimpor/index'),
('distribusi', '/site/*'),
('distribusi', '/site/about'),
('distribusi', '/site/captcha'),
('distribusi', '/site/contact'),
('distribusi', '/site/error'),
('distribusi', '/site/index'),
('distribusi', '/site/login'),
('distribusi', '/site/logout'),
('distribusi', '/vlmebongkarkaltara/*'),
('distribusi', '/vlmebongkarkaltara/index'),
('distribusi', '/vlmebongkarkaltim/*'),
('distribusi', '/vlmebongkarkaltim/index'),
('distribusi', '/vlmemuatkaltara/*'),
('distribusi', '/vlmemuatkaltara/index'),
('distribusi', '/vlmemuatkaltim/*'),
('distribusi', '/vlmemuatkaltim/index'),
('produksi', '/aram/*'),
('produksi', '/aram/index'),
('produksi', '/asem/*'),
('produksi', '/asem/index'),
('produksi', '/atap/*'),
('produksi', '/atap/index'),
('produksi', '/site/*'),
('produksi', '/site/about'),
('produksi', '/site/captcha'),
('produksi', '/site/contact'),
('produksi', '/site/error'),
('produksi', '/site/index'),
('produksi', '/site/login'),
('produksi', '/site/logout'),
('sosial', '/penduduk/*'),
('sosial', '/penduduk/index'),
('sosial', '/pendudukkerja/*'),
('sosial', '/pendudukkerja/index'),
('sosial', '/site/*'),
('sosial', '/site/index');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bapeda`
--

CREATE TABLE `bapeda` (
  `id` int(11) NOT NULL,
  `belanjapegawai` double DEFAULT NULL,
  `belanjabarang` double DEFAULT NULL,
  `belanjamodal` double DEFAULT NULL,
  `belanjabansos` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_tw` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bi`
--

CREATE TABLE `bi` (
  `id` int(11) NOT NULL,
  `kurs` double DEFAULT NULL,
  `kursjual` double DEFAULT NULL,
  `kursbeli` double DEFAULT NULL,
  `kurstengah` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulanan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bi`
--

INSERT INTO `bi` (`id`, `kurs`, `kursjual`, `kursbeli`, `kurstengah`, `fenomena`, `id_satuan`, `id_tahun`, `id_bulanan`, `created_at`, `updated_at`) VALUES
(1, NULL, 13500, 13000, 12250, 'Krisis moneter', 1, 2015, 1, NULL, NULL),
(2, NULL, 12000, 12500, 12250, '', 1, 2015, 2, NULL, NULL),
(3, 13000, 13500, 13000, 13025, '', 1, 2014, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nama` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Januari', NULL, NULL),
(2, 'Februari', NULL, NULL),
(3, 'Maret', NULL, NULL),
(4, 'April', NULL, NULL),
(5, 'Mei', NULL, NULL),
(6, 'Juni', NULL, NULL),
(7, 'Juli', NULL, NULL),
(8, 'Agustus', NULL, NULL),
(9, 'Oktober', NULL, NULL),
(10, 'September', NULL, NULL),
(11, 'November', NULL, NULL),
(12, 'Desember', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku`
--

CREATE TABLE `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `djbp`
--

CREATE TABLE `djbp` (
  `id` int(11) NOT NULL,
  `belanjapegawai` double DEFAULT NULL,
  `belanjabarang` double DEFAULT NULL,
  `belanjamodal` double DEFAULT NULL,
  `belanjabansos` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_tw` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekspormenurutbeberapagolongan`
--

CREATE TABLE `ekspormenurutbeberapagolongan` (
  `id` int(11) NOT NULL,
  `bahanbakarmineral` double DEFAULT NULL,
  `migas` double DEFAULT NULL,
  `nonmigas` double DEFAULT NULL,
  `pupuk` double DEFAULT NULL,
  `lemakdanminyakhewaninabatimalamnabati` double DEFAULT NULL,
  `bahankimiaanorganik` double DEFAULT NULL,
  `kayudanbarangdarikayuarangkayu` double DEFAULT NULL,
  `bahankimiaorganik` double DEFAULT NULL,
  `anekaprodukkimia` double DEFAULT NULL,
  `kapalperahudanstrukturterapung` double DEFAULT NULL,
  `reaktornuklirketelmesindanperalatanmekanis` double DEFAULT NULL,
  `ikandankrustaseamoluskasertainvertebrataairlainnya` double DEFAULT NULL,
  `total10golonganbarang` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `totalekspor` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fenomena`
--

CREATE TABLE `fenomena` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga_qtoq` text,
  `pengeluaran_konsumsi_rumah_tangga_ytoy` text,
  `pengeluaran_konsumsi_rumah_tangga_laju_implisit` text,
  `pengeluaran_konsumsi_lnprt_qtoq` text,
  `pengeluaran_konsumsi_lnprt_ytoy` text,
  `pengeluaran_konsumsi_lnprt_laju_implisit` text,
  `pengeluaran_konsumsi_pemerintah_qtoq` text,
  `pengeluaran_konsumsi_pemerintah_ytoy` text,
  `pengeluaran_konsumsi_pemerintah_laju_implisit` text,
  `pembentukan_modal_tetap_bruto_qtoq` text,
  `pembentukan_modal_tetap_bruto_ytoy` text,
  `pembentukan_modal_tetap_bruto_laju_implisit` text,
  `perubahan_inventori_qtoq` text,
  `perubahan_inventori_ytoy` text,
  `perubahan_inventori_laju_implisit` text,
  `ekspor_luar_negeri_qtoq` text,
  `ekspor_luar_negeri_ytoy` text,
  `ekspor_luar_negeri_laju_implisit` text,
  `impor_luar_negeri_qtoq` text,
  `impor_luar_negeri_ytoy` text,
  `impor_luar_negeri_implisit` text,
  `net_ekspor_antar_daerah_qtoq` text,
  `net_ekspor_antar_daerah_ytoy` text,
  `net_ekspor_antar_daerah_implisit` text,
  `id_kab` int(11) DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fenomena`
--

INSERT INTO `fenomena` (`id`, `pengeluaran_konsumsi_rumah_tangga_qtoq`, `pengeluaran_konsumsi_rumah_tangga_ytoy`, `pengeluaran_konsumsi_rumah_tangga_laju_implisit`, `pengeluaran_konsumsi_lnprt_qtoq`, `pengeluaran_konsumsi_lnprt_ytoy`, `pengeluaran_konsumsi_lnprt_laju_implisit`, `pengeluaran_konsumsi_pemerintah_qtoq`, `pengeluaran_konsumsi_pemerintah_ytoy`, `pengeluaran_konsumsi_pemerintah_laju_implisit`, `pembentukan_modal_tetap_bruto_qtoq`, `pembentukan_modal_tetap_bruto_ytoy`, `pembentukan_modal_tetap_bruto_laju_implisit`, `perubahan_inventori_qtoq`, `perubahan_inventori_ytoy`, `perubahan_inventori_laju_implisit`, `ekspor_luar_negeri_qtoq`, `ekspor_luar_negeri_ytoy`, `ekspor_luar_negeri_laju_implisit`, `impor_luar_negeri_qtoq`, `impor_luar_negeri_ytoy`, `impor_luar_negeri_implisit`, `net_ekspor_antar_daerah_qtoq`, `net_ekspor_antar_daerah_ytoy`, `net_ekspor_antar_daerah_implisit`, `id_kab`, `triwulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Warga Bontang Doyan ke Jakarta dan Surabaya : KLIKBONTANG.COM- Musim libur dipenghujung tahun 2017 segera berakhir. Perayaan natal yang juga bertepatan libur sekolah, menjadi momen yang ditunggu beberapa warga Bontang untuk berlibur ke luar daerah. Salah satu travel agen penjualan tiket pesawat di Kota Bontang, Kalimantan Timur mengaku, selama Desember 2017 ini, sekitar 800 orang telah membeli tiket penerbangan dan kapal laut ditempatnya. Dia menjelaskan jika harga normal penerbangan Balikpapan ke Jakarta adalah Rp 645 Ribu, sekarang bisa Rp 1.040 Ribu (Lion Airlines, 26/12). Begitu halnya tujuan Surabaya yang biasanya Rp 505 Ribu, saat ini sampai Rp 1,2 Juta (Lion Airlines, 26/12). Sumber : http://klikbontang.com/berita-14535-warga-bontang-doyan-ke-jakarta-dan-surabaya.html', NULL, NULL, NULL, NULL, NULL, 'HORE!!! Hari Ini, Seragam Sekolah Dibagi : Bantuan seragam sekolah gratis sudah tiba di gudang sebanyak 38.727 seragam siap disalurkan. Secara rinci, seluruh seragam akan dibagikan kepada 125 sekolah. Masing-masing tingkat SD sekitar 28 ribu pelajar dari 60 sekolah, tingkat SMP 9 ribu pelajar dengan 32 sekolah, tingkat SMA/SMK 8 ribu siswa dengan 28 sekolah, serta 200 lebih siswa SLB dari 5 sekolah. Pemkot Bontang telah menggelontorkan dana Rp 18 miliar guna pemberian bantuan ini. Namun, total biaya yang digunakan sejumlah Rp 15 miliar. Sisanya, masuk Sisa Lebih Penggunaan Anggaran (Silpa) senilai Rp 3 miliar dan akan masuk kas daerah. Sumber : http://bontang.prokal.co/read/news/15585-hari-ini-seragam-sekolah-dibagi.html', NULL, 'Rp 476 Juta Santunan Kematian Tersalurkan Tahun Ini : Sepanjang 2017, Dinas Sosial Pemberdayaan Perempuan dan Pemberdayaan Masyarakat (Dissos-P3M) Kota Bontang sudah menyalurkan santunan kematian Rp 476 juta kepada ahli waris. Penyalurannya dilakukan dua tahap, periode Januari-Mei sebanyak 256 orang dan Juni sampai November 2017 ada 220 orang. Dana santunan kematian ini berasal dari APBD Kota Bontang. Dissos-P3M sendiri mengalokasikan santunan kematian tahunan ini sebesar Rp 476 juta sama seperti tahunan sebelumnya. Artinya, dana itu sudah tersalurkan semuanya hingga November 2017. Tiap ahli waris menerima santunan sebesar Rp 1 juta per orang. Penyaluran tahap kedua dilakukan secara simbolis di Auditorium 3 Dimensi Rumah Jabatan Walikota Bontang, Jalan Awang Long nomor 1, Selasa, 21 November 2017. Sumber : http://klikbontang.com/berita-14030-rp-476-juta-santunan-kematian-tersalurkan-tahun-ini.html. ', 'Pusat Kucurkan Rp 2,8 Miliar, Bontang Dirikan SMKN 4 Pariwisata : Walikota Bontang, Neni Moerniaeni melakukan peletakan batu pertama pembangunan SMKN 4 Bidang Keahlian Pariwisata di area kompleks Perumahan PAMA, Kelurahan Bontang Lestari, Kamis (2/11/2017). Dana yang dikucurkan sebesar Rp 2,8 miliar. Uang tersebut digunakan untuk membangun  1 ruang kantor dengan ukuran 8x21 meter, 2 ruang praktik siswa berukuran 2x8 meter, dan 5 ruang belajar ukuran 9x8 meter. Dana tersebut juga digunakan untuk pengadaan peralatan praktik dan perabot. Sementara itu, mendekati akhir tahun, Neni pun mengingatkan kontraktor pemenang lelang untuk berkomitmen serius menyelesaikan pembangunan sekolah ini. “Waktu yang pendek, yaitu 7 minggu perlu komitmen yang luar biasa. Dalam keadaaan seperti ini perlu kerja siang dan malam. Kalau tidak kita akan tertinggal. Apalagi kalau cuaca jelek! Maka dari itu saya harap kerja kontraktor harus all out. Tolong kerja maksimal ya,” pinta Neni. Sumber : http://www.klikbontang.com/berita-13794-pusat-kucurkan-rp-28-miliar-bontang-dirikan-smkn-4-pariwisata-.html', 'Neni Bagikan Laptop Gratis ke-200 Guru SMP, Tahun Depan Guru SD : Tahun ini, Pemkot Bontang menyalurkan 213 unit komputer jinjing kepada para guru Sekolah Menengah Pertama (SMP) Negeri se-Kota Bontang. Dijelaskan, laptop yang diberikan kepada para guru tercatat sebagai aset milik daerah. Para guru hanya dipinjamkan oleh Dinas Pendidikan (Disdik) Bontang. Mereka tidak diperkenankan untuk mengakuisis fasilitas ini. Artinya, para guru setelah tak lagi menjabat diminta untuk mengembalikan fasilitas ini ke daerah. Sumber : http://klikbontang.com/berita-13974-neni-bagikan-laptop-gratis-ke200-guru-smp-tahun-depan-guru-sd.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6474, 4, 2017, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ihk`
--

CREATE TABLE `ihk` (
  `id` int(11) NOT NULL,
  `bahanmakanan` double DEFAULT NULL,
  `padipadianumbiumbianhasilnya` double DEFAULT NULL,
  `daginghasil` double DEFAULT NULL,
  `ikansegar` double DEFAULT NULL,
  `ikandiawetkan` double DEFAULT NULL,
  `telursusuhasilnya` double DEFAULT NULL,
  `sayursayuran` double DEFAULT NULL,
  `kacangkacangan` double DEFAULT NULL,
  `buahbuahan` double DEFAULT NULL,
  `bumbubumbuan` double DEFAULT NULL,
  `lemakdanminyak` double DEFAULT NULL,
  `bahanmakananlainnya` double DEFAULT NULL,
  `makananjadirokoktembakau` double DEFAULT NULL,
  `makananjadi` double DEFAULT NULL,
  `minumanyangtdkberalkohol` double DEFAULT NULL,
  `tembakaudanminumanberalkohol` double DEFAULT NULL,
  `perumahan` double DEFAULT NULL,
  `biayatempattinggal` double DEFAULT NULL,
  `bahanbakarpeneranganair` double DEFAULT NULL,
  `perlengkapanrumahtangga` double DEFAULT NULL,
  `penyelenggaraanrumahtangga` double DEFAULT NULL,
  `sandang` double DEFAULT NULL,
  `sandanglakilaki` double DEFAULT NULL,
  `sandangwanita` double DEFAULT NULL,
  `sandanganakanak` double DEFAULT NULL,
  `barangpribadisandanglainnya` double DEFAULT NULL,
  `kesehatan` double DEFAULT NULL,
  `jasakesehatan` double DEFAULT NULL,
  `obatobatan` double DEFAULT NULL,
  `jasaperawatanjasmani` double DEFAULT NULL,
  `perawatanjasmanidankosmetik` double DEFAULT NULL,
  `pendidikanrekreasidanolahraga` double DEFAULT NULL,
  `jasapendidikan` double DEFAULT NULL,
  `kursuskursuspelatihan` double DEFAULT NULL,
  `perlengkapanperalatanpendidikan` double DEFAULT NULL,
  `rekreasi` double DEFAULT NULL,
  `olahraga` double DEFAULT NULL,
  `transpordankomunikasi` double DEFAULT NULL,
  `transport` double DEFAULT NULL,
  `komunikasidanpengiriman` double DEFAULT NULL,
  `saranadanpenunjangtranspor` double DEFAULT NULL,
  `jasakeuangan` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ihp`
--

CREATE TABLE `ihp` (
  `id` int(11) NOT NULL,
  `bahanmakanan` double DEFAULT NULL,
  `padipalawija` double DEFAULT NULL,
  `padi` double DEFAULT NULL,
  `palawija` double DEFAULT NULL,
  `jagungpocelan` double DEFAULT NULL,
  `ketelapohon` double DEFAULT NULL,
  `ketelarambat` double DEFAULT NULL,
  `kacangtanah` double DEFAULT NULL,
  `kacangkedelai` double DEFAULT NULL,
  `kacanghijau` double DEFAULT NULL,
  `bawangdaun` double DEFAULT NULL,
  `bawangmerah` double DEFAULT NULL,
  `bayam` double DEFAULT NULL,
  `buncismuda` double DEFAULT NULL,
  `cabemerah` double DEFAULT NULL,
  `caberawit` double DEFAULT NULL,
  `kacangpanjang` double DEFAULT NULL,
  `kangkung` double DEFAULT NULL,
  `ketimun` double DEFAULT NULL,
  `kolkubis` double DEFAULT NULL,
  `melinjo` double DEFAULT NULL,
  `sawihijau` double DEFAULT NULL,
  `terongpnjng` double DEFAULT NULL,
  `tomat` double DEFAULT NULL,
  `wortel` double DEFAULT NULL,
  `kentang` double DEFAULT NULL,
  `petai` double DEFAULT NULL,
  `kacangmerah` double DEFAULT NULL,
  `alpukat` double DEFAULT NULL,
  `durian` double DEFAULT NULL,
  `jambubiji` double DEFAULT NULL,
  `jeruk` double DEFAULT NULL,
  `mangga` double DEFAULT NULL,
  `nanas` double DEFAULT NULL,
  `pepaya` double DEFAULT NULL,
  `pisangambon` double DEFAULT NULL,
  `rambutan` double DEFAULT NULL,
  `salak` double DEFAULT NULL,
  `sawo` double DEFAULT NULL,
  `semangka` double DEFAULT NULL,
  `duku` double DEFAULT NULL,
  `nangka` double DEFAULT NULL,
  `karetgetahtebal` double DEFAULT NULL,
  `kelapasawit` double DEFAULT NULL,
  `kopirobusta` double DEFAULT NULL,
  `kelapablmdikupas` double DEFAULT NULL,
  `tebu` double DEFAULT NULL,
  `kakao` double DEFAULT NULL,
  `jambumete` double DEFAULT NULL,
  `cengkeh` double DEFAULT NULL,
  `tembakau` double DEFAULT NULL,
  `lada` double DEFAULT NULL,
  `ternak` double DEFAULT NULL,
  `sapi` double DEFAULT NULL,
  `kerbau` double DEFAULT NULL,
  `kambing` double DEFAULT NULL,
  `babi` double DEFAULT NULL,
  `sususapisegar` double DEFAULT NULL,
  `unggashasilnya` double DEFAULT NULL,
  `ayam` double DEFAULT NULL,
  `itik` double DEFAULT NULL,
  `telur` double DEFAULT NULL,
  `perikananbudidaya` double DEFAULT NULL,
  `bandeng` double DEFAULT NULL,
  `gurame` double DEFAULT NULL,
  `lele` double DEFAULT NULL,
  `mas` double DEFAULT NULL,
  `mujair` double DEFAULT NULL,
  `nila` double DEFAULT NULL,
  `patin` double DEFAULT NULL,
  `udangbudidaya` double DEFAULT NULL,
  `rumputlaut` double DEFAULT NULL,
  `perikanantngkap` double DEFAULT NULL,
  `bawal` double DEFAULT NULL,
  `cakalang` double DEFAULT NULL,
  `kakap` double DEFAULT NULL,
  `kembung` double DEFAULT NULL,
  `kerapu` double DEFAULT NULL,
  `layang` double DEFAULT NULL,
  `selar` double DEFAULT NULL,
  `tembang` double DEFAULT NULL,
  `tenggiri` double DEFAULT NULL,
  `teri` double DEFAULT NULL,
  `tongkol` double DEFAULT NULL,
  `udangtangkap` double DEFAULT NULL,
  `kepiting` double DEFAULT NULL,
  `cumicumi` double DEFAULT NULL,
  `kayu` double DEFAULT NULL,
  `kayujati` double DEFAULT NULL,
  `kayurimbalainnya` double DEFAULT NULL,
  `hasilhutan` double DEFAULT NULL,
  `rotan` double DEFAULT NULL,
  `bambu` double DEFAULT NULL,
  `batubara` double DEFAULT NULL,
  `minyakbumi` double DEFAULT NULL,
  `gasbumidanpanasbumi` double DEFAULT NULL,
  `bijihtembaga` double DEFAULT NULL,
  `bijihemas` double DEFAULT NULL,
  `batu` double DEFAULT NULL,
  `pasir` double DEFAULT NULL,
  `kerikil` double DEFAULT NULL,
  `kapur` double DEFAULT NULL,
  `dagingsapi` double DEFAULT NULL,
  `dagingayam` double DEFAULT NULL,
  `dagingbabi` double DEFAULT NULL,
  `dagingkambingdomba` double DEFAULT NULL,
  `dagingolahanawetan` double DEFAULT NULL,
  `ikanbekuawetan` double DEFAULT NULL,
  `udangbekuawetan` double DEFAULT NULL,
  `minyakkelapa` double DEFAULT NULL,
  `minyakgoreng` double DEFAULT NULL,
  `minyakkelapasawit` double DEFAULT NULL,
  `sususegar` double DEFAULT NULL,
  `susukentalmanis` double DEFAULT NULL,
  `susububuk` double DEFAULT NULL,
  `susucairkemasan` double DEFAULT NULL,
  `eskrim` double DEFAULT NULL,
  `makanandarisusu` double DEFAULT NULL,
  `beras` double DEFAULT NULL,
  `tepungterigu` double DEFAULT NULL,
  `tepungtapioka` double DEFAULT NULL,
  `tepungberas` double DEFAULT NULL,
  `tepunglainnya` double DEFAULT NULL,
  `pakanikan` double DEFAULT NULL,
  `pakanlain` double DEFAULT NULL,
  `roti` double DEFAULT NULL,
  `biskuit` double DEFAULT NULL,
  `mie` double DEFAULT NULL,
  `gulapasir` double DEFAULT NULL,
  `gulamerah` double DEFAULT NULL,
  `sirop` double DEFAULT NULL,
  `kembanggula` double DEFAULT NULL,
  `coklatbubuk` double DEFAULT NULL,
  `kopibubuk` double DEFAULT NULL,
  `teh` double DEFAULT NULL,
  `kecap` double DEFAULT NULL,
  `tahutempe` double DEFAULT NULL,
  `garammeja` double DEFAULT NULL,
  `kerupukkeripik` double DEFAULT NULL,
  `airminumkemasan` double DEFAULT NULL,
  `minumanringan` double DEFAULT NULL,
  `tehkemasan` double DEFAULT NULL,
  `rokokkretek` double DEFAULT NULL,
  `rokokfilter` double DEFAULT NULL,
  `benangpintal` double DEFAULT NULL,
  `benangrayon` double DEFAULT NULL,
  `benangpolyester` double DEFAULT NULL,
  `kaintenun` double DEFAULT NULL,
  `kaincetak` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `pakaianbatik` double DEFAULT NULL,
  `pakaiandarikaos` double DEFAULT NULL,
  `pakaianpria` double DEFAULT NULL,
  `pakaianwanita` double DEFAULT NULL,
  `pakaiananakanak` double DEFAULT NULL,
  `perlengkapanpakaian` double DEFAULT NULL,
  `sepatudewasa` double DEFAULT NULL,
  `sandaldewasa` double DEFAULT NULL,
  `sepatusandalanakanak` double DEFAULT NULL,
  `sepatuolahraga` double DEFAULT NULL,
  `kayujatigergajian` double DEFAULT NULL,
  `kayulainnya` double DEFAULT NULL,
  `bahanbangunankayu` double DEFAULT NULL,
  `kertaskoran` double DEFAULT NULL,
  `kertastulis` double DEFAULT NULL,
  `tissue` double DEFAULT NULL,
  `kertaspembungkus` double DEFAULT NULL,
  `karton` double DEFAULT NULL,
  `kartonkemasan` double DEFAULT NULL,
  `pupukurea` double DEFAULT NULL,
  `pupuklainnya` double DEFAULT NULL,
  `pestisidainsektisida` double DEFAULT NULL,
  `bijiplastik` double DEFAULT NULL,
  `bahankimia` double DEFAULT NULL,
  `cattembok` double DEFAULT NULL,
  `catkayubesi` double DEFAULT NULL,
  `vernislak` double DEFAULT NULL,
  `deterjen` double DEFAULT NULL,
  `sabunmandi` double DEFAULT NULL,
  `pemutihpewangi` double DEFAULT NULL,
  `kosmetik` double DEFAULT NULL,
  `bahankimialain` double DEFAULT NULL,
  `premium` double DEFAULT NULL,
  `avtur` double DEFAULT NULL,
  `solar` double DEFAULT NULL,
  `aspal` double DEFAULT NULL,
  `minyakpelumas` double DEFAULT NULL,
  `rss` double DEFAULT NULL,
  `sir` double DEFAULT NULL,
  `banmobil` double DEFAULT NULL,
  `bansepedamotor` double DEFAULT NULL,
  `vulkanisirban` double DEFAULT NULL,
  `pvc` double DEFAULT NULL,
  `plastik` double DEFAULT NULL,
  `barangkaretdanplastiklain` double DEFAULT NULL,
  `kacalembaran` double DEFAULT NULL,
  `keramik` double DEFAULT NULL,
  `barangpecahbelah` double DEFAULT NULL,
  `batubata` double DEFAULT NULL,
  `genteng` double DEFAULT NULL,
  `semen` double DEFAULT NULL,
  `conblock` double DEFAULT NULL,
  `barangbukanlogamlainnya` double DEFAULT NULL,
  `bajalembaran` double DEFAULT NULL,
  `besibeton` double DEFAULT NULL,
  `besisiku` double DEFAULT NULL,
  `besiplat` double DEFAULT NULL,
  `pipabesi` double DEFAULT NULL,
  `alumunium` double DEFAULT NULL,
  `seng` double DEFAULT NULL,
  `murpakubaut` double DEFAULT NULL,
  `kawat` double DEFAULT NULL,
  `lainnyadarilogam` double DEFAULT NULL,
  `mesinpembangkit` double DEFAULT NULL,
  `mesinindustri` double DEFAULT NULL,
  `mesinpertanian` double DEFAULT NULL,
  `alatberat` double DEFAULT NULL,
  `kabellistrik` double DEFAULT NULL,
  `prlngkapanlistrik` double DEFAULT NULL,
  `komputer` double DEFAULT NULL,
  `televisi` double DEFAULT NULL,
  `elektroniklainnya` double DEFAULT NULL,
  `teleponhp` double DEFAULT NULL,
  `mobil` double DEFAULT NULL,
  `kapaldanperbaikan` double DEFAULT NULL,
  `sparepart1` double DEFAULT NULL,
  `sepedamotor` double DEFAULT NULL,
  `sparepart2` double DEFAULT NULL,
  `lainnyaanguktan` double DEFAULT NULL,
  `furniturekayu` double DEFAULT NULL,
  `furniturerotan` double DEFAULT NULL,
  `furniturelogam` double DEFAULT NULL,
  `barangindustrilainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_tw` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ihp`
--

INSERT INTO `ihp` (`id`, `bahanmakanan`, `padipalawija`, `padi`, `palawija`, `jagungpocelan`, `ketelapohon`, `ketelarambat`, `kacangtanah`, `kacangkedelai`, `kacanghijau`, `bawangdaun`, `bawangmerah`, `bayam`, `buncismuda`, `cabemerah`, `caberawit`, `kacangpanjang`, `kangkung`, `ketimun`, `kolkubis`, `melinjo`, `sawihijau`, `terongpnjng`, `tomat`, `wortel`, `kentang`, `petai`, `kacangmerah`, `alpukat`, `durian`, `jambubiji`, `jeruk`, `mangga`, `nanas`, `pepaya`, `pisangambon`, `rambutan`, `salak`, `sawo`, `semangka`, `duku`, `nangka`, `karetgetahtebal`, `kelapasawit`, `kopirobusta`, `kelapablmdikupas`, `tebu`, `kakao`, `jambumete`, `cengkeh`, `tembakau`, `lada`, `ternak`, `sapi`, `kerbau`, `kambing`, `babi`, `sususapisegar`, `unggashasilnya`, `ayam`, `itik`, `telur`, `perikananbudidaya`, `bandeng`, `gurame`, `lele`, `mas`, `mujair`, `nila`, `patin`, `udangbudidaya`, `rumputlaut`, `perikanantngkap`, `bawal`, `cakalang`, `kakap`, `kembung`, `kerapu`, `layang`, `selar`, `tembang`, `tenggiri`, `teri`, `tongkol`, `udangtangkap`, `kepiting`, `cumicumi`, `kayu`, `kayujati`, `kayurimbalainnya`, `hasilhutan`, `rotan`, `bambu`, `batubara`, `minyakbumi`, `gasbumidanpanasbumi`, `bijihtembaga`, `bijihemas`, `batu`, `pasir`, `kerikil`, `kapur`, `dagingsapi`, `dagingayam`, `dagingbabi`, `dagingkambingdomba`, `dagingolahanawetan`, `ikanbekuawetan`, `udangbekuawetan`, `minyakkelapa`, `minyakgoreng`, `minyakkelapasawit`, `sususegar`, `susukentalmanis`, `susububuk`, `susucairkemasan`, `eskrim`, `makanandarisusu`, `beras`, `tepungterigu`, `tepungtapioka`, `tepungberas`, `tepunglainnya`, `pakanikan`, `pakanlain`, `roti`, `biskuit`, `mie`, `gulapasir`, `gulamerah`, `sirop`, `kembanggula`, `coklatbubuk`, `kopibubuk`, `teh`, `kecap`, `tahutempe`, `garammeja`, `kerupukkeripik`, `airminumkemasan`, `minumanringan`, `tehkemasan`, `rokokkretek`, `rokokfilter`, `benangpintal`, `benangrayon`, `benangpolyester`, `kaintenun`, `kaincetak`, `lainnya`, `pakaianbatik`, `pakaiandarikaos`, `pakaianpria`, `pakaianwanita`, `pakaiananakanak`, `perlengkapanpakaian`, `sepatudewasa`, `sandaldewasa`, `sepatusandalanakanak`, `sepatuolahraga`, `kayujatigergajian`, `kayulainnya`, `bahanbangunankayu`, `kertaskoran`, `kertastulis`, `tissue`, `kertaspembungkus`, `karton`, `kartonkemasan`, `pupukurea`, `pupuklainnya`, `pestisidainsektisida`, `bijiplastik`, `bahankimia`, `cattembok`, `catkayubesi`, `vernislak`, `deterjen`, `sabunmandi`, `pemutihpewangi`, `kosmetik`, `bahankimialain`, `premium`, `avtur`, `solar`, `aspal`, `minyakpelumas`, `rss`, `sir`, `banmobil`, `bansepedamotor`, `vulkanisirban`, `pvc`, `plastik`, `barangkaretdanplastiklain`, `kacalembaran`, `keramik`, `barangpecahbelah`, `batubata`, `genteng`, `semen`, `conblock`, `barangbukanlogamlainnya`, `bajalembaran`, `besibeton`, `besisiku`, `besiplat`, `pipabesi`, `alumunium`, `seng`, `murpakubaut`, `kawat`, `lainnyadarilogam`, `mesinpembangkit`, `mesinindustri`, `mesinpertanian`, `alatberat`, `kabellistrik`, `prlngkapanlistrik`, `komputer`, `televisi`, `elektroniklainnya`, `teleponhp`, `mobil`, `kapaldanperbaikan`, `sparepart1`, `sepedamotor`, `sparepart2`, `lainnyaanguktan`, `furniturekayu`, `furniturerotan`, `furniturelogam`, `barangindustrilainnya`, `fenomena`, `id_satuan`, `id_tahun`, `id_tw`, `created_at`, `updated_at`) VALUES
(1, 2131, 212, 21, 213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 2010, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ihpb`
--

CREATE TABLE `ihpb` (
  `id` int(11) NOT NULL,
  `tomat` double DEFAULT NULL,
  `kubiskol` double DEFAULT NULL,
  `daunbawang` double DEFAULT NULL,
  `sawi` double DEFAULT NULL,
  `kacangpanjang` double DEFAULT NULL,
  `wortel` double DEFAULT NULL,
  `buncis` double DEFAULT NULL,
  `mentimun` double DEFAULT NULL,
  `terung` double DEFAULT NULL,
  `kangkung` double DEFAULT NULL,
  `bayam` double DEFAULT NULL,
  `semangka` double DEFAULT NULL,
  `melon` double DEFAULT NULL,
  `kacangtanah` double DEFAULT NULL,
  `kedelai` double DEFAULT NULL,
  `ketelapohon` double DEFAULT NULL,
  `ubijalar` double DEFAULT NULL,
  `kentang` double DEFAULT NULL,
  `kacanghijau` double DEFAULT NULL,
  `tebu` double DEFAULT NULL,
  `tanamanbunga` double DEFAULT NULL,
  `tembakau` double DEFAULT NULL,
  `kapuk` double DEFAULT NULL,
  `pertniantnamanthunan` double DEFAULT NULL,
  `cabemerah` double DEFAULT NULL,
  `caberawit` double DEFAULT NULL,
  `jeruk` double DEFAULT NULL,
  `mangga` double DEFAULT NULL,
  `salak` double DEFAULT NULL,
  `pisang` double DEFAULT NULL,
  `apellokal` double DEFAULT NULL,
  `rambutan` double DEFAULT NULL,
  `pepaya` double DEFAULT NULL,
  `alpukat` double DEFAULT NULL,
  `jambubiji` double DEFAULT NULL,
  `sawo` double DEFAULT NULL,
  `nanas` double DEFAULT NULL,
  `jambumete` double DEFAULT NULL,
  `kelapasawit` double DEFAULT NULL,
  `kelapa` double DEFAULT NULL,
  `kopi` double DEFAULT NULL,
  `lada` double DEFAULT NULL,
  `kakao` double DEFAULT NULL,
  `cengkeh` double DEFAULT NULL,
  `teh` double DEFAULT NULL,
  `karet` double DEFAULT NULL,
  `tnamanbiofarmaka` double DEFAULT NULL,
  `peternakan` double DEFAULT NULL,
  `ayamras` double DEFAULT NULL,
  `sapi` double DEFAULT NULL,
  `ayamburas` double DEFAULT NULL,
  `kambingdandomba` double DEFAULT NULL,
  `kerbau` double DEFAULT NULL,
  `babi` double DEFAULT NULL,
  `itik` double DEFAULT NULL,
  `sususegar` double DEFAULT NULL,
  `telurayamburas` double DEFAULT NULL,
  `teluritik` double DEFAULT NULL,
  `telurayamras` double DEFAULT NULL,
  `pengusahaanhutan` double DEFAULT NULL,
  `meranti` double DEFAULT NULL,
  `kayujatigelondongan` double DEFAULT NULL,
  `kruing` double DEFAULT NULL,
  `rotan` double DEFAULT NULL,
  `perikanantangkap` double DEFAULT NULL,
  `bawal` double DEFAULT NULL,
  `tenggiri` double DEFAULT NULL,
  `tongkol` double DEFAULT NULL,
  `kakapputih` double DEFAULT NULL,
  `kakapmerahbambangan` double DEFAULT NULL,
  `kembung` double DEFAULT NULL,
  `cakalang` double DEFAULT NULL,
  `kerapu` double DEFAULT NULL,
  `layang` double DEFAULT NULL,
  `selar` double DEFAULT NULL,
  `teri` double DEFAULT NULL,
  `tuna` double DEFAULT NULL,
  `kepitingairlaut` double DEFAULT NULL,
  `udangairtawar` double DEFAULT NULL,
  `udanglaut` double DEFAULT NULL,
  `cumicumi` double DEFAULT NULL,
  `manyung` double DEFAULT NULL,
  `perikananbudidaya` double DEFAULT NULL,
  `patin` double DEFAULT NULL,
  `lele` double DEFAULT NULL,
  `nila` double DEFAULT NULL,
  `ikanmas` double DEFAULT NULL,
  `bandeng` double DEFAULT NULL,
  `gurami` double DEFAULT NULL,
  `gabus` double DEFAULT NULL,
  `rumputlaut` double DEFAULT NULL,
  `pertmbanganbatubara` double DEFAULT NULL,
  `batubara` double DEFAULT NULL,
  `penggalianbatupasirdantanahliat` double DEFAULT NULL,
  `batuhiasdanbatubangunan` double DEFAULT NULL,
  `batubahanindustri` double DEFAULT NULL,
  `tanahdantanahliat` double DEFAULT NULL,
  `pasir` double DEFAULT NULL,
  `kerikil` double DEFAULT NULL,
  `pertpenggalian` double DEFAULT NULL,
  `barangtambangmineralbknlogam` double DEFAULT NULL,
  `penggalianlainnya` double DEFAULT NULL,
  `industripengolahandanpengawetandaging` double DEFAULT NULL,
  `dagingsapi` double DEFAULT NULL,
  `dagingkambing` double DEFAULT NULL,
  `dagingbabi` double DEFAULT NULL,
  `dagingayam` double DEFAULT NULL,
  `dagingdlamkaleng` double DEFAULT NULL,
  `dagingolahan` double DEFAULT NULL,
  `industripengolahandanpengawetanikan` double DEFAULT NULL,
  `ikanteriasinkering` double DEFAULT NULL,
  `ikanasinkeringlainnya` double DEFAULT NULL,
  `ikanbeku` double DEFAULT NULL,
  `industripengolahandanpengawetanbuah` double DEFAULT NULL,
  `buahdansayurkalengan` double DEFAULT NULL,
  `buahdansayurlumatan` double DEFAULT NULL,
  `tempe` double DEFAULT NULL,
  `tahu` double DEFAULT NULL,
  `inyakkelapasawit` double DEFAULT NULL,
  `margarine` double DEFAULT NULL,
  `minyakgorengkelapa` double DEFAULT NULL,
  `minyakgorengkelapasawit` double DEFAULT NULL,
  `kopra` double DEFAULT NULL,
  `industripengolahansusu` double DEFAULT NULL,
  `susucair` double DEFAULT NULL,
  `susububuk` double DEFAULT NULL,
  `susukental` double DEFAULT NULL,
  `eskrim` double DEFAULT NULL,
  `industripenggilinganpadi` double DEFAULT NULL,
  `beras` double DEFAULT NULL,
  `tepungterigu` double DEFAULT NULL,
  `tepungberas` double DEFAULT NULL,
  `tepungtapioka` double DEFAULT NULL,
  `kopibijikupasan` double DEFAULT NULL,
  `coklatbijikupasan` double DEFAULT NULL,
  `industrimknnlainnya` double DEFAULT NULL,
  `roti` double DEFAULT NULL,
  `biskuit` double DEFAULT NULL,
  `wafer` double DEFAULT NULL,
  `gulapasir` double DEFAULT NULL,
  `gulamerah` double DEFAULT NULL,
  `sirop` double DEFAULT NULL,
  `bubukcoklat` double DEFAULT NULL,
  `coklatolahan` double DEFAULT NULL,
  `kembanggula` double DEFAULT NULL,
  `kecap` double DEFAULT NULL,
  `miekering` double DEFAULT NULL,
  `kerupuk` double DEFAULT NULL,
  `mieinstan` double DEFAULT NULL,
  `vermicellibihun` double DEFAULT NULL,
  `bumbumsakdanpnyedap` double DEFAULT NULL,
  `soun` double DEFAULT NULL,
  `tehhijau` double DEFAULT NULL,
  `tehhitam` double DEFAULT NULL,
  `santankelapa` double DEFAULT NULL,
  `natadecoco` double DEFAULT NULL,
  `tehekstrak` double DEFAULT NULL,
  `kopibijimatang` double DEFAULT NULL,
  `mkanandarikacang` double DEFAULT NULL,
  `kopibubuk` double DEFAULT NULL,
  `kopiinstan` double DEFAULT NULL,
  `industrimakananhewan` double DEFAULT NULL,
  `mknantrnakbesardanunggas` double DEFAULT NULL,
  `mkananikan` double DEFAULT NULL,
  `industriminuman` double DEFAULT NULL,
  `minumanberalkohol` double DEFAULT NULL,
  `minumanringanco2` double DEFAULT NULL,
  `airdngnaromabuah` double DEFAULT NULL,
  `airdngnaromateh` double DEFAULT NULL,
  `airmineral` double DEFAULT NULL,
  `industripengolahantembakau` double DEFAULT NULL,
  `tembakauolahan` double DEFAULT NULL,
  `rokokkretek` double DEFAULT NULL,
  `rokokputih` double DEFAULT NULL,
  `industripemintalan` double DEFAULT NULL,
  `benang` double DEFAULT NULL,
  `kaintenun` double DEFAULT NULL,
  `kaincetak` double DEFAULT NULL,
  `kainbatik` double DEFAULT NULL,
  `industritekstillainnya` double DEFAULT NULL,
  `permadani` double DEFAULT NULL,
  `industripakaianjadi` double DEFAULT NULL,
  `rajutan` double DEFAULT NULL,
  `pakaianpriabatik` double DEFAULT NULL,
  `pakaianprianonbatik` double DEFAULT NULL,
  `pakaianwanitabatik` double DEFAULT NULL,
  `pakaianwanitanonbatik` double DEFAULT NULL,
  `pakaiandalampria` double DEFAULT NULL,
  `pakaiandalamwanita` double DEFAULT NULL,
  `pakaianolahraga` double DEFAULT NULL,
  `perlengkapanpakaian` double DEFAULT NULL,
  `industrikulit` double DEFAULT NULL,
  `kulit` double DEFAULT NULL,
  `brangbrangdarikulit` double DEFAULT NULL,
  `industrialaskaki` double DEFAULT NULL,
  `sepatu` double DEFAULT NULL,
  `sandal` double DEFAULT NULL,
  `sepatuolahraga` double DEFAULT NULL,
  `industripenggergajian` double DEFAULT NULL,
  `kayujatigergajian` double DEFAULT NULL,
  `kayurimbagergajian` double DEFAULT NULL,
  `industribrangdarikayu` double DEFAULT NULL,
  `kayulapis` double DEFAULT NULL,
  `mouldingdowel` double DEFAULT NULL,
  `bahanbangunankayu` double DEFAULT NULL,
  `brngterbuatdarikayugabusbamburotan` double DEFAULT NULL,
  `anyamanrotan` double DEFAULT NULL,
  `anyamanbambu` double DEFAULT NULL,
  `anyamanlainnya` double DEFAULT NULL,
  `industrikertas` double DEFAULT NULL,
  `kertaskoran` double DEFAULT NULL,
  `kertastulis` double DEFAULT NULL,
  `kertaskonstruksi` double DEFAULT NULL,
  `tissue` double DEFAULT NULL,
  `brngbrngdarikertas` double DEFAULT NULL,
  `industripercetakan` double DEFAULT NULL,
  `barangcetakan` double DEFAULT NULL,
  `industriprodukpengilngnmnyakbumi` double DEFAULT NULL,
  `avgas` double DEFAULT NULL,
  `avtur` double DEFAULT NULL,
  `premium` double DEFAULT NULL,
  `minyaktanah` double DEFAULT NULL,
  `solar` double DEFAULT NULL,
  `minyakdiesel` double DEFAULT NULL,
  `minyakbakar` double DEFAULT NULL,
  `minyakpelumas` double DEFAULT NULL,
  `aspal` double DEFAULT NULL,
  `lpg` double DEFAULT NULL,
  `industribahankimia` double DEFAULT NULL,
  `kimiadasarorganik` double DEFAULT NULL,
  `kimiadasaranorganik` double DEFAULT NULL,
  `pupukurea` double DEFAULT NULL,
  `pupukalam` double DEFAULT NULL,
  `pupuknpk` double DEFAULT NULL,
  `damarbuatan` double DEFAULT NULL,
  `lateksbuatan` double DEFAULT NULL,
  `industribahankimialainnya` double DEFAULT NULL,
  `pestisidauntkpertniandanindustri` double DEFAULT NULL,
  `insektisidauntkrmhtngga` double DEFAULT NULL,
  `catkayubesi` double DEFAULT NULL,
  `cattembok` double DEFAULT NULL,
  `pernisdempuldanthinner` double DEFAULT NULL,
  `tintacetak` double DEFAULT NULL,
  `sabun` double DEFAULT NULL,
  `pembersihlantaiklosetdanlainnya` double DEFAULT NULL,
  `pastagigi` double DEFAULT NULL,
  `pemutih` double DEFAULT NULL,
  `brngbrngkosmetik` double DEFAULT NULL,
  `barangkimialainnya` double DEFAULT NULL,
  `industrifarmasi` double DEFAULT NULL,
  `produkfarmasi` double DEFAULT NULL,
  `jamu` double DEFAULT NULL,
  `industrikaret` double DEFAULT NULL,
  `banluarmobildantruk` double DEFAULT NULL,
  `banluarsepedamotor` double DEFAULT NULL,
  `banluarsepeda` double DEFAULT NULL,
  `bandalammobildantruk` double DEFAULT NULL,
  `bandalamsepedamotor` double DEFAULT NULL,
  `bandalamsepeda` double DEFAULT NULL,
  `karetasap` double DEFAULT NULL,
  `karetremilling` double DEFAULT NULL,
  `karetremah` double DEFAULT NULL,
  `brngkperlanrmhtnggadarikaret` double DEFAULT NULL,
  `brngkperluanindustridarikaret` double DEFAULT NULL,
  `industribrngdariplstik` double DEFAULT NULL,
  `pipapvc` double DEFAULT NULL,
  `pipaplstikselainpvc` double DEFAULT NULL,
  `selang` double DEFAULT NULL,
  `plstiklembaran` double DEFAULT NULL,
  `kmsandariplastik` double DEFAULT NULL,
  `prlengkpnrmhtnggadariplastik` double DEFAULT NULL,
  `industrikacadanbrngdarikaa` double DEFAULT NULL,
  `prlengkpnrmhtnggadariporselindatanahliat` double DEFAULT NULL,
  `klosetwastafeldansejenisnya` double DEFAULT NULL,
  `keramiklantai` double DEFAULT NULL,
  `batubata` double DEFAULT NULL,
  `genteng` double DEFAULT NULL,
  `semenportland` double DEFAULT NULL,
  `semenlainnya` double DEFAULT NULL,
  `batusplit` double DEFAULT NULL,
  `readymix` double DEFAULT NULL,
  `konblok` double DEFAULT NULL,
  `batako` double DEFAULT NULL,
  `pipabeton` double DEFAULT NULL,
  `tiangbeton` double DEFAULT NULL,
  `gentengsemen` double DEFAULT NULL,
  `bhnbngunandarimarmergranitdansejenis` double DEFAULT NULL,
  `industrilogamdasarbejidanbaja` double DEFAULT NULL,
  `billetbaja` double DEFAULT NULL,
  `besibeton` double DEFAULT NULL,
  `besiprofil` double DEFAULT NULL,
  `bajalembaran` double DEFAULT NULL,
  `besipipa` double DEFAULT NULL,
  `besiplat` double DEFAULT NULL,
  `kawatbeton` double DEFAULT NULL,
  `kawatlainnya` double DEFAULT NULL,
  `industrilogamdasarmulia` double DEFAULT NULL,
  `alumunium` double DEFAULT NULL,
  `timah` double DEFAULT NULL,
  `seng` double DEFAULT NULL,
  `industribaranglogamsiappasang` double DEFAULT NULL,
  `tangki` double DEFAULT NULL,
  `bahanbangunanalumunium` double DEFAULT NULL,
  `bahanbangunanbaja` double DEFAULT NULL,
  `bahanbangunansiappasanglogam` double DEFAULT NULL,
  `industribaranglogamlainnya` double DEFAULT NULL,
  `pakumurbaut` double DEFAULT NULL,
  `kalengdrum` double DEFAULT NULL,
  `alatdapurdanpertaniandarilogam` double DEFAULT NULL,
  `perabotrumahtanggadankantordarilogam` double DEFAULT NULL,
  `industrikomputerdanperlengkapan` double DEFAULT NULL,
  `komputerdanperlengkapannya` double DEFAULT NULL,
  `industriperalatanaudiodanvideo` double DEFAULT NULL,
  `pemutardvdvcd` double DEFAULT NULL,
  `industrialatukuralatuji` double DEFAULT NULL,
  `alatukur` double DEFAULT NULL,
  `arlojidanjam` double DEFAULT NULL,
  `industriperalatanfotografi` double DEFAULT NULL,
  `kameradanperlengkapannya` double DEFAULT NULL,
  `teropongdanperlengkapannya` double DEFAULT NULL,
  `industrimediamagnetik` double DEFAULT NULL,
  `mediamagnetikdanmediaoptik` double DEFAULT NULL,
  `industrimotorlistrik` double DEFAULT NULL,
  `mesinlistrik` double DEFAULT NULL,
  `industribatubaterai` double DEFAULT NULL,
  `batubaterai` double DEFAULT NULL,
  `aki` double DEFAULT NULL,
  `industrikabeldanperlengkapannya` double DEFAULT NULL,
  `perlengkapanlistrik` double DEFAULT NULL,
  `industriperalatanrumahtangga` double DEFAULT NULL,
  `mesincuci` double DEFAULT NULL,
  `lemaries` double DEFAULT NULL,
  `televisi` double DEFAULT NULL,
  `industrimesinkeperluanumum` double DEFAULT NULL,
  `perkakastangan` double DEFAULT NULL,
  `mesinpembungkuspembotolan` double DEFAULT NULL,
  `mesinpendinginindustri` double DEFAULT NULL,
  `industrimesinkeperluankhusus` double DEFAULT NULL,
  `mesinpertaniandankehutanan` double DEFAULT NULL,
  `mesinpengolahlogam` double DEFAULT NULL,
  `alatalatberat` double DEFAULT NULL,
  `industrikendaraanbermotorrodaempat` double DEFAULT NULL,
  `busdantruk` double DEFAULT NULL,
  `mobil` double DEFAULT NULL,
  `industrisukucadangdanaksesori` double DEFAULT NULL,
  `sukucdngkendaraanbermotorrodaempat` double DEFAULT NULL,
  `industrialatangkutanlainnya` double DEFAULT NULL,
  `sepeda` double DEFAULT NULL,
  `sukucadangsepeda` double DEFAULT NULL,
  `sepedamotor` double DEFAULT NULL,
  `sukucadangsepedamotor` double DEFAULT NULL,
  `industrifurnitur` double DEFAULT NULL,
  `furniturdarikayu` double DEFAULT NULL,
  `furniturdarirotanbambu` double DEFAULT NULL,
  `furniturlainnya` double DEFAULT NULL,
  `industribarangperhiasan` double DEFAULT NULL,
  `perhiasanemas` double DEFAULT NULL,
  `perhiasanperak` double DEFAULT NULL,
  `industrialatmusik` double DEFAULT NULL,
  `alatmusik` double DEFAULT NULL,
  `industrialatolahraga` double DEFAULT NULL,
  `boladanshuttlecock` double DEFAULT NULL,
  `raketdannet` double DEFAULT NULL,
  `industriperalatankedokteran` double DEFAULT NULL,
  `alatalatkedokteran` double DEFAULT NULL,
  `kacamatadanlensa` double DEFAULT NULL,
  `fenomena` text,
  `id_tw` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `impormenurutbeberapagolongan`
--

CREATE TABLE `impormenurutbeberapagolongan` (
  `id` int(11) NOT NULL,
  `bahanbakarmineral` double DEFAULT NULL,
  `migas` double DEFAULT NULL,
  `nonmigas` double DEFAULT NULL,
  `mesindanperalatanmekanik` double DEFAULT NULL,
  `kendaraanbermotordanbagiannya` double DEFAULT NULL,
  `barangdaribesiataubaja` double DEFAULT NULL,
  `bahanpeledakprodukpiroteknikkorekapi` double DEFAULT NULL,
  `mesindanperalatanlistrik` double DEFAULT NULL,
  `karetdanbarangdaripadanya` double DEFAULT NULL,
  `mutiaraalammutiarabudidayabatumuliaatausemimulia` double DEFAULT NULL,
  `anekaprodukkimia` double DEFAULT NULL,
  `instrumendanaparatusoptisfotografisinematografi` double DEFAULT NULL,
  `total10golonganbarang` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `totalimpor` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indeks_implisit`
--

CREATE TABLE `indeks_implisit` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inflasi`
--

CREATE TABLE `inflasi` (
  `id` int(11) NOT NULL,
  `bahanmakanan` double DEFAULT NULL,
  `padipadianumbiumbianhasilnya` double DEFAULT NULL,
  `daginghasilhasilnya` double DEFAULT NULL,
  `ikansegar` double DEFAULT NULL,
  `ikandiawetkan` double DEFAULT NULL,
  `telursusuhasilnya` double DEFAULT NULL,
  `sayursayuran` double DEFAULT NULL,
  `kacangkacangan` double DEFAULT NULL,
  `buahbuahan` double DEFAULT NULL,
  `bumbubumbuan` double DEFAULT NULL,
  `lemakdanminyak` double DEFAULT NULL,
  `bahanmakananlainnya` double DEFAULT NULL,
  `makananjadirokoktembakau` double DEFAULT NULL,
  `makananjadi` double DEFAULT NULL,
  `minumanyangtdkberalkohol` double DEFAULT NULL,
  `tembakaudanminumanberalkohol` double DEFAULT NULL,
  `perumahan` double DEFAULT NULL,
  `biayatempattinggal` double DEFAULT NULL,
  `bahanbakarpeneranganair` double DEFAULT NULL,
  `perlengkapanrumahtangga` double DEFAULT NULL,
  `penyelenggaraanrumahtangga` double DEFAULT NULL,
  `sandang` double DEFAULT NULL,
  `sandanglakilaki` double DEFAULT NULL,
  `sandangwanita` double DEFAULT NULL,
  `sandanganakanak` double DEFAULT NULL,
  `barangpribadisandanglainnya` double DEFAULT NULL,
  `kesehatan` double DEFAULT NULL,
  `jasakesehatan` double DEFAULT NULL,
  `obatobatan` double DEFAULT NULL,
  `jasaperawatanjasmani` double DEFAULT NULL,
  `perawatanjasmanidankosmetik` double DEFAULT NULL,
  `pendidikanrekreasidanolahraga` double DEFAULT NULL,
  `jasapendidikan` double DEFAULT NULL,
  `kursuskursuspelatihan` double DEFAULT NULL,
  `perlengkapanperalatanpendidikan` double DEFAULT NULL,
  `rekreasi` double DEFAULT NULL,
  `olahraga` double DEFAULT NULL,
  `transpordankomunikasi` double DEFAULT NULL,
  `transport` double DEFAULT NULL,
  `komunikasidanpengiriman` double DEFAULT NULL,
  `saranadanpenunjangtranspor` double DEFAULT NULL,
  `jasakeuangan` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `link` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inputd`
--

CREATE TABLE `inputd` (
  `id` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tw` int(4) NOT NULL,
  `judul` int(11) NOT NULL,
  `kab` int(11) NOT NULL,
  `prov` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `judul` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'PDRB  PENGELUARAN TD 2010 ADH BERLAKU', NULL, NULL),
(2, 'PDRB  PENGELUARAN TD 2010 ADH KONSTAN', NULL, NULL),
(3, 'DISTRIBUSI PDRB  PENGELUARAN TD 2010 ADH BERLAKU', NULL, NULL),
(4, 'PDRB  PENGELUARAN TD 2010 ADH BERLAKU QUARTER TO QUARTER', NULL, NULL),
(5, 'PERTUMBUHAN PDRB  PENGELUARAN TD 2010 ADH KONSTAN YEAR ON YEAR', NULL, NULL),
(6, 'PERTUMBUHAN PDRB  PENGELUARAN TD 2010 ADH KONSTAN Comulatif to Comulatif', NULL, NULL),
(7, 'INDEKS IMPLISIT', NULL, NULL),
(8, 'LAJU PERTUMBUHAN INDEKS IMPLISIT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kab`
--

CREATE TABLE `kab` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kab`
--

INSERT INTO `kab` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(6474, 'Kota Samarinda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasibintang`
--

CREATE TABLE `klasifikasibintang` (
  `id` int(11) NOT NULL,
  `bintang1` double DEFAULT NULL,
  `bintang2` double DEFAULT NULL,
  `bintang3` double DEFAULT NULL,
  `bintang4` double DEFAULT NULL,
  `bintang5` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_wil` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laju_pertumbuhan_indeks_implisit`
--

CREATE TABLE `laju_pertumbuhan_indeks_implisit` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1490231221),
('m140506_102106_rbac_init', 1490231344),
('m151024_072453_create_route_table', 1490231367);

-- --------------------------------------------------------

--
-- Table structure for table `neracaperdagangankaltara`
--

CREATE TABLE `neracaperdagangankaltara` (
  `id` int(11) NOT NULL,
  `ekspor` double DEFAULT NULL,
  `impor` double DEFAULT NULL,
  `neracaperdagangan` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neracaperdagangankaltim`
--

CREATE TABLE `neracaperdagangankaltim` (
  `id` int(11) NOT NULL,
  `ekspor` double DEFAULT NULL,
  `impor` double DEFAULT NULL,
  `neracaperdagangan` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaibongkarkaltara`
--

CREATE TABLE `nilaibongkarkaltara` (
  `id` int(11) NOT NULL,
  `lingkastarakan` double DEFAULT NULL,
  `nunukan` double DEFAULT NULL,
  `bunyu` double DEFAULT NULL,
  `tanjungselor` double DEFAULT NULL,
  `tarakanu` double DEFAULT NULL,
  `juatatarakan` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaibongkarkaltim`
--

CREATE TABLE `nilaibongkarkaltim` (
  `id` int(11) NOT NULL,
  `bontang` double DEFAULT NULL,
  `samarinda` double DEFAULT NULL,
  `balikpapan` double DEFAULT NULL,
  `tanjungsangata` double DEFAULT NULL,
  `adangbay` double DEFAULT NULL,
  `tanjungredeb` double DEFAULT NULL,
  `senipah` double DEFAULT NULL,
  `sangkulirang` double DEFAULT NULL,
  `pasirtanahgrogot` double DEFAULT NULL,
  `sepingganu` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaimuatkaltara`
--

CREATE TABLE `nilaimuatkaltara` (
  `id` int(11) NOT NULL,
  `lingkastarakan` double DEFAULT NULL,
  `nunukan` double DEFAULT NULL,
  `bunyu` double DEFAULT NULL,
  `tanjungselor` double DEFAULT NULL,
  `tarakanu` double DEFAULT NULL,
  `juatatarakan` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaimuatkaltim`
--

CREATE TABLE `nilaimuatkaltim` (
  `id` int(11) NOT NULL,
  `bontang` double DEFAULT NULL,
  `samarinda` double DEFAULT NULL,
  `balikpapan` double DEFAULT NULL,
  `tanjungsangata` double DEFAULT NULL,
  `adangbay` double DEFAULT NULL,
  `tanjungredeb` double DEFAULT NULL,
  `senipah` double DEFAULT NULL,
  `sangkulirang` double DEFAULT NULL,
  `pasirtanahgrogot` double DEFAULT NULL,
  `sepingganu` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntn`
--

CREATE TABLE `ntn` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntn` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntnp`
--

CREATE TABLE `ntnp` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntnp` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntp`
--

CREATE TABLE `ntp` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntp` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntph`
--

CREATE TABLE `ntph` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntph` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntpp`
--

CREATE TABLE `ntpp` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntpp` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntpr`
--

CREATE TABLE `ntpr` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntpr` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ntpt`
--

CREATE TABLE `ntpt` (
  `id` int(11) NOT NULL,
  `it` double DEFAULT NULL,
  `ib` double DEFAULT NULL,
  `ntpt` double DEFAULT NULL,
  `fenomena` text,
  `id_bulan` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pdrb_pengeluaran_td_2010_adh_berlaku`
--

CREATE TABLE `pdrb_pengeluaran_td_2010_adh_berlaku` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdrb_pengeluaran_td_2010_adh_berlaku`
--

INSERT INTO `pdrb_pengeluaran_td_2010_adh_berlaku` (`id`, `pengeluaran_konsumsi_rumah_tangga`, `pengeluaran_konsumsi_lnprt`, `pengeluaran_konsumsi_pemerintah`, `pembentukan_modal_tetap_bruto`, `perubahan_inventori`, `ekspor_luar_negeri`, `impor_luar_negeri`, `net_ekspor_antar_daerah`, `pdrb`, `total_sektoral`, `triwulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 15807511.24, 391766.3, 1685388.86, 27949691.32, 837378.84, 65217445.48, 20786352.97, 18056745.79, 109159574.86, 109159574.86, 1, 2017, NULL, NULL),
(2, 231231223, 4234, NULL, 432432, NULL, 432424, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 15807511.24, 391766.3, 1685388.86, 27949691.32, 837378.84, 65217445.48, 20786352.97, 18056745.79, 109159574.86, 109159574.86, 1, 2017, NULL, NULL),
(4, 15807511.24, 391766.3, 1685388.86, 27949691.32, 837378.84, 65217445.48, 20786352.97, 18056745.79, 109159574.86, 109159574.86, 1, 2017, NULL, NULL),
(5, 15807511.24, 391766.3, 1685388.86, 27949691.32, 837378.84, 65217445.48, 20786352.97, 18056745.79, 109159574.86, 109159574.86, 1, 2017, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pdrb_pengeluaran_td_2010_adh_konstan`
--

CREATE TABLE `pdrb_pengeluaran_td_2010_adh_konstan` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdrb_pengeluaran_td_2010_adh_konstan`
--

INSERT INTO `pdrb_pengeluaran_td_2010_adh_konstan` (`id`, `pengeluaran_konsumsi_rumah_tangga`, `pengeluaran_konsumsi_lnprt`, `pengeluaran_konsumsi_pemerintah`, `pembentukan_modal_tetap_bruto`, `perubahan_inventori`, `ekspor_luar_negeri`, `impor_luar_negeri`, `net_ekspor_antar_daerah`, `pdrb`, `total_sektoral`, `triwulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 15807511.24, 391766.3, 1685388.86, 27949691.32, 837378.84, 65217445.48, 20786352.97, 18056745.79, 109159574.86, 109159574.86, 2, 2017, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `laki` int(11) DEFAULT NULL,
  `perempuan` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendudukkerja`
--

CREATE TABLE `pendudukkerja` (
  `id` int(11) NOT NULL,
  `laki` int(11) DEFAULT NULL,
  `perempuan` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perkebunansemusim`
--

CREATE TABLE `perkebunansemusim` (
  `id` int(11) NOT NULL,
  `tebu` double DEFAULT NULL,
  `jarak_pagar` double DEFAULT NULL,
  `kenaf` double DEFAULT NULL,
  `kapas` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perkebunantahunan`
--

CREATE TABLE `perkebunantahunan` (
  `id` int(11) NOT NULL,
  `karet` double DEFAULT NULL,
  `kelapa_dalam` double DEFAULT NULL,
  `kelapa_sawit` double DEFAULT NULL,
  `kakao` double DEFAULT NULL,
  `lada` double DEFAULT NULL,
  `kopi` double DEFAULT NULL,
  `cengkeh` double DEFAULT NULL,
  `pala` double DEFAULT NULL,
  `kemiri` double DEFAULT NULL,
  `kayu_manis` double DEFAULT NULL,
  `aren` double DEFAULT NULL,
  `kapok` double DEFAULT NULL,
  `jambu_mete` double DEFAULT NULL,
  `panili` double DEFAULT NULL,
  `nipah` double DEFAULT NULL,
  `pinang` double DEFAULT NULL,
  `sagu_` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perkembanganekspor`
--

CREATE TABLE `perkembanganekspor` (
  `id` int(11) NOT NULL,
  `migas` double DEFAULT NULL,
  `minyakmentah` double DEFAULT NULL,
  `hasilminyak` double DEFAULT NULL,
  `gas` double DEFAULT NULL,
  `nonmigas` double DEFAULT NULL,
  `hs27` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perkembanganimpor`
--

CREATE TABLE `perkembanganimpor` (
  `id` int(11) NOT NULL,
  `migas` double DEFAULT NULL,
  `minyakmentah` double DEFAULT NULL,
  `hasilminyak` double DEFAULT NULL,
  `gas` double DEFAULT NULL,
  `nonmigas` double DEFAULT NULL,
  `hs27` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `fenomena` text,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc`
--

CREATE TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq`
--

CREATE TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy`
--

CREATE TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy` (
  `id` int(11) NOT NULL,
  `pengeluaran_konsumsi_rumah_tangga` double DEFAULT NULL,
  `pengeluaran_konsumsi_lnprt` double DEFAULT NULL,
  `pengeluaran_konsumsi_pemerintah` double DEFAULT NULL,
  `pembentukan_modal_tetap_bruto` double DEFAULT NULL,
  `perubahan_inventori` double DEFAULT NULL,
  `ekspor_luar_negeri` double DEFAULT NULL,
  `impor_luar_negeri` double DEFAULT NULL,
  `net_ekspor_antar_daerah` double DEFAULT NULL,
  `pdrb` double DEFAULT NULL,
  `total_sektoral` double DEFAULT NULL,
  `triwulan` smallint(6) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`name`, `alias`, `type`, `status`) VALUES
('/*', '*', '', 1),
('/akomodasi/*', '*', 'akomodasi', 1),
('/akomodasi/create', 'create', 'akomodasi', 1),
('/akomodasi/delete', 'delete', 'akomodasi', 1),
('/akomodasi/import', 'import', 'akomodasi', 1),
('/akomodasi/index', 'index', 'akomodasi', 1),
('/akomodasi/update', 'update', 'akomodasi', 1),
('/akomodasi/view', 'view', 'akomodasi', 1),
('/angkutanudara/*', '*', 'angkutanudara', 1),
('/angkutanudara/create', 'create', 'angkutanudara', 1),
('/angkutanudara/delete', 'delete', 'angkutanudara', 1),
('/angkutanudara/index', 'index', 'angkutanudara', 1),
('/angkutanudara/update', 'update', 'angkutanudara', 1),
('/angkutanudara/view', 'view', 'angkutanudara', 1),
('/aram/*', '*', 'aram', 1),
('/aram/create', 'create', 'aram', 1),
('/aram/delete', 'delete', 'aram', 1),
('/aram/index', 'index', 'aram', 1),
('/aram/update', 'update', 'aram', 1),
('/aram/view', 'view', 'aram', 1),
('/asem/*', '*', 'asem', 1),
('/asem/create', 'create', 'asem', 1),
('/asem/delete', 'delete', 'asem', 1),
('/asem/index', 'index', 'asem', 1),
('/asem/update', 'update', 'asem', 1),
('/asem/view', 'view', 'asem', 1),
('/atap/*', '*', 'atap', 1),
('/atap/create', 'create', 'atap', 1),
('/atap/delete', 'delete', 'atap', 1),
('/atap/import', 'import', 'atap', 1),
('/atap/index', 'index', 'atap', 1),
('/atap/update', 'update', 'atap', 1),
('/atap/view', 'view', 'atap', 1),
('/bapeda/*', '*', 'bapeda', 1),
('/bapeda/create', 'create', 'bapeda', 1),
('/bapeda/delete', 'delete', 'bapeda', 1),
('/bapeda/import', 'import', 'bapeda', 1),
('/bapeda/index', 'index', 'bapeda', 1),
('/bapeda/update', 'update', 'bapeda', 1),
('/bapeda/view', 'view', 'bapeda', 1),
('/bi/*', '*', 'bi', 1),
('/bi/create', 'create', 'bi', 1),
('/bi/delete', 'delete', 'bi', 1),
('/bi/import', 'import', 'bi', 1),
('/bi/index', 'index', 'bi', 1),
('/bi/update', 'update', 'bi', 1),
('/bi/view', 'view', 'bi', 1),
('/bulan/*', '*', 'bulan', 1),
('/bulan/create', 'create', 'bulan', 1),
('/bulan/delete', 'delete', 'bulan', 1),
('/bulan/index', 'index', 'bulan', 1),
('/bulan/update', 'update', 'bulan', 1),
('/bulan/view', 'view', 'bulan', 1),
('/debug/*', '*', 'debug', 1),
('/debug/default/*', '*', 'debug/default', 1),
('/debug/default/db-explain', 'db-explain', 'debug/default', 1),
('/debug/default/download-mail', 'download-mail', 'debug/default', 1),
('/debug/default/index', 'index', 'debug/default', 1),
('/debug/default/toolbar', 'toolbar', 'debug/default', 1),
('/debug/default/view', 'view', 'debug/default', 1),
('/djbp/*', '*', 'djbp', 1),
('/djbp/create', 'create', 'djbp', 1),
('/djbp/delete', 'delete', 'djbp', 1),
('/djbp/import', 'import', 'djbp', 1),
('/djbp/index', 'index', 'djbp', 1),
('/djbp/update', 'update', 'djbp', 1),
('/djbp/view', 'view', 'djbp', 1),
('/ekspormenurutbeberapagolongan/*', '*', 'ekspormenurutbeberapagolongan', 1),
('/ekspormenurutbeberapagolongan/create', 'create', 'ekspormenurutbeberapagolongan', 1),
('/ekspormenurutbeberapagolongan/delete', 'delete', 'ekspormenurutbeberapagolongan', 1),
('/ekspormenurutbeberapagolongan/index', 'index', 'ekspormenurutbeberapagolongan', 1),
('/ekspormenurutbeberapagolongan/update', 'update', 'ekspormenurutbeberapagolongan', 1),
('/ekspormenurutbeberapagolongan/view', 'view', 'ekspormenurutbeberapagolongan', 1),
('/gii/*', '*', 'gii', 1),
('/gii/default/*', '*', 'gii/default', 1),
('/gii/default/action', 'action', 'gii/default', 1),
('/gii/default/diff', 'diff', 'gii/default', 1),
('/gii/default/index', 'index', 'gii/default', 1),
('/gii/default/preview', 'preview', 'gii/default', 1),
('/gii/default/view', 'view', 'gii/default', 1),
('/ihk/*', '*', 'ihk', 1),
('/ihk/create', 'create', 'ihk', 1),
('/ihk/delete', 'delete', 'ihk', 1),
('/ihk/index', 'index', 'ihk', 1),
('/ihk/update', 'update', 'ihk', 1),
('/ihk/view', 'view', 'ihk', 1),
('/ihp/*', '*', 'ihp', 1),
('/ihp/create', 'create', 'ihp', 1),
('/ihp/delete', 'delete', 'ihp', 1),
('/ihp/index', 'index', 'ihp', 1),
('/ihp/update', 'update', 'ihp', 1),
('/ihp/view', 'view', 'ihp', 1),
('/ihpb/*', '*', 'ihpb', 1),
('/ihpb/create', 'create', 'ihpb', 1),
('/ihpb/delete', 'delete', 'ihpb', 1),
('/ihpb/index', 'index', 'ihpb', 1),
('/ihpb/update', 'update', 'ihpb', 1),
('/ihpb/view', 'view', 'ihpb', 1),
('/impormenurutbeberapagolongan/*', '*', 'impormenurutbeberapagolongan', 1),
('/impormenurutbeberapagolongan/create', 'create', 'impormenurutbeberapagolongan', 1),
('/impormenurutbeberapagolongan/delete', 'delete', 'impormenurutbeberapagolongan', 1),
('/impormenurutbeberapagolongan/index', 'index', 'impormenurutbeberapagolongan', 1),
('/impormenurutbeberapagolongan/update', 'update', 'impormenurutbeberapagolongan', 1),
('/impormenurutbeberapagolongan/view', 'view', 'impormenurutbeberapagolongan', 1),
('/inflasi/*', '*', 'inflasi', 1),
('/inflasi/create', 'create', 'inflasi', 1),
('/inflasi/delete', 'delete', 'inflasi', 1),
('/inflasi/index', 'index', 'inflasi', 1),
('/inflasi/update', 'update', 'inflasi', 1),
('/inflasi/view', 'view', 'inflasi', 1),
('/klasifikasibintang/*', '*', 'klasifikasibintang', 1),
('/klasifikasibintang/create', 'create', 'klasifikasibintang', 1),
('/klasifikasibintang/delete', 'delete', 'klasifikasibintang', 1),
('/klasifikasibintang/index', 'index', 'klasifikasibintang', 1),
('/klasifikasibintang/update', 'update', 'klasifikasibintang', 1),
('/klasifikasibintang/view', 'view', 'klasifikasibintang', 1),
('/mimin/*', '*', 'mimin', 1),
('/mimin/role/*', '*', 'mimin/role', 1),
('/mimin/role/create', 'create', 'mimin/role', 1),
('/mimin/role/delete', 'delete', 'mimin/role', 1),
('/mimin/role/index', 'index', 'mimin/role', 1),
('/mimin/role/permission', 'permission', 'mimin/role', 1),
('/mimin/role/update', 'update', 'mimin/role', 1),
('/mimin/role/view', 'view', 'mimin/role', 1),
('/mimin/route/*', '*', 'mimin/route', 1),
('/mimin/route/create', 'create', 'mimin/route', 1),
('/mimin/route/delete', 'delete', 'mimin/route', 1),
('/mimin/route/generate', 'generate', 'mimin/route', 1),
('/mimin/route/index', 'index', 'mimin/route', 1),
('/mimin/route/update', 'update', 'mimin/route', 1),
('/mimin/route/view', 'view', 'mimin/route', 1),
('/mimin/user/*', '*', 'mimin/user', 1),
('/mimin/user/create', 'create', 'mimin/user', 1),
('/mimin/user/delete', 'delete', 'mimin/user', 1),
('/mimin/user/index', 'index', 'mimin/user', 1),
('/mimin/user/update', 'update', 'mimin/user', 1),
('/mimin/user/view', 'view', 'mimin/user', 1),
('/neracaperdagangankaltara/*', '*', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltara/create', 'create', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltara/delete', 'delete', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltara/index', 'index', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltara/update', 'update', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltara/view', 'view', 'neracaperdagangankaltara', 1),
('/neracaperdagangankaltim/*', '*', 'neracaperdagangankaltim', 1),
('/neracaperdagangankaltim/create', 'create', 'neracaperdagangankaltim', 1),
('/neracaperdagangankaltim/delete', 'delete', 'neracaperdagangankaltim', 1),
('/neracaperdagangankaltim/index', 'index', 'neracaperdagangankaltim', 1),
('/neracaperdagangankaltim/update', 'update', 'neracaperdagangankaltim', 1),
('/neracaperdagangankaltim/view', 'view', 'neracaperdagangankaltim', 1),
('/nilaibongkarkaltara/*', '*', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltara/create', 'create', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltara/delete', 'delete', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltara/index', 'index', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltara/update', 'update', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltara/view', 'view', 'nilaibongkarkaltara', 1),
('/nilaibongkarkaltim/*', '*', 'nilaibongkarkaltim', 1),
('/nilaibongkarkaltim/create', 'create', 'nilaibongkarkaltim', 1),
('/nilaibongkarkaltim/delete', 'delete', 'nilaibongkarkaltim', 1),
('/nilaibongkarkaltim/index', 'index', 'nilaibongkarkaltim', 1),
('/nilaibongkarkaltim/update', 'update', 'nilaibongkarkaltim', 1),
('/nilaibongkarkaltim/view', 'view', 'nilaibongkarkaltim', 1),
('/nilaimuatkaltara/*', '*', 'nilaimuatkaltara', 1),
('/nilaimuatkaltara/create', 'create', 'nilaimuatkaltara', 1),
('/nilaimuatkaltara/delete', 'delete', 'nilaimuatkaltara', 1),
('/nilaimuatkaltara/index', 'index', 'nilaimuatkaltara', 1),
('/nilaimuatkaltara/update', 'update', 'nilaimuatkaltara', 1),
('/nilaimuatkaltara/view', 'view', 'nilaimuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/*', '*', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/create', 'create', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/delete', 'delete', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/index', 'index', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/update', 'update', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltaramuatkaltara/view', 'view', 'nilaimuatkaltaramuatkaltara', 1),
('/nilaimuatkaltim/*', '*', 'nilaimuatkaltim', 1),
('/nilaimuatkaltim/create', 'create', 'nilaimuatkaltim', 1),
('/nilaimuatkaltim/delete', 'delete', 'nilaimuatkaltim', 1),
('/nilaimuatkaltim/index', 'index', 'nilaimuatkaltim', 1),
('/nilaimuatkaltim/update', 'update', 'nilaimuatkaltim', 1),
('/nilaimuatkaltim/view', 'view', 'nilaimuatkaltim', 1),
('/ntn/*', '*', 'ntn', 1),
('/ntn/create', 'create', 'ntn', 1),
('/ntn/delete', 'delete', 'ntn', 1),
('/ntn/index', 'index', 'ntn', 1),
('/ntn/update', 'update', 'ntn', 1),
('/ntn/view', 'view', 'ntn', 1),
('/ntnp/*', '*', 'ntnp', 1),
('/ntnp/create', 'create', 'ntnp', 1),
('/ntnp/delete', 'delete', 'ntnp', 1),
('/ntnp/index', 'index', 'ntnp', 1),
('/ntnp/update', 'update', 'ntnp', 1),
('/ntnp/view', 'view', 'ntnp', 1),
('/ntp/*', '*', 'ntp', 1),
('/ntp/create', 'create', 'ntp', 1),
('/ntp/delete', 'delete', 'ntp', 1),
('/ntp/index', 'index', 'ntp', 1),
('/ntp/update', 'update', 'ntp', 1),
('/ntp/view', 'view', 'ntp', 1),
('/ntph/*', '*', 'ntph', 1),
('/ntph/create', 'create', 'ntph', 1),
('/ntph/delete', 'delete', 'ntph', 1),
('/ntph/index', 'index', 'ntph', 1),
('/ntph/update', 'update', 'ntph', 1),
('/ntph/view', 'view', 'ntph', 1),
('/ntpp/*', '*', 'ntpp', 1),
('/ntpp/create', 'create', 'ntpp', 1),
('/ntpp/delete', 'delete', 'ntpp', 1),
('/ntpp/index', 'index', 'ntpp', 1),
('/ntpp/update', 'update', 'ntpp', 1),
('/ntpp/view', 'view', 'ntpp', 1),
('/ntpr/*', '*', 'ntpr', 1),
('/ntpr/create', 'create', 'ntpr', 1),
('/ntpr/delete', 'delete', 'ntpr', 1),
('/ntpr/index', 'index', 'ntpr', 1),
('/ntpr/update', 'update', 'ntpr', 1),
('/ntpr/view', 'view', 'ntpr', 1),
('/ntpt/*', '*', 'ntpt', 1),
('/ntpt/create', 'create', 'ntpt', 1),
('/ntpt/delete', 'delete', 'ntpt', 1),
('/ntpt/index', 'index', 'ntpt', 1),
('/ntpt/update', 'update', 'ntpt', 1),
('/ntpt/view', 'view', 'ntpt', 1),
('/penduduk/*', '*', 'penduduk', 1),
('/penduduk/create', 'create', 'penduduk', 1),
('/penduduk/delete', 'delete', 'penduduk', 1),
('/penduduk/import', 'import', 'penduduk', 1),
('/penduduk/index', 'index', 'penduduk', 1),
('/penduduk/update', 'update', 'penduduk', 1),
('/penduduk/view', 'view', 'penduduk', 1),
('/pendudukkerja/*', '*', 'pendudukkerja', 1),
('/pendudukkerja/create', 'create', 'pendudukkerja', 1),
('/pendudukkerja/delete', 'delete', 'pendudukkerja', 1),
('/pendudukkerja/index', 'index', 'pendudukkerja', 1),
('/pendudukkerja/update', 'update', 'pendudukkerja', 1),
('/pendudukkerja/view', 'view', 'pendudukkerja', 1),
('/perkebunansemusim/*', '*', 'perkebunansemusim', 1),
('/perkebunansemusim/create', 'create', 'perkebunansemusim', 1),
('/perkebunansemusim/delete', 'delete', 'perkebunansemusim', 1),
('/perkebunansemusim/index', 'index', 'perkebunansemusim', 1),
('/perkebunansemusim/update', 'update', 'perkebunansemusim', 1),
('/perkebunansemusim/view', 'view', 'perkebunansemusim', 1),
('/perkebunantahunan/*', '*', 'perkebunantahunan', 1),
('/perkebunantahunan/create', 'create', 'perkebunantahunan', 1),
('/perkebunantahunan/delete', 'delete', 'perkebunantahunan', 1),
('/perkebunantahunan/index', 'index', 'perkebunantahunan', 1),
('/perkebunantahunan/update', 'update', 'perkebunantahunan', 1),
('/perkebunantahunan/view', 'view', 'perkebunantahunan', 1),
('/perkembanganekspor/*', '*', 'perkembanganekspor', 1),
('/perkembanganekspor/create', 'create', 'perkembanganekspor', 1),
('/perkembanganekspor/delete', 'delete', 'perkembanganekspor', 1),
('/perkembanganekspor/index', 'index', 'perkembanganekspor', 1),
('/perkembanganekspor/update', 'update', 'perkembanganekspor', 1),
('/perkembanganekspor/view', 'view', 'perkembanganekspor', 1),
('/perkembanganimpor/*', '*', 'perkembanganimpor', 1),
('/perkembanganimpor/create', 'create', 'perkembanganimpor', 1),
('/perkembanganimpor/delete', 'delete', 'perkembanganimpor', 1),
('/perkembanganimpor/index', 'index', 'perkembanganimpor', 1),
('/perkembanganimpor/update', 'update', 'perkembanganimpor', 1),
('/perkembanganimpor/view', 'view', 'perkembanganimpor', 1),
('/satuan/*', '*', 'satuan', 1),
('/satuan/create', 'create', 'satuan', 1),
('/satuan/delete', 'delete', 'satuan', 1),
('/satuan/index', 'index', 'satuan', 1),
('/satuan/update', 'update', 'satuan', 1),
('/satuan/view', 'view', 'satuan', 1),
('/sayurbuahsemusim/*', '*', 'sayurbuahsemusim', 1),
('/sayurbuahsemusim/create', 'create', 'sayurbuahsemusim', 1),
('/sayurbuahsemusim/delete', 'delete', 'sayurbuahsemusim', 1),
('/sayurbuahsemusim/index', 'index', 'sayurbuahsemusim', 1),
('/sayurbuahsemusim/update', 'update', 'sayurbuahsemusim', 1),
('/sayurbuahsemusim/view', 'view', 'sayurbuahsemusim', 1),
('/sayurbuahsetahun/*', '*', 'sayurbuahsetahun', 1),
('/sayurbuahsetahun/create', 'create', 'sayurbuahsetahun', 1),
('/sayurbuahsetahun/delete', 'delete', 'sayurbuahsetahun', 1),
('/sayurbuahsetahun/index', 'index', 'sayurbuahsetahun', 1),
('/sayurbuahsetahun/update', 'update', 'sayurbuahsetahun', 1),
('/sayurbuahsetahun/view', 'view', 'sayurbuahsetahun', 1),
('/site/*', '*', 'site', 1),
('/site/about', 'about', 'site', 1),
('/site/captcha', 'captcha', 'site', 1),
('/site/contact', 'contact', 'site', 1),
('/site/error', 'error', 'site', 1),
('/site/index', 'index', 'site', 1),
('/site/login', 'login', 'site', 1),
('/site/logout', 'logout', 'site', 1),
('/tanamanbiofarmaka/*', '*', 'tanamanbiofarmaka', 1),
('/tanamanbiofarmaka/create', 'create', 'tanamanbiofarmaka', 1),
('/tanamanbiofarmaka/delete', 'delete', 'tanamanbiofarmaka', 1),
('/tanamanbiofarmaka/index', 'index', 'tanamanbiofarmaka', 1),
('/tanamanbiofarmaka/update', 'update', 'tanamanbiofarmaka', 1),
('/tanamanbiofarmaka/view', 'view', 'tanamanbiofarmaka', 1),
('/tanamanhias/*', '*', 'tanamanhias', 1),
('/tanamanhias/create', 'create', 'tanamanhias', 1),
('/tanamanhias/delete', 'delete', 'tanamanhias', 1),
('/tanamanhias/index', 'index', 'tanamanhias', 1),
('/tanamanhias/update', 'update', 'tanamanhias', 1),
('/tanamanhias/view', 'view', 'tanamanhias', 1),
('/triwulan/*', '*', 'triwulan', 1),
('/triwulan/create', 'create', 'triwulan', 1),
('/triwulan/delete', 'delete', 'triwulan', 1),
('/triwulan/index', 'index', 'triwulan', 1),
('/triwulan/update', 'update', 'triwulan', 1),
('/triwulan/view', 'view', 'triwulan', 1),
('/vlmebongkarkaltara/*', '*', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltara/create', 'create', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltara/delete', 'delete', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltara/index', 'index', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltara/update', 'update', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltara/view', 'view', 'vlmebongkarkaltara', 1),
('/vlmebongkarkaltim/*', '*', 'vlmebongkarkaltim', 1),
('/vlmebongkarkaltim/create', 'create', 'vlmebongkarkaltim', 1),
('/vlmebongkarkaltim/delete', 'delete', 'vlmebongkarkaltim', 1),
('/vlmebongkarkaltim/index', 'index', 'vlmebongkarkaltim', 1),
('/vlmebongkarkaltim/update', 'update', 'vlmebongkarkaltim', 1),
('/vlmebongkarkaltim/view', 'view', 'vlmebongkarkaltim', 1),
('/vlmemuatkaltara/*', '*', 'vlmemuatkaltara', 1),
('/vlmemuatkaltara/create', 'create', 'vlmemuatkaltara', 1),
('/vlmemuatkaltara/delete', 'delete', 'vlmemuatkaltara', 1),
('/vlmemuatkaltara/index', 'index', 'vlmemuatkaltara', 1),
('/vlmemuatkaltara/update', 'update', 'vlmemuatkaltara', 1),
('/vlmemuatkaltara/view', 'view', 'vlmemuatkaltara', 1),
('/vlmemuatkaltim/*', '*', 'vlmemuatkaltim', 1),
('/vlmemuatkaltim/create', 'create', 'vlmemuatkaltim', 1),
('/vlmemuatkaltim/delete', 'delete', 'vlmemuatkaltim', 1),
('/vlmemuatkaltim/index', 'index', 'vlmemuatkaltim', 1),
('/vlmemuatkaltim/update', 'update', 'vlmemuatkaltim', 1),
('/vlmemuatkaltim/view', 'view', 'vlmemuatkaltim', 1);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `nama` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rupiah', NULL, NULL),
(2, 'Ton', NULL, NULL),
(3, 'Kg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sayurbuahsemusim`
--

CREATE TABLE `sayurbuahsemusim` (
  `id` int(11) NOT NULL,
  `bawang_merah` double DEFAULT NULL,
  `bawang_putih` double DEFAULT NULL,
  `bawang_daun` double DEFAULT NULL,
  `kentang_` double DEFAULT NULL,
  `kubis` double DEFAULT NULL,
  `kembang_kol` double DEFAULT NULL,
  `petsaisawi` double DEFAULT NULL,
  `wortel` double DEFAULT NULL,
  `lobak` double DEFAULT NULL,
  `kacang_merah` double DEFAULT NULL,
  `kacang_panjang` double DEFAULT NULL,
  `cabe_besar` double DEFAULT NULL,
  `cabe_rawit` double DEFAULT NULL,
  `paprika` double DEFAULT NULL,
  `jamur` double DEFAULT NULL,
  `tomat` double DEFAULT NULL,
  `terung` double DEFAULT NULL,
  `buncis` double DEFAULT NULL,
  `ketimun` double DEFAULT NULL,
  `labu_siam` double DEFAULT NULL,
  `kangkung` double DEFAULT NULL,
  `bayam` double DEFAULT NULL,
  `melon` double DEFAULT NULL,
  `semangka` double DEFAULT NULL,
  `blewah` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sayurbuahsetahun`
--

CREATE TABLE `sayurbuahsetahun` (
  `id` int(11) NOT NULL,
  `alpukat` double DEFAULT NULL,
  `belimbing` double DEFAULT NULL,
  `duku_langsat` double DEFAULT NULL,
  `durian` double DEFAULT NULL,
  `jambu_biji` double DEFAULT NULL,
  `jambu_air` double DEFAULT NULL,
  `jeruk_siam_keprok` double DEFAULT NULL,
  `jeruk_besar` double DEFAULT NULL,
  `mangga` double DEFAULT NULL,
  `manggis` double DEFAULT NULL,
  `nangka_cempedak` double DEFAULT NULL,
  `nenas` double DEFAULT NULL,
  `pepaya` double DEFAULT NULL,
  `pisang` double DEFAULT NULL,
  `rambutan` double DEFAULT NULL,
  `salak` double DEFAULT NULL,
  `sawo` double DEFAULT NULL,
  `markisa_konyal` double DEFAULT NULL,
  `sirsak` double DEFAULT NULL,
  `sukun` double DEFAULT NULL,
  `melinjo` double DEFAULT NULL,
  `petai` double DEFAULT NULL,
  `jengkol` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(2016, 2016, NULL, NULL),
(2017, 2017, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tanamanbiofarmaka`
--

CREATE TABLE `tanamanbiofarmaka` (
  `id` int(11) NOT NULL,
  `jahe` double DEFAULT NULL,
  `laos_lengkuas` double DEFAULT NULL,
  `kencur` double DEFAULT NULL,
  `kunyit` double DEFAULT NULL,
  `lempuyang` double DEFAULT NULL,
  `temulawak` double DEFAULT NULL,
  `temuireng` double DEFAULT NULL,
  `temukunci` double DEFAULT NULL,
  `dlingo_dringo` double DEFAULT NULL,
  `kapulaga` double DEFAULT NULL,
  `mengkudu_pace` double DEFAULT NULL,
  `mahkota_dewa` double DEFAULT NULL,
  `kejibeling` double DEFAULT NULL,
  `sambiloto` double DEFAULT NULL,
  `lidah_buaya` double DEFAULT NULL,
  `biofarmaka_lainnya` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanamanhias`
--

CREATE TABLE `tanamanhias` (
  `id` int(11) NOT NULL,
  `anggrek` double DEFAULT NULL,
  `anthurium_bunga` double DEFAULT NULL,
  `anyelir` double DEFAULT NULL,
  `gerbera_hebras` double DEFAULT NULL,
  `gladiol` double DEFAULT NULL,
  `heliconia_pisang_pisangan` double DEFAULT NULL,
  `krisan` double DEFAULT NULL,
  `mawar` double DEFAULT NULL,
  `sedap_malam` double DEFAULT NULL,
  `dracaena` double DEFAULT NULL,
  `melati` double DEFAULT NULL,
  `palem` double DEFAULT NULL,
  `aglaonema` double DEFAULT NULL,
  `adenium_kamboja_jepang` double DEFAULT NULL,
  `euphorbia` double DEFAULT NULL,
  `phylodendron` double DEFAULT NULL,
  `pakis` double DEFAULT NULL,
  `monstera` double DEFAULT NULL,
  `ixora_soka` double DEFAULT NULL,
  `cordyline` double DEFAULT NULL,
  `diffenbachia` double DEFAULT NULL,
  `sansevieria_pedang_pedangan` double DEFAULT NULL,
  `anthurium_daun` double DEFAULT NULL,
  `caladium` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id` int(11) NOT NULL,
  `nama` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triwulan`
--

INSERT INTO `triwulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Triwulan I', NULL, NULL),
(2, 'Triwulan II', NULL, NULL),
(3, 'Triwulan III', NULL, NULL),
(4, 'Triwulan IV', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `auth_key` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(225) NOT NULL,
  `password_reset_token` varchar(225) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `email`, `password_hash`, `password_reset_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'haydiru', 'SRzdiID6ygIn7bHZwRWb52xmIUPdbOnF', 'haydiru@gmail.com', '$2y$13$NsqP/SJphR8ONDDMRT.vZ.H4muyckTgHy0nRJRdRZn78u69I.Y8Jq', NULL, 10, NULL, 1490234551),
(2, 'bi', '', 'bi@bi.go.id', '$2y$13$NJEnHBcGG3jpWadYBx3Sy.GksITM1g5/CeFE1hfGZlNyRgBViJZ7q', NULL, 10, 1491883805, 1492487060),
(3, 'produksi', '', 'produksi@bps.go.id', '$2y$13$/1GHBYgJx1IB9M70kkzcJ.ySBzynz68kdIigJQoqKa5mkObvob5P6', NULL, 10, 1492508611, 1492508611),
(4, 'distribusi', '', 'distribusi@gmail.co', '$2y$13$EtRIKiywUNL1bccVskGlT.jv0JkOPqxzKnqVruCEMq9YdekqyaTGK', NULL, 10, 1492508693, 1492508693),
(5, 'admin', '', 'admin@mail.com', '$2y$13$BtxQbzQVmHlMOteEnGdP8.VxKgyTshI2jF9O./zHixQvlnOJPnB2q', NULL, 10, 1492575747, 1492575822),
(6, 'sosial', '', 'sosial@mail.com', '$2y$13$ctTkojcQqJcrtmbbBEpSuOIUxhKNZIWAO6ll8BYKZ/pK/6AQPNybq', NULL, 10, 1492577965, 1492577965),
(7, 'ratna', '', 'ratna@gmail.com', '$2y$13$7vJ.rAr5c6f3ERfcEHf0oeAmHfRPh84g3sU.mPmwSNE0pN8bwFhmq', NULL, 10, 1520837325, 1520837325);

-- --------------------------------------------------------

--
-- Table structure for table `vlmebongkarkaltara`
--

CREATE TABLE `vlmebongkarkaltara` (
  `id` int(11) NOT NULL,
  `lingkastarakan` double DEFAULT NULL,
  `nunukan` double DEFAULT NULL,
  `bunyu` double DEFAULT NULL,
  `tanjungselor` double DEFAULT NULL,
  `tarakanu` double DEFAULT NULL,
  `juatatarakan` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vlmebongkarkaltim`
--

CREATE TABLE `vlmebongkarkaltim` (
  `id` int(11) NOT NULL,
  `bontang` double DEFAULT NULL,
  `samarinda` double DEFAULT NULL,
  `balikpapan` double DEFAULT NULL,
  `tanjungsangata` double DEFAULT NULL,
  `adangbay` double DEFAULT NULL,
  `tanjungredeb` double DEFAULT NULL,
  `senipah` double DEFAULT NULL,
  `sangkulirang` double DEFAULT NULL,
  `pasirtanahgrogot` double DEFAULT NULL,
  `sepingganu` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vlmemuatkaltara`
--

CREATE TABLE `vlmemuatkaltara` (
  `id` int(11) NOT NULL,
  `lingkastarakan` double DEFAULT NULL,
  `nunukan` double DEFAULT NULL,
  `bunyu` double DEFAULT NULL,
  `tanjungselor` double DEFAULT NULL,
  `tarakanu` double DEFAULT NULL,
  `juatatarakan` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vlmemuatkaltim`
--

CREATE TABLE `vlmemuatkaltim` (
  `id` int(11) NOT NULL,
  `bontang` double DEFAULT NULL,
  `samarinda` double DEFAULT NULL,
  `balikpapan` double DEFAULT NULL,
  `tanjungsangata` double DEFAULT NULL,
  `adangbay` double DEFAULT NULL,
  `tanjungredeb` double DEFAULT NULL,
  `senipah` double DEFAULT NULL,
  `sangkulirang` double DEFAULT NULL,
  `pasirtanahgrogot` double DEFAULT NULL,
  `sepingganu` double DEFAULT NULL,
  `lainnya` double DEFAULT NULL,
  `jumlahtotal` double DEFAULT NULL,
  `fenomena` text,
  `id_wil` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`) VALUES
(6400, 'Kalimantan Timur'),
(6401, 'Paser'),
(6402, 'Kutai Barat'),
(6403, 'Kutai Kartanegara'),
(6404, 'Kutai Timur'),
(6405, 'Berau'),
(6409, 'PPU'),
(6411, 'Mahakam Hulu'),
(6471, 'Balikpapan'),
(6472, 'Samarinada'),
(6474, 'Bontang'),
(6500, 'Kalimantan Utara'),
(6501, 'Malinau'),
(6502, 'Bulungan'),
(6503, 'KTT'),
(6504, 'Nunukan'),
(6571, 'Tarakan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angkutanudara`
--
ALTER TABLE `angkutanudara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aram`
--
ALTER TABLE `aram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asem`
--
ALTER TABLE `asem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atap`
--
ALTER TABLE `atap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bapeda`
--
ALTER TABLE `bapeda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bi`
--
ALTER TABLE `bi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku`
--
ALTER TABLE `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `djbp`
--
ALTER TABLE `djbp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekspormenurutbeberapagolongan`
--
ALTER TABLE `ekspormenurutbeberapagolongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fenomena`
--
ALTER TABLE `fenomena`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ihk`
--
ALTER TABLE `ihk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ihp`
--
ALTER TABLE `ihp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ihpb`
--
ALTER TABLE `ihpb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impormenurutbeberapagolongan`
--
ALTER TABLE `impormenurutbeberapagolongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indeks_implisit`
--
ALTER TABLE `indeks_implisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inflasi`
--
ALTER TABLE `inflasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputd`
--
ALTER TABLE `inputd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasibintang`
--
ALTER TABLE `klasifikasibintang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laju_pertumbuhan_indeks_implisit`
--
ALTER TABLE `laju_pertumbuhan_indeks_implisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `neracaperdagangankaltara`
--
ALTER TABLE `neracaperdagangankaltara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neracaperdagangankaltim`
--
ALTER TABLE `neracaperdagangankaltim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaibongkarkaltara`
--
ALTER TABLE `nilaibongkarkaltara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaibongkarkaltim`
--
ALTER TABLE `nilaibongkarkaltim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaimuatkaltara`
--
ALTER TABLE `nilaimuatkaltara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaimuatkaltim`
--
ALTER TABLE `nilaimuatkaltim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntn`
--
ALTER TABLE `ntn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntnp`
--
ALTER TABLE `ntnp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntp`
--
ALTER TABLE `ntp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntph`
--
ALTER TABLE `ntph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntpp`
--
ALTER TABLE `ntpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntpr`
--
ALTER TABLE `ntpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntpt`
--
ALTER TABLE `ntpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdrb_pengeluaran_td_2010_adh_berlaku`
--
ALTER TABLE `pdrb_pengeluaran_td_2010_adh_berlaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdrb_pengeluaran_td_2010_adh_konstan`
--
ALTER TABLE `pdrb_pengeluaran_td_2010_adh_konstan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendudukkerja`
--
ALTER TABLE `pendudukkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkebunansemusim`
--
ALTER TABLE `perkebunansemusim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkebunantahunan`
--
ALTER TABLE `perkebunantahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkembanganekspor`
--
ALTER TABLE `perkembanganekspor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkembanganimpor`
--
ALTER TABLE `perkembanganimpor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayurbuahsemusim`
--
ALTER TABLE `sayurbuahsemusim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayurbuahsetahun`
--
ALTER TABLE `sayurbuahsetahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanamanbiofarmaka`
--
ALTER TABLE `tanamanbiofarmaka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanamanhias`
--
ALTER TABLE `tanamanhias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vlmebongkarkaltara`
--
ALTER TABLE `vlmebongkarkaltara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vlmebongkarkaltim`
--
ALTER TABLE `vlmebongkarkaltim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vlmemuatkaltara`
--
ALTER TABLE `vlmemuatkaltara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vlmemuatkaltim`
--
ALTER TABLE `vlmemuatkaltim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `angkutanudara`
--
ALTER TABLE `angkutanudara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aram`
--
ALTER TABLE `aram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asem`
--
ALTER TABLE `asem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `atap`
--
ALTER TABLE `atap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bapeda`
--
ALTER TABLE `bapeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bi`
--
ALTER TABLE `bi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku`
--
ALTER TABLE `distribusi_pdrb_pengeluaran_td_2010_adh_berlaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `djbp`
--
ALTER TABLE `djbp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ekspormenurutbeberapagolongan`
--
ALTER TABLE `ekspormenurutbeberapagolongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fenomena`
--
ALTER TABLE `fenomena`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ihk`
--
ALTER TABLE `ihk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ihp`
--
ALTER TABLE `ihp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ihpb`
--
ALTER TABLE `ihpb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `impormenurutbeberapagolongan`
--
ALTER TABLE `impormenurutbeberapagolongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `indeks_implisit`
--
ALTER TABLE `indeks_implisit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inflasi`
--
ALTER TABLE `inflasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inputd`
--
ALTER TABLE `inputd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `klasifikasibintang`
--
ALTER TABLE `klasifikasibintang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laju_pertumbuhan_indeks_implisit`
--
ALTER TABLE `laju_pertumbuhan_indeks_implisit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `neracaperdagangankaltara`
--
ALTER TABLE `neracaperdagangankaltara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `neracaperdagangankaltim`
--
ALTER TABLE `neracaperdagangankaltim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaibongkarkaltara`
--
ALTER TABLE `nilaibongkarkaltara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaibongkarkaltim`
--
ALTER TABLE `nilaibongkarkaltim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaimuatkaltara`
--
ALTER TABLE `nilaimuatkaltara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaimuatkaltim`
--
ALTER TABLE `nilaimuatkaltim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntn`
--
ALTER TABLE `ntn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntnp`
--
ALTER TABLE `ntnp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntp`
--
ALTER TABLE `ntp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntph`
--
ALTER TABLE `ntph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntpp`
--
ALTER TABLE `ntpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntpr`
--
ALTER TABLE `ntpr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ntpt`
--
ALTER TABLE `ntpt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pdrb_pengeluaran_td_2010_adh_berlaku`
--
ALTER TABLE `pdrb_pengeluaran_td_2010_adh_berlaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pdrb_pengeluaran_td_2010_adh_konstan`
--
ALTER TABLE `pdrb_pengeluaran_td_2010_adh_konstan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pendudukkerja`
--
ALTER TABLE `pendudukkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perkebunansemusim`
--
ALTER TABLE `perkebunansemusim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perkebunantahunan`
--
ALTER TABLE `perkebunantahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perkembanganekspor`
--
ALTER TABLE `perkembanganekspor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perkembanganimpor`
--
ALTER TABLE `perkembanganimpor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_qtoq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy`
--
ALTER TABLE `pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ytoy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sayurbuahsemusim`
--
ALTER TABLE `sayurbuahsemusim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sayurbuahsetahun`
--
ALTER TABLE `sayurbuahsetahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018;
--
-- AUTO_INCREMENT for table `tanamanbiofarmaka`
--
ALTER TABLE `tanamanbiofarmaka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tanamanhias`
--
ALTER TABLE `tanamanhias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vlmebongkarkaltara`
--
ALTER TABLE `vlmebongkarkaltara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vlmebongkarkaltim`
--
ALTER TABLE `vlmebongkarkaltim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vlmemuatkaltara`
--
ALTER TABLE `vlmemuatkaltara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vlmemuatkaltim`
--
ALTER TABLE `vlmemuatkaltim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
