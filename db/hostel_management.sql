-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 08:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_rooms`
--

CREATE TABLE `add_rooms` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_beds` varchar(10) NOT NULL,
  `room_disc` varchar(100) NOT NULL,
  `room_status` enum('available','full') NOT NULL DEFAULT 'available',
  `room_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rooms`
--

INSERT INTO `add_rooms` (`room_id`, `hostel_id`, `room_type`, `room_no`, `room_beds`, `room_disc`, `room_status`, `room_date`) VALUES
(1, 1, 'Non Ac', '10', '3', '3 bed with 2 fans and single bathroom and toilet', 'available', '2017-03-02 00:08:25'),
(2, 2, 'Non Ac', '10', '3', '3 bed with 2 fans and single bathroom and toilet', 'available', '2017-03-02 10:07:45'),
(3, 1, 'Ac', '11', '1', 'AC, Toilet bathroom,and wordrobe ', 'available', '2017-03-02 10:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `comp_id` int(11) NOT NULL,
  `comp_title` varchar(100) NOT NULL,
  `comp_detail` varchar(1000) NOT NULL,
  `comp_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_date`) VALUES
(1, 'bca', '2017-02-23 16:55:29'),
(2, 'Mca', '2017-02-23 16:55:36'),
(3, 'Engineering', '2017-02-23 16:55:51'),
(4, 'Architech', '2017-02-23 16:56:16'),
(5, 'Bsc', '2017-02-23 16:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_type`
--

CREATE TABLE `hostel_type` (
  `hostel_id` int(11) NOT NULL,
  `hostel_typ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_type`
--

INSERT INTO `hostel_type` (`hostel_id`, `hostel_typ`) VALUES
(1, 'boys hostel'),
(2, 'girls hostel');

-- --------------------------------------------------------

--
-- Table structure for table `room_allote`
--

CREATE TABLE `room_allote` (
  `room_alt_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `std_enroll` varchar(20) NOT NULL,
  `room_alt_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_allote`
--

INSERT INTO `room_allote` (`room_alt_id`, `room_id`, `std_enroll`, `room_alt_date`) VALUES
(2, 3, '140863131017', '2017-03-02 12:55:29'),
(3, 2, '140863131095', '2017-03-02 12:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_chk_in`
--

CREATE TABLE `student_chk_in` (
  `std_chk_in_id` int(11) NOT NULL,
  `std_enroll` varchar(20) NOT NULL,
  `std_chk_in_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_chk_out`
--

CREATE TABLE `student_chk_out` (
  `std_chk_out_id` int(11) NOT NULL,
  `std_enroll` varchar(20) NOT NULL,
  `std_chk_out_reason` varchar(100) NOT NULL,
  `std_chk_out_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_leave_info`
--

CREATE TABLE `student_leave_info` (
  `std_leave_id` int(11) NOT NULL,
  `std_enroll` varchar(20) NOT NULL,
  `std_leave_reason` varchar(100) NOT NULL,
  `std_leave_date_from` varchar(30) NOT NULL,
  `std_leave_date_to` varchar(30) NOT NULL,
  `std_leave_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `std_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_enroll` varchar(20) NOT NULL,
  `std_dob` varchar(30) NOT NULL,
  `std_fathername` varchar(100) NOT NULL,
  `std_mothername` varchar(100) NOT NULL,
  `std_gender` varchar(20) NOT NULL,
  `std_add` varchar(200) NOT NULL,
  `std_state` varchar(30) NOT NULL,
  `std_city` varchar(30) NOT NULL,
  `std_contact` varchar(20) NOT NULL,
  `std_prnt_contact` varchar(20) NOT NULL,
  `std_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`std_id`, `course_id`, `std_name`, `std_enroll`, `std_dob`, `std_fathername`, `std_mothername`, `std_gender`, `std_add`, `std_state`, `std_city`, `std_contact`, `std_prnt_contact`, `std_date`) VALUES
(1, 3, 'jaydip rajendra shinde', '140863131018', '1993-10-22', 'rajendrabhai', 'kavitaben', 'Male', '11,nandanvan society N/b SBS society dhakvada', 'gujarat', 'billimora', '7874011787', '9687666444', '2017-02-23 17:12:53'),
(2, 3, 'vikas mistry', '140863131017', '1996-05-14', 'jayantibhai sudhirbhai mistry', 'vishakhaben jayantibhai misrty', 'Male', 'chanod colony ', 'gujarat', 'vapi', '9856321478', '7698993093', '2017-03-01 23:21:03'),
(3, 3, 'hetal  kishorbhai parab', '140863131095', '1997-06-10', 'kishorbhai jayantibhai parab', 'kokilaben kishorbhai parab', 'female', '22,apex building ,fuvara circle ,gandhi road ', 'gujarat', 'navsari', '7845632145', '9632178521', '2017-03-02 12:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visit_id` int(11) NOT NULL,
  `visit_name` varchar(30) NOT NULL,
  `visit_contact` varchar(30) NOT NULL,
  `visit_for` varchar(50) NOT NULL,
  `visit_disc` varchar(100) NOT NULL,
  `visit_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warden_reg`
--

CREATE TABLE `warden_reg` (
  `warden_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `ward_name` varchar(100) NOT NULL,
  `ward_add` varchar(200) NOT NULL,
  `ward_state` varchar(20) NOT NULL,
  `ward_city` varchar(20) NOT NULL,
  `ward_contact` varchar(20) NOT NULL,
  `ward_gender` varchar(30) NOT NULL,
  `ward_login_id` varchar(20) NOT NULL,
  `ward_login_pass` varchar(30) NOT NULL,
  `ward_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden_reg`
--

INSERT INTO `warden_reg` (`warden_id`, `hostel_id`, `ward_name`, `ward_add`, `ward_state`, `ward_city`, `ward_contact`, `ward_gender`, `ward_login_id`, `ward_login_pass`, `ward_date`) VALUES
(3, 2, 'radhikaben kiranbhai patel', '24B,lal darvaja,sai mahel apertment', 'gujarat', 'surat', '7876541787', 'female', 'hostel_787', '123456', '2017-03-03 00:18:46'),
(4, 1, 'jaimin sureshbhai patel', '28 B,galaxy apartment', 'gujarat', 'billimora', '7874562139', 'Male', 'hostel_boz_787', '123456', '2017-03-03 00:22:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rooms`
--
ALTER TABLE `add_rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `hostel_type`
--
ALTER TABLE `hostel_type`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `room_allote`
--
ALTER TABLE `room_allote`
  ADD PRIMARY KEY (`room_alt_id`),
  ADD KEY `std_enroll` (`std_enroll`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `student_chk_in`
--
ALTER TABLE `student_chk_in`
  ADD PRIMARY KEY (`std_chk_in_id`),
  ADD KEY `std_enroll` (`std_enroll`);

--
-- Indexes for table `student_chk_out`
--
ALTER TABLE `student_chk_out`
  ADD PRIMARY KEY (`std_chk_out_id`),
  ADD KEY `std_enroll` (`std_enroll`);

--
-- Indexes for table `student_leave_info`
--
ALTER TABLE `student_leave_info`
  ADD PRIMARY KEY (`std_leave_id`),
  ADD KEY `std_enroll` (`std_enroll`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `std_enroll` (`std_enroll`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visit_id`);

--
-- Indexes for table `warden_reg`
--
ALTER TABLE `warden_reg`
  ADD PRIMARY KEY (`warden_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rooms`
--
ALTER TABLE `add_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hostel_type`
--
ALTER TABLE `hostel_type`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room_allote`
--
ALTER TABLE `room_allote`
  MODIFY `room_alt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_chk_in`
--
ALTER TABLE `student_chk_in`
  MODIFY `std_chk_in_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_chk_out`
--
ALTER TABLE `student_chk_out`
  MODIFY `std_chk_out_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_leave_info`
--
ALTER TABLE `student_leave_info`
  MODIFY `std_leave_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `warden_reg`
--
ALTER TABLE `warden_reg`
  MODIFY `warden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_allote`
--
ALTER TABLE `room_allote`
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `add_rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_chk_in`
--
ALTER TABLE `student_chk_in`
  ADD CONSTRAINT `std_enroll` FOREIGN KEY (`std_enroll`) REFERENCES `student_reg` (`std_enroll`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warden_reg`
--
ALTER TABLE `warden_reg`
  ADD CONSTRAINT `hostel_id` FOREIGN KEY (`hostel_id`) REFERENCES `hostel_type` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
