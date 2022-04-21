-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2022 г., 19:12
-- Версия сервера: 5.5.62
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marlin-edu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `twitter_name` varchar(255) NOT NULL,
  `bootstrap_link_href` varchar(255) NOT NULL,
  `bootstrap_link_title` varchar(255) NOT NULL,
  `bootstrap_link_class` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `img`, `alt`, `name`, `job`, `twitter_link`, `twitter_name`, `bootstrap_link_href`, `bootstrap_link_title`, `bootstrap_link_class`, `status`) VALUES
(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunny A. (UI/UX Expert)', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', 'Contact Sunny', '<i class=\"fal fa-envelope\"></i>', 'active'),
(3, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. (ASP.NET Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', 'Contact Jos', '<i class=\"fal fa-envelope\"></i>', 'active'),
(4, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@lodev09', '@lodev09', 'https://wrapbootstrap.com/user/lodev09', 'Contact Jovanni', '<i class=\"fal fa-envelope\"></i>', 'banned'),
(5, 'img/demo/authors/roberto.png', 'Jovanni Lo', 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@sildur', '@sildur', 'https://wrapbootstrap.com/user/sildur', 'Contact Roberto', '<i class=\"fal fa-envelope\"></i>', 'banned');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `first_name`, `last_name`, `user_name`) VALUES
(1, 'Mark', 'Otto', '@mdo'),
(2, 'Jacob', 'Thornton', '@fat'),
(3, 'Larry', 'the Bird', '@twitter'),
(4, 'Larry the Bird', 'Bird', '@twitter');

-- --------------------------------------------------------

--
-- Структура таблицы `task_9`
--

CREATE TABLE `task_9` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task_9`
--

INSERT INTO `task_9` (`id`, `text`) VALUES
(1, 'fitrst text'),
(2, 'second text'),
(3, 'test');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_9`
--
ALTER TABLE `task_9`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `task_9`
--
ALTER TABLE `task_9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
