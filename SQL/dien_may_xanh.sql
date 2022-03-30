-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 10:20 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dien_may_xanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_danh_muc` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_danh_muc`, `stt`, `ten_danh_muc`) VALUES
(1, 1, 'Tivi'),
(2, 2, 'Tủ Lạnh'),
(3, 3, 'Máy Giặt'),
(4, 4, 'Nồi chiên'),
(18, 5, 'Nồi cơm'),
(19, 6, 'Điều hoà'),
(21, 7, 'Loa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`) VALUES
(1, 'Mai Văn Phương', 'Quảng Ngãi', '0129333467'),
(3, 'Hoàng Văn Khải', 'Thái Bình', '0126337472'),
(4, 'Đỗ Văn Linh', 'Thanh Hoá', '0977246123'),
(5, 'Mai Văn Huy', 'Nam Định', '0164227313');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `anh_san_pham` varchar(500) NOT NULL,
  `mo_ta` mediumtext NOT NULL,
  `mau_sac` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `id_danh_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_san_pham`, `ten_san_pham`, `anh_san_pham`, `mo_ta`, `mau_sac`, `so_luong`, `gia`, `id_danh_muc`) VALUES
(1, 'Loa vi tính Fenda V320', '1.jpg', 'KLJADLDLKAKMCKKDJSDKSCSKJDKSNCMSKDJKSHFSMCKCNKSHDVNKDHSMCKHSKMDK\r\nfldaskjflasuhfwuekjdhsliuads', 'Đen', 10000, 250000, 21),
(7, 'Loa Bluetooth Mozard E7', '3.jpg', '', 'Cam và đen', 10000, 700000, 21),
(9, 'Loa Bluetooth iCutes MB-M818', '4.jpg', '', 'Nâu và Xám', 10000, 300000, 21),
(10, 'Loa Bluetooth Fenda W5 Plus', '5.jpg', '', 'Xanh dương và lục', 10000, 450000, 21),
(11, 'Casper 32HX6200', 'tivi_1.jpg', '', 'Đen', 10000, 6990000, 1),
(12, 'LG Inverter 315 lít GN-M315BL', 'tl_1.jpg', '', 'Đen', 10000, 10500000, 2),
(13, 'Panasonic Inverter 9 Kg NA-V90FX1LVT', 'mg_1.jpg', '', 'Xám', 10000, 15990000, 3),
(14, 'Nồi chiên không dầu Tefal EY701D15 5.6 lít', 'nc_1.jpg', '', 'Đen xám', 10000, 5999000, 4),
(15, 'Nồi cơm nắp gài Kangaroo 1.5 lít KG825', 'ncom_1.jpg', '', 'Cam đen', 10000, 950000, 18),
(16, 'Sharp Inverter 9.000 BTU AH-X9XEW', 'dh_1.jpg', '', 'Trắng', 10000, 8990000, 19),
(18, 'Hoa', '6854_bong-tuyet.png', '', 'Hồng', 5000, 250000, 1),
(23, 'Đỏ', 'jiHskHJ.jpg', 'AAAAAAAAAAA', 'Trắng', 0, 700000, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `account`, `password`, `sdt`) VALUES
(1, 'Himn', 'himn0129', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cthd`
--

CREATE TABLE `tbl_cthd` (
  `macthd` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giamua` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cthd`
--

INSERT INTO `tbl_cthd` (`macthd`, `mahd`, `masp`, `soluong`, `giamua`) VALUES
(1, 7, 9, 1, 300000),
(2, 7, 7, 1, 700000),
(3, 8, 10, 1, 450000),
(4, 8, 18, 3, 250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `mahd` int(11) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `ngaydat` date NOT NULL DEFAULT current_timestamp(),
  `ngaynhan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`mahd`, `tenkh`, `diachi`, `sdt`, `ngaydat`, `ngaynhan`) VALUES
(7, 'Phương Nguyễn', 'Thanh Hoá - Thọ Xuân', '6677028122', '2021-12-19', '2022-01-05'),
(8, 'Minh Nguyễn', 'Thanh Hoá - Thọ Xuân', '0126337471', '2021-12-20', '2022-01-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `matt` int(11) NOT NULL,
  `tentt` varchar(255) NOT NULL,
  `anhtt` varchar(255) NOT NULL,
  `noidung` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`matt`, `tentt`, `anhtt`, `noidung`) VALUES
(1, 'Đi 1 vòng các gian hàng điện máy thấy khá nhiều mẫu tủ lạnh 4 cánh giá rẻ, từ 15 triệu là mua được liền', 'tintuc1.jpg', 'Theo tạp chí Forbes, sở hữu cho mình một ngôi nhà thông minh là xu hướng không thể bỏ qua trong kỉ nguyên số.\r\nKhông chỉ thể hiện gu thẩm mỹ thời thượng của chủ nhân, một căn nhà thông minh được trang bị những món đồ gia dụng hiện đại còn góp phần mang đến cho bạn sự thoải mái vượt trội. Cùng khám phá top 4 sản phẩm gia dụng hiện đại không thể thiếu để bạn hoàn thiện căn nhà thông minh của mình.\r\n\r\nMáy giặt thông minh Samsung AI\r\n\r\nĐược ra mắt tháng 4/2021, chiếc máy giặt của Samsung gây ấn tượng mạnh bằng giải pháp giặt giũ hiện đại đảm bảo sạch sâu, tiện lợi. Được tích hợp chế độ cảm biến thông minh AI Wash sử dụng công nghệ tia sáng truy quét, chiếc máy có khả năng tự động phân tích phân tích khối lượng và độ bẩn áo quần. Từ đó, hệ thống tự động tối ưu lượng nước, lượng nước giặt xả và thời gian hoạt động, đảm bảo giặt sạch hoàn hảo mà không cần người dùng phải ước lượng. \r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nCảm biến thông minh AI wash tự động tối ưu hóa lượng nước, tiết kiệm chi phí và đảm bảo giặt sạch quần áo. \r\nĐể tối ưu hóa trải nghiệm người dùng, Samsung đã tích hợp trí thông minh nhân tạo AI Control có khả năng tự động ghi nhớ, phân tích, đề xuất các cài đặt phù hợp dựa trên thói quen giặt giũ. Như một người trợ lý mẫn cán thuộc lòng thói quen của chủ nhân, máy giặt Samsung AI tự động cân chỉnh lượng nước giặt, nước xả thông qua công nghệ AI Dispenser. Bên cạnh đó, nhờ khả năng kết nối với các thiết bị thông minh SmartThings, chỉ với một chiếc điện thoại, bạn có thể thoải mái điều khiển máy giặt từ bất cứ đâu.\r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nCông nghệ AI giúp tự động hóa việc giặt giũ của bạn.\r\nĐược trang bị động cơ Digital Inverter với nam châm vĩnh cửu, giảm thiểu ma sát khi vận hành, máy giặt Samsung AI có khả năng vận hành êm ái và tiết kiệm điện năng cùng độ bền vượt trội lên đến 23 năm. Ngoài ra, hệ thống cảm biến AI Wash cùng tính năng Giảm Rung Ồn VRT Plus giúp tiếng ồn khi giặt giảm đến 30%.  \r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nChức năng làm sạch hiệu quả của máy giặt Samsung AI mang tới sự thoải mái và sức khỏe cho gia đình.\r\nKhông thể bỏ qua chức năng làm sạch tuyệt vời của máy giặt Samsung AI với 2 công nghệ mới Công nghệ Eco Bubble kích hoạt nước giặt tạo thành các bong bóng siêu mịn thẩm thấu vào sợi vải nhanh gấp 40 lần so với máy giặt thông thường, giúp giặt sạch sâu, bảo vệ áo quần bền màu, bền chất liệu hơn tới 45%. Trong khi đó, công nghệ giặt hơi nước Hygiene Steam giúp kích hoạt hơi nước ở nhiệt độ cao, loại bỏ tới 99,9% vi khuẩn và các tác nhân gây dị ứng, bảo vệ sức khỏe cho gia đình.\r\n\r\nMáy lọc không khí\r\n\r\nVới sự gia tăng ô nhiễm ở các khu vực thành thị, máy lọc không khí là giải pháp đảm bảo sức khỏe cho gia đình. Lời khuyên của các chuyên gia khi lựa chọn các sản phẩm máy lọc không khí là: Công suất phù hợp với diện tích, ưu tiên sản phẩm tích hợp đa chế độ trong một.\r\n\r\nĐáp ứng đầy đủ các tiêu chí trên, dòng sản phẩm máy lọc không khí thông minh của Samsung không chỉ mang đến nhiều lựa chọn phù hợp với diện tích (từ 34m2 - 90m2) mà còn tích hợp hệ thống màng lọc 3 trong 1, giúp lọc 99,9% bụi siêu mịn 0.3 um (PM1.0) và vô hiệu hóa 99.9% khuẩn trong không khí.\r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nMáy lọc không khí Samsung với hệ thống 3 màng lọc cùng khả năng hút khí mạnh mẽ, làm sạch từng ngóc ngách trong nhà bạn.\r\nẨn sau vẻ ngoài nhỏ gọn của máy lọc không khí Samsung là khả năng hút khí mạnh mẽ của công nghệ thổi gió 3 chiều, lọc sạch không khí tới từng ngóc ngách trong căn nhà bạn. Với hệ thống điều khiển SmartThing, gia chủ có thể kiểm tra mức độ ô nhiễm không khí bất cứ lúc nào và bất cứ ở đâu. Chỉ với thao tác đơn giản hoặc sử dụng giọng nói, bạn sẽ dễ dàng bật hoặc tắt, kiểm tra chất lượng không khí, kiểm soát các chức năng khác và theo dõi tình trạng màng lọc.\r\n\r\nTủ Lạnh Samsung Family Hub 641L\r\n\r\nKhông chỉ mang thiết kế side-by-side hiện đại với dung tích lên tới 641L phù hợp cho cả gia đình, Tủ lạnh Samsung Family Hub 641L tạo ấn tượng mạnh với người yêu công nghệ nhờ Camera quan sát bên trong và màn hình hiển thị thực phẩm đang có trong tủ lạnh. Nhờ khả năng quản lý thực phẩm, chiếc tủ lạnh Samsung Family Hub 641L tự động cảnh báo ngày hết hạn, cho phép bạn tự tạo danh sách mua sắm, ghi nhớ của riêng mình.\r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nTủ lạnh Samsung Family Hub 641L tích hợp giúp quản lý thực phẩm thông minh, đưa ra gợi ý cho thực đơn đầy đủ cả về lượng và chất.\r\nVới màn hình Family Board được tích hợp trên cửa tủ lạnh, bạn chỉ cần một chạm để quan sát thực phẩm bên trong tủ lạnh hay truy cập ứng dụng Recipes với nhiều công thức nấu ăn có sẵn. Công việc nấu ăn sẽ chẳng bao giờ nhàm chán khi chiếc màn hình Family Board sẽ mang đến cho bạn những chương trình giải trí, âm nhạc ngay trong căn bếp của mình.\r\n\r\nMàn hình thông minh M7\r\n\r\nKhi Làm việc tại nhà trở nên quen thuộc, một chiếc màn hình thông minh như Samsung M7 UDH (32”) sẽ giúp bạn tối đa hóa năng suất. Là chiếc màn hình thông minh không cần máy tính đầu tiên trên thế giới, Samsung M7 UDH dễ dàng kết nối, truyền dữ liệu một cách nhanh chóng qua 1 cổng USB Type-C duy nhất. Hơn thế nữa, kết nối không dây DEX giúp bạn trải nghiệm di động trên màn hình lớn một cách dễ dàng để bạn thoải mái tham gia các cuộc họp trực tuyến, duyệt web hay đọc tài liệu mượt mà như sử dụng PC. Chỉ cần chạm, mọi hình ảnh trên điện thoại sẽ được chia sẻ một cách nhanh chóng và mượt mà.\r\n\r\nTop đồ gia dụng cực chất cho xu hướng nhà thông minh\r\nLàm việc tại nhà dễ dàng và hiệu quả hơn nhờ màn hình thông minh M7 UDH từ Samsung\r\nKhông dừng lại ở một chiếc màn hình làm việc, màn hình thông minh M7 UDH có độ phân giải 4K – 3820x2160 pixel và được tích hợp kho ứng dụng Smart TV. Chỉ với 1 chiếc monitor duy nhất, bạn dễ dàng truy cập vào các ứng dụng giải trí như Netflix, YouTube và HBO mà không cần bật laptop hay máy tính để bàn. Điều khiển từ xa và loa tích hợp mang đến cho bạn không gian giải trí đỉnh cao, thoải mái thư giãn trọn vẹn.\r\n\r\nGiờ đây, các thiết bị thông minh đang mang đến những tiện ích chưa từng có trước đây cho gia đình hiện đại. Với những “người bạn” này, cuộc sống không chỉ đơn giản, thuận tiện mà còn ngập tràn những trải nghiệm thú vị và nhiều màu sắc.'),
(2, 'Ngắm bộ sưu tập đồ 13 món đồ bếp hiện đại của mẹ Hà Nội trị giá 87,4 triệu', 'tintuc2.jpg', '1. Kệ đựng chén đĩa sau rửa Kanazawa Kogyo: 35 triệu\r\nKệ đựng chén đĩa có thể nâng lên hạ xuống, phù hợp với một người có chiều cao \"khá khiêm tốn\" như chị Hương. Model máy là Kanazawa Kogyo, có cả chế độ sấy khô bát đĩa. Sử dụng sản phẩm này, chị Hương thấy nhìn căn bếp cũng hiện đại hơn hẳn so với kệ đựng bát đũa bình thường.\r\n\r\nNhược điểm: Giá bán khá cao.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 3.\r\n2. Máy rửa bát fujishan FJVN08-S10TB giá 8,5 triệu và lò nướng âm tủ Bosch EOB2100COX: 8,9 triệu\r\nChị Hương ưng ý nhất là em máy rửa bát này, vì giá phải chăng so với mặt bằng chung, mẫu mã đẹp và đặc biệt rửa cũng rất sạch. Không chê vào đâu mà phù hợp với gia đình từ 3-6 người. Gia đình chị có nhiều hôm ăn 2 bữa vẫn rửa vừa vì ít bát đũa quá.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 4.\r\n3. Lò vi sóng Ocooker: 2.750K và Lò nướng Hauswirt: 4.500K\r\nBên trái là lò vi sóng, bên phải là lò nướng trong bếp nhà chị Hương. Mặc dù gia đình chị Hương cũng có lò nướng âm tủ rồi nhưng kích thước khá to, mua thêm sản phẩm lò nướng để bàn để tiện nướng món ăn nhỏ và nướng nhanh hơn.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 5.\r\n4. Máy ép Hurom HP-MWF12: 8 triệu\r\nMáy ép chậm Hurom chị Hương mua cũng đã lâu. Hiện tại thương hiệu này cũng ra nhiều máy mới xịn và đẹp hơn, dễ rửa hơn.\r\n\r\nNhược điểm: Giá thành khá cao.\r\n\r\nNgắm bộ sưu tập đồ 13 món đồ bếp hiện đại của mẹ đảm Hà Nội trị giá 87,4 triệu - Ảnh 8.\r\n5. Nồi cao tần vũ trụ Semikron 6 lít: 7.350K\r\nLúc đầu thì chị Hương cũng không có ý định mua nồi vũ trụ cao tần vì không hay ăn cơm ở nhà, đa số là toàn ăn trên nhà ông bà nội, ông bà ngoại hoặc ăn hàng. Nhưng khi ra mẫu mới này vì quá đẹp nên đã quyết định mua. Chiếc nồi giúp chị Hương nấu nhanh hơn, không tốn sức.\r\n\r\nNhược điểm: Mỗi lần nhấn nút sẽ có chế độ nói tiếng Trung hơi to, hơi nặng 1 chút và không có tiếng Anh.\r\n\r\n\"Máy hơi to so với tưởng tượng của em nhưng ở ngoài trông rất cứng cáp, xịn sò và kiểu dáng đẹp mắt\", chị Hương chia sẻ thêm.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 6.\r\n6. Nồi cơm Joyoung Mini F-15Z609: 900K và Nồi hầm Olayks: 1.350K\r\nNồi cơm điện mini Joyoung và nồi hầm mini Olayks có dung tích đủ dùng cho gia đình 3 người. Dung tích nồi đều là 2,5 lít. Thiết kế đẹp, hiện đại.\r\n\r\nNgắm bộ sưu tập đồ 13 món đồ bếp hiện đại của mẹ đảm Hà Nội trị giá 87,4 triệu - Ảnh 10.\r\n7. Nồi lẩu Nhật Bản Iris Ohyama: 2,4 triệu\r\nNồi lẩu này khi mới ra thị trường, chị Hương đã mê mẩn vì thiết kế đẹp nên mua ngay về nhà. Nồi này nóng nhanh, nhà ít người thì khi dùng thấy dung tích cũng hơi to.\r\n\r\nNhược điểm: Giá cũng hơi cao so với nồi lẩu tầm chung.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 7.\r\n8. Nồi lẩu thang máy Blaupunkt: 2.350K\r\nNồi lẩu cầu thang máy này được chị Hương mua về vì thấy rất giống kiểu đi ăn đồ Trung Quốc tại các hàng quán.\r\n\r\nNgắm bộ sưu tập đồ 13 món đồ bếp hiện đại của mẹ đảm Hà Nội trị giá 87,4 triệu - Ảnh 12.\r\n9. Máy làm bánh mì Petrus Pe8860: 1.850K\r\nVì tình hình dịch bệnh nên thời gian ở nhà của chị Hương nhiều hơn. Có chiếc máy này chị có thể ở nhà làm bánh đỡ buồn. Máy làm bánh ngon và rất tiện.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 8.\r\n10. Bếp nướng Lotusgrill: 1.350K\r\nBếp nướng than Lotus Gill được chị Hương tìm mua trên Google, có thể nướng trong nhà hoặc ngoài trời rất tiện.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 9.\r\n11. Máy kẹp bánh mì ABS: 1.2 triệu\r\nĐây là máy kẹp bánh mì của hãng ABS có thể kẹp được bánh mì dài và làm bánh waffle. Chị Hương mua chiếc máy này để làm bữa sáng cho cả gia đình.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 10.\r\n12. Máy xay cầm tay Olayks: 550K\r\nMáy xay cầm tay Olayks xay nhanh và tiện, dễ dàng vệ sinh. Tiện mang đi tập và nhỏ gọn để trong túi.\r\n\r\nNhược điểm: Không xay được nhiều và khá nhanh hết pin.\r\n\r\nNgắm BST 10 món đồ bếp hiện đại của mẹ đảm Hà Nội, chi phí sắm tới 100 triệu đồng - Ảnh 11.\r\n13. Máy đánh trứng cầm tay: 450K\r\nTrước đây chị Hương cũng có mua máy đánh trứng để bàn, nhưng vừa tốn diện tích và tần suất cũng không làm bánh gato nhiều nên thanh lí để mua cái máy đánh trứng cầm tay này tiện cho gia đình hơn.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `id_danh_muc` (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cthd`
--
ALTER TABLE `tbl_cthd`
  ADD PRIMARY KEY (`macthd`),
  ADD KEY `mahd` (`mahd`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`matt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_cthd`
--
ALTER TABLE `tbl_cthd`
  MODIFY `macthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_danh_muc_pro1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc` (`id_danh_muc`);

--
-- Các ràng buộc cho bảng `tbl_cthd`
--
ALTER TABLE `tbl_cthd`
  ADD CONSTRAINT `tbl_cthd_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `tbl_hoadon` (`mahd`),
  ADD CONSTRAINT `tbl_cthd_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`id_san_pham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
