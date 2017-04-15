-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 15 2017 г., 13:07
-- Версия сервера: 5.5.54-0+deb8u1
-- Версия PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `subscribe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` enum('agency','tourist','staff','common') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'common',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `name`, `person`, `email`, `description`, `status`, `created_at`, `updated_at`) VALUES
(10, 'ТА "Ярославские путешествия"', 'Лунева Анастасия', 'info@yartravel.ru', NULL, 'agency', NULL, NULL),
(11, 'ТА "Ярославское бюро путешествий и экскурсий"', 'Татьяна Сергеева', 'sergeevatravel@mail.ru', NULL, 'agency', NULL, NULL),
(13, 'Т.а. "Горячие туры"', 'Татьяна Юшкина', 'hottyar@mail.ru', NULL, 'agency', NULL, NULL),
(14, 'ТА "Апрель Люкс" г.Тутаев', 'Екатерина Печникова', 'veselajgisn-005@mail.ru', NULL, 'agency', NULL, NULL),
(15, 'Т.а. "ЛеДиТур"', 'Диана Журавлева', 'ledytour@mail.ru', NULL, 'agency', NULL, NULL),
(17, 'ТА "Фреш-тур"', 'Бударина Зоя', 'freshtour@inbox.ru', NULL, 'agency', NULL, NULL),
(19, 'ТА "Альта-тур" (офис в Брагино)', 'Анна Вязникова', 'bron@alta-tour.ru', NULL, 'agency', NULL, NULL),
(20, 'ТА "Альта-тур" (офис в Центре)', 'Елена Баландина', 'altatour1@inbox.ru', NULL, 'agency', NULL, NULL),
(21, 'Яроблтур № 11', 'Владимир Кузнецов', 'yarobltur@yandex.ru', NULL, 'agency', NULL, NULL),
(22, 'ТА "Сафари-тур"', 'Ольга Лавренюк', 'safaritour@nordnet.ru', NULL, 'agency', NULL, NULL),
(24, 'ТА "Волжские путешествия"', 'Евгения Петрова', 'vlgt@bk.ru', NULL, 'agency', NULL, NULL),
(25, 'ТА "Дискавери"', 'Наталья Волченская', 'discovery.yar@mail.ru', NULL, 'agency', NULL, NULL),
(26, 'ТА "Паспарту" г. Тутаев', 'Анастасия Науменко', 'turpaspartu@yandex.ru', NULL, 'agency', NULL, NULL),
(28, 'ТА "Навигатор" г. Ростов', 'Александр Голубев', 'navigatortour@mail.ru', NULL, 'agency', NULL, NULL),
(29, 'ТА "Альта-Тур" (офис в Рыбинске)', 'Сёстры Поляковы :-)', 'ofis4@alta-tour.ru', NULL, 'agency', NULL, NULL),
(30, 'ТА "ГАР-ТУР"', 'Владимир Гар', 'gardemarin@yaroslavl.ru', NULL, 'agency', NULL, NULL),
(31, 'ТА "Гео-Тур"', 'Ирина Аристархова', 'ta_geotur@mali.ru', NULL, 'agency', NULL, NULL),
(32, 'Т.а. "КОВЧЕГ"', 'Елена Скрябина', 't.kow4eg@yandex.ru', NULL, 'agency', NULL, NULL),
(33, 'Т.а. "Мир вокруг нас"', 'Елена Рычкова', 'lmetour@mail.ru', NULL, 'agency', NULL, NULL),
(34, 'ТА "Перекрёсток" г. Ростов', 'Марина Мавричева', 'perekrestoktur@mail.ru', NULL, 'agency', NULL, NULL),
(35, 'ТА "Татьяна" п. Пречистое', 'Козлова Татьяна', 'tatyana_tour@mail.ru', NULL, 'agency', NULL, NULL),
(36, 'Т.а. "Турпоиск"', 'Елена Дюдюкина', 'elenadbr@yandex.ru', NULL, 'agency', NULL, NULL),
(37, 'ТА "Рыбинский центр туризма"', 'Ирина Мусина', 'travel68@mail.ru', NULL, 'agency', NULL, NULL),
(38, 'Яроблтур № 30 (г. Тутаев)', 'Татьяна Семёнова, Юлия, Екатерина', 'tutaev_yar.ru@mail.ru', NULL, 'agency', NULL, NULL),
(39, 'Яроблтур № 32', 'Белых Алёна', 'office32@yarobltour.ru', NULL, 'agency', NULL, NULL),
(40, 'ТА "Наш век"', 'Попова Дарья', 'nashvek@bk.ru', NULL, 'agency', NULL, NULL),
(41, 'ТА "Солнечный ветер"', 'Бореймагорская Елена', 'solnveter@mail.ru', NULL, 'agency', NULL, NULL),
(42, 'ТА "Волжанка-тур" г. Гаврилов-Ям', 'Ирина Вязниковцева', 'tur-muhtarova@rambler.ru', NULL, 'agency', NULL, NULL),
(43, 'ТА "АльТур" г. Тутаев', 'Алёна Живайкина', 'altour_yar@mail.ru', NULL, 'agency', NULL, NULL),
(45, 'ТА "Четыре сезона"', 'Зотьева Дарья', 'info@4season.ru', NULL, 'agency', NULL, NULL),
(46, 'ТА "Амадеус"', 'Кулигина Ольга, Котов Александр', 'amadeus-tour@yandex.ru', NULL, 'agency', NULL, NULL),
(47, 'Яроблтур № 42', 'Шахова Екатерина', 'office42@yarobltour.ru', NULL, 'agency', NULL, NULL),
(50, 'ТА "Ярославтур"', 'Бережной Александр', 'info@yaroslavltur.ru', NULL, 'agency', NULL, NULL),
(51, 'ТА "Музыка дорог"', 'Смирнова Оксана', 'info@music-roads.ru', NULL, 'agency', NULL, NULL),
(52, 'ТА "Грант-Тур"', 'Алёна Бобкова', 'grant.tur@mail.ru', NULL, 'agency', NULL, NULL),
(54, 'ТА "Бора-Бора"', 'Чикин Дмитрий', 'bora-bora581717@ya.ru', NULL, 'agency', NULL, NULL),
(55, 'ТА "Бархатный Сезон" г. Рыбинск', 'Юлия Беспалова', 'bespalova19792007@rambler.ru', NULL, 'agency', NULL, NULL),
(56, 'ТА "Туристический клуб"', 'Родионова Елена Анатольевна', 'tk.yaroslavl@yandex.ru', NULL, 'agency', NULL, NULL),
(57, 'ТА "Про-Линия"', 'Татьяна Юшкина', 'pro-linia@mail.ru', NULL, 'agency', NULL, NULL),
(58, 'ТА "Солнечный тур он-лайн"', 'Мария Юшкова', 'yushkova@sunnyonline.ru', NULL, 'agency', NULL, NULL),
(59, 'ТА "Яр-тревел"', 'Ольга Кораблева', 'yartur@list.ru', NULL, 'agency', NULL, NULL),
(60, 'ТА "Солнечный ветер" г. Тутаев', 'Лариса Агапова', 'mastertutaev@mail.ru', NULL, 'agency', NULL, NULL),
(61, 'ТА "Славянка" г. Переславль', 'Жанна Барыбина', 'slav-pertur@mail.ru', NULL, 'agency', NULL, NULL),
(62, 'ТА "Золотые купола+" г. Переславль', 'Антипова Татьяна, Игнатьева Маргарита', 'turfirma@pereslavl.ru', NULL, 'agency', NULL, NULL),
(63, 'ТА "Пять звёзд"', 'Решетников А.А.', 'yar.5stars@mail.ru', NULL, 'agency', NULL, NULL),
(64, 'ТА "Интурист Магазин Путешествий"', 'Эльвира Алиева', 'dinar_yar@mail.ru', NULL, 'agency', NULL, NULL),
(65, 'ТА "Дельфин"', 'Катерина Кареткина', 'delfin-tur@mail.ru', NULL, 'agency', NULL, NULL),
(66, 'ТА "Ирис"', 'Песина Наталья Ивановна', 'iristour@mail.ru', NULL, 'agency', NULL, NULL),
(67, 'ТА "Мир туризма"', 'Коваленко Светлана Сергеевна', 'mirturizma@inbox.ru', NULL, 'agency', NULL, NULL),
(68, 'ТА "Региональная туристическая компания" г. Иваново', 'Максимова Елена', 'rtk.ivanovo@gmail.com', NULL, 'agency', NULL, NULL),
(69, 'ТА "Надежда" г. Тутаев', 'Красноперова Анастасия Александровна', 'nadejda_tour@mail.ru', NULL, 'agency', NULL, NULL),
(70, 'Яроблтур № 43', 'Дина Делягина', 'del-tour@mail.ru', NULL, 'agency', NULL, NULL),
(71, 'ТА &quot;Сиеста-тур&quot;', 'Бюйюкчаталбаш Светлана Михайловна', 'siesta-tour76@yandex.ru', NULL, 'agency', NULL, NULL),
(72, 'ТА "РИКО экспресс"', 'Прощаева Жанна Вячеславовна', 'proshaeva.zhanna@mail.ru', NULL, 'agency', NULL, NULL),
(73, 'ТА "МБС-Тур"', 'Вавилова Татьяна', 'mbs@yaroslavl.ru', NULL, 'agency', NULL, NULL),
(74, 'Яроблтур № 34', 'Борисанова Ольга, Лаптева Екатерина', 'olga-yarobltour@mail.ru', NULL, 'agency', NULL, NULL),
(75, 'ТА "Метро-тур"', 'Рычкова Елена Александровна', 'yarmetro-tour@mail.ru', NULL, 'agency', NULL, NULL),
(76, 'ТА "Магазин путёвок"', 'Лисицына Валентина Ивановна', 'mpyar@mail.ru', NULL, 'agency', NULL, NULL),
(78, 'ТА "Яр GLOBUS travel"', 'Конычева Екатерина', 'yarglobus@mail.ru', NULL, 'agency', NULL, NULL),
(79, 'ТА "Парадайз-тур"', 'Плетнёва Лариса', 'larek77@yandex.ru', NULL, 'agency', NULL, NULL),
(80, 'ТА "Переславль-Тур"', 'Сенаторова Светлана Леонидовна', 'pereslavl.tour@mail.ru', NULL, 'agency', NULL, NULL),
(81, 'ТА "АВС"', 'Пономаренко Андрей Геннадьевич, Насырова Галина Михайловна', 'dogovor@avstour.ru', NULL, 'agency', NULL, NULL),
(83, 'ТА "Исток"', 'Хомутова Екатерина Брониславовна', 'istok-yar@mail.ru', NULL, 'agency', NULL, NULL),
(84, 'ТА "Штурман"', 'Бобровских Сергей Николаевич', 'info@shturman-tour.ru', NULL, 'agency', NULL, NULL),
(85, 'ТА "Горизонт"', 'Захарова Ирина Владимировна', 'gorizont.yar@gmail.com', NULL, 'agency', NULL, NULL),
(90, 'ООО Турфирма  "Северная Звезда"', 'Глебова Людмила Михайловна', 'luda_v.ustug@mail.ru', NULL, 'agency', NULL, NULL),
(91, 'ТА «ФОРТУНА»', 'Родионова Елена Анатольевна', 'fortuna-tur@list.ru', NULL, 'agency', NULL, NULL),
(92, 'ТА "Море туров"', 'Перемутов Сергей Александрович', 'moreturoff@gmail.com', NULL, 'agency', NULL, NULL),
(93, 'ТА "NELLY-TRAVEL"', 'Плошкина Нелли Владимировна, Румянцева Татьяна Юрьевна', 'BGT-YAR@yandex.ru', NULL, 'agency', NULL, NULL),
(94, 'ТА "Оранжевое лето"', 'Морозова Лариса Евгеньевна', 'orange.summer.travel@yandex.ru', NULL, 'agency', NULL, NULL),
(96, 'Экскурсионный Центр "ОТДОХНИ" г. Ярославль', 'Быканов Сергей Вадимович', 'otdohni-tour76@yandex.ru', NULL, 'agency', NULL, NULL),
(97, 'ТА "Радуга"', 'Тихомирова Алина Александровна', 'radugayar@inbox.ru', NULL, 'agency', NULL, NULL),
(99, 'ООО "Клуб путешественников - Ярославль" Лобанов Денис Валентинович', 'Лобанов Денис Валентинович', 'denis@tcyar.ru', NULL, 'tourist', NULL, '2017-04-15 09:00:12'),
(103, 'ТА "Вавилон"', 'Чиликина Татьяна Валентиновна', 'ta_vavilon@mail.ru', NULL, 'agency', NULL, NULL),
(105, 'ТА "Кругосветка"', 'Баранов Олег', 'krugosvetka-tour@mail.ru', NULL, 'agency', NULL, NULL),
(107, 'ТА "Империя Туризма"', 'Лапшина Мария Владимировна', 'travel@imperiya-tour.ru', NULL, 'agency', NULL, NULL),
(108, 'ТА "Карта мира"', 'Чикин Дмитрий', 'karta.mira@list.ru', NULL, 'agency', NULL, NULL),
(109, 'ТА "Альфа тур"', 'Анастасия, Елена', 'alfatour@list.ru', NULL, 'agency', NULL, NULL),
(110, ' ТА "Л-тур"', 'Селевина Елена Николаевна', 'l-tur@inbox.ru', NULL, 'agency', NULL, NULL),
(111, 'ТА "Глория-тур"', 'Заяц Елена', 'gloria@nordet.ru', NULL, 'agency', NULL, NULL),
(112, 'ТА "ГАЛА-ТУР"', 'Мартыненко Жанна Вениаминовна, Еранин Алексей Викторович', 'galatour@mail.yar.ru', NULL, 'agency', NULL, '2017-04-09 10:10:11'),
(114, 'ТА "ВИЗА-СЕРВИС"', 'Игнатьевская Дарья Александровна', 'visa76@list.ru', NULL, 'agency', NULL, NULL),
(115, 'ТА "Смайл-Тур"', 'Охотский Дмитрий Игоревич', 'smile-tour@list.ru', NULL, 'agency', NULL, NULL),
(116, 'ТА "1001 ТУР"', 'Норик Ольга', 'yar@1001tur.ru', NULL, 'agency', NULL, NULL),
(117, 'ТА "ПутевкинЪ"', 'Ермакова Наталия Сергеевна', 'putevkin76@mail.ru', NULL, 'agency', NULL, NULL),
(118, 'ТА "ТОКО ТУР"', 'Ольга, Евгения', 'toko@yar.ru', NULL, 'agency', NULL, NULL),
(119, 'ТА "РЕГИОН-ТУР"', 'Аристархова Ирина Владимировна', 'region-zakaz@yandex.ru', NULL, 'agency', NULL, NULL),
(120, 'ТА "Ярославтур"', 'Бережной Александр Александрович', 'info@yaroslavtur.ru', NULL, 'agency', NULL, NULL),
(121, 'ТА "Рыбинск-Тур"', 'Самойлова Юлия Сергеевна', 'samoylova.2010@yandex.ru', NULL, 'agency', NULL, NULL),
(123, 'ТА "Одиссея"', 'Надежкина Наталия Александровна', 'nataliya-yar@list.ru', NULL, 'agency', NULL, NULL),
(124, 'ТА "Эрмитаж"', 'Данилова Галина', 'tour@ermitag.ru', NULL, 'agency', NULL, NULL),
(125, 'Санаторий-профилакторий "Железнодорожник"', 'Терехова Анастасия', 'terexova_a@mail.ru', NULL, 'agency', NULL, NULL),
(126, 'Яроблтур (Пошехонье)', 'Степина Лариса Павловна', 'stepina.posh@mail.ru', NULL, 'agency', NULL, NULL),
(127, 'Центр туризма и консалтинга', 'Шелоумова Мария Леоновна', 'vip76@list.ru', NULL, 'agency', NULL, NULL),
(128, 'ТА "Королевское путешествие"', 'ПИСАНИНА ВЕРА', 'queens_travel@mail.ru', NULL, 'agency', NULL, NULL),
(129, 'ТА "Аррива-Турс"', 'Зюзина Юлия Александровна', 'arriva-tours@mail.ru', NULL, 'agency', NULL, NULL),
(130, 'ТА "Путник"', 'Пчелина Алена Валерьевна', 'info@putnic.ru', NULL, 'agency', NULL, NULL),
(131, 'ТА "Атлантида"', 'Тихомирова Алина Александровна', 'atlantida.13@inbox.ru', NULL, 'agency', NULL, NULL),
(134, 'ТА "Колумб"', 'Овсянникова Татьяна Евгеньевна', 'columb@yar.ru', NULL, 'agency', NULL, NULL),
(135, 'ТА "Альбатрос"', 'Мозалева О.В.', 't-albatros@mail.ru', NULL, 'agency', NULL, NULL),
(136, 'ТА "Оазис Тур"', 'Лидия', 'oazisros@mail.ru', NULL, 'agency', NULL, NULL),
(137, 'ТА" МЕГА ТУР"', 'Гостяева Анна Георгиевна', 'mega.tur@mail.ru', NULL, 'agency', NULL, NULL),
(139, 'ТА "АРГО-ТУР"', 'Маковкина Лидия Юрьевна', 'argo-travellers@mail.ru', NULL, 'agency', NULL, NULL),
(140, 'ТА "Солнечный путь"', 'Кисарин Роман Георгиевич', 'roman-kisarin@rambler.ru', NULL, 'agency', NULL, NULL),
(141, ' "Меридиан тур"', 'Лисневская Елена Владимировна', 'meridian@yar.ru', NULL, 'agency', NULL, NULL),
(142, 'Турагентство "АКИТА трэвел"', 'Трошина Виктория Владимировна', 'info@akita-travel.ru', NULL, 'agency', NULL, NULL),
(143, 'ТФ "Гуд Лак-тур плюс"', 'Холманова Наталья Александровна', 'gd-tour2011@rambler.ru', NULL, 'agency', NULL, NULL),
(144, 'ТА ПЯТЬ ПЛЮС', 'Цыганок Ирина ', 'fiveplus@norednet.ru', NULL, 'agency', NULL, NULL),
(145, 'оф 58 Яроблтур', 'Лобанова Алися', 'yarobltour58@rambler.ru', NULL, 'agency', NULL, NULL),
(146, 'Яроблтур85', 'Екатерина, Татьяна', 'tur85@yandex.ru', NULL, 'agency', NULL, NULL),
(147, 'ТА "Ваш консультант"', 'Попова Дарья', 'mail@vk76.ru', NULL, 'agency', NULL, NULL),
(148, 'Сто дорог', 'Иванова Оксана Александровна', 'bp_stodorog@mai.ru', NULL, 'agency', NULL, NULL),
(149, 'РИФ ТРЕВЕЛ ЦЕНТР', 'Кубышкин Дмитрий Евгеньевич', 'bron@reeftravel.ru', NULL, 'agency', NULL, NULL),
(151, 'ТА "Данилов-Тур"', 'Тоскина Эльвира Борисовна', 'danilovtour75@mail.ru', NULL, 'agency', NULL, NULL),
(152, 'ТА "Ярославский центр бронирования"', 'Лобанова Алися Владимировна', 'sletat.yaroslavl@mail.ru', NULL, 'agency', NULL, NULL),
(153, 'ТА "Феникс Тур"', 'Елаева Марина Владимировна', 'Fenixtur-yaroslavl@yandex.ru', NULL, 'agency', NULL, NULL),
(154, 'ООО "ТА "Мечта"', 'Дроздова Олеся Сергеевна', 'ta-mechta@bk.ru', NULL, 'agency', NULL, NULL),
(155, 'Глобал Трэвэл Рыбинск', 'Львова Татьяна Юрьевна', 'globaltravel.rybinsk@yandex.ru', NULL, 'agency', NULL, NULL),
(156, 'ООО " ТК "Интелтур"', 'Журавлева Тамара Владимировна', 'inteltour@inteltour.ru', NULL, 'agency', NULL, NULL),
(159, 'ТА "Уникум Тур"', 'Обидина Анастасия Алексеевна', 'unikum.tur@mail.ru', NULL, 'agency', NULL, NULL),
(160, 'Бон Вояж', 'Тимур Тунчер', 'ya.bvtravel@yandex.ru', NULL, 'agency', NULL, NULL),
(161, 'ТА "Alltravel"', 'Радченко  Юлия Олеговна', 'alltravel4@mail.ru', NULL, 'agency', NULL, NULL),
(163, 'Вояж-Рыбинск', 'Романова Дарья Владимировна', 'voyagecbryb@rambler.ru', NULL, 'agency', NULL, NULL),
(164, 'ТА "Магеллан"', 'Писарик Николай Павлович', 'magellan07@yar.ru', NULL, 'agency', NULL, NULL),
(165, 'КИВИ-ТУР', 'Ковалева Татьяна', 'kivi-tur@bk.ru', NULL, 'agency', NULL, NULL),
(166, 'Фреш Тур', 'Полунуждина Наталья Владимировна', 'fresh944410@mail.ru', NULL, 'agency', NULL, NULL),
(167, 'ТА "Волна путешествий"', 'Малеева Наталья Юрьевна', 'wave-travel@mail.ru', NULL, 'agency', NULL, NULL),
(168, 'ООО "АМАДЕУС ЛЮКС"', 'Алиева С.А.', 'amadeus-tour@mail.ru', NULL, 'agency', NULL, NULL),
(169, 'ТА "Велл" Ярославль', 'Зацепина Елена Алексеевна', 'zatsepina-well@mail.ru', NULL, 'agency', NULL, NULL),
(170, 'ТА "Автомобилист"', 'Салихова Татьяна Александровна', 'avtotur2002@mail.ru', NULL, 'agency', NULL, NULL),
(171, 'ТА "Акварельтур"', 'Кокорина Ольга Андреевна', 'akvareltur@mail.ru', NULL, 'agency', NULL, NULL),
(172, '"Кафедра Странников"', 'Маронова Елена Дмитриенва', 'tvorydobro@rambler.ru', NULL, 'agency', NULL, NULL),
(173, '"Планета плюс"', 'Анна Викторовна', 'planetaplus76@mail.ru', NULL, 'agency', NULL, NULL),
(174, 'ООО «ГеоПоинтТрэвэл»', 'Скидан Виктория Олеговна', 'viktoria@gpointtravel.ru', NULL, 'agency', NULL, NULL),
(175, 'СМ Тур', 'Смирнова Елена Викторовна', 'smtour80@mail.ru', NULL, 'agency', NULL, NULL),
(176, 'ТА "Блики солнца"', 'Кидярова Алёна ', 'yourhottravel@gmail.com', NULL, 'agency', NULL, NULL),
(177, 'ТА ПРАЙМ', 'Ершова Алена', 'praimtour@gmail.com', NULL, 'agency', NULL, NULL),
(179, 'ООО "GSM-tour"', 'Зарубина Ольга Васильевна', 'gsm-tour@mail.ru', NULL, 'agency', NULL, NULL),
(180, 'ТА "Колибри"', 'Сидорова Наталья Анатольевна', 'colibriy@rambler.ru', NULL, 'agency', NULL, NULL),
(181, 'ТА "Евразия Тур"', 'Юлия', 'evrazia.yar@yandex.ru', NULL, 'agency', NULL, NULL),
(182, 'ГАЛА-ТУР', 'Мирошникова Елена Александровна', 'gala-tour2003@mail.ru', NULL, 'agency', NULL, NULL),
(183, 'ТА "АМАДЕУС" ИП Киселевой Риммы Григорьевны', 'Кулигина Ольга Алексеевна', 'amadeus-tour@yandex.ru', NULL, 'agency', NULL, NULL),
(185, 'ИП Маркелов Е. А.', 'Маркелов Евгений Андреевич', 'ipmarkelov@bk.ru', NULL, 'agency', NULL, NULL),
(186, 'ИП Меньшикова Е.А.', 'Меньшикова Екатерина Александровна', 'emenshikova2@yandex.ru', NULL, 'agency', NULL, NULL),
(187, 'ТА  "Цезарь тур"', 'Мальцев Артем Валерьевич', 'cezartour@rambler.ru', NULL, 'agency', NULL, NULL),
(190, 'ТА "В другие города"', 'Ловкова Ольга Николаевна', 'o.lovkova@yandex.ru', NULL, 'agency', NULL, NULL),
(191, 'АрсТур', 'Карпова Анна Валерьевна', 'foundcult@gmail.com', NULL, 'agency', NULL, NULL),
(192, 'ТА "Экипаж"', 'Ушакова Ольга Александровна', 'equip@yaroslavl.ru', NULL, 'agency', NULL, NULL),
(194, 'ТА "ГарантВояж"', 'Жигалова Юлия Владимировна', 'garantv@mail.ru', NULL, 'agency', NULL, NULL),
(195, '1 EGORR', 'EGORR', 'yaroslavl.city@gmail.com', NULL, 'agency', '2017-03-09 12:32:43', '2017-04-09 07:15:17'),
(196, '"A EGORR Yahoo"', 'Мистер EGORR', 'yaroslavl.city@yahoo.com', NULL, 'agency', '2017-03-09 12:35:45', '2017-03-09 12:35:45'),
(197, 'ООО "Клуб путешественников - Ярославль" Татьяна Тачкина', 'Татьяна Тачкина', 'tatiana@tcyar.ru', NULL, 'staff', '2017-04-15 08:25:21', '2017-04-15 08:59:19'),
(198, 'ООО "Клуб путешественников - Ярославль" Марина Матвеева', 'Марина Матвеева', 'marina@tcyar.ru', NULL, 'staff', '2017-04-15 08:56:38', '2017-04-15 08:56:38'),
(199, 'ООО "Клуб путешественников - Ярославль" отдел приема в Ярославле', 'отдел приема в Ярославле', 'priem@tcyar.ru', NULL, 'staff', '2017-04-15 08:57:46', '2017-04-15 08:57:46'),
(200, 'ООО "Клуб путешественников - Ярославль" сборные туры', 'сборные туры', 'sborka@tcyar.ru', NULL, 'staff', '2017-04-15 08:58:38', '2017-04-15 08:58:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
