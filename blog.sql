-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 03:58 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `slug`, `categoryname`) VALUES
(1, 'am-thuc', 'Ẩm thực '),
(2, 'doi-song', 'Đời sống'),
(3, 'am-nhac', 'Âm nhạc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryid` bigint(20) NOT NULL,
  `tagid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `thumbnail`, `description`, `content`, `status`, `slug`, `categoryid`, `tagid`, `userid`, `createtime`, `updatetime`) VALUES
(22, 'ReactJS – Những điều bạn cần phải biết', 'https://topdev.vn/blog/wp-content/uploads/2019/09/reactjs-nhung-dieu-ban-can-phai-biet.png', 'Trong React, thay vì thường xuyên sử dụng JavaScript để thiết kế bố cục trang web thì sẽ dùng JSX. JSX được đánh giá là sử dụng đơn giản hơn JavaScript và cho \r\n                      \r\n                      \r\n                      \r\n                 ', 'ReactJS không có những module chuyên dụng để xử lý data, vì vậy ReactJS chia nhỏ view thành các component nhỏ có mỗi quan hệ chặt chẽ với nhau. Tại sao chúng ta phải quan tâm tới cấu trúc và mối quan hệ giữa các component trong ReactJS? Câu trả lời chính là luồng truyền dữ liệu trong ReactJS: Luồng dữ liệu một chiều từ cha xuống con. Việc ReactJS sử dụng one-way data flow có thể gây ra một chút khó khăn cho những người muốn tìm hiểu và ứng dụng vào trong các dự án. Tuy nhiên, cơ chế này sẽ phát huy được ưu điểm của mình khi cấu trúc cũng như chức năng của view trở nên phức tạp thì ReactJS sẽ phát huy được vai trò của mình.', 1, 'reactjs-nhung-dieu-ban-can-phai-biet', 3, 4, 32, '2021-10-07 13:30:44', '2021-10-07 15:42:25'),
(23, 'TẠI SAO REACTJS LẠI LÀ LỰA CHỌN HÀNG ĐẦU CHO CÁC DOANH NGHIỆP', 'https://topdev.vn/blog/wp-content/uploads/2019/09/reactjs-nhung-dieu-ban-can-phai-biet-3-747x420.png', 'Trong lĩnh vực phát triển công nghệ, các chủ doanh nghiệp và developer luôn tìm kiếm những phương pháp tốt nhất để giúp doanh nghiệp của họ có những ', 'Trong lĩnh vực phát triển công nghệ, các chủ doanh nghiệp và developer luôn tìm kiếm những phương pháp tốt nhất để giúp doanh nghiệp của họ có những Trong lĩnh vực phát triển công nghệ, các chủ doanh nghiệp và developer luôn tìm kiếm những phương pháp tốt nhất để giúp doanh nghiệp của họ có những ', 1, 'tai-sao-reactjs-lai-la-lua-chon-hang-dau-cho-cac-doanh-nghiep', 2, 4, 32, '2021-10-07 13:32:52', '2021-10-07 14:03:14'),
(24, 'Tự học ReactJS: Viết custom component để sử dụng lại trong React', 'https://thaunguyen.com/blog/wp-content/uploads/2021/04/component.jpeg', 'Cũng giống như Javascript, thông thường chúng ta sẽ muốn chia sẻ code với nhau qua các function. ', 'Nếu bạn sử dụng JSX bạn cũng có thể chia sẻ và sử dụng lại code. Trong React, chúng ta gọi đó là các functions “components” và chúng có những props đặc biệt khi là một component trong React.\r\n\r\nComponent đơn giản chỉ là những functions mà nó return về một giá trị đặc biệt có thể render được(React elements, string, null, number, …)', 0, 'tu-hoc-reactjs-viet-custom-component-de-su-dung-lai-trong-react', 2, 5, 32, '2021-10-07 14:05:20', '2021-10-07 15:48:57'),
(25, 'Bài 17: Module hóa trong Node.js', 'https://s3-ap-southeast-1.amazonaws.com/homepage-media/wp-content/uploads/2020/05/19094352/nodejs_logo.png', 'Bài viết nói về module hoá trong node js', 'Module hóa hay nói cách khác là lập trình hướng module (cấu phần). Là một phương pháp lập trình mà khi đó chúng ta sẽ chia nhỏ dự án ra thành các module với mỗi module là một chức năng riêng,... Về phần lý thuyết bài này mình sẽ không nói nhiều mà chỉ tập trung ứng dụng nó vào Node.js thôi (mình sẽ viết phần lý thuyết này vào một bài khác).\r\nCũng giống như các ngôn ngữ lập trình khác thì Node.js cũng hỗ trợ chúng ta chia dự án ra thành các module nhỏ để dễ cho việc bảo trì, nâng cấp,... Và trong Node.js thì việc modules hóa được thực thi qua cú pháp của ES6 (ECMA Script). ', 1, 'bai-17-module-hoa-trong-node-js', 2, 5, 39, '2021-10-07 15:36:45', '2021-10-07 15:38:53'),
(26, 'Tạo Client Request trong Node.js', 'https://bs-uploads.toptal.io/blackfish-uploads/blog/post/seo/og_image_file/og_image/15921/secure-rest-api-in-nodejs-18f43b3033c239da5d2525cfd9fdc98f.png', 'Nếu như bạn muốn sử dụng RESful API  thì module request cũng hỗ trợ bạn một cách đơn giản. Bạn chỉ cần trỏ đến các phương thức mà bạn muốn sử dụng với các phương thức mà module request hỗ trợ chúng ta như sau:', 'Trong các ngôn ngữ lập trình bậc cao, đều hỗ trợ chúng ta tạo ra các request đến server khác, đối với node.js thì chúng ta cũng có thể thực hiện được điều này bằng việc sử dụng module http, nhưng trong phạm vi bài này mình sẽ giới thiệu với mọi người sử dụng module request trên npm của tác giả mikeal.', 1, 'tao-client-request-trong-node-js', 2, 5, 39, '2021-10-07 15:38:26', '2021-10-07 15:38:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `rolename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `rolename`) VALUES
(1, 'writter'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) NOT NULL,
  `tagkey` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `tagkey`, `slug`) VALUES
(4, 'Mạng xã hội', 'social'),
(5, 'Rank', 'rank');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleid` bigint(20) NOT NULL,
  `fullname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roleid`, `fullname`, `about`, `createtime`, `updatetime`) VALUES
(3, 'huudong', '123', 2, 'Hoàng Hữu Đồng', 'sdjhsdhsdh', '2021-09-23 13:18:58', '2021-10-07 12:54:19'),
(32, 'thuong', '123', 1, 'TK viết bài', 'jdjf', '2021-10-04 05:09:53', '2021-10-07 15:49:13'),
(39, 'vietbai', '123', 1, 'Ngô Bảo Châu', 'Nhà toán học', '2021-10-07 15:35:06', '2021-10-07 15:35:06'),
(52, 'thuong2', '123', 1, 'Tk viet bai 2', 'dứdsdsdsds', '2021-10-08 01:56:15', '2021-10-08 01:56:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoryurl` (`slug`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_posts_category` (`categoryid`),
  ADD KEY `fk_posts_users` (`userid`),
  ADD KEY `fk_posts_tags` (`tagid`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tagkey` (`tagkey`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_users_roles` (`roleid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_post_tags` FOREIGN KEY (`tagid`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `fk_posts_category` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
