-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2021 a las 23:22:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_smart_dental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agendados`
--

CREATE TABLE `tbl_agendados` (
  `idtbl_agendados` int(11) NOT NULL,
  `hora` varchar(6) NOT NULL,
  `paciente` varchar(45) NOT NULL,
  `doctor` varchar(45) NOT NULL,
  `estado_consulta` varchar(45) NOT NULL,
  `situacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_agendados`
--

INSERT INTO `tbl_agendados` (`idtbl_agendados`, `hora`, `paciente`, `doctor`, `estado_consulta`, `situacion`) VALUES
(1, '8:30', 'Juan', 'Pedro', 'En sala de espera', 'Deuda'),
(2, '10:00a', 'Lucas', 'Maria', 'Pendiente', 'Deuda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cuentas_pendientes`
--

CREATE TABLE `tbl_cuentas_pendientes` (
  `idtbl_cuentas_por_pagar` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `numero_factura` varchar(45) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `valor_factura` varchar(45) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `concepto_de_pago` varchar(45) DEFAULT NULL,
  `responsable_de_pago` varchar(45) DEFAULT NULL,
  `aprovada_por` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `tbl_proveedores_idtbl_proveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

CREATE TABLE `tbl_pacientes` (
  `idtbl_pacientes` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `tipo_de_documento` varchar(45) DEFAULT NULL,
  `documento` bigint(20) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `lugar_de_nacimiento` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `ocupacion` varchar(45) DEFAULT NULL,
  `doctor_valoracion` varchar(45) DEFAULT NULL,
  `doctor_tratante` varchar(45) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `eps_convenio` varchar(45) DEFAULT NULL,
  `entero_de_nosotros` varchar(45) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `nombre_acudiente` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_pacientes`
--

INSERT INTO `tbl_pacientes` (`idtbl_pacientes`, `fecha_registro`, `genero`, `tipo_de_documento`, `documento`, `nombre`, `apellidos`, `telefono`, `direccion`, `municipio`, `departamento`, `zona`, `fecha_de_nacimiento`, `lugar_de_nacimiento`, `estado_civil`, `nacionalidad`, `ocupacion`, `doctor_valoracion`, `doctor_tratante`, `correo_electronico`, `eps_convenio`, `entero_de_nosotros`, `edad`, `nombre_acudiente`, `estado`) VALUES
(1, '2021-04-14', 'Masculino', 'cedula', 231, 'sadsa', 'dsaa', 231321, '23112', 'dasdas', 'dsaas', 'urbana', '2021-04-14', 'ddasdsa', 'dsadsa', 'sdadsa', 'dsadsa', 'dsasdds', 'dsadas', 'sddas@jhad.sdf', 'asd', 'dsa', 3213, 'dassad', 'dsaasd'),
(2, '2021-04-09', 'Masculino', 'cedula', 3123, 'afdfasd', 'dsdasdsasssssssssssssssssssssssssssss', 213132132132132321, 'dsdadsadsa', 'sadds', 'saddsadsa', 'urbana', '2021-04-21', 'dsdsadsa', 'j', 'j', 'kj', 'h', 'jk', 'sdasad@js.das', 'dasdsa', 'asdda', 23, 'dsadsa', 'dsadsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `idtbl_proveedores` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `tipo_de_documento` varchar(45) DEFAULT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `nombre_asesor` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `telefono_empresa` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `codigo_CIIU` varchar(45) DEFAULT NULL,
  `tipo_cuenta` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `numero_cuenta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `idtbl_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contrasena` bigint(150) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `foto_perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_agendados`
--
ALTER TABLE `tbl_agendados`
  ADD PRIMARY KEY (`idtbl_agendados`);

--
-- Indices de la tabla `tbl_cuentas_pendientes`
--
ALTER TABLE `tbl_cuentas_pendientes`
  ADD PRIMARY KEY (`idtbl_cuentas_por_pagar`),
  ADD KEY `fk_tbl_cuentas_pendientes_tbl_proveedores_idx` (`tbl_proveedores_idtbl_proveedores`);

--
-- Indices de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD PRIMARY KEY (`idtbl_pacientes`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`idtbl_proveedores`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`idtbl_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_agendados`
--
ALTER TABLE `tbl_agendados`
  MODIFY `idtbl_agendados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_cuentas_pendientes`
--
ALTER TABLE `tbl_cuentas_pendientes`
  MODIFY `idtbl_cuentas_por_pagar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  MODIFY `idtbl_pacientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `idtbl_proveedores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `idtbl_usuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_cuentas_pendientes`
--
ALTER TABLE `tbl_cuentas_pendientes`
  ADD CONSTRAINT `fk_tbl_cuentas_pendientes_tbl_proveedores` FOREIGN KEY (`tbl_proveedores_idtbl_proveedores`) REFERENCES `tbl_proveedores` (`idtbl_proveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
