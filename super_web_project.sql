-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2017 г., 13:59
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
  `a_id` int(11) NOT NULL,
  `a_surname` varchar(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_fathname` varchar(100) NOT NULL,
  `a_datebirth` date NOT NULL,
  `a_position` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`a_id`, `a_surname`, `a_name`, `a_fathname`, `a_datebirth`, `a_position`, `a_email`, `a_password`) VALUES
(1, 'Кравчук', 'Євген', 'Петрович', '1975-04-06', 'minister', 'sofy48@mail.ru', 'd,>`E!uA#6m;u'),
(2, 'Захарчук', ' Bіктор', 'Іванович', '1991-05-09', 'minister', 'bktor.bodnarenko@sereda.org.ua', 'lw:z.7_+vTZVSj|*'),
(3, 'Шинкаренко', 'Йосип', 'Євгенійович', '1960-11-18', 'controller', 'oleksi.brovarcuk@mail.ru', ']A:u~~OQ'),
(4, 'Василенко', 'Анатолій', 'Федорович', '1976-04-16', 'controller', 'dmitrenko.boris@gmail.com', '~41yO\"ln;l|'),
(5, 'Шевчук', 'Тарас', 'Євгенович', '1970-11-25', 'controller', 'elisenko@romancenko.com.ua', 'GJwFGH&ZvyQsrS_h'),
(6, 'Іванченко', 'Юрій', 'Борисович', '1980-06-28', 'dean', 'romancenko.pavlo@romancenko.net', 'm:NB7=7HeCp2Ycl'),
(7, 'Васильчук', 'Олександр', 'Федорович', '1997-06-08', 'minister', 'sinkarenko.olena@lisenko.com', 'MWz5)%=7'),
(8, 'Дмитренко', 'Данило', 'Олексійович', '1978-04-13', 'controller', 'byceslav.sinkarenko@gmail.com', 'p:O43y?pD?o;qYjT'),
(9, 'Крамарчук', 'Федір', 'Євгенович', '1962-06-28', 'minister', 'kramarcuk.lydmila@kravcuk.com', 'R1S>0GDH)}@[Y=i5W'),
(10, 'Лисенко', 'Кирил', 'Євгенійович', '1981-05-24', 'minister', 'petrenko.yly@vasilcuk.ua', '{{wU$5V{=LLungRA'),
(11, 'Броварчук', 'Віталій', 'Олександрович', '1988-11-01', 'dean', 'fedr.vasilv@vasilv.net.ua', '0O)mY[m?.6R[SI'),
(12, 'Мірошниченко', ' Bалерій', 'Володимирович', '1959-06-09', 'controller', 'qpetrenko@ukr.net', '3K+cqRnF'),
(13, 'Пономаренко', 'Ігор', 'Борисович', '1995-12-14', 'minister', 'brovarenko.kra@gmail.com', '$z!i({MQ('),
(14, 'Микитюк', 'Юрій', 'Михайлович', '1962-09-24', 'dean', 'ruslan.kravcuk@vasilv.net.ua', '.oKb=$l{ex4Ih'),
(15, 'Пономарчук', 'Максим', 'Тарасович', '1986-01-05', 'controller', 'andri99@melnicenko.net.ua', '4t)SCTlfM?h5'),
(16, 'Шинкаренко', 'Максим', 'Сергійович', '1981-11-26', 'dean', 'sergnko.dary@petrenko.com', 'JXp=*)C`'),
(17, 'Броварчук', 'Юрій', 'Євгенійович', '1977-06-26', 'dean', 'gnatyk.oleksandra@kramarenko.net', 'R1POE--8qL'),
(18, 'Петренко', 'Антон', 'Володимирович', '1992-12-26', 'controller', 'mrosnicenko.sergi@gmail.com', 'I`847dyIe$ON@_KCUfCI'),
(19, 'Лисенко', 'Артур', 'Тарасович', '1959-06-02', 'minister', 'mrosnicenko.lydmila@gnatyk.com', 'NA#*Diu:&MjU2x_c8U');

-- --------------------------------------------------------

--
-- Структура таблицы `Department`
--

CREATE TABLE `Department` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Disciple`
--

CREATE TABLE `Disciple` (
  `disciple_id` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Faculty`
--

CREATE TABLE `Faculty` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Groups`
--

CREATE TABLE `Groups` (
  `g_id` int(11) NOT NULL,
  `g_name` int(11) NOT NULL,
  `disciple_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Group_Student`
--

CREATE TABLE `Group_Student` (
  `g_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Lections`
--

CREATE TABLE `Lections` (
  `lect_id` int(11) NOT NULL,
  `Lection` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Metodist`
--

CREATE TABLE `Metodist` (
  `m_id` int(11) NOT NULL,
  `m_surname` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_fathname` varchar(30) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Plan`
--

CREATE TABLE `Plan` (
  `p_id` int(11) NOT NULL,
  `disciple_id` int(11) NOT NULL,
  `lect_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Results`
--

CREATE TABLE `Results` (
  `r_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `NumberOfTries` int(11) NOT NULL,
  `Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Speciality`
--

CREATE TABLE `Speciality` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(100) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Student`
--

CREATE TABLE `Student` (
  `s_id` int(11) NOT NULL,
  `s_surname` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_fathname` varchar(30) NOT NULL,
  `s_datebirth` date NOT NULL,
  `s_course` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `speciality_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Tasks`
--

CREATE TABLE `Tasks` (
  `task_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Task` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Teacher`
--

CREATE TABLE `Teacher` (
  `t_id` int(11) NOT NULL,
  `t_surname` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_fathname` varchar(30) NOT NULL,
  `t_datebirth` date NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `University`
--

CREATE TABLE `University` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_street` varchar(100) NOT NULL,
  `u_buildnum` varchar(100) NOT NULL,
  `u_city` varchar(100) NOT NULL,
  `u_postcode` varchar(100) NOT NULL,
  `u_telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Индексы таблицы `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Индексы таблицы `Disciple`
--
ALTER TABLE `Disciple`
  ADD PRIMARY KEY (`disciple_id`),
  ADD KEY `id` (`disciple_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Индексы таблицы `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Индексы таблицы `Groups`
--
ALTER TABLE `Groups`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `d_id` (`disciple_id`);

--
-- Индексы таблицы `Group_Student`
--
ALTER TABLE `Group_Student`
  ADD PRIMARY KEY (`g_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Индексы таблицы `Lections`
--
ALTER TABLE `Lections`
  ADD PRIMARY KEY (`lect_id`),
  ADD KEY `id` (`lect_id`);

--
-- Индексы таблицы `Metodist`
--
ALTER TABLE `Metodist`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Индексы таблицы `Plan`
--
ALTER TABLE `Plan`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `id` (`p_id`),
  ADD KEY `d_id` (`disciple_id`),
  ADD KEY `lect_id` (`lect_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Индексы таблицы `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Индексы таблицы `Speciality`
--
ALTER TABLE `Speciality`
  ADD PRIMARY KEY (`speciality_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Индексы таблицы `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `speciality_id` (`speciality_id`);

--
-- Индексы таблицы `Tasks`
--
ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `id` (`task_id`);

--
-- Индексы таблицы `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Индексы таблицы `University`
--
ALTER TABLE `University`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Admin`
--
ALTER TABLE `Admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `Department`
--
ALTER TABLE `Department`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT для таблицы `Disciple`
--
ALTER TABLE `Disciple`
  MODIFY `disciple_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Faculty`
--
ALTER TABLE `Faculty`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT для таблицы `Groups`
--
ALTER TABLE `Groups`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Lections`
--
ALTER TABLE `Lections`
  MODIFY `lect_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Metodist`
--
ALTER TABLE `Metodist`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Plan`
--
ALTER TABLE `Plan`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Results`
--
ALTER TABLE `Results`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Speciality`
--
ALTER TABLE `Speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Student`
--
ALTER TABLE `Student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Tasks`
--
ALTER TABLE `Tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `University`
--
ALTER TABLE `University`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Department`
--
ALTER TABLE `Department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `Faculty` (`f_id`);

--
-- Ограничения внешнего ключа таблицы `Disciple`
--
ALTER TABLE `Disciple`
  ADD CONSTRAINT `disciple_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `Teacher` (`t_id`);

--
-- Ограничения внешнего ключа таблицы `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `University` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `Groups`
--
ALTER TABLE `Groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`disciple_id`) REFERENCES `Disciple` (`disciple_id`);

--
-- Ограничения внешнего ключа таблицы `Group_Student`
--
ALTER TABLE `Group_Student`
  ADD CONSTRAINT `group_student_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `Student` (`s_id`),
  ADD CONSTRAINT `group_student_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `Groups` (`g_id`);

--
-- Ограничения внешнего ключа таблицы `Metodist`
--
ALTER TABLE `Metodist`
  ADD CONSTRAINT `metodist_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `Department` (`d_id`);

--
-- Ограничения внешнего ключа таблицы `Plan`
--
ALTER TABLE `Plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`disciple_id`) REFERENCES `Disciple` (`disciple_id`),
  ADD CONSTRAINT `plan_ibfk_2` FOREIGN KEY (`lect_id`) REFERENCES `Lections` (`lect_id`),
  ADD CONSTRAINT `plan_ibfk_3` FOREIGN KEY (`task_id`) REFERENCES `Tasks` (`task_id`);

--
-- Ограничения внешнего ключа таблицы `Results`
--
ALTER TABLE `Results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `Plan` (`p_id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `Student` (`s_id`);

--
-- Ограничения внешнего ключа таблицы `Speciality`
--
ALTER TABLE `Speciality`
  ADD CONSTRAINT `speciality_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `Faculty` (`f_id`);

--
-- Ограничения внешнего ключа таблицы `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`speciality_id`) REFERENCES `Speciality` (`speciality_id`);

--
-- Ограничения внешнего ключа таблицы `Teacher`
--
ALTER TABLE `Teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `Department` (`d_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
