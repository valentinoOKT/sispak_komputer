-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 08.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak_komp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_jawaban`
--

CREATE TABLE `riwayat_jawaban` (
  `id_jawaban` int(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jawaban`
--

INSERT INTO `riwayat_jawaban` (`id_jawaban`, `waktu`, `jawaban`) VALUES
(70, '2021-07-31 13:13:25', 'G1'),
(71, '2021-07-31 13:27:17', 'G1 G2 G3 G4 G5'),
(85, '2021-07-31 13:35:34', 'G1 G3 G5 G7 G9 G11 G13 G15 G17 G19 G21 G23 G25 G27 G31 G33 G35'),
(86, '2021-07-31 13:40:26', ''),
(87, '2023-05-03 10:29:10', 'G28 G29'),
(88, '2023-05-03 10:29:53', 'G1 G2 G26'),
(89, '2023-05-03 10:33:11', 'G1 G2 G26'),
(90, '2023-05-03 10:36:29', 'G1 G3 G4 G5'),
(91, '2023-05-03 10:39:35', 'G1 G3 G4 G5'),
(92, '2023-05-05 15:53:40', 'G1 G3 G4 G5'),
(93, '2023-05-09 13:54:22', 'G1 G3 G4 G5'),
(94, '2023-05-10 08:05:57', 'G1 G3 G4 G5'),
(95, '2023-05-10 08:51:30', 'G1 G3 G4 G5'),
(96, '2023-05-10 09:07:56', 'G1 G2 G3 G4 G5'),
(97, '2023-05-10 15:28:00', 'G5 G23'),
(98, '2023-05-10 15:29:38', 'G16 G17'),
(99, '2023-05-10 15:38:38', 'G1 G2'),
(100, '2023-05-10 15:39:11', ''),
(101, '2023-05-10 15:39:48', 'G1'),
(102, '2023-05-10 15:42:03', 'G2'),
(103, '2023-05-11 15:28:55', 'G1 G3 G4 G5'),
(104, '2023-05-11 15:40:34', 'G1 G3 G4 G5'),
(105, '2023-05-11 15:45:28', 'G11 G15'),
(106, '2023-05-14 17:17:26', 'G1 G3 G4 G5'),
(107, '2023-05-14 17:18:27', 'G1 G2 G26'),
(108, '2023-05-14 17:19:24', 'G3 G4 G5 G11 G12 G30'),
(109, '2023-05-15 13:26:07', 'G1 G3 G4 G5'),
(110, '2023-05-15 16:57:14', 'G1 G3 G4 G5'),
(111, '2023-05-16 13:10:17', 'G1 G3 G4 G5 G6 G7'),
(112, '2023-05-16 13:10:56', 'G1 G3 G4 G5'),
(113, '2023-05-16 13:11:40', 'G1 G2 G26'),
(114, '2023-05-16 17:37:15', 'G1 G3 G4 G5'),
(115, '2023-05-18 10:23:34', 'G1 G3 G4 G5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(10) NOT NULL,
  `gejala` varchar(300) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`, `kode_gejala`) VALUES
(1, 'Tombol hidup tapi tidak ada gambar tertampil di monitor', 'G1'),
(2, 'Terdapat garis horisontal/vertikal ditengah monitor', 'G2'),
(3, 'Tidak ada tampilan awal BIOS', 'G3'),
(4, 'Muncul Pesan eror pada BIOS (isi pesan selalu berbeda tergantung pada kondisi tertentu)', 'G4'),
(5, 'Alarm BIOS berbunyi', 'G5'),
(6, 'Terdengar suara aneh pada HDD', 'G6'),
(7, 'Sering terjadi hang/crash saat menjalankan aplikasi', 'G7'),
(8, 'Selalu Scandisk ketika booting', 'G8'),
(9, 'Muncul pesan error saat menjalankan game atau aplikasi gratis', 'G9'),
(10, 'Device driver informasi tidak terdeteksi dalam device manager,meski driver telah di install', 'G10'),
(11, 'Tiba-tiba OS melakukan restart otomatis', 'G11'),
(12, 'Keluarnya blue screen pada OS Windows (isi pesan selalu berbeda tergantung pada kondisi tertentu)', 'G12'),
(13, 'Suara tetap tidak keluar meskipundriver dan setting device telah dilakukan sesuai petunjuk', 'G13'),
(14, 'Muncul pesan error saat menjalankan aplikasi audio', 'G14'),
(15, 'Muncul pesan error saat pertama OS di load dari HDD', 'G15'),
(16, 'Tidak ada tanda-tanda dari sebagain/seluruh perangkat bekerja (semua kipas pendingin tidak berputar)', 'G16'),
(17, 'Sering tiba-tiba mati tanpa sebab', 'G17'),
(18, 'Muncul pesan pada windows, bahwa windows kekurangan virtual memori', 'G18'),
(19, 'Aplikasi berjalan dengan lambat, respon yang lambat terhadap inputan', 'G19'),
(20, 'Kinerja grafis terasa sangat berat (biasanya dalam game dan manipulasi gambar)', 'G20'),
(21, 'Device tidak terdeteksi dalam BIOS', 'G21'),
(22, 'Informasi deteksi yang salah dalam bios', 'G22'),
(23, 'Hanya sebagaian perangkat yang bekerja', 'G23'),
(24, 'Sebagian/seluruh karakter inputan mati', 'G24'),
(25, 'Pointer mouse tidak merespon gerakan mouse', 'G25'),
(26, 'Tampak blok hitam, dan gambar tidak simetris/ acak', 'G26'),
(27, 'Keluarbunyi beep panjang pada saat laptop dinyalakan', 'G27'),
(28, 'Di hidupkan agak sulit', 'G28'),
(29, 'Mati total', 'G29'),
(30, 'Keluar beep berulang-ulang kali', 'G30'),
(31, 'Belum sampai windows sudah restart lagi', 'G31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(10) NOT NULL,
  `kode_kerusakan` varchar(5) NOT NULL,
  `nama_kerusakan` varchar(60) NOT NULL,
  `penanganan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `kode_kerusakan`, `nama_kerusakan`, `penanganan`) VALUES
(1, 'K1', 'Kerusakan pada Monitor', 'Terdapat kerusakan pada monitor komputer. Periksa refresh rate vertikal monitor Anda. Pertama klik tombol Start - kemudian klik Run - Lalu Ketikkan control kemudian klik tombol OK. Carilah ikon berlabel Display dan klik dua kali. Pada jendela Display Properties klik tab Settings - Kemudian Klik tombol Advanced dan kemudian klik tab monitor. Di bawah bagian Monitor settings Anda akan melihat menu dropdown berlabel Screen refresh rate, dan pastikan bahwa refresh rate layar 75Hz atau lebih. Jika sudah silahkan merestart ulang komputer agar pengaturan baru ini bisa bekerja. Langkah kedua bisa dengan memperbarui Driver VGA Card. Langkah terakhir apabila masih belum bisa juga adalah melakukan service monitor di tempat service. Monitor dapat dibawa ke tempat servis monitor untuk ditangani ahli monitor.'),
(2, 'K2', 'Kerusakan pada Memori', 'Periksalah kembali RAM yang terpasang dengan kapasitas memori yang terbaca oleh komputer sebab ada \r\nkalanya ketika memasang beberapa keping RAM tetapi yang terbaca hanya satu keping saja. Beberapa RAM yang digunakan tetapi tidak identik (sama tipe dan kapasitasnya) bukannya malah mempercepat komputer tetapi malah memperlambat dan membuat hang komputer. Jika masih tidak bisa, buka cover CPU lalu cabut RAM. Coba bersihkan bagian kaki RAM (pin) dengan penghapus dan pasang RAM kembali pada tempatnya dan nyalakan kembali Komputer. jika belum bisa, pindahkan RAM di slot lain. Jika masih belum bisa juga, maka RAM perlu diganti atau cek di komputer lain'),
(3, 'K3', 'Kerusakan pada HDD', 'Lakukan pengecekan kondisi kabel IDE atau SATA pada Hardisk - pastikan sudah terpasang dengan benar. Untuk 2 hardisk IDE yang terpasang pada 1 kabel cek posisi jumper untuk setingan Master dan Slavenya supaya jangan tertukar. Cek apakah Hardisk sudah terdeteksi oleh BIOS atau belum. Coba di-detect satu persatu. Kalau BIOS tidak bisa mendeteksi berarti masalahnya ada pada hardisk tersebut. Coba pegang permukaan hardisk. Untuk hardisk yang hidup akan terasa getarannya.'),
(4, 'K4', 'Kerusakan pada VGA ', 'Coba lepas dulu VGA Card/kaki VGA Card atau pin-nya dibersihkan dan dipasangkan kembali dengan benar. Jika belum bisa maka coba ganti VGA Card dengan yang lain dulu atau cek di komputer lain'),
(5, 'K5', 'Kerusakan pada Sound card', 'Kalau komputer anda menggunakan sound card on board maka yang harus anda perbaiki adalah motherboarnya. Kalau sound card anda jenis add on,  silahkan anda copot suond card dari slotnya. Bersihkan dari debu-debu yang menempel. Kemudian bersihkan juga kaki-kaki sound card.'),
(6, 'K6', 'Kerusakan pada Power supply', 'Hubungkan kabel power ke Power Supply dengan benar dan jangan sampai longgar. Jika masih tidak berfungsi, segera ganti power supply anda.'),
(7, 'K7', 'Kerusakan pada Prosessor', 'Cek kondisi Heatsink dan fan Processor. Apakah fan masih bisa berputar atau kotor atau bahkan ada kerusakan sehingga fan terlepas dari dudukannya. Bersihkan fan atau heatsink apabila kotor. Kalau komputer masih bisa masuk ke BIOS maka temperatur processor ini bisa dilihat pada bagian Hardware Monitor. '),
(8, 'K8', 'Kekurangan Memori', 'Upgrade memory card anda menjadi yang lebih baik'),
(9, 'K9', 'Kekurangan Memori VGA', 'Upgrade memori VGA anda menjadi yang lebih baik'),
(10, 'K10', 'Kekurangan Clock prosessor', 'Perlu mengganti processor menjadi lebih baik lagi'),
(11, 'K11', 'Permasalahan pada BIOS', 'Periksa kabel IDE apakah sudah dipasang dengan benar dan juga periksa apakah device tersebut sudah diaktifkan dengan benar tau belum. Jika belum diaktikan, perlu diaktifkan  melalui sistem. Jika masih belum bisa, coba bawa ketempat servis komputer untuk mengganti kabel IDE.'),
(12, 'K12', 'Kekurangan Daya pada Power supply', 'Gunakan stabilizer atau UPS untuk menstabilkan tegangan listrik. Periksa semua koneksi kabel power supply. Terdapat beberapa kabel koneksi yang berasal dari power supply dan memiliki fungsi yang berbeda-beda. Pastikan semua kabel terpasang dengan benar dan tidak ada yang longgar. Hal ini dilakukan untuk memastikan pasokan daya listrik bekerja secara optimal. Apabila semua kabel sudah terpasang dengan benar dan masih mati total maka perlu diganti dengan yang baru. Jika masih kekurangan daya, silahkan anda coba menganti power supply.'),
(13, 'K13', 'Kerusakan pada Perangkat USB', 'CPU perlu dibawa ke tempat service untuk ditindaklanjuti lebih jauh.'),
(14, 'K14', 'Kerusakan pada Keyboard', 'Bersihkan keyboard dari debu, kemudian coba update driver keyboard. Jika masih rusak, silahkan ganti keyboard anda.'),
(15, 'K15', 'Kerusakan pada Mouse', 'Coba update driver mouse. Jika masih rusak, silahkan ganti mouse anda.'),
(16, 'K16', 'Kerusakan pada Motherboard', 'Perlu diganti dengan motherboard yang baru dan sama seperti tipe sebelumnya atau bisa juga dengan membawa langsung ke tempat produsen komputer tersebut.'),
(17, 'K17', 'Permasalahan pada OS', 'Lakukan install ulang Windows atau repair Windows');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(5) NOT NULL,
  `kode_gejala` varchar(1000) NOT NULL,
  `kode_kerusakan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `kode_rule`, `kode_gejala`, `kode_kerusakan`) VALUES
(1, 'R1', 'G1 G2 G26', 'K1'),
(2, 'R2', 'G3 G4 G5 G11 G12 G30', 'K2'),
(3, 'R3', 'G6 G7 G8 G10 G21 G22 G31', 'K3'),
(4, 'R4', 'G1 G3 G5 G9 G10 G12 G13', 'K4'),
(5, 'R5', 'G10 G13 G14', 'K5'),
(6, 'R6', 'G16 G17', 'K6'),
(7, 'R7', 'G1 G3 G4 G5', 'K7'),
(8, 'R8', 'G18 G19', 'K8'),
(9, 'R9', 'G19 G20', 'K9'),
(10, 'R10', 'G19', 'K10'),
(11, 'R11', 'G21', 'K11'),
(12, 'R12', 'G5 G23', 'K12'),
(13, 'R13', 'G10', 'K13'),
(14, 'R14', 'G10 G24 G27', 'K14'),
(15, 'R15', 'G10 G25', 'K15'),
(16, 'R16', 'G28 G29', 'K16'),
(17, 'R17', 'G11 G15', 'K17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat_jawaban`
--
ALTER TABLE `riwayat_jawaban`
  MODIFY `id_jawaban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
