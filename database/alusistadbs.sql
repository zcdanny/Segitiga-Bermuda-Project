-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alusistadbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `alusista`
--

CREATE TABLE `alusista` (
  `id_alusista` int(11) NOT NULL,
  `nama_alusista` varchar(32) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lokasi` varchar(32) NOT NULL,
  `fasilitas` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto_1` varchar(32) NOT NULL,
  `foto_2` varchar(32) NOT NULL,
  `foto_3` varchar(32) NOT NULL,
  `foto_4` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alusista`
--

INSERT INTO `alusista` (`id_alusista`, `nama_alusista`, `id_kategori`, `lokasi`, `fasilitas`, `jumlah`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`) VALUES
(4, 'TANK FV101 Scorpion', 2, 'Britania Raya', 'Tank Scorpion mempunyai beberapa bentuk pilihan lain (varian) antara lain:\r\n\r\nStriker: kendaraan angkut dipersenjatai dengan senjata anti tank\r\nSpartan: kendaraan angkut personel dipersenjatai senjata sedang\r\nSamson (tank): kendaraan pemulihan yang dipersenjatai senjata ringan\r\nSultan (tank): kendaraan sebagai pos komando yang dipersenjatai ?\r\nSamaritan: kendaraan ambulans dipersenjatai senjata berat', 33, 'Diakusisi pada tahun 1995. Pada tahun 2016, terdapat 90 unit aktif beroperasi menurut IISS Military Balance. Dipersenjatai dengan kanon utama Cockerill M-A1 Mk3 berdiameter 90mm', 'ad1.jpg', 'ad1.jpg', 'ad1.jpg', 'ad1.jpg'),
(7, 'Leopard 2', 2, 'batalyon kavaleri 1 kostrad, cij', 'Jenis: Tank tempur utama\r\n- Berat 62 ton\r\n- panjang 9,97 m (393 in) (total)\r\n- lebar 3,75 m (148 in)\r\n- tinggi 3,0 m (120 in)\r\n- Senjata utama: Meriam tank Rheinmetall kaliber 120 mm L44 atau L55; berisi 42 peluru\r\n- Senjata pelengkap: 2 x 7.62 mm MG3A1 berisi 4,750 peluru, atau FN MAG\r\n- Jenis Mesin: Mesin diesel twin turbo V12 MTU MB 873 Ka-501 berpendingin air\r\n  1.500 PS (1,479 hp, 1,103 kW) pada 2600 rpm\r\n- Daya jelajah :550 km (340 mi) (bahan bakar internal)\r\n- Kecepatan: 72 km/h (45 mph)\r\n', 121, 'sejarah pemeliharaan\r\n\r\nPengembangan tank Leopard 2 mulai dilaksanakan setelah Leopard 1 masuk dinas pada tahun 1960-an. Namun, apabila dibandingkan pada kekuatan tembak, dan perlindungan dengan tank Uni Soviet yang terbaru saat itu, T-62. Pada saat itu juga Rheinmetall telah mengembangkan meriam 120 mm untuk pengembangan penerus Leopard 2 dari dalam negeri, namun pemerintah jerman memilih bekerja sama dengan Amerika Serikat dalam program MBT-70. Disaat Pengembangan sudah berjalan, terjadi perbedaan desain dan mahalnya biaya pengembangan Proyek Tersebut, dan Terkejar dengan Pengembangan T-72 Uni Soviet yang memiliki perlindungan dan daya gempur yang lebih hebat dari T-62.\r\n*Riwayat operasi\r\n- Kegaduhan latihan gabungan Dharma Yudha, situbondo, jawa timur pada oktober-desember 2019\r\n', 'Leopard_1.jpg', 'Leopard_2.jpg', 'Leopard_3.jpg', 'Leopard_4.jpg'),
(8, 'Pindad APS-3 Anoa', 2, 'Mabes TNI di cilangkap', '- Jenis: Perangkat personel lapis baja (APC)\r\n- Spesifikasi:  \r\nBerat:	12,5 ton, 14,5 ton (tempur)\r\nPanjang	 : 6 m\r\nLebar:	2.5 m\r\nTinggi:	2.17 m atas badan\r\nAwak:	3 + 10 penumpang\r\nSenjata utama:	Senapan mesin kaliber 12.7 mm, senapan mesin kaliber 7.62 mm, pelontar granat otomatis 40 mm\r\nSenjata pelengkap:	2x3 66 mm peluncur granat asap\r\nJenis Mesin:	Renault MIDR 062045 diesel turbo-charged 6 silinder inline , paket pendingin Behr 320 hp, 2500 Rpm\r\nDaya kuda/ton:	22,85 hp/ton\r\nTransmisi:	Otomatis, ZF S6HP502, 6 maju, 1 mundur\r\nSuspensi:	Suspensi Independen, batang torsi\r\nKelonggaran tanah:	40 cm\r\nKapasitas tangki	: 200 liter\r\nDaya jelajah:	600 km\r\nKecepatan:	90 km/jam\r\n', 426, ' <p>- Riwayat pengembangan </p>\r\nSejarah perkembangan Anoa dimulai pada tahun 2003 sebagai akibat dari meningkatnya intervensi militer di provinsi Aceh . Selama operasi militer, Angkatan Darat Indonesia mengajukan kebutuhan mendesak akan pengangkut personel lapis baja untuk transportasi pasukan.  Pindad menanggapi kebutuhan ini pada tahun 2004, dengan APR-1V ( Angkut Personel Ringan ) kendaraan lapis baja ringan 4x4 berdasarkan sasis truk Isuzu komersial , 14 kendaraan dibuat oleh Pindad dan dikirim ke Aceh untuk evaluasi dan uji tempur . Namun, pesanan lanjutan untuk 26 kendaraan lainnya dibatalkan setelah tsunami tahun 2004 . \r\nPindad kemudian melanjutkan program pengembangan APC dengan bantuan Badan Pengkajian dan Penerapan Teknologi atau BPPT pada tahun 2004.  Prototipe yang dihasilkan adalah APS-1 ( Angkut Personel Sedang ), desain 6x4 yang kembali didasarkan pada komersial Platform truk Perkasa oleh PT Texmaco. Bersama BPPT pada tahun 2006, Pindad memulai pengembangan baru APS-3 dari data pengembangan APS-2 yang menghasilkan produksi prototipe awal 4x4 dan dilanjutkan dengan prototipe 6x6 yang lebih disempurnakan. Prototipe 6x6 pertama kali menjalani pengujian dan uji coba pada awal tahun 2007 dan kemudian resmi diperkenalkan ke publik pada pameran Indo Defense & Aerospace 2008 pada 19 November 200.\r\n\r\n <p><b>-Riwayat Operasi</b></p>\r\nAnoa secara resmi ditempatkan dalam dinas militer Indonesia pada bulan Juli 2009. Mereka terlihat di depan umum dalam dinas dengan Kontingen Garuda Satgas Batalyon Mekanis TNI di Lebanon.\r\n', 'Pindad_Anoa_1.jpg', 'Pindad_Anoa_2.jpg', 'Pindad_Anoa_3.jpg', 'Pindad_Anoa_4.jpg'),
(9, 'Pindad Komodo', 2, '', '- Jenis: Mobil bersenjata\r\n- Tempat asal: Indonesia\r\n- Sfrsifikasi:\r\nMassa:	5.800 kilogram (12.800 lb) (Kosong) 7.300 kilogram (16.100 lb) (Pertempuran)\r\nPanjang	: 5.650 mm (222,4 inci)\r\nLebar: 2.250 mm (88,6 inci)\r\nTinggi: 2.150 mm (84,6 inci)\r\nAwak kapal: 2 (pengemudi dan penembak), penumpang tambahan tergantung varian.\r\nSenjata utama:	Senapan mesin 7,62 mm atau 12,7 mm\r\nJenis Mesin:	Diesel 200 HP\r\nDaya kuda/ton:	29,4 HP/ton\r\nTransmisi:	Manual (6 maju dan 1 mundur)\r\nSuspensi:	Rigid axle; Depan: Bushing arm dengan coil spring; Belakang: trailing arm dengan coil spring), stabilizer bar; telescopic shock absorber\r\nKelonggaran tanah:	44 cm\r\nKapasitas tangki:	200 liter\r\nDaya jelajah:	450 km\r\nKecepatan: 80 kilometer per jam (50 mph)', 130, '- Deskripsi:\r\nPindad Komodo adalah mobil lapis baja ringan yang dikembangkan dan diproduksi oleh PT Pindad. Penciptaan Komodo pertama kali dimulai pada 26 Oktober 2011 ketika Presiden Yudhoyono secara pribadi mengunjungi pameran sistem persenjataan PT Dirgantara Indonesia. Dalam kunjungannya, ia memberikan tantangan kepada Tim Pengembangan Produk Pindad untuk membuat kendaraan taktis 4×4 asli.\r\n\r\n- Riwayat Oprasi\r\nPindad Komodo telah digunakan oleh TNI dan Polri, dan lebih dari 60 unit Komodo telah memperkuat armada TNI serta dioperasikan oleh PBB dalam berbagai misi Penjaga Perdamaian. Tipe Pendobrak telah digunakan oleh Kopassus. Kendaraan ini juga telah beroperasi di MONUSCO (Kongo) sebanyak 21 unit.\r\n\r\n', 'Pindad_Komodo 1.jpg', 'Indad_Komando 2.jpg', 'Pindad_Komando 3.jpg', 'Pindad_komando 4.jpg'),
(10, 'KRI Ahmad Yani', 1, 'Armada Timur TNI AL', 'Berat benaman:	2,940 ton\r\nPanjang:	11.342 meter (37.211,29 ft)\r\nLebar:	1.251 meter (4.104,33 ft)\r\nDraft:	457 meter (1.499,34 ft)\r\nTenaga penggerak:	2 x Caterpillar CAT DITA 3616, Reintjes WAV 1000 @16,000 shp\r\nKecepatan maksimum: 285 knot (527,82 km/h; 327,97 mph)\r\nAwak kapal:	180 orang', 1, 'KRI Ahmad Yani (351) merupakan kapal pertama kapal perang kelas Perusak Kawal Berpeluru Kendali Kelas Ahmad Yani milik TNI AL. Dinamai menurut Jendral Ahmad Yani, salah seorang Pahlawan Revolusi.\r\n\r\nKRI Ahmad Yani merupakan kapal fregat bekas pakai AL Belanda (HNMLS Tjerk Hiddes F804) yang kemudian dibeli oleh Indonesia. Kapal ini bersaudara dekat dengan Fregat Inggris Kelas HMS Leander dengan sedikit modifikasi dari disain RN Leander asli. Dibangun tahun 1967 oleh Koninklijke Maatschappij de Schelde, Vlissingen, Belanda dan mendapat peningkatan kemampuan sebelum berpindah tangan ke TNI Angkatan Laut pada tahun 1986. Termasuk diantaranya adalah pemasangan sistem pertahanan rudal anti pesawat (SAM, Surface to Air Missile) ) Mistral menggantikan Sea Cat.\r\n\r\nBertugas sebagai armada patroli dengan kemampuan anti kapal permukaan, anti kapal selam dan anti pesawat udara. Pada tahun 2007, bersama dengan KRI Abdul Halim Perdanakusuma (355), selesai menjalani pergantian mesin yang dijalaninya selama 2 tahun. Saat ini KRI Ahmad Yani kembali memperkuat Komando Armada RI Kawasan Timur', 'KRI_Ahmad_Yani 1.jpg', 'KRI_Ahmad_Yani 2.jpg', 'KRI_Ahmad_Yani 3.jpg', 'KRI_Ahmad_Yani 4.jpeg'),
(11, 'KRI Diponegoro (365)', 1, 'Armada Tengah TNI AL', 'Berat benaman:	1.700 Ton\r\nPanjang:	9.071 meter (29.760,50 ft)\r\nLebar:	1.302 meter (4.271,65 ft)\r\nDraft:	360 meter (1.181,10 ft)\r\nTenaga penggerak:	2 shaft V28-33D STC MAN Diesel @8,900 kW\r\nKecepatan:	28 knot\r\nJarak tempuh:	5.400 km pada 18 knot[2]\r\nAwak kapal:	80 orang\r\nSonar & Radar:	Radar MW08 3D multibeam surveillance radar\r\nRadar senjata: LIROD Mk2 tracking radar\r\nSistem Perang: Thales TACTICOS\r\nData Link: LINK Y Mk2 datalink system\r\nSonar Thales Kingklip medium frequency active/passive ASW hull mounted sonar\r\nKomunikasi elektronik Thales/Signaal FOCON\r\nSistem Pengecoh: TERMA SKWS\r\nPlatform integrasi utama: Imtech UniMACs 3000 Integrated Bridge System\r\nPersenjataan:	2 x 4 rudal anti-pesawat MBDA Mistral TETRAL\r\n4 rudal permukaan MBDA Exocet MM40 block 2\r\n76 mm Oto-Melara kanon utama\r\n2 x 20 mm Vector G12 kanon ringan\r\n2 seluncur torpedo B515 tipe 3A 244S Mode II/MU 90', 1, 'KRI Diponegoro (365) merupakan kapal pertama dari korvet kelas SIGMA milik TNI Angkatan Laut. KRI Diponegoro merupakan sebuah korvet yang dibuat oleh galangan kapal Schelde, Belanda dimulai pada tahun 2005 khusus untuk TNI-AL. Bertugas sebagai kapal patroli dengan kemampuan anti-kapal permukaan, anti-kapal selam dan anti-pesawat udara.\r\nRiwayat Tugas:\r\n2017 \r\n2 Juli, Bertempat di galangan kapal Royal Schelde, Belanda, KRI Diponegoro secara resmi diserahkan oleh pemerintah Belanda kepada Departemen Pertahanan untuk selanjutnya diserahkan kepada TNI Angkatan Laut.[4] KSAL sekaligus melantik pula komandan pertama kapal tersebut yang dijabat oleh Letkol Laut (P) Arsyad Abdullah.\r\n8-11 Agustus, KRI Diponegoro tiba di Riyadh, Arab Saudi dimana awak kapal melakukan bekal ulang logistik serta melakukan ibadah umrah ke Mekkah. Selanjut tanggal 11 Agustus, kapal melanjutkan pelayarannya ke Djibouti.\r\n30 Agustus, KRI Diponegoro tiba di perairan nusantara dan disambut oleh KSAL Laksamana TNI Slamet Soebijanto di atas kapal KRI Abdul Halim Perdanakusuma (355) yang berlayar di Selat Sunda. Selain itu didampingi oleh KRI Patimura, KRI Teuku Umar dan KRI Lemadang.\r\n31 Agustus, KRI Diponegoro tiba di Dermaga 115, Tanjung Priok, Jakarta Utara. Kedatangan kapal perang jenis korvet kelas Sigma disambut langsung oleh Panglima Komando Armada RI Kawasan Barat (Pangarmabar) Laksamana Muda TNI Agus Suhartono, SE bersama Panglima Komando Armada RI Kawasan Timur (Pangarmatim) Laksamana Muda TNI Moechlas Sidik, Kepala Staf Koarmabar Laksma TNI Budhi Suyitno, Komandan Lantamal III Laksma TNI Moch. Jurianto serta sejumlah pejabat teras Koarmabar lainnya.\r\n17 September, diadakan peresmian KRI Diponegoro dan KRI DR Soeharso (990) di Pelabuhan Tanjung Emas, Semarang dengan mengundang ahli waris dari kedua pahlawan nasional tersebut.\r\n13 Desember, KRI Diponegoro melakukan latihan perang di Laut Balikpapan dan pertama kalinya menembakkan meriam Oto-Melara 76 mm. Latihan ini melibatkan pula 15 KRI lainnya.', 'KRI-Diponogoro(365) 1.jpg', 'KRI-Diponogoro(365) 2.jpg', 'KRI-Diponogoro(365) 3.jpg', 'KRI-Diponogoro(365) 4.jpg'),
(12, 'KRI Cakra (401)', 1, 'Indonesia', 'Kelas dan jenis:	Kapal selam kelas Cakra\r\nJenis:	Kapal selam serbu\r\nBerat benaman: 1,285 ton di permukaan 1,390 ton saat menyelam\r\nPanjang:	59,5 meter\r\nLebar:	6,2 meter\r\nSarat air:	5,4 meter\r\nPendorong: 4 x mesin diesel MTU 12V493 AZ80 GA31L bertenaga 0,001790 MW (2,400 hp)\r\n4 x alternator Siemens bertenaga 23.000 hp (17 MW)\r\n1 x motor Siemens bertenaga 0,003430 MW (4,600 hp)\r\n1 x shaft\r\nKecepatan:	11 knot (20 km/h; 13 mph) di permukaan 215 knot (398 km/h; 247 mph) saat menyelam\r\nJangkauan:	8,200 nmi (15,186 km; 9,436 mi) pada kecepatan 8 kn (15 km/h; 9,2 mph)\r\nDaya tahan:	50 hari\r\nKedalaman uji coba:	240 m (790 ft)\r\nAwak:	34\r\nsistem kendali senjata Signaal Sinbad: radar permukaan Thomson-CSF Calypso, I-band\r\nsonar pencarian dan penyerangan aktif/pasif Atlas Elektronik CSU 3-2\r\nPRS-3/4 passive ranging\r\nPeralatan perang:	ESM : Thomson-CSF DR2000U, CMS : Kongsberg MSI-90U Mk ', 1, 'KRI Cakra (401) merupakan kapal pertama dalam jenis Kapal selam kelas Cakra. Kapal ini merupakan kapal kedua yang menyandang nama Cakra dalam jajaran TNI AL. Kapal pertama merupakan KRI Tjakra (ejaan lama), salah satu dari 12 kapal selam kelas Tjakra buatan Uni Soviet (Kapal Selam Kelas Whiskey) yang di scrap tahun 70-an.\r\n\r\nKRI Cakra (401) adalah kapal selam kelas Cakra yang dioperasikan oleh TNI Angkatan Laut. Kapal ini dibuat oleh Howaldtswerke-Deutsche Werft di Kiel, Jerman. KRI Cakra pernah menunjukkan kemampuannya saat menghancurkan KRI Karang Galang dalam latihan gabungan TNI di perairan Indonesia Timur pada 2008.\r\n\r\n', 'Kri_cakra_401-1.jpg', 'Kri_cakra_401-2.jpeg', 'Kri_cakra_401-3.jpg', 'Kri_cakra_401-4.jpg'),
(13, 'Lockheed Martin C-130J Super Her', 3, 'Skadron Udara 31 Lanud Halim Per', 'Crew: 3 (dua pilot, dan satu loadmaster adalah Jumlah minimum)\r\nKapasitas : 92 penumpang (128 untuk C-130J-30) atau 64 pasukan lintas udara (92 untuk C-130J-30) atau 6 palet (8 palet untuk C-130J-30) atau 74 liter pasien dengan 2 personel medis (97 liter untuk C-130J-30) 2–3 Humvee, atau 1 pengangkut personel lapis baja LAV III atau satu M113.\r\nBeban angkut: 42,000 lb (19,050 kg) ; for C-130J-30: 44,000 lb/ 19,958 kg\r\nLength: 97 ft 9 in, 29.79 m (for C-130J-30: 112 ft, 9 in, 34.36 m)\r\nWingspan: 132 ft 7 in (40.41 m)\r\nHeight: 38 ft 10 in (11.84 m)\r\nWing area: 1,745 ft² (162.1 m²)\r\nBobot kosong: 75,562 lb (34,274 kg)\r\nUseful load: 72,000 lb (33,000 kg)\r\nBerat Maksimal untuk Lepas Landas: up to 175,000 lb (79,378 kg); normal 155,000 lb (70,305 kg)\r\nMesin: 4 × Rolls-Royce AE 2100D3 turboprop, 4,637 shp (3,458 kW) each\r\nPropellers: Dowty R391 6-blade composite propeller, 1 per engine\r\nKecepatan maksimal: 362 knots (417 mph, 671 km/h)\r\nKecepatan Jelajah: 348 knots (400 mph, 643 km/h)\r\nJarak jangkau: 2,835 nmi (3,262 mi, 5,250 km)\r\nService ceiling: 28,000 ft (8,615 m) with 42,000 pounds (19,090 kilograms) payload\r\nAbsolute altitude 40,386 ft (12,310 m)[102]\r\njarak untuk lepas landas: 3,127 ft (953 m) at 155,000 lb (70,300 kg) gross weight', 5, 'Lockheed Martin C-130J \"Super\" Hercules adalah pesawat angkut militer bermesin turboprop empat mesin. C-130J adalah update komprehensif Lockheed C-130 Hercules, dengan mesin baru, dek penerbangan, dan sistem lainnya.\r\n\r\nKeluarga Hercules memiliki sejarah terpanjang terus menerus menjalankan produksi dari setiap pesawat militer. Selama lebih dari 50 tahun pelayanan, keluarga pesawat angkut bermesin turboprop ini telah berpartisipasi dalam operasi bantuan militer, sipil, dan kemanusiaan. Hercules telah hidup lebih lama beberapa desain penerus yang direncanakan, terutama kontestan Advanced Medium STOL Transport. Lima belas negara telah menempatkan pesanan untuk total 300 C-130J, di mana 250 pesawat telah dikirim pada Februari 2012.', 'Hercules 1.jpg', 'Hercules 2.jpg', 'Hercules 3.jpeg', 'Hercules 4.jpg'),
(14, 'Eurocopter EC 725', 3, 'Indonesia ', 'Kru: 1 or 2 (pilot + co-pilot)\r\nKapasitas: 1 chief of stick + 28 troop seats\r\nPanjang: 19.50 m\r\nDiameter baling-baling:: 16.20 m\r\nTinggi: 4.60 m\r\nBerat kosong: 5,330 kg\r\nBerat isi: 11,000 kg\r\nBerat berguna: 5,670 kg\r\nBerat maksimum saat lepas landas: 11,200 kg\r\nMesin: 2 × Turbomeca Makila 1A4 turboshafts, 1,800 kW (2,413 shp) masing-masing\r\nBatas kelajuan: 324 km/h, 201 mph (175 kts)\r\nLaju maksimum: 324 km/h, 201 mph (175 kts)\r\nLaju jelajah: 285 km/h, 177 mph (154 kts)\r\nJangkauan: 857 km, 532 mi\r\nLangit-langit batas: 6,095 m\r\nLaju tanjak: 3.6 m/s', 16, 'Eurocopter EC 725 Cougar merupakan sejenis helikopter pengangkut jarak jauh yang dikembangkan Super Puma/Cougar untuk kegunaan ketenteraan. penggunaan militer. Ia menggunakan mesin pesawat udara ganda dan bisa membawa 29 tempat duduk tim dengan 2 anak kapal, tergantung pada permintaan pelanggan. Helikopter ini dipasarkan untuk transportasi tim prajurit, transportasi keluar untuk kecelakaan, transfer kasualti, pencarian pertempuran dan tugas-tugas penyelamat dan ia menyamai jenis umum EC 225.', 'Eurocopter_EC-725-2.jpg', 'Eurocopter_EC-725-1.jpg', 'Eurocopter_EC-725-3.jpg', 'Eurocopter_EC-725-4.jpg'),
(15, 'Pesawat Embraer EMB-314', 3, 'Skadron 21 Abd Malang', '<p><b>  Jenis: serang ringan / COIN</b></p>\r\n<p><b> Spesifikasi: </b></p>\r\n<p><b>Karakteristik umum</b></p>\r\n•	Kru: Satu percontohan pada versi kursi tunggal, satu pilot ditambah satu navigator / siswa pada versi double seat\r\n•	Payload: 1.550 kg (£ 3420)\r\n•	Panjang: 11.42 m (37 ft 6 in)\r\n•	Lebar sayap: 11.14 m (36 ft 7 in)\r\n•	Tinggi: 3,9 m (12 ft 9,5 in)\r\n•	Area sayap: 19,4 m² (209 sq ft)\r\n•	Berat kosong: 3.200 kg (£ 7055)\r\n•	Max. berat lepas landas: 5.400 kg (11.905 £)\r\n•	Powerplant: 1 × Pratt & Whitney Canada PT6A-68C turboprop, 1.600 hp (1.193 kW)\r\n<p><b>Spesifikasi</b></p>\r\n•	Kecepatan maksimum: 590 km / h (319 knots, 367 mph)\r\n•	Cruise speed: 520 km / h (281 knots, 323 mph)\r\n•	Stall kecepatan: 148 km / h (80 knot, 92 mph\r\n•	g -batas: +7 / -3.5 g )\r\n•	Rentang: 720 nm (827 mil, 1.330 km)\r\n•	Memerangi radius: 550 km (300 nm, 342 mi) (hi-lo-hi profile, 1.500 kg (3.300 lb) dari toko eksternal)\r\n•	Ferry kisaran: 1.541 nm (1.774 mil, 2.855 km)\r\n•	Ketahanan: 8hrs 40mins\r\n•	Layanan langit-langit: 10.668 m (35.000 ft)\r\n•	Tingkat panjat: 24 m / s (79 ft / s)\r\n<p><b>Senjata</b></p>\r\n•	Bom: BINC-300, BLG-252\r\n', 13, '<p><b>  sejarah pemeliharaan</b></p>\r\nPesawat Embraer EMB-314, juga dikenal sebagai A-29 Super Tucano, adalah pesawat serang antigerilya dan pesawat serang ringan yang diproduksi oleh Embraer Defense & Security dari Brasil1. Pesawat ini pertama kali terbang pada 2 Juni 1999 dan diperkenalkan pada tahun 20031. Sejak diperkenalkan dan digunakan oleh Angkatan Udara Brasil pada tahun 2004, EMB-314 telah berhasil melakukan misi penjagaan perbatasan di kawasan Amazon, yang sangat rawan dengan aktivitas penyelundupan dan perdagangan narkotika\r\nEMB 314 / A-29 Super Tucano adalah jenis pesawat tempur ringan bermesin turboprop yang diproduksi oleh pabrikan pesawat Embraer yang berkedudukan di Brazil. Pesawat tempur yang dikenal memiliki beberapa keunggulan ini telah menarik minat para pejabat TNI AU dan telah memesannya sebanyak 1 Skuadron atau sejumlah 16 unit pesawat tempur EMB 314 / A-29 Super Tucano. Menurut kabar, 4 dari 16 unit pesawat yang dipesan tersebut bisa disaksikan oleh masyarakat Indonesia pada peringatan hari jadi TNI AU yang ke-65 pada 9 April 2012. \r\n\r\n<p><b> Riwayat operasi</b></p>\r\n- 2 unit pesawat yang dibeli Indonesia ini mengalami kecelakaan pada 16 November 2023.\r\n', 'EMB-314_1.jpg', 'EMB-314_2.jpg', 'EMB-314_3.jpg', 'EMB-314_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL,
  `foto_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'TNI Angkatan Laut', 'al.jpg'),
(2, 'TNI Angkatan Darat', 'ad.jpg'),
(3, 'TNI Angkatan Udara', 'au.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_alusista` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_alusista`, `komentar`, `tgl_komentar`) VALUES
(1, 2, 1, 'Nama Sampari sendiri diambil dari nama senjata tajam sejenis keris dari suku Mbojo (Bima dan Dompu), Nusa Tenggara Barat.', '2023-12-11'),
(0, 0, 8, '<p><b>Stok</b></p>\r\n<p>Dari total <b>426</b> Anoa, semua dalam kondisi siap digunakan. Perlu dilakukan pemantauan stok secara berkala untuk memastikan ketersediaan dan kesiapan.</p>\r\n\r\n<p><b>Pemeliharaan</b></p>\r\n<p>Perawatan rutin dan preventif harus dijadwalkan sesuai dengan panduan pemeliharaan produsen untuk memastikan kesehatan dan kesiapan alutsista.</p>\r\n\r\n<p><b>Pengadaan</b></p>\r\n<p>Diperlukan perencanaan pengadaan suku cadang dan peralatan tambahan untuk mendukung operasional dan pemeliharaan Anoa.</p>\r\n\r\n<p><b>Pemakaian</b></p>\r\n<p>Data pemakaian harus terus dipantau untuk mengidentifikasi tren dan mengoptimalkan penggunaan. Perhatian khusus diberikan pada kondisi operasional <b>30</b> unit yang digunakan untuk latihan gabungan.</p>\r\n\r\n<p><b>Analisis Data untuk Mendukung Pengambilan Keputusan</b></p>\r\n<p>Analisis data pemeliharaan, pengadaan, dan pemakaian akan memberikan wawasan yang diperlukan untuk pengambilan keputusan yang efektif. Evaluasi kondisi dan kinerja Anoa dapat membantu dalam perencanaan anggaran, perawatan, dan upgrade sesuai kebutuhan.</p>\r\n', '2024-01-14'),
(0, 6, 8, '<p><b>Stok</b></p>\r\n<p>Dari total <b>426</b> Anoa, semua dalam kondisi siap digunakan. Perlu dilakukan pemantauan stok secara berkala untuk memastikan ketersediaan dan kesiapan.</p>\r\n\r\n<p><b>Pemeliharaan</b></p>\r\n<p>Perawatan rutin dan preventif harus dijadwalkan sesuai dengan panduan pemeliharaan produsen untuk memastikan kesehatan dan kesiapan alutsista.</p>\r\n\r\n<p><b>Pengadaan</b></p>\r\n<p>Diperlukan perencanaan pengadaan suku cadang dan peralatan tambahan untuk mendukung operasional dan pemeliharaan Anoa.</p>\r\n\r\n<p><b>Pemakaian</b></p>\r\n<p>Data pemakaian harus terus dipantau untuk mengidentifikasi tren dan mengoptimalkan penggunaan. Perhatian khusus diberikan pada kondisi operasional <b>30</b> unit yang digunakan untuk latihan gabungan.</p>\r\n\r\n<p><b>Analisis Data untuk Mendukung Pengambilan Keputusan</b></p>\r\n<p>Analisis data pemeliharaan, pengadaan, dan pemakaian akan memberikan wawasan yang diperlukan untuk pengambilan keputusan yang efektif. Evaluasi kondisi dan kinerja Anoa dapat membantu dalam perencanaan anggaran, perawatan, dan upgrade sesuai kebutuhan.</p>\r\n', '2024-01-14'),
(0, 4, 14, '<p><b>Stok</b></p>\r\n<p>Dari total <b>jumlah tertentu</b> Eurocopter EC 725, semuanya dalam kondisi siap digunakan. Pemantauan stok secara berkala diperlukan untuk memastikan ketersediaan dan kesiapan.</p>\r\n\r\n<p><b>Pemeliharaan</b></p>\r\n<p>Perawatan rutin dan preventif pada Eurocopter EC 725 harus dijadwalkan sesuai dengan panduan pemeliharaan produsen guna memastikan kesehatan dan kesiapan alutsista.</p>\r\n\r\n<p><b>Pengadaan</b></p>\r\n<p>Perencanaan pengadaan suku cadang dan peralatan tambahan perlu dilakukan untuk mendukung operasional dan pemeliharaan Eurocopter EC 725.</p>\r\n\r\n<p><b>Pemakaian</b></p>\r\n<p>Data pemakaian Eurocopter EC 725 harus terus dipantau untuk mengidentifikasi tren dan mengoptimalkan penggunaan. Perhatian khusus diberikan pada kondisi operasional <b>jumlah tertentu</b> unit yang digunakan untuk latihan atau misi khusus.</p>\r\n\r\n<p><b>Analisis Data untuk Mendukung Pengambilan Keputusan</b></p>\r\n<p>Analisis data pemeliharaan, pengadaan, dan pemakaian memberikan wawasan yang diperlukan untuk pengambilan keputusan yang efektif. Evaluasi kondisi dan kinerja Eurocopter EC 725 dapat membantu dalam perencanaan anggaran, perawatan, dan upgrade sesuai kebutuhan.</p>\r\n', '2024-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('ADMIN','USER','','') NOT NULL DEFAULT 'USER',
  `foto_user` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES
(1, 'admin', 'admin', 'admin', 'Pria', 'admin@gmail.com', '081510211241', 'Jakarta', 'ADMIN', 'person_1.jpg'),
(2, 'Ramanda', 'danny', '123', 'Pria', 'zdanny@gmail.com', '081213161669', 'Bumen', 'USER', 'person_2.jpg'),
(4, 'Marsekal Muda TNI Dr. T.B.H. Age', 'Age Wiraksono', '123', 'Pria', 'Age@gmail.com', '0822222229323', ' Jakarta', 'USER', 'Age Wiraksono.jpg'),
(6, 'Brigjen Ujang Martenis', 'Ujang Martenis', '123', 'Pria', 'Ujang@gmail.com', '08222222293', 'malang', 'USER', 'Biodata-Brigjen-Ujang.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alusista`
--
ALTER TABLE `alusista`
  ADD PRIMARY KEY (`id_alusista`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alusista`
--
ALTER TABLE `alusista`
  MODIFY `id_alusista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
