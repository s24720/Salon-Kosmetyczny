-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 02 Cze 2022, 21:40
-- Wersja serwera: 10.5.15-MariaDB-10+deb11u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szczurekbomba`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_logowanie`
--

CREATE TABLE `dane_logowanie` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `haslo` varchar(20) NOT NULL,
  `Rola_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane_logowanie`
--

INSERT INTO `dane_logowanie` (`id`, `email`, `haslo`, `Rola_id`) VALUES
(1, 'klient1@gmail.com', 'haslo1', 1),
(2, 'klient2@gmail.com', 'haslo2', 3),
(3, 'klient3@gmail.com', 'haslo3', 1),
(4, 'admin1@gmail.com', 'Trudne-Haslo123', 3),
(18, 'szczurowski@gmail.com', 'QWERTY-qaz123', 1),
(19, 'Kowalski@gmail.com', 'QWERTY-qaz123', 1),
(20, 'Szymeczko@gmail.com', 'Szymeczko-123', 1),
(21, 'm.sz@wp.pl', 'Kutas123!', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `nr_tel` varchar(50) NOT NULL,
  `Salon_id` int(11) NOT NULL,
  `Dane_logowanie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id`, `imie`, `nazwisko`, `nr_tel`, `Salon_id`, `Dane_logowanie_id`) VALUES
(1, 'michal', 'komora', '123456789', 1, 1),
(2, 'irena', 'szymko', '987654321', 2, 2),
(3, 'wanda', 'mróz', '321654987', 3, 3),
(4, 'admin', 'admin', '123456789', 1, 4),
(16, 'Szymon', 'Szczurowski', '123456789', 1, 18),
(17, 'ss', 'ss', '123', 1, 18),
(18, 'Szymon', 'Szczurowski', '123456789', 1, 18),
(19, 'Jan', 'Kowallski', '123456789', 1, 19),
(20, 'Mikołaj', 'Szymeczko', '48123456789', 1, 20),
(21, 'MikoÅ‚aj', 'Sz', '48111222333', 1, 21);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `Salon_id` int(11) NOT NULL,
  `opina` varchar(300) NOT NULL,
  `data` datetime NOT NULL,
  `nick` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `Salon_id`, `opina`, `data`, `nick`) VALUES
(21, 1, 'Salon bardzo fajny. Polecam', '2022-05-21 16:52:32', 'Ela'),
(49, 1, '', '2022-06-02 20:59:18', ''),
(48, 1, '', '2022-06-02 20:59:17', ''),
(47, 1, 'siemka', '2022-06-02 20:59:16', 'Trzy'),
(45, 1, 'Polecam', '2022-06-02 10:13:14', 'Kasia'),
(46, 1, 'WybiorÄ™ siÄ™ jeszcze raz', '2022-06-02 10:13:33', 'Hania'),
(43, 1, 'Fajny Salon', '2022-06-02 10:12:29', 'BoÅ¼ena'),
(42, 1, 'Polecam ', '2022-06-02 10:10:36', 'Irena');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `powiat`
--

CREATE TABLE `powiat` (
  `id` int(11) NOT NULL,
  `nazwy` varchar(50) NOT NULL,
  `Wojewodztwa_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `powiat`
--

INSERT INTO `powiat` (`id`, `nazwy`, `Wojewodztwa_id`) VALUES
(1, 'bolesławiecki', 1),
(2, 'dzierżoniowski', 1),
(3, 'głogowski', 1),
(4, 'górowski', 1),
(5, 'jaworski', 1),
(6, 'kamiennogórski', 1),
(7, 'aleksandrowski', 2),
(8, 'brodnicki', 2),
(9, 'bydgoski', 2),
(10, 'chełmiński', 2),
(11, 'golubsko-dobrzyński', 2),
(12, 'grudziądzki', 2),
(13, 'bialski', 3),
(14, 'biłgorajski', 3),
(15, 'chełmski', 3),
(16, 'hrubieszowski', 3),
(17, 'janowski', 3),
(18, 'kraśnicki', 3),
(19, 'gorzowski', 4),
(20, 'krośnieński', 4),
(21, 'międzyrzecki', 4),
(22, 'nowosolski', 4),
(23, 'słubicki', 4),
(24, 'strzelecko-drezdenecki', 4),
(25, 'bełchatowski', 5),
(26, 'brzeziński', 5),
(27, 'kutnowski', 5),
(28, 'łaski', 5),
(29, 'łęczycki', 5),
(30, 'łowicki', 5),
(31, 'bocheński', 6),
(32, 'brzeski', 6),
(33, 'chrzanowski', 6),
(34, 'dąbrowski', 6),
(35, 'gorlicki', 6),
(36, 'krakowski', 6),
(37, 'białobrzeski', 7),
(38, 'ciechanowski', 7),
(39, 'garwoliński', 7),
(40, 'gostyniński', 7),
(41, 'grodziski', 7),
(42, 'grójecki', 7),
(43, 'brzeski', 8),
(44, 'głubczycki', 8),
(45, 'kędzierzyńsko-kozielski', 8),
(46, 'kluczborski', 8),
(47, 'krapkowicki', 8),
(48, 'namysłowski', 8),
(49, 'bieszczadzki', 9),
(50, 'brzozowski', 9),
(51, 'dębicki', 9),
(52, 'jarosławski', 9),
(53, 'jasielski', 9),
(54, 'kolbuszowski', 9),
(55, 'augustowski', 10),
(56, 'białostocki', 10),
(57, 'bielski', 10),
(58, 'grajewski', 10),
(59, 'hajnowski', 10),
(60, 'kolneński', 10),
(61, 'bytowski', 11),
(62, 'chojnicki', 11),
(63, 'człuchowski', 11),
(64, 'gdański', 11),
(65, 'kartuski', 11),
(66, 'kościerski', 11),
(67, 'będziński', 12),
(68, 'bielski', 12),
(69, 'bieruńsko-lędziński', 12),
(70, 'cieszyński', 12),
(71, 'częstochowski', 12),
(72, 'gliwicki', 12),
(73, 'buski', 13),
(74, 'jędrzejowski', 13),
(75, 'kazimierski', 13),
(76, 'kielecki', 13),
(77, 'konecki', 13),
(78, 'opatowski', 13),
(79, 'bartoszycki', 14),
(80, 'ostródzki', 14),
(81, 'działdowski', 14),
(82, 'elbląski', 14),
(83, 'gołdapski', 14),
(84, 'nowomiejski', 14),
(85, 'chodzieski', 15),
(86, 'czarnkowsko-trzcianecki', 15),
(87, 'grodziski', 15),
(88, 'koniński', 15),
(89, 'jarociński', 15),
(90, 'kościański', 15),
(91, 'białogardzki', 16),
(92, 'choszczeńskii', 16),
(93, 'drawski', 16),
(94, 'goleniowski', 16),
(95, 'gryfiński', 16),
(96, 'policki', 16);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `poziom`
--

CREATE TABLE `poziom` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `poziom`
--

INSERT INTO `poziom` (`id`, `nazwa`, `opis`) VALUES
(1, 'junior', 'potrafi wykonać podstawowe czynnosci'),
(2, 'mid', 'potrafi wykonywać większości czynności'),
(3, 'senior', 'potrfi wykonywać wysztkie czynnosci');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `zarobki` decimal(12,2) NOT NULL,
  `nr_tel` varchar(50) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `gamina` varchar(50) NOT NULL,
  `kod` varchar(6) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `nr_obiektu` varchar(50) NOT NULL,
  `nr_lokalu` varchar(50) NOT NULL,
  `Salon_id` int(11) NOT NULL,
  `Wojewodztwa_id` int(11) NOT NULL,
  `Dane_logowanie_id` int(11) NOT NULL,
  `Powiat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`id`, `imie`, `nazwisko`, `zarobki`, `nr_tel`, `miasto`, `gamina`, `kod`, `ulica`, `nr_obiektu`, `nr_lokalu`, `Salon_id`, `Wojewodztwa_id`, `Dane_logowanie_id`, `Powiat_id`) VALUES
(1, 'karolina', 'miód', '2500.00', '123456789', 'Kornale', 'komora', '13-199', 'waniliowa', '2a', '3', 1, 1, 4, 1),
(2, 'aneta', 'kot', '2600.00', '987654321', 'myce', 'stara', '14-231', 'cienka', '12k', '1', 2, 2, 5, 2),
(3, 'kacper', 'rola', '2700.00', '3216549876', 'morany', 'nowa', '17-321', 'hruba', '7c', '4', 3, 3, 6, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `cena` decimal(12,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `nazwa`, `cena`) VALUES
(1, 'mydlo', '50.00'),
(2, 'krem na noc', '15.00'),
(4, 'krem do depilacji', '11.00'),
(5, 'żel pod prysznic', '11.00'),
(6, 'puder', '12.49'),
(7, 'podkład do twarzy', '29.99'),
(8, 'kryjący podkład', '74.99'),
(9, 'koloryzująca odżywka', '10.79'),
(10, 'suchy szampon', '31.99'),
(11, 'krem uniwersalny', '17.99'),
(12, 'serum', '24.49');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj`
--

CREATE TABLE `rodzaj` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rodzaj`
--

INSERT INTO `rodzaj` (`id`, `nazwa`) VALUES
(1, 'Zabiegi pielęgnacyjno-złuszczające'),
(2, 'Zabiegi na ciało z użyciem apatatury'),
(3, 'Oprawa oka'),
(4, 'Masaż twarzy'),
(5, 'Makijaż permanentny'),
(6, 'Pielęgnacja dłoni i stóp'),
(7, 'Zabiegi na twarz z użyciem aparatury'),
(8, 'Mezoterapia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`id`, `nazwa`) VALUES
(1, 'klient'),
(2, 'pracownik'),
(3, 'administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `salon`
--

CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `gmina` varchar(50) NOT NULL,
  `kod` varchar(6) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `nr_obiektu` varchar(50) NOT NULL,
  `nr_lokalu` varchar(50) NOT NULL,
  `Wojewodztwa_id` int(11) NOT NULL,
  `Powiat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `salon`
--

INSERT INTO `salon` (`id`, `miasto`, `gmina`, `kod`, `ulica`, `nr_obiektu`, `nr_lokalu`, `Wojewodztwa_id`, `Powiat_id`) VALUES
(1, 'kowale', 'dąbki', '12-100', 'stołowa', '13a', '5', 1, 2),
(2, 'maćki', 'orowie', '11-150', 'kaczmowa', '15c', '7a', 2, 3),
(3, 'mordowo', 'walidy', '12-100', 'stołowa', '13a', '5', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `salon_produkt`
--

CREATE TABLE `salon_produkt` (
  `id` int(11) NOT NULL,
  `Salon_id` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `Produkt_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `umiejetnosc`
--

CREATE TABLE `umiejetnosc` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `umiejetnosc`
--

INSERT INTO `umiejetnosc` (`id`, `nazwa`, `opis`) VALUES
(1, 'masaż', 'umejętność masowania wszystkich częście ciała'),
(2, 'malowanie', 'umiejętnośc malowania twarzy'),
(3, 'mycie', 'umiejętnośc mycia całego ciałą');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `umiejetnosc_pracownik`
--

CREATE TABLE `umiejetnosc_pracownik` (
  `id` int(11) NOT NULL,
  `Pracownik_id` int(11) NOT NULL,
  `Umiejetnosc_id` int(11) NOT NULL,
  `Poziom_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `umiejetnosc_pracownik`
--

INSERT INTO `umiejetnosc_pracownik` (`id`, `Pracownik_id`, `Umiejetnosc_id`, `Poziom_id`) VALUES
(1, 1, 3, 2),
(2, 2, 2, 3),
(3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyta`
--

CREATE TABLE `wizyta` (
  `id` int(11) NOT NULL,
  `Klient_id` int(11) NOT NULL,
  `Salon_id` int(11) NOT NULL,
  `Pracownik_id` int(11) DEFAULT NULL,
  `czas` datetime NOT NULL,
  `Zabieg_id` int(11) NOT NULL,
  `informacje` varchar(300) DEFAULT NULL,
  `potwierdzoneK` tinyint(1) NOT NULL,
  `potwierdzoneA` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wizyta`
--

INSERT INTO `wizyta` (`id`, `Klient_id`, `Salon_id`, `Pracownik_id`, `czas`, `Zabieg_id`, `informacje`, `potwierdzoneK`, `potwierdzoneA`) VALUES
(1, 1, 1, 1, '2022-04-22 11:30:00', 1, NULL, 0, 0),
(2, 2, 2, 3, '2022-04-22 10:30:00', 2, NULL, 0, 0),
(3, 3, 3, 1, '2021-03-21 09:00:00', 3, NULL, 0, 0),
(8, 1, 1, 1, '2022-05-28 13:00:00', 2, 'czarny', 1, 1),
(10, 1, 1, 1, '2022-05-30 12:00:00', 34, '', 1, 0),
(18, 1, 1, 1, '2022-05-30 15:00:00', 10, 'dv', 0, 0),
(19, 2, 1, 1, '2022-05-28 14:00:00', 9, 'ergertg', 0, 0),
(20, 1, 1, 1, '2022-05-01 08:00:00', 22, '', 0, 0),
(25, 1, 1, 1, '2022-05-31 09:00:00', 5, '', 0, 0),
(28, 1, 1, 1, '2022-05-31 08:00:00', 1, 'f', 0, 0),
(30, 1, 1, 1, '2022-06-09 15:00:00', 3, 'f', 1, 1),
(33, 1, 1, 1, '2022-06-14 10:00:00', 17, 'ujkuik', 1, 0),
(34, 1, 1, 1, '2022-05-03 10:00:00', 17, 'tht', 0, 0),
(35, 1, 1, 1, '2022-05-05 14:00:00', 17, 'trhth', 0, 0),
(36, 1, 1, 1, '2022-05-07 10:00:00', 17, 'd', 0, 0),
(37, 1, 1, 1, '2022-06-21 11:00:00', 7, 'ok', 1, 0),
(38, 1, 1, 1, '2022-05-20 17:00:00', 7, '', 0, 0),
(40, 20, 1, 1, '2022-06-03 14:00:00', 5, 'test', 1, 1),
(41, 1, 1, 1, '2022-06-04 12:00:00', 2, '', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wojewodztwa`
--

CREATE TABLE `wojewodztwa` (
  `id` int(11) NOT NULL,
  `nazwy` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wojewodztwa`
--

INSERT INTO `wojewodztwa` (`id`, `nazwy`) VALUES
(1, 'dolnośląskie'),
(2, 'kujawsko-pomorskie'),
(3, 'lubelskie'),
(4, 'lubuskie'),
(5, 'łódzkie'),
(6, 'małopolskie'),
(7, 'mazowieckie'),
(8, 'opolskie'),
(9, 'podkarpackie'),
(10, 'podlaskie'),
(11, 'pomorskie'),
(12, 'śląskie'),
(13, 'świętokrzyskie'),
(14, 'warmińsko-mazurskie'),
(15, 'wielkopolskie'),
(16, 'zachodniopomorskie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zabieg`
--

CREATE TABLE `zabieg` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `cena` decimal(12,2) NOT NULL,
  `czas` time NOT NULL,
  `Rodzaj_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zabieg`
--

INSERT INTO `zabieg` (`id`, `nazwa`, `cena`, `czas`, `Rodzaj_id`) VALUES
(1, 'Azelaic Peel', '350.00', '01:30:00', 1),
(2, 'Terapeutyczny Zabieg Dyniowy', '360.00', '01:30:00', 1),
(3, 'MangoPeel ', '330.00', '01:20:00', 1),
(4, 'Body Contour', '1000.00', '02:00:00', 2),
(5, 'Endermologia Alliance', '330.00', '01:30:00', 2),
(6, 'Karboksyterapia', '220.00', '01:00:00', 2),
(7, 'Laminacja brwi', '210.00', '01:00:00', 3),
(8, 'Henna rzęs lub brwi', '30.00', '00:30:00', 3),
(9, 'Regulacja brwi', '30.00', '00:30:00', 3),
(10, 'Chiromasaz drenujaco-modelujacy', '270.00', '01:00:00', 4),
(11, 'Transbukalny masaż odmładzający', '270.00', '01:30:00', 4),
(12, 'locasta', '300.00', '01:30:00', 4),
(16, 'Makijaż permanentny brwi', '1200.00', '02:00:00', 5),
(17, 'Makijaż permanentny - Kreski górne i dolne', '800.00', '01:30:00', 5),
(18, 'Pigmentacja skóry głowy', '4000.00', '04:30:00', 5),
(19, 'Hybrydowy z nadbudową paznokcia manicure', '150.00', '01:00:00', 6),
(20, 'Japoński manicure', '60.00', '01:00:00', 6),
(21, 'Męski manicure', '60.00', '01:00:00', 6),
(22, 'Twarz + szyja + dekolt', '330.00', '02:00:00', 7),
(23, 'Skóra głowy', '280.00', '01:00:00', 7),
(24, 'Plecy', '440.00', '01:00:00', 7),
(25, 'Twarz', '330.00', '01:00:00', 8),
(26, 'Twarz + szyja + dekolt', '280.00', '01:30:00', 8),
(27, 'Dłonie', '440.00', '00:30:00', 8),
(34, 'Oczyszczanie twarzy', '150.00', '00:00:30', 7);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane_logowanie`
--
ALTER TABLE `dane_logowanie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dane_logowanie_Rola` (`Rola_id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Klient_Dane_logowanie` (`Dane_logowanie_id`),
  ADD KEY `Klient_Salon` (`Salon_id`);

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Opinie_Salon` (`Salon_id`);

--
-- Indeksy dla tabeli `powiat`
--
ALTER TABLE `powiat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Powiat_Wojewodztwa` (`Wojewodztwa_id`);

--
-- Indeksy dla tabeli `poziom`
--
ALTER TABLE `poziom`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pracownik_Dane_logowanie` (`Dane_logowanie_id`),
  ADD KEY `Pracownik_Powiat` (`Powiat_id`),
  ADD KEY `Pracownik_Salon` (`Salon_id`),
  ADD KEY `Pracownik_Wojewodztwa` (`Wojewodztwa_id`);

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rodzaj`
--
ALTER TABLE `rodzaj`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Salon_Wojewodztwa` (`Wojewodztwa_id`),
  ADD KEY `Salon_Powiat` (`Powiat_id`);

--
-- Indeksy dla tabeli `salon_produkt`
--
ALTER TABLE `salon_produkt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Salon_Produkt_Produkt` (`Produkt_id`),
  ADD KEY `Salon_Produkt_Salon` (`Salon_id`);

--
-- Indeksy dla tabeli `umiejetnosc`
--
ALTER TABLE `umiejetnosc`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wizyta`
--
ALTER TABLE `wizyta`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zabieg`
--
ALTER TABLE `zabieg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane_logowanie`
--
ALTER TABLE `dane_logowanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT dla tabeli `wizyta`
--
ALTER TABLE `wizyta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT dla tabeli `zabieg`
--
ALTER TABLE `zabieg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
