/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : sharpspeed

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2014-12-02 16:19:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `currentpos`
-- ----------------------------
DROP TABLE IF EXISTS `currentpos`;
CREATE TABLE `currentpos` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `主账户编号` int(11) NOT NULL,
  `子账户名称` varchar(45) NOT NULL,
  `合约名称` varchar(45) NOT NULL,
  `多空` tinyint(4) NOT NULL,
  `开仓均价` decimal(12,3) NOT NULL,
  `数量` int(11) NOT NULL,
  `结算日期` varchar(10) NOT NULL,
  `报单类型` enum('投机','套利','套保') NOT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `dailyreport`
-- ----------------------------
DROP TABLE IF EXISTS `dailyreport`;
CREATE TABLE `dailyreport` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `子账户名称` varchar(45) NOT NULL,
  `日期` varchar(10) NOT NULL,
  `初始权益` decimal(12,3) NOT NULL,
  `期末权益` decimal(12,3) NOT NULL,
  `平今平仓盈亏` decimal(12,3) NOT NULL,
  `平昨平仓盈亏` decimal(12,3) NOT NULL,
  `持仓盈亏` decimal(12,3) NOT NULL,
  `手续费` decimal(12,3) NOT NULL,
  `总盈亏` decimal(12,3) NOT NULL,
  `最大资金使用率` decimal(12,3) NOT NULL,
  `收益率` decimal(12,3) NOT NULL,
  `年化收益率` decimal(12,3) NOT NULL,
  `当日回撤` decimal(12,3) NOT NULL,
  `隔夜持仓比` decimal(12,3) NOT NULL,
  `成功平均盈利` decimal(12,3) NOT NULL,
  `失败平均亏损` decimal(12,3) NOT NULL,
  `胜率` decimal(12,3) NOT NULL,
  `结算价期末权益` decimal(12,3) NOT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `feesetting`
-- ----------------------------
DROP TABLE IF EXISTS `feesetting`;
CREATE TABLE `feesetting` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `组名称` varchar(45) NOT NULL,
  `合约` varchar(45) NOT NULL,
  `开仓手续费` varchar(45) NOT NULL,
  `平仓手续费` varchar(45) NOT NULL,
  `平今手续费` varchar(45) NOT NULL,
  `手续费类型` enum('绝对值','百分比','万分比') NOT NULL,
  `保证金比例` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `时间` datetime NOT NULL,
  `类别` varchar(45) NOT NULL,
  `内容` varchar(225) NOT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `mainaccounts`
-- ----------------------------
DROP TABLE IF EXISTS `mainaccounts`;
CREATE TABLE `mainaccounts` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `通道` enum('锋云模拟','CTP','金仕达','恒生','IB') NOT NULL,
  `经纪公司名称` varchar(45) NOT NULL,
  `经纪公司服务器` varchar(45) NOT NULL,
  `账户ID` varchar(45) NOT NULL,
  `账户密码` varchar(45) NOT NULL,
  `静态权益` decimal(12,3) NOT NULL DEFAULT '0.000',
  `未分配权益` decimal(12,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `moneyinandout`
-- ----------------------------
DROP TABLE IF EXISTS `moneyinandout`;
CREATE TABLE `moneyinandout` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `子账户名称` varchar(45) NOT NULL,
  `主账户编号` int(11) NOT NULL,
  `出入金` decimal(12,3) NOT NULL,
  `更新时间` datetime NOT NULL,
  `优先劣后` varchar(45) NOT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `子账户名称` varchar(45) NOT NULL,
  `主账号编号` int(11) NOT NULL,
  `报单引用` int(11) NOT NULL,
  `报单系统编号` varchar(45) DEFAULT '',
  `合约ID` varchar(45) NOT NULL,
  `报单价` decimal(12,3) NOT NULL,
  `报单手数` int(11) NOT NULL,
  `买卖` tinyint(1) NOT NULL,
  `开平` tinyint(1) NOT NULL,
  `是否平今` tinyint(1) NOT NULL,
  `报单类型` enum('投机','套利','套保') NOT NULL,
  `报单日期` varchar(45) NOT NULL,
  `报单时间` varchar(45) NOT NULL,
  `状态` enum('本地未提交','本地被拒绝','未成交在队列','部分成交在队列','部分成交已撤单','全部成交','全部撤单') DEFAULT NULL,
  `成交均价` decimal(12,3) DEFAULT NULL,
  `成交手数` int(11) DEFAULT NULL,
  `成交日期` varchar(45) DEFAULT NULL,
  `成交时间` varchar(45) DEFAULT NULL,
  `IP地址` varchar(45) DEFAULT NULL,
  `MAC地址` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `riskmanage`
-- ----------------------------
DROP TABLE IF EXISTS `riskmanage`;
CREATE TABLE `riskmanage` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `组名称` varchar(45) NOT NULL,
  `允许交易合约` mediumtext NOT NULL,
  `禁止开仓时间段` text,
  `减仓时间段` text,
  `风险度警告线` decimal(12,3) DEFAULT NULL,
  `风险度警告线详细` mediumtext,
  `风险度禁开线` decimal(12,3) DEFAULT NULL,
  `风险度禁开线详细` mediumtext,
  `权益警告线` decimal(12,3) DEFAULT NULL,
  `权益强平线` decimal(12,3) DEFAULT NULL,
  `隔夜减仓线` decimal(12,3) DEFAULT NULL,
  `隔夜减仓线详细` mediumtext,
  `每日撤单次数上限` int(11) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `riskmonitors`
-- ----------------------------
DROP TABLE IF EXISTS `riskmonitors`;
CREATE TABLE `riskmonitors` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(45) NOT NULL,
  `密码` varchar(45) NOT NULL,
  `附属子账户` varchar(225) NOT NULL,
  `姓名` varchar(45) DEFAULT NULL,
  `联系方式` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `settlement`
-- ----------------------------
DROP TABLE IF EXISTS `settlement`;
CREATE TABLE `settlement` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `子账户名称` varchar(45) NOT NULL,
  `静态权益` decimal(12,3) NOT NULL,
  `手续费` decimal(12,3) NOT NULL,
  `平仓盈亏` decimal(12,3) NOT NULL,
  `持仓盈亏` decimal(12,3) NOT NULL,
  `占用保证金` decimal(12,3) NOT NULL,
  `动态权益` decimal(12,3) NOT NULL,
  `风险度` decimal(12,3) NOT NULL,
  `结算日期` varchar(10) NOT NULL,
  `结算时间` varchar(8) NOT NULL,
  `优先资金` decimal(12,3) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `subaccounts`
-- ----------------------------
DROP TABLE IF EXISTS `subaccounts`;
CREATE TABLE `subaccounts` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `子账户ID` varchar(45) NOT NULL,
  `子账户密码` varchar(45) NOT NULL,
  `限制使用` tinyint(1) NOT NULL,
  `创建时间` datetime NOT NULL,
  `最后登录时间` datetime DEFAULT NULL,
  `用户姓名` varchar(45) NOT NULL DEFAULT '',
  `联系方式` varchar(45) DEFAULT NULL,
  `主账户编号` varchar(45) NOT NULL,
  `风控组名称` varchar(45) DEFAULT NULL,
  `费率组名称` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `yesterdaypos`
-- ----------------------------
DROP TABLE IF EXISTS `yesterdaypos`;
CREATE TABLE `yesterdaypos` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `主账户编号` int(11) NOT NULL,
  `子账户名称` varchar(45) NOT NULL,
  `合约名称` varchar(45) NOT NULL,
  `多空` tinyint(4) NOT NULL,
  `开仓均价` decimal(12,3) NOT NULL,
  `数量` int(11) NOT NULL,
  `开仓日期` varchar(10) NOT NULL,
  `报单类型` enum('投机','套利','套保') NOT NULL,
  `存储日期` varchar(10) NOT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `名称` varchar(45) NOT NULL,
  `密码` varchar(45) NOT NULL,
  `附属主账户` varchar(255) NOT NULL,
  `模块权限` varchar(255) NOT NULL DEFAULT '一般权限',
  `姓名` varchar(45) DEFAULT NULL,
  `联系方式` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `operations`;
CREATE TABLE `operations` (
  `编号` int(11) NOT NULL AUTO_INCREMENT,
  `功能模块` varchar(45) NOT NULL,
  `操作员` varchar(45) NOT NULL,
  `操作时间` datetime NOT NULL,
  `操作类型` varchar(45) NOT NULL,
  `操作对象` varchar(45) NOT NULL,
  `操作内容` mediumtext NOT NULL,
  `审核员` varchar(45) DEFAULT NULL,
  `审核结果` enum('待审核','已生效','已驳回') NOT NULL DEFAULT '待审核',
  `审核时间` datetime DEFAULT NULL,
  PRIMARY KEY (`编号`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;