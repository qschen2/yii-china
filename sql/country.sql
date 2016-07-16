/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii_china

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-07-16 10:05:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `country`
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('AU', 'Australia', '18886000');
INSERT INTO `country` VALUES ('BR', 'Brazil', '170115000');
INSERT INTO `country` VALUES ('CA', 'Canada', '1147000');
INSERT INTO `country` VALUES ('CN', 'China', '1277558000');
INSERT INTO `country` VALUES ('DE', 'Germany', '82164700');
INSERT INTO `country` VALUES ('FR', 'France', '59225700');
INSERT INTO `country` VALUES ('GB', 'United Kingdom', '59623400');
INSERT INTO `country` VALUES ('IN', 'India', '1013662000');
INSERT INTO `country` VALUES ('RU', 'Russia', '146934000');
INSERT INTO `country` VALUES ('US', 'United States', '278357000');
