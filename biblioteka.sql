-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 24, 2023 at 08:52 PM
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
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administratorzy`
--

CREATE TABLE `administratorzy` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `haslo` varchar(50) DEFAULT NULL,
  `uprawnienia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `administratorzy`
--

INSERT INTO `administratorzy` (`ID`, `login`, `email`, `haslo`, `uprawnienia`) VALUES
(1, 'mbanasiak', 'mbanasiak3@edu.cdv.pl', 'banasiak0', 'administrator'),
(2, 'ddobski', 'ddobski@edu.cdv.pl', 'dobski3', 'administrator'),
(3, 'kibron', 'kibron@edu.cdv.pl', 'ibron5', 'administrator'),
(4, 'mrogulska', 'mrogulska@edu.cdv.pl', 'rogulska9', 'administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bibliotekarze`
--

CREATE TABLE `bibliotekarze` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `haslo` varchar(50) DEFAULT NULL,
  `uprawnienia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `bibliotekarze`
--

INSERT INTO `bibliotekarze` (`ID`, `login`, `email`, `haslo`, `uprawnienia`) VALUES
(1, 'Bibliotekarz_Marek', 'bibliotekarzmarek@gmail.com', 'marek1', 'bibliotekarz'),
(2, 'Bibliotekarz_Jolanta', 'bibliotekarzjolanta@gmail.com', 'jolanta4', 'bibliotekarz'),
(3, 'Bibliotekarz_Wojtek', 'bibliotekarzwojtek@gmail.com', 'wojtek7', 'bibliotekarz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `id_ksiazki`
--

CREATE TABLE `id_ksiazki` (
  `id` int(11) NOT NULL,
  `tytul_ksiazki` varchar(50) NOT NULL,
  `czy_wypozyczona` text NOT NULL,
  `data_wypozyczenia` datetime DEFAULT NULL,
  `czy_zwrocona` text NOT NULL,
  `data_zwrotu` datetime DEFAULT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `id_ksiazki`
--

INSERT INTO `id_ksiazki` (`id`, `tytul_ksiazki`, `czy_wypozyczona`, `data_wypozyczenia`, `czy_zwrocona`, `data_zwrotu`, `login`) VALUES
(1, 'Władca Pierścieni', 'tak', '2023-03-09 12:46:29', 'tak', '2023-03-07 05:06:23', 'marta23'),
(2, 'Harry Potter i Kamień Filozoficzny', 'tak', '2023-03-12 18:13:38', 'nie', NULL, 'mania30'),
(3, 'Zbrodnia i kara', 'tak', '2023-04-19 14:37:01', 'tak', '2023-04-21 01:03:41', 'kamil45'),
(4, 'Oskar i pani Róża', 'tak', '2023-04-27 23:58:33', 'nie', NULL, 'dominik78');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID` int(11) NOT NULL,
  `login_id` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `haslo2` varchar(50) DEFAULT NULL,
  `uprawnienia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`ID`, `login_id`, `email`, `haslo2`, `uprawnienia`) VALUES
(1, 'marta23', 'marta@wp.pl', 'wirtualnapolska1', 'klient'),
(2, 'kamil45', 'kamil@gmail.com', 'gmail1', 'klient'),
(3, 'dominik78', 'dominik@o2.pl', 'onet2', 'klient'),
(4, 'mania30', 'mania@icloud.com', 'icloud5', 'klient');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id` int(11) NOT NULL,
  `tytul_ksiazki` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `ksiazki`
--

INSERT INTO `ksiazki` (`id`, `tytul_ksiazki`) VALUES
(1, 'Władca Pierścieni'),
(2, 'Harry Potter i Kamień Filozoficzny'),
(3, 'Gra o tron (edycja ilustrowana)'),
(4, 'Miecz przeznaczenia'),
(5, 'Oskar i Pani Róża'),
(6, 'Zbrodnia i Kara'),
(7, 'Krew Elfów'),
(8, 'Mężczyźni, którzy nienawidzą kobiet'),
(9, 'Igrzyska Śmierci'),
(10, 'Zmierzch'),
(11, 'Ostatnie Życzenie'),
(12, 'Papierowe Miasta');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `administratorzy`
--
ALTER TABLE `administratorzy`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `bibliotekarze`
--
ALTER TABLE `bibliotekarze`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `id_ksiazki`
--
ALTER TABLE `id_ksiazki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administratorzy`
--
ALTER TABLE `administratorzy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bibliotekarze`
--
ALTER TABLE `bibliotekarze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `id_ksiazki`
--
ALTER TABLE `id_ksiazki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
