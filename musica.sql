-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2021 às 15:03
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `albuns`
--

CREATE TABLE `albuns` (
  `id_album` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_musico` int(11) DEFAULT NULL,
  `data_lancamento` date DEFAULT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `albuns`
--

INSERT INTO `albuns` (`id_album`, `titulo`, `id_genero`, `id_musico`, `data_lancamento`, `observacoes`, `updated_at`, `created_at`) VALUES
(1, 'Set Technno 1', 1, 1, '2021-02-09', NULL, NULL, NULL),
(2, 'Musica do Padre', 2, 2, '2021-02-14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `designacao` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id_genero`, `designacao`, `observacoes`, `created_at`, `updated_at`) VALUES
(1, 'Technno', 'Musica Technno', NULL, NULL),
(2, 'Trance', 'Musica Trance', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id_musica` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_musico` int(11) DEFAULT NULL,
  `id_genero` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id_musica`, `titulo`, `id_musico`, `id_genero`, `updated_at`, `created_at`) VALUES
(1, 'You Losing', 1, 1, NULL, NULL),
(2, 'Stay here', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicos`
--

CREATE TABLE `musicos` (
  `id_musico` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `musicos`
--

INSERT INTO `musicos` (`id_musico`, `nome`, `nacionalidade`, `data_nascimento`, `fotografia`, `updated_at`, `created_at`) VALUES
(1, 'Rui Pedro', 'Portuguesa', '2021-02-11 00:00:00', 't', '2021-02-15 11:20:09', NULL),
(2, 'Padre Guilherme', 'Portuguesa', '2001-06-11 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albuns`
--
ALTER TABLE `albuns`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id_musica`);

--
-- Indexes for table `musicos`
--
ALTER TABLE `musicos`
  ADD PRIMARY KEY (`id_musico`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albuns`
--
ALTER TABLE `albuns`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `musicos`
--
ALTER TABLE `musicos`
  MODIFY `id_musico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
