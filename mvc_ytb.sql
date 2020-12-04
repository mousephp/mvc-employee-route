-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 21, 2020 lúc 09:51 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_ytb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `employee_type` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`id`, `name`, `age`, `sex`, `employee_type`) VALUES
(1, 'html', 12, 2, 0),
(2, 'css 1', 13, 1, 1),
(3, 'hung', 30, 1, 1),
(4, 'hung', 23, 2, 1),
(5, 'SAMSUNG GALAXY J7 PRO 123', 6, 1, 1),
(6, 'HTC', 15, 0, 0),
(7, 'HTC', 15, 2, 0),
(8, 'java', 16, 2, 0),
(9, 'LG', 19, 1, 1),
(10, 'js', 20, 2, 0),
(12, 'scss', 10, 1, 0),
(13, 'scss', 10, 1, 1),
(14, 'scss', 10, 2, 1),
(15, 'HTC', 60, 1, 1),
(16, 'HTC1', 60, 2, 1),
(17, 'cuchuoi', 60, 0, 1),
(18, 'concac1', 16, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

DROP TABLE IF EXISTS `nhan_vien`;
CREATE TABLE IF NOT EXISTS `nhan_vien` (
  `id_nv` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tuoi` int(2) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id_nv`, `ten`, `tuoi`, `gioi_tinh`) VALUES
(1, 'bootstrap', 11, 1),
(2, 'html', 11, 1),
(3, 'php', 11, 1),
(4, 'css', 12, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
