-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 02 juin 2021 à 15:03
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simplon_live_chat_amazin`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES
(1, 'Ross Mckenzie', 'vel, convallis in, cursus et, eros. Proin ultrices.', '2021-06-02 15:02:03'),
(2, 'Zachery Mccall', 'at, libero. Morbi accumsan laoreet ipsum.', '2021-06-02 15:02:03'),
(3, 'Chadwick Mcpherson', 'interdum feugiat. Sed nec metus facilisis lorem', '2021-06-02 15:02:03'),
(4, 'Devin Nielsen', 'pharetra ut, pharetra sed, hendrerit a, arcu.', '2021-06-02 15:02:03'),
(5, 'Jeremy Delacruz', 'Cum sociis natoque penatibus et magnis dis parturient', '2021-06-02 15:02:03'),
(6, 'Marsden Pickett', 'eu elit. Nulla facilisi. Sed neque. Sed', '2021-06-02 15:02:03'),
(7, 'Ivor Yang', 'vel est tempor bibendum. Donec felis orci, adipiscing non, luctus', '2021-06-02 15:02:03'),
(8, 'Abraham Le', 'malesuada. Integer id magna', '2021-06-02 15:02:03'),
(9, 'Malik Brooks', 'Etiam ligula tortor, dictum eu, placerat eget,', '2021-06-02 15:02:03'),
(10, 'Upton Lott', 'eu', '2021-06-02 15:02:03'),
(11, 'Thor Ortiz', 'turpis nec mauris blandit', '2021-06-02 15:02:03'),
(12, 'Elmo Lawrence', 'fermentum arcu. Vestibulum ante ipsum primis', '2021-06-02 15:02:03'),
(13, 'Anthony Wilkinson', 'vulputate, nisi sem', '2021-06-02 15:02:03'),
(14, 'Grady Ray', 'iaculis nec, eleifend non,', '2021-06-02 15:02:03'),
(15, 'Ray Suarez', 'Morbi non sapien molestie orci tincidunt adipiscing. Mauris', '2021-06-02 15:02:03'),
(16, 'Marsden Paul', 'est. Nunc laoreet lectus quis massa. Mauris vestibulum,', '2021-06-02 15:02:03'),
(17, 'Joel Mcgee', 'mauris elit, dictum eu, eleifend', '2021-06-02 15:02:03'),
(18, 'Eaton Guzman', 'mauris ipsum', '2021-06-02 15:02:03'),
(19, 'Quinlan Green', 'gravida.', '2021-06-02 15:02:03'),
(20, 'Arsenio Christensen', 'luctus', '2021-06-02 15:02:03'),
(21, 'Fulton Mcgee', 'lobortis risus. In', '2021-06-02 15:02:03'),
(22, 'Jeremy Walton', 'conubia', '2021-06-02 15:02:03'),
(23, 'Harding George', 'tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh', '2021-06-02 15:02:03'),
(24, 'Dale Hughes', 'mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit', '2021-06-02 15:02:03'),
(25, 'Brenden Rivas', 'et risus. Quisque', '2021-06-02 15:02:03'),
(26, 'Jerome Finley', 'elementum purus, accumsan', '2021-06-02 15:02:03'),
(27, 'Vincent Kramer', 'ipsum nunc id', '2021-06-02 15:02:03'),
(28, 'Zeph Barton', 'augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed,', '2021-06-02 15:02:03'),
(29, 'Ross Walter', 'Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue.', '2021-06-02 15:02:03'),
(30, 'Christopher Hernandez', 'ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque', '2021-06-02 15:02:03'),
(31, 'Craig Snow', 'arcu eu odio tristique pharetra. Quisque', '2021-06-02 15:02:03'),
(32, 'Kadeem Ashley', 'orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec', '2021-06-02 15:02:03'),
(33, 'Grant Munoz', 'Fusce aliquam, enim nec tempus scelerisque, lorem', '2021-06-02 15:02:03'),
(34, 'Forrest Mullen', 'fermentum risus, at fringilla purus', '2021-06-02 15:02:03'),
(35, 'Charles Petty', 'in molestie tortor nibh sit', '2021-06-02 15:02:03'),
(36, 'Knox Compton', 'ullamcorper', '2021-06-02 15:02:03'),
(37, 'Jackson Pitts', 'ante ipsum primis in faucibus orci luctus et ultrices posuere', '2021-06-02 15:02:03'),
(38, 'Price Acevedo', 'consectetuer adipiscing elit.', '2021-06-02 15:02:03'),
(39, 'Fletcher Rivas', 'venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien.', '2021-06-02 15:02:03'),
(40, 'Burton Villarreal', 'enim, sit amet ornare lectus justo eu arcu.', '2021-06-02 15:02:03'),
(41, 'Marsden Gardner', 'Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc', '2021-06-02 15:02:03'),
(42, 'Brett Stein', 'ultrices. Vivamus rhoncus.', '2021-06-02 15:02:03'),
(43, 'Luke Mcfarland', 'lacus pede sagittis augue, eu tempor erat neque non', '2021-06-02 15:02:03'),
(44, 'Denton Vinson', 'turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut,', '2021-06-02 15:02:03'),
(45, 'Walter Villarreal', 'In lorem. Donec elementum, lorem ut', '2021-06-02 15:02:03'),
(46, 'Xenos Morse', 'interdum. Curabitur dictum. Phasellus in felis. Nulla tempor', '2021-06-02 15:02:03'),
(47, 'Bevis Wheeler', 'sem semper', '2021-06-02 15:02:03'),
(48, 'Kuame Lawrence', 'cursus non, egestas a, dui. Cras pellentesque. Sed', '2021-06-02 15:02:03'),
(49, 'Tobias Estrada', 'arcu.', '2021-06-02 15:02:03'),
(50, 'Gray Bailey', 'Fusce aliquam,', '2021-06-02 15:02:03'),
(51, 'Price Abbott', 'pellentesque massa lobortis ultrices.', '2021-06-02 15:02:03'),
(52, 'Price Massey', 'rhoncus id, mollis nec, cursus a,', '2021-06-02 15:02:03'),
(53, 'Erich Espinoza', 'erat vitae', '2021-06-02 15:02:03'),
(54, 'Martin Savage', 'eget, dictum placerat, augue. Sed molestie.', '2021-06-02 15:02:03'),
(55, 'Hu Wells', 'interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac', '2021-06-02 15:02:03'),
(56, 'Blake Peterson', 'magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum', '2021-06-02 15:02:03'),
(57, 'Ira Henderson', 'luctus ut, pellentesque eget, dictum placerat, augue. Sed', '2021-06-02 15:02:03'),
(58, 'August Vaughan', 'tristique pharetra. Quisque ac libero nec ligula consectetuer', '2021-06-02 15:02:03'),
(59, 'Chester Tate', 'mauris. Morbi', '2021-06-02 15:02:03'),
(60, 'Alexander Boone', 'magnis dis parturient montes, nascetur ridiculus mus.', '2021-06-02 15:02:03'),
(61, 'Malcolm Yang', 'Aliquam', '2021-06-02 15:02:03'),
(62, 'Herman Gamble', 'elit fermentum risus,', '2021-06-02 15:02:03'),
(63, 'Sebastian Booker', 'tellus faucibus leo, in lobortis tellus justo sit amet', '2021-06-02 15:02:03'),
(64, 'Joshua Colon', 'nonummy. Fusce', '2021-06-02 15:02:03'),
(65, 'Ahmed Wallace', 'ac', '2021-06-02 15:02:03'),
(66, 'Kelly Rich', 'aliquet magna a neque. Nullam', '2021-06-02 15:02:03'),
(67, 'Phelan Chambers', 'urna. Ut tincidunt vehicula risus. Nulla', '2021-06-02 15:02:03'),
(68, 'Colorado Church', 'non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper', '2021-06-02 15:02:03'),
(69, 'Lyle Fulton', 'pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet', '2021-06-02 15:02:03'),
(70, 'Isaiah Jones', 'quam. Curabitur vel lectus. Cum sociis', '2021-06-02 15:02:03'),
(71, 'Sylvester Mcclain', 'risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi', '2021-06-02 15:02:03'),
(72, 'Jerry Lang', 'vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante.', '2021-06-02 15:02:03'),
(73, 'Henry Greer', 'erat. Vivamus', '2021-06-02 15:02:03'),
(74, 'Jermaine Bartlett', 'ut mi. Duis', '2021-06-02 15:02:03'),
(75, 'Herman Gallegos', 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum', '2021-06-02 15:02:03'),
(76, 'Ciaran Taylor', 'et ipsum cursus vestibulum. Mauris', '2021-06-02 15:02:03'),
(77, 'Tucker Maynard', 'Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas', '2021-06-02 15:02:03'),
(78, 'Dolan Mcknight', 'urna. Vivamus molestie dapibus ligula. Aliquam', '2021-06-02 15:02:03'),
(79, 'Aristotle Keller', 'sagittis', '2021-06-02 15:02:03'),
(80, 'Tobias Justice', 'mi, ac mattis velit justo nec', '2021-06-02 15:02:03'),
(81, 'Neville Jordan', 'consequat nec, mollis vitae, posuere at, velit. Cras', '2021-06-02 15:02:03'),
(82, 'Yoshio Mcfadden', 'ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in', '2021-06-02 15:02:03'),
(83, 'Oscar Herman', 'sodales. Mauris blandit enim consequat purus. Maecenas libero est,', '2021-06-02 15:02:03'),
(84, 'Tate Shaffer', 'justo eu arcu. Morbi sit amet massa. Quisque porttitor', '2021-06-02 15:02:03'),
(85, 'Trevor Rollins', 'pede. Cras vulputate velit', '2021-06-02 15:02:03'),
(86, 'Dillon Burris', 'tincidunt adipiscing.', '2021-06-02 15:02:03'),
(87, 'Denton Welch', 'lorem tristique aliquet. Phasellus fermentum convallis ligula.', '2021-06-02 15:02:03'),
(88, 'Nathaniel Larsen', 'adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus.', '2021-06-02 15:02:03'),
(89, 'Basil Robertson', 'urna suscipit nonummy.', '2021-06-02 15:02:03'),
(90, 'Matthew Mcdaniel', 'sed libero. Proin sed turpis nec mauris blandit mattis. Cras', '2021-06-02 15:02:03'),
(91, 'Erich Daugherty', 'conubia nostra, per inceptos hymenaeos. Mauris ut quam', '2021-06-02 15:02:03'),
(92, 'Nathan Phelps', 'magna. Cras convallis convallis dolor. Quisque tincidunt pede ac', '2021-06-02 15:02:03'),
(93, 'Raymond Guy', 'vulputate, risus a ultricies adipiscing, enim mi tempor lorem,', '2021-06-02 15:02:03'),
(94, 'Kennedy Griffith', 'ipsum', '2021-06-02 15:02:03'),
(95, 'Raymond Rogers', 'fringilla', '2021-06-02 15:02:03'),
(96, 'Reece Barnett', 'Vestibulum ut eros non enim commodo hendrerit. Donec', '2021-06-02 15:02:03'),
(97, 'Dean Leblanc', 'Nulla dignissim. Maecenas ornare egestas', '2021-06-02 15:02:03'),
(98, 'Eaton Bowers', 'porttitor interdum. Sed', '2021-06-02 15:02:03'),
(99, 'Evan Lester', 'dictum mi, ac mattis velit justo nec ante.', '2021-06-02 15:02:03'),
(100, 'Hu Vaughn', 'urna justo faucibus lectus, a', '2021-06-02 15:02:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
