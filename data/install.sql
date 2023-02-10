-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-10 08:25:51
-- 服务器版本： 8.0.19
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(0, 'admin', 'nS7srBBk1qUOQvaYtVif494hdoTNSkAc', '$2y$13$UQVm41yevmUon.qBMxF1w.zDU7F4RWND6BuvCDjIdkwtwKlmVS/R.', NULL, '', 10, 0, 0, NULL),
(2, 'HJX', 'JHOVeSkgBIUrCDP6s6oMuZioOraVC6oW', '$2y$13$LyXh2Ag20CMAToYvMbxXy.l7A4.UfzWyxu2cRPzmc.BgCIfy217Ru', NULL, 'hanmaxmax@163.com', 10, 1675180289, 1675180289, 'ojy6pdUihe5v2G-Lr3lpnCb5N7SKZiG9_1675180289'),
(3, 'hello', '6E61iBpyVwPb1BYTjo21HsDyv8GCFkWo', '$2y$13$6NEbgA3Iv5H88htftZXB5OP1GNhHnJNJVVqqMA72YOkzoWE5/VjRS', NULL, '123@qq.com', 10, 1675784951, 1675784951, 'gEiMD7TS1cNx9Q0TAvC9JJiWfsXxj0m4_1675784951'),
(4, 'YX', 'owznswEHad09Lc2dhsnEwAYTwuL4_9yR', '$2y$13$hPLslxJLLnzaFzZiNMQcsuHjCwSG/p8xb.9IJWQTflSHMY7IYl6V.', NULL, '456@qq.com', 10, 1675785947, 1675785947, 'PFBTxKziX0bu1NRHoOI_7NeVMKs0zj1s_1675785947'),
(5, 'Aurora', 'X-m65Zi61sUTfz8bNkHIBRBSKBjU5tgt', '$2y$13$8lzbGkvUXA37Mr7Vw0l5AOTgjeHzx/8iIwu8KNgWBWqqno/soiLiO', NULL, '798@qq.com', 10, 1675786150, 1675786150, 'UDITtoPOorVKPC-34NpO7pTE6A71Tb6i_1675786150'),
(6, 'LYY', 'ZlK91IQWW3KA5D3PlydhqW5q-LtfHJs7', '$2y$13$vzFye851AQ71Uztij.rUmO/THXIJNiS8Ck22QsbimYzHpiVvH2cta', NULL, '111@qq.com', 9, 1675866867, 1675866867, 'cvG5MPe3vE1TplyOHCK_jWKac_GdVxTR_1675866867');

--
-- 转储表的索引
--

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
