-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrow_tds`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(10) NOT NULL,
  `b_date` date NOT NULL,
  `r_date` date NOT NULL,
  `r1_date` date NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_use` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `recieve` varchar(20) NOT NULL,
  `b_status` varchar(20) NOT NULL,
  `r_status` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `b_date`, `r_date`, `r1_date`, `item_name`, `item_use`, `name`, `dept_name`, `location`, `remark`, `email`, `recieve`, `b_status`, `r_status`, `timestamp`) VALUES
(1, '2021-01-13', '2021-01-31', '0000-00-00', 'Notebook Acer 4736', 1, 'พรรณี สุขโข', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', ' ใช้งานที่บ้านช่วงโควิด                    ', 'punnee_tu@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-02-16 02:58:30'),
(2, '2021-01-13', '2021-01-31', '2021-02-06', 'Notebook Dell02', 1, 'ปริตา เสวกานันท์', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', ' ยืมใช้งานที่บ้านช่วง โควิด                    ', 'parita@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-02-06 04:32:02'),
(3, '2021-01-13', '2021-01-31', '0000-00-00', 'Notebook Dell03', 1, 'วรปรียา บัณฑิตพุฒ', 'เลขานุการคณะฯ', 'นอกสถานที่', 'ยืมใช้งานที่บ้านช่วงโควิด                     ', 'vorapriya.aptu@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-03-01 09:50:15'),
(12, '2021-01-18', '2021-01-29', '2021-01-26', 'Microphone C03U', 1, 'ผศ. วิรุจน์ สมโสภณ', 'นวัฒกรรมการพัฒนาอสังหาริมทรัพย์ (RD)', 'นอกสถานที่', '                     การเรียนการสอนออนไลน์', 'suangarch@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-01-26 08:16:33'),
(13, '2021-01-18', '2021-01-29', '2021-01-26', 'หูฟัง JBL', 1, 'ผศ. วิรุจน์ สมโสภณ', 'นวัฒกรรมการพัฒนาอสังหาริมทรัพย์ (RD)', 'นอกสถานที่', '                     การเรียนการสอนออนไลน์', 'suangarch@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-01-26 08:16:39'),
(18, '2021-01-26', '2021-05-31', '0000-00-00', 'Microphone C03U', 1, 'ผศ. วิรุจน์ สมโสภณ', 'นวัฒกรรมการพัฒนาอสังหาริมทรัพย์ (RD)', 'นอกสถานที่', 'การเรียนการสอนออนไลน์                     ', 'suangarch@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-01-26 08:20:46'),
(19, '2021-01-30', '2021-02-01', '2021-02-01', 'Notebook Compaq', 1, 'ธนิดา จันทร์เรือง', ' เลขานุการคณบดี', 'นอกสถานที่', '                     ใช้ทำงานที่บ้าน เนื่องจากโนตบถคตนเองเสีย', 'thanida.aptu@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-02-01 01:25:16'),
(20, '2021-02-08', '2029-02-28', '0000-00-00', 'HP Compaq 6200 Pro Microtower', 1, 'เมธี โพธิ์แก้ว', 'งานบริหารอาคาร', 'โต๊ะทำงาน', ' แทนเครื่องเดิม                                              ', 'm_phokaew@hotmail.com', 'มารับเอง', 'ไม่อนุมัติ', 'ไม่อนุมัติการยืม', '2021-04-19 05:35:57'),
(24, '2021-02-07', '2021-02-08', '2021-02-08', 'Notebook Dell02', 1, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'โต๊ะทำงาน', 'test01                ', 'tonrak10@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-02-07 05:50:05'),
(25, '2021-02-10', '2021-02-11', '2021-02-11', 'Notebook Dell02', 1, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'โต๊ะทำงาน', ' test                    ', 'tonrak10@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-02-10 14:26:20'),
(27, '2021-02-15', '2021-05-14', '0000-00-00', 'HP Compaq 6200 Pro Microtower', 26, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 303', ' การเรียนการสอน                    ', 'tonrak10@hotmail.com', 'ไปติดตั้งให้', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-02-13 22:47:37'),
(44, '2021-02-17', '2021-02-19', '2021-02-19', 'Notebook Compaq', 1, 'ปริตา เสวกานันท์', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', 'work from home', 'parita@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-09 02:31:13'),
(45, '2021-02-18', '2025-12-18', '0000-00-00', 'หัวต่อ MAC to VGA', 1, 'สุทัศน์ ศรีดี', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 209', '                     ', 'tuch_fews@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-03-01 14:37:34'),
(47, '2021-03-03', '2021-05-31', '0000-00-00', 'Notebook Dell02', 1, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 406', 'ใช้สำหรับการเรียนการสอน                     ', 'tonrak10@hotmail.com', 'ไปติดตั้งให้', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-03-03 02:21:00'),
(49, '2021-04-09', '2021-04-18', '2021-04-18', 'Notebook Dell03', 1, 'สถิตาภรณ์ ลับโกษา', 'วิเทศสัมพันธ์', 'นอกสถานที่', '                     ', 'L.satitaporn@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-18 11:22:27'),
(50, '2021-04-19', '2021-05-03', '2021-04-30', 'Notebook Dell03', 1, 'สถิตาภรณ์ ลับโกษา', 'วิเทศสัมพันธ์', 'นอกสถานที่', '                     ', 'L.satitaporn@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-30 10:59:59'),
(51, '2021-04-20', '2021-05-31', '0000-00-00', 'Notebook Dell01', 1, 'พรรณี สุขโข', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', 'ต้องทำงานที่บ้านช่วงโควิด-19 ', 'punnee_tu@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-19 09:40:30'),
(52, '2021-04-19', '2021-04-30', '2021-04-30', 'Notebook Dell04', 1, 'ชุติกาญจน์ มรกฎ', 'วิเคราะห์นโยบายและแผน', 'นอกสถานที่', '                     ทำงานที่บ้าน wfh', 'aomwankm@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-30 03:27:46'),
(53, '2021-04-20', '2021-04-30', '0000-00-00', 'Notebook Dell05', 1, 'ปริตา เสวกานันท์', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', 'ใช้ในการปฏิบัติงานภายในที่พักหรือการปฏิบัติงานที่บ้าน (Work from Home)   ', 'parita@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-20 05:00:46'),
(55, '2021-04-21', '2021-05-03', '2021-04-26', 'Notebook Compaq', 1, 'ปัทมาพร ส้มไทย', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', '        ที่บ้านไม่มีคอมพิวเตอร์สำหรับปฏิบัติงานในที่พักอาศัย            ', 'pattama@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-26 07:40:11'),
(56, '2021-04-23', '2021-08-20', '0000-00-00', 'Microphone C03U', 6, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 303', ' การเรียนการสอนออนไลน์                    ', 'tonrak10@hotmail.com', 'ไปติดตั้งให้', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 04:26:31'),
(57, '2021-04-23', '2021-08-20', '0000-00-00', 'FOX USB Condenser Microphone', 5, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 303', 'การเรียนการสอนออนไลน์                     ', 'tonrak10@hotmail.com', 'ไปติดตั้งให้', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 04:39:14'),
(58, '2021-04-23', '2021-08-20', '0000-00-00', 'กล้อง Qcam6000', 4, 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', 'ห้อง 303', '  การเรียนการสอนออนไลน์                   ', 'tonrak10@hotmail.com', 'ไปติดตั้งให้', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 04:39:10'),
(60, '2021-04-23', '2021-05-31', '0000-00-00', 'จอมิเตอร์ Dell', 1, 'ทัศน์ภรณ์ พีเค', 'การเงินและบัญชี', 'นอกสถานที่', 'ใช้ทำงานที่บ้าน', 'jasmint_mali@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 07:59:50'),
(61, '2021-04-23', '2021-05-31', '2021-04-28', 'TP-Link MR400', 1, 'ทัศน์ภรณ์ พีเค', 'การเงินและบัญชี', 'นอกสถานที่', 'ใช้งานนอกสถานที่           ', 'jasmint_mali@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-28 02:29:45'),
(62, '2021-04-27', '2021-05-31', '0000-00-00', 'Dlink Router WiFi 4G', 1, 'พัชมณ พัฒบุบผา', 'ประชาสัมพันธ์', 'นอกสถานที่', '                     ทำงานที่หอพักอินเตอร์เน็ตหอพักสัญญาณไม่ถึง', 'pphatcha@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 08:27:58'),
(63, '2021-04-23', '2021-04-26', '0000-00-00', 'Notebook dell06', 1, 'พิมพ์วดี เอื้อมธุรพจน์', 'พัฒนาและส่งเสริมวิชาการ/วิจัย', 'นอกสถานที่', '                     ทำงาน', 'khunpim@yahoo.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 08:40:32'),
(64, '2021-04-23', '2021-04-30', '0000-00-00', 'TP-Link MR400', 1, 'พิมพ์วดี เอื้อมธุรพจน์', 'พัฒนาและส่งเสริมวิชาการ/วิจัย', 'นอกสถานที่', '                     ใช้ที่บ้าน', 'khunpim@yahoo.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-23 08:40:29'),
(65, '2021-04-26', '2021-04-30', '0000-00-00', 'Notebook Dell07', 1, 'ปัทมาพร ส้มไทย', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', '                     คอมพิวเตอร์ไม่มีใช้ทำงาน\r\n', 'pattama@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-26 07:51:08'),
(66, '2021-04-27', '2021-04-28', '2021-04-29', 'Notebook Acer 4736', 1, 'ธนิดา จันทร์เรือง', ' เลขานุการคณบดี', 'นอกสถานที่', 'นำมาปฏิบัติงานที่บ้าน', 'thanida.aptu@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อนุมัติการคืน', '2021-04-29 01:36:44'),
(67, '2021-04-27', '2021-08-27', '0000-00-00', 'Dlink Router WiFi 4G', 1, 'ผศ.วราลักษณ์ คงอ้วน', 'การผังเมือง (UP)', 'นอกสถานที่', 'เพื่อใช้ในการเรียนการสอน online', 'mumuryoi@yahoo.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-27 07:55:50'),
(68, '2564-04-27', '2564-05-31', '0000-00-00', 'TP-Link MR400', 1, 'อาจารย์นภมณี ทรัพย์สุนทรกุล', 'สถาปัตยกรรมภายใน (IA)', 'นอกสถานที่', '  COVID19 Pandemic  and work from home                               ', 'nopmanee@hotmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-28 02:31:57'),
(69, '2021-04-28', '2021-06-01', '0000-00-00', 'Dlink Router WiFi 4G', 1, 'รศ. ดร. ภูษิต เลิศวัฒนารักษ์', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', '                     ', 'lertwatt@tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-28 04:14:06'),
(70, '2021-04-28', '2021-06-01', '0000-00-00', 'Dlink Router WiFi 4G', 1, 'รศ. เฉลิมวัฒน์ ตันตสวัสดิ์', 'สถาปัตยกรรม (AR)', 'นอกสถานที่', '                     ', 'tchalerm@engr.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-28 04:14:18'),
(71, '2021-04-28', '2021-06-30', '0000-00-00', 'Dlink Router WiFi 4G', 1, 'เทอดพงศ์ บุญพันธ์', 'การออกแบบพัฒนาชุมชนเมือง (UDDI)', 'นอกสถานที่', 'ใช้สำหรับการสอนออนไลน์', 'tp.boon@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-28 05:04:32'),
(72, '2021-04-29', '2021-05-29', '0000-00-00', 'TP-Link MR400', 1, 'กัญญณัช เหลาโชติ', 'งานโครงการบริการสังคม', 'นอกสถานที่', '                     เพื่อช่วยเหลือการทำงานที่บ้านให้สะดวกขึ้นเนื่องจากเป็นพื้นที่ที่ไม่มีอุปกรณ์อินเตอร์เน็ต', 'kanyanut@ap.tu.ac.th', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-29 14:23:54'),
(73, '2021-05-01', '2021-05-31', '0000-00-00', 'Notebook Dell04', 1, 'ชุติกาญจน์ มรกฎ', 'วิเคราะห์นโยบายและแผน', 'นอกสถานที่', '  WFH', 'aomwankm@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-30 08:57:04'),
(74, '2021-04-30', '2021-05-18', '0000-00-00', 'Notebook Dell03', 1, 'สถิตาภรณ์ ลับโกษา', 'วิเทศสัมพันธ์', 'นอกสถานที่', '                     ', 'L.satitaporn@gmail.com', 'มารับเอง', 'อนุมัติแล้ว', 'อยู่ระหว่างการใช้งาน', '2021-04-30 11:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'สถาปัตยกรรม (AR)'),
(2, 'สถาปัตยกรรมภายใน (IA)'),
(5, 'การผังเมือง (UP)'),
(7, 'ภูมิสถาปัตยกรรม (LN)'),
(8, 'นวัฒกรรมการพัฒนาอสังหาริมทรัพย์ (RD)'),
(9, 'การออกแบบพัฒนาชุมชนเมือง (UDDI)'),
(10, 'การจัดการออกแบบธุรกิจ และเทคโนโลยี (DBTM)'),
(11, 'สหวิทยาการสภาพแวดล้อมสรรค์สร้าง (ISBE)'),
(12, 'เลขานุการคณะฯ'),
(15, 'ฝ่ายพัฒนาทรัพยากรนมุษย์'),
(16, 'สำนักงานคณบดี'),
(17, 'งานบริหารอาคาร'),
(18, 'พัฒนาและส่งเสริมวิชาการ/วิจัย'),
(19, 'งานโครงการบริการสังคม'),
(20, 'วิชาการการศึกษา'),
(21, 'บริหารงานทั่วไป (งานด้านกองบรรณาธิการและสื่อสิ่งพิมพ์)'),
(22, 'ประชาสัมพันธ์'),
(23, ' เลขานุการคณบดี'),
(24, 'โครงการบริการสังคม'),
(25, 'ฝ่ยศิลป์และออกแบบสิ่งพิมพ์'),
(26, 'บรรณารักษ์'),
(27, 'ศูนย์นวัตกรรมการออกแบบและวิจัย'),
(28, 'บริการการศึกษา'),
(29, 'การเงินและบัญชี'),
(30, 'บัณฑิตศึกษา'),
(31, 'พัสดุ'),
(32, 'วิเทศสัมพันธ์'),
(33, 'เทคโนโลยีและสารสนเทศ'),
(34, 'ฝ่ายบริหาร'),
(35, 'สารบรรณ'),
(36, 'วิเคราะห์นโยบายและแผน');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `serialno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `item_total` int(10) NOT NULL,
  `item_use` int(10) NOT NULL,
  `item_sum` int(10) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `item_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `serialno`, `item_name`, `item_total`, `item_use`, `item_sum`, `status`, `item_img`, `detail`, `datesave`) VALUES
(1, '6200001', 'Notebook Dell01', 1, 1, 0, 'ปกติ', 'tds3852315020210213_102735.jpg', 'OS: Window 10 Pro 64 Bit\r\n\r\nโปรแกรมพื้นฐาน: Ms Office, ACDsee, PDF\r\n\r\nโปแกรมอื่นๆ: Photo Shop, Illustrstor, Sketh Up, MS Team, Zoom\r\n\r\nอุปกรณ์: กล้อง, ไมค์\r\n\r\nอุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+  เม้าส์(USB)+หัวแปลง HDMI to VGA 1 หัว                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ', '2021-04-19 09:39:27'),
(2, '6200002', 'Notebook Dell02', 1, 1, 0, 'ปกติ', 'tds194164058320210213_102746.jpg', 'OS: Window 10 Pro 64 Bit\r\n\r\nโปรแกรมพื้นฐาน: Ms Office, ACDsee, PDF\r\n\r\nโปแกรมอื่นๆ: Photo Shop, Illustrstor, Sketh Up, MS Team, Zoom\r\n\r\nอุปกรณ์: กล้อง, ไมค์\r\n\r\nอุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+  เม้าส์(USB)+หัวแปลง HDMI to VGA 1 หัว                                                                                        ', '2021-03-03 02:22:02'),
(3, '6300001', 'Notebook Dell03', 1, 1, 0, 'ปกติ', 'tds70514904020210213_102815.jpg', 'OS: Window 10 Pro 64 Bit\r\n\r\nโปรแกรมพื้นฐาน: Ms Office, ACDsee, PDF\r\n\r\nโปแกรมอื่นๆ: Photo Shop, Illustrstor, Sketh Up, MS Team, Zoom\r\n\r\nอุปกรณ์: กล้อง, ไมค์\r\n\r\nอุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+  เม้าส์(USB)+หัวแปลง HDMI to VGA 1 หัว                                                              ', '2021-04-30 11:02:34'),
(4, '5500001', 'Notebook Acer 4736', 1, 0, 1, 'ปกติ', 'tds138722010320210213_102830.jpg', 'OS: Window 7 Pro 32 Bit\r\n\r\nโปรแกรมพื้นฐาน: Ms Office, ACDsee, PDF\r\n\r\nโปแกรมอื่นๆ:  MS Team, Zoom\r\n\r\nอุปกรณ์: กล้อง, ไมค์\r\n\r\nอุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+  เม้าส์(USB)+หัวแปลง HDMI to VGA 1 หัว                                                                           ', '2021-04-29 01:36:56'),
(5, '5500002', 'Notebook Compaq', 1, 0, 1, 'ชำรุด', 'tds92335958620210213_102842.jpg', 'OS: Window 7 Pro 32 Bit\r\n\r\nโปรแกรมพื้นฐาน: Ms Office, ACDsee, PDF\r\n\r\nโปแกรมอื่นๆ: MS Team, Zoom\r\n\r\nอุปกรณ์: กล้อง, ไมค์\r\n\r\nอุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+  เม้าส์(USB)+หัวแปลง HDMI to VGA 1 หัว                                                                                                                                                                                                                                                                                           ', '2021-05-02 01:50:52'),
(17, '-', 'สาย VGA ยาว 5 เมตร', 8, 0, 8, 'ปกติ', 'tds140223303120210213_102854.jpg', '#สาย #VGA #ต่อคอม #Cable VGA M/M (5M)\r\nCable VGA M/M (5M)\r\nสายส่งสัญญาณภาพ VGA (M/M)\r\nความยาวของสาย 5 เมตร                                                                                                    ', '2021-02-13 03:28:54'),
(19, '-', 'สาย VGA ยาว 1.5 เมตร', 5, 0, 5, 'ปกติ', 'tds80685507120210213_102908.jpg', '#สาย #VGA #ต่อคอม #Cable VGA M/M (5M)\r\nCable VGA M/M (5M)\r\nสายส่งสัญญาณภาพ VGA (M/M)\r\nความยาวของสาย 1.5 เมตร                                                                                                 ', '2021-02-13 03:29:08'),
(20, '-', 'หัวต่อ MAC to VGA', 1, 0, 1, 'ปกติ', 'tds154064237220210213_102947.jpg', 'Mini DisplayPort to VGA Adapter by Macparts\r\nสายสำหรับต่อออกจอหรือ Projector ที่ใช้ VGA \r\nสำหรับเครื่อง Mac ที่ใช้ Thunderbolts Port หรือ MiniDisplay Ports                                                              ', '2021-02-13 03:29:47'),
(21, '-', 'หัวแปลง HDMI to VGA ', 7, 0, 7, 'ปกติ', 'tds208751765320210213_103015.jpg', 'สายแปลง HDMI เป็น vga แปลงสัญญาณ HDMI แบบ digital เป็นสัญญาณ VGA \r\n \r\nใช้ได้กับกับ คอมพิวเตอร์โน๊ตบุ๊ค,กล่องรับสัญญาณดาวเทียมแบบ Hidef,ฮาร์ดดิสก์เพลเยอร์,Xbox 360,Mac mini,แท๊ปเลท โดยแปลงสัญญาณ HDMI เป็นสัญญาณ VGA\r\nมาตรฐาน สำหรับจอภาพทั่วไป หรือ เครื่องฉายโปรเจ็คเตอร์ โดยไม่ลดคุณภาพสัญญาณ\r\n \r\nรองรับความละเอียดได้ถึง 1980*1200 ( FULL HD )                                                                                           ', '2021-02-13 03:30:15'),
(26, '-', 'สาย HDMI ', 5, 0, 5, 'ปกติ', 'tds148545837420210213_103046.jpg', 'ใช้เสียบอุปกรณ์กล้อง คอมพิวเตอร์ ์ Notebook Tablet เข้าจอ HDMI\r\nรองรับ Full HD 1080p\r\nความยาวสาย 5เมตร                                            ', '2021-02-13 03:30:46'),
(57, '-', 'จอมิเตอร์ Dell', 1, 1, 0, 'ปกติ', 'tds87896382320210213_103103.jpg', 'ค่าความคมชัด (Contrast ratio)1000:1 (typical)\r\nBacklight Technology: WLED\r\nขนาดหน้าจอแสดงผล (Screen size)21.5 inches, 16.7 million colorsDot/Pixel Pitch0.248 x 0.248 mm\r\nความละเอียด (Resolutions)1920 x 1080 @ 60 HzPowerVoltage Required: 100 VAC to 240 VAC / 50 Hz or 60 Hz ? 3 Hz / 1.0 A (typical)\r\nพอร์ตเชื่อมต่อ VGA 1 Port , HDMI 1 Port                                                                 ', '2021-04-23 08:00:38'),
(61, '-', 'หัวแปลง Type C to VGA', 1, 0, 1, 'ปกติ', 'tds112082360020210213_103129.jpg', 'รุ่น : Type-C > VGA With USB 3.1 Hub (Type C Male to Type C/VGA/USB adapter Cable)\r\n\r\nSupport : VGA resolution up to 2048x1152@60Hz\r\n\r\nขนาด : 3.5 x 2.5 x 1 inc.(8 x 5.5 x 2 cm.)\r\n\r\nความยาว : 6.7 inc. (16cm.) จากหัวต่อ VGA จนถึงสาย usb-c\r\n\r\nสำหรับ : New MacBook (2015/2016 Model) ,Chorme pixel , Microfoft Lumia 950 XL and soon                                                    ', '2021-02-13 03:31:29'),
(62, '-', 'สาย Display Port ยาว 1.5 เมตร', 9, 0, 9, 'ปกติ', 'tds143919367320210213_103155.jpg', 'Connectors: Displayport 20pin male-male.\r\nGold-plated to ensure full conductivity without ghosting and data loss\r\nTransfer of Audio and Video signal.\r\nData transfer rate: 21.6 Gbit/s.                                       ', '2021-02-13 03:31:55'),
(63, '-', 'หัวแปลง Display Port to HDMI', 2, 0, 2, 'ปกติ', 'tds6249636720210213_103246.jpg', 'สำหรับต่อจากช่อง Displayport จากคอมพิวเตอร์ PC Desktop Notebook\r\nไปเข้าช่อง HDMi ที่จอคอมพิวเตอร์ Projector TV Plasma Display Home Theatre อื่นๆ                                       ', '2021-02-13 03:32:46'),
(64, '-', 'หัวแปลง Display Port to DVI', 3, 0, 3, 'ปกติ', 'tds161363234920210213_103325.jpg', 'Input: Latching 20 pin DisplayPort Male\r\nOutput: 24+5(Compatible with 24+1, 18+1,18+5 DVI Cable) pin DVI Female (Note: A separate DVI cable, not included, is required)\r\nSpecifications                                       ', '2021-02-13 03:33:25'),
(65, '-', 'หัวแปลง VGA to USB', 1, 0, 1, 'ปกติ', 'tds37742039820210213_103405.jpg', 'ใช้กับพอร์ต USB 3.0 ทำความละเอียดได้สูงสุด 1920x1080@60Hz\r\nใช้กับพอร์ต USB 2.0 ได้ แต่อาจทำความละเอียดได้ต่ำลงเป็น 800x600@60Hz\r\nไดรเวอร์สามารถใช้ได้กับ Windows7 ขึ้นไป\r\nไม่สามารถใช้กับคอมพิวเตอร์ที่ใช้ CPU Atom\r\nไม่สนับสนุน Macbook                                       ', '2021-02-13 03:34:05'),
(66, '-', 'หูฟัง JBL', 4, 0, 4, 'ปกติ', 'tds70166730320210213_103434.jpg', 'ประเภทหูฟัง	หูฟังแนบหู (On-Ear)\r\nมีสาย/ไร้สาย	มีสาย\r\nการเชื่อมต่อหูฟัง (Input)	AUX (3.5mm)\r\nไมโครโฟน	มีไมค์\r\nHeadphone Back Type	Closed Back\r\nอิมพีแดนซ์	32 โอห์ม\r\nการตอบสนองความถี่	20 - 20,000 เฮิรตซ์\r\nความยาวสาย	1.2 m                          ', '2021-02-13 03:34:34'),
(67, '-', 'กล้อง webcamc930e Logitech', 7, 0, 7, 'ปกติ', 'tds156292961020210116_104714.webp', 'CAMERA\r\nHeight x Width x Depth:\r\n29 mm x 94 mm x 24 mm\r\n\r\nCAMERA WITH CLIP\r\nHeight x Width x Depth:\r\n43.3 mm x 94 mm x 71 mm\r\nWeight with clip and cable 162 g\r\nSystem Requirements\r\n\r\nWindows® 7, Windows 8, or Windows 10\r\nmacOS X 10.7 or higher\r\nChrome™ OS Version 29.0.1547.70 and higher 2 GB RAM or more\r\nHard drive space for recorded videos\r\nOne USB 2.0 port                     ', '2021-04-23 04:37:55'),
(69, '-', 'Microphone C03U', 6, 6, 0, 'ปกติ', 'tds28073556520210213_103515.jpg', 'The C03U USB ใช้งานร่วมกับ Mac หรือ PC ส่วนใหญ่ DAW โปรแกรมรวม GarageBand The C03U มาพร้อมกับ Cakewalk® Sonar LE การผลิตเพลงซอฟต์แวร์, เพื่อให้คุณสามารถเพียงแค่เสียบไมโครโฟนเริ่มต้นการบันทึก... เพิ่มเติมไดรเวอร์หรือซอฟต์แวร์พิเศษจำเป็น นอกจากนี้เดสก์ท็อปขาตั้งไมโครโฟน,คลิปไมโครโฟน,สาย USB และกระเป๋ารวม ทั้งหมดนี้พร้อม its solid die-cast construction, ทำให้ C03U เพียงทนทานเหมือนเป็นแบบพกพา                            ', '2021-04-23 04:26:21'),
(70, '-', 'กล้อง Qcam6000', 4, 0, 4, 'ปกติ', 'tds209993071620210213_103543.jpg', 'กล้อง QCam 6000 Genius กล้องวิดีโอพร้อมไมค์ การสนทนาชัดเจนไร้เสียงรบกวนจากภายนอก ขาตั้งกล้องหมุนได้ 360 องศา บันทึกภาพได้ง่ายทุกมุมมอง มีฟังก์ชันปรับแสง และจับโฟกัส อัตโนมัติ บันทึกได้ชัดทั้งภาพและเสียง เชื่อมต่อง่ายด้วยสาย USB2.0                                                 ', '2021-02-13 04:02:12'),
(71, '-', 'Dlink Router WiFi 4G', 5, 5, 0, 'ปกติ', 'tds3619781920210116_110519.webp', 'LTE Bands:\r\nQuadband GSM/GPRS/EDGE\r\n850/900/1800/1900 MHz\r\nDevice Interfaces One 10/100/1000  Gigabit Ethernet WAN port\r\nFour 10/100/1000 Gigabit Ethernet LAN ports Two detachable 4G LTE antennas\r\nData Rates1\r\n\r\nLTE Downlink: Up to 150 Mbps\r\nLTE Uplink: Up to 50 Mbps\r\nDC-HSPA Downlink: Up to 42 Mbps\r\nDC-HSPA Uplink: Up to 5.72 Mbps                                   ', '2021-04-29 01:37:49'),
(72, '-', 'FOX USB Condenser Microphone', 5, 5, 0, 'ปกติ', 'tds178304496620210213_103612.jpg', '24 bit 96 kHz studio grade quality as in professional recording studios\r\nAccurate signal conversion by a large diaphragm condenser capsule\r\nHeadphone output with Zero latency monitoring\r\nMute button for muting microphone\r\nGain switch for mixing loud instruments                  ', '2021-04-23 04:27:45'),
(73, '-', 'Mouse Logitech M100R', 10, 0, 10, 'ปกติ', 'tds171375165420210213_103631.jpg', 'Windows-based PC\r\nWindows® XP, Windows Vista®, or Windows® 7, Windows® 8\r\nUSB port\r\nMac computer\r\nMac OS X 10.4 or later\r\nUSB port             ', '2021-02-13 03:36:31'),
(75, 'tds6400002', 'Visuallizer', 2, 0, 2, 'ปกติ', 'tds158070572020210213_104059.jpg', 'ใช้ต่อเข้าเครื่องคอมพิเวตอร์             ', '2021-02-13 03:40:59'),
(76, '-', 'HP Compaq 6200 Pro Microtower', 26, 26, 0, 'ปกติ', 'tds108730186120210213_104235.jpg', 'ซีพียู	Core i5\r\nรุ่นโปรเซสเซอร์	Core i5 2400\r\nความเร็วในการประมวลผล	3.10GHz\r\nเมมโมรี่และหน่วยความจำ	แรม	4GB\r\nประเภทหน่วยความจำ	DDR3\r\nสล็อตหน่วยความจำ	4\r\nชนิดหน่วยความจำ	HDD\r\nHDD	500GB\r\nซอฟต์แวร์\r\nOS Windows10 Pro, Office 2013, ACDSee, Photo Shop 2017, Illustrator 2017, Indesign                           ', '2021-02-13 22:47:16'),
(77, 'สถ.ค.0343/64', 'Notebook Dell04', 1, 1, 0, 'ปกติ', 'tds156716213820210426_162337.png', 'OS: Window 10 Pro 64 Bit โปรแกรมพื้นฐาน: Ms Office pro 2016, PDF foxit phanthom โปแกรมอื่นๆ: Photo Shop, Illustrstor, MS Team, Zoom อุปกรณ์: กล้อง, ไมค์ อุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+ เม้าส์(USB)                                                                              ', '2021-04-30 08:57:20'),
(78, 'สถ.ค.0344/64', 'Notebook Dell05', 1, 1, 0, 'ปกติ', 'tds86842349920210426_162326.png', 'OS: Window 10 Pro 64 Bit โปรแกรมพื้นฐาน: Ms Office pro 2016, PDF foxit phanthom โปแกรมอื่นๆ: Photo Shop, Illustrstor, MS Team, Zoom อุปกรณ์: กล้อง, ไมค์ อุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+ เม้าส์(USB)                                                                              ', '2021-04-26 09:24:11'),
(79, '-', 'TP-Link MR400', 12, 2, 10, 'ปกติ', 'tds54275181920210423_112208.png', 'เครือข่าย 4G ที่ทันสมัย - แบ่งปันการเข้าถึงอินเทอร์เน็ตด้วยอุปกรณ์ Wi-Fi สูงสุด 64 เครื่องและเพลิดเพลินกับความเร็วในการดาวน์โหลดสูงสุด 150 Mbps\r\nAC1200 Wi-Fi - สร้างเครือข่าย Wi-Fi แบบดูอัลแบนด์พร้อมกันด้วยความเร็วสูงสุด 300 Mbps บนแบนด์ 2.4 GHz และ 867 Mbps บนแบนด์ 5 GHz\r\n', '2021-04-23 08:40:19'),
(80, '-', 'Microphone Fifine', 10, 0, 10, 'ปกติ', 'tds37024948220210423_113247.png', 'ชุดไมค์อัดเสียง FIFNE - T669\r\n\r\nไมโครโฟนคอนเดนเซอร์ การสตรีมได้อย่างเรียบง่ายและชัดเจน รองรับการใช้งานร่วมกับ Discord, Twitch และ OBS เสียบไมค์พร้อมใช้งาน ด้วยอะแดปเตอร์ USB  มีปุ่มปรับระดับเสียงเพื่อการปรับแต่งอย่างรวดเร็ว โดยไม่จำเป็นต้องหยุดชั่วคราวระหว่างการไลฟ์ รองรับการใช้งานร่วมกับ Discord, Twitch และ OBS ให้คุณเลือกหนึ่งตัวเลือกได้ตามต้องการและเสียบไมค์พร้อมใช้งาน             ', '2021-04-23 04:34:03'),
(81, '-', 'กล้อง OKER A229', 1, 0, 1, 'ปกติ', 'tds6587252720210423_113630.png', 'Full HD Video calling  :  1920 x 1080,2.0Mega pixels\r\nVideo format  :  MJPEG/YUV\r\nTransmission rate  :  1920×1080 30F/S,1280×720 30F/S,640×480 30F/S\r\nFocus type  : Fixed focus\r\nInterface type  :  USB2.0\r\nMIC type  : Built-in high – sensitivity noise reducing microphone', '2021-04-23 04:36:30'),
(82, '-', 'Notebook dell06', 1, 1, 0, 'ปกติ', 'tds193247372920210426_162315.png', 'OS: Window 10 Pro 64 Bit โปรแกรมพื้นฐาน: Ms Office pro 2016, PDF foxit phanthom โปแกรมอื่นๆ: Photo Shop, Illustrstor, MS Team, Zoom อุปกรณ์: กล้อง, ไมค์ อุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+ เม้าส์(USB)                                                    ', '2021-04-26 09:24:01'),
(83, 'สถ.ค.0346/64', 'Notebook Dell07', 1, 1, 0, 'ปกติ', 'tds34217220720210426_162256.png', 'OS: Window 10 Pro 64 Bit โปรแกรมพื้นฐาน: Ms Office pro 2016, PDF foxit phanthom โปแกรมอื่นๆ: Photo Shop, Illustrstor, MS Team, Zoom อุปกรณ์: กล้อง, ไมค์ อุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+ เม้าส์(USB)                                       ', '2021-04-26 09:23:57'),
(84, '-', 'Notebook Dell08', 1, 0, 1, 'ปกติ', 'tds93938717320210503_104406.jpeg', 'OS: Window 10 Pro 64 Bit โปรแกรมพื้นฐาน: Ms Office pro 2016, PDF foxit phanthom โปแกรมอื่นๆ: Photo Shop, Illustrstor, MS Team, Zoom อุปกรณ์: กล้อง, ไมค์ อุปกรณ์เสริม: กระเป๋าสะพาย,+สายชาร์ตอะแดปเตอร์+ เม้าส์(USB)                   ', '2021-05-03 03:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `return_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `r1_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `dape_name` varchar(100) NOT NULL,
  `b_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_item`
--

CREATE TABLE `type_item` (
  `type_id` int(5) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dept_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `dept_name`, `tel`, `email`, `level`) VALUES
(1, 'admin01', '1234', 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', '0870795932', 'tonrak@hotmail.com', 'admin'),
(82, 'user01', 'user01', 'ธีรศักดิ์ ฤทธิรงค์', 'เทคโนโลยีและสารสนเทศ', '0870795932', 'tonrak@hotmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `type_item`
--
ALTER TABLE `type_item`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_item`
--
ALTER TABLE `type_item`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
