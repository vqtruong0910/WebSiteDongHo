-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2021 lúc 04:13 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon_chitiet`
--

CREATE TABLE `hoadon_chitiet` (
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `mahd` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_mua` timestamp NULL DEFAULT current_timestamp(),
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NhanVienXuLy` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_1_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_2_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_3_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_4_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_5_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_6_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_7_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `title`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `sub_7`, `sub_1_link`, `sub_2_link`, `sub_3_link`, `sub_4_link`, `sub_5_link`, `sub_6_link`, `sub_7_link`) VALUES
(3, 'DANH MỤC', 'Đồng hồ Casio', 'Đồng hồ Citizen', 'Đồng hồ Doxa', 'Đồng hồ Tissot', 'Đồng hồ Longines', 'Đồng hồ Movado', 'Đồng hồ Frederique Constant', '?menu=casio', '?menu=citizen', '?menu=doxa', '?menu=tissot', '?menu=longines', '?menu=movado', '?menu=frederiqueconstant');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url_match` varchar(255) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `privilege`
--

INSERT INTO `privilege` (`id`, `group_id`, `name`, `url_match`, `created_time`, `last_updated`) VALUES
(1, 1, 'Danh Sách Sản Phẩm', 'index\\.php\\?menu=ql_sanpham$|\\?menu=ql_sanpham$', 32423242, 4545445),
(2, 1, 'Sản Phẩm Hết Hàng', 'index\\.php\\?menu=sp_hethang$|\\?menu=sp_hethang$', 32423242, 4545445),
(3, 1, 'Thêm Sản Phẩm Mới', 'index\\.php\\?menu=them_sp$|\\?menu=them_sp$', 32423242, 4545445),
(4, 2, 'Danh Sách Đơn Hàng', 'index\\.php\\?menu=hoa_don$|\\?menu=hoa_don$', 32423242, 4545445),
(5, 2, 'Đơn Hàng Chưa Xử Lý', 'index\\.php\\?menu=hoa_don_chua$|\\?menu=hoa_don_chua$', 32423242, 4545445),
(6, 2, 'Đơn Hàng Đã Xử lý', 'index\\.php\\?menu=hoa_don_duyet$|\\?menu=hoa_don_duyet$', 32423242, 4545445),
(7, 3, 'Danh Sách Tài Khoản Quản Trị', 'index\\.php\\?menu=quan_ly_admin$|\\?menu=quan_ly_admin$', 32423242, 4545445),
(8, 3, 'Thêm Tài Khoản', 'index\\.php\\?menu=them_tt_admin$|\\?menu=them_tt_admin$', 32423242, 4545445),
(9, 3, 'Quản Lý Người Dùng', 'index\\.php\\?menu=quan_ly_thanhvien$|\\?menu=quan_ly_thanhvien$', 32423242, 4545445),
(10, 4, 'Thống Kê', 'index\\.php\\?menu=thongke$|\\?menu=thongke$', 32423242, 4545445),
(11, 3, 'Đăng xuất', 'index\\.php\\?menu=logout$|\\?menu=logout$', 32423242, 4545445),
(12, 1, 'Chi tiết Sản Phẩm', 'index\\.php\\?menu=chi_tiet&masp=\\d+$|\\?menu=chi_tiet&masp=\\d+$', 45645, 564666),
(13, 1, 'Sửa Sản Phẩm', 'index\\.php\\?menu=sua_sp&masp=\\d+$|\\d?menu=sua_sp&masp=\\d+$', 32423242, 4545445),
(14, 1, 'Xóa Sản phẩm', 'index\\.php\\?menu=xoa_sp&masp=\\d+$', 32423242, 4545445),
(15, 1, 'Thêm Sản phẩm', 'index\\.php\\?menu=exec_them_sp$', 32423242, 4545445),
(16, 2, 'Chi Tiết Hóa Đơn', 'index\\.php\\?menu=chi_tiet_hoa_don&ma_hoadon=\\d+$|\\?menu=chi_tiet_hoa_don&ma_hoadon=\\d+$', 32423242, 4545445),
(18, 1, 'Xử lý sửa sản Phẩm', 'index\\.php\\?menu=exec_sua_sp$|\\?menu=exec_sua_sp$', 32423242, 4545445),
(19, 2, 'Xác Nhận Đơn', 'index\\.php\\?menu=xu_ly&ma_hoadon=\\d+$|\\?menu=xu_ly&ma_hoadon=\\d+$', 432423, 43234),
(20, 2, 'Hủy Hóa Đơn', 'index\\.php\\?menu=xoa&ma_hoadon=\\d+&soluong=\\d+&masp=\\d+$|\\?menu=xoa&ma_hoadon=\\d+&soluong=\\d+&masp=\\d+$', 32423242, 4545445),
(21, 2, 'Hủy Hóa Đơn Đã Xác Nhận', 'index\\.php\\?menu=xoa&ma_hoadon=\\d+$|\\?menu=xoa&ma_hoadon=\\d+$', 32423242, 4545445),
(22, 3, 'Đổi Mật Khẩu Admin', 'index\\.php\\?menu=sua_tt_admin&id=\\d+$|\\?menu=sua_tt_admin&id=\\d+$', 78, 534),
(23, 3, 'Phân Quyền Nhân Viên', 'index\\.php\\?menu=phan_quyen&id=\\d+$|\\?menu=phan_quyen&id=\\d+$', 2223, 2323),
(24, 3, 'Xóa Tài khoản NV', 'index\\.php\\?menu=xoa_tt_admin&id=\\d+$|\\?menu=xoa_tt_admin&id=\\d+$', 32423242, 4545445),
(25, 3, 'Xử lý Thêm Tài Khoản NV', 'index\\.php\\?menu=exec_them_tt_admin$|\\?menu=exec_them_tt_admin$', 32423242, 4545445),
(26, 3, 'Lưu phân Quyền', 'index\\.php\\?menu=phan_quyen&action=save$|\\?menu=phan_quyen&action=save$', 32423242, 4545445),
(27, 1, 'Nhập Hàng', 'index\\.php\\?menu=nhap_hang&masp=\\d+$|\\?menu=nhap_hang&masp=\\d+$', 456565, 656656),
(28, 1, 'Xử Lí Nhập hàng', 'index\\.php\\?menu=exe_nhap_hang$|\\?menu=exec_nhap_hang$', 456565, 656656),
(29, 3, 'Xử Lý Đổi Mật Khẩu Admin', 'index\\.php\\?menu=exec_sua_tt_admin$|\\?menu=exec_sua_tt_admin$', 456565, 656656),
(30, 1, 'Xử Lý thêm sản phẩm', 'index\\.php\\?menu=exec_them_sp$|\\?menu=exec_them_sp$', 456565, 656656);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `privilege_group`
--

CREATE TABLE `privilege_group` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `privilege_group`
--

INSERT INTO `privilege_group` (`id`, `name`, `position`, `created_time`, `last_update`) VALUES
(1, 'Sản Phẩm', 1, 32423242, 4234324),
(2, 'Đơn Hàng', 2, 32423242, 345345),
(3, 'Quản Trị Viên', 3, 32423242, 4234324),
(4, 'Thống Kê', 4, 32423242, 4234324);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_tri`
--

CREATE TABLE `quan_tri` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quyen_truy_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_tri`
--

INSERT INTO `quan_tri` (`id`, `name`, `pass`, `quyen_truy_cap`) VALUES
(1, 'admin2', '202cb962ac59075b964b07152d234b70', 1),
(15, 'nhan_vien_quan_li', '202cb962ac59075b964b07152d234b70', 0),
(16, 'nhan_vien_ban_hang', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_bat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_thuong_hieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`masp`, `tensp`, `giasp`, `soluong`, `img`, `img1`, `img2`, `loaisp`, `noi_bat`, `moi`, `id_thuong_hieu`) VALUES
(14, 'CASIO MTP-1384D-1AVDF – NAM', 2420000, 100, 'casio/casio1.jpg', 'casio/casio1_a.jpg', 'casio/casio1_b.jpg', 'casio', 'co', '', 1),
(16, 'CASIO EFR-526L-1AVUDF – NAM', 4650000, 100, 'casio/casio3.jpg', 'casio/casio3_a.jpg', 'casio/casio3_b.jpg', 'casio', '', 'co', 1),
(17, 'CASIO MTP-1302D-7A1VDF – NAM', 6185000, 100, 'casio/casio4.jpg', 'casio/casio4_a.jpg', 'casio/casio4_b.jpg', 'casio', '', '', 1),
(18, 'CASIO MTP-1381L-1AVDF – NAM', 1680000, 90, 'casio/casio5.jpg', 'casio/casio5.jpg', 'casio/casio5_a.jpg', 'casio', '', '', 1),
(19, 'CASIO NAM MTP-1375L-7AVDF', 1650000, 10, 'casio/casio6.jpg', 'casio/casio6_a.jpg', 'casio/casio6_b.jpg', 'casio', '', 'co', 1),
(20, 'CASIO EFV-500D-7AVUDF – NAM ', 3390000, 9, 'casio/casio7.jpg', 'casio/casio7_a.jpg', 'casio/casio7_b.jpg', 'casio', '', '', 1),
(21, 'CASIO MTP-V300G-1AUDF – NAM', 7350000, 6, 'casio/casio8.jpg', 'casio/casio8_a.jpg', 'casio/casio8_b.jpg', 'casio', '', '', 1),
(22, 'CASIO MTP-1384L-7AVDF – NAM', 1350000, 8, 'casio/casio9.jpg', 'casio/casio9_a.jpg', 'casio/casio9_b.jpg', 'casio', '', 'co', 1),
(23, 'CITIZEN BM7330-67L – NAM', 2260000, 6, 'citizen/citizen1.jpg', 'citizen/citizen1_a.jpg', 'citizen/citizen1_b.jpg', 'citizen', 'co', '', 2),
(24, 'CITIZEN NP1020-15A – NAM', 1380000, 96, 'citizen/citizen2.jpg', 'citizen/citizen2_a.jpg', 'citizen/citizen2_b.jpg', 'citizen', 'co', '', 2),
(25, 'CITIZEN BI5000-10E – NAM ', 6350000, 10, 'citizen/citizen3.jpg', 'citizen/citizen3_a.jpg', 'citizen/citizen3_b.jpg', 'citizen', '', 'co', 2),
(29, 'CITIZEN NH8350-59A – NAM', 3480000, 7, 'citizen/citizen5.jpg', 'citizen/citizen5_a.jpg', 'citizen/citizen5_b.jpg', 'citizen', 'co', '', 2),
(30, 'CITIZEN BE9174-55A – NAM', 4380000, 12, 'citizen/citizen6.jpg', 'citizen/citizen6_a.jpg', 'citizen/citizen6_b.jpg', 'citizen', 'co', '', 2),
(31, 'CITIZEN BF2005-54L – NAM', 5180000, 40, 'citizen/citizen7.jpg', 'citizen/citizen7_a.jpg', 'citizen/citizen7_b.jpg', 'citizen', 'co', '', 2),
(32, 'DOXA D211SBU VSAN – NAM ', 4550000, 4, 'doxa/doxa1.jpg', 'doxa/doxa1_a.jpg', 'doxa/doxa1_b.jpg', 'doxa', 'co', '', 3),
(33, 'DOXA D173TCM VSAN – NAM', 4880000, 6, 'doxa/doxa2.jpg', 'doxa/doxa2_a.jpg', 'doxa/doxa2_b.jpg', 'doxa', 'co', '', 3),
(34, 'DOXA D181TBU GHTR – NAM', 2280000, 4, 'doxa/doxa3.jpg\r\n', 'doxa/doxa3_a.jpg', 'doxa/doxa3_b.jpg', 'doxa', '', '', 3),
(36, 'DOXA D105SMW TDS – NAM', 5220000, 20, 'doxa/doxa1.jpg', 'doxa/doxa1_a.jpg', 'doxa/doxa2_b.jpg', 'doxa', '', '', 3),
(37, 'DOXA D201RIY JKH – NAM', 5120000, 11, 'doxa/doxa6.jpg', 'doxa/doxa5_a.jpg', 'doxa/doxa6_b.jpg', 'doxa', '', '', 3),
(38, 'DOXA D211SSV MCK - NAM', 1150000, 10, 'doxa/doxa7.jpg', 'doxa/doxa7_a.jpg', 'doxa/doxa7_b.jpg', 'doxa', '', 'co', 3),
(39, 'TISSOT T063.637 – NAM ', 1420000, 100, 'tissot/tissot1.jpg', 'tissot/tissot1_a.jpg', 'tissot/tissot1_b.jpg', 'tissot', 'co', '', 7),
(40, 'TISSOT T063.610.16 – NAM', 3150000, 3, 'tissot/tissot2.jpg', 'tissot/tissot2_a.jpg', 'tissot/tissot2_b.jpg', 'tissot', 'co', '', 7),
(41, 'TISSOT T109.410.36. – NAM', 5280000, 4, 'tissot/tissot3.jpg', 'tisssot/tissot3_a.jpg', 'tissot/tissot3_b.jpg', 'tissot', '', 'co', 7),
(43, 'TISSOT T063.610.22 – NAM', 3690000, 5, 'tissot/tissot4.jpg', 'tissot/tissot4_a.jpg', 'tissot/tissot4_b.jpg', 'tissot', '', 'co', 7),
(44, 'TISSOT T019.430.36 – NAM ', 7690000, 5, 'tissot/tissot5.jpg', 'tissot/tissot5_a.jpg', 'tissot/tissot5_b.jpg', 'tissot', '', '', 7),
(45, 'TISSOT T926.407.16 – NAM', 5690000, 5, 'tissot/tissot6.jpg', 'tissot/tissot6_a.jpg', 'tissot/tissot6_b.jpg', 'tissot', '', '', 7),
(46, 'LONGINES L2.755 – NAM', 4690000, 5, 'longines/longines1.jpg', 'longines/longines1_a.jpg', 'longines/longines1_b.jpg', 'longines', 'co', '', 4),
(47, 'LONGINES L3.741.4 – NAM', 1690000, 3, 'longines/longines2.jpg', 'longines/longines2_a.jpg', 'longines/longines2_b.jpg', 'longines', 'co', '', 4),
(48, 'LONGINES L2.4.93 – NAM ', 3690000, 5, 'longines/longines3.jpg', 'longines/longines3_a.jpg', 'longines/longines3_b.jpg', 'longines', 'co', '', 4),
(49, 'LONGINES L4.11.2 – NAM ', 5690000, 5, 'longines/longines4.jpg', 'longines/longines4_a.jpg', 'longines/longines4_b.jpg', 'longines', 'co', '', 4),
(51, 'MOVADO 0606114 – NAM', 2690000, 3, 'movado/movado1.jpg', 'movado/movado1_a.jpg', 'movado/movado1_b.jpg', 'movado', 'co', '', 5),
(52, 'MOVADO 3600455 – NAM', 6690000, 4, 'movado/movado2.jpg', 'movado/movado2_a.jpg', 'movado/movado2_b.jpg', 'movado', 'co', '', 5),
(53, 'MOVADO 0606916 – NAM', 1690000, 5, 'movado/movado3.jpg', 'movado/movado3_a.jpg', 'movado/movado3_b.jpg', 'movado', '', 'co', 5),
(54, 'MOVADO 0607063 – NAM', 7490000, 5, 'movado/movado4.jpg', 'movado/movado4_a.jpg', 'movado/movado4_b.jpg', 'movado', '', 'co', 5),
(55, 'MOVADO 0607092 – NAM', 3490000, 5, 'movado/movado5.jpg', 'movado/movado5_a.jpg', 'movado/movado5_b.jpg', 'movado', '', '', 5),
(56, 'FRCG 200S5S36-5436F – NAM', 7490000, 4, 'frcg/frcg1.jpg', 'frcg/frcg1_a.jpg', 'frcg/frcg1_b.jpg', 'frederiqueconstant', '', '', 6),
(57, 'FRCG FC-220S5S6B – NAM', 2190000, 5, 'frcg/frcg2.jpg', 'frcg/frcg2_a.jpg', 'frcg/frcg1_b.jpg', 'frederiqueconstant', 'co', '', 6),
(58, 'FRCG FC-303MN5B4 – NAM', 8110000, 5, 'frcg/frcg3.jpg', 'frcg/frcg3_a.jpg', 'frcg/frcg3_b.jpg', 'frederiqueconstant', '', 'co', 6),
(59, 'FRCG FC-292MV5B4 – NAM', 8110000, 5, 'frcg/frcg4.jpg', 'frcg/frcg4_a.jpg', 'frcg/frcg4_b.jpg', 'frederiqueconstant', '', 'co', 6),
(60, 'FRCG FC-335MC4P6 – NAM', 1210000, 4, 'frcg/frcg5.jpg', 'frcg/frcg5_a.jpg', 'frcg/frcg5_b.jpg', 'frederiqueconstant', 'co', '', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `name`, `note`) VALUES
(11, 'casio.jpg', 'active'),
(12, 'citizen.jpg', NULL),
(13, 'doxa.jpg', NULL),
(16, 'tissot.jpg', ''),
(17, 'longines.jpg', ''),
(18, 'movado.jpg', ''),
(19, 'frcg.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `email`, `password`, `hoten`, `sdt`, `diachi`, `status`) VALUES
(8, 'levietsanh123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'levietsanh', '0399922906', 'vcbcvn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsp`
--

CREATE TABLE `thongtinsp` (
  `id` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `so_hieu_sp` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xuat_xu` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kinh` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `may` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinsp`
--

INSERT INTO `thongtinsp` (`id`, `masp`, `so_hieu_sp`, `xuat_xu`, `kinh`, `may`) VALUES
(1, 14, 'Số Hiệu Sản Phẩm: MTP-1384D-1AVDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(3, 16, 'Số Hiệu Sản Phẩm: EFR-526L-1AVUDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(5, 17, 'Số Hiệu Sản Phẩm: MTP-1302D-7A1VDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(6, 18, 'Số Hiệu Sản Phẩm: MTP-1381L-1AVDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(33, 19, 'Số Hiệu Sản Phẩm: MTP-1375L-7AVDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(34, 20, 'Số Hiệu Sản Phẩm: EFV-500D-7AVUDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(35, 21, 'Số Hiệu Sản Phẩm: MTP-V300G-1AUDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(36, 22, 'Số Hiệu Sản Phẩm: MTP-1384L-7AVDF', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(37, 23, 'Số Hiệu Sản Phẩm: BM7330-67L', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Eco-Drive (Năng Lượng Ánh Sáng)'),
(38, 24, 'Số Hiệu Sản Phẩm: NP1020-15A', 'Xuất Xứ: Nhật Bản', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(39, 25, 'Số Hiệu Sản Phẩm: BI5000-10E', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(41, 29, 'Số Hiệu Sản Phẩm: NH8350-59A', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Automatic (Tự Động)'),
(42, 30, 'Số Hiệu Sản Phẩm: BE9174-55A', 'Xuất Xứ: Nhật Bản', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Eco-Drive (Năng Lượng Ánh Sáng)'),
(43, 31, '\r\nSố Hiệu Sản Phẩm: BF2005-54L', 'Xuất Xứ: Nhật Bản', 'Kính: Mineral Crystal (Kính Cứng)', 'Máy: Quartz (Pin)'),
(44, 32, 'Số Hiệu Sản Phẩm: D211SBU', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(45, 33, 'Số Hiệu Sản Phẩm: D173TCM', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(46, 34, 'Số Hiệu Sản Phẩm: D181TBU ', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(48, 36, 'Số Hiệu Sản Phẩm: D105SMW', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(49, 37, 'Số Hiệu Sản Phẩm: D201RIY', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(50, 38, 'Số Hiệu Sản Phẩm: D211SSV', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(51, 39, 'Số Hiệu Sản Phẩm: T063.637.36.037.00', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(52, 40, 'Số Hiệu Sản Phẩm: T063.610.16.037.00', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(53, 41, 'Số Hiệu Sản Phẩm: T109.410.36.033.00', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy:Quartz (Pin)'),
(55, 43, 'Số Hiệu Sản Phẩm: T063.610.22.037.00', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(56, 44, 'Số Hiệu Sản Phẩm: T019.430.36.031.01', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(57, 45, 'Số Hiệu Sản Phẩm: T926.407.16.263.00', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)'),
(58, 46, 'Số Hiệu Sản Phẩm: L2.755.5.97.7', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(59, 47, 'Số Hiệu Sản Phẩm: L3.741.4.56.6', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(60, 48, 'Số Hiệu Sản Phẩm: L2.819.4.93.2', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Quartz (Pin)/Automatic (Tự Động)'),
(61, 49, 'Số Hiệu Sản Phẩm: L4.821.4.11.2', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(62, 51, 'Số Hiệu Sản Phẩm: 0606114', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(63, 52, 'Số Hiệu Sản Phẩm:3600455', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(64, 53, 'Số Hiệu Sản Phẩm: 0606916', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(65, 54, 'Số Hiệu Sản Phẩm: 0607063', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(66, 55, 'Số Hiệu Sản Phẩm: 0607092', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(67, 52, 'Số Hiệu Sản Phẩm: 3600455', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(68, 56, 'Số Hiệu Sản Phẩm: FC-200S5S36', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(69, 57, 'Số Hiệu Sản Phẩm: FC-220S5S6B', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(70, 58, 'Số Hiệu Sản Phẩm: FC-303MN5B4', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(71, 59, 'Số Hiệu Sản Phẩm: FC-292MV5B4', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)'),
(72, 60, 'Số Hiệu Sản Phẩm: FC-335MC4P6', 'Xuất Xứ: Thụy Sỹ', 'Kính: Sapphire (Kính Chống Trầy)', 'Máy: Automatic (Tự Động)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id` int(11) NOT NULL,
  `ten_thuong_hieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id`, `ten_thuong_hieu`) VALUES
(1, 'Casio'),
(2, 'Citizen'),
(3, 'Doxa'),
(4, 'Longines'),
(5, 'Movado'),
(6, 'Frederique Constant'),
(7, 'Tissot');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_privilege`
--

CREATE TABLE `user_privilege` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_privilege`
--

INSERT INTO `user_privilege` (`id`, `user_id`, `privilege_id`, `created_time`, `last_updated`) VALUES
(196, 1, 7, 1595430953, 1595430953),
(197, 1, 8, 1595430953, 1595430953),
(198, 1, 9, 1595430953, 1595430953),
(199, 1, 11, 1595430953, 1595430953),
(200, 1, 22, 1595430953, 1595430953),
(201, 1, 23, 1595430953, 1595430953),
(202, 1, 24, 1595430953, 1595430953),
(203, 1, 25, 1595430953, 1595430953),
(204, 1, 26, 1595430953, 1595430953),
(205, 1, 29, 1595430953, 1595430953),
(206, 1, 10, 1595430953, 1595430953),
(244, 16, 1, 1595430953, 1595430953),
(245, 16, 2, 1595430953, 1595430953),
(246, 16, 3, 1595430953, 1595430953),
(247, 16, 12, 1595430953, 1595430953),
(248, 16, 13, 1595430953, 1595430953),
(249, 16, 14, 1595430953, 1595430953),
(250, 16, 15, 1595430953, 1595430953),
(251, 16, 18, 1595430953, 1595430953),
(252, 16, 27, 1595430953, 1595430953),
(253, 16, 28, 1595430953, 1595430953),
(254, 16, 30, 1595430953, 1595430953),
(255, 16, 11, 1595430953, 1595430953),
(256, 15, 1, 1595430953, 1595430953),
(257, 15, 2, 1595430953, 1595430953),
(258, 15, 3, 1595430953, 1595430953),
(259, 15, 12, 1595430953, 1595430953),
(260, 15, 13, 1595430953, 1595430953),
(261, 15, 14, 1595430953, 1595430953),
(262, 15, 15, 1595430953, 1595430953),
(263, 15, 18, 1595430953, 1595430953),
(264, 15, 27, 1595430953, 1595430953),
(265, 15, 28, 1595430953, 1595430953),
(266, 15, 30, 1595430953, 1595430953),
(267, 15, 4, 1595430953, 1595430953),
(268, 15, 5, 1595430953, 1595430953),
(269, 15, 6, 1595430953, 1595430953),
(270, 15, 16, 1595430953, 1595430953),
(271, 15, 19, 1595430953, 1595430953),
(272, 15, 20, 1595430953, 1595430953),
(273, 15, 21, 1595430953, 1595430953),
(274, 15, 9, 1595430953, 1595430953),
(275, 15, 11, 1595430953, 1595430953);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masp` (`masp`),
  ADD KEY `mahd` (`mahd`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `privilege_group`
--
ALTER TABLE `privilege_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quan_tri`
--
ALTER TABLE `quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `san_pham_ibfk_1` (`id_thuong_hieu`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `privilege_id` (`privilege_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `privilege_group`
--
ALTER TABLE `privilege_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `quan_tri`
--
ALTER TABLE `quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD CONSTRAINT `hoadon_chitiet_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_chitiet_ibfk_2` FOREIGN KEY (`mahd`) REFERENCES `hoa_don` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`email`) REFERENCES `thanh_vien` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `privilege_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `privilege_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_thuong_hieu`) REFERENCES `thuong_hieu` (`id`) ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD CONSTRAINT `thongtinsp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`);

--
-- Các ràng buộc cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD CONSTRAINT `user_privilege_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `quan_tri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_privilege_ibfk_2` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
