-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Servidor: db.berlios.de
-- Tiempo de generación: 16-09-2007 a las 00:42:52
-- Versión del servidor: 4.1.21
-- Versión de PHP: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `opentheses`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `active_sessions`
--

CREATE TABLE IF NOT EXISTS `active_sessions` (
  `sid` varchar(32) collate latin1_general_cs NOT NULL default '',
  `name` varchar(32) collate latin1_general_cs NOT NULL default '',
  `val` text collate latin1_general_cs,
  `changed` varchar(14) collate latin1_general_cs NOT NULL default '',
  PRIMARY KEY  (`name`,`sid`),
  KEY `changed` (`changed`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_checks`
--

CREATE TABLE IF NOT EXISTS `admin_checks` (
  `keyname` varchar(255) collate latin1_general_cs NOT NULL default '',
  `value` varchar(255) collate latin1_general_cs default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antonyms`
--

CREATE TABLE IF NOT EXISTS `antonyms` (
  `id` int(11) NOT NULL auto_increment,
  `word_meaning_id1` int(11) NOT NULL default '0',
  `word_meaning_id2` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `word_meaning_id1_2` (`word_meaning_id1`),
  UNIQUE KEY `word_meaning_id2` (`word_meaning_id2`),
  KEY `word_meaning_id1` (`word_meaning_id1`,`word_meaning_id2`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_user`
--

CREATE TABLE IF NOT EXISTS `auth_user` (
  `user_id` varchar(100) collate latin1_general_cs NOT NULL default '',
  `username` varchar(100) collate latin1_general_cs NOT NULL default '',
  `password` varchar(32) collate latin1_general_cs NOT NULL default '',
  `visiblename` varchar(255) collate latin1_general_cs default NULL,
  `perms` varchar(255) collate latin1_general_cs default NULL,
  `subs_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `blocked` tinyint(4) NOT NULL default '0',
  `last_login` datetime default NULL,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `k_username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_sequence`
--

CREATE TABLE IF NOT EXISTS `db_sequence` (
  `seq_name` varchar(127) collate latin1_general_cs NOT NULL default '',
  `nextid` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`seq_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meanings`
--

CREATE TABLE IF NOT EXISTS `meanings` (
  `id` int(11) NOT NULL auto_increment,
  `distinction` varchar(255) collate latin1_general_cs default NULL,
  `subject_id` int(11) default NULL,
  `hidden` tinyint(4) default '0',
  `check_count` int(11) NOT NULL default '0',
  `super_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `hidden` (`hidden`),
  KEY `check_count` (`check_count`),
  KEY `super_id` (`super_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=8212 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `search_log`
--

CREATE TABLE IF NOT EXISTS `search_log` (
  `id` int(11) NOT NULL auto_increment,
  `term` varchar(255) collate latin1_general_cs NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `matches` int(11) NOT NULL default '0',
  `submatch` tinyint(4) NOT NULL default '0',
  `ip` varchar(15) collate latin1_general_cs NOT NULL default '0',
  `searchtime` float default NULL,
  `webservice` tinyint(4) NOT NULL default '0',
  `searchform` tinyint(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=45258 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL auto_increment,
  `subject` varchar(50) collate latin1_general_cs NOT NULL default '',
  `explanation` varchar(255) collate latin1_general_cs default NULL,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `subject` (`subject`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_actions_log`
--

CREATE TABLE IF NOT EXISTS `user_actions_log` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` varchar(255) collate latin1_general_cs default '0',
  `ip_address` varchar(15) collate latin1_general_cs NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `word` varchar(255) collate latin1_general_cs NOT NULL default '',
  `synset` varchar(255) collate latin1_general_cs NOT NULL default '',
  `synset_id` int(11) default NULL,
  `type` char(1) collate latin1_general_cs NOT NULL default '',
  `comment` varchar(255) collate latin1_general_cs NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `synset_id` (`synset_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=40734 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uses`
--

CREATE TABLE IF NOT EXISTS `uses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate latin1_general_cs NOT NULL default '',
  `shortname` varchar(255) collate latin1_general_cs NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wiktionary`
--

CREATE TABLE IF NOT EXISTS `wiktionary` (
  `headword` varchar(255) collate latin1_general_cs NOT NULL default '',
  `meanings` text collate latin1_general_cs,
  `synonyms` text collate latin1_general_cs,
  KEY `headword` (`headword`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `words`
--

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(11) NOT NULL auto_increment,
  `word` varchar(255) collate latin1_general_cs NOT NULL default '',
  `lookup` varchar(255) collate latin1_general_cs default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=23735 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `word_forms`
--

CREATE TABLE IF NOT EXISTS `word_forms` (
  `id` int(11) NOT NULL default '0',
  `word` varchar(100) collate latin1_general_cs NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `word_mapping`
--

CREATE TABLE IF NOT EXISTS `word_mapping` (
  `derived_id` int(11) NOT NULL default '0',
  `base_id` int(11) NOT NULL default '0',
  KEY `derived_id` (`derived_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `word_meanings`
--

CREATE TABLE IF NOT EXISTS `word_meanings` (
  `id` int(11) NOT NULL auto_increment,
  `word_id` int(11) NOT NULL default '0',
  `meaning_id` int(11) NOT NULL default '0',
  `use_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `word_id` (`word_id`,`meaning_id`),
  KEY `meaning_id` (`meaning_id`),
  KEY `use_id` (`use_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=46990 ;
