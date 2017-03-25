/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : two

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-01-11 16:17:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_admin_nav
-- ----------------------------
DROP TABLE IF EXISTS `admin_admin_nav`;
CREATE TABLE `admin_admin_nav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单表',
  `pid` int(11) unsigned DEFAULT '0' COMMENT '所属菜单',
  `name` varchar(15) DEFAULT '' COMMENT '菜单名称',
  `mca` varchar(255) DEFAULT '' COMMENT '模块、控制器、方法',
  `ico` varchar(20) DEFAULT '' COMMENT 'font-awesome图标',
  `order_number` int(11) unsigned DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_admin_nav
-- ----------------------------
INSERT INTO `admin_admin_nav` VALUES ('1', '0', '系统设置', 'Admin/ShowNav/config', 'cog', '1');
INSERT INTO `admin_admin_nav` VALUES ('2', '1', '菜单管理', 'Admin/Nav/index', null, null);
INSERT INTO `admin_admin_nav` VALUES ('7', '4', '权限管理', 'Admin/Rule/index', '', '1');
INSERT INTO `admin_admin_nav` VALUES ('4', '0', '权限控制', 'Admin/ShowNav/rule', 'expeditedssl', '2');
INSERT INTO `admin_admin_nav` VALUES ('8', '4', '用户组管理', 'Admin/Rule/group', '', '2');
INSERT INTO `admin_admin_nav` VALUES ('9', '4', '管理员列表', 'Admin/Rule/admin_user_list', '', '3');
INSERT INTO `admin_admin_nav` VALUES ('16', '0', '会员管理', 'Admin/ShowNav/', 'users', '4');
INSERT INTO `admin_admin_nav` VALUES ('17', '16', '会员列表', 'Admin/User/index', '', null);
INSERT INTO `admin_admin_nav` VALUES ('36', '0', '文章管理', 'Admin/ShowNav/posts', 'th', '6');
INSERT INTO `admin_admin_nav` VALUES ('37', '36', '文章列表', 'Admin/Posts/index', '', null);

-- ----------------------------
-- Table structure for admin_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `admin_auth_group`;
CREATE TABLE `admin_auth_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text COMMENT '规则id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- ----------------------------
-- Records of admin_auth_group
-- ----------------------------
INSERT INTO `admin_auth_group` VALUES ('1', '超级管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21');
INSERT INTO `admin_auth_group` VALUES ('2', '产品经理', '1', '1,2,3,4,5,6,19');
INSERT INTO `admin_auth_group` VALUES ('4', '新闻发布人员', '1', '14,15,16,17,18,12,13,19');

-- ----------------------------
-- Table structure for admin_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `admin_auth_group_access`;
CREATE TABLE `admin_auth_group_access` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户id',
  `group_id` int(11) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

-- ----------------------------
-- Records of admin_auth_group_access
-- ----------------------------
INSERT INTO `admin_auth_group_access` VALUES ('88', '1');
INSERT INTO `admin_auth_group_access` VALUES ('89', '2');
INSERT INTO `admin_auth_group_access` VALUES ('89', '4');
INSERT INTO `admin_auth_group_access` VALUES ('90', '2');
INSERT INTO `admin_auth_group_access` VALUES ('91', '1');

-- ----------------------------
-- Table structure for admin_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `admin_auth_rule`;
CREATE TABLE `admin_auth_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COMMENT='规则表';

-- ----------------------------
-- Records of admin_auth_rule
-- ----------------------------
INSERT INTO `admin_auth_rule` VALUES ('16', '3', 'Admin/Rule/add_group', '添加角色', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('17', '3', 'Admin/Rule/edit_group', '修改角色', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('18', '3', 'Admin/Rule/delete_group', '删除角色', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('14', '1', 'Test/index/index', '测试权限', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('20', '4', 'Admin/User/add_user', '添加用户（管理员）', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('7', '6', 'Admin/Rule/add', '添加权限', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('1', '0', 'Admin/Index/index', '控制台', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('10', '0', 'Admin/ShowNav/posts', '系统设置', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('11', '10', 'Admin/Posts/index', '文章管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('12', '10', 'Admin/Posts/add_posts', '菜单管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('13', '10', 'Admin/Posts/edit_posts', '日志管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('4', '6', 'Admin/User/index', '用户管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('19', '10', 'Admin/Index/logout', '退出登录', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('6', '0', 'Admin/Rule/', '权限控制', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('3', '6', 'Admin/Rule/rule_group', '角色管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('8', '6', 'Admin/Rule/edit', '修改权限', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('9', '6', 'Admin/Rule/delete', '删除权限', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('2', '6', 'Admin/Rule/rule_list', '权限管理', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('15', '3', 'Admin/Rule/rule_distribution', '角色分配权限', '1', '1', '');
INSERT INTO `admin_auth_rule` VALUES ('21', '4', 'Admin/User/edit_user', '修改用户', '1', '1', '');

-- ----------------------------
-- Table structure for admin_oauth_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_oauth_user`;
CREATE TABLE `admin_oauth_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联的本站用户id',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '类型 1：融云   2：友盟',
  `nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '第三方昵称',
  `head_img` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `openid` varchar(40) NOT NULL DEFAULT '' COMMENT '第三方用户id',
  `access_token` varchar(255) NOT NULL DEFAULT '' COMMENT 'access_token token',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '绑定时间',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=683 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_oauth_user
-- ----------------------------
INSERT INTO `admin_oauth_user` VALUES ('671', '88', '2', '白俊遥', '', '', 'k2232R1tBYJ232XJQelszNuV2tlzgsdj9m8A6JtRJXMtM2tfOffQP3U0qNG5zL2qnw9Envm4TqeJtIbMjwAZYMaLjnXw==', '1457693930', '1457693930');
INSERT INTO `admin_oauth_user` VALUES ('682', '88', '1', 'admin', 'http://bjyadmin.com/Upload/avatar/user1.jpg', '', 'U8IQ2WNHEO2GWUI5DBKrdSQmKe0yMO+J4U8bCkk5sypUTfI76qou2KKL6uzeqp+0KfzWsqxlwp+yjyGI3e3g6w==', '1469453417', '1469453417');

-- ----------------------------
-- Table structure for admin_order
-- ----------------------------
DROP TABLE IF EXISTS `admin_order`;
CREATE TABLE `admin_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单主键',
  `order_sn` int(11) unsigned NOT NULL COMMENT '订单号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_order
-- ----------------------------

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；mb_password加密',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像，相对于upload/avatar目录',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `email_code` varchar(60) DEFAULT NULL COMMENT '激活码',
  `phone` bigint(11) unsigned DEFAULT NULL COMMENT '手机号',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `register_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` varchar(16) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('88', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '/Upload/avatar/user1.jpg', '', '', null, '1', '1449199996', '', '0');
INSERT INTO `admin_users` VALUES ('89', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '/Upload/avatar/user2.jpg', '', '', null, '1', '1449199996', '', '0');
INSERT INTO `admin_users` VALUES ('90', 'wudi', 'e10adc3949ba59abbe56e057f20f883e', '', '1113249273@qq.com', null, '18712377077', '1', '1484121804', '', '0');
INSERT INTO `admin_users` VALUES ('91', '1212', '93279e3308bdbbeed946fc965017f67a', '', '12121212121212121212', null, '1212', '1', '1484121843', '', '0');
SET FOREIGN_KEY_CHECKS=1;
