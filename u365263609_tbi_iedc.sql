-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2024 at 10:25 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u365263609_tbi_iedc`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `combination_key` varchar(100) NOT NULL,
  `imageurl` varchar(250) DEFAULT NULL,
  `date` varchar(40) NOT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `uid`, `title`, `category`, `combination_key`, `imageurl`, `date`, `createdate`, `updatedate`, `status`) VALUES
(2, 'c5eb1026-db52-4453-9986-c159f15000f4', 'CSE Prelims 2020 - General Studies Paper-I', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2020---general-studies-paper-i.pdf', '', '2022-02-26 10:09:21', '2023-05-30 18:53:05', NULL),
(3, '6cc6bd11-ea18-4343-910c-fbf2dbdf5470', 'CSE Prelims 2020 - General Studies Paper -II', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2020---general-studies-paper--ii.pdf', '', '2022-02-26 10:16:42', '2023-05-30 18:54:15', NULL),
(6, '9a762656-8184-4242-a645-089635bdd771', 'UGC', 'Results', 'RESULTS', '../imgserver/uploads/attachments/ugc.pdf', '', '2022-02-28 22:49:05', '2022-02-28 22:54:32', NULL),
(9, '8ef1d279-2c0b-4360-b48b-9e9436b8d665', 'editorial 1', NULL, 'EDITORIALS', '../imgserver/uploads/attachments/editorial-1.pdf', '', '2022-03-01 01:23:19', '2022-03-01 01:23:19', NULL),
(11, 'd14f17bd-c1bd-4f6b-9e0a-825ab068c8ee', 'UPSC Examinations', NULL, 'DOWNLOADS', '../imgserver/uploads/attachments/upsc-examinations.pdf', '', '2022-03-01 11:41:59', '2022-03-01 11:41:59', NULL),
(12, '51fd295c-b17b-49bd-aa81-8d9cd2648ee6', 'SSC', 'results 2', 'RESULTS', '../imgserver/uploads/attachments/ssc.pdf', '', '2022-03-02 02:38:10', '2022-03-02 02:38:10', NULL),
(13, 'e9159b8a-d4de-4a41-af3d-e85c78e925bd', 'Current Affairs- Weekly roundup - March 1st week', NULL, 'CURRENT_AFFAIRS', '../imgserver/uploads/attachments/current-affairs--weekly-roundup---march-1st-week.pdf', '', '2022-03-07 07:16:53', '2022-03-07 07:20:16', NULL),
(14, '5180bf62-9dc2-4f41-8d81-85910c28fab4', 'Current Affairs- Weekly Roundup - Mar 2nd week', NULL, 'CURRENT_AFFAIRS', '../imgserver/uploads/attachments/current-affairs--weekly-roundup---mar-2nd-week.pdf', '', '2022-03-07 07:19:47', '2022-03-07 07:19:47', NULL),
(15, '1be45e2c-6cd3-4411-b707-14eb297153d0', 'CSE Prelims 2021 - General Studies Paper-I', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2021---general-studies-paper-i.pdf', '', '2022-03-30 11:21:25', '2023-05-30 18:57:29', NULL),
(16, '913b8a9d-54ee-4e1f-9cf3-603802e7f029', 'January 2023', NULL, 'WEEKLY_ROUNDUPS', '../imgserver/uploads/attachments/january-2023.pdf', '', '2022-04-08 08:20:53', '2023-05-30 18:32:11', NULL),
(18, 'bb039bc6-e76b-440b-b849-e6b631f00ca0', 'February 2023', NULL, 'WEEKLY_ROUNDUPS', '../imgserver/uploads/attachments/february-2023.pdf', '', '2023-05-30 18:32:39', '2023-05-30 18:32:39', NULL),
(19, 'd7db5a4c-b35a-4e52-b201-ee6fc92a641a', 'March 2023', NULL, 'WEEKLY_ROUNDUPS', '../imgserver/uploads/attachments/march-2023.pdf', '', '2023-05-30 18:33:08', '2023-05-30 18:33:08', NULL),
(20, '42980185-d31f-4d54-8551-877ab7236491', 'April 2023', NULL, 'WEEKLY_ROUNDUPS', '../imgserver/uploads/attachments/april-2023.pdf', '', '2023-05-30 18:33:41', '2023-05-30 18:33:41', NULL),
(21, '593c0a69-2e27-4bb9-b79f-3a05794ff76b', 'May 2023', NULL, 'WEEKLY_ROUNDUPS', '../imgserver/uploads/attachments/may-2023.pdf', '', '2023-05-30 18:34:24', '2023-05-30 18:34:24', NULL),
(22, '38969b56-10fd-48f6-9cb3-a601712474b5', 'CSE Prelims 2021 - General Studies Paper-II', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2021---general-studies-paper-ii.pdf', '', '2023-05-30 18:59:03', '2023-05-30 18:59:03', NULL),
(23, '7253bb6b-d4de-431d-adfd-9a5214cdcf6e', 'CSE Prelims 2022 - General Studies Paper-I', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2022---general-studies-paper-i.pdf', '', '2023-05-30 19:00:23', '2023-05-30 19:00:23', NULL),
(24, '0cc1426a-4b25-437b-ae21-5654f3b25832', 'CSE Prelims 2022 - General Studies Paper-II', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2022---general-studies-paper-ii.pdf', '', '2023-05-30 19:01:24', '2023-05-30 19:02:32', NULL),
(25, '68cc1469-2b30-45e0-9005-80c79b6d3458', 'CSE Prelims 2023 - General Studies Paper-I', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2023---general-studies-paper-i.pdf', '', '2023-05-30 19:03:32', '2023-05-30 19:03:32', NULL),
(26, '0e9a7de6-b996-49d1-b32e-6946d9fa64d2', 'CSE Prelims 2023 - General Studies Paper-II', 'Previous Question Papers', 'RESOURCES', '../imgserver/uploads/attachments/cse-prelims-2023---general-studies-paper-ii.pdf', '', '2023-05-30 19:05:16', '2023-05-30 19:05:16', NULL),
(27, '47699bac-3542-4c8f-b677-f8091da249e9', 'UPSC CSE 2022-23 - Final Result', 'UPSC Corner', 'RESOURCES', '../imgserver/uploads/attachments/upsc-cse-2022-23---final-result.pdf', '', '2023-05-30 19:09:15', '2023-05-30 19:09:15', NULL),
(28, 'ed010b70-a28e-4771-a193-9a45d0bbb871', 'UPSC Annual Calendar 2023', 'UPSC Corner', 'RESOURCES', '../imgserver/uploads/attachments/upsc-annual-calendar-2023.pdf', '', '2023-05-30 19:09:58', '2023-05-30 19:09:58', NULL),
(29, '0fb5f81d-b674-4b0a-b3b1-2b98cc4d4e5b', 'PM Quarterly Report 2022 November -2023 January', 'Reports', 'RESOURCES', '../imgserver/uploads/attachments/pm-quarterly-report-2022-november--2023-january.pdf', '', '2023-05-30 19:15:06', '2023-05-30 19:15:06', NULL),
(30, '20cb764d-bd46-4d0c-addc-91f9fcca9108', 'Farook College', 'Scholarships', 'RESOURCES', '../imgserver/uploads/attachments/farook-college-civil-service-scholarship-programme-2023.pdf', '', '2023-05-30 19:17:02', '2024-06-13 07:03:02', NULL),
(32, 'a66688a5-4348-4a9f-b93d-7d62cd30685b', 'qwerty b', NULL, 'CURRENT_AFFAIRS', '../imgserver/uploads/attachments/qwerty-b.pdf', '', '2024-06-08 05:52:06', '2024-06-08 06:05:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `logtext` longtext NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `logtext`, `create_date`) VALUES
(1, 'BACKUP ACTVITY ===>  MYSQLDUMP <==== USER :  xcteam(1), ACTIVITY REASON :  BACKUP MANUALLY DONE ', '2020-10-21 11:25:03'),
(2, 'BACKUP ACTVITY ===>  MYSQLDUMP <==== USER :  xcteam(1), ACTIVITY REASON :  BACKUP MANUALLY DONE ', '2020-10-23 03:32:42'),
(3, 'BACKUP ACTVITY ===>  MYSQLDUMP <==== USER :  xcteam(1), ACTIVITY REASON :  BACKUP MANUALLY DONE ', '2021-01-18 08:07:22'),
(4, 'BACKUP ACTVITY ===>  MYSQLDUMP <==== USER :  xcteam(1), ACTIVITY REASON :  BACKUP MANUALLY DONE ', '2021-05-18 10:12:56'),
(5, 'BACKUP ACTVITY ===>  MYSQLDUMP <==== USER :  xcteam(1), ACTIVITY REASON :  BACKUP MANUALLY DONE ', '2021-05-18 10:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `user_id`, `time`) VALUES
(1, 1, '1613457067'),
(2, 1, '1613457067'),
(3, 1, '1621145231'),
(4, 1, '1621145231'),
(5, 1, '1621145356'),
(6, 1, '1621145356'),
(7, 1, '1621145965'),
(8, 1, '1621145965'),
(9, 1, '1621173189'),
(10, 1, '1621173189'),
(11, 1, '1621177306'),
(12, 1, '1621177306'),
(13, 1, '1621225492'),
(14, 1, '1621225492'),
(15, 1, '1621225496'),
(16, 1, '1621225497'),
(17, 1, '1621225503'),
(18, 1, '1621225503'),
(19, 1, '1621225513'),
(20, 1, '1621225514'),
(21, 1, '1621367892'),
(22, 1, '1621367892'),
(23, 1, '1621409593'),
(24, 1, '1621409593'),
(25, 1, '1623075946'),
(26, 1, '1623075946'),
(27, 1, '1624335417'),
(28, 1, '1624335417'),
(29, 1, '1624335425'),
(30, 1, '1624335425'),
(31, 1, '1625124385'),
(32, 1, '1625124385'),
(33, 131, '1628829671'),
(34, 131, '1628829671'),
(35, 131, '1628829678'),
(36, 131, '1628829678'),
(37, 131, '1628829703'),
(38, 131, '1628829703'),
(39, 1, '1629189464'),
(40, 1, '1629189464'),
(41, 142, '1629953395'),
(42, 142, '1629953395'),
(43, 142, '1629953398'),
(44, 142, '1629953398'),
(45, 142, '1629953400'),
(46, 142, '1629953400'),
(47, 140, '1629953563'),
(48, 140, '1629953563'),
(49, 141, '1629953838'),
(50, 141, '1629953838'),
(51, 137, '1629954209'),
(52, 137, '1629954209'),
(53, 1, '1634369247'),
(54, 1, '1634369247'),
(55, 131, '1640254107'),
(56, 131, '1640254107'),
(57, 1, '1642498789'),
(58, 1, '1642498789'),
(59, 1, '1642502997'),
(60, 1, '1642502997'),
(61, 146, '1642503345'),
(62, 146, '1642503345'),
(63, 131, '1643104360'),
(64, 131, '1643104360'),
(65, 148, '1643188516'),
(66, 148, '1643188516'),
(67, 1, '1645000524'),
(68, 1, '1645000524'),
(69, 1, '1646188586'),
(70, 1, '1646188587'),
(71, 1, '1646270632'),
(72, 1, '1646270633'),
(73, 1, '1649405974'),
(74, 1, '1649405974'),
(75, 1, '1686735950'),
(76, 1, '1686735950'),
(77, 150, '1686736012'),
(78, 150, '1686736012'),
(79, 1, '1717007030'),
(80, 1, '1717007030'),
(81, 1, '1720500160'),
(82, 1, '1720500160');

-- --------------------------------------------------------

--
-- Table structure for table `media_gallery`
--

CREATE TABLE `media_gallery` (
  `id` bigint(20) NOT NULL,
  `media_id` varchar(128) NOT NULL,
  `metaname` varchar(128) NOT NULL,
  `metatype` varchar(60) NOT NULL,
  `metacontent` longtext NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `referkey` varchar(60) NOT NULL,
  `referkeyid` varchar(128) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `media_gallery`
--

INSERT INTO `media_gallery` (`id`, `media_id`, `metaname`, `metatype`, `metacontent`, `create_timestamp`, `update_timestamp`, `referkey`, `referkeyid`, `status`) VALUES
(1, 'dc74d57b-e48e-4281-a17b-392a5574ffdb', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__dc74d57b-e48e-4281-a17b-392a5574ffdb_0.png', '2021-05-29 15:33:28', '2021-05-29 15:33:23', '', '', 2),
(2, '1bbf4698-a595-454d-9128-c88b2a1c03f4', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__1bbf4698-a595-454d-9128-c88b2a1c03f4_0.png', '2021-05-29 15:34:36', '2021-05-29 15:34:33', '', '', 2),
(3, '905aeaa6-19f4-4507-aa1e-15051d0ec4c7', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__905aeaa6-19f4-4507-aa1e-15051d0ec4c7_0.png', '2021-05-29 15:35:40', '2021-05-29 15:35:36', '', '', 2),
(4, '9a10c414-a1b7-412d-9732-0cffec4cc5f8', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__9a10c414-a1b7-412d-9732-0cffec4cc5f8_0.png', '2021-05-29 15:36:58', '2021-05-29 15:36:55', '', '', 2),
(5, 'f7588041-7797-42e7-82ff-bdb23176308f', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__f7588041-7797-42e7-82ff-bdb23176308f_0.png', '2021-05-29 15:37:58', '2021-05-29 15:37:55', '', '', 2),
(6, '449adc91-f8f8-47a5-a552-decc4dc626ba', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__449adc91-f8f8-47a5-a552-decc4dc626ba_0.png', '2021-05-29 15:39:26', '2021-05-29 15:39:23', '', '', 2),
(7, '688edab7-57ea-4cee-8628-26534b76f700', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__688edab7-57ea-4cee-8628-26534b76f700_0.png', '2021-05-29 15:44:18', '2021-05-29 15:44:15', '', '', 2),
(8, '9c3fe0bc-d667-4fe5-a344-c78ebf4c04a5', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__9c3fe0bc-d667-4fe5-a344-c78ebf4c04a5_0.png', '2021-05-29 15:45:51', '2021-05-29 15:45:49', '', '', 2),
(9, '2cd81d20-a7f7-485e-a1f5-6eddaf8f3bf2', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__2cd81d20-a7f7-485e-a1f5-6eddaf8f3bf2_0.png', '2021-05-29 15:47:02', '2021-05-29 15:46:58', '', '', 2),
(10, 'e5bb3cee-5996-4263-9bb3-82417b6e6789', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__e5bb3cee-5996-4263-9bb3-82417b6e6789_0.png', '2021-05-29 15:48:07', '2021-05-29 15:48:04', '', '', 2),
(11, '9497d8fb-ed82-4ce1-884a-1678c6eb4a51', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__9497d8fb-ed82-4ce1-884a-1678c6eb4a51_0.png', '2021-05-29 15:49:35', '2021-05-29 15:49:31', '', '', 2),
(12, 'fa1f0715-c11a-437f-9879-cb03557f578c', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__fa1f0715-c11a-437f-9879-cb03557f578c_0.png', '2021-05-29 15:50:57', '2021-05-29 15:50:52', '', '', 2),
(13, 'b9a8efce-0362-4c7a-af82-bcd1c52c7523', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__b9a8efce-0362-4c7a-af82-bcd1c52c7523_0.png', '2021-05-29 15:52:29', '2021-05-29 15:52:06', '', '', 2),
(14, '9a6840a3-ad56-4485-8f06-8b013d5eb94c', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__9a6840a3-ad56-4485-8f06-8b013d5eb94c_0.png', '2021-05-29 15:53:36', '2021-05-29 15:53:32', '', '', 2),
(15, 'cda5be9a-d5ba-4d86-b59b-f14fb4a6bb63', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__cda5be9a-d5ba-4d86-b59b-f14fb4a6bb63_0.png', '2021-05-29 15:54:43', '2021-05-29 15:54:32', '', '', 2),
(16, '0bf5261e-39e2-48e5-be21-64643c8bc0d6', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__0bf5261e-39e2-48e5-be21-64643c8bc0d6_0.png', '2021-05-29 15:56:09', '2021-05-29 15:56:07', '', '', 2),
(17, 'bec292ff-957b-4f92-9564-e47d72e4bf87', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__bec292ff-957b-4f92-9564-e47d72e4bf87_0.png', '2021-05-29 15:57:56', '2021-05-29 15:57:50', '', '', 2),
(18, '34677d91-9be9-4e72-9877-14b9de142a94', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__34677d91-9be9-4e72-9877-14b9de142a94_0.png', '2021-05-29 15:59:07', '2021-05-29 15:59:03', '', '', 2),
(19, '73f475e4-720c-412d-99c6-e246b1874d70', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__73f475e4-720c-412d-99c6-e246b1874d70_0.png', '2021-05-29 16:02:24', '2021-05-29 16:02:21', '', '', 2),
(20, '972b548e-aebb-422a-9100-1dd109198a95', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__972b548e-aebb-422a-9100-1dd109198a95_0.png', '2021-05-29 16:03:30', '2021-05-29 16:03:27', '', '', 2),
(21, '59e98772-0afc-4597-a346-8cd13f5c5782', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__59e98772-0afc-4597-a346-8cd13f5c5782_0.png', '2021-05-29 16:04:35', '2021-05-29 16:04:30', '', '', 2),
(22, 'b7d2143e-7e28-4427-b585-cb5ecfd9cc08', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__b7d2143e-7e28-4427-b585-cb5ecfd9cc08_0.png', '2021-05-29 16:06:06', '2021-05-29 16:06:03', '', '', 2),
(23, '21b78ada-b763-4816-802d-352f610847c6', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__21b78ada-b763-4816-802d-352f610847c6_0.png', '2021-05-29 16:07:09', '2021-05-29 16:07:05', '', '', 2),
(24, '9b62578d-046c-485c-9114-de8ebb5daf34', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__9b62578d-046c-485c-9114-de8ebb5daf34_0.png', '2021-05-29 16:08:06', '2021-05-29 16:08:03', '', '', 2),
(25, '6f86e4b2-c455-492a-be8e-9417f8f69080', '', 'DEPARTMENT', '../imgserver/uploads/attachments/pcm__6f86e4b2-c455-492a-be8e-9417f8f69080_0.png', '2021-05-29 16:09:42', '2021-05-29 16:09:38', '', '', 2),
(26, '61dba6f1-26e9-4421-88e2-581bee350436', '', 'PGM', '../imgserver/uploads/attachments/pcm__61dba6f1-26e9-4421-88e2-581bee350436_0.png', '2021-05-29 16:17:54', '2021-05-29 16:17:46', '', '', 2),
(27, 'b4ef2a08-ad79-4a6f-987f-ed2f35c70049', '', 'PROJECT', '../imgserver/uploads/attachments/pcm__b4ef2a08-ad79-4a6f-987f-ed2f35c70049_0.png', '2021-05-29 16:21:54', '2021-05-29 16:21:51', '', '', 2),
(28, '386973c4-f29d-48b3-9024-e354845217af', '', 'MEMBER', '../imgserver/uploads/attachments/pcm__386973c4-f29d-48b3-9024-e354845217af_0.png', '2021-05-29 16:27:36', '2021-05-29 16:27:31', '', '', 2),
(29, '34e3c219-8730-45a4-abe7-f18376b20806', '', 'ACTIVITY', '../imgserver/uploads/attachments/pcm__34e3c219-8730-45a4-abe7-f18376b20806_0.png', '2021-05-29 16:32:36', '2021-05-29 16:32:32', '', '', 2),
(30, 'e0a119a6-0147-4baa-869c-f7b39067e174', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__e0a119a6-0147-4baa-869c-f7b39067e174_0.png', '2021-05-29 16:38:07', '2021-05-29 16:38:04', '', '', 2),
(31, '14e788f2-4e40-446c-b5e0-ab963e39a6a0', '', 'EVENT', '../imgserver/uploads/attachments/pcm__14e788f2-4e40-446c-b5e0-ab963e39a6a0_0.png', '2021-05-29 17:48:16', '2021-05-29 17:48:14', '', '', 2),
(32, '68878cba-e5d5-451f-9786-b6b26b971594', '', 'NEWS', '../imgserver/uploads/attachments/pcm__68878cba-e5d5-451f-9786-b6b26b971594_0.png', '2021-05-29 17:51:42', '2021-05-29 17:51:39', '', '', 2),
(33, '2f207f67-687e-446b-8a68-aa6aee09d3d4', '', 'NEWS', '../imgserver/uploads/attachments/pcm__2f207f67-687e-446b-8a68-aa6aee09d3d4_0.png', '2021-05-29 17:55:20', '2021-05-29 17:55:16', '', '', 2),
(34, 'f0ec524e-5496-49fe-85f9-f250abd6a5e2', '', 'NEWS', '../imgserver/uploads/attachments/pcm__f0ec524e-5496-49fe-85f9-f250abd6a5e2_0.png', '2021-05-31 18:04:45', '2021-05-31 18:04:35', '', '', 2),
(35, '1b0f4850-3896-4112-ae82-f4b49adbb256', '', 'EVENT', '../imgserver/uploads/attachments/pcm__1b0f4850-3896-4112-ae82-f4b49adbb256_0.png', '2021-05-31 18:08:30', '2021-05-31 18:08:27', '', '', 2),
(36, 'feb48b5a-1981-4a70-b49d-192c4ae19c1a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__feb48b5a-1981-4a70-b49d-192c4ae19c1a_0.png', '2021-06-10 11:32:56', '2021-06-10 11:32:47', '', '', 2),
(37, '1276fd1b-618e-4f48-8869-8ab6ad212a13', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__1276fd1b-618e-4f48-8869-8ab6ad212a13_0.png', '2021-06-10 11:38:29', '2021-06-10 11:38:17', '', '', 2),
(38, 'd3653714-eea9-483a-b44d-3b19e74b8f91', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__d3653714-eea9-483a-b44d-3b19e74b8f91_0.png', '2021-06-10 13:37:09', '2021-06-10 13:36:58', '', '', 2),
(39, 'c4e06e69-2679-4fc3-a3d1-bc14920ac604', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__c4e06e69-2679-4fc3-a3d1-bc14920ac604_0.png', '2021-06-10 13:39:26', '2021-06-10 13:39:18', '', '', 2),
(40, 'cf13c56e-43c7-412c-9997-c99df2e37bd2', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__cf13c56e-43c7-412c-9997-c99df2e37bd2_0.png', '2021-06-10 13:41:50', '2021-06-10 13:41:40', '', '', 2),
(41, '6dc1e0dd-b7b9-4a40-8c7a-bf352c916c99', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6dc1e0dd-b7b9-4a40-8c7a-bf352c916c99_0.png', '2021-06-10 13:45:57', '2021-06-10 13:45:50', '', '', 2),
(42, '280c811d-4e2e-432d-a382-d65e4f9ebaf4', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__280c811d-4e2e-432d-a382-d65e4f9ebaf4_0.png', '2021-06-10 13:47:14', '2021-06-10 13:47:04', '', '', 2),
(43, '1c7184ed-ce5b-4324-9842-c3ef65442ee6', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__1c7184ed-ce5b-4324-9842-c3ef65442ee6_0.png', '2021-06-10 13:48:58', '2021-06-10 13:48:52', '', '', 2),
(44, '95361b5f-667c-42ec-a86a-7043bdcbc152', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__95361b5f-667c-42ec-a86a-7043bdcbc152_0.png', '2021-06-10 13:51:17', '2021-06-10 13:50:24', '', '', 2),
(45, 'd868c32a-34c3-469f-9922-264d3de3d38a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__d868c32a-34c3-469f-9922-264d3de3d38a_0.png', '2021-06-10 13:55:43', '2021-06-10 13:55:21', '', '', 2),
(46, '4ca33d4c-2d9a-45c2-967f-23965508cc62', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__4ca33d4c-2d9a-45c2-967f-23965508cc62_0.png', '2021-06-10 13:58:06', '2021-06-10 13:57:59', '', '', 2),
(47, '0de003de-09db-4fed-b1b3-e2dc92d7812d', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__0de003de-09db-4fed-b1b3-e2dc92d7812d_0.png', '2021-06-10 14:00:32', '2021-06-10 14:00:19', '', '', 2),
(48, '2d7a76c3-4c95-4535-8358-a70fc6db82e4', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__2d7a76c3-4c95-4535-8358-a70fc6db82e4_0.png', '2021-06-10 14:04:41', '2021-06-10 14:04:32', '', '', 2),
(49, '78daf484-29aa-4823-a737-8714e4c8ccdf', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__78daf484-29aa-4823-a737-8714e4c8ccdf_0.png', '2021-06-10 14:06:10', '2021-06-10 14:05:55', '', '', 2),
(50, 'b7b14727-2f31-438e-bd47-c85784fee9a9', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__b7b14727-2f31-438e-bd47-c85784fee9a9_0.png', '2021-06-10 14:08:38', '2021-06-10 14:08:08', '', '', 2),
(51, '6e3ea9e0-b9c6-4d46-a63a-5878922516ab', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6e3ea9e0-b9c6-4d46-a63a-5878922516ab_0.png', '2021-06-10 14:12:17', '2021-06-10 14:11:47', '', '', 2),
(52, 'c66681ea-3a51-47a1-88c8-e765c872e93f', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__c66681ea-3a51-47a1-88c8-e765c872e93f_0.png', '2021-06-10 14:14:18', '2021-06-10 14:14:12', '', '', 2),
(53, 'd94107d1-217d-4b4f-ba08-e3879ed7038b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__d94107d1-217d-4b4f-ba08-e3879ed7038b_0.png', '2021-06-10 14:16:16', '2021-06-10 14:16:00', '', '', 2),
(54, 'cdee951b-f983-4753-abec-e816076d66ad', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__cdee951b-f983-4753-abec-e816076d66ad_0.png', '2021-06-10 14:18:11', '2021-06-10 14:17:57', '', '', 2),
(55, 'b0e3250d-9d8a-476f-a9b8-243fe0080a11', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__b0e3250d-9d8a-476f-a9b8-243fe0080a11_0.png', '2021-06-10 14:20:10', '2021-06-10 14:20:04', '', '', 2),
(56, 'e2acb01a-2f81-48a2-b442-9faa123e0af4', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__e2acb01a-2f81-48a2-b442-9faa123e0af4_0.png', '2021-06-10 14:22:47', '2021-06-10 14:22:17', '', '', 2),
(57, '9c8879a5-8d1c-4487-a8b2-304ea8fcd3d5', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__9c8879a5-8d1c-4487-a8b2-304ea8fcd3d5_0.png', '2021-06-10 14:24:53', '2021-06-10 14:24:46', '', '', 2),
(58, '0f3dbd6a-227a-4c88-aa48-683b4865a052', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__0f3dbd6a-227a-4c88-aa48-683b4865a052_0.png', '2021-06-10 14:34:03', '2021-06-10 14:26:52', '', '', 2),
(59, '9048eca8-7026-4ada-aa79-8ea6b88f816b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__9048eca8-7026-4ada-aa79-8ea6b88f816b_0.png', '2021-06-10 14:43:47', '2021-06-10 14:40:44', '', '', 2),
(60, '59a507c3-3fb3-441b-ab7c-b4ba2f2181db', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__59a507c3-3fb3-441b-ab7c-b4ba2f2181db_0.png', '2021-06-10 14:46:56', '2021-06-10 14:46:46', '', '', 2),
(61, '96a93217-3d6f-4029-a8c8-75d861fe5739', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__96a93217-3d6f-4029-a8c8-75d861fe5739_0.png', '2021-06-10 14:49:35', '2021-06-10 14:49:21', '', '', 2),
(62, 'd771613a-1ad5-492b-bb57-a1def8addcbf', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__d771613a-1ad5-492b-bb57-a1def8addcbf_0.png', '2021-06-10 14:53:39', '2021-06-10 14:52:06', '', '', 2),
(63, 'ef78cc12-302c-426f-9f8a-11010ebcdcda', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__ef78cc12-302c-426f-9f8a-11010ebcdcda_0.png', '2021-06-10 14:59:17', '2021-06-10 14:59:07', '', '', 2),
(64, '78e50aed-8da8-4fe8-a001-70a7ddf313ae', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__78e50aed-8da8-4fe8-a001-70a7ddf313ae_0.png', '2021-06-10 15:02:45', '2021-06-10 15:02:18', '', '', 2),
(65, '5e1d677e-cea1-413d-9678-92877afd8a36', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__5e1d677e-cea1-413d-9678-92877afd8a36_0.png', '2021-06-10 15:08:56', '2021-06-10 15:08:22', '', '', 2),
(66, '4c595e47-b0bd-4187-9576-4f2a56d00160', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__4c595e47-b0bd-4187-9576-4f2a56d00160_0.png', '2021-06-10 15:11:35', '2021-06-10 15:11:24', '', '', 2),
(67, '05a188fd-7783-49da-bacc-2353b5c567f1', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__05a188fd-7783-49da-bacc-2353b5c567f1_0.png', '2021-06-10 15:14:56', '2021-06-10 15:14:28', '', '', 2),
(68, '016dcc95-e49a-4019-bfbe-5503f0ea0503', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__016dcc95-e49a-4019-bfbe-5503f0ea0503_0.png', '2021-06-10 15:18:39', '2021-06-10 15:18:00', '', '', 2),
(69, 'eb031609-24b0-49d1-b6aa-49949cddd0b6', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__eb031609-24b0-49d1-b6aa-49949cddd0b6_0.png', '2021-06-10 15:23:16', '2021-06-10 15:21:54', '', '', 2),
(70, '914ddbea-5cb6-4bf3-8f12-e5786389edea', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__914ddbea-5cb6-4bf3-8f12-e5786389edea_0.png', '2021-06-10 15:25:40', '2021-06-10 15:24:59', '', '', 2),
(71, '6b8ee0fe-b292-4b40-9655-b4d3459f652b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6b8ee0fe-b292-4b40-9655-b4d3459f652b_0.png', '2021-06-10 15:30:17', '2021-06-10 15:28:53', '', '', 2),
(72, '8aaae153-a814-49d8-b238-4e8e9ab803ff', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__8aaae153-a814-49d8-b238-4e8e9ab803ff_0.png', '2021-06-10 15:40:11', '2021-06-10 15:39:37', '', '', 2),
(73, '15428bd8-a22a-45ac-a573-3b816e8f37ff', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__15428bd8-a22a-45ac-a573-3b816e8f37ff_0.png', '2021-06-10 15:43:08', '2021-06-10 15:42:34', '', '', 2),
(74, '3edada4e-b2fd-40d7-ac93-144adbf78298', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__3edada4e-b2fd-40d7-ac93-144adbf78298_0.png', '2021-06-10 15:45:45', '2021-06-10 15:45:34', '', '', 2),
(75, '6ce58aca-7280-44f7-9c1c-a6b2667c65a4', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6ce58aca-7280-44f7-9c1c-a6b2667c65a4_0.png', '2021-06-10 15:47:41', '2021-06-10 15:47:34', '', '', 2),
(76, 'f6976c23-e3a7-40eb-8781-d9759b9e3524', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__f6976c23-e3a7-40eb-8781-d9759b9e3524_0.png', '2021-06-10 15:51:05', '2021-06-10 15:50:00', '', '', 2),
(77, 'ec727e2f-c88b-4ec7-bae1-3b5dc298b9fc', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__ec727e2f-c88b-4ec7-bae1-3b5dc298b9fc_0.png', '2021-06-10 15:52:41', '2021-06-10 15:52:33', '', '', 2),
(78, 'd1976f4e-0a66-4448-a50c-a5fbb65dafcc', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__d1976f4e-0a66-4448-a50c-a5fbb65dafcc_0.png', '2021-06-10 15:57:38', '2021-06-10 15:57:08', '', '', 2),
(79, '8b37b822-f56d-41bd-a133-ccd90a3ea6e0', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__8b37b822-f56d-41bd-a133-ccd90a3ea6e0_0.png', '2021-06-10 16:03:15', '2021-06-10 15:59:40', '', '', 2),
(80, '9e7dd01e-8662-4118-b0bc-dcf56784019a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__9e7dd01e-8662-4118-b0bc-dcf56784019a_0.png', '2021-06-10 16:04:58', '2021-06-10 16:04:50', '', '', 2),
(81, '354fa543-1f29-4544-a415-869f638ca778', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__354fa543-1f29-4544-a415-869f638ca778_0.png', '2021-06-10 16:06:22', '2021-06-10 16:05:41', '', '', 2),
(82, 'be816cea-a89e-43ca-aefd-32a26b894ba7', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__be816cea-a89e-43ca-aefd-32a26b894ba7_0.png', '2021-06-10 16:08:17', '2021-06-10 16:08:01', '', '', 2),
(83, 'f40b8b17-155c-473a-a44b-de61d4080464', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__f40b8b17-155c-473a-a44b-de61d4080464_0.png', '2021-06-10 16:09:28', '2021-06-10 16:09:22', '', '', 2),
(84, '76ab7701-f212-4d16-b72b-f3268c89b7a0', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__76ab7701-f212-4d16-b72b-f3268c89b7a0_0.png', '2021-06-10 16:10:43', '2021-06-10 16:10:36', '', '', 2),
(85, '7ec752fc-2091-4533-863f-ee61e65b05f9', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__7ec752fc-2091-4533-863f-ee61e65b05f9_0.png', '2021-06-10 16:13:07', '2021-06-10 16:12:02', '', '', 2),
(86, 'dcbb7bd9-94c1-4125-9755-cceea60536c8', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__dcbb7bd9-94c1-4125-9755-cceea60536c8_0.png', '2021-06-10 16:15:34', '2021-06-10 16:14:43', '', '', 2),
(87, '6427ac1c-d4be-432f-95da-591f19aad3d6', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6427ac1c-d4be-432f-95da-591f19aad3d6_0.png', '2021-06-10 16:16:44', '2021-06-10 16:16:38', '', '', 2),
(88, '305f0c0d-42bb-473c-ae96-dab31f4140e6', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__305f0c0d-42bb-473c-ae96-dab31f4140e6_0.png', '2021-06-10 16:17:48', '2021-06-10 16:17:43', '', '', 2),
(89, '6f19bb61-bc11-4dd0-aaea-2172adccdd61', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6f19bb61-bc11-4dd0-aaea-2172adccdd61_0.png', '2021-06-10 16:23:13', '2021-06-10 16:22:30', '', '', 2),
(90, 'e88da08f-b00e-415b-bcae-f964529b9ccd', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__e88da08f-b00e-415b-bcae-f964529b9ccd_0.png', '2021-06-10 16:25:06', '2021-06-10 16:24:56', '', '', 2),
(91, '1bc75669-ace1-4872-8d0e-ec96198008db', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__1bc75669-ace1-4872-8d0e-ec96198008db_0.png', '2021-06-10 16:28:45', '2021-06-10 16:28:24', '', '', 2),
(92, '8973842b-368c-4429-b0ae-35645f24db0a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__8973842b-368c-4429-b0ae-35645f24db0a_0.png', '2021-06-10 16:31:31', '2021-06-10 16:31:20', '', '', 2),
(93, '659acf04-ef38-448b-a8d3-b58e1678b14b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__659acf04-ef38-448b-a8d3-b58e1678b14b_0.png', '2021-06-10 16:33:14', '2021-06-10 16:33:06', '', '', 2),
(94, '6b23b56d-f935-49c2-a728-718164ee82a4', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6b23b56d-f935-49c2-a728-718164ee82a4_0.png', '2021-06-10 16:35:24', '2021-06-10 16:35:18', '', '', 2),
(95, 'acff984d-e68a-4769-8e24-b59e77a5fb13', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__acff984d-e68a-4769-8e24-b59e77a5fb13_0.png', '2021-06-10 16:37:43', '2021-06-10 16:37:35', '', '', 2),
(96, '5d0ad957-2e2e-4113-b3d7-3ab9562afb30', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__5d0ad957-2e2e-4113-b3d7-3ab9562afb30_0.png', '2021-06-10 16:42:44', '2021-06-10 16:42:36', '', '', 2),
(97, '20d211a1-5537-42a5-8243-a4fcdce1bc3a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__20d211a1-5537-42a5-8243-a4fcdce1bc3a_0.png', '2021-06-10 16:46:59', '2021-06-10 16:46:07', '', '', 2),
(98, '50955d7d-c169-47f7-b5e4-6e985239760a', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__50955d7d-c169-47f7-b5e4-6e985239760a_0.png', '2021-06-10 16:48:52', '2021-06-10 16:48:38', '', '', 2),
(99, '14e84d06-5e6d-4cdb-86a0-356772d9d73e', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__14e84d06-5e6d-4cdb-86a0-356772d9d73e_0.png', '2021-06-10 16:51:34', '2021-06-10 16:51:12', '', '', 2),
(100, '9b2f7bfe-3778-471e-bb83-42fcd05fd24b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__9b2f7bfe-3778-471e-bb83-42fcd05fd24b_0.png', '2021-06-10 16:54:17', '2021-06-10 16:54:02', '', '', 2),
(101, 'b06ae014-b4b2-4896-b2d6-40d02320d69c', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__b06ae014-b4b2-4896-b2d6-40d02320d69c_0.png', '2021-06-10 16:56:12', '2021-06-10 16:55:51', '', '', 2),
(102, '2ff18d00-30c6-4180-af91-f7749b9ffa71', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__2ff18d00-30c6-4180-af91-f7749b9ffa71_0.png', '2021-06-10 16:58:16', '2021-06-10 16:58:01', '', '', 2),
(103, 'e8e178c4-9a16-45e9-8a10-15d460db33a8', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__e8e178c4-9a16-45e9-8a10-15d460db33a8_0.png', '2021-06-10 17:00:19', '2021-06-10 16:59:57', '', '', 2),
(104, 'a0b74000-5710-42cb-bef4-c394c8e11dc6', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__a0b74000-5710-42cb-bef4-c394c8e11dc6_0.png', '2021-06-10 17:11:27', '2021-06-10 17:10:47', '', '', 2),
(105, '3b315b4c-6c41-46fd-8f34-bae8035c5cff', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__3b315b4c-6c41-46fd-8f34-bae8035c5cff_0.png', '2021-06-10 17:13:37', '2021-06-10 17:13:02', '', '', 2),
(106, 'bcb6046c-1586-4a82-8563-10d2c11a7081', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__bcb6046c-1586-4a82-8563-10d2c11a7081_0.png', '2021-06-10 17:16:13', '2021-06-10 17:15:53', '', '', 2),
(107, '4eeb3347-169b-443a-a843-e7805ea2ae15', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__4eeb3347-169b-443a-a843-e7805ea2ae15_0.png', '2021-06-10 17:18:25', '2021-06-10 17:18:05', '', '', 2),
(108, '5e2bb2d3-9746-474c-8b17-5df26b59ca8e', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__5e2bb2d3-9746-474c-8b17-5df26b59ca8e_0.png', '2021-06-10 17:20:13', '2021-06-10 17:20:05', '', '', 2),
(109, '66e3c942-6588-4c00-b06b-bd9a602e356b', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__66e3c942-6588-4c00-b06b-bd9a602e356b_0.png', '2021-06-10 17:22:43', '2021-06-10 17:22:05', '', '', 2),
(110, '576e4d0f-a2df-447a-bd1b-d156fb62dd23', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__576e4d0f-a2df-447a-bd1b-d156fb62dd23_0.png', '2021-06-10 17:24:15', '2021-06-10 17:24:08', '', '', 2),
(111, '06d41700-fa29-4d44-8c5c-805083ff7993', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__06d41700-fa29-4d44-8c5c-805083ff7993_0.png', '2021-06-10 17:25:40', '2021-06-10 17:25:32', '', '', 2),
(112, '3b849bfa-c0da-4d37-9065-f7ab50cae03e', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__3b849bfa-c0da-4d37-9065-f7ab50cae03e_0.png', '2021-06-10 17:27:24', '2021-06-10 17:27:16', '', '', 2),
(113, '2bd7e7e1-c3b7-4dfc-bcd7-25da1f518720', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__2bd7e7e1-c3b7-4dfc-bcd7-25da1f518720_0.png', '2021-06-10 17:29:02', '2021-06-10 17:28:56', '', '', 2),
(114, 'ed125e5e-b9c3-4d16-8b71-72b9e2f52e6c', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__ed125e5e-b9c3-4d16-8b71-72b9e2f52e6c_0.png', '2021-06-10 17:34:19', '2021-06-10 17:34:13', '', '', 2),
(115, '1d7b9ad4-0c32-426f-a919-3169070105f8', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__1d7b9ad4-0c32-426f-a919-3169070105f8_0.png', '2021-06-10 17:36:14', '2021-06-10 17:35:42', '', '', 2),
(116, '6eb41cf1-3b12-4cf8-b791-19bab1cf43bf', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__6eb41cf1-3b12-4cf8-b791-19bab1cf43bf_0.png', '2021-06-10 17:38:14', '2021-06-10 17:37:59', '', '', 2),
(117, 'c37e56d1-8df0-4471-8da2-93a1818249ec', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__c37e56d1-8df0-4471-8da2-93a1818249ec_0.png', '2021-06-10 17:39:36', '2021-06-10 17:39:27', '', '', 2),
(118, 'ec820851-cd27-47aa-93e7-5d1f43e65216', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__ec820851-cd27-47aa-93e7-5d1f43e65216_0.png', '2021-06-10 17:41:34', '2021-06-10 17:41:27', '', '', 2),
(119, '10148c2e-5c8e-4bd0-ab0e-b20cf226f58e', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__10148c2e-5c8e-4bd0-ab0e-b20cf226f58e_0.png', '2021-06-10 17:43:22', '2021-06-10 17:43:16', '', '', 2),
(120, '481cde4d-57c3-4fc3-95a9-8fc6cebe2ac0', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__481cde4d-57c3-4fc3-95a9-8fc6cebe2ac0_0.png', '2021-06-10 17:44:41', '2021-06-10 17:44:33', '', '', 2),
(121, 'e23a9017-2478-4ff2-96b5-5e9978fcb528', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__e23a9017-2478-4ff2-96b5-5e9978fcb528_0.png', '2021-06-10 17:46:06', '2021-06-10 17:45:57', '', '', 2),
(122, 'd38bbf5f-e561-43d4-aa83-aa66569b57f7', '', 'EVENT', '../imgserver/uploads/attachments/pcm__d38bbf5f-e561-43d4-aa83-aa66569b57f7_0.png', '2021-06-21 11:51:39', '2021-06-21 11:51:35', '', '', 2),
(123, 'e64e6246-c909-42ee-8f71-594a0c6002fb', '', 'EVENT', '../imgserver/uploads/attachments/pcm__e64e6246-c909-42ee-8f71-594a0c6002fb_0.png', '2021-06-21 11:52:54', '2021-06-21 11:52:52', '', '', 2),
(124, 'e4321677-1860-4b10-885d-718f2d178b38', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__e4321677-1860-4b10-885d-718f2d178b38_0.png', '2021-07-20 04:24:27', '2021-07-20 03:59:21', '', '', 2),
(125, 'd25982f8-97b4-45e7-8f9a-a2bc70dd3718', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__d25982f8-97b4-45e7-8f9a-a2bc70dd3718_0.png', '2021-07-20 04:25:08', '2021-07-20 04:24:55', '', '', 2),
(126, '6841a814-b892-4441-8ffb-21835ca310c2', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__6841a814-b892-4441-8ffb-21835ca310c2_0.png', '2021-07-20 07:20:27', '2021-07-20 07:20:22', '', '', 2),
(127, '7c89801b-5689-4b2f-9571-168268360aa8', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__7c89801b-5689-4b2f-9571-168268360aa8_0.png', '2021-07-20 07:21:18', '2021-07-20 07:21:16', '', '', 2),
(128, '3c37bcd6-d738-46fd-8a71-7742348d4663', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__3c37bcd6-d738-46fd-8a71-7742348d4663_0.png', '2021-07-20 07:21:40', '2021-07-20 07:21:37', '', '', 2),
(129, 'e2212175-1b69-45cf-a79b-cafedb3d5c32', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__e2212175-1b69-45cf-a79b-cafedb3d5c32_0.png', '2021-07-20 07:28:53', '2021-07-20 07:28:35', '', '', 2),
(130, '3529101b-7bde-4491-9c46-faccdb620688', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__3529101b-7bde-4491-9c46-faccdb620688_0.png', '2021-07-20 07:29:47', '2021-07-20 07:29:31', '', '', 2),
(131, 'e0e653c1-239d-4772-9db3-34730f644996', '', 'GALLERY', '../imgserver/uploads/attachments/pcm__e0e653c1-239d-4772-9db3-34730f644996_0.png', '2021-07-21 05:58:31', '2021-07-21 05:42:49', '', '', 2),
(132, 'b00f8b61-17cb-4eae-a179-e84e290bef0d', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__b00f8b61-17cb-4eae-a179-e84e290bef0d_0.png', '2021-07-21 05:58:31', '2021-07-21 05:58:28', '', '', 2),
(133, '9e0ac7f5-0467-4000-a71a-e7114d363710', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__9e0ac7f5-0467-4000-a71a-e7114d363710_0.png', '2021-07-21 06:00:46', '2021-07-21 06:00:36', '', '', 2),
(134, 'f4aa4473-89db-4cd4-aa85-e5be51c6abb6', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__f4aa4473-89db-4cd4-aa85-e5be51c6abb6_0.png', '2021-07-21 06:10:14', '2021-07-21 06:10:10', '', '', 2),
(135, 'ecd952e4-ad3d-419c-a574-f7eb401ac5de', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__ecd952e4-ad3d-419c-a574-f7eb401ac5de_0.png', '2021-07-21 06:16:29', '2021-07-21 06:16:04', '', '', 2),
(136, 'c290f63d-7c05-44b2-9724-8071ffec0350', '', 'FACULTY', '../imgserver/uploads/attachments/pcm__c290f63d-7c05-44b2-9724-8071ffec0350_0.png', '2021-07-21 07:27:51', '2021-07-21 07:09:38', '', '', 2),
(137, '4f98781f-a01d-410a-9319-65dc0c3616b8', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__4f98781f-a01d-410a-9319-65dc0c3616b8_0.png', '2021-07-21 07:36:11', '2021-07-21 07:36:08', '', '', 2),
(138, 'e63003f6-7211-48a1-9dc0-d55be9048679', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__e63003f6-7211-48a1-9dc0-d55be9048679_0.png', '2021-07-21 07:36:21', '2021-07-21 07:36:19', '', '', 2),
(139, '4eeacce1-6895-4931-8451-9017b164c8c2', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__4eeacce1-6895-4931-8451-9017b164c8c2_0.png', '2021-07-21 07:43:38', '2021-07-21 07:43:34', '', '', 2),
(140, 'c53c07a4-b514-4c27-a951-d4eb1b169979', '', 'SLIDER', '../imgserver/uploads/attachments/pcm__c53c07a4-b514-4c27-a951-d4eb1b169979_0.png', '2021-07-21 09:29:30', '2021-07-21 09:29:17', '', '', 2),
(141, '931c6953-4370-4e3e-9b47-aeb401fd70cf', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__931c6953-4370-4e3e-9b47-aeb401fd70cf_0.png', '2021-07-21 10:06:53', '2021-07-21 10:06:51', '', '', 2),
(142, '76ad5da8-96f7-49ea-9710-43adf6e338b3', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__76ad5da8-96f7-49ea-9710-43adf6e338b3_0.png', '2021-07-21 10:07:24', '2021-07-21 10:07:15', '', '', 2),
(143, 'a596eae7-5b26-44a6-90e7-fae35976ee54', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__a596eae7-5b26-44a6-90e7-fae35976ee54_0.png', '2021-07-21 10:08:14', '2021-07-21 10:08:12', '', '', 2),
(144, '15993fbb-6c47-4093-9b20-2fe736846dee', '', 'M_COMMITTEE', '../imgserver/uploads/attachments/pcm__15993fbb-6c47-4093-9b20-2fe736846dee_0.png', '2021-07-21 10:27:22', '2021-07-21 10:27:19', '', '', 2),
(145, '49f4da01-5bd6-4d4a-a0ca-dbfb6727f956', '', 'TESTIMONIAL', 'http://localhost/deepanjali/imgserver/uploads/attachments/pcm__49f4da01-5bd6-4d4a-a0ca-dbfb6727f956_0.png', '2022-01-26 11:12:08', '2022-01-26 11:08:46', '', '', 0),
(146, '4e647459-0b85-44a9-b68d-758b661b5013', '', 'TESTIMONIAL', 'http://localhost/deepanjali/imgserver/uploads/attachments/pcm__4e647459-0b85-44a9-b68d-758b661b5013_0.png', '2022-01-26 11:34:44', '2022-01-26 11:20:17', '', '', 2),
(147, 'c8f31cb1-d6f2-45fb-b40f-a4a3fffba8f9', '', 'TESTIMONIAL', 'http://localhost/deepanjali/imgserver/uploads/attachments/pcm__c8f31cb1-d6f2-45fb-b40f-a4a3fffba8f9_0.png', '2022-02-04 06:20:31', '2022-02-04 06:20:29', '', '', 2),
(148, '4b6d4588-e85e-4a87-ab4b-af3125be0025', '', 'TESTIMONIAL', 'http://localhost/deepanjali/imgserver/uploads/attachments/pcm__4b6d4588-e85e-4a87-ab4b-af3125be0025_0.png', '2022-02-04 06:20:52', '2022-02-04 06:20:47', '', '', 2),
(149, '4ecdaf69-1c5a-4461-b00f-0cb4dcf33cef', '', 'BLOG', 'http://localhost/pm/imgserver/uploads/attachments/pcm__4ecdaf69-1c5a-4461-b00f-0cb4dcf33cef_0.png', '2022-02-26 06:02:58', '2022-02-26 05:32:08', '', '', 2),
(150, 'bede3e12-d026-4000-83ae-a5e20d379312', '', 'BLOG', 'http://localhost/pm/imgserver/uploads/attachments/pcm__bede3e12-d026-4000-83ae-a5e20d379312_0.png', '2022-02-26 06:10:46', '2022-02-26 06:09:52', '', '', 2),
(151, 'b106247d-57b9-4e3b-910e-b5ac04943bc8', '', 'BLOG', 'http://localhost/pm/imgserver/uploads/attachments/pcm__b106247d-57b9-4e3b-910e-b5ac04943bc8_0.png', '2022-02-26 06:13:47', '2022-02-26 06:13:39', '', '', 2),
(152, '11c124d6-c652-4339-bb6a-a9af24bec530', '', 'BLOG', 'http://localhost/pm/imgserver/uploads/attachments/pcm__11c124d6-c652-4339-bb6a-a9af24bec530_0.png', '2022-02-26 07:34:26', '2022-02-26 07:34:25', '', '', 2),
(153, '5e988194-bf33-4e1a-af6a-1b1c285f7226', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__5e988194-bf33-4e1a-af6a-1b1c285f7226_0.png', '2022-02-26 08:51:57', '2022-02-26 08:51:55', '', '', 2),
(154, 'eb35bcf4-3a34-4c06-a4d6-2cee42a3dafa', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__eb35bcf4-3a34-4c06-a4d6-2cee42a3dafa_0.png', '2022-02-26 08:52:07', '2022-02-26 08:52:01', '', '', 2),
(155, 'cf4862df-9b2b-464a-b5dd-116c85ae79f3', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__cf4862df-9b2b-464a-b5dd-116c85ae79f3_0.png', '2022-02-26 08:52:18', '2022-02-26 08:52:12', '', '', 2),
(156, '49573d28-f32e-4c1a-8a3a-0a4d301a997b', '', 'BLOG', 'http://localhost/pm/imgserver/uploads/attachments/pcm__49573d28-f32e-4c1a-8a3a-0a4d301a997b_0.png', '2022-03-01 01:58:29', '2022-03-01 01:56:24', '', '', 2),
(157, '44313577-0a6e-4881-aadc-74b5b43fe401', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__44313577-0a6e-4881-aadc-74b5b43fe401_0.png', '2022-03-01 03:36:18', '2022-03-01 03:36:16', '', '', 2),
(158, '2f964844-27ef-4426-b83c-fed824954bd5', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__2f964844-27ef-4426-b83c-fed824954bd5_0.png', '2022-03-01 03:36:33', '2022-03-01 03:36:32', '', '', 2),
(159, '0e62d0c6-5ce7-456b-88a2-5ee2f835fde7', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__0e62d0c6-5ce7-456b-88a2-5ee2f835fde7_0.png', '2022-03-01 03:36:39', '2022-03-01 03:36:37', '', '', 2),
(160, '4f5885f9-123c-4780-936b-0a692c7eb683', '', 'GALLERYIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__4f5885f9-123c-4780-936b-0a692c7eb683_0.png', '2022-03-03 01:24:50', '2022-03-01 04:42:17', '', '', 2),
(161, '4fa2de56-0300-4140-a98e-5df605ef835a', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__4fa2de56-0300-4140-a98e-5df605ef835a_0.png', '2022-03-01 04:43:30', '2022-03-01 04:43:29', '', '', 2),
(162, '483f2d2f-683d-4230-bb6a-cf8eb03d36c4', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__483f2d2f-683d-4230-bb6a-cf8eb03d36c4_0.png', '2022-03-01 04:50:56', '2022-03-01 04:50:54', '', '', 2),
(163, '76560378-abb4-4776-a18c-2b454eb82cfa', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__76560378-abb4-4776-a18c-2b454eb82cfa_0.png', '2022-03-01 04:51:02', '2022-03-01 04:51:01', '', '', 2),
(164, '3a87fd32-f830-4e11-a577-5e47ed0bf7da', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__3a87fd32-f830-4e11-a577-5e47ed0bf7da_0.png', '2022-03-01 04:51:17', '2022-03-01 04:51:15', '', '', 2),
(165, '5cba84d2-4741-4684-8be2-bd34873bf3de', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__5cba84d2-4741-4684-8be2-bd34873bf3de_0.png', '2022-03-01 05:06:27', '2022-03-01 05:06:22', '', '', 2),
(166, 'c6f49cfa-494e-47bd-8d0e-f4cf370fd861', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__c6f49cfa-494e-47bd-8d0e-f4cf370fd861_0.png', '2022-03-01 05:07:42', '2022-03-01 05:07:39', '', '', 2),
(167, 'c7e9125c-46b9-4cbd-a892-9bac7eadab24', '', 'SLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__c7e9125c-46b9-4cbd-a892-9bac7eadab24_0.png', '2022-03-01 10:44:57', '2022-03-01 10:44:54', '', '', 2),
(168, 'd99dd0ef-3d7a-4357-86ad-c2bee2830b7f', '', 'RESULTSLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__d99dd0ef-3d7a-4357-86ad-c2bee2830b7f_0.png', '2022-03-01 11:05:08', '2022-03-01 11:05:05', '', '', 2),
(169, '6fdc186e-27d8-455b-892f-1e581b6dd1af', '', 'RESULTSLIDERIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__6fdc186e-27d8-455b-892f-1e581b6dd1af_0.png', '2022-03-01 11:06:51', '2022-03-01 11:06:49', '', '', 2),
(170, '23f8ff76-20b3-44d8-9721-74c600249209', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__23f8ff76-20b3-44d8-9721-74c600249209_0.png', '2022-03-03 01:57:32', '2022-03-03 01:57:01', '', '', 2),
(171, '1d2494af-030b-4f40-add5-38a30a860373', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__1d2494af-030b-4f40-add5-38a30a860373_0.png', '2022-03-03 01:57:43', '2022-03-03 01:57:41', '', '', 2),
(172, '0b3fa233-36d4-40a1-9c6c-6784de800bd3', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__0b3fa233-36d4-40a1-9c6c-6784de800bd3_0.png', '2022-03-03 01:57:53', '2022-03-03 01:57:52', '', '', 2),
(173, '47ad4c92-ac03-42fd-a5db-3cbb94a01c5e', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__47ad4c92-ac03-42fd-a5db-3cbb94a01c5e_0.png', '2022-03-03 01:59:38', '2022-03-03 01:59:36', '', '', 2),
(174, 'ef151afd-b575-46cf-a3a3-650ca25b4a59', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__ef151afd-b575-46cf-a3a3-650ca25b4a59_0.png', '2022-03-03 01:59:55', '2022-03-03 01:59:42', '', '', 2),
(175, '176c0cd7-ba14-4c4c-9b62-5e40ce1f37d1', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__176c0cd7-ba14-4c4c-9b62-5e40ce1f37d1_0.png', '2022-03-03 02:00:13', '2022-03-03 02:00:11', '', '', 2),
(176, '1893b182-628e-464b-8182-275e33fe3f32', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__1893b182-628e-464b-8182-275e33fe3f32_0.png', '2022-03-03 02:00:31', '2022-03-03 02:00:29', '', '', 2),
(177, 'e0758fa4-46c8-48bd-b438-befe4f9e0e4a', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__e0758fa4-46c8-48bd-b438-befe4f9e0e4a_0.png', '2022-03-03 02:00:45', '2022-03-03 02:00:43', '', '', 2),
(178, '8bd22f12-9d10-491e-b143-2d806c9c366a', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__8bd22f12-9d10-491e-b143-2d806c9c366a_0.png', '2022-03-03 02:10:45', '2022-03-03 02:10:43', '', '', 2),
(179, '02ff9d8d-3265-4ce9-90d8-275fbe95851c', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__02ff9d8d-3265-4ce9-90d8-275fbe95851c_0.png', '2022-03-03 02:11:00', '2022-03-03 02:10:59', '', '', 2),
(180, '8c639add-46fc-42f1-93ff-3bd7187a9684', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__8c639add-46fc-42f1-93ff-3bd7187a9684_0.png', '2022-03-03 02:11:25', '2022-03-03 02:11:23', '', '', 2),
(181, '60e39980-0230-4b06-8e6b-7c19d4b1cd94', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__60e39980-0230-4b06-8e6b-7c19d4b1cd94_0.png', '2022-03-03 02:11:39', '2022-03-03 02:11:37', '', '', 2),
(182, '34abc0ce-8082-4a28-9d86-14322575a623', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__34abc0ce-8082-4a28-9d86-14322575a623_0.png', '2022-03-03 02:11:52', '2022-03-03 02:11:50', '', '', 2),
(183, '3ffe79cd-b5a2-443f-99bc-880963d76fd4', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__3ffe79cd-b5a2-443f-99bc-880963d76fd4_0.png', '2022-03-03 02:12:05', '2022-03-03 02:12:03', '', '', 2),
(184, '90236442-c714-4b1c-a8b2-aef074512e81', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__90236442-c714-4b1c-a8b2-aef074512e81_0.png', '2022-03-03 02:12:18', '2022-03-03 02:12:16', '', '', 2),
(185, '00163920-1128-4d5b-b629-eea0ffb168bf', '', 'TEAMIMAGE', 'http://localhost/pm/imgserver/uploads/attachments/pcm__00163920-1128-4d5b-b629-eea0ffb168bf_0.png', '2022-03-03 02:12:34', '2022-03-03 02:12:32', '', '', 2),
(186, 'e36a7aaa-3868-4ed4-b8f9-c0c2a3626673', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__e36a7aaa-3868-4ed4-b8f9-c0c2a3626673_0.png', '2022-03-07 03:50:09', '2022-03-07 03:50:03', '', '', 2),
(187, '396fa7d0-78e7-446e-a221-21e2f529255f', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__396fa7d0-78e7-446e-a221-21e2f529255f_0.png', '2022-03-07 03:50:31', '2022-03-07 03:50:27', '', '', 2),
(188, '57decd8f-fded-4afc-ba46-00e6b25f950b', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__57decd8f-fded-4afc-ba46-00e6b25f950b_0.png', '2022-03-07 03:50:52', '2022-03-07 03:50:49', '', '', 2),
(189, 'd16650dd-8017-4149-a27d-99bf26e32620', '', 'BLOG', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__d16650dd-8017-4149-a27d-99bf26e32620_0.png', '2022-03-07 03:51:33', '2022-03-07 03:51:29', '', '', 2),
(190, '03654571-9293-4bfd-8253-a57b74581073', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__03654571-9293-4bfd-8253-a57b74581073_0.png', '2022-03-07 03:52:03', '2022-03-07 03:52:00', '', '', 2),
(191, 'a870ab5a-7616-4a49-a43f-6de6492fcc09', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__a870ab5a-7616-4a49-a43f-6de6492fcc09_0.png', '2022-03-07 03:52:12', '2022-03-07 03:52:09', '', '', 2),
(192, 'ff257993-df1b-4e23-ba7f-a241f9ccd808', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ff257993-df1b-4e23-ba7f-a241f9ccd808_0.png', '2022-03-07 03:52:21', '2022-03-07 03:52:18', '', '', 2),
(193, 'affc54ad-d55c-4101-be6b-129730b6ff56', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__affc54ad-d55c-4101-be6b-129730b6ff56_0.png', '2022-03-07 03:53:36', '2022-03-07 03:53:34', '', '', 2),
(194, '217bd909-9e1f-44fa-a7bb-34a2126be65b', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__217bd909-9e1f-44fa-a7bb-34a2126be65b_0.png', '2022-03-07 03:53:44', '2022-03-07 03:53:42', '', '', 2),
(195, 'ca5bbb3d-80f6-4689-be6d-f68bf5f3bdaf', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ca5bbb3d-80f6-4689-be6d-f68bf5f3bdaf_0.png', '2022-03-07 03:53:52', '2022-03-07 03:53:50', '', '', 2),
(196, '17e71329-4883-4c63-a856-4e7b2ef1c9c1', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__17e71329-4883-4c63-a856-4e7b2ef1c9c1_0.png', '2022-03-07 03:54:00', '2022-03-07 03:53:57', '', '', 2),
(197, '58665dad-03d3-49a4-b156-56c46ee8dac1', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__58665dad-03d3-49a4-b156-56c46ee8dac1_0.png', '2022-03-07 03:54:08', '2022-03-07 03:54:06', '', '', 2),
(198, 'a4f7b00b-ee7e-4710-b0ab-669c3ec1ea35', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__a4f7b00b-ee7e-4710-b0ab-669c3ec1ea35_0.png', '2022-03-07 03:54:17', '2022-03-07 03:54:15', '', '', 2),
(199, '90041682-ed24-4159-a36d-1bc3f071cc50', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__90041682-ed24-4159-a36d-1bc3f071cc50_0.png', '2022-03-07 03:54:25', '2022-03-07 03:54:23', '', '', 2),
(200, '24b51f45-39f7-4a7a-aa5b-796291ceabdd', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__24b51f45-39f7-4a7a-aa5b-796291ceabdd_0.png', '2022-03-07 03:54:32', '2022-03-07 03:54:30', '', '', 2),
(201, '697f84d9-ee44-418b-934a-574bd4b8a0eb', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__697f84d9-ee44-418b-934a-574bd4b8a0eb_0.png', '2022-03-07 03:54:38', '2022-03-07 03:54:37', '', '', 2),
(202, '2e9f9d4f-c26a-4655-a7ec-90cd4d549f49', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__2e9f9d4f-c26a-4655-a7ec-90cd4d549f49_0.png', '2022-03-07 03:54:47', '2022-03-07 03:54:45', '', '', 2),
(203, '67266f1f-d9d6-417e-b01d-f7a80c60b441', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__67266f1f-d9d6-417e-b01d-f7a80c60b441_0.png', '2022-03-07 03:54:58', '2022-03-07 03:54:57', '', '', 2),
(204, 'edebfce7-53d5-490c-9e8d-f070fd1f9680', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__edebfce7-53d5-490c-9e8d-f070fd1f9680_0.png', '2022-03-07 03:55:06', '2022-03-07 03:55:04', '', '', 2),
(205, 'cab198e1-7b7e-4da8-b22b-0d6e0d1c378d', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__cab198e1-7b7e-4da8-b22b-0d6e0d1c378d_0.png', '2022-03-07 03:55:14', '2022-03-07 03:55:12', '', '', 2),
(206, '7bb47544-69a0-451f-8dbc-656e3c0ba6c8', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__7bb47544-69a0-451f-8dbc-656e3c0ba6c8_0.png', '2022-03-07 03:56:05', '2022-03-07 03:56:02', '', '', 2),
(207, '4ac63d07-85d7-4762-8b4c-07ac08799d7d', '', 'BLOG', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__4ac63d07-85d7-4762-8b4c-07ac08799d7d_0.png', '2022-03-11 10:31:27', '2022-03-11 10:30:27', '', '', 2),
(208, '46369a75-e524-4e1c-b959-897e727902d0', '', 'BLOG', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__46369a75-e524-4e1c-b959-897e727902d0_0.png', '2022-03-11 10:48:05', '2022-03-11 10:48:00', '', '', 2),
(209, '397a516a-3364-4e80-b052-c1eb3a7ff436', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__397a516a-3364-4e80-b052-c1eb3a7ff436_0.png', '2022-03-12 04:42:21', '2022-03-12 04:41:36', '', '', 2),
(210, 'c3a9c6eb-2178-4089-8dc5-02187640ba51', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__c3a9c6eb-2178-4089-8dc5-02187640ba51_0.png', '2022-03-12 04:43:06', '2022-03-12 04:42:38', '', '', 2),
(211, '31e9f817-90d9-4875-a1df-2f74db2f3326', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__31e9f817-90d9-4875-a1df-2f74db2f3326_0.png', '2022-03-30 11:08:19', '2022-03-30 11:07:31', '', '', 2),
(212, '210e2219-702c-4173-9231-24acf3d8634e', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__210e2219-702c-4173-9231-24acf3d8634e_0.png', '2022-04-02 06:04:09', '2022-04-02 06:04:05', '', '', 2),
(213, '8c04e11a-5555-424f-aa53-a452084fab94', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8c04e11a-5555-424f-aa53-a452084fab94_0.png', '2022-04-02 06:04:28', '2022-04-02 06:04:23', '', '', 2),
(214, 'dcf1f96f-7218-48a5-b1f6-3bf80b775007', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__dcf1f96f-7218-48a5-b1f6-3bf80b775007_0.png', '2022-04-07 09:53:46', '2022-04-07 09:53:42', '', '', 2),
(215, 'cabcf5ed-83fd-4b90-889b-dce9d19d9975', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__cabcf5ed-83fd-4b90-889b-dce9d19d9975_0.png', '2022-04-07 09:54:45', '2022-04-07 09:54:41', '', '', 2),
(216, '87589c06-84e1-48d1-83a5-972945d13a50', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__87589c06-84e1-48d1-83a5-972945d13a50_0.png', '2022-04-07 15:51:26', '2022-04-07 15:51:24', '', '', 2),
(217, '564eb775-94d8-454c-9842-c44d62a201a4', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__564eb775-94d8-454c-9842-c44d62a201a4_0.png', '2022-04-07 15:52:21', '2022-04-07 15:51:47', '', '', 2),
(218, '50aefa78-80da-45b5-8cc7-a8976ea7e1c3', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__50aefa78-80da-45b5-8cc7-a8976ea7e1c3_0.png', '2022-04-07 15:53:21', '2022-04-07 15:52:49', '', '', 2),
(219, '1da0140e-0d27-4a2e-8a5b-ce011194ff0e', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__1da0140e-0d27-4a2e-8a5b-ce011194ff0e_0.png', '2022-04-07 15:54:11', '2022-04-07 15:53:45', '', '', 2),
(220, 'd4898c15-14e2-49d0-b2e1-48784cb12c16', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__d4898c15-14e2-49d0-b2e1-48784cb12c16_0.png', '2022-04-07 15:55:25', '2022-04-07 15:54:46', '', '', 2),
(221, '9637f740-b28f-4864-a710-72f722f381c4', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__9637f740-b28f-4864-a710-72f722f381c4_0.png', '2022-04-07 17:09:46', '2022-04-07 17:09:11', '', '', 2),
(222, 'ea1d92a7-0add-48b3-aba0-9958f26062e9', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ea1d92a7-0add-48b3-aba0-9958f26062e9_0.png', '2022-04-07 17:10:34', '2022-04-07 17:10:08', '', '', 2),
(223, '1ab9bdda-33e2-40c6-a598-281f89e89827', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__1ab9bdda-33e2-40c6-a598-281f89e89827_0.png', '2022-04-07 17:11:22', '2022-04-07 17:10:56', '', '', 2),
(224, '71b971dd-5a49-4305-8fd3-a78d2668715a', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__71b971dd-5a49-4305-8fd3-a78d2668715a_0.png', '2022-04-07 17:12:06', '2022-04-07 17:11:41', '', '', 2),
(225, '64022c45-f416-4340-8f98-27100f419c14', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__64022c45-f416-4340-8f98-27100f419c14_0.png', '2022-04-07 17:13:06', '2022-04-07 17:12:35', '', '', 2),
(226, '8b369d4b-0eec-4fdf-be3a-79f801c60f1a', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8b369d4b-0eec-4fdf-be3a-79f801c60f1a_0.png', '2022-04-07 17:16:11', '2022-04-07 17:15:29', '', '', 2),
(227, '6636f034-40db-4521-af0d-11185bb67fac', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__6636f034-40db-4521-af0d-11185bb67fac_0.png', '2022-04-07 17:17:07', '2022-04-07 17:17:05', '', '', 2),
(228, 'a879fb52-827a-48c8-91c2-97155c6fc3a0', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__a879fb52-827a-48c8-91c2-97155c6fc3a0_0.png', '2022-04-08 14:35:56', '2022-04-08 14:35:50', '', '', 2),
(229, '8b7a34ae-6a55-4d54-a839-c527ec9f5cc7', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8b7a34ae-6a55-4d54-a839-c527ec9f5cc7_0.png', '2022-04-08 15:08:52', '2022-04-08 15:08:24', '', '', 2),
(230, 'a8a87ed5-ca53-4e89-b9ad-602499ca212e', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__a8a87ed5-ca53-4e89-b9ad-602499ca212e_0.png', '2022-04-08 15:20:25', '2022-04-08 15:20:00', '', '', 2),
(231, '390ac76e-00d6-4f92-bef6-0c49d1b74931', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__390ac76e-00d6-4f92-bef6-0c49d1b74931_0.png', '2022-04-08 15:21:13', '2022-04-08 15:21:12', '', '', 2),
(232, '705552be-74c7-4235-bce0-806de8724461', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__705552be-74c7-4235-bce0-806de8724461_0.png', '2022-04-08 15:21:41', '2022-04-08 15:21:32', '', '', 2),
(233, '2256ffb7-a109-403d-9392-9e81342b4c8b', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__2256ffb7-a109-403d-9392-9e81342b4c8b_0.png', '2022-04-08 15:22:08', '2022-04-08 15:22:05', '', '', 2),
(234, '67c8532c-1568-45fc-8a07-7a5d28f61bc9', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__67c8532c-1568-45fc-8a07-7a5d28f61bc9_0.png', '2023-06-24 05:26:29', '2022-04-08 15:40:32', '', '', 2);
INSERT INTO `media_gallery` (`id`, `media_id`, `metaname`, `metatype`, `metacontent`, `create_timestamp`, `update_timestamp`, `referkey`, `referkeyid`, `status`) VALUES
(235, '992f3196-33aa-425e-b11c-c3fe77d90651', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__992f3196-33aa-425e-b11c-c3fe77d90651_0.png', '2023-05-29 17:10:51', '2023-05-29 17:10:42', '', '', 2),
(236, '2769741c-9505-48bf-8d8b-aa58a1684393', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__2769741c-9505-48bf-8d8b-aa58a1684393_0.png', '2023-05-29 17:24:22', '2023-05-29 17:23:23', '', '', 2),
(237, '192e9add-508d-44b8-8014-d9cd10b75188', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__192e9add-508d-44b8-8014-d9cd10b75188_0.png', '2023-05-29 17:25:02', '2023-05-29 17:24:49', '', '', 2),
(238, 'ba694ca0-a5b2-4cdd-b545-6fda35174649', '', 'TEAMIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ba694ca0-a5b2-4cdd-b545-6fda35174649_0.png', '2023-05-29 17:25:41', '2023-05-29 17:25:35', '', '', 2),
(239, '49288ca1-bbf1-4589-942d-ea67c01f24e5', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__49288ca1-bbf1-4589-942d-ea67c01f24e5_0.png', '2023-05-29 17:32:46', '2023-05-29 17:32:32', '', '', 2),
(240, '6296b215-8f92-48c7-8758-eb6af368f8cd', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__6296b215-8f92-48c7-8758-eb6af368f8cd_0.png', '2023-05-29 17:38:09', '2023-05-29 17:35:29', '', '', 2),
(241, 'b0a8ac62-d1e7-4b40-a906-eaf9b7696f57', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__b0a8ac62-d1e7-4b40-a906-eaf9b7696f57_0.png', '2023-05-29 17:40:43', '2023-05-29 17:40:14', '', '', 2),
(242, '4f4d4541-d63c-421b-8c94-9dae975e0054', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__4f4d4541-d63c-421b-8c94-9dae975e0054_0.png', '2023-05-29 17:58:32', '2023-05-29 17:58:25', '', '', 2),
(243, '973e9652-02a4-42fe-b760-6017f8bc4bc5', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__973e9652-02a4-42fe-b760-6017f8bc4bc5_0.png', '2023-05-29 18:00:41', '2023-05-29 18:00:07', '', '', 2),
(244, '7cb14252-f018-4786-a701-ec0bb8feab3a', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__7cb14252-f018-4786-a701-ec0bb8feab3a_0.png', '2023-05-29 18:01:52', '2023-05-29 18:01:08', '', '', 2),
(245, '84cf05b5-c37a-447b-b342-28d2674977ac', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__84cf05b5-c37a-447b-b342-28d2674977ac_0.png', '2023-05-29 18:03:11', '2023-05-29 18:02:56', '', '', 2),
(246, '4a3069ed-6340-4e7a-8f87-3d4fb1b60b1b', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__4a3069ed-6340-4e7a-8f87-3d4fb1b60b1b_0.png', '2023-05-29 18:04:03', '2023-05-29 18:03:59', '', '', 2),
(247, 'a765e055-6627-4c39-9c7f-412c3d7d57b7', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__a765e055-6627-4c39-9c7f-412c3d7d57b7_0.png', '2023-05-29 18:04:51', '2023-05-29 18:04:46', '', '', 2),
(248, '73ee4629-5d64-471f-bb39-644d79ed2d8c', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__73ee4629-5d64-471f-bb39-644d79ed2d8c_0.png', '2023-05-29 18:05:34', '2023-05-29 18:05:30', '', '', 2),
(249, 'bc9a3409-90dd-45d2-8520-85ee9485129f', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__bc9a3409-90dd-45d2-8520-85ee9485129f_0.png', '2023-05-29 18:06:27', '2023-05-29 18:06:19', '', '', 2),
(250, '814108a8-57b3-4068-a4a3-f20034031614', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__814108a8-57b3-4068-a4a3-f20034031614_0.png', '2023-05-29 18:08:45', '2023-05-29 18:08:41', '', '', 2),
(251, '23586879-f2a0-4599-bbce-e3ec4dc5be8f', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__23586879-f2a0-4599-bbce-e3ec4dc5be8f_0.png', '2023-05-29 18:10:38', '2023-05-29 18:10:34', '', '', 2),
(252, '4c487e6c-d377-4918-9eca-e25639b4655f', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__4c487e6c-d377-4918-9eca-e25639b4655f_0.png', '2023-05-29 18:11:31', '2023-05-29 18:11:21', '', '', 2),
(253, 'd8daf1e8-9be5-4315-bd05-0390afca8b82', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__d8daf1e8-9be5-4315-bd05-0390afca8b82_0.png', '2023-05-29 18:12:22', '2023-05-29 18:12:11', '', '', 2),
(254, '8c0d4371-4db2-425b-bb90-591cf5b28e87', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8c0d4371-4db2-425b-bb90-591cf5b28e87_0.png', '2023-05-29 18:13:02', '2023-05-29 18:12:59', '', '', 2),
(255, 'dd23de9e-dc2a-45d1-a899-e59b565494c4', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__dd23de9e-dc2a-45d1-a899-e59b565494c4_0.png', '2023-05-29 18:14:25', '2023-05-29 18:14:18', '', '', 2),
(256, 'b989f65d-20a0-40a2-aa21-f962530b5d86', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__b989f65d-20a0-40a2-aa21-f962530b5d86_0.png', '2023-05-29 18:19:21', '2023-05-29 18:19:19', '', '', 2),
(257, '0a66c484-298b-4130-949d-8a458ed1ca49', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__0a66c484-298b-4130-949d-8a458ed1ca49_0.png', '2023-05-29 18:20:01', '2023-05-29 18:19:57', '', '', 2),
(258, '9da23de1-90d0-4538-9185-1fbfee702e3e', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__9da23de1-90d0-4538-9185-1fbfee702e3e_0.png', '2023-05-29 18:20:57', '2023-05-29 18:20:46', '', '', 2),
(259, 'ade8b18c-d092-4697-9cb2-921cc957a91f', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ade8b18c-d092-4697-9cb2-921cc957a91f_0.png', '2023-05-29 18:21:46', '2023-05-29 18:21:36', '', '', 2),
(260, 'd0b47833-1a0a-4fc7-88fa-22b3dc2b0201', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__d0b47833-1a0a-4fc7-88fa-22b3dc2b0201_0.png', '2023-05-29 18:22:25', '2023-05-29 18:22:21', '', '', 2),
(261, 'db06e9ae-3937-412c-8ecc-7b95c40782b3', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__db06e9ae-3937-412c-8ecc-7b95c40782b3_0.png', '2023-05-29 18:23:12', '2023-05-29 18:23:08', '', '', 2),
(262, '316dbb2a-2103-41ae-8163-16b62b96deb8', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__316dbb2a-2103-41ae-8163-16b62b96deb8_0.png', '2023-05-29 18:23:59', '2023-05-29 18:23:53', '', '', 2),
(263, '8fd2bf51-1fe6-4527-a55f-03897f4d2c4d', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8fd2bf51-1fe6-4527-a55f-03897f4d2c4d_0.png', '2023-05-29 18:24:34', '2023-05-29 18:24:31', '', '', 2),
(264, '6056bea5-94a3-42cc-80c9-38682d938dfe', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__6056bea5-94a3-42cc-80c9-38682d938dfe_0.png', '2023-05-29 18:25:12', '2023-05-29 18:25:09', '', '', 2),
(265, 'eedbbf46-19a8-4157-9b37-57832f6398a4', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__eedbbf46-19a8-4157-9b37-57832f6398a4_0.png', '2023-05-29 18:34:22', '2023-05-29 18:34:19', '', '', 2),
(266, 'db12437b-b6ae-49a1-affe-06b4ca7f2875', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__db12437b-b6ae-49a1-affe-06b4ca7f2875_0.png', '2023-05-29 18:35:00', '2023-05-29 18:34:55', '', '', 2),
(267, '5324e4de-b5a0-47b2-a087-2b99d0a67b2c', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__5324e4de-b5a0-47b2-a087-2b99d0a67b2c_0.png', '2023-05-29 18:35:41', '2023-05-29 18:35:38', '', '', 2),
(268, 'b9ee3c2f-79f7-44c3-b4f3-7e02a3b0e5ee', '', 'RESULTSLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__b9ee3c2f-79f7-44c3-b4f3-7e02a3b0e5ee_0.png', '2023-05-29 18:36:54', '2023-05-29 18:36:50', '', '', 2),
(269, 'dc2212fb-3f46-463f-b635-4dcee4319c64', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__dc2212fb-3f46-463f-b635-4dcee4319c64_0.png', '2023-05-30 18:36:40', '2023-05-29 18:55:19', '', '', 2),
(270, 'e36d1c8f-a205-4d8b-afce-897fb5bbd183', '', 'SLIDERIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__e36d1c8f-a205-4d8b-afce-897fb5bbd183_0.png', '2023-05-30 18:38:51', '2023-05-30 18:38:44', '', '', 2),
(271, '9a570c9d-9236-453b-9080-1720535bd337', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__9a570c9d-9236-453b-9080-1720535bd337_0.png', '2023-05-30 19:22:33', '2023-05-30 19:21:42', '', '', 2),
(272, 'de748ab4-dfea-42c1-b13b-7c53304f0510', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__de748ab4-dfea-42c1-b13b-7c53304f0510_0.png', '2023-05-30 19:23:49', '2023-05-30 19:23:37', '', '', 2),
(273, '8f3b165f-d128-4061-99f5-7396533b9c91', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__8f3b165f-d128-4061-99f5-7396533b9c91_0.png', '2023-05-30 19:25:58', '2023-05-30 19:25:28', '', '', 2),
(274, '9d41d91d-61d0-4d38-9f83-9dc58a301e85', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__9d41d91d-61d0-4d38-9f83-9dc58a301e85_0.png', '2023-05-30 19:27:21', '2023-05-30 19:27:05', '', '', 2),
(275, 'b4c5b10e-43ac-4f44-a60a-7bdf35316722', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__b4c5b10e-43ac-4f44-a60a-7bdf35316722_0.png', '2023-05-30 19:28:47', '2023-05-30 19:28:42', '', '', 2),
(276, '51ea805f-4bc4-4533-8f91-c5cc72b02a68', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__51ea805f-4bc4-4533-8f91-c5cc72b02a68_0.png', '2023-05-30 19:29:37', '2023-05-30 19:29:15', '', '', 2),
(277, '4df52911-c77b-41b3-8495-36d076880eca', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__4df52911-c77b-41b3-8495-36d076880eca_0.png', '2023-05-30 19:31:08', '2023-05-30 19:30:32', '', '', 2),
(278, '1610fff7-ed9a-4c36-8351-714c37582e90', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__1610fff7-ed9a-4c36-8351-714c37582e90_0.png', '2023-05-30 19:31:59', '2023-05-30 19:31:38', '', '', 2),
(279, 'cdc237de-b260-4f6b-a94e-c74b1f4895ff', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__cdc237de-b260-4f6b-a94e-c74b1f4895ff_0.png', '2023-05-30 19:34:24', '2023-05-30 19:34:20', '', '', 2),
(280, 'ce55f7f5-7f64-46f8-bba3-0ba0762fddbc', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__ce55f7f5-7f64-46f8-bba3-0ba0762fddbc_0.png', '2023-05-30 19:35:06', '2023-05-30 19:35:01', '', '', 2),
(281, 'e9c0a0d8-dbca-4312-9902-71ae055646eb', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__e9c0a0d8-dbca-4312-9902-71ae055646eb_0.png', '2023-05-30 19:37:22', '2023-05-30 19:37:18', '', '', 2),
(282, '9a0f5255-76a4-4972-baea-87196172f897', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__9a0f5255-76a4-4972-baea-87196172f897_0.png', '2023-05-30 19:40:19', '2023-05-30 19:39:42', '', '', 2),
(283, 'b7c7e74d-5fb5-47e1-b1ed-cdbc31660edf', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__b7c7e74d-5fb5-47e1-b1ed-cdbc31660edf_0.png', '2023-05-30 19:41:29', '2023-05-30 19:41:25', '', '', 2),
(284, '7bc15b89-44db-4d46-9781-933ca35fca69', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__7bc15b89-44db-4d46-9781-933ca35fca69_0.png', '2023-05-30 19:42:15', '2023-05-30 19:42:00', '', '', 2),
(285, '62514c00-de7a-42b8-950e-ec433e67a64c', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__62514c00-de7a-42b8-950e-ec433e67a64c_0.png', '2023-05-30 19:44:49', '2023-05-30 19:44:44', '', '', 2),
(286, '7b31cf15-43e8-483e-bb16-ee466e236d2f', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__7b31cf15-43e8-483e-bb16-ee466e236d2f_0.png', '2023-05-30 19:47:49', '2023-05-30 19:47:46', '', '', 2),
(287, 'c959253e-5f16-40bf-8bf1-2e2804655d7e', '', 'GALLERYIMAGE', 'https://xcteam.in/tp/pm-institute/imgserver/uploads/attachments/pcm__c959253e-5f16-40bf-8bf1-2e2804655d7e_0.png', '2023-05-30 19:50:05', '2023-05-30 19:50:01', '', '', 2),
(288, 'fd5667b2-338e-4641-af13-079e02257942', '', 'SLIDERIMAGE', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__fd5667b2-338e-4641-af13-079e02257942_0.png', '2023-06-21 04:23:28', '2023-06-21 04:23:14', '', '', 2),
(289, '8d6684bf-3398-46c3-8542-8302c0b202cd', '', 'SLIDERIMAGE', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__8d6684bf-3398-46c3-8542-8302c0b202cd_0.png', '2023-06-21 04:26:00', '2023-06-21 04:25:39', '', '', 2),
(290, 'd59abbe7-fa9a-4115-bac4-a39240cc93d5', '', 'SLIDERIMAGE', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__d59abbe7-fa9a-4115-bac4-a39240cc93d5_0.png', '2023-06-21 04:27:04', '2023-06-21 04:27:03', '', '', 2),
(291, '51f9a386-f359-4fde-a4e2-eeaf42a4054a', '', 'SLIDERIMAGE', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__51f9a386-f359-4fde-a4e2-eeaf42a4054a_0.png', '2023-06-21 04:34:27', '2023-06-21 04:34:22', '', '', 2),
(292, '4cd9d3f2-b0f5-4101-ae18-b4c0c5d71331', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__4cd9d3f2-b0f5-4101-ae18-b4c0c5d71331_0.png', '2024-05-30 04:41:37', '2024-05-30 04:39:51', '', '', 2),
(293, '65b540ea-c49c-435b-a952-8924cee07bea', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__65b540ea-c49c-435b-a952-8924cee07bea_0.png', '2024-05-30 10:50:01', '2024-05-30 09:42:02', '', '', 2),
(294, '7396edb3-c437-4418-b5f5-155db91ffc19', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__7396edb3-c437-4418-b5f5-155db91ffc19_0.png', '2024-05-30 10:51:45', '2024-05-30 10:51:11', '', '', 2),
(295, '3de49d56-3e2b-4bf0-a777-f52d63da2faa', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__3de49d56-3e2b-4bf0-a777-f52d63da2faa_0.png', '2024-05-30 10:54:01', '2024-05-30 10:53:59', '', '', 2),
(296, '19b4ed10-890d-42c7-b9a4-f7bbf64555af', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__19b4ed10-890d-42c7-b9a4-f7bbf64555af_0.png', '2024-05-30 10:56:45', '2024-05-30 10:56:22', '', '', 2),
(297, 'b1a69e00-2f17-4461-9ccd-a3d19045120b', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__b1a69e00-2f17-4461-9ccd-a3d19045120b_0.png', '2024-05-30 10:57:11', '2024-05-30 10:57:05', '', '', 2),
(298, 'd69ff45d-e945-415d-8c1b-4333b0dcdcc0', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__d69ff45d-e945-415d-8c1b-4333b0dcdcc0_0.png', '2024-05-30 11:19:33', '2024-05-30 11:19:31', '', '', 2),
(299, 'f7457b85-f666-4ffb-8e6e-3ec4c9496386', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__f7457b85-f666-4ffb-8e6e-3ec4c9496386_0.png', '2024-05-30 11:22:53', '2024-05-30 11:22:51', '', '', 2),
(300, '2f0a1aa2-a2de-432e-bc08-4c7d0adf4375', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__2f0a1aa2-a2de-432e-bc08-4c7d0adf4375_0.png', '2024-05-30 11:23:28', '2024-05-30 11:23:26', '', '', 2),
(301, '07ab85f2-ba2e-42b8-93e0-9c7af76c920f', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__07ab85f2-ba2e-42b8-93e0-9c7af76c920f_0.png', '2024-05-30 17:04:50', '2024-05-30 16:46:23', '', '', 2),
(302, 'ef9d9f1b-36a5-45e7-8fe6-b0e24177344d', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__ef9d9f1b-36a5-45e7-8fe6-b0e24177344d_0.png', '2024-05-31 09:20:36', '2024-05-31 09:20:33', '', '', 2),
(303, '7c1d024b-b394-4489-aeb4-f29667e98794', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__7c1d024b-b394-4489-aeb4-f29667e98794_0.png', '2024-05-31 09:21:21', '2024-05-31 09:20:50', '', '', 2),
(304, '863e66f2-e40d-4f7f-88be-57605f202cd3', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__863e66f2-e40d-4f7f-88be-57605f202cd3_0.png', '2024-05-31 09:22:07', '2024-05-31 09:21:37', '', '', 2),
(305, '3987187c-a525-4eb3-b685-e820e9e92d9e', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__3987187c-a525-4eb3-b685-e820e9e92d9e_0.png', '2024-05-31 09:23:20', '2024-05-31 09:23:13', '', '', 2),
(306, 'b1ab605b-ad24-4593-9b57-a9571be5a53e', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__b1ab605b-ad24-4593-9b57-a9571be5a53e_0.png', '2024-06-01 04:48:09', '2024-05-31 18:01:39', '', '', 2),
(307, 'c1cae425-d8cd-4af4-aaa7-02fa8cabbb3c', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__c1cae425-d8cd-4af4-aaa7-02fa8cabbb3c_0.png', '2024-06-04 05:56:02', '2024-06-02 17:23:21', '', '', 2),
(308, '83520e16-bdb2-4a68-bf4c-b19acca11fb7', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__83520e16-bdb2-4a68-bf4c-b19acca11fb7_0.png', '2024-06-04 06:07:12', '2024-06-04 05:57:57', '', '', 2),
(309, 'dfd0515e-aee0-48e5-af56-e0ee180a108e', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__dfd0515e-aee0-48e5-af56-e0ee180a108e_0.png', '2024-06-04 06:07:12', '2024-06-04 06:07:02', '', '', 2),
(310, '580667c8-cc13-4b59-a43f-14085003e83b', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__580667c8-cc13-4b59-a43f-14085003e83b_0.png', '2024-06-04 06:49:19', '2024-06-04 06:49:08', '', '', 2),
(311, '7f1717a5-92ea-4f98-b230-9214c1d42bf5', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__7f1717a5-92ea-4f98-b230-9214c1d42bf5_0.png', '2024-06-04 08:45:58', '2024-06-04 07:23:08', '', '', 2),
(312, '63e74e55-b307-42fd-9c29-8d3285ada6e5', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__63e74e55-b307-42fd-9c29-8d3285ada6e5_0.png', '2024-06-04 08:45:58', '2024-06-04 08:45:44', '', '', 2),
(313, '0b2edccc-39a7-4e24-a1a8-a5b3dc9b9b95', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__0b2edccc-39a7-4e24-a1a8-a5b3dc9b9b95_0.png', '2024-06-04 10:28:19', '2024-06-04 10:28:10', '', '', 2),
(314, '764d1615-48e9-4a2e-83ff-e882af6f98a9', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__764d1615-48e9-4a2e-83ff-e882af6f98a9_0.png', '2024-06-04 11:03:41', '2024-06-04 11:03:31', '', '', 2),
(315, '2615404b-dd24-4461-8586-cadf4f283a51', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__2615404b-dd24-4461-8586-cadf4f283a51_0.png', '2024-06-06 01:43:40', '2024-06-06 01:42:10', '', '', 2),
(316, 'a0fc5d72-2910-4737-b80f-f8ab3fe83c8d', '', 'BLOG', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__a0fc5d72-2910-4737-b80f-f8ab3fe83c8d_0.png', '2024-06-06 07:24:23', '2024-06-06 05:13:36', '', '', 2),
(317, 'f79f7de8-4a59-4d77-8ba3-80587511aca1', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__f79f7de8-4a59-4d77-8ba3-80587511aca1_0.png', '2024-06-06 09:47:19', '2024-06-06 09:47:02', '', '', 2),
(318, '614ffe94-3c03-45f8-a926-bb2cfedafa1e', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__614ffe94-3c03-45f8-a926-bb2cfedafa1e_0.png', '2024-06-06 09:48:44', '2024-06-06 09:48:34', '', '', 2),
(319, 'c76dda50-a48c-4e97-9ad5-c09d6d61a06b', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__c76dda50-a48c-4e97-9ad5-c09d6d61a06b_0.png', '2024-06-06 10:07:26', '2024-06-06 10:07:12', '', '', 2),
(320, '02ee9888-7076-471e-a000-6221d42e8774', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__02ee9888-7076-471e-a000-6221d42e8774_0.png', '2024-06-06 10:15:33', '2024-06-06 10:15:19', '', '', 2),
(321, '103f37e3-dc49-4055-b94f-db046c8ac55b', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__103f37e3-dc49-4055-b94f-db046c8ac55b_0.png', '2024-06-08 04:20:07', '2024-06-08 04:20:05', '', '', 2),
(322, 'deea918e-e43b-4fbf-9d74-f8825fde25f7', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__deea918e-e43b-4fbf-9d74-f8825fde25f7_0.png', '2024-06-08 04:39:35', '2024-06-08 04:39:23', '', '', 2),
(323, 'd7a283fb-9bc4-4029-84d7-5cc123439744', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__d7a283fb-9bc4-4029-84d7-5cc123439744_0.png', '2024-06-08 04:41:18', '2024-06-08 04:41:07', '', '', 2),
(324, '15fe6830-b73f-4702-9dfa-008ed936e707', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__15fe6830-b73f-4702-9dfa-008ed936e707_0.png', '2024-06-08 04:51:27', '2024-06-08 04:51:17', '', '', 2),
(325, '7889a6d0-156e-4edc-9b02-95475633c100', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__7889a6d0-156e-4edc-9b02-95475633c100_0.png', '2024-06-08 04:53:26', '2024-06-08 04:52:57', '', '', 2),
(326, '59f97553-68cf-4531-b28f-f1a885014eb9', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__59f97553-68cf-4531-b28f-f1a885014eb9_0.png', '2024-06-08 05:03:55', '2024-06-08 05:03:09', '', '', 2),
(327, '032aca90-4c4b-41f5-8978-f41246668354', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__032aca90-4c4b-41f5-8978-f41246668354_0.png', '2024-06-08 05:05:54', '2024-06-08 05:05:37', '', '', 2),
(328, 'fd0cb9ac-33a3-40f4-a9fe-9b8185a62396', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__fd0cb9ac-33a3-40f4-a9fe-9b8185a62396_0.png', '2024-06-08 05:09:23', '2024-06-08 05:09:09', '', '', 2),
(329, 'fd5209ae-11e8-41f9-b7a6-3d481bee85e7', '', 'NEWS', 'http://localhost/pmfarook/imgserver/uploads/attachments/pcm__fd5209ae-11e8-41f9-b7a6-3d481bee85e7_0.png', '2024-06-08 05:16:10', '2024-06-08 05:16:00', '', '', 2),
(330, '30317c62-89a2-4b29-bf8b-08119ca84c92', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__30317c62-89a2-4b29-bf8b-08119ca84c92_0.png', '2024-07-09 14:57:23', '2024-07-09 14:57:21', '', '', 2),
(331, '71658e35-3fe3-4ef2-af9b-9d57a1cc2967', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__71658e35-3fe3-4ef2-af9b-9d57a1cc2967_0.png', '2024-07-09 14:59:15', '2024-07-09 14:58:57', '', '', 2),
(332, 'bf92aa45-8dd5-41e7-9f98-6e93f0dc8deb', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__bf92aa45-8dd5-41e7-9f98-6e93f0dc8deb_0.png', '2024-07-09 15:04:14', '2024-07-09 15:04:12', '', '', 2),
(333, '7303b41a-510e-4d2f-8981-b24e6dfc8235', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__7303b41a-510e-4d2f-8981-b24e6dfc8235_0.png', '2024-07-09 16:12:18', '2024-07-09 16:08:57', '', '', 2),
(334, 'bb2ed328-382c-4855-9733-90180a8c6bf3', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__bb2ed328-382c-4855-9733-90180a8c6bf3_0.png', '2024-07-09 16:48:41', '2024-07-09 16:46:39', '', '', 2),
(335, '8d29c826-c09f-4d20-a66c-5816da480d28', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__8d29c826-c09f-4d20-a66c-5816da480d28_0.png', '2024-07-09 16:52:37', '2024-07-09 16:52:27', '', '', 2),
(336, '9061f961-404c-4fe8-97a7-0a5d14793ca5', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__9061f961-404c-4fe8-97a7-0a5d14793ca5_0.png', '2024-07-09 16:57:23', '2024-07-09 16:57:21', '', '', 2),
(337, '3300a873-f523-42ae-b395-d8f9d7c79394', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__3300a873-f523-42ae-b395-d8f9d7c79394_0.png', '2024-07-09 16:58:06', '2024-07-09 16:58:04', '', '', 2),
(338, 'd2ba339d-6718-4d15-8b4b-913988657c76', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__d2ba339d-6718-4d15-8b4b-913988657c76_0.png', '2024-07-09 16:58:55', '2024-07-09 16:58:53', '', '', 2),
(339, 'a6dafc86-a5e0-4377-805d-ad51e14210f4', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__a6dafc86-a5e0-4377-805d-ad51e14210f4_0.png', '2024-07-09 19:49:15', '2024-07-09 19:49:13', '', '', 2),
(340, '5d5013a5-0a32-4091-952a-77118a1171ea', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__5d5013a5-0a32-4091-952a-77118a1171ea_0.png', '2024-07-11 08:58:38', '2024-07-11 08:58:36', '', '', 2),
(341, '00bf7778-13c6-4698-b442-2a211bad3189', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__00bf7778-13c6-4698-b442-2a211bad3189_0.png', '2024-07-11 09:24:52', '2024-07-11 09:24:46', '', '', 2),
(342, '2c38f373-d6bf-4e98-a1b2-7ad72413e6a2', '', 'SLIDERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__2c38f373-d6bf-4e98-a1b2-7ad72413e6a2_0.png', '2024-07-11 09:25:45', '2024-07-11 09:25:42', '', '', 2),
(343, '3c875268-d363-41d8-b794-de4e46470e8d', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__3c875268-d363-41d8-b794-de4e46470e8d_0.png', '2024-07-11 09:28:34', '2024-07-11 09:28:19', '', '', 2),
(344, '801e2590-a491-4730-8952-05fb202cfcd2', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__801e2590-a491-4730-8952-05fb202cfcd2_0.png', '2024-07-11 09:30:41', '2024-07-11 09:30:07', '', '', 2),
(345, 'db60bf9d-daa5-4050-9acb-e585919e9bbd', '', 'SPEAKERIMAGE', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__db60bf9d-daa5-4050-9acb-e585919e9bbd_0.png', '2024-07-11 09:32:24', '2024-07-11 09:32:21', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `phonecode` varchar(10) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `expiry` varchar(90) NOT NULL,
  `refer_type` varchar(60) DEFAULT NULL,
  `refer_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `userid`, `username`, `email`, `phone_number`, `phonecode`, `password`, `salt`, `user_type`, `status`, `create_timestamp`, `update_timestamp`, `expiry`, `refer_type`, `refer_id`) VALUES
(1, '10203', 'xcteam', 'support@xctllp.com', '8129393265', '', '941697c7a7f09f7b0731b009915d3932694f163898309c3ad595c694f704175b96e9bc456c0ad433a216b58ff21e7f371dcefb818a8bfed7d1f80d97a45ae4ae', '6550df563cf7bfb4ff20d02f8f2195816e60732648a1561e73c1077f875b1455c2e7d8d0f5cb82ceddbbaf145687f112652a1445382715f6d6b117c6c577a2f2', 'admin', 0, '2022-01-25 09:58:09', '2020-06-27 02:31:46', '', NULL, ''),
(146, 'MEM_b7df1077-896e-419f-ada1-97dac7ded8e8', 'Satheesh V', 'a@gmail.com', '0000000000', '', '5f8547080f22fca5841cb9cc9e44900add45e81c3881498ba07a7313b1c94cfffb7f112b82c593b1d612bac9c484fd6d5f5abbd9a9ff762db8a8e05df442cba9', '19f228e0527cf6ec47cc8f94a35a435354e072a6dc7030a22cb99f3582cde206efa282700c532db2e46eada8ee7c8c4b7ef64ae72af6f2ae6261fb5f184265ad', 'user', 1, '2022-01-22 05:57:41', '2022-01-18 09:39:16', '', NULL, ''),
(149, 'MEM_624431b16d7d7', 'satheesh', 'sa@gmail.com', '1234567890', '', '8f749e99a5baa1697d9c04dc57989e23c5848b3407688ba4dffab5d91e791cd0b4145a4aa4beff09a6d70d2dcd749cc451f95ede3591739a475fac83dd0c1e75', 'ab04c1bd27481dc2e6bb9e7f339f9998c78d3ed307072b83deb64a4e9c1fe1962628c10c3286bc1c5ae800b7b134138948128da945013d0b439a377974b46634', 'admin', 1, '2022-03-30 10:32:17', '2022-03-30 10:32:17', '', NULL, ''),
(150, 'MEM_62663a23ebdf9', 'PM Institute', 'pmicse@farookcollege.ac.in', '9207755744', '', '9df7a1616317e1862250c2d9c3cf81790a2f391825c0c1a55671a70981ce5696a5397bf20fcd3c7380dbccf4bf0aee1405b9a6e60069a0194b90a6e37d07d2bf', '3ef20ad418c6ba33dcce943799a31da9664cdf08fdb3e28acce3a7d52b91be7ca53c41c1f229e5f6c59da415f057ec7b5f69cb7b6fd8d4d574cbeb06bebf6cf0', 'admin', 1, '2022-04-25 06:05:23', '2022-04-25 06:05:23', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `combination_key` varchar(100) NOT NULL,
  `links` varchar(500) NOT NULL,
  `imageurl` varchar(250) DEFAULT NULL,
  `date` varchar(40) NOT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `uid`, `title`, `category`, `combination_key`, `links`, `imageurl`, `date`, `createdate`, `updatedate`, `status`) VALUES
(8, 'af414f38-4175-478c-a469-416a034b6295', 'Civil Services Examination Regular Coaching Progra', NULL, 'NOTIFICATIONS', '', NULL, '', '2022-02-28 23:11:11', '2023-05-29 16:53:54', NULL),
(9, '73b71ae5-ca25-4ad6-ab10-cd97a1733007', 'Civil Services Examination 2022 Final Result out', NULL, 'NOTIFICATIONS', 'https://www.upsc.gov.in/', NULL, '', '2022-02-28 23:55:10', '2023-05-29 17:02:45', NULL),
(10, '1ed3aac7-922b-4dac-85de-5d9f3dc4e5b3', ' Nihala K Shereef from PM Institute bagged 706 All', NULL, 'NOTIFICATIONS', '', NULL, '', '2022-02-28 23:55:17', '2023-05-29 16:57:48', NULL),
(11, '85ed917d-589c-40e3-83e2-476f29830ee3', 'Civil Service Examination Coaching Programme 2023 ', NULL, 'NOTIFICATIONS', 'http://www.farookcollege.online/pminstitute/', NULL, '', '2022-04-25 06:13:25', '2023-05-29 16:59:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `combination_key` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `place` varchar(255) NOT NULL,
  `imageurl` varchar(250) DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `uid`, `title`, `combination_key`, `date`, `place`, `imageurl`, `createdate`, `updatedate`, `status`) VALUES
(1, '52209faf-c073-4c6d-92a2-8ba2623a87ce', 'IEDC SUMMIT 2024 ', 'SLIDER', '2024-08-24 09:30:00', 'NIT - Calicut', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__2c38f373-d6bf-4e98-a1b2-7ad72413e6a2_0.png', '2024-07-09 15:04:14', '2024-07-11 09:25:45', 1),
(3, 'e34402e0-91f6-4a80-b0db-8f4c7e193247', 'EARLY BIRD T ICKET ON LIVE', 'SLIDER', '2024-08-24 09:00:00', 'NIT Calicut', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__00bf7778-13c6-4698-b442-2a211bad3189_0.png', '2024-07-09 19:49:15', '2024-07-12 22:24:23', 1),
(4, 'e34402e0-91f6-4a80-b0db-8f4c7e193247788', '24th AUGUST 2024', 'SLIDER', '2024-08-24 09:00:00', 'NIT Calicut', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__00bf7778-13c6-4698-b442-2a211bad3189_0.png', '2024-07-09 19:49:15', '2024-07-12 22:24:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(200) NOT NULL,
  `imageurl` varchar(250) DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `uid`, `name`, `designation`, `imageurl`, `createdate`, `updatedate`, `status`) VALUES
(1, '63d98e81-4f90-49c1-b575-4568fcffb902', 'Bergin S Russel', 'Head, Academi Entrepreneurship Initiatives', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__801e2590-a491-4730-8952-05fb202cfcd2_0.png', '2024-07-09 16:48:41', '2024-07-11 09:30:41', 1),
(2, '2cbb661a-adf8-4523-81f4-4755311d98cc', 'Prof. Prasad Krishna ', 'Director, NITC', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__db60bf9d-daa5-4050-9acb-e585919e9bbd_0.png', '2024-07-09 16:58:06', '2024-07-11 09:32:24', 1),
(3, '761922a5-4213-47e6-ab87-f152d63e22c3', 'Anoop Ambika   ', 'CEO , Kerala Startup Mission', 'http://localhost/iedc/imgserver/uploads/attachments/pcm__5d5013a5-0a32-4091-952a-77118a1171ea_0.png', '2024-07-11 08:58:22', '2024-07-11 09:31:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `summit`
--

CREATE TABLE `summit` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `youtube` longtext DEFAULT NULL,
  `year` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1,
  `slug` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summit`
--

INSERT INTO `summit` (`id`, `uid`, `location`, `youtube`, `year`, `status`, `slug`, `start_date`, `end_date`, `createdate`, `updatedate`) VALUES
(1, '570c7e3e-feec-40d3-9005-54ef6bc12ede', '', '\r\n\r\n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/k1wGLf7s5tA?si=UdywEJT2h03sJt1J\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2016', 1, NULL, '0000-00-00', '0000-00-00', '2024-07-11 10:00:09', '2024-07-11 10:00:09'),
(2, '428950a6-1c33-4fa1-b402-ee88f1964eb4', '', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/XrPAxDk_dM4?si=FB5slG88t1Z48c3t\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2017', 1, NULL, '0000-00-00', '0000-00-00', '2024-07-11 10:00:53', '2024-07-11 10:00:53'),
(3, '24b370f2-4b5a-4886-8f83-a3070eeebbde', '', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/jzyTX9SRTpk?si=YCDMIrmrI_-8tUkb\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2018', 1, NULL, '0000-00-00', '0000-00-00', '2024-07-11 10:03:57', '2024-07-11 10:03:57'),
(4, 'b749db8d-5ea4-4978-9d87-5c757692cdc2', 'Sahrdaya College of Engineering and Technology', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/UqKGvZuhsCU?si=PEXX7WFUtWqN47N0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2019', 1, NULL, '2019-10-19', '0000-00-00', '2024-07-11 10:05:35', '2024-07-11 10:05:35'),
(5, '3935b146-9af9-45e2-a716-039439441638', 'Adi Shankara Institute of Technology, Cochin', '<img src=\"./images/event01.jpg\" alt=\"Image\">', '2021', 1, NULL, '2021-01-28', '2021-01-30', '2024-07-11 10:07:44', '2024-07-11 10:07:44'),
(6, '34a77469-0c1a-42ee-9552-7fb136b6a4f8', 'St. Joseph’s College of Engineering and Technology, Palai', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/fPmUPSigxrg?si=7CQbqs43Bgv1bvMe\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2022', 1, NULL, '2022-03-05', '0000-00-00', '2024-07-11 10:09:18', '2024-07-11 10:09:18'),
(7, 'aaa5bf96-5264-4c6a-a17b-717bf4849de0', 'Rajagiri School of Engineering and Technology', '<iframe src=\"https://www.instagram.com/reel/C2-KdDvvUK3/embed\" width=\"100%\" height=\"315\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\"></iframe>', '2023', 1, NULL, '2023-03-04', '0000-00-00', '2024-07-11 10:10:19', '2024-07-11 10:10:19'),
(8, '434e1ff2-6635-44ff-b17f-16e5ac0b954a', 'College of Engineering, Trivandrum', '<iframe src=\"https://www.instagram.com/reel/C2-KdDvvUK3/embed\" width=\"100%\" height=\"315\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\"></iframe>', '2023', 1, NULL, '2023-10-12', '0000-00-00', '2024-07-11 10:10:49', '2024-07-11 10:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `systemconfig_xc`
--

CREATE TABLE `systemconfig_xc` (
  `id` int(11) NOT NULL,
  `configname` varchar(80) NOT NULL,
  `configvalue` longtext NOT NULL,
  `metaname` varchar(60) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sc_id` varchar(80) NOT NULL,
  `status` int(11) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `systemconfig_xc`
--

INSERT INTO `systemconfig_xc` (`id`, `configname`, `configvalue`, `metaname`, `category`, `sc_id`, `status`, `create_timestamp`, `update_timestamp`) VALUES
(45, 'admin', '0', 'USERTYPES', '', '61ef9bcf3a65c', 0, '2022-01-25 06:42:23', '2022-01-25 09:25:22'),
(53, 'Management', '0', 'TEAM TYPES', '', '62201dd6e65f2', 0, '2022-03-03 01:45:58', '2022-03-03 01:45:59'),
(54, 'Resource Team', '1', 'TEAM TYPES', '', '62201de5e5152', 0, '2022-03-03 01:46:13', '2022-03-03 01:46:14'),
(56, 'Previous Question Papers', '0', 'RESOURCE TYPES', '', '624575fd77ea3', 0, '2022-03-31 09:35:57', '2022-04-27 05:15:13'),
(57, 'UPSC Corner', '1', 'RESOURCE TYPES', '', '62457611df886', 0, '2022-03-31 09:36:17', '2022-04-27 04:57:07'),
(59, 'Scholarships', '3', 'RESOURCE TYPES', '', '6245763e07a59', 0, '2022-03-31 09:37:02', '2022-03-31 09:37:02'),
(60, 'Reports', '4', 'RESOURCE TYPES', '', '62457657b244f', 0, '2022-03-31 09:37:27', '2022-03-31 09:37:27'),
(65, 'Campus', '1', 'GALLERY TYPES', '', '6250481d1c2d3', 0, '2022-04-08 14:35:09', '2022-04-08 14:35:09'),
(66, 'Events', '2', 'GALLERY TYPES', '', '62504876c64bc', 0, '2022-04-08 14:36:38', '2022-04-08 14:36:38'),
(67, 'Batch', '3', 'GALLERY TYPES', '', '62504886e12a8', 0, '2022-04-08 14:36:54', '2022-04-08 14:36:54'),
(68, 'Results', '4', 'GALLERY TYPES', '', '62504895427ad', 0, '2022-04-08 14:37:09', '2022-04-08 14:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails_xc`
--

CREATE TABLE `userdetails_xc` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(150) NOT NULL,
  `membership_no` int(11) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_name` varchar(160) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `address` longtext NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `customer_status` int(11) NOT NULL,
  `proof` longtext NOT NULL,
  `customer_dp` varchar(150) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobile_verify_flg` int(11) NOT NULL,
  `email_verify_flg` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `batchduration` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdetails_xc`
--

INSERT INTO `userdetails_xc` (`id`, `customer_id`, `membership_no`, `create_timestamp`, `update_timestamp`, `customer_name`, `dob`, `age`, `address`, `phone1`, `phone2`, `pincode`, `customer_status`, `proof`, `customer_dp`, `weight`, `height`, `gender`, `mobile_verify_flg`, `email_verify_flg`, `branch`, `rollno`, `batch`, `batchduration`, `firstname`, `lastname`, `city`, `country`, `description`) VALUES
(19, 'MEM_feaf0d00-4ed1-4f3a-826e-d235824c9216', 0, '2021-08-09 07:20:03', '2021-08-09 07:20:03', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(20, 'MEM_b458b9da-abd9-405d-b392-9edcf0207b5b', 0, '2021-08-09 07:41:18', '2021-08-09 07:41:18', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(21, 'MEM_c6a22188-02e3-4e28-966e-892d6196abef', 0, '2021-08-09 07:43:24', '2021-08-09 07:43:24', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(22, 'MEM_167b275b-6e30-40c0-b12f-46f18565630a', 0, '2021-08-09 11:14:20', '2021-08-09 11:14:20', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(23, 'MEM_c92e2f96-618d-4569-a4df-885f61457607', 0, '2021-08-09 11:16:12', '2021-08-09 11:16:12', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(24, 'MEM_0d80a40a-7297-40a3-866f-5e9d18d04ce9', 0, '2021-08-09 11:23:23', '2021-08-09 11:23:23', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(25, 'MEM_1afc2e7d-4e5c-4960-9068-e35b9a68ce29', 0, '2021-08-09 11:27:02', '2021-08-09 11:27:02', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(26, 'MEM_44feed14-29c9-4f7c-b367-f8f6dd2c09f0', 0, '2021-08-09 11:28:10', '2021-08-09 11:28:10', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(27, 'MEM_2015f569-6a31-420a-b84a-686168009b22', 0, '2021-08-13 09:57:35', '2021-08-13 09:57:35', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(28, 'MEM_851bde59-c9d4-480c-bbad-17653d865553', 0, '2021-10-16 05:12:56', '2021-10-16 05:12:56', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(29, 'MEM_fef61896-6fe5-42b8-90c7-7452b129de65', 0, '2021-10-16 07:41:48', '2021-10-16 07:41:48', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(30, 'MEM_487790f1-58e5-4c54-9d55-a73cb9696e3a', 0, '2021-12-23 09:39:48', '2021-12-23 09:39:48', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(31, 'MEM_b7df1077-896e-419f-ada1-97dac7ded8e8', 0, '2022-01-18 09:39:16', '2022-01-18 09:39:16', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(32, 'MEM_61f0e00a9699c', 0, '2022-01-26 05:45:46', '2022-01-26 05:45:46', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(33, 'MEM_61f0e0a2922eb', 0, '2022-01-26 05:48:18', '2022-01-26 05:48:18', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(34, 'MEM_624431b16d7d7', 0, '2022-03-30 10:32:17', '2022-03-30 10:32:17', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(35, 'MEM_62663a23ebdf9', 0, '2022-04-25 06:05:23', '2022-04-25 06:05:23', '', '', 0, '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summit`
--
ALTER TABLE `summit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemconfig_xc`
--
ALTER TABLE `systemconfig_xc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails_xc`
--
ALTER TABLE `userdetails_xc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `media_gallery`
--
ALTER TABLE `media_gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `summit`
--
ALTER TABLE `summit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `systemconfig_xc`
--
ALTER TABLE `systemconfig_xc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `userdetails_xc`
--
ALTER TABLE `userdetails_xc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
