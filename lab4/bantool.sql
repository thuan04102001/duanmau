-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 23, 2020 lúc 09:02 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bantool`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(12) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(12) NOT NULL,
  `idsp` int(12) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timecmt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `iduser`, `idsp`, `noidung`, `timecmt`) VALUES
(1, 'Người dùng 1', 0, 30, 'thuận đẹp trai', NULL),
(4, 'Người dùng 1', 0, 30, 'Sau khi quậy tung trời ở khu Thiên Đường, Triệu Ngọc xuất hiện với gương mặt của đội trưởng quản giáo tới khu Địa Ngục cứu cha vợ Miêu Khôn. Không ngờ khu Địa Ngục lại còn giam cầm Lundy', NULL),
(7, 'Thuận', 0, 30, 'Sản phẩm tốt...Tôi khuyến khích thường xuyên update hơn.', NULL),
(8, 'Thuận', 0, 30, 'a', NULL),
(9, 'Thuận', 0, 0, 'a', NULL),
(10, 'Thuận', 0, 0, 'a', NULL),
(11, 'Thuận', 0, 0, 'a', NULL),
(12, 'Thuận', 0, 0, 'a', NULL),
(13, 'Thuận', 0, 0, 'cccc', NULL),
(14, 'Người dùng 1', 0, 0, 'cc', NULL),
(15, 'Người dùng 1', 0, 0, 'vd', NULL),
(16, 'Người dùng 1', 0, 39, 'yyyyyy', NULL),
(17, 'Người dùng 1', 0, 39, 'sssss', NULL),
(18, 'Người dùng 1', 0, 44, 'dcds', NULL),
(19, 'Người dùng 1', 0, 43, 'dvdsv', NULL),
(20, 'Thuận', 0, 35, '', NULL),
(21, 'Thuận', 0, 40, 'vip', NULL),
(22, 'Thuận', 0, 38, ' đẹp trai vcl', NULL),
(23, 'Người dùng 1', 0, 34, '', NULL),
(24, 'Người dùng 1', 0, 34, 's', NULL),
(25, 'Thuận', 0, 34, 'ádad', NULL),
(26, 'Thuận', 0, 34, '', NULL),
(27, 'Thuận', 0, 34, 'â', NULL),
(28, 'Thuận', 0, 34, 'sss', NULL),
(29, '', 0, 30, 'q', NULL),
(30, 'Rambo', 0, 30, 's', NULL),
(31, 'Thuận', 0, 43, 'yyyy', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucs`
--

CREATE TABLE `danhmucs` (
  `id` int(12) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sort` tinyint(2) NOT NULL DEFAULT 0,
  `sphot` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucs`
--

INSERT INTO `danhmucs` (`id`, `name`, `sort`, `sphot`) VALUES
(16, 'Facebook', 0, 1),
(17, 'Instagram', 0, 0),
(18, 'Tiktok', 0, 1),
(19, 'Like', 0, 0),
(20, 'Comment', 0, 0),
(21, 'Share', 0, 1),
(22, 'Unlock', 0, 1),
(23, 'Report', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(12) NOT NULL,
  `updatenew` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(12) DEFAULT 0,
  `iddm` int(12) NOT NULL,
  `hot` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `updatenew`, `name`, `img`, `price`, `iddm`, `hot`) VALUES
(30, '22-02-2020', 'TOOL FOLLOW VIỆT', 'sanpham.png', 450000, 16, 1),
(31, '24-01-2020', 'TOOL AUTO COMMENT', 'sanpham.png', 600000, 16, 0),
(32, '24-01-2020', 'AUTO LIKE', 'sanpham.png', 400000, 16, 0),
(33, '24-01-2020', 'AUTO FOLLOW', 'sanpham.png', 400000, 17, 0),
(34, '24-01-2020', 'TOOL BOT INSTAGRAM', 'sanpham.png', 350000, 17, 1),
(35, '24-01-2020', 'FOLLOWER TIKTOK', 'sanpham.png', 450000, 18, 1),
(36, '24-01-2020', 'AUTO THẢ TIM', 'sanpham.png', 250000, 18, 0),
(37, '24-01-2020', 'BOT CẢM XÚC FB', 'sanpham.png', 200000, 19, 0),
(38, '24-01-2020', 'BUFF LIKE MAXSPEED', 'sanpham.png', 400000, 19, 0),
(39, '24-01-2020', 'BUFF COMMENT POST', 'sanpham.png', 150000, 20, 0),
(40, '24-01-2020', 'BUFF SHARE MAXSPEED', 'sanpham.png', 200000, 21, 1),
(41, '24-01-2020', 'UNLOCK FACEBOOK', 'sanpham.png', 600000, 22, 0),
(42, '24-01-2020', 'REPORT VICTIM', 'sanpham.png', 350000, 20, 1),
(43, '24-01-2020', 'UNLOCK 303 FB', 'sanpham.png', 1000000, 22, 1),
(44, '24-01-2020', 'COMMENT INSTAGRAM', 'sanpham.png', 250000, 21, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emaillh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `emaillh`, `role`, `name`, `sdt`) VALUES
(1, 'user@gmail.com', '123', 'user@gmail.com', 0, 'Rambo', '11212'),
(2, 'admin@gmail.com', '04102001', 'admin@gmail.com', 1, 'Thuận', '19001098'),
(3, 'user1@gmail.com', '1234', 'user1@gmail.com', 0, 'Linh', '0913528211'),
(5, 'nhozthuanfa@gmail.com', '4321', 'nhozthuanfa@gmail.com', 0, 'Độ', '012346789'),
(6, 'sydo@gmail.com', '111', 'sydo@gmail.com', 0, 'Sỹ', '05597000'),
(7, 'user2@gmail.com', '1234', 'user2@gmail.com', 0, 'Trùm', '0389759896'),
(8, 'user3@gmail.com', '1234', 'user3@gmail.com', 0, 'hhh', '84983');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmucs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
