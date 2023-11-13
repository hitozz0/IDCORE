-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 05:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nukwan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `No_pemesanan` int NOT NULL,
  `ID_user` int DEFAULT NULL,
  `Kode_Barang` int DEFAULT NULL,
  `Jumlah_Barang` int DEFAULT NULL,
  `Total_Harga` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Kode_Barang` int NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Stok` int NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `desk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Kode_Barang`, `Nama_Barang`, `Kategori`, `Stok`, `Harga`, `desk`, `img`) VALUES
(1302, 'Rexus Ayaka', '100%', 8, 'Rp.355.000', 'Tombol : 104 tombol.Konektivitas : Kabel USB.Tegangan Operasi : 5V.Multimedia : Kombinasi FN+F1-F12.Switch : Switch Outemu (Blue, Brown, Red)Kekuatan Aktuasi : 60g ± 10g.Jarak Antar Tombol : 4.0 ± 0.5MM.', '654c25a31faf9.jpg'),
(1308, 'Fantech Atom 96 MK890', '100%', 10, 'Rp.270.000', 'Layout 96 Tombol\n\nFull Keys Rollover\n\nAdjustable Heigth\n\nRGB Programable Lightning, and Music Rhythm', 'Atom96.jpg'),
(2304, 'Gamen Titan Elite', '75%', 10, 'Rp.230.000', 'Model: Titan\r\nSize: 448*152*42mm±2mm\r\nWeight: 0.76Kg±30g\r\nSwitch colour: black/blue（√）/brown/red\r\nInput: DC 5V 250mA\r\nswitch life: 50million', 'GamenElite.jpg'),
(2310, 'Vortex VX8', '75%', 10, 'Rp.600.000', 'Hotswappable Universal 3-5 pin switch, Outemu Switch\r\nPBT XDA Profile Keycaps\r\nRGB Programable Lightning & Music Rhythm\r\nFull Keys Anti Ghosting\r\nBraided Cable, Type C Connector\r\nUpgraded Stabilizer\r\nInclude Eva Plate Foam\r\nFree Keycaps Puller & Switch Puller\r\nSoftware available in our website www.vortexseries.net\r\nGaransi 1 Tahun VortexSeries', 'VX8.jpg'),
(2311, 'Keychron K2 PRO', '75%', 5, 'Rp.1.699.000', 'Keychron K2 ( Version 2 ) Wireless Mechanical Keyboard RGB Aluminum Frame Gateron K2-C1 ( Red Switch ), K2-C2 ( Blue Switch ), K2-C3 ( Brown Switch )', '654c2c16c11dd.jpg'),
(2314, 'Rexus DAXA M84 Pro', '75%', 10, 'Rp.949.000', 'Rexus DAXA M84 Pro menggunakan material plastik ABS dan telah setiap tombol telah memiliki LED RGB. Untuk konektivitas, keyboard ini bisa menggunakan koneksi Bluetooth 5.0 atau kabel USB 3.0. Baterainya sendiri memiliki kapasitas 3750 mAh dan diklaim mampu bertahan hingga berjam-jam penggunaan. ', '654e1514cdb37.jpg'),
(2318, 'NOIR OLV75', '75%', 2, 'Rp.2.663.000', 'NOIR OLV75 75% Wireless Mechanical Keyboard FEATURES 1. South Facing PCB - (For R4/F Row using North Facing due to it doesn\'t affect any interference to Cherry Profile keycaps) 2. Universal Hotswapable Switch 3. Alumunium Plate 4. Ergonomic Design 5. Dual Compatibility 6. High Performance Wireless + Bluetooth 7. 20 Types of RGB Mode 8. Plate foam and case foam installed SPECIFICATION Keys : 84 Keys Weight : 675 Gram Keycaps Material : PBT Double Shot 1.5mm Switch : Gateron Switch (50 Million keystrokes lifetime) Dimension : 311x121x38mm Connection : 1. Wireless 2,4 Ghz 2. Bluetooth 5.0 ( Pair Up to 3 Devices) 3. Wired Port USB Type-C PACKAGE CONTENT 1 x Noir OLV75 Keyboard 1 x USB Type-C Braided Cable 1 x USB Receiver for 2.4 Ghz 1 x 2 in 1 Keycap & Switch Puller 1 x Extra Olive Keycaps 1 x User Manual 1 x Switch Software can be downloaded at our official site :)', '654e1778ad0a5.jpg'),
(2319, 'Noir Timeless 82', '75%', 3, 'Rp.1.600.000', 'Noir Timeless82 75% Wireless OLED Mechanical Keyboard Gasket Mount ABS- FEATURES• OLED Screen (Customizable)• Battery up to one month• Gasket Mount (Silicone)• RGB Underglow• Custom RGB LED• Screw-in stabilizer prelube• Hotswappable south facing PCB• Connection :1. Wireless 2.4 GHz2. Bluetooth 5.0 (Pair Up to 3 Devices)3. Wired Port USB Type-C• Available in Futuristic, Nostalgic, Classic, Barebone Black, Barebone Beige.- SPECIFICATION• Plate: Polycarbonate (additional; Aluminum, FR4, POM)• Poron Switch Pad • Poron Plate Foam • Silicone Case Dampener• Screw-in Stabilizer• Keys : 82 Keys• Weight : 1300 gram• Cable Length: 180 cm• Keycaps Material : Premium ABS• Dimension : 328mm x 138mm x 42mm• Compatible with Windows and Mac OS• 4000 mAh • Windows software', '655168bb7c471.jpg'),
(3305, 'Rexus Legionare MX-9', 'TKL', 10, 'Rp.375.000', 'Rexus Gaming Keyboard Legionare MX9 memberikan pengguna pilihan untuk menentukan switch yang sesuai dengan karakteristiknya. Terdapat dua pilihan switch, yaitu switch Biru dan Merah. Biru adalah switch yang paling “clicky” dengan actuation force sekitar 50-55gram dan switch merah mempunyai karakter yang lembut dengan actuation force sekitar 45-50gram.', '654c2657e4172.jpg'),
(3309, 'Noir N2 Pro', 'TKL', 10, 'Rp.1.600.000', 'Layout : 87 KeysKeycap Material: PBT Double-shot 1.5mmWeight: 900grDimension: 363x136x36mmSwitch Brand: Gateron Mechanical SwitchSwitch Lifetime: 50 Million KeypressesBattery: 1.850Mah (up to 70 hours)', '654c2550c34cc.jpg'),
(4301, 'Noir N1 Pro', '65%', 10, 'Rp.1.200.000', 'Keys : 68 KeysKeycaps Material : PBT Double-shot 1.5mmSwitch : Gateron Switch (50 Million keystrokes lifetime)Dimension : 310x100x38mmBattery : 1450 mAh ( 64 Hours without RGB Light / 13,5 Hours with RGB Light)Connection :1. Wireless 2,4 GHz2. Bluetooth 5.0 (Pair Up to 3 Devices)3. Wired Port USB Type-C', '654c281c69536.jpg'),
(4306, 'Vortex GT 65', '65%', 10, 'Rp.1.300.000', '3 Mode Of Connection (Bluetooth 5.0 Up To 3 Device, 2.4 GHz Wireless Dongle, Wired)Rotary Aluminium Knob (Removeable with the Daughter Board)Battery 3000mAh (1 Month Warranty)Durock V2 StablizerCase Foam, Poron Switch Pad, Poron Plate FoamCoiled Cable Aviator Type C ConnectorRGB Programable Lightning, and Music Rhythm', '654c24d378f54.jpg'),
(4313, 'Vortex GT 65 Lite', '65%', 9, 'Rp.509.000', 'VortexSeries Mechanical Keyboard GT-65 Wireless 65% Gasket Mount 66 Keys', '654c3143c9bf4.jpg'),
(4317, ' Royal Kludge RK68', '65%', 3, 'Rp.849.000', 'Royal Kludge RK68 RGB menjadi mechanical keyboard minimalis yang bisa dipilih dengan budget terbatas. Keyboard ini cukup menarik karena memiliki 65% layout seperti Keychron K6 dan lebih canggih karena terdapat software yang berguna untuk mengkostumisasi grup macro dan RGB per key. Untuk konektivitas, mechanical keyboard ini memiliki dukungan Bluetooth 5.0 dengan kapasitas baterai 3.150 mAh atau menggunakan kabel USB 3.0. Untuk switch, keyboard ini menggunakan RK Switch yang memiliki tiga varian yang bisa dipilih, di antaranya; Blue, Brown, dan Red. ', '654e1656803e1.jpg'),
(4320, 'Keychron K6 Pro', '65%', 5, 'Rp.1.800.000', 'SPECIFICATION Number of Keys: 68 (65%) Switches (Not including Barebone Version): Keychron K Pro Mechanical Switch Face: South-facing Stabilizers: PCB-mounted screw-in stabilizers Number of Multimedia Keys: 12 Frame Material: ABS/ABS+Aluminum frame Plate Material: Steel Keycap Material (Not including Barebone Version): Double-shot PBT Keycap Profile: OSA (OEM profile with spherical-angle) Layout: ANSI Polling Rate (Wired Mode): 1000Hz Polling Rate (Wireless Mode): 90Hz N-Key Rollover (NKRO): Yes for both wireless and wired modes CONNECTIVITY AND POWER Backlit: 22 types of RGB backlight options plus endless possibilities Battery: 4000 mAh rechargeable li-polymer battery BT Working Time (Backlit off): Up to 300 hours (Lab test result may vary by actual use) BT Working Time (RGB): Up to 100 hours (Lowest brightness) Connection: Bluetooth and Type-C cable Bluetooth version: 5.1 Bluetooth Device Name: Keychron K6 Pro Compatible System: macOS/Windows/Linux PHYSICAL UNIT Dimension (Plastic frame version): 313 x 104 mm (12.32 x 4.09\") Weight: About 762 g / 1.68 lbs Dimension (Aluminum frame version): 317 x 107 mm (12.48 x 4.21\") Weight: 890 g / 1.96 lbs Height without keycap (front) 27 mm (1.06\") Height without keycap (rear) 31 mm (1.22\") Height incl. keycap (front) 34 mm (1.34\") Height incl. keycap (rear) 40 mm (1.57\") Typing Angle: 0, 6 and 9 MCU: Ultra-low-power ARM Cortex-M4 32-bit STM32L432 (128KB Flash) Operating Environment: -10 to 50', '65516ad70f5fd.jpg'),
(5303, 'Gamen Titan III', '60%', 10, 'Rp.330.000', 'Outemu Blue Switch, tombol yang kuat dengan ketahanan 50 juta kali,Swappable 3 pin switchKualitas Switch A+,16 mode warna RGB backlight, suasana bermain game jadi lebih menyenangkan,Poros mekanis yang dapat dipasang66 tombol dengan letak yang ringkas,Ergonomic design sehingga bermain lebih nyaman,', '654c28b80bb18.jpg'),
(5307, 'Redragon K617', '60%', 10, 'Rp.325.000', 'Redragon K617 FIZZ 60% Wired RGB Gaming Keyboard, 61 Keys Compact Mechanical Keyboard w/ White & Pink Mixed-Colored Keycaps, Linear Red Switch, Pro Driver Support', '654c29194c4cc.jpg'),
(5309, 'Fantech Maxfit61 FROST', '60%', 10, 'Rp.530.000', '60% Factor, RGB Backlighting, Detachable Type-C Cable, Hot Swappable Switches, Blue or Red Switch, Full Keys Anti-Ghosting', '654c29c461fdc.png'),
(5310, 'Rexus Daxa M64 Ultimate', '60%', 5, 'Rp.999.000', 'Dipersenjatai dengan 2 pilihan merk switch, total 3 warna, yaitu JWick T1 (Blue), Gateron Pro Milky (Red dan Yellow) yang memberikan sensasi berbeda dari keyboard Rexus dan Daxa yang sudah dahulu dirilis. Keyboard ini didukung teknologi Hotswappable yang tentunya memudahkan Anda yang gemar modifikasi keyboard.', '654c23174e608.jpg'),
(5312, 'Rexus Daiva D68', '65%', 5, 'Rp.650.000', 'Keyboard Rexus DAIVA D68 tampil dengan desain simpel, modern, dimensi ramping dan nyaman yang tetap memiliki identitas gaming keyboard ini. Dengan 68 tombol yang fungsional dan dilengkapi dengan arrow key yang mempermudah penggunaan baik untuk gaming atau aktivitas pekerjaan lainnya', '654c2db1203db.jpg'),
(5316, 'Redragon Draconic K530RGB', '60%', 6, 'Rp.807.500', 'Bagian yang menarik dari keyboard ini selain telah memiliki cahaya backlit RGB, terdapat juga konektivitas nirkabel yang mendukung Bluetooth 5.0 dengan daya kapasitas baterai 2400 mAh. Keyboard ini juga telah menggunakna Outemu Brown Switch yang cukup populer. ', '654e15bbeb968.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produksc`
--

CREATE TABLE `produksc` (
  `Kode_Barang` int NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Stok` int NOT NULL,
  `Harga` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produksc`
--

INSERT INTO `produksc` (`Kode_Barang`, `Nama_Barang`, `Kategori`, `Stok`, `Harga`) VALUES
(1302, 'Rexus Ayaka', '100%', 10, '355000'),
(1308, 'Fantech Atom 96 MK890', '100%', 10, '270000'),
(2304, 'Gamen Titan Elite', '75%', 10, '230000'),
(2310, 'Vortex VX8', '75%', 10, '600000'),
(3305, 'Rexus Legionare', 'TKL', 10, '375000'),
(3309, 'Noir N2 Pro', 'TKL', 10, '1600000'),
(4301, 'Noir N1 Pro', '65%', 10, '1200000'),
(4306, 'Vortex GT 65', '65%', 10, '1300000'),
(5303, 'Gamen Titan III', '60%', 10, '330000'),
(5307, 'Redragon K617', '60%', 10, '325000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `email`, `username`, `password`, `role`) VALUES
(25, 'nunuk@gmail.com', 'nunuk', '$2y$10$ndWSxwB7VHPuF4oWs6DiSOiTkWHa9zo6NmmPKAR08IlA9.Flvofy6', 'user'),
(26, 'donil@gmail.com', 'donil', '$2y$10$.olHuNMnq1I0SnsqksKfROnH3jCYHT41tF8CPAQX.rTMkkLlxgEki', 'user'),
(28, 'alpin@gmail.com', 'alpin', '$2y$10$LiziBfW2yXcUx.5XBmJ7Y.eNEi0P3K3qaq1M5.D3h8Kafdu0HUOmi', 'user'),
(29, 'ryu@gmail.com', 'ryu', '$2y$10$JHvNgA.3w.PUKMkHdbL/OuR/AzJoAYfTHl5qcBVjXTIM5311nhP8m', 'user'),
(31, 'admin@gmail.com', 'admin', '$2y$10$VwSibyKBojSb6gt28Ltvs.G36P.INaNVmPZmoAblyBA7A0JKMKiIa', 'admin'),
(32, 'agunglanang@gmail.com', 'Agung', '$2y$10$wePrdqii7I6uRBYpWfWuD.4fZshoI3rRMNCLm9kpplIMoNiTyu7C.', 'user'),
(33, 'reng@gmail.com', 'reng', '$2y$10$aV4YQ2CqHWKYwT8ILqCVeeiguFYY28e3dazhlet6wXGxjq1Ihx4QG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`No_pemesanan`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `Kode_Barang` (`Kode_Barang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- Indexes for table `produksc`
--
ALTER TABLE `produksc`
  ADD PRIMARY KEY (`Kode_Barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Kode_Barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213214;

--
-- AUTO_INCREMENT for table `produksc`
--
ALTER TABLE `produksc`
  MODIFY `Kode_Barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5308;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`Kode_Barang`) REFERENCES `produksc` (`Kode_Barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
