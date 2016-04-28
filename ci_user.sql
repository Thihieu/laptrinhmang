-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 06, 2013 at 01:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `test`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `ci_user`
-- 

CREATE TABLE `ci_user` (
  `id` int(5) unsigned NOT NULL auto_increment COMMENT 'Identify field, unique and auto increase for each row inserted',
  `name` varchar(25) default '' COMMENT 'name filed, contain name, type varchar',
  `username` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) default '' COMMENT 'email field, contain email, type varchar',
  `address` varchar(255) default '' COMMENT 'address field, contains address, type varchar',
  `password` varchar(255) NOT NULL COMMENT 'set up password',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `ci_user`
-- 

INSERT INTO `ci_user` VALUES (1, 'Jason Statham', 'jason', 'jasonstatham@hotmail.com', 'LA, USA', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `ci_user` VALUES (2, 'Robert Downey', 'robert', 'roberdowney@gmail.com', 'LA, USA', '96e79218965eb72c92a549dd5a330112');
INSERT INTO `ci_user` VALUES (3, 'Ryan Gizman', '', 'ryangizman@yahoo.com', 'TR, CA', '');
INSERT INTO `ci_user` VALUES (4, 'Tom Cruise', '', 'tomcruise@facebook.com', 'CF, USA', '');
INSERT INTO `ci_user` VALUES (5, 'BradPitt', '', 'bradpitt@hotmail.com', 'IL, USA', '');
