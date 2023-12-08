-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 02:39 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES
(1, 'oskar', 'zaq12wsx'),
(2, 'Grażyna', 'gr'),
(3, 'Olga', 'algo'),
(4, 'Igor', '324Igorek'),
(5, 'Zygmunt', '12345678'),
(6, 'Joanna', 'qwerty'),
(7, 'Adam', '4tydfg'),
(8, 'Oliwia', '76540gfa'),
(9, 'Antoni', '5hjkias'),
(10, 'Eliza', '47tg7654j'),
(11, 'Cezary', '4tydfg'),
(12, 'Damian', '87ujkiop'),
(13, 'Julia', '09oklmnj'),
(14, 'Maciej', 'swe4r567'),
(15, 'Wiktoria', '4tydfg'),
(16, 'Alicja', '76540gfa'),
(17, 'Lena', '5hjkias'),
(18, 'Nikola', '7r45tghy'),
(19, 'Zuzanna', '5tfgb87'),
(20, 'Daria', '78koimnhy'),
(21, 'Aleksandra', 'p09ikmnj'),
(22, 'Dawid', '6ytgvbhu');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
