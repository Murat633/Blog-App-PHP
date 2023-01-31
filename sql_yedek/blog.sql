-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Oca 2023, 10:47:33
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `categoryid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `author`, `date`, `categoryid`, `authorid`, `img`, `views`) VALUES
(23, 'asdaasdas', 'asddasd', 'murat633', '2023-01-25 00:09:40', 26, 1, 'img/91537Adsız tasarım (1).png', 2),
(25, 'Title', 'asda', 'murat633', '2023-01-26 16:35:36', 26, 1, 'img/32697Adsız tasarım.png', 2),
(26, 'Deneme', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur. Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 'murat633', '2023-01-28 13:52:12', 24, 1, 'img/25445Adsız tasarım (2).png', 68),
(27, 'atam ', 'atam', 'murat633', '2023-01-29 00:01:13', 27, 1, 'img/33927Adsız tasarım.png', 3),
(28, 'deneme', 'deneme', 'murat633', '2023-01-29 12:23:08', 24, 1, 'img/95497Adsız tasarım.png', 1),
(29, 'yeni  murat akyol', 'deneme', 'murat633', '2023-01-31 11:39:05', 26, 1, 'img/90443Adsız tasarım.png', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `name`, `icon`) VALUES
(24, 'Javascript', 'fa-brands fa-square-js'),
(26, 'Yeni 2', 'fab fa-instagram'),
(27, 'TARİH', 'fab fa-instagram');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(2) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `keywords` text NOT NULL,
  `logo_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `keywords`, `logo_path`) VALUES
(1, 'deneme', 'Sayfa Açıklamasının Yazılacağı yer', '&quot;blog,blogger,blog ne demek,blogspot,blog nedir,blogger ne demek,blog açmak,blog yazarak para kazanma,blog açmak nedir,blog adları,blog açmak ücretsiz,blog açma siteleri,blog açmak istiyorum,blog açılımı,blog adresi örnekleri,blog blog,blog bet gurus,blog brawl stars,blog başlıkları,blog biletbayi,blog beyza,blog balyaj,blog banner,blog cambly,blog csgo,blog coin mühendisi,blog change nedir,blockchain,blog crazy,blog cambly simple past tense,blog çeşitleri,blog del narco,blog design,blog denetleme ve araştırma,blok ders ne demek,blog da ne yazılır,blok dağıtıcı,blog database example,blog düzenleme,blog examples,blog entry,blog evler,blog entry ne demek,blog examples for students,blog eş anlamlısı,blog edebiyat,blog english,blog fikirleri,blog fikirleri 2022,blok flüt,blog film,blog free template,blog format,blok flüt notaları,blog filizi,blog giriş,blog google,blog gif,blog gezi,blog games,blog giriş cümleleri,blog gelirleri,blog gezi yazıları,blog hesabı,blog hesap isimleri,blog hesabı açma,blog hesabı nedir,blog haber,blog html template free,blog hesap ne demek,blog hesap isimleri ingilizce,blog isimleri,blog isim önerileri,blog ismi bulma,blog ingilizce,blog isimleri ingilizce,blog icon,blog için url,blog ile para kazanmak,blog jobs,blog juca,blog journal,blog jobs remote,blog japan,blog julien delmas,blog jetbrains,blog jair sampaio,blog konuları,blog kurma,blog kelimesinin anlamı,blog kelimesinin anlamı aşağıdakilerden hangisidir,blog konuşarak öğren,blog kur,blog kaynak gösterme,blog kurma siteleri,blog logo,blog lexpera,blog lgs,blog linki nasıl paylaşılır,blog login,blog luís pablo,blog lifestyle,blog layout,blog mango,blog meaning,blog milliyet,blog makale,blog maçları,blog mu vlog mu,blog makale örnekleri,blog milliyet giriş,blog nasıl yazılır,blog nasıl açılır,blog ne demek ingilizce,blog ne işe yarar,blog nedir nasıl yazılır,blog nedir edebiyat,blog oluşturma,blog oku,blog okuma siteleri,blog osmanlı garage,blog oluşturma nedir,blog okumak,blog oluşturmak,blog oluşturma ücretsiz,blog post,blog poster,blog para kazanma,blog peplante,blog post ne demek,blog post examples,blog pp,blog playstation,blog quotes,blog que es,blog questions,blog quiz,blog quora,blog quality checker,blog questions for students,blog angle,blog resmi,blog reklamları,blog reklamları nedir,blog reklam geliri,blog r10,blog read,blog radikal,blog reklamı nasıl yapılır,blog sayfası,blog sayfalarının özellikleri,blog sayfası açma,blog sitesi nedir,blog sayfa isimleri,blog site,blog sitesinden nasıl para kazanılır,blog template,blog türleri,blog türkçesi,blog tv,blog template free,blog tasarımı,blog tiyatro terimi midir,blog temaları,blog uygulamaları,blog url örnekleri,blog url si nedir,blog url oluşturma,blog url si nasıl yapılır,blog uygulama sistemi,blog unity,blog ve vlog nedir,blog ve vlog arasındaki fark,blog vikipedi,blog ve blogger ne demek,blog vari,blog viajes,blog viaggi,blog vs website,blog website,blog writing,blog web sitesi,blog website template,blog writing examples,blog wordpress,blog web sitesi yapımı,blog website template free,blog xcaret,blog xml,blog xyz,blog xd template,blog xiaomi,blog xero,blog xamarin,blog xml templates,blog yazmak,blog yazarı ne demek,blog yazısı,blog yazıları,blog yazarlığı maaş,blog yazmak nedir,blog yazarı nasıl olunur,blog zincir,blok zinciri nedir,blok zar tesbih,blokzincir,blok zar,blok zar nedir,blok zincir örnekleri,blok zinciri nasıl yazılır,blogger giriş,blogger nedir,blogger isimleri,blogger para kazanma,blogger nasıl olunur,blogger tema,blogger aç,blogger açmak,blogger anneler,blogger alan adı yönlendirme,blogger adres örnekleri,blogger adsense,blogger app,blogger api,blogger blog açma,blogger blog,blogger blogları,blogger blog silme,blogger bot,blogger buzz,blogger boş tema,blogger biyografileri,blogger code snippet,blogger cemre demirel,blogger.com giriş,blogger.com nedir,blogger.com ücretli mi,blogger.com nasıl kullanılır,blogger.com dan para kazanma,blogger domain ekleme,blogger dersleri,blogger domain yönlendirme,blogger dan para kazanmak,blogger dan nasıl para kazanılır,blogger düzenleme,blogger destek,blogger dns,blogger ekşi,blogger eklentileri,blogger eğitimi,blogger e ticaret teması,blogger etiket ekleme,blogger etiketleri,blogger evleri,blogger efektleri,blogger free theme,blogger film teması,blogger fikirleri,blogger free templates 2022,blogger free template,blogger font,blogger fotoğrafları,blogger fotoğraf makinesi,blogger google,blogger giriş yapamıyorum,blogger gallery template,blogger game template,blogger gizem gündüz,blogger google account,blogger hesap açma,blogger hesap silme,blogger hashtags,blogger haber teması,blogger hesap isimleri,blogger html kod ekleme,blogger html kodları,blogger hesapları,blogger influencer ne demek,blogger indir,blogger iş ilanları,blogger iletişim formu,blogger isim önerileri,blogger indir pc,blogger instagram,blogger jobs,blogger job description,blogger jobs remote,blogger jeans,blogger jobs online,blogger jobs uk,blogger job ', 'img/1678960kisspng-blogger-computer-icons-clip-art-blog-icon-5b15f1d750cec4.322318951528164823331.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_date` datetime NOT NULL DEFAULT current_timestamp(),
  `authority` int(2) NOT NULL DEFAULT 1,
  `isBanned` tinyint(1) NOT NULL DEFAULT 0,
  `gsm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `username`, `password`, `first_date`, `authority`, `isBanned`, `gsm`) VALUES
(1, 'Murat', 'Akyol', 'muratakyoll533@gmail.com', 'murat633', 'e1db8837a00911508b23ca1cac80aa53', '2023-01-16 13:59:57', 1, 0, '+905528971663');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `authorid` (`authorid`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`),
  ADD KEY `id_5` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
