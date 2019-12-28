-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 06:25 SA
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
(201, 'G4500', 1, 1499000),
(201, 'Vga4Gddr5', 2, 778000);

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
(201, 'd12c1@gmail.com', 'dinh khanh dat', 'so 8 198 cao lo', '0973409613', '2019-12-26 23:20:44', 0);

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
('abx@gmail.com', 'a', 'tèo em', 'qq', '1234560891'),
('d12c1@gmail.com', 'a', 'dinh khanh dat', 'so 8 198 cao lo', '0973409613'),
('text', 'a', 'aqq1', 'qq', 'a01'),
('text@gmail.com', 'a', 'teo em', 'qq', '1234560891'),
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
('chip3', 'CPU'),
('CV2', 'CardVideo'),
('d14', '14d'),
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
('2', 'Trung Quốc0'),
('3', 'Đài Loan'),
('4', 'Việt Nam'),
('5', 'Mỹ'),
('6', 'Nhật0');

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
(' AFOX-H550', 'MAINBOARD AFOX H55', '<p>CPU: Supports Intel Core i7 / Core i5 / Core i3 processors / Supports Intel 1st generation multi-core processors</p>\r\n\r\n<p>FSB: 1066/1333MHz</p>\r\n\r\n<p>MEMORY: Dual Channel DDR3 1066/1333MHz Memory</p>\r\n\r\n<p>1 x HDMI port</p>\r\n\r\n<p>1 x MSATA</p>\r\n\r\n<p>4 x USB 2.0 port</p>\r\n\r\n<p>1 x LAN jack</p>\r\n\r\n<p>3 x Audio jack</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2 x USB 2.0 pinheader supports additional 4 USB 2.0 ports</p>\r\n\r\n<p>1 x Front Panel Audio pinheader</p>\r\n\r\n<p>&quot;1 x PCI Express x16 slot</p>\r\n\r\n<p>1 x PCI slot&quot;</p>\r\n\r\n<p>EFI BIOS</p>\r\n\r\n<p>Micro-ATX (19.6 &times;16.8 cm)</p>\r\n\r\n<p>6 mounting holes</p>\r\n\r\n<p>1 x SATA cable</p>\r\n\r\n<p>1 x I/O Backboard</p>\r\n\r\n<p>1 x User Manual</p>\r\n\r\n<p>1 x Driver CD</p>\r\n\r\n<ul>\r\n</ul>\r\n', 889000, 'aFOXH55.png', '5', 'main4'),
('6666666666666', 'VGA Geforce RTX 2080', '<p>&nbsp;</p>\r\n\r\n<p>Geforce RTX 2080</p>\r\n\r\n<p>- Số lỗi CUDA: 2944</p>\r\n\r\n<p>- Base/Boost Clock: 1515/1710MHz</p>\r\n\r\n<p>- Dung lượng: 8GB GDDR6</p>\r\n\r\n<p>- Giao diện bộ nhớ: 256 bit</p>\r\n\r\n<p>- Băng th&ocirc;ng bộ nhớ: 448 GBPs</p>\r\n\r\n<p>- Điện năng ti&ecirc;u thụ: 285W</p>\r\n\r\n<p>- SLI: NVLink-2 way - Độ ph&acirc;n giải tối đa: 7680 x 4320 @60Hz - Điện đầu v&agrave;o: 1x 6-pin, 1x 8-pin - Kiểu bus: PCI Express 3.0</p>\r\n', 1000000, 'RTX2080.png', '4', 'CV2'),
('A55M-hd2', 'Main giga A55 M-HD2 AMD Socket FM2 - A55M-hd2', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>CPU Support (Loại CPU hỗ trợ) (2)</td>\r\n			<td>&bull; AMD Phenom II X2<br />\r\n			&bull; AMD Phenom II X3<br />\r\n			&bull; AMD Phenom II X4<br />\r\n			&bull; AMD Athlon II X2<br />\r\n			&bull; AMD Llano</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Front Side Bus (FSB)</td>\r\n			<td>&bull; -</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memory Slot (Số khe cắm ram)</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Memory Support (Gb)</td>\r\n			<td>64</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memory Type (Loại Ram sử dụng)</td>\r\n			<td>DDR3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memory Bus</td>\r\n			<td>&bull; 1066Mhz<br />\r\n			&bull; 1600MHz<br />\r\n			&bull; 1866Mhz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Internal I/O Connectors (C&aacute;c kết nối b&ecirc;n trong)</td>\r\n			<td>&bull; USB 2.0 connectors<br />\r\n			&bull; SATA connectors<br />\r\n			&bull; Fan connectors<br />\r\n			&bull; 24-pin ATX Power connector<br />\r\n			&bull; 8-pin ATX 12V Power connector<br />\r\n			&bull; S/P DIF input/output pin header</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Back Panel I/O Ports (Cổng kết nối ph&iacute;a sau)</td>\r\n			<td>&bull; LAN (RJ45) port</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 450000, 'a55m-hd2.png', '6', 'main4'),
('B360MAorus', 'Main Gigabyte B360M Aorus Pro - Hàng chính hãng', 'Gigabyte B360 M AORUS PRO\r\n\r\nSocket: LGA1151 hỗ trợ CPU intel thế hệ 8 và 9\r\n\r\nKích thước: m-ATX\r\n\r\nKhe cắm RAM: 4 khe (Tối đa 64GB)\r\n\r\nKhe cắm mở rộng: 3 x PCI Express x16 slot, 1 x PCI Express x1 slot, 1 x M.2\r\n\r\nKhe cắm ổ cứng: 6 x SATA 6Gb/s', 2149000, 'main2.png', '2', 'main4'),
('B450M ', 'Mainboard GIGABYTE B450M ', '<p>- Chu&acirc;̉n mainboard: Micro-ATX<br />\r\n- Socket: AM4 , Chipset: B450<br />\r\n- H&ocirc;̃ trợ RAM: DDR4 , tối đa 32GB<br />\r\n- C&ocirc;̉ng cắm lưu trữ: 1 x M.2 SATA/NVMe; 4 x SATA 3 6Gb/s<br />\r\n- Cổng xuất h&igrave;nh: 1 x DVI-D; 1 x HDMI; 1 x VGA/D-sub</p>\r\n\r\n<h3><strong>Bảo vệ bo mạch khỏi sự ảnh hưởng từ Lưu huỳnh</strong></h3>\r\n\r\n<p>C&aacute;c hợp chất lưu huỳnh trong kh&ocirc;ng kh&iacute; c&oacute; thể xuy&ecirc;n qua c&aacute;c điện trở nhỏ tr&ecirc;n bo mạch tạo ra sự thay đổi h&oacute;a học v&agrave; l&agrave;m cho c&aacute;c điện trở n&agrave;y hở hoặc ngắn mạch. Nếu một trong hai điều n&agrave;y xảy ra bo mạch chủ sẽ kh&ocirc;ng hoạt động. Bằng c&aacute;ch trang bị điện trở với thiết kế chống lưu huỳnh,&nbsp;<a href="https://phongvu.vn/searchpves/gigabyte?utm_source=SEO" target="_blank" title="GIGABYTE">GIGABYTE</a>&nbsp;mang đến cho bo mạch chủ si&ecirc;u bền với một &yacute; nghĩa ho&agrave;n to&agrave;n mới.</p>\r\n', 1620000, 'B450M.png', '4', 'main4'),
('cpu10', '666666666666', '<ul>\r\n	<li>D&ograve;ng CPU: Core i5, thế hệ 3 (Ivy Bridge)</li>\r\n	<li>Socket: FCLGA1155</li>\r\n	<li>Cấu h&igrave;nh CPU tối đa: 1</li>\r\n	<li>Tốc độ: 3.20GHz up to &nbsp;3.60GHz</li>\r\n	<li>Số l&otilde;i: 4</li>\r\n	<li>Số luồng: 4</li>\r\n	<li>B&ocirc;̣ nhớ đ&ecirc;̣m: 6MB SmartCache</li>\r\n	<li>Bus Speed: 5 GT/s DMI</li>\r\n	<li>Đồ họa t&iacute;ch hợp: Intel&reg; HD Graphics</li>\r\n	<li>Các loại b&ocirc;̣ nhớ: DDR3 1333/1600</li>\r\n	<li>Dung lượng bộ nhớ tối đa (t&ugrave;y v&agrave;o loại bộ nhớ): 32 GB</li>\r\n	<li>Hỗ trợ Bộ nhớ ECC: Kh&ocirc;ng</li>\r\n	<li>K&iacute;ch thước: 37.5mm x 37.5mm</li>\r\n	<li>Tương th&iacute;ch Mainboard: B75, Q75, Z75, H77, Q77, Z77, H61, B65, Q65, H67, P67, Q67, Z68.</li>\r\n</ul>\r\n', 55555, '3.jpg', '4', 'main4'),
('cpuG5400 ', ' CPU Intel Pentium G5400 (3.70GHz/4M)', 'Dòng CPU: Intel Pentium G5400\r\n\r\nNhân CPU: 2 Core\r\n\r\nLuồng CPU: 4 Threads\r\n\r\nBộ nhớ đệm: 4MB\r\n\r\nĐồ họa tích hợp: Intel UHD Graphics 610\r\n\r\nDây truyền công nghệ: 14nm\r\n\r\nĐiện áp tiêu thụ tối đa: 54W', 1355000, 'cpu.png', '6', 'chip3'),
('DDr34Gb', 'RAM DDR 3 4Gb', 'Thanh nhớ máy tính dùng cho máy Laptop. Hàng chính hãng chứ không phải hàng Tàu nhé! Hàng đã test kĩ bảo hành 1 tháng cho sản phẩm#Ram cũ #Bộ nhớ laptop #DDram #SDRam.\r\nĐặc tính sản phẩm Ram DDRam III Máy tính 4Gb Hỏng PC 1066 PC 1333', 65000, 'ram3.png', '1', 'ram01'),
('G4500', 'CPU Intel Pentium Gold G5400', '<ul>\r\n	<li>Tiến tr&igrave;nh sản xuất 14nm</li>\r\n	<li>2 nh&acirc;n, 4 luồng, xung nhịp cơ bản 3.7 GHz, kh&ocirc;ng c&oacute; Turbo boost</li>\r\n	<li>Hỗ trợ RAM DDR4, bus tối đa 2400 MHz</li>\r\n	<li>T&iacute;ch hợp card đồ hoạ Intel&reg; UHD Graphics 610</li>\r\n	<li>C&oacute; đi k&egrave;m quạt tản nhiệt</li>\r\n</ul>\r\n', 1499000, 'G5400.png', '3', 'chip3'),
('GTX1060 ', 'Card pc GTX1060 DDR5 (128bit)', '<p>Item type:Graphics Card</p>\r\n\r\n<p>Chip model: GTX1060 3GB/6GB</p>\r\n\r\n<p>Memory type: DDR5</p>\r\n\r\n<p>Model: GTX1060 3GB/6GB</p>\r\n\r\n<p>Graphics card slot: PCI Express 3.0</p>\r\n\r\n<p>Number of pipelines: 640</p>\r\n\r\n<p>Core frequency: 900MHz</p>\r\n\r\n<p>Type: Game level</p>\r\n\r\n<p>Chip process: 28 nm</p>\r\n\r\n<p>Product size: width 115MM length 220MM</p>\r\n\r\n<p>Memory bandwidth: 128bit</p>\r\n\r\n<p>Interface: HDMI.VGA.DVI.PCI-E</p>\r\n\r\n<p>Memory capacity: 3GB/6GB</p>\r\n\r\n<p>Core bit width: 128bit</p>\r\n', 1408000, 'GTX1060.png', '3', 'CV2'),
('H61M-DS2', 'Main Gigabyte H61M-DS2 Socket 1155', 'Manufacture (Hãng sản xuất):GIGABYTE\r\nSocket:Intel Socket 1155\r\nForm Factor:ATX\r\nChipset:Intel H61\r\nCPU Support (Loại CPU hỗ trợ) (2):Intel Core i5, Intel Core i3\r\nFront Side Bus (FSB):800MHz (1600 MT/s), 1066Mhz, 1333Mhz\r\nMemory Slot (Số khe cắm ram):2\r\nMemory Type (Loại Ram sử dụng):DDR3 bus 1333', 680000, 'main3.png', '3', 'main4'),
('H81M-DS2 ', 'mainboard gigabyte H81M-DS2 socket 1150', 'THÔNG SỐ KỸ THUẬTSản phẩmBo mạch chủTên HãngGigabyteModelH81M-DS2SocketSK1150Hỗ trợ CPUCore i3/ i5/ i7ChipsetIntel H81Hỗ trợ RAMDDR3 x 2 DIMM upto 16Gb RAMCạc đồ họaVGA onboardÂm thanhAudio 8-CHANNELCạc mạngGigabitKhe cắm trong1x PCIE 3.0 x16(X16), 2 x PCI Express x1, 2 x SATA3, 2 x SATA6Cổng giao tiếp ngoài2 x PS/2, 1 x D-Sub, 1 x COM, 1 x parallel port, 2 x USB 2.0, 2 x USB 3.0Kích thướcmATXTính năng khácSiêu bền với công nghệ Ultra Durable 4 Plus hoàn toàn mới: Durable Solid Caps ,Ferrite Core Choke & Lower RDS(on) MOSFET, Ultra Cool , Humidity Protection ,2x Copper Inner Layer , UEFI DualBIOS™..Phụ kiện kèm theoSách, đĩa, cáp SATA,Máy tính LC chuyên Case Game – Đồ họa - Máy văn Phòng.Linh kiện 2nd – Màn hình – Dàn game net', 480000, 'main.png', '5', 'main4'),
('KVR24S17S6', 'RAM laptop Kingston KVR24S17S6/4', '<p>- Dung lượng: 1 x 4GB<br />\r\n- Th&ecirc;́ h&ecirc;̣: DDR4<br />\r\n- Bus: 2400MHz<br />\r\n- Cas: 17</p>\r\n\r\n<p><a href="https://phongvu.vn/searchpves/kingston?utm_source=SEO" target="_blank" title="Kingston">Kingston</a>&nbsp;KVR24S17S6/4 l&agrave; bộ nhớ&nbsp;<a href="https://phongvu.vn/linh-kien-may-tinh/ram-bo-nho-du-lieu-tam-thoi.cat?utm_source=SEO" target="_blank" title="RAM">RAM</a>&nbsp;<a href="https://phongvu.vn/ram-ddr4-990.cat?utm_source=SEO" target="_blank" title="ddr4">DDR4</a>&nbsp;c&oacute; tốc độ xử l&yacute; đạt 2400MHz, gi&uacute;p tối ưu hiệu năng cho bộ xử l&yacute;&nbsp;<a href="https://phongvu.vn/cpu-bo-vi-xu-ly-553.cat?utm_source=SEO" target="_blank" title="cpu">CPU</a>&nbsp;đến từ cả&nbsp;<a href="https://phongvu.vn/cpu-intel-1146.cat?utm_source=SEO" target="_blank" title="intel">Intel</a>&nbsp;lẫn AMD.&nbsp;Sử dụng chip nhớ&nbsp;<a href="https://phongvu.vn/micro-1070.cat?utm_source=SEO" target="_blank" title="micro">Micro</a>n cao cấp với độ trễ đạt 17-17-17 ở thiết lập mặc định, bạn sẽ kh&ocirc;ng phải lo lắng về việc tốc độ của bộ nhớ sẽ l&agrave;m chậm tốc độ xử l&yacute; của&nbsp;<a href="https://phongvu.vn/cpu-bo-vi-xu-ly-553.cat?utm_source=SEO" target="_blank" title="cpu">CPU</a>.</p>\r\n\r\n<p>Với dung lượng bộ nhớ l&ecirc;n tới 4GB, đem lại một khoảng n&acirc;ng cấp bộ nhớ kh&aacute; lớn cho&nbsp;<a href="https://phongvu.vn/laptop-va-linh-kien-macbook-715.cat" target="_blank" title="laptop">laptop</a>&nbsp;của bạn chỉ với một khe cắm duy nhất. Trong trường hợp&nbsp;<a href="https://phongvu.vn/laptop-va-linh-kien-macbook-715.cat" target="_blank" title="laptop">laptop</a>&nbsp;của bạn c&oacute; hai khe cắm, th&igrave; chỉ cần hai thanh&nbsp;<a href="https://phongvu.vn/linh-kien-may-tinh/ram-bo-nho-du-lieu-tam-thoi.cat?utm_source=SEO" target="_blank" title="RAM">RAM</a>&nbsp;<a href="https://phongvu.vn/searchpves/kingston?utm_source=SEO" target="_blank" title="Kingston">Kingston</a>&nbsp;KVR24S17S6/4 l&agrave; bạn đ&atilde; n&acirc;ng cấp dung lượng&nbsp;<a href="https://phongvu.vn/linh-kien-may-tinh/ram-bo-nho-du-lieu-tam-thoi.cat?utm_source=SEO" target="_blank" title="RAM">RAM</a>&nbsp;của&nbsp;<a href="https://phongvu.vn/laptop-va-linh-kien-macbook-715.cat" target="_blank" title="laptop">laptop</a>&nbsp;l&ecirc;n tới 8GB rồi, đem lại khả năng đa nhiệm cực k&igrave; tốt.</p>\r\n', 552000, 'KVR24S17S6.png', '1', 'ram01'),
('main12', 'mainvdtim', '<p>Nội dung TextArea</p>\r\n', 1, 'a55m-hd2.png', '3', 'main4'),
('PC3L/DDR3L ', 'Ram laptop 8GB DDR3L / PC3L Bus 1600', '<p>Chủng loại: DDR3L Laptop 1600Mhz (PC3L -12800s) - 1.35V</p>\r\n\r\n<p>Dung lượng: 8GB x 1 thanh</p>\r\n\r\n<p>Kiểu ram: DDR3L ( PC3L )</p>\r\n\r\n<p>Bus hỗ trợ: PC3L - 12800s (DDR3L - 1600)</p>\r\n\r\n<p>Xuất xứ : China, Korea, Philipines</p>\r\n\r\n<p>Lưu &yacute; : Ram DDR3 c&oacute; 2 loại PC3 ( điện &aacute;p 1.5V ) v&agrave; PC3L ( điện &aacute;p 1.35V ). Khi kiểm tra bằng CPUz cần v&agrave;o phần SPD để xem điện &aacute;p cho đ&uacute;ng loại ram.</p>\r\n', 520000, 'PC3L_DDR3L.png', '3', 'ram01'),
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
  MODIFY `mahd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
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
