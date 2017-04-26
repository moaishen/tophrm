-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-26 11:08:22
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tophrm`
--

-- --------------------------------------------------------

--
-- 表的结构 `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `employee_name` char(10) NOT NULL COMMENT '//姓名',
  `sex` char(2) NOT NULL COMMENT '//性别',
  `birthday` date NOT NULL COMMENT '//出生日期',
  `hometown` char(10) NOT NULL COMMENT '//籍贯',
  `marry` char(5) NOT NULL COMMENT '//婚姻状况',
  `person_num` char(18) NOT NULL COMMENT '//身份证号码',
  `address` char(50) NOT NULL COMMENT '//现居住地',
  `telphone` char(11) NOT NULL COMMENT '//手机号码',
  `wechat` char(20) DEFAULT NULL COMMENT '//微信号',
  `email` varchar(50) DEFAULT NULL COMMENT '//电子邮箱',
  `degree` char(10) NOT NULL COMMENT '//学历',
  `major` char(20) DEFAULT NULL COMMENT '//专业',
  `university` char(20) DEFAULT NULL COMMENT '//毕业大学',
  `graduate_school` char(20) DEFAULT NULL COMMENT '//研究生院',
  `skill` char(20) DEFAULT NULL COMMENT '//技能职称证书',
  `employee_ID` varchar(8) NOT NULL COMMENT '//员工编号',
  `place` char(10) NOT NULL COMMENT '//工作地点',
  `company` char(10) NOT NULL COMMENT '//所属公司',
  `department_one` char(10) NOT NULL COMMENT '//一级部门',
  `department_two` char(10) NOT NULL COMMENT '//二级部门',
  `department_three` char(10) NOT NULL COMMENT '//三级部门',
  `department_four` char(10) DEFAULT NULL COMMENT '//四级部门',
  `join_date` date NOT NULL COMMENT '//入职日期',
  `job_degree` char(3) NOT NULL COMMENT '//职等',
  `job_name` char(10) NOT NULL COMMENT '//职称',
  `job_content` char(200) DEFAULT NULL COMMENT '//职务',
  `job_status` char(5) NOT NULL COMMENT '//在职状况',
  `contract_type` char(10) NOT NULL COMMENT '//合同类型',
  `contract_company` char(20) NOT NULL COMMENT '//签约公司',
  `contract_start` date NOT NULL COMMENT '//合同开始日',
  `contract_end` date NOT NULL COMMENT '//合同结束日',
  `bank` char(20) DEFAULT NULL COMMENT '//开户银行',
  `bank_card` char(20) DEFAULT NULL COMMENT '//银行卡号',
  `reserve_num` char(20) DEFAULT NULL COMMENT '//公积金账号',
  `others` char(200) DEFAULT NULL COMMENT '//备注',
  `change_date` date NOT NULL COMMENT '//最后修改时间',
  PRIMARY KEY (`employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_name`, `sex`, `birthday`, `hometown`, `marry`, `person_num`, `address`, `telphone`, `wechat`, `email`, `degree`, `major`, `university`, `graduate_school`, `skill`, `employee_ID`, `place`, `company`, `department_one`, `department_two`, `department_three`, `department_four`, `join_date`, `job_degree`, `job_name`, `job_content`, `job_status`, `contract_type`, `contract_company`, `contract_start`, `contract_end`, `bank`, `bank_card`, `reserve_num`, `others`, `change_date`) VALUES
('陈进', '男', '1990-03-06', '安徽省寿县', '单身', '342422199003062890', '上海市', '13817755464', 'ww00115000', '', '大学本科', '国际经济与贸易', '上海交通大学', '', '', '00000671', '上海', '上海总部', '一级部门', '二级部门', '三级部门', NULL, '2017-04-10', '1', '助理', '', '试用', '派遣合同', '前程无忧', '2017-04-04', '2020-06-30', '招商银行', '6226090215530839', '', '', '2017-04-26'),
('陈津津', '女', '1991-11-20', '浙江省乐清市', '单身', '330382199111203627', '上海市', '13957778119', 'chenjinxuan1991', '', '大学本科', '信息管理与信息系统', '陕西师范大学', '', '', '00000673', '上海', '上海总部', '一级部门', '二级部门', '三级部门', NULL, '2017-04-24', '1', '助理', 'CRM运营', '试用', '正式合同', '沈阳脱普上海分公司', '2017-04-24', '2020-06-30', '光大银行', '6226630602387663', '090003117657', '', '2017-04-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
