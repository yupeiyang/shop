-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.6.17 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 shop 的数据库结构
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shop`;

-- 导出  表 shop.sw_auth 结构
CREATE TABLE IF NOT EXISTS `sw_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '权限名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL DEFAULT '' COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '权限等级，从0开始计数',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 shop.sw_category 结构
CREATE TABLE IF NOT EXISTS `sw_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 shop.sw_goods 结构
CREATE TABLE IF NOT EXISTS `sw_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `goods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_weight` int(11) NOT NULL DEFAULT '0' COMMENT '重量',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `goods_number` int(11) NOT NULL DEFAULT '100' COMMENT '数量',
  `goods_category_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类',
  `goods_brand_id` int(11) NOT NULL DEFAULT '0' COMMENT '品牌',
  `goods_introduce` text COLLATE utf8_unicode_ci COMMENT '详细介绍',
  `goods_big_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品图片',
  `goods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品小图',
  `goods_create_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `goods_last_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='商品表';

-- 数据导出被取消选择。

-- 导出  表 shop.sw_manager 结构
CREATE TABLE IF NOT EXISTS `sw_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_time` int(10) unsigned NOT NULL COMMENT '时间',
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `mg_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=503 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 shop.sw_role 结构
CREATE TABLE IF NOT EXISTS `sw_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作,控制器-操作,控制器-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 shop.sw_user 结构
CREATE TABLE IF NOT EXISTS `sw_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) NOT NULL DEFAULT '' COMMENT '邮箱',
  `user_sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别',
  `user_qq` varchar(32) NOT NULL DEFAULT '' COMMENT 'qq',
  `user_tel` varchar(32) NOT NULL DEFAULT '' COMMENT '手机',
  `user_xueli` tinyint(4) NOT NULL DEFAULT '1' COMMENT '学历',
  `user_hobby` varchar(32) NOT NULL DEFAULT '' COMMENT '爱好',
  `user_time` int(11) DEFAULT NULL,
  `last_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=utf8 COMMENT='会员表';

-- 数据导出被取消选择。

-- 导出  表 shop.tencent_qq 结构
CREATE TABLE IF NOT EXISTS `tencent_qq` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
