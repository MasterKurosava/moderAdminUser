-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 14 2021 г., 01:00
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crad`
--
CREATE DATABASE IF NOT EXISTS `crad` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `crad`;
--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `POST_ID` int NOT NULL,
  `WRITER` varchar(50) NOT NULL,
  `CONTENT` text NOT NULL,
  `TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`POST_ID`, `WRITER`, `CONTENT`, `TIME`) VALUES
(2, 'Писатель 1', 'Это первый пост для теста', '20:05'),
(3, 'Писатель 2', 'Это второй пост для теста', '2:55'),
(4, 'Писатель 3', 'Это очень большой пост пост пост пост пост пост пост пост пост для теста', '10:17');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `USER_ID` int NOT NULL,
  `LOGIN` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ROLL` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`USER_ID`, `LOGIN`, `PASSWORD`, `ROLL`) VALUES
(2, 'Тест', '$2y$10$mpxVJjAOU/3GUmtdqTtkLuK5JwiikkYamnGrlrb/VeK0oe3PMa7WO', 'USER'),
(3, 'admin', '$2y$10$LAi9bgGWWyAl1I2qVtnUa.0wUw0ZN0RpmRmOJiJHjNEA/l1NEk/e.', 'ADMIN'),
(6, 'moder', '$2y$10$zR3IODDHh4Kk6tEKS7SySe7ORrPHN52iq9Be.eXtPAcw4GGEQvNo2', 'MODER');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`POST_ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `LOGIN` (`LOGIN`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `POST_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
