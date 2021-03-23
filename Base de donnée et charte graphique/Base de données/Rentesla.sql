-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 23 mars 2021 à 15:13
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Rentesla`
--

-- --------------------------------------------------------

--
-- Structure de la table `car_park`
--

CREATE TABLE `car_park` (
  `car_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `batterysize` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `color` text NOT NULL,
  `kilometer` int(255) NOT NULL,
  `disponibility` tinyint(1) NOT NULL,
  `autopilot` tinyint(1) NOT NULL,
  `dailyprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `car_park`
--

INSERT INTO `car_park` (`car_id`, `model`, `batterysize`, `power`, `color`, `kilometer`, `disponibility`, `autopilot`, `dailyprice`) VALUES
(1, 'Model S', '75kwh', '310kw', 'Noir', 61849, 0, 1, 131),
(2, 'Model X', '90kwh', '450kw', 'Noir', 51191, 0, 1, 131),
(3, 'Roadster', '75kwh', '450kw', 'Gris', 113035, 0, 0, 120),
(4, 'Model Y', '75kwh', '246kw', 'Bleu', 42366, 0, 0, 117),
(5, 'Model Y', '75kwh', '235kw', 'Noir', 51867, 1, 1, 101),
(6, 'Model Y', '75kwh', '310kw', 'Rouge', 6788, 1, 1, 124),
(7, 'Roadster', '61kwh', '310kw', 'Rouge', 84850, 0, 1, 152),
(8, 'Roadster', '75kwh', '310kw', 'Blanc', 65354, 1, 1, 126),
(9, 'Model Y', '90kwh', '310kw', 'Rouge', 16235, 1, 1, 125),
(10, 'Roadster', '61kwh', '310kw', 'Rouge', 49381, 0, 1, 143),
(11, 'Model Y', '90kwh', '450kw', 'Blanc', 91723, 1, 1, 86),
(12, 'Model S', '90kwh', '310kw', 'Blanc', 21055, 0, 1, 131),
(13, 'Model X', '58kwh', '235kw', 'Gris', 28399, 1, 1, 153),
(14, 'Roadster', '61kwh', '235kw', 'Bleu', 28640, 1, 1, 95),
(15, 'Model Y', '75kwh', '450kw', 'Bleu', 66186, 0, 1, 116),
(16, 'Model 3', '90kwh', '450kw', 'Rouge', 22298, 0, 0, 145),
(17, 'Model 3', '61kwh', '310kw', 'Rouge', 40942, 1, 0, 147),
(19, 'Roadster', '75kwh', '310kw', 'Rouge', 53582, 1, 1, 120),
(20, 'Roadster', '61kwh', '235kw', 'Bleu', 53244, 1, 0, 146),
(21, 'Model Y', '90kwh', '450kw', 'Noir', 112270, 1, 1, 89),
(22, 'Model S', '90kwh', '310kw', 'Gris', 51287, 0, 0, 130),
(23, 'Model 3', '58kwh', '450kw', 'Gris', 94935, 0, 1, 130),
(24, 'Model S', '75kwh', '246kw', 'Rouge', 115341, 0, 0, 83),
(25, 'Model X', '61kwh', '310kw', 'Bleu', 54499, 0, 0, 101),
(26, 'Model 3', '90kwh', '235kw', 'Gris', 103019, 0, 1, 102),
(27, 'Roadster', '90kwh', '310kw', 'Bleu', 52001, 0, 0, 155),
(28, 'Model X', '90kwh', '246kw', 'Blanc', 48613, 1, 0, 86),
(29, 'Model X', '58kwh', '310kw', 'Blanc', 54819, 1, 0, 114),
(30, 'Model X', '58kwh', '246kw', 'Blanc', 48635, 0, 1, 93),
(31, 'Model S', '75kwh', '450kw', 'Bleu', 67609, 1, 1, 140),
(32, 'Model Y', '75kwh', '246kw', 'Blanc', 49322, 1, 0, 124),
(33, 'Model Y', '75kwh', '310kw', 'Noir', 52109, 0, 0, 82),
(34, 'Model 3', '90kwh', '246kw', 'Gris', 103061, 0, 1, 114),
(35, 'Model 3', '58kwh', '310kw', 'Noir', 108246, 0, 1, 94),
(36, 'Roadster', '90kwh', '310kw', 'Noir', 58762, 0, 1, 113),
(37, 'Model Y', '75kwh', '450kw', 'Gris', 76291, 0, 0, 152),
(38, 'Model 3', '61kwh', '310kw', 'Gris', 71960, 1, 0, 150),
(39, 'Model S', '61kwh', '246kw', 'Rouge', 43165, 1, 0, 144),
(40, 'Model 3', '75kwh', '310kw', 'Rouge', 54221, 0, 1, 131),
(41, 'Model 3', '75kwh', '450kw', 'Noir', 111208, 0, 0, 85),
(42, 'Model X', '61kwh', '246kw', 'Noir', 42805, 0, 0, 139),
(43, 'Model X', '58kwh', '450kw', 'Rouge', 77255, 0, 0, 109),
(44, 'Model 3', '75kwh', '246kw', 'Rouge', 79311, 0, 1, 102),
(45, 'Model S', '58kwh', '450kw', 'Gris', 16085, 1, 1, 86),
(46, 'Model Y', '61kwh', '235kw', 'Bleu', 115619, 0, 1, 134),
(47, 'Roadster', '61kwh', '450kw', 'Blanc', 93065, 0, 1, 148),
(48, 'Model X', '61kwh', '310kw', 'Rouge', 109174, 0, 0, 127),
(49, 'Model Y', '61kwh', '235kw', 'Noir', 13498, 1, 0, 97),
(50, 'Model Y', '75kwh', '235kw', 'Rouge', 41030, 0, 0, 141),
(51, 'Model 3', '75kwh', '450kw', 'Bleu', 86327, 1, 1, 111),
(52, 'Model X', '75kwh', '310kw', 'Blanc', 88833, 0, 1, 130),
(53, 'Model 3', '61kwh', '246kw', 'Blanc', 13244, 0, 0, 103),
(54, 'Model Y', '61kwh', '450kw', 'Noir', 110986, 0, 0, 154),
(55, 'Roadster', '75kwh', '310kw', 'Gris', 114987, 1, 0, 141),
(56, 'Model S', '61kwh', '246kw', 'Blanc', 65527, 0, 1, 137),
(57, 'Model X', '90kwh', '235kw', 'Blanc', 28675, 0, 0, 102),
(58, 'Model 3', '90kwh', '450kw', 'Noir', 66035, 1, 1, 143),
(59, 'Model Y', '90kwh', '450kw', 'Noir', 70635, 1, 0, 135),
(60, 'Model Y', '75kwh', '235kw', 'Noir', 23155, 0, 1, 91),
(61, 'Model S', '90kwh', '246kw', 'Blanc', 25117, 1, 0, 142),
(63, 'Roadster', '61kwh', '235kw', 'Blanc', 99855, 0, 0, 88),
(64, 'Model S', '90kwh', '310kw', 'Gris', 35325, 1, 0, 91),
(65, 'Model Y', '75kwh', '246kw', 'Blanc', 70209, 1, 1, 139),
(66, 'Model 3', '75kwh', '450kw', 'Rouge', 90889, 1, 1, 110),
(67, 'Model 3', '75kwh', '246kw', 'Blanc', 70426, 0, 0, 120),
(68, 'Model S', '61kwh', '450kw', 'Bleu', 58947, 0, 1, 132),
(69, 'Model S', '75kwh', '246kw', 'Blanc', 98160, 0, 1, 97),
(70, 'Model 3', '58kwh', '235kw', 'Rouge', 96542, 0, 1, 136),
(71, 'Model X', '90kwh', '450kw', 'Rouge', 92619, 1, 1, 111),
(72, 'Model X', '90kwh', '450kw', 'Rouge', 35570, 1, 0, 97),
(73, 'Model Y', '90kwh', '235kw', 'Rouge', 84621, 0, 0, 92),
(74, 'Model S', '58kwh', '235kw', 'Rouge', 107428, 0, 0, 115),
(75, 'Model X', '61kwh', '450kw', 'Gris', 103369, 1, 0, 115),
(76, 'Model S', '61kwh', '246kw', 'Rouge', 116261, 1, 1, 104),
(77, 'Model Y', '75kwh', '450kw', 'Blanc', 103535, 0, 1, 133),
(78, 'Model X', '61kwh', '235kw', 'Noir', 106903, 1, 1, 106),
(79, 'Model S', '90kwh', '450kw', 'Rouge', 117086, 0, 1, 106),
(80, 'Model Y', '90kwh', '310kw', 'Blanc', 95793, 0, 0, 125),
(81, 'Model 3', '90kwh', '235kw', 'Bleu', 90551, 0, 0, 112),
(82, 'Roadster', '90kwh', '235kw', 'Rouge', 37654, 0, 0, 128),
(83, 'Model S', '58kwh', '310kw', 'Blanc', 116839, 1, 1, 84),
(84, 'Model Y', '58kwh', '310kw', 'Gris', 54986, 0, 1, 105),
(85, 'Roadster', '90kwh', '246kw', 'Blanc', 21146, 1, 0, 85),
(86, 'Model 3', '58kwh', '246kw', 'Blanc', 60431, 0, 1, 148),
(87, 'Model Y', '90kwh', '450kw', 'Bleu', 61251, 1, 0, 153),
(88, 'Model S', '75kwh', '450kw', 'Noir', 109423, 0, 1, 83),
(89, 'Model X', '61kwh', '310kw', 'Rouge', 17747, 1, 1, 107),
(90, 'Model S', '61kwh', '310kw', 'Rouge', 46653, 1, 0, 91),
(91, 'Roadster', '61kwh', '310kw', 'Blanc', 40291, 1, 1, 101),
(92, 'Roadster', '90kwh', '246kw', 'Blanc', 70552, 1, 1, 87),
(93, 'Model X', '58kwh', '235kw', 'Bleu', 83730, 0, 1, 94),
(94, 'Model Y', '61kwh', '450kw', 'Gris', 31758, 0, 1, 86),
(95, 'Model X', '61kwh', '310kw', 'Blanc', 94006, 1, 1, 141),
(96, 'Model Y', '58kwh', '450kw', 'Gris', 32731, 0, 1, 137),
(97, 'Roadster', '58kwh', '450kw', 'Rouge', 21182, 0, 0, 155),
(98, 'Model 3', '58kwh', '310kw', 'Noir', 46195, 0, 1, 105),
(99, 'Model 3', '61kwh', '450kw', 'Blanc', 66536, 0, 1, 125),
(100, 'Model X', '61kwh', '450kw', 'Rouge', 34825, 1, 1, 143);

-- --------------------------------------------------------

--
-- Structure de la table `payment_card`
--

CREATE TABLE `payment_card` (
  `id_card` int(11) NOT NULL,
  `card_number` bigint(20) NOT NULL,
  `card_holder` varchar(255) NOT NULL,
  `ccv` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `payment_card`
--

INSERT INTO `payment_card` (`id_card`, `card_number`, `card_holder`, `ccv`, `id_user`) VALUES
(11, 30197914075922, 'Bécassine Falkinder', 626, 4),
(12, 3570693731934119, 'Maëlle Mitchiner', 294, 2),
(13, 5112000020508986, 'Anaëlle Walton', 590, 6),
(14, 3538014757325630, 'Cécile Kubalek', 194, 3),
(15, 633468360918143141, 'Uò Sandford', 662, 5),
(16, 3568511096652098, 'Uò Sandford', 466, 5),
(17, 3583557469009425, 'Maëlle Mitchiner', 483, 2),
(18, 3544621205523228, 'Cécile Kubalek', 221, 3),
(19, 4911063882334624, 'Uò Sandford', 126, 5),
(20, 5100136795728922, 'Maëlle Mitchiner', 930, 2),
(21, 3546457861204235, 'Bécassine Falkinder', 373, 4),
(22, 5567751903818799, 'Maëlle Mitchiner', 351, 2),
(25, 23459809877, 'Carlos Tavares', 234, 3),
(27, 4567089607, 'Michael Youn', 666, 3),
(28, 45609876534, 'Munster Munch', 456, 1),
(29, 0, '<h1>Ok</h1>', 111, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `id_card` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rental`
--

INSERT INTO `rental` (`id_rental`, `start_date`, `end_date`, `id_user`, `car_id`, `id_card`) VALUES
(1, '2020-03-18', '2022-02-15', 2, 1, 12),
(2, '2021-01-14', '2022-04-29', 3, 2, 21),
(3, '2020-08-01', '2022-05-05', 2, 3, 11),
(4, '2020-09-23', '2021-03-12', 3, 4, 16),
(6, '2020-06-30', '2022-08-16', 5, 6, 13),
(7, '2020-11-02', '2022-01-30', 2, 12, 18),
(8, '2020-05-03', '2022-06-04', 5, 10, 25),
(11, '2020-10-31', '2022-04-27', 3, 22, 11),
(12, '2020-04-18', '2022-02-14', 1, 23, 16),
(13, '2020-09-02', '2021-10-05', 4, 24, 12),
(14, '2020-07-14', '2021-03-12', 3, 25, 20),
(16, '2021-01-01', '2022-04-05', 1, 27, 16),
(17, '2020-06-08', '2022-10-10', 5, 30, 17),
(18, '2020-08-10', '2022-03-24', 1, 33, 25),
(19, '2021-01-06', '2022-01-25', 1, 35, 12),
(20, '2020-03-09', '2021-05-26', 5, 36, 11),
(64, '2021-03-13', '2021-03-16', 1, 13, 28),
(67, '2021-03-31', '2021-03-16', 1, 5, 28);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `license_date` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `address`, `birthdate`, `license_date`, `mail`, `login`, `password`, `admin`) VALUES
(1, 'Màelle', 'Shambrook', '11 Forster Alley', '1991-08-29', '2001-12-20', 'mshambrook0@miibeian.gov.cn', 'tshambrook0', 'TCjBWTpN', 0),
(2, 'Maëlle', 'Mitchiner', '46452 Heath Hill', '1975-08-05', '2011-03-09', 'cmitchiner1@cbc.ca', 'rmitchiner1', 'fgm9i4TKd7', 0),
(3, 'Cécile', 'Kubalek', '316 Browning Trail', '1993-06-21', '2005-03-18', 'wkubalek2@cbc.ca', 'kkubalek2', '9hDlkhR', 0),
(4, 'Bécassine', 'Falkinder', '27 Miller Crossing', '1975-03-20', '1996-01-04', 'pfalkinder3@t-online.de', 'rfalkinder3', 'J4FGyv', 0),
(5, 'Uò', 'Sandford', '912 Fulton Road', '1977-07-10', '2004-12-12', 'hsandford4@360.cn', 'msandford4', 'R3Bh9njSrumg', 0),
(6, 'Anaëlle', 'Walton', '5 Chive Crossing', '1980-07-16', '1998-08-21', 'rwalton0@oracle.com', 'kwalton0', 'rPXUoRHA06', 1),
(7, 'Apu', 'Naha', 'Kwikemart, Springfield, USA', '1975-05-23', '1993-02-24', 'apuandmanjula@springfield.com', 'APU', 'Manjulapotzato', 0),
(12, 'Kili', 'Manjaroo', 'Funhouse, hourglass, california', '1980-12-05', '2000-03-27', 'Manju@kolp.com', 'Kilitech', 'Almondmilkyummy', 0),
(13, 'Apu', 'APUUZ', 'Rue du champ', '2021-03-06', '2021-03-06', 'mol@pol.com', 'Indianunicorn', 'KOLPmpozl&é\"', 0),
(16, 'Flo', 'Flodo', 'nulle part', '2021-03-22', '2021-03-12', 'flor@flor.com', 'julE', '1234567', 0),
(17, 'Flo', 'Flodo', 'nulle part', '2021-03-22', '2021-03-12', 'flor@flor.com', 'Floflor', 'fdfdfdpihfdpihfdpih', 0),
(20, 'Hello', 'Iamme', 'FGTGf', '2021-03-09', '2021-03-09', 'hello@otma.co', 'RET', 'uaremelolpolice', 0),
(21, 'Niko', 'Nikola', 'ght', '2021-03-05', '2021-03-05', 'Jul@jul.com', 'dsds', '1223242424', 0),
(22, 'Frank', 'While', '34, wall street, NY', '1987-12-22', '2006-06-12', 'Whiledo@break.com', 'Teslapower', 'Teslapower123456', 0),
(23, 'Elon', 'Musk', 'Elon street, street', '1998-04-12', '2016-05-23', 'elonmusk@gmail.com', 'El0n', 'Hellofuturelol', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `car_park`
--
ALTER TABLE `car_park`
  ADD PRIMARY KEY (`car_id`);

--
-- Index pour la table `payment_card`
--
ALTER TABLE `payment_card`
  ADD PRIMARY KEY (`id_card`),
  ADD KEY `payment_card_users_FK` (`id_user`);

--
-- Index pour la table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `rental_users_FK` (`id_user`),
  ADD KEY `rental_car_park0_FK` (`car_id`),
  ADD KEY `rental_payment_card_fk` (`id_card`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `car_park`
--
ALTER TABLE `car_park`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `payment_card`
--
ALTER TABLE `payment_card`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `payment_card`
--
ALTER TABLE `payment_card`
  ADD CONSTRAINT `payment_card_users_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_car_park0_FK` FOREIGN KEY (`car_id`) REFERENCES `car_park` (`car_id`),
  ADD CONSTRAINT `rental_payment_card_fk` FOREIGN KEY (`id_card`) REFERENCES `payment_card` (`id_card`),
  ADD CONSTRAINT `rental_users_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
