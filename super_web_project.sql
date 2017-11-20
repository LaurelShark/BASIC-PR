-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2017 г., 20:51
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `super_web_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `FathName` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `DateBirth` date NOT NULL,
  `Position` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`id`, `FirstName`, `FathName`, `Surname`, `DateBirth`, `Position`, `UserName`, `Password`) VALUES
(1, 'Yaroslav', 'Tarasovich', 'Kladko', '1998-10-23', 'MainAdmin', 'laurelShark', 'qwerty');

-- --------------------------------------------------------

--
-- Структура таблицы `Disciple`
--

CREATE TABLE `Disciple` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `GroupId` int(11) NOT NULL,
  `TeacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Groups`
--

CREATE TABLE `Groups` (
  `GroupNumber` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Lections`
--

CREATE TABLE `Lections` (
  `id` int(11) NOT NULL,
  `Lection` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Metodists`
--

CREATE TABLE `Metodists` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `FathName` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Plan`
--

CREATE TABLE `Plan` (
  `id` int(11) NOT NULL,
  `DiscipleId` int(11) NOT NULL,
  `LectionId` int(11) NOT NULL,
  `TaskId` int(11) NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Results`
--

CREATE TABLE `Results` (
  `id` int(11) NOT NULL,
  `PlanId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `NumberOfTries` int(11) NOT NULL,
  `Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Students`
--

CREATE TABLE `Students` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `FathName` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `Course` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Tasks`
--

CREATE TABLE `Tasks` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Task` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Teacher`
--

CREATE TABLE `Teacher` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `FathName` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Disciples` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Disciple`
--
ALTER TABLE `Disciple`
  ADD PRIMARY KEY (`id`),
  ADD KEY `GroupId` (`GroupId`),
  ADD KEY `id` (`id`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Индексы таблицы `Groups`
--
ALTER TABLE `Groups`
  ADD PRIMARY KEY (`GroupNumber`),
  ADD KEY `StudentId` (`StudentId`);

--
-- Индексы таблицы `Lections`
--
ALTER TABLE `Lections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `Metodists`
--
ALTER TABLE `Metodists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Plan`
--
ALTER TABLE `Plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DiscipleId` (`DiscipleId`),
  ADD KEY `id` (`id`),
  ADD KEY `LectionId` (`LectionId`),
  ADD KEY `TaskId` (`TaskId`);

--
-- Индексы таблицы `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PlanId` (`PlanId`),
  ADD KEY `StudentId` (`StudentId`);

--
-- Индексы таблицы `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StudentId` (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `Tasks`
--
ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Disciple`
--
ALTER TABLE `Disciple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Lections`
--
ALTER TABLE `Lections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Metodists`
--
ALTER TABLE `Metodists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Plan`
--
ALTER TABLE `Plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Tasks`
--
ALTER TABLE `Tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Disciple`
--
ALTER TABLE `Disciple`
  ADD CONSTRAINT `disciple_ibfk_1` FOREIGN KEY (`GroupId`) REFERENCES `Groups` (`GroupNumber`),
  ADD CONSTRAINT `disciple_ibfk_2` FOREIGN KEY (`TeacherId`) REFERENCES `Teacher` (`id`);

--
-- Ограничения внешнего ключа таблицы `Groups`
--
ALTER TABLE `Groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`StudentId`) REFERENCES `Students` (`id`);

--
-- Ограничения внешнего ключа таблицы `Plan`
--
ALTER TABLE `Plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`DiscipleId`) REFERENCES `Disciple` (`id`),
  ADD CONSTRAINT `plan_ibfk_2` FOREIGN KEY (`LectionId`) REFERENCES `Lections` (`id`),
  ADD CONSTRAINT `plan_ibfk_3` FOREIGN KEY (`TaskId`) REFERENCES `Tasks` (`id`);

--
-- Ограничения внешнего ключа таблицы `Results`
--
ALTER TABLE `Results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`PlanId`) REFERENCES `Plan` (`id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`StudentId`) REFERENCES `Students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
