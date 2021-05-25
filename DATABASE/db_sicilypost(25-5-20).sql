-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 25, 2021 alle 08:51
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sicilypost`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `addetto`
--

CREATE TABLE `addetto` (
  `ID_addetto` int(11) NOT NULL,
  `Nome` varchar(25) NOT NULL,
  `Cognome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `arrivi_so`
--

CREATE TABLE `arrivi_so` (
  `ID_Arrivi_so` int(11) NOT NULL,
  `COD_pacco` int(11) NOT NULL,
  `Data` date NOT NULL,
  `ora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `arrivo_csr`
--

CREATE TABLE `arrivo_csr` (
  `ID_arrivo_csr` int(11) NOT NULL,
  `Cod_pacco` int(11) NOT NULL,
  `Data` date NOT NULL,
  `ora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `carte`
--

CREATE TABLE `carte` (
  `ID_carta` int(11) NOT NULL,
  `Numero_carta` int(11) NOT NULL,
  `CVV` int(11) NOT NULL,
  `COD_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `consegna`
--

CREATE TABLE `consegna` (
  `ID_consegna` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL,
  `COD_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `csr`
--

CREATE TABLE `csr` (
  `ID_csr` int(11) NOT NULL,
  `Città` int(11) NOT NULL,
  `COD_regione` int(11) NOT NULL,
  `N_civ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `destinazione`
--

CREATE TABLE `destinazione` (
  `ID_destinazione` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL,
  `COD_pacco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `pacco`
--

CREATE TABLE `pacco` (
  `ID_pacco` int(11) NOT NULL,
  `COD_destinatario` int(11) NOT NULL,
  `COD_consegna` int(11) NOT NULL,
  `COD_ritiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `ID_prenotazione` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL,
  `COD_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `regioni`
--

CREATE TABLE `regioni` (
  `ID_regione` int(11) NOT NULL,
  `Regione` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `ritiro`
--

CREATE TABLE `ritiro` (
  `ID_ritiro` int(11) NOT NULL,
  `Data` date NOT NULL,
  `ora` time NOT NULL,
  `COD_prenotazione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `so`
--

CREATE TABLE `so` (
  `ID_so` int(11) NOT NULL,
  `Città` int(11) NOT NULL,
  `Via` int(11) NOT NULL,
  `N_civ` int(11) NOT NULL,
  `COD_csr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `ID_Utente` int(11) NOT NULL,
  `Nome` varchar(25) NOT NULL,
  `Cognome` varchar(25) NOT NULL,
  `Età` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `arrivi_so`
--
ALTER TABLE `arrivi_so`
  ADD PRIMARY KEY (`ID_Arrivi_so`);

--
-- Indici per le tabelle `arrivo_csr`
--
ALTER TABLE `arrivo_csr`
  ADD PRIMARY KEY (`ID_arrivo_csr`);

--
-- Indici per le tabelle `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`ID_carta`);

--
-- Indici per le tabelle `consegna`
--
ALTER TABLE `consegna`
  ADD PRIMARY KEY (`ID_consegna`);

--
-- Indici per le tabelle `destinazione`
--
ALTER TABLE `destinazione`
  ADD PRIMARY KEY (`ID_destinazione`);

--
-- Indici per le tabelle `pacco`
--
ALTER TABLE `pacco`
  ADD PRIMARY KEY (`ID_pacco`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`ID_prenotazione`);

--
-- Indici per le tabelle `ritiro`
--
ALTER TABLE `ritiro`
  ADD PRIMARY KEY (`ID_ritiro`);

--
-- Indici per le tabelle `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`ID_so`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`ID_Utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `arrivi_so`
--
ALTER TABLE `arrivi_so`
  MODIFY `ID_Arrivi_so` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `arrivo_csr`
--
ALTER TABLE `arrivo_csr`
  MODIFY `ID_arrivo_csr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `carte`
--
ALTER TABLE `carte`
  MODIFY `ID_carta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `consegna`
--
ALTER TABLE `consegna`
  MODIFY `ID_consegna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `destinazione`
--
ALTER TABLE `destinazione`
  MODIFY `ID_destinazione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `pacco`
--
ALTER TABLE `pacco`
  MODIFY `ID_pacco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `ID_prenotazione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ritiro`
--
ALTER TABLE `ritiro`
  MODIFY `ID_ritiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `so`
--
ALTER TABLE `so`
  MODIFY `ID_so` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `ID_Utente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
