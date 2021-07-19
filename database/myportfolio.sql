-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 11:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` text NOT NULL,
  `profile_pic` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_subtitle`, `profile_pic`, `about_desc`) VALUES
(1, 'PHP Developer', 'One of my objectives is to keep updated with the latest IT trends and technologies. I am confident that if given the opportunity, I can be a useful talent to the company.', 'me1.jpg', 'My primary goal is to apply my technical expertise all throughout the full software life cycle to ensure production and delivery of products and services that meet client specifications. Along with a competent software developing team, and with strong personal knowledge, skills, and experience in software engineering, I am positive that this goal can be achieved. ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `contact_add` varchar(255) NOT NULL,
  `contact_add_info` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_email_info` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `contact_num_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `contact_add`, `contact_add_info`, `contact_email`, `contact_email_info`, `contact_num`, `contact_num_info`) VALUES
(1, 'Address', 'Dr. B-B Tiu Clinic Building, located at 435 P del Rosario Ext. Sambag 1 Cebu City.', 'E-mail', 'ygbuhayv@gmail.com', 'Phone Number', '(+63) 09214338530');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `type`, `company`, `time`, `desc`, `location`, `task`) VALUES
(1, 'p', 'BARISTA, DEMONORA’S GARDEN \nCAFÉ AND RESTAURANT', 'JUNE 27, 2016 – JUNE 13, 2020', '', 'SAUDI ARABIA', 'Updates job knowledge by participating in \r\neducational opportunities, reading coffee, retail trade, and food service publications, maintaining personal networks.'),
(5, 'p', 'FOREIGN ASSISTANT, CHINA BANKING \r\nCORPORATION – FOREIGN CURRENCY \r\nDEPOSIT UNIT (FCDU)', 'MARCH 15, 2012 –\r\nMARCH 15, 2015', '', 'Manila, Philippines', 'Investigates and monitors outgoing wire \r\ntransfer problem items and coordinate with the branches concerned and advises foreign bank for the proper action to be taken.\r\n'),
(6, 's', 'ATTENDING UDEMY', 'FEB. 8, 2021 – at Present', 'I am a junior developer seeking a position in web development or technical support where i can apply my knowledge and skills for continuous improvement.', '', 'Coordinate with co-developers and keeps \nproject manager well informed of the status \nof development effort and serves as liaison \nbetween development staff and project \nmanager.'),
(7, 'p', 'CLERK, BANCO DE ORO – HEAD OFFICE, (CARD INVENTORY MANAGEMENT Dept.) CIM Dept.', 'Sept. 27, 2010 – mar 11, 2011', '', 'Manila, Philippines', 'Maintaining confidentiality of documents and papers of the dept. or organization.'),
(8, 'e', 'Northwest Samar State University', '2006-2010', 'Bachelor of Science in Computer Science', 'Calbayog City, Samar', '');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `icons` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `subtitle`, `icons`) VALUES
(1, 'Vincent Y. Ygbuhay', 'Interested in working as a <span>PHP Developer</span> for a leading software company<br> and serve its clients by providing excellent software experience<br> and technical support. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` int(11) NOT NULL,
  `home_section` int(11) NOT NULL,
  `about_section` int(11) NOT NULL,
  `resume_section` int(11) NOT NULL,
  `contact_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `home_section`, `about_section`, `resume_section`, `contact_section`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `personal_label` varchar(255) NOT NULL,
  `personal_val` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `personal_label`, `personal_val`) VALUES
(8, 'Birthday', 'December 12, 1989'),
(9, 'Course', 'Bachelor of Science in Computer Science'),
(10, 'University', 'Northwest Samar State University'),
(14, 'Age', '31'),
(15, 'Major', 'Programming'),
(16, 'Degree', 'College Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_name`, `skill_level`) VALUES
('HTML', 70),
('CSS', 70),
('JAVASCRIPT', 50),
('PHP', 60),
('BOOTSTRAP', 50),
('PHOTOSHOP', 60);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `github`, `linkedin`) VALUES
(1, 'https://www.facebook.com/vincent.ygbuhay01/', 'https://github.com/G-web007', 'https://www.linkedin.com/in/vincent-ygbuhay-7b9196189/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
