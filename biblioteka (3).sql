-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lip 07, 2023 at 10:58 PM
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
  `haslo2` varchar(50) DEFAULT NULL,
  `uprawnienia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `bibliotekarze`
--

INSERT INTO `bibliotekarze` (`ID`, `login`, `email`, `haslo2`, `uprawnienia`) VALUES
(1, 'Bibliotekarz_Marek', 'bibliotekarzmarek@gmail.com', 'marek1', 'bibliotekarz'),
(2, 'Bibliotekarz_Jolanta', 'bibliotekarzjolanta@gmail.com', 'jolanta4', 'bibliotekarz'),
(3, 'Bibliotekarz_Wojtek', 'bibliotekarzwojtek@gmail.com', 'wojtek7', 'bibliotekarz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `id_ksiazki`
--

CREATE TABLE `id_ksiazki` (
  `ID` int(11) NOT NULL,
  `tytul_ksiazki` varchar(50) NOT NULL,
  `czy_wypozyczona` text NOT NULL,
  `data_wypozyczenia` date DEFAULT NULL,
  `czy_zwrocona` text NOT NULL,
  `data_zwrotu` date DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `rezerwacja` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `id_ksiazki`
--

INSERT INTO `id_ksiazki` (`ID`, `tytul_ksiazki`, `czy_wypozyczona`, `data_wypozyczenia`, `czy_zwrocona`, `data_zwrotu`, `login`, `rezerwacja`) VALUES
(1, 'Władca Pierścieni', 'Tak', '2023-03-09', 'tak', '2023-03-07', 'marta23', 'Tak'),
(2, 'Harry Potter i Kamień Filozoficzny', 'Tak', '2023-03-12', 'nie', NULL, 'mania15', 'Tak'),
(3, 'Zbrodnia i kara', 'Tak', '2023-04-19', 'tak', '2023-04-21', 'kamil9', 'Tak'),
(4, 'Oskar i pani Róża', 'Tak', '2023-04-27', 'nie', NULL, 'dominik39', 'Tak'),
(5, 'Zmierzch', 'Nie', NULL, '', NULL, 'marta23', 'Tak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `haslo2` varchar(50) DEFAULT NULL,
  `uprawnienia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`ID`, `login`, `email`, `haslo2`, `uprawnienia`) VALUES
(29, 'mania15', 'mania@o2.pl', 'onet2', 'klient'),
(30, 'dominik39', 'dominik@icloud.com', 'icloud2', 'klient'),
(37, 'marta23', 'marta@gmail.com', 'gmail1', 'klient'),
(38, 'kamil9', 'kamil@wp.pl', 'wirtualnapolska1', 'klient');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `ID` int(11) NOT NULL,
  `tytul_ksiazki` varchar(50) DEFAULT NULL,
  `gatunek` text DEFAULT NULL,
  `szczegoly` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `ksiazki`
--

INSERT INTO `ksiazki` (`ID`, `tytul_ksiazki`, `gatunek`, `szczegoly`) VALUES
(1, 'Władca Pierścieni', 'Fantasy, Przygodowa, Romans dworski', 'podstrony_ksiazki/k1.php'),
(2, 'Harry Potter i Kamień Filozoficzny', 'Fantasy, Przygodowa', 'podstrony_ksiazki/k2.php'),
(3, 'Gra o tron (edycja ilustrowana)', 'Fantasy', 'podstrony_ksiazki/k3.php'),
(4, 'Miecz przeznaczenia', 'Fantasy', 'podstrony_ksiazki/k4.php'),
(5, 'Oskar i Pani Róża', 'Fikcja, Epistolarna', 'podstrony_ksiazki/k5.php'),
(6, 'Zbrodnia i Kara', 'Psychologiczna, Kryminalna, Filozoficzna', 'podstrony_ksiazki/k6.php'),
(7, 'Krew Elfów', 'Fantasy', 'podstrony_ksiazki/k7.php'),
(8, 'Mężczyźni, którzy nienawidzą kobiet', 'Dreszczowiec, Kryminalna, Suspens', 'podstrony_ksiazki/k8.php'),
(9, 'Igrzyska Śmierci', 'Młodzieżowa, Dreszczowiec, Fantastyka postapokaliptyczna, Przygodowa', 'podstrony_ksiazki/k9.php'),
(21, 'Zmierzch', 'Romans, Horror, Melodramat, Fantasy', 'podstrony_ksiazki/k10.php');

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
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `id_ksiazki`
--
ALTER TABLE `id_ksiazki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
