-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2021 pada 13.51
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magangci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'f5698cee31cba431e7a2c771acdbd44b', '2021-08-09 03:15:12'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'f5698cee31cba431e7a2c771acdbd44b', '2021-08-09 03:23:23'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '1cfc291ec87b70cc65dd604270234fc3', '2021-08-09 03:26:53'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '70e67d8bdb719fd6dbc98d8bac0118fb', '2021-08-09 03:28:43'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '70e67d8bdb719fd6dbc98d8bac0118fb', '2021-08-09 03:28:49'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '499e822d1c42d3ae6a3693a559e2ac94', '2021-08-09 03:31:14'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '499e822d1c42d3ae6a3693a559e2ac94', '2021-08-09 03:31:20'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '4389376434eb2106baf7805753892c4e', '2021-08-09 03:37:42'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '42670b1cd3f244cc54b6248e4596d0e6', '2021-08-09 04:22:15'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '4389376434eb2106baf7805753892c4e', '2021-08-09 04:22:31'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '90bc7cf176a76e82401ec1a5d0750d91', '2021-08-09 20:51:06'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '7ad26ad3d2055e8c64d888fe2b8e440e', '2021-08-09 23:59:05'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'bc49f6dfab107a270a27b1daa914d8c2', '2021-08-10 00:15:44'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'a24fb21184e942a55accc6dbab101219', '2021-08-11 20:49:26'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '210827c4c1b149fc2f790756b8e0ff80', '2021-08-11 20:51:32'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '37715327124ecd3ea400e46f8483791a', '2021-08-11 20:53:35'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'a9cda2ef2a08979c82009cefc866b8f1', '2021-08-11 20:54:39'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '0780515dbe0c4b63dcf9e4f9b5410a8f', '2021-08-11 20:55:37'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '1c1a677edcc35bd64007fb7f46d7f18a', '2021-08-11 20:56:47'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '384b2a656ff28945d1fa7690a4cdcae4', '2021-08-30 21:31:19'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '36a503ded2cb2962ea4bc1782efd703a', '2021-08-31 00:39:01'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'ef877df25fb2ff30088ff4e636779931', '2021-08-31 23:06:59'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'f277e694599866c7fc70928d8110ecc6', '2021-09-01 04:35:12'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '191901fd487920eb75f8db0ac2a5c741', '2021-09-18 00:10:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site administrator'),
(2, 'user', 'regular user'),
(3, 'pelajar', 'Siswa yang sedang magang'),
(4, 'guru', 'Guru sekolah yang membimbing siswanya magang'),
(5, 'pembimbing', 'pembimbing yang membimbing siswa sekolah yang sedang magang diperusahaannya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 2),
(3, 2),
(3, 3),
(4, 2),
(4, 3),
(5, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 24),
(2, 24),
(3, 1),
(3, 4),
(3, 6),
(3, 10),
(3, 11),
(3, 12),
(3, 23),
(4, 2),
(4, 8),
(4, 9),
(5, 3),
(5, 5),
(5, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'a', NULL, '2021-08-08 22:19:26', 0),
(2, '::1', 'magangreport@gmail.com', 10, '2021-08-09 03:23:22', 1),
(3, '::1', '08zakki@gmail.com', 11, '2021-08-09 03:27:07', 1),
(4, '::1', '08zakki@gmail.com', 12, '2021-08-09 03:28:49', 1),
(5, '::1', '08zakki@gmail.com', 12, '2021-08-09 03:29:38', 1),
(6, '::1', '08zakki@gmail.com', 13, '2021-08-09 03:31:20', 1),
(7, '::1', '08zakki@gmail.com', 13, '2021-08-09 03:35:26', 1),
(8, '::1', 'harismzkki', NULL, '2021-08-09 03:37:55', 0),
(9, '::1', '08harismu@gmail.com', 14, '2021-08-09 03:38:03', 1),
(10, '::1', '08harismu@gmail.com', 14, '2021-08-09 03:40:14', 1),
(11, '::1', '08harismu@gmail.com', 14, '2021-08-09 03:41:18', 1),
(12, '::1', '08zakki@gmail.com', NULL, '2021-08-09 04:17:16', 0),
(13, '::1', '08zakki@gmail.com', NULL, '2021-08-09 04:17:25', 0),
(14, '::1', '08zakki@gmail.com', NULL, '2021-08-09 04:17:33', 0),
(15, '::1', '08zakki@gmail.com', 15, '2021-08-09 04:22:31', 1),
(16, '::1', '08zakki@gmail.com', NULL, '2021-08-09 20:47:44', 0),
(17, '::1', '08zakki@gmail.com', NULL, '2021-08-09 20:47:54', 0),
(18, '::1', 'zakkiindra08@gmail.com', 16, '2021-08-09 20:51:21', 1),
(19, '::1', '08harismu@gmail.com', NULL, '2021-08-09 23:57:04', 0),
(20, '::1', '08harismu@gmail.com', 17, '2021-08-09 23:59:16', 1),
(21, '::1', '08zakki@gmail.com', 18, '2021-08-10 00:15:57', 1),
(22, '::1', '08zakki@gmail.com', NULL, '2021-08-10 02:13:08', 0),
(23, '::1', '08zakki@gmail.com', NULL, '2021-08-10 02:13:18', 0),
(24, '::1', '08zakki@gmail.com', NULL, '2021-08-10 02:13:44', 0),
(25, '::1', '08zakki@gmail.com', 18, '2021-08-10 02:13:58', 1),
(26, '::1', '08zakki@gmail.com', NULL, '2021-08-10 02:14:49', 0),
(27, '::1', '08zakki@gmail.com', 18, '2021-08-10 02:14:55', 1),
(28, '::1', '08harismu@gmail.com', NULL, '2021-08-10 04:19:45', 0),
(29, '::1', '08harismu@gmail.com', NULL, '2021-08-10 04:19:54', 0),
(30, '::1', '08zakki@gmail.com', NULL, '2021-08-10 04:21:13', 0),
(31, '::1', '08harismu@gmail.com', 17, '2021-08-10 04:21:21', 1),
(32, '::1', '08zakki@gmail.com', 19, '2021-08-11 20:49:40', 1),
(33, '::1', 'zakkiindra08@gmail.com', 20, '2021-08-11 20:51:44', 1),
(34, '::1', '08zakki@gmail.com', 21, '2021-08-12 00:38:05', 1),
(35, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-12 00:53:56', 1),
(36, '::1', '08zakki@gmail.com', 21, '2021-08-12 00:54:16', 1),
(37, '::1', '08zakki@gmail.com', 21, '2021-08-12 01:07:29', 1),
(38, '::1', '08zakki@gmail.com', 21, '2021-08-12 01:08:50', 1),
(39, '::1', '08harismu@gmail.com', 23, '2021-08-12 01:09:07', 1),
(40, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-12 01:20:41', 1),
(41, '::1', '08harismu@gmail.com', 23, '2021-08-12 01:20:57', 1),
(42, '::1', '08harismu@gmail.com', 23, '2021-08-12 01:23:11', 1),
(43, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-12 01:49:35', 1),
(44, '::1', '08harismu@gmail.com', 23, '2021-08-12 04:24:08', 1),
(45, '::1', '08zakki@gmail.com', 21, '2021-08-12 04:32:03', 1),
(46, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-12 04:33:00', 1),
(47, '::1', '08harismu@gmail.com', 23, '2021-08-13 00:41:01', 1),
(48, '::1', '08harismu@gmail.com', 23, '2021-08-15 22:00:40', 1),
(49, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-15 22:01:01', 1),
(50, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-16 00:13:54', 1),
(51, '::1', '08harismu@gmail.com', 23, '2021-08-16 00:14:19', 1),
(52, '::1', '08zakki@gmail.com', 21, '2021-08-16 01:16:55', 1),
(53, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-16 01:17:30', 1),
(54, '::1', '08harismu@gmail.com', 23, '2021-08-16 01:18:07', 1),
(55, '::1', '08harismu@gmail.com', 23, '2021-08-16 03:57:08', 1),
(56, '::1', '08harismu@gmail.com', 23, '2021-08-16 03:57:36', 1),
(57, '::1', '08harismu@gmail.com', 23, '2021-08-16 03:58:20', 1),
(58, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-16 03:59:15', 1),
(59, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-16 03:59:39', 1),
(60, '::1', '08harismu@gmail.com', 23, '2021-08-20 08:36:26', 1),
(61, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-20 08:37:43', 1),
(62, '::1', '08harismu@gmail.com', 23, '2021-08-25 20:34:59', 1),
(63, '::1', '08harismu@gmail.com', 23, '2021-08-25 20:47:35', 1),
(64, '::1', '08zakki@gmail.com', 21, '2021-08-25 20:47:50', 1),
(65, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-25 20:48:12', 1),
(66, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-27 01:41:35', 1),
(67, '::1', '08harismu@gmail.com', 23, '2021-08-28 04:07:46', 1),
(68, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 04:08:00', 1),
(69, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 04:28:30', 1),
(70, '::1', '08harismu@gmail.com', 23, '2021-08-28 04:28:52', 1),
(71, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 04:32:00', 1),
(72, '::1', '08zakki@gmail.com', 21, '2021-08-28 08:13:37', 1),
(73, '::1', '08harismu@gmail.com', 23, '2021-08-28 08:15:17', 1),
(74, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-28 08:31:43', 1),
(75, '::1', '08zakki@gmail.com', 21, '2021-08-28 08:32:05', 1),
(76, '::1', '08zakki@gmail.com', 21, '2021-08-28 08:35:59', 1),
(77, '::1', '08harismu@gmail.com', 23, '2021-08-28 08:43:30', 1),
(78, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 08:43:44', 1),
(79, '::1', '08harismu@gmail.com', 23, '2021-08-28 08:44:13', 1),
(80, '::1', '08zakki@gmail.com', 21, '2021-08-28 08:48:40', 1),
(81, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 08:49:05', 1),
(82, '::1', 'harisfebi2310@gmail.com', 24, '2021-08-28 08:50:23', 1),
(83, '::1', 'zakkiindra08@gmail.com', 22, '2021-08-28 09:00:09', 1),
(84, '::1', '08zakki@gmail.com', 21, '2021-08-28 09:00:37', 1),
(85, '::1', '08zakki@gmail.com', NULL, '2021-08-30 00:25:42', 0),
(86, '::1', '08harismu@gmail.com', 1, '2021-08-30 21:31:27', 1),
(87, '::1', '08zakki@gmail.com', 2, '2021-08-31 00:39:14', 1),
(88, '::1', '08zakki@gmail.com', 2, '2021-08-31 22:17:02', 1),
(89, '::1', 'harisfebi2310@gmail.com', 3, '2021-08-31 23:07:10', 1),
(90, '::1', '08zakki@gmail.com', 2, '2021-09-01 00:31:17', 1),
(91, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-01 00:31:30', 1),
(92, '::1', '08zakki@gmail.com', 2, '2021-09-01 00:32:07', 1),
(93, '::1', '08harismu@gmail.com', 1, '2021-09-01 01:05:35', 1),
(94, '::1', '08harismu@gmail,com', NULL, '2021-09-01 01:07:44', 0),
(95, '::1', '08harismu@gmail.com', 1, '2021-09-01 01:07:53', 1),
(96, '::1', '08harismu@gmail.com', 1, '2021-09-01 01:10:30', 1),
(97, '::1', '08harismu@gmail.com', 1, '2021-09-01 01:12:54', 1),
(98, '::1', '08harismu@gmail.com', 1, '2021-09-01 03:40:03', 1),
(99, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-01 04:35:22', 1),
(100, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-01 04:37:45', 1),
(101, '::1', '08harismu@gmail.com', 1, '2021-09-01 04:38:55', 1),
(102, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-01 04:39:41', 1),
(103, '::1', '08zakki@gmail.com', 2, '2021-09-01 04:40:47', 1),
(104, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-01 04:41:00', 1),
(105, '::1', '08harismu@gmail.com', 1, '2021-09-01 04:51:05', 1),
(106, '::1', '08harismu@gmail.com', 1, '2021-09-01 08:59:58', 1),
(107, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-01 19:31:28', 1),
(108, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-02 02:02:56', 1),
(109, '::1', '08zakki@gmail..com', NULL, '2021-09-02 08:33:40', 0),
(110, '::1', '08zakki@gmail.com', 2, '2021-09-02 08:33:53', 1),
(111, '::1', '08harismu@gmail.com', 1, '2021-09-02 09:33:41', 1),
(112, '::1', '08zakki@gmail.com', 2, '2021-09-02 09:35:17', 1),
(113, '::1', '08zakki@gmail.com', 2, '2021-09-02 10:00:12', 1),
(114, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-03 02:13:49', 1),
(115, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-03 02:14:38', 1),
(116, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-03 02:26:25', 1),
(117, '::1', '08harismu@gmail.com', 1, '2021-09-03 02:26:46', 1),
(118, '::1', '08zakki@gmail.com', 2, '2021-09-03 02:27:07', 1),
(119, '::1', '08zakki@gmail.com', 2, '2021-09-03 06:35:56', 1),
(120, '::1', '08zakki@gmail.com', 2, '2021-09-03 06:36:18', 1),
(121, '::1', '08zakki@gmail.com', 2, '2021-09-04 08:18:04', 1),
(122, '::1', '08harismu@gmail.com', 1, '2021-09-04 08:27:33', 1),
(123, '::1', 'zakkiindra08@gmail.com', NULL, '2021-09-04 08:28:03', 0),
(124, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-04 08:28:12', 1),
(125, '::1', '08zakki@gmail.com', 2, '2021-09-04 08:28:49', 1),
(126, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-04 08:29:28', 1),
(127, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-04 18:47:09', 1),
(128, '::1', '08zakki@gmail.com', 2, '2021-09-04 19:02:23', 1),
(129, '::1', '08harismu@gmail.com', 1, '2021-09-04 19:08:37', 1),
(130, '::1', '08zakki@gmail.com', 2, '2021-09-04 19:08:59', 1),
(131, '::1', '08harismu@gmail.com', NULL, '2021-09-04 19:09:25', 0),
(132, '::1', '08harismu@gmail.com', 1, '2021-09-04 19:09:34', 1),
(133, '::1', 'aldino123', NULL, '2021-09-04 19:09:52', 0),
(134, '::1', '08zakki@gmail.com', 2, '2021-09-04 19:10:01', 1),
(135, '::1', '08harismu@gmail.com', 1, '2021-09-04 19:10:19', 1),
(136, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-04 19:10:53', 1),
(137, '::1', '08zakki@gmail.com', 2, '2021-09-05 20:55:24', 1),
(138, '::1', '08harismu@gmail.com', 1, '2021-09-05 20:57:23', 1),
(139, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-16 08:01:58', 1),
(140, '::1', '08zakki@gmail.com', 2, '2021-09-16 08:03:27', 1),
(141, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-16 08:04:00', 1),
(142, '::1', '08harismu@gmail.com', 1, '2021-09-16 08:15:38', 1),
(143, '::1', '08harismu@gmail.com', 1, '2021-09-17 03:09:55', 1),
(144, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:10:56', 1),
(145, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:13:15', 1),
(146, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:16:55', 1),
(147, '::1', '08harismu@gmail.com', 1, '2021-09-18 00:20:14', 1),
(148, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-18 00:24:19', 1),
(149, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:25:22', 1),
(150, '::1', '08harismu@gmail.com', 1, '2021-09-18 00:26:52', 1),
(151, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-18 00:28:43', 1),
(152, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:28:54', 1),
(153, '::1', '08zakki@gmail.com', 2, '2021-09-18 00:33:15', 1),
(154, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-18 00:33:47', 1),
(155, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:34:40', 1),
(156, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-18 00:35:22', 1),
(157, '::1', 'magangreport@gmail.com', 5, '2021-09-18 00:36:16', 1),
(158, '::1', '08harismu@gmail.com', NULL, '2021-09-18 00:39:03', 0),
(159, '::1', '08harismu@gmail.com', 1, '2021-09-18 00:39:25', 1),
(160, '::1', '08harismu@gmail.com', 1, '2021-09-18 00:40:17', 1),
(161, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-18 01:23:13', 1),
(162, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-18 01:27:11', 1),
(163, '::1', '08harismu@gmail.com', 1, '2021-09-18 01:29:03', 1),
(164, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-18 01:29:18', 1),
(165, '::1', '08harismu@gmail.com', 1, '2021-09-18 01:32:18', 1),
(166, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-18 01:32:28', 1),
(167, '::1', '08harismu@gmail.com', 1, '2021-09-20 22:31:36', 1),
(168, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-20 22:33:08', 1),
(169, '::1', '08zakki@gmail.com', 2, '2021-09-20 22:33:57', 1),
(170, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-20 22:34:11', 1),
(171, '::1', '08harismu@gmail.com', 1, '2021-09-20 22:37:43', 1),
(172, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-20 22:38:09', 1),
(173, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-20 22:38:28', 1),
(174, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-21 00:24:36', 1),
(175, '::1', '08zakki@gmail.com', 2, '2021-09-21 00:25:43', 1),
(176, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-21 00:47:05', 1),
(177, '::1', '08zakki@gmail.com', 2, '2021-09-21 00:49:05', 1),
(178, '::1', '08zakki@gmail', NULL, '2021-09-21 01:03:24', 0),
(179, '::1', 'asas', NULL, '2021-09-21 01:03:30', 0),
(180, '::1', 'pelajar3', 6, '2021-09-23 00:57:42', 0),
(181, '::1', 'pelajar3', 6, '2021-09-23 01:05:54', 0),
(182, '::1', 'ridwan@gmail.com', 6, '2021-09-23 01:06:44', 1),
(183, '::1', 'ridwan@gmail.com', 6, '2021-09-23 01:12:10', 1),
(184, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 01:13:21', 1),
(185, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:13:48', 1),
(186, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:19:49', 1),
(187, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:21:44', 1),
(188, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:23:00', 1),
(189, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:23:38', 1),
(190, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 01:26:17', 1),
(191, '::1', 'maharani@gmail.com', 7, '2021-09-23 01:27:08', 1),
(192, '::1', 'magangreport@gmail.com', 5, '2021-09-23 01:39:36', 1),
(193, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 01:39:55', 1),
(194, '::1', 'pembimbing2', NULL, '2021-09-23 01:41:11', 0),
(195, '::1', 'magangreport@gmail.com', 5, '2021-09-23 01:41:19', 1),
(196, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 01:43:07', 1),
(197, '::1', 'andhi@gmail.com', 8, '2021-09-23 01:44:02', 1),
(198, '::1', 'andhi@gmail.com', 8, '2021-09-23 01:46:15', 1),
(199, '::1', 'andhi@gmail.com', 8, '2021-09-23 01:47:05', 1),
(200, '::1', 'andhi@gmail.com', 8, '2021-09-23 01:53:36', 1),
(201, '::1', 'reni@gmail.com', 9, '2021-09-23 01:54:18', 1),
(202, '::1', 'reni@gmail.com', 9, '2021-09-23 01:56:24', 1),
(203, '::1', '08zakki@gmail.com', 2, '2021-09-23 02:36:08', 1),
(204, '::1', 'andhi@gmail.com', 8, '2021-09-23 02:36:51', 1),
(205, '::1', '08zakki@gmail.com', 2, '2021-09-23 02:43:43', 1),
(206, '::1', 'andhi@gmail.com', 8, '2021-09-23 02:45:15', 1),
(207, '::1', 'andhi@gmail.com', 8, '2021-09-23 04:45:51', 1),
(208, '::1', 'reni@gmail.com', 9, '2021-09-23 19:24:29', 1),
(209, '::1', 'magangreport@gmail.com', 5, '2021-09-23 19:36:52', 1),
(210, '::1', 'alif@gmail.com', 10, '2021-09-23 19:38:57', 1),
(211, '::1', 'pelajar4', NULL, '2021-09-23 19:40:43', 0),
(212, '::1', 'pelajar4', NULL, '2021-09-23 19:40:59', 0),
(213, '::1', 'alif@gmail.com', 10, '2021-09-23 19:41:07', 1),
(214, '::1', 'ridwan@gmail.com', 6, '2021-09-23 19:42:35', 1),
(215, '::1', 'alif@gmail.com', 10, '2021-09-23 19:42:54', 1),
(216, '::1', 'dhendy@gmail.com', 11, '2021-09-23 19:43:13', 1),
(217, '::1', 'dhendy@gmail.com', 11, '2021-09-23 19:45:21', 1),
(218, '::1', 'sheza@gmail.com', 12, '2021-09-23 19:45:38', 1),
(219, '::1', 'sheza@gmail.com', 12, '2021-09-23 19:47:04', 1),
(220, '::1', 'dhendy@gmail.com', 11, '2021-09-23 19:54:41', 1),
(221, '::1', 'sheza@gmail.com', 12, '2021-09-23 19:54:54', 1),
(222, '::1', 'magangreport@gmail.com', 5, '2021-09-23 19:55:09', 1),
(223, '::1', 'test@test.com', 13, '2021-09-23 20:21:20', 1),
(224, '::1', 'pelajar7', 14, '2021-09-23 20:24:16', 0),
(225, '::1', 'test@test.com', 14, '2021-09-23 20:24:41', 1),
(226, '::1', 'pelajar7', NULL, '2021-09-23 20:28:25', 0),
(227, '::1', 'test@test.com', 15, '2021-09-23 20:28:35', 1),
(228, '::1', 'test@test.com', 16, '2021-09-23 20:34:46', 1),
(229, '::1', 'test1@test.com', 17, '2021-09-23 20:37:30', 1),
(230, '::1', 'test2@gmail.com', 18, '2021-09-23 20:38:55', 1),
(231, '::1', 'test4@gmail.com', 19, '2021-09-23 20:41:31', 1),
(232, '::1', 'faras@gmail.com', 20, '2021-09-23 21:12:13', 1),
(233, '::1', 'naufali@gmail.com', 21, '2021-09-23 21:14:56', 1),
(234, '::1', 'naufali@gmail.com', 21, '2021-09-23 21:16:50', 1),
(235, '::1', '08harismu@gmail.com', 1, '2021-09-23 21:23:47', 1),
(236, '::1', 'test@gmail.com', 22, '2021-09-23 21:26:46', 1),
(237, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-23 21:30:45', 1),
(238, '::1', 'sheza@gmail.com', 12, '2021-09-23 21:31:35', 1),
(239, '::1', 'dhendy@gmail.com', 11, '2021-09-23 21:31:55', 1),
(240, '::1', 'sheza@gmail.com', 12, '2021-09-23 21:43:23', 1),
(241, '::1', 'magangreport@gmail.com', 5, '2021-09-23 21:43:54', 1),
(242, '::1', 'alif@gmail.com', 10, '2021-09-23 21:44:21', 1),
(243, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-23 21:45:00', 1),
(244, '::1', 'maharani@gmail.com', 7, '2021-09-23 21:45:51', 1),
(245, '::1', 'alif@gmail.com', 10, '2021-09-23 21:46:25', 1),
(246, '::1', 'pembimbing2', NULL, '2021-09-23 21:46:44', 0),
(247, '::1', 'magangreport@gmail.com', 5, '2021-09-23 21:48:31', 1),
(248, '::1', 'dhendy@gmail.com', 11, '2021-09-23 21:49:05', 1),
(249, '::1', 'sheza@gmail.com', 12, '2021-09-23 21:49:30', 1),
(250, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 21:49:50', 1),
(251, '::1', 'naufali@gmail.com', 21, '2021-09-23 21:51:29', 1),
(252, '::1', 'magangreport@gmail.com', 5, '2021-09-23 21:52:47', 1),
(253, '::1', 'maharani@gmail.com', 7, '2021-09-23 21:53:10', 1),
(254, '::1', 'razita@gmail.com', 23, '2021-09-23 21:57:24', 1),
(255, '::1', 'razita@gmail.com', 23, '2021-09-23 21:58:34', 1),
(256, '::1', 'razita@gmail.com', 23, '2021-09-23 21:58:53', 1),
(257, '::1', 'magangreport@gmail.com', 5, '2021-09-23 21:59:10', 1),
(258, '::1', 'reni@gmail.com', 9, '2021-09-23 21:59:27', 1),
(259, '::1', 'andhi@gmail.com', 8, '2021-09-23 22:00:25', 1),
(260, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-23 22:01:26', 1),
(261, '::1', '08zakki@gmail.com', 2, '2021-09-23 22:03:25', 1),
(262, '::1', 'razita@gmail.com', 23, '2021-09-23 23:53:33', 1),
(263, '::1', '08zakki@gmail.com', 2, '2021-09-23 23:54:34', 1),
(264, '::1', 'dhendy@gmail.com', 11, '2021-09-23 23:55:04', 1),
(265, '::1', 'magangreport@gmail.com', 5, '2021-09-24 00:19:59', 1),
(266, '::1', 'reni@gmail.com', 9, '2021-09-24 00:20:12', 1),
(267, '::1', 'andhi@gmail.com', 8, '2021-09-24 00:20:20', 1),
(268, '::1', 'dhendy@gmail.com', 11, '2021-09-24 00:21:25', 1),
(269, '::1', '08zakki@gmail.com', 2, '2021-09-24 00:23:40', 1),
(270, '::1', '08harismu@gmail.com', 1, '2021-09-24 00:41:09', 1),
(271, '::1', 'magangreport@gmail.com', 5, '2021-09-25 00:04:34', 1),
(272, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-25 01:10:34', 1),
(273, '::1', '08harismu@gmail.com', 1, '2021-09-25 07:24:13', 1),
(274, '::1', 'magangreport@gmail.com', 5, '2021-09-25 07:35:17', 1),
(275, '::1', '08zakki@gmail.com', 2, '2021-09-25 07:35:50', 1),
(276, '::1', '08harismu@gmail.com', 1, '2021-09-26 20:34:37', 1),
(277, '::1', 'pelajar1', NULL, '2021-09-26 20:37:34', 0),
(278, '::1', '08harismu@gmail.com', 1, '2021-09-26 20:37:39', 1),
(279, '::1', 'alif@gmail.com', 10, '2021-09-26 21:27:58', 1),
(280, '::1', 'magangreport@gmail.com', 5, '2021-09-26 21:28:24', 1),
(281, '::1', 'maharani@gmail.com', 7, '2021-09-26 21:28:36', 1),
(282, '::1', '08zakki@gmail.com', 2, '2021-09-26 21:54:23', 1),
(283, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-26 22:04:28', 1),
(284, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-26 22:09:46', 1),
(285, '::1', 'magangreport@gmail.com', 5, '2021-09-26 22:37:47', 1),
(286, '::1', '08zakki@gmail.com', 2, '2021-09-26 22:50:44', 1),
(287, '::1', '08harismu@gmail.com', 1, '2021-09-26 22:57:17', 1),
(288, '::1', 'maharani@gmail.com', 7, '2021-09-26 23:39:02', 1),
(289, '::1', '08zakki@gmail.com', 2, '2021-09-26 23:39:15', 1),
(290, '::1', '08harismu@gmail.com', 1, '2021-09-27 01:19:12', 1),
(291, '::1', '08zakki@gmail.com', 2, '2021-09-27 01:21:35', 1),
(292, '::1', '08harismu@gmail.com', 1, '2021-09-27 01:22:48', 1),
(293, '::1', 'reni@gmail.com', 9, '2021-09-27 01:22:58', 1),
(294, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-27 01:23:44', 1),
(295, '::1', '08zakki@gmail.com', 2, '2021-09-27 01:34:21', 1),
(296, '::1', 'reni@gmail.com', 9, '2021-09-27 01:34:37', 1),
(297, '::1', '08zakki@gmail.com', 2, '2021-09-27 01:34:58', 1),
(298, '::1', '08harismu@gmail.com', 1, '2021-09-27 01:35:22', 1),
(299, '::1', 'reni@gmail.com', 9, '2021-09-27 01:53:51', 1),
(300, '::1', 'alif@gmail.com', 10, '2021-09-27 02:02:20', 1),
(301, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-27 02:02:30', 1),
(302, '::1', 'andhi@gmail.com', 8, '2021-09-27 02:03:50', 1),
(303, '::1', 'reni@gmail.com', 9, '2021-09-27 02:04:04', 1),
(304, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-27 02:04:51', 1),
(305, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-27 02:05:58', 1),
(306, '::1', 'maharani@gmail.com', 7, '2021-09-27 02:06:29', 1),
(307, '::1', 'zakkiindra08@gmail.com', 4, '2021-09-27 02:08:38', 1),
(308, '::1', 'admin@admin.com', 24, '2021-09-27 02:31:36', 1),
(309, '::1', 'admin@admin.com', 24, '2021-09-29 20:42:09', 1),
(310, '::1', '08zakki@gmail.com', 2, '2021-09-29 20:42:39', 1),
(311, '::1', '08harismu@gmail.com', 1, '2021-09-30 00:30:18', 1),
(312, '::1', '08zakki@gmail.com', 2, '2021-09-30 00:33:26', 1),
(313, '::1', 'andhi@gmail.com', 8, '2021-09-30 00:35:38', 1),
(314, '::1', 'andhi@gmail.com', 8, '2021-09-30 00:35:57', 1),
(315, '::1', 'harisfebi2310@gmail.com', 3, '2021-09-30 00:37:39', 1),
(316, '::1', 'magangreport@gmail.com', 5, '2021-09-30 00:42:44', 1),
(317, '::1', 'admin@admin.com', 24, '2021-09-30 00:44:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Mengatur seluruh pengguna site'),
(2, 'manage-profile', 'mengatur data profile'),
(3, 'manage-report', 'mengatur laporan magang'),
(4, 'manage-school', 'mengatur data sekolah'),
(5, 'manage-perusahaan', 'mengatur data perusahaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '08harismu@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'd08b1175805fbde8292fb88365d6fd88', '2021-09-18 00:38:54'),
(2, '08harismu@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '237564df888afd41a3f5680d613b100b', '2021-09-18 00:40:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `user_id`, `full_name`, `nip`, `jenis_kelamin`, `alamat`, `agama`, `jabatan`, `no_hp`) VALUES
(1, 2, 'Aldino Kamaruddin', '647102838172', 'Laki - Laki', 'Jln. S. Parman Gn Guntur RT. 64\r\n\r\n', 'Islam', 'Multitalented', '0811438392810'),
(2, 8, 'Ahmad Azis', '7282136', 'Laki - Laki', 'Gn Guntur', 'Islam', 'Guru Produktif', '081625371'),
(3, 9, 'Reni Firdhani', '27218236', 'Perempuan', 'Gatau', 'Islam', 'Guru Bhs Indonesia', '0811563721');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_groups`
--

CREATE TABLE `guru_groups` (
  `user_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_groups`
--

INSERT INTO `guru_groups` (`user_id`, `guru_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 3),
(5, 3),
(6, 3),
(25, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_sekolah_groups`
--

CREATE TABLE `guru_sekolah_groups` (
  `guru_id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_sekolah_groups`
--

INSERT INTO `guru_sekolah_groups` (`guru_id`, `sekolah_id`) VALUES
(1, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `user_id`, `tempat`, `waktu`) VALUES
(1, 3, 'Balikpapan', '1998-12-23'),
(3, 2, 'Balikpapan', '1996-06-05'),
(7, 1, 'Balikpapan', '2004-12-08'),
(8, 4, 'Balikpapan', '2011-10-18'),
(9, 5, 'Balikpapan', '1995-02-12'),
(10, 6, 'Bonehau', '2004-08-18'),
(11, 7, 'Balikpapan', '2000-04-12'),
(12, 8, 'Malang', '1856-07-08'),
(13, 9, 'Balikpapan', '1995-06-07'),
(14, 10, 'Balikpapan', '2004-04-12'),
(15, 11, 'Balikpapan', '2004-10-05'),
(16, 12, 'Balikpapan', '2005-05-06'),
(35, 23, 'Balikpapan', '2003-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `pelajar_id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `approve_guru` tinyint(1) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `approve_pembimbing` tinyint(1) DEFAULT NULL,
  `id_pembimbing` int(11) DEFAULT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `pelajar_id`, `hari`, `tanggal`, `kegiatan`, `keterangan`, `approve_guru`, `id_guru`, `approve_pembimbing`, `id_pembimbing`, `jam_masuk`, `jam_keluar`, `created_at`, `updated_at`) VALUES
(3, 1, 'Senin', '2021-12-12', 'Membuat program satu', 'Hadir', 1, NULL, 1, NULL, '12:00:00', '18:00:00', '2021-09-18 00:44:26', '2021-09-18 00:44:26'),
(4, 1, 'Selasa', '2021-12-13', 'gatau weh', 'WFH', NULL, NULL, NULL, NULL, '07:00:00', '18:00:00', '2021-09-18 01:16:20', '2021-09-18 01:16:20'),
(5, 2, 'Senin', '2004-12-12', 'Gada', 'Sakit', 1, 1, 1, NULL, '12:00:00', '18:00:00', '2021-09-20 22:33:32', '2021-09-20 22:33:32'),
(6, 3, 'Kamis', '2021-09-23', 'Tydack Adha', 'WFH', NULL, NULL, NULL, NULL, '09:00:00', '18:00:00', '2021-09-23 01:12:51', '2021-09-23 01:12:51'),
(7, 25, 'Jum\'at', '2021-09-24', 'Membuat laporan', 'Sakit', 1, 1, 1, 2, '19:00:00', '20:00:00', '2021-09-23 23:54:17', '2021-09-23 23:54:17'),
(8, 5, 'Selasa', '2021-09-21', 'gatau eh kemarin ngerjain apaan', 'Hadir', NULL, NULL, NULL, NULL, '08:00:00', '18:00:00', '2021-09-24 00:23:19', '2021-09-24 00:23:19'),
(9, 1, 'Senin', '2021-09-27', 'tydack ada keknya', 'Hadir', 1, 3, 1, 1, '09:00:00', '18:02:00', '2021-09-27 01:21:20', '2021-09-27 01:21:20'),
(10, 2, 'Jum\'at', '2021-09-24', 'gatu', 'WFH', 1, 3, 1, 3, '09:15:00', '18:21:00', '2021-09-27 02:03:13', '2021-09-27 02:03:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1628473325, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajar`
--

INSERT INTO `pelajar` (`id`, `user_id`, `full_name`, `nis`, `jurusan`, `kelas`, `jenis_kelamin`, `alamat`, `agama`, `no_hp`) VALUES
(1, 1, 'Haris Muzakki Indra', '6471040812040001', 'Rekayasa Perangkat Lunak (RPL)', 'XII', 'Laki - Laki', 'Jln. S. Parman Gn Guntur', 'Islam', '08115430120'),
(2, 4, 'Raziq Maulana Furqon', '64710402819770001', 'Multimedia ( MM )', 'X', 'Laki - Laki', 'Jln. Letjen. S. Parman RT. 30 No 121', 'Islam', '081346222600'),
(3, 6, 'M. Ridwan Abdi', '004817291', 'Teknik Komputer dan Jaringan (TKJ)', 'XII', 'Laki - Laki', 'Kampung TImur', 'Islam', '085871628391'),
(4, 10, 'Alif Mulawarman', '004728191', 'Rekayasa Perangkat Lunak ( RPL )', 'XII', 'Laki - Laki', 'Komplek pertokoan balikpapan baru', 'Islam', '0813428901'),
(5, 11, 'Dhendy Aledaren', '002725381', 'Teknik Komputer Jaringan ( TKJ )', 'XII', 'Laki - Laki', 'Sumber rejo\r\n', 'Islam', '0853617219'),
(6, 12, 'Sheza Aurell', '2716981', 'Otomasi Tata Kelola Perkantoran (OTKP )', 'XI', 'Perempuan', 'Gn Guntur\r\n', 'Islam', '08115638102'),
(25, 23, 'Razita Bilqis', '0048182681', 'Administrasi Perkantoran ( AP )', 'XI', 'Perempuan', 'Gn Guntur', 'Islam', '0815235172');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `no_induk` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing`
--

INSERT INTO `pembimbing` (`id`, `user_id`, `full_name`, `no_induk`, `agama`, `jenis_kelamin`, `alamat`, `no_hp`, `jabatan`) VALUES
(1, 3, 'Istia Budi', '6736927190002', 'Islam', 'Laki - Laki', 'Jln Kilang Minyak', '081154387201', 'Direktur'),
(2, 5, 'M Andhi Rohmat ', '63472666201', 'Islam', 'Laki - Laki', 'Jln Kilang Minyak', '081154362719', 'RU V'),
(3, 7, 'Maharani Aja', '873000182', 'Islam', 'Perempuan', 'Jln Kilang Minyak', '081346543213', 'Trainee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing_groups`
--

CREATE TABLE `pembimbing_groups` (
  `pelajar_id` int(11) NOT NULL,
  `pembimbing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing_groups`
--

INSERT INTO `pembimbing_groups` (`pelajar_id`, `pembimbing_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 3),
(5, 2),
(6, 2),
(25, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing_perusahaan_groups`
--

CREATE TABLE `pembimbing_perusahaan_groups` (
  `pembimbing_id` int(11) NOT NULL,
  `perusahaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing_perusahaan_groups`
--

INSERT INTO `pembimbing_perusahaan_groups` (`pembimbing_id`, `perusahaan_id`) VALUES
(1, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_pt`, `kategori`, `alamat`, `create_at`, `update_at`) VALUES
(1, 'DILo Balikpapan', 'Swasta', 'Balikpapan Baru', '2021-08-31 07:14:39', '2021-08-31 07:14:39'),
(2, 'Pertamina Persero', 'BUMN', 'Jln Kilang Minyak', '2021-08-31 07:14:39', '2021-08-31 07:14:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan_groups`
--

CREATE TABLE `perusahaan_groups` (
  `user_id` int(11) NOT NULL,
  `perusahaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan_groups`
--

INSERT INTO `perusahaan_groups` (`user_id`, `perusahaan_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(25, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `kategori`, `alamat`, `create_at`, `update_at`) VALUES
(1, 'SMK Airlangga', 'Swasta', 'Jln. Letjen S. Parman Gn Guntur', '2021-08-31 07:13:17', '2021-08-31 07:13:17'),
(2, 'SMK Pangeran Balikpapan', 'Swasta', 'Jln. Pemuda Setia 2', '2021-08-31 07:13:17', '2021-08-31 07:13:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_groups`
--

CREATE TABLE `sekolah_groups` (
  `user_id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah_groups`
--

INSERT INTO `sekolah_groups` (`user_id`, `sekolah_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(25, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'bxs-user-circle.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '08harismu@gmail.com', 'pelajar1', 'bxs-user-circle.png', '$2y$10$sqeY8wIcOAUg7JKsKISYU.rhYr8GXKexlzB3NlIZ5BdUr3.1Y/EeO', NULL, '2021-09-18 00:40:10', NULL, NULL, NULL, NULL, 1, 0, '2021-08-30 21:30:57', '2021-09-18 00:40:10', NULL),
(2, '08zakki@gmail.com', 'guru1', 'bxs-user-circle.png', '$2y$10$UoRwDRZjFgqdJJgRcU5KOu3nWLIos91KhzmoutBALT1St73qLiW7C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-31 00:38:34', '2021-08-31 00:39:01', NULL),
(3, 'harisfebi2310@gmail.com', 'pembimbing1', 'bxs-user-circle.png', '$2y$10$DkJfnYFbeB5tkby4Jvgiy.oDHNCBZPWeX595ObLJfGcITmYpmQFkC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-31 23:06:20', '2021-08-31 23:06:59', NULL),
(4, 'zakkiindra08@gmail.com', 'pelajar2', 'bxs-user-circle.png', '$2y$10$oXQNWZAF56nPAPnOtq9vZuuIU70BmvCSbQGKYN04Dm0X8ZD8etFGu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-01 04:34:26', '2021-09-01 04:35:12', NULL),
(5, 'magangreport@gmail.com', 'pembimbing2', 'bxs-user-circle.png', '$2y$10$5QmsUA6RrHVIOX3juGs43uYyMl3tXGbymyO4SuaVCUqALPxd8AktC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-18 00:10:02', '2021-09-18 00:10:40', NULL),
(6, 'ridwan@gmail.com', 'pelajar3', 'bxs-user-circle.png', '$2y$10$a6tSFBb.sGdJw8Irsw/yIOoWeJu0jE.nGs/yUnnMAM2HN/dROWTe.', NULL, NULL, NULL, 'c34b917b1967f0af47e96ddfc6f9cc33', NULL, NULL, 1, 0, '2021-09-23 00:50:41', '2021-09-23 00:50:41', NULL),
(7, 'maharani@gmail.com', 'pembimbing3', 'bxs-user-circle.png', '$2y$10$ipGGuSqgoCdBBZ5tjYm.VOhlIJZv081XWaDosktbGMCJ.aMfVB7My', NULL, NULL, NULL, '701d75c50f67b91e1d8254088e899da5', NULL, NULL, 1, 0, '2021-09-23 00:52:41', '2021-09-23 00:52:41', NULL),
(8, 'andhi@gmail.com', 'guru2', 'bxs-user-circle.png', '$2y$10$PUMotJ3q1iqZGu2zwUqu9.HEHoVL1HsWWfBfxUTxB.PNlZoN.2zam', NULL, NULL, NULL, '4eaeeb770ddba568defd15149bda303c', NULL, NULL, 1, 0, '2021-09-23 00:55:20', '2021-09-23 00:55:20', NULL),
(9, 'reni@gmail.com', 'guru3', 'bxs-user-circle.png', '$2y$10$OBJ2CVw7WLUo2aW1U9ioquWahTkOqSMYLhaxnaFcXE1ZI3cCSQlRu', NULL, NULL, NULL, 'ba87441ea26e90037cdae9d43e4d768c', NULL, NULL, 1, 0, '2021-09-23 00:55:58', '2021-09-23 00:55:58', NULL),
(10, 'alif@gmail.com', 'pelajar4', 'bxs-user-circle.png', '$2y$10$RX/BlzogSTnFkf4FSCWKLOtcyJjRcNgIC0F2mxfBkCb7Y2uNiT5P2', NULL, NULL, NULL, '1b32adf08698e4f9845bc693b326c3c8', NULL, NULL, 1, 0, '2021-09-23 00:58:22', '2021-09-23 00:58:22', NULL),
(11, 'dhendy@gmail.com', 'pelajar5', 'bxs-user-circle.png', '$2y$10$CjwHpWub3S8M0ctttOqDcONCfhzjt66lMUE4xpEfNgHpmeZ/w/edS', NULL, NULL, NULL, 'a2ba9478845c1ee7d401ff994f52233f', NULL, NULL, 1, 0, '2021-09-23 01:00:04', '2021-09-23 01:00:04', NULL),
(12, 'sheza@gmail.com', 'pelajar6', 'bxs-user-circle.png', '$2y$10$DkBncOckyndIhks27vgAoeAbYQfYBCsibagDytgkqvi2.oBMe5Ek.', NULL, NULL, NULL, '20709932181ed71a18a8fbb56aa1f011', NULL, NULL, 1, 0, '2021-09-23 01:05:31', '2021-09-23 01:05:31', NULL),
(23, 'razita@gmail.com', 'pelajar8', 'bxs-user-circle.png', '$2y$10$ZQNWFh0IXe1im8QhgBbqMOEDdncTxeItDsKRKwLyRM58h4dAlUzJ.', NULL, NULL, NULL, '43213ad4bc8b754861b9eea8e819f626', NULL, NULL, 1, 0, '2021-09-23 21:56:51', '2021-09-23 21:56:51', NULL),
(24, 'admin@admin.com', 'admin', 'bxs-user-circle.png', '$2y$10$xE0uMCADJCQlOsx2pIvFbukOfo5.qwdaeS/Vu7BZAkZ.I9PmphKJW', NULL, NULL, NULL, 'c87ebdb074208eb61b1d3285e1feda01', NULL, NULL, 1, 0, '2021-09-27 02:29:47', '2021-09-27 02:29:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `guru_groups`
--
ALTER TABLE `guru_groups`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `guru_id` (`guru_id`);

--
-- Indeks untuk tabel `guru_sekolah_groups`
--
ALTER TABLE `guru_sekolah_groups`
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelajar_id` (`pelajar_id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_pembimbing` (`id_pembimbing`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pembimbing_groups`
--
ALTER TABLE `pembimbing_groups`
  ADD KEY `pelajar_id` (`pelajar_id`),
  ADD KEY `pembimbing_id` (`pembimbing_id`);

--
-- Indeks untuk tabel `pembimbing_perusahaan_groups`
--
ALTER TABLE `pembimbing_perusahaan_groups`
  ADD KEY `pembimbing_id` (`pembimbing_id`),
  ADD KEY `perusahaan_id` (`perusahaan_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan_groups`
--
ALTER TABLE `perusahaan_groups`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `perusahaan_id` (`perusahaan_id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah_groups`
--
ALTER TABLE `sekolah_groups`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru_groups`
--
ALTER TABLE `guru_groups`
  ADD CONSTRAINT `guru_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_groups_ibfk_2` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru_sekolah_groups`
--
ALTER TABLE `guru_sekolah_groups`
  ADD CONSTRAINT `guru_sekolah_groups_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_sekolah_groups_ibfk_2` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `kelahiran_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`pelajar_id`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_ibfk_3` FOREIGN KEY (`id_pembimbing`) REFERENCES `pembimbing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD CONSTRAINT `pembimbing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembimbing_groups`
--
ALTER TABLE `pembimbing_groups`
  ADD CONSTRAINT `pembimbing_groups_ibfk_1` FOREIGN KEY (`pelajar_id`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembimbing_groups_ibfk_2` FOREIGN KEY (`pembimbing_id`) REFERENCES `pembimbing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembimbing_perusahaan_groups`
--
ALTER TABLE `pembimbing_perusahaan_groups`
  ADD CONSTRAINT `pembimbing_perusahaan_groups_ibfk_1` FOREIGN KEY (`pembimbing_id`) REFERENCES `pembimbing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembimbing_perusahaan_groups_ibfk_2` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `perusahaan_groups`
--
ALTER TABLE `perusahaan_groups`
  ADD CONSTRAINT `perusahaan_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perusahaan_groups_ibfk_2` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `sekolah_groups`
--
ALTER TABLE `sekolah_groups`
  ADD CONSTRAINT `sekolah_groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sekolah_groups_ibfk_2` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
