-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2020 lúc 10:24 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_simpletest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhang`
--

CREATE TABLE `nganhhang` (
  `id_nh` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhhang`
--

INSERT INTO `nganhhang` (`id_nh`, `name`) VALUES
(1, 'Điện Gia Dụng'),
(2, 'Nội Thất'),
(3, 'Gia Dụng'),
(4, 'Hàng Trang Trí'),
(5, 'Dịch Vụ'),
(6, 'Chuyên Mục');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_sp` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_sp`, `name`, `id_type`, `unit_price`, `promotion_price`, `image`) VALUES
(1, 'Lò Vi Sóng KITCHENLUX 20MG65-L/800W', 1, 2190000, 1590000, 'lovisong-1.jpg'),
(2, 'Ghế Sofa Phòng Khách 123', 2, 1230000, 1190000, ''),
(3, 'Lò Vi Sóng SIMPLEHOME 20MX63-L', 1, 1690000, 1290000, 'lo-vi-song-2.jpg'),
(4, 'Lò Vi Sóng SIMPLEHOME 20MG63-L', 1, 1890000, 1490000, 'lo-vi-song-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_sl` int(11) NOT NULL,
  `link` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `vt` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_sl`, `link`, `image`, `vt`) VALUES
(1, '', 'banner-cat1.jpg', 1),
(2, '', 'banner-cat2.jpg', 2),
(3, '', 'banner-cat3.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id_type` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_nganh` int(10) NOT NULL,
  `menu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id_type`, `name`, `id_nganh`, `menu`) VALUES
(1, 'Lò vi sóng', 1, 1),
(2, 'Bếp điện từ/hồng ngoại', 1, 1),
(3, 'Vĩ nướng điện', 1, 1),
(4, 'Máy xay sinh tố/Máy ép', 1, 2),
(5, 'Bình điện đun nước', 1, 2),
(6, 'Máy vắt nước cam', 1, 2),
(7, 'Bàn ủi', 1, 3),
(8, 'Bình nước nóng lạnh', 1, 3),
(9, 'Sofa phòng khách', 2, 1),
(10, 'Ghế bàn/thư giãn', 2, 1),
(11, 'Bàn phòng khách', 2, 1),
(12, 'Bàn làm việc', 2, 1),
(13, 'Ghế văn phòng', 2, 2),
(14, 'Ghế ăn', 2, 2),
(15, 'Bàn ăn', 2, 2),
(16, 'Bộ bàn - ghế ăn', 2, 2),
(17, 'Giường ngủ', 2, 3),
(18, 'Tủ các loại', 2, 3),
(19, 'Bộ phòng ngủ', 2, 3),
(20, 'Các bộ nội thất', 2, 3),
(21, 'Đồ gia dụng', 3, 1),
(22, 'Hàng trang trí', 4, 1),
(23, 'Dịch vụ', 5, 1),
(24, 'Giới thiệu', 6, 1),
(25, 'Tin tức', 6, 1),
(26, 'Phong thủy', 6, 2),
(27, 'Giải pháp', 6, 2),
(28, 'Tiện ích', 6, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nganhhang`
--
ALTER TABLE `nganhhang`
  ADD PRIMARY KEY (`id_nh`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_sl`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id_type`),
  ADD KEY `id_nganh` (`id_nganh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nganhhang`
--
ALTER TABLE `nganhhang`
  MODIFY `id_nh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id_type`);

--
-- Các ràng buộc cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD CONSTRAINT `type_products_ibfk_1` FOREIGN KEY (`id_nganh`) REFERENCES `nganhhang` (`id_nh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
