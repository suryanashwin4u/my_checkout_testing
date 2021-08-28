-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2021 at 04:33 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses_redefedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_description`
--

CREATE TABLE `courses_description` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_plan` longtext NOT NULL,
  `course_description` longtext NOT NULL,
  `course_videos_link` longtext NOT NULL,
  `course_download_link` longtext NOT NULL,
  `course_about_us` varchar(255) NOT NULL,
  `course_feedback_form_link` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_description`
--

INSERT INTO `courses_description` (`course_id`, `course_name`, `course_plan`, `course_description`, `course_videos_link`, `course_download_link`, `course_about_us`, `course_feedback_form_link`) VALUES
(1, 'PT 360', '{\"INDIAN POLITY\":[\"Issues related to Constitution\",\"Central - Related to Constitution\",\"Legislature\",\"Judiciary\",\"Reservation Issues\",\"Governance\",\"Miscellaneous\"],\"INTERNATIONAL RELATIONS\":[\"Indian and Neighbors\",\"International Organization\",\"Treaty & Agreements\",\"Transport, Corridor, Pipelines\",\"West Asia\",\"International Financial Institutions\"],\"SOCIAL ISSUES\":[\"Women\",\"Children\",\"Other Vulnerable\",\"Education\",\"Health\",\"Food & Nutrition\"]}', 'description', 'Array', 'download link', 'about', 'feedback');

-- --------------------------------------------------------

--
-- Table structure for table `course_payment`
--

CREATE TABLE `course_payment` (
  `p_id` int(255) NOT NULL,
  `s_id` int(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_payment`
--

INSERT INTO `course_payment` (`p_id`, `s_id`, `course`, `payment_status`) VALUES
(1, 1, 'sociology', 'paid'),
(2, 1, 'course-2', 'paid'),
(3, 1, 'course-3', 'paid'),
(5, 1, 'course-5', 'unpaid'),
(6, 2, 'course-6', 'paid'),
(7, 2, 'sociology', 'paid'),
(8, 2, 'course-2', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `discount_coupons`
--

CREATE TABLE `discount_coupons` (
  `coupon_id` int(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_amt` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_coupons`
--

INSERT INTO `discount_coupons` (`coupon_id`, `coupon_code`, `coupon_amt`) VALUES
(1, 'abcdef', 2000),
(2, 'ghijkl', 5000),
(3, 'aaaaaa', 500),
(4, 'nnnnnn', 1321);

-- --------------------------------------------------------

--
-- Table structure for table `redefedu_courses`
--

CREATE TABLE `redefedu_courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_fee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redefedu_courses`
--

INSERT INTO `redefedu_courses` (`course_id`, `course_name`, `course_code`, `course_fee`) VALUES
(1, '20-20 and 50-50 Series 2021', 'TTFFS21', 2999),
(2, 'PT 360', 'PT360', 1099),
(3, 'PT 360 + MSGP 3 + 20-20 & 50-50 Combo', 'PT360MSGP3TTFFC', 5600),
(4, 'PT 360 + 20-20 & 50-50 Combo', 'PT360TTFFC', 4098),
(5, 'MSGP 2', 'MSGP2', 1800),
(6, 'MSGP 3', 'MSGP3', 2502),
(7, 'Mains in 300 Topics 2021', 'M300T21', 3006),
(8, 'Mains in 300 Topics + Mains Answer Building Combo', 'M300TMABC', 4764),
(9, 'Mains Answer Building', 'MAB', 2599),
(10, 'GS 4 Ethics 2021', 'GS4E21', 3999),
(11, 'CSAT', 'CSAT', 999),
(12, 'Prelims + Mains + Essay Foundation 2021 (Classroom + Test Series)', 'PMEF21', 40048),
(13, 'Prelims + Mains + Essay Foundation 2022 (Classroom + Test Series)', 'PMEF22', 48548),
(14, 'Prelims + Mains + Essay Foundation 2023 (Classroom + Test Series)', 'PMEF23', 57048),
(15, 'Prelims Test Series 2021\r\n', 'PTS21', 3001),
(16, 'GS Mains Test Series 2021', 'GSMTS21', 14599),
(17, 'Essay Test Series 2021', 'ETS21', 4199),
(18, 'Prelims + Mains Test Series 2021', 'PMTS21', 16949),
(19, 'Prelims + Mains + Essay Test Series 2021', 'PMETS21', 20049),
(20, 'Prelims Test Series 2022', 'PTS22', 4001),
(21, 'GS Mains Test Series 2022', 'GSMTS22', 15599),
(22, 'Essay Test Series 2022', 'ETS22', 5199),
(23, 'Prelims + Mains Test Series 2022', 'PMTS22', 18949),
(24, 'Prelims + Mains + Essay Test Series 2022', 'PMETS22', 23049),
(25, 'Prelims 2023', 'P23', 8999),
(28, 'Prelims + Mains Test Series 2023', 'PMTS23', 20949),
(29, 'Prelims + Mains + Essay Test Series 2023', 'PMETS23', 27049),
(41, 'Prelims 2021', 'P21', 4999),
(42, 'Mains 2021', 'M21', 12500),
(43, 'Essay 2021', 'E21', 4000),
(44, 'Prelims + Mains Combo 2021', 'PMC21', 16999),
(45, 'Prelims + Mains + Essay Combo 2021', 'PMEC21', 19999),
(46, 'Prelims 2022', 'P22', 7499),
(47, 'Mains 2022', 'M22', 14500),
(48, 'Essay 2022', 'E22', 5000),
(49, 'Prelims + Mains Combo 2022', 'PMC22', 21499),
(50, 'Prelims + Mains + Essay Combo 2022', 'PMEC22', 25499),
(51, 'Prelims 2023', 'P23', 8999),
(52, 'Mains 2023', 'M23', 16500),
(53, 'Essay 2023', 'E23', 6000),
(54, 'Prelims + Mains Combo 2023', 'PMC23', 24999),
(55, 'Prelims + Mains + Essay Combo 2023', 'PMEC23', 29999),
(56, 'Geography Optional Classroom 2021 ', 'GOC21', 13500),
(57, 'Geography Optional Classroom 2022', 'GOC22', 15500),
(58, 'Geography Optional Classroom 2023', 'GOC23', 18000),
(59, 'Geography Optional Test Series', 'GOTS', 13500),
(60, 'Geography Optional Foundation (Classroom + Test Series) 2021', 'GOF21', 24999),
(61, 'Geography Optional Foundation (Classroom + Test Series) 2022', 'GOF22', 28000),
(62, 'Geography Optional Foundation (Classroom + Test Series) 2023', 'GOF23', 34000),
(63, 'PSIR Optional Classroom 2021', 'PSIROC21', 13500),
(64, 'PSIR Optional Classroom 2022', 'PSIROC22', 15500),
(65, 'PSIR Optional Classroom 2023', 'PSIROC23', 18000),
(66, 'PSIR Optional Test Series 2021', 'PSIROTS21', 13500),
(67, 'PSIR Optional Test Series 2022', 'PSIROTS22', 15500),
(68, 'PSIR Optional Test Series 2023', 'PSIROTS23', 18000),
(69, 'PSIR Optional Foundation (Classroom + Test Series) 2021', 'PSIROF21', 24999),
(70, 'PSIR Optional Foundation (Classroom + Test Series) 2022', 'PSIROF22', 28000),
(71, 'PSIR Optional Foundation (Classroom + Test Series) 2023', 'PSIROF23', 34000),
(72, 'Sociology Optional Classroom 2021', 'SOC21', 13500),
(73, 'Sociology Optional Classroom 2022', 'SOC22', 15500),
(74, 'Sociology Optional Classroom 2023', 'SOC23', 18000),
(75, 'Sociology Optional Test Series 2021', 'SOTS21', 13500),
(76, 'Sociology Optional Test Series 2022', 'SOTS22', 15500),
(77, 'Sociology Optional Test Series 2023', 'SOTS23', 18000),
(78, 'Sociology Optional Foundation (Classroom + Test Series) 2021', 'SOF21', 24999),
(79, 'Sociology Optional Foundation (Classroom + Test Series) 2022', 'SOF22', 28000),
(80, 'Sociology Optional Foundation (Classroom + Test Series) 2023', 'SOF23', 34000),
(81, 'Public Administration Optional Classroom 2021', 'PAOC21', 13500),
(82, 'Public Administration Optional Classroom 2022', 'PAOC22', 15500),
(83, 'Public Administration Optional Classroom 2023', 'PAOC23', 18000),
(84, 'Public Administration Optional Foundation (Classroom + Test Series) 2021\n ', 'PAOF21', 24999),
(85, 'Public Administration Optional Foundation (Classroom + Test Series) 2022\r\n ', 'PAOF22', 28000),
(86, 'Public Administration Optional Foundation (Classroom + Test Series) 2023\r\n ', 'PAOF23', 34000),
(87, 'Geology Optional Classroom 2021', 'GOC21', 13500),
(88, 'Geology Optional Classroom 2022', 'GOC22', 15500),
(89, 'Geology Optional Classroom 2023', 'GOC23', 18000),
(90, 'Geology Optional Test Series 2021', 'GOTS21', 13500),
(91, 'Geology Optional Test Series 2022', 'GOTS22', 15500),
(92, 'Geology Optional Test Series 2023', 'GOTS23', 18000),
(93, 'Geology Optional Foundation (Classroom + Test Series) 2021', 'GOF21', 24999),
(94, 'Geology Optional Foundation (Classroom + Test Series) 2022', 'GOF22', 28000),
(95, 'Geology Optional Foundation (Classroom + Test Series) 2023', 'GOF23', 34000);

-- --------------------------------------------------------

--
-- Table structure for table `student_billing_details`
--

CREATE TABLE `student_billing_details` (
  `order_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `course_selected` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `date_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_billing_details`
--

INSERT INTO `student_billing_details` (`order_id`, `full_name`, `email_id`, `phone_no`, `course_selected`, `payment_status`, `coupon_code`, `payment_amount`, `transaction_id`, `date_time`) VALUES
(282, 'ashwani kumar', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\"]', 'complete', '', '2999', 'pay_Hf7zaRobQUnBGm', '30-07-21 05:06:08'),
(283, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\"]', 'complete', '', '2999', 'pay_Hgyhr5R3VyIeS7', '04-08-21 09:19:06'),
(284, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\",\"PT 360\"]', 'complete', '', '4098', 'pay_Hh134jacFOhXAi', '04-08-21 11:36:35'),
(285, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\"]', 'complete', '', '2999', 'pay_HhPPBtU7QLUzCG', '05-08-21 11:26:09'),
(286, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\"]', 'complete', '', '2999', 'pay_HhQhW2il13pytR', '05-08-21 12:42:12'),
(287, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"PT 360\"]', 'complete', '', '1099', 'pay_HhmlKDVWG8Oz8j', '06-08-21 10:17:05'),
(288, 'sumit kumar', 'sumitkumar007@gmail.com', '8076452716', '[\"PT 360\"]', 'complete', '', '1099', 'pay_HhttkMAVgX2mlM', '06-08-21 05:15:54'),
(289, 'ashwani', 'suryanashwin4u@gmail.com', '8076452716', '[\"PT 360\"]', 'complete', '', '1099', 'pay_HiA4Y4bORoT3KS', '07-08-21 09:05:13'),
(290, 'sumit', 'suryanashwin4u@gmail.com', '8076452716', '[\"20-20 and 50-50 Series 2021\",\"PT 360\",\"MSGP 2\"]', 'complete', 'abcdef', '\n\n\n3898', 'pay_HiI7Vmj2SHh6K1', '07-08-21 04:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `student_lms_credentials`
--

CREATE TABLE `student_lms_credentials` (
  `id` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `courses_allowed` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_lms_credentials`
--

INSERT INTO `student_lms_credentials` (`id`, `email_id`, `password`, `courses_allowed`) VALUES
(55, 'suryanashwin4u@gmail.com', 'IETHoNVskM', '[\"20-20 and 50-50 Series 2021\"]'),
(57, 'suryanashwin4u@gmail.com', 'u1okBGdIzA', '[\"20-20 and 50-50 Series 2021\",\"PT 360\"]'),
(56, 'suryanashwin4u@gmail.com', 'f2oGt7bNLY', '[\"20-20 and 50-50 Series 2021\"]'),
(58, 'suryanashwin4u@gmail.com', '65QzN0JrLS', '[\"20-20 and 50-50 Series 2021\"]'),
(59, 'suryanashwin4u@gmail.com', 'XdNiZt8SD5', '[\"20-20 and 50-50 Series 2021\"]'),
(60, 'suryanashwin4u@gmail.com', '5AwsxoZF9V', '[\"PT 360\"]'),
(61, 'sumitkumar007@gmail.com', 'txLdQcDFTh', '[\"PT 360\"]'),
(62, 'suryanashwin4u@gmail.com', 'W1DrF9nPtK', '[\"PT 360\"]'),
(63, 'suryanashwin4u@gmail.com', '0nCZM6Gdkb', '[\"20-20 and 50-50 Series 2021\",\"PT 360\",\"MSGP 2\"]');

-- --------------------------------------------------------

--
-- Table structure for table `video_title_description_links`
--

CREATE TABLE `video_title_description_links` (
  `video_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `video_title` longtext NOT NULL,
  `video_description` longtext NOT NULL,
  `video_link` longtext NOT NULL,
  `video_code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_title_description_links`
--

INSERT INTO `video_title_description_links` (`video_id`, `course_name`, `video_title`, `video_description`, `video_link`, `video_code`) VALUES
(1, 'PT 360', 'Issues related to Constitution', 'Issues related to Constitution', '<iframe width=\'1280\' height=\'720\' src=\'https://www.youtube.com/embed/kBfx8ZYgxs0\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', ''),
(2, 'PT 360', 'Central - Related to Constitution', 'Central - Related to Constitution', '<iframe width=\'1280\' height=\'720\' src=\'https://www.youtube.com/embed/OHiLeVjHKyI\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', ''),
(3, 'PT 360', 'Legislature', 'Legislature', '<iframe width=\'1280\' height=\'725\' src=\'https://www.youtube.com/embed/XvbPvROrp0o\' title=\'YouTube video player\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_description`
--
ALTER TABLE `courses_description`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_payment`
--
ALTER TABLE `course_payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `discount_coupons`
--
ALTER TABLE `discount_coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `redefedu_courses`
--
ALTER TABLE `redefedu_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student_billing_details`
--
ALTER TABLE `student_billing_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `student_lms_credentials`
--
ALTER TABLE `student_lms_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_title_description_links`
--
ALTER TABLE `video_title_description_links`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_description`
--
ALTER TABLE `courses_description`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_payment`
--
ALTER TABLE `course_payment`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discount_coupons`
--
ALTER TABLE `discount_coupons`
  MODIFY `coupon_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `redefedu_courses`
--
ALTER TABLE `redefedu_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `student_billing_details`
--
ALTER TABLE `student_billing_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `student_lms_credentials`
--
ALTER TABLE `student_lms_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `video_title_description_links`
--
ALTER TABLE `video_title_description_links`
  MODIFY `video_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
