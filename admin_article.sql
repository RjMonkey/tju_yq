/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : two

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-01-15 01:41:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_article
-- ----------------------------
DROP TABLE IF EXISTS `admin_article`;
CREATE TABLE `admin_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `abstract` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `del` int(1) DEFAULT '0' COMMENT '0代表正常，1代表删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_article
-- ----------------------------
INSERT INTO `admin_article` VALUES ('1', '大家好', '呵呵哒，还斩妖', '2017-01-15 00:00:00', 'admin', '阿萨飒飒飒飒飒飒撒飒飒飒飒飒飒飒飒飒飒飒飒飒飒所所所所所所所所', '0');
INSERT INTO `admin_article` VALUES ('2', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '0');
INSERT INTO `admin_article` VALUES ('3', '这是我的新文章嘿嘿', '你想看吗', '2017-01-15 00:00:00', 'admin', '你是谁？', '0');
INSERT INTO `admin_article` VALUES ('4', '有时间了！1', '你看', '2017-01-15 00:00:00', 'admin', '上看看', '0');
INSERT INTO `admin_article` VALUES ('5', '你好', '怎么好', '2017-01-15 00:00:00', 'admin', '我也不知道', '0');
INSERT INTO `admin_article` VALUES ('6', '阿萨德', '在线', '2017-01-15 00:00:00', 'admin', '121212啊', '0');
INSERT INTO `admin_article` VALUES ('7', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '1');
INSERT INTO `admin_article` VALUES ('8', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '1');
INSERT INTO `admin_article` VALUES ('9', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '0');
INSERT INTO `admin_article` VALUES ('10', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '0');
INSERT INTO `admin_article` VALUES ('11', '可以吗', 'assassin', '2017-01-15 00:00:00', 'admin', '好吧', '0');
INSERT INTO `admin_article` VALUES ('12', '是', '2', '2017-01-15 00:00:00', 'admin', '场', '0');
INSERT INTO `admin_article` VALUES ('13', '撒', '手', '2017-01-15 00:00:00', 'admin', '吧', '0');
INSERT INTO `admin_article` VALUES ('14', '阿萨', '在学校', '2017-01-15 00:00:00', 'admin', '撒啊飒飒', '0');
INSERT INTO `admin_article` VALUES ('15', '1必须好啊！', '2', '2017-01-15 00:00:00', 'admin', '3', '0');
INSERT INTO `admin_article` VALUES ('16', '这分页真好用', '你知道吗', '2017-01-15 00:00:00', 'admin', '哈哈哈', '1');
INSERT INTO `admin_article` VALUES ('17', '我来看看', '还不错', '2017-01-15 00:00:00', 'test', '就你了！怎么用', '0');
INSERT INTO `admin_article` VALUES ('18', '测试', '11', '2017-01-15 00:00:00', 'admin', '啊啊', '0');
INSERT INTO `admin_article` VALUES ('19', '在', '啊啊', '2017-01-15 00:00:00', 'admin', '啊啊', '0');
INSERT INTO `admin_article` VALUES ('20', '31', '13', '2017-01-15 00:00:00', 'admin', '13', '0');
INSERT INTO `admin_article` VALUES ('21', '11', '11', '2017-01-15 00:00:00', 'admin', '11', '0');
INSERT INTO `admin_article` VALUES ('22', 'zzz', 'zzz', '2017-01-15 00:00:00', 'admin', 'zzz', '1');
INSERT INTO `admin_article` VALUES ('23', 'Ccc', 'ccc', '2017-01-15 00:00:00', 'admin', 'ccc', '1');
INSERT INTO `admin_article` VALUES ('24', 'vvv', 'vvv', '2017-01-15 00:00:00', 'admin', 'vvv', '1');
INSERT INTO `admin_article` VALUES ('25', '12', '31', '2017-01-15 00:00:00', 'admin', '13', '1');
INSERT INTO `admin_article` VALUES ('26', 'xc', 'xc', '2017-01-15 00:00:00', 'admin', 'xc', '1');
INSERT INTO `admin_article` VALUES ('27', '', '', '2017-01-15 00:00:00', 'admin', '', '1');
INSERT INTO `admin_article` VALUES ('28', '', '', '2017-01-15 00:00:00', 'admin', '', '1');
INSERT INTO `admin_article` VALUES ('29', 'ssss', 'ssss', '2017-01-15 00:00:00', 'admin', 'sss', '0');
INSERT INTO `admin_article` VALUES ('30', '21', '12', '2017-01-15 00:00:00', 'admin', '12', '0');
INSERT INTO `admin_article` VALUES ('31', '', '', '2017-01-15 00:00:00', 'admin', '', '1');
INSERT INTO `admin_article` VALUES ('32', 'asasd', 'asdd', '2017-01-15 00:00:00', 'test', 'asdadsad', '0');
INSERT INTO `admin_article` VALUES ('33', '11111111111', '11111111', '2017-01-15 00:00:00', 'test', '1111111111111', '0');
INSERT INTO `admin_article` VALUES ('34', '1asd', '1asdasd', '2017-01-15 00:00:00', 'admin', '1asdas', '0');
INSERT INTO `admin_article` VALUES ('35', '1212', '1212', '2017-01-15 00:00:00', 'admin', '121212', '0');
INSERT INTO `admin_article` VALUES ('36', '12', '12', '2017-01-15 00:00:00', 'admin', '12', '0');
INSERT INTO `admin_article` VALUES ('37', '12121212121212121212', '121212121212121212', '2017-01-15 00:00:00', 'admin', '12121', '0');
INSERT INTO `admin_article` VALUES ('38', '好开心啊啊', '好开心啊啊', '2017-01-15 00:00:00', 'admin', '好开心啊啊', '0');
INSERT INTO `admin_article` VALUES ('39', 'qw', 'qw', '2017-01-15 00:00:00', 'admin', 'qw', '0');
INSERT INTO `admin_article` VALUES ('40', '22', '22', '2017-01-15 00:00:00', 'admin', '22', '0');
INSERT INTO `admin_article` VALUES ('41', '442', '2424', '2017-01-15 00:00:00', 'admin', '24224', '0');
INSERT INTO `admin_article` VALUES ('42', 'qwqw', 'qqwqw', '2017-01-15 00:00:00', 'test', 'qwqwqqw', '0');
INSERT INTO `admin_article` VALUES ('43', 'Z', 'z', '2017-01-15 00:00:00', 'admin', 'ZxZxz', '0');
INSERT INTO `admin_article` VALUES ('44', '就好', '个', '2017-01-15 01:39:29', 'admin', '刚回家', '0');
INSERT INTO `admin_article` VALUES ('45', '吧哈哈哈不好吗', '那就看     就看看', '2017-01-15 01:39:53', 'admin', '今年你你你你你你你你你你你你你你你', '0');
