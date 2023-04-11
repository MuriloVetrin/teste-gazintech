-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2023 às 13:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gazincrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desenvolvedors`
--

CREATE TABLE `desenvolvedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `desenvolvedors`
--

INSERT INTO `desenvolvedors` (`id`, `nome`, `email`, `nivel_id`, `created_at`, `updated_at`) VALUES
(25, 'Tony Stark', 'ironman3000@gmail.com', 30, '2023-04-04 02:00:08', '2023-04-07 03:44:53'),
(60, 'Junior', 'junior@gmail.com', 30, '2023-04-07 15:20:14', '2023-04-07 15:20:14'),
(69, 'teste2', 'teste2@gmail.com', 30, '2023-04-07 19:35:39', '2023-04-07 19:35:39');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_30_220957_create_nivels_table', 1),
(6, '2023_03_31_002011_create_desenvolvedors_table', 1),
(7, '2023_04_05_162613_add_foreign_key_restrictions_to_nivels_table', 2),
(8, '2023_04_07_120811_create_nivel_desenvolvedor_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivels`
--

CREATE TABLE `nivels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desenvolvedor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `nivels`
--

INSERT INTO `nivels` (`id`, `nome`, `created_at`, `updated_at`, `desenvolvedor_id`) VALUES
(30, 'Master', '2023-04-07 03:44:44', '2023-04-07 03:44:44', NULL),
(37, 'Júnior', '2023-04-07 19:53:15', '2023-04-07 19:53:15', NULL),
(38, 'Senior', '2023-04-07 19:53:24', '2023-04-07 19:53:24', NULL),
(40, 'teste2', '2023-04-10 02:04:21', '2023-04-10 02:04:21', NULL),
(42, 'teste2', '2023-04-10 02:06:15', '2023-04-10 02:06:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_desenvolvedor`
--

CREATE TABLE `nivel_desenvolvedor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nivel_id` bigint(20) UNSIGNED NOT NULL,
  `desenvolvedor_id` bigint(20) UNSIGNED NOT NULL,
  `removivel` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `desenvolvedors`
--
ALTER TABLE `desenvolvedors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desenvolvedors_nivel_id_foreign` (`nivel_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nivels`
--
ALTER TABLE `nivels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivels_desenvolvedor_id_foreign` (`desenvolvedor_id`);

--
-- Índices para tabela `nivel_desenvolvedor`
--
ALTER TABLE `nivel_desenvolvedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel_desenvolvedor_nivel_id_foreign` (`nivel_id`),
  ADD KEY `nivel_desenvolvedor_desenvolvedor_id_foreign` (`desenvolvedor_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `desenvolvedors`
--
ALTER TABLE `desenvolvedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `nivels`
--
ALTER TABLE `nivels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `nivel_desenvolvedor`
--
ALTER TABLE `nivel_desenvolvedor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `desenvolvedors`
--
ALTER TABLE `desenvolvedors`
  ADD CONSTRAINT `desenvolvedors_nivel_id_foreign` FOREIGN KEY (`nivel_id`) REFERENCES `nivels` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `nivels`
--
ALTER TABLE `nivels`
  ADD CONSTRAINT `nivels_desenvolvedor_id_foreign` FOREIGN KEY (`desenvolvedor_id`) REFERENCES `desenvolvedors` (`id`);

--
-- Limitadores para a tabela `nivel_desenvolvedor`
--
ALTER TABLE `nivel_desenvolvedor`
  ADD CONSTRAINT `nivel_desenvolvedor_desenvolvedor_id_foreign` FOREIGN KEY (`desenvolvedor_id`) REFERENCES `desenvolvedors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nivel_desenvolvedor_nivel_id_foreign` FOREIGN KEY (`nivel_id`) REFERENCES `nivels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
