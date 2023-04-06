-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-04-06 10:12
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `mysql`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `pizza1` int(11) NOT NULL,
  `pizza2` int(11) NOT NULL,
  `pizza3` int(11) NOT NULL,
  `pizza4` int(11) NOT NULL,
  `pizza5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `pizza`
--

INSERT INTO `pizza` (`id`, `pizza1`, `pizza2`, `pizza3`, `pizza4`, `pizza5`) VALUES
(1, 23, 12, 24, 54, 32),
(2, 23, 12, 24, 54, 32),
(3, 23, 12, 11, 23, 11),
(4, 23, 12, 11, 9, 1),
(5, 124, 124, 525, 234, 123),
(7, 25, 156, 223, 2315, 253),
(8, 3, 2, 1, 3, 4),
(9, 145, 355, 344, 1111, 22),
(10, 123, 424, 321, 232, 44),
(11, 400, 424, 321, 232, 44);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
