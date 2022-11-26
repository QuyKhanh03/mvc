-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2022 lúc 07:24 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2041`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(255) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `anh_dai_dien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ten_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `anh_dai_dien`) VALUES
(1, 'Phạm Khánh', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `noi_dung`, `id_user`, `id_product`, `thoi_gian`) VALUES
(2, 'ahihii', 1, 236, '2022-10-21 10:29:07'),
(3, 'ahihii', 1, 236, '2022-10-21 10:30:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_loai_cha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`, `mo_ta`, `ma_loai_cha`) VALUES
(9, 'Đồ Nam', NULL, 0),
(15, 'Đồ Nữ', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten_nguoi_dung`, `ten_dang_nhap`, `mat_khau`) VALUES
(31, 'Phạm Khánh', 'phamkhanh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Phạm Thế Trung', 'trung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 'Khuyên1', 'khuyen@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04'),
(25, 'Bá12', 'ba1@gmail.com', '15c6d98082895abf1c20c0358aff2a67'),
(16, 'Hung', 'hung@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(26, 'Vũ1', 'vu@gmail.com', '70873e8580c9900986939611618d7b1e'),
(27, 'Hung1', 'hung1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(28, 'Hello', 'hello@gmail.com', 'fa246d0262c3925617b0c72bb20eeb1d'),
(29, 'Ngoc', 'ngoc@gmail.com', 'fa246d0262c3925617b0c72bb20eeb1d'),
(30, 'Vũ', 'luuvu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_chi_tiet` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `don_gia` int(11) NOT NULL DEFAULT 0,
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giam_gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san_pham`, `ma_loai`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `giam_gia`) VALUES
(236, 'Drawstring Sweatshirt', '9', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur aliquid in temporibus accusantium quae sed minus perferendis velit, non aperiam!', 18, 'n_arrival_product01.jpg', 10),
(251, 'Winter Jacket', '9', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur aliquid in temporibus accusantium quae sed minus perferendis velit, non aperiam!', 30, 'trending_product08.jpg', 10),
(252, 'Giày cao gót', '15', 'Thông tin sản phẩm: Mạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda - Quần dáng body, bản cạp nối, 2 khuy - Vải 98%cotton, ', 29, 'trending_product12.jpg', 10),
(249, 'Winter Jacket', '15', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur aliquid in temporibus accusantium quae sed minus perferendis velit, non aperiam!', 29, 'cart_p02.jpg', 20),
(250, 'Winter Jacket', '15', 'Thông tin sản phẩm: Mạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda - Quần dáng body, bản cạp nối, 2 khuy - Vải 98%cotton, 2%spandex, vải độc quyền của nhà máy không có trên thị trường Việt Nam - Tỷ lệ phai màu 2/10 nhưng vẫn giữ được màu căn bản của quần - Chất jean dày dăn, co giãn ít, có độ bền cao. - Tỷ lệ phai màu là 1/10 nhưng vẫn giữ được màu căn bản của quần -Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu - Quần có 3 gam màu xanh đậm, xanh vừa và xanh nhạt dễ dàng mix với nhiều kiểu, Size 1,3,5,7,9 Thông tin người mẫu: - Chiều cao: 1m65 - Cân nặng: 47kg - Số đo 3 vòng: 81 - 62 - 89 - Size người mẫu mặc: 1', 30, 'shop_details_img01.jpg', 10),
(238, 'Women Shoes', '15', 'Thông tin sản phẩm:\r\n\r\nMạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda\r\n\r\n- Quần dáng body, bản cạp nối, 2 khuy \r\n\r\n- Vải 98%cotton, 2%spandex, vải độc quyền của nhà máy không có trên thị trường Việt Nam\r\n\r\n- Tỷ lệ phai màu 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n- Chất jean dày dăn, co giãn ít, có độ bền cao.\r\n\r\n- Tỷ lệ phai màu là 1/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 3 gam màu xanh đậm, xanh vừa và xanh nhạt dễ dàng mix với nhiều kiểu, Size 1,3,5,7,9\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 1', 67, 'features_product01.jpg', 10),
(239, 'Women sleeping dress', '15', 'Thông tin sản phẩm:\r\n\r\nMạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda\r\n\r\n- Quần dáng body, bản cạp nối, 2 khuy \r\n\r\n- Vải 98%cotton, 2%spandex, vải độc quyền của nhà máy không có trên thị trường Việt Nam\r\n\r\n- Tỷ lệ phai màu 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n- Chất jean dày dăn, co giãn ít, có độ bền cao.\r\n\r\n- Tỷ lệ phai màu là 1/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 3 gam màu xanh đậm, xanh vừa và xanh nhạt dễ dàng mix với nhiều kiểu, Size 1,3,5,7,9\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 1', 59, 'trending_product03.jpg', 10),
(248, 'Winter Jacket', '15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.', 29, 'cart_p01.jpg', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieu_de`
--

CREATE TABLE `tieu_de` (
  `id` int(11) NOT NULL,
  `ten_tieu_de` varchar(255) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tieu_de`
--

INSERT INTO `tieu_de` (`id`, `ten_tieu_de`, `hinh`, `trang_thai`) VALUES
(1, 'Thắng Hoàng 213 213', '301048402_750206276243564_3472248481592502779_n.jpeg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tieu_de`
--
ALTER TABLE `tieu_de`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT cho bảng `tieu_de`
--
ALTER TABLE `tieu_de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
