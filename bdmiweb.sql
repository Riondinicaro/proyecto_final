-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2019 a las 08:13:30
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmiweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_pais_nacimiento` int(11) NOT NULL,
  `autor_img` varchar(50) NOT NULL,
  `id_genero` int(30) NOT NULL,
  `biografia` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `apellido`, `fecha_nacimiento`, `id_pais_nacimiento`, `autor_img`, `id_genero`, `biografia`) VALUES
(1, 'FLORENCIA', 'BONELLI', '1971-05-05', 1, 'florencia_bonelli.jpg', 1, 'Nació el 5 de mayo de 1971 en la ciudad de Córdoba, Argentina. Estudió Ciencias Económicas y se recibió de contadora pública, profesión que abandonó después de leer El Árabe, de Edith Hull, libro que la impulsó a dedicarse profesionalmente a la escritura, en 1999.\r\nAutora de títulos como Bodas de odio, Indias blancas, El cuarto arcano y Me llaman Artemio Furia, todos ellos enmarcados en los acontecimientos históricos del siglo XIX argentino, se convirtió en la referente actual de la novela histórico romántica de la Argentina. Sus libros se han traducido a varias lenguas y han conseguido la admiración de lectores en todo el mundo.'),
(2, 'BLUE', 'JEANS', '1978-11-07', 2, 'blue_jeans.jpg', 1, 'Francisco de Paula Fernández González, nació el 7 de noviembre de 1978 en Sevilla, España. Es conocido como Blue Jeans a la hora de escribir libros. Es uno de los autores españoles con más seguidores en las redes sociales. Licenciado en Periodismo, actualmente reside en Madrid. Canciones para Paula fue su primera novela, la cual fue un éxito, convirtiéndolo en un referente de la literatura juvenil. Posteriormente le siguieron dos novelas más, \"¿Sabes que te quiero?\" y \"Cállame con un beso\", las cuales conformaron su primera trilogía. Y eso lo ha impulsado a seguir escribiendo.\r\nTraducidas a varios idiomas, sus novelas cuentan ya con más de un millón de seguidores. Por este hecho, su trayectoria ha sido reconocida con el prestigioso premio Cervantes Chico 2013.  '),
(3, 'ANITA GRACE', 'HOWARD', '1970-06-09', 3, 'a_g_howard.jpg', 1, 'Mejor conocida como A.G. Howard, nació el 9 de Junio de 1970 en Chelsea, Estados Unidos. Sus novelas van dirigidas especialmente a un público juvenil adulto, de temática fantástica, revisitando para su audiencia los universos literarios de Alicia en el País de las Maravillas o el Fantasma de la Ópera.\r\nTrabajó como Bibliotecaria en un instituto de educación secundaria en Texas durante 8 años y fue en ese tiempo dónde escribió su primer libro de la serie \"Splintered\", publicada en España como \"Susurros\", preguntándose qué habría sucedido si la sutil oscuridad de Alicia en el País de las Maravillas hubiera tenido más protagonismo en la historia de Carroll.\r\nComenzó su trayectoria literaria en 2012 y desde entonces no ha dejado de escribir, dedicándose profesionalmente a la literatura de ficción gótica.\r\n'),
(4, 'VIVIANA', 'RIVERO', '1966-02-01', 1, 'viviana_rivero.jpg', 3, 'Nació el 1 de febrero de 1966 en Córdoba, Argentina. Es una escritora argentina de novela histórica y realismo romántico.\r\nSe recibió de abogada en la Universidad Nacional de Córdoba y antes de dedicarse de pleno a la literatura, se desempeño como asesora legal de empresas, abogada litigante. Fue también fundadora de grupos para el crecimiento y el desarrollo de la mujer y ha sido productora y conductora de programas televisivos. Entre sus novelas más reconocidas se encuentran \"Secreto bien guardado\", \"Y ellos se fueron\", \"Lo que no se dice\", \"La dama de noche\", \"La magia de la vida\", \"Los colores de la felicidad\", y \"Si\", todas estas con gran éxito de público y ventas. Mientras que su libro \"Mujer y maestra\" obtuvo el Primer Premio Novela Histórica 2009 del Gobierno de San Luis. En mayo de 2011 fue premiada por la Legislatura de la provincia de Córdoba como artista destacada del año, y en octubre el diario La Voz del Interior la nominó “cordobesa del año” por su actividad literaria. \r\n'),
(5, 'GLORIA V.', 'CASAÑAS', '1964-08-22', 1, 'gloria_v_casañas.jpg', 3, 'Nació el 22 de agosto de 1964 en Buenos Aires, Argentina y se especializa en novelas románticas y ficción histórica. Se recibió de abogada en la Facultad de Derecho de la Universidad de Buenos Aires, dónde desempeña como docente en la cátedra de Historia del Derecho Argentino. Fue en 2008 cuando publicó su primer trabajo: \"En alas de la seducción\" el cual fue muy bien recibido y en 2010 publica el libro \"La maestra en la Laguna\" convirtiéndose éste último en un éxito en ventas y llevándola a la notoriedad entre los fanáticos del género. Su escritura se caracteriza por una exhaustiva investigación histórica y en donde Casañas ha mostrado un especial interés en la historia de los pueblos originarios, algo que ha quedado reflejado de manera muy clara a la hora de crear la ambientación y el trasfondo de algunas de sus novelas.'),
(6, 'ISABEL', 'ALLENDE', '1942-08-02', 6, 'isabel.jpg', 3, 'Escritora chilena, con nacionalidad estadounidense. Nació el 2 de agosto de 1942 en Lima, Perú mientras su padre se desempeñaba como secretario de la embajada de Chile en Perú pero la separación de sus padres hizo que Isabel retornara junto a su madre y sus dos hermanos a Chile. Cursó estudios de periodismo, y mientras se iniciaba en la escritura de obras de teatro y cuentos infantiles, trabajó como redactora y columnista en la prensa escrita y la televisión. En 1982 publicó su primera novela \"La casa de los espíritus\", con la que se consagró definitivamente como una de las grandes escritoras hispanoamericanas de todos los tiempos. Esta primera narración se convirtió de inmediato en un best-seller en numerosos países del subcontinente americano (a pesar de que su publicación había sido rechazada por varias editoriales de Hispanoamérica), en España y en otras naciones de Europa.\r\nEntre sus grandes obras se destacan: De amor y de Sombra, Eva Luna, El plan Infinito, Paula, Hija de la Fortuna, Retrato en Sepia y el libro de memorias Mi País Inventado, entre otras más. En 2010 obtuvo el Premio Nacional de Literatura de su país. Es considerada como la escritora viva más leída del mundo de la lengua española y sus obras han sido traducidas a 42 idiomas.'),
(11, 'BECCA', 'FITZPATRICK', '1979-02-03', 3, 'becca.jpg', 1, 'Nació el 3 de febrero de 1979 en Utah, Estados Unidos. Estudió en la Universidad de Brigham Young, donde se licenció en Ciencias de la Salud en el año 2001. Ejerció diversos oficios como secretaria, maestra y contadora antes de poder dedicarse por completo a la literatura. En el año 2003, por su vigésimo cuarto cumpleaños, su marido le regaló un curso de escritura creativa, siendo precisamente ahí donde comenzó a gestarse el que sería su primer gran éxito, Hush, Hush, una novela dedicada a la literatura para jóvenes adultos convirtiéndose en toda una saga de gran éxito de ventas en Estados Unidos y entrando en la lista de Bestseller del New York Times. \r\nSus obras han sido traducidas a numerosos idiomas y se han vendido los derechos de Hush, Hush, de cara a una posible adaptación cinematográfica. '),
(14, 'RICK', 'RIORDAN', '1964-06-05', 3, 'riordan.jpg', 2, 'Nació el 5 de junio de 1964 en San Antonio, Texas, Estados Unidos. Es conocido por ser el autor de la saga: Percy Jackson y los Dioses del Olimpo, basada en la mitología griega y la cual nació como una historia que le contaba a sus hijos.\r\nEn mayo de 2010, debido al éxito de Percy Jackson, Riordan publica \"Las Crónicas de Kane\", saga que trata sobre la mitología egipcia. Y el mismo año, en octubre crea una secuela de Percy Jackson, \"Los héroes del Olimpo\" saga basada en la mitología griega y romana.\r\nEl 6 de octubre de 2015 es lanzado el primer volumen de la trilogía \"Magnus Chase y los Dioses de Asgard\" que tiene como tema principal la mitología nordica.\r\nEntre otros tantos libros, Riordan ayudó en la creación de  la serie de libros infantiles \"The 39 Clues\", escribiendo varios de los libros de la serie entre los cuales se encontraba \"El laberinto de Huesos\", el cual estuvo en la lista de \"The New York Times Best Seller\" el 28 de septiembre de 2008. \r\nEn 2015 anunció su nueva saga \"Las pruebas de Apolo: El oráculo oculto\" enfocada en la mitología griega que tiene como protagonista a un dios Apolo humanizado como castigo por Zeus. Actualmente Riordan se encuentra trabajando en el cuarto libro de dicha saga.'),
(16, 'PHILIP', 'PULLMAN', '1946-10-19', 8, 'pullman.jpg', 2, 'Nació el 19 de octubre de 1946 en Norwich, Inglaterra. Es un autor inglés conocido principalmente por ser el autor de la trilogía narrativa La Materia Oscura. Estudió en el  Exeter College de Oxford y comenzó a trabajar como profesor de enseñanza primaria. En 1978 decidió especializarse en las novelas infantiles y juveniles mientras trabajaba para el Westminster College de Oxford. Su primer gran éxito le llegó en 1995 con la publicación de \"La Brújula Dorada\" primera parte de una serie de gran éxito en todo el mundo y que fue llevada al cine. A lo largo de su carrera,  ha recibido numerosos premios, como la Carnegie Medal, el Premio Guardian de Literatura Infantil y Juvenil y el Memorial Astrid Lindgren. Es un colaborador habitual de varios medios de comunicación y se ha destacado por sus firmes posiciones sobre temas como la libertad de pensamiento, los derechos civiles o el ateísmo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores_libros`
--

CREATE TABLE `autores_libros` (
  `id_autor` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autores_libros`
--

INSERT INTO `autores_libros` (`id_autor`, `id_libro`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(6, 16),
(6, 17),
(11, 24),
(11, 25),
(11, 26),
(11, 27),
(14, 28),
(14, 29),
(14, 30),
(14, 31),
(14, 32),
(16, 33),
(16, 34),
(16, 35),
(1, 37),
(3, 38),
(2, 39),
(4, 40),
(4, 41),
(5, 42),
(5, 43),
(6, 44),
(6, 45),
(16, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id_edit` int(11) NOT NULL,
  `nombre_edit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id_edit`, `nombre_edit`) VALUES
(1, 'Alfaguara'),
(2, 'Planeta'),
(3, 'Oz'),
(4, 'emecé'),
(5, 'Plaza&Janés'),
(6, 'Sudamericana'),
(9, 'Ediciones B'),
(11, 'Salamandra'),
(13, 'Roca'),
(14, 'Suma de letras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `nombre_genero`) VALUES
(1, 'Novela Juvenil'),
(2, 'Infanto-Juvenil'),
(3, 'Narrativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `id_genero` int(30) NOT NULL,
  `numero_paginas` smallint(6) NOT NULL,
  `portada_libro` varchar(50) NOT NULL,
  `resumen` varchar(2000) NOT NULL,
  `id_editorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `isbn`, `titulo`, `id_genero`, `numero_paginas`, `portada_libro`, `resumen`, `id_editorial`) VALUES
(2, 9789870429166, 'NACIDA BAJO EL SIGNO DEL TORO', 1, 424, 'nacida_bajo_el_signo_del_toro.jpg', 'La vida de Camila da un giro drástico el día en que la empresa de su padre se declara en bancarrota. Un departamento más pequeño en un barrio viejo y decrépito y un colegio público de jornada simple son algunos de los cambios que debe enfrentar. Detesta la nueva realidad, por lo que se encierra en la soledad que le brindan sus libros. Hasta que conoce a su nueva vecina, una astróloga que la iniciará en los misterios de las nacidas bajo el signo del Toro. Y, a medida que el cambio se profundiza en Camila, la realidad que tanto detestaba va tomando un nuevo color. En ella, el lindo de la clase, Sebastián, y Lautaro, el enigmático mejor alumno, se convertirán en los protagonistas.', 1),
(3, 9789877381610, 'Nacida Bajo el Sol de Acuario', 1, 608, 'nacida_bajo_el_sol_de_acuario.jpg', '', 1),
(4, 9789877383454, 'Nacida Bajo el Fuego de Aries', 1, 624, 'nacida_bajo_el_fuego_de_aries.jpg', '', 1),
(5, 9789504954699, 'Canciones para Paula', 1, 800, 'canciones_para_paula.jpg', '', 2),
(6, 9789504955931, '¿Sabes que te quiero?', 1, 696, 'sabes_que_te_quiero.jpg', '', 2),
(7, 9789504955948, 'Cállame con un beso', 1, 736, 'callame_con_un_beso.jpg', '', 2),
(8, 9788494112324, 'Susurros', 1, 376, 'susurros.jpg', '', 3),
(9, 9788494172960, 'Delirios', 1, 381, 'delirios.jpg', '', 3),
(10, 9788416224159, 'Engaños', 1, 361, 'engaños.jpg', '', 3),
(11, 9789500435727, 'La Dama de Noche', 3, 480, 'la_dama_de_noche.jpg', '', 4),
(12, 9789500436502, 'La Magia de la Vida', 3, 464, 'la_magia_de_la_vida.jpg', '', 4),
(13, 9789877250077, 'La maestra de la laguna', 3, 832, 'la_maestra_de_la_laguna.jpg', '', 5),
(14, 9789506443788, 'La salvaje de Bostón', 3, 512, 'la_salvaje_de_boston.jpg', '', 5),
(16, 9789500752442, 'El amante Japonés', 3, 352, 'el_amante_japones.jpg', '', 6),
(17, 9789500762823, 'Largo pétalo de mar', 3, 440, 'petalo.jpg', '', 6),
(24, 9788466644174, 'Hush, hush', 2, 366, 'hush.jpg', '', 9),
(25, 9788466646390, 'Crescendo', 2, 405, 'crescendo.jpg', '', 9),
(26, 9789876272728, 'Silencio', 2, 412, 'silencio.jpg', '', 9),
(27, 9788493961305, 'Finale', 2, 390, 'finale1.jpg', '', 9),
(28, 9788498382365, 'El ladrón del rayo', 2, 285, 'percy.jpg', '', 11),
(29, 9788498382808, 'El mar de los Monstruos', 2, 253, 'monstruos.jpg', '', 11),
(30, 9788498382921, 'La maldición del Titán', 2, 280, 'titan.jpg', '', 11),
(31, 9788498382525, 'La batalla del Laberinto', 2, 313, 'laberinto.jpg', '', 11),
(32, 9788498383133, 'El último héroe del Olimpo', 2, 346, 'olimpo.jpg', '', 11),
(33, 9788417092566, 'La brújula Dorada', 1, 400, 'brujula.jpg', '', 13),
(34, 9788417092573, 'La Daga', 1, 320, 'daga.jpg', '', 13),
(35, 9788417167196, 'El catalejo Lacado', 1, 496, 'catalejo.jpg', '', 13),
(37, 9789877391053, 'Indias Blancas', 3, 480, 'indias.jpg', '', 14),
(38, 9788416224319, 'Salvajes', 1, 256, 'sal.jpg', '', 3),
(39, 9789504946472, 'Algo tan sencillo como tuitear te quiero', 1, 400, 'sencillo.jpg', '', 2),
(40, 9789500439664, 'Zafiros en la piel', 3, 352, 'zafiros.jpg', '', 4),
(41, 9789500434751, 'Lo que no se dice', 3, 436, 'dice.jpg', '', 4),
(42, 9789506444617, 'La mirada del Puma', 3, 480, 'puma.jpg', '', 5),
(43, 9789506442613, 'El ángel roto', 3, 616, 'el_angel_roto.jpg', '', 5),
(44, 9788401019760, 'Más allá del Invierno', 3, 352, 'invierno.jpg', '', 5),
(45, 9788401352072, 'El cuaderno de Maya', 3, 444, 'maya.jpg', '', 6),
(46, 9788417167790, 'El libro de la Oscuridad', 1, 448, 'oscuridad.jpg', '', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'España'),
(3, 'Estados Unidos'),
(5, 'Chile'),
(6, 'Perú'),
(7, 'Francia'),
(8, 'Inglaterra'),
(9, 'Italia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr_comentarios`
--

CREATE TABLE `usr_comentarios` (
  `id_comentario` int(11) NOT NULL,
  `descripción` varchar(1000) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(30) NOT NULL,
  `usr_apellido` varchar(30) NOT NULL,
  `usr_user_name` varchar(20) NOT NULL,
  `usr_password` varchar(20) NOT NULL,
  `usr_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_name`, `usr_apellido`, `usr_user_name`, `usr_password`, `usr_email`) VALUES
(1, 'Carolina', 'Riondini', 'Caro', '123456', 'caroriondini27@gmail.com'),
(2, 'Administrador', '', 'root', 'root', 'root@root.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`),
  ADD KEY `id_pais_nacimiento` (`id_pais_nacimiento`),
  ADD KEY `genero` (`id_genero`);

--
-- Indices de la tabla `autores_libros`
--
ALTER TABLE `autores_libros`
  ADD PRIMARY KEY (`id_libro`,`id_autor`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id_edit`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_genero` (`id_genero`,`id_editorial`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `usr_comentarios`
--
ALTER TABLE `usr_comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id_edit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usr_comentarios`
--
ALTER TABLE `usr_comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `autores_ibfk_1` FOREIGN KEY (`id_pais_nacimiento`) REFERENCES `paises` (`id_pais`),
  ADD CONSTRAINT `autores_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`);

--
-- Filtros para la tabla `autores_libros`
--
ALTER TABLE `autores_libros`
  ADD CONSTRAINT `autores_libros_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`),
  ADD CONSTRAINT `autores_libros_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`id_edit`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`);

--
-- Filtros para la tabla `usr_comentarios`
--
ALTER TABLE `usr_comentarios`
  ADD CONSTRAINT `usr_comentarios_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `usr_comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
