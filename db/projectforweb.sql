-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th4 28, 2024 lúc 12:48 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectforweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` varchar(255) NOT NULL,
  `mabill` varchar(255) NOT NULL,
  `MASP` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietbill`
--

INSERT INTO `chitietbill` (`id`, `mabill`, `MASP`, `soluong`) VALUES
('1741900173696967093153602996989', '4128393241270184357146066114154', '00003', 1),
('2504796341536673576955540729574', '4128393241270184357146066114154', '00002', 1),
('3487463060325534138592296149816', '4128393241270184357146066114154', '000026', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
