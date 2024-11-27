-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 27, 2024 at 08:48 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotto`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_numbers` varchar(255) DEFAULT NULL,
  `random_numbers` varchar(255) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_numbers`, `random_numbers`, `matches`, `date`) VALUES
(51, '1, 33, 35, 16, 27, 49', '22, 23, 33, 34, 7, 26', 1, '2024-11-27 07:34:41'),
(52, '1, 19, 6, 7, 8, 9', '10, 9, 26, 42, 21, 20', 1, '2024-11-27 07:42:34'),
(53, '1, 19, 6, 7, 8, 9', '36, 33, 12, 41, 8, 18', 1, '2024-11-27 07:42:38'),
(54, '1, 19, 6, 7, 8, 9', '2, 49, 15, 37, 35, 5', 0, '2024-11-27 07:42:40'),
(55, '1, 19, 6, 7, 8, 9', '24, 7, 29, 18, 2, 40', 1, '2024-11-27 07:42:42');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
