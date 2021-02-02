-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2021 at 09:38 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nacoss_national`
--

-- --------------------------------------------------------

--
-- Table structure for table `ets`
--

CREATE TABLE `ets` (
  `id` int(11) NOT NULL,
  `regNum` varchar(111) NOT NULL,
  `gpa` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `year` varchar(222) NOT NULL,
  `ammount` varchar(222) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `year`, `ammount`, `time`) VALUES
(1, '2021', '100', '2021-01-18 21:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `numList`
--

CREATE TABLE `numList` (
  `id` int(11) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numList`
--

INSERT INTO `numList` (`id`, `value`) VALUES
(1, '10002');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `gatamount` varchar(222) NOT NULL,
  `reference` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `paid_at` varchar(222) NOT NULL,
  `stuID` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `FirstName` varchar(222) NOT NULL,
  `MiddleName` varchar(222) NOT NULL,
  `Surname` varchar(222) NOT NULL,
  `payFor` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `gatamount`, `reference`, `message`, `paid_at`, `stuID`, `email`, `FirstName`, `MiddleName`, `Surname`, `payFor`, `date`) VALUES
(1, '100', 'xe44fduaxg', 'Verification successful', '31 December 1969 06:33:41 pm', '8', 'yakubuabiola2003@gmail.com', 'abiola', 'sunday', 'yakubu', 'Cert', '2021-01-18 19:59:22'),
(2, '100', '0ea4o2nk8i', 'Verification successful', '31 December 1969 06:33:41 pm', '8', 'yakubuabiola2003@gmail.com', 'abiola', 'sunday', 'yakubu', 'Cert', '2021-01-18 20:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `activate` varchar(222) NOT NULL,
  `alert` varchar(222) NOT NULL,
  `params` varchar(222) NOT NULL,
  `dob` text NOT NULL,
  `institution_type` varchar(222) NOT NULL,
  `intitution` varchar(222) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `level` varchar(222) NOT NULL,
  `area_of_int` longtext NOT NULL,
  `membershipNo` text NOT NULL,
  `year_of_reg` year(4) NOT NULL,
  `pay` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `paystatus` varchar(200) NOT NULL,
  `zone` varchar(1111) NOT NULL,
  `chapter_reg` varchar(1111) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `f_name`, `s_name`, `m_name`, `email`, `password`, `gender`, `phone`, `img`, `token`, `activate`, `alert`, `params`, `dob`, `institution_type`, `intitution`, `dept`, `level`, `area_of_int`, `membershipNo`, `year_of_reg`, `pay`, `amount`, `paystatus`, `zone`, `chapter_reg`, `reg_date`) VALUES
(1, 'abiola', 'yakubu', 'sunday', 'yakubuabiola2003@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'male', '08030960928', 'image is here', '600d50466fed9', '1', '1', 'pass', '01/06/2021', 'College of Education', 'Akwa Ibom College Of Education', 'Computer Engineering', '200L', 'Select Option | Software Development', 'NA10002', 2021, 'owxxioww2', '100', '2', 'SS', 'NA2018AK3127', '2021-01-26 08:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_allias` varchar(200) NOT NULL,
  `schoo_name` varchar(222) NOT NULL,
  `zone` varchar(222) NOT NULL,
  `chapter_reg` varchar(222) NOT NULL,
  `user_reg` varchar(1111) NOT NULL,
  `institute_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_allias`, `schoo_name`, `zone`, `chapter_reg`, `user_reg`, `institute_type`) VALUES
(2, 'AAS', 'Adekunle Ajasin University', 'SW', 'NA2018AA4579', '0', 'University'),
(3, 'AAU', 'Ambrose Alli University', 'SS', 'NA2018AM5926', '0', 'University'),
(4, 'ABCOAD', 'Audu Bako College Of Agriculture, Dambatta', 'NW', 'NA2019AB66965', '0', 'Polytechnic'),
(5, 'ABIAPOLY', 'Abia State Polytechnic', 'SE', 'NA2018AB3896', '0', 'Polytechnic'),
(6, 'ABSPOLY', 'Akwa Ibom State Polytechnic', 'SS', 'NA2018AB7745', '0', 'Polytechnic'),
(7, 'ABSU', 'Abia State University', 'SE', 'NA2018AB2991', '0', 'University'),
(8, 'ABUAD', 'Afe Babalola University Ado-Ekiti', 'SW', 'NA2018AB7361', '0', 'University'),
(9, 'ABUZARIA', 'Ahmadu Bello University, Zaria', 'NW', 'NA2018AB9799', '0', 'University'),
(10, 'ACHIEVERS', 'Achievers University Owo', 'SW', 'NA2018AC1025', '0', 'University'),
(11, 'ACPOGUN', 'Allover Central Polytechnic, Sango-Ota Ogun State', 'SW', 'NA2018AC4577', '0', 'Polytechnic'),
(12, 'ACUOYO', 'Ajayi Crowther University, Oyo', 'SW', 'NA2018AC1135', '0', 'University'),
(13, 'ADELEKEUNI', 'Adeleke University, Ede', 'SW', 'NA2018AD5834', '0', 'University'),
(14, 'ADEYEMICOE', 'Adeyemi College Of Education', 'SW', 'NA2018AD7555', '0', 'College of Education'),
(15, 'ADSU', 'Adamawa State University, Mubi', 'NE', 'NA2018AD19847', '0', 'University'),
(16, 'AIFPU', 'Akanu Ibiam Federal Polytechnic, Unwana', 'SE', 'NA2018AI2356', '0', 'Polytechnic'),
(17, 'AKCOE', 'Akwa Ibom College Of Education', 'SS', 'NA2018AK3127', '0', 'College of Education'),
(18, 'AKSCOEAFAHANSIT', 'College of Education Afaha Nsit, Akwa Ibom', 'SS', 'NA2018AK3899', '0', 'College of Education'),
(19, 'AKUTECH', 'Akwa Ibom State University Of Technology', 'SS', 'NA2018AK3469', '0', 'University'),
(20, 'ALHIKMAH', 'Al-Hikmah University', 'NC', 'NA2018AL4664', '1003', 'University'),
(21, 'ALVAN', 'Alvan Ikoku Federal College of Education', 'SE', 'NA2018AL3905', '0', 'College of Education'),
(22, 'ANSPOLY', 'Anambra State Polytechnic mgbakwu', 'SE', 'NA2018AN04242', '0', 'Polytechnic'),
(23, 'ANSU', 'Anambra State University, Anambra', 'SE', 'NA2018AN8354', '0', 'University'),
(24, 'AOCOE', 'Adeniran Ogunsanya College Of Education', 'SW', 'NA2018AO7467', '0', 'College of Education'),
(25, 'ASPOLY', 'Adamawa State Polytechnic, Yola', 'NE', 'NA2018AS2137', '0', 'Polytechnic'),
(26, 'ATAPOLY', 'Abubakar Tatari Ali Polytechnic', 'NE', 'NA2019AT16175', '0', 'Polytechnic'),
(27, 'ATBU', 'Abubakar Tafawa Balewa University', 'NE', 'NA2018AT9693', '0', 'University'),
(28, 'AUCHIPOLY', 'Auchi Polytechnic, Auchi', 'SS', 'NA2018AU9467', '0', 'Polytechnic'),
(29, 'AUK', 'Alqalam University', 'NW', 'NA2018KA0547', '0', 'University'),
(30, 'AUN', 'American University Of Nigeria, Yola', 'NE', 'NA2018AU7245', '0', 'University'),
(31, 'AUST', 'African University Of Science And Tech', 'NC', 'NA2018AU4869', '0', 'University'),
(32, 'BABCOCK', 'Babcock University', 'SW', 'NA2018BA0688', '0', 'University'),
(33, 'BAUCHIUNI', 'Bauchi State University, Gadau', 'NE', 'NA2018BA2019', '0', 'University'),
(34, 'BAZEUNI', 'Baze University', 'NC', 'NA2018BA4352', '0', 'University'),
(35, 'BELLS', 'Bells University, Otta', 'SW', 'NA2018BE5575', '0', 'University'),
(36, 'BENSONIDAHOSA', 'Benson Idahosa University', 'SS', 'NA2018BE6768', '0', 'University'),
(37, 'BENUEUNI', 'Benue State University', 'NE', 'NA2018BE8904', '0', 'University'),
(38, 'BHU', 'Bingham University', 'NC', 'NA2019BH41498', '0', 'University'),
(39, 'BOWEN', 'Bowen University', 'SW', 'NA2018BO0631', '0', 'University'),
(40, 'BSCAS', 'Bayelsa State College Of Arts And Science', 'SS', 'NA2018BS8297', '0', 'Polytechnic'),
(41, 'BUKANO', 'Bayero University, Kano', 'NW', 'NA2018BU3129', '0', 'University'),
(42, 'BUKARABBAIBRAHIMUNIVERSITY', 'Bukar Abba Ibrahim University', 'NE', 'NA2018BU1853', '0', 'University'),
(43, 'CALEBUNI', 'Caleb University', 'SW', 'NA2018CA1683', '0', 'University'),
(44, 'CARITASUNIVERSITY', 'Caritas University', 'SE', 'NA2018CA0506', '0', 'University'),
(45, 'CETEP', 'Cetep City University, Lagos', 'SW', 'NA2018CE7024', '0', 'University'),
(46, 'CHRISLAND', 'Chrisland University', 'SW', 'NA2018ch03625', '0', 'University'),
(47, 'COEAGBOR', 'College Of Education, Agbor', 'SS', 'NA2018CO7457', '0', 'College of Education'),
(48, 'COEAKWANGA', 'College Of Education, Akwanga', 'NC', 'NA2018CO5901', '0', 'College of Education'),
(49, 'COEAZARE', 'College Of Education, Azare', 'NE', 'NA2018CO7012', '0', 'College of Education'),
(50, 'COEEKIADOLOR', 'College Of Education, Ekiadolor', 'SS', 'NA2018CO8125', '0', 'College of Education'),
(51, 'COEGINDIRI', 'College Of Education, Gindiri', 'NC', 'NA2018CO9235', '0', 'College of Education'),
(52, 'COEGOMBE', 'Federal College Of Education (Technical) Gombe', 'NE', 'NA2018CO5444', '0', 'College of Education'),
(53, 'COEIKERE', 'College Of Education, Ikere Ekiti', 'SW', 'NA2018CO0457', '0', 'College of Education'),
(54, 'COEKWARA', 'College Of Education, Oro, Kwara State', 'NC', 'NA2018CO1676', '0', 'College of Education'),
(55, 'COEMX', 'Niger State College Of Education Minna', 'NC', 'NA2018CO1122', '0', 'College of Education'),
(56, 'COEOYO', 'Federal College Of Education (Special), Oyo', 'SW', 'NA2018CO4223', '0', 'College of Education'),
(57, 'COEWARRI', 'College Of Education, Warri', 'SS', 'NA2018CO2787', '0', 'College of Education'),
(58, 'COEZUBA', 'FCT College Of Education, Zuba', 'NC', 'NA2018CO7349', '0', 'College of Education'),
(59, 'COEKATSINAALA', 'College Of Education, Katsina Ala', 'NW', 'NA2018CO4072', '0', 'College of Education'),
(60, 'COEAFAHANSIT', 'College Of Education, Afaha-Nsit', 'SS', 'NA2018CO2961', '0', 'College of Education'),
(61, 'COVENANTPOLY', 'Covenant Polytechnic, Aba', 'SE', 'NA2018CO9752', '0', 'Polytechnic'),
(62, 'CU', 'Covenant University, Ota', 'SW', 'NA2018CO5646', '0', 'University'),
(63, 'CUAB', 'Crescent University', 'SW', 'NA2018CR9117', '0', 'University'),
(64, 'CROWNPOLY', 'Crown Polythecnic', 'SW', 'NA2018CR1895', '0', 'Polytechnic'),
(65, 'CRU', 'Crawford University,igbesa', 'SW', 'NA2018CR7787', '0', 'University'),
(66, 'CRUTECH', 'Cross River University Of Technology', 'SS', 'NA2018CR0451', '0', 'University'),
(67, 'DELSPOLY', 'Delta State Polytechnic', 'SS', 'NA2018DE3337', '0', 'Polytechnic'),
(68, 'DELSU', 'Delta State University', 'SS', 'NA2018DE4558', '0', 'University'),
(69, 'DEPZ', 'Delta State Polytechnic Ozoro', 'SS', 'NA2018DE2615', '0', 'Polytechnic'),
(70, 'DORBENPOLY', 'Dorben Polytechnic', 'NC', 'NA2018DO5667', '0', 'Polytechnic'),
(71, 'DSA', 'D. S. Adegbenro ICT Polytechnic, Itori-Ewekoro, Ogun State', 'SW', 'NA2018DS3588', '0', 'Polytechnic'),
(72, 'EBSU', 'Ebonyi State University', 'SE', 'NA2018EB7336', '0', 'University'),
(73, 'EDEPOLY', 'Federal Polytechnic, Ede', 'SW', 'NA2018ED5117', '0', 'Polytechnic'),
(74, 'EKSU', 'Ekiti State University', 'SW', 'NA2018EK8445', '0', 'University'),
(75, 'ELIZADE', 'Elizade University', 'SW', 'NA2018EL0776', '0', 'University'),
(76, 'ESUT', 'Enugu State University Of Science & Technology', 'SE', 'NA2018ES9667', '0', 'University'),
(77, 'EUA', 'Evangel University,', 'SE', 'NA2018EU2998', '0', 'University'),
(78, 'FCEKG', 'Federal College of Education Kontagora', 'NC', 'NA2018FC2562', '0', 'College of Education'),
(79, 'FCOEAKOKA', 'Federal College Of Education, Akoka', 'SW', 'NA2018FC9553', '0', 'College of Education'),
(80, 'FCOEGUSAU', 'Federal College Of Education (Technical) Gusau', 'NW', 'NA2018FC7221', '0', 'College of Education'),
(81, 'FCOEKANO', 'Federal College Of Education, (Technical) Kano', 'SE', 'NA2018FC8332', '0', 'College of Education'),
(82, 'FCOEOBUDU', 'Federal College Of Education, Obudu', 'SS', 'NA2018FC0775', '0', 'College of Education'),
(83, 'FCOEOKENE', 'Federal College Of Education, Okene', 'NC', 'NA2018FC2107', '0', 'College of Education'),
(84, 'FCOEOMOKU', 'Federal College Of Education, Omoku', 'SS', 'NA2018FC3328', '0', 'College of Education'),
(85, 'FCOEOSILE', 'Federal College Of Education, Osile', 'SW', 'NA2018FC4658', '0', 'College of Education'),
(86, 'FCOEZAIRA', 'Federal College Of Education, Zaira', 'NW', 'NA2018FC7438', '0', 'College of Education'),
(87, 'FECAI', 'Federal College Of Agriculture, Isiagu', 'SE', 'NA2018FE5295', '0', 'Polytechnic'),
(88, 'FECLART', 'Federal College Of Land Resources Technology', 'SE', 'NA2018FE9516', '0', 'Polytechnic'),
(89, 'FCOEBICH', 'Federal College Of Education, (Technical) Bich', 'NW', 'NA2018FE6738', '0', 'College of Education'),
(90, 'FCOEPANKSHIN', 'Federal College Of Education, Pankshin', 'NC', 'NA2018FE8295', '0', 'College of Education'),
(91, 'FEDPOFFA', 'Federal Polytechnic, Offa', 'NC', 'NA2018FE1033', '0', 'Polytechnic'),
(92, 'FEDPOLYADOEKITI', 'Federal Polytechnic, Ado-Ekiti', 'SW', 'NA2018FE9994', '0', 'Polytechnic'),
(93, 'FEDPOLYBAUCHI', 'Federal Polytechnic, Bauchi', 'NE', 'NA2018FE1214', '0', 'Polytechnic'),
(94, 'FEDPOLYBIDA', 'Federal Polytechnic Bidda', 'NC', 'NA2018FE8773', '0', 'Polytechnic'),
(95, 'FEDPOLYBIRNINKEBBI', 'Federal Polytechnic, Birnin-Kebbi', 'NW', 'NA2018FE2456', '0', 'Polytechnic'),
(96, 'FEDPOLYDAMATURU', 'Federal Polytechnic, Damaturu', 'NE', 'NA2018FE3787', '0', 'Polytechnic'),
(97, 'FEDPOLYMUBI', 'Federal Polytechnic, Mubi', 'NE', 'NA2018FE9232', '0', 'Polytechnic'),
(98, 'FEDPOLYNASSARAWA', 'Federal Polytechnic, Nassarawa', 'NC', 'NA2018FE0452', '0', 'Polytechnic'),
(99, 'FEDPOLYNEKEDE', 'Federal Polytechnic Nekede Owerri', 'SE', 'NA2018FE5237', '0', 'Polytechnic'),
(100, 'FEDPOLYOKO', 'Federal Polytechnic, Oko', 'SE', 'NA2018FE1567', '0', 'Polytechnic'),
(101, 'FEDUNILOKOJA', 'Federal University, Lokoja', 'NC', 'NA2018FE3336', '0', 'University'),
(102, 'FNAI', 'Federal University Ndufu-Alike', 'SE', 'NA2018FN4446', '0', 'University'),
(103, 'FOEADAMAWA', 'Federal College Of Education, Yola', 'SW', 'NA2018FO5771', '0', 'College of Education'),
(104, 'FOUNTAIN', 'Fountain University', 'SW', 'NA2018FO7302', '0', 'University'),
(105, 'FPE', 'Federal Polytechnic Ede Osun State', 'SW', 'NA2018FP5337', '0', 'Polytechnic'),
(106, 'FPI', 'Federal Polytechnic, Ilaro', 'SW', 'NA2018FP8011', '0', 'Polytechnic'),
(107, 'FSS', 'Federal School Of Statistics', 'SW', 'NA2018FS1285', '0', 'Polytechnic'),
(108, 'FUB', 'Federal University, Birinin', 'NW', 'NA2018FU3734', '0', 'University'),
(109, 'FUDM', 'Federal University, Dutsin-Ma', 'NW', 'NA2018FU8673', '0', 'University'),
(110, 'FUGA', 'Federal University, Gashua', 'NE', 'NA2019FU24785', '0', 'University'),
(111, 'FUGU', 'Federal University Gusau', 'NW', 'NA2018FU9894', '0', 'University'),
(112, 'FUKA', 'Federal University, Kashere', 'NE', 'NA2018FU1115', '0', 'University'),
(113, 'FULA', 'Federal University, Lafia', 'NC', 'NA2018FU2226', '0', 'University'),
(114, 'FULOKOJA', 'Federal University Lokoja', 'NC', 'NA2019FU58555', '0', 'University'),
(115, 'FUNAAB', 'Federal University Of Agriculture, Abeokuta', 'SW', 'NA2018FU8584', '0', 'University'),
(116, 'FUO', 'Federal University, Otuoke', 'SS', 'NA2018FU4567', '0', 'University'),
(117, 'FUOyE', 'Federal University Oye Ekiti', 'SW', 'NA2018FU7893', '0', 'University'),
(118, 'FUPRE', 'Federal University Of Petroleum Resources, Efferen', 'SS', 'NA2018FU4118', '0', 'University'),
(119, 'FUTA', 'Federal University Of Technology, Akure', 'SW', 'NA2018FU5341', '0', 'University'),
(120, 'FUTMX', 'Federal University Of Technology, Minna', 'NC', 'NA2018FU1912', '0', 'University'),
(121, 'FUTO', 'Federal University Of Technology, Owerri', 'SE', 'NA2018FU0581', '0', 'University'),
(122, 'FUWU', 'Federal University, Wukari', 'NC', 'NA2018FU8997', '0', 'University'),
(123, 'GATEWAYPOLY', 'Gateway Polytechnic Saapade', 'SW', 'NA2018GA1222', '0', 'Polytechnic'),
(124, 'GODFREYUNI', 'Godfrey Okoye University', 'SE', 'NA2018GO2332', '0', 'University'),
(125, 'GRACEPOLY', 'Grace Polytechnic', 'SW', 'NA2018CR8394', '0', 'Polytechnic'),
(126, 'GSU', 'Gombe State University', 'NE', 'NA2018GO0112', '0', 'University'),
(127, 'HERITAGEPOLY', 'Heritage Polytechnic, Eket', 'SS', 'NA2018HE2688', '0', 'Polytechnic'),
(128, 'HSKP', 'Hassan Usman Katsina Polytechnic', 'NW', 'NA2018HS3837', '0', 'Polytechnic'),
(129, 'HUSSAINIADAMUFEDERALPOLYTECHNIC', 'Hussaini Adamu Federal Polytechnic, Kazaure', 'NW', 'NA2018HU3554', '0', 'Polytechnic'),
(130, 'IAU', 'Ignatinus Ajuru University Of Education', 'SS', 'NA2018IA6033', '0', 'University'),
(131, 'IBBUNI', 'Ibrahim Badamasi Babangida University, Lapai', 'NC', 'NA2018IB6107', '0', 'University'),
(132, 'IDAHPOLY', 'Federal Polytechnic, Idah', 'NC', 'NA2018ID6548', '0', 'Polytechnic'),
(133, 'IGBINEDIONUNIVERSITY', 'Igbinedion University, Okada', 'SS', 'NA2018IG8995', '0', 'University'),
(134, 'IMOPOLY', 'Imo State Polytechcnic', 'SE', 'NA2018IM1552', '0', 'Polytechnic'),
(135, 'IMSU', 'Imo State University', 'SE', 'NA2018IM1961', '0', 'University'),
(136, 'IMT', 'Institute Of Management Technology, Enugu', 'SE', 'NA2018IM2774', '0', 'Polytechnic'),
(137, 'JABU', 'Joseph Ayo Babalola University', 'SW', 'NA2018JA3883', '0', 'University'),
(138, 'JSIIT', 'Jigawa State Institute Of Information Technology', 'NE', 'NA2018JS6968', '0', 'Polytechnic'),
(139, 'KADPOLY', 'Kaduna Polytechnic', 'NW', 'NA2018KA5104', '0', 'Polytechnic'),
(140, 'KADSU', 'Kaduna State University', 'NW', 'NA2018KA6776', '0', 'University'),
(141, 'KANOPOLY', 'Kano State Polytechnic', 'NW', 'NA2018KA7992', '0', 'Polytechnic'),
(142, 'KASUT', 'Kano University Of Science And Technology', 'NW', 'NA2018KA9327', '0', 'University'),
(143, 'KEBBIUNI', 'Kebbi State University', 'NW', 'NA2018KE1657', '0', 'University'),
(144, 'KOGIPOLY', 'Kogi State Polytechnic Lokoja', 'NC', 'NA2018KO2566', '0', 'Polytechnic'),
(145, 'KOGIUNI', 'Kogi State University', 'NC', 'NA2018KO4323', '0', 'University'),
(146, 'KSCOE', 'Kano State College Of Education, Kano', 'NW', 'NA2018KS4405', '0', 'College of Education'),
(147, 'KUWT', 'Kwararafa university', 'NC', 'NA2018KU09317', '0', 'University'),
(148, 'KWARAPOLY', 'Kwara State Polytechnic', 'NC', 'NA2018KW5541', '0', 'Polytechnic'),
(149, 'KWARASTATECOLLEGEOFEDUCATION', 'Kwara State College Of Education', 'NC', 'NA2018KW5626', '0', 'College of Education'),
(150, 'KWARAUNI', 'Kwara State University', 'NC', 'NA2018KW7765', '0', 'University'),
(151, 'LACPOLY', 'Lagos City Polytechnic', 'SW', 'NA2018LA1209', '0', 'Polytechnic'),
(152, 'LASPOTECH', 'Lagos State Polytechnic, Lagos State', 'SW', 'NA2018LA2253', '0', 'Polytechnic'),
(153, 'LASU', 'Lagos State University, Ojo', 'SW', 'NA2018LA8729', '0', 'University'),
(154, 'LAUTECH', 'Ladoke Akintola University of Technology Ogbomoso', 'SW', 'NA2018LA68051', '0', 'University'),
(155, 'LAUTECH-Pt', 'Ladoke Akintola University Of Technology - PT', 'SW', 'NA2018LA69911', '0', 'University'),
(156, 'LCCC', 'Lagos City Computer College', 'SW', 'NA2018LC9984', '0', 'Polytechnic'),
(157, 'LEADCITYUNIVERSITY', 'Lead City University', 'SW', 'NA2018LE3541', '0', 'University'),
(158, 'LIGHTHOUSEPOLY', 'Lighthouse Polytechnic', 'SS', 'NA2018LI7288', '0', 'Polytechnic'),
(159, 'LMU', 'Landmark University', 'NC', 'NA2018LA2318', '0', 'University'),
(160, 'MADONNAUNIVERSITY', 'Madonna University', 'SS', 'NA2018MA4649', '0', 'University'),
(161, 'MAPOLY', 'Moshood Abiola Polytechnic,Abeokuta', 'SW', 'NA2018MA9903', '0', 'Polytechnic'),
(162, 'MAUTECH', 'Modibbo Adama University Of Technology', 'NE', 'NA2018MO7424', '0', 'University'),
(163, 'MCIU', 'Michael and Cecilia Ibru University, Ughelli', 'SS', 'NA2019MC78231', '0', 'University'),
(164, 'MCU', 'Mcpherson University', 'SW', 'NA2018MC6095', '0', 'University'),
(165, 'MOUAU', 'Michael Okpara University of Agriculture Umudike', 'SE', 'NA2018MO3492', '0', 'University'),
(166, 'NACEST', 'Nigerian Army College Of Environmental Science and Technology, Makurdi', 'NC', 'NA2018NA2134', '0', 'Polytechnic'),
(167, 'NASARRAWAUNI', 'Nasarrawa State University', 'NC', 'NA2018NA8537', '0', 'University'),
(168, 'NASPOLY', 'Nasarrawa State Polytechnic', 'NC', 'NA2018NA8862', '0', 'Polytechnic'),
(169, 'NAU', 'Nnamdi Azikiwe University', 'SE', 'NA2018NA3311', '0', 'University'),
(170, 'NDA', 'Nigerian Defence Academy', 'NW', 'NA2018ND2092', '0', 'University'),
(171, 'NDU', 'Niger Delta University', 'SS', 'NA2018ND0758', '0', 'University'),
(172, 'NILEST', 'Nigerian Institute of Leather and Science Technology', 'NW', 'NA2018NI35398', '0', 'Polytechnic'),
(173, 'NIPOLY', 'Niger State Polytechnic Zungeru', 'NC', 'NA2018NI7898', '0', 'Polytechnic'),
(174, 'NWUNI', 'Northwest University', 'NW', 'NA2018NO4421', '0', 'University'),
(175, 'NOUN', 'National Open University of Nigeria', 'SW', 'NA2018NO9647', '0', 'University'),
(176, 'NOVENAUNIVERSITY', 'Novena University', 'SS', 'NA2018NO8532', '0', 'University'),
(177, 'NUHUBAMALILIPOLY', 'Nuhu Bamalli Polytechnic', 'NW', 'NA2018NU0843', '0', 'Polytechnic'),
(178, 'NWAFORORIZU', 'Nwafor Orizu College Of Education', 'SE', 'NA2018NW5533', '0', 'College of Education'),
(179, 'OAU', 'Obafemi Awolowo University Ile-ife', 'SW', 'NA2018OA9809', '0', 'University'),
(180, 'OBONGUNIVERSITY', 'Obong University', 'SS', 'NA2018OB7308', '0', 'University'),
(181, 'ODUDUWAUNI', 'Oduduwa University', 'SW', 'NA2018OD8421', '0', 'University'),
(182, 'OGUNINTECH', 'Ogun State Institute Of Technology', 'SW', 'NA2018OG9532', '0', 'Polytechnic'),
(183, 'OOU', 'Olabisi Onabanjo University', 'SW', 'NA2018OO0643', '0', 'University'),
(184, 'UNIOSUN', 'Osun State University, Osogbo', 'SW', 'NA2018UN7363', '0', 'University'),
(185, 'OSCOTECH', 'Osun State College Of Technology', 'SW', 'NA2018OS3198', '0', 'Polytechnic'),
(186, 'OSUNPOLY', 'Osun State Polytechnic', 'SW', 'NA2018OS4308', '0', 'Polytechnic'),
(187, 'OSUNUNI', 'Osun State College Of Education', 'SW', 'NA2018OS1974', '0', 'College of Education'),
(188, 'OSUSTECH', 'Ondo State University Of Science And Technology.', 'SW', 'NA2018OS0857', '0', 'University'),
(189, 'OYOCOE', 'Oyo State College Of Education', 'SW', 'NA2018OY1955', '0', 'College of Education'),
(190, 'PLASUN', 'Plateau State University', 'NC', 'NA2018PL3064', '0', 'University'),
(191, 'PLATEAUPOLY', 'Plateau State Polytechnic', 'NC', 'NA2018PL5417', '0', 'Polytechnic'),
(192, 'POLYIBADAN', 'The Polytechnic Ibadan', 'SW', 'NA2018PO4869', '0', 'Polytechnic'),
(193, 'PTI', 'Petroleum Training Institute', 'SS', 'NA2018PT66815', '0', 'Polytechnic'),
(194, 'RAMPOLY', 'Ramat Polytechnic', 'NE', 'NA2018RA2529', '0', 'Polytechnic'),
(195, 'REDEEMERUNIVERSITY', 'Redeemer University', 'SW', 'NA2018RE3855', '0', 'University'),
(196, 'RHEMAUNIVERSITY', 'Rhema University', 'SS', 'NA2018RH5191', '0', 'University'),
(197, 'RIVCOE', 'Rivers State College Of Education', 'SS', 'NA2018RI1897', '0', 'College of Education'),
(198, 'RIVPOLY', 'River State Polytechnic', 'SS', 'NA2018RI2173', '0', 'Polytechnic'),
(199, 'RSUST', 'Rivers State University Of Science And Technology', 'SS', 'NA2018RS0301', '0', 'University'),
(200, 'RUFUSPOLY', 'Rufus Giwa Polytechnic', 'SW', 'NA2018RU1632', '0', 'Polytechnic'),
(201, 'RUNE', 'Renaissance University', 'SE', 'NA2018RU1196', '0', 'University'),
(202, 'SAU', 'Samuel Adegboye University', 'SS', 'NA2018SA3876', '0', 'University'),
(203, 'SARCOEKANO', 'Saadatu Rimi College Of Education Kumbotso', 'NW', 'NA2018SA5192', '0', 'College of Education'),
(204, 'SHAKAPOLY', 'Shaka Polytechnic', 'SS', 'NA2018SH5208', '0', 'Polytechnic'),
(205, 'SSU', 'Sokoto State University', 'NW', 'NA2018SO6877', '0', 'University'),
(206, 'SWU', 'Southwestern University', 'SW', 'NA2018SO8766', '0', 'University'),
(207, 'SPUCA', 'St. Pauls University College, Awka', 'SE', 'NA2018SP4176', '0', 'University'),
(208, 'SSCOE', 'Shehu Shagari College Of Education', 'NW', 'NA2018SS3855', '0', 'College of Education'),
(209, 'SU', 'Salem University, Lokoja', 'NC', 'NA2018SU2744', '0', 'University'),
(210, 'TANSIAN', 'Tansian University', 'SE', 'NA2018TA1094', '0', 'University'),
(211, 'TUI', 'Technical University, Ibadan', 'SW', 'NA2018TE3646', '0', 'University'),
(212, 'TPI', 'The Polytechnic Ile Ife', 'SW', 'NA2018TP77438', '0', 'Polytechnic'),
(213, 'TSP', 'Taraba State Polytechnic', 'NE', 'NA2018TA2314', '0', 'Polytechnic'),
(214, 'TSUE', 'Tai Solarin University Of Education, Ijebu-Ode', 'SW', 'NA2018TS9985', '0', 'University'),
(215, 'UDUS', 'Usmanu Danfodiyo University, Sokoto', 'NW', 'NA2018UD8855', '0', 'University'),
(216, 'UI', 'University Of Ibadan', 'SW', 'NA2018UI5531', '0', 'University'),
(217, 'UMYU', 'Umaru Musa Yardua University', 'NW', 'NA2018UM8315', '0', 'University'),
(218, 'UNIABUJA', 'University Of Abuja', 'NC', 'NA2018UN9536', '0', 'University'),
(219, 'UNIBEN', 'University Of Benin', 'SS', 'NA2018Un73490', '0', 'University'),
(220, 'UNICAL', 'University Of Calabar', 'SS', 'NA2018UN2866', '0', 'University'),
(221, 'UNIILORIN', 'University Of Ilorin', 'NC', 'NA2018UN7531', '0', 'University'),
(222, 'UNIJOS', 'University Of Jos', 'NC', 'NA2018UN8757', '0', 'University'),
(223, 'UNILAG', 'University Of Lagos', 'SW', 'NA2018UN9864', '0', 'University'),
(224, 'UNIMAID', 'University Of Maiduguri', 'NE', 'NA2018UN1086', '0', 'University'),
(225, 'UNIPORT', 'University Of Port-Harcourt', 'SE', 'NA2018UN4527', '0', 'University'),
(226, 'UNIUYO', 'University of Uyo', 'SS', 'NA2018UN0232', '0', 'University'),
(227, 'UNIMKAR', 'University Of Mkar, Mkar', 'SE', 'NA2018UN2195', '0', 'University'),
(228, 'UNN', 'University Of Nigeria Nsukka', 'SE', 'NA2018UN3415', '0', 'University'),
(229, 'UYOCITYPOLY', 'Uyo City Polytechnic, Nduetong Oku, Uyo-AKS', 'SS', 'NA2018UY6678', '0', 'Polytechnic'),
(230, 'WELLSPRING', 'Wellspring University', 'SS', 'NA2018WE9956', '0', 'University'),
(231, 'WESLEY', 'Wesley University, Ondo', 'SW', 'NA2018WE0081', '0', 'University'),
(232, 'WOLEX', 'Wolex Polythecnic', 'SW', 'NA2018WO1301', '0', 'Polytechnic'),
(233, 'YCT', 'Yaba College Of Technology', 'SW', 'NA2018YA2522', '0', 'Polytechnic'),
(234, 'YCT-PT', 'Yaba College Of Technology-PT', 'SW', 'NA2018YA1501', '0', 'Polytechnic'),
(235, 'YSU', 'Yobe State University', 'NE', 'NA2018YS20977', '0', 'University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ets`
--
ALTER TABLE `ets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numList`
--
ALTER TABLE `numList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ets`
--
ALTER TABLE `ets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numList`
--
ALTER TABLE `numList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
