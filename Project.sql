-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2022 at 12:31 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abana`
--

CREATE TABLE IF NOT EXISTS `abana` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `abana`
--


-- --------------------------------------------------------

--
-- Table structure for table `abhnaz`
--

CREATE TABLE IF NOT EXISTS `abhnaz` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `abhnaz`
--


-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `sl` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sl`, `name`, `password`) VALUES
(1, 'Ali Khatami', '8426'),
(2, 'MD Rafidul Islam', '6248');

-- --------------------------------------------------------

--
-- Table structure for table `ahmed`
--

CREATE TABLE IF NOT EXISTS `ahmed` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ahmed`
--


-- --------------------------------------------------------

--
-- Table structure for table `ali`
--

CREATE TABLE IF NOT EXISTS `ali` (
  `sl` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ali`
--

INSERT INTO `ali` (`sl`, `name`, `password`) VALUES
(1, 'Ali Khatami', '8426');

-- --------------------------------------------------------

--
-- Table structure for table `anjita`
--

CREATE TABLE IF NOT EXISTS `anjita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `anjita`
--


-- --------------------------------------------------------

--
-- Table structure for table `anwar`
--

CREATE TABLE IF NOT EXISTS `anwar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `anwar`
--


-- --------------------------------------------------------

--
-- Table structure for table `ataur`
--

CREATE TABLE IF NOT EXISTS `ataur` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ataur`
--


-- --------------------------------------------------------

--
-- Table structure for table `azzak`
--

CREATE TABLE IF NOT EXISTS `azzak` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `azzak`
--


-- --------------------------------------------------------

--
-- Table structure for table `chowdhury`
--

CREATE TABLE IF NOT EXISTS `chowdhury` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `chowdhury`
--


-- --------------------------------------------------------

--
-- Table structure for table `eabana`
--

CREATE TABLE IF NOT EXISTS `eabana` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eabana`
--


-- --------------------------------------------------------

--
-- Table structure for table `eabhnaz`
--

CREATE TABLE IF NOT EXISTS `eabhnaz` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eabhnaz`
--


-- --------------------------------------------------------

--
-- Table structure for table `eachowdhury`
--

CREATE TABLE IF NOT EXISTS `eachowdhury` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eachowdhury`
--


-- --------------------------------------------------------

--
-- Table structure for table `eahmed`
--

CREATE TABLE IF NOT EXISTS `eahmed` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eahmed`
--


-- --------------------------------------------------------

--
-- Table structure for table `eajafar`
--

CREATE TABLE IF NOT EXISTS `eajafar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eajafar`
--


-- --------------------------------------------------------

--
-- Table structure for table `eakari`
--

CREATE TABLE IF NOT EXISTS `eakari` (
  `sl` int(11) NOT NULL default '0',
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eakari`
--


-- --------------------------------------------------------

--
-- Table structure for table `eamanshah`
--

CREATE TABLE IF NOT EXISTS `eamanshah` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eamanshah`
--


-- --------------------------------------------------------

--
-- Table structure for table `eamitsan`
--

CREATE TABLE IF NOT EXISTS `eamitsan` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eamitsan`
--


-- --------------------------------------------------------

--
-- Table structure for table `eanjita`
--

CREATE TABLE IF NOT EXISTS `eanjita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eanjita`
--


-- --------------------------------------------------------

--
-- Table structure for table `eanwar`
--

CREATE TABLE IF NOT EXISTS `eanwar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eanwar`
--


-- --------------------------------------------------------

--
-- Table structure for table `eaobita`
--

CREATE TABLE IF NOT EXISTS `eaobita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eaobita`
--


-- --------------------------------------------------------

--
-- Table structure for table `eaparaj`
--

CREATE TABLE IF NOT EXISTS `eaparaj` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eaparaj`
--


-- --------------------------------------------------------

--
-- Table structure for table `earahim`
--

CREATE TABLE IF NOT EXISTS `earahim` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `earahim`
--


-- --------------------------------------------------------

--
-- Table structure for table `easharif`
--

CREATE TABLE IF NOT EXISTS `easharif` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `easharif`
--


-- --------------------------------------------------------

--
-- Table structure for table `eataur`
--

CREATE TABLE IF NOT EXISTS `eataur` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eataur`
--


-- --------------------------------------------------------

--
-- Table structure for table `eaubarna`
--

CREATE TABLE IF NOT EXISTS `eaubarna` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eaubarna`
--


-- --------------------------------------------------------

--
-- Table structure for table `eazzak`
--

CREATE TABLE IF NOT EXISTS `eazzak` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `identity` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `eazzak`
--


-- --------------------------------------------------------

--
-- Table structure for table `eprasad`
--

CREATE TABLE IF NOT EXISTS `eprasad` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `memberpic` blob,
  `occupationplace` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eprasad`
--


-- --------------------------------------------------------

--
-- Table structure for table `jafar`
--

CREATE TABLE IF NOT EXISTS `jafar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jafar`
--


-- --------------------------------------------------------

--
-- Table structure for table `kari`
--

CREATE TABLE IF NOT EXISTS `kari` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kari`
--


-- --------------------------------------------------------

--
-- Table structure for table `manshah`
--

CREATE TABLE IF NOT EXISTS `manshah` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `manshah`
--


-- --------------------------------------------------------

--
-- Table structure for table `mitsan`
--

CREATE TABLE IF NOT EXISTS `mitsan` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mitsan`
--


-- --------------------------------------------------------

--
-- Table structure for table `obita`
--

CREATE TABLE IF NOT EXISTS `obita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `obita`
--


-- --------------------------------------------------------

--
-- Table structure for table `paraj`
--

CREATE TABLE IF NOT EXISTS `paraj` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `paraj`
--


-- --------------------------------------------------------

--
-- Table structure for table `prasad`
--

CREATE TABLE IF NOT EXISTS `prasad` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `prasad`
--


-- --------------------------------------------------------

--
-- Table structure for table `rafi`
--

CREATE TABLE IF NOT EXISTS `rafi` (
  `sl` int(11) NOT NULL auto_increment,
  `name` varchar(100) collate utf8_hungarian_ci default NULL,
  `password` varchar(50) collate utf8_hungarian_ci default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rafi`
--

INSERT INTO `rafi` (`sl`, `name`, `password`) VALUES
(1, 'MD Rafidul Islam', '6248');

-- --------------------------------------------------------

--
-- Table structure for table `rahim`
--

CREATE TABLE IF NOT EXISTS `rahim` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rahim`
--


-- --------------------------------------------------------

--
-- Table structure for table `sharif`
--

CREATE TABLE IF NOT EXISTS `sharif` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(50) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sharif`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `gender` varchar(50) default NULL,
  `dateofBirth` varchar(50) default NULL,
  `picture` blob,
  `email` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  `address` varchar(50) default NULL,
  `postalcode` varchar(50) default NULL,
  `religion` varchar(50) default NULL,
  `national` blob,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sl`, `customername`, `mobile`, `gender`, `dateofBirth`, `picture`, `email`, `password`, `address`, `postalcode`, `religion`, `national`) VALUES
(49, 'Azim Hossain', '01788544455', 'MALE', '05/11/2022', 0x70312e706e67, 'jkl76@gmail.com', '789456', 'Chattogram', '4217', 'ISLAM', 0x4e49342e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `ubarna`
--

CREATE TABLE IF NOT EXISTS `ubarna` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `mobile` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `payment` varchar(50) default NULL,
  `bkash` varchar(50) default NULL,
  `transaction` varchar(100) default NULL,
  `ubkash` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ubarna`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcabana`
--

CREATE TABLE IF NOT EXISTS `wcabana` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wcabana`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcabhnaz`
--

CREATE TABLE IF NOT EXISTS `wcabhnaz` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wcabhnaz`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcahmed`
--

CREATE TABLE IF NOT EXISTS `wcahmed` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `wcahmed`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcanjita`
--

CREATE TABLE IF NOT EXISTS `wcanjita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wcanjita`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcanwar`
--

CREATE TABLE IF NOT EXISTS `wcanwar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wcanwar`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcataur`
--

CREATE TABLE IF NOT EXISTS `wcataur` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wcataur`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcazzak`
--

CREATE TABLE IF NOT EXISTS `wcazzak` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) collate utf8_hungarian_ci default NULL,
  `university` varchar(50) collate utf8_hungarian_ci default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `wcazzak`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcchowdhury`
--

CREATE TABLE IF NOT EXISTS `wcchowdhury` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wcchowdhury`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcjafar`
--

CREATE TABLE IF NOT EXISTS `wcjafar` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wcjafar`
--


-- --------------------------------------------------------

--
-- Table structure for table `wckari`
--

CREATE TABLE IF NOT EXISTS `wckari` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wckari`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcmanshah`
--

CREATE TABLE IF NOT EXISTS `wcmanshah` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wcmanshah`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcmitsan`
--

CREATE TABLE IF NOT EXISTS `wcmitsan` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wcmitsan`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcobita`
--

CREATE TABLE IF NOT EXISTS `wcobita` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wcobita`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcparaz`
--

CREATE TABLE IF NOT EXISTS `wcparaz` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wcparaz`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcprasad`
--

CREATE TABLE IF NOT EXISTS `wcprasad` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `wcprasad`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcrahim`
--

CREATE TABLE IF NOT EXISTS `wcrahim` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wcrahim`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcsharif`
--

CREATE TABLE IF NOT EXISTS `wcsharif` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `members` varchar(50) default NULL,
  `occupation` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `wcsharif`
--


-- --------------------------------------------------------

--
-- Table structure for table `wcubarna`
--

CREATE TABLE IF NOT EXISTS `wcubarna` (
  `sl` int(11) NOT NULL auto_increment,
  `customername` varchar(100) default NULL,
  `university` varchar(50) default NULL,
  PRIMARY KEY  (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wcubarna`
--

