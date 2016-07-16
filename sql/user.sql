/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : study_advance

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-07-15 21:10:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin123', 'b6PKtMyUaCK22c8ulWinYHHHPe8uz6fp', '$2y$13$.MeB62vrJtbBjHouUIDVCetnIgk8fYCCdYe6lxsYXPLSu.5TMyIVS', null, 'admin123@qq.com', '10', '1464953435', '1464953435');
INSERT INTO `user` VALUES ('2', 'admin0300', 'mk93crkVbP6VhgziVLJVBT3TCfWapNuO', '$2y$13$asN/E6xUDJy/hCw3IYyQzeE3RRvP6JMbgkbYs32YSrnAlZ.XIFL/m', null, 'admin@0300.com', '10', '1465737928', '1465737928');
