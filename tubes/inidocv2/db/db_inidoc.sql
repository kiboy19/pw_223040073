-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 10:17 PM
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
-- Database: `db_inidoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Tips Mudah untuk Meningkatkan Kesehatan Fisik dan Mental Anda', 'Kesehatan fisik dan mental adalah dua aspek yang saling terkait dalam mempengaruhi kualitas hidup seseorang. Untuk menjaga kesehatan fisik dan mental yang optimal, ada beberapa tips yang bisa diikuti. Berikut adalah beberapa tips untuk menjaga kesehatan fisik dan mental yang baik.\r\n\r\n1. Olahraga secara teratur Olahraga secara teratur dapat membantu meningkatkan kesehatan fisik dan mental. Olahraga dapat membantu menurunkan berat badan, meningkatkan daya tahan tubuh, meningkatkan kesehatan jantung, serta membantu mengurangi stres dan depresi. Anda tidak perlu melakukan olahraga yang berat, cukup dengan melakukan aktivitas fisik seperti berjalan kaki, bersepeda, atau berenang secara rutin.\r\n\r\n2. Makan makanan yang sehat Makan makanan yang sehat dapat membantu menjaga kesehatan fisik dan mental. Pilih makanan yang kaya akan nutrisi seperti sayuran, buah-buahan, sumber protein yang sehat seperti daging tanpa lemak, ikan, dan kacang-kacangan. Hindari makanan yang mengandung gula dan lemak berlebihan, serta hindari makanan yang diolah dengan cara yang tidak sehat seperti makanan cepat saji.\r\n\r\n3. Tidur yang cukup Tidur yang cukup adalah penting untuk menjaga kesehatan fisik dan mental. Kekurangan tidur dapat meningkatkan risiko obesitas, diabetes, dan gangguan mental seperti depresi dan kecemasan Untuk menjaga kesehatan tidur yang baik, pastikan Anda tidur selama 7-8 jam setiap malam dan hindari gangguan seperti lampu yang terlalu terang atau suara bising.', 'kesehatan.jpg'),
(2, 'Menjaga Kesehatan Jantung dengan Pola Makan Sehat', 'Kesehatan jantung adalah faktor penting dalam menjaga kualitas hidup kita. Salah satu cara yang efektif untuk menjaga kesehatan jantung adalah melalui pola makan sehat. Pola makan sehat yang tepat dapat membantu mengurangi risiko penyakit jantung dan menjaga fungsi jantung yang optimal. Berikut ini adalah beberapa prinsip dasar pola makan sehat yang dapat mendukung kesehatan jantung Anda.\r\n\r\n1. Konsumsi makanan yang rendah lemak jenuh dan kolesterol tinggi: Lemak jenuh dan kolesterol tinggi dapat meningkatkan risiko penyakit jantung. Untuk itu, batasi konsumsi daging merah berlemak, produk olahan, makanan cepat saji, dan makanan yang mengandung mentega atau minyak kelapa. Sebagai gantinya, pilihlah sumber protein rendah lemak seperti ikan, ayam tanpa kulit, kacang-kacangan, dan produk susu rendah lemak.\r\n\r\n2. Tingkatkan konsumsi serat: Serat memiliki peran penting dalam menjaga kesehatan jantung. Konsumsi makanan tinggi serat seperti sayuran, buah-buahan, biji-bijian, dan kacang-kacangan dapat membantu menurunkan kadar kolesterol jahat (LDL) dalam darah. Serat juga membantu menjaga berat badan yang sehat dan mengontrol tekanan darah.\r\n\r\n3. Perbanyak konsumsi buah dan sayuran: Buah-buahan dan sayuran kaya akan vitamin, mineral, dan serat yang baik untuk kesehatan jantung. Makanan ini juga rendah kalori dan lemak jenuh, sehingga membantu menjaga berat badan yang sehat. Usahakan untuk mengonsumsi berbagai jenis buah dan sayuran dengan warna yang berbeda untuk mendapatkan nutrisi yang beragam.', 'jantung.png'),
(3, 'Membangun Sistem Kekebalan Tubuh yang Kuat dengan Asupan Nutrisi Tepat', 'Sistem kekebalan tubuh yang kuat adalah kunci untuk menjaga kesehatan dan melindungi tubuh dari serangan penyakit. Salah satu faktor penting yang dapat mempengaruhi sistem kekebalan adalah asupan nutrisi yang tepat. Dengan mengonsumsi makanan yang kaya akan nutrisi, kita dapat membangun sistem kekebalan tubuh yang kuat dan meningkatkan kemampuan tubuh untuk melawan infeksi. Berikut ini adalah beberapa tips untuk membantu Anda membangun sistem kekebalan yang kuat melalui asupan nutrisi yang tepat.\r\n\r\n1. Konsumsi makanan yang kaya akan antioksidan: Antioksidan seperti vitamin C, E, beta-karoten, dan selenium membantu melindungi sel-sel tubuh dari kerusakan oksidatif. Makanan yang kaya akan antioksidan termasuk buah-buahan seperti jeruk, stroberi, dan blueberry, sayuran berdaun hijau seperti bayam dan brokoli, serta kacang-kacangan seperti almond dan kacang kenari.\r\n\r\n2. Perbanyak konsumsi protein: Protein adalah bahan dasar untuk membangun sel-sel kekebalan tubuh. Konsumsi sumber protein sehat seperti ikan, ayam, tempe, tahu, dan kacang-kacangan dapat membantu memperkuat sistem kekebalan tubuh. Pastikan Anda mendapatkan variasi jenis protein untuk mendapatkan asam amino yang dibutuhkan tubuh.\r\n\r\n3. Penuhi kebutuhan vitamin dan mineral: Vitamin dan mineral memainkan peran penting dalam menjaga kesehatan sistem kekebalan. Pastikan asupan harian Anda mencakup vitamin A, B6, C, D, E, serta mineral seperti seng, selenium, dan tembaga. Sumber-sumber nutrisi ini dapat ditemukan pada buah-buahan, sayuran, biji-bijian, dan produk susu rendah lemak.', 'imun.png'),
(4, 'Mencegah Kanker dengan Gaya Hidup Sehat dan Perubahan Pola Makan', 'Kanker adalah penyakit yang serius dan memiliki dampak besar pada kesehatan kita. Namun, ada tindakan yang dapat kita lakukan untuk mencegah risiko kanker. Salah satu pendekatan yang efektif adalah dengan mengadopsi gaya hidup sehat dan melakukan perubahan pola makan. Dalam artikel ini, akan dijelaskan beberapa langkah yang dapat diambil untuk mencegah kanker melalui gaya hidup dan pola makan yang sehat.\r\n\r\n1. Mengonsumsi makanan yang kaya serat: Serat adalah bagian penting dari diet yang sehat dan dapat membantu mencegah kanker. Makanan yang kaya serat termasuk biji-bijian utuh, sayuran hijau, buah-buahan, dan kacang-kacangan. Serat membantu menjaga pencernaan yang sehat dan mencegah kanker usus besar.\r\n\r\n2. Memperbanyak konsumsi buah dan sayuran: Buah-buahan dan sayuran mengandung berbagai nutrisi dan senyawa yang dapat melindungi tubuh dari kanker. Makanlah berbagai jenis buah dan sayuran dengan warna yang berbeda untuk mendapatkan manfaat nutrisi yang beragam. Usahakan untuk mengonsumsi setidaknya lima porsi buah dan sayuran setiap hari.\r\n\r\n3. Hindari makanan olahan dan kaya lemak: Makanan olahan seperti daging olahan dan makanan cepat saji sering kali mengandung bahan kimia dan bahan pengawet yang dapat meningkatkan risiko kanker. Batasi konsumsi makanan olahan dan pilihlah makanan segar yang lebih sehat. Selain itu, batasi konsumsi lemak jenuh dan lemak trans yang dapat meningkatkan risiko kanker tertentu seperti kanker payudara dan kanker prostat.', 'cancer.png'),
(5, 'Menjaga Kesehatan Mental dengan Mengelola Stres', 'Kesehatan mental yang baik adalah aspek penting dalam menjalani kehidupan yang seimbang dan bahagia. Salah satu faktor yang dapat memengaruhi kesehatan mental kita adalah stres. Stres yang berlebihan dapat menyebabkan berbagai masalah kesehatan mental, seperti kecemasan, depresi, dan gangguan tidur. Oleh karena itu, penting untuk mengelola stres dengan baik agar dapat menjaga kesehatan mental. Berikut ini adalah beberapa tips yang dapat membantu Anda mengelola stres dalam kehidupan sehari-hari.\r\n\r\n1. Identifikasi penyebab stres: Mengetahui penyebab stres adalah langkah awal untuk mengelolanya. Identifikasi situasi atau faktor yang memicu stres dalam hidup Anda. Apakah itu pekerjaan, hubungan pribadi, atau tuntutan sehari-hari lainnya. Dengan memahami penyebabnya, Anda dapat mencari cara yang efektif untuk mengatasinya.\r\n\r\n2. Tetapkan batasan dan prioritaskan diri sendiri: Seringkali, stres disebabkan oleh perasaan tertekan karena terlalu banyak tuntutan dan tanggung jawab. Belajarlah untuk menetapkan batasan dan memprioritaskan diri sendiri. Tentukan apa yang benar-benar penting dan fokuslah pada hal-hal yang memberikan kepuasan dan kebahagiaan bagi Anda.\r\n\r\n3. Kelola waktu dengan baik: Manajemen waktu yang efektif dapat membantu mengurangi stres. Buatlah jadwal yang terorganisir dan alokasikan waktu untuk berbagai kegiatan yang penting, termasuk waktu istirahat dan relaksasi. Hindari kebiasaan menunda pekerjaan dan belajarlah untuk mengatur prioritas dengan baik.', 'mental.png'),
(6, 'Mengoptimalkan Kualitas Tidur untuk Kesehatan yang Lebih Baik', 'Tidur yang berkualitas merupakan aspek penting dalam menjaga kesehatan dan keseimbangan hidup kita. Tidur yang cukup dan nyenyak dapat memberikan energi, meningkatkan konsentrasi, dan memperkuat sistem kekebalan tubuh. Namun, banyak orang mengalami kesulitan dalam mendapatkan tidur yang memadai. Untungnya, ada beberapa langkah yang dapat diambil untuk mengoptimalkan kualitas tidur kita. Berikut adalah beberapa tips untuk mendapatkan tidur yang lebih baik dan meningkatkan kesehatan secara keseluruhan.\r\n\r\n1. Tetapkan rutinitas tidur yang konsisten: Membiasakan diri dengan jadwal tidur yang tetap dapat membantu mengatur jam biologis tubuh kita. Coba untuk tidur dan bangun pada waktu yang sama setiap hari, bahkan di akhir pekan. Ini membantu mengatur ritme sirkadian kita dan memastikan tubuh terbiasa dengan pola tidur yang sehat.\r\n\r\n2. Ciptakan lingkungan tidur yang nyaman: Tempat tidur yang nyaman, tenang, dan gelap adalah kunci untuk tidur yang berkualitas. Pastikan kamar tidur Anda memiliki suhu yang nyaman, ventilasi yang baik, dan kelembaban yang sesuai. Gunakan matras dan bantal yang mendukung tubuh Anda dengan baik, serta hindari gangguan seperti suara bising dan cahaya terang.\r\n\r\n3. Hindari paparan cahaya biru sebelum tidur: Cahaya biru yang dipancarkan oleh perangkat elektronik seperti telepon pintar, tablet, dan televisi dapat mengganggu produksi hormon melatonin yang mengatur tidur. Batasi penggunaan perangkat elektronik minimal satu jam sebelum tidur dan coba gantikan dengan aktivitas yang lebih menenangkan seperti membaca buku atau meditasi.', 'tidur.png'),
(7, 'Membangun Kebiasaan Hidup Sehat: Menjaga Berat Badan Ideal', 'Memiliki berat badan yang sehat dan ideal adalah tujuan yang penting bagi banyak orang. Berat badan yang berlebih atau kurang dapat berdampak negatif pada kesehatan dan kualitas hidup kita. Untuk menjaga berat badan yang sehat, dibutuhkan kebiasaan hidup yang seimbang dan disiplin. Dalam artikel ini, akan dijelaskan beberapa tips untuk membantu Anda membangun kebiasaan hidup sehat dan menjaga berat badan ideal.\r\n\r\n1. Makan dengan bijak: Penting untuk mengadopsi pola makan yang sehat dan seimbang. Pilihlah makanan yang kaya akan nutrisi seperti buah-buahan, sayuran, biji-bijian utuh, protein sehat, dan lemak sehat. Hindari makanan olahan yang tinggi gula, garam, dan lemak jenuh. Perhatikan porsi makanan Anda dan usahakan untuk makan dalam jumlah yang cukup untuk memenuhi kebutuhan tubuh.\r\n\r\n2. Perhatikan pola makan: Selain memilih makanan yang tepat, juga penting untuk memperhatikan pola makan Anda. Cobalah untuk makan secara teratur dan hindari melewatkan waktu makan. Sarapan pagi yang sehat dan nutrisi penting bagi tubuh Anda. Menghindari makan larut malam juga membantu menjaga berat badan tetap stabil.\r\n\r\n3. Perbanyak aktivitas fisik: Olahraga dan aktivitas fisik adalah kunci untuk membakar kalori dan menjaga berat badan ideal. Pilih aktivitas fisik yang Anda nikmati, seperti berjalan kaki, berlari, berenang, atau bersepeda. Lakukan aktivitas fisik setidaknya 150 menit per minggu untuk menjaga kesehatan dan kebugaran Anda.', 'berat.png'),
(8, 'Tips Menjaga Kesehatan Mata: Tips untuk Menghindari Gangguan Mata', 'Mata adalah salah satu indera yang paling berharga bagi kita. Namun, gaya hidup modern yang sering melibatkan penggunaan layar digital dan paparan sinar biru dapat menyebabkan berbagai gangguan mata. Untuk menjaga kesehatan mata dan mencegah gangguan yang serius, penting bagi kita untuk mengambil langkah-langkah pencegahan yang tepat. Berikut ini adalah beberapa tips yang dapat membantu Anda menjaga kesehatan mata Anda.\r\n\r\n1. Beristirahat dari Layar Digital: Paparan terus-menerus terhadap layar komputer, smartphone, atau tablet dapat menyebabkan kelelahan mata dan ketegangan. Lakukan istirahat secara teratur dengan mengadopsi aturan 20-20-20. Setiap 20 menit, perhatikan objek yang berjarak 20 kaki (sekitar 6 meter) selama 20 detik. Hal ini akan membantu mengurangi ketegangan mata dan meningkatkan kenyamanan saat menggunakan layar digital.\r\n\r\n2. Gunakan Pencahayaan yang Adekuat: Pastikan area kerja Anda memiliki pencahayaan yang cukup. Terlalu terang atau terlalu redup dapat menyebabkan ketegangan pada mata. Gunakan pencahayaan yang lembut dan merata untuk menghindari silau dan meminimalkan beban pada mata.\r\n\r\n3. Lindungi Mata dari Sinar UV: Paparan sinar UV dapat meningkatkan risiko terjadinya penyakit mata seperti katarak dan degenerasi makula. Ketika Anda berada di luar ruangan, kenakan kacamata hitam yang memberikan perlindungan 100% terhadap sinar UV. Ini akan membantu melindungi mata Anda dari kerusakan akibat paparan sinar matahari.', 'mata.png'),
(14, '5 Cara Mengatasi Bintik Merah pada Kulit Bayi', 'Bintik merah pada bayi rentan terjadi karena bayi memiliki kulit yang sensitif. Jenis bintik merah pada bayi beraneka ragam, sehingga cara mengatasinya harus sesuai dengan jenisnya. Bintik merah pada bayi bisa disebabkan oleh hal yang tidak begitu mengkhawatirkan, seperti biang keringat. Di sisi lain penyebabnya bisa mengkhawatirkan, seperti meningitis. \r\n\r\nUntuk mengatasi bintik merah pada bayi, orangtua harus paham betul dengan jenisnya. Dengan begitu, penanganan bisa lebih tepat dan proses penyembuhannya optimal. Berikut ini cara mengatasi bintik merah pada bayi sesuai dengan jenisnya:\r\n\r\n1. Biang Keringat\r\nBiang keringat biasa terjadi saat cuaca panas atau saat bayi mengenakan pakaian yang menyebabkan keringat. Saat merasa gerah dan berkeringat, muncullah bintik merah pada bayi yang disebut biang keringat. Untuk mengatasi biang keringat, cobalah mengenakan pakaian yang berbahan sejuk dan tipis supaya bayi tidak kepanasan hingga berkeringat.\r\n\r\nDi iklim atau cuaca panas, tidak apa membiarkan bayi tidur hanya dengan popok dan satu lapisan pakaian Bila perlu nyalakan pendingin ruangan agar ada sirkulasi udara. Ayah dan ibu juga bisa memandikan bayi dengan sabun khusus biang keringat. \r\n2. Jerawat Bayi\r\nJerawat bayi juga dikenal sebagai jerawat neonatal dan umum terjadi pada bulan pertama kehidupan bayi. Jerawat bayi terlihat seperti bintik atau benjolan kecil berwarna merah. Jerawat bayi biasanya bisa hilang dengan sendirinya jika rutin dibersihkan secara lembut.\r\n3. Roseola\r\nRoseola adalah bintik-bintik merah yang lebarnya 2-3 milimeter. Untuk mengatasi kondisi ini sebenarnya tidak diperlukan perawatan khusus. Cukup berikan banyak cairan, istirahat, dan obati demam Si Kecil.\r\n4. Ruam Popok\r\nRuam popok terjadi akibat iritasi dari popok basah dan gesekan. Bintik merah pada bayi akibat ruam popok bisa sembuh dengan sendirinya dengan sering mengganti popok dan menggunakan krim bayi yang mengandung zinc oxide. Kandungan ini berfungsi sebagai penghalang untuk mencegah gesekan dan iritasi di area popok.\r\nBintik merah akibat ruam popok bisa dicegah dengan memastikan kulit bokong bayi benar-benar kering sebelum mengenakan popok. Selain itu pilih popok yang cocok dengan kulit bayi dan sering-seringlah menggantinya setiap 4 jam atau kapan pun saat sudah basah. \r\n5. Meningitis\r\nMeningitis bisa terjadi saat selaput di sekitar otak dan sumsum tulang belakang meradang. Kondisi ini serius sehingga harus segera ditangani dengan cepat. Meningitis yang disebabkan virus biasanya bisa sembuh dengan sendirinya dalam 7-10 hari.\r\n\r\nHanya saja meningitis yang disebabkan bakteri harus mendapatkan penanganan medis segera. Antibiotik bisa diberikan untuk mengatasinya. Jika kasus lebih serius mungkin diperlukan rawat inap di rumah sakit. ', '6480b84f442b8.webp'),
(15, 'Tips Memilih Skincare Terbaik Menurut Dokter Kulit', 'Perawatan kulit terbaik dapat berbeda-beda bagi semua orang. Hal ini bergantung pada usia, jenis kulit, warna kulit, dan kondisi kesehatan yang relevan. Dengan banyaknya review produk skincare yang bertebaran di media sosial, kamu mungkin bingung produk apa yang sesuai dengan kulitmu. \r\n\r\nUntuk mengetahuinya sebaiknya kamu tidak hanya melihat review, tetapi kamu juga perlu berkonsultasi dengan dokter. Nah, kalau ingin tahu bagaimana cara memilih skincare terbaik menurut dokter kulit? Yuk simak informasinya berikut ini.\r\n\r\nTips Memilih Skincare Terbaik Menurut Dokter Kulit\r\n\r\n1. Ketahui jenis kulitmu\r\nLangkah pertama untuk memilih skincare terbaik menurut dokter adalah dengan mengetahui jenis kulitmu. Menurut American Academy of Dermatology ada berbagai jenis kulit yaitu normal, sensitif, kering, kombinasi, dan berminyak. Untuk mengetahuinya sebenarnya cukup mudah, kamu bisa menggunakan blotting paper untuk menyerap minyak yang ada di wajahmu.\r\n\r\nJika minyaknya sedikit atau bahkan tidak ada, maka kamu mungkin memiliki kulit normal atau kering. Sedangkan jika minyak hanya ada di bagian tertentu tandanya kamu memiliki kulit kombinasi. \r\n\r\nSementara itu, apabila kamu melihat banyak minyak yang terserap dalam blotting paper, sudah jelas bahwa kamu memiliki kulit berminyak. Nah, kalau untuk kulit sensitif biasanya ditandai dengan gejala mudah iritasi atau gatal apabila terkena produk tertentu yang tidak cocok.\r\n\r\n2. Ketahui apa yang kulitmu butuhkan\r\nKetika kamu melihat review produk skincare jangan termakan begitu saja. Kamu harus mengetahui apa yang sebenarnya kamu butuhkan dan masalah kulit apa yang kamu alami.\r\n\r\nJika masalah utamamu adalah jerawat, cari produk dengan kandungan yang dapat menghilangkan jerawat. Sama seperti masalah kulit lainnya, apabila fokus utamamu adalah mencerahkan wajah kusam, kamu perlu mengetahui produk skincare yang mengandung bahan pencerah. \r\n\r\nKetahui juga urutan penggunaan skincare yang benar di sini, “8 Urutan Penggunaan Skincare yang Benar.”\r\n\r\n3. Fokus dulu pada basic skincare routine\r\nMenggunakan lebih sedikit produk justru lebih baik dalam merawat kulit. Sebab, terlalu banyak produk juga dapat menyebabkan iritasi. Skincare terbaik menurut dokter kulit adalah skincare yang berfokus pada hal-hal basic, yang meliputi:\r\n\r\nMembersihkan\r\nApapun jenis kulitmu penting sekali untuk menjaga kebersihan kulit dari sisa make-up, debu, dan kotoran. Pilihlah pembersih sesuai dengan jenis kulitmu.Jika kulitmu kering hindari sabun cuci muka yang menghasilkan banyak busa dan membuat kulit terasa tertarik.\r\n\r\nHidrasi\r\nKulit yang terhidrasi dengan baik tidak hanya terlihat lebih cerah dan sehat, tetapi juga mencegah masalah kerutan. Memilih pelembap juga harus disesuaikan dengan tipe kulit. \r\n\r\nJika kulitmu berminyak atau kombinasi kamu bisa coba pelembap dengan tekstur yang ringan. Sementara itu, untuk kulit normal dan kering, pelembap dengan terkstur lotion atau cream mungkin lebih cocok untuk kulitmu. Jika kulitmu sensitif perhatikan baik-baik kandungan yang terdapat dalam pelembap.\r\n\r\nSunscreen\r\nSebagai warga yang tinggal di daerah tropis sunscreen merupakan barang wajib yang harus ada dalam rutinitas skincare mu. Pilihlah sunscreen dengan spf yang tinggi sekitar spf 30 atau 50. Jangan lupa aplikasikan lagi setiap beberapa jam sekali.\r\n\r\nKandungan Skincare yang Bisa Dipilih\r\nSetelah kamu menjalankan tips-tips tadi, ini saatnya untuk memilih kandungan skincare yang cocok untuk kulitmu. Berikut ini merupakan kandungan skincare terbaik menurut dokter kulit yang bisa kamu coba:\r\n\r\nCeramide dan hyaluronic acid\r\nKedua bahan ini merupakan zat pelembab penting yang secara alami ditemukan di kulit. Keduanya bisa kamu temukan dalam bentuk serum atau pelembap.\r\n\r\nVitamin C\r\nKhususnya asam l-askorbat merupakan antioksidan yang bekerja untuk mengembalikan kerusakan akibat radiasi UV dan merangsang produksi kolagen.\r\n\r\nVitamin E\r\nPerlu kamu ketahui, vitamin E menawarkan manfaat yang mirip dengan vitamin C, dan akan bekerja lebih baik jika keduanya digabungkan.\r\n\r\nRetinol\r\nKandungan yang sedang naik daun ini dapat mengikis sel kulit mati dan merangsang kolagen. Ingat, kamu hanya bisa memakainya di malam hari, dan jangan lupa gunakan sunscreen di keesokan harinya.\r\n\r\nNiacinamide (Vitamin B3)\r\nBeberapa dari kamu mungkin sudah sangat familiar dengan kandungan ini, niacinamide sangat bagus untuk mengontrol minyak wajah, sekaligus menghidrasi kulit, dan meratakan warna kulit.', '6480b9578daf8.webp'),
(16, 'Ini Kandungan dalam Basic Skincare Rutin yang Wajib Diketahui', 'emiliki rutinitas perawatan kulit dan wajah yang khusus adalah hal yang umum bagi banyak orang, baik itu perempuan atau laki-laki. Biasanya, seseorang memiliki beberapa langkah basic skincare rutin yang terdiri dari beberapa produk yang penting. Tiap produk ini memiliki perannya masing-masing untuk menjaga kesehatan kulit.\r\n\r\nTetapi, agar penggunaan skincare ini benar-benar terasa manfaatnya, kamu perlu mengetahui jenis kulitmu dan kandungan produk apa yang tepat untuk merawatnya. Umumnya, ada beberapa jenis kandungan yang umum kamu temukan di berbagai produk basic skincare. Simak berikut ini apa saja kandungan tersebut dan kegunaanya!\r\nKandungan yang Umum Ditemukan dalam Basic Skincare\r\nSebelum menentukan produk-produk apa saja yang wajib kamu gunakan sehari-hari, kamu bisa mengetahui zat-zat bermanfaat yang sering terkandung dalam skincare.\r\n\r\nBerbagai jenisnya antara lain:\r\n\r\n1. Salicylic acid\r\nAsam salisilat atau salicylic acid adalah zat yang sering kamu temukan pada sabun muka, exfoliator, obat jerawat, dan juga serum. Dalam produk perawatan kulit dan wajah, fungsinya adalah untuk mengangkat sel kulit mati sehingga kulit terlihat lebih cerah. \r\n\r\nSelain itu, asam salisilat bisa menembus pori-pori kulit yang tersumbat oleh minyak sehingga jerawat bisa berkurang. Produk yang mengandung zat ini cocok untuk yang memiliki kulit berminyak.\r\n\r\n2. Hyaluronic acid sebagai basic skincare\r\nJenis asam yang satu ini akan kamu sering temukan pada toner. Ini adalah bahan yang sangat melembapkan kulit dan bisa mengunci cairan yang ada di dalam kulit sehingga kulit terasa lembut dan lembap.\r\n\r\nUmumnya, hyaluronic acid akan kamu temukan di dalam produk perawatan wajah bersama dengan vitamin C untuk membantu penyerapan maksimal pada kulit. Bagi yang sudah menginjak umur 30-an dan ingin mengurangi tampak kerutan, ini adalah kandungan yang sesuai.\r\n\r\n3. Alpha-hydroxy acids (AHA)\r\nAlpha-hydroxy acid atau AHA adalah kelompok zat seperti lactic acid, glycolic acid, dan citric acid. Produk yang mengandung AHA bisa membantu mengurangi pigmentasi dan mengecilkan pori-pori. \r\n\r\nNamun, AHA memiliki efek samping iritasi dan juga sensitivitas terhadap matahari. Maka dari itu, konsentrasinya dalam produk yang kamu gunakan pada wajah sebaiknya tidak lebih dari 10-15 persen. Selain itu, zat ini sebaiknya tidak terkena wajah setiap hari.\r\n\r\n4. Niacinamide sebagai basic skincare\r\nNiacinamide adalah bentuk dari vitamin B3 yang bisa membentuk keratin dan membuat kulit tetap kencang dan sehat. Hal ini bisa terjadi karena zat ini membantu mengunci kelembapan kulit.\r\n\r\nJika kandungan ini terdapat pada masker wajah, efeknya juga bisa untuk mengurangi kemerahan pada wajah. Untuk lebih lanjutnya, kamu bisa mencari tahu seputar Manfaat Niacinamide untuk Perawatan Kulit dan Wajah.\r\n\r\n5. Retinol\r\nKalau kamu melakukan basic skincare dengan tujuan menghilangkan bekas jerawat, mengurangi pigmentasi wajah, dan menghaluskan tekstur kulit, retinol adalah zat yang tepat.\r\n\r\nRetinol adalah bentuk vitamin A yang bisa memicu produksi kolagen di lapisan kulit bagian bawah. Oleh karena itu, banyak orang menggunakannya untuk menjaga kulit tetap awet muda.', '6480ba2c909c1.webp'),
(17, '9 Manfaat Kandungan Hyaluronic Acid pada Skincare', 'juga dikenal sebagai hyaluronan adalah zat bertekstur lengket dan licin yang diproduksi oleh tubuh secara alami. Sebagian besar jumlahnya terdapat di kulit, jaringan ikat, dan mata.\r\n\r\nSelain itu, hyaluronan juga terdapat pada skincare. Fungsi utamanya adalah menahan air agar jaringan tetap terlumasi dan lembab. Karena itu, kulit jadi lebih terhidrasi dan tampak bercahaya.\r\npa Itu Hyaluronic Acid?\r\nHyaluronic acid (asam hialuronat) adalah jenis polisakarida yang terdiri dari rantai panjang molekul gula yang terikat secara kuat dengan air. Dalam konteks perawatan kulit dan kosmetik, bahan kimia ini bekerja dengan menarik dan mempertahankan kelembapan.\r\n\r\nKandungannya sering terdapat dalam produk-produk perawatan kulit, seperti pelembap, serum, dan krim anti-penuaan. Produk ini mampu membuat kulit menjadi lebih lembap, elastisitas, dan kenyal. \r\n\r\nNamun, seiring bertambahnya usia, produksi asam hialuronat dalam tubuh cenderung menurun. Hal ini berdampak pada kulit kering dan berkerut. Untuk membantu mempertahankan hidrasi dan kelembapan kulit, kamu bisa menggunakan produk yang mengandung hyaluronic acid   secara rutin.\r\n\r\nHyaluronic Acid Fungsinya untuk Apa?\r\nAsam hialuronat menjadi salah satu kandungan yang kerap dipakai oleh industri kosmetik sebagai bagian dari skincare.\r\n\r\nBeberapa manfaatnya meliputi:\r\n\r\n1. Berperan dalam proses anti-penuaan\r\nStudi berjudul: Hyaluronic acid: A key molecule in skin aging yang dalam Dermato Endocrinology menyebutkan, penuaan kulit terkait dengan hilangnya kelembapan kulit. Molekul utama yang terlibat dalam kelembapan kulit adalah hyaluronan atau asam hialuronat (HA).\r\n\r\nSebagai molekul gula, hyaluronic acid dapat membantu kulit tetap tertarik dengan mempertahankan kelembapannya. Alhasil, ini dapat memerangi tanda-tanda penuaan, seperti kerutan, garis halus, dan flek hitam di wajah.\r\n\r\n2. Melembapkan kulit \r\nAsam hialuronat membantu meregangkan dan melenturkan kulit, serta mengurangi kerutan dan garis halus yang muncul di bawah. Kandungan ini juga mempercepat proses penyembuhan luka dan mengurangi jaringan parut.\r\n\r\n3. Meningkatkan elastisitas kulit\r\nAsam hialuronat efektif mengurangi kedalaman kerutan dan meningkatkan kekencangan, serta elastisitas kulit. Kandungan itu bekerja dengan meningkatkan hidrasi kulit. Gunakan 2 kali sehari dan kamu bisa merasakan manfaat ini dengan baik.\r\n\r\n4. Meredakan kemerahan pada wajah\r\nMeredakan kemerahan pada wajah berasal dari penggunaan asam hialuronat dalam jangka panjang. Tak hanya itu, kandungan tersebut juga mampu mengatasi kemerahan akibat peradangan dan bekas luka akibat jerawat.\r\n\r\n5. Mempercepat proses penyembuhan luka\r\nAsam hialuronat juga berperan penting dalam proses penyembuhan luka. Meski secara alami ada di kulit, kulit membutuhkan konsentrasi yang tinggi ketika ada kerusakan.\r\n\r\nManfaat ini tercatat dalam jurnal Hyaluronic Acid in Inflammation and Tissue Regeneration pada Wounds. Asam hialuronat membantu luka lebih cepat sembuh dengan mengatur tingkat peradangan. Kandungan ini bekerja dengan memberi sinyal tubuh untuk memperbaiki pembuluh darah di area yang rusak.\r\n\r\nUntuk mendapatkan manfaatnya, oleskan skincare yang mengandung asam hialuronat ke bagian luka. Langkah ini mampu mempercepat proses penyembuhan ketimbang plasebo atau tanpa pengobatan sama sekali.\r\n\r\nAsam hialuronat juga memiliki sifat antibakteri. Sehingga, akan membantu mengurangi risiko infeksi bila dioleskan langsung ke luka terbuka. Tak hanya pada wajah, kandungannya juga dapat mempercepat luka setelah operasi gigi.\r\n\r\nSederhananya, mengoleskan asam hialuronat langsung ke luka terbuka pada kulit dapat membantu mempercepat proses pemulihan. Dosisnya harus sesuai dengan kebutuhan, jangan berlebihan.\r\n\r\n6. Menyamarkan bekas jerawat\r\nMenurut studi berjudul Topographic computer analysis for acne scar treatment on face accompanying biopsy study after dermal injection of hydrotoxin mixture dalam Journal of Cosmetic Dermatology, asam hialuronat dapat menyamarkan bekas luka di permukaan kulit.\r\n\r\nCaranya, dengan injeksi asam hialuronat yang distabilkan (S-HA) ke dalam dermis. Dengan menggunakan analisis komputer topografi, bekas jerawat atau bopeng menghilang dari 29,04 persen ke 27.48 persen pada bulan pertama.\r\n\r\n7. Membantu memaksimalkan penyerapan skincare\r\nKarena sifatnya yang menarik air, asam hialuronat dapat membantu meningkatkan penyerapan produk perawatan kulit lainnya. Dengan begitu, produk bisa memberikan manfaat yang lebih baik bagi kulit.\r\n\r\nSelain menggunakan asam hialuronik, kamu juga bisa menyamarkan bekas jerawat dengan bahan alami. Silakan klik artikel ini untuk penjelasan selengkapnya, “10 Cara Alami untuk Menghilangkan Jerawat”.\r\n\r\n8. Mempertahankan skin barrier\r\nSkin barrier bisa menipis seiring dengan bertambahnya usia, paparan sinar UV, dan pola hidup tidak sehat. Dampaknya, akan muncul tanda penuaan dini, seperti garis halus dan flek hitam. \r\n\r\nDengan menggunakan asam hialuronat, bahan kimia ini mampu mempertahankan kekuatan lapisan pelindung kulit. Kandungan ini juga dapat meminimalisir kerusakan akibat paparan sinar matahari berlebihan.\r\n\r\n9. Meningkatkan regenerasi kulit\r\nMeskipun tidak mempercepat proses pembentukan sel, asam hialuronat dapat mendorong regenerasi sel kulit. Caranya dengan menawarkan hidrasi ekstra dan perlindungan penghalang kulit (skin barrier).\r\nBisakah Hyaluronic Acid Dipakai Setiap Hari?\r\nAsam hialuronat bisa kamu gunakan setiap hari dalam rutinitas perawatan kulit. Karena sifatnya yang lembut dan cocok untuk semua jenis kulit, bahan kimia ini aman serta efektif untuk dipakai sehari-hari.\r\n\r\nCara menggunakannya dengan mengaplikasikan produk setelah mencuci muka. Kemudian, lanjutkan dengan penggunaan tabir surya pada siang hari atau krim malam sebelum tidur di malam hari.\r\n\r\nProduk mengandung asam hialuronat bekerja dengan cara menarik dan mempertahankan kelembapan di kulit. Karena itu, penting untuk mengunci kelembapan tersebut dengan penggunaan produk perawatan kulit yang lebih berat. Misalnya, pelembap. Tujuannya adalah membantu menjaga hidrasi kulit dan mencegah penguapan air.\r\n\r\nJika masih bingung terkait dengan penggunaannya, silakan klik artikel ini untuk penjelasan lebih lanjut “Ketahui Cara Tepat Penggunaan Vitamin C, Retinol dan Hyaluronic Acid”.\r\nApa Efek Samping Hyaluronic Acid?\r\nEfek samping penggunaan asam hialuronat bisa terjadi ketika kandungan tidak dalam takaran yang sesuai. Beberapa dampak yang mungkin saja terjadi setelah pemakaian pada pengguna, antara lain:\r\n\r\nMasalah kulit, seperti kulit kering, jaringan parut, kulit menjadi kaku, dan penyakit kulit, seperti skleroderma dan keratosis aktinik.\r\nKondisi mata kering.\r\nMasalah pada sendi, seperti radang sendi dan cedera jaringan lunak.\r\nProses penyembuhan luka berjalan lebih lama.\r\nGangguan pernapasan seperti asma.\r\nCara Tepat Penggunaan\r\nAsam hialuronat hadir dalam berbagai bentuk dan varian. Tak hanya sebagai bagian dalam skincare, kandungan itu bisa dipakai dalam bentuk oral (suplemen), obat tetes, dan salep.\r\n\r\nBerikut cara tepat menggunakan sesuai dengan jenisnya:\r\n\r\nOral. Dalam bentuk suplemen, asam hialuronat diminum bersamaan dengan segelas air. Manfaatnya meningkatkan kesehatan kulit hingga mengurangi nyeri akibat radang sendi.\r\nLosion, krim, salep, atau gel. Caranya, mengaplikasikan produk ke permukaan kulit. Kandungan asam hialuronat berguna untuk mengurangi munculnya kerutan dan garis halus.\r\nObat tetes mata. Pengaplikasiannya dengan meneteskan produk ke dalam mata. Tujuannya untuk menjaga kelembapan bola mata.\r\nPelumas. Manfaatnya untuk mencegah kekeringan atau nyeri pada vagina, terutama bagi wanita yang mengalami menopause.\r\nJika masih bingung dengan tahapan penggunaan skincare, kamu bisa klik artikel ini untuk penjelasan lebih lanjut “Ini Tahapan Pemakaian Skincare Pagi dan Malam”.\r\nAturan Pemakaian\r\nSementara itu, berikut ini cara pemakaian asam hialuronat yang tersedia dengan bentuk resep:\r\n\r\nSuntikan. Caranya, penyuntikan langsung ke area persendian. Tujuannya untuk menghilangkan rasa sakit karena radang sendi. Pemakaian bisa dibarengi dengan obat yang diberikan dalam infus. \r\nSuntikan di bawah kulit. Cairan ini berfungsi unutk membantu mengembalikan bentuk dan penampilan alami, seperti untuk merawat bekas jerawat atau menambah volume pada bibir.\r\nSuntikan di hidung. Di sini, asam hialuronat berperan dalam menambah volume hidung agar terlihat lebih mancung dan berisi. Prosedur ini bernama suntik filler.\r\nInhaler atau nebulizer. Pemberian asam hialuronat melalui alat yang menghantarkan uap. Tujuannya untuk mengobati masalah pada gangguan pernapasan, seperti asma atau infeksi.\r\nSkincare dengan kandungan asam hialuronat dijual bebas di pasaran dan dapat dipakai tanpa resep dokter. Sementara itu, tindakan yang membutuhkan penyuntikan, langkah ini hanya boleh dilakukan oleh ahli medis yang mumpuni.\r\n\r\nPenggunaan asam hialuronat yang tidak tepat dapat menyebabkan komplikasi parah. Dampak paling fatal adalah kematian. Kondisi ini terjadi ketika alat untuk menyuntik tidak dalam keadaan steril.', '6480bb0da09d4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `email`, `password`, `gambar`) VALUES
(1, 'Muhamad Ariel Septiadi', 'arielboy', 'ariel@gmail.com', 'asal1', ''),
(2, 'Muhamad Wahyu Septina', 'wahyu19', 'wahyu@gmail.com', 'asal1', ''),
(3, 'Muhamad Aldi Maulana', 'aldimaulana', 'aldi@gmail.com', 'asal1', ''),
(4, 'Bima', 'bima', 'bima@gmail.com', 'asal1', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `harga`, `stok`, `gambar`, `id_kategori`) VALUES
(1, 'NUTRIMAX C MAX 1000', 'NUTRIMAX C MAX 1000 mengandung Suplemen dengan kandungan Calsium Askorbat yang berguna untuk suplementasi vitamin C', '146.000', 200, 'vitc.png', 1),
(2, 'Tolak Angin Cair Plus Madu 15 ml 5 Sachet	', 'TOLAK ANGIN CAIR PLUS MADU merupakan obat herbal terstandar yang mengandung kombinasi berbagai herbal alami yang dapat digunakan untuk membantu memelihara atau menjaga daya tahan tubuh dan meringankan gejala masuk angin.\r\n', '26.400', 145, 'tolakangin.png', 1),
(3, 'Komix Herbal Original 15 ml 6 Sachet	', 'KOMIX HERBAL merupakan obat herbal yang mengandung bahan alami berupa esktrak lagundi, ekstrak jahe merah, thymi herba, licorice, peppermint oil dan madu. Obat herbal ini digunakan untuk membantu meredakan batuk berdahak', '17.700', 265, 'komik.png', 1),
(4, 'Obat Antimo 50 mg 10 Tablet', 'ANTIMO TABLET merupakan obat dengan kandungan Dimenhydrinate yang digunakan untuk mengatasi mual, muntah, dan pusing akibat mabuk perjalanan. Dimenhydrinate pada produk ini bekerja dengan cara menghambat produksi dan kerja histamin yang diproduksi tubuh, sehingga mencegah stimulasi saraf di otak dan telinga bagian dalam yang bisa menyebabkan mual, muntah, dan pusing.', '6.100', 165, 'antimo.png', 1),
(6, 'Brightly Essence Toner', 'Toner yang membantu menghidrasi serta memberikan kesegaran pada kulit dan membantu mencerahkan kulit wajah.', '75.000', 525, 'scarlet2.png', 2),
(7, 'Brightening Facial Wash', 'Sabun cuci muka yang membantu menjaga kelembapan kulit, mencerahkan kulit wajah, merawat kekencangan kulit, serta membantu mencerahkan kulit wajah.', '75.000', 515, 'scarlet3.png', 2),
(8, 'Brightly Ever After Night Cream', 'Krim malam yang membantu mencerahkan dan menghidrasi kulit, serta menyamarkan noda gelap pada kulit wajah.', '75.000', 521, 'scarlet1.png', 2),
(9, 'SPEEDS Jump Rope', 'Lompat tali merupakan olahraga yang mempunyai banyak manfaat. Olahraga ini memiliki tujuan untuk melatih dan mengembangkan kekuatan otot secara maksimal dalam waktu pendek.', '20.000', 525, 'sport.jpg', 3),
(10, 'Speeds Resistance Tube', 'Resistance tube 11in1 fitness pull rope membantu meningkatkan fleksibilitas dan jangkauan gerakan. Terbuat dari bahan berkualitas yang tidak mudah putus.', '110.000', 525, 'sport1.jpg', 3),
(11, 'Spring Chest Expander', 'Bagi Anda para lelaki yang menginginkan dada bidang sehingga terlihat lebih gagah, gunakan alat fitness pegas ini di rumah. Selain membentuk dada bidang, pegas fitness ini juga dapat membentuk otot lengan', '52.500', 555, 'sport2.jpg', 3),
(12, 'SPEEDS Treadmill Portable', 'Treadmill portable elektrik pad multifungsi dilengkapi dengan sistem remote control dengan handle yang dapat dilipat untuk menghemat ruangan disertai holder smartphone pada bagian handle.', '2.500.000', 214, 'sport3.jpg', 3),
(15, 'Peeling So Good', 'Exfoliator tipe gel yang membantu mengangkat sel-sel kulit mati, mencerahkan dan meratakan warna kulit, serta menjadikan kulit tampak halus dan bercahaya', '75.000', 115, '6480bd4f3f91e.png', 2),
(16, '7x Ceramide Barrier up Moisturizer', 'Pelembap yang membantu menjaga kelembapan kulit, merawat skin barrier, merawat kulit agar tetap halus dan lembut, serta membantu mencerahkan dan merawat kulit', '75.000', 112, '6480bd97ef35b.png', 2),
(17, 'C-Power Face Mist', 'Toner Face Mist yang membantu melembapkan kulit wajah, mencerahkan kulit, menyamarkan bintik hitam pada wajah, merawat keremajaan kulit, menyegarkan kulit wajah, membantu menyerap minyak berlebih, serta membantu penyerapan skincare lainnya\r\n\r\n', '75.000', 160, '6480c4459cc3e.png', 2),
(18, 'C-Power Serum', 'Serum yang membantu mencerahkan kulit, menyamarkan bintik hitam pada wajah, mencegah tanda-tanda penuaan dini, menjaga kelembapan kulit, membantu melindungi kulit dari efek buruk paparan sinar UV, merawat kekencangan kulit, serta membantu meratakan warna kulit', '75.000', 164, '6480c4741f8ff.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'kesehatan'),
(2, 'kecantikan'),
(3, 'kebugaran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `gambar`) VALUES
(1, 'Muhamad Ariel Septiadi', 'arielseptiadi3', 'arielseptiadi3@gmail.com', 'antijebol19', 'ariel.jpg'),
(2, 'Wiliam Anderson', 'jon123', 'jontor@gmail.com', 'asal1', 'ariel.jpg'),
(3, 'Edin Burgh', 'kingboying19', 'kingboying19@gmail.com', 'asal1', 'ariel.jpg'),
(4, 'Charles Hilton', 'charleshils', 'charleshills@gmail.com', 'asal1', 'ariel.jpg'),
(18, 'frankenstein', 'franks', 'frankenstein@gmail.com', 'asal1', NULL),
(19, 'johanson', 'amirfauzi', 'made19@gmail.com', 'ASAL1', NULL),
(20, 'ariel', 'admin', 'admin@gmail.com', '1', NULL),
(22, 'Muhamad Ariel Septiadi', 'arielseptiadi3', 'arielseptiadi3@gmail.com', 'asal1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_produk_id_kategori` (`id_kategori`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `produk_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
