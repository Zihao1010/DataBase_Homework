-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-10-08 17:39:06
-- 服务器版本： 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ZIW35`
--
CREATE DATABASE IF NOT EXISTS `ZIW35` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ZIW35`;

-- --------------------------------------------------------

--
-- 表的结构 `actors`
--

DROP TABLE IF EXISTS `actors`;
CREATE TABLE IF NOT EXISTS `actors` (
  `actor_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birth_date` datetime NOT NULL,
  `biography` varchar(1000) NOT NULL,
  `actor_horoscope` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `actors`
--

INSERT INTO `actors` (`actor_id`, `first_name`, `last_name`, `birth_date`, `biography`, `actor_horoscope`) VALUES
(211110, 'ipss', 'smith', '1978-12-01 00:00:00', 'qweru', ''),
(211111, 'Downey', 'Robert', '1965-04-04 00:00:00', 'Robert John Downey Jr. (born April 4, 1965)[2] is an American actor and singer.', 'Gemini'),
(211112, 'Johansson', 'Scarlett', '1984-11-22 00:00:00', 'Scarlett Ingrid Johansson (/d?o??hæns?n/; born November 22, 1984) is an American actress and singer.', 'Lion'),
(211113, 'Evans', 'Chris', '1981-06-13 00:00:00', 'Christopher Robert Evans[1] (born June 13, 1981) is an American actor. ', 'Cancer'),
(211114, 'Hemsworth', 'Chris', '1983-08-11 00:00:00', 'Christopher Hemsworth (born 11 August 1983) is an Australian actor.', 'Taurus '),
(211115, 'Ruffalo', 'Mark', '1967-11-22 00:00:00', 'Mark Alan Ruffalo (/?r?f?lo?/; born November 22, 1967) is an American actor, filmmaker and activist who made his screen debut in an episode of CBS Summer Playhouse (1989), followed by minor film roles.', 'Aries '),
(211116, 'peter', 'smith', '1968-05-01 00:00:00', 'qwert', ''),
(211117, 'ham', 'smith', '1970-06-01 00:00:00', 'qwery', ''),
(211118, 'like', 'smith', '1972-09-01 00:00:00', 'qwero', ''),
(211119, 'pop', 'smith', '1976-10-01 00:00:00', 'qwerp', '');

-- --------------------------------------------------------

--
-- 表的结构 `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `street_address` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `street_address`, `city`, `state`, `zip`) VALUES
(311111, 'AMC Waterfront 22', '300 W Waterfront Dr, West Homestead', 'Pittsburgh', 'PA', '15217'),
(311112, 'Row House Cinema', '4115 Butler St, Pittsburgh', 'shanghai', 'PA', '15217'),
(311113, 'The Rangos Giant Cinema', '1 Allegheny Ave, Pittsburgh', 'chengdu', 'PA', '15217'),
(311114, 'MovieScoop Waterworks Cinemas', '930 Freeport Rd, Pittsburgh', 'hohhot', 'PA', '15217'),
(311115, 'Regent Square Theater', '1035 S Braddock Ave, Pittsburgh', 'beijing', 'PA', '15217');

-- --------------------------------------------------------

--
-- 表的结构 `Movies`
--

DROP TABLE IF EXISTS `Movies`;
CREATE TABLE IF NOT EXISTS `Movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `release_date` datetime NOT NULL,
  `plot_description` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Movies`
--

INSERT INTO `Movies` (`movie_id`, `title`, `release_date`, `plot_description`) VALUES
(111111, 'Deadpool 2', '2018-05-18 00:00:00', 'Deadpool 2 is a 2018 American superhero film based on the Marvel Comics character Deadpool, distributed by 20th Century Fox.'),
(111112, 'Deadpool', '2016-02-12 00:00:00', 'Deadpool is a 2016 American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox.'),
(111113, 'Murder on the Orient Express ', '2017-11-10 00:00:00', 'Murder on the Orient Express is a 2017 mystery drama film directed by Kenneth Branagh with a screenplay by Michael Green, based on the 1934 novel of the same name by Agatha Christie.'),
(111114, 'Inferno', '2016-10-28 00:00:00', 'nferno is a 2016 American mystery thriller film directed by Ron Howard and written by David Koepp, based on the 2013 novel of the same name by Dan Brown.'),
(111115, 'Iron Man 3', '2013-05-03 00:00:00', 'Iron Man 3 (stylized onscreen as Iron Man Three) is a 2013 American superhero film based on the Marvel Comics character Iron Man, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.');

-- --------------------------------------------------------

--
-- 表的结构 `movies_actors`
--

DROP TABLE IF EXISTS `movies_actors`;
CREATE TABLE IF NOT EXISTS `movies_actors` (
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `movies_actors`
--

INSERT INTO `movies_actors` (`movie_id`, `actor_id`) VALUES
(111111, 211118),
(111112, 211112),
(111113, 211111),
(111114, 211113),
(111111, 211118),
(111115, 211115),
(111112, 211116),
(111113, 211111),
(111114, 211113),
(111115, 211119),
(111111, 211118);

-- --------------------------------------------------------

--
-- 表的结构 `movies_locations`
--

DROP TABLE IF EXISTS `movies_locations`;
CREATE TABLE IF NOT EXISTS `movies_locations` (
  `movie_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `movies_locations`
--

INSERT INTO `movies_locations` (`movie_id`, `location_id`) VALUES
(111111, 311111),
(111112, 311112),
(111114, 311114),
(111113, 311113),
(111115, 311115);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movies_actors`
--
ALTER TABLE `movies_actors`
  ADD KEY `actor_id` (`actor_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies_locations`
--
ALTER TABLE `movies_locations`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `location_id` (`location_id`);

--
-- 限制导出的表
--

--
-- 限制表 `movies_actors`
--
ALTER TABLE `movies_actors`
  ADD CONSTRAINT `movies_actors_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`actor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_actors_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `Movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `movies_locations`
--
ALTER TABLE `movies_locations`
  ADD CONSTRAINT `movies_locations_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `Movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_locations_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
