-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2020 lúc 09:36 AM
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
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `ho_ten` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `username` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `ho_ten`, `username`, `password`, `email`, `sdt`) VALUES
(12, 'Nguyễn Thế Bắc', 'bacnt', '8cb2237d0679ca88db6464eac60da96345513964', 'bac.nt.670@aptechlearning.edu.vn', 975316940),
(13, 'Nguyễn Văn A', 'admin1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abc@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id_sp` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(100) NOT NULL,
  `gia_km` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `gia_km`) VALUES
('DT1', 'SamSung Galaxy S20 Plus', 's20+.jpg', 24990000, 17990000),
('DT10', 'Oppo A31', 'op_a31.jpg', 4190000, 3790000),
('DT11', 'Vivo U10', 'vivo_u10.jpg', 3290000, 2890000),
('DT12', 'Vsmart Joy 3', 'vsmart_j3.jpg', 2490000, 2290000),
('DT13', 'Iphone 7 Plus', 'ip7p.jpg', 12490000, 8990000),
('DT14', 'Samsung Galaxy Note 20 Ultra', 'note-20-ultra-5g-gold-dd.jpg', 29990000, 29990000),
('DT15', 'Xiaomi Redmi 9C 2GB-32GB', 'xiaomi-redmi-9c-xanh-dd-bh.jpg', 2490000, 2490000),
('DT2', 'SamSung Galaxy Note 10 Lite', 'note10lite.jpg', 14490000, 10490000),
('DT3', 'Oppo Reno 3', 'op_reno3.jpg', 4490000, 4190000),
('DT4', 'SamSung Galaxy M31', 'm31.jpg', 3490000, 3290000),
('DT5', 'Iphone XS Max 64G', 'ipxs_max.jpg', 23490000, 18490000),
('DT6', 'Iphone 11 Pro Max', 'ip11pro_max.jpg', 33990000, 27990000),
('DT7', 'SamSung Galaxy A71', 'a71.jpg', 10490000, 8490000),
('DT8', 'SamSung Galaxy S20 Ultra', 's20u.jpg', 27490000, 20490000),
('DT9', 'SamSung Galaxy Note 10', 'note10.jpg', 16490000, 11490000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `id_sp` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(100) NOT NULL,
  `gia_km` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `gia_km`) VALUES
('LT10', 'Asus Vivobook X509FA-EJ871T/i3-8145U', 'asus_vivo_x509fa.jpg', 10890000, 10340000),
('LT11', 'MacBook Air 13\" 2017 1.8GHz Core i5', 'mac_air_13.jpg', 19990000, 19490000),
('LT12', 'Dell Vostro V3580/Core i7-8565U/T3RMD2', 'dell_v3580.jpg', 30990000, 30990000),
('LT13', 'HP ENVY X360-AR0071AU/R5-3500U/8GB/256G SSD/WIN10', 'hp_envy_x360.jpg', 22890000, 21890000),
('LT14', 'Lenovo Ideapad L340-15IRH/i5 9300H', 'lenovo_l340.jpg', 17990000, 16190000),
('LT15', 'HP Pavilion 15-cs3060TX/i5-1035G1', 'hp_pavilon_15cs.jpg', 18190000, 17490000),
('LT16', 'Acer Aspire A315-34-P3LC/Pentium N5000/NX.HE3SV.004', 'acer_a315.jpg', 7990000, 7990000),
('LT2', 'Asus FX505DT-AL003T/R7-3750H', 'asus_fx505dt.jpg', 18990000, 18990000),
('LT3', 'Dell V3590 i5 10210U/P75F010N90B', 'dell_v3590.jpg', 16990000, 16490000),
('LT4', 'HP Pavilion 14-ce3026TU/i5-1035G1', 'hp_pavilion_14ce.jpg', 16990000, 16290000),
('LT5', 'HP 348 G7/i5-10210U', 'hp-348.jpg', 15690000, 14990000),
('LT6', 'Asus Vivobook X509MA-BR272T/N4020', 'asus-vivobook-x509.jpg', 6990000, 6990000),
('LT7', 'Macbook Pro 13 Touch Bar i5 2.4GHz/8G/256GB (2019)', 'macbook-pro--touch-bar.jpg', 44490000, 41490000),
('LT8', 'Macbook Pro 13 Touch Bar i5 2.4GHz/8G/512GB (2019)', 'macbook-pro--touch.jpg', 51990000, 48990000),
('LT9', 'HP 15s-fq1107TU/i3-1005G1', 'hp_15s_fq.jpg', 10690000, 10190000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muahang`
--

CREATE TABLE `muahang` (
  `id` int(10) NOT NULL,
  `hoten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(20) NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(10) NOT NULL,
  `anh_slide` char(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `anh_slide`) VALUES
(1, 'slide-1.png'),
(2, 'slide-2.png'),
(3, 'slide-3.png'),
(4, 'slide-4.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `muahang`
--
ALTER TABLE `muahang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `muahang`
--
ALTER TABLE `muahang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
