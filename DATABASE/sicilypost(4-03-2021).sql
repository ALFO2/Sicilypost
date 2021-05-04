-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 04, 2021 alle 08:04
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicilypost`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `pacco`
--

CREATE TABLE `pacco` (
  `id_pacco` int(11) NOT NULL,
  `mitente` int(11) NOT NULL,
  `nome_destinatario` varchar(30) NOT NULL,
  `via_destinatario` varchar(50) NOT NULL,
  `citta_destinatario` varchar(20) NOT NULL,
  `regione_destinatario` varchar(10) NOT NULL,
  `cap_destinatario` int(11) NOT NULL,
  `peso` double NOT NULL,
  `lunghezza` double NOT NULL,
  `alltezza` double NOT NULL,
  `stato` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `punti_arrivo`
--

CREATE TABLE `punti_arrivo` (
  `id_punti_arrivo` int(11) NOT NULL,
  `via` varchar(40) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `n_civ` int(11) NOT NULL,
  `regione` varchar(20) NOT NULL,
  `cap` int(11) NOT NULL,
  `sede_centro` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `transito`
--

CREATE TABLE `transito` (
  `id_transito` int(11) NOT NULL,
  `cod_pacco` int(11) NOT NULL,
  `cod_arrivo` int(11) NOT NULL,
  `data_invio` date NOT NULL,
  `ora_invio` time NOT NULL,
  `data_arrivo` date NOT NULL,
  `ora_arrivo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id_utente` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `età` date NOT NULL,
  `cod_fiscale` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `via` varchar(100) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `n_civ` int(11) NOT NULL,
  `cap` int(11) NOT NULL,
  `regione` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `pacco`
--
ALTER TABLE `pacco`
  ADD PRIMARY KEY (`id_pacco`),
  ADD KEY `mitente` (`mitente`);

--
-- Indici per le tabelle `punti_arrivo`
--
ALTER TABLE `punti_arrivo`
  ADD PRIMARY KEY (`id_punti_arrivo`);

--
-- Indici per le tabelle `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`id_transito`),
  ADD KEY `cod_pacco` (`cod_pacco`),
  ADD KEY `cod_arrivo` (`cod_arrivo`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `pacco`
--
ALTER TABLE `pacco`
  MODIFY `id_pacco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `punti_arrivo`
--
ALTER TABLE `punti_arrivo`
  MODIFY `id_punti_arrivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `transito`
--
ALTER TABLE `transito`
  MODIFY `id_transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id_utente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `pacco`
--
ALTER TABLE `pacco`
  ADD CONSTRAINT `pacco_ibfk_1` FOREIGN KEY (`mitente`) REFERENCES `utente` (`id_utente`);

--
-- Limiti per la tabella `transito`
--
ALTER TABLE `transito`
  ADD CONSTRAINT `transito_ibfk_1` FOREIGN KEY (`cod_pacco`) REFERENCES `pacco` (`id_pacco`),
  ADD CONSTRAINT `transito_ibfk_2` FOREIGN KEY (`cod_arrivo`) REFERENCES `punti_arrivo` (`id_punti_arrivo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
