-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 31 2023 г., 08:49
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `29-maktab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Bosh sahifa', 'bosh-sahifa', '2023-06-26 13:03:42', '2023-06-26 13:03:42'),
(4, 'Rahbariyat', 'rahbariyat', '2023-06-26 13:13:36', '2023-06-26 13:13:36'),
(5, 'Yangiliklar', 'yangiliklar', '2023-06-26 13:14:46', '2023-06-26 13:14:46'),
(6, 'Aloqa', 'aloqa', '2023-06-26 13:15:16', '2023-06-26 13:15:16');

-- --------------------------------------------------------

--
-- Структура таблицы `circles`
--

CREATE TABLE `circles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `circles`
--

INSERT INTO `circles` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Ingliz tili fanidan tashkil etilgan to\'garaklar', 'fad fa-sort-alpha-up fa-2x', '2023-06-28 02:09:04', '2023-06-28 02:30:21'),
(2, 'Matematika fanidan tashkil etilgan to\'garaklar', 'fad fa-plus fa-2x', '2023-06-28 02:32:51', '2023-06-28 02:32:51'),
(3, 'Tarix fanidan tashkil etilgan to\'garaklar', 'fas fa-history fa-2x', '2023-06-28 02:34:45', '2023-06-28 02:34:45');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `acceptance`, `contact`, `facebook`, `instagram`, `telegram`, `youtube`, `map`, `created_at`, `updated_at`) VALUES
(3, 'Sayxunobod tumani O\'rikzor mahallasi Katta qo\'rg\'on ko\'chasi 20-uy', 'Dushanba - Juma, 9:00 - 18:00, Tushlik 13:00-14:00', '+998994795982', '#!', '#!', '#!', '#!', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6058.586242922537!2d68.954081!3d40.601356!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDM2JzA0LjkiTiA2OMKwNTcnMTQuNyJF!5e0!3m2!1sru!2s!4v1680101894038!5m2!1sru!2s', '2023-07-01 10:05:49', '2023-07-01 10:05:49');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `footers`
--

INSERT INTO `footers` (`id`, `title`, `location`, `contact`, `email`, `faks`, `link`, `map`, `created_at`, `updated_at`) VALUES
(3, 'Sirdaryo viloyati Sayxunobod tumani Xalq ta\'lim bo\'limiga qarashli 29-umumiy o\'rta ta\'lim maktabi', 'Sirdaryo Viloyati Sayxunobod Tumani O\'rikzor Mahallasi', '+998994795982', 'shohruhermanov5@gmail.com', '+998940552101', 'https://t.me/Ermanov_Dev', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6058.586242922537!2d68.954081!3d40.601356!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDM2JzA0LjkiTiA2OMKwNTcnMTQuNyJF!5e0!3m2!1sru!2s!4v1680101894038!5m2!1sru!2s', '2023-06-30 02:01:06', '2023-06-30 02:18:33');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1687946361.jpg', '2023-06-28 06:59:21', '2023-06-28 06:59:21'),
(3, '1687946682.jpg', '2023-06-28 07:04:42', '2023-06-28 07:04:42'),
(4, '1687946702.jpg', '2023-06-28 07:05:02', '2023-06-28 07:05:02'),
(5, '1687946776.jpg', '2023-06-28 07:06:16', '2023-06-28 07:06:16'),
(6, '1687946805.jpg', '2023-06-28 07:06:45', '2023-06-28 07:06:45'),
(7, '1687946816.jpg', '2023-06-28 07:06:56', '2023-06-28 07:06:56'),
(8, '1687946828.jpg', '2023-06-28 07:07:08', '2023-06-28 07:07:08'),
(9, '1687946846.jpg', '2023-06-28 07:07:26', '2023-06-28 07:07:26'),
(10, '1687946856.jpg', '2023-06-28 07:07:36', '2023-06-28 07:07:36');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1687934480.jpg', '2023-06-28 03:41:20', '2023-06-28 03:41:20');

-- --------------------------------------------------------

--
-- Структура таблицы `latestnews`
--

CREATE TABLE `latestnews` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `latestnews`
--

INSERT INTO `latestnews` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Alsher Navoiy', 'Sayxunobod tumani 29-umum ta\'lim maktabida joriy yilning 8-fevral kuni Alsher Navoiy bobomizning 582-yiligiga bag\'ishlanib maktabimizda tadbir bo\'lib o\'tdi.', '1687944190.jpg', '2023-06-28 06:23:10', '2023-06-28 06:23:10'),
(3, 'E’tirof etilgan migrantlar, Qo‘shtepa kanaliga munosabat va Navoiydagi kambek - hafta dayjesti', 'Prezident o‘zbekistonlik mehnat muhojirlarining qahramonligini e’tirof etdi. Suv mavzusi kun tartibiga chiqmoqda. Yangihayotning Yangi Darxonidagi yangi uyda lift quladi.', '1687944428.jpg', '2023-06-28 06:27:08', '2023-06-28 06:27:08'),
(4, 'Xorijda mehnat qilayotgan o‘zbekistonliklar haqiqiy qahramon - Shavkat Mirziyoyev', 'O‘zLiDePdan prezidentlikka nomzod Shavkat Mirziyoyev qashqadaryolik saylovchilar bilan uchrashuvda xorijdagi yurtdoshlarimizni qo‘llab-quvvatlashga oid rejalarni ma’lum qildi, deya xabar bermoqda Kun.uz muxbiri.', '1687944509.jpg', '2023-06-28 06:28:29', '2023-06-28 06:28:29');

-- --------------------------------------------------------

--
-- Структура таблицы `leaders`
--

CREATE TABLE `leaders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biografiya` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `majburiyatlar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faoliyat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `leaders`
--

INSERT INTO `leaders` (`id`, `title`, `name`, `contact`, `acceptance`, `image`, `biografiya`, `majburiyatlar`, `faoliyat`, `created_at`, `updated_at`) VALUES
(1, '29-maktab Direktori', 'Umarqulov Shuhrat Ermanovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688126664.jpg', 'Tug‘ilgan yili: 17.07.1980  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2001-yil Guliston Davlat Universiteti Jismoniy tarbiya o\'qituvchisi  Ma’lumoti bo‘yicha mutaxassisligi: Jismoniy tarbiya o\'qituvchisi', 'Maktab ustavida belgilangan vakolatlar doirasida ta\'lim muassasasi va xodimlarni boshqarish va qaror qabul qilish; Xodimlar bilan mehnat, fuqarolik va boshqa shartnomalarni tuzish va bekor qilish; Ularning manfaatlarini himoya qilish va bunday uyushmalarga qo\'shilish uchun boshqa birlashmalar rahbarlari bilan birgalikda yaratish; Tashkilot egasi bilan kelishilgan holda belgilanadigan xodimlar uchun mehnat sharoitlarini tashkil etish; Xodimlarni rag\'batlantirish va ularga nisbatan intizomiy choralarni qo\'llash. Jamoa shartnomasida, ichki mehnat qoidalarida, mehnat shartnomalarida belgilangan muddatlarda ish haqini to\'liq to\'lash; Xodimlarni tibbiy va boshqa majburiy sug\'urtalash turlarini amalga oshirish; Belgilangan kvota doirasida nogironlar uchun ish o\'rinlari yaratish; Ish joylarini saqlab qolish bo\'yicha tadbirlarni o\'tkazish; Talabalar, o\'quvchilar va ishchilarning hayoti va sog\'lig\'ini muhofaza qilishni ta\'minlaydigan sharoitlarni yaratish, ularning jarohatlanish holatlarini oldini olish, xodimlarning xavfsizlik texnikasi yo\'riqnomalari, ishlab chiqarish sanitariyasi va gigienasi, yong\'in xavfsizligi qoidalari talablarini bilishi va bajarilishini nazorat qilish.', '1997-2001 yil - Guliston Davlat universiteti talabasi  2001-2002 yil - harbiy xizmatda  2008-2011 yil- Sayxunobod tumani Guliston QKKKhK Jismoni tarbiya o\'quvchisi bo\'lib ishlagan  2011-2016 yil - Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida MMIBD o\'rinbosari.  2016-yil - Sayxunobod tumanidagi 29-umumta\'lim maktab direktori', '2023-06-30 08:37:41', '2023-06-30 09:09:14'),
(3, '29-maktab O\'TIBDO\' direktor o\'rin bosari', 'Umarov Mahsudjon Abduvaidovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688127941.jpg', 'Tug‘ilgan yili: 11.03.1988  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2013-yil Guliston davlat universiteti (kunduzgi)  Ma’lumoti bo‘yicha mutaxassisligi: Tarix fani o\'qituvchisi', 'Treningning uslubiy komponentini ta\'minlash. Bosh o\'qituvchi talabalar uchun o\'quv dasturlarini tuzishi, tasdiqlashi va kerak bo\'lganda tuzatishi shart. Muhim shart - bu ta\'lim muassasasidagi yoki mamlakatdagi vaziyatning o\'zgarishi bilan bog\'liq bo\'lishi mumkin bo\'lgan tuzatishning tezkorligi. Masalan, har qanday favqulodda vaziyat (terrorchilik harakati, tabiiy ofat va boshqalar) bilan bog\'liq qo\'shimcha darsni kiritishda. Pedagoglar jamoasining ishini muvofiqlashtirish. Direktor o\'rinbosari darslarda, to\'garaklar va mashg\'ulotlarda qatnashish huquqiga ega darsdan tashqari mashg\'ulotlar o\'qituvchining ishini nazorat qilish maqsadida. Bundan tashqari, u o\'qituvchilarni o\'z vaqtida attestatsiyadan o\'tkazish va ularning malakasini oshirish uchun ularning malakasini oshirish uchun javobgardir. Rejalashtirish. Gap joriy va istiqbolli rejalar haqida bormoqda, ular direktorning o\'quv va tarbiyaviy ishlar bo\'yicha o\'rinbosari tomonidan tuzilishi va muassasa direktori tomonidan tasdiqlanishi kerak.', '2011-2013 yil - Sayxunobod tumani 17-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituchisi  2013-2013 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituvchisi.  2013-2014 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab amaliyotchi psixolog  2014-2015 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab TIBD.  2015-2018 yil - Sayxunobod tunani 17-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituchisi  2018-2019 yil - Majburiy izjro byurosi Sayxunobod tumani bo\'limi davlat izjrochisi.  2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o\'rta ta\'lim maktabining o\'quv ishlari bo\'yicha direktor o\'rinbosari.', '2023-06-30 09:25:41', '2023-06-30 09:25:41'),
(4, '29-maktab Ma\'naviyat ishlar bo\'yicha direktor o\'rin bosari', 'Mamatqulov Asqarjon Qodirqulovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688128099.jpg', 'Tug‘ilgan yili: 08.10.1971  Tug‘ilgan joyi: Samarqand viloyati, Urgut tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 1997 y. Samarqand davlat arxitektura-qurilish instituti, 2003 y. Toshkent davlat iqtisodiyot universiteti, 2010 y. O‘zbekiston Respublikasi Bank-moliya akademiyasi  Ma’lumoti bo‘yicha mutaxassisligi: iqtisodchi, moliyachi', 'Ma’naviy va tarbiyaviy ishlarni tashkil etish va malakali kadrlar tayyorlashni ta’minlash; · Ma’naviy-ma’rifiy va tarbiya jarayonlariga oid masalalar bo‘yicha mutasaddi yuqori tashkilotlar buyruqlari, farmoyishlari va ko‘rsatmalari, Filial ilmiy kengashi qarorlari va direktor buyruqlari va farmoyishlari bajarilishini tashkil qilish; · Ma’naviy-ma’rifiy va tarbiyaviy jarayonlarni ta’minlaydigan bo‘limlar, dekanatlar ishlarini muvofiqlashtirish va nazorat qilish; · Bo‘limlar, fakultet va kafedralar ma’naviy-ma’rifiy jarayoniga oid ish rejalarni tasdiqlash va ularning bajarilishini nazorat qilish; · Professor-o‘qituvchilar va o‘quv ishiga yordamlashuvchi xodimlar shtatlari bo‘yicha takliflarni ishlab chiqish, kafedralar va bo‘limlarni malakali kadrlar bilan ta’minlash ishlarini tashkil etishda ishtirok etish; · Oliy ta’lim muassasalari bilan ma’naviy-ma’rifiy yo‘nalishda doimiy hamkorlikni amalga oshirish, konferensiya, seminarlarda professor-o‘qituvchilarning faol ishtirokini ta’minlash, mahalliy hokimiyatlar bilan hamkorlikda ishlash; · O‘rnatilgan tartibda Filialning yillik reytingini aniqlash, tahlil qilish, ma’naviy-ma’rifiy faoliyatini takomillashtirishga oid ishlarni amalga oshirish; · Filialni o‘rnatilgan tartibda doimiy ichki attestatsiyadan o‘tkazish, tashqi attestatsiyaga tayyorlash va o‘tkazishda faol ishtirok etish. Yuksak ma’naviy-axloqiy fazilatli, mustaqil fikrlashga qodir bo‘lgan yuqori ma’lumotli, malakali kadrlar tayyorlashni ta’minlash; · Kafedralar faoliyatini muvofiqlashtirish hamda ularni Filialning ma’naviy-ma’rifiy ishlarida faol qatnashishlarini ta’minlash; · Talabalar ongiga milliy g‘oyani singdirish, ma’naviy-axloqiy tarbiya ishlarini olib borishning amaliy, ta’sirchan mexanizmlarini shakllantirish, ma’naviy-ma’rifiy jarayonni boshqarish va izchil takomillashtirib borish;', '1988-1991 yy. - Samarqand viloyati Urgut tumani A.Navoiy nomli jamoa xo‘jaligi ishchisi, hisobchisi  1991-1992 yy. - Samarqand viloyati Loyiha-qidiruv stansiyasi bosh hisobchisi  1992-1998 yy. - “O‘zagrotreydinvest” tashqi iqtisodiy birlashmasi Samarqand bo‘limi bosh hisobchisi  1998-2000 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi bosh hisobchisi  2000-2005 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi direktori o‘rinbosari  2005-2008 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi kompleksini mablag‘ bilan ta’minlash boshqarmasi yetakchi mutaxassisi, bosh mutaxassisi  2008-2014 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi kompleksini mablag‘ bilan ta’minlashni tashkil etish boshqarmasi boshlig‘i o‘rinbosari - Byudjet tashkilotlarini moliyalashtirish bo‘limi boshlig‘i', '2023-06-30 09:28:19', '2023-06-30 09:28:19'),
(5, '29-maktab Psixologi', 'Mamatqulov Asrorjon Qodirqulovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688128247.jpg', 'Tug‘ilgan yili: 23.01.1987  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2005-yil Sirdaryo Pedagogika kasb-hunar kulleji  Ma’lumoti bo‘yicha mutaxassisligi: Musiqa o\'qituvchisi', 'Psixologik xizmat haqida Nizom amaliyotchi psixolog o`z faoliyatida amal qiladigan asosiy hujjat hisoblanadi. Psixologik xizmat haqida Nizom Sobiq Ittifoqda 1989 yilda qabul qilingan. Ushbu Nizomga ko`ra psixologlar haftasiga 41 soat ishlashar edi. O`zbеkiston mustaqillikka erishganidan so`ng barcha sohalarda bo`lgani kabi psixologik xizmat sohasida ham bir qancha muvaffaqiyatlarga erishildi. Ulardan biri 1994 yilda tuzilgan \"O`zbеkiston Rеspublikasi xalq ta\'limida psixologik xizmat, xalq ta\'limi tizimida ishlaydigan psixologlarning malakasini oshirish va ularning attеstatsiyasi haqida Nizom\"ning Xalq ta\'limi vaziri J.G`.Yo`ldoshеv tomonidan tasdiqlanishi (1996 yil 5 aprеl) bo`ldi. 2001 yilda bu Nizomga o`zgartirish kiritildi. Nizomga yеttinchi bo`lim, kasb hunarga yo`naltirish bo`limi ham qo`shildi. Maktablarga maxsus kasb-hunarga yo`naltirish darslari kiritildi. Ushbu darslarni psixologlar o`ta boshlashdi. 2002 yilda Nizomga qayta o`zgartirish kiritildi. Bu o`zgarishning salbiy va ijobiy tomoni bo`ldi. Ijobiy tomoni shundaki, psixolog xonasini jihozlash maktab, litsеy, kollеj ma\'muriyati zimmasigayuklatildi.Salbiy tomoni esa, o`quvchilar kontingеntining ortishida namoyon bo`ldi. Maktabda o`quvchilar soni 1000 nafar va undan ortiq bo`lsa,bir shtat birligi psixolog ajratiladigan bo`ldi. Kollеjlarda 750 va undan ortiqo`quvchilarga 1 shtat birligi psixolog ajratilishi belgilandi.2010 yilda Nizomga qayta o`zgartirish kiritildi.', '2002-2005 yil. - Sirdaryo pedagogika kasb hunar kolleji talabasi  12005-2014 yil. - “Fayozbek Sa’dulla” Fermer xo‘jaligida ishchi  2017 yil. - Sirdaryo viloyati Sayxunobod tumanidagi 29-maktab Musiqa fani o\'quvchisi', '2023-06-30 09:30:47', '2023-06-30 09:30:47'),
(6, '29-maktab CHQBT rahbari', 'Nixalov Qaxramon Abriyevich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688128394.jpg', 'Tug‘ilgan yili: 16.11.1967  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 1994-yil Guliston Davlat Universiteti (Kunduzgi)  Ma’lumoti bo‘yicha mutaxassisligi: Umim texnika fanlari va mexnat fani O\'qitvchisi', 'Ta’lim muassasasi direktori yoshlarning ChQBT va harbiy-vatanparvarlik ruhidagi tarbiyasini puxta tashkillashtirilishi, sifatli o‘tkazilishi, sohaga doir ijobiy natijalarga erishilishi, ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lari, kichik kalibrli va pnevmatik miltiqlar, ularda qo‘llaniladigan patronlar but saqlanishi uchun javob beradi. Ta’lim muassasasi direktori zimmasiga ChQBT sohasida quyidagi majburiyatlar yuklanadi: o‘quv-tarbiyaviy jarayonni o‘z vaqtida rejalashtirilishi, tashkil etilishi hamda ChQBT dasturini to‘liq va sifatli bajarilishini ta’minlash; ChQBT fani uchun xona, ushbu tayyorgarlikning amaliy masalalarini o‘tkazish uchun joy va maydonlar ajratish, shuningdek ushbu fanga oid o‘quv-moddiy bazani mazkur Nizom hamda ChQBT dasturida belgilangan talablarga muvofiq muntazam ravishda takomillashtirib borish choralarini ko‘rish; ta’lim muassasalarida “Shon-sharaf burchagi” yoki “Jasorat muzeyi”ni tashkil etish va ularning jihozlanishini qat’iy nazoratga olish; ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lar (kichik kalibrli va pnevmatik miltiqlar, ularda qo‘llaniladigan patronlar) hisobini tegishli yo‘riqnoma talablariga muvofiq yuritilishi, saqlanishi, ta’mirlanishi va hisobdan chiqarilishini tashkillashtirish, shuningdek har uch oyda bir marta ularning mavjudligi, hisobi to‘g‘ri yuritilayotgani, talab darajasida saqlanayotgani va texnik holatini shaxsan tekshirib borish; ChQBT fani rahbari va o‘qituvchisiga o‘quv-uslubiy jihatdan yordam berish, ushbu fanning boshqa fanlar bilan uzviyligini, shuningdek to‘garak ishlari tashkil etilishi va olib borilishini ta’minlash; ChQBT fani rahbari va o‘qituvchisi tomonidan o‘tkazilayotgan darslar va o‘quvchilarning o‘quv materiallarini o‘zlashtirishi sifatini muntazam tekshirib borish, ular bilan olib borilayotgan ChQBT va harbiy-vatanparvarlik ruhidagi tarbiyaviy ishlarning holatini o‘quv semestri davomida o‘tkaziladigan pedagoglar kengashlarda (yig‘ilish va majlislarda) muhokama etib borish;', '1988-1994 yil Guliston davlat universiteti talabasi.  1994-1997 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida mehnat fani o\'qituvchisi.  1997-2003 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida psixolog.  2003-2011 yil Sayxunobod 29 - umumiy o\'rta ta\'lim maktabida ma\'naviy- marifiy ishlar bo\'yicha direktor o\'rinbosari  2011-2015 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabi direktori  2015-2018 yil Sayxunobod tumani 29-umum talim maktabi mehnat fani o\'quvchisi  2018 yil- sovuq mavsum - Sayxunobod tumani 29-umum ta\'lim maktabida ChQBT rahbari.', '2023-06-30 09:33:14', '2023-06-30 09:33:14'),
(7, '29-maktab Xo\'jalik ishlar bo\'yicha direktor o\'rin bosari', 'Xodjanazarov Xudoynazar Sulaymonovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1688131027.jpg', 'Tug‘ilgan yili: 21.03.1971  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: O\'zLDP azosi   Ma’lumoti: o\'rta maxsus  Tamomlagan: 2000-yil Oqoltin iqtisodiyot biznes kolleji  Ma’lumoti bo‘yicha mutaxassisligi: Xisobchi', '...', '1996-1997 yil - Sayxunobod tumani xalq banki nazoratchisi 1998-2000 yil -.Bo\'ston savxo\'ziida xisobchi  2000-2002 yil - Bo\'ston savxo\'zi oilaviy pudradchi  2002-2008 yil - \"Xo\'janazar bobo \" F/X rahbari  2008-2012 yil - Bo\'ston KVP da qorovul  2012-2015 yil - O\'rikzor MFY raisi.  2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o\'rta ta\'lim maktabida xo\'jalik ishlar bo\'yicha direktor o\'rinbosari', '2023-06-30 10:17:07', '2023-06-30 10:17:07');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_26_115619_create_categories_table', 2),
(8, '2023_06_27_090707_create_sliders_table', 3),
(9, '2023_06_28_043720_create_circles_table', 4),
(10, '2023_06_28_061355_create_images_table', 5),
(13, '2023_06_28_071733_create_statistics_table', 6),
(14, '2023_06_28_082609_create_latestnews_table', 7),
(15, '2023_06_28_093137_create_galleries_table', 8),
(17, '2023_06_28_102712_create_tribes_table', 9),
(18, '2023_06_30_033144_create_footers_table', 10),
(21, '2023_06_30_054502_create_leaders_table', 11),
(22, '2023_07_01_033911_create_contacts_table', 12),
(23, '2023_07_02_122318_create_posts_table', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(4, 'O‘zgaradigan sirtqi ta’lim, faollarning murojaati va ko‘chirilgan chinorlar - hafta dayjesti', 'Benzin ishlab chiqarish kamayib ketdi: importga bog‘liqlik ortmoqda. Yoz chillasidagi daraxt ko‘chirish: Toshkent 17 ta chinoridan ayrildi. O‘zini oqlamayotgan sirtqi ta’lim: u yaqin yillarda yopilishi mumkin. Asosan dam olish kunlaridan iborat bo‘lgan haftaning asosiy voqealari – Kun.uz dayjestida.', '1688353019.jpg', '2023-07-02 10:42:53', '2023-07-02 23:56:59'),
(6, 'O‘zgaradigan sirtqi ta’lim, faollarning murojaati va ko‘chirilgan chinorlar - hafta dayjesti', 'Benzin ishlab chiqarish kamayib ketdi: importga bog‘liqlik ortmoqda. Yoz chillasidagi daraxt ko‘chirish: Toshkent 17 ta chinoridan ayrildi. O‘zini oqlamayotgan sirtqi ta’lim: u yaqin yillarda yopilishi mumkin. Asosan dam olish kunlaridan iborat bo‘lgan haftaning asosiy voqealari – Kun.uz dayjestida.', '1688441341.jpg', '2023-07-04 00:29:01', '2023-07-04 00:29:01');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(5, '1687926696.jpg', '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABI RASMIY SAYTI', '2023-06-28 01:29:33', '2023-06-28 01:31:36'),
(6, '1687926735.jpg', '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABI', '2023-06-28 01:29:44', '2023-06-28 01:32:15'),
(7, '1687926824.jpg', '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABIGA XUSH KELIBSIZ', '2023-06-28 01:33:44', '2023-06-28 01:33:44');

-- --------------------------------------------------------

--
-- Структура таблицы `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `number`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'O\'qituvchilar soni', 36, 'fas fa-chalkboard-teacher fa-3x', '2023-06-28 05:11:57', '2023-06-28 05:18:06'),
(2, 'O\'quvchilar soni', 231, 'fas fa-user-graduate fa-3x', '2023-06-28 05:19:54', '2023-06-28 05:19:54'),
(3, 'Sinflar soni', 11, 'fas fa-users-class fa-3x', '2023-06-28 05:21:17', '2023-06-28 05:21:17'),
(4, 'To\'garaklar soni', 7, 'fas fa-paint-brush fa-3x', '2023-06-28 05:22:47', '2023-06-28 05:22:47');

-- --------------------------------------------------------

--
-- Структура таблицы `tribes`
--

CREATE TABLE `tribes` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tribes`
--

INSERT INTO `tribes` (`id`, `image`, `number`, `title`, `created_at`, `updated_at`) VALUES
(1, '1687949553.jpg', 3, 'Oliy toifali o\'qituvchilar', '2023-06-28 07:52:33', '2023-06-28 07:52:33'),
(2, '1687949617.jpg', 3, '1-toifali o\'qituvchilar', '2023-06-28 07:53:37', '2023-06-28 07:53:37'),
(3, '1687949638.jpg', 7, '2-toifali o\'qituvchilar', '2023-06-28 07:53:58', '2023-06-28 07:53:58'),
(4, '1687949660.jpg', 14, 'Mutaxassis toifali o\'qituvchilar', '2023-06-28 07:54:20', '2023-06-28 08:15:02');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shohruh', 'shohruhermanov5@gmail.com', NULL, '$2y$10$jT2.3Lv4lBc92S02QYr/ieZEa1CTgQ.cN3jitUB3nt14cBHyQUscm', NULL, '2023-06-26 08:36:40', '2023-06-26 08:36:40'),
(2, 'Shamshod', 'ermanovshohruh@gmail.com', NULL, '$2y$10$YSix0NOsGIfRH5Kc2QU7YuLHTpT4E5K8cXecW856hEFPUpJd6eFcy', NULL, '2023-06-26 08:38:50', '2023-06-26 08:38:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `circles`
--
ALTER TABLE `circles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tribes`
--
ALTER TABLE `tribes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `circles`
--
ALTER TABLE `circles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tribes`
--
ALTER TABLE `tribes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
