-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 04 2015 г., 13:02
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `employees`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `pay` int(11) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `position`, `department`, `pay`, `birthday`) VALUES
(3, 'NIKITA', '&#212;&#232;&#235;&#232;&#236;&#238;&#237;&#238;&#226;', '&#204;&#229;&#237;&#229;&#228;&#230;&#229;&#240;', '', 1000, '1999-06-15'),
(9, '', '', '', '', 500, '1985-06-12'),
(10, 'Nikolay', 'Lipantesov', '&#234;&#224;&#241;&#241;&#232;&#240;', '', 2000, '1999-02-10'),
(11, 'FEDOR', 'EMELIYANENKO', '&#204;&#229;&#237;&#229;&#228;&#230;&#229;&#240;', '', 500, '1986-06-12'),
(14, 'OLEG', 'KATEROV', 'PILOT', '', 2000, '1999-09-12'),
(16, '&ETH;&iexcl;&ETH;&sup2;&ETH;&micro;&Ntilde;', '&ETH;', '&ETH;', '&ETH;', 50000, '1986-03-16'),
(18, '&Aring;&acirc;&atilde;&aring;&iacute;&egrave;&eacute;', '&Iuml;&agrave;&acirc;&aring;&euml;&uuml;&divide;&oacute;&ecirc;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&aring;&eth;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&igrave;&aring;&iacute;&ograve;', 2000, '1975-05-30'),
(19, '&Aring;&acirc;&atilde;&aring;&iacute;&egrave;&eacute;', '&Iuml;&agrave;&acirc;&aring;&euml;&uuml;&divide;&oacute;&ecirc;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&aring;&eth;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&igrave;&aring;&iacute;&ograve;', 2000, '1963-02-12'),
(20, '', '', '', '', 1500, '1999-05-04'),
(21, '&Aring;&acirc;&atilde;&aring;&iacute;&egrave;&eacute;', '&Ocirc;&egrave;&euml;&egrave;&igrave;&icirc;&iacute;&icirc;&acirc;', '&acirc;&ucirc;&oslash;&egrave;&aacute;&agrave;&euml;&icirc;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&igrave;&aring;&iacute;&ograve;', 2000, '2001-07-26'),
(22, '&Aring;&acirc;&atilde;&aring;&iacute;&egrave;&eacute;', '&Euml;&egrave;&iuml;&agrave;&iacute;&ograve;&aring;&ntilde;&icirc;&acirc;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&aring;&eth;', '&Igrave;&aring;&iacute;&aring;&auml;&aelig;&igrave;&aring;&iacute;&ograve;', 2000, '1958-07-12'),
(23, 'Igor', 'Rtunah', 'Working', '', 3000, '2000-12-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
