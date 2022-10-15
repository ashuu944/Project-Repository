-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 09:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `ID` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `path` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ID`, `title`, `path`, `startDate`, `endDate`) VALUES
(2, 'Project Presentation', 'Annoucements/Topic.docx', '2018-06-21', '2018-06-15'),
(4, 'Report Submission', 'Annoucements/report.pdf', '2018-06-14', '2018-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `techID` int(11) NOT NULL,
  `techName` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`techID`, `techName`) VALUES
(3, 'java'),
(7, 'php'),
(9, 'vb'),
(10, 'asp.net'),
(11, 'jsp');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `commentDescp` text NOT NULL,
  `projectID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `name`, `commentDescp`, `projectID`) VALUES
(2, 'Proposal', 'oky', 2),
(3, 'Proposal', 'ok ', 4),
(6, 'Design', 'Add more table in the erd, class diagram is not oky ', 2),
(7, 'Project', 'Consider security on your system', 2),
(8, 'Proposal', 'Ok', 5),
(9, 'Design', 'Ok', 5),
(10, 'Project', 'Nice user interface but the functionality of the system is not well organized', 5),
(11, 'Proposal', 'OK', 6),
(12, 'Design', 'Class diagram is not clear', 6),
(13, 'Project', 'more features should be added', 6),
(14, 'Proposal', 'ok', 7),
(15, 'Design', 'Use case diagram is not clear', 7),
(16, 'Project', 'You need to add features like this and this ...', 7),
(17, 'Proposal', 'ok', 8),
(18, 'Design', 'Oky', 8),
(19, 'Project', 'More features should be added', 8),
(20, 'Proposal', 'ok', 9),
(21, 'Design', 'DFD is not clear', 9),
(22, 'Project', 'ok', 9),
(23, 'Proposal', 'OK', 10),
(24, 'Design', 'OK', 10),
(25, 'Project', 'Ok', 10),
(26, 'Proposal', 'ok', 11),
(27, 'Design', 'Ok', 11),
(28, 'Project', 'ok', 11),
(30, 'Proposal', 'ok', 21),
(31, 'Design', 'Ok', 21),
(32, 'Project', 'ok', 21),
(33, 'Proposal', 'ok', 14);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `prgID` int(11) NOT NULL,
  `prgCode` varchar(20) NOT NULL,
  `prgName` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`prgID`, `prgCode`, `prgName`) VALUES
(55, 'BCS', 'Bachelor of Science in Computer Science'),
(56, 'BITAM', 'Bachelor of Information technology and Management'),
(57, 'DIT', 'Diploma in Information Technology'),
(58, 'DCS', 'Diploma in Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `projectID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `problem_statement` text NOT NULL,
  `current_situation` text NOT NULL,
  `proposed_solution` text NOT NULL,
  `main_objectives` text NOT NULL,
  `anticipated_artifact` text NOT NULL,
  `hardware_requirement` text NOT NULL,
  `software_requirements` text NOT NULL,
  `year` varchar(50) NOT NULL,
  `abstract` text,
  `future` text,
  `techID` int(11) DEFAULT NULL,
  `comment_flag` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `title`, `problem_statement`, `current_situation`, `proposed_solution`, `main_objectives`, `anticipated_artifact`, `hardware_requirement`, `software_requirements`, `year`, `abstract`, `future`, `techID`, `comment_flag`) VALUES
(2, 'Hospital Management System', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem', 'current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation ', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution ', 'main main main main main main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main mainmain main main main', 'delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery delivery ', 'PC\r\nServer', 'XAMPP\r\nNetBean', '2016', 'Hospital Management is a desktop application designed by using vb.net which manages all activities such as dbcdcmm fbbvffffffffffffffffffffffff   bvbfvjdv dvcjbvdfm,vmd  bfvndnfmmv,mdvxcb v cxnv,dfmv z nvz,mvd fdbncvb cbcvnmxvx nvbddnv bdvcdbcxnmcxc vzcbmj,zd bvdvdhzs bcbvnmnzv, bv xczbbbxznmczmxc bvcbxnznv', 'Future works to add appointment system that will allow users to make appointment with doctors dbdfnvm,m bbvccccccccccc fjcjcxkckjvckj cvcmnvzbxncxmxx bbxvnmcnnmmmx,cc b cbcnnmcxnmx,c,xcnxnmc', 9, 1),
(4, 'Project Repository System', 'Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem ', 'current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situation current situasituation current situation current situation current situation current situation current situation current situation current situatio', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution ', 'main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main main ', 'system document\r\ncomplete system', 'PC', 'XAMPP\r\nsublime', '2018', NULL, NULL, 7, 1),
(5, 'Car wash management system', 'Problem problem problem problem Problem problem problem problemProblem problem problem problemProblem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problemProblem problem problem problemProblem problem problem problemProblem problem problem problem Problem problem problem problemProblem problem problem problem', ' Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation   Current Situation Current Situation  ', 'Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution ', 'Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives ', 'anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated anticipated ', 'PC', 'Android Studio\r\nApache', '2016', 'Car wash system manage all bnvmdvlkd b n vcmxbvxcvb vbvncxnnnnnnnnnn bxcv cv c,zvcmm,vc nmncv vfvhdjvkcx vbbvncxvc bvbbbbbbbbbbbbb nbbnvnmcvmnmvcmcv bvcnvcxnmcvvc cvvnxncnvmm,zxb vvccxxccx bvncxvzk.czbvnc bvnc, cmc bcvnvcm,mc b cv ncm, ', 'cjnvvvvvvvvvvv bxvc dsvcxvlk bcvjckvkclzvj bvvbnvjckvlklcllcv bnjjkvkmkczl nbxcnv vbnvm bxvbvxvcc bxvbcvbcnm,cv bcnbvcmcvxc nvxcvmcv,mvmvcmcvcv nbnvcnvmcv,zxcv ', 11, 1),
(6, 'Inventory system', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem ', 'Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation ', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution ', 'objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives objectives objective objectives ', 'system document\r\n system', 'PC\r\nServer', 'NetBean\r\nXAMPP', '2016', 'Deals with storage of hdjckcxmkc nbxvbbbbbbbbbbbc bvbvnvcncvvmvmncvnmc bvbvcnbvncnmccm vbcbvcvnnmcnmvnmcmv  ghhjdjfjkdkdkjjkc vbnjckllcks bvdbjzkjdlkslc vb zcjzlkc', 'To add more features liken vxfbvxjkvzzkv vbbvxvnvcvcckcv bvbnvkcvlkcc vvvcvnvdlkklcv vbcbcnmcvnmcnmvc  bcnmxzvxzvm vbxcbvnmmcv,mx   bnmxmnm, ,mx,  b ncxmnmvmx, mx', 7, 1),
(7, 'Online Banking System', 'Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem Problem problem problem ', 'Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation Situation situation situation ', 'Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solution solution solution Solution solsolution ', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'system document\r\nfully functional system', 'PC', 'Visual Studio\r\nSql Server', '2016', 'This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract This is abstract ', 'Future works Future worksFuture worksFuture worksFuture worksFuture worksFuture worksFuture worksFuture works', 10, 1),
(8, 'Student Attendance System', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem ', 'Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation Situation ', 'Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution Solution ', 'Objectives Objectives Objectives Objectives Objectives  Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives Objectives', 'system document\r\nfully functional system', 'PC\r\nSmart Phone', 'Android Studio\r\nXAMPP', '2017', 'This abstract abstract This abstract abstract This abstract abstract This abstract abstract This abstract abstract This abstract abstract This abstract abstract This abstract abstract This abstract abstract ', 'Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work Future work future work ', 3, 1),
(9, 'E-voting system', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem ', 'situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation ', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution ', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'software system\r\nsystem document', 'PC', 'Sublime\r\nXAMPP', '2017', 'Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract Abstract ', 'Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion and future works Conclusion', 7, 1),
(10, 'School Management System', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem ', 'situation situation situation situation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituation situation situationsituationsituatio', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution so', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'software\r\ndocument', 'PC', 'Visual studio\r\nSql Server', '2017', 'Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies Management of Schooc activies', 'future work of school management system', 9, 1),
(11, 'Driving Licence system', 'problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of problem of ', 'situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation situation ', 'solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution solution ', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'system\r\ndocument', 'PC \r\nsmart phone', 'android studio\r\nXampp\r\n', '2017', 'abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract abstract ', 'conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion conclusion ', 3, 1),
(12, 'Hotel Booking System', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem ', 'situation of the hotel', 'solution', 'objectives', 'system document\r\nsystem', 'PC', 'Eclipse\r\nApache Server', '2018', NULL, NULL, 11, 0),
(13, 'House Renting System', 'problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem problem vproblem problem problem problem problem problem problem problem problem problem ', 'current situation current situation current situation current situation current situation current situation ', 'solution to allow people to search for the house that ..', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'software system\r\ndocument', 'PC', 'XAMPP\r\nsublime', '2018', NULL, NULL, 7, 0),
(14, 'Al-yamin Hall Booking System', 'problem problme problem problme problem problme problem problme problem problme problem problme problem problme problem problme problem problme problem problme problem problme problem problme ', 'situation situation situation situation situation situation situation situation situation situation situation situation ', 'solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solution of developing this system solution Solutio', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'software system\r\nsystem document', 'PC', 'Eclipse\r\nApache Server\r\n', '2018', NULL, NULL, 11, 1),
(15, 'Student Clearance System', 'Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem Problem problem problem problem ', 'Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system Situation Situation of the current system ', 'Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution Solution solution ', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives ', 'software system\r\nsystem document', 'PC', 'XAMPP\r\nSublime', '2018', NULL, NULL, 7, 0),
(21, 'Garage Management System', 'ncnvnc bbcvc bvbnvm', 'nnmvmbv, ', 'vnbnmb,', 'nvnmvmvmv', 'nvmvmvmv', 'vnvmm', 'nfnvm,c,', '2017', 'Abstract of garage system Abstract of garage system Abstract of garage system Abstract of garage system Abstract of garage system Abstract of garage system ', 'future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system future works of garage system ', 11, 1),
(22, 'myproject', 'ncnmcccvmm,c', 'mvv,v,v', 'cmcv,c,.c', 'cnmc m, ', 'cvmv ,vc,.', ' vv  v v', 'vvmvm', '2018', NULL, NULL, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_delivarable`
--

CREATE TABLE IF NOT EXISTS `project_delivarable` (
  `delID` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `path` text,
  `projectID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_delivarable`
--

INSERT INTO `project_delivarable` (`delID`, `name`, `path`, `projectID`) VALUES
(5, 'Design Document', 'Deliverable/DesignDocuments/Software Fault Tolerance (1).docx', 2),
(6, 'System Document', 'Deliverable/SystemDocumentation/report (2).pdf', 2),
(7, 'Project Code', 'Deliverable/SourceCodes/testingCode.zip', 2),
(8, 'Design Document', 'Deliverable/DesignDocuments/Software Fault Tolerance.docx', 5),
(9, 'System Document', 'Deliverable/SystemDocumentation/report (4).pdf', 5),
(10, 'Project Code', 'Deliverable/SourceCodes/download.zip', 5),
(11, 'Design Document', 'Deliverable/DesignDocuments/report (2).pdf', 6),
(12, 'System Document', 'Deliverable/SystemDocumentation/Software Fault Tolerance (6).docx', 6),
(13, 'Project Code', 'Deliverable/SourceCodes/fileUpload.zip', 6),
(14, 'Design Document', 'Deliverable/DesignDocuments/Software Fault Tolerance (4).docx', 7),
(15, 'System Document', 'Deliverable/SystemDocumentation/report (1).pdf', 7),
(16, 'System Document', 'Deliverable/SystemDocumentation/project.zip', 7),
(17, 'Design Document', 'Deliverable/DesignDocuments/Topic (3).docx', 8),
(18, 'System Document', 'Deliverable/SystemDocumentation/Software Fault Tolerance (2).docx', 8),
(19, 'Project Code', 'Deliverable/SourceCodes/projectAttendance.zip', 8),
(20, 'Design Document', 'Deliverable/DesignDocuments/System Documentation.docx', 9),
(21, 'System Document', 'Deliverable/SystemDocumentation/rs.docx', 9),
(22, 'Project Code', 'Deliverable/SourceCodes/pr.zip', 9),
(23, 'Design Document', 'Deliverable/DesignDocuments/design.docx', 10),
(24, 'System Document', 'Deliverable/SystemDocumentation/report.docx', 10),
(25, 'Project Code', 'Deliverable/SourceCodes/sms.zip', 10),
(26, 'Design Document', 'Deliverable/DesignDocuments/Topic (13).docx', 11),
(27, 'System Document', 'Deliverable/SystemDocumentation/The_Methodology_of_N-Version_Programming.pdf', 11),
(28, 'Project Code', 'Deliverable/SystemDocumentation/report (3).pdf', 11),
(29, 'Design Document', 'Deliverable/DesignDocuments/garageDesign.docx', 21),
(30, 'System Document', 'Deliverable/SystemDocumentation/reportGarage.pdf', 21),
(31, 'Project Code', 'Deliverable/SourceCodes/garagesourcecode.zip', 21);

-- --------------------------------------------------------

--
-- Table structure for table `related_project`
--

CREATE TABLE IF NOT EXISTS `related_project` (
  `relatedID` int(11) NOT NULL,
  `projLim_path` text,
  `prevProjID` int(11) DEFAULT NULL,
  `newProjID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_project`
--

INSERT INTO `related_project` (`relatedID`, `projLim_path`, `prevProjID`, `newProjID`) VALUES
(3, 'RelatedProject/Limitation Doc.docx', 5, 21);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `resultID` int(11) NOT NULL,
  `design_marks` double NOT NULL DEFAULT '0',
  `doc_marks` double NOT NULL DEFAULT '0',
  `pres_marks` double NOT NULL DEFAULT '0',
  `Id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`resultID`, `design_marks`, `doc_marks`, `pres_marks`, `Id`) VALUES
(1, 3, 23, 30, 2),
(2, 0, 0, 0, 3),
(3, 0, 0, 0, 4),
(6, 6, 23, 23, 5),
(7, 8, 30, 25, 7),
(8, 8, 30, 17, 6),
(9, 7, 30, 29, 8),
(10, 5, 30, 25, 9),
(11, 7, 35, 35, 10),
(12, 8, 30, 36, 12),
(13, 8, 24, 34, 13),
(14, 7, 24, 40, 14),
(15, 9, 35, 36, 16),
(16, 8, 35, 30, 15),
(17, 5, 30, 35, 17),
(18, 5, 30, 25, 18),
(19, 7, 35, 20, 20),
(20, 8, 35, 30, 19),
(21, 7, 30, 35, 33);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `statusID` int(11) NOT NULL,
  `statusName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`statusID`, `statusName`) VALUES
(2, 'Supervisor'),
(3, 'Student'),
(13, 'Project Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `settingType` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`ID`, `title`, `startDate`, `endDate`, `settingType`) VALUES
(1, 'Proposal Date Setting', '2018-05-01', '2018-07-09', 'Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdID` int(11) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `mName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `regNo` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telNo` varchar(20) DEFAULT NULL,
  `profilePic` varchar(100) DEFAULT 'ProfilePix/user.png',
  `prgID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdID`, `fName`, `mName`, `lName`, `gender`, `regNo`, `email`, `telNo`, `profilePic`, `prgID`, `userID`) VALUES
(43, 'Amina', 'Salim', 'Mohd', 'F', 'BITAM/5/13/180/TZ', 'test@hotmail.com', '+255777354899', 'ProfilePix/user.png', 56, 94),
(44, 'Fatuma', 'Juma', 'Said', 'F', 'BITAM/5/13/109/TZ', 'test@hotmail.com', '0772345678', 'ProfilePix/user.png', 56, 95),
(45, 'Halima', 'Khamis', 'Kombo', 'F', 'DIT/8/7/100/TZ', 'test@hotmail.com', '0718909870', 'ProfilePix/user.png', 57, 96),
(46, 'Sauda', 'Mohd', 'Said', 'F', 'DCS/10/13/200/TZ', 'test@hotmail.com', '0779567890', 'ProfilePix/user.png', 58, 97),
(47, 'Omar', 'Ali', 'Juma', 'M', 'DCS/10/15/124/TZ', 'test@hotmail.com', '0779567890', 'ProfilePix/user.png', 58, 98),
(48, 'Massoud', 'Hemed', 'Salim', NULL, 'DIT/10/15/300/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 99),
(49, 'Rashid', 'Ali', 'Omar', 'M', 'BITAM/5/13/189/TZ', 'test@hotmail.com', '0784439343', 'ProfilePix/user.png', 56, 100),
(50, 'Hamid', 'Juma', 'Khamis', 'M', 'DCS/10/15/200/TZ', 'test@hotmail.com', '+255777354899', 'ProfilePix/user.png', 58, 101),
(51, 'Asha', 'Said', 'Seif', 'F', 'BCS/10/15/208/TZ', 'ashuu944@gmail.com', '07792490524', 'ProfilePix/img.jpg', 55, 102),
(52, 'Aziza', 'Hamad', 'Ali', 'F', 'BCS/10/15/207/TZ', 'azhal@gmail.com', '0718909870', 'ProfilePix/user.png', 55, 103),
(53, 'Ahlam', 'Salman', 'Haidar', 'F', 'BCS/10/15/206/TZ', 'ahlam@gmail.com', '0784439343', 'ProfilePix/user.png', 55, 104),
(54, 'Aisha ', 'Suleiman', 'Khamis', 'F', 'BCS/10/15/205/TZ', 'asha@gmail.com', '0772345678', 'ProfilePix/user.png', 55, 105),
(55, 'Asha', 'Khamis', 'Mzee', 'F', 'BCS/10/15/218/TZ', 'asshuu944@gmail.com', '0772345678', 'ProfilePix/user.png', 55, 106),
(56, 'Khamis', 'Juma', 'Ali', 'M', 'BCS/10/15/213/TZ', 'test@hotmail.com', '0772345678', 'ProfilePix/user.png', 55, 107),
(57, 'Mohd', 'Ali', 'Rashid', 'M', 'BCS/10/15/216/TZ', 'test@hotmail.com', '0718909870', 'ProfilePix/user.png', 55, 108),
(58, 'Ally', 'Said', 'Ali', 'M', 'BCS/10/15/203/TZ', 'ally@gmail.com', '0772346754', 'ProfilePix/user.png', 55, 118),
(59, 'Sufii', 'Omar', 'Makame', 'M', 'BCS/6/13/92/TZ', 'test@hotmail.com', '+255777354899', 'ProfilePix/user.png', 55, 119),
(60, 'Said', 'Salim', 'Said', NULL, 'BCS/6/13/91/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 120),
(61, 'Sheymar', 'Ali', 'Mohd', 'F', 'BCS/6/13/90/TZ', 'test@hotmail.com', '+255777354899', 'ProfilePix/user.png', 55, 121),
(62, 'Abdulhalim', 'Khalfan', 'Rashid', 'M', 'BCS/6/13/72/TZ', 'test@hotmail.com', '0784439343', 'ProfilePix/user.png', 55, 122),
(63, 'Omar', 'Mahfoudh', 'Simai', 'M', 'BCS/6/13/62/TZ', 'test@hotmail.com', '0777306628', 'ProfilePix/user.png', 55, 123),
(64, 'Ali', 'Said', 'Ali', NULL, 'BCS/6/13/100/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 124),
(65, 'Mohd', 'Ali ', 'Said', NULL, 'DIT/5/13/58/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 125),
(66, 'Mahfoudh', 'Omar', 'Juma', NULL, 'DIT/5/13/78/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 126),
(67, 'Safia', 'Issa', 'Farid', NULL, 'DIT/5/13/57/TZ', 'test@hotmail.com', NULL, 'ProfilePix/user.png', NULL, 127),
(68, 'Saumu', 'Ali', 'Mohd', 'F', 'DIT/5/13/50/TZ', 'test@hotmail.com', '0779567890', 'ProfilePix/user.png', 57, 128),
(69, 'Ali', 'Juma', 'Mahfoudh', 'M', 'DIT/5/13/10/TZ', 'test@hotmail.com', '0772345678', 'ProfilePix/user.png', 57, 129),
(70, 'Rayuu', 'Juma', 'Halid', 'F', 'DCS/9/14/95/TZ', 'test@hotmail.com', '0777366628', 'ProfilePix/user.png', 58, 130),
(71, 'Rahima', 'Nassor', 'Halid', 'F', 'DCS/9/14/90/TZ', 'test@hotmail.com', '0784939343', 'ProfilePix/user.png', 58, 131),
(72, 'Mohd', 'Suleiman', 'Hassan', 'M', 'DIT/7/14/97/TZ', 'test@hotmail.com', '0718909870', 'ProfilePix/user.png', 57, 132),
(73, 'Ali', 'Hamad', 'Hassan', 'M', 'DIT/7/14/99/TZ', 'test@hotmail.com', '0784439343', 'ProfilePix/user.png', 57, 133),
(74, 'Abdullah', 'Nassor', 'Omar', 'M', 'BCS/9/14/100/TZ', 'test@hotmail.com', '0777360628', 'ProfilePix/user.png', 55, 134),
(75, 'Omar', 'Mohd', 'Abdullah', 'F', 'BCS/9/14/103/TZ', 'test@hotmail.com', '0772345678', 'ProfilePix/user.png', 55, 135),
(76, 'Ibrahim', 'Nassor', 'Hassan', 'M', 'BITAM/3/14/100/TZ', 'test@hotmail.com', '0718909870', 'ProfilePix/user.png', 56, 136),
(77, 'Khadija', 'Khamis', 'Haji', 'F', 'BITAM/3/14/199/TZ', 'test@hotmail.com', '0779567890', 'ProfilePix/user.png', 56, 137),
(78, 'Halima', 'Juma', 'Ali', 'F', 'DIT/10/15/200/TZ', 'halima@gmail.com', NULL, 'ProfilePix/user.png', NULL, 139),
(79, 'Amina', 'Hamad', 'Khamis', 'F', 'BITAM/3/14/177/TZ', 'ammy@gmail.com', '+255777354899', 'ProfilePix/user.png', 56, 140),
(80, 'testing', 'For', 'U', 'F', 'testing', 'ac@s.com', '34445554', 'ProfilePix/user.png', 58, 141),
(81, 'Aziza', 'alui', 'Ali', 'F', 'azhal', 'ac@s.com', '0777366628', 'ProfilePix/user.png', 56, 142),
(82, 'AZHAL', 'MOHD', 'ALO', 'F', 'azhal9', 'ac@s.com', '+255777354899', 'ProfilePix/user.png', 56, 143);

-- --------------------------------------------------------

--
-- Table structure for table `student_project`
--

CREATE TABLE IF NOT EXISTS `student_project` (
  `Id` int(11) NOT NULL,
  `stdID` int(11) DEFAULT NULL,
  `projectID` int(11) DEFAULT NULL,
  `sprID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_project`
--

INSERT INTO `student_project` (`Id`, `stdID`, `projectID`, `sprID`) VALUES
(2, 44, 2, 13),
(3, 51, 4, 13),
(4, 52, 4, 13),
(5, 49, 2, 11),
(6, 59, 5, 13),
(7, 61, 5, 13),
(8, 62, 6, 15),
(9, 63, 6, 15),
(10, 69, 7, 10),
(12, 68, 7, 10),
(13, 74, 8, 17),
(14, 75, 8, 17),
(15, 77, 9, 18),
(16, 76, 9, 18),
(17, 71, 10, 11),
(18, 70, 10, 11),
(19, 72, 11, 17),
(20, 73, 11, 17),
(21, 58, 12, 9),
(22, 54, 12, 9),
(23, 53, 13, NULL),
(24, 55, 13, NULL),
(25, 56, 14, 11),
(26, 57, 14, 11),
(27, 47, 15, 10),
(33, 79, 21, 10),
(34, 80, 22, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `sprID` int(11) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `mName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telNo` varchar(20) NOT NULL,
  `profilePic` varchar(100) DEFAULT 'ProfilePix/user.png',
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`sprID`, `fName`, `mName`, `lName`, `gender`, `email`, `telNo`, `profilePic`, `userID`) VALUES
(9, 'Hassan', 'Mohd', 'Omar', 'M', 'hass@suza.ac.tz', '0777366628', 'ProfilePix/user.png', 78),
(10, 'Akram', 'Ali', 'Omar', 'M', 'akram@gmail.com', '0784439343', 'ProfilePix/user.png', 109),
(11, 'Abubakar', 'M.', 'Diwan', 'M', 'abuu@suza.ac.tz', '077334434', 'ProfilePix/user.png', 110),
(12, 'Suleiman', 'A.', 'Hamyar', 'M', 'hamiar@suza.ac.tz', '0777366620', 'ProfilePix/user.png', 111),
(13, 'Raya', 'Idriss', 'Ahmad', 'F', 'raya@gmail.com', '0776899076', 'ProfilePix/user.png', 112),
(14, 'Yahya', 'Sheikh', 'Hamad', 'M', 'yahya@hotmail.com', '0776899079', 'ProfilePix/user.png', 113),
(15, 'Mwanajuma', 'S.', 'Mgeni', 'F', 'mwna@suza.ac.tz', '+255777350009', 'ProfilePix/user.png', 114),
(16, 'Khayria', 'Mudrik', 'Omar', 'F', 'khay@suza.ac.tz', '0776899076', 'ProfilePix/user.png', 115),
(17, 'Haji', 'A.', 'Haji', 'M', 'haj@suza.ac.tz', '078443934', 'ProfilePix/user.png', 116),
(18, 'Ali', 'Adinan', 'Suleiman', 'M', 'adnan@hotmail.com', '0784489343', 'ProfilePix/user.png', 117),
(19, 'Ali', 'Abdullah', 'Ali', 'M', 'abdulla@suza.ac.tz', '0777324567', 'ProfilePix/user.png', 138);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statusID` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `f_login` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `password`, `statusID`, `status`, `f_login`) VALUES
(78, 'hassan', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(94, 'BITAM/5/13/180/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(95, 'BITAM/5/13/109/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(96, 'DIT/8/7/100/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(97, 'DCS/10/13/200/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(98, 'DCS/10/15/124/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(99, 'DIT/10/15/300/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 0),
(100, 'BITAM/5/13/189/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(101, 'DCS/10/15/300/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(102, 'BCS/10/15/208/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(103, 'BCS/10/15/207/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(104, 'BCS/10/15/206/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(105, 'BCS/10/15/205/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(106, 'BCS/10/15/218/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(107, 'BCS/10/15/213/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(108, 'BCS/10/15/216/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(109, 'akram', '25d55ad283aa400af464c76d713c07ad', 13, 'Active', 1),
(110, 'abuu', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(111, 'hamiar', '25d55ad283aa400af464c76d713c07ad', 13, 'Active', 1),
(112, 'raya', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(113, 'yahya', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(114, 'mwana', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(115, 'khayria', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(116, 'haji', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(117, 'adinan', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(118, 'BCS/10/15/203/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(119, 'BCS/6/13/92/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(120, 'BCS/6/13/91/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 0),
(121, 'BCS/6/13/90/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(122, 'BCS/6/13/72/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(123, 'BCS/6/13/62/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(124, 'BCS/6/13/100/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 0),
(125, 'DIT/5/13/58/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 0),
(126, 'DIT/5/13/78/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 0),
(127, 'DIT/5/13/57/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 0),
(128, 'DIT/5/13/50/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(129, 'DIT/5/13/10/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(130, 'DCS/9/14/95/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(131, 'DCS/9/14/90/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(132, 'DIT/7/14/97/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(133, 'DIT/7/14/99/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(134, 'BCS/9/14/100/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(135, 'BCS/9/14/103/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(136, 'BITAM/3/14/100/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(137, 'BITAM/3/14/199/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Inactive', 1),
(138, 'ali', '25d55ad283aa400af464c76d713c07ad', 2, 'Active', 1),
(139, 'DIT/10/15/200/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 0),
(140, 'BITAM/3/14/177/TZ', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(141, 'testing', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(142, 'azhal', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1),
(143, 'azhal9', '25d55ad283aa400af464c76d713c07ad', 3, 'Active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`techID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`), ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`prgID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `project_delivarable`
--
ALTER TABLE `project_delivarable`
  ADD PRIMARY KEY (`delID`), ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `related_project`
--
ALTER TABLE `related_project`
  ADD PRIMARY KEY (`relatedID`), ADD KEY `prevProjID` (`prevProjID`), ADD KEY `newProjID` (`newProjID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultID`), ADD KEY `Id` (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdID`), ADD KEY `prgID` (`prgID`), ADD KEY `userID` (`userID`);

--
-- Indexes for table `student_project`
--
ALTER TABLE `student_project`
  ADD PRIMARY KEY (`Id`), ADD KEY `stdID` (`stdID`), ADD KEY `projectID` (`projectID`), ADD KEY `sprID` (`sprID`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`sprID`), ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`), ADD KEY `statusID` (`statusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `techID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `prgID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `project_delivarable`
--
ALTER TABLE `project_delivarable`
  MODIFY `delID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `related_project`
--
ALTER TABLE `related_project`
  MODIFY `relatedID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stdID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `student_project`
--
ALTER TABLE `student_project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `sprID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_delivarable`
--
ALTER TABLE `project_delivarable`
ADD CONSTRAINT `project_delivarable_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `related_project`
--
ALTER TABLE `related_project`
ADD CONSTRAINT `related_project_ibfk_1` FOREIGN KEY (`prevProjID`) REFERENCES `project` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `related_project_ibfk_2` FOREIGN KEY (`newProjID`) REFERENCES `project` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `student_project` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`prgID`) REFERENCES `programme` (`prgID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_project`
--
ALTER TABLE `student_project`
ADD CONSTRAINT `student_project_ibfk_1` FOREIGN KEY (`stdID`) REFERENCES `student` (`stdID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_project_ibfk_2` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_project_ibfk_3` FOREIGN KEY (`sprID`) REFERENCES `supervisor` (`sprID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`statusID`) REFERENCES `role` (`statusID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
