-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 7 月 02 日 16:40
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsf_d06_db17`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `account_table`
--

CREATE TABLE `account_table` (
  `id` int(12) NOT NULL,
  `old` varchar(128) NOT NULL,
  `prefecture` varchar(128) NOT NULL,
  `message` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `account_table`
--

INSERT INTO `account_table` (`id`, `old`, `prefecture`, `message`, `created_at`, `updated_at`) VALUES
(1, '12', '福岡', 'できる？', '2020-07-01 01:27:46', '2020-07-01 01:27:46'),
(2, '12', '福岡', 'できる？', '2020-07-01 01:28:07', '2020-07-01 01:28:07'),
(3, '', '', '', '2020-07-01 01:30:44', '2020-07-01 01:30:44'),
(4, '', '', '', '2020-07-01 01:35:16', '2020-07-01 01:35:16'),
(5, '12', '福岡', 'できる？', '2020-07-01 01:35:37', '2020-07-01 01:35:37'),
(6, '15', 'ふくおか', 'できない', '2020-07-01 22:47:17', '2020-07-01 22:47:17'),
(7, '15', 'ふくおか', 'できる？', '2020-07-02 12:02:34', '2020-07-02 12:02:34'),
(8, '15', 'ふくおか', 'できる？', '2020-07-02 12:03:47', '2020-07-02 12:03:47'),
(9, '', '', '', '2020-07-02 12:05:27', '2020-07-02 12:05:27'),
(10, '15', 'ふくおか', 'できる？', '2020-07-02 12:06:06', '2020-07-02 12:06:06');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'SQLを', '2020-06-26', '2020-06-20 15:32:33', '2020-07-02 11:37:28'),
(3, 'SQLやらない', '2020-06-25', '2020-06-20 15:38:50', '2020-06-20 15:38:50'),
(4, 'PHP', '2020-06-29', '2020-06-20 15:39:33', '2020-06-20 15:39:33'),
(5, 'JS', '2020-06-23', '2020-06-20 15:40:42', '2020-06-20 15:40:42'),
(6, 'CSSをかく', '2020-07-12', '2020-06-20 15:43:33', '2020-06-20 15:43:33'),
(7, '成功', '2020-06-23', '2020-06-20 17:14:20', '2020-06-20 17:14:20'),
(8, 'やること', '2020-06-03', '2020-06-20 17:14:30', '2020-06-20 17:14:30'),
(9, 'アイ', '2020-06-16', '2020-06-22 14:21:05', '2020-06-22 14:21:05'),
(10, '確認', '2020-06-29', '2020-06-27 15:13:05', '2020-06-27 15:13:05');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `old` varchar(12) NOT NULL,
  `prefecture` varchar(12) NOT NULL,
  `message` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `usern`, `mail`, `pass`, `old`, `prefecture`, `message`, `created_at`, `updated_at`) VALUES
(1, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'kokoko', '12', 'ふくおか', 'できる？', '2020-06-22 14:58:47', '2020-07-02 21:53:02'),
(4, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'koko', '', '', '', '2020-06-22 17:13:18', '2020-06-22 17:13:18'),
(5, 'しちじ', 'しちじ', 'skosei554@yahoo.co.jp', 'vovovo', '', '', '', '2020-06-22 20:36:54', '2020-06-22 20:36:54'),
(7, 'しちだ', 'じじ', 'skosei554@gamil.com', 'koseikose', '', '', '', '2020-06-23 23:45:21', '2020-07-02 22:36:56'),
(8, 'しちじ', 'じじ', 'skosei554@gamil.com', 'vovovo', '', '', '', '2020-06-24 23:57:20', '2020-06-24 23:57:20'),
(10, '七字晃正', 'しちじ', 'skosei554@yahoo.co.jp', 'koko', '', '', '', '2020-06-25 02:11:16', '2020-06-25 02:11:16'),
(11, 'できるかな', 'できる', 'swsw', 'qwqw', '', '', '', '2020-06-25 15:40:04', '2020-07-02 11:54:12'),
(14, '太郎', 'たろう', 'swswsw@', 'jiji', '15', 'さが', 'できない', '2020-06-25 15:59:19', '2020-07-02 22:42:07'),
(15, 'なぜ', '何故', 'naze', 'naze', '', '', '', '2020-06-28 13:21:40', '2020-06-28 13:21:40'),
(16, 'コウセイ', 'コウセイ', 'skosei554@gamil.com', 'qwqw54', '', '', '', '2020-06-30 22:24:46', '2020-06-30 22:24:46'),
(17, '七字晃正', 'たろう', 'skosei554@yahoo.co.jp', 'qwqw', '', '', '', '2020-07-02 11:48:51', '2020-07-02 11:48:51'),
(20, '七字晃正', 'こうせい', 'skosei554@yahoo.co.jp', 'aaa', '27', '福岡', 'お願いします。', '2020-07-02 13:26:10', '2020-07-02 13:26:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `account_table`
--
ALTER TABLE `account_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `account_table`
--
ALTER TABLE `account_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
