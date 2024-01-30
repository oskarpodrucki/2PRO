-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Sty 2024, 19:03
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uczniowie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `wiek` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `wiek`) VALUES
(1, 'oskar', 'podrucki', 16),
(2, 'marek', 'marcucha', 19),
(3, 'ania', 'bania', 21),
(4, 'bartek', 'bałek', 16),
(5, 'bartek', 'bałek', 16),
(6, 'bartek', 'bałek', 16),
(7, 'bartek', 'bałek', 16),
(8, 'bartek', 'bałek', 16),
(9, 'bartek', 'bałek', 16),
(10, 'bartek', 'bałek', 16),
(11, 'bartek', 'bałek', 16),
(12, 'bartek', 'bałek', 16),
(13, 'bartek', 'bałek', 16),
(14, 'bartek', 'bałek', 16),
(15, 'bartek', 'bałek', 16),
(16, 'bartek', 'bałek', 16),
(17, 'bartek', 'bałek', 16),
(18, 'bartek', 'bałek', 16),
(19, 'bartek', 'bałek', 16),
(20, 'bartek', 'bałek', 16),
(21, 'bartek', 'bałek', 16),
(22, 'bartek', 'bałek', 16),
(23, 'bartek', 'bałek', 16),
(24, 'bartek', 'bałek', 16),
(25, 'bartek', 'bałek', 16),
(26, 'bartek', 'bałek', 16),
(27, 'bartek', 'bałek', 16),
(28, 'bartek', 'bałek', 16),
(29, 'bartek', 'bałek', 16),
(30, 'antoni', 'zrywaboki', 18),
(31, 'antoni', 'zrywaboki', 18),
(32, 'bartek', 'bałek', 16),
(33, 'bartek', 'bałek', 16),
(34, 'bartek', 'bałek', 16),
(35, 'bartek', 'bałek', 16),
(36, 'bartek', 'bałek', 16),
(37, 'bartek', 'bałek', 16),
(38, 'bartek', 'bałek', 16),
(39, 'aradian', 'baleńkosz', 15342),
(40, 'aradian', 'baleńkosz', 15342);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
