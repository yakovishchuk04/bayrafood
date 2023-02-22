-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 22 2023 р., 21:07
-- Версія сервера: 8.0.30
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `register-bd`
--

-- --------------------------------------------------------

--
-- Структура таблиці `food`
--

CREATE TABLE `food` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` float NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `description`) VALUES
(1, 'Салат з редисом', 89, 'Редис, листя салату, кисло-солодкий соус, посипаний кунжутом'),
(2, 'Креветки ляпаста', 149, 'Свіжа паста з креветками, зеленню та соусом песто'),
(3, 'Тост сала', 59, 'Свіженька шинка, рукола, просмажені скибочки бородинського хліба'),
(4, 'Овочевий мікс', 139, 'Свіже листя салату, домашній огірочок, помідор, філетова цибуля'),
(5, 'Сливовий пиріг', 89, 'Сливовий пиріг із здобного тіста, посипаний цукровою пудрою'),
(6, 'Персикове тістечко', 69, 'Смачне персикове шарове тісто з персиком та листям м’яти'),
(7, 'Макаруни', 79, 'Мигдальне борошно, крем, яєчний білок, цукор'),
(8, 'Абрикосовий пиріг', 59, 'Свіжі абрикоси в безглютеновому тісті з листям м’яти'),
(9, 'Еспрессо', 29, 'Вишукані кавові зерна виготовлені за ідеальної температури та тиску'),
(10, 'Сік маракуї', 19, 'Крижаний сік маракуї, кремовий, солодкий'),
(11, 'Осінній чай', 19, 'Чай з анічом, корицею і лимоном. Відчуйте Італійську осінь'),
(12, 'Томатний сік', 33, 'Сік отриманий з свіжих томатів, з лану до столу');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `food`
--
ALTER TABLE `food`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `food`
--
ALTER TABLE `food`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
