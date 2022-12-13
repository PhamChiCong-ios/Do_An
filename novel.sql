-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 15, 2021 lúc 02:16 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `novel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `novel`
--

DROP TABLE IF EXISTS `novel`;
CREATE TABLE IF NOT EXISTS `novel` (
  `novel_id` int(11) NOT NULL AUTO_INCREMENT,
  `novel_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novel_tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novel_theloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novel_sochuong` int(11) NOT NULL,
  `novel_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `novel_hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`novel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `novel`
--

INSERT INTO `novel` (`novel_id`, `novel_ten`, `novel_tacgia`, `novel_theloai`, `novel_sochuong`, `novel_noidung`, `novel_hinh`) VALUES
(1, 'vạn Giới Giải Mộng Sư', 'Miên y vệ', 'Đồng nhân', 886, 'Vạn giới giải mộng sư giới thiệu vắn tắt: tự bạo, tăng phát thuật, gãy chi cầu sinh, bị Độc Tâm Thuật, trăm phần trăm tay không chặn được dao găm...... Là ta kim thủ chỉ!\r\nTrợ giúp phá dỡ nữ mang thai Lý Tầm Hoan hài tử; Mang mười tuổi tiểu nữ hài đánh xuyên qua quần ẩu vương thế giới; Hiệp trợ khách hàng thu được Bộ Kinh Vân cánh tay Kỳ Lân...... Là ta công việc thường ngày.\r\nSụp đổ kịch bản, giết nhân vật chính, hủy diệt thế giới quy tắc...... Là ta quy tắc làm việc.\r\nTa là Lý Mộc, dùng đến rác rưởi nhất kỹ năng, làm lấy tối công việc gian nan!\r\nTa là cường đại nhất ( Gian ác ) giải mộng sư, am hiểu giúp ngươi thực hiện mộng tưởng ( Am hiểu hơn điều lý khách hàng ), lần đầu gặp mặt, xin nhiều bảo trọng!\r\nĐã bản hoàn tất trăm vạn chữ tiểu thuyết 《 Ta tư gia tinh cầu 》, xin yên tâm cất giữ!', 'vangioi.jpg'),
(2, 'Chư Thiên Tiên Võ', 'Tuyên Cổ Cô Tịch ', 'Đồng nhân', 600, 'Long Xà Dương Thần, Đại Đường Song Long, Phá Toái Hư Không, Phúc Vũ Phiên Vân, Tru Tiên Thục Sơn, Hoàn Mỹ Già Thiên, Tuyết Trung Hãn Đao, Phong Vân Phích Lịch, Thiên Tử Thần Binh, Tiên Kiếm Tây Du, Hồng Hoang Phong Thần, Tiên Nghịch Cầu Ma, Vĩnh Sinh Mãng Hoang, Thôn Phệ Tinh Không... Tất cả nhân thần bí Chư Thiên Bảo Giám bắt đầu.\r\n\r\nMột đời trước phàm nhân thân thể, già nua sắp chết; một đời này định muốn vấn đỉnh đỉnh phong, trường sinh bất tử! Thử hỏi trời xanh, có thể có vĩnh hằng?\r\n\r\nXuyên toa ở chư thiên, hành khắp cả ở vạn giới, tìm kiếm cái kia vĩnh hằng chi đạo!\r\n\r\nCảnh giới: Bách Hài-Nhất Dương- Nhị Hậu- Tam Bành- Nguyên Thần- Đạo Thai- Pháp Tướng- Động Hư- Thuần Dương (La Hán)-Thần Ma (Bồ Tát)-Huyền Hoàng (Đạo Nhân)(Phật đà)-Đạo Quân (Phật Tổ)-Vô Thượng Đại La', 'chuthien.jpg'),
(3, 'Tam Giới Cục Cải Tạo Lao Động', 'Nhất mộng hoàng lương', 'Đô Thị', 559, 'Tam giới lao động cải tạo cục giới thiệu vắn tắt: mộ phần mở dân túc, \r\nTiền viện ở phàm nhân, \r\nHậu viện quan tiên thần.\r\nNgẩng đầu ba thước tiên, \r\nChớ nói người khổ ở giữa.\r\nTa, còn lại sẽ không phải, một cái cố gắng đem tam giới lao động cải tạo cục chế tạo thành nữ tiên nói chuyện phiếm câu lạc bộ nam nhân......\r\nHoàng Lương xuất phẩm, khôi hài làm chủ.', 'tamgioi.jpg'),
(4, 'Tu Chân Liêu Thiên Quần', 'Thánh Kỵ Sĩ Đích Truyền Thuyết', 'Đô Thị', 3171, 'Ngày nào đó, Tống Thư Hàng ngoài ý muốn gia nhập một cái tiên hiệp chuunibyou thâm niên người bệnh giao lưu group chat, trong group bạn chat đều lấy \'Đạo hữu\' gọi nhau, biệt danh đều là các loại Phủ chủ, Động chủ, Chân nhân, Thiên sư. Ngay cả chủ nhóm lạc đường chó cảnh đều xưng là đại yêu cẩu rời nhà trốn đi. Cả ngày nói chuyện là luyện đan, xông bí cảnh, luyện công kinh nghiệm cái gì.\r\n\r\nĐột nhiên có một ngày, lặn xuống nước hồi lâu hắn đột nhiên phát hiện... Trong group mỗi một cái thành viên, vậy mà toàn bộ là tu chân giả, có thể di sơn đảo hải, trường sinh ngàn năm cái chủng loại kia! A a a a, thế giới quan tại trong vòng một đêm hoàn toàn tan vỡ á!', 'tuchan.jpg'),
(5, 'Tiên Nghịch', 'Nhĩ Căn', 'Tiên Hiệp', 1915, 'Tiên Nghịch là câu chuyện Tiên Hiệp kể về Vương Lâm - một thiếu niên bình thường, may mắn được gia nhập vào một môn phái tu tiên xuống dốc của nước Triệu, vì thiếu linh căn, vì một hiểu nhầm tai hại, vì một khối thiết tinh và nhờ có được một \"Thần Bí Hạt Châu\". Vương Lâm đã bước lên con đường tu tiên và trên con đường này, hắn sẽ đối mặt với chuyện gì?\r\n\r\n- Tu tiên là nghịch thiên hay thuận thiên, là vô tình hay hữu tình? Hãy cùng dõi theo bước chân của Vương Lâm qua 1976 chương Truyện Tiên Nghịch> để biết rõ những điều này bạn nhé!', 'tiennghich.jpg'),
(6, 'Phàm nhân tu tiên', 'Vong Ngữ', 'Tiên Hiệp', 2818, 'Phàm Nhân Tu Tiên là một câu chuyện Tiên Hiệp kể về Hàn Lập - Một người bình thường nhưng lại gặp vô vàn cơ duyên để bước đi trên con đường tu tiên, không phải anh hùng - cũng chẳng phải tiểu nhân, Hàn Lập từng bước khẳng định mình... Liệu Hàn Lập và người yêu có thể cùng bước trên con đường tu tiên và có một cái kết hoàn mỹ? Những thử thách nào đang chờ đợi bọn họ?\r\n\r\n- Truyện kết cấu khá hợp lý, tình tiết không quá chậm, không quá nhanh, diễn tả khá đặc biệt, lời văn trôi chảy, nhân vật tính cách đặc thù. Nhân vật chính, Hàn Lập, mang hơi hướng khá cô độc. Bạn nào thích đọc Tru Tiên hoặc Thương Thiên chắc sẽ thích Phàm Nhân Tu Tiên Truyện. Mời bạn đọc cùng thưởng thức và dõi theo bước chân của Hàn Lập!\r\n', 'phamnhan.jpg'),
(7, 'Đấu Phá Thương Khung', 'Thiên tầm thổ đậu', 'Huyền Huyễn', 559, '- Đấu Phá Thương Khung là một câu chuyện huyền huyễn đặc sắc kể về Tiêu Viêm, một thiên chi kiêu tử với thiên phú tu luyện mà ai ai cũng hâm mộ, bỗng một ngày người mẹ mất đi đễ lại di vật là một chiếc giới chỉ màu đen nhưng từ khi đó Tiêu Viêm đã mất đi thiên phú tu luyện của mình.\r\n\r\n- Từ thiên tài rớt xuống làm phế vật trong 3 năm, rồi bị vị hôn thê thẳng thừng từ hôn, làm dấy lên ý chí nam nhi của mình, Tiêu Viêm nhờ di vật của mẫu thân để lại là 1 chiếc hắc giới chỉ (nhẫn màu đen)Tiêu Viêm gặp được hồn của Dược Lão (Dược Trần – Dược tôn giả) 1 đại luyện dược tông sư của đấu khí đại lục…\r\n\r\n- Từ đó cuộc đời của Tiêu Viêm có những biến hóa gì? Gặp được các đại ngộ gì? Thân phận thật sự của Huân Nhi (thanh mai trúc mã lúc nhỏ của Tiêu Viêm) ra sao? Bí mật của gia tộc hắn là gì? Cùng theo dõi bộ truyện Đấu Phá Thương Khung để có thể giải đáp các thắc mắc này các bạn nhé!', 'daupha.jpg'),
(8, 'Đấu La Đại Lục', 'Đường Gia Tam thiếu', 'Huyền Huyễn', 3171, 'Đấu La Đại Lục là một trong những tác phẩm đặc sắc của Đường Gia Tam Thiếu. Tác phẩm thuộc thể loại truyện Huyễn Hiệp, mang đến cho độc giả một cái nhìn, một cảm nhận mới về thế giới hiệp khách huyền ảo. \r\n\r\nCâu chuyện với nhân vật chính, con một thợ rèn, một thợ rèn trở thành tửu quỷ, vì thê tử đã mất, sẵn sàng lôi cuốn người đọc ngay từ những chương đầu tiên. Đấu La Thế Giới, một đại lục rộng lớn, cư dân đông đúc. Chức nghiệp cao quý nhật tại đây được gọi là Hồn Sư. Mỗi người sinh ra, đều có một vũ hồn bẩm sinh.', 'daula.jpg'),
(9, 'Toàn chức cao thủ', 'Hồ Điệp Lam', 'Võng DU', 1728, 'Diệp Tu – cao thủ đứng đầu được vinh danh là bách khoa toàn thư của game Vinh Quang, vì đủ loại nguyên nhân mà bị câu lạc bộ đuổi đi. Sau khi bị trục xuất, rời khỏi nghề, hắn trở thành nhân viên quản lý trong một tiệm net nho nhỏ. Thế nhưng, với kinh nghiệm về game trong 10 năm, mang theo những hồi ức năm nào, cùng món vũ khí tự chế vẫn chưa hoàn thành, hắn lại bắt đầu quay về con đường đỉnh cao ấy…', 'toanchuc.jpg'),
(10, 'Trọng Sinh Chi Tối Cường Kiếm Thần', 'Thiên Vận Lão Miêu', 'Võng Du', 2818, 'Trọng Sinh Chi Tối Cường Kiếm Thần Game Online tung hoành thời đại.\r\n\r\nThạch Phong mang theo sống lại mười năm trò chơi ký ức, tất cả từ đầu trở lại.\r\n\r\nChế tạo của mình trò chơi phòng làm việc, đi ra không giống với nhân sinh.\r\n\r\nTrò chơi kiếm tiền kỹ xảo! Trò chơi phó bản hướng dẫn! Trò chơi truyền kỳ nhiệm vụ! Trò chơi Trang bị xuất xứ! Người chơi chỗ không biết kỹ xảo chiến đấu!\r\n\r\nLiền ngay cả Phong Trắc giả cũng không biết bí mật, hết thảy đều biết.', 'trongsinh'),
(11, 'lâm uyên thành', 'Trạch Trư', 'Huyền Huyễn', 787, 'SCVDS', '1610719829300.jpg'),
(12, 'FEAFV', 'VSBB', 'BRGS', 559, 'VDSVDSZB', 'GDSG'),
(13, 'a', 'V', 'VD', 787, 'BFDB', '1610720157quybi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `novel_theloai`
--

DROP TABLE IF EXISTS `novel_theloai`;
CREATE TABLE IF NOT EXISTS `novel_theloai` (
  `theloai_id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  PRIMARY KEY (`theloai_id`,`novel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `novel_theloai`
--

INSERT INTO `novel_theloai` (`theloai_id`, `novel_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `theloai_id` int(11) NOT NULL AUTO_INCREMENT,
  `theloai_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`theloai_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`theloai_id`, `theloai_ten`) VALUES
(1, 'Đồng Nhân'),
(2, 'Đô Thị'),
(3, 'Tiên Hiệp'),
(4, 'Huyền Huyễn'),
(5, 'Võng Du');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
