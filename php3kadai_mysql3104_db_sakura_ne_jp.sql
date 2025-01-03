-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql3104.db.sakura.ne.jp
-- 生成日時: 2025 年 1 月 03 日 11:07
-- サーバのバージョン： 8.0.40
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `compassion8008_php3`
--
CREATE DATABASE IF NOT EXISTS `compassion8008_php3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `compassion8008_php3`;

-- --------------------------------------------------------

--
-- テーブルの構造 `php3kadai`
--

CREATE TABLE `php3kadai` (
  `id` int NOT NULL,
  `theme` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `php3kadai`
--

INSERT INTO `php3kadai` (`id`, `theme`, `url`, `content`, `date`) VALUES
(4, 'どうかな', '3333', 'お願い', '2024-12-30 00:00:00'),
(5, 'きしもと', '111@', '疲れた', '2024-12-30 00:00:00'),
(6, '久美子', 'kkk@', 'どうでしょう？', '2024-12-31 00:00:00'),
(7, 'kishimoto', '1231@', '今日は乙巳', '2024-12-31 00:00:00'),
(8, '岸本久美子', '1231@ueno', 'セレクトphpが繋がらない', '2024-12-31 00:00:00'),
(9, 'もう嫌だ', '1231@panda', 'データベース嫌だ', '2024-12-31 00:00:00'),
(10, 'まだできない', '20250101', 'もう辞めたい', '2025-01-01 11:12:38'),
(11, 'どうかな', '20250101', 'こっちは？', '2025-01-01 14:49:00'),
(12, 'kishimoto', '20250101', 'よくわからん', '2025-01-01 15:17:12'),
(13, 'サクラサーバコントローラ更新', '20250101', '更新', '2025-01-01 16:04:39');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php3kadai`
--
ALTER TABLE `php3kadai`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php3kadai`
--
ALTER TABLE `php3kadai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
