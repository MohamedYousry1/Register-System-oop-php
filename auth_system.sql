-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2026 at 12:22 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'moji', 'moji@gogo', '$2y$10$aHdfGshSKdIUIHVNv5KLgu8yzU0ygETTKbY8jyEuxreci6DcR1X9.'),
(2, 'محمد يسرى', 'yuyuy@gmail.com', '$2y$10$v8O9I5xHRrM3vM0s.n3w9.TEbQvC78wHo4FEMEsOJewavMzRJyXVC'),
(3, 'hazamsaaid', 'hazamsaaid@gmail.com', '$2y$10$rhbzzKa5NOoRWhn37Ls3..8hOA4OuXR674tHrKKwgM5aTTufN4Szm'),
(4, 'ali', 'alifikry111@gmai.com', '$2y$10$yhcAQkYdPDvSDZ9gnRa3u.UZuFQ3fnTzTWTBPj1MgjKogszR6O2Iq'),
(5, 'mohamedyosry', 'momo44@gmail.com', '$2y$10$AFwChxwyphpLfLjhjzCKVeD6jbg55NRtruRUzxcnqWSkiuAmBMQZq'),
(6, 'ali1', 'aljsdn@gmail.com', '$2y$10$kpgZ4TqN.7i7URG9dbLyEeui6o8dIPQweJFVaVd9WckHRtTGng17K'),
(7, 'jack55', 'jack@gmail.com', '$2y$10$SpHfGO9DTHaciyOSWK2pH.aeGTSrSqWaYpfpr.KqLmEnxudZAM1xK'),
(8, 'MohammedYosry', 'mohamedyosry66@gmail.com', '$2y$10$V3lhzvj.x8yaO5qIYZpPiO5b0Zi0.XE0jK38oe/PD2WsaYUEI5sju'),
(9, 'radyslim', 'rady@gmail.com', '$2y$10$rNGR/S.NtJG3AKUm/qFJxuq0wzph/u5cbNVJgQzVx8tlEmRLNDkYW'),
(10, 'ahmedyosry', 'ahmedyosry6@gmail.com', '$2y$10$kl05SfURuaPsaqhtaZuRlOdAup5tM8QMdsSWh5lV1h5asmBa6J6FS'),
(11, 'kamal', 'kamal@test.com', '$2y$10$2imVH/0peJ1uIwETKYyTiunpr0wyXry/HkPtun9dpTETHxcKxbHoS'),
(12, 'seif', 'seif@test.com', '$2y$10$hzacKCnq3cX/Cf61yRpQMeXCcyBfRWLLAtuVTT6WtEG5VBI20hC.G'),
(13, 'SEIF1', 'seif12@test.df', '$2y$10$boVowflIchbdEZDsIFmKP.JxFH0KsX0Xp9vCyiX9mqZi165afzT6C'),
(14, 'kareem', 'kareem@test.com', '$2y$10$YMB0cmVDFN8OW72G9hr5q.wAO6hSQ/K7CvszuEekFPBjShvHdqq9y'),
(15, 'maher', 'maher@test.com', '$2y$10$PQivBir3aUaci3aCBb19a.OS8MJnOwL93fvealFamdqfmnlcjcIKW'),
(16, 'sadoparagi', 'sadoparagi@test.com', '$2y$12$aZi9e4giy23Wig4Viby1tOtsLLJDY5b2/AecwKlisf2dRfPnYnyPG'),
(17, 'mohamed', 'mohamed@email.com', '$2y$12$NAHzZXXv/qXMdQWBsKK7.eShsSXzxZv9YH9QMNC.z/IU2SwJVFu/K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_users_email` (`email`),
  ADD KEY `idx_ID` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
