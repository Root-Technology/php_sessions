-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 août 2023 à 13:46
-- Version du serveur : 10.5.19-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u607992664_himalaya`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id_agent` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `borndate` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companyyear` varchar(255) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `origincountry` varchar(255) DEFAULT NULL,
  `origincity` varchar(255) DEFAULT NULL,
  `companynumber` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'hm123456',
  `contract` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id_agent`, `name`, `email`, `number`, `country`, `borndate`, `companyname`, `companyyear`, `ceo`, `origincountry`, `origincity`, `companynumber`, `adress`, `code`, `status`, `password`, `contract`, `created`) VALUES
(1, 'Nelson KIlima', '21702914@student.ciu.edu.tr', '05488894886', 'Denmark', '1995-08-21', 'Root Tech', '2014', 'Modeste', 'Martinique', 'Nicosia', '1234567', 'Kugulu Sokak', '62Ne43', 1, 'hm123456', NULL, '2022-07-17 20:19:11'),
(2, 'nelson', 'kilimanelson12@gmail.com', '+905338440978', 'Congo, The Democratic Republic of The', '1995-08-02', 'Himalaya Travel ', '2017', 'gdhte', 'Congo, The Democratic Republic of The', 'lubumbashi', '+905338440978', 'lubumbashi', '62ne63', 0, 'hm123456', NULL, '2022-07-19 07:18:32'),
(3, 'ACHILLE MWANDOKA KALAMBI', 'achillekalambi@gmail.com', '+905391098531', 'Turkey', '2022-07-19', 'Lighten way service', '2019', 'ACHILLE MWANDOKA KALAMBI', 'Turkey', 'Lefkosa ', '+905391098531', 'Gonyeli/ deniz 2 apt ', '62AC81', 1, 'hm123456', NULL, '2022-07-19 07:26:12'),
(4, 'GILBERT BUSHIRI ', 'gilbertbushiri4@gmail.com', '+905338769460', 'Congo, The Democratic Republic of The', '2022-07-19', 'Go_Foward ', '2022', 'GILBERT BUSHIRI ', 'Congo, The Democratic Republic of The', 'Lubumbashi ', '+905338769460', 'Lubumbashi, gambela 3, C/ Lubumbashi ', '62GI55', 1, 'hm123456', NULL, '2022-07-19 09:13:22'),
(5, 'Prince', 'Prince23kat@gmail.com', '‪+90 533 832 52 29‬', 'Congo, The Democratic Republic of The', '2022-07-19', 'Assurance_travel ', '2', 'Prince kat', 'Congo, The Democratic Republic of The', 'DRcongo', '‪+90 533 832 52 29‬', '', '62Pr60', 1, 'hm123456', NULL, '2022-07-19 09:36:44'),
(6, 'JONATHAN MPUTU WANGI', 'jonathan.wangi10@gmail.com', '+905338655943', 'Congo, The Democratic Republic of The', '1995-08-02', 'JWMB fondatıon', '2022', 'JONATHAN WANGI MPUTU', 'Cyprus', 'Lefkosa', '+905338655943', 'MELIS AKTAK 23/39, 15 MEŞE SOKAK, KUCUK KAYMAKLI, Lefkoşa', '62JO10', 1, 'hm123456', NULL, '2022-07-19 10:09:08'),
(7, 'Benny Beyor BUMAKO ', 'benbeybum@gmail.com', '+250780864495', 'Burundi', '2022-07-19', 'BER_CO.', '2021', 'Benny Beyor BUMAKO ', 'Burundi', 'Bujumbura', '+250780864495', '-', '62Be44', 1, 'hm123456', NULL, '2022-07-19 14:20:06'),
(8, 'olivier mbwebwa ilunga', 'oliviermbwebwa@gmail.com', '+90 5338751002, +90 5428885965', 'Turkey', '1998-03-16', 'Safefly', '2019', 'olivier mbwebwa ilunga', 'Congo, The Democratic Republic of The', 'lubumbashi', '+905338751002', 'Avenue: luvua coin kambove ', '62ol30', 0, 'hm123456', NULL, '2022-07-19 17:54:28'),
(9, 'olivier mbwebwa ilunga', 'oliviermbwebwa@gmail.com', '+90 5338751002, +90 5428885965', 'Turkey', '1998-03-16', 'Safefly', '2019', 'olivier mbwebwa ilunga', 'Congo, The Democratic Republic of The', 'lubumbashi', '+905338751002', 'Avenue: luvua coin kambove ', '62ol42', 0, 'hm123456', NULL, '2022-07-19 17:54:29'),
(10, 'olivier mbwebwa ilunga', 'oliviermbwebwa@gmail.com', '+90 5338751002, +90 5428885965', 'Turkey', '1998-03-16', 'Safefly', '2019', 'olivier mbwebwa ilunga', 'Congo, The Democratic Republic of The', 'lubumbashi', '+905338751002', 'Avenue: luvua coin kambove ,lubumbashi -RC Congo', '62ol87', 1, 'hm123456', NULL, '2022-07-19 17:56:03'),
(11, 'Obrist Buasa', 'obuasa.mt@gmail.com', '+16822214565', 'United States', '1989-03-28', 'MIKILI TRAVELS', '2020', 'Obrist Buasa', 'Congo, The Democratic Republic of The', 'KINSHASA', '+16822214565', 'AVE YOLO N 1 LIMETE 7E RUE', '62Ob42', 1, 'hm123456', NULL, '2022-07-22 14:25:21'),
(12, 'Jean Michel Kandula', 'jmkandula@belle-agence.com', '+243840035047', 'Congo, The Democratic Republic of The', '1992-01-16', 'Belle Agence', '5', 'Jean Michel KANDULA', 'Congo, The Democratic Republic of The', 'Kinshasa', '+243816317010', '295, avenue de la Libération, C/Gombe', '62Je20', 1, 'hm123456', NULL, '2022-07-26 08:38:05'),
(13, 'KIZUNZA NSUNDI PATHY STEPHANE', 'stphnpaty78@gmail.com', '+243993418463', 'Congo, The Democratic Republic of The', '1978-06-11', 'TENDA BUSINESS , MANAGEMENT ET TRAVEL', '2016', 'KIZUNZA NSUNDI PATHY STEPHANE', 'Congo, The Democratic Republic of The', 'KINSHASA', '+243993418463', '295B, AV.MWEKA, Q/PAKADJUMA, C/LINGWALA', '62KI68', 1, 'hm123456', NULL, '2022-07-27 12:22:01'),
(14, 'Christian konga', 'Konga.chris@gmail.com', '+243812222732', 'Congo, The Democratic Republic of The', '2022-07-28', 'Access Voyages', '2018', 'Christian Konga', 'Congo, The Democratic Republic of The', 'Kinshasa', '+243812222732', '148 dodoma, kinshasa-drc ', '62Ch25', 0, 'hm123456', NULL, '2022-07-28 16:19:16'),
(15, 'Christian konga', 'Konga.chris@gmail.com', '+243812222732', 'Congo, The Democratic Republic of The', '2022-07-28', 'Access Voyages', '2018', 'Christian konga', 'Congo, The Democratic Republic of The', 'Kinshasa', '+243812222732', '148, dodoma Kinshasa-rdv', '62Ch20', 0, 'hm123456', NULL, '2022-07-28 16:22:23'),
(16, 'MOSOLO CHRISTIAN', 'mcapach@gmail.com', '+243892043762', 'Congo, The Democratic Republic of The', '1993-05-10', 'PRIMO TRAVEL', '2021', '', 'Congo, The Democratic Republic of The', 'KINSHASA', '+243892043762', '294B, AV.MWEKA, Q/PAKADJUMA, C/LINGWALA', '62MO61', 0, 'hm123456', NULL, '2022-07-30 09:33:02'),
(17, 'Jordan Cedric', 'cedricjordan613@gmail.com', '+242069473622', 'Congo', '1995-07-25', 'Dan Travel Study & Business ', '2019', 'Foutou Matongo Josion Cedric', 'Congo', 'Brazzaville', '+242069473622', '02 Rue louninga Météo Brazzaville', '62Jo82', 1, 'hm123456', NULL, '2022-08-02 12:06:19'),
(18, 'MOSOLO CHRISTIAN', 'mcapach@gmail.com', '+243892043762', 'Congo, The Democratic Republic of The', '1993-05-10', 'PRIMO TRAVEL', '2021', 'MOSOLO CHRISTIAN', 'Congo, The Democratic Republic of The', 'KINSHASA', '+243892043762', '294B, AV.KALEMBE LEMBE, Q/PAKADJUMA, C/LINGWALA', '62MO45', 1, 'hm123456', NULL, '2022-08-03 13:57:25'),
(19, 'Herman Mambwe', 'mambwehermann@gmail.com', '+243808744337', 'Congo, The Democratic Republic of The', '1995-10-09', 'PangiTravel', '2020', 'Herman Mambwe', 'Congo, The Democratic Republic of The', 'Kinshasa', '+243979030420', 'Kinshasa, Ngaliema Binza Upn 30 Bis', '62He54', 1, 'hm123456', NULL, '2022-08-09 22:24:15'),
(20, 'RAVI GOKLANI', 'salesfih@icon-travels.com', '0891388888', 'Congo, The Democratic Republic of The', '1986-09-14', 'ICON TRAVELS', '2020', 'RAVI GOKLANI', 'Congo, The Democratic Republic of The', 'KINSHASA', '0891388888', '20, GALLERIE ALBERT, AV. DE LA PAIX, GOMBE', '63RA17', 1, 'hm123456', NULL, '2022-09-19 15:53:09'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '6394', 0, 'hm123456', NULL, '2022-12-22 12:09:12'),
(22, 'Promise Yarmo ', 'promiseyarmo@gmail.com', '+231775502177', 'Liberia', '1995-09-14', 'P and E enterprise ', '2017', 'Promise Yarmo ', 'Liberia', 'Paynesville', '+231775502177', 'Zubah Town, Rehab', '63Pr19', 0, 'hm123456', NULL, '2023-01-01 18:51:39'),
(23, 'Milad Ahmad Sarwari', 'miladahmadserwary@gmail.com', '+93784124166', 'Afghanistan', '1999-09-17', 'Milad Travel Agency', '2021', 'Milad Ahmad Sarwari', 'Afghanistan', 'Kabul', '+93784124166', 'Gol froshi street shahre naw, kabul, Afghanistan', '63Mi24', 0, 'hm123456', NULL, '2023-01-03 14:32:33'),
(24, 'Oladapo Adesayo Telejaye', 'firstaimbeyondk@gmail.com', '23470898380000', 'Nigeria', '1984-04-12', 'FIRST AIM BEYOND KNOWLEDGE INT\'L LIMITED', '2016', 'Oladapo Adesayo Telejaye', 'Nigeria', 'Akure', '2347089838000', '99A STATE HOSPITAL ROAD AKURE ONDO STATE NIGERIA', '63Ol91', 1, 'hm123456', NULL, '2023-01-11 05:39:00'),
(25, 'BOUCHRA EL MEKKAOUI', 'studea.consulting@gmail.com', '+212619307132', 'Morocco', '1974-03-10', 'STUDEA CONSULTING PRIVE', '2022', 'BOUCHRA EL MEKKAOUI', 'Morocco', 'ESSAOUIRA', '+212619307132', '321 QUARTIER RAOUNAK44000  ESSAOUIRA', '63BO72', 1, 'hm123456', NULL, '2023-01-12 20:37:09'),
(26, 'Francis Charles ', 'wanrifrancis77.com@gmail.com', '+255745416535', 'Tanzania, United Republic of', '1981-11-30', 'Goodwill international consultancy LTD ', '4 years ', 'William Mganga ', 'Tanzania, United Republic of', 'Dar es salaam ', '+255745416535', 'P 0 BOX 106229 Makumbusho Derm plaza building 45 Dar es Salaam ', '63Fr90', 0, 'hm123456', NULL, '2023-01-18 13:39:16'),
(27, 'VOTIO NGANDJOU GALVANIE', 'galvaniemerveillevotio@gmail.com ', '+237677726351 ', 'Cameroon', '2003-09-17', 'Not a company ', '0', '0', 'Cameroon', '0', '+237677726351 ', '0', '63VO78', 0, 'hm123456', NULL, '2023-01-19 09:24:56'),
(28, 'SHEM  SHEHU', 'beltishem@gmail.com', '+2348029732222', 'Nigeria', '1973-12-04', 'BELTISHEM EDUCATION CONSULTING', '15/03/1997', 'DR. SHEM SHEHU', 'Nigeria', 'KATSINA NIGERIA', '+2348035898960', 'BELTISHEM EDUCATION CONSULTING', '63SH33', 0, 'hm123456', NULL, '2023-02-27 23:33:03'),
(29, 'SHEM  SHEHU', 'beltishem@gmail.com', '+2348029732222', 'Nigeria', '1973-12-04', 'BELTISHEM EDUCATION CONSULTING', '15/03/1997', 'DR. SHEM SHEHU', 'Nigeria', 'KATSINA NIGERIA', '+2348035898960', 'BELTISHEM EDUCATION CONSULTING, OPP VISION FM RADIO STATION, ALONG STADIUM ROAD, KATSINA STATE NIGERIA', '63SH63', 1, 'hm123456', NULL, '2023-02-27 23:36:44'),
(30, 'SHEM SHEHU', 'beltishem@gmail.com', '+2348035898960', 'Nigeria', '1973-12-04', 'BELTISHEM EDUCATION CONSULTING', '15/03/1997', 'SHEM SHEHU', 'Nigeria', 'Katsina City', '+2348035898960', 'SHOP No. 3 RAUDER PLAZA, MANI ROAD, ALONG STADIUM ROAD, OPP. VISION FM RADIO, KATSINA, KATSINA STATE NIGERIA, WEST AFRICA.', '64SH69', 0, 'hm123456', NULL, '2023-03-21 11:44:48'),
(31, 'Osuagwu', 'Deborahchinosuagwu@gmail.com', '07039811309', 'Nigeria', '1990-01-08', 'Yankees excursion ', 'January 2021', 'Deborah Chikachinonso osuagwu', 'Nigeria', 'Lagos state Nigeria ', '07039811309', '7 prince adebayo fusiboye street lakowe ibeju Lekki Lagos ', '64Os13', 0, 'hm123456', NULL, '2023-04-19 22:13:32'),
(32, 'Kilima', 'Kilimanelson@gmail.com', '+905338440978', 'Angola', '2023-05-01', 'Himalaya Travel', 'Himalaya Travel', 'Kilima', 'Algeria', 'Hi', '+905338440978', 'Hc', '64Ki33', 1, 'hm123456', NULL, '2023-05-03 00:55:47'),
(33, 'Igon Belo Dinis', 'ismaeligon52@gmail.com', '+258 872406201', 'Cyprus', '2004-02-20', 'IsmaelCeo', '2023 s', 'IgonIsmaelCeo', 'Cyprus', 'Maputo cidade', '+258 872406201', 'Sami selçuk sok ', '64Ig95', 1, 'hm123456', NULL, '2023-05-03 11:28:54'),
(34, 'Jose Caetano ', 'josemiguelcaetano10@gmail.com', '+90 548 866 91 74', 'Cyprus', '2004-07-02', 'TACAE', '2023 s', 'José Caetano ', 'Cyprus', 'Maputo cidade', '+90 548 866 9174', 'Sami selçuk sok ', '64Jo38', 1, 'hm123456', NULL, '2023-05-03 11:28:56'),
(35, 'kevin kyoni kazadi', 'kzd.kyoni@gmail.com', '+905338589344', 'Congo, The Democratic Republic of The', '1996-02-02', 'The flow co', '1', 'Kevin Ghost', 'Congo, The Democratic Republic of The', 'lefkosa', '+905338589344', 'Nicosia', '64ke29', 1, 'hm123456', NULL, '2023-05-04 12:17:46'),
(36, 'Ajisafe Adetola Esther ', 'goyeeworldwide@gmail.com', '+2348134008035', 'Nigeria', '1993-03-29', 'Mummy Goyee Enterprise ', '2019', 'Ajisafe Adetola Esther ', 'Nigeria', 'Osun State', '08134008035,07062670410', 'Zone 2,Ifelagba quarters oke-ogbo Ile-Ife Osun state', '64Aj23', 1, 'hm123456', NULL, '2023-05-05 08:56:57'),
(37, 'Deo Kanonga', 'deok587@gmail.com', '+905391097355', 'Cyprus', '1999-06-06', 'KD Design', '2020', 'Deo', 'Cyprus', 'Lubumbashi ', '+905391097355', 'ErsoyHocaApt4', '64De90', 0, 'hm123456', NULL, '2023-05-13 10:18:43'),
(38, 'Gasana Jean Claude ', 'Gasanajeanmicheal@gmail.com', '+905338895844', 'Rwanda', '2001-11-10', 'Himalaya travel ', 'Two years ', 'Gasana Jean Claude ', 'Cyprus', 'Girne', '+905338895844', 'Girne Cyprus ', '64Ga54', 0, 'hm123456', NULL, '2023-05-16 09:21:32'),
(39, 'Gasana Jean Claude ', 'Gasanajeanmicheal@gmail.com', '+905338895844', 'Cyprus', '2001-11-10', 'Himalaya agent', 'Two years ', 'Gasana Jean Claude ', 'Cyprus', 'Girne', '+905338895844', 'Girne', '64Ga97', 1, 'hm123456', NULL, '2023-05-16 09:24:52'),
(40, 'Ndamukunda Arnaud', 'arnaudndamukunda@gmail.com', '+250791368726', 'Rwanda', '2004-05-02', 'Origin ', '2023', 'Ndamukunda Arnaud', 'Rwanda', 'Kigali ', '+250791368726', 'arnaudndamukunda@gmail.com', '64Nd14', 1, 'hm123456', NULL, '2023-05-22 11:35:00'),
(41, 'Taiwo Komolafe', 'lifelineavi@gmail.com', '08030455700', 'Nigeria', '1970-07-22', 'Lifeline school of Aviation ', '2022', 'Taiwo Komolafe', 'Nigeria', 'Ado Ekiti', '+2348030455700', 'Macofab Building, Adebayo Street, Belloni Place, Ado Ekiti, Nigeria.', '64Ta36', 0, 'hm123456', NULL, '2023-06-04 12:35:54'),
(42, 'Samuel Oladipo Olorunyomi ', 'intrepidiasynergy@gmail.com ', '+2348069766735', 'Benin', '1984-02-08', 'INTREPIDIA SYNERGY ', '2022', 'Samuel Oladipo Olorunyomi ', 'Nigeria', 'Abuja, Nigeria ', '+2348069766735', 'Cinquantenaire, Porto-Novo ', '64Sa68', 0, 'hm123456', NULL, '2023-06-10 02:52:53'),
(43, 'Ivy Kibanya', 'ivykibanya@gmail.com', '+254793651447', 'Kenya', '2002-12-25', 'KCA university ', '1989', 'Professor Isaiah Wakindiki', 'Kenya', 'Nairobi', '+25410888022', '56808-00200 Nairobi', '64Iv51', 0, 'hm123456', NULL, '2023-07-24 12:31:22'),
(44, 'Christopher Juluntah Kemokai', 'diroussmith147@gmail.com', '+233531464575', 'Sierra Leone', '1989-02-25', 'Future Travel Agency', 'January.10,2020', 'Christopher Juluntah Kemokai', 'Sierra Leone', 'Freetown', '+233531464575', '#55 Junction, Waterloo', '64Ch84', 0, 'hm123456', NULL, '2023-07-25 02:19:51'),
(45, 'Shaka Ahmed Kalokoh ', 'shakaahmedk@gmail.com', '+23276222582', 'Sierra Leone', '1967-03-18', 'Child Health Care and Development Foundation Sierra Leone ', '2014', 'John Duru', 'Sierra Leone', 'Freetown', '+23230000301', 'No 5 Lawyer Street Makeni ', '64Sh18', 0, 'hm123456', NULL, '2023-07-25 17:50:54'),
(46, 'Shaka Ahmed Kalokoh ', 'shakaahmedk@gmail.com', '+23276222582', 'Sierra Leone', '1967-03-18', 'Child Health Care and Development Foundation Sierra Leone ', '2014', 'John Duru', 'Sierra Leone', 'Freetown', '+23230000301', 'No 5 Lawyer Street Makeni ', '64Sh40', 0, 'hm123456', NULL, '2023-07-25 17:50:54'),
(47, 'Gladys Njoroge', 'gladys@rightresource.co.ke', '+254723211475', 'Kenya', '1983-07-12', 'RIGHT RESOURCE KENYA LTD', '2018', 'GLADYS WANJIRU NJOROGE', 'Kenya', 'NAIROBI', '+254723211475', '239', '64Gl53', 0, 'hm123456', NULL, '2023-07-26 07:47:21'),
(48, 'Gifty Tetteh', 'skywingstconsult@gmail.com', '+233248391539', 'Ghana', '1991-04-02', 'Exploremore Travel Consult', '2022', 'Gifty Gina Tetteh', 'Ghana', 'Accra', '0248391539', 'GIFTY TETTEH', '64Gi21', 0, 'hm123456', NULL, '2023-07-27 06:36:05'),
(49, 'Nelson Nelson Kilima ', 'Kilimanelson@himalayatravel.net', '+905338479839', 'Congo, The Democratic Republic of The', '1995-08-02', 'Himalaya Travel', 'Sami selçuk sok Osmanoğlu 21 apt 9', 'Nelson Nelson kilima ', 'Congo, The Democratic Republic of The', 'Lubumbashi ', '+905338479839', 'Av circulation ', '64Ne61', 0, 'hm123456', NULL, '2023-07-29 09:16:18'),
(50, 'JEAN DE DIEU NDAYISHIMIYE', 'ndayishimiye141@gmail.com ', '+28686829608', 'Burundi', '1994-10-07', 'GOLD INTERLINK SERVICES GROUP', '2021', 'BORIS MANIRAKIZA', 'Burundi', 'BUJUMBURA', '+25777888312', 'Boulevard Patrice Lumumba,Excellence house 3rd Floor,office no4', '64JE39', 1, 'hm123456', NULL, '2023-08-01 13:37:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id_agent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
