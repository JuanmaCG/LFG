-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `socialmedia`;
CREATE TABLE `socialmedia` (
  `twitter` varchar(255) DEFAULT NULL,
  `league` varchar(255) DEFAULT NULL,
  `steam` varchar(255) DEFAULT NULL,
  `twitch` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `blizzard` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `mmr` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `socialmedia` (`twitter`, `league`, `steam`, `twitch`, `facebook`, `blizzard`, `username`, `mmr`) VALUES
('',	'',	'',	'',	'',	'',	'oktayff',	1520),
(NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'juanma',	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `poblacion` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `perfil` varchar(255) DEFAULT NULL,
  `mmr` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `picture`, `lastName`, `email`, `password`, `poblacion`, `username`, `perfil`, `mmr`) VALUES
(21,	'Oktay',	'../upload/ghost.png',	'Feim Faik',	NULL,	'$2y$10$Jnzv1NSYYSr.R5RrqSMxQ.IWJddwjcmpQ/uCsmQGkL67N23dx45Qa',	'Seville',	'oktayff',	'<a href=\'perfilUser.php?username=oktayff\'>Perfil</a>',	NULL),
(22,	'Juan Manuel',	'../images/icono.png',	'Conde Garcia',	NULL,	'$2y$10$nKKKfEIqP8PyNAdmZco4w.G.3aF.Wjihtm/NstUhn5x3Dk.b5D0s2',	'Seville',	'juanma',	'<a href=\'perfilUser.php?username=juanma\'>Perfil</a>',	NULL);

DELIMITER ;;

CREATE TRIGGER `perfil` BEFORE INSERT ON `users` FOR EACH ROW
begin

set new.perfil = concat("<a href='perfilUser.php?username=", new.username, "'>Perfil</a>");

end;; 

DELIMITER ;

-- 2019-05-14 10:43:56