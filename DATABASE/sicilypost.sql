-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 12:41 AM
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
  `Cod_addetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utente`
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
  `Regione` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`Id_Arrivo`);

--
-- Indexes for table `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`Id_CSR`);

--
-- Indexes for table `regione`
--
ALTER TABLE `regione`
  ADD PRIMARY KEY (`Id_regione`);

--
-- Indexes for table `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`Id_Transito`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Id_Utente`);

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
-- AUTO_INCREMENT for table `regione`
--
ALTER TABLE `regione`
  MODIFY `Id_regione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transito`
--
ALTER TABLE `transito`
  MODIFY `Id_Transito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
  MODIFY `Id_Utente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
