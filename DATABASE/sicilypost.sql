-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 20, 2021 alle 01:26
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
-- Database: `sicilypost`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `addetto`
--

CREATE TABLE `addetto` (
  `Id_Addetto` int(11) NOT NULL,
  `Nome` int(11) NOT NULL,
  `Cognome` int(11) NOT NULL,
  `Età` int(11) NOT NULL,
  `Cod_macchina` int(11) NOT NULL,
  `Cod_Reparto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `arrivo`
--

CREATE TABLE `arrivo` (
  `Id_Arrivo` int(11) NOT NULL,
  `Cod_Pacco` int(11) NOT NULL,
  `Cod_Addetto` int(11) NOT NULL,
  `Cod_punto_arrivo` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `carta`
--

CREATE TABLE `carta` (
  `Id_Carta` int(11) NOT NULL,
  `Nome_Carta` int(11) NOT NULL,
  `CV` int(11) NOT NULL,
  `Numero_Carta` int(11) NOT NULL,
  `Cod_Utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `csr`
--

CREATE TABLE `csr` (
  `Id_CSR` int(11) NOT NULL,
  `Cod_regione` int(11) NOT NULL,
  `via` int(11) NOT NULL,
  `città` int(11) NOT NULL,
  `N_civico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `pacco`
--

CREATE TABLE `pacco` (
  `Id_Pacco` int(11) NOT NULL,
  `Cod_Mitente` int(11) NOT NULL,
  `Cod_Destinario` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `lunghezza` int(11) NOT NULL,
  `Altezza` int(11) NOT NULL,
  `Stato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `punti_di_transito`
--

CREATE TABLE `punti_di_transito` (
  `Id_punti_di_transito` int(11) NOT NULL,
  `Cod_so` int(11) NOT NULL,
  `Cod_csr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `regione`
--

CREATE TABLE `regione` (
  `Id_regione` int(11) NOT NULL,
  `Nome_regione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `so`
--

CREATE TABLE `so` (
  `Id_SO` int(11) NOT NULL,
  `Cod_CSR` int(11) NOT NULL,
  `via` int(11) NOT NULL,
  `Città` int(11) NOT NULL,
  `Cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `transito`
--

CREATE TABLE `transito` (
  `Id_Transito` int(11) NOT NULL,
  `Cod_Transito` int(11) NOT NULL,
  `Data_invio` date NOT NULL,
  `Ora_Invio` time NOT NULL,
  `Data_arrivo` date NOT NULL,
  `Ora_arrivo` time NOT NULL,
  `Cod_addetto` int(11) NOT NULL,
  `Cod_pacco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Id_Utente` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `Età` int(11) NOT NULL,
  `Cod_fc` varchar(16) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Via` varchar(130) NOT NULL,
  `Citta` varchar(25) NOT NULL,
  `N_Civ` int(11) NOT NULL,
  `Cap` varchar(7) NOT NULL,
  `Regione` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `addetto`
--
ALTER TABLE `addetto`
  ADD PRIMARY KEY (`Id_Addetto`);

--
-- Indici per le tabelle `arrivo`
--
ALTER TABLE `arrivo`
  ADD PRIMARY KEY (`Id_Arrivo`),
  ADD KEY `Cod_Pacco` (`Cod_Pacco`),
  ADD KEY `Cod_Addetto` (`Cod_Addetto`),
  ADD KEY `Cod_punto_arrivo` (`Cod_punto_arrivo`);

--
-- Indici per le tabelle `carta`
--
ALTER TABLE `carta`
  ADD KEY `Cod_Utente` (`Cod_Utente`);

--
-- Indici per le tabelle `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`Id_CSR`),
  ADD KEY `Cod_regione` (`Cod_regione`);

--
-- Indici per le tabelle `pacco`
--
ALTER TABLE `pacco`
  ADD PRIMARY KEY (`Id_Pacco`),
  ADD KEY `Cod_Mitente` (`Cod_Mitente`);

--
-- Indici per le tabelle `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  ADD PRIMARY KEY (`Id_punti_di_transito`),
  ADD KEY `Cod_so` (`Cod_so`),
  ADD KEY `Cod_csr` (`Cod_csr`);

--
-- Indici per le tabelle `regione`
--
ALTER TABLE `regione`
  ADD PRIMARY KEY (`Id_regione`);

--
-- Indici per le tabelle `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`Id_SO`),
  ADD KEY `Cod_CSR` (`Cod_CSR`);

--
-- Indici per le tabelle `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`Id_Transito`),
  ADD KEY `Cod_pacco` (`Cod_pacco`),
  ADD KEY `Cod_Transito` (`Cod_Transito`),
  ADD KEY `Cod_addetto` (`Cod_addetto`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Id_Utente`),
  ADD KEY `Regione` (`Regione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `addetto`
--
ALTER TABLE `addetto`
  MODIFY `Id_Addetto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `arrivo`
--
ALTER TABLE `arrivo`
  MODIFY `Id_Arrivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `csr`
--
ALTER TABLE `csr`
  MODIFY `Id_CSR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `pacco`
--
ALTER TABLE `pacco`
  MODIFY `Id_Pacco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  MODIFY `Id_punti_di_transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `regione`
--
ALTER TABLE `regione`
  MODIFY `Id_regione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `so`
--
ALTER TABLE `so`
  MODIFY `Id_SO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `transito`
--
ALTER TABLE `transito`
  MODIFY `Id_Transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `Id_Utente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `arrivo`
--
ALTER TABLE `arrivo`
  ADD CONSTRAINT `arrivo_ibfk_1` FOREIGN KEY (`Cod_Pacco`) REFERENCES `pacco` (`Id_Pacco`),
  ADD CONSTRAINT `arrivo_ibfk_2` FOREIGN KEY (`Cod_Addetto`) REFERENCES `addetto` (`Id_Addetto`),
  ADD CONSTRAINT `arrivo_ibfk_3` FOREIGN KEY (`Cod_punto_arrivo`) REFERENCES `transito` (`Id_Transito`);

--
-- Limiti per la tabella `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `carta_ibfk_1` FOREIGN KEY (`Cod_Utente`) REFERENCES `utente` (`Id_Utente`);

--
-- Limiti per la tabella `csr`
--
ALTER TABLE `csr`
  ADD CONSTRAINT `csr_ibfk_1` FOREIGN KEY (`Cod_regione`) REFERENCES `regione` (`Id_regione`);

--
-- Limiti per la tabella `pacco`
--
ALTER TABLE `pacco`
  ADD CONSTRAINT `pacco_ibfk_1` FOREIGN KEY (`Cod_Mitente`) REFERENCES `utente` (`Id_Utente`);

--
-- Limiti per la tabella `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  ADD CONSTRAINT `punti_di_transito_ibfk_1` FOREIGN KEY (`Cod_so`) REFERENCES `so` (`Id_SO`),
  ADD CONSTRAINT `punti_di_transito_ibfk_2` FOREIGN KEY (`Cod_csr`) REFERENCES `csr` (`Id_CSR`);

--
-- Limiti per la tabella `so`
--
ALTER TABLE `so`
  ADD CONSTRAINT `so_ibfk_1` FOREIGN KEY (`Cod_CSR`) REFERENCES `csr` (`Id_CSR`);

--
-- Limiti per la tabella `transito`
--
ALTER TABLE `transito`
  ADD CONSTRAINT `transito_ibfk_1` FOREIGN KEY (`Cod_pacco`) REFERENCES `pacco` (`Id_Pacco`),
  ADD CONSTRAINT `transito_ibfk_2` FOREIGN KEY (`Cod_Transito`) REFERENCES `punti_di_transito` (`Id_punti_di_transito`),
  ADD CONSTRAINT `transito_ibfk_3` FOREIGN KEY (`Cod_addetto`) REFERENCES `addetto` (`Id_Addetto`);

--
-- Limiti per la tabella `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `utente_ibfk_1` FOREIGN KEY (`Regione`) REFERENCES `regione` (`Id_regione`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
