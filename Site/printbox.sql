-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2025 at 04:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `s_price` decimal(10,2) DEFAULT 0.00,
  `m_price` decimal(10,2) DEFAULT 0.00,
  `l_price` decimal(10,2) DEFAULT 0.00,
  `s_size` varchar(18) NOT NULL DEFAULT '0-0-0',
  `m_size` varchar(18) NOT NULL DEFAULT '0-0-0',
  `l_size` varchar(18) NOT NULL DEFAULT '0-0-0',
  `s_weight` int(11) NOT NULL DEFAULT 0,
  `m_weight` int(11) NOT NULL DEFAULT 0,
  `l_weight` int(11) NOT NULL DEFAULT 0,
  `s_time` time NOT NULL DEFAULT '00:00:00',
  `m_time` time NOT NULL DEFAULT '00:00:00',
  `l_time` time NOT NULL DEFAULT '00:00:00',
  `upload_date` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_path` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `title`, `description`, `s_price`, `m_price`, `l_price`, `s_size`, `m_size`, `l_size`, `s_weight`, `m_weight`, `l_weight`, `s_time`, `m_time`, `l_time`, `upload_date`, `user_id`, `category_id`, `image_path`) VALUES
(1, '3D Модель Дракона', 'Деталізована 3D модель фантастичного дракона.', 15.99, 20.00, 25.00, '5-6-10', '6-3-10', '6-10-23', 12, 24, 48, '02:00:00', '03:00:00', '05:00:00', '2025-04-12 23:00:27', 1, 1, '/images/image1.png'),
(2, '3D Модель Авто', 'Модель спортивного автомобіля в високій якості.', 12.50, 15.00, 17.00, '3-12-4', '6-15-6', '0-0-0', 24, 43, 68, '03:09:00', '02:22:00', '02:19:00', '2025-04-12 23:00:27', 1, 1, '/images/image2.png'),
(3, 'Футуристичний Шолом', 'Шолом із науково-фантастичного сеттингу.', 9.75, 13.00, 18.00, '1-1-1', '2-2-2', '3-3-3', 12, 22, 34, '01:00:00', '03:00:00', '03:00:00', '2025-04-12 23:00:27', 1, 2, '/images/image3.png'),
(4, 'Рука Робота', 'Механічна рука для робототехнічних проектів.', 14.00, 17.00, 21.00, '1-2-3', '2-3-4', '3-4-5', 32, 44, 54, '02:00:00', '03:00:00', '05:00:00', '2025-04-12 23:00:27', 1, 2, '/images/image4.png'),
(5, 'Замок у Горах', 'Казковий замок, ідеальний для ігрового рівня.', 19.90, 25.00, 31.00, '3-10-10', '3-12-12', '4-15-15', 2, 4, 8, '00:00:00', '00:00:00', '00:00:00', '2025-04-12 23:00:27', 1, 3, '/images/image5.png'),
(6, 'Космічний Корабель', 'Корабель з майбутнього з деталізацією корпусу.', 16.45, 19.60, 25.00, '3-4-5', '4-5-6', '5-6-7', 42, 65, 72, '00:00:00', '00:00:00', '00:00:00', '2025-04-12 23:00:27', 1, 1, '/images/image6.png'),
(7, 'Меч Героя', 'Класичний меч для фентезі-персонажів.', 8.30, 13.00, 17.00, '3-6-10', '5-12-20', '5-10-11', 45, 65, 75, '00:00:00', '00:00:00', '00:00:00', '2025-04-12 23:00:27', 1, 2, '/images/image7.png'),
(8, 'Скульптура Лева', 'Статуетка лева для декоративного використання.', 10.25, 15.00, 21.52, '0-0-0', '12-15-2', '22-21-4', 0, 12, 15, '00:00:00', '02:00:00', '07:00:00', '2025-04-12 23:00:27', 1, 3, '/images/image8.png'),
(9, 'Танк Другої Світової', 'Реалістична модель танка з історичним дизайном.', 13.70, 18.00, 22.00, '3-2-1', '0-0-0', '0-0-0', 10, 0, 0, '03:00:00', '00:00:00', '00:00:00', '2025-04-12 23:00:27', 1, 1, '/images/image9.png'),
(10, 'Будинок в стилі хай-тек', 'Сучасний будинок для архітектурного візуалізування.', 17.60, 24.00, 31.00, '0-0-0', '3-5-12', '0-0-0', 0, 15, 0, '00:00:00', '02:00:00', '00:00:00', '2025-04-12 23:00:27', 1, 3, '/images/image10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
