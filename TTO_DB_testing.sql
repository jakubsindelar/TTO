/*
Navicat MySQL Data Transfer

Source Server         : Heroesofmemory.eu
Source Server Version : 50051
Source Host           : 10.10.10.1:3306
Source Database       : testing

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2011-04-28 20:24:06
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `akce`
-- ----------------------------
DROP TABLE IF EXISTS `akce`;
CREATE TABLE `akce` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` varchar(255) NOT NULL,
  `od` date NOT NULL,
  `do` date NOT NULL,
  `popis` longtext NOT NULL,
  `misto` text NOT NULL,
  `vedouci` int(11) NOT NULL,
  `zaverecneschrnuti` longtext NOT NULL,
  `prijmycelkem` decimal(10,0) default NULL,
  `vydajecelkem` decimal(10,0) default NULL,
  `deficitakce` decimal(10,0) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of akce
-- ----------------------------

-- ----------------------------
-- Table structure for `clenove`
-- ----------------------------
DROP TABLE IF EXISTS `clenove`;
CREATE TABLE `clenove` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `den_narozeni` decimal(10,0) NOT NULL,
  `mesic_narozeni` decimal(10,0) NOT NULL,
  `rok_narozeni` decimal(10,0) NOT NULL,
  `postizeni` text NOT NULL,
  `adresa` text NOT NULL,
  `typ` int(11) NOT NULL,
  `telefon` text NOT NULL,
  `mobil` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clenove
-- ----------------------------
INSERT INTO `clenove` VALUES ('48', 'JAKUB', 'Å INDELÃÅ˜', '5', '9', '1989', 'DEFORMACE KYÄŒLE', 'HEKOVA 114/6\r\nPRAHA 6\r\n163 00', '1', '235300121', '728759930', '728759930');
INSERT INTO `clenove` VALUES ('53', 'TOMÃÅ ', 'KOSTKA', '29', '2', '1989', 'TYP POSTIÅ½ENÃ', 'NÄšKDE NA SVÄšTÄš', '3', 'neni', 'neni', 'NENI');
INSERT INTO `clenove` VALUES ('54', 'TED', 'SIMS', '27', '2', '1993', 'SSF', 'SFCVD', '1', 'fcsfd', 'sfddf', 'FDS');
INSERT INTO `clenove` VALUES ('55', 'TADEÃÅ ', 'VÄšK', '5', '9', '1946', 'TÄšLESNÄš', 'T. G. MASARYKA 10\r\n186 00  NYNBURK', '3', '789456245', '789854521', '123325');

-- ----------------------------
-- Table structure for `invited`
-- ----------------------------
DROP TABLE IF EXISTS `invited`;
CREATE TABLE `invited` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `akce` int(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of invited
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `username` varchar(255) NOT NULL default '',
  `heslo` varchar(255) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `online` int(255) NOT NULL,
  `typ` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'fanatik', '12e0aa54ef13dce20291e6cb68609fb1', '', '', '', '0', '0');
INSERT INTO `user` VALUES ('2', 'LADA', '679f811d5ad9de5667027bd06c4d04c1', '', '', '', '1', '0');
INSERT INTO `user` VALUES ('3', 'TOT', '12e0aa54ef13dce20291e6cb68609fb1', '', '', '', '0', '0');
INSERT INTO `user` VALUES ('4', 'OPRAV', '098f6bcd4621d373cade4e832627b4f6', '', '', '', '0', '1');
INSERT INTO `user` VALUES ('5', 'INTERNET EXPLORER', '09e592c4a21a21b39f22aa7d7170f162', '', '', '', '0', '2');
INSERT INTO `user` VALUES ('6', 'INTERNET EXPLORER', '09e592c4a21a21b39f22aa7d7170f162', '', '', '', '0', '2');
INSERT INTO `user` VALUES ('7', 'INTERNET EXPLORER', '09e592c4a21a21b39f22aa7d7170f162', '', '', '', '0', '2');
INSERT INTO `user` VALUES ('8', 'TEST2', '098f6bcd4621d373cade4e832627b4f6', '', '', '', '0', '1');
INSERT INTO `user` VALUES ('9', 'TEST3', '8ad8757baa8564dc136c1e07507f4a98', '', '', '', '0', '2');
INSERT INTO `user` VALUES ('10', 'TEST5', 'e3d704f3542b44a621ebed70dc0efe13', '', '', '', '0', '1');
INSERT INTO `user` VALUES ('11', 'TEST5', 'e3d704f3542b44a621ebed70dc0efe13', '', '', '', '0', '1');
INSERT INTO `user` VALUES ('12', 'TEST6', '4cfad7076129962ee70c36839a1e3e15', '', '', '', '0', '0');
INSERT INTO `user` VALUES ('13', 'TSST8', '3685206136489bf3f99dec01be325656', '', '', '', '0', '0');
INSERT INTO `user` VALUES ('14', 'TSST8', '6e87a4f6ea8244d7e04cb52e495d6693', '', '', '', '0', '2');
INSERT INTO `user` VALUES ('15', 'SFSDF', '25ee9a0642458c72d34559f6e73e1ad0', '', '', '', '0', '0');
