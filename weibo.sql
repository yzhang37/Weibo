-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-07 19:05:26
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weibo`
--

DELIMITER $$
--
-- 存储过程
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `publish_msg` (IN `mail_t` VARCHAR(128), IN `msg_t` VARCHAR(140) CHARSET utf8mb4)  BEGIN
START TRANSACTION;
	INSERT INTO message(content) VALUES(msg_t);
    SET @new_id = last_insert_id();
    SET @uid = (SELECT user_id FROM user WHERE mail = mail_t);
    INSERT INTO publish(msg_id,user_id,msg_type) VALUES(@new_id,@uid,0);
    UPDATE user SET msg_cnt=msg_cnt+1 WHERE user_id = @uid;
COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(11) NOT NULL,
  `fo_id` int(11) NOT NULL,
  `fa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `follow`
--

INSERT INTO `follow` (`follow_id`, `fo_id`, `fa_id`) VALUES
(2, 2, 1),
(3, 3, 2),
(4, 1, 2),
(5, 4, 2);

--
-- 触发器 `follow`
--
DELIMITER $$
CREATE TRIGGER `follow_option` AFTER INSERT ON `follow` FOR EACH ROW BEGIN
	UPDATE user SET fa_cnt = fa_cnt+1 WHERE user_id = NEW.fo_id;
    UPDATE user SET fo_cnt = fo_cnt+1 WHERE user_id = NEW.fa_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `unfollow_option` AFTER DELETE ON `follow` FOR EACH ROW BEGIN
	UPDATE user SET fa_cnt = fa_cnt-1 WHERE user_id = OLD.fo_id;
	UPDATE user SET fo_cnt = fo_cnt-1 WHERE user_id = OLD.fa_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `liking`
--

CREATE TABLE `liking` (
  `msg_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `content` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tran_cnt` int(11) NOT NULL DEFAULT '0',
  `like_cnt` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`msg_id`, `content`, `tran_cnt`, `like_cnt`) VALUES
(1, 'my first weibo', 0, 0),
(2, 'my second weibo', 0, 0),
(3, 'my 3rd weibo', 0, 0),
(4, 'Pizza is so delicious!', 0, 0),
(5, 'yzhang37', 0, 0),
(6, 'ssssss', 0, 0),
(7, '?????', 0, 0),
(10, '水电费水电费', 0, 0),
(11, '2017年6月7日，服务器维护项目', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `msg_relation`
--

CREATE TABLE `msg_relation` (
  `past_msg_id` int(11) NOT NULL,
  `new_msg_id` int(11) NOT NULL,
  `relation_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `publish`
--

CREATE TABLE `publish` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg_type` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `publish`
--

INSERT INTO `publish` (`msg_id`, `user_id`, `msg_type`, `time`) VALUES
(1, 1, 0, '2017-05-29 15:51:41'),
(2, 1, 0, '2017-05-30 05:42:09'),
(3, 1, 0, '2017-05-30 05:42:30'),
(4, 2, 0, '2017-05-30 08:51:53'),
(5, 3, 0, '2017-06-04 14:13:36'),
(6, 2, 0, '2017-06-04 16:10:43'),
(7, 1, 0, '2017-06-04 16:15:13'),
(10, 1, 0, '2017-06-04 16:16:34'),
(11, 2, 0, '2017-06-07 11:10:48');

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_content` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `tagging`
--

CREATE TABLE `tagging` (
  `tag_id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nname` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fa_cnt` int(11) NOT NULL DEFAULT '0',
  `fo_cnt` int(11) NOT NULL DEFAULT '0',
  `msg_cnt` int(11) NOT NULL DEFAULT '0',
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `nname`, `mail`, `pwd`, `sign`, `fa_cnt`, `fo_cnt`, `msg_cnt`, `mobile`, `telephone`, `icon`) VALUES
(1, 'Jordan', 'jordan0801@163.com', '123456', '暑假快来啊', 1, 1, 5, NULL, '', 1),
(2, 'pizza', 'pizza@123.com', 'pizza', 'I AM PIZZA!', 1, 3, 3, NULL, '', 1),
(3, 'yzhang37', 'yzhang37', 'yzhang37', 'yzhang37', 1, 0, 1, NULL, '', 1),
(4, 'david', 'david', 'fuzhichao', '我是付志超', 1, 0, 0, NULL, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg_relation`
--
ALTER TABLE `msg_relation`
  ADD PRIMARY KEY (`past_msg_id`,`new_msg_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
