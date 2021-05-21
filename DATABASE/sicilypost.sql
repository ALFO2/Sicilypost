-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 08:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
-- Table structure for table `addetto`
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
-- Table structure for table `arrivo`
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
-- Table structure for table `carta`
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
-- Table structure for table `csr`
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
-- Table structure for table `pacco`
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
-- Table structure for table `prenotazione`
--

CREATE TABLE `prenotazione` (
  `Id_prenotazinoe` int(11) NOT NULL,
  `Cod_Utente` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `Cod_Adetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `punti_di_transito`
--

CREATE TABLE `punti_di_transito` (
  `Id_punti_di_transito` int(11) NOT NULL,
  `Cod_so` int(11) NOT NULL,
  `Cod_csr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regione`
--

CREATE TABLE `regione` (
  `Id_regione` int(11) NOT NULL,
  `Nome_regione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regione`
--

INSERT INTO `regione` (`Id_regione`, `Nome_regione`) VALUES
(1, 'milano');

-- --------------------------------------------------------

--
-- Table structure for table `ritiro_consegna`
--

CREATE TABLE `ritiro_consegna` (
  `Id_Ritiro_Consegna` int(11) NOT NULL,
  `Cod_pacco` int(11) NOT NULL,
  `Cod_prenotazione` int(11) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `so`
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
-- Table structure for table `transito`
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
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `Id_Utente` int(11) NOT NULL,
  `Nome` varchar(25) NOT NULL,
  `Cognome` varchar(25) NOT NULL,
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
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`Id_Utente`, `Nome`, `Cognome`, `Età`, `Cod_fc`, `Email`, `Password`, `Via`, `Citta`, `N_Civ`, `Cap`, `Regione`) VALUES
(4, 'paul', 'alarcon', 18, 'asdfghjklzxcvbnm', 'pauloalarcon76@gmail.com', 'PaulG12mmss', 'via per imbersago', 'milano', 51, '20092', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addetto`
--
ALTER TABLE `addetto`
  ADD PRIMARY KEY (`Id_Addetto`);

--
-- Indexes for table `arrivo`
--
ALTER TABLE `arrivo`
  ADD PRIMARY KEY (`Id_Arrivo`),
  ADD KEY `Cod_Pacco` (`Cod_Pacco`),
  ADD KEY `Cod_Addetto` (`Cod_Addetto`),
  ADD KEY `Cod_punto_arrivo` (`Cod_punto_arrivo`);

--
-- Indexes for table `carta`
--
ALTER TABLE `carta`
  ADD KEY `Cod_Utente` (`Cod_Utente`);

--
-- Indexes for table `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`Id_CSR`),
  ADD KEY `Cod_regione` (`Cod_regione`);

--
-- Indexes for table `pacco`
--
ALTER TABLE `pacco`
  ADD PRIMARY KEY (`Id_Pacco`),
  ADD KEY `Cod_Mitente` (`Cod_Mitente`);

--
-- Indexes for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`Id_prenotazinoe`),
  ADD KEY `Cod_Utente` (`Cod_Utente`);

--
-- Indexes for table `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  ADD PRIMARY KEY (`Id_punti_di_transito`),
  ADD KEY `Cod_so` (`Cod_so`),
  ADD KEY `Cod_csr` (`Cod_csr`);

--
-- Indexes for table `regione`
--
ALTER TABLE `regione`
  ADD PRIMARY KEY (`Id_regione`);

--
-- Indexes for table `ritiro_consegna`
--
ALTER TABLE `ritiro_consegna`
  ADD PRIMARY KEY (`Id_Ritiro_Consegna`),
  ADD KEY `Cod_prenotazione` (`Cod_prenotazione`);

--
-- Indexes for table `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`Id_SO`),
  ADD KEY `Cod_CSR` (`Cod_CSR`);

--
-- Indexes for table `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`Id_Transito`),
  ADD KEY `Cod_pacco` (`Cod_pacco`),
  ADD KEY `Cod_Transito` (`Cod_Transito`),
  ADD KEY `Cod_addetto` (`Cod_addetto`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Id_Utente`),
  ADD KEY `Regione` (`Regione`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addetto`
--
ALTER TABLE `addetto`
  MODIFY `Id_Addetto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `arrivo`
--
ALTER TABLE `arrivo`
  MODIFY `Id_Arrivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csr`
--
ALTER TABLE `csr`
  MODIFY `Id_CSR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pacco`
--
ALTER TABLE `pacco`
  MODIFY `Id_Pacco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `Id_prenotazinoe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  MODIFY `Id_punti_di_transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regione`
--
ALTER TABLE `regione`
  MODIFY `Id_regione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ritiro_consegna`
--
ALTER TABLE `ritiro_consegna`
  MODIFY `Id_Ritiro_Consegna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `so`
--
ALTER TABLE `so`
  MODIFY `Id_SO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transito`
--
ALTER TABLE `transito`
  MODIFY `Id_Transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
  MODIFY `Id_Utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrivo`
--
ALTER TABLE `arrivo`
  ADD CONSTRAINT `arrivo_ibfk_1` FOREIGN KEY (`Cod_Pacco`) REFERENCES `pacco` (`Id_Pacco`),
  ADD CONSTRAINT `arrivo_ibfk_2` FOREIGN KEY (`Cod_Addetto`) REFERENCES `addetto` (`Id_Addetto`),
  ADD CONSTRAINT `arrivo_ibfk_3` FOREIGN KEY (`Cod_punto_arrivo`) REFERENCES `transito` (`Id_Transito`);

--
-- Constraints for table `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `carta_ibfk_1` FOREIGN KEY (`Cod_Utente`) REFERENCES `utente` (`Id_Utente`);

--
-- Constraints for table `csr`
--
ALTER TABLE `csr`
  ADD CONSTRAINT `csr_ibfk_1` FOREIGN KEY (`Cod_regione`) REFERENCES `regione` (`Id_regione`);

--
-- Constraints for table `pacco`
--
ALTER TABLE `pacco`
  ADD CONSTRAINT `pacco_ibfk_1` FOREIGN KEY (`Cod_Mitente`) REFERENCES `utente` (`Id_Utente`);

--
-- Constraints for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD CONSTRAINT `prenotazione_ibfk_1` FOREIGN KEY (`Cod_Utente`) REFERENCES `utente` (`Id_Utente`);

--
-- Constraints for table `punti_di_transito`
--
ALTER TABLE `punti_di_transito`
  ADD CONSTRAINT `punti_di_transito_ibfk_1` FOREIGN KEY (`Cod_so`) REFERENCES `so` (`Id_SO`),
  ADD CONSTRAINT `punti_di_transito_ibfk_2` FOREIGN KEY (`Cod_csr`) REFERENCES `csr` (`Id_CSR`);

--
-- Constraints for table `ritiro_consegna`
--
ALTER TABLE `ritiro_consegna`
  ADD CONSTRAINT `ritiro_consegna_ibfk_1` FOREIGN KEY (`Cod_prenotazione`) REFERENCES `prenotazione` (`Id_prenotazinoe`);

--
-- Constraints for table `so`
--
ALTER TABLE `so`
  ADD CONSTRAINT `so_ibfk_1` FOREIGN KEY (`Cod_CSR`) REFERENCES `csr` (`Id_CSR`);

--
-- Constraints for table `transito`
--
ALTER TABLE `transito`
  ADD CONSTRAINT `transito_ibfk_1` FOREIGN KEY (`Cod_pacco`) REFERENCES `pacco` (`Id_Pacco`),
  ADD CONSTRAINT `transito_ibfk_2` FOREIGN KEY (`Cod_Transito`) REFERENCES `punti_di_transito` (`Id_punti_di_transito`),
  ADD CONSTRAINT `transito_ibfk_3` FOREIGN KEY (`Cod_addetto`) REFERENCES `addetto` (`Id_Addetto`);

--
-- Constraints for table `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `utente_ibfk_1` FOREIGN KEY (`Regione`) REFERENCES `regione` (`Id_regione`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
