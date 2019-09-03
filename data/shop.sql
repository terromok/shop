-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 04 2019 г., 00:08
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `goods_price` int(11) DEFAULT NULL,
  `session_id` text NOT NULL,
  `quantyty` int(11) NOT NULL,
  `summ_row` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `goods_price`, `session_id`, `quantyty`, `summ_row`) VALUES
(52, 2, 1, '1d5uosovhv7tnmjqu7afaadnc35v200j', 3, 3),
(53, 3, 14, '1d5uosovhv7tnmjqu7afaadnc35v200j', 5, 70),
(54, 8, 48, '1d5uosovhv7tnmjqu7afaadnc35v200j', 2, 96),
(55, 10, 11, '1d5uosovhv7tnmjqu7afaadnc35v200j', 5, 55),
(56, 1, 22, '1d5uosovhv7tnmjqu7afaadnc35v200j', 1, 22),
(57, 9, 78, '1d5uosovhv7tnmjqu7afaadnc35v200j', 1, 78),
(58, 11, 92, '1d5uosovhv7tnmjqu7afaadnc35v200j', 1, 92);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(28, 'Олег', 'Все хорошо');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `name`, `description`, `price`) VALUES
(1, 'prod1.png', 'Галстук', 'валпь ьывадьпавьпавь валпвальпав ь', 22),
(2, 'prod2.png', 'Штаны', 'ват пыпавыь ап  а пь апь а.', 1),
(3, 'prod3.png', 'Шапка', 'оап тапвтподюадл двапьадвль ддыап ь', 14),
(6, 'prod4.png', 'Рубашка', 'атлвопт лыатплтпво аоптватпжавопт ыалпвопаво ав', 48),
(7, 'prod5.png', 'Трусы', 'авпдавлдл ьвадлпьдваьпавлд ьавль авльпвад', 78),
(8, 'prod6.png', 'Майка', 'атлвопт лыатплтпво аоптватпжавопт ыалпвопаво ав', 48),
(9, 'prod7.png', 'Кепка', 'авпдавлдл ьвадлпьдваьпавлд ьавль авльпвад', 78),
(10, 'prod8.png', 'Пальто', 'атлвопт лыатплтпво аоптватпжавопт ыалпвопаво ав', 11),
(11, 'prod9.png', 'Шарф', 'авпдавлдл ьвадлпьдваьпавлд ьавль авльпвад', 92);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category`, `prev`, `text`) VALUES
(1, 2, 'В штабе Зеленского не признают референдум в Крыму', 'КИЕВ, 15 апр — РИА Новости. Пресс-служба кандидата в президенты Украины Владимира Зеленского заявила, что в его штабе не признают референдум о воссоединении Крыма с Россией.\r\n\"Так называемый \"референдум\" не может считаться актом, свидетельствующим о свободном волеизъявлении жителей Крыма\", — говорится в заявлении, которое имеется в распоряжении РИА Новости.'),
(2, 2, 'Путин подписал закон о запрете размещения хостелов в жилых домах', 'МОСКВА, 15 апр - РИА Новости. Владимир Путин подписал закон о запрете размещения хостелов в многоквартирных домах с первого октября 2019 года, соответствующий документ опубликован на официальном портале правовой информации.\r\nЗакон запрещает использовать жилые помещения в качестве гостиницы или другого средства временного размещения. Предусматривается, что оказывать гостиничные услуги можно лишь после перевода жилого помещения в нежилое и оснащения его оборудованием надлежащего качества:');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `adres` text NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `adres`, `session_id`) VALUES
(1, 'Иван', '34234', 'Москва', 'si967rjm76fqf2sn19d4a5rj6j4kbi4v');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$GAh95KWqFf1Fw4YyH/BCnuODYbJ1Mln78vDuOIwj7WQvChhR8QcX.', '1161959245d694d1884f319.27786906');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
