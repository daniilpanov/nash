-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 02 2017 г., 12:00
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `victorina`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(3) NOT NULL,
  `question` text NOT NULL COMMENT 'вопрос',
  `response1` text NOT NULL COMMENT 'ответ1',
  `response2` text NOT NULL COMMENT 'ответ2',
  `response3` text NOT NULL COMMENT 'ответ3',
  `response4` text NOT NULL COMMENT 'ответ4',
  `valid_responce` text NOT NULL COMMENT 'правильный ответ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Ответы к викторине';

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `question`, `response1`, `response2`, `response3`, `response4`, `valid_responce`) VALUES
(1, 'Какого цвета солнце?', 'оранжевое', 'красное', 'коричневое', 'желтое ', 'желтое'),
(2, 'Сколько месяцев в году?', '5', '4', '10', '12', '12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
