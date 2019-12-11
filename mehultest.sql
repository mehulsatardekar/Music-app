-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 07:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mehultest`
--

-- --------------------------------------------------------

--
-- Table structure for table `artistsonglist`
--

CREATE TABLE `artistsonglist` (
  `artistsonglistid` int(11) NOT NULL,
  `artistsongname` varchar(550) NOT NULL,
  `artistname` varchar(350) NOT NULL,
  `artistsongimg` longtext NOT NULL,
  `artistid` int(11) NOT NULL,
  `artistsonglink` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artistsonglist`
--

INSERT INTO `artistsonglist` (`artistsonglistid`, `artistsongname`, `artistname`, `artistsongimg`, `artistid`, `artistsonglink`) VALUES
(6, 'Maganta Riddim', 'Dj Snake', 'shapeof.jpg', 1, ' https://songsmehul.s3.ap-south-1.amazonaws.com/song-albums/dj-snake-magenta-riddim-V73lmU9em9.mp3'),
(7, 'lean on', 'Dj Snake', 'lean on.jpg', 1, ' https://songsmehul.s3.ap-south-1.amazonaws.com/song-albums/dj-snake-magenta-riddim-V73lmU9em9.mp3'),
(8, 'Kaam 25', 'Divine', 'kaam25.jpg', 2, ' https://songsmehul.s3.ap-south-1.amazonaws.com/song-albums/Kaam+25+-+DIVINE+_+Sacred+Games+_+Netflix.mp3'),
(9, 'Apna time aayega', 'Divine', 'apna time.jpg', 2, ' https://songsmehul.s3.ap-south-1.amazonaws.com/song-albums/Apna+Time+Aayega+_+Gully+Boy+_+Ranveer+Singh+%26+Alia+Bhatt+_+DIVINE+_+Dub+Sharma+_+Zoya+Akhtar.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `artisttab`
--

CREATE TABLE `artisttab` (
  `artistid` int(11) NOT NULL,
  `artistname` varchar(550) NOT NULL,
  `artisttype` varchar(350) NOT NULL,
  `artistdesc` varchar(950) NOT NULL,
  `artistimg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artisttab`
--

INSERT INTO `artisttab` (`artistid`, `artistname`, `artisttype`, `artistdesc`, `artistimg`) VALUES
(1, 'DJ snake', 'english artist', ' William Sami Étienne Grigahcine, known professionally as DJ Snake, is a French DJ, record producer, and music programmer from Paris. DJ Snake debuted into the international scene with singles \"Bird Machine\" and \"Turn Down for What\" in 2013. \"Bird Machine\" is a collaboration with fellow French musician Alesia.', 'dj-snake.png'),
(2, 'DIVINE', 'hindi artist', ' Vivian Fernandes, better known by his stage name DIVINE, is an Indian rapper from Mumbai, India. He went to St. John the Evangelist High School Marol and studied at]]. He started to gain popularity after the release of his single Yeh Mera Bombay.', 'divine.png'),
(3, 'The Weekend', 'english artist', ' Abel Makkonen Tesfaye, better known by his stage name The Weeknd, is a Canadian singer, songwriter and record producer. He has won three Grammy Awards, eight Billboard Music Awards, two American Music Awards, nine Juno Awards, and has been nominated for one Academy Award. ', 'weekend.jpg'),
(4, 'Rihanna', 'english artist', ' Robyn Rihanna Fenty is a Barbadian singer, songwriter, fashion designer, actress and businesswoman, who has been recognized for embracing various musical styles and reinventing her image throughout her career.', 'rihanna1.jpg'),
(7, 'Lata Mangeshkar', 'marathi artist', ' Lata Mangeshkar is an Indian playback singer and music director. She is one of the best-known and most respected playback singers in India.', 'Lata-Mangeshkar_1_so9wb5.jpg'),
(8, 'Shankar Mahadevan', 'marathi artist', ' Shankar Mahadevan is an Indian singer and composer who is part of the Shankar–Ehsaan–Loy composing trio team for Indian films.', 'shankarmahadevan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songcategorylisttable`
--

CREATE TABLE `songcategorylisttable` (
  `songidlist` int(11) NOT NULL,
  `songlistname` varchar(350) NOT NULL,
  `songartistname` varchar(350) NOT NULL,
  `songimage` longtext NOT NULL,
  `songtype` varchar(450) NOT NULL,
  `songid` int(11) NOT NULL,
  `songaudio` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songcategorylisttable`
--

INSERT INTO `songcategorylisttable` (`songidlist`, `songlistname`, `songartistname`, `songimage`, `songtype`, `songid`, `songaudio`) VALUES
(5, 'Jai jai shiv shankar', ' vishal and shekar', 'earned-it.jpg', 'hindi', 20, ' https://songsmehul.s3.ap-south-1.amazonaws.com/songs/jaishiv.mp3'),
(6, 'Kesari', ' Arjit singh', 'kesari.jpg', 'hindi', 20, ' https://songsmehul.s3.ap-south-1.amazonaws.com/songs/Teri+Mitti+song+Lyrics+__+singer+B+Praak+__+Ft+Akshay+Kumar+and+Parineeti+Chopra.mp3'),
(7, 'Work', ' Rihanna', 'rihanna1.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Rihanna+-+Work+(Explicit)+ft.+Drake.m4a'),
(8, 'Creature of the nights', ' Hardwell', 'hardwell.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Hardwell+_+Austin+Mahone+-+Creatures+Of+The+Night.m4a'),
(9, 'Badam', ' Hardwell', 'hardwell.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Hardwell+_+Henry+Fong+feat.+Mr.+Vegas+-+Badam.m4a'),
(10, 'This is all we know', ' The Chainsmoker', 'english songs.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/The+Chainsmokers+-+All+We+Know+ft.+Phoebe+Ryan.m4a'),
(11, 'Shape of you', ' ED shareen', 'shapeof.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Ed-Sheeran-Shape-Of-You.mp3.mp3'),
(12, 'Wild and Free', ' Wiz khalifa', 'wild and free.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Snoop+Dogg+_+Wiz+Khalifa+-+Young_+Wild+and+Free+ft.m4a'),
(13, 'Whistle', ' Florida', 'whistleflorida.png', 'english', 22, 'https://songsmehul.s3.ap-south-1.amazonaws.com/english/Flo+Rida+-+Whistle+%5BOfficial+Video%5D.mp3'),
(14, 'Hotlinebling', ' Drake', 'drake.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Drake+-+Hotline+Bling.m4a'),
(15, 'rockabay', ' Enna marie', 'rockbay.jpg', 'english', 22, ' https://songsmehul.s3.ap-south-1.amazonaws.com/english/Clean+Bandit+-+Rockabye+ft.+Sean+Paul+_+Anne-Marie.m4a');

-- --------------------------------------------------------

--
-- Table structure for table `songcategorytable`
--

CREATE TABLE `songcategorytable` (
  `songid` int(11) NOT NULL,
  `songtitlename` varchar(350) NOT NULL,
  `songimage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songcategorytable`
--

INSERT INTO `songcategorytable` (`songid`, `songtitlename`, `songimage`) VALUES
(20, 'hindi songs', 'bassrani_A3_Rectangle_17_pattern@2x.png'),
(21, 'tomorrowland', 'PhoneWallpapers_FloralCoral.jpg'),
(22, 'english songs', 'english songs.jpg'),
(23, 'marathi songs', 'marathi-cover.jpg'),
(24, 'party songs', 'group-of-people-having-neon-party-1684187.jpg'),
(26, 'old songs', 'old.png'),
(27, 'pop songs', 'Pull_Up_Wiz_Khalifa.jpg'),
(28, 'bhojpuri songs', 'bhojpuri-img.png'),
(29, 'New Release', 'new-rlease.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `ugmail` varchar(700) NOT NULL,
  `upassword` longtext NOT NULL,
  `userphnnum` varchar(120) NOT NULL,
  `uact_creat_time` varchar(350) DEFAULT NULL,
  `usertype` varchar(100) NOT NULL,
  `lastlogin` varchar(530) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `ugmail`, `upassword`, `userphnnum`, `uact_creat_time`, `usertype`, `lastlogin`) VALUES
(21, 'mehul', 'mehul042197@gmail.com', '$2y$10$c53VS/OIIND4MK02C.B6p.LJqQVOu6CXuemH3A6J0OvVLxLn9Cb2S', '7738760120', '16/11/19=Saturday=04:27:22pm', 'USER', NULL),
(22, 'shubham', 'shubham1234@gmail.com', '$2y$10$L4HhC0CLfToRwRuvjSZqIOSNld8roroAZVODWBcZlx1VyBg9JxcUy', '7738760120', '18/11/19=Monday=06:07:11am', 'ADMIN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistsonglist`
--
ALTER TABLE `artistsonglist`
  ADD PRIMARY KEY (`artistsonglistid`),
  ADD KEY `artistlistfk` (`artistid`);

--
-- Indexes for table `artisttab`
--
ALTER TABLE `artisttab`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `songcategorylisttable`
--
ALTER TABLE `songcategorylisttable`
  ADD PRIMARY KEY (`songidlist`),
  ADD KEY `fkcatlist` (`songid`);

--
-- Indexes for table `songcategorytable`
--
ALTER TABLE `songcategorytable`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `ugmail` (`ugmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistsonglist`
--
ALTER TABLE `artistsonglist`
  MODIFY `artistsonglistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `artisttab`
--
ALTER TABLE `artisttab`
  MODIFY `artistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `songcategorylisttable`
--
ALTER TABLE `songcategorylisttable`
  MODIFY `songidlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `songcategorytable`
--
ALTER TABLE `songcategorytable`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artistsonglist`
--
ALTER TABLE `artistsonglist`
  ADD CONSTRAINT `artistlistfk` FOREIGN KEY (`artistid`) REFERENCES `artisttab` (`artistid`) ON DELETE CASCADE;

--
-- Constraints for table `songcategorylisttable`
--
ALTER TABLE `songcategorylisttable`
  ADD CONSTRAINT `fkcatlist` FOREIGN KEY (`songid`) REFERENCES `songcategorytable` (`songid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
