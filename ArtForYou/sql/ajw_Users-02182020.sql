-- Adminer 4.7.6 MySQL dump
-- wen_Users-02182020.sql
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ajw_Users`;
CREATE TABLE `ajw_Users` (
  `UserID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LastName` varchar(50) DEFAULT '',
  `FirstName` varchar(50) DEFAULT '',
  `Email` varchar(120) DEFAULT '',
  `Bio` text,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ajw_Users` (`UserID`, `LastName`, `FirstName`, `Email`, `Bio`) VALUES
(1,	'Wilson',	'Russell',	'rw@example.com',	'Born on November 29, 1988, in Cincinnati, Ohio, Russell Wilson was a multi-sport star in high school. ... Nevertheless, Wilson quickly became an elite pro quarterback, and led the Seattle Seahawks to a Super Bowl victory in just his second season.'),
(2,	'Loyd',	'Jewell',	'jl@example.com',	'Jewell Loyd (born October 5, 1993) is an American professional basketball player for Perfumerias Avenida of Spain\'s Liga Femenina de Baloncesto and the Seattle Storm of the Women\'s National Basketball Association (WNBA). She was drafted first overall in the 2015 WNBA Draft by the Seattle Storm.'),
(3,	'Ruidiaz',	'Raul',	'rr@example.com',	'Raul Ruidiaz (born 25 July 1990) is a Peruvian footballer who currently plays for Seattle Sounders FC and the Peru national team, as a striker.\r\n\r\nHis nickname, \"The Flea\", stems from his small frame and his ability to get past defenders with great ball control.');

-- 2020-02-18 10:07:25
