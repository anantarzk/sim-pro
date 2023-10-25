-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 10.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `12_okt_edd`
--

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `nik`, `section`, `jabatan`, `created_by`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'MIT', 'Junaidi/Husna', '0101', NULL, 'Manufacturing IT', 'DEVELOPER', 'beintern01@gmail.com', 4, NULL, '$2y$10$.kX9kXESyzR12rUB/m09j.V4CzYYs0mPbAo5qPQJVFNLc3UVAAOwO', NULL, '2022-12-15 06:30:11', '2022-12-15 06:30:11'),
(23, 'BHUANA LUKIETO', 'Lukieto', '201059', NULL, 'Manager Design', 'MIT', 'bhuana.lukieto@bridgestone.com', 2, NULL, '$2y$10$am1ZlAsCuHR9iFZ/qCPYNudNSwIoihhql9rGICb.IgHRgXv32YXbq', NULL, '2022-12-15 06:34:53', '2022-12-15 06:34:53'),
(24, 'DENI KUSMANA', 'Deni', '204032', NULL, 'Asst. Manager', 'MIT', 'deni.kusmana@bridgestone.com', 2, NULL, '$2y$10$uBKikH14SSXLzL6jVrGIY.El/LkVwOAJ/jsAPzHB9UrHPkV8V/uM6', NULL, '2022-12-15 06:35:45', '2022-12-15 06:35:45'),
(25, 'ASEP SUHYANA', 'Asep', '203100', 'Electrical', 'Spv. Electrical', 'MIT', 'asep.suhyana@bridgestone.com', 2, NULL, '$2y$10$.IeYpfZcCbRT/yJrmu/yCes.nloT.NgCKqpJgu80eSaHIf5.kbTIS', NULL, '2022-12-15 06:36:31', '2022-12-15 06:36:31'),
(26, 'ANDRI HERWIDI', 'Andri', '202183', 'Electrical', 'Sr. Electrical', 'MIT', 'andri.herwidi@bridgestone.com', 3, NULL, '$2y$10$CVlo1vnMIcuwDfOqd2/fz.wKTgvtlKElT72EHFI2Io0psgnTGQBsa', NULL, '2022-12-15 06:37:53', '2022-12-15 06:37:53'),
(27, 'KOHIR ALI', 'Kohir', '206025', 'Electrical', 'Sr. Electrical', 'MIT', 'kohir.ali@bridgestone.com', 3, NULL, '$2y$10$llkTJgC36G0pyiL2.uz4S.TDnu9VZDyk60b8qybdmQb3agL.SDlYK', NULL, '2022-12-15 06:39:08', '2022-12-15 06:39:08'),
(28, 'ROBBY SETIAWAN', 'Robby', '206024', 'Electrical', 'Electrical', 'MIT', 'robby.setiawan@bridgestone.com', 3, NULL, '$2y$10$1g9o0ljt8qXsoCO2yw7GfunUQVmAVPh3PRhEPlqNVjuForV9WMREG', NULL, '2022-12-15 06:41:26', '2022-12-15 06:41:26'),
(29, 'RIJAL SIBGHOTULLOH', 'Rijal', '212077', 'Electrical', 'Electrical', 'MIT', 'rijal.shibgotulloh@bridgestone.com', 3, NULL, '$2y$10$NqnyVVSYPqxndVMM2Ho.aOLFFw64rb/F8Ux7zrhAQPjoWafbTzIlm', NULL, '2022-12-15 06:42:49', '2022-12-15 06:42:49'),
(30, 'DIDIT CAHYADI', 'Didit', '210167', 'Electrical', 'Electrical', 'MIT', 'didit.cahyadi@bridgestone.com', 3, NULL, '$2y$10$gD2kokYO3geMNMYPLWzo6OSqbEoA43DkW6zaRtvcJTcOuU16fvUn2', NULL, '2022-12-15 06:44:13', '2022-12-15 06:44:13'),
(31, 'ATEK KURNIA', 'Atek', '214008', 'Electrical', 'Electrical', 'MIT', 'atek.kurnia@bridgestone.com', 3, NULL, '$2y$10$P3jFm/dLBIcQsqEklgh5auYtCKBqq8e6mbOHAHBSpeM6ewX6qB5IO', NULL, '2022-12-15 06:46:43', '2022-12-15 06:46:43'),
(32, 'JUNAIDI', 'Junaidi', '198033', 'Manufacturing IT', 'Sr. MIT', 'MIT', 'bsin.junaidi@bridgestone.com', 3, NULL, '$2y$10$6lax6QQQWQ6jQ6QtXbzsb.QLzfACHqIHd/jXvGltRwZpr6D70H6oW', NULL, '2022-12-15 08:25:17', '2022-12-15 08:25:17'),
(33, 'HUSNA MUBAROK', 'Husna', '204013', 'Manufacturing IT', 'MIT Engineer', 'MIT', 'husna.mubarok@bridgestone.com', 3, NULL, '$2y$10$lqtSz8/.1/02OHgYXoxqWODrparXk5jdZ95aluXZrGVNS3VlmD41O', NULL, '2022-12-15 08:26:14', '2022-12-15 08:26:14'),
(34, 'ZAENAL ARIFIN', 'Zaenal', '200326', 'Mechanical', 'Spv. Mechanical', 'MIT', 'zaenal.arifin@bridgestone.com', 3, NULL, '$2y$10$8TrdshWClxX57DsMrncJdOpzIslQiGJTxIpoU1ewO1ZcI6X6Vy.k.', NULL, '2022-12-15 08:27:14', '2022-12-15 08:27:14'),
(35, 'TRI HARYANTO', 'Tri', '200339', 'Mechanical', 'Sr. Mechanical', 'MIT', 'tri.haryanto@bridgestone.com', 3, NULL, '$2y$10$/fyU7r4NTKRB4cI8aByfyOWsgkfkd8UTuCXvaxfwnqvxzhhVn9OJS', NULL, '2022-12-15 08:28:10', '2022-12-15 08:28:10'),
(36, 'HERU SUSANTO', 'Heru', '203086', 'Mechanical', 'Sr. Mechanical', 'MIT', 'heru.susanto@bridgestone.com', 3, NULL, '$2y$10$EoeYMhdh1ntFknxqt83rK.VjTzy1RC0I1w0jAkwOF.0X7aiSwtbJW', NULL, '2022-12-15 08:29:29', '2022-12-15 08:29:29'),
(37, 'TEGUH PATUH RAHMAN', 'Teguh', '208103', 'Mechanical', 'Mechanical', 'MIT', 'teguh.patuh-rahman@bridgestone.com', 3, NULL, '$2y$10$EByFYxPvkrozzx7s./ThMuruDhXtQX/Q1XMD9LJ91a7ibY7fn8m4C', NULL, '2022-12-15 08:30:30', '2022-12-15 08:30:30'),
(38, 'HARI SULISTIYO', 'Hari', '208106', 'Mechanical', 'Mechanical', 'MIT', 'hari.sulistiyo@bridgestone.com', 3, NULL, '$2y$10$tZZYecHKJb/8b.WPRs3TZuEKwN4tnANxl56Ky34wwmt41vZmTWZdy', NULL, '2022-12-15 08:31:45', '2022-12-15 08:31:45'),
(39, 'SANTO WIBOWO', 'Santo', '214009', 'Mechanical', 'Mechanical', 'MIT', 'santo.wibowo@bridgestone.com', 3, NULL, '$2y$10$DO1L4L2TMr7vqWGfVqK1CenvXW5mWPpiCJL.4dymuifGH0GQfQw3C', NULL, '2022-12-15 08:33:18', '2022-12-15 08:33:18'),
(40, 'MORIN MELIANA', 'Morin', '200048', NULL, 'Adminitrasi', 'MIT', 'morin.m@bridgestone.com', 2, NULL, '$2y$10$Sz6PYAaeArL.4WSsWHTavOgcZjTwX0oO/vKOqjLUmCDAb8i8lrrYu', NULL, '2022-12-15 08:34:36', '2022-12-15 08:34:36'),
(41, 'FIRMANDO PARULIAN SITUMORANG', 'Nando', '18', 'Electrical', 'Electrical', 'MIT', 'firmandos02@gmail.com', 2, NULL, '$2y$10$ZpcUJdLBn0J3ULCrwfUvEO23EqxcTxgN8TUQKs9w7ZTwQNHckhvMG', NULL, '2022-12-15 08:40:23', '2022-12-15 08:40:23'),
(44, 'FIRMANDO PARULIAN SITUMORANG', 'Firmando', '81', 'Electrical', 'Electrical', 'MIT', 'firmandos05@gmail.com', 3, NULL, '$2y$10$u5lQ/Hr9ivZmHYG3V0v1uuGJK5Mx3HewlSyzxQR.oFbgVzo/jZHoq', NULL, '2022-12-15 08:41:43', '2022-12-15 08:41:43'),
(45, 'ANANTA RIZKI', 'Ananta', '11', 'Mechanical', 'Mechanical', 'MIT', 'anantarizki@gmail.com', 2, NULL, '$2y$10$hSUR603JtcZ2cwxkHzvhiOwMLTVke/AsGW06t3cb2oQyA55ZyT8xy', NULL, '2022-12-15 08:42:20', '2022-12-15 08:42:20'),
(46, 'ANANTA RIZKI', 'Ananta Rizki', '22', 'Mechanical', 'Mechanical', 'MIT', 'ananta@gmail.com', 3, NULL, '$2y$10$04Ahqv48tUbbINtlNpBHQOKCWIjJ6WRKRFSb.I11O2GqSf1y6AYUK', NULL, '2022-12-15 08:42:50', '2022-12-15 08:42:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
