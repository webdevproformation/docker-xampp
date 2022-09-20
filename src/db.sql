-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Version du serveur : 5.7.39
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `toto`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `contenu` text CHARACTER SET utf8mb4 NOT NULL,
  `like` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `like`) VALUES
(1, 'premier article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id hendrerit ligula, vel porta orci. Morbi hendrerit tincidunt tortor in porttitor. Morbi a tempus ligula, ut fermentum leo. Cras tincidunt vehicula justo, ac luctus sapien imperdiet tempor. Suspendisse fermentum est libero, a dapibus mauris hendrerit eu. Fusce mauris libero, rutrum nec suscipit eu, mollis vitae nibh. Cras laoreet ex sed lacus aliquet euismod. Aenean quis tincidunt urna. ', 20),
(2, 'Deuxième article', 'Vivamus commodo vel quam non suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer orci sem, vehicula eu semper tempor, interdum porta massa. Pellentesque id varius massa. In accumsan urna nec sagittis volutpat. Nulla et dapibus odio. Vestibulum quis maximus arcu. In a accumsan sem, sit amet egestas nulla. Aliquam molestie convallis rutrum. ', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
