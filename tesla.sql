-- Baza danych: `tesla`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(3) unsigned NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'wipek', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pubdate` date NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `modified_by` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `logo` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL,
  `parent_page` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL,
  `event_year` int(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=DYNAMIC;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `title`, `pubdate`, `body`, `created`, `modified`, `created_by`, `modified_by`, `views`, `logo`, `parent_page`, `event_year`) VALUES
(2, 'Narodziny', '2015-03-15', '<p><img alt="" src="assets/images/biografia/house.jpg" style="margin-right: 10px; float: left; width: 300px; height: 225px;" />Nikola Tesla urodził się w serbskiej rodzinie we wsi Smiljan w Chorwacji, &oacute;wcześnie należącej do monarchii austriackiej. Był synem prawosławnego prezbitera Milutina Tesli i Georginy Mandić (nazywanej Dziuką). Jego ojciec chciał, aby r&oacute;wnież Nikola został kapłanem, jednak na skutek nacisku miejscowego nauczyciela, kt&oacute;ry wystarał się o stypendium dla Nikoli.', '2015-03-15 12:01:49', '2015-03-15 13:59:20', 'wipek', 'wipek', 0, 'assets/articles_logos/130fac53a21c12d8b87527359a2ac2f7.jpg', 'biografia', 1856),
(3, 'Studia', '2015-03-15', '<p><img alt="" src="assets/images/biografia/tesla_you.jpg" style="margin-right: 10px; float: left; width: 300px; height: 339px;" />Został on ostatecznie wysłany na studia inżynierskie na politechnikę w Grazu. Na uczelni zwr&oacute;cił na siebie uwagę profesora elektrotechniki, kt&oacute;ry pom&oacute;gł mu podjąć pracę w urzędzie telegraficznym w Budapeszcie. Prawdopodobnie tam Tesla wpadł na pomysł konstrukcji obrotowego silnika na prąd przemienny, kt&oacute;ry m&oacute;głby być też prądnicą. Gdy urząd telegraficzny został sprzedany, Tesla pojechał do Paryża, gdzie podjął pracę w Continental Edison Company, francuskiej firmie produkującej prądnice, silniki i oświetlenie w oparciu o patenty Thomasa A. Edisona.', '2015-03-15 12:06:39', '2015-03-15 13:58:53', 'wipek', 'wipek', 0, 'assets/articles_logos/28f0e93b060b139935eb1c37e7f512f6.jpg', 'biografia', 1875),
(4, 'Przybycie do Ameryki', '2015-03-15', '<p><img alt="" src="assets/images/biografia/hamerica.png" style="margin-right: 10px; float: left; width: 300px; height: 283px;" />Początek pracy w USA. Podczas pierwszego spotkania w laboratorium Edisona, Tesla był pod wrażeniem wielkiego wynalazcy, czego nie można było powiedzieć o gospodarzu. Mimo to, dzięki swoim dokonaniom w Europie i dobrym rekomendacjom dostał posadę w laboratorium Edisona. Nie była to dla Tesli wymarzona praca, lecz w ciągu kilku tygodni nadarzyła się okazja i m&oacute;gł zaprezentować swoje niesamowite umiejętności. Dostał awans i otrzymał od Edisona zlecenie, aby doprowadził do poprawy wydajności generowania prądu w elektrowniach Thomasa A. Edisona.', '2015-03-15 12:08:34', '2015-03-15 13:58:30', 'wipek', 'wipek', 0, 'assets/articles_logos/f9186ddc74464df50af8f8f0b4336dd5.png', 'biografia', 1884),
(5, 'Utworzenie spółki', '2015-03-15', '<p><img alt="" src="assets/images/biografia/spolka.gif" style="margin-right: 10px; float: left; width: 300px; height: 199px;" />Edison z niewyjaśnionych do dzisiaj przyczyn nie akceptował prądu przemiennego i nie zapłaciwszy Tesli należnego wynagrodzenia, wyrzucił go z pracy. Przez następny rok, od wiosny 1886 r. do wiosny 1887 r. Tesla musiał się podejmować rozmaitych prac, aby mieć za co przeżyć. Gdy pracował jako kopacz row&oacute;w, udało mu się nawiązać kontakt z właścicielami Western Union Telegraph Company, kt&oacute;rzy pomogli mu założyć Tesla Electric Light Company.', '2015-03-15 12:09:35', '2015-03-15 13:58:05', 'wipek', 'wipek', 0, 'assets/articles_logos/6b6461a942e1fd6d8add08dff8954df5.gif', 'biografia', 1886),
(6, 'Wojna o prąd', '2015-03-15', '<p><img alt="" src="assets/images/biografia/prad.png" style="margin-right: 10px; float: left; width: 300px; height: 221px;" />Zaskoczony sukcesem Tesli, Edison rozpoczął kampanię na temat rzekomego niebezpieczeństwa stosowania prądu przemiennego. Jednakże fakty m&oacute;wiły same za siebie i instalacje Tesli zaczęły powoli przejmować rynek produkcji i przesyłu prądu elektrycznego w USA, aż w końcu władze General Electric wymusiły na Tesli sprzedaż patent&oacute;w na urządzenia prądu przemiennego, a na Edisonie przejście wszystkich jego elektrowni na nowy system. Ostateczny kres elektrowni prądu stałego zapoczątkował kolejny wynalazek Tesli &ndash; turbina wodna, kt&oacute;ra generowała prąd przemienny w oparciu o energię przepływu wody w rzekach.', '2015-03-15 12:10:37', '2015-03-15 13:57:26', 'wipek', 'wipek', 0, 'assets/articles_logos/a7833b069a699bd944010182649b11c0.png', 'biografia', 1887),
(7, 'Eksperymenty w Colorado', '2015-03-15', '<p><img alt="" src="assets/images/biografia/exper.jpg" style="margin-right: 10px; float: left; width: 300px; height: 241px;" />Po przygodach z Edisonem, Tesla przenosi się do Colorado Springs i zakłada laboratorium. Tesla studiuje naturalne wyładowania i przeprowadza szereg eksperyment&oacute;w. W swym dzienniku opisuje wytwarzanie ładunk&oacute;w przekraczających mocą wyładowania naturalne, 40 metrowe łuki energii, wystrzeliwujące ze szczytu budynku, o napięciu milion&oacute;w volt. Przesyła energię przez atmosferę oraz samą glebę umieszczając w żar&oacute;wki w gołej ziemi bez kabli i rozświetlając je na odległość wykorzystując ziemię jako przekaźnik energii. Czas spędzony w Colorado Springs, najprawdopodobniej zrodził w umyśle Tesli znacznie bardziej ambitne plany, kt&oacute;re zamierzał wprowadzić w życie w Nowym Yorku.', '2015-03-15 12:12:44', '2015-03-15 13:56:17', 'wipek', 'wipek', 0, 'assets/articles_logos/ccd6bb03fb3e758d1e255d7ce753ef02.jpg', 'biografia', 1899),
(8, 'Śmierć', '2015-03-15', '<img alt="" src="assets/images/biografia/dead.jpg" style="margin-right: 10px; float: left; width: 300px; height: 294px;" />Nikola Tesla zmarł 7 stycznia 1943 r. o 22:30 w prawosławne Boże Narodzenie<br />\r\nw apartamencie nr 3327 hotelu New Yorker w Nowym Jorku. Przyczyną śmierci był<br />\r\nzakrzep tętnicy wieńcowej. Jego zwłoki zostały znalezione przez służącą Alice Monaghan,<br />\r\nkt&oacute;ra weszła do pokoju naukowca, ignorując wywieszkę na drzwiach m&oacute;wiącą &quot;proszę nie przeszkadzać&quot;,<br />\r\npowieszoną przez Teslę dwa dni przed śmiercią.', '2015-03-15 12:13:12', '2015-03-15 14:03:54', 'wipek', 'wipek', 0, 'assets/articles_logos/c8f87e3c3b75ce7705011f7774a23a04.jpg', 'biografia', 1943),
(9, 'Jednostka indukcji magnetycznej', '2015-03-15', '<p><img alt="" src="assets/images/wynalazki/jednostka.png" style="margin-right: 10px; float: left; width: 300px; height: 294px;" /> <span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">Tesla (T) &ndash; jednostka indukcji magnetycznej w układzie SI. 1 tesla może być interpretowana jako taka wartość indukcji magnetycznej, kt&oacute;ra na ładunek 1 C, poruszający się z prędkością 1 m/s prostopadle do linii pola magnetycznego, działa z siłą Lorentza o wartości r&oacute;wnej 1 N.&nbsp;</span><br style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;" />\r\n<span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">Nazwa jednostki pochodzi od nazwiska Nikoli Tesli.</span></p>', '2015-03-15 14:50:07', NULL, 'wipek', NULL, 0, 'assets/articles_logos/e71128e5db39776edd879cea41248c85.png', 'wynalazki', 1882),
(14, 'Eksperymenty </br>z  promieniami Roentgena', '2015-03-15', '<img alt="" src="assets/images/wynalazki/roentgen.png" style="margin-right: 10px; float: left; width: 300px; height: 294px;" /> <span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">W 1887 Tesla pracował nad promieniowaniem, które lata później nazwano promieniowaniem x. Wykonał pierwsze zdjęcie kości swojej dłoni i wysłał je do Wilhelma Roentgena... Teoretyczny wkład w poznanie właściwości fal niezbędnych do określenia położenia i prędkości ruchomych obiektów, zostały 5 lat później wykorzystane przez Taylora i Younga - twórców radaru. Zbudował zamknięte szklane kolby z gazem, który emitował światło gdy przechodziła przez nie energia, co odkryli później twórcy świetlówek. Opisał podstawy uzyskiwania niskich oporów w niskich temperaturach 11 lat przed Noblem dla Onnesa za nadprzewodnictwo.</span>', '2015-03-15 15:13:01', NULL, 'wipek', NULL, 0, 'assets/articles_logos/d608a1ec383f7469b782686ab4d90bd2.png', 'wynalazki', 1887),
(11, 'Cewka Tesli', '2015-03-15', '<p><img alt="" src="assets/images/wynalazki/cewka.jpg" style="margin-right: 10px; float: left; width: 300px; height: 294px;" /> <span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">Transformator Tesli jest dziełem rąk wielkiego (aczkolwiek zapomnianego) serbskiego naukowca Nikoli Tesli. Urządzenie to powstało ponad 100 lat temu w labolatorium Tesli w Colorado Springs. Transformator Tesli jest transformatorem bezrdzeniowym (tzn. o rdzeniu powietrznym), działającym na zasadzie rezonansu elektromagnetycznego. Zasada jego działania jest podobna do zasady działania radia. Urządzienie to składa się z dw&oacute;ch obwod&oacute;w LC (mających pojemość i indukcyjność). Wartość pojemności i indukcyjności wyznacza częstotliwość pracy. Jeden obw&oacute;d LC (pierwotny) wytwarza i emituje pole elektromagnetyczne o określonej częstotliwości, a drugi (wt&oacute;rny obw&oacute;d LC), oscylujący z taką samą częstotliwością, pochłania to pole (tzn. tą energię wypromieniowywaną przez układ pierwotny) zamieniając je z powrotem na prąd elektryczny.</span></p>', '2015-03-15 14:52:05', NULL, 'wipek', NULL, 0, 'assets/articles_logos/de667787d64dadb88c0dce2c78c49a51.jpg', 'wynalazki', 1891),
(12, 'Wieża Tesli', '2015-03-15', '<p><img alt="" src="assets/images/wynalazki/tower.png" style="margin-right: 10px; float: left; width: 300px; height: 294px;" /> <span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">Wieża Wardenclyffe (Long Island, Nowy York), to prawdopodobnie najbardziej znany przykład wizji Tesli, kt&oacute;rej prawdziwe przeznaczenie pozostaje nie do końca jasne. Oficjalnie wieża miała pełnić funkcję nadajnika fal radiowych, do bezprzewodowego przesyłu sygnał&oacute;w, głosu i zdjęć. Gł&oacute;wny inwestor Tesli - J.P. Morgan (zgadza się, TEN J.P. Morgan), wyłożył wraz z innymi 150 tysięcy dolar&oacute;w na jej budowę (dzisiejsze 3 miliony), gdy Tesla przekonał go o możliwościach przesyłu dowolnej informacji na odległość, bez użycia kabli. Tesla wiedział, że dźwięk i obraz to po prostu informacja, kt&oacute;rą można zamienić na sygnał i nadać. Eksperymenty te wykonywał już w laboratorium, lecz wieża miała umożliwiać transfer między-kontynentalny.</span></p>', '2015-03-15 14:52:49', NULL, 'wipek', NULL, 0, 'assets/articles_logos/b05e2065961ce78c1f89b8b01c01189c.png', 'wynalazki', 1901),
(13, 'Turbina Tesli', '2015-03-15', '<p><img alt="" src="assets/images/wynalazki/turbina.png" style="margin-right: 10px; float: left; width: 300px; height: 294px;" /> <span style="color: rgb(0, 0, 0); font-family: Dosis, sans-serif; font-size: medium; line-height: normal;">Turbina Tesli (turbina talerzowa) - szczeg&oacute;lny przypadek turbiny, konstrukcji Nikoli Tesli, wykorzystujący zjawisko adhezji do wprowadzania w ruch obrotowy r&oacute;wnolegle, w niewielkich - rzędu 0,5 mm - odstępach ustawionych talerzy zamocowanych na osi. Gaz lub ciecz jest wprowadzany przez dyszę ustawioną w płaszczyźnie obrotu talerzy pomiędzy talerze. Talerze mają wok&oacute;ł osi otwory pozwalające na wypływ gazu lub cieczy. Obieg czynnika jest spiralny, zawężający się w kierunku środka. Turbina dzięki prostej budowie i wykorzystaniu adhezji warstwy przyściennej, a nie sił tarcia, pozwala na osiągnięcie wysokiej sprawności przy niewielkim ciężarze.</span></p>', '2015-03-15 14:53:33', NULL, 'wipek', NULL, 0, 'assets/articles_logos/d93f8b1097ab822b4a4fd92a1f86221a.png', 'wynalazki', 1913);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('22b201be41fbd49e1ba7ebd975d85b66', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', 1427645935, ''),
('2a82d37ebdc66018ae0d8999e166360d', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433691263, ''),
('31e14f354211851c8483bf7d1f6fd84e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 1471285243, ''),
('76d9a8dea99c7f578125f042e4f1671b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36', 1476392980, ''),
('7d7b8f466a8ff755f5a911739e835d91', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', 1427649663, 'a:3:{s:9:"user_data";s:0:"";s:5:"login";s:5:"wipek";s:8:"loggedin";b:1;}'),
('ac14d8a069db777df622b0616f9c1da1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433690301, ''),
('ac8a524690cddc90faa11e4a918847f4', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433688851, ''),
('b9ec9859c633b19205e07928b37024c7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433691263, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cmsconfig`
--

CREATE TABLE IF NOT EXISTS `cmsconfig` (
`id` int(2) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `favicon_url` varchar(100) DEFAULT NULL,
  `logo_url` varchar(100) DEFAULT NULL,
  `fb_link` varchar(200) NOT NULL DEFAULT '',
  `about` text,
  `description` varchar(200) NOT NULL DEFAULT '',
  `keywords` varchar(200) NOT NULL DEFAULT '',
  `cms_email` varchar(100) NOT NULL,
  `cms_email_pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `cmsconfig`
--

INSERT INTO `cmsconfig` (`id`, `name`, `favicon_url`, `logo_url`, `fb_link`, `about`, `description`, `keywords`, `cms_email`, `cms_email_pass`) VALUES
(2, 'Nikola Tesla', NULL, 'assets/logo/tesla_logo.png', 'https://www.facebook.com/pages/Nikola-Tesla/1484336791849809?fref=ts', 'Strona stworzona na potrzeby: XIII Powiatowego konkursu szkół ponadgimnazjalnych powiatu Skarżysko Kamienna', 'Strona poświęcona Nikoli Tesla. CMS by Krzysztof Adamczyk', 'Nikola, Tesla, CMS, wynalazki, biografia, Skarżysko Kamienna, ZSE Skarżysko, WiPeK, Krzysztof Adamczyk', 'dddddd', 'dddddd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) unsigned NOT NULL,
  `img_title` varchar(105) NOT NULL,
  `img_describe` text,
  `img_who_add` varchar(50) NOT NULL,
  `add_date` datetime NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `thumb_url` varchar(200) NOT NULL,
  `catalog` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `gallery`
--

INSERT INTO `gallery` (`id`, `img_title`, `img_describe`, `img_who_add`, `add_date`, `img_url`, `thumb_url`, `catalog`) VALUES
(7, 'ergaegea', '0', 'wipek', '2015-03-13 15:56:46', 'assets/gallery/c47ed0d13e894b23ac42f62334d412c5.jpg', 'assets/gallery/thumbs/c47ed0d13e894b23ac42f62334d412c5.jpg', NULL),
(8, 'besbegb', '0', 'wipek', '2015-03-13 15:56:52', 'assets/gallery/5987d7f8f2e77aa4c249bf3d45031e15.jpg', 'assets/gallery/thumbs/5987d7f8f2e77aa4c249bf3d45031e15.jpg', NULL),
(9, 'drak', '0', 'wipek', '2015-03-14 13:54:06', 'assets/gallery/5b35c597d5bee8f4e72bbd3878fd81e0.jpg', 'assets/gallery/thumbs/5b35c597d5bee8f4e72bbd3878fd81e0.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
`id` int(2) unsigned NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `quotes`
--

INSERT INTO `quotes` (`id`, `quote`) VALUES
(1, 'Człowiek nie jest w Nieskończoności jedyną istotą obdarzoną rozumem.'),
(2, 'Energia elektryczna jest wszechobecna w nieograniczonych ilościach i może zasilać maszynerię świata bez potrzeby węgla, gazu czy innych paliw.'),
(3, 'Musimy nauczyć się uzyskiwać potrzebną nam energię bez zużywania surowców.'),
(5, 'Ujarzmiłem promienie kosmiczne i sprawiłem, by służyły jako napęd (…). Ciężko pracowałem nad tym przez ponad 25 lat, a dziś mogę stwierdzić, że się udało');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `support`
--

CREATE TABLE IF NOT EXISTS `support` (
`id` int(11) unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'new',
  `send_date` datetime NOT NULL,
  `answer_date` datetime DEFAULT NULL,
  `who_answer` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `answer_body` text CHARACTER SET utf8
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=DYNAMIC;

--
-- Zrzut danych tabeli `support`
--

INSERT INTO `support` (`id`, `email`, `body`, `status`, `send_date`, `answer_date`, `who_answer`, `answer_body`) VALUES
(1, 'kris95@onet.pl', 'rgtsgrbtrbhrtbrthbrb\r\nrthbrthbrt\r\nhrthgrtgbrthb\r\nrthrthbrthbrthrth', 'new', '2015-03-29 20:53:14', NULL, NULL, NULL),
(2, 'kris95@onet.pl', 'regbtbtre\r\nrthbrthrthtr\r\ntrhrthtr\r\nhrthrthrth', 'new', '2015-03-29 20:53:51', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_browsers`
--

CREATE TABLE IF NOT EXISTS `user_browsers` (
`id` int(11) unsigned NOT NULL,
  `opera` bigint(11) NOT NULL DEFAULT '0',
  `flock` bigint(11) NOT NULL DEFAULT '0',
  `chrome` bigint(11) NOT NULL DEFAULT '0',
  `internet_explorer` bigint(11) NOT NULL DEFAULT '0',
  `shiira` bigint(11) NOT NULL DEFAULT '0',
  `firefox` bigint(11) NOT NULL DEFAULT '0',
  `chimera` bigint(11) NOT NULL DEFAULT '0',
  `phoenix` bigint(11) NOT NULL DEFAULT '0',
  `firebird` bigint(11) NOT NULL DEFAULT '0',
  `camino` bigint(11) NOT NULL DEFAULT '0',
  `netscape` bigint(11) NOT NULL DEFAULT '0',
  `omniweb` bigint(11) NOT NULL DEFAULT '0',
  `safari` bigint(11) NOT NULL DEFAULT '0',
  `mozilla` bigint(11) NOT NULL DEFAULT '0',
  `konqueror` bigint(11) NOT NULL DEFAULT '0',
  `icab` bigint(11) NOT NULL DEFAULT '0',
  `lynx` bigint(11) NOT NULL DEFAULT '0',
  `links` bigint(11) NOT NULL DEFAULT '0',
  `hotjava` bigint(11) NOT NULL DEFAULT '0',
  `amaya` bigint(11) NOT NULL DEFAULT '0',
  `ibrowse` bigint(11) NOT NULL DEFAULT '0',
  `maxthon` bigint(11) NOT NULL DEFAULT '0',
  `ubuntu_web_browser` bigint(11) NOT NULL DEFAULT '0',
  `mobile_browser` bigint(11) NOT NULL DEFAULT '0',
  `other_browser` bigint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user_browsers`
--

INSERT INTO `user_browsers` (`id`, `opera`, `flock`, `chrome`, `internet_explorer`, `shiira`, `firefox`, `chimera`, `phoenix`, `firebird`, `camino`, `netscape`, `omniweb`, `safari`, `mozilla`, `konqueror`, `icab`, `lynx`, `links`, `hotjava`, `amaya`, `ibrowse`, `maxthon`, `ubuntu_web_browser`, `mobile_browser`, `other_browser`) VALUES
(1, 1, 1, 1228, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_systems`
--

CREATE TABLE IF NOT EXISTS `user_systems` (
`id` int(11) unsigned NOT NULL,
  `windows_8_1` bigint(11) NOT NULL DEFAULT '0',
  `windows_8` bigint(11) NOT NULL DEFAULT '0',
  `windows_7` bigint(11) NOT NULL DEFAULT '0',
  `windows_vista` bigint(11) NOT NULL DEFAULT '0',
  `windows_2003` bigint(11) NOT NULL DEFAULT '0',
  `windows_xp` bigint(11) NOT NULL DEFAULT '0',
  `windows_2000` bigint(11) NOT NULL DEFAULT '0',
  `windows_nt_4_0` bigint(11) NOT NULL DEFAULT '0',
  `windows_nt` bigint(11) NOT NULL DEFAULT '0',
  `windows_98` bigint(11) NOT NULL DEFAULT '0',
  `windows_95` bigint(11) NOT NULL DEFAULT '0',
  `windows_phone` bigint(11) NOT NULL DEFAULT '0',
  `unknown_windows` bigint(11) NOT NULL DEFAULT '0',
  `android` bigint(11) NOT NULL DEFAULT '0',
  `blackberry` bigint(11) NOT NULL DEFAULT '0',
  `ios` bigint(11) NOT NULL DEFAULT '0',
  `mac_osx` bigint(11) NOT NULL DEFAULT '0',
  `power_pc_mac` bigint(11) NOT NULL DEFAULT '0',
  `freebsd` bigint(11) NOT NULL DEFAULT '0',
  `macintosh` bigint(11) NOT NULL DEFAULT '0',
  `linux` bigint(11) NOT NULL DEFAULT '0',
  `debian` bigint(11) NOT NULL DEFAULT '0',
  `sun_solaris` bigint(11) NOT NULL DEFAULT '0',
  `beos` bigint(11) NOT NULL DEFAULT '0',
  `apachebench` bigint(11) NOT NULL DEFAULT '0',
  `aix` bigint(11) NOT NULL DEFAULT '0',
  `irix` bigint(11) NOT NULL DEFAULT '0',
  `decosf` bigint(11) NOT NULL DEFAULT '0',
  `hp_ux` bigint(11) NOT NULL DEFAULT '0',
  `netbsd` bigint(11) NOT NULL DEFAULT '0',
  `bsdi` bigint(11) NOT NULL DEFAULT '0',
  `openbsd` bigint(11) NOT NULL DEFAULT '0',
  `gnu_linux` bigint(11) NOT NULL DEFAULT '0',
  `unknown_unix` bigint(11) NOT NULL DEFAULT '0',
  `symbian_os` bigint(11) NOT NULL DEFAULT '0',
  `other_system` bigint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user_systems`
--

INSERT INTO `user_systems` (`id`, `windows_8_1`, `windows_8`, `windows_7`, `windows_vista`, `windows_2003`, `windows_xp`, `windows_2000`, `windows_nt_4_0`, `windows_nt`, `windows_98`, `windows_95`, `windows_phone`, `unknown_windows`, `android`, `blackberry`, `ios`, `mac_osx`, `power_pc_mac`, `freebsd`, `macintosh`, `linux`, `debian`, `sun_solaris`, `beos`, `apachebench`, `aix`, `irix`, `decosf`, `hp_ux`, `netbsd`, `bsdi`, `openbsd`, `gnu_linux`, `unknown_unix`, `symbian_os`, `other_system`) VALUES
(1, 1192, 1, 32, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `cmsconfig`
--
ALTER TABLE `cmsconfig`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_browsers`
--
ALTER TABLE `user_browsers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_systems`
--
ALTER TABLE `user_systems`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT dla tabeli `cmsconfig`
--
ALTER TABLE `cmsconfig`
MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `quotes`
--
ALTER TABLE `quotes`
MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `support`
--
ALTER TABLE `support`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `user_browsers`
--
ALTER TABLE `user_browsers`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `user_systems`
--
ALTER TABLE `user_systems`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;