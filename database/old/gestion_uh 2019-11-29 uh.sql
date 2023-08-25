-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2019 a las 00:51:20
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_uh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_avances`
--

CREATE TABLE `om_avances` (
  `id_avance` int(11) NOT NULL,
  `nombre_avance` varchar(255) NOT NULL,
  `proyecto` int(11) NOT NULL,
  `presupuesto_ejecutado` double NOT NULL,
  `fecha_entrega` date NOT NULL,
  `archivo_avance` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_avances`
--

INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `proyecto`, `presupuesto_ejecutado`, `fecha_entrega`, `archivo_avance`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(2, 'Avance 1', 1, 1000000, '2019-11-29', '', 0, 'edit', 'admin', '2019-11-29 11:11:50'),
(3, 'Avance 2', 1, 1000000, '2019-11-29', '', 0, 'edit', 'admin', '2019-11-29 11:11:19'),
(4, 'Avance 3', 1, 1000000, '2019-11-29', '', 0, 'copy', 'admin', '2019-11-29 11:11:34'),
(5, 'Avance 1', 13, 10000, '2019-11-27', '', 0, 'add', 'admin', '2019-11-29 11:11:51'),
(6, 'Avance 2', 13, 20000, '2019-11-28', '', 0, 'copy', 'admin', '2019-11-29 11:11:03'),
(7, 'Avance 3', 13, 30000, '2019-11-29', '', 0, 'edit', 'admin', '2019-11-29 11:11:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_captcha`
--

CREATE TABLE `om_captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `word` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_captcha`
--

INSERT INTO `om_captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(13, 1560275352, '192.168.101.119', '88AlL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_facultades_lista`
--

CREATE TABLE `om_facultades_lista` (
  `facultad_lista_id` int(11) NOT NULL,
  `name_facultad_lista` varchar(255) NOT NULL,
  `codificacion` varchar(2) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_facultades_lista`
--

INSERT INTO `om_facultades_lista` (`facultad_lista_id`, `name_facultad_lista`, `codificacion`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Facultad de Ciencias Básicas', 'FB', 0, 'add', 'No', '2019-07-22 21:30:32'),
(2, 'Facultad de Administración y Derecho', 'FA', 0, 'add', 'No', '2019-07-22 21:30:32'),
(3, 'Facultad de Ciencias Humanas, Artes y Letras', 'FH', 0, 'add', 'No', '2019-07-22 21:30:51'),
(4, 'Facultad de Ingeniería', 'FI', 0, 'add', 'No', '2019-07-22 21:30:51'),
(5, 'Educación Continua', 'EC', 0, 'add', 'No', '2019-07-22 22:44:03'),
(6, 'Proyectos Interfacultades', 'IF', 0, 'add', 'No', '2019-07-22 22:44:03'),
(7, 'Proyectos de proyección social', 'PS', 0, 'add', 'No', '2019-07-22 22:44:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_grupos_colciencias_lista`
--

CREATE TABLE `om_grupos_colciencias_lista` (
  `id_grupo_colciencias` int(11) NOT NULL,
  `nombre_grupo` varchar(255) NOT NULL,
  `lider_grupo` varchar(255) NOT NULL,
  `codigo_grupo` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) NOT NULL DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_grupos_colciencias_lista`
--

INSERT INTO `om_grupos_colciencias_lista` (`id_grupo_colciencias`, `nombre_grupo`, `lider_grupo`, `codigo_grupo`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'DIONE', 'YENNY CAROLINA', 'COL0202304', 0, 'add', 'No', '2019-07-10 02:27:28'),
(2, 'HORIZONTE I&E Innovacion y Emprendimiento', 'JOHN ORLANDO', 'COL0202636', 0, 'add', 'No', '2019-07-10 02:27:28'),
(3, 'Sociedad, Conocimiento y Educación', 'YENIFER PATRICIA', 'COL0022478', 0, 'add', 'No', '2019-07-10 02:27:28'),
(4, 'SISOMA Seguridad, Industria, Salud Ocupacional, Medio Ambiente', 'CAMILO ALEJANDRO', 'COL0107136', 0, 'add', 'No', '2019-07-10 02:27:28'),
(5, 'Grupo de investigación en enseñanza de las ciencias exactas y naturales aplicadas (GICENA)', 'LUISA ALEJANDRA', 'COL0199192', 0, 'add', 'No', '2019-07-10 02:27:28'),
(6, 'RESPONSABILIDAD SOCIAL DEL DISEÑO EN COLOMBIA', 'JULIO CESAR', 'COL0128978', 0, 'add', 'No', '2019-07-10 02:27:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_grupos_unihorizonte`
--

CREATE TABLE `om_grupos_unihorizonte` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) NOT NULL DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_grupos_unihorizonte`
--

INSERT INTO `om_grupos_unihorizonte` (`id_grupo`, `nombre_grupo`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Ninguno', 1, 'add', 'No', '2019-07-10 02:29:44'),
(2, 'Grupo primer proyecto', 0, 'add', 'No', '2019-07-10 02:29:44'),
(3, 'Grupo segundo proyecto', 0, 'add', 'No', '2019-07-10 02:29:44'),
(4, 'Grupo proyecto investigación web', 0, 'edit', 'admin', '2019-11-29 10:11:17'),
(5, 'Grupo de prueba 1', 0, 'add', 'admin', '2019-11-27 15:11:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_holidays`
--

CREATE TABLE `om_holidays` (
  `holiday_id` int(11) NOT NULL,
  `holiday_year` int(11) NOT NULL,
  `holiday_list` text NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_holidays`
--

INSERT INTO `om_holidays` (`holiday_id`, `holiday_year`, `holiday_list`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 2018, '2018-01-01;\n2018-01-08;\n2018-03-19;\n2018-03-25;\n2018-03-29;\n2018-03-30;\n2018-04-01;\n2018-05-01;\n2018-05-14;\n2018-06-04;\n2018-06-11;\n2018-07-02;\n2018-07-20;\n2018-08-07;\n2018-08-20;\n2018-10-15;\n2018-11-05;\n2018-11-12;\n2018-12-08;\n2018-12-25', 0, 'add', 'No', '2019-02-28 17:03:03'),
(2, 2019, '2019-01-01;\n2019-01-07;\n2019-03-25;\n2019-04-14;\n2019-04-18;\n2019-04-19;\n2019-04-21;\n2019-05-01;\n2019-06-03;\n2019-06-24;\n2019-07-01;\n2019-07-20;\n2019-08-07;\n2019-08-19;\n2019-10-14;\n2019-11-04;\n2019-11-11;\n2019-12-08;\n2019-12-25', 0, 'add', 'No', '2019-02-28 17:03:03'),
(3, 2020, '2020-01-01;\r\n2020-01-06;\r\n2020-03-23;\r\n2020-04-09;\r\n2020-04-10;\r\n2020-05-01;\r\n2020-05-25;\r\n2020-06-15;\r\n2020-06-22;\r\n2020-06-29;\r\n2020-07-20;\r\n2020-08-07;\r\n2020-08-17;\r\n2020-10-12;\r\n2020-11-02;\r\n2020-11-16;\r\n2020-12-08;\r\n2020-12-25;', 0, 'add', 'No', '2019-02-28 17:03:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_languages`
--

CREATE TABLE `om_languages` (
  `language_id` int(11) NOT NULL,
  `language_system` varchar(255) NOT NULL,
  `language_name` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_languages`
--

INSERT INTO `om_languages` (`language_id`, `language_system`, `language_name`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'spanish', 'Español', 0, 'add', 'No', '2019-02-28 17:03:44'),
(2, 'english', 'Inglés', 0, 'add', 'No', '2019-02-28 17:03:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_lineas_facultad_lista`
--

CREATE TABLE `om_lineas_facultad_lista` (
  `id_linea_facultad_lista` int(11) NOT NULL,
  `nombre_linea_facultad_lista` varchar(255) NOT NULL,
  `facultad` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_lineas_facultad_lista`
--

INSERT INTO `om_lineas_facultad_lista` (`id_linea_facultad_lista`, `nombre_linea_facultad_lista`, `facultad`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Enseñanza de las Matemáticas y Ciencias Exactas', 1, 0, 'add', 'No', '2019-07-22 21:37:31'),
(2, 'Aplicación de las ciencias básicas para el estudio de los fenómenos naturales y ambientales', 1, 0, 'add', 'No', '2019-07-22 21:37:31'),
(3, 'Emprendimiento y Sociedad', 2, 0, 'add', 'No', '2019-07-22 21:37:31'),
(4, 'Mercadeo y Finanzas', 2, 0, 'add', 'No', '2019-07-22 21:37:31'),
(5, 'Identidad Social y Cultural', 3, 0, 'add', 'No', '2019-07-22 21:37:31'),
(6, 'Producción e intervención del espacio social', 3, 0, 'add', 'No', '2019-07-22 21:37:31'),
(7, 'Seguridad, Higiene y Gestión Ambiental', 4, 0, 'add', 'No', '2019-07-22 21:37:31'),
(8, 'Redes y Telecomunicaciones', 4, 0, 'add', 'No', '2019-07-22 21:37:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_lineas_institucionales_lista`
--

CREATE TABLE `om_lineas_institucionales_lista` (
  `id_linea_institucional_lista` int(11) NOT NULL,
  `nombre_linea_institucional` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_lineas_institucionales_lista`
--

INSERT INTO `om_lineas_institucionales_lista` (`id_linea_institucional_lista`, `nombre_linea_institucional`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Competitividad, Productividad e Innovación', 0, 'add', 'No', '2019-06-04 15:07:38'),
(2, 'Educación para el Desarrollo, la Paz y la Felicidad', 0, 'edit', 'admin', '2019-11-27 15:11:09'),
(3, 'Estudios Socioambientales', 0, 'add', 'No', '2019-06-04 15:07:38'),
(4, 'Diseño, estructuración e Ingeniería de Procesos', 0, 'add', 'No', '2019-06-26 21:43:42'),
(5, 'Producción de conocimiento en entornos virtuales de aprendizaje', 0, 'add', 'No', '2019-06-26 21:44:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_lineas_por_programa`
--

CREATE TABLE `om_lineas_por_programa` (
  `id_lineas_por_programa` int(11) NOT NULL,
  `nombre_linea_por_programa` varchar(255) NOT NULL,
  `programa_academico` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_lineas_por_programa`
--

INSERT INTO `om_lineas_por_programa` (`id_lineas_por_programa`, `nombre_linea_por_programa`, `programa_academico`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Riesgos	en	Seguridad Industrial', 1, 0, 'add', 'No', '2019-08-02 00:04:03'),
(2, 'Riesgos Higiénicos', 1, 0, 'add', 'No', '2019-08-02 00:04:03'),
(3, 'Administración de Salud y Seguridad en el Trabajo', 1, 0, 'add', 'No', '2019-09-13 03:15:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_locks`
--

CREATE TABLE `om_locks` (
  `id_lock` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `tabla` varchar(255) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_log`
--

CREATE TABLE `om_log` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `evento` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_log`
--

INSERT INTO `om_log` (`id`, `usuario`, `fecha_hora`, `evento`) VALUES
(1, 'admin', '2017-07-17 13:44:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(2, 'admin', '2017-07-17 14:13:53', 'Cierre de sesión desde:192.168.101.122'),
(3, 'No definido', '2017-07-17 14:13:59', 'Cierre de sesión desde:192.168.101.122'),
(4, 'No definido', '2017-07-17 14:36:57', 'Cierre de sesión desde:127.0.0.1'),
(5, 'No definido', '2017-07-17 14:38:06', 'Cierre de sesión desde:192.168.101.122'),
(6, 'No definido', '2017-07-17 14:40:33', 'Cierre de sesión desde:127.0.0.1'),
(7, 'admin', '2017-07-17 15:29:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(8, 'admin', '2017-07-17 15:29:43', 'Cierre de sesión desde:192.168.101.122'),
(9, 'agente', '2017-07-17 15:30:26', 'Inicio de sesión correcto desde:192.168.101.200'),
(10, 'agente', '2017-07-17 15:30:29', 'Cierre de sesión desde:192.168.101.200'),
(11, 'admin', '2017-07-17 15:46:08', 'Inicio de sesión correcto desde:192.168.101.10'),
(12, 'admin', '2017-07-17 15:46:16', 'Cierre de sesión desde:192.168.101.10'),
(13, 'No definido', '2017-07-17 15:46:30', 'Cierre de sesión desde:127.0.0.1'),
(14, 'No definido', '2017-07-17 15:50:16', 'Cierre de sesión desde:127.0.0.1'),
(15, 'admin', '2017-07-17 15:50:20', 'Inicio de sesión correcto desde:192.168.101.122'),
(16, 'admin', '2017-07-17 15:50:25', 'Cierre de sesión desde:192.168.101.122'),
(17, 'asddf', '2017-07-17 15:50:44', 'Inicio de sesión fallido desde:192.168.101.122'),
(18, 'a', '2017-07-17 15:50:57', 'Inicio de sesión fallido desde:192.168.101.122'),
(19, 'fdsasdfasd4d3ef', '2017-07-17 15:51:07', 'Inicio de sesión fallido desde:192.168.101.122'),
(20, 'dsadf', '2017-07-17 15:51:24', 'Inicio de sesión fallido desde:192.168.101.200'),
(21, 'admin', '2017-07-18 18:45:12', 'Inicio de sesión correcto desde:192.168.101.122'),
(22, 'admin', '2017-07-18 18:46:13', 'Cierre de sesión desde:192.168.101.122'),
(23, 'No definido', '2017-07-18 18:46:19', 'Cierre de sesión desde:192.168.101.122'),
(24, 'admin', '2017-07-18 18:50:26', 'Inicio de sesión correcto desde:192.168.101.122'),
(25, 'admin', '2017-07-18 19:20:13', 'Cierre de sesión desde:192.168.101.122'),
(26, 'admin', '2017-07-18 19:20:15', 'Inicio de sesión fallido desde:192.168.101.122'),
(27, 'admin', '2017-07-18 19:20:19', 'Inicio de sesión fallido desde:192.168.101.122'),
(28, 'admin', '2017-07-18 19:20:58', 'Inicio de sesión correcto desde:192.168.101.122'),
(29, 'admin', '2017-07-18 20:39:08', 'Cierre de sesión desde:192.168.101.122'),
(30, 'admin', '2017-07-18 20:39:12', 'Inicio de sesión correcto desde:192.168.101.122'),
(31, 'admin', '2017-07-18 20:39:59', 'Cierre de sesión desde:192.168.101.122'),
(32, 'No definido', '2017-07-18 22:05:34', 'Cierre de sesión desde:127.0.0.1'),
(33, 'system', '2017-07-18 22:25:21', 'Inicio de sesión correcto desde:192.168.101.122'),
(34, 'system', '2017-07-18 22:25:32', 'Cierre de sesión desde:192.168.101.122'),
(35, 'system', '2017-07-18 22:25:36', 'Inicio de sesión fallido desde:192.168.101.122'),
(36, 'system', '2017-07-18 22:25:42', 'Inicio de sesión fallido desde:192.168.101.122'),
(37, 'admin', '2017-07-18 22:25:51', 'Inicio de sesión fallido desde:192.168.101.122'),
(38, 'asdf', '2017-07-18 22:26:37', 'Inicio de sesión fallido desde:192.168.101.122'),
(39, 'asdf', '2017-07-18 22:26:40', 'Inicio de sesión fallido desde:192.168.101.122'),
(40, 'admin', '2017-07-18 22:26:45', 'Inicio de sesión fallido desde:192.168.101.122'),
(41, 'agente', '2017-07-18 22:26:49', 'Inicio de sesión fallido desde:192.168.101.122'),
(42, 'No definido', '2017-07-18 22:26:56', 'Cierre de sesión desde:192.168.101.122'),
(43, 'system', '2017-07-18 22:34:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(44, 'system', '2017-07-18 22:34:48', 'Cierre de sesión desde:192.168.101.122'),
(45, 'No definido', '2017-07-19 13:25:02', 'Cierre de sesión desde:127.0.0.1'),
(46, 'admin', '2017-07-19 13:25:40', 'Inicio de sesión fallido desde:192.168.101.122'),
(47, 'asdfsdasd', '2017-07-19 13:25:45', 'Inicio de sesión fallido desde:192.168.101.122'),
(48, 'system', '2017-07-19 13:45:56', 'Inicio de sesión correcto desde:192.168.101.122'),
(49, 'admin', '2017-07-24 14:51:12', 'Inicio de sesión correcto desde:192.168.101.122'),
(50, 'admin', '2017-07-24 14:51:24', 'Cierre de sesión desde:192.168.101.122'),
(51, 'admin', '2017-07-24 14:51:55', 'Inicio de sesión fallido desde:192.168.101.122'),
(52, 'system', '2017-07-24 14:51:59', 'Inicio de sesión correcto desde:192.168.101.122'),
(53, 'system', '2017-07-24 14:52:04', 'Cierre de sesión desde:192.168.101.122'),
(54, 'No definido', '2017-07-24 17:27:37', 'Cierre de sesión desde:127.0.0.1'),
(55, 'admin', '2017-07-24 18:38:49', 'Inicio de sesión correcto desde:192.168.101.122'),
(56, 'admin', '2017-07-24 18:38:52', 'Cierre de sesión desde:192.168.101.122'),
(57, 'admin', '2017-07-24 18:42:44', 'Inicio de sesión correcto desde:192.168.101.122'),
(58, 'admin', '2017-07-24 19:22:53', 'Cierre de sesión desde:192.168.101.122'),
(59, 'admin', '2017-07-24 19:23:14', 'Inicio de sesión correcto desde:192.168.101.122'),
(60, 'admin', '2017-07-24 19:31:00', 'Cierre de sesión desde:192.168.101.122'),
(61, 'admin', '2017-07-24 19:31:04', 'Inicio de sesión correcto desde:192.168.101.122'),
(62, 'admin', '2017-07-24 19:33:51', 'Cierre de sesión desde:192.168.101.122'),
(63, 'admin', '2017-07-24 20:23:06', 'Inicio de sesión correcto desde:192.168.101.122'),
(64, 'admin', '2017-07-24 20:23:08', 'Cierre de sesión desde:192.168.101.122'),
(65, 'admin', '2017-07-24 20:23:13', 'Inicio de sesión correcto desde:192.168.101.122'),
(66, 'admin', '2017-07-24 20:23:26', 'Cierre de sesión desde:192.168.101.122'),
(67, 'admin', '2017-07-24 20:28:55', 'Inicio de sesión correcto desde:192.168.101.122'),
(68, 'admin', '2017-07-24 20:48:07', 'Cierre de sesión desde:192.168.101.122'),
(69, 'admin', '2017-07-24 20:48:13', 'Inicio de sesión correcto desde:192.168.101.122'),
(70, 'admin', '2017-07-24 20:49:12', 'Cierre de sesión desde:192.168.101.122'),
(71, 'admin', '2017-07-24 20:49:15', 'Inicio de sesión correcto desde:192.168.101.122'),
(72, 'admin', '2017-07-24 20:49:23', 'Cierre de sesión desde:192.168.101.122'),
(73, 'asdf', '2017-07-24 20:50:20', 'Inicio de sesión fallido desde:192.168.101.122'),
(74, 'sdf', '2017-07-24 20:50:25', 'Inicio de sesión fallido desde:192.168.101.122'),
(75, 'admin', '2017-07-24 20:51:00', 'Inicio de sesión correcto desde:192.168.101.122'),
(76, 'admin', '2017-07-24 20:53:18', 'Cierre de sesión desde:192.168.101.122'),
(77, 'admin', '2017-07-24 20:53:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(78, 'admin', '2017-07-24 20:56:24', 'Cierre de sesión desde:192.168.101.122'),
(79, 'admin', '2017-07-24 20:56:50', 'Inicio de sesión correcto desde:192.168.101.122'),
(80, 'admin', '2017-07-24 21:17:12', 'Cierre de sesión desde:192.168.101.122'),
(81, 'admin', '2017-07-24 21:25:50', 'Inicio de sesión fallido desde:192.168.101.122'),
(82, 'admin', '2017-07-24 21:25:56', 'Inicio de sesión correcto desde:192.168.101.122'),
(83, 'admin', '2017-07-24 21:27:38', 'Inicio de sesión fallido desde:192.168.101.122'),
(84, 'admin', '2017-07-24 21:27:48', 'Inicio de sesión correcto desde:192.168.101.122'),
(85, 'admin', '2017-07-24 21:29:41', 'Inicio de sesión correcto desde:192.168.101.122'),
(86, 'admin', '2017-07-24 21:29:46', 'Inicio de sesión correcto desde:192.168.101.122'),
(87, 'admin', '2017-07-24 21:30:25', 'Inicio de sesión correcto desde:192.168.101.122'),
(88, 'ad', '2017-07-24 21:30:41', 'Inicio de sesión fallido desde:192.168.101.122'),
(89, 'admin', '2017-07-24 21:32:47', 'Inicio de sesión correcto desde:192.168.101.122'),
(90, 'No definido', '2017-07-24 21:33:35', 'Cierre de sesión desde:192.168.101.122'),
(91, 'admin', '2017-07-24 21:34:33', 'Inicio de sesión fallido desde:192.168.101.122'),
(92, 'admin', '2017-07-24 21:34:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(93, 'admin', '2017-07-24 21:35:34', 'Inicio de sesión correcto desde:192.168.101.122'),
(94, 'admin', '2017-07-24 21:35:41', 'Inicio de sesión correcto desde:192.168.101.122'),
(95, ' ', '2017-07-24 21:36:17', 'Inicio de sesión fallido desde:192.168.101.122'),
(96, 'admin', '2017-07-24 21:37:35', 'Inicio de sesión fallido desde:192.168.101.122'),
(97, 'admin', '2017-07-24 21:39:11', 'Inicio de sesión correcto desde:192.168.101.122'),
(98, 'admin', '2017-07-24 21:39:24', 'Inicio de sesión correcto desde:192.168.101.122'),
(99, 'admin', '2017-07-24 21:39:45', 'Inicio de sesión correcto desde:192.168.101.122'),
(100, 'admin', '2017-07-24 21:40:35', 'Inicio de sesión correcto desde:192.168.101.122'),
(101, 'admin', '2017-07-24 21:40:49', 'Inicio de sesión correcto desde:192.168.101.122'),
(102, 'admin', '2017-07-24 21:41:00', 'Inicio de sesión correcto desde:192.168.101.122'),
(103, 'admin', '2017-07-24 21:42:34', 'Inicio de sesión correcto desde:192.168.101.122'),
(104, 'admin', '2017-07-24 21:43:47', 'Inicio de sesión correcto desde:192.168.101.122'),
(105, 'admin', '2017-07-24 21:47:27', 'Inicio de sesión correcto desde:192.168.101.122'),
(106, 'admin', '2017-07-24 21:47:30', 'Inicio de sesión fallido desde:192.168.101.122'),
(107, 'admin', '2017-07-24 21:47:36', 'Inicio de sesión correcto desde:192.168.101.122'),
(108, 'admin', '2017-07-24 21:48:08', 'Inicio de sesión correcto desde:192.168.101.122'),
(109, 'admin', '2017-07-24 21:48:11', 'Inicio de sesión correcto desde:192.168.101.122'),
(110, 'No definido', '2017-07-24 21:48:16', 'Cierre de sesión desde:192.168.101.122'),
(111, 'admin', '2017-07-24 21:48:21', 'Inicio de sesión fallido desde:192.168.101.122'),
(112, 'admin', '2017-07-24 21:48:33', 'Inicio de sesión fallido desde:192.168.101.122'),
(113, 'admin', '2017-07-24 21:48:56', 'Inicio de sesión fallido desde:192.168.101.122'),
(114, 'admin', '2017-07-24 21:49:03', 'Inicio de sesión correcto desde:192.168.101.122'),
(115, 'admin', '2017-07-24 21:49:10', 'Cierre de sesión desde:192.168.101.122'),
(116, 'admin', '2017-07-24 21:50:27', 'Inicio de sesión correcto desde:192.168.101.122'),
(117, 'admin', '2017-07-24 21:50:31', 'Cierre de sesión desde:192.168.101.122'),
(118, 'nutresa', '2017-07-24 21:50:41', 'Inicio de sesión correcto desde:192.168.101.122'),
(119, 'nutresa', '2017-07-24 21:50:48', 'Cierre de sesión desde:192.168.101.122'),
(120, 'No definido', '2017-07-24 21:52:04', 'Cierre de sesión desde:192.168.101.122'),
(121, 'No definido', '2017-07-24 21:52:08', 'Cierre de sesión desde:192.168.101.122'),
(122, 'admin', '2017-07-24 21:52:22', 'Inicio de sesión correcto desde:192.168.101.122'),
(123, 'admin', '2017-07-24 21:52:55', 'Cierre de sesión desde:192.168.101.122'),
(124, 'admin', '2017-07-24 21:53:04', 'Inicio de sesión correcto desde:192.168.101.122'),
(125, 'admin', '2017-07-24 21:53:37', 'Cierre de sesión desde:192.168.101.122'),
(126, 'admin', '2017-07-24 21:57:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(127, 'admin', '2017-07-24 22:02:02', 'Inicio de sesión correcto desde:192.168.101.122'),
(128, 'admin', '2017-07-24 22:03:15', 'Cierre de sesión desde:192.168.101.122'),
(129, 'admin', '2017-07-24 22:03:20', 'Inicio de sesión correcto desde:192.168.101.122'),
(130, 'admin', '2017-07-24 22:05:13', 'Cierre de sesión desde:192.168.101.122'),
(131, 'admin', '2017-07-24 22:05:19', 'Inicio de sesión fallido desde:192.168.101.122'),
(132, 'nutresa', '2017-07-24 22:05:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(133, 'nutresa', '2017-07-24 22:08:49', 'Cierre de sesión desde:192.168.101.122'),
(134, 'admin', '2017-07-24 22:08:56', 'Inicio de sesión correcto desde:192.168.101.122'),
(135, 'admin', '2017-07-24 22:15:24', 'Cierre de sesión desde:192.168.101.122'),
(136, 'admin', '2017-07-24 22:19:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(137, 'admin', '2017-07-24 22:23:03', 'Cierre de sesión desde:192.168.101.122'),
(138, 'admin', '2017-07-25 13:25:32', 'Inicio de sesión fallido desde:192.168.101.122'),
(139, 'admin', '2017-07-25 13:25:38', 'Inicio de sesión correcto desde:192.168.101.122'),
(140, 'admin', '2017-07-25 14:07:30', 'Cierre de sesión desde:192.168.101.122'),
(141, 'admin', '2017-07-25 14:07:41', 'Inicio de sesión correcto desde:192.168.101.122'),
(142, 'admin', '2017-07-25 14:27:55', 'Cierre de sesión desde:192.168.101.122'),
(143, 'admin', '2017-07-25 14:35:11', 'Inicio de sesión correcto desde:192.168.101.122'),
(144, 'No definido', '2017-07-25 20:11:32', 'Cierre de sesión desde:192.168.101.122'),
(145, 'admin', '2017-07-25 20:11:37', 'Inicio de sesión correcto desde:192.168.101.122'),
(146, 'admin', '2017-07-25 22:21:33', 'Cierre de sesión desde:192.168.101.122'),
(147, 'nutresa', '2017-07-25 22:21:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(148, 'nutresa', '2017-07-25 22:25:39', 'Cierre de sesión desde:192.168.101.122'),
(149, 'nutresa', '2017-07-25 22:25:46', 'Inicio de sesión correcto desde:192.168.101.122'),
(150, 'nutresa', '2017-07-25 22:28:35', 'Cierre de sesión desde:192.168.101.122'),
(151, 'admin', '2017-07-25 22:28:41', 'Inicio de sesión correcto desde:192.168.101.122'),
(152, 'admin', '2017-07-25 22:29:27', 'Cierre de sesión desde:192.168.101.122'),
(153, 'nutresa', '2017-07-25 22:29:36', 'Inicio de sesión correcto desde:192.168.101.122'),
(154, 'nutresa', '2017-07-25 22:31:00', 'Cierre de sesión desde:192.168.101.122'),
(155, 'admin', '2017-07-25 22:31:10', 'Inicio de sesión correcto desde:192.168.101.122'),
(156, 'admin', '2017-07-25 22:33:54', 'Cierre de sesión desde:192.168.101.122'),
(157, 'admin', '2017-07-26 13:33:53', 'Inicio de sesión fallido desde:192.168.101.122'),
(158, 'admin', '2017-07-26 13:34:01', 'Inicio de sesión correcto desde:192.168.101.122'),
(159, 'admin', '2017-07-26 14:59:07', 'Cierre de sesión desde:192.168.101.122'),
(160, 'admin', '2017-07-26 14:59:46', 'Inicio de sesión fallido desde:192.168.101.122'),
(161, 'admin', '2017-07-26 14:59:54', 'Inicio de sesión correcto desde:192.168.101.122'),
(162, 'admin', '2017-07-26 16:46:22', 'Cierre de sesión desde:192.168.101.122'),
(163, 'admin', '2017-07-26 16:46:44', 'Inicio de sesión correcto desde:192.168.101.122'),
(164, 'admin', '2017-07-26 17:07:55', 'Cierre de sesión desde:192.168.101.122'),
(165, 'No definido', '2017-07-26 17:08:00', 'Cierre de sesión desde:192.168.101.122'),
(166, 'nutresa', '2017-07-26 17:08:10', 'Inicio de sesión correcto desde:192.168.101.122'),
(167, 'No definido', '2017-07-26 19:15:02', 'Cierre de sesión desde:192.168.101.122'),
(168, 'admin', '2017-07-26 19:15:09', 'Inicio de sesión correcto desde:192.168.101.122'),
(169, 'admin', '2017-07-26 19:52:35', 'Cierre de sesión desde:192.168.101.122'),
(170, 'admin', '2017-07-26 19:52:48', 'Inicio de sesión correcto desde:192.168.101.122'),
(171, 'admin', '2017-07-26 19:59:11', 'Cierre de sesión desde:192.168.101.122'),
(172, 'No definido', '2017-07-26 19:59:13', 'Cierre de sesión desde:192.168.101.122'),
(173, 'admin', '2017-07-26 19:59:19', 'Inicio de sesión correcto desde:192.168.101.122'),
(174, 'admin', '2017-07-26 20:13:44', 'Inicio de sesión correcto desde:192.168.101.200'),
(175, 'admin', '2017-07-26 20:14:12', 'Cierre de sesión desde:192.168.101.200'),
(176, 'admin', '2017-07-26 21:18:15', 'Inicio de sesión correcto desde:192.168.101.122'),
(177, 'admin', '2017-07-26 21:26:18', 'Cierre de sesión desde:192.168.101.122'),
(178, 'admin', '2017-07-26 21:26:22', 'Inicio de sesión fallido desde:192.168.101.122'),
(179, 'admin', '2017-07-26 21:26:28', 'Inicio de sesión correcto desde:192.168.101.122'),
(180, 'admin', '2017-07-26 21:28:03', 'Cierre de sesión desde:192.168.101.122'),
(181, 'admin', '2017-07-26 21:28:09', 'Inicio de sesión correcto desde:192.168.101.122'),
(182, 'admin', '2017-07-26 22:08:32', 'Cierre de sesión desde:192.168.101.122'),
(183, 'nutresa', '2017-07-26 22:08:39', 'Inicio de sesión correcto desde:192.168.101.122'),
(184, 'nutresa', '2017-07-27 14:04:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(185, 'nutresa', '2017-07-27 14:08:22', 'Cierre de sesión desde:192.168.101.122'),
(186, 'admin', '2017-07-27 14:08:26', 'Inicio de sesión correcto desde:192.168.101.122'),
(187, 'admin', '2017-07-27 14:37:45', 'Inicio de sesión correcto desde:192.168.101.200'),
(188, 'admin', '2017-07-27 14:41:03', 'Cierre de sesión desde:192.168.101.200'),
(189, 'admin', '2017-07-27 14:41:47', 'Inicio de sesión correcto desde:192.168.101.200'),
(190, 'admin', '2017-07-27 14:42:30', 'Cierre de sesión desde:192.168.101.200'),
(191, 'admin', '2017-07-27 14:54:18', 'Inicio de sesión correcto desde:192.168.101.200'),
(192, 'nutresa', '2017-07-27 14:54:37', 'Inicio de sesión correcto desde:192.168.101.200'),
(193, 'No definido', '2017-07-27 14:54:58', 'Cierre de sesión desde:192.168.101.200'),
(194, 'admin', '2017-07-27 14:57:03', 'Cierre de sesión desde:192.168.101.122'),
(195, 'No definido', '2017-07-27 14:57:52', 'Cierre de sesión desde:127.0.0.1'),
(196, 'nutresa', '2017-07-27 15:25:57', 'Cierre de sesión desde:192.168.101.200'),
(197, 'No definido', '2017-07-27 15:26:06', 'Cierre de sesión desde:192.168.101.200'),
(198, 'No definido', '2017-07-27 15:26:20', 'Cierre de sesión desde:192.168.101.200'),
(199, 'No definido', '2017-07-27 15:26:38', 'Cierre de sesión desde:192.168.101.200'),
(200, 'No definido', '2017-07-27 15:27:00', 'Cierre de sesión desde:192.168.101.200'),
(201, 'admin', '2017-07-27 15:52:40', 'Inicio de sesión correcto desde:192.168.101.122'),
(202, 'No definido', '2017-07-27 15:52:55', 'Cierre de sesión desde:192.168.101.122'),
(203, 'admin', '2017-07-27 15:54:35', 'Cierre de sesión desde:192.168.101.122'),
(204, 'nutresa', '2017-07-27 15:54:43', 'Inicio de sesión correcto desde:192.168.101.122'),
(205, 'nutresa', '2017-07-27 16:07:54', 'Cierre de sesión desde:192.168.101.122'),
(206, 'admin', '2017-07-27 16:08:00', 'Inicio de sesión correcto desde:192.168.101.122'),
(207, 'admin', '2017-07-27 16:42:30', 'Inicio de sesión correcto desde:192.168.101.122'),
(208, 'admin', '2017-07-27 17:57:21', 'Cierre de sesión desde:192.168.101.122'),
(209, 'admin', '2017-07-27 17:57:38', 'Inicio de sesión correcto desde:192.168.101.122'),
(210, 'No definido', '2017-07-27 18:00:25', 'Cierre de sesión desde:192.168.101.122'),
(211, 'admin', '2017-07-27 18:00:33', 'Inicio de sesión correcto desde:192.168.101.122'),
(212, 'admin', '2017-07-27 18:27:08', 'Inicio de sesión correcto desde:192.168.101.103'),
(213, 'No definido', '2017-07-27 19:13:41', 'Cierre de sesión desde:192.168.101.122'),
(214, 'admin', '2017-07-27 19:31:07', 'Cierre de sesión desde:192.168.101.122'),
(215, 'admin', '2017-07-27 19:31:26', 'Inicio de sesión correcto desde:192.168.101.122'),
(216, 'admin', '2017-07-27 19:40:56', 'Cierre de sesión desde:192.168.101.122'),
(217, 'admin', '2017-07-27 19:41:02', 'Inicio de sesión correcto desde:192.168.101.122'),
(218, 'admin', '2017-07-27 19:42:48', 'Cierre de sesión desde:192.168.101.122'),
(219, 'nutresa', '2017-07-27 19:43:02', 'Inicio de sesión fallido desde:192.168.101.122'),
(220, 'nutresa', '2017-07-27 19:43:15', 'Inicio de sesión correcto desde:192.168.101.122'),
(221, 'nutresa', '2017-07-27 19:43:21', 'Cierre de sesión desde:192.168.101.122'),
(222, 'admin', '2017-07-27 19:44:19', 'Inicio de sesión correcto desde:192.168.101.122'),
(223, 'admin', '2017-07-28 13:25:23', 'Inicio de sesión correcto desde:192.168.101.122'),
(224, 'No definido', '2017-07-28 19:50:23', 'Cierre de sesión desde:192.168.101.122'),
(225, 'admin', '2017-07-28 19:50:30', 'Inicio de sesión correcto desde:192.168.101.122'),
(226, 'admin', '2017-07-28 22:28:38', 'Cierre de sesión desde:192.168.101.122'),
(227, 'admin', '2017-07-28 22:41:38', 'Inicio de sesión correcto desde:192.168.101.200'),
(228, 'admin', '2017-07-28 22:42:36', 'Cierre de sesión desde:192.168.101.200'),
(229, 'admin', '2017-07-31 14:51:14', 'Inicio de sesión correcto desde:192.168.101.150'),
(230, 'admin', '2017-07-31 16:21:22', 'Inicio de sesión fallido desde:192.168.101.150'),
(231, 'admin', '2017-07-31 16:21:28', 'Inicio de sesión correcto desde:192.168.101.150'),
(232, 'admin', '2017-07-31 17:07:08', 'Cierre de sesión desde:192.168.101.150'),
(233, 'admin', '2017-07-31 17:07:26', 'Inicio de sesión correcto desde:192.168.101.150'),
(234, 'admin', '2017-07-31 17:15:55', 'Cierre de sesión desde:192.168.101.150'),
(235, 'nutresa', '2017-07-31 17:16:06', 'Inicio de sesión correcto desde:192.168.101.150'),
(236, 'nutresa', '2017-07-31 17:16:23', 'Cierre de sesión desde:192.168.101.150'),
(237, 'admin', '2017-07-31 17:16:45', 'Inicio de sesión correcto desde:192.168.101.150'),
(238, 'admin', '2017-07-31 22:31:04', 'Cierre de sesión desde:192.168.101.150'),
(239, 'admin', '2017-08-01 14:07:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(240, 'admin', '2017-08-01 16:32:48', 'Cierre de sesión desde:192.168.101.150'),
(241, 'admin', '2017-08-01 16:32:54', 'Inicio de sesión correcto desde:192.168.101.150'),
(242, 'admin', '2017-08-01 16:37:33', 'Cierre de sesión desde:192.168.101.150'),
(243, 'admin', '2017-08-01 16:37:45', 'Inicio de sesión correcto desde:192.168.101.150'),
(244, 'admin', '2017-08-01 20:48:11', 'Inicio de sesión correcto desde:192.168.101.150'),
(245, 'admin', '2017-08-01 22:26:21', 'Cierre de sesión desde:192.168.101.150'),
(246, 'nutresa', '2017-08-01 22:26:33', 'Inicio de sesión correcto desde:192.168.101.150'),
(247, 'nutresa', '2017-08-01 22:26:49', 'Cierre de sesión desde:192.168.101.150'),
(248, 'admin', '2017-08-01 22:27:03', 'Inicio de sesión correcto desde:192.168.101.150'),
(249, 'admin', '2017-08-01 22:27:06', 'Cierre de sesión desde:192.168.101.150'),
(250, 'admin', '2017-08-02 18:02:31', 'Inicio de sesión fallido desde:192.168.101.150'),
(251, 'admin', '2017-08-02 18:06:06', 'Inicio de sesión correcto desde:192.168.101.150'),
(252, 'admin', '2017-08-02 22:35:54', 'Cierre de sesión desde:192.168.101.150'),
(253, 'admin', '2017-08-03 17:10:10', 'Inicio de sesión correcto desde:192.168.101.150'),
(254, 'admin', '2017-08-03 22:39:38', 'Cierre de sesión desde:192.168.101.150'),
(255, 'admin', '2017-08-08 13:24:33', 'Inicio de sesión correcto desde:192.168.101.150'),
(256, 'admin', '2017-08-08 17:08:30', 'Inicio de sesión correcto desde:192.168.101.150'),
(257, 'admin', '2017-08-08 21:02:34', 'Cierre de sesión desde:192.168.101.150'),
(258, 'admin', '2017-08-08 21:02:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(259, 'admin', '2017-08-08 22:30:44', 'Cierre de sesión desde:192.168.101.150'),
(260, 'admin', '2017-08-09 13:14:43', 'Inicio de sesión correcto desde:192.168.101.150'),
(261, 'admin', '2017-08-09 14:27:43', 'Cierre de sesión desde:192.168.101.150'),
(262, 'nutresa', '2017-08-09 14:27:51', 'Inicio de sesión correcto desde:192.168.101.150'),
(263, 'nutresa', '2017-08-09 14:41:08', 'Cierre de sesión desde:192.168.101.150'),
(264, 'admin', '2017-08-09 14:41:15', 'Inicio de sesión correcto desde:192.168.101.150'),
(265, 'No definido', '2017-08-09 21:28:33', 'Cierre de sesión desde:192.168.101.150'),
(266, 'admin', '2017-08-09 21:31:21', 'Inicio de sesión correcto desde:192.168.101.150'),
(267, 'admin', '2017-08-09 22:44:03', 'Cierre de sesión desde:192.168.101.150'),
(268, 'admin', '2017-08-10 13:33:35', 'Inicio de sesión correcto desde:192.168.101.150'),
(269, 'admin', '2017-08-10 16:24:36', 'Inicio de sesión correcto desde:192.168.101.150'),
(270, 'No definido', '2017-08-10 22:32:24', 'Cierre de sesión desde:192.168.101.150'),
(271, 'No definido', '2017-08-10 22:32:28', 'Cierre de sesión desde:192.168.101.150'),
(272, 'admin', '2017-08-11 15:03:20', 'Inicio de sesión correcto desde:192.168.101.150'),
(273, 'No definido', '2017-08-11 21:28:04', 'Cierre de sesión desde:192.168.101.150'),
(274, 'admin', '2017-08-14 13:23:01', 'Inicio de sesión correcto desde:192.168.101.150'),
(275, 'admin', '2017-08-14 20:07:38', 'Inicio de sesión correcto desde:192.168.101.150'),
(276, 'admin', '2017-08-14 20:43:39', 'Inicio de sesión fallido desde:192.168.101.150'),
(277, 'admin', '2017-08-14 20:43:45', 'Inicio de sesión correcto desde:192.168.101.150'),
(278, 'admin', '2017-08-14 22:27:03', 'Cierre de sesión desde:192.168.101.150'),
(279, 'admin', '2017-08-15 14:51:49', 'Inicio de sesión fallido desde:192.168.101.150'),
(280, 'admin', '2017-08-15 14:51:55', 'Inicio de sesión correcto desde:192.168.101.150'),
(281, 'admin', '2017-08-15 22:28:24', 'Cierre de sesión desde:192.168.101.150'),
(282, 'admin', '2017-08-16 14:45:55', 'Inicio de sesión correcto desde:192.168.101.150'),
(283, 'No definido', '2017-08-16 14:46:02', 'Cierre de sesión desde:192.168.101.150'),
(284, 'admin', '2017-08-16 19:44:01', 'Inicio de sesión correcto desde:192.168.101.150'),
(285, 'admin', '2017-08-16 20:50:01', 'Inicio de sesión correcto desde:192.168.101.150'),
(286, 'admin', '2017-08-16 22:22:48', 'Cierre de sesión desde:192.168.101.150'),
(287, 'admin', '2017-08-17 20:30:42', 'Inicio de sesión correcto desde:192.168.101.150'),
(288, 'admin', '2017-08-17 21:50:46', 'Cierre de sesión desde:192.168.101.150'),
(289, 'admin', '2017-08-17 21:52:07', 'Inicio de sesión correcto desde:192.168.101.150'),
(290, 'admin', '2017-08-17 22:26:37', 'Cierre de sesión desde:192.168.101.150'),
(291, 'admin', '2017-08-24 15:10:48', 'Inicio de sesión correcto desde:192.168.101.150'),
(292, 'admin', '2017-08-24 22:09:47', 'Cierre de sesión desde:192.168.101.150'),
(293, 'admin', '2017-08-25 13:53:28', 'Inicio de sesión correcto desde:192.168.101.150'),
(294, 'No definido', '2017-08-25 16:41:35', 'Cierre de sesión desde:192.168.101.150'),
(295, 'admin', '2017-08-25 16:41:42', 'Inicio de sesión correcto desde:192.168.101.150'),
(296, 'No definido', '2017-08-25 22:35:24', 'Cierre de sesión desde:192.168.101.150'),
(297, 'No definido', '2017-08-28 18:11:21', 'Cierre de sesión desde:192.168.101.150'),
(298, 'admin', '2017-08-28 20:31:32', 'Inicio de sesión correcto desde:192.168.101.150'),
(299, 'admin', '2017-08-28 21:45:56', 'Cierre de sesión desde:192.168.101.150'),
(300, 'admin', '2017-08-29 20:14:05', 'Inicio de sesión correcto desde:192.168.101.150'),
(301, 'No definido', '2017-08-29 21:59:27', 'Cierre de sesión desde:192.168.101.150'),
(302, 'admin', '2017-08-29 21:59:34', 'Inicio de sesión correcto desde:192.168.101.150'),
(303, 'admin', '2017-08-29 22:40:47', 'Cierre de sesión desde:192.168.101.150'),
(304, 'admin', '2017-09-05 19:29:30', 'Inicio de sesión correcto desde:192.168.101.150'),
(305, 'No definido', '2017-09-05 22:15:57', 'Cierre de sesión desde:192.168.101.150'),
(306, 'admin', '2017-09-07 12:45:34', 'Inicio de sesión correcto desde:192.168.102.65'),
(307, 'admin', '2017-09-07 21:11:16', 'Inicio de sesión fallido desde:192.168.102.65'),
(308, 'admin', '2017-09-07 21:11:22', 'Inicio de sesión correcto desde:192.168.102.65'),
(309, 'admin', '2017-09-07 21:13:04', 'Cierre de sesión desde:192.168.102.65'),
(310, 'admin', '2017-09-07 21:22:44', 'Inicio de sesión fallido desde:192.168.102.65'),
(311, 'admin', '2017-09-07 21:23:21', 'Inicio de sesión correcto desde:192.168.102.65'),
(312, 'No definido', '2017-09-07 21:40:32', 'Cierre de sesión desde:192.168.102.65'),
(313, 'admin', '2017-09-07 21:40:36', 'Inicio de sesión fallido desde:192.168.102.65'),
(314, 'admin', '2017-09-07 21:40:42', 'Inicio de sesión correcto desde:192.168.102.65'),
(315, 'admin', '2017-09-07 21:50:10', 'Cierre de sesión desde:192.168.102.65'),
(316, 'nutresa', '2017-09-07 22:59:18', 'Inicio de sesión correcto desde:192.168.102.65'),
(317, 'nutresa', '2017-09-07 23:01:18', 'Cierre de sesión desde:192.168.102.65'),
(318, 'admin', '2017-09-08 12:21:11', 'Inicio de sesión correcto desde:192.168.102.65'),
(319, 'admin', '2017-09-08 12:23:47', 'Cierre de sesión desde:192.168.102.65'),
(320, 'admin', '2017-09-11 13:03:06', 'Inicio de sesión correcto desde:192.168.101.150'),
(321, 'No definido', '2017-09-11 13:50:23', 'Cierre de sesión desde:::1'),
(322, 'admin', '2017-09-11 13:50:32', 'Inicio de sesión correcto desde:::1'),
(323, 'admin', '2017-09-11 14:50:54', 'Cierre de sesión desde:::1'),
(324, 'admin', '2017-09-11 14:51:37', 'Inicio de sesión correcto desde:::1'),
(325, 'No definido', '2017-09-11 14:53:11', 'Cierre de sesión desde:127.0.0.1'),
(326, 'admin', '2017-09-11 15:07:51', 'Cierre de sesión desde:::1'),
(327, 'admin', '2017-09-11 15:27:44', 'Inicio de sesión correcto desde:::1'),
(328, 'admin', '2017-09-11 19:41:57', 'Inicio de sesión correcto desde:::1'),
(329, 'admin', '2017-09-11 22:25:49', 'Cierre de sesión desde:::1'),
(330, 'admin', '2017-09-12 15:27:21', 'Inicio de sesión correcto desde:::1'),
(331, 'admin', '2017-09-12 15:54:59', 'Inicio de sesión correcto desde:192.168.101.150'),
(332, 'admin', '2017-09-12 15:56:20', 'Cierre de sesión desde:192.168.101.150'),
(333, 'No definido', '2017-09-12 16:08:17', 'Cierre de sesión desde:192.168.101.150'),
(334, 'No definido', '2017-09-12 16:08:26', 'Cierre de sesión desde:192.168.101.150'),
(335, 'No definido', '2017-09-12 16:08:34', 'Cierre de sesión desde:192.168.101.150'),
(336, 'No definido', '2017-09-12 16:08:52', 'Cierre de sesión desde:192.168.101.150'),
(337, 'admin', '2017-09-12 16:08:58', 'Inicio de sesión correcto desde:192.168.101.150'),
(338, 'admin', '2017-09-12 21:28:22', 'Cierre de sesión desde:192.168.101.150'),
(339, 'nutresa', '2017-09-12 21:28:30', 'Inicio de sesión correcto desde:192.168.101.150'),
(340, 'nutresa', '2017-09-12 21:31:45', 'Cierre de sesión desde:192.168.101.150'),
(341, 'admin', '2017-09-12 21:31:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(342, 'admin', '2017-09-12 21:39:12', 'Cierre de sesión desde:192.168.101.150'),
(343, 'nutresa', '2017-09-12 21:39:21', 'Inicio de sesión correcto desde:192.168.101.150'),
(344, 'nutresa', '2017-09-12 21:44:12', 'Cierre de sesión desde:192.168.101.150'),
(345, 'admin', '2017-09-12 21:44:17', 'Inicio de sesión correcto desde:192.168.101.150'),
(346, 'admin', '2017-09-13 13:21:48', 'Inicio de sesión correcto desde:192.168.101.150'),
(347, 'admin', '2017-09-13 16:15:53', 'Cierre de sesión desde:192.168.101.150'),
(348, 'admin', '2017-09-13 16:15:59', 'Inicio de sesión correcto desde:192.168.101.150'),
(349, 'No definido', '2017-09-13 20:19:00', 'Cierre de sesión desde:192.168.101.150'),
(350, 'No definido', '2017-09-13 20:19:04', 'Cierre de sesión desde:192.168.101.150'),
(351, 'admin', '2017-09-14 14:15:47', 'Inicio de sesión correcto desde:192.168.101.150'),
(352, 'No definido', '2017-09-14 19:28:53', 'Cierre de sesión desde:192.168.101.150'),
(353, 'admin', '2017-09-14 19:29:03', 'Inicio de sesión correcto desde:192.168.101.150'),
(354, 'admin', '2017-09-14 20:43:42', 'Inicio de sesión correcto desde:192.168.101.150'),
(355, 'admin', '2017-09-14 20:44:37', 'Cierre de sesión desde:192.168.101.150'),
(356, 'admin', '2017-09-14 21:10:41', 'Inicio de sesión correcto desde:192.168.101.150'),
(357, 'admin', '2017-09-14 21:22:43', 'Usuario sube archivo:5357.gif'),
(358, 'admin', '2017-09-14 21:23:49', 'Usuario sube archivo:5358.gif'),
(359, 'admin', '2017-09-14 21:30:41', 'Usuario sube archivo:5359.jpg'),
(360, 'admin', '2017-09-14 21:49:19', 'Usuario sube archivo:5360.jpg'),
(361, 'admin', '2017-09-14 21:53:43', 'Usuario sube archivo:5361.jpg'),
(362, 'admin', '2017-09-14 22:11:48', 'Usuario sube archivo:5362.jpg'),
(363, 'admin', '2017-09-14 22:25:19', 'Cierre de sesión desde:192.168.101.150'),
(364, 'admin', '2017-09-18 13:31:02', 'Inicio de sesión correcto desde:192.168.101.150'),
(365, 'admin', '2017-09-18 17:08:11', 'Cierre de sesión desde:192.168.101.150'),
(366, 'nutresa', '2017-09-18 17:08:20', 'Inicio de sesión correcto desde:192.168.101.150'),
(367, 'nutresa', '2017-09-18 17:13:25', 'Inicio de sesión correcto desde:192.168.101.150'),
(368, 'nutresa', '2017-09-18 17:17:47', 'Cierre de sesión desde:192.168.101.150'),
(369, 'admin', '2017-09-18 17:17:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(370, 'admin', '2017-09-18 17:18:03', 'Cierre de sesión desde:192.168.101.150'),
(371, 'nutresa', '2017-09-18 17:18:10', 'Inicio de sesión fallido desde:192.168.101.150'),
(372, 'nutresa', '2017-09-18 17:18:19', 'Inicio de sesión correcto desde:192.168.101.150'),
(373, 'nutresa', '2017-09-18 20:46:49', 'Cierre de sesión desde:192.168.101.150'),
(374, 'admin', '2017-09-18 20:46:54', 'Inicio de sesión correcto desde:192.168.101.150'),
(375, 'admin', '2017-09-18 22:30:58', 'Cierre de sesión desde:192.168.101.150'),
(376, 'admin', '2017-09-19 16:28:31', 'Inicio de sesión correcto desde:192.168.101.150'),
(377, 'admin', '2017-09-19 22:23:45', 'Cierre de sesión desde:192.168.101.150'),
(378, 'nutresa', '2017-09-20 13:34:07', 'Inicio de sesión correcto desde:192.168.101.150'),
(379, 'nutresa', '2017-09-20 14:02:10', 'Cierre de sesión desde:192.168.101.150'),
(380, 'admin', '2017-09-20 14:02:15', 'Inicio de sesión correcto desde:192.168.101.150'),
(381, 'admin', '2017-09-20 14:02:48', 'Cierre de sesión desde:192.168.101.150'),
(382, 'nutresa', '2017-09-20 14:02:55', 'Inicio de sesión correcto desde:192.168.101.150'),
(383, 'nutresa', '2017-09-20 15:34:26', 'Cierre de sesión desde:192.168.101.150'),
(384, 'admin', '2017-09-20 15:34:34', 'Inicio de sesión correcto desde:192.168.101.150'),
(385, 'admin', '2017-09-20 15:44:55', 'Cierre de sesión desde:192.168.101.150'),
(386, 'nutresa', '2017-09-20 16:05:38', 'Inicio de sesión correcto desde:192.168.101.150'),
(387, 'nutresa', '2017-09-20 16:47:01', 'Cierre de sesión desde:192.168.101.150'),
(388, 'admin', '2017-09-20 16:47:07', 'Inicio de sesión correcto desde:192.168.101.150'),
(389, 'admin', '2017-09-20 17:03:14', 'Cierre de sesión desde:192.168.101.150'),
(390, 'admin', '2017-09-20 17:03:19', 'Inicio de sesión correcto desde:192.168.101.150'),
(391, 'admin', '2017-09-20 17:07:01', 'Cierre de sesión desde:192.168.101.150'),
(392, 'admin', '2017-09-20 17:07:08', 'Inicio de sesión correcto desde:192.168.101.150'),
(393, 'admin', '2017-09-20 18:47:29', 'Cierre de sesión desde:192.168.101.150'),
(394, 'nutresa', '2017-09-20 18:47:35', 'Inicio de sesión correcto desde:192.168.101.150'),
(395, 'nutresa', '2017-09-20 18:59:46', 'Cierre de sesión desde:192.168.101.150'),
(396, 'nutresa', '2017-09-20 18:59:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(397, 'nutresa', '2017-09-20 19:24:40', 'Cierre de sesión desde:192.168.101.150'),
(398, 'admin', '2017-09-20 19:24:50', 'Inicio de sesión correcto desde:192.168.101.150'),
(399, 'admin', '2017-09-20 19:38:47', 'Cierre de sesión desde:192.168.101.150'),
(400, 'nutresa', '2017-09-20 19:39:01', 'Inicio de sesión correcto desde:192.168.101.150'),
(401, 'nutresa', '2017-09-20 19:47:16', 'Cierre de sesión desde:192.168.101.150'),
(402, 'admin', '2017-09-20 19:47:35', 'Inicio de sesión correcto desde:192.168.101.150'),
(403, 'admin', '2017-09-20 22:10:51', 'Cierre de sesión desde:192.168.101.150'),
(404, 'nutresa', '2017-09-20 22:11:13', 'Inicio de sesión fallido desde:192.168.101.150'),
(405, 'nutresa', '2017-09-20 22:11:20', 'Inicio de sesión correcto desde:192.168.101.150'),
(406, 'nutresa', '2017-09-20 22:29:49', 'Cierre de sesión desde:192.168.101.150'),
(407, 'nutresa', '2017-09-21 14:10:29', 'Inicio de sesión correcto desde:192.168.101.150'),
(408, 'nutresa', '2017-09-21 15:14:02', 'Cierre de sesión desde:192.168.101.150'),
(409, 'admin', '2017-09-21 15:14:07', 'Inicio de sesión correcto desde:192.168.101.150'),
(410, 'admin', '2017-09-21 16:55:44', 'Cierre de sesión desde:192.168.101.150'),
(411, 'admin', '2017-09-21 16:55:49', 'Inicio de sesión correcto desde:192.168.101.150'),
(412, 'admin', '2017-09-21 18:22:32', 'Cierre de sesión desde:192.168.101.150'),
(413, 'admin', '2017-09-21 18:25:00', 'Inicio de sesión correcto desde:192.168.101.150'),
(414, 'admin', '2017-09-21 19:57:19', 'Cierre de sesión desde:192.168.101.150'),
(415, 'admin', '2017-09-21 19:57:24', 'Inicio de sesión correcto desde:192.168.101.150'),
(416, 'admin', '2017-09-21 20:44:15', 'Cierre de sesión desde:192.168.101.150'),
(417, 'nutresa', '2017-09-21 20:49:39', 'Inicio de sesión correcto desde:192.168.101.150'),
(418, 'nutresa', '2017-09-21 21:57:28', 'Cierre de sesión desde:192.168.101.150'),
(419, 'nutresa', '2017-09-21 21:57:33', 'Inicio de sesión fallido desde:192.168.101.150'),
(420, 'nutresa', '2017-09-21 21:57:40', 'Inicio de sesión correcto desde:192.168.101.150'),
(421, 'nutresa', '2017-09-21 22:36:24', 'Cierre de sesión desde:192.168.101.150'),
(422, 'No definido', '2017-09-21 22:36:28', 'Cierre de sesión desde:192.168.101.150'),
(423, 'No definido', '2017-09-21 22:36:34', 'Cierre de sesión desde:192.168.101.150'),
(424, 'admin', '2017-09-22 16:12:12', 'Inicio de sesión fallido desde:192.168.101.150'),
(425, 'admin', '2017-09-22 16:12:17', 'Inicio de sesión fallido desde:192.168.101.150'),
(426, 'admin', '2017-09-22 16:12:33', 'Inicio de sesión correcto desde:192.168.101.150'),
(427, 'admin', '2017-09-22 18:02:13', 'Cierre de sesión desde:192.168.101.150'),
(428, 'nutresa', '2017-09-22 18:02:20', 'Inicio de sesión correcto desde:192.168.101.150'),
(429, 'nutresa', '2017-09-22 19:04:46', 'Cierre de sesión desde:192.168.101.150'),
(430, 'admin', '2017-09-22 19:04:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(431, 'admin', '2017-09-22 20:08:00', 'Cierre de sesión desde:192.168.101.150'),
(432, 'nutresa', '2017-09-22 20:08:18', 'Inicio de sesión correcto desde:192.168.101.150'),
(433, 'nutresa', '2017-09-22 20:45:35', 'Cierre de sesión desde:192.168.101.150'),
(434, 'No definido', '2017-09-25 14:02:33', 'Cierre de sesión desde:192.168.101.150'),
(435, 'admin', '2017-09-25 14:02:42', 'Inicio de sesión correcto desde:192.168.101.150'),
(436, 'admin', '2017-09-25 14:31:52', 'Usuario sube archivo:5364.jpg'),
(437, 'admin', '2017-09-25 15:01:56', 'Cierre de sesión desde:192.168.101.150'),
(438, 'nutresa', '2017-09-25 15:02:12', 'Inicio de sesión correcto desde:192.168.101.150'),
(439, 'nutresa', '2017-09-25 15:06:41', 'Cierre de sesión desde:192.168.101.150'),
(440, 'admin', '2017-09-25 15:06:46', 'Inicio de sesión correcto desde:192.168.101.150'),
(441, 'admin', '2017-09-25 15:07:45', 'Usuario sube archivo:5365.jpg'),
(442, 'admin', '2017-09-25 15:41:03', 'Cierre de sesión desde:192.168.101.150'),
(443, 'nutresa', '2017-09-25 15:41:08', 'Inicio de sesión fallido desde:192.168.101.150'),
(444, 'nutresa', '2017-09-25 15:41:16', 'Inicio de sesión correcto desde:192.168.101.150'),
(445, 'No definido', '2017-09-25 18:30:23', 'Cierre de sesión desde:192.168.101.150'),
(446, 'No definido', '2017-09-25 18:30:51', 'Cierre de sesión desde:192.168.101.150'),
(447, 'No definido', '2017-09-25 18:31:31', 'Cierre de sesión desde:192.168.101.150'),
(448, 'admin', '2017-09-25 18:31:39', 'Inicio de sesión correcto desde:192.168.101.150'),
(449, 'admin', '2017-09-25 18:32:29', 'Cierre de sesión desde:192.168.101.150'),
(450, 'No definido', '2017-09-25 18:32:32', 'Cierre de sesión desde:192.168.101.150'),
(451, 'admin', '2017-09-25 19:49:50', 'Inicio de sesión correcto desde:192.168.101.150'),
(452, 'admin', '2017-09-25 21:19:27', 'Usuario sube archivo:5324.jpg'),
(453, 'admin', '2017-09-25 21:20:16', 'Usuario sube archivo:5324.jpg'),
(454, 'admin', '2017-09-25 21:20:41', 'Usuario sube archivo:5324.jpg'),
(455, 'admin', '2017-09-25 21:21:08', 'Usuario sube archivo:5324.jpg'),
(456, 'admin', '2017-09-25 21:23:39', 'Usuario sube archivo:5324.jpg'),
(457, 'admin', '2017-09-25 22:27:23', 'Cierre de sesión desde:192.168.101.150'),
(458, 'admin', '2017-09-26 14:22:49', 'Inicio de sesión correcto desde:192.168.101.150'),
(459, 'admin', '2017-09-26 21:30:49', 'Usuario sube archivo:5366.jpg'),
(460, 'admin', '2017-09-26 22:15:21', 'Cierre de sesión desde:192.168.101.150'),
(461, 'No definido', '2017-09-26 22:17:40', 'Cierre de sesión desde:192.168.101.150'),
(462, 'admin', '2017-09-27 15:17:06', 'Inicio de sesión correcto desde:192.168.101.150'),
(463, 'admin', '2017-09-27 16:31:41', 'Usuario sube archivo:5366.jpg'),
(464, 'admin', '2017-09-27 16:38:24', 'Usuario sube archivo:5367.jpg'),
(465, 'admin', '2017-09-27 16:38:41', 'Usuario sube archivo:5366.jpg'),
(466, 'admin', '2017-09-27 16:38:49', 'Usuario sube archivo:5368.jpg'),
(467, 'admin', '2017-09-27 16:38:59', 'Usuario sube archivo:5369.jpg'),
(468, 'admin', '2017-09-27 16:43:04', 'Usuario sube archivo:215.png'),
(469, 'admin', '2017-09-27 16:44:12', 'Cierre de sesión desde:192.168.101.150'),
(470, 'nutresa', '2017-09-27 16:44:19', 'Inicio de sesión correcto desde:192.168.101.150'),
(471, 'nutresa', '2017-09-27 16:45:17', 'Cierre de sesión desde:192.168.101.150'),
(472, 'admin', '2017-09-27 16:45:23', 'Inicio de sesión correcto desde:192.168.101.150'),
(473, 'admin', '2017-09-27 16:45:53', 'Cierre de sesión desde:192.168.101.150'),
(474, 'nutresa', '2017-09-27 16:45:59', 'Inicio de sesión correcto desde:192.168.101.150'),
(475, 'nutresa', '2017-09-27 16:48:59', 'Cierre de sesión desde:192.168.101.150'),
(476, 'admin', '2017-09-27 16:49:04', 'Inicio de sesión correcto desde:192.168.101.150'),
(477, 'admin', '2017-09-27 16:50:18', 'Usuario sube archivo:1113.jpg'),
(478, 'admin', '2017-09-27 16:51:42', 'Usuario sube archivo:5370.jpg'),
(479, 'No definido', '2017-09-27 19:43:33', 'Cierre de sesión desde:192.168.101.150'),
(480, 'admin', '2017-09-27 19:43:41', 'Inicio de sesión correcto desde:192.168.101.150'),
(481, 'admin', '2017-09-27 21:26:46', 'Usuario sube archivo:5367.png'),
(482, 'admin', '2017-09-27 21:27:25', 'Usuario sube archivo:5370.jpg'),
(483, 'admin', '2017-09-27 21:27:33', 'Usuario sube archivo:5370.png'),
(484, 'admin', '2017-09-27 21:27:43', 'Usuario sube archivo:5370.png'),
(485, 'admin', '2017-09-27 21:27:52', 'Usuario sube archivo:5370.jpg'),
(486, 'admin', '2017-09-27 21:28:00', 'Usuario sube archivo:5370.jpg'),
(487, 'admin', '2017-09-27 21:28:05', 'Usuario sube archivo:5370.png'),
(488, 'admin', '2017-09-27 21:28:10', 'Usuario sube archivo:5370.png'),
(489, 'admin', '2017-09-27 21:29:01', 'Usuario sube archivo:5376.png'),
(490, 'admin', '2017-09-27 21:29:21', 'Usuario sube archivo:5376.jpg'),
(491, 'admin', '2017-09-27 21:29:41', 'Usuario sube archivo:5376.jpg'),
(492, 'admin', '2017-09-27 21:30:34', 'Usuario sube archivo:5376.pdf'),
(493, 'admin', '2017-09-27 21:30:47', 'Usuario sube archivo:5376.jpg'),
(494, 'admin', '2017-09-27 21:38:16', 'Usuario sube archivo:5381.jpg'),
(495, 'admin', '2017-09-27 21:38:51', 'Usuario sube archivo:5381.pdf'),
(496, 'admin', '2017-09-27 21:39:38', 'Usuario sube archivo:5381.pdf'),
(497, 'admin', '2017-09-27 21:41:16', 'Usuario sube archivo:5381.jpg'),
(498, 'admin', '2017-09-27 21:43:34', 'Usuario sube archivo:5381.pdf'),
(499, 'admin', '2017-09-27 21:44:06', 'Usuario sube archivo:5381.jpg'),
(500, 'admin', '2017-09-27 21:45:05', 'Usuario sube archivo:5381.png'),
(501, 'admin', '2017-09-27 21:47:25', 'Usuario sube archivo:5381.png'),
(502, 'admin', '2017-09-27 21:48:46', 'Usuario sube archivo:5381.png'),
(503, 'admin', '2017-09-27 21:50:26', 'Usuario sube archivo:5381.jpg'),
(504, 'admin', '2017-09-27 21:51:52', 'Usuario sube archivo:5381.jpg'),
(505, 'admin', '2017-09-27 21:52:44', 'Usuario sube archivo:5381.jpg'),
(506, 'admin', '2017-09-27 21:53:17', 'Usuario sube archivo:5381.jpg'),
(507, 'admin', '2017-09-27 21:56:39', 'Usuario sube archivo:5381.jpg'),
(508, 'admin', '2017-09-27 21:57:46', 'Usuario sube archivo:5381.jpg'),
(509, 'admin', '2017-09-27 21:59:45', 'Usuario sube archivo:5381.jpg'),
(510, 'admin', '2017-09-27 22:01:37', 'Usuario sube archivo:5381.png'),
(511, 'admin', '2017-09-27 22:02:24', 'Usuario sube archivo:5381.jpg'),
(512, 'admin', '2017-09-27 22:02:35', 'Usuario sube archivo:5381.jpg'),
(513, 'admin', '2017-09-27 22:02:47', 'Usuario sube archivo:5381.jpg'),
(514, 'admin', '2017-09-27 22:03:36', 'Usuario sube archivo:5381.jpg'),
(515, 'admin', '2017-09-27 23:17:08', 'Usuario sube archivo:215.jpg'),
(516, 'admin', '2017-09-27 23:17:37', 'Usuario sube archivo:4427.jpg'),
(517, 'admin', '2017-09-27 23:20:49', 'Usuario sube archivo:4427.png'),
(518, 'admin', '2017-09-27 23:20:53', 'Usuario sube archivo:4427.jpg'),
(519, 'admin', '2017-09-27 23:20:57', 'Usuario sube archivo:4427.jpg'),
(520, 'admin', '2017-09-27 23:21:05', 'Usuario sube archivo:4427.jpg'),
(521, 'admin', '2017-09-27 23:23:16', 'Usuario sube archivo:4427.png'),
(522, 'admin', '2017-09-27 23:23:27', 'Usuario sube archivo:4427.jpg'),
(523, 'admin', '2017-09-27 23:23:39', 'Usuario sube archivo:4427.gif'),
(524, 'admin', '2017-09-27 23:27:50', 'Cierre de sesión desde:192.168.101.150'),
(525, 'nutresa', '2017-09-27 23:27:57', 'Inicio de sesión correcto desde:192.168.101.150'),
(526, 'nutresa', '2017-09-27 23:28:20', 'Cierre de sesión desde:192.168.101.150'),
(527, 'admin', '2017-09-27 23:28:25', 'Inicio de sesión correcto desde:192.168.101.150'),
(528, 'admin', '2017-09-27 23:29:04', 'Cierre de sesión desde:192.168.101.150'),
(529, 'nutresa', '2017-09-28 13:28:32', 'Inicio de sesión correcto desde:192.168.101.150'),
(530, 'admin', '2017-09-28 13:28:38', 'Inicio de sesión correcto desde:192.168.101.150'),
(531, 'admin', '2017-09-28 13:46:58', 'Usuario sube archivo:709.jpg'),
(532, 'admin', '2017-09-28 15:12:53', 'Usuario sube archivo:5366.jpg'),
(533, 'admin', '2017-09-28 15:13:11', 'Usuario sube archivo:5366.jpg'),
(534, 'admin', '2017-09-28 15:14:06', 'Usuario sube archivo:5366.jpg'),
(535, 'admin', '2017-09-28 15:15:05', 'Usuario sube archivo:5366.png'),
(536, 'admin', '2017-09-28 15:15:14', 'Usuario sube archivo:5366.png'),
(537, 'admin', '2017-09-28 15:25:09', 'Usuario sube archivo:5364.jpg'),
(538, 'admin', '2017-09-28 15:27:22', 'Usuario sube archivo:5364.jpg'),
(539, 'admin', '2017-09-28 15:27:37', 'Usuario sube archivo:5364.jpg'),
(540, 'admin', '2017-09-28 15:28:09', 'Usuario sube archivo:5364.jpg'),
(541, 'admin', '2017-09-28 15:28:21', 'Usuario sube archivo:5364.png'),
(542, 'admin', '2017-09-28 15:28:41', 'Usuario sube archivo:5364.png'),
(543, 'admin', '2017-09-28 15:28:51', 'Usuario sube archivo:5364.png'),
(544, 'admin', '2017-09-28 15:28:52', 'Usuario sube archivo:5364.png'),
(545, 'admin', '2017-09-28 15:45:31', 'Usuario sube archivo:5364.png'),
(546, 'admin', '2017-09-28 15:46:25', 'Usuario sube archivo:5364.jpg'),
(547, 'admin', '2017-09-28 15:46:46', 'Usuario sube archivo:5364.jpg'),
(548, 'admin', '2017-09-28 15:48:10', 'Usuario sube archivo:5364.jpg'),
(549, 'admin', '2017-09-28 15:48:20', 'Usuario sube archivo:5364.png'),
(550, 'admin', '2017-09-28 15:48:32', 'Usuario sube archivo:5364.jpg'),
(551, 'admin', '2017-09-28 15:53:27', 'Usuario sube archivo:5364.jpg'),
(552, 'admin', '2017-09-28 15:53:55', 'Usuario sube archivo:5364.gif'),
(553, 'admin', '2017-09-28 15:55:30', 'Usuario sube archivo:5364.jpg'),
(554, 'admin', '2017-09-28 15:57:57', 'Usuario sube archivo:5364.jpg'),
(555, 'admin', '2017-09-28 15:59:33', 'Usuario sube archivo:5364.jpg'),
(556, 'admin', '2017-09-28 16:11:27', 'Usuario sube archivo:5364.jpg'),
(557, 'admin', '2017-09-28 16:15:43', 'Usuario sube archivo:5364.png'),
(558, 'admin', '2017-09-28 16:15:53', 'Usuario sube archivo:5364.jpg'),
(559, 'admin', '2017-09-28 16:18:13', 'Usuario sube archivo:5364.png'),
(560, 'admin', '2017-09-28 16:18:18', 'Usuario sube archivo:5364.jpg'),
(561, 'admin', '2017-09-28 16:23:23', 'Usuario sube archivo:5364.png'),
(562, 'admin', '2017-09-28 16:23:28', 'Usuario sube archivo:5364.jpg'),
(563, 'admin', '2017-09-28 16:23:32', 'Usuario sube archivo:5364.jpg'),
(564, 'admin', '2017-09-28 16:24:05', 'Usuario sube archivo:5364.jpg'),
(565, 'admin', '2017-09-28 16:24:10', 'Usuario sube archivo:5364.jpg'),
(566, 'admin', '2017-09-28 16:24:14', 'Usuario sube archivo:5364.png'),
(567, 'admin', '2017-09-28 16:24:24', 'Usuario sube archivo:5364.jpg'),
(568, 'admin', '2017-09-28 16:24:28', 'Usuario sube archivo:5364.jpg'),
(569, 'admin', '2017-09-28 16:24:40', 'Usuario sube archivo:5364.jpg'),
(570, 'admin', '2017-09-28 16:25:37', 'Usuario sube archivo:5364.jpg'),
(571, 'admin', '2017-09-28 16:26:12', 'Usuario sube archivo:5364.png'),
(572, 'admin', '2017-09-28 16:26:37', 'Usuario sube archivo:5367.jpg'),
(573, 'admin', '2017-09-28 16:26:49', 'Usuario sube archivo:5370.jpg'),
(574, 'admin', '2017-09-28 16:27:00', 'Usuario sube archivo:5376.jpg'),
(575, 'admin', '2017-09-28 16:48:01', 'Usuario sube archivo:5371.jpg'),
(576, 'admin', '2017-09-28 16:48:29', 'Usuario sube archivo:5372.jpg'),
(577, 'admin', '2017-09-28 16:56:14', 'Usuario sube archivo:5374.jpg'),
(578, 'admin', '2017-09-28 16:59:08', 'Usuario sube archivo:5375.jpg'),
(579, 'admin', '2017-09-28 18:02:36', 'Usuario sube archivo:5373.png'),
(580, 'admin', '2017-09-28 18:03:14', 'Usuario sube archivo:5377.jpg'),
(581, 'admin', '2017-09-28 18:04:03', 'Usuario sube archivo:5376.jpg'),
(582, 'admin', '2017-09-28 18:07:59', 'Usuario sube archivo:5376.jpg'),
(583, 'No definido', '2017-09-28 18:16:41', 'Cierre de sesión desde:192.168.101.150'),
(584, 'nutresa', '2017-09-28 18:16:46', 'Inicio de sesión fallido desde:192.168.101.150'),
(585, 'nutresa', '2017-09-28 18:16:53', 'Inicio de sesión correcto desde:192.168.101.150'),
(586, 'admin', '2017-09-28 18:19:00', 'Usuario sube archivo:5376.jpg'),
(587, 'admin', '2017-09-28 18:19:25', 'Usuario sube archivo:5376.PNG'),
(588, 'admin', '2017-09-28 18:20:59', 'Usuario sube archivo:5376.jpg'),
(589, 'admin', '2017-09-28 18:32:20', 'Usuario sube archivo:5378.JPG'),
(590, 'admin', '2017-09-28 18:32:31', 'Usuario sube archivo:5379.jpg'),
(591, 'admin', '2017-09-28 18:32:44', 'Usuario sube archivo:5366.jpg'),
(592, 'admin', '2017-09-28 18:46:33', 'Usuario sube archivo:5380.png'),
(593, 'admin', '2017-09-28 19:44:09', 'Usuario sube archivo:11.jpg'),
(594, 'admin', '2017-09-28 22:02:58', 'Cierre de sesión desde:192.168.101.150'),
(595, 'No definido', '2017-09-28 22:03:09', 'Cierre de sesión desde:192.168.101.150'),
(596, 'No definido', '2017-09-28 22:03:13', 'Cierre de sesión desde:192.168.101.150'),
(597, 'admin', '2017-09-29 14:13:03', 'Inicio de sesión correcto desde:192.168.101.150'),
(598, 'admin', '2017-09-29 14:27:34', 'Usuario sube archivo:137.jpg'),
(599, 'admin', '2017-09-29 14:53:24', 'Usuario sube archivo:5382.jpg'),
(600, 'No definido', '2017-09-29 19:14:21', 'Cierre de sesión desde:192.168.101.150'),
(601, 'admin', '2017-09-29 19:14:26', 'Inicio de sesión correcto desde:192.168.101.150'),
(602, 'admin', '2017-09-29 20:56:39', 'Usuario sube archivo:5383.png'),
(603, 'admin', '2017-09-29 20:58:10', 'Cierre de sesión desde:192.168.101.150'),
(604, 'admin', '2017-09-29 21:09:26', 'Inicio de sesión correcto desde:192.168.101.150'),
(605, 'admin', '2017-09-29 22:20:43', 'Cierre de sesión desde:192.168.101.150'),
(606, 'admin', '2017-10-02 15:07:29', 'Inicio de sesión correcto desde:192.168.101.150'),
(607, 'admin', '2017-10-02 15:08:17', 'Cierre de sesión desde:192.168.101.150'),
(608, 'nutresa', '2017-10-02 15:08:25', 'Inicio de sesión correcto desde:192.168.101.150'),
(609, 'nutresa', '2017-10-02 16:28:07', 'Cierre de sesión desde:192.168.101.150'),
(610, 'nutresa', '2017-10-02 16:28:12', 'Inicio de sesión correcto desde:192.168.101.150'),
(611, 'nutresa', '2017-10-02 16:28:54', 'Cierre de sesión desde:192.168.101.150'),
(612, 'admin', '2017-10-02 16:28:58', 'Inicio de sesión correcto desde:192.168.101.150'),
(613, 'admin', '2017-10-02 16:29:43', 'Usuario sube archivo:5364.png');
INSERT INTO `om_log` (`id`, `usuario`, `fecha_hora`, `evento`) VALUES
(614, 'admin', '2017-10-02 16:30:34', 'Usuario sube archivo:5364.png'),
(615, 'admin', '2017-10-02 16:30:49', 'Usuario sube archivo:5364.png'),
(616, 'No definido', '2017-10-02 16:43:07', 'Cierre de sesión desde:192.168.101.150'),
(617, 'admin', '2017-10-02 16:43:13', 'Inicio de sesión fallido desde:192.168.101.150'),
(618, 'admin', '2017-10-02 16:43:19', 'Inicio de sesión correcto desde:192.168.101.150'),
(619, 'admin', '2017-10-02 16:49:33', 'Usuario sube archivo:5379.jpg'),
(620, 'admin', '2017-10-02 19:48:38', 'Cierre de sesión desde:192.168.101.150'),
(621, 'nutresa', '2017-10-02 19:48:44', 'Inicio de sesión fallido desde:192.168.101.150'),
(622, 'nutresa', '2017-10-02 19:48:50', 'Inicio de sesión correcto desde:192.168.101.150'),
(623, 'nutresa', '2017-10-02 19:50:28', 'Cierre de sesión desde:192.168.101.150'),
(624, 'admin', '2017-10-02 19:50:33', 'Inicio de sesión correcto desde:192.168.101.150'),
(625, 'admin', '2017-10-02 20:25:45', 'Usuario sube archivo:2017.png'),
(626, 'admin', '2017-10-02 20:27:20', 'Usuario sube archivo:2017.png'),
(627, 'admin', '2017-10-02 20:47:05', 'Usuario sube archivo:2017.jpg'),
(628, 'admin', '2017-10-02 20:51:17', 'Usuario sube archivo:2017.png'),
(629, 'admin', '2017-10-02 20:52:27', 'Usuario sube archivo:2017.png'),
(630, 'admin', '2017-10-02 20:53:18', 'Usuario sube archivo:2017.png'),
(631, 'admin', '2017-10-02 20:59:50', 'Usuario sube archivo:2017.png'),
(632, 'admin', '2017-10-02 21:01:01', 'Usuario sube archivo:2017.png'),
(633, 'admin', '2017-10-02 21:04:05', 'Usuario sube archivo:2017.jpg'),
(634, 'admin', '2017-10-02 21:04:48', 'Usuario sube archivo:2017.png'),
(635, 'admin', '2017-10-02 21:08:54', 'Usuario sube archivo:2017.jpg'),
(636, 'admin', '2017-10-02 21:11:42', 'Usuario sube archivo:4774.png'),
(637, 'admin', '2017-10-02 21:12:17', 'Usuario sube archivo:4915.png'),
(638, 'admin', '2017-10-02 21:14:00', 'Usuario sube archivo:5367.jpg'),
(639, 'admin', '2017-10-02 21:14:58', 'Usuario sube archivo:5367.png'),
(640, 'admin', '2017-10-02 21:28:17', 'Cierre de sesión desde:192.168.101.150'),
(641, 'admin', '2017-10-02 21:58:23', 'Inicio de sesión correcto desde:192.168.101.150'),
(642, 'admin', '2017-10-02 21:58:54', 'Usuario sube archivo:5364.png'),
(643, 'admin', '2017-10-02 22:23:18', 'Cierre de sesión desde:192.168.101.150'),
(644, 'No definido', '2017-10-02 22:23:52', 'Cierre de sesión desde:192.168.101.150'),
(645, 'admin', '2017-10-03 13:04:48', 'Inicio de sesión correcto desde:192.168.101.150'),
(646, 'admin', '2017-10-03 13:48:18', 'Usuario sube archivo:5377.jpg'),
(647, 'admin', '2017-10-03 13:49:08', 'Usuario sube archivo:5377.png'),
(648, 'admin', '2017-10-03 13:59:37', 'Usuario sube archivo:5377.png'),
(649, 'admin', '2017-10-03 14:00:27', 'Usuario sube archivo:5379.jpg'),
(650, 'admin', '2017-10-03 14:02:41', 'Usuario sube archivo:5377.jpg'),
(651, 'admin', '2017-10-03 14:03:00', 'Inicio de sesión correcto desde:192.168.101.150'),
(652, 'admin', '2017-10-03 14:03:16', 'Usuario sube archivo:5377.png'),
(653, 'admin', '2017-10-03 14:05:44', 'Usuario sube archivo:5364.png'),
(654, 'admin', '2017-10-03 14:08:52', 'Usuario sube archivo:5364.png'),
(655, 'admin', '2017-10-03 14:12:07', 'Usuario sube archivo:5364.jpg'),
(656, 'admin', '2017-10-03 14:12:37', 'Usuario sube archivo:5364.png'),
(657, 'admin', '2017-10-03 14:14:10', 'Usuario sube archivo:5366.png'),
(658, 'admin', '2017-10-03 14:14:17', 'Usuario sube archivo:5366.png'),
(659, 'admin', '2017-10-03 14:14:56', 'Usuario sube archivo:5364.png'),
(660, 'admin', '2017-10-03 14:15:36', 'Usuario sube archivo:1.png'),
(661, 'admin', '2017-10-03 14:16:48', 'Usuario sube archivo:303.png'),
(662, 'admin', '2017-10-03 14:16:55', 'Usuario sube archivo:303.png'),
(663, 'admin', '2017-10-03 14:18:37', 'Usuario sube archivo:303.png'),
(664, 'admin', '2017-10-03 14:21:07', 'Usuario sube archivo:303.gif'),
(665, 'admin', '2017-10-03 14:58:23', 'Usuario sube archivo:304.png'),
(666, 'admin', '2017-10-03 16:45:29', 'Usuario sube archivo:5384.gif'),
(667, 'admin', '2017-10-03 17:05:49', 'Usuario sube archivo:5372.jpg'),
(668, 'admin', '2017-10-03 17:06:23', 'Cierre de sesión desde:192.168.101.150'),
(669, 'admin', '2017-10-03 21:05:30', 'Inicio de sesión correcto desde:192.168.101.150'),
(670, 'admin', '2017-10-03 21:15:23', 'Usuario borró archivo:3259'),
(671, 'admin', '2017-10-03 21:18:42', 'Usuario sube archivo:5385.jpg'),
(672, 'admin', '2017-10-03 21:18:57', 'Usuario borró imagen: 5385.jpg'),
(673, 'admin', '2017-10-03 21:23:23', 'Usuario crea registro : 5386'),
(674, 'admin', '2017-10-03 21:25:18', 'Usuario sube archivo: 5385.jpg'),
(675, 'admin', '2017-10-03 21:25:18', 'Usuario modifica registro : 5385'),
(676, 'admin', '2017-10-03 21:27:25', 'Usuario borró imagen: 5385.jpg'),
(677, 'admin', '2017-10-03 21:27:44', 'Usuario sube archivo: 5385.jpg'),
(678, 'admin', '2017-10-03 21:27:44', 'Usuario agrego imagen : 5385 - image/jpeg'),
(679, 'admin', '2017-10-03 21:27:44', 'Usuario modifica registro : 5385'),
(680, 'admin', '2017-10-03 21:28:33', 'Usuario borró imagen: 5385.jpg'),
(681, 'admin', '2017-10-03 21:30:29', 'Usuario borró registro: 5385'),
(682, 'admin', '2017-10-03 21:30:33', 'Usuario borró registro: 5386'),
(683, 'admin', '2017-10-03 21:34:26', 'Usuario crea registro : 5387 - Signo: .'),
(684, 'admin', '2017-10-03 21:35:07', 'Usuario modifica registro : 5387 - Signo: .'),
(685, 'admin', '2017-10-03 21:35:13', 'Usuario sube archivo: 5387.jpg'),
(686, 'admin', '2017-10-03 21:35:13', 'Usuario agrego imagen : 5387 - image/jpeg'),
(687, 'admin', '2017-10-03 21:35:13', 'Usuario modifica registro : 5387 - Signo: .'),
(688, 'admin', '2017-10-03 21:35:15', 'Usuario borró registro: 5387 - Signo: @.'),
(689, 'admin', '2017-10-03 21:37:33', 'Usuario crea registro : 5388 - Signo: @123.'),
(690, 'admin', '2017-10-03 21:37:33', 'Usuario sube archivo: 5388.jpg'),
(691, 'admin', '2017-10-03 21:37:51', 'Usuario modifica registro : 5388 - Signo: Tatoo.'),
(692, 'admin', '2017-10-03 21:38:04', 'Usuario borró imagen: 5388.jpg'),
(693, 'admin', '2017-10-03 21:38:07', 'Usuario borró registro: 5388 - Signo: Tatoo.'),
(694, 'admin', '2017-10-03 21:38:58', 'Cierre de sesión desde:192.168.101.150'),
(695, 'nutresa', '2017-10-03 21:39:05', 'Inicio de sesión correcto desde:192.168.101.150'),
(696, 'nutresa', '2017-10-03 21:39:35', 'Cierre de sesión desde:192.168.101.150'),
(697, 'No definido', '2017-10-04 15:38:26', 'Cierre de sesión desde:192.168.101.150'),
(698, 'admin', '2017-10-04 15:38:36', 'Inicio de sesión correcto desde:192.168.101.150'),
(699, 'admin', '2017-10-04 15:48:02', 'Cierre de sesión desde:192.168.101.150'),
(700, 'admin', '2017-10-04 16:43:05', 'Inicio de sesión correcto desde:192.168.101.150'),
(701, 'admin', '2017-10-04 16:43:52', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(702, 'admin', '2017-10-04 16:47:36', 'Cierre de sesión desde:192.168.101.150'),
(703, 'nutresa', '2017-10-04 16:47:47', 'Inicio de sesión correcto desde:192.168.101.150'),
(704, 'nutresa', '2017-10-04 16:57:26', 'Cierre de sesión desde:192.168.101.150'),
(705, 'admin', '2017-10-04 16:57:35', 'Inicio de sesión correcto desde:192.168.101.150'),
(706, 'admin', '2017-10-04 16:57:55', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(707, 'admin', '2017-10-04 16:58:03', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(708, 'admin', '2017-10-04 16:58:15', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(709, 'admin', '2017-10-04 17:03:15', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(710, 'admin', '2017-10-04 17:04:55', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(711, 'admin', '2017-10-04 17:05:13', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(712, 'admin', '2017-10-04 17:05:38', 'Usuario borró imagen: 3281.png'),
(713, 'admin', '2017-10-04 17:05:50', 'Usuario sube archivo: 3281.png'),
(714, 'admin', '2017-10-04 17:05:50', 'Usuario agrego imagen : 3281 - image/png'),
(715, 'admin', '2017-10-04 17:05:50', 'Usuario modifica registro : 3281 - Signo: COMMITED TO FARMERS.'),
(716, 'admin', '2017-10-04 17:18:50', 'Cierre de sesión desde:192.168.101.150'),
(717, 'admin', '2017-10-05 18:52:44', 'Inicio de sesión correcto desde:192.168.101.150'),
(718, 'admin', '2017-10-05 18:53:01', 'Usuario modifica registro : 547 - Signo: TE ALIMENTASDISFRUTASTE SIENTES BIEN.'),
(719, 'admin', '2017-10-05 18:53:12', 'Usuario modifica registro : 547 - Signo: TE ALIMENTASDISFRUTASTE SIENTES BIEN.'),
(720, 'admin', '2017-10-05 18:53:21', 'Usuario modifica registro : 547 - Signo: TE ALIMENTASDISFRUTASTE SIENTES BIEN.'),
(721, 'admin', '2017-10-05 18:53:35', 'Usuario sube archivo: 547.jpg'),
(722, 'admin', '2017-10-05 18:53:35', 'Usuario agrego imagen : 547 - image/jpeg'),
(723, 'admin', '2017-10-05 18:53:35', 'Usuario modifica registro : 547 - Signo: TE ALIMENTASDISFRUTASTE SIENTES BIEN.'),
(724, 'No definido', '2017-10-05 22:18:55', 'Cierre de sesión desde:192.168.101.150'),
(725, 'admin ', '2017-10-09 18:29:16', 'Inicio de sesión correcto desde:192.168.101.150'),
(726, 'admin ', '2017-10-09 18:33:17', 'Usuario crea registro : 5389 - Signo: @.'),
(727, 'admin ', '2017-10-09 18:33:59', 'Usuario crea registro : 5390 - Signo: 321.'),
(728, 'admin ', '2017-10-09 18:37:54', 'Usuario crea registro : 5391 - Signo: 321.'),
(729, 'admin ', '2017-10-09 18:41:57', 'Usuario crea registro : 5392 - Signo: asdf.'),
(730, 'admin ', '2017-10-09 18:45:06', 'Usuario crea registro : 5393 - Signo: 23.'),
(731, 'admin ', '2017-10-09 18:46:17', 'Usuario crea registro : 5394 - Signo: asdf.'),
(732, 'admin ', '2017-10-09 18:46:33', 'Usuario sube archivo: 5394.png'),
(733, 'admin ', '2017-10-09 18:46:33', 'Usuario agrego imagen : 5394 - image/png'),
(734, 'admin ', '2017-10-09 18:46:33', 'Usuario modifica registro : 5394 - Signo: asdf.'),
(735, 'admin ', '2017-10-09 18:51:42', 'Usuario borró registro: 5394 - Signo: asdf.'),
(736, 'admin ', '2017-10-09 18:51:45', 'Usuario borró registro: 5392 - Signo: asdf.'),
(737, 'admin ', '2017-10-09 18:52:16', 'Usuario borró registro: 5393 - Signo: 23.'),
(738, 'admin ', '2017-10-09 18:52:26', 'Usuario borró registro: 5391 - Signo: 321.'),
(739, 'admin ', '2017-10-09 18:53:06', 'Usuario borró registro: 5363 - Signo: Cositas Dulcecitas.'),
(740, 'admin ', '2017-10-09 18:54:05', 'Cierre de sesión desde:192.168.101.150'),
(741, 'admin', '2017-10-09 19:13:23', 'Inicio de sesión correcto desde:192.168.101.150'),
(742, 'admin', '2017-10-09 19:23:04', 'Cierre de sesión desde:192.168.101.150'),
(743, 'nutresa', '2017-10-09 19:23:16', 'Inicio de sesión correcto desde:192.168.101.150'),
(744, 'nutresa', '2017-10-09 19:25:49', 'Cierre de sesión desde:192.168.101.150'),
(745, 'admin', '2017-10-09 20:22:53', 'Inicio de sesión correcto desde:192.168.101.200'),
(746, 'admin', '2017-10-09 20:24:49', 'Usuario crea registro : 5395 - Signo: 123.'),
(747, 'admin', '2017-10-09 20:24:49', 'Usuario sube archivo: 5395.jpg'),
(748, 'admin', '2017-10-09 20:25:36', 'Usuario crea registro : 5396 - Signo: 123.'),
(749, 'admin', '2017-10-09 20:27:31', 'Usuario crea registro : 5397 - Signo: 123.'),
(750, 'admin', '2017-10-09 20:27:31', 'Usuario sube archivo: 5397.jpg'),
(751, 'admin', '2017-10-09 20:29:55', 'Usuario crea registro : 5398 - Signo: sdf.'),
(752, 'admin', '2017-10-09 20:31:44', 'Usuario crea registro : 5399 - Signo: 12312.'),
(753, 'admin', '2017-10-09 20:31:44', 'Usuario sube archivo: 5399.jpg'),
(754, 'admin', '2017-10-09 20:32:38', 'Usuario crea registro : 5400 - Signo: 123.'),
(755, 'admin', '2017-10-09 20:32:48', 'Usuario sube archivo: 5400.jpg'),
(756, 'admin', '2017-10-09 20:32:48', 'Usuario agrego imagen : 5400 - image/jpeg'),
(757, 'admin', '2017-10-09 20:32:48', 'Usuario modifica registro : 5400 - Signo: 123.'),
(758, 'admin', '2017-10-09 20:35:21', 'Usuario crea registro : 5401 - Signo: nutre.'),
(759, 'admin', '2017-10-09 20:35:21', 'Usuario sube archivo: 5401.jpg'),
(760, 'admin', '2017-10-09 20:37:48', 'Usuario crea registro : 5402 - Signo: 123.'),
(761, 'admin', '2017-10-09 20:37:48', 'Usuario sube archivo: 5402.jpg'),
(762, 'admin', '2017-10-09 20:39:38', 'Usuario crea registro : 5403 - Signo: nutre.'),
(763, 'admin', '2017-10-09 20:46:53', 'Usuario crea registro : 5404 - Signo: 123.'),
(764, 'admin', '2017-10-09 20:46:53', 'Usuario sube archivo: 5404.jpg'),
(765, 'admin', '2017-10-09 20:52:55', 'Usuario crea registro : 5405 - Signo: 123.'),
(766, 'admin', '2017-10-09 20:52:55', 'Usuario sube archivo: 5405.jpg'),
(767, 'admin', '2017-10-09 20:53:20', 'Usuario crea registro : 5406 - Signo: 123.'),
(768, 'admin', '2017-10-09 20:53:20', 'Usuario sube archivo: 5406.jpg'),
(769, 'admin', '2017-10-09 20:54:19', 'Usuario crea registro : 5407 - Signo: 123.'),
(770, 'admin', '2017-10-09 20:54:20', 'Usuario sube archivo: 5407.jpg'),
(771, 'admin', '2017-10-09 20:55:09', 'Usuario modifica registro : 5407 - Signo: 123.'),
(772, 'admin', '2017-10-09 20:55:16', 'Usuario modifica registro : 5407 - Signo: 123.'),
(773, 'admin', '2017-10-09 20:55:28', 'Usuario borró imagen: 5407.jpg'),
(774, 'admin', '2017-10-09 20:55:45', 'Usuario modifica registro : 5407 - Signo: 123.'),
(775, 'admin', '2017-10-09 20:55:56', 'Usuario sube archivo: 5407.jpg'),
(776, 'admin', '2017-10-09 20:55:56', 'Usuario agrego imagen : 5407 - image/jpeg'),
(777, 'admin', '2017-10-09 20:55:56', 'Usuario modifica registro : 5407 - Signo: 123.'),
(778, 'admin', '2017-10-09 20:56:45', 'Usuario crea registro : 5408 - Signo: 123.'),
(779, 'admin', '2017-10-09 20:56:45', 'Usuario sube archivo: 5408.jpg'),
(780, 'admin', '2017-10-09 20:58:23', 'Cierre de sesión desde:192.168.101.200'),
(781, 'admin', '2017-10-09 21:19:05', 'Inicio de sesión fallido desde:192.168.101.200'),
(782, 'admin', '2017-10-09 21:19:23', 'Inicio de sesión fallido desde:192.168.101.200'),
(783, 'admin', '2017-10-09 21:19:29', 'Inicio de sesión correcto desde:192.168.101.200'),
(784, 'admin', '2017-10-09 21:20:18', 'Usuario sube archivo: 5389.jpg'),
(785, 'admin', '2017-10-09 21:20:18', 'Usuario agrego imagen : 5389 - image/jpeg'),
(786, 'admin', '2017-10-09 21:20:18', 'Usuario modifica registro : 5389 - Signo: @.'),
(787, 'admin', '2017-10-09 21:22:12', 'Usuario modifica registro : 5389 - Signo: @.'),
(788, 'admin', '2017-10-09 21:22:27', 'Usuario modifica registro : 5389 - Signo: @.'),
(789, 'admin', '2017-10-09 21:22:47', 'Usuario modifica registro : 5389 - Signo: @.'),
(790, 'admin', '2017-10-09 21:23:03', 'Usuario modifica registro : 5389 - Signo: @Castillo.'),
(791, 'admin', '2017-10-09 21:41:44', 'Cierre de sesión desde:192.168.101.200'),
(792, 'No definido', '2017-10-09 22:30:36', 'Cierre de sesión desde:192.168.101.150'),
(793, 'admin', '2017-10-10 20:11:12', 'Inicio de sesión correcto desde:192.168.101.150'),
(794, 'admin', '2017-10-10 20:23:25', 'Usuario crea registro : 5409 - Signo: grupo.'),
(795, 'admin', '2017-10-10 20:23:25', 'Usuario sube archivo: 5409.png'),
(796, 'admin', '2017-10-10 20:26:30', 'Cierre de sesión desde:192.168.101.150'),
(797, 'nutresa', '2017-10-10 20:26:36', 'Inicio de sesión correcto desde:192.168.101.150'),
(798, 'nutresa', '2017-10-10 22:30:04', 'Cierre de sesión desde:192.168.101.150'),
(799, 'admin', '2017-10-17 14:10:28', 'Inicio de sesión correcto desde:192.168.101.150'),
(800, 'admin', '2017-10-17 14:25:34', 'Cierre de sesión desde:192.168.101.150'),
(801, 'nutresa', '2017-10-17 14:25:45', 'Inicio de sesión correcto desde:192.168.101.150'),
(802, 'nutresa', '2017-10-17 14:30:23', 'Cierre de sesión desde:192.168.101.150'),
(803, 'admin', '2017-10-17 14:30:30', 'Inicio de sesión correcto desde:192.168.101.150'),
(804, 'admin', '2017-10-17 14:31:02', 'Usuario sube archivo: 4946.JPG'),
(805, 'admin', '2017-10-17 14:31:02', 'Usuario agrego imagen : 4946 - image/jpeg'),
(806, 'admin', '2017-10-17 14:31:02', 'Usuario modifica registro : 4946 - Signo: SELLO ROJO.'),
(807, 'admin', '2017-10-17 14:31:42', 'Usuario sube archivo: 4893.JPG'),
(808, 'admin', '2017-10-17 14:31:42', 'Usuario agrego imagen : 4893 - image/jpeg'),
(809, 'admin', '2017-10-17 14:31:42', 'Usuario modifica registro : 4893 - Signo: SELLO ROJO.'),
(810, 'admin', '2017-10-17 15:29:45', 'Cierre de sesión desde:192.168.101.150'),
(811, 'admin', '2017-10-20 18:28:42', 'Inicio de sesión correcto desde:192.168.101.150'),
(812, 'admin', '2017-10-20 18:32:59', 'Cierre de sesión desde:192.168.101.150'),
(813, 'admin', '2017-10-20 21:07:05', 'Inicio de sesión correcto desde:192.168.101.150'),
(814, 'admin', '2017-10-20 21:11:55', 'Cierre de sesión desde:192.168.101.150'),
(815, 'admin', '2017-10-20 21:13:51', 'Inicio de sesión correcto desde:192.168.101.150'),
(816, 'admin', '2017-10-20 21:18:03', 'Cierre de sesión desde:192.168.101.150'),
(817, 'nutresa', '2017-10-20 21:18:13', 'Inicio de sesión correcto desde:192.168.101.150'),
(818, 'No definido', '2017-10-20 21:20:21', 'Cierre de sesión desde:192.168.101.150'),
(819, 'nutresa', '2017-10-20 21:20:29', 'Inicio de sesión correcto desde:192.168.101.150'),
(820, 'nutresa', '2017-10-20 21:37:16', 'Cierre de sesión desde:192.168.101.150'),
(821, 'nutresa', '2017-10-20 21:37:29', 'Inicio de sesión correcto desde:192.168.101.150'),
(822, 'nutresa', '2017-10-20 21:44:05', 'Cierre de sesión desde:192.168.101.150'),
(823, 'admin', '2017-10-20 21:44:16', 'Inicio de sesión correcto desde:192.168.101.150'),
(824, 'nutresa', '2017-10-20 21:48:58', 'Cierre de sesión desde:192.168.101.150'),
(825, 'admin', '2017-10-20 21:49:08', 'Inicio de sesión correcto desde:192.168.101.150'),
(826, 'admin', '2017-10-20 21:55:02', 'Usuario crea registro : 5410 - Signo: asdfasdf.'),
(827, 'admin', '2017-10-20 21:55:02', 'Usuario sube archivo: 5410.jpg'),
(828, 'admin', '2017-10-20 21:57:51', 'Cierre de sesión desde:192.168.101.150'),
(829, 'nutresa', '2017-10-20 21:58:26', 'Inicio de sesión correcto desde:192.168.101.150'),
(830, 'nutresa', '2017-10-20 21:58:58', 'Cierre de sesión desde:192.168.101.150'),
(831, 'admin', '2017-10-20 21:59:22', 'Cierre de sesión desde:192.168.101.150'),
(832, 'nutresa', '2017-10-20 21:59:28', 'Inicio de sesión correcto desde:192.168.101.150'),
(833, 'nutresa', '2017-10-20 22:00:16', 'Cierre de sesión desde:192.168.101.150'),
(834, 'admin', '2017-10-20 22:00:21', 'Inicio de sesión correcto desde:192.168.101.150'),
(835, 'admin', '2017-10-20 22:01:17', 'Cierre de sesión desde:192.168.101.150'),
(836, 'nutresa', '2017-10-20 22:07:20', 'Inicio de sesión correcto desde:192.168.101.150'),
(837, 'nutresa', '2017-10-20 22:20:34', 'Cierre de sesión desde:192.168.101.150'),
(838, 'admin', '2017-10-20 22:20:48', 'Inicio de sesión correcto desde:192.168.101.150'),
(839, 'admin', '2017-10-20 22:22:27', 'Cierre de sesión desde:192.168.101.150'),
(840, 'admin', '2017-10-20 22:27:21', 'Inicio de sesión correcto desde:192.168.101.150'),
(841, 'admin', '2017-10-20 22:33:20', 'Cierre de sesión desde:192.168.101.150'),
(842, 'admin', '2017-10-23 20:08:00', 'Inicio de sesión correcto desde:192.168.101.150'),
(843, 'admin', '2017-10-23 20:08:03', 'Cierre de sesión desde:192.168.101.150'),
(844, 'admin', '2017-10-23 20:08:08', 'Inicio de sesión correcto desde:192.168.101.150'),
(845, 'admin', '2017-10-23 20:21:45', 'Cierre de sesión desde:192.168.101.150'),
(846, 'admin', '2017-10-23 20:21:52', 'Inicio de sesión correcto desde:192.168.101.150'),
(847, 'admin', '2017-10-24 18:37:05', 'Inicio de sesión correcto desde:192.168.101.150'),
(848, 'No definido', '2017-10-24 18:59:51', 'Cierre de sesión desde:192.168.101.150'),
(849, 'admin', '2017-10-24 18:59:58', 'Inicio de sesión correcto desde:192.168.101.150'),
(850, 'admin', '2017-10-24 19:00:36', 'Inicio de sesión correcto desde:192.168.101.150'),
(851, 'admin', '2017-10-24 20:14:39', 'Inicio de sesión correcto desde:192.168.101.150'),
(852, 'admin', '2017-10-24 21:02:10', 'Inicio de sesión correcto desde:192.168.101.150'),
(853, 'admin', '2017-10-24 21:02:33', 'Inicio de sesión correcto desde:192.168.101.150'),
(854, 'admin', '2017-10-24 22:05:48', 'Inicio de sesión correcto desde:192.168.101.150'),
(855, 'admin', '2017-10-24 22:31:44', 'Cierre de sesión desde:192.168.101.150'),
(856, 'admin', '2017-10-25 14:07:25', 'Inicio de sesión fallido desde:192.168.101.150'),
(857, 'admin', '2017-10-25 14:07:32', 'Inicio de sesión correcto desde:192.168.101.150'),
(858, 'admin', '2017-10-25 14:26:09', 'Inicio de sesión correcto desde:192.168.101.150'),
(859, 'No definido', '2017-10-25 19:08:30', 'Cierre de sesión desde:192.168.101.150'),
(860, 'admin', '2017-10-25 19:08:35', 'Inicio de sesión correcto desde:192.168.101.150'),
(861, 'admin', '2017-10-25 19:09:20', 'Cierre de sesión desde:192.168.101.150'),
(862, 'No definido', '2017-10-25 21:20:47', 'Cierre de sesión desde:192.168.101.150'),
(863, 'admin', '2017-10-30 13:55:46', 'Inicio de sesión correcto desde:192.168.101.150'),
(864, 'admin', '2017-10-30 16:20:56', 'Cierre de sesión desde:192.168.101.150'),
(865, 'asd', '2017-10-30 16:21:25', 'Inicio de sesión fallido desde:192.168.101.150'),
(866, 'admin', '2017-10-30 16:21:47', 'Inicio de sesión correcto desde:192.168.101.150'),
(867, 'admin', '2017-10-30 16:22:11', 'Cierre de sesión desde:192.168.101.150'),
(868, 'admin', '2017-10-30 16:22:17', 'Inicio de sesión correcto desde:192.168.101.150'),
(869, 'admin', '2017-10-30 20:52:36', 'Inicio de sesión correcto desde:192.168.101.150'),
(870, 'admin', '2017-11-01 20:59:20', 'Inicio de sesión fallido desde:::1'),
(871, 'admin', '2017-11-01 20:59:25', 'Inicio de sesión correcto desde:::1'),
(872, 'admin', '2017-11-01 21:00:02', 'Inicio de sesión correcto desde:::1'),
(873, NULL, '2017-11-01 21:06:52', 'Inicio de sesión fallido desde:::1'),
(874, 'admin', '2017-11-01 21:07:48', 'Inicio de sesión correcto desde:::1'),
(875, 'admin', '2017-11-01 21:10:07', 'Inicio de sesión correcto desde:::1'),
(876, 'admin', '2017-11-01 21:18:49', 'Inicio de sesión correcto desde:::1'),
(877, 'admin', '2017-11-01 21:34:03', 'Inicio de sesión correcto desde:::1'),
(878, 'admi', '2017-11-01 21:56:24', 'Inicio de sesión fallido desde:::1'),
(879, 'admin', '2017-11-01 21:56:29', 'Inicio de sesión correcto desde:::1'),
(880, 'admin', '2017-11-01 22:04:32', 'Inicio de sesión correcto desde:::1'),
(881, 'admin', '2017-11-01 22:26:50', 'Inicio de sesión correcto desde:::1'),
(882, 'nutresa', '2017-11-01 22:27:59', 'Inicio de sesión correcto desde:::1'),
(883, 'admin', '2017-11-02 13:02:41', 'Inicio de sesión correcto desde:::1'),
(884, 'admin', '2017-11-02 17:27:54', 'Inicio de sesión correcto desde:::1'),
(885, 'admin', '2017-11-02 19:05:36', 'Inicio de sesión correcto desde:::1'),
(886, 'admin', '2017-11-02 19:07:08', 'Inicio de sesión correcto desde:::1'),
(887, 'admin', '2017-11-02 19:27:12', 'Inicio de sesión correcto desde:::1'),
(888, 'admin', '2017-11-02 19:38:29', 'Inicio de sesión correcto desde:::1'),
(889, 'admin', '2017-11-02 22:31:17', 'Inicio de sesión correcto desde:::1'),
(890, 'admin', '2017-11-03 13:37:27', 'Inicio de sesión correcto desde:::1'),
(891, 'admin', '2017-11-03 13:39:56', 'Inicio de sesión correcto desde:::1'),
(892, 'admin', '2017-11-03 18:13:54', 'Inicio de sesión correcto desde:::1'),
(893, 'admin', '2017-11-03 19:21:54', 'Inicio de sesión correcto desde:::1'),
(894, 'admin', '2017-11-03 20:53:53', 'Inicio de sesión correcto desde:::1'),
(895, 'admin', '2017-11-03 20:57:40', 'Inicio de sesión correcto desde:::1'),
(896, 'admin', '2017-11-03 20:59:47', 'Inicio de sesión correcto desde:::1'),
(897, 'admin', '2017-11-03 21:06:07', 'Inicio de sesión correcto desde:::1'),
(898, 'admin', '2017-11-07 13:29:01', 'Inicio de sesión correcto desde:::1'),
(899, 'admin', '2017-11-07 13:43:27', 'Inicio de sesión correcto desde:::1'),
(900, 'admin', '2017-11-07 13:43:37', 'Inicio de sesión correcto desde:::1'),
(901, 'nutresa', '2017-11-07 13:46:22', 'Inicio de sesión correcto desde:::1'),
(902, 'admin', '2017-11-07 13:53:56', 'Inicio de sesión correcto desde:::1'),
(903, 'nutresa', '2017-11-07 14:15:10', 'Inicio de sesión correcto desde:::1'),
(904, 'admin', '2017-11-07 14:15:33', 'Inicio de sesión correcto desde:::1'),
(905, 'admin', '2017-11-07 14:28:37', 'Inicio de sesión correcto desde:::1'),
(906, 'admin', '2017-11-07 14:28:45', 'Inicio de sesión correcto desde:::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_productos`
--

CREATE TABLE `om_productos` (
  `id_producto` int(11) NOT NULL,
  `proyecto` int(11) NOT NULL,
  `producto_colciencias` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_productos`
--

INSERT INTO `om_productos` (`id_producto`, `proyecto`, `producto_colciencias`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 1, 14, 0, 'add', 'admin', '2019-11-29 11:11:53'),
(2, 13, 1, 0, 'add', 'admin', '2019-11-29 11:11:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_productos_lista_colciencias`
--

CREATE TABLE `om_productos_lista_colciencias` (
  `id_producto_lista_colciencias` int(11) NOT NULL,
  `nombre_tipo_producto` varchar(255) NOT NULL,
  `categoría` varchar(20) NOT NULL,
  `peso` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_productos_lista_colciencias`
--

INSERT INTO `om_productos_lista_colciencias` (`id_producto_lista_colciencias`, `nombre_tipo_producto`, `categoría`, `peso`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Artículos de investigación con Calidad A1', ' ART_A1', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(2, 'Artículos de investigación con Calidad D', ' ART_D', 5, 0, 'add', 'No', '0000-00-00 00:00:00'),
(3, 'Notas científicas con Calidad A1', ' N_A1', 4, 0, 'add', 'No', '0000-00-00 00:00:00'),
(4, 'Libros resultado de investigación con Calidad A1', ' LIB_A1', 300, 0, 'add', 'No', '0000-00-00 00:00:00'),
(5, 'Capítulos en libro resultado de investigación con Calidad A1', ' CAP_LIB_A1', 60, 0, 'add', 'No', '0000-00-00 00:00:00'),
(6, 'Patente de invención con Calidad A1', ' PA1', 500, 0, 'add', 'No', '0000-00-00 00:00:00'),
(7, 'Modelo de Utilidad con Calidad A1', ' MA1', 500, 0, 'add', 'No', '0000-00-00 00:00:00'),
(8, 'Variedad vegetal con Calidad A1', ' VV_A1', 300, 0, 'add', 'No', '0000-00-00 00:00:00'),
(9, 'Nueva raza animal con Calidad A', ' VA_A', 300, 0, 'add', 'No', '0000-00-00 00:00:00'),
(10, 'Poblaciones mejoradas de razas pecuarias con Calidad B', ' VA_B', 300, 0, 'add', 'No', '0000-00-00 00:00:00'),
(11, 'Obras o Productos de creación en Artes, Arquitectura y Diseño con Calidad A1', ' AAD_A1', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(12, 'Diseño industrial con Calidad A', ' DI_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(13, 'Esquema de trazado de circuito integrado con Calidad A', ' ECI_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(14, 'Software', ' SF_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(15, 'Planta piloto con Calidad A', ' PP_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(16, 'Prototipo industrial con Calidad A', ' PI_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(17, 'Signos distintivos', ' SD', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(18, 'Productos nutraceúticos', ' PN', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(19, 'Colección científica', ' CC', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(20, 'Nuevo registro científico con Calidad A', ' NRC_A', 35, 0, 'add', 'No', '0000-00-00 00:00:00'),
(21, 'Secreto empresarial', ' SE', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(22, 'Empresas de base tecnológica (Spin-off y Start-up) con Calidad A', ' EBT_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(23, 'Empresas creativas y culturales con Calidad A', ' ICC_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(24, 'Innovación generada en la gestión empresarial con Calidad A1', ' IG_A1', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(25, 'Innovación en procedimiento y servicio', ' IPP', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(26, 'Regulación Norma o Reglamento con Calidad A', ' RNL_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(27, 'Guía de Práctica Clínica', ' RNPC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(28, 'Guía de Manejo Clínico Forense', ' GMCF', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(29, 'Manuales y Modelos de atención diferencial a víctimas', ' MADV', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(30, 'Protocolos de atención a usuarios', ' PAU', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(31, 'Acto legislativo', ' AL', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(32, 'Proyecto de Ley', ' RNPL', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(33, 'Conceptos técnicos', ' CT', 15, 0, 'add', 'No', '0000-00-00 00:00:00'),
(34, 'Informe final de investigación', ' INF', 16, 0, 'add', 'No', '0000-00-00 00:00:00'),
(35, 'Acuerdo de licencia para la explotación de obras protegidas por derecho de autor', ' MR', 14, 0, 'add', 'No', '0000-00-00 00:00:00'),
(36, 'Participación ciudadana en proyectos de CTI', ' PPC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(37, 'Espacios de participación ciudadana en CTI', ' EPC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(38, 'Estrategia pedagógicas para el fomento a la CTI', ' EPA', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(39, 'Estrategia de comunicación del conocimiento', ' PCC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(40, 'Generación de contenido', ' GC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(41, 'Evento científico con Calidad A', ' EC_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(42, 'Red de conocimiento especializado con Calidad A', ' RC_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(43, 'Taller de Creación', ' TC', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(44, 'Eventos culturales y artísticos con Calidad A', ' ECA_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(45, 'Documento de trabajo', ' WP', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(46, 'Nueva Secuencia Genética', ' NSG', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(47, 'Boletín divulgativo de resultado de investigación', ' BOL', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(48, 'Edición', ' ERL', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(49, 'Informe de investigación', ' IFI', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(50, 'Consultoría científicas-tecnologías', ' CON_CT', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(51, 'Consultoría de procesos en investigación-creación en arte, arquitectura y diseño', ' CON_AAD', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(52, 'Dirección de Tesis de doctorado con Calidad A', ' TD_A', 160, 0, 'add', 'No', '0000-00-00 00:00:00'),
(53, 'Dirección de Trabajo de grado de maestría con Calidad A', ' TM_A', 70, 0, 'add', 'No', '0000-00-00 00:00:00'),
(54, 'Dirección de Trabajos de grado de pregrado con Calidad A', ' TP_A', 20, 0, 'add', 'No', '0000-00-00 00:00:00'),
(55, 'Proyecto de investigación y Desarrollo', ' PID_A', 50, 0, 'add', 'No', '0000-00-00 00:00:00'),
(56, 'Proyecto de investigación-Creación', ' PIC_A', 50, 0, 'add', 'No', '0000-00-00 00:00:00'),
(57, 'Proyecto ID+I con formación', ' PF_A', 50, 0, 'add', 'No', '0000-00-00 00:00:00'),
(58, 'Proyecto de extensión y responsabilidad social en CTI', ' PE', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(59, 'Apoyo de programas con Calidad A', ' AP_A', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(60, 'Apoyo creación de cursos con Calidad C', ' AP_C', 100, 0, 'add', 'No', '0000-00-00 00:00:00'),
(61, 'Asesoría al programa Ondas APO', ' APO', 30, 0, 'add', 'No', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_programa_academico_lista`
--

CREATE TABLE `om_programa_academico_lista` (
  `id_programa_academico` int(11) NOT NULL,
  `nombre_programa_academico` varchar(255) NOT NULL,
  `codificacion` varchar(2) NOT NULL,
  `linea_facultad` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_programa_academico_lista`
--

INSERT INTO `om_programa_academico_lista` (`id_programa_academico`, `nombre_programa_academico`, `codificacion`, `linea_facultad`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Ingeniería Seguridad Industrial e Higiene Ocupacional', '21', 7, 0, 'add', 'No', '2019-07-22 22:58:16'),
(2, 'TP. Seguridad e Higiene Industrial', '22', 7, 0, 'add', 'No', '2019-07-22 22:58:16'),
(3, 'TP. Procesos Ambientales', '23', 7, 0, 'add', 'No', '2019-07-22 22:58:16'),
(4, 'TP. Implementación Sistemas Telecomunicaciones', '24', 8, 0, 'add', 'No', '2019-07-22 23:00:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_project_status`
--

CREATE TABLE `om_project_status` (
  `project_status_id` int(11) NOT NULL,
  `project_status_name` varchar(255) NOT NULL,
  `project_system_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_project_status`
--

INSERT INTO `om_project_status` (`project_status_id`, `project_status_name`, `project_system_id`) VALUES
(1, 'ACTIVO', 1),
(2, 'INACTIVO', 1),
(3, 'TERMINADO', 1),
(4, 'HIBERNADO', 1),
(5, 'ABANDONADO', 1),
(6, 'PRUEBA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_proyectos`
--

CREATE TABLE `om_proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(255) NOT NULL,
  `codigo_institucional_proyecto` varchar(255) NOT NULL,
  `acto_administrativo` varchar(255) NOT NULL,
  `grupo_unihorizonte` int(11) NOT NULL,
  `grupo_colciencias` int(11) NOT NULL,
  `linea_investigacion_institucional` int(11) NOT NULL,
  `facultad` int(11) NOT NULL,
  `linea_facultad` int(11) NOT NULL,
  `programa_academico` int(11) NOT NULL,
  `linea_programa` int(11) NOT NULL,
  `presupuesto_asignado` double NOT NULL,
  `propuesta_proyecto` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `archivo_informe_final` varchar(255) NOT NULL,
  `presupuesto_ejecutado` double NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_proyectos`
--

INSERT INTO `om_proyectos` (`id_proyecto`, `nombre_proyecto`, `codigo_institucional_proyecto`, `acto_administrativo`, `grupo_unihorizonte`, `grupo_colciencias`, `linea_investigacion_institucional`, `facultad`, `linea_facultad`, `programa_academico`, `linea_programa`, `presupuesto_asignado`, `propuesta_proyecto`, `fecha_inicio`, `fecha_final`, `archivo_informe_final`, `presupuesto_ejecutado`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'SISTEMA WEB PARA LA GESTIÓN DE PROYECTOS DE INVESTIGACIÓN APLICADA Y FORMATIVA - UNIHORIZONTE.', 'FI210035', 'ACTO123', 4, 4, 1, 4, 7, 1, 3, 4000000, 'Se trata de un sistema web para gestionar los productos generados por concepto de investigación aplicada o investigación formativa de los docentes, investigadores, estudiantes, auxiliares de investigación, semilleristas, funcionarios administrativos o usuarios externos de la universidad UniHorizonte, procurando mantener los indicadores y ponderaciones de manera que sean compatibles con los criterios de medición estipulados por Colciencias.', '2019-11-29', '0000-00-00', '', 2000000, 0, 'edit', 'admin', '2019-11-29 11:11:49'),
(13, 'Proyecto de prueba 1', 'FI210037', 'ACTO234', 5, 2, 2, 4, 7, 1, 3, 200000, 'Propuesta de prueba para el proyecto actual.', '2019-11-29', '0000-00-00', '', 60000, 0, 'edit', 'admin', '2019-11-29 11:11:58'),
(14, 'Proyecto de prueba 2', 'FI210039', 'ACTO345', 3, 2, 2, 4, 7, 1, 2, 500000, 'Propuesta de prueba para el proyecto actual.', '2019-10-29', '0000-00-00', '', 0, 0, 'edit', 'admin', '2019-11-29 11:11:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_roles_lista`
--

CREATE TABLE `om_roles_lista` (
  `id_rol_lista` int(11) NOT NULL,
  `nombre_rol` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_roles_lista`
--

INSERT INTO `om_roles_lista` (`id_rol_lista`, `nombre_rol`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Administrativo', 0, 'add', 'No', '2019-06-04 15:05:35'),
(2, 'Auxiliar de investigación', 0, 'add', 'No', '2019-06-04 15:05:35'),
(3, 'Docente', 0, 'add', 'No', '2019-06-04 15:05:35'),
(4, 'Estudiante', 0, 'add', 'No', '2019-06-04 15:05:35'),
(5, 'Externo', 0, 'add', 'No', '2019-06-04 15:05:35'),
(6, 'Investigador', 0, 'add', 'No', '2019-06-04 15:05:35'),
(7, 'Semillerista', 0, 'add', 'No', '2019-06-04 15:05:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_status`
--

CREATE TABLE `om_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_status`
--

INSERT INTO `om_status` (`status_id`, `status_name`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'ACTIVO', 0, 'add', 'No', '2019-02-28 17:07:40'),
(2, 'INACTIVO', 0, 'add', 'No', '2019-02-28 17:07:40'),
(3, 'TERMINADO', 0, 'add', 'No', '2019-02-28 17:07:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_subject_area`
--

CREATE TABLE `om_subject_area` (
  `subject_area_id` int(11) NOT NULL,
  `subject_area_name` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_subject_area`
--

INSERT INTO `om_subject_area` (`subject_area_id`, `subject_area_name`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Patentes', 0, 'add', 'No', '2019-02-28 17:08:21'),
(2, 'Marcas', 0, 'add', 'No', '2019-02-28 17:08:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_system`
--

CREATE TABLE `om_system` (
  `system_id` int(11) NOT NULL,
  `system_name` varchar(255) NOT NULL,
  `system_abbreviation` varchar(255) NOT NULL,
  `system_folder` varchar(11) NOT NULL,
  `system_sequence` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `system_email` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_system`
--

INSERT INTO `om_system` (`system_id`, `system_name`, `system_abbreviation`, `system_folder`, `system_sequence`, `user_id`, `system_email`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Proyectos UH', 'P-UH', 'uh', 46, 1, 'trademarks@olartemoure.com', 0, 'add', 'No', '2019-02-28 17:08:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_tasks`
--

CREATE TABLE `om_tasks` (
  `task_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_ordinal` double NOT NULL,
  `task_next` varchar(255) NOT NULL,
  `task_form` varchar(255) NOT NULL,
  `deadline_type_id` int(11) NOT NULL,
  `deadline_type_value` double NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_tasks`
--

INSERT INTO `om_tasks` (`task_id`, `phase_id`, `process_id`, `task_name`, `task_ordinal`, `task_next`, `task_form`, `deadline_type_id`, `deadline_type_value`, `user_id`) VALUES
(66, 19, 14, 'Diligenciar información básica', 1, '2', 'p14-p19-o1', 1, 0, 99),
(74, 2, 3, 'Creación de proyecto', 1, '2', 'p3-p2-o1', 1, 0, 384),
(76, 2, 3, 'Validación de particulares', 2, '3;8', 'p3-p2-o2', 1, 0, 278),
(78, 2, 3, 'Reminder validación de particulares con el cliente', 4, '4;6;7', 'p3-p2-o4', 1, 0, 384),
(112, 2, 3, 'No continuar', 6, '6.1', 'p3-p2-o6', 1, 0, 384),
(113, 2, 3, 'Continuar', 7, '7.1', 'p3-p2-o7', 1, 0, 384),
(115, 2, 3, 'Tareas finales', 6.1, '0', 'p3-p2-o6_1', 1, 0, 384),
(116, 2, 3, 'Acuse recibido', 7.1, '8', 'p3-p2-o7_1', 1, 5, 278),
(117, 2, 3, 'Radicar solicitud', 8, '9', 'p3-p2-o8', 1, 5, 384),
(118, 2, 3, 'Preparar y enviar reporte de presentación y tareas finales', 9, '10', 'p3-p2-o9', 1, 0, 384),
(123, 2, 3, 'Validación de particulares con el cliente', 3, '4', 'p3-p2-o3', 1, 2, 278),
(126, 24, 15, 'Revisar documentación faltante y enviar correo al cliente confirmando que la información está completa o solicitando adicional.', 1, '2', 'p15-p24-o1', 1, 1, 414),
(127, 24, 15, 'Confirmar respuesta', 2, '3;4;5', 'p15-p24-o2', 1, 1, 351),
(128, 24, 15, 'Revisar documentación', 3, '4', 'p15-p24-o3', 1, 1, 74),
(129, 24, 15, 'Tareas finales', 4, '0', 'p15-p24-o4', 1, 1, 74),
(130, 24, 15, 'Tareas finales', 5, '0', 'p15-p24-o5', 1, 1, 74),
(133, 19, 14, 'Revisión de Propuesta/Cotización con Socio', 2, '2;3', 'p14-p19-o2', 1, 0, 278),
(134, 19, 14, 'Enviar Propuesta/Cotización a Cliente', 3, '4', 'p14-p19-o3', 1, 0, 278),
(135, 19, 14, 'Reminder de aprobación Propuesta/Cotización de Cliente', 4, '4;5', 'p14-p19-o4', 1, 0, 278),
(136, 19, 14, 'Cliente aprueba (Tarea Final)', 5, '0', 'p14-p19-o5', 1, 0, 278),
(137, 26, 19, 'Tarea 1', 1, '2', 'p19-p26-o1', 1, 0, 88),
(138, 26, 19, 'Tarea 2', 2, '3;4', 'p19-p26-o2', 1, 0, 88),
(139, 26, 19, 'Tarea 3', 3, '0', 'p19-p26-o3', 1, 0, 88),
(140, 26, 19, 'Tarea 5', 5, '0', 'p19-p26-o5', 1, 0, 88),
(141, 26, 19, 'Tarea 4', 4, '5', 'p19-p26-o4', 1, 0, 88),
(143, 18, 11, 'Revisar si falta o no falta información y acusar recibo de instrucciones', 1, '2;3', 'p11-p18-o1', 1, 1, 375),
(144, 18, 11, 'Solicitar información faltante o adicional al cliente', 2, '1', 'p11-p18-o2', 1, 3, 375),
(145, 18, 11, 'Solicitar y verificar creación de proceso y asignación de Asociado Encargado', 3, '4;5', 'p11-p18-o3', 1, 1, 375),
(146, 18, 11, 'Obtener certificado de existencia y representación legal del infractor', 4, '5', 'p11-p18-o4', 1, 1, 351),
(147, 18, 11, 'Crear caso en TM, Company (Borradores, Expediente Virtual, Comunicaciones con cliente)', 5, '6;7;8;9', 'p11-p18-o5', 1, 1, 414),
(148, 18, 11, 'Obtener información faltante con el cliente', 6, '6.1', 'p11-p18-o6', 1, 1, 351),
(149, 18, 11, 'Acusar recibo de información recibida del cliente y guardarla en borradores/pruebas', 6.1, '5', 'p11-p18-o6_1', 1, 1, 351),
(150, 18, 11, 'Convocar reunión preparatoria de OM (Con Director/Coordinador/Socio opcional), reserva sala de juntas y /o agenda teleconferencia', 7, '7.1', 'p11-p18-o7', 1, 1, 414),
(151, 18, 11, 'Verificar realización reunión preparatoria', 7.1, '7.2', 'p11-p18-o7_1', 1, 1, 351),
(152, 18, 11, 'Preparar borrador carta de reclamación', 7.2, '7.3;7.31', 'p11-p18-o7_2', 1, 1, 351),
(153, 18, 11, 'Revisar borrador carta de reclamación', 7.3, '7.4;7.5;7.6', 'p11-p18-o7_3', 1, 1, 375),
(154, 18, 11, 'Guardar borrador de carta en Company/Borradores', 7.31, '0', 'p11-p18-o7_31', 1, 1, 351),
(155, 18, 11, 'Enviar borrador de carta de reclamación al cliente', 7.4, '7.41;7.42', 'p11-p18-o7_4', 1, 1, 351),
(156, 18, 11, 'Cliente pide cambios', 7.41, '7.2', 'p11-p18-o7_41', 1, 1, 351),
(157, 18, 11, 'Cliente aprueba carta', 7.42, '8.1;8.2', 'p11-p18-o7_42', 1, 1, 351),
(158, 18, 11, 'Enviar carta de cese y desistimiento por correo electrónico (Guardar documento en expediente virtual)', 8.1, '8.3;9;9.1', 'p11-p18-o8_1', 1, 1, 351),
(159, 18, 11, 'Verificar el ingreso de horas de todas las personas involucradas y Guardar reporte y/o correo electrónico en comunicaciones al cliente', 8.3, '0', 'p11-p18-o8_3', 1, 1, 414),
(161, 18, 11, 'Programar alerta a los 5 días hábiles para verificar respuesta', 9, '10', 'p11-p18-o9', 1, 1, 351),
(162, 18, 11, 'Reportar envío carta de cese y desistimiento', 9.1, '10', 'p11-p18-o9_1', 1, 1, 351),
(163, 18, 11, 'Verificar si contraparte respondió o no', 10, '10.1;10.2', 'p11-p18-o10', 1, 5, 351),
(164, 18, 11, 'Respondió contraparte', 10.1, '11.1;11.2;11.3', 'p11-p18-o10_1', 1, 1, 351),
(165, 18, 11, 'No respondió contraparte, verificar en la reunión causas de no recepción y determinar estrategia a seguir', 10.2, '12.2', 'p11-p18-o10_2', 1, 1, 351),
(166, 18, 11, 'Agendar reunión preparatoria para definir estrategia tras respuesta', 12.1, '13.1', 'p11-p18-o12_1', 1, 1, 414),
(167, 18, 11, 'AL guardar respuesta en expediente virtual', 11.2, '0', 'p11-p18-o11_2', 1, 1, 414),
(168, 18, 11, 'Respuesta desfavorable', 11.3, '12.1', 'p11-p18-o11_3', 1, 1, 351),
(169, 18, 11, 'Respuesta favorable', 11.1, '12.1', 'p11-p18-o11_1', 1, 1, 351),
(170, 18, 11, 'Verificar que se realiza reunión preparatoria', 13.1, '14', 'p11-p18-o13_1', 1, 1, 351),
(171, 18, 11, 'Preparar borrador de reporte al cliente sobre respuesta (Guardar documento en borradores)', 14, '14.1', 'p11-p18-o14', 1, 1, 351),
(172, 18, 11, 'Revisar borrador de reporte al cliente sobre respuesta (Guardar documento en borradores con control de cambios)', 14.1, '15.1;15.2', 'p11-p18-o14_1', 1, 1, 375),
(173, 18, 11, 'Enviar reporte al cliente sobre respuesta con recomendación de respuesta y contrato de transacción, si la respuesta es favorable (Guardar documento en comunicaciones al cliente)', 15.1, '16.1', 'p11-p18-o15_1', 1, 1, 375),
(174, 18, 11, 'Enviar reporte al cliente sobre respuesta con recomendación de respuesta y segunda carta, si la respuesta es desfavorable (Guardar documento en comunicaciones al cliente)', 15.2, '16.2', 'p11-p18-o15_2', 1, 1, 375);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_tom_tasks`
--

CREATE TABLE `om_tom_tasks` (
  `task_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_ordinal` double NOT NULL,
  `task_next` varchar(255) NOT NULL,
  `task_form` varchar(255) NOT NULL,
  `deadline_type_id` int(11) NOT NULL,
  `deadline_type_value` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `comentarios` text NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) NOT NULL DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_tom_tasks`
--

INSERT INTO `om_tom_tasks` (`task_id`, `phase_id`, `task_name`, `task_ordinal`, `task_next`, `task_form`, `deadline_type_id`, `deadline_type_value`, `user_id`, `comentarios`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(66, 19, 'Diligenciar información básica', 1, '2', 'p14-p19-o1', 1, 0, 99, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(74, 2, 'Creación de proyecto', 1, '2', 'p3-p2-o1', 1, 0, 384, 'Prueba - SMM debe crear el proyecto', 0, 'edit', 'admin_tom', '2019-06-13 09:06:59'),
(76, 2, 'Validación de particulares', 2, '3;8', 'p3-p2-o2', 1, 0, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(78, 2, 'Reminder validación de particulares con el cliente', 4, '4;6;7', 'p3-p2-o4', 1, 0, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(112, 2, 'No continuar', 6, '6.1', 'p3-p2-o6', 1, 0, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(113, 2, 'Continuar', 7, '7.1', 'p3-p2-o7', 1, 0, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(115, 2, 'Tareas finales', 6.1, '0', 'p3-p2-o6_1', 1, 0, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(116, 2, 'Acuse recibido', 7.1, '8', 'p3-p2-o7_1', 1, 5, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(117, 2, 'Radicar solicitud', 8, '9', 'p3-p2-o8', 1, 5, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(118, 2, 'Preparar y enviar reporte de presentación y tareas finales', 9, '10', 'p3-p2-o9', 1, 0, 384, 'Preparar y enviar reporte de presentación y tareas finales\r\n* Incluir fecha de presentación en el reporte\r\n* Incluir número de solicitud asignado por la SIC.\r\n* Afectar la base de datos generando el respectivo pendiente (Pendiente exámen de forma de la solicitud)', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(123, 2, 'Validación de particulares con el cliente', 3, '4', 'p3-p2-o3', 1, 2, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(133, 19, 'Revisión de Propuesta/Cotización con Socio', 2, '2;3', 'p14-p19-o2', 1, 0, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(134, 19, 'Enviar Propuesta/Cotización a Cliente', 3, '4', 'p14-p19-o3', 1, 0, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(135, 19, 'Reminder de aprobación Propuesta/Cotización de Cliente', 4, '4;5', 'p14-p19-o4', 1, 0, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(136, 19, 'Cliente aprueba (Tarea Final)', 5, '0', 'p14-p19-o5', 1, 0, 278, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(138, 27, 'Enviar email de solicitud de información', 1, '2', 'p17-p27-o1', 1, 1, 99, 'ENsat asaksdlf arewf ANG de beae ds', 0, 'edit', 'admin_tom', '2019-07-29 11:07:54'),
(139, 27, 'Tarea 2', 2, '2.1o3', 'p17-p27-o2', 1, 2, 99, '', 0, 'edit', 'admin_tom', '2019-07-29 11:07:00'),
(142, 27, 'Tarea 3', 3, '4y4.1y4.2', 'p17-p27-o3', 1, 4, 99, '', 0, 'edit', 'admin_tom', '2019-07-29 15:07:05'),
(143, 3, 'Preparar y enviar reporte informando requerimiento de forma al cliente', 1, '2', 'p3-p3-o1', 1, 1, 384, 'Debe llegar comunicación de la SIC por email.\r\n* Preparar el reporte para el cliente (Preparar, Revisar y Enviar)\r\n* Afectar la Base de datos y generar el respectivo pendiente (Deadline de reminders con instrucciones del cliente)', 0, 'edit', 'SMM', '2019-06-18 17:06:33'),
(144, 3, 'Reminder respuesta del cliente', 2, '2;3', 'p3-p3-o2', 1, 30, 384, '* Deadline para reminder mensual', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(145, 3, 'Radicar respuesta al requerimiento en la SIC', 3, '3.1;3.2', 'p3-p3-o3', 1, 1, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(146, 3, 'Preparar reporte y afectar base de datos', 4, '0', 'p3-p3-o4', 1, 1, 384, '* Se debe enviar reporte al cliente\r\n* Afectar la base de datos de la marca actual () si hubo abandono\r\n* Si hay abandono, informar al cliente y presentar recurso de apelación (Afectar la base de datos indicando el abandono)', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(147, 3, 'Abandono de la solicitud', 3.1, '4', 'p3-p3-o3_1', 1, 1, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(148, 3, 'Radicación correcta', 3.2, '5', 'p3-p3-o3_2', 1, 1, 384, '', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(149, 3, 'Preparar reporte y afectar base de datos', 5, '0', 'p3-p3-o5', 1, 1, 384, '* Se debe enviar reporte al cliente\r\n* Afectar la base de datos de la marca actual (Pendiente publicación de la solicitud) si no hubo abandono\r\n* Si hay abandono, informar al cliente y presentar recurso de apelación (Afectar la base de datos indicando el abandono)', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(151, 5, 'Preparar y enviar reporte informando requerimiento de forma al cliente', 1, '1.1;1.2', 'p3-p5-o1', 1, 2, 410, 'Se publica la información en la gaceta.\r\nSe le informa al cliente la fecha de finalización del periodo de oposición', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(152, 5, 'Informar presentación de oposición', 1.1, '2', 'p3-p5-o1_1', 1, 4, 278, 'Se informa al cliente la presentación de una oposición por parte de un tercero\r\nHay afectación de base de datos porque hay un deadline\r\nActivar tareas de la fase [Respuesta a oposición].', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(153, 5, 'Informar al cliente que no se presentaron oposiciones', 1.2, '2', 'p3-p5-o1_2', 1, 2, 410, 'Informar al cliente que no se presentaron oposiciones\r\nAfectación a base de datos (Pendiente decisión en primera instancia)', 0, 'edit', 'No', '2019-02-28 16:40:23'),
(154, 27, 'Tarea 4', 4, '6', 'p17-p27-o4', 1, 6, 99, '5|6\r\n5&6', 0, 'edit', 'admin_tom', '2019-07-29 11:07:50'),
(155, 27, 'Diligenciar formulario', 2.1, '3.1', 'p17-p27-o2_1', 1, 3, 99, 'Esta tarea  sdf masernasdgklasdf asda SIC', 0, 'edit', 'admin_tom', '2019-07-29 11:07:11'),
(156, 27, 'Tarea 5', 5, '0', 'p17-p27-o5', 1, 8, 99, '', 0, 'edit', 'admin_tom', '2019-07-29 11:07:19'),
(157, 27, 'Tarea 6', 6, '0', 'p17-p27-o6', 1, 9, 99, '', 0, 'edit', 'admin_tom', '2019-07-29 11:07:28'),
(158, 27, 'Tarea 3.1', 3.1, '5', 'p17-p27-o3_1', 1, 5, 99, '', 0, 'edit', 'admin_tom', '2019-07-29 11:07:40'),
(159, 27, 'Tarea 4.1', 4.1, '6', 'p17-p27-o4_1', 1, 7, 99, '5|6\r\n5&6', 0, 'edit', 'admin_tom', '2019-07-29 11:07:07'),
(160, 27, 'Tarea 4.2', 4.2, '6', 'p17-p27-o4_2', 1, 7, 99, '5|6\r\n5&6', 0, 'edit', 'admin_tom', '2019-07-29 15:07:58'),
(161, 27, 'Tarea 7', 7, '0', 'p17-p27-o7', 1, 9, 99, '', 1, 'delete', 'admin_tom', '2019-07-29 15:07:23'),
(162, 27, 'Tarea 8', 8, '0', 'p17-p27-o8', 1, 9, 99, '', 1, 'delete', 'admin_tom', '2019-07-29 15:07:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_users`
--

CREATE TABLE `om_users` (
  `user_id` int(11) NOT NULL,
  `indice` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(150) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_username` varchar(45) NOT NULL,
  `rol` int(11) NOT NULL,
  `user_type_id` int(45) NOT NULL,
  `user_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `system_id` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) NOT NULL DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_users`
--

INSERT INTO `om_users` (`user_id`, `indice`, `user_name`, `user_email`, `user_password`, `user_username`, `rol`, `user_type_id`, `user_timestamp`, `system_id`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 0, 'Administrador', 'direccion.tic@unihorizonte.edu.co', '90bec6a873797ae97355a367dab57d371b7cd7e9', 'admin', 1, 1, '2018-02-13 21:20:39', 1, 0, 'edit', 'admin', '2019-11-27 12:11:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_user_group`
--

CREATE TABLE `om_user_group` (
  `user_group_id` int(11) NOT NULL,
  `user_group_name` varchar(255) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_user_group`
--

INSERT INTO `om_user_group` (`user_group_id`, `user_group_name`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'Administrators', 0, 'add', 'No', '2019-02-28 17:09:36'),
(2, 'Research Assistant', 0, 'add', 'No', '2019-02-28 17:09:36'),
(3, 'Teacher', 0, 'add', 'No', '2019-02-28 17:09:36'),
(4, 'Student', 0, 'add', 'No', '2019-02-28 17:09:36'),
(5, 'External', 0, 'add', 'No', '2019-02-28 17:09:36'),
(6, 'Researcher', 0, 'add', 'No', '2019-02-28 17:09:36'),
(7, 'Semillerista', 0, 'add', 'No', '2019-02-28 17:09:36'),
(8, 'Inactive', 0, 'add', 'No', '2019-02-28 17:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_user_type`
--

CREATE TABLE `om_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(255) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT '0',
  `log_accion` varchar(255) NOT NULL DEFAULT 'add',
  `log_usuario` varchar(255) DEFAULT 'No',
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `om_user_type`
--

INSERT INTO `om_user_type` (`user_type_id`, `user_type_name`, `user_group_id`, `borrado`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES
(1, 'administrador', 1, 0, 'add', 'No', '2019-02-28 17:09:58'),
(2, 'usuario', 4, 0, 'add', 'No', '2019-02-28 17:09:58'),
(3, 'invitado', 3, 0, 'add', 'No', '2019-02-28 17:09:58'),
(4, 'inactivo', 2, 0, 'add', 'No', '2019-02-28 17:09:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `om_avances`
--
ALTER TABLE `om_avances`
  ADD PRIMARY KEY (`id_avance`),
  ADD KEY `proyecto` (`proyecto`);

--
-- Indices de la tabla `om_captcha`
--
ALTER TABLE `om_captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indices de la tabla `om_facultades_lista`
--
ALTER TABLE `om_facultades_lista`
  ADD PRIMARY KEY (`facultad_lista_id`),
  ADD UNIQUE KEY `nombre_facultad_lista` (`name_facultad_lista`);

--
-- Indices de la tabla `om_grupos_colciencias_lista`
--
ALTER TABLE `om_grupos_colciencias_lista`
  ADD PRIMARY KEY (`id_grupo_colciencias`),
  ADD UNIQUE KEY `nombre_grupo` (`nombre_grupo`);

--
-- Indices de la tabla `om_grupos_unihorizonte`
--
ALTER TABLE `om_grupos_unihorizonte`
  ADD PRIMARY KEY (`id_grupo`),
  ADD UNIQUE KEY `nombre_grupo` (`nombre_grupo`);

--
-- Indices de la tabla `om_holidays`
--
ALTER TABLE `om_holidays`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indices de la tabla `om_languages`
--
ALTER TABLE `om_languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indices de la tabla `om_lineas_facultad_lista`
--
ALTER TABLE `om_lineas_facultad_lista`
  ADD PRIMARY KEY (`id_linea_facultad_lista`),
  ADD KEY `facultad` (`facultad`);

--
-- Indices de la tabla `om_lineas_institucionales_lista`
--
ALTER TABLE `om_lineas_institucionales_lista`
  ADD PRIMARY KEY (`id_linea_institucional_lista`);

--
-- Indices de la tabla `om_lineas_por_programa`
--
ALTER TABLE `om_lineas_por_programa`
  ADD PRIMARY KEY (`id_lineas_por_programa`),
  ADD KEY `facultad` (`programa_academico`);

--
-- Indices de la tabla `om_locks`
--
ALTER TABLE `om_locks`
  ADD PRIMARY KEY (`id_lock`),
  ADD KEY `usuario` (`id_usuario`);

--
-- Indices de la tabla `om_log`
--
ALTER TABLE `om_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `om_productos`
--
ALTER TABLE `om_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `proyecto` (`proyecto`),
  ADD KEY `producto_colciencias` (`producto_colciencias`);

--
-- Indices de la tabla `om_productos_lista_colciencias`
--
ALTER TABLE `om_productos_lista_colciencias`
  ADD PRIMARY KEY (`id_producto_lista_colciencias`),
  ADD UNIQUE KEY `categoría` (`categoría`),
  ADD UNIQUE KEY `tipo_producto` (`nombre_tipo_producto`);

--
-- Indices de la tabla `om_programa_academico_lista`
--
ALTER TABLE `om_programa_academico_lista`
  ADD PRIMARY KEY (`id_programa_academico`),
  ADD KEY `facultad` (`linea_facultad`);

--
-- Indices de la tabla `om_project_status`
--
ALTER TABLE `om_project_status`
  ADD PRIMARY KEY (`project_status_id`),
  ADD KEY `system_id` (`project_system_id`);

--
-- Indices de la tabla `om_proyectos`
--
ALTER TABLE `om_proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD UNIQUE KEY `codigo_institucional_proyecto` (`codigo_institucional_proyecto`),
  ADD KEY `linea_investigacion_institucional` (`linea_investigacion_institucional`),
  ADD KEY `grupo` (`grupo_unihorizonte`),
  ADD KEY `grupo_colciencias` (`grupo_colciencias`),
  ADD KEY `linea_facultad` (`linea_facultad`),
  ADD KEY `linea_programa` (`linea_programa`),
  ADD KEY `facultad` (`facultad`),
  ADD KEY `programa_academico` (`programa_academico`);

--
-- Indices de la tabla `om_roles_lista`
--
ALTER TABLE `om_roles_lista`
  ADD PRIMARY KEY (`id_rol_lista`),
  ADD UNIQUE KEY `nombre_rol` (`nombre_rol`);

--
-- Indices de la tabla `om_status`
--
ALTER TABLE `om_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indices de la tabla `om_subject_area`
--
ALTER TABLE `om_subject_area`
  ADD PRIMARY KEY (`subject_area_id`);

--
-- Indices de la tabla `om_system`
--
ALTER TABLE `om_system`
  ADD PRIMARY KEY (`system_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `om_tasks`
--
ALTER TABLE `om_tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD UNIQUE KEY `task_form` (`task_form`),
  ADD KEY `phase_id` (`phase_id`),
  ADD KEY `attorney_id` (`user_id`),
  ADD KEY `project_id` (`process_id`),
  ADD KEY `deadline_type_id` (`deadline_type_id`);

--
-- Indices de la tabla `om_tom_tasks`
--
ALTER TABLE `om_tom_tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD UNIQUE KEY `task_form` (`task_form`),
  ADD KEY `phase_id` (`phase_id`),
  ADD KEY `attorney_id` (`user_id`),
  ADD KEY `deadline_type_id` (`deadline_type_id`);

--
-- Indices de la tabla `om_users`
--
ALTER TABLE `om_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`user_username`),
  ADD KEY `tipo` (`user_type_id`),
  ADD KEY `user_system` (`system_id`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `om_user_group`
--
ALTER TABLE `om_user_group`
  ADD PRIMARY KEY (`user_group_id`),
  ADD UNIQUE KEY `user_group_name` (`user_group_name`);

--
-- Indices de la tabla `om_user_type`
--
ALTER TABLE `om_user_type`
  ADD PRIMARY KEY (`user_type_id`),
  ADD UNIQUE KEY `user_type_name` (`user_type_name`),
  ADD KEY `user_group_id` (`user_group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `om_avances`
--
ALTER TABLE `om_avances`
  MODIFY `id_avance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `om_captcha`
--
ALTER TABLE `om_captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `om_facultades_lista`
--
ALTER TABLE `om_facultades_lista`
  MODIFY `facultad_lista_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `om_grupos_colciencias_lista`
--
ALTER TABLE `om_grupos_colciencias_lista`
  MODIFY `id_grupo_colciencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `om_grupos_unihorizonte`
--
ALTER TABLE `om_grupos_unihorizonte`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `om_holidays`
--
ALTER TABLE `om_holidays`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `om_languages`
--
ALTER TABLE `om_languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `om_lineas_facultad_lista`
--
ALTER TABLE `om_lineas_facultad_lista`
  MODIFY `id_linea_facultad_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `om_lineas_institucionales_lista`
--
ALTER TABLE `om_lineas_institucionales_lista`
  MODIFY `id_linea_institucional_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `om_lineas_por_programa`
--
ALTER TABLE `om_lineas_por_programa`
  MODIFY `id_lineas_por_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `om_locks`
--
ALTER TABLE `om_locks`
  MODIFY `id_lock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `om_log`
--
ALTER TABLE `om_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=907;

--
-- AUTO_INCREMENT de la tabla `om_productos`
--
ALTER TABLE `om_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `om_productos_lista_colciencias`
--
ALTER TABLE `om_productos_lista_colciencias`
  MODIFY `id_producto_lista_colciencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `om_programa_academico_lista`
--
ALTER TABLE `om_programa_academico_lista`
  MODIFY `id_programa_academico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `om_project_status`
--
ALTER TABLE `om_project_status`
  MODIFY `project_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `om_proyectos`
--
ALTER TABLE `om_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `om_roles_lista`
--
ALTER TABLE `om_roles_lista`
  MODIFY `id_rol_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `om_status`
--
ALTER TABLE `om_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `om_subject_area`
--
ALTER TABLE `om_subject_area`
  MODIFY `subject_area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `om_system`
--
ALTER TABLE `om_system`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `om_tasks`
--
ALTER TABLE `om_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT de la tabla `om_tom_tasks`
--
ALTER TABLE `om_tom_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `om_users`
--
ALTER TABLE `om_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `om_user_group`
--
ALTER TABLE `om_user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `om_user_type`
--
ALTER TABLE `om_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `om_avances`
--
ALTER TABLE `om_avances`
  ADD CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_lineas_facultad_lista`
--
ALTER TABLE `om_lineas_facultad_lista`
  ADD CONSTRAINT `om_lineas_facultad_lista_ibfk_1` FOREIGN KEY (`facultad`) REFERENCES `om_facultades_lista` (`facultad_lista_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_lineas_por_programa`
--
ALTER TABLE `om_lineas_por_programa`
  ADD CONSTRAINT `om_lineas_por_programa_ibfk_1` FOREIGN KEY (`programa_academico`) REFERENCES `om_programa_academico_lista` (`id_programa_academico`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_locks`
--
ALTER TABLE `om_locks`
  ADD CONSTRAINT `om_locks_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`user_id`);

--
-- Filtros para la tabla `om_productos`
--
ALTER TABLE `om_productos`
  ADD CONSTRAINT `om_productos_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_productos_ibfk_3` FOREIGN KEY (`producto_colciencias`) REFERENCES `om_productos_lista_colciencias` (`id_producto_lista_colciencias`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_programa_academico_lista`
--
ALTER TABLE `om_programa_academico_lista`
  ADD CONSTRAINT `om_programa_academico_lista_ibfk_1` FOREIGN KEY (`linea_facultad`) REFERENCES `om_lineas_facultad_lista` (`id_linea_facultad_lista`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_proyectos`
--
ALTER TABLE `om_proyectos`
  ADD CONSTRAINT `om_proyectos_ibfk_1` FOREIGN KEY (`grupo_unihorizonte`) REFERENCES `om_grupos_unihorizonte` (`id_grupo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_2` FOREIGN KEY (`linea_investigacion_institucional`) REFERENCES `om_lineas_institucionales_lista` (`id_linea_institucional_lista`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_3` FOREIGN KEY (`grupo_colciencias`) REFERENCES `om_grupos_colciencias_lista` (`id_grupo_colciencias`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_4` FOREIGN KEY (`linea_facultad`) REFERENCES `om_lineas_facultad_lista` (`id_linea_facultad_lista`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_6` FOREIGN KEY (`facultad`) REFERENCES `om_facultades_lista` (`facultad_lista_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_7` FOREIGN KEY (`linea_programa`) REFERENCES `om_lineas_por_programa` (`id_lineas_por_programa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_proyectos_ibfk_8` FOREIGN KEY (`programa_academico`) REFERENCES `om_programa_academico_lista` (`id_programa_academico`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_system`
--
ALTER TABLE `om_system`
  ADD CONSTRAINT `om_system_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `om_users` (`user_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_tasks`
--
ALTER TABLE `om_tasks`
  ADD CONSTRAINT `om_tasks_ibfk_1` FOREIGN KEY (`phase_id`) REFERENCES `olartemoure_om`.`om_phases` (`phase_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_tasks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `om_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_tasks_ibfk_3` FOREIGN KEY (`process_id`) REFERENCES `olartemoure_om`.`om_processes` (`process_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_tasks_ibfk_5` FOREIGN KEY (`deadline_type_id`) REFERENCES `olartemoure_om`.`om_deadline_types` (`deadline_type_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_tom_tasks`
--
ALTER TABLE `om_tom_tasks`
  ADD CONSTRAINT `om_tom_tasks_ibfk_1` FOREIGN KEY (`phase_id`) REFERENCES `olartemoure_om`.`om_tom_phases` (`phase_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_tom_tasks_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `om_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_tom_tasks_ibfk_4` FOREIGN KEY (`deadline_type_id`) REFERENCES `olartemoure_om`.`om_deadline_types` (`deadline_type_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_users`
--
ALTER TABLE `om_users`
  ADD CONSTRAINT `om_users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `om_user_type` (`user_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_users_ibfk_2` FOREIGN KEY (`system_id`) REFERENCES `om_system` (`system_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_users_ibfk_3` FOREIGN KEY (`rol`) REFERENCES `om_roles_lista` (`id_rol_lista`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_user_type`
--
ALTER TABLE `om_user_type`
  ADD CONSTRAINT `om_user_type_ibfk_1` FOREIGN KEY (`user_group_id`) REFERENCES `om_user_group` (`user_group_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
