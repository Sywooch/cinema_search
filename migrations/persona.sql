-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 20 2017 г., 16:42
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sergey`
--

INSERT INTO `persona` (`id`, `name`, `surname`, `date_dr`, `note`, `photo`, `books`, `count_film`, `tvShow`) VALUES
(1, 'Арнольд', 'Шварцнеггер', '1947-06-30 00:00:00', 'американский культурист, предприниматель и актёр австрийского происхождения, политик-республиканец, 38-й губернатор Калифорнии.', 'https://st.kp.yandex.net/images/actor_iphone/iphone360_6264.jpg', 'Вспомнить всё: Моя невероятно правдивая история', 75, 'Близнецы'),
(2, 'Жан-Клод', 'Ван Дамм', '1960-10-18 00:00:00', 'бельгийский актёр, режиссёр, сценарист, постановщик боевых сцен и продюсер бельгийского происхождения; культурист, мастер боевых искусств', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRWRIIKAbCGmMUigghWBJmYaBBH6-Yw__7_INeutYD1OxRNmwS1', 'Ж.К.В.Д.', 34, 'За закрытыми дверями'),
(3, 'Меган', 'Фокс', '1986-05-16 00:00:00', 'американская актриса и фотомодель', 'http://img0.liveinternet.ru/images/attach/c/0//45/626/45626580_29421_Megan_Fox_visits_the_Late_Show_With_David_Letterman_9129_122_187lo.jpg', '«Целуя девушек»', 15, 'Conan O\'Brien');
