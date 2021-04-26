-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2021 at 09:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wise_edu_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `we_country_list`
--

CREATE TABLE `we_country_list` (
  `we_country_id` int(200) NOT NULL,
  `we_country_name` varchar(200) NOT NULL,
  `we_country_alias` varchar(20) NOT NULL,
  `we_country_demographics` text NOT NULL,
  `we_country_cover_image` text NOT NULL,
  `we_country_flag_icon` text NOT NULL,
  `we_country_dial_code` int(10) NOT NULL,
  `we_country_currency` varchar(50) NOT NULL,
  `we_country_lat_long` varchar(50) NOT NULL,
  `we_country_population` tinytext NOT NULL,
  `we_country_official_language` varchar(50) NOT NULL,
  `we_country_capital` varchar(100) NOT NULL,
  `we_country_details_added_at` varchar(50) NOT NULL,
  `we_country_details_updated_at` varchar(50) NOT NULL,
  `we_country_details_added_by` int(200) NOT NULL,
  `we_country_is_popular` tinytext NOT NULL,
  `we_country_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_country_list`
--

INSERT INTO `we_country_list` (`we_country_id`, `we_country_name`, `we_country_alias`, `we_country_demographics`, `we_country_cover_image`, `we_country_flag_icon`, `we_country_dial_code`, `we_country_currency`, `we_country_lat_long`, `we_country_population`, `we_country_official_language`, `we_country_capital`, `we_country_details_added_at`, `we_country_details_updated_at`, `we_country_details_added_by`, `we_country_is_popular`, `we_country_status`) VALUES
(1, 'Ukraine', 'ukraine', 'Ukraine is a developing country ranking 74th in the Human Development Index. It is the poorest country in Europe alongside Moldova, suffering from a very high poverty rate as well as severe corruption. However, because of its extensive fertile farmlands, Ukraine is one of the largest grain exporters in the world. It also maintains the third-largest military in Europe after Russia and France. Ukraine is a unitary republic under a semi-presidential system with separate powers: legislative, executive, and judicial branches. The country is a member of the United Nations, the Council of Europe, the OSCE, the GUAM organization and is one of the founding states of the CIS, even though it is not a member of the organization.', 'https://images.unsplash.com/photo-1533485496759-b919144fb6d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/125px-Flag_of_Ukraine.svg.png', 380, 'Hryvnia (₴) (UAH)', '48.3794° N, 31.1656° E', '4.44 Crores', 'Ukrainian', 'Kyiv', '', '', 1, 'Y', 1),
(2, 'Armenia', 'armenia', 'Armenia is a developing country and ranks 81st on the Human Development Index (2018). Its economy is primarily based on industrial output and mineral extraction. While Armenia is geographically located in the South Caucasus, it is generally considered geopolitically European. Since Armenia aligns itself in many respects geopolitically with Europe, the country is a member of numerous European organizations including the Council of Europe, the Eastern Partnership, Eurocontrol, the Assembly of European Regions, and the European Bank for Reconstruction and Development. Armenia is also a member of certain regional groups throughout Eurasia, including the Asian Development Bank, the Collective Security Treaty Organization, the Eurasian Union, and the Eurasian Development Bank. Armenia supports the de facto independent Artsakh, which was proclaimed in 1991. Armenia also recognises the Armenian Apostolic Church, the world\'s oldest National church, as the country\'s primary religious establishment. The unique Armenian alphabet was created by Mesrop Mashtots in 405 AD.', 'https://images.unsplash.com/photo-1536645152842-6b5fbacf1153?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80', 'https://en.wikipedia.org/wiki/File:Flag_of_Armenia.svg', 374, 'Dram (‎֏‎) (‎AMD‎)‎', '40.0691° N, 45.0382° E', '29.6 Lakhs', 'Armenian', 'Yerevan', '', '', 1, 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `we_location_list`
--

CREATE TABLE `we_location_list` (
  `we_location_id` int(200) NOT NULL,
  `we_location_country_id` int(200) NOT NULL,
  `we_location_name` varchar(100) NOT NULL,
  `we_location_alias` varchar(50) NOT NULL,
  `we_location_description` text NOT NULL,
  `we_location_cover_image` text NOT NULL,
  `we_location_details_added_at` varchar(50) NOT NULL,
  `we_location_details_updated_at` varchar(50) NOT NULL,
  `we_location_details_added_by` int(200) NOT NULL,
  `we_location_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_location_list`
--

INSERT INTO `we_location_list` (`we_location_id`, `we_location_country_id`, `we_location_name`, `we_location_alias`, `we_location_description`, `we_location_cover_image`, `we_location_details_added_at`, `we_location_details_updated_at`, `we_location_details_added_by`, `we_location_status`) VALUES
(1, 1, 'Vinnytsia', 'vinnytsia', 'Vinnytsia is a city on the Southern Bug River, in west-central Ukraine. Set in the river, the large Multimedia Fountain Roshen emits sound and colored light. The landscaped Gorky Park has a skate park, sports stadium and planetarium. The Pirogov Estate Museum complex, commemorating surgeon Nikolay Pirogov, includes a house, pharmacy and burial vault. The vast Friendship of Peoples Park has a lake and forested areas.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Vinnytsia%2C_Soborna_St_02.jpg/1280px-Vinnytsia%2C_Soborna_St_02.jpg', '', '', 1, 1),
(2, 1, 'Ternopil', 'ternopil', 'Ternopil is a city in western Ukraine, located on the banks of the Seret. Until 1944, it was known mostly as Tarnopol. Ternopil is one of the major cities of Western Ukraine and the historical regions of Galicia and Podolia. It is served by Ternopil Airport. The population of Ternopil was estimated at 224,047', 'https://upload.wikimedia.org/wikipedia/commons/9/99/UA-TE_Ternopil_Buran_18-06-16.JPG', '', '', 1, 1),
(3, 1, 'Lviv', 'lviv', 'Lviv is a city in western Ukraine, around 70 kilometers from the border with Poland. Traces of its Polish and Austro-Hungarian heritage are evident in its architecture, which blends Central and Eastern European styles with those of Italy and Germany. In High Castle Park, the mountaintop ruins of a 14th-century castle provide panoramic views of the city’s green-domed churches and the surrounding hills.', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Town_hall_in_Lviv2018.jpg', '', '', 1, 1),
(4, 1, 'Bukovinian', 'bukovinian', 'Lviv is a city in western Ukraine, around 70 kilometers from the border with Poland. Traces of its Polish and Austro-Hungarian heritage are evident in its architecture, which blends Central and Eastern European styles with those of Italy and Germany. In High Castle Park, the mountaintop ruins of a 14th-century castle provide panoramic views of the city’s green-domed churches and the surrounding hills.', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Town_hall_in_Lviv2018.jpg', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `we_program_list`
--

CREATE TABLE `we_program_list` (
  `we_program_id` int(200) NOT NULL,
  `we_program_name` varchar(100) NOT NULL,
  `we_program_alias` varchar(50) NOT NULL,
  `we_program_description` text NOT NULL,
  `we_program_details_added_at` varchar(50) NOT NULL,
  `we_program_details_updated_at` varchar(50) NOT NULL,
  `we_program_details_added_by` int(200) NOT NULL,
  `we_program_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_program_list`
--

INSERT INTO `we_program_list` (`we_program_id`, `we_program_name`, `we_program_alias`, `we_program_description`, `we_program_details_added_at`, `we_program_details_updated_at`, `we_program_details_added_by`, `we_program_status`) VALUES
(1, 'MBBS', 'mbbs', 'Bachelor of Medicine and Bachelor of Surgery, popularly known as MBBS, is the most popular undergraduate medical program. The program covers various fields of medicine and human anatomy to teach the students how to verify different diseases and cure them.', '', '', 1, 1),
(2, 'Engineering', 'engineering', 'Engineering is a stream of education that involves the application of Science, Technology, and Mathematics to innovate, design, develop and maintain machines, structures, software, hardware, and systems & processes.', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `we_univeristy_list`
--

CREATE TABLE `we_univeristy_list` (
  `we_univeristy_id` int(200) NOT NULL,
  `we_univeristy_country_id` int(200) NOT NULL,
  `we_univeristy_location_id` int(200) NOT NULL,
  `we_univeristy_name` varchar(200) NOT NULL,
  `we_univeristy_alias` varchar(50) NOT NULL,
  `we_university_cover_image` text NOT NULL,
  `we_univeristy_type` tinytext NOT NULL,
  `we_univeristy_details_added_at` varchar(50) NOT NULL,
  `we_univeristy_details_updated_at` varchar(50) NOT NULL,
  `we_univeristy_details_added_by` int(200) NOT NULL,
  `we_univeristy_status` tinyint(1) NOT NULL,
  `we_univeristy_is_popular` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_univeristy_list`
--

INSERT INTO `we_univeristy_list` (`we_univeristy_id`, `we_univeristy_country_id`, `we_univeristy_location_id`, `we_univeristy_name`, `we_univeristy_alias`, `we_university_cover_image`, `we_univeristy_type`, `we_univeristy_details_added_at`, `we_univeristy_details_updated_at`, `we_univeristy_details_added_by`, `we_univeristy_status`, `we_univeristy_is_popular`) VALUES
(1, 1, 1, 'VINNYTSIA NATIONAL MEDICAL UNIVERSITY', 'vinnytsia-national-medical-university', 'https://images.unsplash.com/photo-1613901118748-3da557eb37cf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80', 'public', '', '', 1, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `we_university_data`
--

CREATE TABLE `we_university_data` (
  `we_university_data_id` int(200) NOT NULL,
  `we_university_id` int(200) NOT NULL,
  `we_university_facts` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `we_university_profile` text NOT NULL,
  `we_university_degree_duration` text NOT NULL,
  `we_university_accommodation` text NOT NULL,
  `we_university_fee_structure` text NOT NULL,
  `we_university_entry_requirement` text NOT NULL,
  `we_university_entry_recognition` text NOT NULL,
  `we_university_data_added_at` varchar(50) NOT NULL,
  `we_university_data_updated_at` varchar(50) NOT NULL,
  `we_university_data_added_by` int(200) NOT NULL,
  `we_university_data_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `we_university_data`
--

INSERT INTO `we_university_data` (`we_university_data_id`, `we_university_id`, `we_university_facts`, `we_university_profile`, `we_university_degree_duration`, `we_university_accommodation`, `we_university_fee_structure`, `we_university_entry_requirement`, `we_university_entry_recognition`, `we_university_data_added_at`, `we_university_data_updated_at`, `we_university_data_added_by`, `we_university_data_status`) VALUES
(1, 1, '{TYPE:PUBLIC, CITY:VINNYTSIA, COURSE DURATION:6 YEARS, COURSE:M.D. PHYSICIAN, LANGUAGE:ENGLISH, TUTION FEE:5000$}', '<b>Vinnytsia National Medical University</b> was created in 1921. More than 500 teachers, including 90 doctors\r\nof science, professors, 340 candidates of Science currently work at the University.\r\nThe university has 5 hostels, 4 canteens, 7 buffets, a sports complex, a preventive health center, and sanitary sports bases on the shores of the Black Sea and the Southern Bug river.\r\nThe cultural leisure of the students is varied: there are 36 amateur circles and studios (dancing, national\r\ninstruments one, folklore ensemble, folk choir “Nadbuzhanka”, 28 sports circles). For more than 40 years,\r\nthe National Pirogov Memorial Medical University, Vinnytsia has been training medical personnel from\r\ncountries of Asia, Africa, Latin America, and Europe (including Greece, Portugal, Spain, Germany, Middle\r\nEast, France, Sweden, Canada, etc.).\r\nThe university is accredited in Ukraine, possessing the status of higher educational establishment of the IV\r\n(highest) level, according to the decision of SAC ¹ 020064 series ÑÄ – IV of 22.11.1999. Taking into account\r\nnation-wide and international recognition of results of its activity, by the decree of the President of Ukraine\r\nL.D.Kuchma of June 19, 2002, the University was given national status. Besides Vinnytsia National Medical University medical university, the same National status has only been given to Kyiv National Medical University n.a. A.A.Bogomolets.\r\nThe university is furnished with modern educational, scientific, and treatment-diagnostic equipment. The construction of the third new educational building is completed. At Vinnitsa\r\nNational Medical University studies more than 5,500 students and doctors, practical students/\r\nfieldworkers, among them more than 600 are foreign citizens. Educational rooms, hostels and places of rest are reliably guarded by police at the University’s expense.', 'The degree awarded by Vinnitsa National Medical University is MD (Physician) which is equivalent\r\nto MBBS in India. The course duration for MBBS in Ukraine is 5.8 years. VNMU’s degree is\r\n\r\nrecognised by MCI &amp; WHO. The degree is also recognised by the International Medical Education\r\nDirectory (IMED), US Education Department and General Council Of Medicine of Great Britain.\r\nThe total duration of the course at Vinnitsa National Medical University is 5.8 years,\r\nwhich is the same as all the other universities teaching MBBS in Ukraine.\r\nThe first 3 years are pre-clinical where 20% of the teaching is practical training and the rest is theoretical.\r\nAfter this, the students appear for KROK-1 and upon clearing it, the students move to the 4th year. The\r\nfinal 3 years is the clinical phase where all the classes will be held in different hospitals depending on the\r\nsubjects being taught to the student at the point of time.\r\n\r\nAfter completing the course, the student needs to clear KROK-2. Once this is done, the student will be\r\nawarded MD Physician degree which is equivalent to MBBS in India. The student can then come back to\r\nIndia and sit for the licensing exam or go for licensing exam of any other country.', '● All Vinnitsa National Medical University hostels are located within 5-7 minutes walking distance from\r\nthe University’s main building.\r\n● The hostels host both girls and boys providing relief to parents about the security of the students.\r\n● The rooms provided in the hostel are fully furnished with central heating facility present in every room.\r\n● Rooms are available on sharing basis.\r\n● The rooms vary in size and number of conveniences. Dormitory rooms at VNMU’s hostel can\r\naccommodate 2, 3 or 4 students in one room.All rooms are equipped with beds, mattress, pillow, blanket, desk, chair, central-heating facility and suitable\r\nlighting for both study and relaxation. There are common areas where students can play and mingle. Upon\r\nthe student’s arrival on campus, specific accommodations are assigned and after a satisfactory health\r\nreport.\r\nVinnytsia National Medical University hostel features 24-hour access to security and emergency services,\r\nmaking it easy to get assistance when you need it. As a campus resident, you also have access to all the\r\nVNMU support services such as Campus Security Services, Counselling Services and Health Services.', 'TUTION FEES – 5000\r\nACCOMMODATION FEES – 300\r\nNote:\r\n\r\nAdmission, application, and visa charges will be extra.\r\nFlight tickets at actual rate extra.\r\nFood expenses per year = Approx. INR 70,000 per year extra.', '<p>The eligibility criteria for admission in Vinnytsia National Medical University for an Indian student is as follows:</p>\r\n\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Entrance Exam in India</td>\r\n<td>There is no entrance exam in India like IELTS/SAT, etc. NEET qualification is a must.</td>\r\n</tr>\r\n<tr>\r\n<td>Age</td>\r\n<td>The student must be at least 17 years old as on 31st December of the year in which the admission is being taken.</td>\r\n</tr>\r\n<tr>\r\n<td>Board</td>\r\n<td>The candidate must have completed class 12th from a regular and recognised board.</td>\r\n</tr>\r\n<tr>\r\n<td>Marks in class 12th</td>\r\n<td>The student must have 50% marks individually in Physics, Chemistry and Biology in class 12th. The student must have studied Physics, Chemistry, Biology and English as compulsory subjects in 11th and 12th. The board should be a recognised one.</td>\r\n</tr>\r\n<tr>\r\n<td>NEET</td>\r\n<td>You need to qualify NEET for admission in any MCI recognised medical university in Ukraine. NEET is valid for 3 years from 2018 onwards.</td>\r\n</tr>\r\n<tr>\r\n<td>Passport</td>\r\n<td>The student must hold a valid passport.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n\r\n<p style=\"text-align: left;\">Note:</p>\r\n\r\n<ul>\r\n<li style=\"text-align: left;\" aria-level=\"1\">At the time of applying for admission letter, it is not necessary to have a passport. Admission letter can be issued if the student has a valid id proof such as Aadhar card. However, for the invitation letter and for the visa, a valid passport is required.</li>\r\n<li style=\"text-align: left;\" aria-level=\"1\">Admission is not possible in VNMU if the student has not qualified NEET.</li>\r\n</ul>', 'Vinnytsia National Medical University is recognized by the following:\r\n● The Medical Council of India (MCI)\r\n● World Health Organisation (WHO)\r\n● ECFMG\r\n● Medical Board of California\r\n● Education Ministry of Ukraine\r\n\r\nThis means that you can appear for the licensing exams in countries such as India, the USA, UK, etc., after\r\ngraduating from VNMU.', '', '', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `we_country_list`
--
ALTER TABLE `we_country_list`
  ADD PRIMARY KEY (`we_country_id`);

--
-- Indexes for table `we_location_list`
--
ALTER TABLE `we_location_list`
  ADD PRIMARY KEY (`we_location_id`);

--
-- Indexes for table `we_program_list`
--
ALTER TABLE `we_program_list`
  ADD PRIMARY KEY (`we_program_id`);

--
-- Indexes for table `we_univeristy_list`
--
ALTER TABLE `we_univeristy_list`
  ADD PRIMARY KEY (`we_univeristy_id`);

--
-- Indexes for table `we_university_data`
--
ALTER TABLE `we_university_data`
  ADD PRIMARY KEY (`we_university_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `we_country_list`
--
ALTER TABLE `we_country_list`
  MODIFY `we_country_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `we_location_list`
--
ALTER TABLE `we_location_list`
  MODIFY `we_location_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `we_program_list`
--
ALTER TABLE `we_program_list`
  MODIFY `we_program_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `we_univeristy_list`
--
ALTER TABLE `we_univeristy_list`
  MODIFY `we_univeristy_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `we_university_data`
--
ALTER TABLE `we_university_data`
  MODIFY `we_university_data_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
