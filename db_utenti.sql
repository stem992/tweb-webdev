-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 31, 2021 alle 12:34
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_utenti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `prezzo` float NOT NULL,
  `immagine` varchar(255) NOT NULL,
  `descrizione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `prezzo`, `immagine`, `descrizione`) VALUES
(1, 'IPHONE 11 128 GB', 789.9, '../img/iphone11.png', 'https://www.mobileworld.it/schede/apple-iphone-11/'),
(2, 'IPHONE 12 128 GB', 959.99, '../img/iphone12.png', 'https://www.mobileworld.it/schede/apple-iphone-12/'),
(3, 'IPHONE 12 PRO 128 GB', 1099.99, '../img/iphone12pro.png', 'https://www.mobileworld.it/schede/apple-iphone-12-pro/'),
(4, 'IPHONE 12 PRO MAX 256 GB', 1299, '../img/iphone12promax.png', 'https://www.mobileworld.it/schede/apple-iphone-12-pro-max/'),
(5, 'GALAXY S21 5G 128 GB', 879, '../img/s21.png', 'https://www.androidworld.it/schede/samsung-galaxy-s21/'),
(6, 'GALAXY S21+ 5G 256 GB', 1099, '../img/s21+.png', 'https://www.androidworld.it/schede/samsung-galaxy-s21-plus/'),
(7, 'GALAXY S21 ULTRA 5G 512 GB', 1299, '../img/s21ultra.png', 'https://www.androidworld.it/schede/samsung-galaxy-s21-ultra/'),
(8, 'GALAXY Z FOLD 2 256 GB', 2199, '../img/foldz2.png', 'https://www.androidworld.it/schede/samsung-galaxy-z-fold-2/'),
(9, 'HUAWEI MATE 40 PRO 128 GB', 599, '../img/huaweimate40pro.png', 'https://www.androidworld.it/schede/huawei-mate-40-pro/'),
(10, 'HUAWEI MATE XS 5G 256 GB', 1499, '../img/huaweimatexs.png', 'https://www.androidworld.it/schede/huawei-mate-xs/'),
(11, 'HUAWEI P40 PRO PLUS 256 GB', 799, '../img/p40proplus.png', 'https://www.androidworld.it/schede/huawei-p40-pro-plus/'),
(12, 'HUAWEI P SMART 2021 128 GB', 299, '../img/psmart2021.png', 'https://www.androidworld.it/schede/huawei-p-smart-2021/'),
(13, 'XIAOMI MI 9 SE 128 GB', 329, '../img/xiaomi9.png', 'https://www.androidworld.it/schede/xiaomi-mi9-se/'),
(14, 'XIAOMI REDMI NOTE 8 PRO 256 GB', 387, '../img/xiaomiredmi.png', 'https://www.androidworld.it/schede/redmi-note-8-pro-8gb/'),
(15, 'XIAOMI MI 10T PRO 256 GB', 529, '../img/mi10.png', 'https://www.androidworld.it/schede/xiaomi-mi-10t-pro/');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `citta`, `email`, `password`) VALUES
(27, 'Luca', 'Rossi', 'Torino', 'luca.rossi@gmail.com', 'ff377aff39a9345a9cca803fb5c5c081'),
(28, 'Andrea', 'Fiore', 'Milano', 'andrea.fiore@gmail.com', 'abf512212381f175e21e6969de432293'),
(29, 'Stefano', 'Pane', 'Milano', 'stefano.pane@gmail.com', '317a58affea472972b63bffdd3392ae0'),
(30, 'Andrea', 'Verdi', 'Verona', 'andrea.verdi@gmail.com', '1c42f9c1ca2f65441465b43cd9339d6c'),
(31, 'Mario', 'Rossi', 'Roma', 'mario.rossi@gmail.com', 'de2f15d014d40b93578d255e6221fd60'),
(32, 'Paulo', 'Santo', 'Venezia', 'paulo.santo@gmail.com', 'dd41cb18c930753cbecf993f828603dc'),
(33, 'Alessandro', 'Miro', 'Milano', 'alessandro.miro@gmail.com', '51af78a02435124ebc225e570e533ac9'),
(34, 'Marco', 'Seve', 'Milano', 'marco.seve@gmail.com', 'd22b93f9a60dee2e6b1d8ca2a7d038f1'),
(35, 'Andrea', 'Bianco', 'Torino', 'andrea.bianco@gmail.com', '1c42f9c1ca2f65441465b43cd9339d6c'),
(36, 'Stefano', 'Peddoni', 'Torino', 'stefano.peddoni@gmail.com', '317a58affea472972b63bffdd3392ae0'),
(37, 'Mario', 'Session', 'Milano', 'mario.session@gmail.com', 'de2f15d014d40b93578d255e6221fd60'),
(38, 'Luca', 'Lu', 'Milano', 'luca@gmail.com', 'ff377aff39a9345a9cca803fb5c5c081'),
(39, 'Stefano', 'Peddoni', 'Milano', 'stefano@gmail.com', '03c7c0ace395d80182db07ae2c30f034'),
(40, 'Andrea', 'Andrea', 'Milano', 'andrea@gmail.com', '1c42f9c1ca2f65441465b43cd9339d6c'),
(41, 'Luca', 'Luca', 'Torino', 'lucaa@gmail.com', 'ff377aff39a9345a9cca803fb5c5c081'),
(43, 'Ste', 'Ste', 'Milano', 'ste@gmail.com', '84c48d8e8dae6241ec61766c0e44282e');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
