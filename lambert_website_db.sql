-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 04:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lambert_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page_table`
--

CREATE TABLE `about_page_table` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `section_bullet` varchar(255) NOT NULL,
  `section_heading` varchar(255) NOT NULL,
  `about_col_heading` varchar(255) NOT NULL,
  `about_col_content` text NOT NULL,
  `about_col_subtext` text NOT NULL,
  `about_col_two_heading` varchar(255) NOT NULL,
  `abt_icon_one` varchar(255) NOT NULL,
  `abt_heading_one` varchar(255) NOT NULL,
  `abt_text_one` text NOT NULL,
  `abt_icon_two` varchar(255) NOT NULL,
  `abt_heading_two` varchar(255) NOT NULL,
  `abt_text_two` text NOT NULL,
  `abt_icon_three` varchar(255) NOT NULL,
  `abt_heading_three` varchar(255) NOT NULL,
  `abt_text_three` text NOT NULL,
  `abt_icon_four` varchar(255) NOT NULL,
  `abt_heading_four` varchar(255) NOT NULL,
  `abt_text_four` text NOT NULL,
  `abt_sec_two_text` text NOT NULL,
  `abt_sec_two_subtext` text NOT NULL,
  `history_header` varchar(255) NOT NULL,
  `history_text` text NOT NULL,
  `vision_header` varchar(255) NOT NULL,
  `vision_text` text NOT NULL,
  `vision_subtext` text NOT NULL,
  `mission_header` varchar(255) NOT NULL,
  `mission_text` text NOT NULL,
  `mission_subtext` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_page_table`
--

INSERT INTO `about_page_table` (`id`, `page_title`, `section_bullet`, `section_heading`, `about_col_heading`, `about_col_content`, `about_col_subtext`, `about_col_two_heading`, `abt_icon_one`, `abt_heading_one`, `abt_text_one`, `abt_icon_two`, `abt_heading_two`, `abt_text_two`, `abt_icon_three`, `abt_heading_three`, `abt_text_three`, `abt_icon_four`, `abt_heading_four`, `abt_text_four`, `abt_sec_two_text`, `abt_sec_two_subtext`, `history_header`, `history_text`, `vision_header`, `vision_text`, `vision_subtext`, `mission_header`, `mission_text`, `mission_subtext`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'About Us', 'WHO WE ARE', 'PROFILE', '   ', 'Lambert Electromec Ltd is a leading Engineering, Procurement and construction company with an international presence and expertise in Mechanical, Electrical & Piped Services <span class=\'strf-col-medium def-color\'>MEP</span> particularly across Africa.', 'Lambert Electromec is an EPC contractor that specializes in executing complex infrastructural projects that require the highest level of technical knowhow in: Buildings & Factories, Oil & Gas and Modular Refineries, Power Solutions (generation, renewable energy, distribution and energy management), Data Centres, as well as Facility Management.', 'WE ARE FOCUSED IN LARGE EPC INFRASTRUCTURES INCLUDING:', 'fas fa-compass-drafting', 'Buildings & Factories ', 'We understand people\'s needs & how to meet them with services and work processes.', 'fas fa-scale-balanced', 'Oil & Gas and Modular Refineries ', 'Our project team create unified set of design information to help reduce cost & eliminate delays.', 'fas fa-pen-ruler', 'Power Solutions', 'We incorporate our multiple expertise to offer a complete construction-related service.', 'fas fa-toolbox', 'Data Centres', 'Our robust multi-disciplined engineering subsidiary LEM provides all our engineering design, drawings etc.', 'We are strategically poised to undertake Engineering, Procurement, Installation and Commissioning <span class=\'strf-col-medium\'>EPIC</span> projects anywhere in Africa through our offices in: Nigeria, Ghana, and Côte d\'Ivoire.', 'Furthermore, we are of Canadian origin, bringing to bear a heritage of international know-how and an unquestionable standard of delivery that’s reflected in our every operation.\r\nThe company maintains strict adherence to being a leader in our knowledge of standards, and our methods of operation allow us to meet the strictest deadlines whilst producing the best quality work at competitive prices. ', 'OUR HISTORY', 'Lambert Somec nig. Ltd. was created in 2001 in affiliation with lambert Somec Inc, with lambert Somec inc., itself founded in 1954 in Quebec, Canada.\r\nBefore becoming operationally independent from its partner in 2004, Canadian-based Lambert Somec Inc. passed on its heritage of First-Class professionalism, top engineers and its exceptional overall operational system. In 2007, it then changed its name to Lambert Electromec Ltd. in order to operate separately in the West African and Gulf region.', 'Vision Statement', 'Our vision is to be the n° 1 Electro-mechanical Engineering firm and pioneers of new technologies in EPC (Engineering, Procurement and Construction).', 'At Lambert Electromec, our vision is to firmly entrench our name as the n° 1 reference in Engineering, procurement, construction and commissioning <span class=\'strfc-text theme-color\'>EPCC</span> company when it comes to quality Electro-Mechanical Installations and Construction as well as reliable Power Solutions by constantly bringing new innovative systems and knowledge.', 'Mission Statement', 'Our mission is to build the future of comfort and safety in West Africa and Africa at large, by providing a wide range of high quality and innovative solution.', 'To provide expertise through global investment in human capital, assets and divisions, along with our extensive network of partners. To increasingly develop our Local Content resources in the Oil & Gas and Construction markets and contribute to the development of local expertise and education.', 'admin@lambertelectromec.com', '2022-10-26 19:16:57', 'admin@lambertelectromec.com', '2022-12-02 10:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `building_and_factories_table`
--

CREATE TABLE `building_and_factories_table` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `section_bullet` varchar(255) NOT NULL,
  `section_heading` varchar(255) NOT NULL,
  `content_one_heading` varchar(255) NOT NULL,
  `content_one_text` text NOT NULL,
  `content_two_heading` varchar(255) NOT NULL,
  `content_two_text` text NOT NULL,
  `content_right_heading` varchar(255) NOT NULL,
  `content_right_subheading` varchar(255) NOT NULL,
  `content_right_text` text NOT NULL,
  `content_right_subheading_two` varchar(255) NOT NULL,
  `content_right_text_two` text NOT NULL,
  `content_right_subheading_three` varchar(255) NOT NULL,
  `content_right_text_three` text NOT NULL,
  `content_right_subheading_four` varchar(255) NOT NULL,
  `content_right_text_four` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building_and_factories_table`
--

INSERT INTO `building_and_factories_table` (`id`, `page_title`, `section_bullet`, `section_heading`, `content_one_heading`, `content_one_text`, `content_two_heading`, `content_two_text`, `content_right_heading`, `content_right_subheading`, `content_right_text`, `content_right_subheading_two`, `content_right_text_two`, `content_right_subheading_three`, `content_right_text_three`, `content_right_subheading_four`, `content_right_text_four`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Divisions', 'Divisions', 'BUILDING & FACTORIES', 'Electrical Engineering', 'Lambert Electromec has over the years developed its electrical engineering arm into a veritable industry source noted for excellence in low, medium and high voltage installations.\r\n\r\nA history of solid and robust expertise in providing comprehensive in-house technical and management services in the following fields:\r\n\r\n', 'Mechanical Engineering', 'As a Top Mechanical Electrical and Plumbing (MEP) firm, Lambert Electromec works at the heart of our customers’ needs. We provide cutting edge Mechanical engineering services based on our expertise in numerous areas.', 'HVAC', 'Commercial and Residential Buildings', 'Heating, Ventilating and Air Conditioning of flexible and vast spaces as well as common and remote areas to ensure maximum comfort.', 'FACTORIES & WAREHOUSES', 'Heating, Ventilating and Air Conditioning, Cold rooms, Boilers thereby ensuring a healthy and safe working environment.', 'DATA CENTRE', 'Precision temperature and humidity control units to ensure proper operation of extremely valuable and highly sensitive equipment.', 'HOSPITALS', 'Strictly abiding to the International norms for heating, ventilating and air conditioning in hospitals and locations requiring pre-determined and very specific temperatures, humidity levels, and special filtration systems.', '2022-10-28 10:14:05', 'admin@lambertelectromec.com', '2022-11-28 11:40:32', 'i.nzekwue@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `other_position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `other_country` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL DEFAULT 'Sender',
  `updated_by` varchar(255) NOT NULL DEFAULT 'Sender',
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_table`
--

CREATE TABLE `corporate_table` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `section_heading_one` varchar(255) NOT NULL,
  `section_heading_two` varchar(255) NOT NULL,
  `section_content` text NOT NULL,
  `section_sub_content` text NOT NULL,
  `section_list_heading` varchar(255) NOT NULL,
  `list_one_icon` varchar(255) NOT NULL,
  `list_one_text` varchar(255) NOT NULL,
  `list_two_icon` varchar(255) NOT NULL,
  `list_two_text` varchar(255) NOT NULL,
  `list_three_icon` varchar(255) NOT NULL,
  `list_three_text` varchar(255) NOT NULL,
  `list_four_icon` varchar(255) NOT NULL,
  `list_four_text` varchar(255) NOT NULL,
  `list_five_icon` varchar(255) NOT NULL,
  `list_five_text` varchar(255) NOT NULL,
  `hse_heading` varchar(255) NOT NULL,
  `hse_icon` varchar(255) NOT NULL,
  `hse_content` text NOT NULL,
  `hse_sub_content` text NOT NULL,
  `section_bullet` varchar(255) NOT NULL,
  `iso_heading` varchar(255) NOT NULL,
  `iso_text` text NOT NULL,
  `iso_image` varchar(255) NOT NULL,
  `iso_subtext` text NOT NULL,
  `iso_subtext_two` text NOT NULL,
  `section_bullet_two` varchar(255) NOT NULL,
  `csr_heading` varchar(255) NOT NULL,
  `csr_image_one` varchar(255) NOT NULL,
  `csr_text_heading_one` varchar(255) NOT NULL,
  `csr_date_one` varchar(255) NOT NULL,
  `csr_text_one` text NOT NULL,
  `csr_image_two` varchar(255) NOT NULL,
  `csr_text_heading_two` varchar(255) NOT NULL,
  `csr_date_two` varchar(255) NOT NULL,
  `csr_text_two` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate_table`
--

INSERT INTO `corporate_table` (`id`, `page_title`, `section_heading_one`, `section_heading_two`, `section_content`, `section_sub_content`, `section_list_heading`, `list_one_icon`, `list_one_text`, `list_two_icon`, `list_two_text`, `list_three_icon`, `list_three_text`, `list_four_icon`, `list_four_text`, `list_five_icon`, `list_five_text`, `hse_heading`, `hse_icon`, `hse_content`, `hse_sub_content`, `section_bullet`, `iso_heading`, `iso_text`, `iso_image`, `iso_subtext`, `iso_subtext_two`, `section_bullet_two`, `csr_heading`, `csr_image_one`, `csr_text_heading_one`, `csr_date_one`, `csr_text_one`, `csr_image_two`, `csr_text_heading_two`, `csr_date_two`, `csr_text_two`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Corporate', 'Solutions', 'Provider', 'Lambert Electromec provides an engineering-solving mindset.\r\nIt incorporates multiple expertise to offer a complete construction-related service.', 'Lambert’s large pool of personnel resources allows for the swift mobilization on a wide range of construction projects. \r\nLambert possesses the necessary facilities and infrastructure in several parts of West Africa for an immediate kick-start of the works. Lambert has built its robust multi-disciplined engineering which provides all its engineering design, drawings, calculations, as well as the wide sourcing of competitive materials for world-wide procurement. With top class logistics facilities, Lambert constantly maintains a complete inventory of first and second fix materials and tools to ensure material needs are met instantly, in order to accelerate early works.', '                                                                                          ', 'fas fa-lightbulb', 'CONCEPT DESIGN', 'fas fa-pen-ruler', 'DETAILED DRAWINGS AND CALCULATIONS', 'fas fa-screwdriver-wrench', 'DESIGN COORDINATION', 'fas fa-helmet-safety', 'CONSTRUCTION', 'fas fa-toolbox', 'MAINTENANCE', 'HSE CERTIFIED', 'fas fa-shield certified-icon', 'Regular drills, awareness programs, performance indicators and anomaly reporting exercises are also carried out to increase safety consciousness with the aim of reducing accidents to the barest minimum.', 'Keeping the environment healthy and safe wherever we work is a core value of LAMBERT worldwide. Since the beginning of our operations in Nigeria several decades ago, LAMBERT has kept to this ideal through sound HSE practices and a strict adherence to national and local regulations. In all our locations and sites, HSE staff work alongside other personnel to ensure that safety rules are observed. The HSE Department has developed an incentive program to reinforce good safety performance and it is continually reviewed to ensure its effectiveness.', 'CERTIFICATION', 'ISO / QMS', 'At Lambert Electromec, we are strongly committed to be and remain the foremost and first choice  no. 1 electromechanical company.', 'iso.png', 'We ensure that our products/services consistently meet customer needs, requirements and specifications, through cautious participation of all employees in the process of continually improving the effectiveness of our Integrated Management System (IMS), which meets the requirements of ISO 9001:2015, ISO 14001:2015 & ISO 45001:2018. ', 'Lambert Electromec has developed and implemented this quality management system to demonstrate its ability to consistently provide services that meet customer requirements, and to address customer satisfaction through the effective application of the system, including continual improvement and the prevention of nonconformity.', 'SOCIALLY RESPONSIBLE', 'CSR', '796_uni.jpg', 'The UNIVERSITY OF LAGOS E-LIBRARY: ARTHUR MBANEFO DIGITAL RESEARCH CENTER 2014, LAGOS NIGERIA', 'August 2014', 'UNESCO states that, “Education for Sustainable Development allows every human being to acquire the knowledge, skills, attitudes and values necessary to shape a sustainable future”. Hence, Lambert Electromec Ltd partners with the AMDRC by donating and providing Electro-mechanical systems for its facilities in the University of Lagos, Nigeria. Lambert is also committed to annually sponsoring Post-graduate students and Young professionals of Electrical and Mechanical Engineering in e-research.', '742_355_csr.jpg', 'IDEAL EAGLE CLINIC 2014, VICTORIA ISLAND, LAGOS.', 'August 2015', 'Lambert Electromec donated all the high-end electro-mechanical systems for state-of-the-art facilities in Ideal Eagle Hospital. The clinic exhibits services such as an intensive care ward, a regular ward, a full-equipped laboratory, X-ray and ultrasound machines as well as an emergency room and ambulance service. The hospital has on-site facilities for biochemistry, microbiology, cardiology, haematology, hormonology, toxicology and coagulation.', '2022-10-27 10:32:52', 'admin@lambertelectromec.com', '2022-11-28 13:01:30', 's.ashafa@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `divisions_table`
--

CREATE TABLE `divisions_table` (
  `id` int(11) NOT NULL,
  `division_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions_table`
--

INSERT INTO `divisions_table` (`id`, `division_title`) VALUES
(1, 'Building and Factories'),
(2, 'Power Generation and Transmission'),
(3, 'Data Center'),
(4, 'Oil and Gas');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_us_table`
--

CREATE TABLE `home_about_us_table` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `profile_title` varchar(255) NOT NULL,
  `profile_content` text NOT NULL,
  `profile_sub_content` text NOT NULL,
  `profile_link_title` varchar(255) NOT NULL,
  `profile_link_ref` varchar(255) NOT NULL,
  `vision_statement_title` varchar(255) NOT NULL,
  `vision_statement_content` text NOT NULL,
  `vision_statement_icon` varchar(255) NOT NULL,
  `mission_statement_title` varchar(255) NOT NULL,
  `mission_statement_content` text NOT NULL,
  `mission_statement_icon` varchar(255) NOT NULL,
  `history_title` varchar(255) NOT NULL,
  `history_content` text NOT NULL,
  `history_icon` varchar(255) NOT NULL,
  `read_me` varchar(255) NOT NULL,
  `read_me_ref` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_about_us_table`
--

INSERT INTO `home_about_us_table` (`id`, `sub_title`, `page_title`, `profile_title`, `profile_content`, `profile_sub_content`, `profile_link_title`, `profile_link_ref`, `vision_statement_title`, `vision_statement_content`, `vision_statement_icon`, `mission_statement_title`, `mission_statement_content`, `mission_statement_icon`, `history_title`, `history_content`, `history_icon`, `read_me`, `read_me_ref`, `updated_by`, `updated_at`) VALUES
(1, 'WHO WE ARE', 'About Us', 'Profile', 'Lambert Electromec Ltd is a leading Engineering, Procurement, and Construction <span class=\'strf-col-medium def-color\'>EPC</span> company with an international presence and expertise in Mechanical, Electrical, and Plumbing <span class=\'strf-col-medium def-color\'>MEP</span>, particularly across West Africa.', 'An EPC contractor that specializes in executing complex infrastructural projects that require the highest level of technical knowhow in Oil & Gas and Modular Refineries, Power Generation and Distribution, Data Centre & Telecom Infrastructures and in Buildings and Factories. ', 'See More', 'about.php', 'Vision Statement', 'Our vision is to be the no1 Electro-mechanical Engineering firm in West Africa, pioneers of new technologies in EPC construction, Modular Refineries and Oil & Gas, Data Centres and Power Generation.', 'fas fa-eye', 'Mission Statement', 'Our mission is to build the future of comfort and safety in West Africa by providing a wide range of high-quality and innovative solutions.', 'fas fa-bullseye', 'History', 'Lambert Electromec Limited was created in affiliation with lambert Somec Inc., itself founded in 1954 in Quebec, Canada. Lambert Somec Inc passed on its heritage of first-class professionalism, top engineers, and its exceptional overall operational system to Lambert Electromec Ltd. which operates independently in the West African region.', 'fas fa-history', 'Read More', 'about.php#about-history-container', 'admin@lambertelectromec.com', '2022-12-02 11:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_divisions_table`
--

CREATE TABLE `home_divisions_table` (
  `id` int(11) NOT NULL,
  `section_bullet` varchar(255) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `col_one_header` varchar(255) NOT NULL,
  `col_one_text_one` tinytext NOT NULL,
  `col_one_ht_one` varchar(255) NOT NULL,
  `col_one_ht_two` varchar(255) NOT NULL,
  `col_one_ht_three` varchar(255) NOT NULL,
  `col_one_ht_four` varchar(255) NOT NULL,
  `col_one_text_two` text NOT NULL,
  `col_two_header` varchar(255) NOT NULL,
  `col_two_text_one` text NOT NULL,
  `col_two_ht_one` varchar(255) NOT NULL,
  `col_two_ht_two` varchar(255) NOT NULL,
  `col_two_ht_three` varchar(255) NOT NULL,
  `col_two_ht_four` varchar(255) NOT NULL,
  `col_two_text_two` text NOT NULL,
  `col_three_header` varchar(255) NOT NULL,
  `col_three_text_one` text NOT NULL,
  `col_three_ht_one` varchar(255) NOT NULL,
  `col_three_ht_two` varchar(255) NOT NULL,
  `col_three_ht_three` varchar(255) NOT NULL,
  `col_three_ht_four` varchar(255) NOT NULL,
  `col_three_text_two` text NOT NULL,
  `col_four_header` varchar(255) NOT NULL,
  `col_four_text_one` text NOT NULL,
  `col_four_ht_one` varchar(255) NOT NULL,
  `col_four_ht_two` varchar(255) NOT NULL,
  `col_four_ht_three` varchar(255) NOT NULL,
  `col_four_ht_four` varchar(255) NOT NULL,
  `col_four_text_two` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_divisions_table`
--

INSERT INTO `home_divisions_table` (`id`, `section_bullet`, `section_title`, `col_one_header`, `col_one_text_one`, `col_one_ht_one`, `col_one_ht_two`, `col_one_ht_three`, `col_one_ht_four`, `col_one_text_two`, `col_two_header`, `col_two_text_one`, `col_two_ht_one`, `col_two_ht_two`, `col_two_ht_three`, `col_two_ht_four`, `col_two_text_two`, `col_three_header`, `col_three_text_one`, `col_three_ht_one`, `col_three_ht_two`, `col_three_ht_three`, `col_three_ht_four`, `col_three_text_two`, `col_four_header`, `col_four_text_one`, `col_four_ht_one`, `col_four_ht_two`, `col_four_ht_three`, `col_four_ht_four`, `col_four_text_two`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'DIVISIONS', 'Our Divisions', 'Building & Factories', 'Lambert delivers the highest quality & latest technology in Mechanical, Electrical and Plumbing (MEP) also in design & construction of structures.', 'Electrical', 'Engineering', 'Mechanical', 'Engineering', 'MEP Systems are at the heart of our customer\'s needs. We provide cutting edge engineering services.', 'Power Generation & Hybrid Solutions', 'Lambert is active in the fields of conventional thermal power generation as well as Green Energy power systems.', 'Thermal', 'Energy', 'Green', 'Energy', 'Our Power Division leverages on Knowledge, Expertise and Technological Know-how.', 'Data Center & Telecom Infrastructure', 'Our Data Center and Telecom Infrastructure division is poised to undertake several peculiar projects such as:\r\n', 'Data Center', 'Infrastructures and Facilities', 'Data/Telecom', 'Cabling Systems', 'Lambert Electromec executes complete Design / Engineering / Build of Data Centre.', 'Oil & Gas', 'Lambert Electromec has extensive capabilities to support the Oil and Gas industry operations and engineering', 'Oil & Gas', 'Process Plant', 'Modular', 'Refinery', 'Through experience, client feedback and focus on continuous improvement, Lambert\'s approach to Oil & Gas projects has evolved.', '2022-10-29 22:44:02', 'admin@lambertelectromec.com', '2022-12-02 10:06:39', 'admin@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `lists_table`
--

CREATE TABLE `lists_table` (
  `id` int(11) NOT NULL,
  `list_division` varchar(255) NOT NULL,
  `list_heading` varchar(255) NOT NULL,
  `list_content` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lists_table`
--

INSERT INTO `lists_table` (`id`, `list_division`, `list_heading`, `list_content`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Building and Factories', 'HIGH & MEDIUM VOLTAGE', 'Gas Turbines and Power generation, transmission and distribution', 'Active', '2022-10-30 10:20:38', 'admin@lambertelectromec.com', '2022-10-30 10:20:38', 'admin@lambertelectromec.com'),
(2, 'Building and Factories', 'HIGH & MEDIUM VOLTAGE', 'Generators, Transformers and Synchronization.', 'Active', '2022-10-30 10:23:37', 'admin@lambertelectromec.com', '2022-10-30 10:23:37', 'admin@lambertelectromec.com'),
(3, 'Building and Factories', 'HIGH & MEDIUM VOLTAGE', 'Power Sub-stations and distribution.', 'Active', '2022-10-30 10:23:37', 'admin@lambertelectromec.com', '2022-10-30 10:23:37', 'admin@lambertelectromec.com'),
(4, 'Building and Factories', 'HIGH & MEDIUM VOLTAGE', 'Metering and Utility connection.', 'Active', '2022-10-30 10:24:46', 'admin@lambertelectromec.com', '2022-10-30 10:24:46', 'admin@lambertelectromec.com'),
(5, 'Building and Factories', 'LOW VOLTAGE', 'Anelboards: Main distribution Boards, Submain distribution boards, Motor control center, capacitor bank', 'Active', '2022-10-30 11:43:40', 'admin@lambertelectromec.com', '2022-10-30 11:43:40', 'admin@lambertelectromec.com'),
(6, 'Building and Factories', 'LOW VOLTAGE', 'Synchronizing panel, CHANGE OVER SWITCH (AUTOMATIC & Mechanical).', 'Active', '2022-10-30 11:45:28', 'admin@lambertelectromec.com', '2022-10-30 11:45:28', 'admin@lambertelectromec.com'),
(7, 'Building and Factories', 'LOW VOLTAGE', 'Bus Duct Riser', 'Active', '2022-10-30 11:46:07', 'admin@lambertelectromec.com', '2022-10-30 11:46:07', 'admin@lambertelectromec.com'),
(8, 'Building and Factories', 'LOW VOLTAGE', 'Lighting, Switching Devices & Lighting Control System', 'Active', '2022-10-30 11:47:12', 'admin@lambertelectromec.com', '2022-10-30 11:47:12', 'admin@lambertelectromec.com'),
(9, 'Building and Factories', 'LOW VOLTAGE', 'Surge, Earthing and Lightning protection', 'Active', '2022-10-30 11:47:28', 'admin@lambertelectromec.com', '2022-10-30 11:47:28', 'admin@lambertelectromec.com'),
(10, 'Building and Factories', 'LOW VOLTAGE', 'Uninterrupted Power Supply (UPS) and AVR', 'Active', '2022-10-30 11:47:47', 'admin@lambertelectromec.com', '2022-10-30 11:47:47', 'admin@lambertelectromec.com'),
(11, 'Building and Factories', 'LOW VOLTAGE', 'Cable Management System Including Raised Floor Solutions', 'Active', '2022-10-30 11:48:09', 'admin@lambertelectromec.com', '2022-10-30 11:48:09', 'admin@lambertelectromec.com'),
(12, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Building Management Systems', 'Active', '2022-10-30 12:13:45', 'admin@lambertelectromec.com', '2022-10-30 12:13:45', 'admin@lambertelectromec.com'),
(13, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Parking Management Systems', 'Active', '2022-10-30 12:14:38', 'admin@lambertelectromec.com', '2022-10-30 12:14:38', 'admin@lambertelectromec.com'),
(14, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Fire Alarm Systems', 'Active', '2022-10-30 12:15:18', 'admin@lambertelectromec.com', '2022-10-30 12:15:18', 'admin@lambertelectromec.com'),
(15, 'Building and Factories', 'EXTRA LOW VOLTAGE', ' Closed Circuit Television Systems', 'Active', '2022-10-30 12:15:39', 'admin@lambertelectromec.com', '2022-10-30 12:15:39', 'admin@lambertelectromec.com'),
(16, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Access Control Systems', 'Active', '2022-10-30 12:16:04', 'admin@lambertelectromec.com', '2022-10-30 12:16:04', 'admin@lambertelectromec.com'),
(17, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Burglar Alarm', 'Active', '2022-10-30 12:16:20', 'admin@lambertelectromec.com', '2022-10-30 12:16:20', 'admin@lambertelectromec.com'),
(18, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Public Address Systems', 'Active', '2022-10-30 12:16:44', 'admin@lambertelectromec.com', '2022-10-30 12:16:44', 'admin@lambertelectromec.com'),
(19, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Audio Visual Systems', 'Active', '2022-10-30 12:17:01', 'admin@lambertelectromec.com', '2022-10-30 12:17:01', 'admin@lambertelectromec.com'),
(20, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Video Door Entry Systems', 'Active', '2022-10-30 12:17:20', 'admin@lambertelectromec.com', '2022-10-30 12:17:20', 'admin@lambertelectromec.com'),
(21, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Conference Halls Systems', 'Active', '2022-10-30 12:17:39', 'admin@lambertelectromec.com', '2022-10-30 12:17:39', 'admin@lambertelectromec.com'),
(22, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Data & PABX Systems', 'Active', '2022-10-30 12:18:04', 'admin@lambertelectromec.com', '2022-10-30 12:18:04', 'admin@lambertelectromec.com'),
(23, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Electrical Fence', 'Active', '2022-10-30 12:18:30', 'admin@lambertelectromec.com', '2022-10-30 12:18:30', 'admin@lambertelectromec.com'),
(24, 'Building and Factories', 'EXTRA LOW VOLTAGE', ' Intruder Alarm System', 'Active', '2022-10-30 12:18:46', 'admin@lambertelectromec.com', '2022-10-30 12:18:46', 'admin@lambertelectromec.com'),
(25, 'Building and Factories', 'EXTRA LOW VOLTAGE', 'Disabled Alarm System', 'Active', '2022-10-30 12:19:06', 'admin@lambertelectromec.com', '2022-10-30 12:19:06', 'admin@lambertelectromec.com'),
(26, 'Building and Factories', 'PIPED SERVICES', 'Portable water, sewage, drainage and waste distribution networks.', 'Active', '2022-10-30 12:26:10', 'admin@lambertelectromec.com', '2022-10-30 12:26:10', 'admin@lambertelectromec.com'),
(27, 'Building and Factories', 'PIPED SERVICES', 'Swimming pool and water feature.', 'Active', '2022-10-30 12:26:29', 'admin@lambertelectromec.com', '2022-10-30 12:26:29', 'admin@lambertelectromec.com'),
(28, 'Building and Factories', 'PIPED SERVICES', 'Sewage and water treatment plants and controls, Boreholes.', 'Active', '2022-10-30 12:26:46', 'admin@lambertelectromec.com', '2022-10-30 12:26:46', 'admin@lambertelectromec.com'),
(29, 'Building and Factories', 'PIPED SERVICES', 'Fire Fighting.', 'Active', '2022-10-30 12:27:16', 'admin@lambertelectromec.com', '2022-10-30 12:27:16', 'admin@lambertelectromec.com'),
(30, 'Building and Factories', 'PIPED SERVICES', ' Fire Suppression Systems', 'Active', '2022-10-30 12:27:32', 'admin@lambertelectromec.com', '2022-10-30 12:27:32', 'admin@lambertelectromec.com'),
(31, 'Building and Factories', 'PIPED SERVICES', 'Industrial Pipe Systems.', 'Active', '2022-10-30 12:28:16', 'admin@lambertelectromec.com', '2022-10-30 12:28:16', 'admin@lambertelectromec.com'),
(32, 'Building and Factories', 'PIPED SERVICES', 'Hydraulic Systems', 'Active', '2022-10-30 12:28:42', 'admin@lambertelectromec.com', '2022-10-30 12:15:56', 'admin@lambertelectromec.com'),
(33, 'Power Generation and Transmission', 'Capabilities', 'EPC: Engineering Procurement Construction', 'Active', '2022-10-30 16:08:51', 'admin@lambertelectromec.com', '2022-10-30 16:08:51', 'admin@lambertelectromec.com'),
(34, 'Power Generation and Transmission', 'Capabilities', 'BOT: Build Operate Transfer', 'Active', '2022-10-30 16:09:07', 'admin@lambertelectromec.com', '2022-10-30 16:09:07', 'admin@lambertelectromec.com'),
(35, 'Power Generation and Transmission', 'Capabilities', 'IPP/BOO: Build Own Operate - Independent Power Plant dedicated to your own needs', 'Active', '2022-10-30 16:09:25', 'admin@lambertelectromec.com', '2022-10-30 16:09:25', 'admin@lambertelectromec.com'),
(36, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Photovoltaic Solar & Solar Thermal', 'Active', '2022-11-09 20:14:09', 'admin@lambertelectromec.com', '2022-11-09 20:14:09', 'admin@lambertelectromec.com'),
(37, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Biomass', 'Active', '2022-11-09 20:21:36', 'admin@lambertelectromec.com', '2022-11-09 20:21:36', 'admin@lambertelectromec.com'),
(38, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Landfill Gas', 'Active', '2022-11-09 20:22:03', 'admin@lambertelectromec.com', '2022-11-09 20:22:03', 'admin@lambertelectromec.com'),
(39, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Wind', 'Active', '2022-11-09 20:22:18', 'admin@lambertelectromec.com', '2022-11-09 20:22:18', 'admin@lambertelectromec.com'),
(40, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Waste to Energy', 'Active', '2022-11-09 20:22:47', 'admin@lambertelectromec.com', '2022-11-09 20:22:47', 'admin@lambertelectromec.com'),
(41, 'Power Generation and Transmission', 'RENEWABLE ENERGY', 'Waste Heat & Waste Gas Recovery', 'Active', '2022-11-09 20:23:13', 'admin@lambertelectromec.com', '2022-11-09 20:23:13', 'admin@lambertelectromec.com'),
(42, 'Power Generation and Transmission', 'ENERGY STORAGE', 'We offer different Energy Storage System solutions for different application scenarios, helping to improve the power supply structure with high-performance and high-security features.', 'Active', '2022-11-09 20:30:47', 'admin@lambertelectromec.com', '2022-11-09 20:30:47', 'admin@lambertelectromec.com'),
(43, 'Power Generation and Transmission', 'ENERGY STORAGE', 'This system can be paired with PV modules to improve the use of new energy.', 'Active', '2022-11-09 20:31:17', 'admin@lambertelectromec.com', '2022-11-09 20:31:17', 'admin@lambertelectromec.com'),
(44, 'Power Generation and Transmission', 'ENERGY STORAGE', 'This solution can be used in large power plant projects connected to the grid, commercial, and industrial on/off-grid power demand.', 'Active', '2022-11-09 20:31:44', 'admin@lambertelectromec.com', '2022-11-09 20:31:44', 'admin@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `list_headings_table`
--

CREATE TABLE `list_headings_table` (
  `id` int(11) NOT NULL,
  `list_division` varchar(255) NOT NULL,
  `list_heading_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_headings_table`
--

INSERT INTO `list_headings_table` (`id`, `list_division`, `list_heading_name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Building and Factories', 'HIGH & MEDIUM VOLTAGE', '2022-10-30 10:29:55', 'admin@lambertelectromec.com', '2022-10-30 10:29:55', 'admin@lambertelectromec.com'),
(2, 'Building and Factories', 'LOW VOLTAGE', '2022-10-30 10:29:55', 'admin@lambertelectromec.com', '2022-10-30 10:29:55', 'admin@lambertelectromec.com'),
(3, 'Building and Factories', 'EXTRA LOW VOLTAGE', '2022-10-30 10:31:53', 'admin@lambertelectromec.com', '2022-10-30 10:31:53', 'admin@lambertelectromec.com'),
(4, 'Building and Factories', 'PIPED SERVICES', '2022-10-30 10:31:53', 'admin@lambertelectromec.com', '2022-10-30 10:31:53', 'admin@lambertelectromec.com'),
(5, 'Power Generation and Transmission', 'Capabilities', '2022-10-30 16:14:17', 'admin@lambertelectromec.com', '2022-10-30 16:14:17', 'admin@lambertelectromec.com'),
(6, 'Power Generation and Transmission', 'RENEWABLE ENERGY', '2022-11-09 20:13:19', 'admin@lambertelectromec.com', '2022-11-09 20:13:19', 'admin@lambertelectromec.com'),
(7, 'Power Generation and Transmission', 'ENERGY STORAGE', '2022-11-09 20:26:32', 'admin@lambertelectromec.com', '2022-11-09 20:26:32', 'admin@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `media_table`
--

CREATE TABLE `media_table` (
  `id` int(11) NOT NULL,
  `media_image` varchar(255) NOT NULL,
  `media_title` varchar(255) NOT NULL,
  `media_doc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_table`
--

INSERT INTO `media_table` (`id`, `media_image`, `media_title`, `media_doc`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '745_MRCC.png', 'Treating Cancer with Modern Technology', '431_LEM e-newsletter No.4.pdf', '2022-10-19 20:19:54', 's.ashafa@lambertelectromec.com', '2022-10-19 20:19:54', 's.ashafa@lambertelectromec.com'),
(2, '823_WBG.png', 'World Standard MEP Services for the WORLD BANK GROUP/IFC HEAD OFFICE', '823_LEM e-newsletter_2013.pdf', '2022-10-19 20:19:54', 's.ashafa@lambertelectromec.com', '2022-10-19 20:19:54', 's.ashafa@lambertelectromec.com'),
(3, '635_ITC 2.png', 'The Certified IVOIRE TRADE CENTER Cocody - Cote d\'ivoire', '567_TELEX POWERMAX TRADING USD 18,561.02.pdf', '2022-10-19 20:23:16', 's.ashafa@lambertelectromec.com', '2022-10-19 20:23:16', 's.ashafa@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `numbers_table`
--

CREATE TABLE `numbers_table` (
  `id` tinyint(4) NOT NULL,
  `numbers_heading` varchar(255) NOT NULL,
  `completed_projects_number` varchar(255) NOT NULL,
  `completed_projects_text` varchar(255) NOT NULL,
  `staff_strength_number` varchar(255) NOT NULL,
  `staff_strength_text` varchar(255) NOT NULL,
  `partners_number` varchar(255) NOT NULL,
  `partners_text` varchar(255) NOT NULL,
  `cities_num` varchar(255) NOT NULL,
  `cities_text` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numbers_table`
--

INSERT INTO `numbers_table` (`id`, `numbers_heading`, `completed_projects_number`, `completed_projects_text`, `staff_strength_number`, `staff_strength_text`, `partners_number`, `partners_text`, `cities_num`, `cities_text`, `updated_by`, `updated_at`) VALUES
(1, 'OUR COMPANY IN NUMBERS', '232', 'COMPLETED PROJECTS', '2015', 'STAFF STRENGTH', '17', 'PARTNERS & AFFILIATES', '15', 'CITIES OF OPERATION', 'admin@lambertelectromec.com', '2022-10-25 14:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `power_table`
--

CREATE TABLE `power_table` (
  `id` int(11) NOT NULL,
  `section_bullet` varchar(255) NOT NULL,
  `section_heading` varchar(255) NOT NULL,
  `section_text` text NOT NULL,
  `section_right_ht` varchar(255) NOT NULL,
  `section_right_text` text NOT NULL,
  `section_heading_two` varchar(255) NOT NULL,
  `section_two_text` text NOT NULL,
  `section_heading_three` varchar(255) NOT NULL,
  `section_three_text` text NOT NULL,
  `section_three_th_one` varchar(255) NOT NULL,
  `section_three_th_two` varchar(255) NOT NULL,
  `section_three_tt_one` text NOT NULL,
  `section_three_tt_two` text NOT NULL,
  `section_heading_four` varchar(255) NOT NULL,
  `section_four_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `power_table`
--

INSERT INTO `power_table` (`id`, `section_bullet`, `section_heading`, `section_text`, `section_right_ht`, `section_right_text`, `section_heading_two`, `section_two_text`, `section_heading_three`, `section_three_text`, `section_three_th_one`, `section_three_th_two`, `section_three_tt_one`, `section_three_tt_two`, `section_heading_four`, `section_four_text`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'DIVISIONS', 'POWER GENERATIONS & HYBRID SOLUTIONS', 'Lambert Power & Energy division leverages on its knowledge, expertise and technology as well as from its associates and partners worldwide, to provide cross-synergies to the power division business. The result is a wide array of experience used to optimize the technical, commercial and environmental impact of its power services.\r\n\r\nWith operational offices in Nigeria, Ghana, Côte d’ivoire and a design office in the Middle East, Our Power division is well placed to undertake projects in Africa.', 'CAPABILITIES', 'Our Power & Energy division can handle your most complex requirements, from initial site planning to operation and maintenance. We are a total solutions provider, with a single point of contact for seamless support. According to the client’s requirements, our scope can be:', 'POWER GENERATION', 'We provide a full range of services for different sizes of thermal power plants, from 5 MW – 200 MW, powered by reciprocating engines and Turbines of all types:', 'THERMAL', 'LPP provides a full range of services for different sizes of thermal power plants, from 5 MW – 100 MW, powered by reciprocating engines and Turbines of all types:', 'Reciprocating Engines:', 'Turbines:', 'LPP uses all types of reciprocating engines, from low to high speed firing all types of fuel, Natural Gas, LFO, HFO... depending on the availability and application.', 'covering Single or Double stage Gas turbines, Steam Turbines firing all types of applicable fuel.', 'ENERGY STORAGE', 'The Electrical Energy Storage System (EESS) is a brand-new service of Lambert Power division. ', '2022-10-30 14:27:51', 'admin@lambertelectromec.com', '2022-12-02 11:03:41', 'admin@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `project_image`, `project_title`, `status`) VALUES
(1, 1, '683419_1.jpg', 'EKO Tower 1', 'Active'),
(2, 1, '762_2.jpg', 'EKO Tower 1', 'Active'),
(3, 2, '213_1.jpg', 'Access Bank Corporate Head Office', 'Active'),
(4, 2, '231_2.jpg', 'Access Bank Corporate Head Office', 'Active'),
(5, 3, '845_1.jpg', 'Eko Tower II', 'Active'),
(6, 3, '723_2.jpg', 'Eko Tower II', 'Active'),
(7, 4, '157_IMG_4604.jpg', 'One Airport Square', 'Active'),
(8, 4, '213_IMG_4609.jpg', 'One Airport Square', 'Active'),
(9, 5, '132_1.png', 'Total Power Plant, 16.5MW Gas Turbines ', 'Active'),
(10, 5, '856142_2.jpg', 'Total Power Plant, 16.5MW Gas Turbines ', 'Active'),
(11, 6, '639574_1.jpg', 'The Heritage Place', 'Active'),
(12, 6, '326814_2.jpg', 'The Heritage Place', 'Active'),
(13, 7, '138245_1.jpg', 'Zenith Bank Head Office', 'Active'),
(14, 7, '516379_2.jpg', 'Zenith Bank Head Office', 'Active'),
(15, 8, '457629_1.jpg', 'Waltersmith Modular Refinery', 'Active'),
(16, 8, '963572_2.jpg', 'Waltersmith Modular Refinery', 'Active'),
(17, 9, '132_lambert_ifs building (125 of 489).jpg', 'World Bank IFC Head Office', 'Active'),
(18, 9, '312_lambert_ifs building (232 of 489).jpg', 'World Bank IFC Head Office', 'Active'),
(19, 10, '231_Alpha One Tower  2.jpg', 'Alpha One Tower', 'Active'),
(20, 10, '132_Alpha One Tower.jpeg', 'Alpha One Tower', 'Active'),
(21, 11, '148765_1.jpg', 'Procter & Gamble Factory', 'Active'),
(22, 11, '312578_2.jpg', 'Procter & Gamble Factory', 'Active'),
(23, 12, '392684_1.jpg', 'Total ELF Petroleum Pension Fund Office Complex', 'Active'),
(24, 12, '863214_2.jpg', 'Total ELF Petroleum Pension Fund Office Complex', 'Active'),
(25, 13, '231_IMG-20200910-WA0043.jpg', 'SU Tower ', 'Active'),
(26, 13, '123_IMG-20200910-WA0002.jpg', 'SU Tower ', 'Active'),
(27, 15, '123_RWC Railway Warri.jpg', 'The Itakpe-ajaokuta-warri rail line', 'Active'),
(28, 15, '312_RWC Railway Warri 2.jpg', 'The Itakpe-ajaokuta-warri rail line', 'Active'),
(29, 16, '231_local-content-NCDMB-Head-Office-Building-Yenagoa.jpg', ' NCDMB HQ Office Complex (Nigerian Content Tower)', 'Active'),
(30, 16, '231_IMG-20200713-WA0023.jpg', ' NCDMB HQ Office Complex (Nigerian Content Tower)', 'Active'),
(31, 17, '123_23.jpg', 'Total Industrial Clinic ', 'Active'),
(32, 17, '321_1.jpg', 'Total Industrial Clinic ', 'Active'),
(33, 18, '321_GTBank-Data-Centre-6.jpg', 'GT BanK Data Center', 'Active'),
(34, 18, '231_GTBank-Data-Centre-13.jpg', 'GT BanK Data Center', 'Active'),
(35, 19, '231_PHOTO-2021-02-16-10-52-46.jpg', 'Ivoire Trade Center (ITC)', 'Active'),
(36, 19, '123_PHOTO-2021-01-16-14-04-55.jpg', 'Ivoire Trade Center (ITC)', 'Active'),
(37, 20, '437652_1.jpg', 'Total E&P 2x Data Centers, Telecom Room', 'Active'),
(38, 20, '132_2.jpg', 'Total E&P 2x Data Centers, Telecom Room', 'Active'),
(39, 22, '132_1.jpg', 'BUA Group Head Office', 'Active'),
(40, 22, '213_2.jpg', 'BUA Group Head Office', 'Active'),
(41, 24, '321_16-1366x768.jpg', 'Marcelle Ruth Cancer Centre & Specialist Hospital', 'Active'),
(42, 24, '123_15-1366x768.jpg', 'Marcelle Ruth Cancer Centre & Specialist Hospital', 'Active'),
(43, 25, '312_625202180024_e9523063f7104b78b3037d9bca187fef.jpeg', 'GT Bank Training Academy', 'Active'),
(44, 26, '312_76GF.jpg', 'Glassforce Factory', 'Active'),
(45, 26, '213_65GF.jpg', 'Glassforce Factory', 'Active'),
(46, 28, '978526_1.jpg', 'Ikoyi Club Car Park', 'Active'),
(47, 28, '581293_2.jpg', 'Ikoyi Club Car Park', 'Active'),
(48, 30, '786_1.jpg', 'GT Bank Contact and Central Processing Center', 'Active'),
(49, 30, '312_2.jpg', 'GT Bank Contact and Central Processing Center', 'Active'),
(50, 32, '213_609_12-05-2006-11-12-09.jpg', 'NNPC - ELF Petroleum JV Office Complex', 'Active'),
(51, 32, '213_359_12-05-2006-10-52-46.jpg', 'NNPC - ELF Petroleum JV Office Complex', 'Active'),
(52, 33, '231_1.jpg', 'Freshfield Villa', 'Active'),
(53, 33, '321_2.jpg', 'Freshfield Villa', 'Active'),
(54, 36, '132_DJI_0252.jpg', 'Desiderata Offices', 'Active'),
(55, 36, '132_SAM_3528.jpg', 'Desiderata Offices', 'Active'),
(56, 29, '643215_phpleasurepark-ariel1a-900x444.jpg', 'Pleasure Park, Gardens & Restaurant', 'Active'),
(57, 37, '134625_12.jpg', '6MW Power Plant and Station', 'Active'),
(58, 37, '652341_13.jpg', '6MW Power Plant and Station', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `project_city` varchar(255) NOT NULL,
  `work_done` varchar(255) NOT NULL,
  `project_year` varchar(255) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `project_country` varchar(255) NOT NULL,
  `project_division` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL DEFAULT 'admin@lambertelectromec.com',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL DEFAULT 'admin@lambertelectromec.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`id`, `project_title`, `project_description`, `project_city`, `work_done`, `project_year`, `project_image`, `project_country`, `project_division`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'EKO Tower 1', 'Engineering, Installation and Design contribution of complete state of the art Electrical & Mechanical works in the 20 - storey edifice for Eko Tower, consisting of latest technologies, eco-friendly solutions, with 20MV power generating plants, extra low voltage and security systems, in Victoria Island, Lagos - Nigeria.', 'Lagos', 'Mechanical & Electrical Works', '2010 - 2012', '975_EKO Tower 1 (Edited) reduced.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(2, 'Access Bank Corporate Head Office', 'Access Bank Corporate Head Office is strategical located in Victoria Island extension of Lagos and prides itself as a Grade A - high rise office complex. The electrical and mechanical systems were carefully selected to offer optimal comfort and safety.', 'Lagos', 'Mechanical & Electrical Works', '2016 - 2018', '639_2.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(3, 'Eko Tower II', 'The Eko Towers II is a 27-floor mixed use development at the Adetokunbo Ademola Street Roundabout (Eko Hotel Roundabout) in Lagos. Lambert Electromec executed the Electrical & Mechanical works of the 27 Storey mixed-use tower boasts of the best technologies in Electro-Mechanical applications. It features an industrial clinic, Gym Complex, Guest Houses, Restaurants, Swimming pool, Social Centre, Restaurants and Bars, Conference Centre). ', 'Lagos', 'Mechanical & Electrical Works', '2014 - 2017', '193_3.jpeg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(4, 'One Airport Square', 'One Airport Square is a nine-storey building for offices, plus a ground floor designed for commercial activities. One Airport Square is the first building in Ghana to have been awarded 4-Stars (Design Stage) by the Green Building Council of South Africa (GBCSA). \r\nOne Airport Square is the first building in Ghana to have been awarded 4-Stars (Design Stage) by the Green Building Council of South Africa (GBCSA). It consists of the latest technology in mechanical, electrical and plumbing (MEP) services executed and maintained by Lambert Electromec ltd.\r\n\r\n', 'Accra', 'Mechanical & Electrical Works', '2014 - 2016', '935_1.jpg', 'Ghana', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(5, 'Total Power Plant, 16.5MW Gas Turbines ', 'GAS Turbine for Office Complex Joint Venture NNPC ELF PETROLEUM - TransAmadi, Port Harcourt. Installation of 3 Gas Turbines 5.5MW each, complete with all its balance of plant equipment, 33/11KV substation and distribution, supplying existing and new office complex of NNPC-ELF JV in Port Harcourt-Nigeria.', 'Port Harcourt', '', '', '345_5.jpg', 'Nigeria', 'Power Generation and Transmission', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(6, 'The Heritage Place', 'This commercial building in Lagos is LEED certified, comprising 14 floors of15,631sqm. Environmental considerations include: rainwater harvesting, passive solar protection, enhanced indoor air quality, office recycling facilities, and an efficient comfort cooling system. All Electrical & Mechanical fixtures were installed by Lambert Electromec Limited.', 'Lagos', 'Mechanical & Electrical Works', '2014 - 2016', '983_6.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(7, 'Zenith Bank Head Office', 'Zenith Bank Head Office is located at 38 Independence Avenue, Accra, Ghana is an indelible impression on the skyline of the ceremonial Independence Avenue in Accra. This elegant edifice comprises of prime Electro-mechanical features.', 'Accra', 'Mechanical & Electrical Works', '2015 - 2017', '591_7.jpg', 'Ghana', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(8, 'Waltersmith Modular Refinery', 'Nigeria\'s first modular oil refinery, built by Waltersmith Petroman Oil and NCDMB. The refinery was built by a consortium of VFuels and Lambert Electromec to produce kerosene, diesel, naphtha and heavy fuel oil. \r\nThe engineering, procurement and construction contractors (EPCC) Lambert Electromec Ltd have specialty in Modular Oil & gas Refinery design services with the capacity for designs from 1,000 to 30,000 bpd crude processing units and 1 mmscfd to 20 mmscfd gas processing units. The OSBL (Outside Battery Limit) and ISBL (Inside Battery Limits) respectively were executed for the Waltersmith Refinery of 5,000 bpd capacity (Phase 1) in Nigeria. \r\n', 'Imo State', '', '2018 - 2020', '584_8.jpg', 'Nigeria', 'Oil and Gas', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(9, 'World Bank IFC Head Office', 'The World Bank Group Office is an Edge certified structure in Accra Ghana, a landmark eco-friendly 5-storey structure exhibits ergonomic standards, energy conservation and sustainability criteria in the planning of the building’s unique technological systems. The mechanical, electrical and plumbing (MEP) systems of the building carried out by Lambert Electromec ltd incorporates resource-efficient technologies, including a black water treatment and recycling system. Reuse of the pre-existing floor slab, roof, walls and windows nearly negated embodied energy in materials.', 'Accra', 'Mechanical & Electrical Works', '2012 - 2014', '691_9.jpg', 'Ghana', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(10, 'Alpha One Tower', 'Alpha 1 utilized resource-efficient features and technologies to reduce its environmental impact and save on operating costs. An energy-efficient air conditioning system, roof insulation and occupancy sensors reduce the office’s energy use, while dual-flush water closets, water-efficient urinals and low-flow faucets reduce the office’s water use. Sensible heat recovery technology was also installed with the HVAC system to help provide energy to cool the office air.\r\nThe full Mechanical and Electrical system on this project was carried-out by Lambert Electromec ltd.\r\n', 'Lagos', 'Mechanical & Electrical Works', '2014 - 2016', '175_10.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(11, 'Procter & Gamble Factory', 'Power plant for the P&G factory of 9MW; Fuel: Natural Gas – Diesel; Voltage: 11 KV in Ota -Ogun State, Nigeria', 'Ogun State', '', '2007', '415_11.jpg', 'Nigeria', 'Power Generation and Transmission', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(12, 'Total ELF Petroleum Pension Fund Office Complex', 'Construction of Office Complex Pension Fund TOTAL (ELF) PETROLEUM TransAmadi, Port Harcourt phase one of new office complex extension of existing TOTAL base in Port Harcourt- Nigeria, consisting of five buildings of offices, state of the art electrical and mechanical installations, showcasing latest technologies, in addition to an 80 meters high Telecom Tower, installed on top of the 6-storey building.', 'Port Harcourt', 'Mechanical & Electrical Works', '2005 - 2007', '826_12.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(13, 'SU Tower ', 'The SU Tower is a game–changer for corporate workspace in Accra. A grade “A” office; With advanced sustainability and green practices in designing; SU offers large open floor plates of 1,200 square metres and abundance of natural light, ultimately reducing property operating expenses. SU Tower is already home to blue chip companies within the financial and service industry.', 'Accra', 'Mechanical & Electrical Works', '2016 - 2019', '163_13.jpg', 'Ghana', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(14, 'Total ELF Data Centres and Telecom Tower', 'Execution of the Telecommunication and data centre implementation which includes the construction of an 80 meters high Telecom Tower, installed on top of a 6-storey building inside the TOTAL/ELF Main Office Extension in Port Harcourt - Nigeria.', 'Port Harcourt', '', '', '795_14.JPG', 'Nigeria', 'Data Center', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(15, 'The Itakpe-ajaokuta-warri rail line', 'This complex consists of 17 buildings with complete reticulation of the 11kv network including packaged sub-stations, plus street lighting. The Power station for the entire railway village features 6MW power station MV generators', 'Agbor', 'Mechanical & Electrical Works', '2018 - 2019', '871_15.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(16, ' NCDMB HQ Office Complex (Nigerian Content Tower)', 'NCDMB Office Complex consists of 17 floors Office Building, Multi – floor Car Park and a two floor conference building. This Office Complex is ultra- modern and eco-friendly. Lambert Electromec engages the latest building principles and state- of-the-art Electrical and Mechanical installations in Bayelsa - Nigeria.', 'Balyelsa', 'Mechanical & Electrical Works', '2017 - 2020', '951_16.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-29 14:50:56', 'g.jacob@lambertelectromec.com'),
(17, 'Total Industrial Clinic ', 'Complete Industrial Clinic complex with advanced electrical and mechanical installations featuring state of the art Laboratory, Pharmacy, Maternity and surgical faculties in Port Harcourt - Nigeria.', 'Port Harcourt', 'Mechanical & Electrical Works', '', '376_17.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(18, 'GT BanK Data Center', 'The GT Data centre is a purpose-built facility, geared towards tier 4 certification; All cooling equipment is independently dual-powered, including chillers and heating, ventilating and air-conditioning (HVAC) systems, Fault-tolerant site infrastructure with electrical power storage and distribution facilities.', 'Lagos', 'Mechanical & Electrical Works', '2015 - 2016', '487_18.jpg', 'Nigeria', 'Data Center', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(19, 'Ivoire Trade Center (ITC)', 'The Ivoire Trade Center (ITC) is located in the heart of Cocody Ambassades. This center is an EDGE certified, exclusive business unit with 13,120m2 of offices and 4,000m2 of surface area. Lambert Electromec is proud to have executed the complete Electrical and Mechanical works and features of this ITC Cocody Ambassades in Abidjan.', 'Abidjan', 'Mechanical & Electrical Works', '2018 - 2020', '457_19.jpg', 'Côte d\'Ivoire', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(20, 'Total E&P 2x Data Centers, Telecom Room', 'Engineering, Procurement, Installation & Commissioning (EPC) for the complete ICT infrastructure project which consist of 2 data centres (tailored to meet a Tier 4 categorization) including Telecoms, BMS, PMS and security systems, as well as n+1 backup systems in Lagos - Nigeria', 'Lagos', 'Mechanical & Electrical Works', '2011 - 2012', '916_20.jpg', 'Nigeria', 'Data Center', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(21, 'EKO Pearl Towers', 'This classic 24-story condo called Eko Pearl Towers features high technological Electrical and Mechanical systems executed by Lambert Electromec.', 'Lagos', 'Mechanical & Electrical Works', '2017 - 2019', '951_21.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(22, 'BUA Group Head Office', 'This classic 24-story condo called Eko Pearl Towers features high technological Electrical and Mechanical systems executed by Lambert Electromec.', 'Lagos', 'Mechanical & Electrical Works', '2015 - 2016', '247_22.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(23, 'Kpone Unity Terminal', 'Kpone Unity Terminal, a container handling and devaluing terminal near the Port of Tema in Ghana, has been handed over to the West African country’s Ports & Harbors Authority (GPHA), following the completion of its construction works. The world-class terminal sits on a 16.2 hectares piece of land and it consists of a 105,000m2 of container storage and devanning area, a car storage area, control tower, water tanks, transformer house.', 'Accra', 'Mechanical & Electrical Works', '2019 - 2020', '687_23.jpeg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(24, 'Marcelle Ruth Cancer Centre & Specialist Hospital', 'Lambert Electromec executed the installations of precise Electrical & Mechanical works of the Cancer medical centre. It is equipped with the latest medical equipment and security features. ', 'Lagos', 'Mechanical & Electrical Works', '2018 - 2020', '596_24.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(25, 'GT Bank Training Academy', 'GTBank Training Academy, Abeokuta is a facility owned by Guaranty Trust Bank and is meant to serve both purpose of banking activities with a branch bigger than the existing branch in Abeokuta. Part of the basement, ground and first floor is dedicated for the banking activities while the remaining part of the building is dedicated for training. Second floor is fully dedicated for training, with 4nos of classrooms, 2nos of lecture rooms and an Auditorium. 3rd- 7th floor is dedicated for accommodation with 105 rooms (21 rooms per floor). Lambert Electromec ltd executed the complete Electrical and mechanical works for the GT training Academy Abeokuta, Ogun state, Nigeria ', 'Ogun', 'Mechanical & Electrical Works', '2018 - 2020', '176_GTB-FMA-EXTERIOR-VIEW-1.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(26, 'Glassforce Factory', 'Design and Installation of complete Electrical and Mechanical installations for a state-of-the-art Glass Factory, production capacity 120,000,000 bottles a year, Aba, Abia State - Nigeria.', 'Abia State ', '', '', '857_26.jpg', 'Nigeria', 'Power Generation and Transmission', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(27, 'EKO Hotel Power Station', 'New Power Station of 15 MW, centralizing the power generation of Eko Hotel and its extensions, Victoria Island, Lagos, Nigeria.', 'Lagos', '', '', '286_27.jpg', 'Nigeria', 'Power Generation and Transmission', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(28, 'Ikoyi Club Car Park', 'Lambert Electromec Limited executed the complete Electrical and Mechanical works for the construction of this multi-storied car park located in Ikoyi.', 'Lagos', 'Mechanical & Electrical Works', '2014', '684_28.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(29, 'Pleasure Park, Gardens & Restaurant', 'State of the art electrical and mechanical installations, showcasing latest technologies for the Gardens, Park and Restaurant executed by Lambert Electromec Limited.', 'Port Harcourt', 'Mechanical & Electrical Works', '2019', '462_E0DW12IWUAA9hPp.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-29 12:20:20', 's.ashafa@lambertelectromec.com'),
(30, 'GT Bank Contact and Central Processing Center', 'Complete Electrical and Mechanical (M&E) works in this ultra-modern Contact and Central Processing Centre of Guaranty Trust Bank, Lagos, Nigeria.', 'Lagos', 'Mechanical & Electrical Works', '2013 - 2014', '452_30.jpg', 'Nigeria', 'Data Center', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(31, 'Gateway Mall', 'Engineering and Installation of Mechanical works of the Ultra-modern GATEWAY Mall in Abuja, the capital of Nigeria', 'Abuja', 'Mechanical & Electrical Works', '2016 - 2017', '294_31.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(32, 'NNPC - ELF Petroleum JV Office Complex', 'Construction of Office Complex Joint Venture NNPC - ELF PETROLEUM TransAmadi, Port Harcourt- Nigeria Complete office complex, phase two of TOTAL Base in Port Harcourt, consisting of more than 10 building offices, state of the art electrical and mechanical installations, showcasing latest technologies.', 'Port Harcourt', 'Mechanical & Electrical Works', '2007 - 2009', '523_32.jpg', 'Nigeria', 'Oil and Gas', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(33, 'Freshfield Villa', 'Freshfield Villa boasts of lush and deluxe Home-Automation, in Ikoyi - Lagos. The Electro-mechanical features were carefully selected to guarantee elegant and luxurious comfort.', 'Lagos', 'Mechanical & Electrical Works', '2014', '941_33.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(34, 'Central Office Park (COP)', 'Central Office Park (COP) is a 12,500m^2 Gross Leasable Area (GLA) modern retail shopping facility as well as A- grade offices. This structure consists of the latest technologies and eco-friendly solutions. Lambert Electromec Limited executed the Electrical and Mechanical works for the Central Office Park (COP).', 'Abuja', 'Mechanical & Electrical Works', '2016 - 2018', '618_COP Reduced.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(35, 'Zain Data Centres', 'The successful execution of Zain new generation Data centers in both Lagos and Abuja. The project includes steel structure equipment room, Emerson Power pack prefabricated complete with Electrical and Mechanical infrastructures, security and access control systems, in Lagos & Abuja Nigeria.', 'Lagos & Abuja', 'Mechanical & Electrical Works', '', '298_35.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(36, 'Desiderata Offices', 'Desiderata is a commercial office development which offers 50,000 square feet of prime office space. Desiderata consist of 7 floors of Office space, a reception area and 2 floors of car park. Lambert Electromec Limited executed the Electrical and Mechanical works for Desiderata', 'Lagos', 'Mechanical & Electrical Works', '2016 - 2018', '762_36.jpg', 'Nigeria', 'Building and Factories', 'Active', '2022-11-09 19:26:34', 'admin@lambertelectromec.com', '2022-11-09 19:26:34', 'admin@lambertelectromec.com'),
(37, '6MW Power Plant and Station', '6MW Power Plant and Station for the NCDMB Headquarters (Nigeria Content Tower) in Yenogoa, Bayelsa State - Nigeria', 'Balyelsa', 'Mechanical & Electrical Works', '2017 - 2020', '962_11.jpg', 'Nigeria', 'Power Generation and Transmission', 'Active', '2022-12-02 10:51:56', 'admin@lambertelectromec.com', '2022-12-02 10:51:56', 'admin@lambertelectromec.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `integrity` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `fname`, `lname`, `email`, `password`, `integrity`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Admin', 'User', 'admin@lambertelectromec.com', '608f72eb95bfaefe1a826a7dc97b3cfe', 'Admin', 'i.nzekwue@lambertelectromec.com', '2022-10-20 13:44:51', 'i.nzekwue@lambertelectromec.com', '2022-10-20 13:45:15'),
(2, 'Ifeanyi', 'Nzekwue', 'i.nzekwue@lambertelectromec.com', '608f72eb95bfaefe1a826a7dc97b3cfe', 'User', 'i.nzekwue@lambertelectromec.com', '2022-10-20 14:52:58', 'i.nzekwue@lambertelectromec.com', '2022-10-20 21:46:33'),
(3, 'Sulaimon', 'Ashafa', 's.ashafa@lambertelectromec.com', '3985c2f181baf29a5a1b64636f66b037', 'User', 'admin@lambertelectromec.com', '2022-10-23 10:35:30', 's.ashafa@lambertelectromec.com', '2022-10-24 07:29:27'),
(4, 'Glory', 'Jacob', 'g.jacob@lambertelectromec.com', 'bb6e53924f5c3730c727bb4d0db1c49d', 'User', 'admin@lambertelectromec.com', '2022-10-23 10:36:36', 'admin@lambertelectromec.com', '2022-10-24 07:17:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page_table`
--
ALTER TABLE `about_page_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_and_factories_table`
--
ALTER TABLE `building_and_factories_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_table`
--
ALTER TABLE `corporate_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions_table`
--
ALTER TABLE `divisions_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_us_table`
--
ALTER TABLE `home_about_us_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_divisions_table`
--
ALTER TABLE `home_divisions_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists_table`
--
ALTER TABLE `lists_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_headings_table`
--
ALTER TABLE `list_headings_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_table`
--
ALTER TABLE `media_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers_table`
--
ALTER TABLE `numbers_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power_table`
--
ALTER TABLE `power_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page_table`
--
ALTER TABLE `about_page_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `building_and_factories_table`
--
ALTER TABLE `building_and_factories_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate_table`
--
ALTER TABLE `corporate_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `divisions_table`
--
ALTER TABLE `divisions_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_about_us_table`
--
ALTER TABLE `home_about_us_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_divisions_table`
--
ALTER TABLE `home_divisions_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lists_table`
--
ALTER TABLE `lists_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `list_headings_table`
--
ALTER TABLE `list_headings_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media_table`
--
ALTER TABLE `media_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `numbers_table`
--
ALTER TABLE `numbers_table`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `power_table`
--
ALTER TABLE `power_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `project_table`
--
ALTER TABLE `project_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
