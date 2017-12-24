# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: mmop-db.cs9tngvh7qnb.us-east-2.rds.amazonaws.com (MySQL 5.6.35-log)
# Database: super_web_project
# Generation Time: 2017-12-24 23:05:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Admin`;

CREATE TABLE `Admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_surname` varchar(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_fathname` varchar(100) NOT NULL,
  `a_datebirth` date NOT NULL,
  `a_position` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;

INSERT INTO `Admin` (`a_id`, `a_surname`, `a_name`, `a_fathname`, `a_datebirth`, `a_position`, `a_email`, `a_password`)
VALUES
	(1,'Кравчук','Євген','Петрович','1975-04-06','minister','sofy48@mail.ru','d,>`E!uA#6m;u'),
	(2,'Захарчук',' Bіктор','Іванович','1991-05-09','minister','bktor.bodnarenko@sereda.org.ua','lw:z.7_+vTZVSj|*'),
	(3,'Шинкаренко','Йосип','Євгенійович','1960-11-18','controller','oleksi.brovarcuk@mail.ru',']A:u~~OQ'),
	(4,'Василенко','Анатолій','Федорович','1976-04-16','controller','dmitrenko.boris@gmail.com','~41yO\"ln;l|'),
	(5,'Шевчук','Тарас','Євгенович','1970-11-25','controller','elisenko@romancenko.com.ua','GJwFGH&ZvyQsrS_h'),
	(6,'Іванченко','Юрій','Борисович','1980-06-28','dean','romancenko.pavlo@romancenko.net','m:NB7=7HeCp2Ycl'),
	(7,'Васильчук','Олександр','Федорович','1997-06-08','minister','sinkarenko.olena@lisenko.com','MWz5)%=7'),
	(8,'Дмитренко','Данило','Олексійович','1978-04-13','controller','byceslav.sinkarenko@gmail.com','p:O43y?pD?o;qYjT'),
	(9,'Крамарчук','Федір','Євгенович','1962-06-28','minister','kramarcuk.lydmila@kravcuk.com','R1S>0GDH)}@[Y=i5W'),
	(10,'Лисенко','Кирил','Євгенійович','1981-05-24','minister','petrenko.yly@vasilcuk.ua','{{wU$5V{=LLungRA'),
	(11,'Броварчук','Віталій','Олександрович','1988-11-01','dean','fedr.vasilv@vasilv.net.ua','0O)mY[m?.6R[SI'),
	(12,'Мірошниченко',' Bалерій','Володимирович','1959-06-09','controller','qpetrenko@ukr.net','3K+cqRnF'),
	(13,'Пономаренко','Ігор','Борисович','1995-12-14','minister','brovarenko.kra@gmail.com','$z!i({MQ('),
	(14,'Микитюк','Юрій','Михайлович','1962-09-24','dean','ruslan.kravcuk@vasilv.net.ua','.oKb=$l{ex4Ih'),
	(15,'Пономарчук','Максим','Тарасович','1986-01-05','controller','andri99@melnicenko.net.ua','4t)SCTlfM?h5'),
	(16,'Шинкаренко','Максим','Сергійович','1981-11-26','dean','sergnko.dary@petrenko.com','JXp=*)C`'),
	(17,'Броварчук','Юрій','Євгенійович','1977-06-26','dean','gnatyk.oleksandra@kramarenko.net','R1POE--8qL'),
	(18,'Петренко','Антон','Володимирович','1992-12-26','controller','mrosnicenko.sergi@gmail.com','I`847dyIe$ON@_KCUfCI'),
	(19,'Лисенко','Артур','Тарасович','1959-06-02','minister','mrosnicenko.lydmila@gnatyk.com','NA#*Diu:&MjU2x_c8U'),
	(20,'Пономаренко','Кирил','Володимирович','1982-09-24','dean','romancenko.natasa@example.org','U/RGHVFrNG}'),
	(21,'Боднаренко','Борис','Сергійович','1981-09-30','minister','pantonenko@example.com','=A{GB~TEw^'),
	(22,'Захарчук','Данило','Олександрович','1982-08-06','minister','vra.vancenko@example.net','),ET#z.8(8yQ'),
	(23,'Пономаренко','Михайло','Янович','1988-04-02','minister','tetyna18@example.com','L.~*k%>B'),
	(24,'Сергієнко','Артур','Миколайович','1990-01-20','controller','tetyna.sergnko@example.net','bswF@:6sV9iSz72D'),
	(25,'Шевченко','Георгій','Янович','1980-11-02','minister','nvasilv@example.net','#ib;>kXwO6}4'),
	(26,'Романченко','Григорій','Олександрович','1981-08-28','minister','sereda.kostyntin@example.org','Jd<JwUM+L;g'),
	(27,'Лисенко','Тимофій','Янович','1997-10-30','dean','anna79@example.com','_A.rs3>s<Rs|<h>'),
	(28,'Крамаренко','Болеслав','Сергійович','1973-07-26','minister','olga19@example.org','?oUf+y>q9d4'),
	(29,'Шинкаренко','Тарас','Янович','1985-10-02','controller','tarasuk.gor@example.com','j7,~~H/R~**Q(_;SS'),
	(30,'Пономаренко','Роман','Валентинович','1973-04-09','minister','ktarasuk@example.org','w`0_iU@V)D)Y(L0bJ}>'),
	(31,'Васильчук','Данило','Федорович','1988-12-13','dean','sergnko.gor@example.org','@`?*Rop^B'),
	(32,'Кравченко','Ігор','Анатолійович','1965-05-11','controller','valery.sergnko@example.net','&F;TgP'),
	(33,'Василенко','Ярослав','Янович','1993-01-07','minister','ozakarcuk@example.net','j,0r&l'),
	(34,'Сергієнко','Максим','Янович','1958-07-18','dean','katerina.antonenko@example.net','%mZa`\"jQ!r<e#@nc\"'),
	(35,'Іванченко','Назар','Євгенович','1969-01-10','minister','vladislav83@example.net','<JIGYD9Y/'),
	(36,'Таращук','Адам','Євгенійович','1976-01-30','controller','olga.ponomarenko@example.com','L;+b4IXQ2~wv;_8)Ep(m'),
	(37,'a','a','a','0000-00-00','qq','q','q');

/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Department
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Department`;

CREATE TABLE `Department` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `f_id` int(11) NOT NULL,
  PRIMARY KEY (`d_id`),
  KEY `d_id` (`d_id`),
  KEY `f_id` (`f_id`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `Faculty` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Department` WRITE;
/*!40000 ALTER TABLE `Department` DISABLE KEYS */;

INSERT INTO `Department` (`d_id`, `d_name`, `f_id`)
VALUES
	(1,'Кафедра електропостачання',1),
	(163,'Кафедра кібербезпеки та захисту інформації',165),
	(165,'Кафедра прикладної математики',1),
	(166,'Геоморфології та палеогеографії',163),
	(167,'Економічної і соціальної географії',163),
	(168,'Кафедра адміністративного права',164),
	(170,'Кафедра кримінального права та кримінології',164),
	(171,'Кафедра інтелектуальних та інформаційних систем',165),
	(172,'Кафедра електрофізики',167),
	(173,'Кафедра квантової радіофізики',167),
	(174,'Кафедра англійської філології та міжкультурної комунікації',168),
	(175,'Кафедра загального мовознавства, класичної філології та неоелліністики',168),
	(176,'Кафедра господарського права',169),
	(177,'Кафедра екологічного права',169),
	(178,'Кафедра аналітичної хімії',170),
	(179,'Кафедра молекулярної фізики',170),
	(180,'Кафедра соціальної психології',171),
	(181,'Кафедра соціальної роботи',171),
	(182,'Кафедра мережевих та Інтернет технологій',172),
	(183,'Кафедра прикладних інформаційних систем',172),
	(184,'Кафедра економічної теорії',173),
	(185,'Кафедра мікроекономіки',173),
	(186,'Кафедра педагогіки',174),
	(187,'Кафедра психології розвитку',174),
	(188,'Кафедра археології та музеєзнавства',175),
	(189,'Кафедра давньої і нової історії України',175),
	(190,'Кафедра англійської філології та міжкультурної комунікації',176),
	(191,'Кафедра фольклористики',176),
	(192,'Кафедра алгебри та математичної логіки',177),
	(193,'Кафедра геометрії, топології і динамічних систем',177),
	(194,'Кафедра соціальної психології',178),
	(195,'Кафедра етики, естетики і культурології',178),
	(196,'Кафедра мережевих та Інтернет технологій',179),
	(197,'Кафедра програмних систем і технологій',179),
	(198,'Кафедра слов\'янської філології',180),
	(199,'Кафедра української мови та прикладної лінгвістики',180),
	(200,'Кафедра соціальної реабілітації та соціальної педагогіки',181),
	(201,'Кафедра соціальної роботи',181);

/*!40000 ALTER TABLE `Department` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Disciple
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Disciple`;

CREATE TABLE `Disciple` (
  `disciple_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(30) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY (`disciple_id`),
  KEY `id` (`disciple_id`),
  KEY `t_id` (`t_id`),
  CONSTRAINT `disciple_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `Teacher` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Disciple` WRITE;
/*!40000 ALTER TABLE `Disciple` DISABLE KEYS */;

INSERT INTO `Disciple` (`disciple_id`, `d_name`, `t_id`)
VALUES
	(1,'Освітні, педагогічні науки',2),
	(5,'Психологія',4),
	(6,'Право інтелектуальної власност',10),
	(7,'Хімія',11),
	(8,'Бази даних',12),
	(9,'Програмування на JAVA',13),
	(11,'Юридична термінологія',14),
	(13,'Вища математика',15),
	(14,'Географія Києва',16),
	(17,'Екологічна система України',17),
	(18,'Кримінологія',20),
	(19,'Менеджмент',21),
	(20,'Фізика',22),
	(21,'Соціологія релігії',23),
	(22,'Кібернетика',24),
	(23,'Англійська література',25),
	(25,'Історія Німеччини',26),
	(26,'Всесвітня історія',26),
	(27,'Судова Медицина',14),
	(31,'Математика',2);

/*!40000 ALTER TABLE `Disciple` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Faculty
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Faculty`;

CREATE TABLE `Faculty` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `u_id` (`u_id`),
  CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `University` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Faculty` WRITE;
/*!40000 ALTER TABLE `Faculty` DISABLE KEYS */;

INSERT INTO `Faculty` (`f_id`, `f_name`, `u_id`)
VALUES
	(1,'Інформатики',1),
	(163,'Географічний',2),
	(164,'Юридичний',3),
	(165,'Інформатики',3),
	(167,'Радіофізики',3),
	(168,'Гуманітарних наук',1),
	(169,'Юридичний',1),
	(170,'Природничих наук',1),
	(171,'Соціальних наук',1),
	(172,'Комп\'ютерних наук',2),
	(173,'Економічний',2),
	(174,'Педагогічний',2),
	(175,'Історичний',2),
	(176,'Англійської філології',2),
	(177,'Механіко-математичний',3),
	(178,'Філософії',3),
	(179,'Інформатики',4),
	(180,'Української філології',4),
	(181,'Соціології',4),
	(182,'Математичний',4),
	(183,'Хімічний',4),
	(184,'Економічний',5),
	(185,'Комп\'ютерних наук',5),
	(186,'Радіофізики',5),
	(187,'Механіко-математичний',5),
	(188,'Географічний',5),
	(189,'Міжнародних відносин',6),
	(190,'Юридичний',6),
	(191,'Економічний',6),
	(192,'Німецької філології',6),
	(193,'Інформатики',6),
	(194,'Хімічний',7),
	(195,'Фізичний',7),
	(196,'Математичний',7),
	(197,'Географічний',7),
	(198,'Історичний',7),
	(199,'Економічний',8),
	(200,'Педагогічний',8),
	(201,'Соціології',8),
	(202,'Психології',8),
	(203,'Філософії',8),
	(204,'Філології',9),
	(205,'Історичний',9),
	(206,'Географічний',9),
	(207,'Юридичний',9),
	(208,'Міжнародних відносин',9),
	(209,'Філології',10),
	(210,'Соціальних наук',10),
	(211,'Інформатики',10),
	(212,'Радіофізики',10),
	(213,'Механіко-математичний',10),
	(214,'Хімічний',11),
	(215,'Екологічний',11),
	(216,'Фізичний',11),
	(217,'Історичний',11),
	(218,'Географічний',11);

/*!40000 ALTER TABLE `Faculty` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Group_Student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Group_Student`;

CREATE TABLE `Group_Student` (
  `g_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`g_id`,`s_id`),
  KEY `s_id` (`s_id`),
  CONSTRAINT `group_student_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `Student` (`s_id`),
  CONSTRAINT `group_student_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `Groups` (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Group_Student` WRITE;
/*!40000 ALTER TABLE `Group_Student` DISABLE KEYS */;

INSERT INTO `Group_Student` (`g_id`, `s_id`)
VALUES
	(1,1),
	(1,9),
	(5,12),
	(6,13),
	(8,19),
	(11,24),
	(7,31),
	(10,32),
	(7,33);

/*!40000 ALTER TABLE `Group_Student` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Groups`;

CREATE TABLE `Groups` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` int(11) NOT NULL,
  `disciple_id` int(11) NOT NULL,
  PRIMARY KEY (`g_id`),
  KEY `d_id` (`disciple_id`),
  CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`disciple_id`) REFERENCES `Disciple` (`disciple_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Groups` WRITE;
/*!40000 ALTER TABLE `Groups` DISABLE KEYS */;

INSERT INTO `Groups` (`g_id`, `g_name`, `disciple_id`)
VALUES
	(1,1,31),
	(4,12,14),
	(5,3,13),
	(6,5,25),
	(7,6,25),
	(8,8,11),
	(9,1,11),
	(10,3,7),
	(11,11,31),
	(13,4,8),
	(14,5,8),
	(15,7,22),
	(16,10,9),
	(17,21,5),
	(18,22,5),
	(19,1,17),
	(20,5,1),
	(21,6,1),
	(22,8,20);

/*!40000 ALTER TABLE `Groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Lections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Lections`;

CREATE TABLE `Lections` (
  `lect_id` int(11) NOT NULL AUTO_INCREMENT,
  `Lection` text NOT NULL,
  PRIMARY KEY (`lect_id`),
  KEY `id` (`lect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Lections` WRITE;
/*!40000 ALTER TABLE `Lections` DISABLE KEYS */;

INSERT INTO `Lections` (`lect_id`, `Lection`)
VALUES
	(1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor, dui id gravida posuere, mauris est finibus tellus, at ornare magna arcu eget sem. Praesent felis nulla, posuere vel viverra id, tristique id tortor. In eget ligula elit. Ut arcu nibh, imperdiet ut dapibus in, dignissim ac est. Sed suscipit, libero et dapibus pellentesque, quam sem commodo orci, vitae pellentesque ante purus non ligula. Nulla venenatis iaculis fringilla. Etiam neque sem, dictum et sollicitudin a, condimentum ut massa. Phasellus sed odio congue, sagittis lectus ac, rhoncus lacus. Mauris tincidunt sit amet nibh eget sagittis. Curabitur egestas pharetra orci molestie pellentesque. Vestibulum sed orci bibendum, pulvinar ipsum ut, congue diam. Vestibulum eget velit eros. Nullam vitae leo vitae mi dictum facilisis eget sit amet mauris. Proin dignissim neque id ante porta laoreet at nec nulla. Donec et condimentum sapien. Morbi cursus, neque in pellentesque mattis, lorem turpis dignissim lacus, at congue tellus magna eu sem.\n\nNam vestibulum in elit at feugiat. Aenean dignissim interdum laoreet. Curabitur ut iaculis turpis. Quisque vel vulputate ligula. Morbi ut orci tristique, varius eros non, iaculis ligula. Suspendisse eget nisi aliquet magna condimentum luctus ut et purus. Integer facilisis aliquam nunc id cursus. Sed ultricies scelerisque convallis. Curabitur eu elementum ex. Phasellus at laoreet odio. Proin non tellus a sem efficitur rhoncus. Ut interdum tellus eu pellentesque hendrerit. Ut nec nunc sed nisi consectetur tristique.\n\nVivamus orci sem, elementum facilisis risus non, aliquam ullamcorper quam. Aliquam ultricies ligula ante, pulvinar sollicitudin dolor scelerisque nec. Morbi porta congue arcu, vitae porttitor odio ultrices fermentum. Cras varius elementum lorem, sed volutpat ligula sollicitudin ac. Aliquam laoreet erat eu massa suscipit luctus. Pellentesque ultrices consectetur mattis. Proin congue nunc sit amet blandit aliquet. In sem enim, porta blandit imperdiet id, fringilla vel mauris. Ut in arcu urna. In condimentum mi sollicitudin, lacinia magna et, eleifend ipsum. Nunc nec volutpat neque. Integer pretium feugiat metus. Phasellus sagittis sed velit vel mollis.\n\nPhasellus molestie eros eget velit sodales viverra. Nam accumsan dignissim quam non venenatis. Maecenas varius faucibus metus pretium bibendum. Donec a lectus non odio rutrum iaculis non in ligula. Duis laoreet lacus in lacus porttitor pretium. Praesent ornare nec risus id euismod. Proin quis consequat erat. Sed dictum nibh velit, lobortis sagittis nisl placerat non. Fusce viverra aliquam nisl, et convallis felis feugiat ut. Aliquam posuere mattis massa eget tempor. Nulla orci eros, vulputate nec elit eu, sodales volutpat est. Aliquam semper magna at varius pretium.\n\nNunc at nisl vitae sem scelerisque malesuada. Aenean quis justo porttitor, vestibulum neque id, maximus eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam pulvinar lorem id ex luctus, sit amet rutrum purus laoreet. Aliquam eu egestas ligula, quis vehicula nisl. Phasellus sit amet neque non neque tincidunt dignissim ac eget est. Vestibulum a posuere nunc. Aenean tempus ullamcorper lacus at posuere.'),
	(2,'Значення географії у свідомості пересічної людини часто недооцінене. Це при тому, що більшість інформації, яку сприймає людина, має просторову прив\'язку. Без географічних знань неможливе успішне державне та регіональне управління, інженерно-проектувальна та будівельна діяльність, діяльність міжнародних компаній, внутрішня та зовнішня розвідка, прогнозування погоди тощо. Значна частина прогресу у впровадженні інформаційних технологій пов’язана саме зі створенням геоінформаційних систем. Проте географія достойна більшого, ніж бути служницею інших наук та видів людської діяльності.'),
	(3,'ХИМИЯ, наука, изучающая строение в-в и их превращения, сопровождающиеся изменением состава и(или) строения. Хим. св-ва в-в (их превращения; см. Реакции химические)определяются гл. обр. состоянием внеш. электронных оболочек атомов и молекул, образующих в-ва; состояния ядер и внутр. электронов в хим. процессах почти не изменяются. Объектом хим. исследований являются элементы химические и их комбинации, т. е. атомы, простые (одноэлементные) и сложные (молекулы, ионы, ион-радикалы, карбены, свободные радикалы) хим. соед., их объединения (ассоциаты, кластеры, сольваты, клатраты и т. п.), материалы и др. Число хим. соед. огромно и все время увеличивается; поскольку химия сама создает свой объект; к кон. 20 в. известно ок. 10 млн. хим. соединений. '),
	(4,'В сер. 19 в. одновременно было положено начало исследованиям в области кинетики химической и термохимии. Л. Вильгельми изучил кинетику гидролиза углеводов (впервые дав ур-ние скорости гидролиза; 1850), а К. Гульдберг и П. Вааге в 1864-67 сформулировали закон действующих масс. Г. И. Гесс в 1840 открыл основной закон термохимии, М. Бертло и В. Ф. Лугинин исследовали теплоты мн. р-ций. В это же время развиваются работы по коллоидной химии, фотохимии и электрохимии, начало к-рым было положено еще в 18 в. '),
	(5,'Фі́зика (від грец. φυσικός природний, φύσις природа) — природнича наука, яка досліджує загальні властивості матерії та явищ у ній, а також виявляє загальні закони, які керують цими явищами. Це наука про закономірності Природи в широкому сенсі цього слова. Фізики вивчають поведінку та властивості матерії в широких межах її проявів, від субмікроскопічних елементарних частинок, з яких побудоване все матеріальне (фізика елементарних частинок), до поведінки всього Всесвіту як єдиної системи (космологія).'),
	(6,'А́том (від дав.-гр. ἄτομος — «неподільний», або буквально «нерозрізний»[1]) — з хімічної точки зору найменша, електронейтральна, хімічно неподільна частинка речовини. Фізична модель атома, у свою чергу, докладніше розкриває подробиці його будови. Відповідно до неї, атом складається з щільного ядра з позитивно заряджених протонів та електрично нейтральних нейтронів. Ядро оточене набагато більшою за розміром оболонкою з негативно заряджених електронів. Кількість протонів дорівнює кількості електронів, і тому атом є електрично нейтральним. В іншому випадку (при втраті чи набутті одного або кількох електронів) атом перетворюється на іон, що має певний позитивний чи негативний електричний заряд (у разі нестачі електронів такий іон називається катіоном, а у разі надлишку - аніоном). У свою чергу, склад ядра атома визначає собою тип атома та його ізотопа: заряд ядра Z визначається кількістю протонів у ядрі, а його масове число А - сумарною кількістю нейтронів та протонів. Таким чином, атом - динамічна й складна система субатомних частинок, урівноважених елекростатичною взаємодією, слабкою та сильною ядерними силами.'),
	(7,'Сучасні уявлення про будову атома загалом базуються на уявленнях квантової механіки. На популярному рівні будову атома можна викласти у рамках так званої планетарної моделі, запропонованої Ернестом Резерфордом у 1911 році як результат його експериментів з розсіяння альфа-частинок атомами золота, та моделі Бора. Згідно з моделлю Резерфорда атом складається з масивного важкого ядра і електронів, що обертаються навколо ядра. Така модель нагадує своєю будовою сонячну систему, що й слугувало при виборі назви моделі. Однак, сьогодні модель атома Резерфорда має лише історичну цінність. Проблема цієї моделі полягає у її нестабільності. Відповідно до теорії Максвела заряджена частинка, що рухається з прискоренням повинна випромінювати. Відповідно, електрон обертаючись навколо ядра рухається із доцентровим прискоренням, а отже має випромінювати і гублячи кінетичну енергію, падати на ядро. Такий атом повинен існувати протягом неймовірно малих проміжків часу (близько 10 мільярдних секунди).'),
	(8,'Водневоподібні орбіталі записують у такому вигляді в сферичних координатах:'),
	(9,'Головне́ ква́нтове число́ — натуральне число, що позначає номер енергетичного рівня в атомі. Характеризує енергію електронів, що займають даний енергетичний рівень. Із зростаючим головним квантовим числом зростають радіус орбіти і енергія електрона. Головне квантове число позначається як n.'),
	(10,'Банківська система більшості країн є дворівневою:');

/*!40000 ALTER TABLE `Lections` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Metodist
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Metodist`;

CREATE TABLE `Metodist` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_surname` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_fathname` varchar(30) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `m_id` (`m_id`),
  KEY `d_id` (`d_id`),
  CONSTRAINT `metodist_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `Department` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Metodist` WRITE;
/*!40000 ALTER TABLE `Metodist` DISABLE KEYS */;

INSERT INTO `Metodist` (`m_id`, `m_surname`, `m_name`, `m_fathname`, `m_email`, `m_password`, `d_id`)
VALUES
	(1,'Бурулько','Василь','петрович','kek@gmail.com','zzzz1234',1),
	(4,'Дурулько','Петро ','Васильович','pep@gmal.com','pppp123',163),
	(5,'Загорулько','Максим','Максимович','mem@gmail.com','mmm342',165),
	(6,'Тиква','Тамара','Тореадоровна','tet@gmail.com','ttt43894',166),
	(7,'Глостер','Олег','Дмитрович','geg@gmal.com','gg32847',167),
	(10,'Чуйко','Віра','Василівна','vev@gmail.com','vvvv5940',168),
	(11,'Тодес','Трофим','Карпович','ewr@gmail.com','fjdhf5498',170),
	(12,'Мирошниченко','Мирон','Миронович','mur@gmail.com','uoiu329',171),
	(13,'Кагарлюк','Віктор','Вікторович','vbv@gmail.com','jjjj30824',172),
	(14,'Прокопенко','Прохор','Олександрович','php@gmai.com','php3298',174),
	(15,'Чахлик','Катерина','Петрівна','chch@gmail.com','ch0900',175),
	(16,'Богачек','Єлизавета ','Миколаївна','bogach@gmail.com','bgbgb0348',176),
	(18,'Ребро ','Дарина','Ярославівна','rebr@gmail.com','rebr09234',177),
	(19,'Коваленко','Юрій ','Володимирович','kovl@gmail.com','kovl23948',178),
	(20,'Паріяка','Олександр','Олександроич','par@gmail.com','par0909',179),
	(22,'Гана','Тая','Анатолівна','tay@gmail.com','tay1212',180),
	(23,'Керри','Тимофій','Матвійович','tym@gmail.com','tym090192',181);

/*!40000 ALTER TABLE `Metodist` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Plan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Plan`;

CREATE TABLE `Plan` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `disciple_id` int(11) NOT NULL,
  `lect_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `Deadline` date NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `id` (`p_id`),
  KEY `d_id` (`disciple_id`),
  KEY `lect_id` (`lect_id`),
  KEY `task_id` (`task_id`),
  CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`disciple_id`) REFERENCES `Disciple` (`disciple_id`),
  CONSTRAINT `plan_ibfk_2` FOREIGN KEY (`lect_id`) REFERENCES `Lections` (`lect_id`),
  CONSTRAINT `plan_ibfk_3` FOREIGN KEY (`task_id`) REFERENCES `Tasks` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Plan` WRITE;
/*!40000 ALTER TABLE `Plan` DISABLE KEYS */;

INSERT INTO `Plan` (`p_id`, `disciple_id`, `lect_id`, `task_id`, `Deadline`)
VALUES
	(2,31,1,1,'2017-12-20'),
	(3,13,7,3,'2018-02-27'),
	(4,25,6,9,'2017-12-27'),
	(5,23,9,10,'2017-11-29'),
	(6,14,9,7,'2017-11-30'),
	(7,17,7,8,'2017-12-02'),
	(9,22,2,12,'2017-12-27'),
	(10,11,10,2,'2017-12-27'),
	(11,14,3,13,'2017-12-01');

/*!40000 ALTER TABLE `Plan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Question
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Question`;

CREATE TABLE `Question` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `task_intro` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answers` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `task` (`task_id`),
  CONSTRAINT `task` FOREIGN KEY (`task_id`) REFERENCES `Tasks` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `Question` WRITE;
/*!40000 ALTER TABLE `Question` DISABLE KEYS */;

INSERT INTO `Question` (`id`, `text`, `task_intro`, `answers`, `task_id`)
VALUES
	(1,'Порахувати $\\cos(0)$','SPACE = R[x,y]\n','[\"/1/\"]',1),
	(2,'Вирішити $x^2-5x+6 < 0$',NULL,'[\"(2,3)\"]',1);

/*!40000 ALTER TABLE `Question` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Results
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Results`;

CREATE TABLE `Results` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `NumberOfTries` int(11) NOT NULL,
  `Mark` int(11) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `p_id` (`p_id`),
  KEY `s_id` (`s_id`),
  CONSTRAINT `results_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `Plan` (`p_id`),
  CONSTRAINT `results_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `Student` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Results` WRITE;
/*!40000 ALTER TABLE `Results` DISABLE KEYS */;

INSERT INTO `Results` (`r_id`, `p_id`, `s_id`, `NumberOfTries`, `Mark`)
VALUES
	(1,2,1,7,0);

/*!40000 ALTER TABLE `Results` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Speciality
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Speciality`;

CREATE TABLE `Speciality` (
  `speciality_id` int(11) NOT NULL AUTO_INCREMENT,
  `speciality_name` varchar(100) NOT NULL,
  `f_id` int(11) NOT NULL,
  PRIMARY KEY (`speciality_id`),
  KEY `f_id` (`f_id`),
  CONSTRAINT `speciality_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `Faculty` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Speciality` WRITE;
/*!40000 ALTER TABLE `Speciality` DISABLE KEYS */;

INSERT INTO `Speciality` (`speciality_id`, `speciality_name`, `f_id`)
VALUES
	(1,'інформатика',179),
	(2,'менеджмент',207),
	(3,'маркетинг',169),
	(4,'програмна інженерія',1),
	(5,'прикладна математика',211),
	(6,'політологія',171),
	(7,'статистика',173),
	(9,'культорологія',210),
	(10,'психологія',200),
	(11,'психологія',203),
	(12,'фармацевтика',194),
	(13,'історія',175),
	(14,'кібернетика',193),
	(15,'програмна інженерія',193),
	(16,'філософія',178),
	(17,'фізична хімія',183),
	(18,'історія мистецтв',201),
	(19,'філосовія мистецтва',209),
	(20,'економіка',191);

/*!40000 ALTER TABLE `Speciality` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Student`;

CREATE TABLE `Student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_surname` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_fathname` varchar(30) NOT NULL,
  `s_datebirth` date NOT NULL,
  `s_course` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `speciality_id` (`speciality_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`speciality_id`) REFERENCES `Speciality` (`speciality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;

INSERT INTO `Student` (`s_id`, `s_surname`, `s_name`, `s_fathname`, `s_datebirth`, `s_course`, `s_email`, `s_password`, `speciality_id`)
VALUES
	(1,'Пупкін','Вася','Васьович','0000-00-00',1,'student@gmail.com','zzzz1234',1),
	(6,'Горшкова ','Софія','Вячеславовна','1997-12-03',2,'sdfhskh@gmai.com','jqw1232',1),
	(8,'Дуров','Олексій','Робертович','1996-09-09',3,'dhwkdj@gmail.com','ksfh9324',2),
	(9,'Єремченко','Анна','Романівна','1997-10-31',2,'dfjtg@gmail.com','sjdhf',3),
	(12,'Бонжур','Евгений','Огустович','1995-10-31',4,'wieurwi@gmail.com','sdfgdh',3),
	(13,'Борисов','Валерій','Іванович','1998-02-12',2,'rrrr@gmail.com','fxgdf',4),
	(14,'Думдюк','Василій','Миколайович','1993-09-25',3,'qqqq@gmail.com','ewrwe2342',5),
	(15,'Марчук','Іван','Володиморивич','1992-01-18',2,'dfgmf@gmail.com','skeurkg',9),
	(16,'Писаренко','Марина','Іванівна','1996-12-18',4,'wwww@gmail.com','tgt45tg',6),
	(17,'Полійщук','Світлана','Степанівна','1996-03-18',3,'eee@gmail.com','thy5h5y',7),
	(18,'Танк','Вікторія','Борисівна','1996-02-18',5,'tttttt@gmail.com','rt4g4ere',9),
	(19,'Бункер','Олеся','Овкулінівна','1996-04-18',3,'yyyy@gmail.com','uju68j',10),
	(20,'Мунько','Володимир','Тарасович','1996-05-18',1,'iiii2gmail.com','yh6yh6',11),
	(21,'Гончарук','Олексій','Тарасович','1996-05-18',2,'zxzxzx@gmail.com','9i0ok',12),
	(22,'Мунк','Едуард','Едуардовач','1991-11-27',4,'sdfhsk@gmail.com','sghfg',4),
	(23,'Волошко','Тарас','Ярозлавович','1997-01-03',1,'erere@gmail.com','po98uj',13),
	(24,'Вакулов','Іван','Іванович','1999-11-27',3,'sdgf@gmail.com','sfgdtg',1),
	(25,'Кладько','Ярослав','Тарасович','1997-01-03',1,'oooo@gmail.com','oyoo090',18),
	(26,'Петришин','Дмитро','Олексійович','1997-02-03',3,'r7ry@gmail.com','0p0p0p',14),
	(27,'Лебедєв','Олексій','Євгенович','1997-03-03',2,'ugugu@gmail.com','klkp9i9k',15),
	(28,'Корогод','Богдана','Сергіївна','1997-04-03',1,'fhfhfh@gmail.com','oreie909i',16),
	(29,'Макарчук','Раїса','Федорівна','1997-05-03',4,'eoeoeoeo@gmail.com','098230498j',17),
	(30,'Красава','Людмила','Іванівна','1997-06-03',3,'popopo@gmail.com','rijoijf9',19),
	(31,'Бочко','Роман','Миколайович','1997-07-03',2,'cncn@gmail.com','rj9ejioje',20),
	(32,'Пушк','Юлія','Овігівна','1995-01-01',1,'vnvn@gmail.com','e232we',13),
	(33,'Райфайзен','Банк','Аваль','1995-11-01',3,'sdsds@gmail.com','hefyh37fg',14),
	(34,'Порічка','Олександр','Ярославович','1995-01-01',2,'oioio@gmail.com','ehuwhdn12',9),
	(35,'Кушнір','Микола','Миколайович','1995-08-01',1,'plplp@gmail.com','freufhei8832',3),
	(36,'Дідко','Влада','Миколаївна','1995-09-01',3,'aqaq@gmail.com','98jh9weh',20);

/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Tasks`;

CREATE TABLE `Tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`task_id`),
  KEY `id` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Tasks` WRITE;
/*!40000 ALTER TABLE `Tasks` DISABLE KEYS */;

INSERT INTO `Tasks` (`task_id`, `Name`)
VALUES
	(1,'Контрольна робота з алгебри'),
	(2,'Ukr test'),
	(3,'Eng test'),
	(4,'Programming test'),
	(5,'Litreture test'),
	(6,'Physics test'),
	(7,'Chemisry test'),
	(8,'Geometry test'),
	(9,'Buisiness test'),
	(10,'History test'),
	(11,'Geography test'),
	(12,'Law test'),
	(13,'Psychology test'),
	(14,'Jermany test');

/*!40000 ALTER TABLE `Tasks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Teacher
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Teacher`;

CREATE TABLE `Teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_surname` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_fathname` varchar(30) NOT NULL,
  `t_datebirth` date NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `d_id` (`d_id`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `Department` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Teacher` WRITE;
/*!40000 ALTER TABLE `Teacher` DISABLE KEYS */;

INSERT INTO `Teacher` (`t_id`, `t_surname`, `t_name`, `t_fathname`, `t_datebirth`, `t_email`, `t_password`, `d_id`)
VALUES
	(2,'Мальченко','Валерій','Петрович','0000-00-00','kekek@gmail.com','zzzz1234',1),
	(4,'Павленко','Віталій','Віталійович','1952-11-27','khdfvgdf@gmail.com','jsdf',1),
	(10,'Пашков','Андрій','Васильович','1990-11-27','dfgdf@gmail.com','dfjhleru',1),
	(11,'Василенко','Василій','Васильович','1992-11-27','kcfgkfj@gmail.com','fdgdg',1),
	(12,'Машко','Олег','Олександрович','1983-11-27','sdjfhkhk@gmail.com','skjdhf',163),
	(13,'Батя','Взданій','Юрійович','1989-11-27','hdfgjhk@gmail.com','sjdfhgk',165),
	(14,'Олежкон','Павло','Дмитрович','1976-12-27','jdfhgdfjh@gmail.com','sdfrgfhd',170),
	(15,'Пропан','Богдан','Захарович','1977-06-27','jhdfk@gmail.com','dsfjhgfk',173),
	(16,'Молесчкин','Микола','Вікторович','1959-06-15','jfhgvjk@gmail.com','jhsdfjser',175),
	(17,'Иогила','Петро','Захарович','1956-11-27','jkffrg@gmail.com','847545',174),
	(20,'Самтаймс','Ай','Гат','1988-10-27','djfgkh@dmfd.com','sdfdfdg',178),
	(21,'Инсейн','Тнотс','Марчкров','1987-11-27','skdjhf@gmail.com','jhwfgwej',177),
	(22,'Порошенко','Петро','Олексійович','1974-11-27','sdjsf@xkfgf.com','affgvdfb',177),
	(23,'Пуська','Ілья','Ілліч','1987-11-27','jdhf@srfhrlrkg','sdfsgdfgdf',181),
	(24,'Парков','Павло','Васильович','1984-11-27','jhsdf@dmfffvbhf','sdkjfhrf',190),
	(25,'Глібов','Гліб','Глібович','1896-11-16','dfgdr@gmail.com','sdjhfgms',187),
	(26,'Привіт','Пока','Нуінеда','1987-11-27','jskfl@gmail.com','ksjehfku',168),
	(27,'Чурко','Михайло','Михайлович','2987-11-27','dfgdr@dkrg.com','sdfrdrgr',191),
	(28,'Шалом','Дмитро','Олексійович','1975-09-13','dfgf@fdgdg.com','dfgfhfg',192);

/*!40000 ALTER TABLE `Teacher` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table University
# ------------------------------------------------------------

DROP TABLE IF EXISTS `University`;

CREATE TABLE `University` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `u_street` varchar(100) NOT NULL,
  `u_buildnum` varchar(100) NOT NULL,
  `u_city` varchar(100) NOT NULL,
  `u_postcode` varchar(100) NOT NULL,
  `u_telephone` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `University` WRITE;
/*!40000 ALTER TABLE `University` DISABLE KEYS */;

INSERT INTO `University` (`u_id`, `u_name`, `u_street`, `u_buildnum`, `u_city`, `u_postcode`, `u_telephone`)
VALUES
	(1,'University test','','','','',''),
	(2,'МАУП','Леніна','51','Чернігів','07865','+380508030757'),
	(3,'ЛНТУ','Леніна','40','Луцьк','79595','0634811490'),
	(4,'ПЕД. Інститут ім. Г. Сковороди','Лесі Українки','41','Хмельницьк','04533','0675742856'),
	(5,'ВНТУ','Космонавта Попова','89','Вінниця','86122','0969771206'),
	(6,'ЗНТУ','Михайла Грушевського','23','Запоріжжя','14449','+380508779502'),
	(7,'ВНАУ','Михайла Грушевського','29','Вінниця','16395','0672527088'),
	(8,'ЧНТУ','Космонавта Попова','88','Чернігів','07163','+380506762543'),
	(9,'ДНТУ','Тараса Шевченка','80','Дніпропетровськ','05563','+380670355649'),
	(10,'ХНТУ','Космонавта Попова','30','Херсон','48277','+380633202645'),
	(11,'Житомирський аграрний університет','Тараса Шевченка','88','Житомир','51445','0995280012');

/*!40000 ALTER TABLE `University` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
