CREATE DATABASE IF NOT EXISTS basic_crud;

USE basic_crud;
CREATE TABLE `newsfeed` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rango_edad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
  `categoria` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `newsfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
