-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2015 at 07:37 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `absenceid` int(11) NOT NULL,
  `absencedate` varchar(255) NOT NULL,
  `studentabid` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`absenceid`, `absencedate`, `studentabid`) VALUES
(1, '1435813766', '2'),
(2, '1435813766', '3'),
(3, '1435814694', '2'),
(4, '1435814694', '3'),
(5, '1435814694', '6'),
(6, '1435814694', '7'),
(7, '1435814694', '9'),
(8, '1435814699', '2'),
(9, '1435814699', '3'),
(10, '1435814699', '6'),
(11, '1435814699', '7'),
(12, '1435814699', '9'),
(13, '1435815145', '2'),
(14, '1435815145', '3'),
(15, '1435815145', '6'),
(16, '1435815145', '7'),
(17, '1435815145', '9'),
(18, '1435815163', '2'),
(19, '1435815163', '3'),
(20, '1435815163', '6'),
(21, '1435815163', '7'),
(22, '1435815163', '9'),
(23, '1435815348', '6'),
(24, '1435815348', '7'),
(25, '1435815439', '7'),
(26, '1435815439', '9'),
(27, '1435815562', '7'),
(28, '1435815562', '9'),
(29, '1435816528', '9'),
(30, '1435816607', '7'),
(31, '1435816608', '9'),
(32, '1435816970', '2'),
(33, '1435816970', '3'),
(34, '1435816970', '6'),
(35, '1435817593', '2'),
(36, '1435818126', '2'),
(37, '1435818158', '6'),
(38, '1435822214', '2');

-- --------------------------------------------------------

--
-- Table structure for table `academiccouncillors`
--

CREATE TABLE IF NOT EXISTS `academiccouncillors` (
  `academiccouncillorid` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingaddress` text COLLATE utf8_unicode_ci,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academiccouncillors`
--

INSERT INTO `academiccouncillors` (`academiccouncillorid`, `fullname`, `sphone`, `permanentaddress`, `year`, `mailingaddress`, `gender`, `email`, `title`, `description`, `photo`, `isActive`) VALUES
(31, 'জনাব ফরিদা রহমান খান', '017368535489', 'পোঃ ডি. পাকুটিয়া, উপজেলাঃ ঘাটাইল, জেলাঃ টাংগাইল।', '০৭-০৫-২০১৫', 'পোঃ ডি. পাকুটিয়া, উপজেলাঃ ঘাটাইল, জেলাঃ টাংগাইল।', 'Male', 'dev.saddam@gmail.com', 'অভিভাবক সদস্য (কলেজ শাখা)', 'sdfwetwetwe<br>', 'c-disappointment-holtek3.jpg', 1),
(32, 'জনাব ফরিদা রহমান খান', '017368535489', 'পোঃ ডি. পাকুটিয়া, উপজেলাঃ ঘাটাইল, জেলাঃ টাংগাইল।', '০৭-০৫-২০১৫', 'পোঃ ডি. পাকুটিয়া, উপজেলাঃ ঘাটাইল, জেলাঃ টাংগাইল।', 'Female', 'info@medicocoaching.com', 'সভাপতি', 'শিক্ষা বিস্তারে অসামান্য অবদান, সন্তোষজনক ফলাফল লাভ, সুনাম, খেলাধূলা, \r\nসাংস্কৃতিক কর্মকান্ড, স্কাউটিং কার্যক্রম, জাতীয় ও আন্তর্জাতিক পর্যায়ে \r\nসকল অনুষ্ঠানে স্বতঃস্ফুর্ত অংশগ্রহণ ও সাফল্য অর্জনের স্বীকৃতি স্বরূপ \r\n১৯৯৬ খ্রিস্টাব্দে ঐতিহ্যবাহী ঘাঁটাইল গণ পাইলট উচ্চ বিদ্যালয়, টাঙ্গাইলকে \r\nজাতীয় পর্যায়ে শ্রেষ্ঠ প্রতিষ্ঠানের মর্যাদা দেওয়া হয় এবং মাননীয় \r\nপ্রধানমন্ত্রী কর্তৃক পুরস্কৃত করা হয়।<br>', 'f1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `accountid` int(11) NOT NULL,
  `financialdepartments` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `paymentdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updatedate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymenttype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountid`, `financialdepartments`, `description`, `paymentdate`, `updatedate`, `amount`, `paymenttype`, `isActive`) VALUES
(7, 'IT Cost', 'Govt Payment 2 2 2 ', '2025-25-20', '2015-07-09', '100033', 'Cash on Hand', 1),
(11, 'IT ff', 'Buy Stationary', '2015-25-20', '2015-07-09', '1000', 'bKash', 2);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `applicantid` int(11) NOT NULL,
  `namebangla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameenglish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fathernamebangla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fathernameenglish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mothernamebangla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mothernameenglish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobileno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `presentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `othersgurdian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othersgurdianpermanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `othersgurdianpresentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `gurdianmobileno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stdgroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicantid`, `namebangla`, `nameenglish`, `fathernamebangla`, `fathernameenglish`, `mothernamebangla`, `mothernameenglish`, `birthdate`, `mobileno`, `permanentaddress`, `presentaddress`, `othersgurdian`, `relation`, `othersgurdianpermanentaddress`, `othersgurdianpresentaddress`, `gurdianmobileno`, `nationality`, `gender`, `religion`, `stdgroup`, `class`, `section`, `photo`, `isActive`) VALUES
(1, 'Altab Hossen', 'Altab Hossen Eng', 'Nayam Uddin', 'Talukder', 'Anowara', 'Begum', '2015-20-21', '01738627368', 'dsf', 'df', '', '', '', '', '01683269662', 'Bangladeshi', 'Male', 'ইসলাম', 'Science', '9', '4', 'alamn-250x2704.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `author`, `photo`, `isActive`) VALUES
(1, 'আমার শিক্ষক মুনীর চৌধুরী', 'আহমদ কবির', 'Tulips.jpg', 1),
(2, 'আমি মৃত্যুর পরও বাঁচতে চাই', 'মুর্তজা বশীর', 'Koala.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classdays`
--

CREATE TABLE IF NOT EXISTS `classdays` (
  `dayid` int(11) NOT NULL,
  `dayname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classdays`
--

INSERT INTO `classdays` (`dayid`, `dayname`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `classid` int(11) NOT NULL,
  `classname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `classdescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classid`, `classname`, `classdescription`, `isActive`) VALUES
(1, 'Six', '', 1),
(3, 'Eight', '', 1),
(4, 'Nine', '', 1),
(5, 'Ten', '', 1),
(9, 'Eleven', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classperiod`
--

CREATE TABLE IF NOT EXISTS `classperiod` (
  `classperiodid` int(11) NOT NULL,
  `periodtime` varchar(255) NOT NULL,
  `periodname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classperiod`
--

INSERT INTO `classperiod` (`classperiodid`, `periodtime`, `periodname`) VALUES
(1, '10am', '1st'),
(2, '11am', '2nd'),
(3, '12pm', '3rd'),
(4, '1pm', '4th'),
(5, '3pm', '5th'),
(6, '4pm', '6th'),
(7, '5pm', '7th'),
(8, '6pm', '8th');

-- --------------------------------------------------------

--
-- Table structure for table `classroutine`
--

CREATE TABLE IF NOT EXISTS `classroutine` (
  `classroutineid` int(11) NOT NULL,
  `period` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `stdgroup` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `teachers` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `isActive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroutine`
--

INSERT INTO `classroutine` (`classroutineid`, `period`, `class`, `section`, `stdgroup`, `days`, `teachers`, `subjects`, `comments`, `isActive`) VALUES
(0, '5', '9', '4', '2', '2', '3', '2', '', '1'),
(28, '1', '1', '4', '3', '3', '2', '7', '', '1'),
(29, '3', '1', '3', '1', '1', '3', '4', '', '1'),
(30, '4', '1', '3', '1', '1', '3', '5', '', '1'),
(31, '5', '1', '3', '1', '1', '3', '8', '', '1'),
(32, '7', '1', '4', '1', '1', '3', '8', '', '1'),
(33, '1', '1', '2', '1', '2', '3', '14', '', '1'),
(34, '2', '1', '3', '1', '2', '3', '6', '', '1'),
(35, '6', '1', '3', '1', '2', '3', '6', '', '1'),
(36, '8', '1', '3', '1', '2', '3', '6', '', '1'),
(37, '3', '1', '3', '1', '2', '3', '6', '', '1'),
(38, '4', '1', '3', '3', '3', '2', '1', '', '1'),
(39, '1', '3', '3', '1', '1', '1', '1', '', '1'),
(40, '1', '1', '3', '1', '1', '1', '1', '', '1'),
(41, '1', '8', '3', '1', '1', '1', '1', '', '1'),
(42, '1', '8', '3', '1', '1', '1', '1', '', '1'),
(43, '1', '8', '3', '1', '1', '1', '1', '', '1'),
(44, '1', '1', '3', '1', '1', '1', '1', '', '1'),
(45, '5', '4', '4', '2', '2', '2', '4', '', '1'),
(46, '1', '1', '3', '1', '1', '1', '1', '', '1'),
(47, '1', '6', '3', '1', '1', '1', '1', '', '1'),
(48, '1', '1', '3', '1', '1', '1', '1', '', '1'),
(49, '1', '3', '3', '1', '1', '1', '1', '', '1'),
(50, '1', '2', '3', '1', '1', '1', '1', '', '1'),
(51, '5', '5', '5', '4', '3', '3', '5', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `counter_ips`
--

CREATE TABLE IF NOT EXISTS `counter_ips` (
  `ip` varchar(15) NOT NULL,
  `visit` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `counter_values`
--

CREATE TABLE IF NOT EXISTS `counter_values` (
  `id` bigint(11) NOT NULL,
  `day_id` bigint(11) NOT NULL,
  `day_value` bigint(11) NOT NULL,
  `yesterday_id` bigint(11) NOT NULL,
  `yesterday_value` bigint(11) NOT NULL,
  `week_id` bigint(11) NOT NULL,
  `week_value` bigint(11) NOT NULL,
  `month_id` bigint(11) NOT NULL,
  `month_value` bigint(11) NOT NULL,
  `year_id` bigint(11) NOT NULL,
  `year_value` bigint(11) NOT NULL,
  `all_value` bigint(11) NOT NULL,
  `record_date` datetime NOT NULL,
  `record_value` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter_values`
--

INSERT INTO `counter_values` (`id`, `day_id`, `day_value`, `yesterday_id`, `yesterday_value`, `week_id`, `week_value`, `month_id`, `month_value`, `year_id`, `year_value`, `all_value`, `record_date`, `record_value`) VALUES
(1, 206, 1, 205, 0, 30, 1, 7, 1, 2015, 1, 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `departmentid` int(11) NOT NULL,
  `departmentname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentid`, `departmentname`, `isActive`) VALUES
(1, 'Bangla', 1),
(3, 'English', 1),
(4, 'History', 1),
(5, 'Biochemestry', 1),
(9, 'Environment Science', 1),
(11, 'Chemestrynew', 1);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `downloadid` int(11) NOT NULL,
  `downloadtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `downloaddescription` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`downloadid`, `downloadtitle`, `downloaddescription`, `attachment`, `isActive`) VALUES
(1, 'চ্যাম্পিয়ন স্কুল ', 'স্বনামধন্য এই বিদ্যালয় ১৯৯৫ খ্রিস্টাব্দে ১৩তম ও ১৯৯৯ খ্রিস্টাব্দে ১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব অর্জন করে।', 'Electronic_Teacher_Information_Form.pdf', 1),
(2, 'বিদ্যালয়ের List', 'খেলাধূলা, স্কাউটিং ও সাংস্কৃতিক কর্মকান্ডে এই বিদ্যালয়ের রয়েছে ঈর্ষান্বিত সাফল্য।', 'School_College1.xls', 1),
(3, 'ক্রিকেট প্রতিযোগিতা', 'প্রতিযোগিতায় চ্যাম্পিয়ন', 'Website_pre_proposal1.docx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE IF NOT EXISTS `enrollments` (
  `enrollment` int(11) NOT NULL,
  `enrollmenttype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `isAactive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment`, `enrollmenttype`, `isAactive`) VALUES
(1, 'Current', 1),
(2, 'Dropt Out', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `examid` int(11) NOT NULL,
  `examname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`examid`, `examname`) VALUES
(1, '1st Semester'),
(2, '2nd Semester'),
(3, '3rd Semester'),
(4, '4th Semester');

-- --------------------------------------------------------

--
-- Table structure for table `financialdepartments`
--

CREATE TABLE IF NOT EXISTS `financialdepartments` (
  `financialdepartmentid` int(11) NOT NULL,
  `financialdepartmentname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `financialdepartmentdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financialdepartments`
--

INSERT INTO `financialdepartments` (`financialdepartmentid`, `financialdepartmentname`, `financialdepartmentdescription`, `isActive`) VALUES
(3, 'IT Cost', 'IT de ff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `galleryid` int(11) NOT NULL,
  `galleryname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`galleryid`, `galleryname`, `isActive`) VALUES
(1, '16 December', 1),
(2, '26 March 2015', 1),
(3, 'Annual Sports', 1),
(4, '26 March 2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE IF NOT EXISTS `genders` (
  `genderid` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`genderid`, `gender`, `isActive`) VALUES
(1, 'Male', 1),
(2, 'Female', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Teachers', 'Teachers'),
(3, 'Students', 'Students'),
(4, 'Guardians', 'Guardians');

-- --------------------------------------------------------

--
-- Table structure for table `guardianof`
--

CREATE TABLE IF NOT EXISTS `guardianof` (
  `guardianofid` int(11) NOT NULL,
  `studentuserid` int(11) NOT NULL,
  `guardianuserid` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guardianof`
--

INSERT INTO `guardianof` (`guardianofid`, `studentuserid`, `guardianuserid`, `isActive`) VALUES
(1, 55, 2, 1),
(2, 56, 2, 0),
(3, 57, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE IF NOT EXISTS `guardians` (
  `guardianid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `studentuserid` int(11) NOT NULL,
  `sf_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sf_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sm_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sm_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`guardianid`, `userid`, `studentuserid`, `sf_name`, `sf_phone`, `sm_name`, `sm_phone`) VALUES
(1, 1, 1, 'Shova Khan', '01680139540', 'Shahinazzaman', '01794181566');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE IF NOT EXISTS `holidays` (
  `holidayid` int(11) NOT NULL,
  `holidayname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `holidaydescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`holidayid`, `holidayname`, `holidaydescription`, `isActive`) VALUES
(1, 'Bangla 1', '', 1),
(2, 'Bangla 2', '', 1),
(3, 'English 1', '', 1),
(4, 'English 2', '', 1),
(5, 'Mathematics', '', 1),
(6, 'Religion', '', 1),
(7, 'General Science', '', 1),
(8, 'Social Science', '', 1),
(9, 'Geography', '', 1),
(10, 'Physics', '', 1),
(11, 'Chemistry', '', 1),
(12, 'Biology', '', 1),
(13, 'History', '', 1),
(14, 'Information Technology', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL,
  `newstitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `newsdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `publishdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newstitle`, `newsdescription`, `publishdate`, `isActive`) VALUES
(3, ' ঈদ-ই-মিলাদুন্নবী', 'ঈদ-ই-মিলাদুন্নবী<br>', '2015-07-14', 1),
(4, 'ঈদ-ই-মিলাদুন্নবী (সা.)', 'ঈদ-ই-মিলাদুন্নবী<br>', '', 1),
(5, 'ঈদ-ই-মিলাদুন্নবী (সা.)', 'ঈদ-ই-মিলাদুন্নবী (সা.)<br>', '', 1),
(6, 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)', 'ঢাকা শিক্ষা বোর্ডের আওতাধীন ২০১৫-১৬ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তির \r\nজন্য কলেজ কর্তৃপক্ষকে জানান যাচ্ছে যে, আগামী ৫ জুলাই, ২০১৫ তারিখের মধ্যে\r\n বোর্ডের ফি (বিলম্ব ফি ছাড়া) সোনালী সেবার মাধ্যমে জমা দিতে হবে ।<br>', '1436859037', 1),
(7, 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)', 'ঢাকা শিক্ষা বোর্ডের আওতাধীন ২০১৫-১৬ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তির \r\nজন্য কলেজ কর্তৃপক্ষকে জানান যাচ্ছে যে, আগামী ৫ জুলাই, ২০১৫ তারিখের মধ্যে\r\n বোর্ডের ফি (বিলম্ব ফি ছাড়া) সোনালী সেবার মাধ্যমে জমা দিতে হবে ।<br>', '2015-07-14', 1),
(8, 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)', 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)<br>', '0', 1),
(9, 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)', 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)<br>', '2015-Jul-Tue', 1),
(10, 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)', 'বোর্ডের ফি (বিলম্ব ফি ছাড়া)<br>', '2015-07-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `noticeid` int(11) NOT NULL,
  `noticetitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `publishdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noticedescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`noticeid`, `noticetitle`, `publishdate`, `noticedescription`, `attachment`, `isActive`) VALUES
(4, 'খেলাধূলা', '2015-30-7', '১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব অর্জন করে<br>', '', 1),
(5, '১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতা', '2015-07-10', 'খেলাধূলা, স্কাউটিং ও সাংস্কৃতিক কর্মকান্ডে এই বিদ্যালয়ের রয়েছে \r\nঈর্ষান্বিত সাফল্য। স্বনামধন্য এই বিদ্যালয় ১৯৯৫ খ্রিস্টাব্দে ১৩তম ও ১৯৯৯ \r\nখ্রিস্টাব্দে ১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব\r\n অর্জন করে।<br>', '', 1),
(6, 'This is title', '2015-30-25', 'টাঙ্গাইলের একটি মাইনর স্কুলকে হাই স্কুলে উন্নীত করেন এবং ময়মনসিংহ জেলার \r\nতদানীন্তন জেলা প্রশাসক গ্রাহাম সাহেবের নামে গ্রাহাম ইংলিশ হাই স্কুল \r\nনামকরণ করেন। প্রায় পাঁচ বছর বিদ্যালয়টি অর্থসংকটের ভেতর দিয়ে পরিচালিত হয়।\r\n গ্রাহাম ইংলিশ হাই স্কুল কর্তৃক আর্থিক সুবিধার জন্য টাঙ্গাইলের ধনবাড়ীর \r\nকীর্তিমান জমিদার মরহুম নবাব বাহাদুর নওয়াব আলী চৌধুরী সাহেবের হাতে \r\nস্কুলটি অর্পণ করেন। কিন্তু তিনি মাত্র দুই বছর এই স্কুল পরিচালনার ব্যয়ভার\r\n বহন করেন।গ্রাহাম ইংলিশ হাই স্কুল কর্তৃক আর্থিক সুবিধার জন্য টাঙ্গাইলের \r\nধনবাড়ীর কীর্তিমান জমিদার মরহুম নবাব।\r\n\r\n                        <br>', 'Electronic_Teacher_Information_Form1.pdf', 1),
(7, 'Football', '2015-30-20', 'This jis des<br>', 'Electronic_Teacher_Information_Form.pdf', 1),
(8, 'This is title', '2015-30-2533', 'okay<br>', 'orca_share_media1436459861374.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `othersresults`
--

CREATE TABLE IF NOT EXISTS `othersresults` (
  `othersresultid` int(11) NOT NULL,
  `othersresulttitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `publishdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `othersresultdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `othersresults`
--

INSERT INTO `othersresults` (`othersresultid`, `othersresulttitle`, `publishdate`, `othersresultdescription`, `attachment`, `isActive`) VALUES
(4, 'খেলাধূলা', '2015-30-7', '১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব অর্জন করে<br>', '', 1),
(5, '১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতা', '2015-07-10', 'খেলাধূলা, স্কাউটিং ও সাংস্কৃতিক কর্মকান্ডে এই বিদ্যালয়ের রয়েছে \r\nঈর্ষান্বিত সাফল্য। স্বনামধন্য এই বিদ্যালয় ১৯৯৫ খ্রিস্টাব্দে ১৩তম ও ১৯৯৯ \r\nখ্রিস্টাব্দে ১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব\r\n অর্জন করে।<br>', '', 1),
(6, 'This is title', '2015-30-25', 'এই বিদ্যালয়ের রয়েছে \r\nঈর্ষান্বিত সাফল্য। স্বনামধন্য এই বিদ্যালয় ১৯৯৫ খ্রিস্টাব্দে ১৩তম ও ১৯৯৯ \r\nখ্রিস্টাব্দে ১৭তম জাতীয় স্কুল ক্রিকেট প্রতিযোগিতায় চ্যাম্পিয়ন হওয়ার গৌরব\r\n অর্জন করে।<br>', 'orca_share_media14364598613741.pdf', 1),
(9, 'fr', '2015-30-25', 'dfg<br>', '2-510x270.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photoid` int(11) NOT NULL,
  `galleryid` int(11) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photoid`, `galleryid`, `photo`, `isActive`) VALUES
(1, 1, 'Desert.jpg', 1),
(3, 3, 'Tulips.jpg', 1),
(4, 3, 'Chrysanthemum.jpg', 1),
(5, 2, 'f1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `resultid` int(11) NOT NULL,
  `resstudentid` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `stdgroup` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `objectivemarks` varchar(255) NOT NULL,
  `writtenmarks` varchar(255) NOT NULL,
  `practicalmarks` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `isActive` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultid`, `resstudentid`, `class`, `section`, `stdgroup`, `exam`, `subjects`, `objectivemarks`, `writtenmarks`, `practicalmarks`, `marks`, `grade`, `isActive`) VALUES
(64, '2', '1', '3', '', '1', '1', '25', '30', '56', '10', '', ''),
(65, '3', '1', '3', '', '1', '1', '20', '30', '0', '75', '', ''),
(66, '6', '1', '3', '', '1', '1', '14', '18', '0', '58', '', ''),
(67, '7', '1', '3', '', '1', '1', '5', '5', '0', '20', '', ''),
(68, '9', '1', '3', '', '1', '1', '9', '15', '0', '50', '', ''),
(69, '2', '1', '3', '', '2', '1', '', '', '', '50', '', ''),
(70, '3', '1', '3', '', '2', '1', '', '', '', '50', '', ''),
(71, '6', '1', '3', '', '2', '1', '', '', '', '', '', ''),
(72, '7', '1', '3', '', '2', '1', '', '', '', '', '', ''),
(73, '9', '1', '3', '', '2', '1', '', '', '', '100', '', ''),
(74, '2', '1', '3', '', '1', '2', '10', '12', '', '', '', ''),
(75, '3', '1', '3', '', '1', '2', '14', '25', '', '', '', ''),
(76, '6', '1', '3', '', '1', '2', '18', '15', '', '', '', ''),
(77, '7', '1', '3', '', '1', '2', '19', '15', '', '', '', ''),
(78, '9', '1', '3', '', '1', '2', '12', '12', '', '', '', ''),
(79, '2', '1', '3', '', '1', '3', '10', '25', '', '', '', ''),
(80, '3', '1', '3', '', '1', '3', '12', '25', '', '', '', ''),
(81, '6', '1', '3', '', '1', '3', '18', '28', '', '', '', ''),
(82, '7', '1', '3', '', '1', '3', '19', '25', '', '', '', ''),
(83, '9', '1', '3', '', '1', '3', '14', '26', '', '', '', ''),
(84, '2', '1', '3', '', '1', '4', '10', '15', '', '', '', ''),
(85, '3', '1', '3', '', '1', '4', '15', '20', '', '', '', ''),
(86, '6', '1', '3', '', '1', '4', '11', '18', '', '', '', ''),
(87, '7', '1', '3', '', '1', '4', '30', '25', '', '', '', ''),
(88, '9', '1', '3', '', '1', '4', '23', '48', '', '', '', ''),
(89, '2', '1', '3', '', '1', '5', '20', '30', '', '', '', ''),
(90, '3', '1', '3', '', '1', '5', '30', '20', '', '', '', ''),
(91, '6', '1', '3', '', '1', '5', '18', '50', '', '', '', ''),
(92, '7', '1', '3', '', '1', '5', '22', '38', '', '', '', ''),
(93, '9', '1', '3', '', '1', '5', '15', '32', '', '', '', ''),
(94, '2', '1', '3', '', '1', '8', '', '', '', '', '', ''),
(95, '3', '1', '3', '', '1', '8', '', '', '', '', '', ''),
(96, '6', '1', '3', '', '1', '8', '', '', '', '', '', ''),
(97, '7', '1', '3', '', '1', '8', '', '', '', '', '', ''),
(98, '9', '1', '3', '', '1', '8', '', '', '', '', '', ''),
(99, '2', '1', '3', '', '1', '6', '', '', '', '', '', ''),
(100, '3', '1', '3', '', '1', '6', '', '', '', '', '', ''),
(101, '6', '1', '3', '', '1', '6', '', '', '', '', '', ''),
(102, '7', '1', '3', '', '1', '6', '', '', '', '', '', ''),
(103, '9', '1', '3', '', '1', '6', '', '', '', '', '', ''),
(104, '2', '1', '3', '', '1', '11', '', '', '', '', '', ''),
(105, '3', '1', '3', '', '1', '11', '', '', '', '', '', ''),
(106, '6', '1', '3', '', '1', '11', '', '', '', '', '', ''),
(107, '7', '1', '3', '', '1', '11', '', '', '', '', '', ''),
(108, '9', '1', '3', '', '1', '11', '', '', '', '', '', ''),
(109, '2', '1', '3', '', '1', '12', '', '', '', '', '', ''),
(110, '3', '1', '3', '', '1', '12', '', '', '', '', '', ''),
(111, '6', '1', '3', '', '1', '12', '', '', '', '', '', ''),
(112, '7', '1', '3', '', '1', '12', '', '', '', '', '', ''),
(113, '9', '1', '3', '', '1', '12', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `sectionid` int(11) NOT NULL,
  `sectionname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sectiondescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sectionid`, `sectionname`, `sectiondescription`, `isActive`) VALUES
(3, 'A', 'Section A for all classes', 1),
(4, 'B', 'Section B for all classes', 1),
(5, 'C', 'Section C for all classes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settingsid` int(11) NOT NULL,
  `institutename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `established` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eiinnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mpo` text COLLATE utf8_unicode_ci NOT NULL,
  `institutelogo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instituteheader` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminphone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminemail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminphoto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `headmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `headteacherphoto` text COLLATE utf8_unicode_ci NOT NULL,
  `instituteaddress` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `googlemaps` text COLLATE utf8_unicode_ci NOT NULL,
  `institutephone` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `instituteemail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `visitorcounter` text COLLATE utf8_unicode_ci NOT NULL,
  `importantlinks` text COLLATE utf8_unicode_ci NOT NULL,
  `importantlinksoffsite` text COLLATE utf8_unicode_ci NOT NULL,
  `contactinfo` text COLLATE utf8_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8_unicode_ci NOT NULL,
  `schooltime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `importantinfo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingsid`, `institutename`, `slogan`, `established`, `eiinnumber`, `mpo`, `institutelogo`, `instituteheader`, `adminname`, `adminphone`, `adminemail`, `adminphoto`, `headmessage`, `headteacherphoto`, `instituteaddress`, `googlemaps`, `institutephone`, `instituteemail`, `visitorcounter`, `importantlinks`, `importantlinksoffsite`, `contactinfo`, `googlemap`, `schooltime`, `importantinfo`) VALUES
(1, 'পাকুটিয়া পাবলিক স্কুল এন্ড কলেজ', 'শিক্ষা জাতির মেরুদণ্ড', '১৯৫২ইং সালের ২রা ফেব্রুয়ারী', '৮৯৬৫৩২১১', 'We are registered company', 'Logo5.jpg', 'header.png', '', '', '', 'khan.png', 'শিক্ষার জ্ঞান মানুষের মনের প্রসারণ, জীবন ও পৃথিবী সম্বন্ধে নতুন চিন্তার উদ্ভাবন ঘটায়। আর শিক্ষা জাতির মেরুদন্ড হয়ে দাড়ায় তখনেই, যখন একটি জাতি মানবীয় মূল্যবোধে উজ্জীবিত হয়ে শিক্ষাবান্ধব স্থিতিশীল সমাজ ও কার্যকর রাষ্ট্র প্রতিষ্ঠার মাধ্যমে উন্নত থেকে উন্নতর ভবিষ্যৎ নির্মাণে চেষ্টিত হয়। আর এ জন্য প্রয়োজন সুশিক্ষা। জ্ঞান অর্জনের সুশিক্ষার কোন বিকল্প নেই। আমাদের উচিত সুশিক্ষার মধ্যমে নীতিনৈতিকতা ও বিচার বুদ্ধিবোধকে জাগ্রত করে দেশাত্নবোধের চেতনায় উজ্জীবিত হয়ে নিজেকে সুনাগরিক হিসারব গড়ে তোলার লক্ষ্যে সঠিকভাবে কর্মকে নিয়ন্ত্রিত করা।\r\n\r\nকরতোয়া বিধৈাত উত্তরবঙ্গের সরকারী আকবর আলী কলেজটি ইতিমধ্যে জাতীয় বিশ্ববিদ্যালয়ে অনার্স কোর্স অধিভূক্তি হওয়ায় অত্র এলাকায় উচ্চ শিক্ষার দ্বার উন্মোচিত করে উচ্চ মাধ্যমিক ও স্নাতক (পাস) ডিগ্রির গন্ডি পেরিয়ে মহাবিদ্যালয় থেকে প্রচলিত বিশ্ববিদ্যালয় কলেজে পরিণত হয়েছে। শিক্ষার্থীদের মধ্যে সুশিক্ষার বিস্তার ঘাটাতে সরকারী আকবর আলী কলেজ সর্বদা সচেষ্ট। বুদ্ধিবৃত্তি চর্চা ও জ্ঞানের পরিধি বাড়াতে এবং সুন্দর ও গঠনমূলক ভবিষ্যৎ নির্মাণের মানসে ইতিমধ্যে যার প্রাথমিক, মাধ্যমিক ও উচ্চ মাধ্যমিক পর্যায়ের গন্ডি পেরিয়ে উচ্চ শিক্ষার জন্য প্রচলিক বিশ্ববিদ্যালয় কলেজ এর বিশাল অঙ্গনে প্রবেশ করেছে সরকারী আকবর আলী কলেজের পক্ষ থেকে তাদের জানাই প্রাণঢালা অভিনন্দন।\r\n\r\nছাত্র-ছাত্রীদের জন্য কলেজ কর্তৃক নির্ধারিত পোষাক, নির্দিষ্ট সময়ে পাঠদান ও পরীক্ষা সম্পন্ন করণের জন্য নিজেস্ব একাডেমিক ক্যালেন্ডার, সহপাঠ্যক্রমিক (Co-curriculum) কার্যক্রম, গ্রন্হাগার ব্যবহার বাধ্যতামূলক, শৃঙ্খলাবোধ, দেশপ্রেমিক যোগ্য নাগরিক গড়ে তুলতে দক্ষ, অভিজ্ঞ ও প্রশিক্ষণ প্রাপ্ত শিক্ষকমন্ডলীর নিরলস প্রচেষ্টা, পাঠোন্নয়নে মনিটরিং, শিক্ষার্থীদের দাপ্তরিক কার্যক্রম সহজতরকরণে কর্মচারীদের একাগ্রতা এবং পরিচ্ছন্ন ও নিরিবিলি পরিবেশ কলেজটির বিশেষ বৈশিষ্ট্য।\r\n\r\n\r\nশিক্ষার্থীদের মেধা ও মননের বিকাশে বিজ্ঞান ও দৃষ্টান্তভিত্তিক মানসম্মত শিক্ষাদানে তথা ইন্টারনেট ব্যবহার নিশ্চিতকরণ এবং সংশ্লিষ্ট সকলের সহযোগিতায় ছাত্র-ছাত্রীদের নিরাপত্তা বিধানে কলেজ কর্তৃপক্ষ দৃঢ় প্রতিজ্ঞ।\r\n\r\nপরিশেষে কলেজটির উত্তরোত্তর সাফল্য ও উন্নতি কামনা করছি।', 'f1.jpg', 'পোঃ ডি. পাকুটিয়া, উপজেলাঃ ঘাটাইল, জেলাঃ টাংগাইল।', '', '+৮৮০১৮২১৬৬০০৬৬', 'ppsc@live.com.bd', '&lt;iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.013813930342!2d90.3671856!3d23.7650801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xe12a6608a04f276a!2z4Kai4Ka-4KaV4Ka-IOCmsOCnh-CmuOCmv-CmoeCnh-CmqOCmuOCmv-Cmr-CmvOCmvuCmsiDgpq7gpqHgp4fgprIg4KaV4Kay4KeH4Kac!5e0!3m2!1sbn!2s!4v1435389463033"  [removed] allowfullscreen&gt;&lt;/iframe>', '<li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">শিক্ষা মন্ত্রণালয়</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">উচ্চ মাধ্যমিক শিক্ষা, ঢাকা বোর্ড </a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">কারিগরি শিক্ষা বোর্ড </a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">প্রাথমিক শিক্ষা অধিদপ্তর</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">সংবাদপত্র</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd" target="_blank">সরকারী ফরম ডাউনলোড</a></li>', '<li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">জাতীয় বিশ্ববিদ্যালয়</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="#">বৃত্তি </a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">জাতীয় তথ্য বাতায়ন</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">অ্যাডভাইসরি বোর্ড  </a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">প্রাথমিক শিক্ষা অধিদপ্তর</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">শিক্ষক বাতায়ন</a></li>\r\n                                <li><span class="glyphicon glyphicon-menu-right"></span><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">শিক্ষা অধিদপ্তর</a></li>', '&lt;iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.013813930342!2d90.3671856!3d23.7650801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xe12a6608a04f276a!2z4Kai4Ka-4KaV4Ka-IOCmsOCnh-CmuOCmv-CmoeCnh-CmqOCmuOCmv-Cmr-CmvOCmvuCmsiDgpq7gpqHgp4fgprIg4KaV4Kay4KeH4Kac!5e0!3m2!1sbn!2s!4v1435389463033"  [removed] allowfullscreen&gt;&lt;/iframe>', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116848.11060124186!2d90.367186!3d23.76508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xe12a6608a04f276a!2sDhaka+Residential+Model+College!5e0!3m2!1sen!2sus!4v1436421334674', 'সকাল  ৮:৩০ থেকে বিকাল  ২:৩০', 'শিক্ষা বিস্তারে অসামান্য অবদান, সন্তোষজনক ফলাফল লাভ, সুনাম, খেলাধূলা, সাংস্কৃতিক কর্মকান্ড, স্কাউটিং কার্যক্রম, জাতীয় ও আন্তর্জাতিক পর্যায়ে সকল অনুষ্ঠানে স্বতঃস্ফুর্ত অংশগ্রহণ ও সাফল্য অর্জনের স্বীকৃতি স্বরূপ ১৯৯৬ খ্রিস্টাব্দে ঐতিহ্যবাহী ঘাঁটাইল গণ পাইলট উচ্চ বিদ্যালয়, টাঙ্গাইলকে জাতীয় পর্যায়ে শ্রেষ্ঠ প্রতিষ্ঠানের মর্যাদা দেওয়া হয় এবং মাননীয় প্রধানমন্ত্রী কর্তৃক পুরস্কৃত করা হয়।');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `slideid` int(11) NOT NULL,
  `slidetitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slideid`, `slidetitle`, `attachment`, `isActive`) VALUES
(1, 'পাইলট উচ্চ বিদ্যালয়', 'Koala.jpg', 1),
(4, 'বিদ্যালয়', 'Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `staffid` int(11) NOT NULL,
  `staffuserid` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `joindate` date NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `enrollmentstatus` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staffid`, `staffuserid`, `firstname`, `middlename`, `lastname`, `sphone`, `mailingaddress`, `gender`, `birthdate`, `email`, `joindate`, `photo`, `enrollmentstatus`, `isActive`) VALUES
(1, 0, 'ara', 'aswf', 'saed', '46456', 'eterw', 'ewrew', '2015-06-23', 'ewr', '2015-06-24', 'ewr', 1, 1),
(2, 2847809, 'Altab', 'Hossen', 'Tangail', 'rr', 'Dhaka', 'Female', '0000-00-00', 'mahaderh125@gmail.com', '0000-00-00', 'Penguins7.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentid` int(11) NOT NULL,
  `studguardianid` int(255) NOT NULL,
  `studentuserid` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `classroll` int(100) NOT NULL,
  `permanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upazila` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postoffice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stdgroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingaddress` text COLLATE utf8_unicode_ci,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `joindate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enrollmentstatus` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `studguardianid`, `studentuserid`, `firstname`, `middlename`, `lastname`, `sphone`, `class`, `section`, `classroll`, `permanentaddress`, `district`, `upazila`, `postoffice`, `village`, `year`, `department`, `shift`, `stdgroup`, `mailingaddress`, `gender`, `birthdate`, `email`, `joindate`, `photo`, `enrollmentstatus`, `isActive`) VALUES
(1, 1, 944962, 'Kamruzzaaman', 'Khan', 'Habib', '01673230329', 1, 3, 0, '', '', '', '', '', '', '', '', '', 'Dhaka, BD', 'Female', '2015-20-21', 'dev.saddam@gmail.com', '1434301714', 'Lighthouse2.jpg', 1, 1),
(2, 1, 3311585, 'Kamruzzaaman 1', 'Khan', 'Habib', '01673230329', 1, 3, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1434301738', 'ruhulamin2.jpg', 1, 1),
(3, 1, 737641, 'Kamruzzaaman 3', 'Khan', 'Habib', '01673230329', 3, 3, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1434301750', 'ruhulamin4.jpg', 1, 1),
(4, 1, 2424515, 'Kamruzzaaman 3', 'Khan', 'Habib', '01673230329', 1, 3, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1434301760', 'ruhulamin5.jpg', 1, 1),
(5, 1, 301636, 'Kamruzzaaman 3', 'Khan', 'Habib', '01673230329', 1, 3, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1434301764', 'ruhulamin6.jpg', 1, 1),
(6, 1, 2259385, 'Kamruzzaaman 3', 'Khan', 'Habib', '01673230329', 4, 3, 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '1434301769', 'ruhulamin7.jpg', 1, 1),
(7, 1, 2974274, 'Kamruzzaaman 3', 'Khan', 'Habib', '01673230329', 1, 3, 0, '', '', '', '', '', '', '', '', 'Science', '', 'Male', '0000-00-00', '', '1434301773', 'ruhulamin8.jpg', 1, 1),
(8, 0, 3, 'Sam', 'Ali', 'Bouiaa', '017368535489', 5, 4, 141422, 'Tangail', 'Tangail', 'Tangail Sadar', 'Anuhala', 'Kashinagar', '2015', 'Science', '1st', 'Business Study', 'Dhaka', 'Male', '2015-20-21', 'info@medicocoaching.com', '2015-20-21', '20080824191509_Bangladesh_regions_map.jpg', 1, 1),
(9, 0, 1790909, 'Altab55', 'Hossen', 'Tal', '017368535489', 4, 4, 0, '', '', '', '', '', '', '', '', '', 'Dhaka', 'Female', '2015-20-21', 'dev.saddam@gmail.com', '2015-07-09', 'Hydrangeas6.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `study_groups`
--

CREATE TABLE IF NOT EXISTS `study_groups` (
  `studygroupsid` int(11) NOT NULL,
  `studygroupsname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study_groups`
--

INSERT INTO `study_groups` (`studygroupsid`, `studygroupsname`) VALUES
(1, 'General'),
(2, 'Science'),
(3, 'Humanities'),
(4, 'Business Studies');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectid` int(11) NOT NULL,
  `subjectcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subjectname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subjectdescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objective` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `written` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `practical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `subjectcode`, `subjectname`, `subjectdescription`, `objective`, `written`, `practical`, `isActive`) VALUES
(1, '101', 'Bangla 1', '', '40', '60', '', 1),
(2, '102', 'Bangla 2', '', '20', '30', '', 1),
(3, '103', 'English 1', '', '40', '60', '', 1),
(4, '104', 'English 2', '', '20', '30', '', 1),
(5, '105', 'Mathematics', '', '40', '60', '', 1),
(6, '106', 'Religion', '', '40', '60', '', 1),
(7, '107', 'General Science', '', '40', '60', '', 1),
(8, '108', 'Social Science', '', '40', '60', '', 1),
(9, '109', 'Geography', '', '', '', '', 1),
(10, '110', 'Physics', '', '35', '40', '25', 1),
(11, '111', 'Chemistry', '', '35', '40', '25', 1),
(12, '112', 'Biology', '', '35', '40', '25', 1),
(13, '113', 'History', '', '', '', '', 1),
(14, '114', 'Information Technology', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `syllabusid` int(11) NOT NULL,
  `syllabustitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `publishdate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `syllabusdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabusid`, `syllabustitle`, `publishdate`, `syllabusdescription`, `attachment`, `isActive`) VALUES
(1, 'Syllabus For Class Ten July', '2015-30-07', 'Syllabus For Class Ten July<br><br><br>', 'Electronic_Teacher_Information_Form.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `talentedstudents`
--

CREATE TABLE IF NOT EXISTS `talentedstudents` (
  `talentedstudentid` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stdgroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingaddress` text COLLATE utf8_unicode_ci,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `talentedstudents`
--

INSERT INTO `talentedstudents` (`talentedstudentid`, `firstname`, `middlename`, `lastname`, `sphone`, `permanentaddress`, `year`, `department`, `shift`, `stdgroup`, `mailingaddress`, `gender`, `email`, `title`, `description`, `photo`, `isActive`) VALUES
(29, 'Altab', 'g', 'Tal', '017368535489', 'gd', '2015', 'Science', '1st', 'Science', 'fgh', 'Male', 'dev.saddam@gmail.com', 'কৃতি শিক্ষার্থী সংবর্ধনা অনুষ্ঠান', 'আজ ১৬-৬-২০১৫ খ্রিঃ তারিখ তানোর উপজেলা পরিষদ হলরুমে &nbsp; কৃতি শিক্ষার্থী \r\nসংবর্ধনা অনুষ্ঠান/২০১৫ অনুষ্ঠানে প্রধান অতিথি&nbsp; জনাব মুহাম্মদ \r\nমুনীরুজ্জামান ভূঁঞা, উপজেলা নির্বাহী অফিসার, তানোর,রাজশাহী। উক্ত \r\nঅনুষ্ঠানে বিশেষ অতিথি হিসেবে ছিলেন উপজলা মাধ্যমিক সহকারী কর্মকর্তাা, \r\nজনাবা শামিম আরা, তালন্দ ইউপি চেয়ারম্যাম, আখেরুজ্জামান হান্নানসহ উপজেলার \r\nগন্যমান্য ব্যক্তিবর্গ।<br>', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tcs`
--

CREATE TABLE IF NOT EXISTS `tcs` (
  `tcid` int(11) NOT NULL,
  `studentuserid` int(11) NOT NULL,
  `tcname` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcs`
--

INSERT INTO `tcs` (`tcid`, `studentuserid`, `tcname`, `isActive`) VALUES
(2, 1790909, 2, 0),
(3, 2259385, 1, 0),
(4, 2974274, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacherid` int(11) NOT NULL,
  `teacheruserid` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fathername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mothername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationalid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permanentaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mpoid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `joindate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateattended` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `jscsubjectteacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jscteachingdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscsubjectteacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscteachingdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscsubjectteacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscteachingdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jscwanttobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscwanttobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscwanttobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jscrelative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscrelative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscrelative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscboard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscgroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscboard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscgroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduationinstitute` text COLLATE utf8_unicode_ci NOT NULL,
  `graduationsubject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduationresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduationyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mastersinstitute` text COLLATE utf8_unicode_ci NOT NULL,
  `masterssubject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mastersresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mastersyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bedresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bedyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Othersexam` text COLLATE utf8_unicode_ci NOT NULL,
  `Othersexamresult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Othersexamyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jscexhe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jscexsubcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscexhe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sscexsubcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscexhe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hscexsubcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollmentstatus` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teacheruserid`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `designation`, `nationalid`, `permanentaddress`, `religion`, `mpoid`, `tphone`, `mailingaddress`, `gender`, `birthdate`, `email`, `joindate`, `dateattended`, `photo`, `jscsubjectteacher`, `jscteachingdate`, `sscsubjectteacher`, `sscteachingdate`, `hscsubjectteacher`, `hscteachingdate`, `jscwanttobe`, `sscwanttobe`, `hscwanttobe`, `jscrelative`, `sscrelative`, `hscrelative`, `sscboard`, `sscgroup`, `sscresult`, `sscyear`, `hscboard`, `hscgroup`, `hscresult`, `hscyear`, `graduationinstitute`, `graduationsubject`, `graduationresult`, `graduationyear`, `mastersinstitute`, `masterssubject`, `mastersresult`, `mastersyear`, `bedresult`, `bedyear`, `medresult`, `medyear`, `Othersexam`, `Othersexamresult`, `Othersexamyear`, `jscexhe`, `jscexsubcode`, `sscexhe`, `sscexsubcode`, `hscexhe`, `hscexsubcode`, `enrollmentstatus`, `isActive`) VALUES
(1, 532523, 'Asif', 'Akber', 'Ohh', '', '', '', '', '', '', '', '735694345', '55', 'Male', '0000-00-00', 'hossen.altab@gmail.com', '2015-20-21', '', 'Penguins6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 1),
(4, 3, 'Altab', 'Hossen', 'Talukder', 'Md. Nayam Uddin Talukder', 'Anowara Begum', 'Head Teacher', '5646468749843546546', 'Tangail. Bangladesh', 'Islam', '646489498485498489489', '01738627368', 'Dhaka, BD', 'Male', '1992-20-214', 'hossen.altab@gmail.com', '1999-01-21', '', '2-510x270.png', 'Math', '1999-01-21', 'Bangla', '1999-01-22', 'Biology', '1999-01-25', 'First', 'Third', 'Honest', 'No', 'No', 'Yes', 'dhaka', 'Business Study', '', '2008', 'dhaka', 'Science', 'GPA 4.80', '2010', 'Bangladesh University', 'CSE', 'GPA 4.50', '2014', 'Dhaka University', 'CSE 2', 'GPA 3.50', '2015', 'GPA 3.50', '2014', 'GPA 2.50', '2004', 'No Exam', 'No Result', '2012', 'Jsc Ex', 'Jsc Sub Code', 'Ssc Ex', 'SSc Sub Code', 'Hsc Ex', 'Hsc Sub Code', 1, 1),
(5, 3, 'Saddam', 'Km', 'Hossen', '', '', '', '', '', 'Islam', '', '', '', 'Male', '2015-20-21', 'dev.saddam@gmail.com', '2015-20-21', '2015', 'c-disappointment-holtek.jpg', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 1),
(6, 3, 'SAif', 'no', '', '', '', '', '', '', 'Islam', '', '', '', 'Male', '', '', '', '2013', 'alamn-250x270.png', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `salt` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `activation_code` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `forgotten_password_code` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '6bQRtGDZPN.LJ5eBPVRypu', 1268889823, 1437972114, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'john marketing', '$2y$08$Ue8p50kjC3jDQouYmnfir.NLWO2VFxdxpHojAQL5LDFBJOMpepKjK', NULL, 'mahimahimahiya@yahoo.com', NULL, NULL, NULL, NULL, 1433540588, NULL, 1, 'John', 'Marketing', 'Idea Tweaker Ltd.', '01680139540');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE IF NOT EXISTS `webpages` (
  `pageid` int(11) NOT NULL,
  `pagetitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageroute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentid` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `pubDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`pageid`, `pagetitle`, `pageroute`, `parentid`, `description`, `pubDate`, `isActive`) VALUES
(5, 'ভৌত অবকাঠামো', 'Infrastructure', 0, 'প্রচ্ছদ আমাদের কথা স্থিতিশীল সমাজ ও কার্যকর রাষ্ট্র প্রতিষ্ঠার মাধ্যমে উন্নত থেকে উন্নতর ভবিষ্যৎ নির্মাণে চেষ্টিত হয়। আর এ জন্য প্রয়োজন সুশিক্ষা। জ্ঞান অর্জনের সুশিক্ষার কোন বিকল্প নেই। আমাদের উচিত সুশিক্ষার মধ্যমে নীতিনৈতিকতা ও বিচার বুদ্ধিবোধকে জাগ্রত ক সিরাজগঞ্জ জেলার অর্ন্তগত উল্লাপাড়ার প্রাণ কেন্দ্রে ’’সরকারী আকবর আলী কলেজ’’ অবস্থিত। শিক্ষার আলো ছড়িয়ে দেওয়ার জন্য ০১ জুলাই, ১৯৭০ সালে জনাব এম আকবর আলী, জনাব কাজী সাইদুর রহমান, জনাব জিল্লুর রহমান সরকার, বাবু শচিন্দ্রনাথ ঠাকুর প্রমুখ ব্যক্তির আন্তরিক প্রচেষ্টায় কলেজটি প্রতিষ্ঠিত হয়। \r\n\r\nশিক্ষার মান, অবকাঠামোগত উন্নয়ন, এর অবস্থান ও সম্ভাবনার দিক বিবেচনা করে ০১ সেপ্টেম্বর, ১৯৮৪ সনে কলেজটিকে জাতীয়করণ করা হয়। কলেজটির আয়তন ১০.৩২ একর।  ২০০৯-২০১০ শিক্ষাবর্ষ থেকে কলেজটি জাতীয় বিশ্ববিদ্যালয় কর্তৃক অনার্স কলেজ হিসাবে স্বীকৃতি লাভ করেছে। এই শিক্ষাবর্ষে চারটি বিষয়ে (বাংলা, ইংরেজি, পদার্থবিজ্ঞান ও রসায়ন) অনার্স খোলা হয়। বর্তমানে ১৪টি বিষয়ে অনার্স কোর্স চালু আছে, বিষয়গুলো হলো-বাংলা, ইংরেজি, পদার্থবিজ্ঞান, রসায়ন, গণিত, উদ্ভিদ বিজ্ঞান, প্রাণী বিজ্ঞান, হিসাববিজ্ঞান, ব্যবস্থাপনা, রাষ্টবিজ্ঞান, ইতিহাস, অর্থনীতি এবং ইসলামের ইতিহাস ও সংস্কৃতি। অল্প কিছু সংখ্যক ছাত্র-ছাত্রী ও শিক্ষক নিয়ে এই কলেজ যাত্রা শুরু করলেও বর্তমানে ছাত্র-ছাত্রীর সংখ্যা প্রায় সাত হাজার। ঢাকা – পাবনা মহাসড়কের পাশেই প্রাকৃতিক মনোরম পরিবেশে স্থাপিত কলেজটিতে ০৫টি একাডেমিক ভবন, ০১ টি কেন্দ্রীয় লাইব্রেরী ও প্রতিটি বিভাগে সেমিনার, ০৫টি বিজ্ঞানাগার, বিশাল খেলার মাঠ ও একটি দৃষ্টি নন্দন পুকুর রয়েছে। কলেজের নিজস্ব ০১টি ছাত্রাবাস ও ০১টি ছাত্রী নিবাসে প্রায় তিনশত ছাত্র-ছাত্রীর আবাসন ব্যবস্থা রয়েছে। এটি রাজনীতি ও ধূমপান মুক্ত একটি শিক্ষা প্রতিষ্ঠান । ছাত্র-ছাত্রীদের জন্য রয়েছে নির্ধারিত ইউনিফরম। শিক্ষাদানের পাশাপাশি কলেজটিতে শিক্ষা সহায়ক কার্যক্রম যেমন- বার্ষিক ক্রীড়া প্রতিযোগিতা, সাহিত্য ও সাংস্কৃতিক প্রতিযোগিতা, বিতর্ক প্রতিযোগিতা, আন্তঃশ্রেণী ফুটবল প্রতিযোগিতা, শিক্ষা সফর ইত্যাদির আয়োজন করা হয়। ছাত্র-ছাত্রীদের নেতৃত্ব বিকাশে রয়েছে একটি সুসজ্জিত রোভার স্কাউট ইউনিট । তাই যে কোন শিক্ষার্থীর জন্য কলেজটি একটি আদর্শ শিক্ষা প্রতিষ্ঠান।', '0000-00-00 00:00:00', 1),
(6, 'আমাদের কথা', 'About-Us', 0, 'আমাদের কথা স্থিতিশীল সমাজ ও কার্যকর রাষ্ট্র প্রতিষ্ঠার মাধ্যমে উন্নত থেকে উন্নতর ভবিষ্যৎ নির্মাণে চেষ্টিত হয়। আর এ জন্য প্রয়োজন সুশিক্ষা। জ্ঞান অর্জনের সুশিক্ষার কোন বিকল্প নেই। আমাদের উচিত সুশিক্ষার মধ্যমে নীতিনৈতিকতা ও বিচার বুদ্ধিবোধকে জাগ্রত করে দেশাত', '0000-00-00 00:00:00', 1),
(7, 'অফিস', 'অফিস', 5, 'অফিস ', '0000-00-00 00:00:00', 1),
(8, 'নোটিশ বোর্ড', 'নোটিশ-বোর্ড', 6, 'নোটিশ বোর্ড', '0000-00-00 00:00:00', 1),
(9, 'ছুটির তালিকা', 'holidays', 8, '<table cellspacing="0" cellpadding="0" border="1">\n<tbody>\n<tr>\n<td width="114" valign="top">\n<p align="center">তারিখ</p>\n</td>\n<td width="143" valign="top">\n<p align="center">দিনের নাম</p>\n</td>\n<td width="339" valign="top">\n<p align="center">ছুটির বিবরণ</p>\n</td>\n<td width="116" valign="top">\n<p align="center">দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">০৫/০২/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার</td>\n<td width="339" valign="top">ঈদে মিলাদুন্নবী</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২১/০২/২০১২</p>\n</td>\n<td width="143" valign="top">সোমবার</td>\n<td width="339" valign="top">শহীদ দিবস ও আমর্ত্মজাতিক মাতৃভাষা দিবস</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">১৭/০৩/২০১২</p>\n</td>\n<td width="143" valign="top">শনিবার</td>\n<td width="339" valign="top">জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমানের জন্মদিন</td>\n<td width="116" valign="top">\n<p align="center">-</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২৬/০৩/২০১২</p>\n</td>\n<td width="143" valign="top">সোমবার</td>\n<td width="339" valign="top">স্বাধীনতা ও জাতীয় দিবস</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">১৪/০৪/২০১২</p>\n</td>\n<td width="143" valign="top">শনিবার</td>\n<td width="339" valign="top">বাংলা নববর্ষ</td>\n<td width="116" valign="top">\n<p align="center">-</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">০১/০৫/২০১২</p>\n</td>\n<td width="143" valign="top">মঙ্গলবার</td>\n<td width="339" valign="top">মে দিবস</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">০৬/০৫/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার</td>\n<td width="339" valign="top">বৌদ্ধ পূর্ণিমা</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২৭/০৫/২০১২  থেকে</p>\n<p align="center">২৯/০৫/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার-বৃহস্পতিবার<p></p>\n<p> </p></td>\n<td width="339" valign="top">গ্রীষ্মকালীন অবকাশ</td>\n<td width="116" valign="top">\n<p align="center">০৫ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">০৬/০৭/২০১০২</p>\n</td>\n<td width="143" valign="top">শুক্রবার</td>\n<td width="339" valign="top">শবেবরাত</td>\n<td width="116" valign="top">\n<p align="center">-</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২৯/০৭/২০১২</p>\n<p align="center">থেকে</p>\n<p align="center">২৩/০৮/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার- বৃহস্পতিবার</td>\n<td width="339" valign="top">জন্মাষ্টমী, জাতীয় শোক দিবস, মাহে রমজান, শবেকদর ও ঈদুল ফিতর</td>\n<td width="116" valign="top">\n<p align="center">২০ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২২/১০/২০১২</p>\n<p align="center">থেকে</p>\n<p align="center">৩০/১০/২০১২</p>\n</td>\n<td width="143" valign="top">সোমবার ও মঙ্গলবার</td>\n<td width="339" valign="top">দূর্গার্পূজা ও ঈদুল আযহা<p></p>\n<p> </p></td>\n<td width="116" valign="top">\n<p align="center">০৭ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২৫/১১/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার</td>\n<td width="339" valign="top">পবিত্র আশুরা</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">১৬/১২/২০১২</p>\n</td>\n<td width="143" valign="top">রবিবার</td>\n<td width="339" valign="top">বিজয় দিবস</td>\n<td width="116" valign="top">\n<p align="center">০১ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">২৫/১২/২০১২</p>\n<p align="center">থেকে</p>\n<p align="center"> ৩১/১২/২০১২</p>\n</td>\n<td width="143" valign="top">মঙ্গলবার-সোমবার</td>\n<td width="339" valign="top">বড়দিন ও শীতকালীন অবকাশ</td>\n<td width="116" valign="top">\n<p align="center">০৫ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">সাপ্তাহিক ছুটি</p>\n</td>\n<td width="143" valign="top">শুক্রবার</td>\n<td width="339" valign="top">-</td>\n<td width="116" valign="top">\n<p align="center">৫২ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="114" valign="top">\n<p align="center">সাপ্তাহিক ছুটি</p>\n</td>\n<td width="143" valign="top">শনিবার</td>\n<td width="339" valign="top">-</td>\n<td width="116" valign="top">\n<p align="center">৪৪ দিন</p>\n</td>\n</tr>\n<tr>\n<td width="596" valign="top" colspan="3">\n<p align="right"><strong>মোট = </strong><strong></strong></p>\n</td>\n<td width="116" valign="top">\n<p align="center"><strong>১৪০ দিন</strong><strong></strong></p>\n</td>\n</tr>\n</tbody>\n</table>', '0000-00-00 00:00:00', 1),
(10, 'ইতিহাস', 'history', 6, '<p>ইতিহাস</p>\r\n', '2015-26-07', 1),
(11, 'প্রতিষ্ঠানের নিয়ম শৃঙ্খলা', 'rules', 0, 'কলেজ কর্তৃক নির্ধারিত পোষাক, নির্দিষ্ট সময়ে পাঠ্যক্রম অনুযায়ী পাঠদান ও \r\nপরীক্ষা সম্পন্ন্ করণের জন্য নিজেস্ব একাডেমিক ক্যালান্ডার, সহপাঠ্যক্রমিক \r\n(Co-curiculam) কার্যক্রম, গ্রন্থাগার ব্যবহারে বাধ্যবাধকতা, শৃঙ্খলাবোধ. \r\nদেশপ্রেমিক যোগ্য নাগরিক গড়ে তুলতে দক্ষ, অভিজ্ঞ ও প্রশিক্ষণ শিক্ষকমন্ডলীর\r\n নিরলস প্রচেষ্টা, পাঠোন্নয়নে মনিটরিং, শিক্ষার্থীদের দাপ্তরিক কার্যক্রম \r\nসহজতরকরণে কর্মচারীদের একাগ্রতা এবং পরিচ্ছন্ন ও নিরিবিলি পরিবেশ বিভাগের \r\nবিশেষ বৈশিষ্ট্য। শিক্ষার্থীদের মেধা ও মননের বিকাশে বিজ্ঞান ও \r\nদৃষ্টান্তভিত্তিক মানসম্মত শিক্ষাদানে উন্নত ল্যাবরেটরী, তথ্য প্রযুক্তি \r\nতথা ইন্টারনেট ব্যাবহার নিশ্চিতকরণে আমরা দৃঢ় প্রতিজ্ঞ।<br>', NULL, 1),
(14, 'মাস্টারপ্ল্যান', 'masterplan', 0, 'উত্তরবঙ্গের প্রবেশদ্বার হিসাবে খ্যাত সিরাজগঞ্জ জেলা, বাংলাদেশের ইতিহাস \r\nঐতিহ্য ও সংস্কৃতিতে অনন্য স্থান অধিকার করে রয়েছে। এই জেলায় জন্ম গ্রহণ \r\nকরেছেন মাওলানা আব্দুর রশিদ তর্কবাগিশ, মাওলানা আব্দুল হামিদ খাঁন ভাসানী, \r\nক্যাপ্টেন এম মনসুর আলী, সৈয়দ ইসমাইল হোসেন সিরাজী, মো: নজিবর রহমান \r\nসাহিত্য রত্ন ও যাদব চন্দ্র চক্রর্বতী প্রমূখ-এর মতো মহান কীর্তিমান পুরুষ।\r\n\r\nউল্লাপাড়া সিরাজগঞ্জ জেলার ০৯টি উপজেলার মধ্যে একটি অন্যতম উপজেলা। ব্রিটিশ\r\n শাসনের বিরুদ্ধেঐতিহাসিক সলঙ্গ বিদ্রোহ এই উপজেলায় সংঘটিত হয়। এই অঞ্চলের \r\nমানুষ দীর্ঘদিন থেকে রাজনীতি অর্থনীতি ও সমাজ সর্ম্পকে সচেতন। এই অঞ্চলের \r\nমধ্যে মানুষের শিক্ষার আলোর প্রভা ছড়াতেই ১৯৭০ সালে উল্লাপাড়ার কিছু সংখ্যক\r\n গুনীজনের আন্তরিক প্রচেষ্টায় প্রতিষ্ঠিত হয় আকবর আলী কলেজ। এদের মধ্যে \r\nজনাব এম, আকবর আলী, জনাব কাজী সাইদুর রহমান, জনাব জিল্লুর রহমান, বাবু \r\nশচিন্দ্রনাথ ঠাকুর প্রমুখ ব্যক্তির নাম উল্লেখযোগ্য।\r\n\r\nপ্রতিষ্ঠালগ্ন থেকেই উজ্জল সম্ভাবনার পদযাত্রায় এলাকার মানুষের মধ্যে \r\nশিক্ষা ক্ষেত্রে এ প্রতিষ্ঠানটি ব্যাপক সম্ভাবনার দ্বার উম্মোচন করে। ফলে \r\nআকবর আলী কলেজটি এলাকাবাসীর গর্বের প্রতীক হিসাবে বিবেচিত হয়। পরবর্তীতে এ \r\nকলেজের শিক্ষার মান, অবকাঠামোগত উন্নয়ন, এর অবস্থান ও সম্ভাবনার দিক \r\nবিবেচনা করে ১৯৮৪ সনে কলেজটিকে জাতীয়করণ করা হলে কলেজটি সরকারী আকবর আলী \r\nকলেজ নামে যাত্রা শুরু করে। বর্তমানে এই কলেজটি সিরাজগঞ্জ জেলা তথা \r\nউত্তরবঙ্গের মধ্যে একটি অন্যতম বৃহত্তম কলেজ। ২০০৯-২০১০ শিক্ষাবর্ষ থেকে \r\nকলেজটি জাতীয় বিশ্ববিদ্যালয় কর্তৃক অনার্স কলেজ হিসাবে স্বীকৃতি লাভ করেছে।\r\n এক্ষেত্রে মাননীয় প্রধানমন্ত্রীর সংস্থাপন ও স্বরাষ্ট বিষয়ক উপদেষ্টা জনাব\r\n এইচ, টি, ইমাম ও সম্মানিত সংসদ সদস্য জনাব মো: শফিকুল ইসলাম-এর অবদান \r\nঅনিস্বীকার্য\r\n\r\nঅল্প কিছু সংখ্যক ছাত্র-ছাত্রী ও শিক্ষক নিয়ে এই কলেজ যাত্রা শুরু করলেও আজ\r\n ছাত্র-ছাত্রীর সংখ্যা প্রায় তিন হাজার। ছাত্র-ছাত্রীরা যোগ্য ও দায়িত্ব \r\nসচেতন শিক্ষকমন্ডলীর তত্ত্বাবধানে লেখাপড়া করার ব্যাপক সুযোগ লাভ করছে। \r\nবর্তমানে কলেজটিতে শুধুমাত্র স্থানীয় ছাত্র-ছাত্রী নয় সিরাজগঞ্জ, পাবনা, \r\nবগুড়া ও নাটোর জেলার বিভিন্ন অঞ্চলের ছাত্র-ছাত্রীরা শিক্ষা লাভ করছে।\r\n\r\nকলেজটি দেশের অভিভাবক সমাজ ও সুধীজনের প্রশংসা  লাভ এবং মনোযোগ আকর্ষণ করতে\r\n সমর্থ হয়েছে। লেখাপড়ার সুষ্ঠু ও সুন্দর পরিবেশ, প্রতিবছর বোর্ড ও \r\nবিশ্ববিদ্যায় পরীক্ষায় ছাত্র-ছাত্রীদের  কৃতিত্বপূর্ণ ফলাফলই তার প্রধান \r\nকারণ।\r\n\r\nঢাকা – পাবনা মহাসড়কের পাশেই প্রাকৃতিক মনোরম পরিবেশে স্থাপিত কলেজটিতে \r\nরয়েছে বিশাল খেলার মাঠ ও একটি দৃষ্টি নন্দন পুকুর। কলেজের নিজস্ব ছাত্রাবাস\r\n ও ছাত্রী নিবাসে প্রায় দুইশত ছাত্র-ছাত্রীর আবাসন ব্যবস্থা রয়েছে। স্থানীয়\r\n রাজনীতিবিদ, শিক্ষাবিদ, সমাজ সেবক, সাংবাদিক, সংস্কৃতিসেবী ও ব্যবসায়ী \r\nনেতৃবৃন্দের আন্তরিক প্রচেষ্ঠায় কলেজটি একটি শিক্ষা বান্ধব  প্রতিষ্ঠান \r\nহিসাবে স্বীকৃতি লাভ করেছে। কলেজটি রাজনীতি ও ধূমপান মুক্ত একটি শিক্ষা \r\nপ্রতিষ্ঠান । ছাত্র-ছাত্রীদের জন্য রয়েছে নিজস্ব ইউনিফরম। শিক্ষাদানের \r\nপাশাপাশি কলেজটিতে শিক্ষা সহায়ক কার্যক্রম যেমন- বার্ষিক ক্রীড়া \r\nপ্রতিযোগিতা, সাহিত্য ও সাংস্কৃতিক প্রতিযোগিতা, আন্তঃশ্রেণী ফুটবল \r\nপ্রতিযোগিতা, শিক্ষা ভ্রমন ইত্যাদির আয়োজন করা হয়। ছাত্র-ছাত্রীদের নেতৃত্ব\r\n বিকাশে রয়েছে একটি সুসজ্জিত রোভার স্কাউট ইউনিট । তাই যে কোন শিক্ষার্থীর \r\nজন্য কলেজটি একটি আদর্শ শিক্ষা প্রতিষ্ঠান।\r\n\r\n\r\n\r\n\r\n                        <br>', '0000-00-00 00:00:00', 1),
(15, 'একাডেমিক  ক্যালেন্ডার', 'academiccalendar', 0, '<table cellspacing="0" cellpadding="0" border="1">\r\n<tbody>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">তারিখ</p>\r\n</td>\r\n<td width="143" valign="top">\r\n<p align="center">দিনের নাম</p>\r\n</td>\r\n<td width="339" valign="top">\r\n<p align="center">ছুটির বিবরণ</p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center">দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৫/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">ঈদে মিলাদুন্নবী</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২১/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">শহীদ দিবস ও আমর্ত্মজাতিক মাতৃভাষা দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৭/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমানের জন্মদিন</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৬/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">স্বাধীনতা ও জাতীয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৪/০৪/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">বাংলা নববর্ষ</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০১/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার</td>\r\n<td width="339" valign="top">মে দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বৌদ্ধ পূর্ণিমা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৭/০৫/২০১২  থেকে</p>\r\n<p align="center">২৯/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার-বৃহস্পতিবার<p></p>\r\n<p> </p></td>\r\n<td width="339" valign="top">গ্রীষ্মকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৭/২০১০২</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">শবেবরাত</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৯/০৭/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">২৩/০৮/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার- বৃহস্পতিবার</td>\r\n<td width="339" valign="top">জন্মাষ্টমী, জাতীয় শোক দিবস, মাহে রমজান, শবেকদর ও ঈদুল ফিতর</td>\r\n<td width="116" valign="top">\r\n<p align="center">২০ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২২/১০/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">৩০/১০/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার ও মঙ্গলবার</td>\r\n<td width="339" valign="top">দূর্গার্পূজা ও ঈদুল আযহা<p></p>\r\n<p> </p></td>\r\n<td width="116" valign="top">\r\n<p align="center">০৭ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১১/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">পবিত্র আশুরা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৬/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বিজয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১২/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center"> ৩১/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার-সোমবার</td>\r\n<td width="339" valign="top">বড়দিন ও শীতকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৫২ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৪৪ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="596" valign="top" colspan="3">\r\n<p align="right"><strong>মোট = </strong><strong></strong></p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center"><strong>১৪০ দিন</strong><strong></strong></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2015-07-24 00:00:00', 1),
(18, 'শুন্যপদের তথ্য', 'vacancy', 0, '<table cellspacing="0" cellpadding="0" border="1">\r\n<tbody>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">তারিখ</p>\r\n</td>\r\n<td width="143" valign="top">\r\n<p align="center">দিনের নাম</p>\r\n</td>\r\n<td width="339" valign="top">\r\n<p align="center">ছুটির বিবরণ</p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center">দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৫/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">ঈদে মিলাদুন্নবী</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২১/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">শহীদ দিবস ও আমর্ত্মজাতিক মাতৃভাষা দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৭/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমানের জন্মদিন</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৬/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">স্বাধীনতা ও জাতীয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৪/০৪/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">বাংলা নববর্ষ</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০১/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার</td>\r\n<td width="339" valign="top">মে দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বৌদ্ধ পূর্ণিমা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৭/০৫/২০১২  থেকে</p>\r\n<p align="center">২৯/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার-বৃহস্পতিবার<p></p>\r\n<p> </p></td>\r\n<td width="339" valign="top">গ্রীষ্মকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৭/২০১০২</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">শবেবরাত</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৯/০৭/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">২৩/০৮/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার- বৃহস্পতিবার</td>\r\n<td width="339" valign="top">জন্মাষ্টমী, জাতীয় শোক দিবস, মাহে রমজান, শবেকদর ও ঈদুল ফিতর</td>\r\n<td width="116" valign="top">\r\n<p align="center">২০ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২২/১০/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">৩০/১০/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার ও মঙ্গলবার</td>\r\n<td width="339" valign="top">দূর্গার্পূজা ও ঈদুল আযহা<p></p>\r\n<p> </p></td>\r\n<td width="116" valign="top">\r\n<p align="center">০৭ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১১/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">পবিত্র আশুরা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৬/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বিজয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১২/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center"> ৩১/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার-সোমবার</td>\r\n<td width="339" valign="top">বড়দিন ও শীতকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৫২ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৪৪ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="596" valign="top" colspan="3">\r\n<p align="right"><strong>মোট = </strong><strong></strong></p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center"><strong>১৪০ দিন</strong><strong></strong></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '0000-00-00 00:00:00', 1),
(19, 'কর্মরত জনবল', 'workingmanpower', 0, '<table cellspacing="0" cellpadding="0" border="1">\r\n<tbody>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">তারিখ</p>\r\n</td>\r\n<td width="143" valign="top">\r\n<p align="center">দিনের নাম</p>\r\n</td>\r\n<td width="339" valign="top">\r\n<p align="center">ছুটির বিবরণ</p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center">দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৫/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">ঈদে মিলাদুন্নবী</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২১/০২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">শহীদ দিবস ও আমর্ত্মজাতিক মাতৃভাষা দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৭/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমানের জন্মদিন</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৬/০৩/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার</td>\r\n<td width="339" valign="top">স্বাধীনতা ও জাতীয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৪/০৪/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">বাংলা নববর্ষ</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০১/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার</td>\r\n<td width="339" valign="top">মে দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বৌদ্ধ পূর্ণিমা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৭/০৫/২০১২  থেকে</p>\r\n<p align="center">২৯/০৫/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার-বৃহস্পতিবার<p></p>\r\n<p> </p></td>\r\n<td width="339" valign="top">গ্রীষ্মকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">০৬/০৭/২০১০২</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">শবেবরাত</td>\r\n<td width="116" valign="top">\r\n<p align="center">-</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৯/০৭/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">২৩/০৮/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার- বৃহস্পতিবার</td>\r\n<td width="339" valign="top">জন্মাষ্টমী, জাতীয় শোক দিবস, মাহে রমজান, শবেকদর ও ঈদুল ফিতর</td>\r\n<td width="116" valign="top">\r\n<p align="center">২০ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২২/১০/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center">৩০/১০/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">সোমবার ও মঙ্গলবার</td>\r\n<td width="339" valign="top">দূর্গার্পূজা ও ঈদুল আযহা<p></p>\r\n<p> </p></td>\r\n<td width="116" valign="top">\r\n<p align="center">০৭ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১১/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">পবিত্র আশুরা</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">১৬/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">রবিবার</td>\r\n<td width="339" valign="top">বিজয় দিবস</td>\r\n<td width="116" valign="top">\r\n<p align="center">০১ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">২৫/১২/২০১২</p>\r\n<p align="center">থেকে</p>\r\n<p align="center"> ৩১/১২/২০১২</p>\r\n</td>\r\n<td width="143" valign="top">মঙ্গলবার-সোমবার</td>\r\n<td width="339" valign="top">বড়দিন ও শীতকালীন অবকাশ</td>\r\n<td width="116" valign="top">\r\n<p align="center">০৫ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শুক্রবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৫২ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="114" valign="top">\r\n<p align="center">সাপ্তাহিক ছুটি</p>\r\n</td>\r\n<td width="143" valign="top">শনিবার</td>\r\n<td width="339" valign="top">-</td>\r\n<td width="116" valign="top">\r\n<p align="center">৪৪ দিন</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="596" valign="top" colspan="3">\r\n<p align="right"><strong>মোট = </strong><strong></strong></p>\r\n</td>\r\n<td width="116" valign="top">\r\n<p align="center"><strong>১৪০ দিন</strong><strong></strong></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '0000-00-00 00:00:00', 1),
(20, 'খেলার মাঠ', 'playground', 0, 'টাংগাইল জেলার ঘাটাইল উপজেলাধীন পাকুটিয়া গ্রামে মনোরম পরিবেশে ১৯৫২ ইং সনের ২রা জানুয়ারী এলাকার গণ্যমান্য ব্যক্তিবর্গের ঐকান্তিক প্রচেষ্ঠায় গড়ে উঠেছিল পাকুটিয়া পাবলিক হাই স্কুল। সেই থেকে পথ চলা। বিদ্যালয়টি এই এলাকার মানুষের মাঝে বিদ্যার আলো ছড়িয়ে যাচ্ছে। বিদ্যালয়টি ১৯৯৮ইং সালে কলেজে উন্নীত হয়। বর্তমানে স্কুল এন্ড কলেজটিতে প্রায় ১৪০০ ছাত্র ছাত্রী লেখাপড়া করছে। ', '0000-00-00 00:00:00', 1),
(21, 'মাল্টিমিডিয়া ক্লাসরুম', 'multimedia-classroom', 0, 'টাংগাইল জেলার ঘাটাইল উপজেলাধীন পাকুটিয়া গ্রামে মনোরম পরিবেশে ১৯৫২ ইং সনের ২রা জানুয়ারী এলাকার গণ্যমান্য ব্যক্তিবর্গের ঐকান্তিক প্রচেষ্ঠায় গড়ে উঠেছিল পাকুটিয়া পাবলিক হাই স্কুল। সেই থেকে পথ চলা। বিদ্যালয়টি এই এলাকার মানুষের মাঝে বিদ্যার আলো ছড়িয়ে যাচ্ছে। বিদ্যালয়টি ১৯৯৮ইং সালে কলেজে উন্নীত হয়। বর্তমানে স্কুল এন্ড কলেজটিতে প্রায় ১৪০০ ছাত্র ছাত্রী লেখাপড়া করছে। ', '0000-00-00 00:00:00', 1),
(22, 'আইসিটি ল্যাব', 'ICT-Lab', 0, 'টাংগাইল জেলার ঘাটাইল উপজেলাধীন পাকুটিয়া গ্রামে মনোরম পরিবেশে ১৯৫২ ইং সনের ২রা জানুয়ারী এলাকার গণ্যমান্য ব্যক্তিবর্গের ঐকান্তিক প্রচেষ্ঠায় গড়ে উঠেছিল পাকুটিয়া পাবলিক হাই স্কুল। সেই থেকে পথ চলা। বিদ্যালয়টি এই এলাকার মানুষের মাঝে বিদ্যার আলো ছড়িয়ে যাচ্ছে। বিদ্যালয়টি ১৯৯৮ইং সালে কলেজে উন্নীত হয়। বর্তমানে স্কুল এন্ড কলেজটিতে প্রায় ১৪০০ ছাত্র ছাত্রী লেখাপড়া করছে। ', '0000-00-00 00:00:00', 1),
(23, 'মসজিদ', 'mosque', 0, 'মসজিদ', '0000-00-00 00:00:00', 1),
(27, 'altab hossen', 'altab', 0, '<table border="1" cellpadding="0" cellspacing="0">\r\n <tbody>\r\n  <tr>\r\n   <td>\r\n   <p>তারিখ</p>\r\n   </td>\r\n   <td>\r\n   <p>দিনের নাম</p>\r\n   </td>\r\n   <td>\r\n   <p>ছুটির বিবরণ</p>\r\n   </td>\r\n   <td>\r\n   <p>দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>০৫/০২/২০১২</p>\r\n   </td>\r\n   <td>রবিবার</td>\r\n   <td>ঈদে মিলাদুন্নবী</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২১/০২/২০১২</p>\r\n   </td>\r\n   <td>সোমবার</td>\r\n   <td>শহীদ দিবস ও আমর্ত্মজাতিক মাতৃভাষা দিবস</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>১৭/০৩/২০১২</p>\r\n   </td>\r\n   <td>শনিবার</td>\r\n   <td>জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমানের জন্মদিন</td>\r\n   <td>\r\n   <p>-</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২৬/০৩/২০১২</p>\r\n   </td>\r\n   <td>সোমবার</td>\r\n   <td>স্বাধীনতা ও জাতীয় দিবস</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>১৪/০৪/২০১২</p>\r\n   </td>\r\n   <td>শনিবার</td>\r\n   <td>বাংলা নববর্ষ</td>\r\n   <td>\r\n   <p>-</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>০১/০৫/২০১২</p>\r\n   </td>\r\n   <td>মঙ্গলবার</td>\r\n   <td>মে দিবস</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>০৬/০৫/২০১২</p>\r\n   </td>\r\n   <td>রবিবার</td>\r\n   <td>বৌদ্ধ পূর্ণিমা</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২৭/০৫/২০১২  থেকে</p>\r\n\r\n   <p>২৯/০৫/২০১২</p>\r\n   </td>\r\n   <td>রবিবার-বৃহস্পতিবার\r\n   <p> </p>\r\n\r\n   <p> </p>\r\n   </td>\r\n   <td>গ্রীষ্মকালীন অবকাশ</td>\r\n   <td>\r\n   <p>০৫ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>০৬/০৭/২০১০২</p>\r\n   </td>\r\n   <td>শুক্রবার</td>\r\n   <td>শবেবরাত</td>\r\n   <td>\r\n   <p>-</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২৯/০৭/২০১২</p>\r\n\r\n   <p>থেকে</p>\r\n\r\n   <p>২৩/০৮/২০১২</p>\r\n   </td>\r\n   <td>রবিবার- বৃহস্পতিবার</td>\r\n   <td>জন্মাষ্টমী, জাতীয় শোক দিবস, মাহে রমজান, শবেকদর ও ঈদুল ফিতর</td>\r\n   <td>\r\n   <p>২০ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২২/১০/২০১২</p>\r\n\r\n   <p>থেকে</p>\r\n\r\n   <p>৩০/১০/২০১২</p>\r\n   </td>\r\n   <td>সোমবার ও মঙ্গলবার</td>\r\n   <td>দূর্গার্পূজা ও ঈদুল আযহা\r\n   <p> </p>\r\n\r\n   <p> </p>\r\n   </td>\r\n   <td>\r\n   <p>০৭ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২৫/১১/২০১২</p>\r\n   </td>\r\n   <td>রবিবার</td>\r\n   <td>পবিত্র আশুরা</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>১৬/১২/২০১২</p>\r\n   </td>\r\n   <td>রবিবার</td>\r\n   <td>বিজয় দিবস</td>\r\n   <td>\r\n   <p>০১ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২৫/১২/২০১২</p>\r\n\r\n   <p>থেকে</p>\r\n\r\n   <p> ৩১/১২/২০১২</p>\r\n   </td>\r\n   <td>মঙ্গলবার-সোমবার</td>\r\n   <td>বড়দিন ও শীতকালীন অবকাশ</td>\r\n   <td>\r\n   <p>০৫ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>সাপ্তাহিক ছুটি</p>\r\n   </td>\r\n   <td>শুক্রবার</td>\r\n   <td>-</td>\r\n   <td>\r\n   <p>৫২ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>সাপ্তাহিক ছুটি</p>\r\n   </td>\r\n   <td>শনিবার</td>\r\n   <td>-</td>\r\n   <td>\r\n   <p>৪৪ দিন</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan="3">\r\n   <p><strong>মোট = </strong></p>\r\n   </td>\r\n   <td>\r\n   <p><strong>১৪০ দিন</strong></p>\r\n   </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n', '0000-00-00 00:00:00', 1),
(30, 'গভর্ণিং বডি', 'governingbody', 0, '<table border="1" cellpadding="0" cellspacing="0">\r\n <tbody>\r\n  <tr>\r\n   <td>\r\n   <p>ক্রমিক নং</p>\r\n   </td>\r\n   <td>\r\n   <p>নাম</p>\r\n   </td>\r\n   <td>\r\n   <p>পদবীর নাম</p>\r\n   </td>\r\n   <td>\r\n   <p>নিযুক্ত তারিখ</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>১</p>\r\n   </td>\r\n   <td>\r\n   <p>জনাব ফরিদা রহমান খান</p>\r\n   </td>\r\n   <td>\r\n   <p>সভাপতি</p>\r\n   </td>\r\n   <td>\r\n   <p>০৭-০৫-২০১৫</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>২</p>\r\n   </td>\r\n   <td>\r\n   <p>জনাব কাজী আওরঙ্গজেব</p>\r\n   </td>\r\n   <td>\r\n   <p>দাতা সদস্য</p>\r\n   </td>\r\n   <td>\r\n   <p>০৭-০৫-২০১৫</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>৩</p>\r\n   </td>\r\n   <td>\r\n   <p>জনাব ওয়াদুদ মিয়া</p>\r\n   </td>\r\n   <td>\r\n   <p>অভিভাবক সদস্য (কলেজ শাখা)</p>\r\n   </td>\r\n   <td>\r\n   <p>০৭-০৫-২০১৫</p>\r\n   </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`absenceid`);

--
-- Indexes for table `academiccouncillors`
--
ALTER TABLE `academiccouncillors`
  ADD PRIMARY KEY (`academiccouncillorid`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicantid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `classdays`
--
ALTER TABLE `classdays`
  ADD PRIMARY KEY (`dayid`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `classperiod`
--
ALTER TABLE `classperiod`
  ADD PRIMARY KEY (`classperiodid`);

--
-- Indexes for table `classroutine`
--
ALTER TABLE `classroutine`
  ADD PRIMARY KEY (`classroutineid`);

--
-- Indexes for table `counter_ips`
--
ALTER TABLE `counter_ips`
  ADD UNIQUE KEY `ip` (`ip`);

--
-- Indexes for table `counter_values`
--
ALTER TABLE `counter_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`downloadid`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `financialdepartments`
--
ALTER TABLE `financialdepartments`
  ADD PRIMARY KEY (`financialdepartmentid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardianof`
--
ALTER TABLE `guardianof`
  ADD PRIMARY KEY (`guardianofid`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`guardianid`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`holidayid`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `othersresults`
--
ALTER TABLE `othersresults`
  ADD PRIMARY KEY (`othersresultid`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photoid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultid`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingsid`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slideid`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`), ADD UNIQUE KEY `studentuserid` (`studentuserid`);

--
-- Indexes for table `study_groups`
--
ALTER TABLE `study_groups`
  ADD PRIMARY KEY (`studygroupsid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`syllabusid`);

--
-- Indexes for table `talentedstudents`
--
ALTER TABLE `talentedstudents`
  ADD PRIMARY KEY (`talentedstudentid`);

--
-- Indexes for table `tcs`
--
ALTER TABLE `tcs`
  ADD PRIMARY KEY (`tcid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`pageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `absenceid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `academiccouncillors`
--
ALTER TABLE `academiccouncillors`
  MODIFY `academiccouncillorid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicantid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `departmentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `downloadid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `financialdepartments`
--
ALTER TABLE `financialdepartments`
  MODIFY `financialdepartmentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `genderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guardianof`
--
ALTER TABLE `guardianof`
  MODIFY `guardianofid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `guardianid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `holidayid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `noticeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `othersresults`
--
ALTER TABLE `othersresults`
  MODIFY `othersresultid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photoid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `sectionid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingsid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slideid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `study_groups`
--
ALTER TABLE `study_groups`
  MODIFY `studygroupsid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `syllabusid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `talentedstudents`
--
ALTER TABLE `talentedstudents`
  MODIFY `talentedstudentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tcs`
--
ALTER TABLE `tcs`
  MODIFY `tcid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
