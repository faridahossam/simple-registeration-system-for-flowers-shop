
--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'farida', 'farida@gmail.com', '$2y$10$9vPrQpHq9uf2wgumdR4gPeALlzzoBFvU.KKB.xs3sk46s1Evgp1Pq'),
(3, 'nada', 'nada@gmail.com', '$2y$10$WRmB4bR1GSUqouOyt4Ke1.nHmTojp7mBOKUQE6QoUzxuiF7rvKlA.'),
(4, 'ahmed', 'ahmed@gmail.com', '$2y$10$qSicLB5T7nA05E3CVGgZDOsIRawOgpiZ7/7GRGFsG.dhQ0d/e86gK'),
(10, 'mohamed', 'mohamed@gmail.com', '$2y$10$x7tL.mpXEUbuvgpoM83F/.0EpZbcztKJGCCnTCNEmN4Khj4NbZyva');
COMMIT;

