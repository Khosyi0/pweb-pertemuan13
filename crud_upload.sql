CREATE DATABASE IF NOT EXISTS `crud_upload` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crud_upload`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`) VALUES
(1, '5025311174', 'Asanaka Yomogi', 'Male', '0817592737', 'Tambak Pinggir Kali, Gubeng', 'asanaka yomogi.jpg'),
(2, '5025311023', 'Minami Yume', 'Female', '0813917562', 'GunungSari, Manyar', 'minami yume.jpg'),
(3, '5025311003', 'Takarada Rikka', 'Female', '0819647371', 'Pondok Kejawan Hijau', 'takarada rikka.jpg'),
(4, '5025311131', 'Hibiki Yuta', 'Male', '0816238956', 'Kampung Cina, Surabaya', 'hibiki yuta.jpg');

ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;