/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : zknow

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-29 09:27:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zknow_users`
-- ----------------------------
DROP TABLE IF EXISTS `zknow_users`;
CREATE TABLE `zknow_users` (
  `id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `accounts` varchar(255) NOT NULL COMMENT '账号或者邮箱',
  `passwd` char(40) NOT NULL COMMENT '密码',
  `nickname` varchar(20) NOT NULL COMMENT '昵称',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zknow_users
-- ----------------------------
INSERT INTO `zknow_users` VALUES ('1', 'admin@qq.com', '726d853a515aa2cfa6d65caef24ac8c6f7735954', 'Admin', '2018-05-23 09:49:39');
INSERT INTO `zknow_users` VALUES ('2', '123@qq.com ', '726d853a515aa2cfa6d65caef24ac8c6f7735954', '123', '2018-05-27 14:32:38');
INSERT INTO `zknow_users` VALUES ('3', '456@qq.com', '726d853a515aa2cfa6d65caef24ac8c6f7735954', '456', '2018-05-26 14:33:05');
INSERT INTO `zknow_users` VALUES ('4', '789@qq.com', '726d853a515aa2cfa6d65caef24ac8c6f7735954', '789', '2018-05-25 14:33:26');
