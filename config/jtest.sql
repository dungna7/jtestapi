-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2019 lúc 10:35 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jtest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `choiceA` varchar(200) NOT NULL,
  `choiceB` varchar(200) NOT NULL,
  `choiceC` varchar(200) NOT NULL,
  `choiceD` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correctAnswer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `content`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `type`, `level`, `correctAnswer`) VALUES
(1, '辞書', 'じいしょ', 'じしょう', 'じしょ', 'じいしょ', 1, 5, 3),
(2, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(3, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(4, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(5, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(6, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(7, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(8, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(9, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(10, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(11, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(12, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(13, 'content', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 1, 5, 1),
(14, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(15, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(16, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(17, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1),
(18, '編集', 'へんしゅう', 'へんしゅ', 'へしゅ', 'べんしゅう', 1, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testlist`
--

CREATE TABLE `testlist` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `testlist`
--

INSERT INTO `testlist` (`id`, `name`, `author`, `level`) VALUES
(2, 'dethiN5', 'dung', 5),
(3, 'testn5', 'dungna', 5),
(4, 'testn4', 'dungna7', 4),
(5, 'testn3', 'dungna3', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testquestion`
--

CREATE TABLE `testquestion` (
  `id` int(11) NOT NULL,
  `testID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `testquestion`
--

INSERT INTO `testquestion` (`id`, `testID`, `questionID`) VALUES
(1, 1, 1),
(20, 1, 4),
(24, 2, 1),
(23, 2, 2),
(19, 2, 3),
(5, 2, 4),
(6, 2, 5),
(7, 2, 6),
(8, 2, 7),
(9, 2, 8),
(10, 2, 9),
(11, 2, 10),
(12, 2, 11),
(13, 2, 12),
(14, 2, 13),
(15, 2, 14),
(16, 2, 15),
(17, 2, 16),
(18, 2, 17),
(3, 2, 18),
(25, 3, 1),
(26, 3, 2),
(27, 3, 3),
(28, 3, 4),
(29, 3, 5),
(30, 3, 6),
(31, 3, 7),
(32, 3, 8),
(33, 4, 1),
(34, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`) VALUES
(1, 'dungna7@example.com', '$2y$10$o5AkFQjI5MzFnyl7asbo0.Bja80g6/xzJg1sryOGMQFIT4PKrwgcK', '2019-03-26 08:40:26', '2019-03-26 08:43:05'),
(2, 'dungna@example.com', '$2y$10$4aLjOcxYt1rewFg9mMFYXOlviIs5VNw8kKQG.fSg/z6aBkNcjsDem', '2019-03-26 08:43:24', '2019-03-26 08:43:24'),
(3, 'dungna2@example.com', '$2y$10$6uHzLqUk.CpIc0KUvNq3JOT7l5u8dyE1ZAGq.g2O2aWNCtHgUPsE2', '2019-03-26 08:44:51', '2019-03-26 08:44:51'),
(4, 'dungna1@example.com', '$2y$10$9oxTA.6mgvXL1ax2OqpV5.ILQ4hZs8y0MjpixByrTb7y1KP.YX3dO', '2019-03-29 01:52:52', '2019-03-29 01:52:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `testlist`
--
ALTER TABLE `testlist`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `testquestion`
--
ALTER TABLE `testquestion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testID` (`testID`,`questionID`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `testlist`
--
ALTER TABLE `testlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `testquestion`
--
ALTER TABLE `testquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
