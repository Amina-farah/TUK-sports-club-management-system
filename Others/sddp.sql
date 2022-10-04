-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 12:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyevent`
--

CREATE TABLE `applyevent` (
  `aeid` int(10) NOT NULL,
  `etitle` varchar(200) NOT NULL,
  `eimage` varchar(250) NOT NULL,
  `announcement` varchar(2500) NOT NULL,
  `description` varchar(2500) NOT NULL,
  `cid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `edate_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyevent`
--

INSERT INTO `applyevent` (`aeid`, `etitle`, `eimage`, `announcement`, `description`, `cid`, `cname`, `edate_time`) VALUES
(5, 'Testing', 'event.png', '', 'Testing', 8, 'Sports & Games', '2022-09-01 09:19:06'),
(6, 'Testing2', 'event.png', '', 'testing2', 8, 'Sports & Games', '2022-09-01 09:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `applyjoinclub`
--

CREATE TABLE `applyjoinclub` (
  `aid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_num` varchar(20) NOT NULL,
  `studentsid` varchar(10) NOT NULL,
  `intake` varchar(25) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `personal_statement` varchar(2500) NOT NULL,
  `clubid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `adate_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyjoinclub`
--

INSERT INTO `applyjoinclub` (`aid`, `username`, `email`, `contact_num`, `studentsid`, `intake`, `gender`, `birth_date`, `country`, `personal_statement`, `clubid`, `cname`, `adate_time`) VALUES
(29, 'Chris Hemsworth', 'chris@gmail.com', '0193004822', 'SCEE/234567/2020', 'JOURNALISM', 'Male', '1999-06-30', 'Kenya', 'I am interest and enjoy playing hockey. Please give me a shot to join you.', 4, 'HOCKEY CLUB', '2022-06-01 09:01:58'),
(30, 'Tom Hardy', 'hardy@gmail.com', '0120582281', 'scie/0987756/2018', 'PURE MATHEMATICS', 'Male', '1999-05-16', 'Kenya', 'I saw some information about this club. It seen like it is a very fun club.\r\nI really hoping I can join a club to make a lot of friends, release stress and have fun!\r\nPlease allow me to join your club.', 1, 'BADMINTON CLUB', '2022-06-01 09:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `content` varchar(2500) DEFAULT NULL,
  `wallpaper` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`cid`, `cname`, `cimage`, `category`, `content`, `wallpaper`, `link`, `mail`, `venue`, `location`) VALUES

(01, 'BADMINTON ClUB', 'BADMINTON.png', 'Sport & Games', 'Are you interested in playing badminton but do not know how to play? Do you want to play badminton but do not have a partner to play with?\r\n<br>You are in luck, join us in our badminton club where the badminton elite can teach you how to play badminton. You can also play badminton with the other studentss or teachers too. <br><b>What are you waiting for, join with is by clicking the </b>', 'badminton.jpg', 'https://web.facebook.com/groups/1603025193247541/?_rdc=1&_rdr', '
tuksportsclub@gmail.com', 'MAIN HALL', 'TUK'),
(02, 'BASKETBALL CLUB', 'BASKETBALL.png', 'Sport & Games', 'The Basketball Club consists of the Male and Female 1st team, through tryouts which will take place at the beginning of the academic year. Being part of the Basketball team brings together the competitive spirit with the life of a students. It is a great way to share the passion and commitment for basketball and enjoy life at University.<br>\r\n\r\nBasketball is not only about our competitive teams, everyone is welcome to play basketball in the social basketball sessions which will take place in a dedicated time slot every week! You are not required to play competitively or enter try outs - just come along to, by yourself or with friends, and join in with everyone else there.<br>\r\n\r\nContact us for more information.', 'basketball.jpg', 'https://web.facebook.com/TUKBasketballGators/?_rdc=1&_rdr', '
tuksportsclub@gmail.com', 'TUK sports ground', 'SOUTH C'),
(03, 'FOOTBALL CLUB', 'FOOTBALL.png', 'Sport & Games', 'The university has established and developed football club and provide studentss with comprehensive and professional training. The university provides different football pathways to excellence based on their abilities and preferences, this is done through tournaments<br>

<br>
What are you still waiting for?'football.jfif', 'https://web.facebook.com/groups/1603025193247541/?_rdc=1&_rdr', 'tuksportsclub@gmail.com', 'tuk sports ground', 'SOUTH C'),
(04, 'HOCKEY CLUB', 'HOCKEY.png', 'Sports & Games', ' We are one of the largest, proudest, and most socially active clubs in the University, We train every Evening. Whilst you may not be spending every day of your week playing hockey, the club will make you feel like your university career is defined by your participation in this society. We’re looking for hockey lovers who are willing to be a part of the TUK HOCKEY CLUB on and off the field..<br>\r\What are you still waiting for?.', 'hockey.jfif', 'https://web.facebook.com/groups/1603025193247541/?_rdc=1&_rdr', 'tuksportsclub@gmail.com', 'tuk sports ground', 'SOUTH C'),
(05, 'HANDBALL CLUB', 'HANDBALL.png', 'Sports & Games', 'The purpose of the Handball Club is to provide instruction in skills, rules, and other aspects of Handball, organize tournaments with various institutions, provide a means for studentss to share ideas about handball, and provide a means for studentss to compete with each other and other organizations.', 'handball.jfif', 'https://web.facebook.com/Technicaluniversityofk/?_rdc=1&_rdr', 'tuksportsclub@gmail.com
', 'tuk sports ground', 'SOUTH C'),
(06, 'ATHLETICS CLUB', 'athletics.png', 'Sports & Games', 'Our mandate is to develop ATHLETIC talents through establishment and management of academies, training and provide studentss with chances to compete both national and international levels.', 'athletics.jpg', '-', 'tuksportsclub@gmail.com
', 'nyayo stadium', 'NAIROBI'),
(07, 'VOLLEYBALL CLUB', 'volleyball.png', 'Sports & Games', '
TUK volleyball club provides studentss with  chances to improve their skills and compete consistently. Whether you’re playing practice games or in tournaments, the play level and the amount of competition will be higher.join us today to have fun and enjoy volleyball games.', 'volleyball.png', '-', 'tuksportsclub@gmail.com', 'tuk sports ground', 'SOUTH C'),
(08, 'TABLE TENNIS CLUB', 'TT.png', 'Sports & Games', 'this is a tabble tennis club that does enjoy playing table tennis with passion. \r\nTUK table tennis club natures talents to become houshold names in kenya in this sport.\r\n. if you have talent in this game or you love playing it,:\r\what are you waiting?join us today.', 'tabletennis.jpg', '-', 'tuksportsclub@gmail.com', 'MAIN HALL', 'TUK');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(10) NOT NULL,
  `etitle` varchar(200) NOT NULL,
  `eimage` varchar(255) DEFAULT NULL,
  `announcement` varchar(2500) DEFAULT NULL,
  `description` varchar(5000) NOT NULL,
  `cid` int(10) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `edate_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `etitle`, `eimage`, `announcement`, `description`, `cid`, `cname`, `edate_time`) VALUES
(01, 'SOUTH-C FOOTBALL TOURNAMENT', 'football.jfif',Abass Khalif tournament finals. , 'We will be playing POISON FC . <br><br>\r\n\r\n🗓️ Date: 20/09/2022 <br>\r\n\r\n⏳  Time: 3:00pm to 6:00pm (GMT+3)<br>\r\n\r\n📍 Venue: at TUK Sports Centre South C <br> Feel free to contact us for more info!<br>\r\n\r\nAmina Ali (admin): <a href=\"mailto:tuksportsclub@gmail.com?subject=subject text\">tuksportsclub@gmail.com', 3, 'FOOTBALL CLUB', '2022-09-10 08:21:49'),
(02, 'HANDBALL TOURNAMENT', 'handball.png', 'kenya handball federation national league', 'Kenya Handball Federation (KHF) national league side Mount Kenya University (MKU) Eldoret Campus men’s team  will play against  champions Technical University of Kenya (TUK)  at the Nyayo national Stadium <br>\n\nRelieve your stress, make new friends, and come watch our team win.<br><br>\n\nDate: sarturday, 01st october 2022<br>\n\nTime: 04:00 PM (GMT +3)<br>\n\nPlatform: TUK HANDBALL CLUB, 5, 'Sports & Games', '2022-09-10 08:10:55'),
(03, 'KUSA BASKETBALL TOURNAMENT', 'BASKETBALL.jpg', 'KUSA BASKETBALL TOURNAMENT', 'We’re excited for the return of KUSA BASKETBALL TOURNAMENT and we want YOU to join us! 🎉<br>\r\n\r\nKUSA BASKETBALL TOURNAMENT is an event by the KENYA UNIVERSITY students ASSOCIATION which involves various university studentss coming together to showcase their various basketball talents.<br><br>\r\n\r\nDate: sunday, 2nd october 2022 (Tentative Date)<br>\r\n\r\nTime: 9am to 6pm<br>\r\n\r\nVenue: kasarani stadium<br>\r\n\r\npdates on the event will be rolled out over next few weeks on our socials<br>\r\n\r\nIn case of any inquiries kindly contact us through our email or socials.<br>\r\n\r\nEmail: <a href=\"mailto:tuksportsclub@gmail.com?subject=subject text\">tuksportsclub@gmail.com</a>\r\n\r\n<br>\r\nInstagram: @tuk basketball club', 2, 'BASKETBALL CLUB', '2022-06-01 08:18:15'),
(04, 'HOCKEY CLUB', 'hockey.jfif', 'KENYA HOCKEY UNION NATIONAL WOMEN'S LEAGUE', 'The 2022 Kenya Hockey Union (KHU) leagues will kick off on Saturday after two years.The 2022 season will feature three tiers that has Premier League, Super League and National League for women.<br>\r\n\r\TUK WOMEN HOCKEY CLUB will play against lakers hockey club <br><br>\n\nDate: thursday, 12th october 2022<br>\n\nTime: 03:00 PM (GMT +3)', 4, 'HOCKEY CLUB', '2022-06-01 08:12:35'),
(05, 'Badminton league University 2022', 'badmintontour.jpg', 'ANNUAL BADMINTON LEAGUE',<br>Date: 25/09 - 31/09/2022<br>Organising Committee:<br> TUK BADMINTON CLUB<br>TECHNICAL UNIVERSITY OF KENYA<br>MAIN HALL, TUK <br>\r\nContact Us for more information:<br>\r\n<a href=\"mailto:tuksportsclub@gmail.com?subject=subject text\">tuksportsclubclub@gmail.com</a>', 1, 'BADMINTON CLUB', '2022-06-01 08:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(2500) NOT NULL,
  `mdate_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `email`, `subject`, `message`, `mdate_time`) VALUES
(01, 'SIMEON GITAU', 'simeongitau@mail.com', 'issues', 'I'm having issues with the registration process,kindly help', '2022-09-05 09:24:32'),
(02, 'Apelles Njenga', 'apellesnjenga@mail.com', 'events update', 'i would like to make correction on an event.', '2022-09-05 09:24:32'),
(03, 'Amina Ali', 'aminaali5580@gmail.com', 'test', 'TEsting', '2022-09-05 09:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(10) NOT NULL,
  `bio` varchar(200) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `studentsid` varchar(10) NOT NULL,
  `intake` varchar(25) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `ic_passport` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `clubid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--
INSERT INTO `students` (`sid`, `bio`, `username`, `email`, `password`, `Fname`, `Lname`, `studentsid`, `intake`, `mobile_num`, `gender`, `birth_date`, `ic_passport`, `country`, `role`, `clubid`) VALUES
(01, NULL, 'SIMON GITAU', 'simeongitau@gmail.com','123', 'SIMON ', 'GITAU', 'SCEE/09183P/2017', 'ELECTRICAL ENGINEERING', '0723456789', 'Male', '2001-06-26', '123456789', 'Kenya', 'Committee', 4),
(02, NULL, 'ERIC MAINA', 'ericmaina@gmail.com', '123', 'ERIC', 'MAINA', 'SCEE/00453/2019', 'INFORMATION TECHNOLOGY', '0724567893', 'Male', '2000-01-01', '234567891', 'Kenya', 'students', 8),
(03, NULL, 'EUNICE WERU', 'euniceweru@gmail.com', '123', 'EUNICE', 'WERU', 'SCEE/07621P/2019', 'ARCHITECTURAL DESIGN', '07235678934', 'Female', '2000-01-02', '345678912', 'Kenya', 'students', 1),
(04, NULL, 'ASAHEL ENOCK KIGEN', 'asahelkigen@gmail.com', '123', 'ASAHEL', 'ENOCK KIGEN', 'SCEE/02123/2019', 'COMPUTER SCIENCE', '0726789345', 'Male', '2000-01-03', '456789123', 'Kenya', 'Organizer', 8),
(05, NULL, 'SARAH KIGANO', 'sarahkigano@gmail.com', '123', 'SARAH ', 'KIGANO', 'SCIE/03782P/2019', 'INTERNATIONAL RELATION', '0727893456', 'Female', '2000-01-04', '567891234', 'Kenya', 'students', 6),
(06, NULL, 'LEWIS KORI', 'lewiskori@gmial.com', '123', 'LEWIS', 'KORI', 'SCEE/02120/2019', 'NURSING', '0728934567', 'Male', '2000-01-05', '678912345', 'Kenya', 'Committee', 3),
(07, NULL, 'SHANICE NASAMBU', 'shanicenasambu@gmail.com', '123', 'SHANICE ', 'NASAMBU', 'SCEE/02118/2019', 'MECHANICAL ENGINEERING', '0129345678', 'Female', '2000-01-06', '789123456', 'Kenya', 'Committee', 1),
(08, NULL, 'JOHN THUO', 'johnthuo@gmail.com', '123', 'JOHN', 'THUO', 'SCEE/03153P/2019', 'EDUCATIONAL SCIENCE', '0725829425', 'male', '2000-01-07', '891234567', 'Kenya', 'students', 7),
(09, NULL, 'INNOCENT OGETO', 'innocent@gmail.com', '123', 'INNOCENT', 'OGETO', 'SCEE/04233P/2019', 'JOURNALISM', '0728426518', 'Male', '2000-01-08', '912345678', 'Kenya', 'students', 2),
(10, NULL, 'JACK WACHIRA', 'jwachira@gmail.com', '123', 'JACK', 'WACHIRA', 'SCEE/03778P/2019', 'BUSINESS MANAGEMENT', '0723481276', 'Male', '2000-01-09', '584267159', 'Kenya', 'students', 5),
(11, NULL, 'MARY MUIA', 'marymuia@gmail.com', '123', 'MARY', 'MUIA', 'SCIE/02993/2019', 'ACTURIAL SCIENCE', '0728521349', 'Female', '2000-01-10', '741852963', 'Kenya', 'Committee', 8),
(12, NULL, 'VERAH ABONGO', 'verahabongo@gmail.com', '123', 'VERAH', 'ABONGO', 'SCIE/02304/2019', 'COMPUTER SCIENCE', '0727539516', 'Female', '2000-01-11', '951231753', 'Kenya', 'students', 4),
(13, NULL, 'TRACY AKOMO', 'tracyakomo@gmail.com', '123', 'TRACY', 'AKOMO', 'SCIE/02304/2019', 'COMPUTER SCIENCE', '0723641823', 'Female', '2000-01-12', '134679826', 'Kenya', 'students', 3),
(14, NULL, 'APPELES NJENGA', 'appelesnjenga@gmail.com', '123', 'APELLES', 'NJENGA', 'SCIE/02304/2019', 'BUSINESS MANAGEMENT', '0134851239', 'Male', '2000-01-13', '718293465', 'Kenya', 'Committee', 3),
(15, NULL, 'SAM MOSABI', 'sammosabi@gmail.com', '123', 'SAM', 'MOSABI', 'SCIE/02304/2019', 'INTERNATIONAL RELATION', '0178521463', 'Male', '0000-00-00', '197328465', 'Kenya', 'students', 6),
(16, NULL, 'FAITHFULLNESS JOSHUA', 'faithfulless@gmail.com', '123', 'FAITHFULLNESS ', 'JOSHUA', 'SCIE/02304/2019', 'INTERNATIONAL RELATION', '0102828379', 'Male', '1999-02-01', '134789009', 'Kenya', 'students', 10),
(17, NULL, 'KIBET MUTAI', 'kibetmutai@gmail.com', '123', 'KIBET ', 'MUTAI', 'SCIE/02305/2019', 'ECONOMICS', '0193217568', 'Male', '1999-01-23', '185334992', 'United Stat', 'students', 10),
(18, NULL, 'BRYAN SINE', 'bryansyne@gmail.com', '123', 'BRYAN ', 'SINE', 'SCIE/02308/2019', 'NURSING', '0195347126', 'Female', '2001-05-07', '912341153', 'Kenya', 'Organizer', 8),
(19, NULL, 'DARIUS ONDIMU', 'darius@gmail.com', '123', 'DARIUS', 'ONDIMU', 'SCIE/023404/2019', 'INTERNATIONAL RELATION)', '010648212', 'Male', '2000-01-30', '785169442', 'Kenya', 'students', 4),
(20, NULL, 'FLORENCE SIMBA', 'fsimba@gamil.com', '123', 'FLORENCE', 'SIMBA', 'SCIE/022345/2019', 'NURSING', '012034852', 'Female', '1999-05-30', '094031660', 'Kenya', 'students', NULL),
(21, NULL, 'GRIVINE PEPELA', 'grivpepela@gmail.com', '123', 'GRIVINE', 'PEPELA', 'SCIE/029874/2019', 'NURSING', '0193004822', 'Male', '1999-06-30', '995003448', 'Kenya', 'students', NULL),
(22, NULL, 'LEVI MUTURI', 'lmuturi@gmail.com', '123', 'LEVI ', 'MUTURI', 'SCIE/02344/2019', 'INFORMATION TECHNOLOGY', '0193340882', 'Male', '2001-06-05', '833056611', 'Kenya', 'students', 7),
(23, NULL, 'JOHN MUTIE', 'johnmutie@gmail.com', '123', 'JOHN', 'MUTIE', 'SCIE/0232345/2019', 'JOURNALISM', '0120582281', 'Male', '1999-05-16', '830445123', 'Kenya', 'students', NULL),
(25, NULL, 'DENNIS MULI', 'dennismuli@gmail.com', '123', 'DENNIS', 'MULI', 'SCIE/026664/2019', 'JOURNALISM', '0120035130', 'Male', '2000-01-14', '003215840', 'Kenya', 'students', NULL),
(26, NULL, 'amina ali', 'aminaali5580@gmail.com', 'admin123', 'Admin', 'Admin', 'TPadmin', 'Admin', '07179546880', 'admin', '2001-01-01', '1234567890', 'Kenya', 'Admin', NULL),
(31, NULL, 'admin', 'admin@radiantcs.com.my', 'admin123', 'Admin', 'Admin', 'TPadmin', 'Admin', '+60179546880', 'admin', '2001-01-01', '1234567890', 'Kenya', 'Admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyevent`
--
ALTER TABLE `applyevent`
  ADD PRIMARY KEY (`aeid`);

--
-- Indexes for table `applyjoinclub`
--
ALTER TABLE `applyjoinclub`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyevent`
--
ALTER TABLE `applyevent`
  MODIFY `aeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applyjoinclub`
--
ALTER TABLE `applyjoinclub`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
