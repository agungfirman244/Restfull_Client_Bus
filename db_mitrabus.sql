-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Des 2020 pada 16.07
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mitrabus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id_bus` varchar(10) NOT NULL,
  `no_polis` varchar(12) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama_supir` varchar(50) NOT NULL,
  `nama_kenek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id_bus`, `no_polis`, `kelas`, `nama_supir`, `nama_kenek`) VALUES
('BS001', 'AB 7962 AK', 'Bisnis AC Toliet(Patas)', 'Abdul Hadi Ismail', 'Adhi Utomo'),
('BS002', 'AE 7022 dp', 'VIP Class', 'Achmad Fadjar', 'Adi Sasono'),
('BS003', 'B 7888 VGA', 'Executive Class', 'Agung Salim', 'Darmaji'),
('BS004', 'B 7123 VGA', 'Executive Class', 'Bambang Irawan', 'Hamadi'),
('BS005', 'K 1670 FN', 'VIP Class', 'Sugianto', 'Hermansyah'),
('BS006', 'R 1700 DG', 'VIP Class', 'Sumantri', 'Irul Panji'),
('BS007', 'F 7863 MB', 'Bisnis AC Toliet(Patas)', 'Bayu ', 'Joko Susanto'),
('BS008', 'AD 1465 CU', 'VIP Class', 'Ida Hartono', 'Edianto '),
('BS009', 'W 7232 UZ', 'VIP Class', 'Benny Setiawan', 'Anas Gunawan'),
('BS010', 'W7094 UZ', 'Executive Class', 'Rohman', 'Ainur Romzi'),
('BS011', 'K 1505 OM', 'VIP Class', 'Abid Ilhamsah', 'Fajar '),
('BS012', 'R 1718 FA', 'Bisnis AC Toliet(Patas)', 'Abimanyu', 'Bima Putro'),
('BS013', 'N 7394 US', 'VIP Class', 'Oliver Januardi', 'Khafid Aulia'),
('BS014', 'K 1580 CD', 'VIP Class', 'Agung Firmansyah', 'Pratedyo'),
('BS015', 'F 7502 AC', 'Executive Class', 'Budi ', 'Taufiq Rahmatullah'),
('BS016', 'R 1699 FA', 'Executive Class', 'Slamet Untung', 'Mochammad Faris'),
('BS017', 'B 7445 KGA', 'Bisnis AC Toliet(Patas)', 'Sunarto', 'Dwi Adi'),
('BS018', 'N 7177 UA', 'Bisnis AC Toliet(Patas)', 'Rizal', 'Bastomi'),
('BS019', 'N 7295 UA', 'Executive Class', 'Abdul Karim', 'Yongki Yudha'),
('BS020', 'AE 7509 US', 'Executive Class', 'Fuad', 'Rizaldhi'),
('BS021', 'K 1688 CD', 'Bisnis AC Toliet(Patas)', 'Afif Sufri', 'Prayoga'),
('BS022', 'B 7323 KGA', 'Bisnis AC Toliet(Patas)', 'Anang', 'Roni Ramadhan'),
('BS023', 'N 7705 UE', 'Bisnis AC Toliet(Patas)', 'Andy Suprianto', 'David'),
('BS024', 'F 7883 WB', 'Bisnis AC Toliet(Patas)', 'Mohamad Safri', 'Dwi Arniyanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberangkatan`
--

CREATE TABLE IF NOT EXISTS `keberangkatan` (
  `id_keberangkatan` varchar(10) NOT NULL,
  `id_bus` varchar(10) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `jam_keberangkatan` varchar(10) NOT NULL,
  `rute_awal` varchar(40) NOT NULL,
  `rute_tujuan` varchar(40) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keberangkatan`
--

INSERT INTO `keberangkatan` (`id_keberangkatan`, `id_bus`, `tujuan`, `tanggal_keberangkatan`, `jam_keberangkatan`, `rute_awal`, `rute_tujuan`, `harga`) VALUES
('KBK001', 'BS001', 'Malang', '2019-11-04', '06:00', 'Denpasar', 'Malang', '190000'),
('KBK002', 'BS007', 'Surabaya', '2019-10-25', '04:32', 'Denpasar', 'Surabaya', '200000'),
('KBK003', 'BS012', 'Denpasar', '2019-10-26', '06:55', 'Surabaya', 'Denpasar', '200000'),
('KBK004', 'BS003', 'Denpasar', '2019-10-26', '00:00', 'Yogyakarta', 'Denpasar', '270000'),
('KBK005', 'BS017', 'Blitar', '2019-11-27', '01:02', 'Denpasar', 'Blitar', '210000'),
('KBK006', 'BS004', 'Semarang', '2019-10-31', '00:32', 'Denpasar', 'Semarang', '270000'),
('KBK007', 'BS002', 'Tulungagung', '2019-11-21', '02:03', 'Denpasar', 'Tulungagung', '220000'),
('KBK008', 'BS010', 'Yogyakarta', '2019-11-15', '20:45', 'Denpasar', 'Yogyakarta', '270000'),
('KBK009', 'BS001', 'Denpasar', '2019-11-21', '06:00', 'Surabaya', 'Denpasar', '220000'),
('KBK010', 'BS014', 'Jakarta', '2019-11-20', '17:30', 'Semarang', 'Jakarta', '150000'),
('KBK011', 'BS014', 'Yogyakarta', '2019-04-11', '01:00', 'Jakarta', 'Yogyakarta', '170000'),
('KBK012', 'BS008', 'Solo', '2019-11-15', '06:25', 'Jakarta', 'Solo', '160000'),
('KBK013', 'BS014', 'Jakarta', '2019-12-19', '12:00', 'Yogyakarta', 'Jakarta', '150000'),
('KBK014', 'BS015', 'Semarang', '2019-11-07', '00:00', 'Jakarta', 'Semarang', '200000'),
('KBK015', 'BS019', 'Jakarta', '2019-11-20', '02:00', 'Surabaya', 'Jakarta', '260000'),
('KBK016', 'BS020', 'Malang', '2019-11-07', '13:20', 'Jakarta', 'Malang', '280000'),
('KBK017', 'BS020', 'Jakarta', '2019-12-03', '06:30', 'Malang', 'Jakarta', '280000'),
('KBK018', 'BS004', 'Semarang', '2019-11-11', '17:10', 'Surabaya', 'Semarang', '230000'),
('KBK019', 'BS004', 'Bandung', '2019-11-27', '16:00', 'Yogyakarta', 'Bandung', '170000'),
('KBK020', 'BS014', 'Salatiga', '2018-10-11', '15:30', 'Jakarta', 'Salatiga', '165000'),
('KBK021', 'BS013', 'Kudus', '2019-11-18', '16:35', 'Jakarta', 'Kudus', '195000'),
('KBK022', 'BS005', 'Solo', '2019-11-26', '05:00', 'Jakarta', 'Solo', '195000'),
('KBK023', 'BS003', 'Kudus', '2019-12-03', '06:05', 'Jakarta', 'Kudus', '230000'),
('KBK024', 'BS007', 'Jakarta', '2019-12-04', '18:00', 'Medan', 'Jakarta', '500000'),
('KBK025', 'BS001', 'Malang', '2019-12-06', '06:00', 'Medan', 'Malang', '650000'),
('KBK026', 'BS012', 'Bandung', '2019-12-06', '01:00', 'Medan', 'Bandung', '615000'),
('KBK027', 'BS012', 'Solo', '2019-12-08', '14:00', 'Medan', 'Solo', '615000'),
('KBK028', 'BS012', 'Padang', '2019-12-12', '07:00', 'Medan', 'Padang', '215000'),
('KBK029', 'BS001', 'Yogyakarta', '2019-12-13', '06:00', 'Medan', 'Yogyakarta', '615000'),
('KBK030', 'BS007', 'Semarang', '2019-12-28', '05:00', 'Medan', 'Semarang', '615000'),
('KBK031', 'BS016', 'Malang', '2019-12-29', '02:00', 'Jakarta', 'Malang', '20000'),
('KBK032', 'BS005', 'Malang', '2019-11-14', '22:59', 'Jakarta', 'Malang', '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, '12345', 1, 0, 0, NULL, 1),
(3, 2, 'agung', 1, 0, 0, NULL, 1),
(5, 4, 'agungfirman', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE IF NOT EXISTS `kursi` (
  `id_kursi` varchar(10) NOT NULL,
  `kode_kursi` varchar(20) NOT NULL,
  `urutan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `kode_kursi`, `urutan`) VALUES
('KRI001', 'A01', 1),
('KRI002', 'A02', 2),
('KRI003', 'A03', 3),
('KRI004', 'A04', 4),
('KRI005', 'B01', 8),
('KRI006', 'B02', 7),
('KRI007', 'B03', 6),
('KRI008', 'B04', 5),
('KRI009', 'C01', 9),
('KRI010', 'C02', 10),
('KRI011', 'C03', 11),
('KRI012', 'C04', 12),
('KRI013', 'D01', 16),
('KRI014', 'D02', 15),
('KRI015', 'D03', 14),
('KRI016', 'D04', 13),
('KRI017', 'E01', 17),
('KRI018', 'E02', 18),
('KRI019', 'E03', 19),
('KRI020', 'E04', 20),
('KRI021', 'F01', 24),
('KRI022', 'F02', 23),
('KRI023', 'F03', 22),
('KRI024', 'F04', 21),
('KRI027', 'G03', 27),
('KRI028', 'G04', 28),
('KRI029', 'H01', 32),
('KRI030', 'H02', 31),
('KRI031', 'H03', 30),
('KRI032', 'H04', 29),
('KRI033', 'I01', 33),
('KRI034', 'I02', 34),
('KRI035', 'I03', 35),
('KRI036', 'I04', 36),
('KRI037', 'J01', 40),
('KRI038', 'J02', 39),
('KRI039', 'J03', 38),
('KRI040', 'J04', 37),
('KRI041', 'J06', 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE IF NOT EXISTS `limits` (
`id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/bus/index:get', 2, 1608044320, 'agungfirman'),
(2, 'uri:api/bus/index:get', 2, 1608044353, '12345'),
(3, 'uri:api/bus/index:get', 3, 1608044361, 'agung'),
(4, 'uri:api/kursi/index:get', 4, 1608044555, 'agung'),
(5, 'uri:api/kursi/index:delete', 1, 1608044705, 'agungfirman'),
(6, 'uri:api/kursi/index:post', 1, 1608044758, 'agungfirman'),
(7, 'uri:api/kursi/index:put', 1, 1608044776, 'agungfirman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_keberangkatan` varchar(10) NOT NULL,
  `id_kursi` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `id_keberangkatan`, `id_kursi`, `nama`, `alamat`, `no_hp`, `tanggal_pesan`) VALUES
('PSN001', 'KBK010', 'KRI008', 'Adimitra Baratama Nusantara', 'Jl. Simongan No.17, Bongsari, Kec. Semarang Bar., Kota Semarang, Jawa Tengah 50148', '0852 88888 326', '2019-10-31'),
('PSN002', 'KBK009', 'KRI007', 'Aditya Koeswojo', 'Gg. Jepun II No.2, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali 80237', '0852 8181 4587', '2019-10-31'),
('PSN003', 'KBK008', 'KRI006', 'Adji Muljo Teguh', 'Jl. Purwanggan-Surengjuritan PA I Nomor 655, Pakualaman, Purwokinanti, Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55112', '0852 8181 4590', '2019-10-31'),
('PSN004', 'KBK007', 'KRI005', 'Adnan Kelana Haryanto & Herman', 'Bakulan, Kromasan, Kec. Ngunut, Kabupaten Tulungagung, Jawa Timur 66292', '0852 8211  4446', '2019-10-31'),
('PSN005', 'KBK006', 'KRI004', 'Adri Achmad Drajat', 'Gg. Dewiratih No.6, Peguyangan, Kec. Denpasar Utara, Kota Denpasar, Bali 80239', '0852 8242 4448', '2019-11-02'),
('PSN006', 'KBK005', 'KRI003', 'Adriana Maya Politon', 'Jl. Sultan Ageng Tirtayasa, Tanggung, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66115', '0852 1635 7774', '2019-11-02'),
('PSN007', 'KBK004', 'KRI002', 'Adryansyah', 'Widoro, Bangunharjo, Kec. Sewon, Bantul, Daerah Istimewa Yogyakarta 55188', '0852 1635 6664', '2019-11-02'),
('PSN008', 'KBK003', 'KRI001', 'Bagus Pranoto', 'Jl. Pemuda No.30, RT.002/RW.02, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271', '0823 7073 2222', '2019-11-03'),
('PSN009', 'KBK002', 'KRI002', 'Ganjar Pranowo', 'Jl. Petemon IV No.74, Petemon, Kec. Sawahan, Kota SBY, Jawa Timur 60252', '0852 0781 6666', '2019-11-03'),
('PSN010', 'KBK001', 'KRI001', 'Bambang Hartono', 'Jl. Satria Bar. No.129, Balearjosari, Kec. Blimbing, Kota Malang, Jawa Timur 65126', '0852 7777 5288', '2019-11-03'),
('PSN011', 'KBK015', 'KRI036', 'Chairul Iskandar Zulkarnaen', 'Jl. Sidoyoso Jaya No.32, Simokerto, Kec. Simokerto, Kota SBY, Jawa Timur 60143', '0853 6225 6225', '2019-11-04'),
('PSN012', 'KBK014', 'KRI035', 'Chairul Tanjung', 'Jl. Depok Dalam V No.1, Pedurungan Tengah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', '0853 7373 6000', '2019-11-04'),
('PSN013', 'KBK012', 'KRI034', 'Dadi Sukarso Yuwono', 'Jl. Mr. Sartono, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', '081 7979 1990', '2019-11-04'),
('PSN014', 'KBK013', 'KRI033', 'Dani Ismulyatie', 'Jl. Letjen Suprapto, Pringgokusuman, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55272', '081 7979 2002', '2019-11-04'),
('PSN015', 'KBK011', 'KRI030', 'Daniel', 'Jl. Rawa Jaya III No.28, RT.12/RW.6, Pisangan Tim., Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13230', '081 765 33338', '2019-11-04'),
('PSN017', 'KBK020', 'KRI040', 'Darwin Soegiatto', 'Sidorejo Lor, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50714', '081 7070 1994', '2019-10-31'),
('PSN018', 'KBK017', 'KRI032', 'Debby Febriany Gunawan', 'Jl. Semeru No.70, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65115', '0877 8000 1969', '2019-10-31'),
('PSN019', 'KBK018', 'KRI016', 'Devie Hendrastiti Darmawan', 'Jalan Simpang Wilis Indah Ruko No.3, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', '0877 8000  1991', '2019-10-31'),
('PSN020', 'KBK019', 'KRI020', 'Edianto Prasetyo', 'Jl rancakendal luhur kp sekepicung rt 02 rw 05, Cigadung, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40198', '0877 8000 1986', '2019-10-31'),
('PSN021', 'KBK021', 'KRI015', 'Edy Susanto', 'Karangdowo, Bae, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59327', '0877 7888 1997', '2019-10-31'),
('PSN022', 'KBK022', 'KRI031', 'Eka Sinto Kasih Tjia', 'Margorejo Kulon, Jl. Letjen S. Parman, Kestalan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57134', '0857 0761 4854', '2019-10-31'),
('PSN023', 'KBK023', 'KRI014', 'Eko Budianto', 'Jl. Mutiara Sokka, Ngembal Rejo, Ngembalrejo, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59322', '0813 2930 7378', '2019-10-31'),
('PSN024', 'KBK025', 'KRI034', 'Erik Setiawan', 'Jl. Putri Hijau I/II, Kesawan, Kec. Medan Bar., Kota Medan, Sumatera Utara 20231', '0831 1776 6233', '2019-10-31'),
('PSN025', 'KBK024', 'KRI023', 'Fendi Santoso', 'Komplek Perumnas I Blok 45/9 Rt 003/06, Jl. Beringin Raya, Tangerang, RT.004/RW.003, Nusa Jaya, Karawaci Sub-District, Tangerang City, Banten 15116', '0858 9592 0350', '2019-10-31'),
('PSN026', 'KBK028', 'KRI003', 'Hadi Gunawan', 'Unnamed Road, Sungai Sapih, Kec. Kuranji, Kota Padang, Sumatera Barat 25176', '0857 4952 6181', '2019-10-31'),
('PSN028', 'KBK027', 'KRI015', 'Halim Podiono', 'Jl. Bunga Lau, Kemenangan Tani, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20136', '0853 3363 6600', '2019-10-31'),
('PSN029', 'KBK030', 'KRI016', 'Hari Widodo', 'Jl. Pisang Raya No.17, Lamper Tengah, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50248', '0858 8037 6056', '2019-10-31'),
('PSN030', 'KBK029', 'KRI035', 'Hariadien Ratmawati Soeprapto', 'Jl. Bunga Pariama, Namu Gajah, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20137', '0858 5284 8648', '2019-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
 ADD PRIMARY KEY (`id_bus`);

--
-- Indexes for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
 ADD PRIMARY KEY (`id_keberangkatan`), ADD KEY `id_bus` (`id_bus`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
 ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesan`), ADD KEY `id_kursi` (`id_kursi`), ADD KEY `id_keberangkatan` (`id_keberangkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
ADD CONSTRAINT `keberangkatan_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_keberangkatan`) REFERENCES `keberangkatan` (`id_keberangkatan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
