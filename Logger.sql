-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2023 г., 02:26
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Logger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `text` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `logs`
--

INSERT INTO `logs` (`id`, `text`, `date`) VALUES
(1, 'dsfdsfsdf', '2023-11-07 01:38:50'),
(2, 'dsfdsfsdf', '2023-11-07 01:38:53'),
(3, '2023-11-07 02:02:12 - \'f658681ed2d8b651834b\'', '2023-11-07 02:02:12'),
(4, 'ffdc3d36883ace4fdb59\'', '2023-11-07 02:09:21'),
(5, '256b11e9f9091e475f5f', '2023-11-07 02:10:09'),
(6, 'a91f4177adba772100a3', '2023-11-07 02:16:26'),
(7, '10c8e168f289e357e21e', '2023-11-07 02:17:19'),
(8, '9f0fd05c738dc88f9443', '2023-11-07 02:20:21'),
(9, 'b3596c74611c29f9bbc4', '2023-11-07 02:21:05'),
(10, '4e30b3d629bdca445655', '2023-11-07 02:21:23'),
(11, '56831e435e3c32100c02', '2023-11-07 02:21:39');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
