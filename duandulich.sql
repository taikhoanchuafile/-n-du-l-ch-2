-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 21 Janvier 2021 à 04:56
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `duandulich`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `ten`, `gia`, `hinhanh`, `noidung`) VALUES
(2, 'Resort/ Khách sạn', 2000000, 'resort.jpg', 'Rộng rãi thoải mái'),
(3, 'Phương tiện', 2000000, 'phuongtien.jpg', 'Đầy đủ phương tiện du lịch:\r\nMáy bay\r\nXe lửa\r\nXe đoàn 16 chổ\r\nXe đoàn 50 chổ\r\n'),
(7, 'Giải trí', 0, 'trochoi.jpg', 'Gợi ý các trò chơi cho team( team building)\r\nGợi ý các khu vui chơi tự do.'),
(8, 'Hành trang du lịch', 0, 'hanhtrang.jpg', 'Mang gì khi đi du lịch? là câu hỏi được đặt ra bởi hầu hết những ai chuẩn bị “lên đường” đi chơi xa. Và dưới đây là một vài đồ dùng nên mang đi du lịch nhé!\r\n\r\n ');

-- --------------------------------------------------------

--
-- Structure de la table `gioithieu`
--

CREATE TABLE IF NOT EXISTS `gioithieu` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(255) NOT NULL,
  `ngay` text NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `ten`, `ngay`, `hinhanh`, `noidung`) VALUES
(1, 'Giới thiệu', '1605460418', 'tital.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `hosocongty`
--

CREATE TABLE IF NOT EXISTS `hosocongty` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gioithieu` text NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `fanpage` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `youtobe` varchar(255) NOT NULL,
  `zalo` varchar(255) NOT NULL,
  `maso` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `hosocongty`
--

INSERT INTO `hosocongty` (`id`, `ten`, `dienthoai`, `email`, `gioithieu`, `diachi`, `fanpage`, `website`, `logo`, `youtobe`, `zalo`, `maso`) VALUES
(1, 'CÔNG TY TNHH MTV Tam', '0564841529', 'totam9991@gmail.com', 'Công ty du lịch hàng đầu Bình Dương.', 'Bình Dương', 'https://www.facebook.com/totamvlog', 'http://localhost/doandulichphp', 'news.png', 'https://www.youtube.com/watch?v=b5hGx0JtLeM', '0564841529', '0564841529');

-- --------------------------------------------------------

--
-- Structure de la table `khachsan`
--

CREATE TABLE IF NOT EXISTS `khachsan` (
`id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` text CHARACTER SET utf8 NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `khachsan`
--

INSERT INTO `khachsan` (`id`, `ten`, `diachi`, `gia`, `hinh`, `noidung`) VALUES
(1, 'Six Senses Côn Đảo Resort Vũng Tàu', 'Bãi Đất Dốc, H. Côn Đảo, T. Bà Rịa - Vũng Tàu', 11300000, 'ks_vungtau.jpg', 'Six Senses Côn Đảo Resort Vũng Tàu từng vinh dự đoạt giải Công trình xây dựng và thiết kế xuất sắc nhất thế giới dành cho khách sạn dạng nhỏ năm 2010. Khu nghỉ dưỡng này có tổng cộng 50 biệt thự.'),
(2, 'Khách sạn & Spa Sheraton Nha Trang(5 sao)', '26-28 , Trần Phú, Thành Phố Nha Trang, Khánh Hòa', 1848000, 'ks_nhatrang.jpg', 'hách sạn Brandi Ocean View Nha Trang Hotel tọa lạc ngay trung tâm đường Trần Phú, ven bãi biển Nha Trang. Bước chân từ khách sạn, chưa đầy 5 phút, bạn đã có thể tận hưởng những cảnh đẹp của bãi biển Nha Trang .'),
(3, 'Windy Hill – Homestay Đà Lạt view đẹp nhất', '106 Hùng Vương, phường 11, thành phố Đà Lạt', 150000, 'ks_dalat.jpg', 'Windy Hill đáp ứng đầy đủ các yếu tố như: homestay Đà Lạt view đẹp sống ảo, quán cà phê acoustic, view nhìn ra đồi thông rộng lớn, … \r\n\r\nBên cạnh đó, không gian phòng ở sạch sẽ và thoáng mát cũng khiến cho người đến có cảm giác như ở nhà.'),
(4, 'BAMBOO SAPA HOTEL(3 sao)', '18 Mường Hoa, TT. Sa Pa, Sa Pa, Lào Cai.', 1000000, 'ks_sapa1.jpg', 'Khách sạn được thiết kế và xây dựng theo phong cách kiến trúc cổ. Tọa lạc trên một ngọn đồi nhỏ và có tầm nhìn ra dãy Hoàng Liên Sơn, thung lũng Mường Hoa, núi Hàm Rồng. Từ khách sạn đến nhà thờ đá chỉ cách 200m đi bộ'),
(5, 'Le Vent Tam Đảo homestay', 'thôn 2, thị trấn Tam Đảo, Vĩnh Phúc', 200000, 'ks_tamdao.jpg', ' Le Vent homestay Tam Đảo như một tòa lâu đài yên bình giữa trùng điệp núi non, bất kỳ background nào ở đây cũng sẽ cho bạn những shoot hình xinh xắn.'),
(6, 'Coco Beach Camp', ' Lê Minh Công, Tân Phước, Hàm Tân, Bình Thuận', 200000, 'KS_phanthiet.jpg', 'Phòng ở đa dạng, từ lều tiện nghi có đệm bên dưới mái tranh của vọng lâu, cho đến nhà gỗ đơn sơ có phòng tắm riêng.');

-- --------------------------------------------------------

--
-- Structure de la table `nhahang`
--

CREATE TABLE IF NOT EXISTS `nhahang` (
`id` int(20) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `gia` int(20) NOT NULL,
  `hinh` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nhahang`
--

INSERT INTO `nhahang` (`id`, `ten`, `diachi`, `noidung`, `gia`, `hinh`) VALUES
(1, 'Nhà Hàng Hải Sản Vạn Chài (Vũng Tàu)', '2 - 4 Lê Hồng Phong, Phường Thắng Tam Gần Đài Tưởng Niệm Liệt Sỹ Vũng Tàu, Vũng Tàu 790000 Việt Nam', 'MÓN ĂN\r\nHải sản\r\nCHẾ ĐỘ ĂN ĐẶC BIỆT\r\nPhù hợp với người ăn chay\r\nBỮA ĂN\r\nBữa trưa, Bữa tối', 500000, 'nhahangVT.jpg'),
(3, 'Rock Sunset Island Bar - nhà hàng view đẹp ở Phú Quốc', 'Hòn Móng Tay,  Phú Quốc, Phú Quốc', 'Thực khách có thể trải nghiệm các loại cocktail, rượu vang hảo hạng cùng món ăn theo phong cách tapas.', 200000, 'nhahangPQ.jpg'),
(4, 'Nhà hàng Phương Nam Hạ Long', 'Khu di lịch Bãi Cháy) Đường Đỗ Sĩ Họa – Khu Đô Thị Cái Dăm – Bãi Cháy – TP Hạ Long ( Đối diện Vinpearl Hạ Long ).', 'Nhà Hàng Phương Nam Hạ Long được biết đến với ẩm thực đậm chất Á Đông, các món ăn hải sản Hạ Long đặc sắc với thực đơn phong phú, đa dạng đặc sản 3 miền, rừng- biển… được chế biến bởi bếp trưởng giàu kinh nghiệm.', 350000, 'nhahangHL.jpg'),
(5, 'Skyline Hanoi', '38 Gia Ngư,  Quận Hoàn Kiếm, Hà Nội', 'Skyline Hanoi vừa là nhà hàng phục vụ thức ăn Châu Âu đa dạng, vừa là quán bar, café. Thực khách khi đến đây sẽ được tận hưởng không gian ngoài trời với rất nhiều loại hình hoạt động như hồ bơi.', 200000, 'nhahangHN.jpg'),
(6, 'Quán ăn Citron Restaurant sang trọng Đà Nẵng', 'Bãi Bắc, Bán đảo Sơn Trà, Sơn Trà Đà Nẵng', 'Citron Restaurant là một nhà hàng nổi tiếng Đà Nẵng nằm ngay trên sườn đồi núi Sơn Trà thế nên có view đẹp ngất ngây.\r\nNgắm biển cả mênh mộng cùng bầu trời rộng lớn khoáng đạt là một trải nghiệm thú vị mà nhà hàng dành cho bạn. \r\n\r\n', 1600000, 'nhahangDN.jpg'),
(7, 'Dasushi BBQ & Beer – Quán ăn Nhật đẹp ở Đà Nẵng', 'Lô A11 – 01 Võ Văn Kiệt, Sơn Trà, Đà Nẵng', 'Khi đến với Dasushi, bạn sẽ được sống đắm mình vào thế giới của các món nướng. Từ tôm nướng phô mai, tới cá saba nướng múi hay những món độc lạ như bụng cá hổi nướng, đầu cá hồi nướng… Món best seller tại quán mà nhất định bạn phải thưởng thức đó là Bò nướng trứ danh.', 200000, 'nhahangDN1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `phuongtien`
--

CREATE TABLE IF NOT EXISTS `phuongtien` (
`id` int(20) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `chongoi` int(100) NOT NULL,
  `gia` int(50) NOT NULL,
  `hinh` text CHARACTER SET utf8 NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `phuongtien`
--

INSERT INTO `phuongtien` (`id`, `ten`, `chongoi`, `gia`, `hinh`, `noidung`) VALUES
(1, 'Máy bay HÀ NỘI – SAPA THỊ TRẤN SƯƠNG MỜ – HÀ NỘI', 2, 2000000, 'pt_maybay.jpg', 'HÀ NỘI – SAPA THỊ TRẤN SƯƠNG MỜ – HÀ NỘI 4 ngày 3 đêm'),
(2, 'TOUR XE LỬA : NHA TRANG – BIỂN BÃI DÀI – KDL ĐẢO SẺ TRE – NHÀ YẾN ', 2, 2000000, 'taulua.png', 'TOUR XE LỬA : NHA TRANG – BIỂN BÃI DÀI – KDL ĐẢO SẺ TRE – NHÀ YẾN  03 Ngày – 03 Đêm'),
(3, 'Xem máy phượt', 2, 0, 'phuot.jpg', 'Chỉ mất tầm 3 đến 4 tiếng di chuyển bằng xe máy, bạn có thể chủ động được thời gian của mình mà có thể dừng lại ở bất kì cảnh đẹp thiên nhiên nào để nghỉ ngơi và chụp hình. ');

-- --------------------------------------------------------

--
-- Structure de la table `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
`id` int(10) unsigned NOT NULL,
  `tentour` varchar(255) NOT NULL,
  `hinhanh` text NOT NULL,
  `gia` int(100) NOT NULL,
  `noidung` text NOT NULL,
  `diemden` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tour`
--

INSERT INTO `tour` (`id`, `tentour`, `hinhanh`, `gia`, `noidung`, `diemden`) VALUES
(2, 'TOUR ĐÀ LẠT 3N3Đ GIÁ RẺ TỪ HCM NĂM 2020', 'dalat1.jpg', 2690000, 'Sân bay Liên Khương Đà Lạt Thiền Viện Trúc Lâm Đồi chè Cầu Đất Ga Đà Lạt Dinh l', 'HCM-Đà Lạt'),
(3, 'Tour du lịch Phú Quốc hàng tuần 3 ngày 2 đêm', 'phuquoc1.jpg', 3990000, 'TP. HỒ CHÍ MINH - PHÚ QUỐC\r\nKHÁM PHÁ NAM ĐẢO - CÂU CÁ BÃI SAO\r\nPHÚ QUỐC - TP. HỒ CHÍ MINH', ' TP. HỒ CHÍ MINH - PHÚ QUỐC'),
(4, 'Du lịch Miền Bắc - Hạ Long từ Sài Gòn 3 ngày 2 đêm', 'halong.jpg', 5690000, 'TP.HCM – HÀ NỘI – YÊN TỬ –HẠ LONG – NINH BÌNH - CHÙA BÁI ĐÍNH – TRÀNG AN ', 'Hà Nội - Hạ Long - Ninh Bình - Tràng An - Bái Đính'),
(5, 'Du lịch Miền Trung bay Vietnam Airlines 5 ngày 4 đêm', 'hii.jpg', 6399000, 'TP.HCM – HUẾ – ĐẠI NỘI – CHÙA THIÊN MỤ - HUẾ – QUẢNG BÌNH – ĐỘNG PHONG NHA - BÁN ĐẢO SƠN TRÀ – ĐÀ NẴNG - NGŨ HÀNH SƠN ...', 'Đà Nẵng - Bà Nà - Hội An - Huế - Thánh Địa La Vang - Động Phong Nha'),
(6, 'Tour Ninh Bình 2N1D: Hoa Lư - Tam Cốc - Hang Múa - Bái Đính - Tràng An', 'ninhbinh.jpg', 4700000, 'HÀ NỘI - HOA LƯ - TAM CỐC - HANG MÚA\r\nNINH BÌNH - BÁI ĐÍNH - TRÀNG AN - HÀ NỘI ', 'Hoa Lư - Tam Cốc - Hang Múa - Bái Đính - Tràng An'),
(7, 'Tour Ninh Thuận 3N2D', 'ninhthuan.jpg', 2700000, 'HỒ CHÍ MINH  – NINH THUẬN – KHU DU LỊCH TANYOLI \r\nĐỒNG CỪU AN HÒA - HANG RÁI – VỊNH VĨNH HY - ĐỒI CÁT NAM CƯƠNG  \r\nKHÁM PHÁ NINH THUẬN', 'HỒ CHÍ MINH  – NINH THUẬN – KHU DU LỊCH TANYOLI '),
(9, 'Tour Hà Giang 4N3D', 'hagiang.jpg', 6300000, 'HÀ NỘI – TP. HÀ GIANG\r\nNÚI ĐÔI QUẢN BẠ - LŨNG CÚ – DINH THỰ HỌ VƯƠNG – ĐỒNG VĂN\r\nĐồng Văn – Chèo thuyền trên sông Nho Quế  – Quản Bạ \r\nQUẢN BẠ - TP.HÀ GIANG – HÀ NỘI ', 'Quản Bạ - Sông Nho Quế - Lũng Cú - Đồng Văn'),
(10, 'Tour Mộc Châu 2N1D', 'mocchau.jpg', 2900000, 'HÀ NỘI - MỘC CHÂU - BẮC YÊN\r\nBẮC YÊN - SĂN MÂY TÀ XÙA - HÀ NỘI', 'HÀ NỘI - MỘC CHÂU - BẮC YÊN');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `full_name`) VALUES
(1, 'nguyentantai13031999@gmail.com', '68817e28e67090239d60420686a4f71c', 'Nguyễn Tấn Tài'),
(2, 'thaobui99bdtmu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Bùi Thị Thảo'),
(3, 'totam@fmail.com', '3eaf6c984c18d143e1c0a797779afea8', 'nhh'),
(4, 'theotheo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Lan Thi Theo'),
(5, 'totam9991@gmail.com', 'tamto569224', ''),
(6, 'totam9991@gmail.com', 'bc86cd791cd99d478e6a9f907fc3585c', 'Nguyên Thi Tô Tâm'),
(7, 'thaobui99bdtmu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Bùi Thị Thảo'),
(8, 'totam@gmail.com', '202cb962ac59075b964b07152d234b70', 'totam');

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
`id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `user_name`, `password`, `full_name`) VALUES
(1, 'admin', '123456', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gioithieu`
--
ALTER TABLE `gioithieu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hosocongty`
--
ALTER TABLE `hosocongty`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `khachsan`
--
ALTER TABLE `khachsan`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nhahang`
--
ALTER TABLE `nhahang`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phuongtien`
--
ALTER TABLE `phuongtien`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tour`
--
ALTER TABLE `tour`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `gioithieu`
--
ALTER TABLE `gioithieu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `hosocongty`
--
ALTER TABLE `hosocongty`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `khachsan`
--
ALTER TABLE `khachsan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `nhahang`
--
ALTER TABLE `nhahang`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `phuongtien`
--
ALTER TABLE `phuongtien`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tour`
--
ALTER TABLE `tour`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
