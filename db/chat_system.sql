-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 15.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatroom`
--

CREATE TABLE `chatroom` (
  `chatroomid` int(11) NOT NULL,
  `chat_name` varchar(60) NOT NULL,
  `date_created` datetime NOT NULL,
  `chat_password` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `chatroom`
--

INSERT INTO `chatroom` (`chatroomid`, `chat_name`, `date_created`, `chat_password`, `userid`) VALUES
(2, 'Admin Chat Room', '2017-09-11 13:20:51', '', 3),
(5, 'Project Sistem Terdistribusi', '2023-11-30 21:39:45', '123', 5),
(6, 'Project Sistem Digital', '2023-11-30 21:41:10', 'sisdig123', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_member`
--

CREATE TABLE `chat_member` (
  `chat_memberid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `chat_member`
--

INSERT INTO `chat_member` (`chat_memberid`, `chatroomid`, `userid`) VALUES
(2, 2, 3),
(5, 5, 5),
(6, 5, 6),
(7, 6, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `uname`, `photo`, `access`) VALUES
(5, 'admin', '$2y$10$rE6Rk.YG561CofLVW3LnguXz/qbyvId8AcJgC2lF5VExd74GFHfDC', 'Admin Chat', '', 1),
(6, 'Farel', '$2y$10$IxrupZAJB.xRTXhQPT0PwOp469adY/gau70p6WWMUzgcvQEoO8qty', 'Farel Putra Albana', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indeks untuk tabel `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`chatroomid`);

--
-- Indeks untuk tabel `chat_member`
--
ALTER TABLE `chat_member`
  ADD PRIMARY KEY (`chat_memberid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `chatroomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `chat_member`
--
ALTER TABLE `chat_member`
  MODIFY `chat_memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
