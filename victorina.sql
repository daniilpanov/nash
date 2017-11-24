
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `answers` (
  `id` int(3) NOT NULL,
  `question` text NOT NULL COMMENT 'вопрос',
  `response1` text NOT NULL COMMENT 'ответ1',
  `response2` text NOT NULL COMMENT 'ответ2',
  `response3` text NOT NULL COMMENT 'ответ3',
  `response4` text NOT NULL COMMENT 'ответ4',
  `valid_responce` text NOT NULL COMMENT 'правильный ответ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Ответы к викторине';

INSERT INTO `answers` (`id`, `question`, `response1`, `response2`, `response3`, `response4`, `valid_responce`) VALUES
(1, 'Какого цвета солнце?', 'оранжевое', 'красное', 'коричневое', 'желтое ', 'желтое'),
(2, 'Сколько месяцев в году?', '5', '4', '10', '12', '12');

ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `answers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;