-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 06:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlslibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblauthorlist`
--

CREATE TABLE `tblauthorlist` (
  `fldauthor_index` varchar(50) NOT NULL,
  `fldauthor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblauthorlist`
--

INSERT INTO `tblauthorlist` (`fldauthor_index`, `fldauthor`) VALUES
('AI001', 'Fuse'),
('AI002', 'Buncololi'),
('AI003', 'Rifujin Na Magonote'),
('AI004', 'Stephen McCauley'),
('AI005', 'Jack Slater'),
('AI006', 'Kate Storey'),
('AI007', 'John Grisham'),
('AI008', 'Richard Kadrey'),
('AI009', 'Cassandra Khaw'),
('AI010', 'Sarah J. Maas'),
('AI011', 'Freida McFadden'),
('AI012', 'Ali Faiz Salim'),
('AI013', 'David Baldacci'),
('AI014', 'Jan Guillou'),
('AI015', 'Christopher Reich'),
('AI016', 'Valerie Valdes'),
('AI017', 'Joakim Zander'),
('AI018', 'Jeremy Robinson');

-- --------------------------------------------------------

--
-- Table structure for table `tblavailist`
--

CREATE TABLE `tblavailist` (
  `fldavail_record` varchar(50) NOT NULL,
  `fldbooknum` varchar(50) NOT NULL,
  `fldavailstat` varchar(50) NOT NULL,
  `flddate_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblavailist`
--

INSERT INTO `tblavailist` (`fldavail_record`, `fldbooknum`, `fldavailstat`, `flddate_code`) VALUES
('AR001', '000-00-001', 'A0', 'D001'),
('AR002', '000-00-002', 'A1', 'D002'),
('AR003', '000-00-003', 'A1', 'D003'),
('AR004', '000-00-004', 'A0', 'D004'),
('AR005', '000-00-005', 'A1', 'D005'),
('AR006', '000-00-006', 'A1', 'D006'),
('AR007', '000-00-007', 'A1', 'D007'),
('AR008', '000-00-008', 'A0', 'D008'),
('AR009', '000-00-009', 'A1', 'D009'),
('AR010', '000-00-010', 'A1', 'D010'),
('AR011', '000-00-011', 'A1', 'D011'),
('AR012', '000-00-012', 'A1', 'D012'),
('AR013', '000-00-013', 'A0', 'D013'),
('AR014', '000-00-014', 'A1', 'D014'),
('AR015', '000-00-015', 'A1', 'D015'),
('AR016', '000-00-016', 'A1', 'D016'),
('AR017', '000-00-017', 'A1', 'D017'),
('AR018', '000-00-018', 'A1', 'D018'),
('AR019', '000-00-019', 'A1', 'D019'),
('AR020', '000-00-020', 'A1', 'D020'),
('AR021', '000-00-021', 'A1', 'D021');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooklist`
--

CREATE TABLE `tblbooklist` (
  `fldbook_index` int(50) NOT NULL,
  `fldbooknum` varchar(50) NOT NULL,
  `fldtitle` varchar(500) NOT NULL,
  `fldauthor_index` varchar(50) NOT NULL,
  `fldavail_record` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooklist`
--

INSERT INTO `tblbooklist` (`fldbook_index`, `fldbooknum`, `fldtitle`, `fldauthor_index`, `fldavail_record`) VALUES
(1, '000-00-001', 'That Time I Got Reincarnated as a Slime, Vol. 13 (light novel)', 'AI001', 'AR001'),
(2, '000-00-002', 'Sasaki and Peeps, Vol. 5 (light novel): Betrayals, Conspiracies, and Coups d&#x2019état! The Gripping Conclusion to the Otherworld Succession Battle ~Meanwhile, ... Hard Mode~', 'AI002', 'AR002'),
(3, '000-00-003', 'Mushoku Tensei: Jobless Reincarnation (Light Novel) Vol. 15', 'AI003', 'AR003'),
(4, '000-00-004', 'You Only Call When You&#x2019re in Trouble: A Novel', 'AI004', 'AR004'),
(5, '000-00-005', 'Dark State (Jason Trapp Thriller Book 1)', 'AI005', 'AR005'),
(6, '000-00-006', 'The Memory Library: A brand new, must-read novel of family, friendship and the power of storytelling to leave you feeling hopeful and inspired in 2024', 'AI006', 'AR006'),
(7, '000-00-007', ' The Guardians: A Novel', 'AI007', 'AR007'),
(8, '000-00-008', 'The Dead Take the A Train (Carrion City Book 1)', 'AI008', 'AR008'),
(9, '000-00-008', 'The Dead Take the A Train (Carrion City Book 1)', 'AI009', 'AR008'),
(10, '000-00-009', 'A Court of Mist and Fury (A Court of Thorns and Roses Book 2)', 'AI010', 'AR009'),
(11, '000-00-010', 'Never Lie: An addictive psychological thriller', 'AI011', 'AR010'),
(12, '000-00-011', 'Day of Horror: Novel', 'AI012', 'AR011'),
(13, '000-00-012', 'The Edge (6:20 Man Book 2)', 'AI013', 'AR012'),
(14, '000-00-013', ' The Road to Jerusalem (Crusades Trilogy Book 1)', 'AI014', 'AR013'),
(15, '000-00-014', 'Matterhorn (Mac Dekker Book 1)', 'AI015', 'AR014'),
(16, '000-00-015', 'Prime Deceptions: A Novel (Chilling Effect Book 2)', 'AI016', 'AR015'),
(17, '000-00-016', 'The Perfect Son', 'AI011', 'AR016'),
(18, '000-00-017', 'The Teacher', 'AI011', 'AR017'),
(19, '000-00-018', 'The Housemaid', 'AI011', 'AR018'),
(20, '000-00-019', ' The Swimmer: A Novel', 'AI017', 'AR019'),
(21, '000-00-020', 'Island 731', 'AI018', 'AR020'),
(22, '000-00-021', ' SecondWorld', 'AI018', 'AR021');

-- --------------------------------------------------------

--
-- Table structure for table `tbldatelist`
--

CREATE TABLE `tbldatelist` (
  `flddate_index` int(50) NOT NULL,
  `flddate_code` varchar(50) NOT NULL,
  `fldreturn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldatelist`
--

INSERT INTO `tbldatelist` (`flddate_index`, `flddate_code`, `fldreturn`) VALUES
(1, 'D001', '05/21/2024 - 05/28/2024'),
(2, 'D002', ''),
(3, 'D003', ''),
(4, 'D004', '05/11/2024 - 05/18/2024'),
(5, 'D005', ''),
(6, 'D006', ''),
(7, 'D007', ''),
(8, 'D008', '12/25/2019 - 01/01/2020'),
(9, 'D009', ''),
(10, 'D010', ''),
(11, 'D011', ''),
(12, 'D012', ''),
(13, 'D013', '05/20/2024 - 05/27/2024'),
(14, 'D014', ''),
(15, 'D015', ''),
(16, 'D016', ''),
(17, 'D017', ''),
(18, 'D018', ''),
(19, 'D019', ''),
(20, 'D020', ''),
(21, 'D021', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllibrarian`
--

CREATE TABLE `tbllibrarian` (
  `fldborrower_index` varchar(50) NOT NULL,
  `fldbooknum` varchar(50) NOT NULL,
  `fldstudnum` varchar(50) NOT NULL,
  `fldretri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllibrarian`
--

INSERT INTO `tbllibrarian` (`fldborrower_index`, `fldbooknum`, `fldstudnum`, `fldretri`) VALUES
('B001', '000-00-001', '2022690420', 'R001'),
('B002', '000-00-002', '2022690421', 'R002'),
('B003', '000-00-013', '2022690422', 'R003'),
('B004', '000-00-004', '2022690423', 'R004'),
('B005', '000-00-004', '2022690424', 'R005'),
('B006', '000-00-008', '2022690425', 'R006');

-- --------------------------------------------------------

--
-- Table structure for table `tblretrilog`
--

CREATE TABLE `tblretrilog` (
  `fldretrieval_index` int(50) NOT NULL,
  `fldretrieval_code` varchar(50) NOT NULL,
  `flddate_code` varchar(50) NOT NULL,
  `fldreceived` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblretrilog`
--

INSERT INTO `tblretrilog` (`fldretrieval_index`, `fldretrieval_code`, `flddate_code`, `fldreceived`) VALUES
(1, 'R001', 'D001', ''),
(2, 'R002', 'D002', '05-11-2024'),
(3, 'R003', 'D013', ''),
(4, 'R004', 'D004', '05-09-2024'),
(5, 'R005', 'D004', ''),
(6, 'R006', 'D008', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `fldavailstat` varchar(50) NOT NULL,
  `fldstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstatus`
--

INSERT INTO `tblstatus` (`fldavailstat`, `fldstatus`) VALUES
('A0', 'Unavailable'),
('A1', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `fldstudindex` int(50) NOT NULL,
  `fldstudnum` varchar(50) NOT NULL,
  `fldfirstname` varchar(50) NOT NULL,
  `fldlastname` varchar(50) NOT NULL,
  `fldmiddleinit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`fldstudindex`, `fldstudnum`, `fldfirstname`, `fldlastname`, `fldmiddleinit`) VALUES
(1, '2022690420', 'Broski', 'Chillum', 'A'),
(2, '2022690421', 'Yang', 'Yin', 'I'),
(3, '2022690422', 'CRIKET', 'SHIMINY', 'K'),
(4, '2022690423', 'Carna', 'Mon', 'A'),
(5, '2022690424', 'Emmanuel', 'Daragamn', 'G'),
(6, '2022690425', 'Thanatos', 'Di Manes', 'I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblauthorlist`
--
ALTER TABLE `tblauthorlist`
  ADD PRIMARY KEY (`fldauthor_index`),
  ADD KEY `fldauthor_index` (`fldauthor_index`);

--
-- Indexes for table `tblavailist`
--
ALTER TABLE `tblavailist`
  ADD PRIMARY KEY (`fldavail_record`),
  ADD KEY `fldbooknum` (`fldbooknum`,`fldavailstat`,`flddate_code`);

--
-- Indexes for table `tblbooklist`
--
ALTER TABLE `tblbooklist`
  ADD PRIMARY KEY (`fldbook_index`),
  ADD KEY `fldauthor_index` (`fldauthor_index`,`fldavail_record`);

--
-- Indexes for table `tbldatelist`
--
ALTER TABLE `tbldatelist`
  ADD PRIMARY KEY (`flddate_index`),
  ADD KEY `flddate_code` (`flddate_code`);

--
-- Indexes for table `tbllibrarian`
--
ALTER TABLE `tbllibrarian`
  ADD PRIMARY KEY (`fldborrower_index`),
  ADD KEY `fldbooknum_2` (`fldbooknum`),
  ADD KEY `fldbooknum` (`fldbooknum`) USING BTREE,
  ADD KEY `fldbooknum_3` (`fldbooknum`),
  ADD KEY `fldstudnum` (`fldstudnum`,`fldretri`);

--
-- Indexes for table `tblretrilog`
--
ALTER TABLE `tblretrilog`
  ADD PRIMARY KEY (`fldretrieval_index`),
  ADD KEY `fldretrieval_index` (`fldretrieval_index`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`fldavailstat`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`fldstudindex`),
  ADD KEY `fldstudindex` (`fldstudindex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
