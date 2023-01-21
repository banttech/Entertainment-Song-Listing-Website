-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 08:58 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u527134112_songcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `image`, `about`, `created_at`, `update_at`) VALUES
(6, 'Ed Sheeran', 'ed-sheeran', '1673016186.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam dj', '2023-01-06 14:43:06', '2023-01-03 12:47:26'),
(7, 'Hillsong Worship', 'hillsong-worship', '1672911936.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 09:45:36', '2023-01-03 12:50:49'),
(8, 'Paul McCartney', 'paul-mccartney', '1672911929.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 09:45:29', '2023-01-04 08:10:25'),
(9, 'Mary McKee', 'mary-mckee', '1672911944.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 09:45:44', '2023-01-04 08:11:32'),
(10, 'Michael W. Smith', 'michael-w.-smith', '1672911951.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 09:45:51', '2023-01-04 08:11:52'),
(13, 'Misc Praise Song Author', 'misc-praise-song-author', '1673088407.jpg', 'Misc Praise Song Author', '2023-01-07 10:46:47', '2023-01-07 10:46:47'),
(14, 'Jun Gamboa', 'jun-gamboa', '1673670140.jpg', 'Jun Gamboa - Praise song author, Cebuano praise song author', '2023-01-14 04:22:20', '2023-01-14 04:22:20'),
(15, 'Kolariah Band', 'kolariah-band', '1673670822.jpg', 'Kolariah Band - Praise songs writer, Cebuano praise songs author', '2023-01-14 04:33:42', '2023-01-14 04:33:42'),
(16, 'Augmented 7th', 'augmented-7th', '1673671391.jpg', 'Augmented 7th - praise song author, cebuano praise song writer', '2023-01-14 04:43:11', '2023-01-14 04:43:11'),
(17, 'Musikatha', 'musikatha', '1673672716.jpg', 'Musikatha - Praise song author band, cebuano praise song writer', '2023-01-14 05:05:16', '2023-01-14 05:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` int(11) NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `year_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 6, 'Audi', '2022-12-09 12:26:57', '2022-12-09 12:26:57'),
(2, 7, 'BMW', '2022-12-09 12:27:08', '2022-12-09 12:27:08'),
(3, 10, 'Honda', '2022-12-09 12:27:16', '2022-12-09 12:27:16'),
(4, 10, 'Civic', '2022-12-09 12:27:21', '2022-12-09 12:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `make_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `make_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 7, 'ILX', '2022-12-09 12:51:06', '2022-12-09 12:51:06'),
(2, 6, 'MDX', '2022-12-09 13:01:45', '2022-12-09 13:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `music_categories`
--

CREATE TABLE `music_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_categories`
--

INSERT INTO `music_categories` (`id`, `name`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Rhythm and Blues Music.', 'rhythm-and-blues-music.', '1673016201.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-06 14:43:21', '2023-01-05 11:58:41'),
(3, 'Rock and Roll Music', 'rock-and-roll-music', '1672921465.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 12:24:25', '2023-01-05 12:24:25'),
(4, 'Country Music', 'country-music', '1672921496.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 12:24:56', '2023-01-05 12:24:56'),
(5, 'Soul Music', 'soul-music', '1672921519.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an', '2023-01-05 12:25:19', '2023-01-05 12:25:19'),
(6, 'Dance Music', 'dance-music', '1672921536.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when', '2023-01-05 16:11:21', '2023-01-05 12:25:36'),
(9, 'Misc Praise Songs', 'misc-praise-songs', '1673088361.jpg', 'Misc Praise Songs', '2023-01-07 10:46:01', '2023-01-07 10:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `user_id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(3, 2, 'playlist 2', 'playlist-2', '2022-12-19 15:19:08', '2022-12-24 06:30:47'),
(4, 2, 'Playlist 1', 'Playlist-1', '2022-12-19 15:52:25', NULL),
(10, 5, 'Playlist 3', 'Playlist-3', '2022-12-20 10:36:56', NULL),
(13, 5, 'playlist 2', 'playlist-2', '2022-12-20 14:05:12', '2022-12-20 14:05:37'),
(14, 5, 'playlist-2', 'playlist-2', '2022-12-20 14:18:00', NULL),
(15, 2, 'test12', 'test12', '2022-12-21 01:07:54', NULL),
(16, 5, 'playlist 4', 'playlist-4', '2022-12-21 08:44:55', NULL),
(18, 1, 'playlist 2', 'playlist-2', '2022-12-21 11:45:43', NULL),
(20, 8, 'Playist 1', 'playist-1', '2023-01-09 14:58:39', '2023-01-19 12:38:56'),
(21, 1, 'Jan 15 2023', 'jan-15-2023', '2023-01-14 05:07:21', NULL),
(22, 11, 'test', 'test', '2023-01-19 01:24:24', NULL),
(24, 9, 'test', 'test', '2023-01-19 11:40:05', NULL),
(25, 9, 'test1', 'test1', '2023-01-19 11:41:19', '2023-01-19 12:12:02'),
(26, 10, 'test', 'test', '2023-01-19 12:34:27', '2023-01-19 12:34:50'),
(27, 9, 'mytest', 'mytest', '2023-01-19 13:02:15', NULL),
(28, 1, 'jan 19', 'jan-19', '2023-01-19 13:04:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `playlist_details`
--

CREATE TABLE `playlist_details` (
  `id` int(11) NOT NULL,
  `playlist_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song_order` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlist_details`
--

INSERT INTO `playlist_details` (`id`, `playlist_id`, `song_id`, `song_order`, `created_at`) VALUES
(3, '4', '1', 0, '2022-12-19 15:52:25'),
(29, '10', '5', 0, '2022-12-20 10:36:56'),
(30, '10', '4', 0, '2022-12-20 10:36:56'),
(31, '10', '3', 0, '2022-12-20 10:36:56'),
(32, '10', '1', 0, '2022-12-20 10:36:56'),
(65, '13', '5', 0, '2022-12-20 14:05:37'),
(66, '13', '4', 0, '2022-12-20 14:05:37'),
(67, '14', '5', 0, '2022-12-20 14:18:00'),
(68, '14', '4', 0, '2022-12-20 14:18:00'),
(69, '15', '4', 0, '2022-12-21 01:07:54'),
(70, '15', '1', 0, '2022-12-21 01:07:54'),
(71, '16', '5', 0, '2022-12-21 08:44:55'),
(72, '16', '4', 0, '2022-12-21 08:44:55'),
(73, '16', '3', 0, '2022-12-21 08:44:55'),
(74, '16', '1', 0, '2022-12-21 08:44:55'),
(78, '18', '5', 0, '2022-12-21 11:45:43'),
(79, '18', '4', 0, '2022-12-21 11:45:43'),
(80, '18', '3', 0, '2022-12-21 11:45:43'),
(81, '18', '1', 0, '2022-12-21 11:45:43'),
(86, '3', '8', 0, '2022-12-24 06:30:47'),
(87, '3', '7', 0, '2022-12-24 06:30:47'),
(88, '3', '6', 0, '2022-12-24 06:30:47'),
(89, '3', '5', 0, '2022-12-24 06:30:47'),
(90, '3', '4', 0, '2022-12-24 06:30:47'),
(91, '3', '3', 0, '2022-12-24 06:30:47'),
(92, '3', '1', 0, '2022-12-24 06:30:47'),
(104, '21', '29', 0, '2023-01-14 05:07:21'),
(105, '21', '28', 0, '2023-01-14 05:07:21'),
(106, '21', '27', 0, '2023-01-14 05:07:21'),
(107, '21', '26', 0, '2023-01-14 05:07:21'),
(108, '21', '25', 0, '2023-01-14 05:07:21'),
(109, '21', '24', 0, '2023-01-14 05:07:21'),
(110, '21', '23', 0, '2023-01-14 05:07:21'),
(111, '22', '29', 0, '2023-01-19 01:24:24'),
(112, '22', '26', 0, '2023-01-19 01:24:24'),
(113, '22', '25', 0, '2023-01-19 01:24:24'),
(114, '22', '10', 0, '2023-01-19 01:24:24'),
(115, '22', '5', 0, '2023-01-19 01:24:24'),
(132, '24', '29', 1, '2023-01-19 11:40:05'),
(133, '24', '26', 2, '2023-01-19 11:40:05'),
(134, '24', '27', 3, '2023-01-19 11:40:05'),
(140, '25', '23', 1, '2023-01-19 12:12:02'),
(141, '25', '24', 2, '2023-01-19 12:12:02'),
(142, '25', '11', 3, '2023-01-19 12:12:02'),
(143, '25', '26', 4, '2023-01-19 12:12:02'),
(146, '26', '23', 1, '2023-01-19 12:34:50'),
(147, '26', '26', 2, '2023-01-19 12:34:50'),
(148, '26', '25', 3, '2023-01-19 12:34:50'),
(149, '26', '27', 4, '2023-01-19 12:34:50'),
(153, '20', '8', 1, '2023-01-19 12:38:56'),
(154, '20', '11', 2, '2023-01-19 12:38:56'),
(155, '20', '22', 3, '2023-01-19 12:38:56'),
(156, '20', '23', 4, '2023-01-19 12:38:56'),
(157, '27', '7', 1, '2023-01-19 13:02:15'),
(158, '27', '26', 2, '2023-01-19 13:02:15'),
(159, '27', '10', 3, '2023-01-19 13:02:15'),
(160, '27', '29', 4, '2023-01-19 13:02:15'),
(161, '28', '1', 1, '2023-01-19 13:04:46'),
(162, '28', '7', 2, '2023-01-19 13:04:46'),
(163, '28', '25', 3, '2023-01-19 13:04:46'),
(164, '28', '10', 4, '2023-01-19 13:04:46'),
(165, '28', '3', 5, '2023-01-19 13:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_chords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `author`, `lyrics`, `slug`, `author_slug`, `family_chords`, `image`, `seo_title`, `seo_description`, `created_at`, `user_id`) VALUES
(1, 'Thinking Out Loud', '9,10', 'When your legs don\'t work like they used to before\r\nAnd I can\'t sweep you off of your feet\r\nWill your mouth still remember the taste of my love\r\nWill your eyes still smile from your cheeks\r\nAnd darling I will be loving you \'til we\'re 70\r\nAnd baby my heart could still fall as hard at 23\r\nAnd I\'m thinking \'bout how people fall in love in mysterious ways\r\nMaybe just the touch of a hand\r\nOh me I fall in love with you every single day\r\nAnd I just wanna tell you I am\r\nSo honey now\r\nTake me into your loving arms\r\nKiss me under the light of a thousand stars\r\nPlace your head on my beating heart\r\nI\'m thinking out loud\r\nMaybe we found love right where we are\r\nWhen my hair\'s all but gone and my memory fades\r\nAnd the crowds don\'t remember my name\r\nWhen my hands don\'t play the strings the same way, mm\r\nI know you will still love me the same\r\n\'Cause honey your soul can never grow old, it\'s evergreen\r\nBaby your smile\'s forever in my mind and memory\r\nI\'m thinking \'bout how people fall in love in mysterious ways\r\nMaybe it\'s all part of a plan\r\nI\'ll just keep on making the same mistakes\r\nHoping that you\'ll understand\r\nBut baby now\r\nTake me into your loving arms\r\nKiss me under the light of a thousand stars\r\nPlace your head on my beating heart\r\nI\'m thinking out loud\r\nThat maybe we found love right where we are, oh\r\nSo baby now\r\nTake me into your loving arms\r\nKiss me under the light of a thousand stars\r\nOh darling, place your head on my beating heart\r\nI\'m thinking out loud\r\nThat maybe we found love right where we are\r\nOh baby, we found love right where we are (maybe)\r\nAnd we found love right where we are', 'thinking-out-loud', '', 'Gb', '1673706762.jpg', 'test', 'test', '2022-12-17 07:35:13', 1),
(3, 'Blackbird', '7,8', 'Blackbird singing in the dead of night\r\nTake these broken wings and learn to fly\r\nAll your life\r\nYou were only waiting for this moment to arise\r\nBlackbird singing in the dead of night\r\nTake these sunken eyes and learn to see\r\nAll your life\r\nYou were only waiting for this moment to be free\r\nBlackbird, fly\r\nBlackbird, fly\r\nInto the light of the dark black night\r\nBlackbird, fly\r\nBlackbird, fly\r\nInto the light of the dark black night\r\nBlackbird singing in the dead of night\r\nTake these broken wings and learn to fly\r\nAll your life\r\nYou were only waiting for this moment to arise\r\nYou were only waiting for this moment to arise\r\nYou were only waiting for this moment to arise', 'blackbird', '', 'Bb', '1673706772.jpg', 'test', 'test', '2022-12-19 06:30:17', 1),
(4, 'Christ is my reward', '6', 'Am     F     C     G\r\n                                    \r\n                                     \r\n                                    \r\n[Verse 1]\r\n                                    \r\nAm             F                    C      G\r\nChrist is my reward and all of my devotion\r\n            Am                 F\r\nNow there\'s nothing in this world\r\n                   C     G\r\nThat could ever satisfy\r\n                                    \r\n[Pre-Chorus]\r\n                  F        G         Am\r\nThrough every trial, my soul will sing\r\n      C       F         Am       G\r\nNo turning back, I\'ve been set free', 'christ-is-my-reward', '', 'C', '1673706780.jpg', 'test', 'test', '2022-12-20 02:40:47', 1),
(5, 'Christ is my rewards', '8,9,10', 'Am     F     C     G\r\n                                    \r\n                                     \r\n                                    \r\n[Verse 1]\r\n                                    \r\nAm             F                    C      G\r\nChrist is my reward and all of my devotion\r\n            Am                 F\r\nNow there\'s nothing in this world\r\n                   C     G\r\nThat could ever satisfy\r\n                                    \r\n[Pre-Chorus]\r\n                  F        G         Am\r\nThrough every trial, my soul will sing\r\n      C       F         Am       G\r\nNo turning back, I\'ve been set free', 'christ-is-my-rewards', '', 'C', '1673706789.jpg', 'test', 'test', '2022-12-20 07:37:44', 1),
(7, 'We’re together', '6,7,8,9', 'D                                    \r\nWe’re together again just praising\r\n  G\r\nthe Lord\r\n                  A7           D\r\nWe’re together again in one accord\r\n           D                  D\r\nSomething good is going to happen\r\n           G\r\nSomething good is in store,\r\n                 A7                  \r\nWe’re together again just praising\r\n   D\r\nthe Lord', 'we’re-together', '', 'D', '1673706800.jpg', 'test', 'test', '2022-12-23 12:32:50', 1),
(8, 'Bless the Lord', '6,7', '[Chorus 1]\r\n           C          G      D    Em     C            G    D\r\n Bless the Lord, O my soul , O my soul , Worship His holy name\r\n\r\n           C       Em     C D  Em          C             D    G\r\n Sing like never before , 0 my soul , I\'ll worship Your holy name\r\n\r\n [Verse 1]\r\n     C         G          D       Em\r\n The sun comes up, it\'s a new day dawning\r\n\r\n C             G           D    Em\r\n  It\'s time to sing Your song again\r\n\r\n     C        G             D           Em (Playout)\r\n Whatever may pass, and whatever lies before me\r\n\r\n C          G                D       G (Playout)\r\n  Let me be singing when the evening comes', 'bless-the-lord', '', 'C', '1673706810.jpg', 'test', 'test', '2022-12-24 06:29:04', 1),
(10, 'Above All', '7', '[Verse 1]\r\n\r\nC           F       G         C\r\nAbove all powers, Above all Kings\r\n\r\n            F          G            C\r\nAbove all nature, and all created things\r\n\r\n            Am         G               F  C\r\nAbove all wisdom, and all the ways of man \r\n\r\nDm              F                G     C\r\nYou were here before the world began\r\n\r\n \r\n\r\n[Verse 2]\r\n\r\n          F        G          C\r\nAbove all kingdoms, Above all thrones\r\n\r\n          F            G              C\r\nAbove all wonders this world has ever known\r\n\r\n          Am          G               F   C\r\nAbove all wealth and treasures of the earth\r\n\r\nDm                F                   E7 E\r\nThere\'s no way to measure what you\'re worth\r\n\r\n \r\n\r\n[Chorus]\r\n\r\nC     Dm   G             C\r\nCrucified, laid behind a stone\r\n\r\nC            Dm     G          C\r\nYou lived to die, rejected and alone\r\n\r\n        Am   G               F    C\r\nLike a rose, trampled on the ground\r\n\r\n             Dm    Am             F  G\r\nYou took the fall, and thought of me \r\n\r\n       C\r\nAbove all\r\n\r\n \r\n\r\n[Verse 3]\r\n\r\nC           F       G         C\r\nAbove all powers, Above all Kings\r\n\r\n            F          G            C\r\nAbove all nature, and all created things\r\n\r\n            Am         G               F  C\r\nAbove all wisdom, and all the ways of man \r\n\r\nDm              F                G     C\r\nYou were here before the world began\r\n\r\n \r\n\r\n[Verse 4]\r\n\r\n          F        G          C\r\nAbove all kingdoms, Above all thrones\r\n\r\n          F            G              C\r\nAbove all wonders this world has ever known\r\n\r\n          Am          G               F   C\r\nAbove all wealth and treasures of the earth\r\n\r\nDm                F                   E7 E\r\nThere\'s no way to measure what you\'re worth\r\n\r\n \r\n\r\n[Chorus]\r\n\r\nC     Dm   G             C\r\nCrucified, laid behind a stone\r\n\r\nC            Dm     G          C\r\nYou lived to die, rejected and alone\r\n\r\n        Am   G               F    C\r\nLike a rose, trampled on the ground\r\n\r\n             Dm    Am             F  G\r\nYou took the fall, and thought of me \r\n\r\n       C\r\nAbove all \r\n\r\n \r\n\r\nC     Dm   G             C\r\nCrucified, laid behind a stone\r\n\r\nC            Dm     G          C\r\nYou lived to die, rejected and alone\r\n\r\n        Am   G               F    C\r\nLike a rose, trampled on the ground\r\n\r\n             Dm    Am             F  G\r\nYou took the fall, and thought of me \r\n\r\n       C\r\nAbove all \r\n\r\n \r\n\r\n[Coda]\r\n\r\n        Am   G               F    C\r\nLike a rose, trampled on the ground\r\n\r\n             Dm    Am             F  G\r\nYou took the fall, and thought of me \r\n\r\n       C\r\nAbove all', 'above-all', '', 'C', '1673706137.jpg', 'test', 'test', '2022-12-28 15:12:49', 1),
(11, 'Like You Do', '6,7', 'hello this song is for testing', 'like-you-do', '', 'D#', '1673706148.jpg', 'test', 'test', '2023-01-04 07:42:38', 1),
(22, 'Ikaw Ang Dios Sa Gugma', NULL, '-\r\n-\r\n-\r\nIkaw Ang Dios Sa Gugma Lyrics\r\n\r\nJ.B.S FCCF Napolan, Pagadian City\r\n\r\n[Intro]\r\nC  Em7  Am  C  F  C  Dsus4  Dm7  F\r\n\r\n[Verse 1]\r\n          C        Em\r\nIkaw and Dios sa gugma\r\n   Am\r\nug Maluluy-on ka\r\n   F               Dm\r\nsa Matag Karon ug Unya\r\n    Gsus4    G\r\nMatinud-anon ka\r\n           C     Em\r\nAng Ngalan mo Takos\r\n    Am         Am\r\nDaygon ug Mahalon\r\n   F             Dm      Gsus4    G\r\nSa Tanan nga Panahon Himaya------on\r\n\r\n[Verse 1]\r\n\r\n          C        Em\r\nIkaw and Dios sa gugma\r\n   Am         C\r\nug Maluluy-on ka\r\n   F               Dm\r\nsa Matag Karon ug Unya\r\n    Gsus4    G\r\nMatinud-anon ka\r\n           C     Em\r\nAng Ngalan mo Takos\r\n    Am         Am\r\nDaygon ug Mahalon\r\n   F             Dm     Gsus4  G\r\nSa Tanan nga Panahon Himayaon\r\n\r\n[Chorus]\r\n          F         G\r\nIkaw ang Dios sa Gugma\r\n  Em           Am\r\nPuno ka sa Grasya\r\n     Dm          Gsus4 G\r\nSa Tanan nga mga Saad Mo\r\nCm7         C\r\nMatinumanon ka\r\n         Fm7\r\nNing Kinabuho ko\r\nE7        Am    F#dim\r\nIhalad Kanimo..\r\n   Dm7\r\nSimbahon Ka\r\n   C\r\nYukboan ka\r\n F\r\nIkaw ra Gyud\r\n Gsus4        C \r\nWala Nay Lain pa\r\n\r\nF Dm7 Gsus4\r\n\r\n[Verse 1]\r\n           C       Em7\r\nIkaw and Dios sa gugma\r\n    Am        Am7   \r\nug Maluluy-on ka\r\n      F             Dm7\r\nsa Matag Karon ug Unya\r\n   Gsus4      G\r\nMatinud-anon ka\r\n           C    Em7\r\nAng Ngalan mo Takos\r\n     Am        Am7\r\nDaygon ug Mahalon\r\n    F                Dm7   Gsus4  G\r\nSa Tanan nga Panahon Himayaon \r\n\r\n[Chorus]\r\n          F         G7\r\nIkaw ang Dios sa Gugma\r\n  Em7          Am7\r\nPuno ka sa Grasya\r\n     Dm7            Gsus4 G7\r\nSa Tanan nga mga Saad Mo\r\nCm7         C7\r\nMatinumanon ka\r\n         Fm7 \r\nNing Kinabuhi ko\r\nE7         Am7  F#dim\r\nIhalad Kanimo----\r\n        Dm7\r\nSimbahon Ka\r\n        C\r\nYukboan ka\r\n     F\r\nIkaw ra Gyud\r\n     Gsus4     C\r\nWala Nay Lain pa\r\n\r\n[Chorus]\r\n\r\nGm7 F#dim Fm7     G7\r\nIkaw ang Dios sa Gugma\r\n  Em7          Am7\r\nPuno ka sa Grasya\r\n     Dm7         Gsus4  G\r\nSa Tanan nga mga Saad Mo\r\n    Cm7      C\r\nMatinumanon ka\r\n          Fm7 \r\nNing Kinabuhi ko\r\nE7         Am7  F#dim\r\nIhalad Kanimo-------\r\n   Dm7   \r\nSimbahon Ka\r\n    C\r\nYukboan ka\r\n F\r\nIkaw ra Gyud\r\n    Gsus4  E7 Am7  Am\r\nWala Nay Lain pa  ahhh\r\n\r\n[Outro]\r\n\r\n   Fm7\r\nSimbahon Ka\r\n   C\r\nYukboan ka\r\n Dm\r\nIkaw ra Gyud\r\n  Gsus4  G    C\r\nWala Nay Lain pa\r\n\r\nC Dm7 G7 C', 'ikaw-ang-dios-sa-gugma', NULL, 'C', '1673706168.jpg', 'test', 'test', '2023-01-07 10:46:58', 1),
(23, 'Ayaw Pag Luya Luya Chords + Lyrics + Transpose', NULL, '-\r\nAyaw Pag Luya Luya Chords + Lyrics + Transpose\r\n\r\n[Verse]\r\nC\r\nAyaw pagluya-luya, sa pagdayeg kaniya\r\n                                G\r\nKay kon magluya-luya, maalkansi ka\r\nC\r\nKon duna kay problema, ayaw huna-hunaa\r\n                                  G\r\nPulihi sa pagdayeg sa presensya niya\r\n\r\n[Chorus]\r\nF         G         Em          Am\r\nItaas ang kamot, ibayaw sa pagdayeg kaniya\r\nF        G          Em      Am\r\nLingi sa wala ug lingi sa tuo\r\nDm        G          C\r\nPahiyumi ang igsoon mo.\r\n\r\n[Chorus]\r\n\r\nF         G         Em          Am\r\nItaas ang kamot, ibayaw sa pagdayeg kaniya\r\nF        G          Em      Am\r\nLingi sa wala ug lingi sa tuo\r\nDm        G          C\r\nPahiyumi ang igsoon mo.', 'ayaw-pag-luya-luya-chords-+-lyrics-+-transpose', NULL, 'C', '1673706180.jpg', 'test', 'test', '2023-01-14 04:18:45', 1),
(24, 'Gikinahanglan Ka', NULL, '-\r\nGikinahanglan Ka + Chords + Lyrics + Transpose\r\n\r\n[Verse] \r\n C   G/B   Am\r\n Gimingaw ako \r\n Dm            G/B\r\n Sa presensiya Mo\r\n   Em          Am\r\n Balika pag tandug \r\n     Dm      C     G/B\r\n Ang kasing-kasing ko\r\n\r\n[Verse] \r\n C   G/B   Am\r\n Gimingaw ako \r\n Dm            G/B\r\n Sa presensiya Mo\r\n   Em          Am\r\n Balika pag tandug \r\n     Dm      C     G/B\r\n Ang kasing-kasing ko\r\n\r\n[Chorus]\r\n Em      F           G/B\r\n Kay kanimo mabati ko \r\n            Em           Am\r\n Ang tinuod nga katagbawan\r\n        Dm        Em\r\n Tinuod na kalipay \r\n     F      F#    G\r\n Nga gipangadoy ko\r\n Em    F             G/B\r\n Kay kanimo mabati ko \r\n             Em            Am\r\n Ang matamis nga paghigugma\r\n     Dm    G7sus4\r\n O Hesus gikinahanglan Ka\r\n\r\n[Verse] \r\n C   G/B   Am\r\n Gimingaw ako \r\n Dm            G/B\r\n Sa presensiya Mo\r\n   Em          Am\r\n Balika pag tandug \r\n     Dm      C     G/B\r\n Ang kasing-kasing ko\r\n\r\n[Chorus]\r\n Em      F           G/B\r\n Kay kanimo mabati ko \r\n            Em           Am\r\n Ang tinuod nga katagbawan\r\n        Dm        Em\r\n Tinuod na kalipay \r\n     F      F#    G\r\n Nga gipangadoy ko\r\n Em    F             G/B\r\n Kay kanimo mabati ko \r\n             Em            Am\r\n Ang matamis nga paghigugma\r\n     Dm    G7sus4\r\n O Hesus gikinahanglan Ka', 'gikinahanglan-ka', NULL, 'C', '1673706190.jpg', 'test', 'test', '2023-01-14 04:25:29', 1),
(25, 'Daygon Ka', NULL, '-\r\nDaygon Ka by Kolariah Band + Chords + Lyrics + Transpose\r\n[Intro]\r\nG\r\nG C Em D (x2)\r\n\r\n[Verse]\r\n\r\nG\r\n    Karon ang adlaw sa dios\r\n          C\r\nKaron ang adlaw sa pagdayeg ug pagsimba\r\n Em                  D\r\nIbayaw ang atong kamot\r\n  G\r\nMolukso musayaw\r\n  C\r\nMusinggit ug maghugyaw\r\n  Em               D\r\nBalaan dalaygon nga dios\r\n\r\n          G\r\nKaron ang adlaw sa dios\r\n          C\r\nKaron ang adlaw sa pagdayeg ug pagsimba\r\n Em                  D\r\nIbayaw ang atong kamot\r\n  G\r\nMolukso musayaw\r\n  C\r\nMusinggit ug maghugyaw\r\n  Em               D\r\nBalaan dalaygon nga dios\r\n\r\n[Chorus]\r\n       C    D\r\nDaygon ko Ikaw\r\n  Bm                Em\r\nO dios nga labing gamhanan\r\n        C     D           G\r\nMatuboy ka sa among pagsimba\r\n  C               D\r\nO dios nga way kausaban\r\n    Bm            Em\r\nHangtud sa kahangturan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n\r\n[Verse]\r\n          G\r\nKaron ang adlaw sa dios\r\n          C\r\nKaron ang adlaw sa pagdayeg ug pagsimba\r\n Em                  D\r\nIbayaw ang atong kamot\r\n  G\r\nMolukso musayaw\r\n  C\r\nMusinggit ug maghugyaw\r\n  Em               D\r\nBalaan dalaygon nga dios\r\n\r\n[Chorus]\r\n       C    D\r\nDaygon ka Ikaw\r\n  Bm                Em\r\nO dios nga labing gamhanan\r\n        C     D           G\r\nMatuboy ka sa among pagsimba\r\n  C               D\r\nO dios nga way kausaban\r\n    Bm            Em\r\nHangtud sa kahangturan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n\r\n[Bridge]\r\n\r\nC D Bm Em C D G\r\nC D Bm Em C D G\r\n\r\n[Chorus]\r\n       C    D\r\nDaygon ka Ikaw\r\n  Bm                Em\r\nO dios nga labing gamhanan\r\n        C     D           G\r\nMatuboy ka sa among pagsimba\r\n  C               D\r\nO dios nga way kausaban\r\n    Bm            Em\r\nHangtud sa kahangturan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n\r\n[Outro]\r\n  C               D\r\nO dios nga way kausaban\r\n    Bm            Em\r\nHangtud sa kahangturan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n       C\r\nDaygon ka Ikaw\r\n   D          G\r\nSa wa\'y katapusan\r\n\r\nG C Em D\r\nG C Em D', 'daygon-ka', NULL, 'G', '1673706200.jpg', 'test', 'test', '2023-01-14 04:34:34', 1),
(26, 'Ikaw Ra', NULL, '-\r\nIkaw Ra by Augmented 7th + Chords + Lyrics + Transpose\r\n\r\nIntro]\r\nC D Bm Em C D G D\r\n\r\n[Verse]\r\n\r\nG             Em\r\nDaygon ka ug awitan ka\r\n    C            D\r\nOh Dios nga gamhanan\r\nG              Em\r\nSimbahon ka ug bayawon ka\r\n    C            D\r\nHangtud sa kahangturan\r\n\r\n[Chorus]\r\n\r\nC         D           Bm      B\r\nIkaw ang angayan nga among pagaludhan\r\nC         D    G               Dm\r\nIkaw ang Dios hangtud sa kahangturan\r\nC         D         Bm        Em\r\nWalan ay lain pang among pasalamatan\r\n    Am       D       G\r\nOh Dios ikaw ra ikaw ra\r\n\r\n[Verse]\r\n\r\nG             Em\r\nDaygon ka ug awitan ka\r\n    C            D\r\nOh Dios nga gamhanan\r\nG              Em\r\nSimbahon ka ug bayawon ka\r\n    C            D\r\nHangtud sa kahangturan\r\n\r\n[Chorus]\r\n\r\nC         D           Bm      B\r\nIkaw ang angayan nga among pagaludhan\r\nC         D    G               Dm\r\nIkaw ang Dios hangtud sa kahangturan\r\nC         D         Bm        Em\r\nWalan ay lain pang among pasalamatan\r\n    Am       D       G\r\nOh Dios ikaw ra ikaw ra\r\n\r\n[Chorus]\r\n\r\nC         D           Bm      B\r\nIkaw ang angayan nga among pagaludhan\r\nC         D    G               Dm\r\nIkaw ang Dios hangtud sa kahangturan\r\nC         D         Bm        Em\r\nWalan ay lain pang among pasalamatan\r\n    Am       D       G\r\nOh Dios ikaw ra ikaw ra\r\n\r\n[Outro]\r\n\r\n    Am       D       G\r\nOh Dios ikaw ra ikaw ra\r\n    Am       D       G\r\nOh Dios ikaw ra ikaw ra', 'ikaw-ra', NULL, 'G', '1673708561.jpg', 'test', 'test', '2023-01-14 04:41:51', 1),
(27, 'Mahigugmaon Ka', NULL, '-\r\nMahigugmaon Ka + Chords + Lyrics + Transpose\r\n\r\n[Intro]\r\n     C  F \r\n     C  G  F \r\n\r\n[Verse]\r\n\r\n  C               G        Am\r\nMahigugmaon ka sa kinabuhi ko\r\n  F          Dm\r\nWala gayud makalabaw\r\n    G\r\nSa mga pagpangga mo\r\n      Em \r\nAng tanang gihatag mo\r\n     Am           \r\nPara sa kaluwasan ko\r\n    F                Dm\r\nMaloluy-on ug mapasaylo-on ka\r\n      F        G\r\nWalay sama kanimo\r\n\r\n[Chorus]\r\n\r\n          C G\r\nAng gugma mo \r\n                F\r\nTaas pa sa kalangitan\r\n          C G\r\nAng Gugma mo \r\n            F\r\nlawom pa sa kadagatan\r\n          C G\r\nAng gugma mo\r\n            F\r\nkusog pa sa kahanginan\r\n    Dm         Em     F\r\nAng gugma mo kanako O Dios\r\n  G\r\nKahibulongan', 'mahigugmaon-ka', NULL, 'C', '1673706222.jpg', 'test', 'test', '2023-01-14 04:57:41', 1),
(28, 'Salamat Oh Hesus, Ikaw Lang Oh Dios', NULL, '-\r\nSalamat Oh Hesus, Ikaw Lang Oh Dios + Chords + Lyrics + Transpose\r\n\r\n[Intro]\r\n\r\nC  Am  Dm  G Dm  G  C\r\n\r\n[Verse]\r\n\r\n     C        Am    Dm           G\r\nIkaw lang, Oh Dios, ang gihandom ko\r\n     Dm    G  C                 E7\r\nIkaw lang, Oh Dios, ang paglaum ko\r\n     Am      E/G#        F\r\nKinabuhi ko, Ikaw Ginoong Dios\r\n       C    Am   Dm            C  Dm G\r\nIkang ang tanan, Ikaw lamang Hesus\r\n\r\n[Verse]\r\n\r\n     C        Am    Dm           G\r\nIkaw lang, Oh Dios, ang gihandom ko\r\n     Dm    G  C                 E7\r\nIkaw lang, Oh Dios, ang paglaum ko\r\n     Am      E/G#        F\r\nKinabuhi ko, Ikaw Ginoong Dios\r\n       C    Am   Dm            C  \r\nIkang ang tanan, Ikaw lamang Hesus\r\n\r\n[Chorus]\r\n\r\n C7          F       G/F        Em\r\nSalamat Oh Hesus, sa paghigugma Mo\r\n     Am      Dm       G        C\r\nSa matag higayon, matinud-anon Ka\r\n    C7       F   E7         Am E/G# Gsus G7\r\nAng kinabuhi ko, ihalad Kanimo…\r\n          C     Am    Dm  G    C Am Dm G\r\nAng gugma Mo Oh Dios, kina–buhi ko', 'salamat-oh-hesus,-ikaw-lang-oh-dios', NULL, 'C', '1673708398.jpg', 'testing', 'testing....', '2023-01-14 05:02:56', 1),
(29, 'Sukdulang Biyaya', NULL, '-\r\nSukdulang Biyaya by Musikatha + Chords + Lyrics + Transpose\r\n\r\n[Intro]\r\n\r\nC  Am  F  G\r\n\r\n[Verse]\r\n\r\nC                     Am\r\nHabang hindi karapat dapat\r\n                 F                      C\r\nPag-ukulan ng habag at wagas mong pagsinta.\r\nC                    Am\r\nHabang walang kakayanang\r\n                    F                    C   G\r\nMasuklian ka ng mabuti sa lahat mong ginawa.\r\n\r\n[Pre-Chorus]\r\n\r\n        Am   G      F             G\r\nNiyakap Mo ako sa aking karumihan.\r\n       Am   G        F           G\r\nInibig Mo ako ng di kayang tumbasan\r\n\r\n[Chorus]\r\n\r\n      C              Am\r\nO Diyos ng katarungan at katuwiran\r\n  F               G\r\nNa kahit minsa\'y di nabahiran\r\n Em             Am\r\nAng kabanala\'t kaluwalhatian\r\n  Dm           Em     F      G\r\nSalamat sa sukdulang biyaya Mo.\r\n\r\n      C              Am\r\nO Diyos ng Pag ibig na mas\r\n          F               G          Em\r\nMalawak pa kaysa aking mga pagkakasala.\r\n             Am\r\nHigit pa sa buhay ko\r\n     Dm        G              C\r\nSalamat sa Sukdulang biyaya Mo', 'sukdulang-biyaya', NULL, 'C', '1673707092.jpg', 'Sukdulang Biyaya by Musikatha + Chords + Lyrics + Transpose', 'Sukdulang Biyaya by Musikatha', '2023-01-14 05:06:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `song_has_authors`
--

CREATE TABLE `song_has_authors` (
  `id` int(11) NOT NULL,
  `song_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `song_has_authors`
--

INSERT INTO `song_has_authors` (`id`, `song_id`, `author_id`, `created_at`, `updated_at`) VALUES
(114, '10', '6', '2023-01-14 14:22:17', '2023-01-14 14:22:17'),
(115, '10', '10', '2023-01-14 14:22:17', '2023-01-14 14:22:17'),
(116, '11', '6', '2023-01-14 14:22:28', '2023-01-14 14:22:28'),
(117, '11', '7', '2023-01-14 14:22:28', '2023-01-14 14:22:28'),
(118, '11', '8', '2023-01-14 14:22:28', '2023-01-14 14:22:28'),
(119, '22', '13', '2023-01-14 14:22:48', '2023-01-14 14:22:48'),
(120, '23', '13', '2023-01-14 14:23:00', '2023-01-14 14:23:00'),
(121, '24', '14', '2023-01-14 14:23:10', '2023-01-14 14:23:10'),
(122, '25', '15', '2023-01-14 14:23:20', '2023-01-14 14:23:20'),
(124, '27', '13', '2023-01-14 14:23:42', '2023-01-14 14:23:42'),
(127, '1', '7', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(128, '1', '8', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(129, '1', '9', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(130, '1', '10', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(131, '3', '7', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(132, '3', '8', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(133, '4', '6', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(134, '4', '7', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(135, '4', '8', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(136, '5', '6', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(137, '5', '7', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(138, '5', '8', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(139, '5', '9', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(140, '5', '10', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(141, '7', '8', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(142, '7', '9', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(143, '7', '10', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(144, '8', '7', '2023-01-14 14:33:30', '2023-01-14 14:33:30'),
(148, '26', '16', '2023-01-14 15:02:41', '2023-01-14 15:02:41'),
(152, '28', '13', '2023-01-19 12:42:15', '2023-01-19 12:42:15'),
(153, '29', '17', '2023-01-19 12:59:18', '2023-01-19 12:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `song_has_categories`
--

CREATE TABLE `song_has_categories` (
  `id` int(11) NOT NULL,
  `song_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `song_has_categories`
--

INSERT INTO `song_has_categories` (`id`, `song_id`, `category_id`, `created_at`, `updated_at`) VALUES
(86, '10', '2', '2023-01-14 14:22:17', '2023-01-14 14:22:17'),
(87, '10', '3', '2023-01-14 14:22:17', '2023-01-14 14:22:17'),
(88, '10', '4', '2023-01-14 14:22:17', '2023-01-14 14:22:17'),
(89, '11', '2', '2023-01-14 14:22:28', '2023-01-14 14:22:28'),
(90, '11', '3', '2023-01-14 14:22:28', '2023-01-14 14:22:28'),
(91, '22', '9', '2023-01-14 14:22:48', '2023-01-14 14:22:48'),
(92, '23', '9', '2023-01-14 14:23:00', '2023-01-14 14:23:00'),
(93, '24', '9', '2023-01-14 14:23:10', '2023-01-14 14:23:10'),
(94, '25', '9', '2023-01-14 14:23:20', '2023-01-14 14:23:20'),
(96, '27', '9', '2023-01-14 14:23:42', '2023-01-14 14:23:42'),
(99, '1', '2', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(100, '1', '3', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(101, '1', '4', '2023-01-14 14:32:42', '2023-01-14 14:32:42'),
(102, '3', '2', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(103, '3', '3', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(104, '3', '4', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(105, '3', '5', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(106, '3', '6', '2023-01-14 14:32:52', '2023-01-14 14:32:52'),
(107, '4', '4', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(108, '4', '5', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(109, '4', '6', '2023-01-14 14:33:00', '2023-01-14 14:33:00'),
(110, '5', '2', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(111, '5', '3', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(112, '5', '4', '2023-01-14 14:33:09', '2023-01-14 14:33:09'),
(113, '7', '2', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(114, '7', '3', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(115, '7', '4', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(116, '7', '5', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(117, '7', '6', '2023-01-14 14:33:20', '2023-01-14 14:33:20'),
(118, '8', '2', '2023-01-14 14:33:30', '2023-01-14 14:33:30'),
(119, '8', '3', '2023-01-14 14:33:30', '2023-01-14 14:33:30'),
(120, '8', '4', '2023-01-14 14:33:30', '2023-01-14 14:33:30'),
(121, '8', '5', '2023-01-14 14:33:30', '2023-01-14 14:33:30'),
(125, '26', '9', '2023-01-14 15:02:41', '2023-01-14 15:02:41'),
(129, '28', '9', '2023-01-19 12:42:15', '2023-01-19 12:42:15'),
(130, '29', '9', '2023-01-19 12:59:18', '2023-01-19 12:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `is_ban` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chords_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `is_ban`, `remember_token`, `lyrics_size`, `bg_color`, `lyrics_color`, `chords_color`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2022-12-08 07:16:32', '$2y$10$HDjKo3pKhRL3j/0Q698GZevZ7uHNfEWnq3CmPklM/kxXztiFFSklu', 1, NULL, NULL, '22.74684', '#000000', '#ffffff', '#00ff00', '2022-12-08 07:16:32', '2023-01-14 04:26:09'),
(12, 'user', 'user@user.com', NULL, '$2y$10$HDjKo3pKhRL3j/0Q698GZevZ7uHNfEWnq3CmPklM/kxXztiFFSklu', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-21 07:55:20', '2023-01-21 07:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `created_at`, `updated_at`) VALUES
(5, '2020', '2022-12-09 12:09:34', '2022-12-09 12:16:17'),
(6, '2022', '2022-12-09 12:24:47', '2022-12-09 12:25:48'),
(7, '2021', '2022-12-09 12:24:51', '2022-12-09 12:24:51'),
(8, '2019', '2022-12-09 12:24:56', '2022-12-09 12:24:56'),
(9, '2018', '2022-12-09 12:25:01', '2022-12-09 12:25:01'),
(10, '2017', '2022-12-09 12:25:05', '2022-12-09 12:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `year_make_model_by_teoalida_sample`
--

CREATE TABLE `year_make_model_by_teoalida_sample` (
  `id` int(11) NOT NULL,
  `Year` varchar(95) DEFAULT NULL,
  `Make` varchar(4) DEFAULT NULL,
  `Model` varchar(63) DEFAULT NULL,
  `Platform code / generation number` varchar(23) DEFAULT NULL,
  `Class` varchar(24) DEFAULT NULL,
  `Notes` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year_make_model_by_teoalida_sample`
--

INSERT INTO `year_make_model_by_teoalida_sample` (`id`, `Year`, `Make`, `Model`, `Platform code / generation number`, `Class`, `Notes`) VALUES
(6, '1978', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(7, '1979', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(8, '1980', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(9, '1988', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(10, '1989', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(11, '1990', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(12, '1991', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(13, '1992', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(14, '1993', 'Ford', 'Festiva', '-', 'Subcompact car', ''),
(15, '1994', 'Ford', 'Aspire', '-', 'Subcompact car', ''),
(16, '1995', 'Ford', 'Aspire', '-', 'Subcompact car', ''),
(17, '1996', 'Ford', 'Aspire', '-', 'Subcompact car', ''),
(18, '1996', 'Ford', 'Aspire', '-', 'Subcompact car', ''),
(19, '2011', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(20, '2012', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(21, '2013', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(22, '2014', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(23, '2015', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(24, '2016', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(25, '2017', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(26, '2018', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(27, '2019', 'Ford', 'Fiesta', '-', 'Subcompact car', ''),
(28, '1960', 'Ford', 'Falcon', '(1st gen)', 'Compact car', ''),
(29, '1961', 'Ford', 'Falcon', '(1st gen)', 'Compact car', ''),
(30, '1962', 'Ford', 'Falcon', '(1st gen)', 'Compact car', ''),
(31, '1963', 'Ford', 'Falcon', '(1st gen)', 'Compact car', ''),
(32, '1964', 'Ford', 'Falcon', '(2nd gen)', 'Compact car', ''),
(33, '1965', 'Ford', 'Falcon', '(2nd gen)', 'Compact car', ''),
(34, '1966', 'Ford', 'Falcon', '(3rd gen)', 'Compact car', ''),
(35, '1967', 'Ford', 'Falcon', '(3rd gen)', 'Compact car', ''),
(36, '1968', 'Ford', 'Falcon', '(3rd gen)', 'Compact car', ''),
(37, '1969', 'Ford', 'Falcon', '(3rd gen)', 'Compact car', ''),
(38, '1970', 'Ford', 'Falcon', '(3rd gen)', 'Compact car', ''),
(39, '1969', 'Ford', 'Maverick', '-', 'Compact car', ''),
(40, '1970', 'Ford', 'Maverick', '-', 'Compact car', ''),
(41, '1971', 'Ford', 'Maverick', '-', 'Compact car', ''),
(42, '1972', 'Ford', 'Maverick', '-', 'Compact car', ''),
(43, '1973', 'Ford', 'Maverick', '-', 'Compact car', ''),
(44, '1974', 'Ford', 'Maverick', '-', 'Compact car', ''),
(45, '1975', 'Ford', 'Maverick', '-', 'Compact car', ''),
(46, '1976', 'Ford', 'Maverick', '-', 'Compact car', ''),
(47, '1977', 'Ford', 'Maverick', '-', 'Compact car', ''),
(48, '1978', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(49, '1979', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(50, '1980', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(51, '1981', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(52, '1982', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(53, '1983', 'Ford', 'Fairmont', '-', 'Compact car', ''),
(54, '1984', 'Ford', 'Tempo', '(1st gen)', 'Compact car', ''),
(55, '1985', 'Ford', 'Tempo', '(1st gen)', 'Compact car', ''),
(56, '1986', 'Ford', 'Tempo', '(1st gen)', 'Compact car', ''),
(57, '1987', 'Ford', 'Tempo', '(1st gen)', 'Compact car', ''),
(58, '1988', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(59, '1989', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(60, '1990', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(61, '1991', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(62, '1992', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(63, '1993', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(64, '1994', 'Ford', 'Tempo', '(2nd gen)', 'Compact car', ''),
(65, '1995', 'Ford', 'Contour', '-', 'Compact car', ''),
(66, '1996', 'Ford', 'Contour', '-', 'Compact car', ''),
(67, '1997', 'Ford', 'Contour', '-', 'Compact car', ''),
(68, '1998', 'Ford', 'Contour', '-', 'Compact car', ''),
(69, '1999', 'Ford', 'Contour', '-', 'Compact car', ''),
(70, '2000', 'Ford', 'Contour', '-', 'Compact car', 'MY 2000 sold only in United States, no Canada'),
(71, '1971', 'Ford', 'Pinto', '-', 'Compact car', ''),
(72, '1972', 'Ford', 'Pinto', '-', 'Compact car', ''),
(73, '1973', 'Ford', 'Pinto', '-', 'Compact car', ''),
(74, '1974', 'Ford', 'Pinto', '-', 'Compact car', ''),
(75, '1975', 'Ford', 'Pinto', '-', 'Compact car', ''),
(76, '1976', 'Ford', 'Pinto', '-', 'Compact car', ''),
(77, '1977', 'Ford', 'Pinto', '-', 'Compact car', ''),
(78, '1978', 'Ford', 'Pinto', '-', 'Compact car', ''),
(79, '1979', 'Ford', 'Pinto', '-', 'Compact car', ''),
(80, '1980', 'Ford', 'Pinto', '-', 'Compact car', ''),
(81, '1981', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(82, '1982', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(83, '1983', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(84, '1984', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(85, '1985', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(86, '1986', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(87, '1987', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(88, '1988', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(89, '1989', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(90, '1990', 'Ford', 'Escort', '(1st gen)', 'Compact car', ''),
(91, '1991', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(92, '1992', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(93, '1993', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(94, '1994', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(95, '1995', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(96, '1996', 'Ford', 'Escort', '(2nd gen)', 'Compact car', ''),
(97, '1997', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(98, '1998', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(99, '1999', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(100, '2000', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(101, '2001', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(102, '2002', 'Ford', 'Escort', '(3rd gen)', 'Compact car', ''),
(103, '2000', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(104, '2001', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(105, '2002', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(106, '2003', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(107, '2004', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(108, '2005', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(109, '2006', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(110, '2007', 'Ford', 'Focus', '(1st gen)', 'Compact car', ''),
(111, '2008', 'Ford', 'Focus', '(2nd gen)', 'Compact car', ''),
(112, '2009', 'Ford', 'Focus', '(2nd gen)', 'Compact car', ''),
(113, '2010', 'Ford', 'Focus', '(2nd gen)', 'Compact car', ''),
(114, '2011', 'Ford', 'Focus', '(2nd gen)', 'Compact car', ''),
(115, '2012', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(116, '2013', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(117, '2014', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(118, '2015', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(119, '2016', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(120, '2017', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(121, '2018', 'Ford', 'Focus', '(3rd gen)', 'Compact car', ''),
(122, '1962', 'Ford', 'Fairlane', '(4th gen)', 'Mid-size car', ''),
(123, '1963', 'Ford', 'Fairlane', '(4th gen)', 'Mid-size car', ''),
(124, '1964', 'Ford', 'Fairlane', '(4th gen)', 'Mid-size car', ''),
(125, '1965', 'Ford', 'Fairlane', '(4th gen)', 'Mid-size car', ''),
(126, '1966', 'Ford', 'Fairlane', '(5th gen)', 'Mid-size car', ''),
(127, '1967', 'Ford', 'Fairlane', '(5th gen)', 'Mid-size car', ''),
(128, '1968', 'Ford', 'Fairlane', '(6th gen)', 'Mid-size car', ''),
(129, '1969', 'Ford', 'Fairlane', '(6th gen)', 'Mid-size car', ''),
(130, '1970', 'Ford', 'Fairlane', '(7th gen)', 'Mid-size car', ''),
(131, '1971', 'Ford', 'Fairlane', '(7th gen)', 'Mid-size car', ''),
(132, '1968', 'Ford', 'Torino', '(1st gen)', 'Mid-size car', 'upscale Fairlane, not a separate model'),
(133, '1969', 'Ford', 'Torino', '(1st gen)', 'Mid-size car', 'upscale Fairlane, not a separate model'),
(134, '1970', 'Ford', 'Torino', '(1st gen)', 'Mid-size car', 'upscale Fairlane, not a separate model'),
(135, '1971', 'Ford', 'Torino', '(2nd gen)', 'Mid-size car', ''),
(136, '1972', 'Ford', 'Torino', '(2nd gen)', 'Mid-size car', ''),
(137, '1972', 'Ford', 'Gran Torino', '-', 'Mid-size car', ''),
(138, '1973', 'Ford', 'Gran Torino', '-', 'Mid-size car', ''),
(139, '1974', 'Ford', 'Gran Torino', '-', 'Mid-size car', ''),
(140, '1975', 'Ford', 'Gran Torino', '-', 'Mid-size car', ''),
(141, '1976', 'Ford', 'Gran Torino', '-', 'Mid-size car', ''),
(142, '1977', 'Ford', 'LTD II', '-', 'Mid-size car', ''),
(143, '1978', 'Ford', 'LTD II', '-', 'Mid-size car', ''),
(144, '1979', 'Ford', 'LTD II', '-', 'Mid-size car', ''),
(145, '1975', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(146, '1976', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(147, '1977', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(148, '1978', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(149, '1979', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(150, '1980', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(151, '1981', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(152, '1982', 'Ford', 'Granada', '-', 'Mid-size car', ''),
(153, '1983', 'Ford', 'LTD Fox', '-', 'Mid-size car', ''),
(154, '1984', 'Ford', 'LTD Fox', '-', 'Mid-size car', ''),
(155, '1985', 'Ford', 'LTD Fox', '-', 'Mid-size car', ''),
(156, '1986', 'Ford', 'LTD Fox', '-', 'Mid-size car', ''),
(157, '1986', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(158, '1987', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(159, '1988', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(160, '1989', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(161, '1990', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(162, '1991', 'Ford', 'Taurus', '(1st gen)', 'Mid-size car', ''),
(163, '1992', 'Ford', 'Taurus', '(2nd gen)', 'Mid-size car', ''),
(164, '1993', 'Ford', 'Taurus', '(2nd gen)', 'Mid-size car', ''),
(165, '1994', 'Ford', 'Taurus', '(2nd gen)', 'Mid-size car', ''),
(166, '1995', 'Ford', 'Taurus', '(3rd gen)', 'Mid-size car', ''),
(167, '1996', 'Ford', 'Taurus', '(3rd gen)', 'Mid-size car', ''),
(168, '1997', 'Ford', 'Taurus', '(3rd gen)', 'Mid-size car', ''),
(169, '1998', 'Ford', 'Taurus', '(3rd gen)', 'Mid-size car', ''),
(170, '1999', 'Ford', 'Taurus', '(3rd gen)', 'Mid-size car', ''),
(171, '2000', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(172, '2001', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(173, '2002', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(174, '2003', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(175, '2004', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(176, '2005', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(177, '2006', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(178, '2007', 'Ford', 'Taurus', '(4th gen)', 'Mid-size car', ''),
(179, '2006', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(180, '2007', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(181, '2008', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(182, '2009', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(183, '2010', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(184, '2011', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(185, '2012', 'Ford', 'Fusion', '(1st gen)', 'Mid-size car', ''),
(186, '2013', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(187, '2014', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(188, '2015', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(189, '2016', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(190, '2017', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(191, '2018', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(192, '2019', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(193, '2020', 'Ford', 'Fusion', '(2nd gen)', 'Mid-size car', ''),
(194, '2023', 'Ford', 'Fusion Active', '-', 'Mid-size car', 'UNCONFIRMED'),
(195, '1941', 'Ford', '1941 Ford: Deluxe / Super Deluxe', '-', 'Full-size car', ''),
(196, '1942', 'Ford', '1941 Ford: Deluxe / Super Deluxe', '-', 'Full-size car', ''),
(197, '1946', 'Ford', '1941 Ford: Deluxe / Super Deluxe', '-', 'Full-size car', ''),
(198, '1947', 'Ford', '1941 Ford: Deluxe / Super Deluxe', '-', 'Full-size car', ''),
(199, '1948', 'Ford', '1941 Ford: Deluxe / Super Deluxe', '-', 'Full-size car', ''),
(200, '1949', 'Ford', '1949 Ford: Deluxe / Custom', '-', 'Full-size car', ''),
(201, '1950', 'Ford', '1949 Ford: Deluxe / Custom', '-', 'Full-size car', ''),
(202, '1951', 'Ford', '1949 Ford: Deluxe / Custom', '-', 'Full-size car', ''),
(203, '1952', 'Ford', '1952 Ford: Mainline / Customline / Crestline', '-', 'Full-size car', ''),
(204, '1953', 'Ford', '1952 Ford: Mainline / Customline / Crestline', '-', 'Full-size car', ''),
(205, '1954', 'Ford', '1952 Ford: Mainline / Customline / Crestline', '-', 'Full-size car', ''),
(206, '1955', 'Ford', '1952 Ford: Mainline / Customline / Crestline', '-', 'Full-size car', ''),
(207, '1956', 'Ford', '1952 Ford: Mainline / Customline / Crestline', '-', 'Full-size car', ''),
(208, '1955', 'Ford', 'Fairlane', '(1st gen)', 'Full-size car', ''),
(209, '1956', 'Ford', 'Fairlane', '(1st gen)', 'Full-size car', ''),
(210, '1957', 'Ford', 'Fairlane', '(2nd gen)', 'Full-size car', ''),
(211, '1958', 'Ford', 'Fairlane', '(2nd gen)', 'Full-size car', ''),
(212, '1959', 'Ford', 'Fairlane', '(2nd gen)', 'Full-size car', ''),
(213, '1960', 'Ford', 'Fairlane', '(3rd gen)', 'Full-size car', ''),
(214, '1961', 'Ford', 'Fairlane', '(3rd gen)', 'Full-size car', ''),
(215, '1963', 'Ford', '300', '-', 'Full-size car', ''),
(216, '1964', 'Ford', 'Custom 500', '(1st gen)', 'Full-size car', ''),
(217, '1965', 'Ford', 'Custom 500', '(2nd gen)', 'Full-size car', ''),
(218, '1966', 'Ford', 'Custom 500', '(2nd gen)', 'Full-size car', ''),
(219, '1967', 'Ford', 'Custom 500', '(2nd gen)', 'Full-size car', ''),
(220, '1968', 'Ford', 'Custom 500', '(2nd gen)', 'Full-size car', ''),
(221, '1969', 'Ford', 'Custom 500', '(3rd gen)', 'Full-size car', ''),
(222, '1970', 'Ford', 'Custom 500', '(3rd gen)', 'Full-size car', ''),
(223, '1971', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(224, '1972', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(225, '1973', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(226, '1974', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(227, '1975', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(228, '1976', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(229, '1977', 'Ford', 'Custom 500', '(4th gen)', 'Full-size car', ''),
(230, '1959', 'Ford', 'Galaxie', '(1st gen)', 'Full-size car', 'upscale Fairlane'),
(231, '1960', 'Ford', 'Galaxie', '(2nd gen)', 'Full-size car', ''),
(232, '1961', 'Ford', 'Galaxie', '(2nd gen)', 'Full-size car', ''),
(233, '1962', 'Ford', 'Galaxie', '(2nd gen)', 'Full-size car', ''),
(234, '1963', 'Ford', 'Galaxie', '(2nd gen)', 'Full-size car', ''),
(235, '1964', 'Ford', 'Galaxie', '(2nd gen)', 'Full-size car', ''),
(236, '1965', 'Ford', 'Galaxie', '(3rd gen)', 'Full-size car', ''),
(237, '1966', 'Ford', 'Galaxie', '(3rd gen)', 'Full-size car', ''),
(238, '1967', 'Ford', 'Galaxie', '(3rd gen)', 'Full-size car', ''),
(239, '1968', 'Ford', 'Galaxie', '(3rd gen)', 'Full-size car', ''),
(240, '1969', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(241, '1970', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(242, '1971', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(243, '1972', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(244, '1973', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(245, '1974', 'Ford', 'Galaxie', '(4th gen)', 'Full-size car', ''),
(246, '1965', 'Ford', 'LTD', '(1st gen)', 'Full-size car', ''),
(247, '1966', 'Ford', 'LTD', '(1st gen)', 'Full-size car', ''),
(248, '1967', 'Ford', 'LTD', '(1st gen)', 'Full-size car', ''),
(249, '1968', 'Ford', 'LTD', '(1st gen)', 'Full-size car', ''),
(250, '1969', 'Ford', 'LTD', '(2nd gen)', 'Full-size car', ''),
(251, '1970', 'Ford', 'LTD', '(2nd gen)', 'Full-size car', ''),
(252, '1971', 'Ford', 'LTD', '(2nd gen)', 'Full-size car', ''),
(253, '1972', 'Ford', 'LTD', '(2nd gen)', 'Full-size car', ''),
(254, '1973', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(255, '1974', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(256, '1975', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(257, '1976', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(258, '1977', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(259, '1978', 'Ford', 'LTD', '(3rd gen)', 'Full-size car', ''),
(260, '1979', 'Ford', 'LTD', '(4th gen)', 'Full-size car', ''),
(261, '1980', 'Ford', 'LTD', '(4th gen)', 'Full-size car', ''),
(262, '1981', 'Ford', 'LTD', '(4th gen)', 'Full-size car', ''),
(263, '1982', 'Ford', 'LTD', '(4th gen)', 'Full-size car', ''),
(264, '1983', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(265, '1984', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(266, '1985', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(267, '1986', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(268, '1987', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(269, '1988', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(270, '1989', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(271, '1990', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(272, '1991', 'Ford', 'LTD Crown Victoria', '-', 'Full-size car', ''),
(273, '1992', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(274, '1993', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(275, '1994', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(276, '1995', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(277, '1996', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(278, '1997', 'Ford', 'Crown Victoria', '(1st gen)', 'Full-size car', ''),
(279, '1998', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(280, '1999', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(281, '2000', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(282, '2001', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(283, '2002', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(284, '2003', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(285, '2004', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(286, '2005', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(287, '2006', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(288, '2007', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(289, '2008', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(290, '2009', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(291, '2010', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(292, '2011', 'Ford', 'Crown Victoria', '(2nd gen)', 'Full-size car', ''),
(293, '2005', 'Ford', 'Five Hundred', '-', 'Full-size car', ''),
(294, '2006', 'Ford', 'Five Hundred', '-', 'Full-size car', ''),
(295, '2007', 'Ford', 'Five Hundred', '-', 'Full-size car', ''),
(296, '2008', 'Ford', 'Taurus', '(5th gen)', 'Full-size car', ''),
(297, '2009', 'Ford', 'Taurus', '(5th gen)', 'Full-size car', ''),
(298, '2010', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(299, '2011', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(300, '2012', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(301, '2013', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(302, '2014', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(303, '2015', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(304, '2016', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(305, '2017', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(306, '2018', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(307, '2019', 'Ford', 'Taurus', '(6th gen)', 'Full-size car', ''),
(308, '1951', 'Ford', 'Country Squire', '(1st gen)', 'Full-size wagon car', ''),
(309, '1952', 'Ford', 'Country Squire', '(1st gen)', 'Full-size wagon car', ''),
(310, '1953', 'Ford', 'Country Squire', '(1st gen)', 'Full-size wagon car', ''),
(311, '1954', 'Ford', 'Country Squire', '(1st gen)', 'Full-size wagon car', ''),
(312, '1955', 'Ford', 'Country Squire', '(2nd gen)', 'Full-size wagon car', ''),
(313, '1956', 'Ford', 'Country Squire', '(2nd gen)', 'Full-size wagon car', ''),
(314, '1957', 'Ford', 'Country Squire', '(2nd gen)', 'Full-size wagon car', ''),
(315, '1958', 'Ford', 'Country Squire', '(2nd gen)', 'Full-size wagon car', ''),
(316, '1959', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(317, '1960', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(318, '1961', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(319, '1962', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(320, '1963', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(321, '1964', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(322, '1965', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(323, '1966', 'Ford', 'Country Squire', '(3rd gen)', 'Full-size wagon car', ''),
(324, '1967', 'Ford', 'Country Squire', '(4th gen)', 'Full-size wagon car', ''),
(325, '1968', 'Ford', 'Country Squire', '(4th gen)', 'Full-size wagon car', ''),
(326, '1969', 'Ford', 'Country Squire', '(5th gen)', 'Full-size wagon car', ''),
(327, '1970', 'Ford', 'Country Squire', '(5th gen)', 'Full-size wagon car', ''),
(328, '1971', 'Ford', 'Country Squire', '(5th gen)', 'Full-size wagon car', ''),
(329, '1972', 'Ford', 'Country Squire', '(5th gen)', 'Full-size wagon car', ''),
(330, '1973', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(331, '1974', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(332, '1975', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(333, '1976', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(334, '1977', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(335, '1978', 'Ford', 'Country Squire', '(6th gen)', 'Full-size wagon car', ''),
(336, '1979', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(337, '1980', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(338, '1981', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(339, '1982', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(340, '1983', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(341, '1984', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(342, '1985', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(343, '1986', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(344, '1987', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(345, '1988', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(346, '1989', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(347, '1990', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(348, '1991', 'Ford', 'Country Squire', '(7th gen)', 'Full-size wagon car', ''),
(349, '1955', 'Ford', 'Thunderbird', '(1st gen)', 'Personal luxury car', ''),
(350, '1956', 'Ford', 'Thunderbird', '(1st gen)', 'Personal luxury car', ''),
(351, '1957', 'Ford', 'Thunderbird', '(1st gen)', 'Personal luxury car', ''),
(352, '1958', 'Ford', 'Thunderbird', '(2nd gen)', 'Personal luxury car', ''),
(353, '1959', 'Ford', 'Thunderbird', '(2nd gen)', 'Personal luxury car', ''),
(354, '1960', 'Ford', 'Thunderbird', '(2nd gen)', 'Personal luxury car', ''),
(355, '1961', 'Ford', 'Thunderbird', '(3rd gen)', 'Personal luxury car', ''),
(356, '1962', 'Ford', 'Thunderbird', '(3rd gen)', 'Personal luxury car', ''),
(357, '1963', 'Ford', 'Thunderbird', '(3rd gen)', 'Personal luxury car', ''),
(358, '1964', 'Ford', 'Thunderbird', '(4th gen)', 'Personal luxury car', ''),
(359, '1965', 'Ford', 'Thunderbird', '(4th gen)', 'Personal luxury car', ''),
(360, '1966', 'Ford', 'Thunderbird', '(4th gen)', 'Personal luxury car', ''),
(361, '1967', 'Ford', 'Thunderbird', '(5th gen)', 'Personal luxury car', ''),
(362, '1968', 'Ford', 'Thunderbird', '(5th gen)', 'Personal luxury car', ''),
(363, '1969', 'Ford', 'Thunderbird', '(5th gen)', 'Personal luxury car', ''),
(364, '1970', 'Ford', 'Thunderbird', '(5th gen)', 'Personal luxury car', ''),
(365, '1971', 'Ford', 'Thunderbird', '(5th gen)', 'Personal luxury car', ''),
(366, '1972', 'Ford', 'Thunderbird', '(6th gen)', 'Personal luxury car', ''),
(367, '1973', 'Ford', 'Thunderbird', '(6th gen)', 'Personal luxury car', ''),
(368, '1974', 'Ford', 'Thunderbird', '(6th gen)', 'Personal luxury car', ''),
(369, '1975', 'Ford', 'Thunderbird', '(6th gen)', 'Personal luxury car', ''),
(370, '1976', 'Ford', 'Thunderbird', '(6th gen)', 'Personal luxury car', ''),
(371, '1977', 'Ford', 'Thunderbird', '(7th gen)', 'Personal luxury car', ''),
(372, '1978', 'Ford', 'Thunderbird', '(7th gen)', 'Personal luxury car', ''),
(373, '1979', 'Ford', 'Thunderbird', '(7th gen)', 'Personal luxury car', ''),
(374, '1980', 'Ford', 'Thunderbird', '(8th gen)', 'Personal luxury car', ''),
(375, '1981', 'Ford', 'Thunderbird', '(8th gen)', 'Personal luxury car', ''),
(376, '1982', 'Ford', 'Thunderbird', '(8th gen)', 'Personal luxury car', ''),
(377, '1983', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(378, '1984', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(379, '1985', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(380, '1986', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(381, '1987', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(382, '1988', 'Ford', 'Thunderbird', '(9th gen)', 'Personal luxury car', ''),
(383, '1989', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(384, '1990', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(385, '1991', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(386, '1992', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(387, '1993', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(388, '1994', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(389, '1995', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(390, '1996', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(391, '1997', 'Ford', 'Thunderbird', '(10th gen)', 'Personal luxury car', ''),
(392, '2002', 'Ford', 'Thunderbird', '(11th gen)', 'Personal luxury car', ''),
(393, '2003', 'Ford', 'Thunderbird', '(11th gen)', 'Personal luxury car', ''),
(394, '2004', 'Ford', 'Thunderbird', '(11th gen)', 'Personal luxury car', ''),
(395, '2005', 'Ford', 'Thunderbird', '(11th gen)', 'Personal luxury car', ''),
(396, '1982', 'Ford', 'EXP', '-', 'Sports car', ''),
(397, '1983', 'Ford', 'EXP', '-', 'Sports car', ''),
(398, '1984', 'Ford', 'EXP', '-', 'Sports car', ''),
(399, '1985', 'Ford', 'EXP', '-', 'Sports car', ''),
(400, '1986', 'Ford', 'EXP', '-', 'Sports car', ''),
(401, '1987', 'Ford', 'EXP', '-', 'Sports car', ''),
(402, '1988', 'Ford', 'EXP', '-', 'Sports car', ''),
(403, '1989', 'Ford', 'Probe', '(1st gen)', 'Sports car', ''),
(404, '1990', 'Ford', 'Probe', '(1st gen)', 'Sports car', ''),
(405, '1991', 'Ford', 'Probe', '(1st gen)', 'Sports car', ''),
(406, '1992', 'Ford', 'Probe', '(1st gen)', 'Sports car', ''),
(407, '1993', 'Ford', 'Probe', '(2nd gen)', 'Sports car', ''),
(408, '1994', 'Ford', 'Probe', '(2nd gen)', 'Sports car', ''),
(409, '1995', 'Ford', 'Probe', '(2nd gen)', 'Sports car', ''),
(410, '1996', 'Ford', 'Probe', '(2nd gen)', 'Sports car', ''),
(411, '1997', 'Ford', 'Probe', '(2nd gen)', 'Sports car', ''),
(412, '1964', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(413, '1965', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(414, '1966', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(415, '1967', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(416, '1968', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(417, '1969', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(418, '1970', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(419, '1971', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(420, '1972', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(421, '1973', 'Ford', 'Mustang', '(1st gen)', 'Sports car', ''),
(422, '1974', 'Ford', 'Mustang', '(2nd gen)', 'Sports car', ''),
(423, '1975', 'Ford', 'Mustang', '(2nd gen)', 'Sports car', ''),
(424, '1976', 'Ford', 'Mustang', '(2nd gen)', 'Sports car', ''),
(425, '1977', 'Ford', 'Mustang', '(2nd gen)', 'Sports car', ''),
(426, '1978', 'Ford', 'Mustang', '(2nd gen)', 'Sports car', ''),
(427, '1979', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(428, '1980', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(429, '1981', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(430, '1982', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(431, '1983', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(432, '1984', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(433, '1985', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(434, '1986', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(435, '1987', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(436, '1988', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(437, '1989', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(438, '1990', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(439, '1991', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(440, '1992', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(441, '1993', 'Ford', 'Mustang', '(3rd gen)', 'Sports car', ''),
(442, '1994', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(443, '1995', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(444, '1996', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(445, '1997', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(446, '1998', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(447, '1999', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(448, '2000', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(449, '2001', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(450, '2002', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(451, '2003', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(452, '2004', 'Ford', 'Mustang', '(4th gen)', 'Sports car', ''),
(453, '2005', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(454, '2006', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(455, '2007', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(456, '2008', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(457, '2009', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(458, '2010', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(459, '2011', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(460, '2012', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(461, '2013', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(462, '2014', 'Ford', 'Mustang', '(5th gen)', 'Sports car', ''),
(463, '2015', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(464, '2016', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(465, '2017', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(466, '2018', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(467, '2019', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(468, '2020', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(469, '2021', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(470, '2022', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(471, '2023', 'Ford', 'Mustang', '(6th gen)', 'Sports car', ''),
(472, '2021', 'Ford', 'Mustang Mach-E', '(6th gen)', 'Mid-size crossover SUV', ''),
(473, '2022', 'Ford', 'Mustang Mach-E', '(6th gen)', 'Mid-size crossover SUV', ''),
(474, '2023', 'Ford', 'Mustang Mach-E', '(6th gen)', 'Mid-size crossover SUV', ''),
(475, '2005', 'Ford', 'GT', '-', 'Sports car', ''),
(476, '2006', 'Ford', 'GT', '-', 'Sports car', ''),
(477, '2017', 'Ford', 'GT', '-', 'Sports car', ''),
(478, '2018', 'Ford', 'GT', '-', 'Sports car', ''),
(479, '2019', 'Ford', 'GT', '-', 'Sports car', ''),
(480, '2020', 'Ford', 'GT', '-', 'Sports car', ''),
(481, '2021', 'Ford', 'GT', '-', 'Sports car', ''),
(482, '2022', 'Ford', 'GT', '-', 'Sports car', ''),
(483, '2023', 'Ford', 'GT', '-', 'Sports car', ''),
(484, '1986', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(485, '1987', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(486, '1988', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(487, '1989', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(488, '1990', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(489, '1991', 'Ford', 'Aerostar', '(1st gen)', 'Minivan', ''),
(490, '1992', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(491, '1993', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(492, '1994', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(493, '1995', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(494, '1996', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(495, '1997', 'Ford', 'Aerostar', '(2nd gen)', 'Minivan', ''),
(496, '1995', 'Ford', 'Windstar', '(1st gen)', 'Minivan', ''),
(497, '1996', 'Ford', 'Windstar', '(1st gen)', 'Minivan', ''),
(498, '1997', 'Ford', 'Windstar', '(1st gen)', 'Minivan', ''),
(499, '1998', 'Ford', 'Windstar', '(1st gen)', 'Minivan', ''),
(500, '1999', 'Ford', 'Windstar', '(2nd gen)', 'Minivan', ''),
(501, '2000', 'Ford', 'Windstar', '(2nd gen)', 'Minivan', ''),
(502, '2001', 'Ford', 'Windstar', '(2nd gen)', 'Minivan', ''),
(503, '2002', 'Ford', 'Windstar', '(2nd gen)', 'Minivan', ''),
(504, '2003', 'Ford', 'Windstar', '(2nd gen)', 'Minivan', ''),
(505, '2004', 'Ford', 'Freestar', '-', 'Minivan', ''),
(506, '2005', 'Ford', 'Freestar', '-', 'Minivan', ''),
(507, '2006', 'Ford', 'Freestar', '-', 'Minivan', ''),
(508, '2007', 'Ford', 'Freestar', '-', 'Minivan', ''),
(509, '2005', 'Ford', 'Freestyle', '-', 'Full-size crossover SUV', ''),
(510, '2006', 'Ford', 'Freestyle', '-', 'Full-size crossover SUV', ''),
(511, '2007', 'Ford', 'Freestyle', '-', 'Full-size crossover SUV', ''),
(512, '2008', 'Ford', 'Taurus X', '-', 'Full-size crossover SUV', ''),
(513, '2009', 'Ford', 'Taurus X', '-', 'Full-size crossover SUV', ''),
(514, '2011', 'Ford', 'Transit Connect', '(1st gen)', 'Minivan', ''),
(515, '2012', 'Ford', 'Transit Connect', '(1st gen)', 'Minivan', ''),
(516, '2013', 'Ford', 'Transit Connect', '(1st gen)', 'Minivan', ''),
(517, '2014', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(518, '2015', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(519, '2016', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(520, '2017', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(521, '2018', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(522, '2019', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(523, '2020', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(524, '2021', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(525, '2022', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', ''),
(526, '2023', 'Ford', 'Transit Connect', '(2nd gen)', 'Minivan', 'UNCONFIRMED'),
(527, '2013', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(528, '2014', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(529, '2015', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(530, '2016', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(531, '2017', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(532, '2018', 'Ford', 'C-Max', '-', 'Compact MPV', ''),
(533, '1961', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(534, '1962', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(535, '1963', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(536, '1964', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(537, '1965', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(538, '1966', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(539, '1967', 'Ford', 'E-Series', '(1st gen)', 'Full-size van', ''),
(540, '1968', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(541, '1969', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(542, '1970', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(543, '1971', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(544, '1972', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(545, '1973', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(546, '1974', 'Ford', 'E-Series', '(2nd gen)', 'Full-size van', ''),
(547, '1975', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(548, '1976', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(549, '1977', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(550, '1978', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(551, '1979', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(552, '1980', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(553, '1981', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(554, '1982', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(555, '1983', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(556, '1984', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(557, '1985', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(558, '1986', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(559, '1987', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(560, '1988', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(561, '1989', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(562, '1990', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(563, '1991', 'Ford', 'E-Series', '(3rd gen)', 'Full-size van', ''),
(564, '1992', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', 'Also called Ford Econoline until 2002'),
(565, '1993', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(566, '1994', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(567, '1995', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(568, '1996', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(569, '1997', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(570, '1998', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(571, '1999', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(572, '2000', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(573, '2001', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(574, '2002', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(575, '2003', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(576, '2004', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(577, '2005', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(578, '2006', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(579, '2007', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(580, '2008', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(581, '2009', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(582, '2010', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(583, '2011', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(584, '2012', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(585, '2013', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(586, '2014', 'Ford', 'E-Series', '(4th gen)', 'Full-size van', ''),
(587, '2015', 'Ford', 'Transit', '-', 'Full-size van', ''),
(588, '2016', 'Ford', 'Transit', '-', 'Full-size van', ''),
(589, '2017', 'Ford', 'Transit', '-', 'Full-size van', ''),
(590, '2018', 'Ford', 'Transit', '-', 'Full-size van', ''),
(591, '2019', 'Ford', 'Transit', '-', 'Full-size van', ''),
(592, '2020', 'Ford', 'Transit', '-', 'Full-size van', ''),
(593, '2021', 'Ford', 'Transit', '-', 'Full-size van', ''),
(594, '2022', 'Ford', 'Transit', '-', 'Full-size van', ''),
(595, '2023', 'Ford', 'Transit', '-', 'Full-size van', ''),
(596, '2018', 'Ford', 'EcoSport', '-', 'Subcompact crossover SUV', ''),
(597, '2019', 'Ford', 'EcoSport', '-', 'Subcompact crossover SUV', ''),
(598, '2020', 'Ford', 'EcoSport', '-', 'Subcompact crossover SUV', ''),
(599, '2021', 'Ford', 'EcoSport', '-', 'Subcompact crossover SUV', ''),
(600, '2022', 'Ford', 'EcoSport', '-', 'Subcompact crossover SUV', ''),
(601, '2007', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(602, '2008', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(603, '2009', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(604, '2010', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(605, '2011', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(606, '2012', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(607, '2013', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(608, '2014', 'Ford', 'Edge', '(1st gen)', 'Mid-size crossover SUV', ''),
(609, '2015', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(610, '2016', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(611, '2017', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(612, '2018', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(613, '2019', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(614, '2020', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(615, '2021', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(616, '2022', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(617, '2023', 'Ford', 'Edge', '(2nd gen)', 'Mid-size crossover SUV', ''),
(618, '2009', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(619, '2010', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(620, '2011', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(621, '2012', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(622, '2013', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(623, '2014', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(624, '2015', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(625, '2016', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(626, '2017', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(627, '2018', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(628, '2019', 'Ford', 'Flex', '-', 'Full-size crossover SUV', ''),
(629, '1984', 'Ford', 'Bronco II', '(1st gen)', 'Compact SUV', ''),
(630, '1985', 'Ford', 'Bronco II', '(1st gen)', 'Compact SUV', ''),
(631, '1986', 'Ford', 'Bronco II', '(1st gen)', 'Compact SUV', ''),
(632, '1987', 'Ford', 'Bronco II', '(1st gen)', 'Compact SUV', ''),
(633, '1988', 'Ford', 'Bronco II', '(1st gen)', 'Compact SUV', ''),
(634, '1989', 'Ford', 'Bronco II', '(2nd gen)', 'Compact SUV', ''),
(635, '1990', 'Ford', 'Bronco II', '(2nd gen)', 'Compact SUV', ''),
(636, '2001', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(637, '2002', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(638, '2003', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(639, '2004', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(640, '2005', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(641, '2006', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(642, '2007', 'Ford', 'Escape', '(1st gen)', 'Compact SUV', ''),
(643, '2008', 'Ford', 'Escape', '(2nd gen)', 'Compact SUV', ''),
(644, '2009', 'Ford', 'Escape', '(2nd gen)', 'Compact SUV', ''),
(645, '2010', 'Ford', 'Escape', '(2nd gen)', 'Compact SUV', ''),
(646, '2011', 'Ford', 'Escape', '(2nd gen)', 'Compact SUV', ''),
(647, '2012', 'Ford', 'Escape', '(2nd gen)', 'Compact SUV', ''),
(648, '2013', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(649, '2014', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(650, '2015', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(651, '2016', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(652, '2017', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(653, '2018', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(654, '2019', 'Ford', 'Escape', '(3rd gen)', 'Compact SUV', ''),
(655, '2020', 'Ford', 'Escape', '(4th gen)', 'Compact SUV', ''),
(656, '2021', 'Ford', 'Escape', '(4th gen)', 'Compact SUV', ''),
(657, '2022', 'Ford', 'Escape', '(4th gen)', 'Compact SUV', ''),
(658, '2023', 'Ford', 'Escape', '(4th gen)', 'Compact SUV', ''),
(659, '2021', 'Ford', 'Bronco Sport', '-', 'Compact SUV', ''),
(660, '2022', 'Ford', 'Bronco Sport', '-', 'Compact SUV', ''),
(661, '2023', 'Ford', 'Bronco Sport', '-', 'Compact SUV', ''),
(662, '1991', 'Ford', 'Explorer', '(1st gen)', 'Mid-size SUV', ''),
(663, '1992', 'Ford', 'Explorer', '(1st gen)', 'Mid-size SUV', ''),
(664, '1993', 'Ford', 'Explorer', '(1st gen)', 'Mid-size SUV', ''),
(665, '1994', 'Ford', 'Explorer', '(1st gen)', 'Mid-size SUV', ''),
(666, '1995', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(667, '1996', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(668, '1997', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(669, '1998', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(670, '1999', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(671, '2000', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(672, '2001', 'Ford', 'Explorer', '(2nd gen)', 'Mid-size SUV', ''),
(673, '2002', 'Ford', 'Explorer', '(3rd gen)', 'Mid-size SUV', ''),
(674, '2003', 'Ford', 'Explorer', '(3rd gen)', 'Mid-size SUV', ''),
(675, '2004', 'Ford', 'Explorer', '(3rd gen)', 'Mid-size SUV', ''),
(676, '2005', 'Ford', 'Explorer', '(3rd gen)', 'Mid-size SUV', ''),
(677, '2006', 'Ford', 'Explorer', '(4th gen)', 'Mid-size SUV', ''),
(678, '2007', 'Ford', 'Explorer', '(4th gen)', 'Mid-size SUV', ''),
(679, '2008', 'Ford', 'Explorer', '(4th gen)', 'Mid-size SUV', ''),
(680, '2009', 'Ford', 'Explorer', '(4th gen)', 'Mid-size SUV', ''),
(681, '2010', 'Ford', 'Explorer', '(4th gen)', 'Mid-size SUV', ''),
(682, '2011', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(683, '2012', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(684, '2013', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(685, '2014', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(686, '2015', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(687, '2016', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(688, '2017', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(689, '2018', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(690, '2019', 'Ford', 'Explorer', '(5th gen)', 'Mid-size SUV', ''),
(691, '2020', 'Ford', 'Explorer', '(6th gen)', 'Mid-size SUV', ''),
(692, '2021', 'Ford', 'Explorer', '(6th gen)', 'Mid-size SUV', ''),
(693, '2022', 'Ford', 'Explorer', '(6th gen)', 'Mid-size SUV', ''),
(694, '2023', 'Ford', 'Explorer', '(6th gen)', 'Mid-size SUV', ''),
(695, '1966', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(696, '1967', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(697, '1968', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(698, '1969', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(699, '1970', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(700, '1971', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(701, '1972', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(702, '1973', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(703, '1974', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(704, '1975', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(705, '1976', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(706, '1977', 'Ford', 'Bronco', '(1st gen)', 'Full-size SUV', ''),
(707, '1978', 'Ford', 'Bronco', '(2nd gen)', 'Full-size SUV', ''),
(708, '1979', 'Ford', 'Bronco', '(2nd gen)', 'Full-size SUV', ''),
(709, '1980', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(710, '1981', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(711, '1982', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(712, '1983', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(713, '1984', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(714, '1985', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(715, '1986', 'Ford', 'Bronco', '(3rd gen)', 'Full-size SUV', ''),
(716, '1987', 'Ford', 'Bronco', '(4th gen)', 'Full-size SUV', ''),
(717, '1988', 'Ford', 'Bronco', '(4th gen)', 'Full-size SUV', ''),
(718, '1989', 'Ford', 'Bronco', '(4th gen)', 'Full-size SUV', ''),
(719, '1990', 'Ford', 'Bronco', '(4th gen)', 'Full-size SUV', ''),
(720, '1991', 'Ford', 'Bronco', '(4th gen)', 'Full-size SUV', ''),
(721, '1992', 'Ford', 'Bronco', '(5th gen)', 'Full-size SUV', ''),
(722, '1993', 'Ford', 'Bronco', '(5th gen)', 'Full-size SUV', ''),
(723, '1994', 'Ford', 'Bronco', '(5th gen)', 'Full-size SUV', ''),
(724, '1995', 'Ford', 'Bronco', '(5th gen)', 'Full-size SUV', ''),
(725, '1996', 'Ford', 'Bronco', '(5th gen)', 'Full-size SUV', ''),
(726, '1997', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(727, '1998', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(728, '1999', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(729, '2000', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(730, '2001', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(731, '2002', 'Ford', 'Expedition', '(1st gen)', 'Full-size SUV', ''),
(732, '2003', 'Ford', 'Expedition', '(2nd gen)', 'Full-size SUV', ''),
(733, '2004', 'Ford', 'Expedition', '(2nd gen)', 'Full-size SUV', ''),
(734, '2005', 'Ford', 'Expedition', '(2nd gen)', 'Full-size SUV', ''),
(735, '2006', 'Ford', 'Expedition', '(2nd gen)', 'Full-size SUV', ''),
(736, '2007', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(737, '2008', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(738, '2009', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(739, '2010', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(740, '2011', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(741, '2012', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(742, '2013', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(743, '2014', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(744, '2015', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(745, '2016', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(746, '2017', 'Ford', 'Expedition', '(3rd gen)', 'Full-size SUV', ''),
(747, '2018', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(748, '2019', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(749, '2020', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(750, '2021', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(751, '2022', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(752, '2023', 'Ford', 'Expedition', '(4th gen)', 'Full-size SUV', ''),
(753, '2000', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(754, '2001', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(755, '2002', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(756, '2003', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(757, '2004', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(758, '2005', 'Ford', 'Excursion', '-', 'Full-size SUV', ''),
(759, '1957', 'Ford', 'Ranchero', '(1st gen)', 'Coup? utility', ''),
(760, '1958', 'Ford', 'Ranchero', '(1st gen)', 'Coup? utility', '');
INSERT INTO `year_make_model_by_teoalida_sample` (`id`, `Year`, `Make`, `Model`, `Platform code / generation number`, `Class`, `Notes`) VALUES
(761, '1959', 'Ford', 'Ranchero', '(1st gen)', 'Coup? utility', ''),
(762, '1960', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(763, '1961', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(764, '1962', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(765, '1963', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(766, '1964', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(767, '1965', 'Ford', 'Falcon Ranchero', '(2nd gen)', 'Coup? utility', ''),
(768, '1966', 'Ford', 'Ranchero', '(3rd gen)', 'Coup? utility', ''),
(769, '1967', 'Ford', 'Ranchero', '(3rd gen)', 'Coup? utility', ''),
(770, '1968', 'Ford', 'Ranchero', '(4th gen)', 'Coup? utility', ''),
(771, '1969', 'Ford', 'Ranchero', '(4th gen)', 'Coup? utility', ''),
(772, '1970', 'Ford', 'Ranchero', '(5th gen)', 'Coup? utility', ''),
(773, '1971', 'Ford', 'Ranchero', '(5th gen)', 'Coup? utility', ''),
(774, '1972', 'Ford', 'Ranchero', '(6th gen)', 'Coup? utility', ''),
(775, '1973', 'Ford', 'Ranchero', '(6th gen)', 'Coup? utility', ''),
(776, '1974', 'Ford', 'Ranchero', '(6th gen)', 'Coup? utility', ''),
(777, '1975', 'Ford', 'Ranchero', '(6th gen)', 'Coup? utility', ''),
(778, '1976', 'Ford', 'Ranchero', '(6th gen)', 'Coup? utility', ''),
(779, '1977', 'Ford', 'Ranchero', '(7th gen)', 'Coup? utility', ''),
(780, '1978', 'Ford', 'Ranchero', '(7th gen)', 'Coup? utility', ''),
(781, '1979', 'Ford', 'Ranchero', '(7th gen)', 'Coup? utility', ''),
(782, '1978', 'Ford', 'Durango', '-', 'Coup? utility', ''),
(783, '1979', 'Ford', 'Durango', '-', 'Coup? utility', ''),
(784, '1980', 'Ford', 'Durango', '-', 'Coup? utility', ''),
(785, '1981', 'Ford', 'Durango', '-', 'Coup? utility', ''),
(786, '1982', 'Ford', 'Durango', '-', 'Coup? utility', ''),
(787, '1983', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(788, '1984', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(789, '1985', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(790, '1986', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(791, '1987', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(792, '1988', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(793, '1989', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(794, '1990', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(795, '1991', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(796, '1992', 'Ford', 'Ranger', '(1st gen)', 'Compact pickup truck', ''),
(797, '1993', 'Ford', 'Ranger', '(2nd gen)', 'Compact pickup truck', ''),
(798, '1994', 'Ford', 'Ranger', '(2nd gen)', 'Compact pickup truck', ''),
(799, '1995', 'Ford', 'Ranger', '(2nd gen)', 'Compact pickup truck', ''),
(800, '1996', 'Ford', 'Ranger', '(2nd gen)', 'Compact pickup truck', ''),
(801, '1997', 'Ford', 'Ranger', '(2nd gen)', 'Compact pickup truck', ''),
(802, '1998', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(803, '1999', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(804, '2000', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(805, '2001', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(806, '2002', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(807, '2003', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(808, '2004', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(809, '2005', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(810, '2006', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(811, '2007', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(812, '2008', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(813, '2009', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(814, '2010', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', ''),
(815, '2011', 'Ford', 'Ranger', '(3rd gen)', 'Compact pickup truck', 'According Wikipedia it was sold until MY 2012 but Edmunds shows latest year 2011'),
(816, '2022', 'Ford', 'Maverick', '-', 'Compact pickup truck', ''),
(817, '2023', 'Ford', 'Maverick', '-', 'Compact pickup truck', ''),
(818, '2001', 'Ford', 'Explorer Sport Trac', '(1st gen)', 'Mid-size pickup truck', ''),
(819, '2002', 'Ford', 'Explorer Sport Trac', '(1st gen)', 'Mid-size pickup truck', ''),
(820, '2003', 'Ford', 'Explorer Sport Trac', '(1st gen)', 'Mid-size pickup truck', ''),
(821, '2004', 'Ford', 'Explorer Sport Trac', '(1st gen)', 'Mid-size pickup truck', ''),
(822, '2005', 'Ford', 'Explorer Sport Trac', '(1st gen)', 'Mid-size pickup truck', ''),
(823, '2007', 'Ford', 'Explorer Sport Trac', '(2nd gen)', 'Mid-size pickup truck', ''),
(824, '2008', 'Ford', 'Explorer Sport Trac', '(2nd gen)', 'Mid-size pickup truck', ''),
(825, '2009', 'Ford', 'Explorer Sport Trac', '(2nd gen)', 'Mid-size pickup truck', ''),
(826, '2010', 'Ford', 'Explorer Sport Trac', '(2nd gen)', 'Mid-size pickup truck', ''),
(827, '2019', 'Ford', 'Ranger', '(4th gen)', 'Mid-size pickup truck', ''),
(828, '2020', 'Ford', 'Ranger', '(4th gen)', 'Mid-size pickup truck', ''),
(829, '2021', 'Ford', 'Ranger', '(4th gen)', 'Mid-size pickup truck', ''),
(830, '2022', 'Ford', 'Ranger', '(4th gen)', 'Mid-size pickup truck', ''),
(831, '2023', 'Ford', 'Ranger', '(4th gen)', 'Mid-size pickup truck', ''),
(832, '1948', 'Ford', 'F-Series', '(1st gen)', 'Full-size pickup truck', ''),
(833, '1949', 'Ford', 'F-Series', '(1st gen)', 'Full-size pickup truck', ''),
(834, '1950', 'Ford', 'F-Series', '(1st gen)', 'Full-size pickup truck', ''),
(835, '1951', 'Ford', 'F-Series', '(1st gen)', 'Full-size pickup truck', ''),
(836, '1952', 'Ford', 'F-Series', '(1st gen)', 'Full-size pickup truck', ''),
(837, '1953', 'Ford', 'F-Series', '(2nd gen)', 'Full-size pickup truck', ''),
(838, '1954', 'Ford', 'F-Series', '(2nd gen)', 'Full-size pickup truck', ''),
(839, '1955', 'Ford', 'F-Series', '(2nd gen)', 'Full-size pickup truck', ''),
(840, '1956', 'Ford', 'F-Series', '(2nd gen)', 'Full-size pickup truck', ''),
(841, '1957', 'Ford', 'F-Series', '(3rd gen)', 'Full-size pickup truck', ''),
(842, '1958', 'Ford', 'F-Series', '(3rd gen)', 'Full-size pickup truck', ''),
(843, '1959', 'Ford', 'F-Series', '(3rd gen)', 'Full-size pickup truck', ''),
(844, '1960', 'Ford', 'F-Series', '(3rd gen)', 'Full-size pickup truck', ''),
(845, '1961', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(846, '1962', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(847, '1963', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(848, '1964', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(849, '1965', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(850, '1966', 'Ford', 'F-Series', '(4th gen)', 'Full-size pickup truck', ''),
(851, '1967', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(852, '1968', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(853, '1969', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(854, '1970', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(855, '1971', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(856, '1972', 'Ford', 'F-Series', '(5th gen)', 'Full-size pickup truck', ''),
(857, '1973', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(858, '1974', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(859, '1975', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(860, '1976', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(861, '1977', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(862, '1978', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(863, '1979', 'Ford', 'F-Series', '(6th gen)', 'Full-size pickup truck', ''),
(864, '1980', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(865, '1981', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(866, '1982', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(867, '1983', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(868, '1984', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(869, '1985', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(870, '1986', 'Ford', 'F-Series', '(7th gen)', 'Full-size pickup truck', ''),
(871, '1987', 'Ford', 'F-Series', '(8th gen)', 'Full-size pickup truck', ''),
(872, '1988', 'Ford', 'F-Series', '(8th gen)', 'Full-size pickup truck', ''),
(873, '1989', 'Ford', 'F-Series', '(8th gen)', 'Full-size pickup truck', ''),
(874, '1990', 'Ford', 'F-Series', '(8th gen)', 'Full-size pickup truck', ''),
(875, '1991', 'Ford', 'F-Series', '(8th gen)', 'Full-size pickup truck', ''),
(876, '1992', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(877, '1993', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(878, '1994', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(879, '1995', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(880, '1996', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(881, '1997', 'Ford', 'F-Series', '(9th gen)', 'Full-size pickup truck', ''),
(882, '1998', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(883, '1999', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(884, '2000', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(885, '2001', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(886, '2002', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(887, '2003', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(888, '2004', 'Ford', 'F-Series', '(10th gen)', 'Full-size pickup truck', ''),
(889, '2005', 'Ford', 'F-Series', '(11th gen)', 'Full-size pickup truck', ''),
(890, '2006', 'Ford', 'F-Series', '(11th gen)', 'Full-size pickup truck', ''),
(891, '2007', 'Ford', 'F-Series', '(11th gen)', 'Full-size pickup truck', ''),
(892, '2008', 'Ford', 'F-Series', '(11th gen)', 'Full-size pickup truck', ''),
(893, '2009', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(894, '2010', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(895, '2011', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(896, '2012', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(897, '2013', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(898, '2014', 'Ford', 'F-Series', '(12th gen)', 'Full-size pickup truck', ''),
(899, '2015', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(900, '2016', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(901, '2017', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(902, '2018', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(903, '2019', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(904, '2020', 'Ford', 'F-Series', '(13th gen)', 'Full-size pickup truck', ''),
(905, '2021', 'Ford', 'F-Series', '(14th gen)', 'Full-size pickup truck', ''),
(906, '2022', 'Ford', 'F-Series', '(14th gen)', 'Full-size pickup truck', ''),
(907, '2023', 'Ford', 'F-Series', '(14th gen)', 'Full-size pickup truck', ''),
(908, '1999', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(909, '2000', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(910, '2001', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(911, '2002', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(912, '2003', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(913, '2004', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(914, '2005', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(915, '2006', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(916, '2007', 'Ford', 'F-Series Super Duty', '(1st gen)', 'Full-size pickup truck', ''),
(917, '2008', 'Ford', 'F-Series Super Duty', '(2nd gen)', 'Full-size pickup truck', ''),
(918, '2009', 'Ford', 'F-Series Super Duty', '(2nd gen)', 'Full-size pickup truck', ''),
(919, '2010', 'Ford', 'F-Series Super Duty', '(2nd gen)', 'Full-size pickup truck', ''),
(920, '2011', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(921, '2012', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(922, '2013', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(923, '2014', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(924, '2015', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(925, '2016', 'Ford', 'F-Series Super Duty', '(3rd gen)', 'Full-size pickup truck', ''),
(926, '2017', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(927, '2018', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(928, '2019', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(929, '2020', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(930, '2021', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(931, '2022', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(932, '2023', 'Ford', 'F-Series Super Duty', '(4th gen)', 'Full-size pickup truck', ''),
(933, '1955', 'BMW', '250 Isetta', '-', 'Subcompact car', ''),
(934, '1956', 'BMW', '250 Isetta', '-', 'Subcompact car', ''),
(935, '1956', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(936, '1957', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(937, '1958', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(938, '1959', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(939, '1960', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(940, '1961', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(941, '1962', 'BMW', '300 Isetta', '-', 'Subcompact car', ''),
(942, '1957', 'BMW', '600 Isetta', '-', 'Subcompact car', ''),
(943, '1958', 'BMW', '600 Isetta', '-', 'Subcompact car', ''),
(944, '1959', 'BMW', '600 Isetta', '-', 'Subcompact car', ''),
(945, '1960', 'BMW', '600 Isetta', '-', 'Subcompact car', ''),
(946, '1959', 'BMW', '700', '-', 'Subcompact car', ''),
(947, '1960', 'BMW', '700', '-', 'Subcompact car', ''),
(948, '1961', 'BMW', '700', '-', 'Subcompact car', ''),
(949, '1962', 'BMW', '700', '-', 'Subcompact car', ''),
(950, '1963', 'BMW', '700, 700 LS', '-', 'Subcompact car', ''),
(951, '1964', 'BMW', '700, 700 LS', '-', 'Subcompact car', ''),
(952, '1965', 'BMW', '700, 700 LS', '-', 'Subcompact car', ''),
(953, '2014', 'BMW', 'i3', '-', 'Subcompact car', ''),
(954, '2015', 'BMW', 'i3', '-', 'Subcompact car', ''),
(955, '2016', 'BMW', 'i3', '-', 'Subcompact car', ''),
(956, '2017', 'BMW', 'i3', '-', 'Subcompact car', ''),
(957, '2018', 'BMW', 'i3', '-', 'Subcompact car', ''),
(958, '2019', 'BMW', 'i3', '-', 'Subcompact car', ''),
(959, '2020', 'BMW', 'i3', '-', 'Subcompact car', ''),
(960, '2021', 'BMW', 'i3', '-', 'Subcompact car', ''),
(961, '2022', 'BMW', 'i3', '-', 'Subcompact car', ''),
(962, '2023', 'BMW', 'i3', '-', 'Subcompact car', ''),
(963, '2008', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(964, '2009', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(965, '2010', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(966, '2011', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(967, '2012', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(968, '2013', 'BMW', '1-Series', 'E81, E82, E87, E88', 'Compact car', ''),
(969, '2014', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(970, '2015', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(971, '2016', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(972, '2017', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(973, '2018', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(974, '2019', 'BMW', '2-Series', 'F22, F23, F87', 'Compact car', ''),
(975, '2020', 'BMW', '2-Series, M2', 'F22, F23, F87', 'Compact car', ''),
(976, '2021', 'BMW', '2-Series, M2', 'F22, F23, F87', 'Compact car', ''),
(977, '2022', 'BMW', '2-Series, M2', 'F22, F23, F87', 'Compact car', ''),
(978, '2023', 'BMW', '2-Series, M2', 'F22, F23, F87', 'Compact car', ''),
(979, '2020', 'BMW', '2-Series Gran Coup?,F44', 'Compact car', '', NULL),
(980, '2021', 'BMW', '2-Series Gran Coup?,F44', 'Compact car', '', NULL),
(981, '2022', 'BMW', '2-Series Gran Coup?,F44', 'Compact car', '', NULL),
(982, '2023', 'BMW', '2-Series Gran Coup?,F44', 'Compact car', '', NULL),
(983, '1968', 'BMW', '2002, 2002TI', '-', 'Compact car', ''),
(984, '1969', 'BMW', '2002, 2000TI', '-', 'Compact car', ''),
(985, '1970', 'BMW', '2002, 2002TI', '-', 'Compact car', ''),
(986, '1971', 'BMW', '2002, 2002TII', '-', 'Compact car', ''),
(987, '1972', 'BMW', '2002, 2002TII', '-', 'Compact car', ''),
(988, '1973', 'BMW', '2002, 2002TII', '-', 'Compact car', ''),
(989, '1974', 'BMW', '2002, 2002TII', '-', 'Compact car', ''),
(990, '1975', 'BMW', '2002', '-', 'Compact car', ''),
(991, '1976', 'BMW', '2002', '-', 'Compact car', ''),
(992, '1975', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(993, '1976', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(994, '1977', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(995, '1978', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(996, '1979', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(997, '1980', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(998, '1981', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(999, '1982', 'BMW', '3-Series', 'E21', 'Compact car', ''),
(1000, '1983', 'BMW', '3-Series', 'E30', 'Compact car', 'BMW 3-Series E21 may have been sold in parallel with E30 for few years'),
(1001, '1984', 'BMW', '3-Series', 'E30', 'Compact car', ''),
(1002, '1985', 'BMW', '3-Series', 'E30', 'Compact car', ''),
(1003, '1986', 'BMW', '3-Series', 'E30', 'Compact car', ''),
(1004, '1987', 'BMW', '3-Series', 'E30', 'Compact car', ''),
(1005, '1988', 'BMW', '3-Series, M3', 'E30', 'Compact car', ''),
(1006, '1989', 'BMW', '3-Series, M3', 'E30', 'Compact car', ''),
(1007, '1990', 'BMW', '3-Series, M3', 'E30', 'Compact car', ''),
(1008, '1991', 'BMW', '3-Series, M3', 'E30', 'Compact car', ''),
(1009, '1992', 'BMW', '3-Series', 'E36', 'Compact car', 'BMW 3-Series E30 may have been sold in parallel with E36 for few years'),
(1010, '1993', 'BMW', '3-Series', 'E36', 'Compact car', ''),
(1011, '1994', 'BMW', '3-Series', 'E36', 'Compact car', ''),
(1012, '1995', 'BMW', '3-Series, M3', 'E36', 'Compact car', ''),
(1013, '1996', 'BMW', '3-Series, M3', 'E36', 'Compact car', ''),
(1014, '1997', 'BMW', '3-Series, M3', 'E36', 'Compact car', ''),
(1015, '1998', 'BMW', '3-Series, M3', 'E36', 'Compact car', ''),
(1016, '1999', 'BMW', '3-Series, M3', 'E36', 'Compact car', ''),
(1017, '1999', 'BMW', '3-Series', 'E46', 'Compact car', ''),
(1018, '2000', 'BMW', '3-Series', 'E46', 'Compact car', ''),
(1019, '2001', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1020, '2002', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1021, '2003', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1022, '2004', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1023, '2005', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1024, '2006', 'BMW', '3-Series, M3', 'E46', 'Compact car', ''),
(1025, '2006', 'BMW', '3-Series', 'E90, E91, E92, E93', 'Compact car', ''),
(1026, '2007', 'BMW', '3-Series', 'E90, E91, E92, E93', 'Compact car', ''),
(1027, '2008', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1028, '2009', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1029, '2010', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1030, '2011', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1031, '2012', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1032, '2013', 'BMW', '3-Series, M3', 'E90, E91, E92, E93', 'Compact car', ''),
(1033, '2013', 'BMW', '3-Series ', 'F30, F31, F80', 'Compact car', ''),
(1034, '2014', 'BMW', '3-Series ', 'F30, F31, F80', 'Compact car', ''),
(1035, '2015', 'BMW', '3-Series, M3', 'F30, F31, F80', 'Compact car', ''),
(1036, '2016', 'BMW', '3-Series, M3', 'F30, F31, F80', 'Compact car', ''),
(1037, '2017', 'BMW', '3-Series, M3', 'F30, F31, F80', 'Compact car', ''),
(1038, '2018', 'BMW', '3-Series, M3', 'F30, F31, F80', 'Compact car', ''),
(1039, '2019', 'BMW', '3-Series', 'F30, F31, F80', 'Compact car', ''),
(1040, '2020', 'BMW', '3-Series', 'F30, F31, F80', 'Compact car', ''),
(1041, '2020', 'BMW', '3-Series', 'G20, G21', 'Compact car', ''),
(1042, '2021', 'BMW', '3-Series', 'G20, G21', 'Compact car', ''),
(1043, '2022', 'BMW', '3-Series', 'G20, G21', 'Compact car', ''),
(1044, '2023', 'BMW', '3-Series', 'G20, G21', 'Compact car', ''),
(1045, '2014', 'BMW', '4-Series', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1046, '2015', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1047, '2016', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1048, '2017', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1049, '2018', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1050, '2019', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1051, '2020', 'BMW', '4-Series, M4', 'F32, F33, F36, F82, F83', 'Compact car', ''),
(1052, '2021', 'BMW', '4-Series', 'G22, G23, G24', 'Compact car', 'UNCONFIRMED'),
(1053, '2022', 'BMW', '4-Series', 'G22, G23, G24', 'Compact car', 'UNCONFIRMED'),
(1054, '2023', 'BMW', '4-Series', 'G22, G23, G24', 'Compact car', 'UNCONFIRMED'),
(1055, '2014', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1056, '2015', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1057, '2016', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1058, '2017', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1059, '2018', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1060, '2019', 'BMW', '3-Series Gran Turismo', 'F34', 'Compact car', ''),
(1061, '1962', 'BMW', '1500', '-', 'Mid-size car', ''),
(1062, '1963', 'BMW', '1500, 1800', '-', 'Mid-size car', ''),
(1063, '1964', 'BMW', '1500, 1600, 1800, 1800TI', '-', 'Mid-size car', ''),
(1064, '1965', 'BMW', '1600, 1800, 1800TI, 2000C, 2000CS', '-', 'Mid-size car', ''),
(1065, '1966', 'BMW', '1600, 1600-2, 1800, 1800TI, 2000, 2000C, 2000CS, 2000TI', '-', 'Mid-size car', ''),
(1066, '1967', 'BMW', '1600, 1600-2, 1600TI, 1800, 1800TI, 2000, 2000C, 2000CS, 2000TI', '-', 'Mid-size car', ''),
(1067, '1968', 'BMW', '1600, 1600GT, 1600TI, 1800, 2000, 2000C, 2000CS, 2000TI', '-', 'Mid-size car', ''),
(1068, '1969', 'BMW', '1600, 1800, 2000, 2000C, 2000CS', '-', 'Mid-size car', ''),
(1069, '1970', 'BMW', '1600, 2000', '-', 'Mid-size car', ''),
(1070, '1971', 'BMW', '1600, 2000, 2000 Touring, 2000TII', '-', 'Mid-size car', ''),
(1071, '1972', 'BMW', '2000 Touring, 2000TII', '-', 'Mid-size car', ''),
(1072, '1975', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1073, '1976', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1074, '1977', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1075, '1978', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1076, '1979', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1077, '1980', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1078, '1981', 'BMW', '5-Series', 'E12', 'Mid-size car', ''),
(1079, '1982', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1080, '1983', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1081, '1984', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1082, '1985', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1083, '1986', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1084, '1987', 'BMW', '5-Series', 'E28', 'Mid-size car', ''),
(1085, '1988', 'BMW', '5-Series, M5', 'E28', 'Mid-size car', ''),
(1086, '1989', 'BMW', '5-Series', 'E34', 'Mid-size car', ''),
(1087, '1990', 'BMW', '5-Series', 'E34', 'Mid-size car', ''),
(1088, '1991', 'BMW', '5-Series, M5', 'E34', 'Mid-size car', ''),
(1089, '1992', 'BMW', '5-Series, M5', 'E34', 'Mid-size car', ''),
(1090, '1993', 'BMW', '5-Series, M5', 'E34', 'Mid-size car', ''),
(1091, '1994', 'BMW', '5-Series', 'E34', 'Mid-size car', ''),
(1092, '1995', 'BMW', '5-Series', 'E34', 'Mid-size car', ''),
(1093, '1997', 'BMW', '5-Series', 'E39', 'Mid-size car', ''),
(1094, '1998', 'BMW', '5-Series', 'E39', 'Mid-size car', ''),
(1095, '1999', 'BMW', '5-Series', 'E39', 'Mid-size car', ''),
(1096, '2000', 'BMW', '5-Series, M5', 'E39', 'Mid-size car', ''),
(1097, '2001', 'BMW', '5-Series, M5', 'E39', 'Mid-size car', ''),
(1098, '2002', 'BMW', '5-Series, M5', 'E39', 'Mid-size car', ''),
(1099, '2003', 'BMW', '5-Series, M5', 'E39', 'Mid-size car', ''),
(1100, '2004', 'BMW', '5-Series', 'E60, E61', 'Mid-size car', ''),
(1101, '2005', 'BMW', '5-Series', 'E60, E61', 'Mid-size car', ''),
(1102, '2006', 'BMW', '5-Series, M5', 'E60, E61', 'Mid-size car', ''),
(1103, '2007', 'BMW', '5-Series, M5', 'E60, E61', 'Mid-size car', ''),
(1104, '2008', 'BMW', '5-Series, M5', 'E60, E61', 'Mid-size car', ''),
(1105, '2009', 'BMW', '5-Series, M5', 'E60, E61', 'Mid-size car', ''),
(1106, '2010', 'BMW', '5-Series, M5', 'E60, E61', 'Mid-size car', ''),
(1107, '2011', 'BMW', '5-Series', 'F10, F11', 'Mid-size car', ''),
(1108, '2012', 'BMW', '5-Series', 'F10, F11', 'Mid-size car', ''),
(1109, '2013', 'BMW', '5-Series, M5', 'F10, F11', 'Mid-size car', ''),
(1110, '2014', 'BMW', '5-Series, M5', 'F10, F11', 'Mid-size car', ''),
(1111, '2015', 'BMW', '5-Series, M5', 'F10, F11', 'Mid-size car', ''),
(1112, '2016', 'BMW', '5-Series, M5', 'F10, F11', 'Mid-size car', ''),
(1113, '2017', 'BMW', '5-Series', 'G30, G31', 'Mid-size car', ''),
(1114, '2018', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1115, '2019', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1116, '2020', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1117, '2021', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1118, '2022', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1119, '2023', 'BMW', '5-Series, M5', 'G30, G31', 'Mid-size car', ''),
(1120, '2010', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1121, '2011', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1122, '2012', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1123, '2013', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1124, '2014', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1125, '2015', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1126, '2016', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1127, '2017', 'BMW', '5-Series Gran Turismo', 'F07', 'Mid-size car', ''),
(1128, '2018', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1129, '2019', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1130, '2020', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1131, '2021', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1132, '2022', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1133, '2023', 'BMW', '6-Series Gran Turismo', 'G32', 'Mid-size car', ''),
(1134, '2022', 'BMW', 'i4', '-', 'Mid-size car', ''),
(1135, '2023', 'BMW', 'i4', '-', 'Mid-size car', ''),
(1136, '1977', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1137, '1978', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1138, '1979', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1139, '1980', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1140, '1981', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1141, '1982', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1142, '1983', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1143, '1984', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1144, '1985', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1145, '1986', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1146, '1987', 'BMW', '6-Series, M6', 'E24', 'Grand tourer', ''),
(1147, '1988', 'BMW', '6-Series, M6', 'E24', 'Grand tourer', ''),
(1148, '1989', 'BMW', '6-Series', 'E24', 'Grand tourer', ''),
(1149, '1991', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1150, '1992', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1151, '1993', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1152, '1994', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1153, '1995', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1154, '1996', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1155, '1997', 'BMW', '8-Series', 'E31', 'Grand tourer', ''),
(1156, '2004', 'BMW', '6-Series', 'E63, E64', 'Grand tourer', ''),
(1157, '2005', 'BMW', '6-Series', 'E63, E64', 'Grand tourer', ''),
(1158, '2006', 'BMW', '6-Series, M6', 'E63, E64', 'Grand tourer', ''),
(1159, '2007', 'BMW', '6-Series, M6', 'E63, E64', 'Grand tourer', ''),
(1160, '2008', 'BMW', '6-Series, M6', 'E63, E64', 'Grand tourer', ''),
(1161, '2009', 'BMW', '6-Series, M6', 'E63, E64', 'Grand tourer', ''),
(1162, '2010', 'BMW', '6-Series, M6', 'E63, E64', 'Grand tourer', ''),
(1163, '2012', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1164, '2013', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1165, '2014', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1166, '2015', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1167, '2016', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1168, '2017', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1169, '2018', 'BMW', '6-Series, M6', 'F12, F13', 'Grand tourer', ''),
(1170, '2019', 'BMW', '8-Series', 'G14, G15, G16', 'Grand tourer', ''),
(1171, '2020', 'BMW', '8-Series', 'G14, G15, G16', 'Grand tourer', ''),
(1172, '2021', 'BMW', '8-Series', 'G14, G15, G16', 'Grand tourer', ''),
(1173, '2022', 'BMW', '8-Series', 'G14, G15, G16', 'Grand tourer', ''),
(1174, '2023', 'BMW', '8-Series', 'G14, G15, G16', 'Grand tourer', ''),
(1175, '1952', 'BMW', '501', '-', 'Full-size car', ''),
(1176, '1953', 'BMW', '501', '-', 'Full-size car', ''),
(1177, '1954', 'BMW', '501', '-', 'Full-size car', ''),
(1178, '1955', 'BMW', '501', '-', 'Full-size car', ''),
(1179, '1956', 'BMW', '501', '-', 'Full-size car', ''),
(1180, '1957', 'BMW', '501', '-', 'Full-size car', ''),
(1181, '1958', 'BMW', '501', '-', 'Full-size car', ''),
(1182, '1959', 'BMW', '501', '-', 'Full-size car', ''),
(1183, '1960', 'BMW', '501', '-', 'Full-size car', ''),
(1184, '1961', 'BMW', '501', '-', 'Full-size car', ''),
(1185, '1954', 'BMW', '502', '-', 'Full-size car', ''),
(1186, '1955', 'BMW', '502', '-', 'Full-size car', ''),
(1187, '1956', 'BMW', '502', '-', 'Full-size car', ''),
(1188, '1957', 'BMW', '502', '-', 'Full-size car', ''),
(1189, '1958', 'BMW', '502', '-', 'Full-size car', ''),
(1190, '1959', 'BMW', '502', '-', 'Full-size car', ''),
(1191, '1960', 'BMW', '502', '-', 'Full-size car', ''),
(1192, '1961', 'BMW', '502', '-', 'Full-size car', ''),
(1193, '1961', 'BMW', '2600, 2600L, 3200L, 3200S', '-', 'Full-size car', ''),
(1194, '1962', 'BMW', '2600, 2600L, 3200CS, 3200L, 3200S', '-', 'Full-size car', ''),
(1195, '1963', 'BMW', '2600L, 3200CS, 3200S', '-', 'Full-size car', ''),
(1196, '1964', 'BMW', '3200CS', '-', 'Full-size car', ''),
(1197, '1965', 'BMW', '3200CS', '-', 'Full-size car', ''),
(1198, '1968', 'BMW', '2800CS', 'E9', 'Full-size car', ''),
(1199, '1969', 'BMW', '2500, 2800, 2800CS', 'E9', 'Full-size car', ''),
(1200, '1970', 'BMW', '2500, 2800, 2800CS', 'E9', 'Full-size car', ''),
(1201, '1971', 'BMW', '2500, 2800, 2800 Bavaria, 2800CS', 'E9', 'Full-size car', ''),
(1202, '1973', 'BMW', '2800', 'E9', 'Full-size car', ''),
(1203, '1971', 'BMW', '3.0CS, 3.0CSL, 3.0S', 'E3', 'Full-size car', ''),
(1204, '1972', 'BMW', '3.0 Bavaria, 3.0CS, 3.0CSL, 3.0S', 'E3', 'Full-size car', ''),
(1205, '1973', 'BMW', '3.0 Bavaria, 3.0CS, 3.0CSL, 3.0S', 'E3', 'Full-size car', ''),
(1206, '1974', 'BMW', '3.0 Bavaria, 3.0CS, 3.0CSL, 3.0S', 'E3', 'Full-size car', ''),
(1207, '1975', 'BMW', '3.0CSI, 3.0S, 3.0SIO', 'E3', 'Full-size car', ''),
(1208, '1976', 'BMW', '3.0SI', 'E3', 'Full-size car', ''),
(1209, '1978', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1210, '1979', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1211, '1980', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1212, '1981', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1213, '1982', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1214, '1983', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1215, '1984', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1216, '1985', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1217, '1986', 'BMW', '7-Series', 'E23', 'Full-size car', ''),
(1218, '1987', 'BMW', '7-Series', 'E23', 'Full-size car', 'Possible wrong model year'),
(1219, '1987', 'BMW', '7-Series', 'E32', 'Full-size car', 'Possible wrong model year'),
(1220, '1988', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1221, '1989', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1222, '1990', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1223, '1991', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1224, '1992', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1225, '1993', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1226, '1994', 'BMW', '7-Series', 'E32', 'Full-size car', ''),
(1227, '1995', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1228, '1996', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1229, '1997', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1230, '1998', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1231, '1999', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1232, '2000', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1233, '2001', 'BMW', '7-Series', 'E38', 'Full-size car', ''),
(1234, '2002', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1235, '2003', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1236, '2004', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1237, '2005', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1238, '2006', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1239, '2007', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1240, '2008', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1241, '2009', 'BMW', '7-Series', 'E65, E66', 'Full-size car', ''),
(1242, '2010', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1243, '2011', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1244, '2012', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1245, '2013', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1246, '2014', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1247, '2015', 'BMW', '7-Series', 'F01, F02', 'Full-size car', ''),
(1248, '2016', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1249, '2017', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1250, '2018', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1251, '2019', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1252, '2020', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1253, '2021', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1254, '2022', 'BMW', '7-Series', 'G11, G12', 'Full-size car', ''),
(1255, '2023', 'BMW', '7-Series', 'G70', 'Full-size car', ''),
(1256, '1996', 'BMW', 'Z3', 'E36', 'Sport compact car', ''),
(1257, '1997', 'BMW', 'Z3', 'E36', 'Sport compact car', ''),
(1258, '1998', 'BMW', 'Z3, M', 'E36', 'Sport compact car', ''),
(1259, '1999', 'BMW', 'Z3, M', 'E36', 'Sport compact car', ''),
(1260, '2000', 'BMW', 'Z3, M', 'E36', 'Sport compact car', ''),
(1261, '2001', 'BMW', 'Z3, M', 'E36', 'Sport compact car', ''),
(1262, '2002', 'BMW', 'Z3, M', 'E36', 'Sport compact car', ''),
(1263, '2003', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1264, '2004', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1265, '2005', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1266, '2006', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1267, '2007', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1268, '2008', 'BMW', 'Z4', 'E85, E86', 'Sport compact car', ''),
(1269, '2009', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1270, '2010', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1271, '2011', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1272, '2012', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1273, '2013', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1274, '2014', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1275, '2015', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1276, '2016', 'BMW', 'Z4', 'E89', 'Sport compact car', ''),
(1277, '2019', 'BMW', 'Z4', 'G29', 'Sport compact car', ''),
(1278, '2020', 'BMW', 'Z4', 'G29', 'Sport compact car', ''),
(1279, '2021', 'BMW', 'Z4', 'G29', 'Sport compact car', ''),
(1280, '2022', 'BMW', 'Z4', 'G29', 'Sport compact car', ''),
(1281, '2023', 'BMW', 'Z4', 'G29', 'Sport compact car', ''),
(1282, '1956', 'BMW', '503', '-', 'Sports car', ''),
(1283, '1957', 'BMW', '503', '-', 'Sports car', ''),
(1284, '1958', 'BMW', '503', '-', 'Sports car', ''),
(1285, '1959', 'BMW', '503', '-', 'Sports car', ''),
(1286, '1956', 'BMW', '507', '-', 'Roadster car', ''),
(1287, '1957', 'BMW', '507', '-', 'Roadster car', ''),
(1288, '1958', 'BMW', '507', '-', 'Roadster car', ''),
(1289, '1959', 'BMW', '507', '-', 'Roadster car', ''),
(1290, '1978', 'BMW', 'M1', '-', 'Sports car', ''),
(1291, '1979', 'BMW', 'M1', '-', 'Sports car', ''),
(1292, '1980', 'BMW', 'M1', '-', 'Sports car', ''),
(1293, '1981', 'BMW', 'M1', '-', 'Sports car', ''),
(1294, '2000', 'BMW', 'Z8', 'E52', 'Sports car', ''),
(1295, '2001', 'BMW', 'Z8', 'E52', 'Sports car', ''),
(1296, '2002', 'BMW', 'Z8', 'E52', 'Sports car', ''),
(1297, '2003', 'BMW', 'Z8', 'E52', 'Sports car', ''),
(1298, '2014', 'BMW', 'i8', '-', 'Sports car', ''),
(1299, '2015', 'BMW', 'i8', '-', 'Sports car', ''),
(1300, '2016', 'BMW', 'i8', '-', 'Sports car', ''),
(1301, '2017', 'BMW', 'i8', '-', 'Sports car', ''),
(1302, '2018', 'BMW', 'i8', '-', 'Sports car', ''),
(1303, '2019', 'BMW', 'i8', '-', 'Sports car', ''),
(1304, '2020', 'BMW', 'i8', '-', 'Sports car', ''),
(1305, '2013', 'BMW', 'X1', 'E84', 'Compact SUV', ''),
(1306, '2014', 'BMW', 'X1', 'E84', 'Compact SUV', ''),
(1307, '2015', 'BMW', 'X1', 'E84', 'Compact SUV', ''),
(1308, '2016', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1309, '2017', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1310, '2018', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1311, '2019', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1312, '2020', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1313, '2021', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1314, '2022', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1315, '2023', 'BMW', 'X1', 'F48', 'Compact SUV', ''),
(1316, '2018', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1317, '2019', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1318, '2020', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1319, '2021', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1320, '2022', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1321, '2023', 'BMW', 'X2', 'F39', 'Compact SUV', ''),
(1322, '2004', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1323, '2005', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1324, '2006', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1325, '2007', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1326, '2008', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1327, '2009', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1328, '2010', 'BMW', 'X3', 'E83', 'Compact SUV', ''),
(1329, '2011', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1330, '2012', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1331, '2013', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1332, '2014', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1333, '2015', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1334, '2016', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1335, '2017', 'BMW', 'X3', 'F25', 'Compact SUV', ''),
(1336, '2018', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1337, '2019', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1338, '2020', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1339, '2021', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1340, '2022', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1341, '2023', 'BMW', 'X3', 'G01', 'Compact SUV', ''),
(1342, '2015', 'BMW', 'X4', 'F26', 'Compact crossover SUV', ''),
(1343, '2016', 'BMW', 'X4', 'F26', 'Compact crossover SUV', ''),
(1344, '2017', 'BMW', 'X4', 'F26', 'Compact crossover SUV', ''),
(1345, '2018', 'BMW', 'X4', 'F26', 'Compact crossover SUV', ''),
(1346, '2019', 'BMW', 'X4', 'G02', 'Compact crossover SUV', ''),
(1347, '2020', 'BMW', 'X4', 'G02', 'Compact crossover SUV', ''),
(1348, '2021', 'BMW', 'X4', 'G02', 'Compact crossover SUV', ''),
(1349, '2022', 'BMW', 'X4', 'G02', 'Compact crossover SUV', ''),
(1350, '2023', 'BMW', 'X4', 'G02', 'Compact crossover SUV', ''),
(1351, '2000', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1352, '2001', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1353, '2002', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1354, '2003', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1355, '2004', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1356, '2005', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1357, '2006', 'BMW', 'X5', 'E53', 'Mid-size SUV', ''),
(1358, '2008', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1359, '2009', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1360, '2010', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1361, '2011', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1362, '2012', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1363, '2013', 'BMW', 'X5', 'E70', 'Mid-size SUV', ''),
(1364, '2014', 'BMW', 'X5', 'F15', 'Mid-size SUV', ''),
(1365, '2015', 'BMW', 'X5', 'F15', 'Mid-size SUV', ''),
(1366, '2016', 'BMW', 'X5', 'F15', 'Mid-size SUV', ''),
(1367, '2017', 'BMW', 'X5', 'F15', 'Mid-size SUV', ''),
(1368, '2018', 'BMW', 'X5', 'F15', 'Mid-size SUV', ''),
(1369, '2019', 'BMW', 'X5', 'G05', 'Mid-size SUV', ''),
(1370, '2020', 'BMW', 'X5', 'G05', 'Mid-size SUV', ''),
(1371, '2021', 'BMW', 'X5', 'G05', 'Mid-size SUV', ''),
(1372, '2022', 'BMW', 'X5', 'G05', 'Mid-size SUV', ''),
(1373, '2023', 'BMW', 'X5', 'G05', 'Mid-size SUV', ''),
(1374, '2008', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1375, '2009', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1376, '2010', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1377, '2011', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1378, '2012', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1379, '2013', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1380, '2014', 'BMW', 'X6', 'E71, E72', 'Mid-size crossover SUV', ''),
(1381, '2015', 'BMW', 'X6', 'F16', 'Mid-size crossover SUV', ''),
(1382, '2016', 'BMW', 'X6', 'F16', 'Mid-size crossover SUV', ''),
(1383, '2017', 'BMW', 'X6', 'F16', 'Mid-size crossover SUV', ''),
(1384, '2018', 'BMW', 'X6', 'F16', 'Mid-size crossover SUV', ''),
(1385, '2019', 'BMW', 'X6', 'F16', 'Mid-size crossover SUV', ''),
(1386, '2020', 'BMW', 'X6', 'G06', 'Mid-size crossover SUV', ''),
(1387, '2021', 'BMW', 'X6', 'G06', 'Mid-size crossover SUV', ''),
(1388, '2022', 'BMW', 'X6', 'G06', 'Mid-size crossover SUV', ''),
(1389, '2023', 'BMW', 'X6', 'G06', 'Mid-size crossover SUV', ''),
(1390, '2022', 'BMW', 'iX', 'I20', 'Mid-size crossover SUV', ''),
(1391, '2023', 'BMW', 'iX', 'I20', 'Mid-size crossover SUV', ''),
(1392, '2019', 'BMW', 'X7', 'G07', 'Full-size SUV', ''),
(1393, '2020', 'BMW', 'X7', 'G07', 'Full-size SUV', ''),
(1394, '2021', 'BMW', 'X7', 'G07', 'Full-size SUV', ''),
(1395, '2022', 'BMW', 'X7', 'G07', 'Full-size SUV', ''),
(1396, '2023', 'BMW', 'X7', 'G07', 'Full-size SUV', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_categories`
--
ALTER TABLE `music_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist_details`
--
ALTER TABLE `playlist_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `song_has_authors`
--
ALTER TABLE `song_has_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_has_categories`
--
ALTER TABLE `song_has_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_make_model_by_teoalida_sample`
--
ALTER TABLE `year_make_model_by_teoalida_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music_categories`
--
ALTER TABLE `music_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `playlist_details`
--
ALTER TABLE `playlist_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `song_has_authors`
--
ALTER TABLE `song_has_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `song_has_categories`
--
ALTER TABLE `song_has_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `year_make_model_by_teoalida_sample`
--
ALTER TABLE `year_make_model_by_teoalida_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1397;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
