-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2023 г., 15:11
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `zagolovok` varchar(160) DEFAULT NULL,
  `img` varchar(160) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `zagolovok`, `img`, `text`) VALUES
(1, 'Второй штурм', 'https://i.ytimg.com/vi/laxNyTq6WZg/maxresdefault.jpg', '20 марта с 10:30 до 16:30 пройдет вторая часть игры.'),
(2, 'Совместная игра', 'https://fsostrikeball.ru/image/3-1200-afisha-379359925.jpg', '25 декабря пройдет игра двух клубов, спонсированная нашим магазином.'),
(3, 'Обновление магазина', 'https://thelawofattraction.ru/wp-content/uploads/5/7/f/57f3213383532e211b19fe702ce00e06.jpeg', 'Произошло обновление ассортимента магазина, появилось новое оружие и снаряжение.');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(160) DEFAULT NULL,
  `photo` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `quantity`, `description`) VALUES
(1, 'АВТОМАТ ПНЕВМ. G&G GKG74M (140-150м/с), черный пластик TGK-74G-FOD-BNB-NCM', 'https://7-62.ru/wa-data/public/shop/products/64/90/9064/images/8692/8692.970.png', '23310', 27, 'Страйкбольный привод RK-серии предназначенный для тактических игр.'),
(2, 'Дымовая шашка ШД90', 'https://www.airsoftstore.ru/components/com_virtuemart/shop_image/product/03-smoke-grenade-shd200.jpg', '300', 67, 'Дымовая шашка для применения в военно-спортивных играх для постановки дымовой завесы. Вес дымовой смеси составляет 90 грамм, вес изделия – 115 грамм. Время дымовыделения 45-60 сек. Дымовыделение начинается через 3 секунды после инициализации. Высота 11.5 см, диаметр 5.3 см.'),
(3, 'Рация BAOFENG UV-82 (8W) 3 режима', 'https://airsoftsports.ru/images/gallery/DSCF282686792_1687275629_6.jpg', '3750', 32, 'BAOFENG UV-82 8W – полупрофессиональная рация с максимально увеличенной выходной мощностью 8 Ватт и тремя режимами регулировки выходной мощности 1/4/8 Ватт, что позволяет экономить заряд аккумуляторной батареи в зависимости от условий эксплуатации радиостанции. Аккумулятор с большой емкостью 2800 мАч обеспечивает 14 часов автономной работы устройства на одном заряде батареи. Корпус устройства изготовлен из ударопрочного пластика и обладает степенью защиты IP 54, что надежно защищает рацию от пыли и влаги.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(32) DEFAULT NULL,
  `password` varchar(160) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `otcestvo` varchar(32) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `first_name`, `last_name`, `otcestvo`, `email`, `admin`) VALUES
(3, 'Andr', '123', 'Андрей', 'Ряб', 'Максимович', 'Andrew@mail.com', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
