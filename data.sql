-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `posted_by` varchar(32) NOT NULL,
  `partner` varchar(32) NOT NULL,
  `title` varchar(48) NOT NULL,
  `description` varchar(512) NOT NULL,
  `contact_info` varchar(128) NOT NULL,
  `redirect_to` varchar(256) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `posted_by`, `partner`, `title`, `description`, `contact_info`, `redirect_to`, `active`) VALUES
(1, '1', 'coca-cola', 'disfruta de nuestra nueva bebida', 'con esta cocacola disfrutaras de tus dias con un fantastico sabor que es increible y te encantara', 'numero de contacto 3003725935 dirreccion avenida norte 45 32', 'https://www.coca-cola.com', 1),
(2, '1', 'nike', 'nike men\'s phantom vision 2', 'nike phantom vision 2 academy dynamic fit mg. a foot-hugging inner sleeve is hidden inside a nikeskin upper to create a boot for finishers like you.', 'informacion de contacto', 'https://www.nike.com/xl', 1),
(3, '1', 'kingston', 'kingston 480gb a400 sata 3 2.5\" ', 'fast start up, loading and file transfers. a400 has a 7 millimeter form factor to fit in a wider array of systems. it’s ideal for slimmer notebooks and in systems with limited available space\r\nmore reliable and durable than a hard drive\r\nmultiple capacities with space for applications or a hard drive replacement; operating temperature: 0°c-70°c\r\ncapacity: 480gb, interface: sata rev. 3.0 (6gb/s) with backwards compatibility to sata rev. 2.0. 480gb to 500mb/s read and 450mb/s write', 'www.amazon.com/kingstone/ssd-480gb-a400-sata3', 'https://www.kingston.com/en', 1),
(4, '1', 'puma', 'htrhgthgfhgf', 'hfrhgfhy8erinjvdsvdmvvjiomerjiorjoer', 'rrjerjofrmkofbrmkbfnjdfjnipdfjpbgfjf', 'https://us.puma.com/us/en', 1),
(5, '1', 'pepsi', 'yjjkhjmgfkñndfvnjdfjinfdjb', 'fmjofrgjomeghieryuofrkmobgfjnnjipvfifd', 'rnhjinjip5gromerjrifritrnvefnuef', 'https://www.pepsi.com', 1),
(6, '1', 'huananzhi', 'tymhjyujmhjgfndbsdngmhtyjygfnb', 'ejipnernjiperhbeyernhuvfrnhuert9rehgtrjodfhyvnjiodf', 'trhbgtrji9\'trji9\'gtru9btrnu8vfrnu0tr', 'http://www.huananzhi.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 5),
(2, 1, 23),
(3, 1, 9),
(4, 1, 2),
(5, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `my_user`
--

CREATE TABLE `my_user` (
  `id` int(11) NOT NULL,
  `identification` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(1) NOT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `country` varchar(2) NOT NULL,
  `address` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `my_password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_user`
--

INSERT INTO `my_user` (`id`, `identification`, `name`, `last_name`, `birthday`, `sex`, `phone_number`, `country`, `address`, `email`, `my_password`) VALUES
(1, NULL, 'felipe', 'casanas', '2004-03-17', 'm', NULL, 'CO', NULL, 'casanascastrofelipe@gmail.com', '8dbfd0873b90055105f1f0e873dd62e9');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `product_condition` varchar(16) NOT NULL,
  `price` int(4) NOT NULL,
  `category` varchar(32) NOT NULL,
  `available_units` int(11) NOT NULL,
  `sold` int(5) NOT NULL,
  `seller` varchar(32) NOT NULL,
  `warranty` int(3) NOT NULL,
  `favourites` int(5) NOT NULL,
  `exposed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `description`, `product_condition`, `price`, `category`, `available_units`, `sold`, `seller`, `warranty`, `favourites`, `exposed`) VALUES
(1, 'xiaomi pocophone poco x4 pro 5g', 'fotografía profesional en tu bolsillo\r\ndescubre infinitas posibilidades para tus fotos con las 3 cámaras principales de tu equipo. pon a prueba tu creatividad y juega con la iluminación, diferentes planos y efectos para obtener grandes resultados.\r\n\r\nAdemás, el dispositivo cuenta con cámara frontal de 16 Mpx para que puedas sacarte divertidas selfies o hacer videollamadas.\r\n\r\nExperiencia visual increíble\r\nMira tus series y películas favoritas con la mejor definición a través de su pantalla AMOLED de 6.67\". Disfruta de colores brillantes y detalles precisos en todos tus contenidos.\r\n\r\nCapacidad y eficiencia\r\nCon su potente procesador y memoria RAM de 8 GB tu equipo alcanzará un alto rendimiento con gran velocidad de transmisión de contenidos y ejecutará múltiples aplicaciones a la vez sin demoras.\r\n\r\nDesbloqueo facial y dactilar\r\nMáxima seguridad para que solo tú puedas acceder al equipo. Podrás elegir entre el sensor de huella dactilar para habilitar el teléfono en un toque, o el reconocimiento facial que permite un desbloqueo hasta un 30% más rápido.\r\n\r\nBatería de duración superior\r\n¡Desenchúfate! Con la súper batería de 5000 mAh tendrás energía por mucho más tiempo para jugar, ver series o trabajar sin necesidad de realizar recargas.', 'new', 350, 'cell phone', 6, 134, 'xiaomi', 365, 327, 1),
(2, 'iphone 13 128gb', 'este iphone cuenta con pantalla oled de 6.1 pulgadas, el iphone 13 tiene con un procesador apple a15 bionic, con opciones de almacenamiento de 128gb. 256gb. o 512gb. la cámara principal del iphone 13 es dual, con lentes wide y ultrawide de 12mp con ibis y zoom óptico 2x, y la cámara frontal es de 12mp. el iphone 13 tiene parlantes stereo, soporta carga rápida tanto por cable como inalámbrica, es resistente al polvo y agua, y soporta redes 5G. Es 100% Original Y se entrega totalmente Sellado.\r\n\r\n\r\nEspecificaciones Técnicas:\r\n\r\nPantalla: 6.1\", 1170 x 2532 pixels\r\nProcesador: Apple A15 Bionic\r\nAlmacenamiento: 128GB/256GB/512GB\r\nExpansión: sin microSD\r\nCámara: Dual, 12MP+12MP\r\nOS: iOS 15\r\nPerfil: 7.7 mm\r\nPeso: 174 g\r\n\r\n\r\nContenido Caja:\r\n\r\n-IPHONE\r\n-CABLE LIGHTNING A USB C\r\n-DOCUMENTACIÓN', 'new', 970, 'cell phone', 43, 370, 'apple', 365, 87, 1),
(3, 'samsung galaxy a23', 'el samsung galaxy a23 es un smartphone android con una pantalla de 6.6 pulgadas a resolución fhd+, potenciado por un procesador snapdragon 680 con 4gb, ram y 128gb de almacenamiento interno. con una cámara cuádruple con lente principal de 50mp en su dorso, el galaxy a23 tiene una cámara frontal de 8mp en el notch en forma de v, una batería de 5000 mah de carga rápida, lector de huellas lateral, y corre android 12.\r\n\r\ncamara trasera 50.0 mp + 5.0 mp + 2.0 mp + 2.0 mp\r\ncamara frontal 8.0 mp\r\ntipo de procesador: qualcomm\r\nvelocidad del procesador 2.4ghz,1.9ghz\r\nresolucion de la pantalla: lcd\r\nbateria 5000 mah\r\nmodelo sm-a235mzkgltc', 'new', 285, 'cell phone', 29, 82, 'samsung', 365, 68, 0),
(4, 'xbox one slim 1tb', 'todos los artículos que vendemos son originales de fabrica, somos empresa legalmente constituida \"pagaencasa\" con nosotros recibes garantia escrita.\r\ntu compra incluye:\r\n\r\n-consola xbox one slim 1000gb / 1tb original de fabrica\r\n-2 (dos) controles inalambricos color blanco originales de ultima generación\r\n-cable de poder original microsoft\r\n-cable hdmi de alta velocidad original microsoft\r\n-garantía escrita con nosotros\r\n-envío gratis a nivel nacional\r\n-puedes realizar todas las preguntas que requieras, estamos a tu servicio', 'new', 499, 'gaming', 8, 77, 'digital store', 183, 268, 0),
(5, 'silla ejecutiva reclinable ', 'esta silla de oficina ofrece la máxima comodidad y un diseño elegante y de líneas simples. es apta para un uso profesional continuado durante una jornada laboral en despachos, oficinas u otros espacios de trabajo, ya que su asiento cuenta con doble acolchado para aumentar el confort.\r\n\r\nesta silla ergonómica cuenta con un respaldo y asiento tapizado con tela transpirable y pu. además, incorpora un refuerzo en la zona lumbar para asegurar el confort durante largas horas de trabajo. su diseño ergonómico permite mantener una postura óptima en todo momento.\r\n\r\nla silla para escritorio es giratoria 360 o, altura regulable, y sistema de balanceo para poder conseguir el máximo aprovechamiento en su espacio de trabajo. también, incluye mecanismo de balanceo y ajuste de altura del asiento. además la base es giratoria y se eleva mediante gas. las ruedas de plástico se deslizan por cualquier tipo de superficie ya sea parquet, moqueta o azulejos.', 'new', 80, 'furniture', 35, 1786, 'urban design', 30, 268, 0),
(6, 'tapete para silla gamer antideslizante', 'el pad mouse 90*90 cuenta con una goma natural de alta adherencia con un grosor de 0,5mm con base\r\nantideslizante, manteniéndolo firme en largas horas de juego en el computador y contiene una tela con\r\ndiseño único, acolchado para mayor comodidad, gracias a diseño ergonómico y acolchado.', 'new', 40, 'gaming', 36, 59, 'epikstore', 25, 98, 0),
(7, 'barra multifuncional 5 en 1 crossfit', 'máquina multifuncional force diseño premium precio de lanzamiento. paquete incluye:2 barras laterales 1 barra superior 1 barra inferior, 3 cojines, 2 ganchos de sujeción 4 chazos 4 tornillos .\r\nnueva barra multifuncional 5 en 1, podrás entrenar donde quieras y cuando quieras. te permite ensanchar y fortalecer la espalda, tríceps, bíceps, abdomen y la parte baja del pecho.características: es absolutamente robusta y resistente, elaborada con tubería de la mejor calidad en calibre para resistir fácilmente hasta 150 kilos. es desmontable para comodidad de almacenamiento o transporte.pintura electrostática resistente a la abrasión y a la fricción.soldadura mig-mag de alta calidad y apariencia.cojines cosidos con un diseño que dan una apariencia premium, elaborados con cuerina de alta calidad y espuma de alta densidad anti deformable para absoluta comodidad.mangos en espuma para máxima comodidad en 8 puntos de agarre.garantía de un año por soldaduras disponible para entrega inmediata', 'new', 30, 'sport', 8, 16, 'multiforce', 15, 27, 0),
(8, 'iphone se', 'el iphone se es el iphone de 4,7 pulgadas más potente hasta ahora (1). tiene el chip a13 bionic, que ofrece un rendimiento increíble en apps, juegos y fotos. viene con modo retrato y seis efectos de iluminación para tomar retratos con calidad de estudio, hdr inteligente de última generación que ofrece un nivel de detalle sorprendente en las luces y las sombras de las fotos, video 4k de calidad cinematográfica y todas las funcionalidades avanzadas de ios. además de una batería de larga duración (2) y resistencia al agua (3). tiene todo lo que te gusta del iphone en un diseño compacto que te encantará.', 'new', 499, 'cell phone', 12, 135, 'medellinshop', 365, 92, 1),
(9, 'tablet samsung galaxy tab a7', 'esta tablet samsung es la compañera ideal, con capacidad de sobra para cada una de tus actividades. el diseño delgado, compacto y portátil, con facilidad para sostener en una mano, lo convierte en una combinación perfecta de rendimiento y versatilidad.\r\n\r\ntransferir, sincronizar y acceder a tus dispositivos las veces que quieras ahora es posible. sus conexiones wi-fi, wi-fi direct, bluetooth, usb-c te permiten potenciar sus funciones al máximo.\r\n\r\ngracias a su cámara principal de 8 mpx y frontal de 2 mpx, podrás hacer videollamadas o sacarte fotos en cualquier momento y lugar, con una excelente calidad de imagen. nitidez, brillo y colores vibrantes harán que tus experiencias se reflejen de manera óptima.', 'new', 150, 'cell phone', 18, 217, 'samsung', 365, 67, 0),
(10, 'mouse inalambrico m170 rojo', 'mouse logitech m170 inalámbrico rojo descripción tecnología inalámbrica fiable de 2,4 ghz. solida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). sin apenas retrasos ni interferencias, el juego y el trabajo serán mas previsibles. pruebas realizadas a una distancia de 10 metros. el radio de acción inalámbrico puede variar ligeramente según las condiciones del equipo y el entorno. duración de baterías de hasta 12 meses. funciona hasta un ano sin tener que cambiar las baterías. para prolongar la duración, usa el conmutador de encendido para apagar el mouse cuando no lo estés usando. la duración de las baterías puede variar ligeramente según las condiciones del equipo y tu uso del mouse. atributos - trm_ingreso ?0 canales de memoria ?canales de memoria óptico ?optico puertos ?usb resolución de movimiento ?1000 dpi días de garantía ?365 alámbrico/inalámbrico ?inalambrico botones programables ?2 botones compatibilidad ?windows, mac, chrome os, linux', 'new', 6, 'office', 45, 34, 'logitech', 45, 78, 0),
(11, 'mouse inalambrico m170 azul', 'mouse logitech m170 inalámbrico azul descripción tecnología inalámbrica fiable de 2,4 ghz. solida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). sin apenas retrasos ni interferencias, el juego y el trabajo serán mas previsibles. pruebas realizadas a una distancia de 10 metros. el radio de acción inalámbrico puede variar ligeramente según las condiciones del equipo y el entorno. duración de baterías de hasta 12 meses. funciona hasta un ano sin tener que cambiar las baterías. para prolongar la duración, usa el conmutador de encendido para apagar el mouse cuando no lo estés usando. la duración de las baterías puede variar ligeramente según las condiciones del equipo y tu uso del mouse. atributos - trm_ingreso ?0 canales de memoria ?canales de memoria óptico ?optico puertos ?usb resolución de movimiento ?1000 dpi días de garantía ?365 alámbrico/inalámbrico ?inalambrico botones programables ?2 botones compatibilidad ?windows, mac, chrome os, linux', 'new', 6, 'office', 33, 77, 'logitech', 45, 99, 0),
(12, 'mouse logitech inalambrico amarillo', 'mouse logitech m170 inalámbrico amarillo descripción tecnología inalámbrica fiable de 2,4 ghz. solida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). sin apenas retrasos ni interferencias, el juego y el trabajo serán mas previsibles. pruebas realizadas a una distancia de 10 metros. el radio de acción inalámbrico puede variar ligeramente según las condiciones del equipo y el entorno. duración de baterías de hasta 12 meses. funciona hasta un ano sin tener que cambiar las baterías. para prolongar la duración, usa el conmutador de encendido para apagar el mouse cuando no lo estés usando. la duración de las baterías puede variar ligeramente según las condiciones del equipo y tu uso del mouse. atributos - trm_ingreso ?0 canales de memoria ?canales de memoria óptico ?optico puertos ?usb resolución de movimiento ?1000 dpi días de garantía ?365 alámbrico/inalámbrico ?inalambrico botones programables ?2 botones compatibilidad ?windows, mac, chrome os, linux', 'new', 29, 'office', 43, 64, 'gaming store', 25, 75, 0),
(13, 'mouse logitech inalambrico morado', 'mouse logitech m170 inalámbrico morado descripción tecnología inalámbrica fiable de 2,4 ghz. solida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). sin apenas retrasos ni interferencias, el juego y el trabajo serán mas previsibles. pruebas realizadas a una distancia de 10 metros. el radio de acción inalámbrico puede variar ligeramente según las condiciones del equipo y el entorno. duración de baterías de hasta 12 meses. funciona hasta un ano sin tener que cambiar las baterías. para prolongar la duración, usa el conmutador de encendido para apagar el mouse cuando no lo estés usando. la duración de las baterías puede variar ligeramente según las condiciones del equipo y tu uso del mouse. atributos - trm_ingreso ?0 canales de memoria ?canales de memoria óptico ?optico puertos ?usb resolución de movimiento ?1000 dpi días de garantía ?365 alámbrico/inalámbrico ?inalambrico botones programables ?2 botones compatibilidad ?windows, mac, chrome os, linux', 'new', 25, 'office', 67, 72, 'logitech', 45, 84, 0),
(14, 'mouse logitech inalambrico rosa', 'mouse logitech m170 inalámbrico rosa descripción tecnología inalámbrica fiable de 2,4 ghz. solida conexión inalámbrica estable a distancias de hasta 10 metros (33 ft). sin apenas retrasos ni interferencias, el juego y el trabajo serán mas previsibles. pruebas realizadas a una distancia de 10 metros. el radio de acción inalámbrico puede variar ligeramente según las condiciones del equipo y el entorno. duración de baterías de hasta 12 meses. funciona hasta un ano sin tener que cambiar las baterías. para prolongar la duración, usa el conmutador de encendido para apagar el mouse cuando no lo estés usando. la duración de las baterías puede variar ligeramente según las condiciones del equipo y tu uso del mouse. atributos - trm_ingreso ?0 canales de memoria ?canales de memoria óptico ?optico puertos ?usb resolución de movimiento ?1000 dpi días de garantía ?365 alámbrico/inalámbrico ?inalambrico botones programables ?2 botones compatibilidad ?windows, mac, chrome os, linux', 'new', 27, 'office', 35, 54, 'social games', 27, 92, 0),
(15, 'teclado bluetooth touch k400', 'control total desde el sofá\r\n\r\nteclado inalámbrico plug and play con un touchpad integrado para controlar desde el sofá el pc conectado a la tv. el k400 es un silencioso teclado fácil de utilizar, con un touchpad integrado y todas las teclas de acceso rápido favoritas de los usuarios de windows® y android™. los controles multimedia simplifican la navegación en un televisor conectado a un pc.\r\n\r\ndiseñado para un control relajado\r\nel touchpad integrado te permite escribir y navegar con un mismo dispositivo. con tu tv controlada desde el pc, el k400 facilita la navegación, sin necesidad de tener que conectar un ratón (ni moverte del sofá). te da máxima fluidez para ver vídeos, navegar por la web o charlar con tus amigos.\r\n\r\nteclas silenciosas, touchpad grande\r\ncon teclas cómodas y silenciosas, y un touchpad grande, la navegación es sencilla. y se instala fácilmente, con el minúsculo receptor usb unifying plug and play.', 'new', 22, 'office', 52, 54, 'office center', 60, 34, 1),
(16, 'combo, teclado y mouse inalambrico mk235', 'tamaño normal y tecnología inalámbrica\r\nteclado de tamaño normal, mouse de uso ambidiestro, totalmente inalámbricos. este dúo ofrece todas las funciones necesarias integradas en un diseño confortable, resistente y fácil de usar, y mantiene tu espacio despejado. con la calidad habitual de logitech, mk235 es una combinación hecha para durar.\r\n\r\nmouse inalámbrico para uso ambidiestro\r\nel compacto diseño portátil ofrece una forma confortable tanto para usuarios diestros como zurdos. es fácil de usar, cabe en cualquier bolsa y se puede llevar a todas partes.\r\n\r\nsimplicidad inalámbrica\r\nsin configuraciones ni complicaciones. el mk235 funciona en cuanto el receptor se conecta al puerto usb. con una confiable conexión inalámbrica, no habrá interrupciones en un radio de 10 metros6el radio de acción inalámbrico depende de las condiciones del entorno y de los dispositivos, para darte la libertad que necesitas.\r\n\r\ncalidad en la que puedes confiar\r\nesta combinación se ha fabricado conforme a los estándares de alta calidad que han convertido a logitech en el líder mundial en mouse y teclados7basado en información de ventas independiente (en unidades) sobre mouse y teclados logitech, agregada a partir de los principales mercados mundiales, incluidos alemania, canadá, china, estados unidos, federación rusa, francia, indonesia, reino unido, república de corea, suecia, taiwán y turquía (entre julio de 2019 y julio de 2020). sólo canal minorista. . las baterías del teclado ofrecen una duración de 36 meses y las del mouse 128la duración de la baterías del mouse y del teclado depende del uso y de los dispositivos (con conmutadores de encendido/apagado). entretanto puedes olvidarte de esos enojosos cambios.', 'new', 19, 'office', 32, 154, 'local media', 55, 65, 0),
(17, 'microfono pro blue yeti negro', 'la comunicación clara y poderosa es importante para todas las organizaciones. los micrófonos de blue te permiten capturar y transmitir con una calidad de sonido sorprendente. blue combina audio de calidad profesional con la simplicidad plug-and-play para ofrecer un rendimiento que está a años luz de los micrófonos integrados para portátiles y cámaras.\r\n\r\nfiel reflejo de la realidad\r\nideal para varias actividades. te brindará un sonido de calidad y conseguirás la nitidez de las voces.\r\n\r\nun formato a tu medida\r\nal ser condensador, posibilitará un resultado claro y fino. es ideal para percusiones, guitarras, pianos, entre otros. por su respuesta tan definida ante la voz, es el más elegido por los profesionales.', 'new', 50, 'office', 43, 176, 'blue', 65, 233, 0),
(18, 'memoria ram adata 4gb ddr4l 2666mhz', 'adata, una de las empresas líder más jóvenes en el mundo de las memorias ram, se destaca por ofrecer la mejor calidad y un completo abanico de soluciones de almacenamiento para acompañar el día a día de sus usuarios. contar con una memoria adata es contar con efectividad, estabilidad y velocidad en el almacenamiento de datos y en la ejecución de sus aplicaciones, para conseguir así un alto rendimiento.\r\n\r\npotencia tu pc\r\ncon su tecnología ddr4, mejorará el desempeño de tu equipo, ya que opera en 3 y 4 canales, generando mayor fluidez y velocidad en la transferencia de datos. ¡optimiza al máximo el rendimiento de tu ordenador!\r\n\r\ntu equipo como nuevo\r\nesta memoria de formato sodimm es ideal para tu notebooks.\r\n¡instálala y comienza a disfrutar de un óptimo funcionamiento!\r\n\r\nvelocidad para exigentes\r\nsi eres fanático de los juegos en línea o lo usas para trabajar con programas o aplicaciones pesadas, esta memoria es para ti. gracias a su velocidad de 2666 mhz, podrás disfrutar de un alto rendimiento y hacer tus trabajos de manera rápida y efectiva.', 'new', 25, 'gaming', 21, 28, 'adata', 90, 62, 0),
(19, 'memoria ram adata 8gb ddr4l 3200mhz', 'adata, una de las empresas líder más jóvenes en el mundo de las memorias ram, se destaca por ofrecer la mejor calidad y un completo abanico de soluciones de almacenamiento para acompañar el día a día de sus usuarios. contar con una memoria adata es contar con efectividad, estabilidad y velocidad en el almacenamiento de datos y en la ejecución de sus aplicaciones, para conseguir así un alto rendimiento.\r\n\r\npotencia tu pc\r\ncon su tecnología ddr4, mejorará el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡optimiza al máximo el rendimiento de tu ordenador y reduce el consumo energético!\r\n\r\ntu equipo como nuevo\r\nesta memoria de formato sodimm es ideal para tu notebooks.\r\n¡instálala y comienza a disfrutar de un óptimo funcionamiento!', 'new', 30, 'gaming', 37, 65, 'adata', 90, 86, 1),
(20, 'memoria ram hyperx fury 8gb', 'hyperx® fury ddr4 realiza overclocking automáticamente a la frecuencia más alta publicada, 1 brindando un impulso plug n play para tus videojuegos, edición de videos y rendering.\r\n\r\ncaracterísticas\r\ntipo de memoria interna: ddr4\r\nmemoria interna: 8 gb\r\ndiseño de memoria: 1 x 8 gb\r\nvelocidad de memoria del reloj: 3200 mhz\r\nlatencia cas: 18\r\nintel extreme memory profile (xmp):', 'new', 50, 'gaming', 67, 88, 'total gaming', 120, 74, 0),
(21, 'impresora epson l121', 'la impresora epson ecotank l121 asequible para el hogar ofrece a las familias un costo de impresión ultra bajo con el sistema de recarga ecotank de epson que imprime 4.500 páginas en negro / 7.500 páginas a color con cada juego de botellas de repuesto3. la ecotank l121 ofrece total confiabilidad gracias a la tecnología heat-free de epson, además de contar con un diseño súper compacto que ocupa poco espacio. ¡imprima sin cartuchos y sin preocupaciones!', 'new', 140, 'office', 65, 76, 'epson', 130, 67, 0),
(22, 'epson botella de tinta cyan', 'tinta para impresora de la marca epson en color cyan', 'new', 7, 'office', 234, 165, 'epson', 5, 443, 0),
(23, 'epson botella de tinta 664 negra', 'tinta para impresora de la marca epson en color negro ', 'new', 8, 'office', 74, 576, 'epson', 5, 453, 0),
(24, 'kit 4 botellas epson t664', 'tinta para impresora en color negro y cyan, compatible con el modelo t664', 'new', 27, 'office', 34, 67, 'epson', 5, 54, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `seller_name` varchar(32) NOT NULL,
  `description` varchar(128) NOT NULL,
  `joined_date` date NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `seller_name`, `description`, `joined_date`, `active`) VALUES
(1, 'xiaomi', '', '2022-09-15', 1),
(2, 'apple', '', '2022-08-01', 1),
(3, 'motorola', '', '2022-11-05', 1),
(4, 'lenovo', '', '2022-11-05', 1),
(5, 'logitech', '', '2022-09-15', 1),
(6, 'adata', '', '2022-10-20', 1),
(7, 'epson', '', '2022-10-24', 1),
(8, 'samsung', '', '2022-09-13', 1),
(9, 'microsoft', '', '2022-11-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `dark_mode` tinyint(1) NOT NULL,
  `language` tinyint(1) NOT NULL,
  `recomendations` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_preferences`
--

INSERT INTO `user_preferences` (`id`, `admin`, `dark_mode`, `language`, `recomendations`) VALUES
(1, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_user`
--
ALTER TABLE `my_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my_user`
--
ALTER TABLE `my_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
