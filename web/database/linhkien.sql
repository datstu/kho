-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2019 lúc 06:04 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linhkien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `mahd` int(100) NOT NULL,
  `masp` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `gia` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`mahd`, `masp`, `soluong`, `gia`) VALUES
(189, 'B360MAorus', 1, 2149000),
(189, 'Vga4Gddr5', 2, 778000),
(190, 'B360MAorus', 1, 2149000),
(190, 'Vga4Gddr5', 2, 778000),
(191, 'B360MAorus', 1, 2149000),
(191, 'Vga4Gddr5', 2, 778000),
(192, 'B360MAorus', 1, 2149000),
(192, 'Vga4Gddr5', 2, 778000),
(193, 'B360MAorus', 1, 2149000),
(193, 'Vga4Gddr5', 2, 778000),
(197, 'DDr34Gb', 2, 130000),
(197, 'Vga4Gddr5', 3, 1167000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `tennguoinhan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachinguoinhan` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoainguoinhan` varchar(10) NOT NULL DEFAULT '',
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `email`, `tennguoinhan`, `diachinguoinhan`, `dienthoainguoinhan`, `ngaydat`, `trangthai`) VALUES
(189, 'text@gmail.com', 'aqq1', 'qq', '1234560891', '2019-12-18 13:21:40', 0),
(190, 'text@gmail.com', 'aqq1', 'qq', '1234560891', '2019-12-18 13:22:07', 0),
(191, 'text@gmail.com', 'aqq1', 'qq', '1234560891', '2019-12-18 13:22:50', 0),
(192, 'abx@gmail.com', 'aqq1', 'qq', '1234560891', '2019-12-18 13:23:09', 0),
(193, 'abx@gmail.com', 'aqq1', 'qq', '1234560891', '2019-12-18 13:24:08', 0),
(197, 'user98.2018@gmail.com', 'dat', 'so 8 198 cao lo', '0973409613', '2019-12-18 22:26:56', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `matkhau` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`email`, `matkhau`, `tenkh`, `diachi`, `dienthoai`) VALUES
('abx@gmail.com', 'a', 'aqq1', 'qq', '1234560891'),
('d12c1@gmail.com', '0', 'dat', 'so 8 198 cao lo', '0973409613'),
('text', 'a', 'aqq1', 'qq', 'a01'),
('text@gmail.com', 'a', 'aqq1', 'qq', '1234560891'),
('user98.2018@gmail.com', 'a', 'dat', 'so 8 198 cao lo', '0973409613');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('chip3', 'Chip CPU'),
('CV2', 'Card Video'),
('main4', 'Main'),
('ram01', 'Ram');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxb`
--

CREATE TABLE `nhaxb` (
  `mancc` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenncc` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhaxb`
--

INSERT INTO `nhaxb` (`mancc`, `tenncc`) VALUES
('1', 'King'),
('2', 'Trung Quốc'),
('3', 'Đài Loan'),
('4', 'Việt Nam'),
('5', 'Mỹ'),
('6', 'Nhật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `username` varchar(30) NOT NULL,
  `matkhau` varchar(32) DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quyen` int(1) NOT NULL COMMENT '1:  supper admin, 2:nhan viên, 3:...'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`username`, `matkhau`, `hoten`, `quyen`) VALUES
('abcd', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn văn A', 2),
('hung', 'e10adc3949ba59abbe56e057f20f883e', 'Lên Văn An', 2),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Trần Văn Hùng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masp` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mancc` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`masp`, `tensp`, `mota`, `gia`, `hinh`, `mancc`, `maloai`) VALUES
('B360MAorus', 'Main Gigabyte B360M Aorus Pro - Hàng chính hãng', 'Gigabyte B360 M AORUS PRO\r\n\r\nSocket: LGA1151 hỗ trợ CPU intel thế hệ 8 và 9\r\n\r\nKích thước: m-ATX\r\n\r\nKhe cắm RAM: 4 khe (Tối đa 64GB)\r\n\r\nKhe cắm mở rộng: 3 x PCI Express x16 slot, 1 x PCI Express x1 slot, 1 x M.2\r\n\r\nKhe cắm ổ cứng: 6 x SATA 6Gb/s', 2149000, 'main2', '2', 'main4'),
('cpuG5400 ', ' CPU Intel Pentium G5400 (3.70GHz/4M)', 'Dòng CPU: Intel Pentium G5400\r\n\r\nNhân CPU: 2 Core\r\n\r\nLuồng CPU: 4 Threads\r\n\r\nBộ nhớ đệm: 4MB\r\n\r\nĐồ họa tích hợp: Intel UHD Graphics 610\r\n\r\nDây truyền công nghệ: 14nm\r\n\r\nĐiện áp tiêu thụ tối đa: 54W', 1355000, 'cpu.png', '6', 'chip3'),
('DDr34Gb', 'RAM DDR 3 4Gb', 'Thanh nhớ máy tính dùng cho máy Laptop. Hàng chính hãng chứ không phải hàng Tàu nhé! Hàng đã test kĩ bảo hành 1 tháng cho sản phẩm#Ram cũ #Bộ nhớ laptop #DDram #SDRam.\r\nĐặc tính sản phẩm Ram DDRam III Máy tính 4Gb Hỏng PC 1066 PC 1333', 65000, 'ram3.png', '1', 'ram01'),
('H61M-DS2', 'Main Gigabyte H61M-DS2 Socket 1155', 'Manufacture (Hãng sản xuất):GIGABYTE\r\nSocket:Intel Socket 1155\r\nForm Factor:ATX\r\nChipset:Intel H61\r\nCPU Support (Loại CPU hỗ trợ) (2):Intel Core i5, Intel Core i3\r\nFront Side Bus (FSB):800MHz (1600 MT/s), 1066Mhz, 1333Mhz\r\nMemory Slot (Số khe cắm ram):2\r\nMemory Type (Loại Ram sử dụng):DDR3 bus 1333', 680000, 'main3.png', '3', 'main4'),
('H81M-DS2 ', 'mainboard gigabyte H81M-DS2 socket 1150', 'THÔNG SỐ KỸ THUẬTSản phẩmBo mạch chủTên HãngGigabyteModelH81M-DS2SocketSK1150Hỗ trợ CPUCore i3/ i5/ i7ChipsetIntel H81Hỗ trợ RAMDDR3 x 2 DIMM upto 16Gb RAMCạc đồ họaVGA onboardÂm thanhAudio 8-CHANNELCạc mạngGigabitKhe cắm trong1x PCIE 3.0 x16(X16), 2 x PCI Express x1, 2 x SATA3, 2 x SATA6Cổng giao tiếp ngoài2 x PS/2, 1 x D-Sub, 1 x COM, 1 x parallel port, 2 x USB 2.0, 2 x USB 3.0Kích thướcmATXTính năng khácSiêu bền với công nghệ Ultra Durable 4 Plus hoàn toàn mới: Durable Solid Caps ,Ferrite Core Choke & Lower RDS(on) MOSFET, Ultra Cool , Humidity Protection ,2x Copper Inner Layer , UEFI DualBIOS™..Phụ kiện kèm theoSách, đĩa, cáp SATA,Máy tính LC chuyên Case Game – Đồ họa - Máy văn Phòng.Linh kiện 2nd – Màn hình – Dàn game net', 480000, 'main.png', '5', 'main4'),
('Vga4Gddr5 ', 'Vga Gigabyte Gtx1050Ti 4G Gddr5 1 Fan', 'Bạn muốn trải nghiệm được những tựa game đỉnh cao nhưng trong cấu hình hạn hẹp của một chiếc laptop, hãy tự build cho mình dàn PC đủ mạnh để thỏa mãn niềm đam mê chơi game của mình. Tuy vậy để có thể xây dựng một bộ máy tính chất lượng cần phải đáp ứng nhiều yêu cầu về điều kiện tài chính cũng như khả năng tương thích giữa các linh kiện.', 389000, 'VGa4G.png', '4', 'CV2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masach` (`masp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nhaxb`
--
ALTER TABLE `nhaxb`
  ADD PRIMARY KEY (`mancc`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `manxb` (`mancc`,`maloai`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sach` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethd_ibfk_3` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`mancc`) REFERENCES `nhaxb` (`mancc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
