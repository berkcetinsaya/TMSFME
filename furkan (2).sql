-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Ara 2017, 22:13:45
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `furkan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `task`
--

CREATE TABLE `task` (
  `idtask` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `task`
--

INSERT INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES
(14, 'lub oil back flush filter cleaning', '4', '2017-11-01', 2),
(16, 'changing with new one of incin dosage P/P ball bearing ', '2', '2017-11-01', 3),
(17, 'Compresor valve reface ', '3', '2017-11-01', 4),
(18, 'M/E LO cooler cleaning', '4', '2017-11-02', 2),
(19, 'SW  P/P zinc checking ', '3', '2017-11-02', 3),
(21, 'Compresor valve reface ', '3', '2017-11-02', 4),
(22, 'changing inlet and outlet pressure gauges which were broken of jw p/p', '2', '2017-11-03', 2),
(23, 'Boiler water test ', '2', '2017-11-03', 3),
(24, 'Burning solid wastes in incin.', '3', '2017-11-03', 4),
(25, 'have oiler cleaned ECR ER ', '2', '2017-11-04', 2),
(26, 'DG1 centrifugalfilter cleaning ', '2', '2017-11-04', 3),
(27, 'weekly tests, getting running hours ', '3', '2017-11-04', 4),
(28, 'fore deck machineries P/P ovehaul ', '4', '2017-11-06', 2),
(29, 'getting performance test on DG1, Boiler water test ', '3', '2017-11-06', 3),
(30, 'vibration test on jw, feed, fire,emg fire pumps ', '2', '2017-11-06', 4),
(31, 'Boiler fuel heater overhaul ', '4', '2017-11-07', 2),
(32, 'D/G 1 valve clearance adjustment ', '4', '2017-11-07', 3),
(33, 'D/G oil purifier overhaul', '6', '2017-11-07', 4),
(34, 'DG3 fuel p/p overhaul ', '4', '2017-11-08', 2),
(35, 'DG1 fuel injection v/v ovehaul', '5', '2017-11-08', 3),
(36, 'gettin sample from M/E cylinder oil, No2 comp valve changing ', '3', '2017-11-08', 4),
(37, 'DG2 fuel P/P ovehaul ', '4', '2017-11-09', 2),
(42, 'DG2 centrifugal filter cleaning, boiler water test ', '3', '2017-11-09', 3),
(43, 'vacum toilet P/P ovehaul ', '3', '2017-11-09', 4),
(44, 'Aux Boiler 1 cleaning ', '7', '2017-11-10', 2),
(45, 'DG2 fuel injection V/V ovehaul ', '5', '2017-11-10', 3),
(46, 'M/E oil purifier ovehaul ', '6', '2017-11-10', 4),
(47, 'DG2 fuel P/P ovehaul ', '4', '2017-11-11', 2),
(48, 'DG2 valve clearance adjustment ', '4', '2017-11-11', 3),
(49, 'weekly tests, getting running hrs ', '3', '2017-11-11', 4),
(50, 'Aux Boiler 2 cleaning', '7', '2017-11-13', 2),
(51, 'getting performance on DG2 ', '1', '2017-11-13', 3),
(52, 'HFO purifier No1 ovehaul', '6', '2017-11-13', 4),
(53, 'composite boiler cleaning ', '7', '2017-11-14', 2),
(54, 'DG3 centrifugal filter cleaning, DG2 oil filter cleaning ', '3', '2017-11-14', 3),
(55, 'getting sample from M/E cyl. Oil, DG LOi Turbine oil, stern tube, M/E system oil for test', '3', '2017-11-14', 4),
(56, 'central FW cooler 1 cleaning ', '6', '2017-11-15', 2),
(57, 'Boiler water test ', '2', '2017-11-15', 3),
(58, 'No3 comp valve refacing and changing', '3', '2017-11-15', 4),
(59, 'Air condition compresor ovehaul ', '6', '2017-11-16', 2),
(60, 'F/O transfer p/p filter cleaning ', '3', '2017-11-16', 3),
(61, 'workshop hoist ovehaul ', '3', '2017-11-16', 4),
(62, 'cranes hydrolic hoses renewing ', '4', '2017-11-17', 2),
(63, 'DG3 valve clearance adjustment', '4', '2017-11-17', 3),
(64, 'HFO purifier No2 ovehaul ', '6', '2017-11-17', 4),
(65, 'F/O and D/G air venting filter cleaning ', '4', '2017-11-18', 2),
(66, 'boiler water test, DG3 fuel injection v/v overhaul', '6', '2017-11-18', 3),
(67, 'weekly test, runnig hrs  ', '4', '2017-11-18', 4),
(68, 'M/E heater overhaul', '4', '2017-11-20', 2),
(69, 'DG3 oil filter,fuel filter cleaning, getting performance on DG3', '5', '2017-11-20', 3),
(70, 'Boiler FO filter cleaning', '3', '2017-11-20', 4),
(72, 'central FW cooler2 cleaning', '5', '2017-11-21', 2),
(73, 'DG3 air starting p/p overhaul,governor oil changing,boiler water test', '4', '2017-11-21', 3),
(74, 'take vibration on fire, emg fire,jw pumps', '2', '2017-11-21', 4),
(75, 'After deck machineries p/p overhaul', '4', '2017-11-22', 2),
(76, 'ME oil mist chamber cleaning', '2', '2017-11-22', 3),
(77, 'changing serice air comp belt', '2', '2017-11-22', 4),
(78, 'F/O back flush filter cleaning', '4', '2017-11-23', 2),
(79, 'DG2 piston and piston rod overhaul', '5', '2017-11-23', 3),
(80, 'DG1 F/O filter cleaning, incin. Milling p/p overhaul ', '4', '2017-11-23', 4),
(81, 'DG1 deflection, and main bearing inspection ', '6', '2017-11-24', 2),
(83, 'Boiler water test ', '2', '2017-11-24', 3),
(84, 'boiler ignition P/P overhaul ', '3', '2017-11-24', 4),
(85, 'DG2 deflection, and main bearing inspection ', '6', '2017-11-25', 2),
(86, 'ME performance ', '1', '2017-11-25', 3),
(87, 'weekly tests,running hours,FW gen. Ejector p/p overhaul ', '5', '2017-11-25', 4),
(88, 'DG3 deflection, and main bearing inspection ', '6', '2017-11-27', 2),
(89, 'Boiler water test, FW gen distilled p/p overhaul ', '4', '2017-11-27', 3),
(90, 'M/E old fuel injection v/v test and prepare', '3', '2017-11-27', 4),
(91, 'M/E deflection, and main bearing inspection ', '6', '2017-11-28', 2),
(92, 'Aux boiler1 burner overhaul', '4', '2017-11-28', 3),
(93, 'DG old fuel injection v/v test and prepare', '3', '2017-11-28', 4),
(94, 'M/E fuel injection v/v and air starting v/v overhaul', '6', '2017-11-29', 2),
(95, 'Aux boiler2 burner overhaul', '4', '2017-11-29', 3),
(96, 'M/E L/O p/p overhaul', '4', '2017-11-29', 4),
(97, 'scavenge cleaning and piston rings checking and mesaruments ', '6', '2017-11-30', 2),
(98, 'boiler water test, M/E fuel p/p overhaul', '4', '2017-11-30', 3),
(99, 'M/E hydroulic p/p overhaul', '4', '2017-11-30', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`iduser`, `fname`, `lname`, `type`) VALUES
(2, 'Engineer', '2', 2),
(3, 'Engineer', '3', 3),
(4, 'Engineer', '4', 4);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`idtask`),
  ADD KEY `userid` (`userid`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `task`
--
ALTER TABLE `task`
  MODIFY `idtask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
