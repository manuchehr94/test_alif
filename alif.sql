-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 14 2021 г., 17:05
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alif`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`) VALUES
(4, 'Nodir', 2, 2),
(5, 'Tojinisso', 3, 3),
(7, 'Amirjon', 4, 4),
(10, 'Saidakhon', 5, 5),
(11, 'Zafar', 6, 6),
(12, 'Khusrav', 7, 7),
(13, 'Jeckie', 8, 8),
(16, 'Arnold', 10, 10),
(17, 'Alesya', 11, 11),
(18, 'Manu', 12, 12),
(19, 'Bertold', 13, 13),
(20, 'Nozanin', 14, 14),
(21, 'Kanu', 15, 15),
(22, 'Parisa', 16, 16),
(23, 'Asmira', 17, 17),
(24, 'Shokhrukh', 18, 18),
(25, 'Tatyana', 19, 19),
(26, 'Olga', 20, 20),
(27, 'Vlad', 21, 21),
(28, 'Sergiy', 22, 22),
(29, 'Natasha', 23, 23),
(30, 'Tanzilya', 24, 24),
(31, 'Muhabbat', 25, 25),
(34, 'Okibat', 26, 26),
(35, 'Baroat', 27, 27),
(38, 'Jum\'a', 28, 28),
(39, 'Kim Chen In', 29, 29),
(40, 'Rukhachka', 30, 30),
(41, 'Rasul', 31, 31),
(42, 'Shujoat', 32, 32),
(43, 'Ergash', 33, 33),
(44, 'Anvaroi', 34, 34),
(45, 'Tanais', 35, 35),
(46, 'Tomiris', 36, 36),
(47, 'Hikmatullojon', 37, 37),
(51, 'Asyoka', 45, 45);

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--

CREATE TABLE `email` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `email`
--

INSERT INTO `email` (`id`, `email_id`, `email`) VALUES
(2, 2, 'nodir.94@gmail.com'),
(3, 2, 'nodir@gmail.com'),
(4, 1, 'olexsiy@gmail.com'),
(8, 3, 'tojinisso@gmail.com'),
(9, 3, 'tojinisso27@gmail.com'),
(10, 4, 'fdfd@mail.ru'),
(11, 5, 'something@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `id` int(11) UNSIGNED NOT NULL,
  `phone_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `phone`
--

INSERT INTO `phone` (`id`, `phone_id`, `phone`) VALUES
(2, 2, '9243343'),
(3, 1, '92444444'),
(4, 1, '926666666'),
(5, 2, '927777777'),
(7, 3, '928888486'),
(8, 3, '9288884875'),
(9, 5, '928888888'),
(10, 6, '9209874747'),
(11, 7, '9287619403'),
(12, 9, '773732312'),
(13, 1, '929398547'),
(14, 1, '928384843'),
(15, 7, '928484845'),
(17, 5, '+(992)-92-399-32-32'),
(18, 45, '928484848');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `phone_id` (`phone`),
  ADD UNIQUE KEY `email_id` (`email`);
ALTER TABLE `contacts` ADD FULLTEXT KEY `name_2` (`name`);

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `email` ADD FULLTEXT KEY `email_2` (`email`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);
ALTER TABLE `phone` ADD FULLTEXT KEY `phone_2` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
