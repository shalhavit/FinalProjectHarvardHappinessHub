-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2014 at 02:53 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `harvard`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `email` varchar(256) NOT NULL,
  `subscribedon` datetime NOT NULL,
  `count` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`email`, `subscribedon`, `count`, `status`) VALUES
('srkiranraj@gmail.com', '2014-05-10 23:05:36', 13, 1),
('asda@sds.csd', '2014-05-10 23:05:53', 2, 1),
('sdf@sad.com', '2014-05-10 23:05:06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `email` varchar(256) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `week` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `hashtags` varchar(1024) NOT NULL,
  `addedon` datetime NOT NULL,
  PRIMARY KEY (`link`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`email`, `title`, `description`, `link`, `week`, `status`, `hashtags`, `addedon`) VALUES
('shalhavitcohen@fas.harvard.edu', 'What personal limitations would YOU', '', '154KRLCk3NY', 3, 2, '', '2014-05-11 03:15:22'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', '1AkZBkV07FE', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', '2EJjPKa_eLo', 2, 2, '', '2014-05-10 14:34:36'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', '2JocIZ0bqQ0', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', '4oe5n_bNhyU', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', '7XJ0ObfW3is', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', '8SZWjeymx1U', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'cbSSwlyuxDI', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'cuUvAx-fC34', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'cWLSxJAP2V4', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'C_qkObVuaaw', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'de5FEYeaMbQ', 1, 2, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'dVDIjwlmPJA', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'eTm5p1kGd3A', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'FTiw6uQs-9A', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'iezrJMqoeDg', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'jEVJHItY8Ns', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'lsbr-bLHnsw', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'nK97zOpFbUo', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'Nvqkl6W31K4', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'PzFXfvZuLK0', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'TWSIWv4yyns', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'uCaEn-lz55w', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'USs5BVOAN4s', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'Uzg8LbXBEuU', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'vehrt8kRKyY', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'W4GxA356-bs', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'WEJ4P4GrLgE', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'Xrldm7bbXWw', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', 'xvFWLhCxhVQ', 2, 1, '', '2014-05-10 00:00:00'),
('shalhavitcohen@fas.harvard.edu', 'Things I like about me are____', '', 'yCLA0uTBjP8', 4, 2, '', '2014-05-11 08:14:15'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'YEyyVQga3jM', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'How do we notice what we are missing?', '', 'ZR5qG0gvKoM', 1, 1, '', '2014-05-10 12:30:00'),
('shalhavitcohen@fas.harvard.edu', 'In what ways can taking a break be help', '', '_odpIOTAt7c', 2, 1, '', '2014-05-10 00:00:00');
