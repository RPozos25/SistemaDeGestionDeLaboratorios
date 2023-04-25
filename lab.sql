-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2023 a las 02:03:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_equipo_computos`
--

CREATE TABLE `catalogo_equipo_computos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_equipo_computos`
--

INSERT INTO `catalogo_equipo_computos` (`id`, `descripcion`, `updated_at`, `created_at`) VALUES
(2, 'mouse', '2022-07-03 21:21:35', '2022-07-03 21:21:35'),
(3, 'monitor', '2022-11-16 22:31:11', '2022-11-16 22:31:11'),
(4, 'CPU', '2022-11-16 22:31:42', '2022-11-16 22:31:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_computos`
--

CREATE TABLE `equipo_computos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codgobierno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laboratorio` bigint(20) UNSIGNED DEFAULT NULL,
  `equipo` bigint(20) UNSIGNED DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo_computos`
--

INSERT INTO `equipo_computos` (`id`, `codgobierno`, `laboratorio`, `equipo`, `descripcion`, `estado`, `updated_at`, `created_at`) VALUES
(1, '4212f613', 1, 2, 'mouse logitech', 2, '2022-11-16 22:32:54', '2022-07-03 21:42:24'),
(2, 'ae1234', 1, 4, 'Nuevo CPU con actualizaciones', 1, '2022-11-16 22:32:41', '2022-11-16 22:32:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_equipo_computos`
--

CREATE TABLE `estado_equipo_computos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_equipo_computos`
--

INSERT INTO `estado_equipo_computos` (`id`, `descripcion`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_prestamos`
--

CREATE TABLE `estado_prestamos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_prestamos`
--

INSERT INTO `estado_prestamos` (`id`, `descripcion`) VALUES
(1, 'Entregado'),
(2, 'prestado'),
(3, 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encargado` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `nombre`, `descripcion`, `encargado`, `updated_at`, `created_at`) VALUES
(1, 'Dev', 'destinado para alumnos de 9no', 7, '2022-06-20 17:44:56', '2022-06-09 04:31:01'),
(2, 'Redes', 'laboratorio para alumnos de isc', 8, '2022-11-16 22:19:48', '2022-11-16 22:19:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_practicas`
--

CREATE TABLE `material_practicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material` bigint(20) UNSIGNED DEFAULT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `material_practicas`
--

INSERT INTO `material_practicas` (`id`, `material`, `cantidad`, `descripcion`, `updated_at`, `created_at`) VALUES
(1, 1, '3', 'marca doble r', '2022-11-16 22:37:18', ''),
(3, 3, '3', 'cisco', '2022-06-08 20:32:44', '2022-06-08 20:32:44'),
(4, 4, '3', 'desconocida', '2022-06-08 20:33:05', '2022-06-08 20:33:05'),
(5, 5, '5', 'multimetro marca mms', '2022-11-16 22:36:48', '2022-11-16 22:36:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_06_04_174013_create_tipo_users', 1),
(5, '2022_06_04_174118_create_estado_eq', 1),
(6, '2022_06_04_174148_create_catalogo_eq', 1),
(7, '2022_06_04_174207_create_users', 1),
(8, '2022_06_04_175905_create_laboratorios', 1),
(9, '2022_06_04_180135_create_equipo_computo', 1),
(10, '2022_06_06_203055_create_tipo_material', 1),
(11, '2022_06_06_203855_create_estado_prestamo', 1),
(12, '2022_06_06_203953_create_material_practica', 1),
(13, '2022_06_06_220244_create_prestamo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prestado` bigint(20) UNSIGNED DEFAULT NULL,
  `material` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `prestado`, `material`, `estado`, `updated_at`, `created_at`) VALUES
(7, 7, 3, 2, '2022-11-16 22:03:50', '2022-11-16 21:59:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_materials`
--

CREATE TABLE `tipo_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_materials`
--

INSERT INTO `tipo_materials` (`id`, `descripcion`, `updated_at`, `created_at`) VALUES
(1, 'fuente de poderr', '2022-06-07 04:02:40', ''),
(3, 'router', '2022-06-08 20:31:17', '2022-06-08 20:31:17'),
(4, 'osiroscopio', '2022-06-08 20:31:35', '2022-06-08 20:31:35'),
(5, 'multimetro', '2022-11-16 22:36:11', '2022-11-16 22:36:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_users`
--

CREATE TABLE `tipo_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_users`
--

INSERT INTO `tipo_users` (`id`, `descripcion`) VALUES
(1, 'Admin'),
(2, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `app`, `apm`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Pablo', 'Martinez', 'Ramírez', 'pablo@muypreparado.com', NULL, '$2y$10$CTYM9E/7mlsNbIhsGDNoVuY4aNsAjshgW9lpV5Iulqri0pY12f/9C', 2, NULL, '2022-11-17 03:56:43', '2022-11-17 03:56:43'),
(8, 'Pedro', 'Lopez', 'Lopez', 'pedro@muypreparado.com', NULL, '$2y$10$TjxMFsGNeKICiDSBYSfUoOsAaKQqwTiJXv1v8jybfq8MrnKlNTAoW', 2, NULL, '2022-11-17 04:42:25', '2022-11-17 04:42:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_equipo_computos`
--
ALTER TABLE `catalogo_equipo_computos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo_computos`
--
ALTER TABLE `equipo_computos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo_computos_laboratorio_foreign` (`laboratorio`),
  ADD KEY `equipo_computos_equipo_foreign` (`equipo`),
  ADD KEY `equipo_computos_estado_foreign` (`estado`);

--
-- Indices de la tabla `estado_equipo_computos`
--
ALTER TABLE `estado_equipo_computos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_prestamos`
--
ALTER TABLE `estado_prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laboratorios_encargado_foreign` (`encargado`);

--
-- Indices de la tabla `material_practicas`
--
ALTER TABLE `material_practicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_practica_material_foreign` (`material`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestamo_prestado_foreign` (`prestado`),
  ADD KEY `prestamo_material_foreign` (`material`),
  ADD KEY `prestamo_estado_foreign` (`estado`);

--
-- Indices de la tabla `tipo_materials`
--
ALTER TABLE `tipo_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_rol_foreign` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_equipo_computos`
--
ALTER TABLE `catalogo_equipo_computos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `equipo_computos`
--
ALTER TABLE `equipo_computos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_equipo_computos`
--
ALTER TABLE `estado_equipo_computos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_prestamos`
--
ALTER TABLE `estado_prestamos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material_practicas`
--
ALTER TABLE `material_practicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_materials`
--
ALTER TABLE `tipo_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo_computos`
--
ALTER TABLE `equipo_computos`
  ADD CONSTRAINT `equipo_computos_equipo_foreign` FOREIGN KEY (`equipo`) REFERENCES `catalogo_equipo_computos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `equipo_computos_estado_foreign` FOREIGN KEY (`estado`) REFERENCES `estado_equipo_computos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `equipo_computos_laboratorio_foreign` FOREIGN KEY (`laboratorio`) REFERENCES `laboratorios` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD CONSTRAINT `laboratorios_encargado_foreign` FOREIGN KEY (`encargado`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `material_practicas`
--
ALTER TABLE `material_practicas`
  ADD CONSTRAINT `material_practica_material_foreign` FOREIGN KEY (`material`) REFERENCES `tipo_materials` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamo_estado_foreign` FOREIGN KEY (`estado`) REFERENCES `estado_prestamos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prestamo_material_foreign` FOREIGN KEY (`material`) REFERENCES `material_practicas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prestamo_prestado_foreign` FOREIGN KEY (`prestado`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rol_foreign` FOREIGN KEY (`rol`) REFERENCES `tipo_users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
