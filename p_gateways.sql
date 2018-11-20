-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 05:54 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_gateways`
--

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `gateway_id` text NOT NULL,
  `tti_id` text NOT NULL,
  `lon` text NOT NULL,
  `lat` text NOT NULL,
  `display_name` text NOT NULL,
  `deployment_status` text NOT NULL,
  `esn` text NOT NULL,
  `mac` text NOT NULL,
  `serial_number` text NOT NULL,
  `ctn_box_number` text NOT NULL,
  `ssid` text NOT NULL,
  `ssid_key` text NOT NULL,
  `router_username` text NOT NULL,
  `router_key` text NOT NULL,
  `gateway_key` text NOT NULL,
  `owner` text NOT NULL,
  `frequency` text NOT NULL,
  `antenna` text NOT NULL,
  `gateway_site_id` text NOT NULL,
  `site_location` text NOT NULL,
  `city` text NOT NULL,
  `contact` text NOT NULL,
  `date_installed` text NOT NULL,
  `care_of` text NOT NULL,
  `notes` text NOT NULL,
  `gateway_username` text NOT NULL,
  `monitored` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`gateway_id`, `tti_id`, `lon`, `lat`, `display_name`, `deployment_status`, `esn`, `mac`, `serial_number`, `ctn_box_number`, `ssid`, `ssid_key`, `router_username`, `router_key`, `gateway_key`, `owner`, `frequency`, `antenna`, `gateway_site_id`, `site_location`, `city`, `contact`, `date_installed`, `care_of`, `notes`, `gateway_username`, `monitored`) VALUES
('08497bf35a6', 'tester', 'tester', 'test', 'test', 'installed', '1500', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2018-11-22', 'test', 'test', 'tests', 'No'),
('08497bf35a6csss', 'tester', 'tester', 'tester', 'tester', 'installed', '1028', 'tester', 'tester', 'tester', '10202-20', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'Ortigas Pasig', 'Bulacan', 'tester', '2018-11-19', 'Nicky', 'none', 'tester', 'Yes'),
('c3497bf35a6', 'tester', 'tester', 'test', 'tester', 'Not Installed', '1880', 'tester', 'tester', 'tester', '10202-20', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'tester', 'Ortigas Pasig', 'Bulacan', 'tester', '2018-11-24', 'Nicky', 'none', 'tester', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `status`, `username`, `password`) VALUES
(1, 'Admin', 'poi', '555'),
(2206, 'Editor', 'Yin', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`gateway_id`(1000));

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_user_2` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
