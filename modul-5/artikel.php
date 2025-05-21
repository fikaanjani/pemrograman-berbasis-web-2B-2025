<?php
$artikel = [
    [
    "judul" => "Belajar Mandiri di Era Digital", 
    "tanggal" => "2024-03-19", 
    "gambar" => "belajar online.jpg", 
    "refleksi" => "Belajar mandiri kini menjadi keharusan. Dengan banyaknya sumber belajar daring, kita bisa menggali ilmu tanpa batas.Saya sendiri memanfaatkan platform seperti YouTube, W3Schools, dan dokumentasi resmi untuk memperdalam skill pemrograman.
        <br>Belajar di era digital memang dikenal memberi banyak kemudahan dan efektivitas yang tinggi. Tidak mengherankan, karena akses terhadap sumber pembelajaran semakin mudah, cepat, dan juga murah.", 
    "tautan" => "https://penerbitdeepublish.com/cara-belajar-di-era-digital/",
    "tampiltautan" => "penerbitdeepublish.com"
    ],
    [
    "judul" => "Upgrade Diri Menjadi Lebih Baik Setiap hari", 
    "tanggal" => "2025-01-03", 
    "gambar" => "upgrade diri.jpeg", 
    "refleksi" => "Hidup adalah perjalanan belajar tanpa akhir, kadang kita melukai, kadang kita terluka. Semua orang pernah salah langkah,keliru mengambil keputusan, atau gagal memahami sudut pandang orang lain. tapi hidup bukan tentang sempurna, melainkan tentang balajar memaafkan dan tumbuh. Teruslah jadi pemaaf, dan jangan berhenti memperbaiki diri. <br>Mari kita usahakan untuk lebih baik pada diri sendiri. Mari menjauhkan diri dari mereka yang tidak menghargaimu. Diantara semua keterlambatan jangan terlambat untuk menghargai diri sendiri, dan diantara semua yang dirayakan, jangan lupa untuk merayakan diri sendiri.", 
    "tautan" => "https://www.hipwee.com/tag/upgrade-diri/", 
    "tampiltautan" => "hipwee.com"],
];

$kutipan = [
    "Jangan pernah menyerah pada impianmu.",
    "Belajar dari kesalahan adalah cara terbaik untuk tumbuh."
];

function getRandomQuote($quotes) {
    return $quotes[array_rand($quotes)];
}

$id = $_GET['id'];
$artikel_terpilih = $artikel[$id];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $artikel_terpilih['judul']; ?></title>
</head>
<body>
<nav>
    <a href="profil.php">Profil</a> | 
    <a href="timeline.php">Timeline Pengalaman Kuliah</a> |
    <a href="blog.php">Blog Relaktif</a>
</nav>
<br>
    <h1><?php echo $artikel_terpilih['judul']; ?></h1>

    <p>Tanggal: <?php echo $artikel_terpilih['tanggal']; ?></p>

    <img style="width: 50%; height: 50%;" 
        src="<?php echo $artikel_terpilih['gambar']; ?>" 
        alt="<?php echo $artikel_terpilih['judul']; ?>">
    <br>
    <p><?php echo $artikel_terpilih['refleksi']; ?></p>

    <blockquote><?php echo getRandomQuote($kutipan); ?></blockquote>

    <p>Refrensi :<a href="<?php echo $artikel_terpilih['tautan']; ?>" target="blank"><?php echo $artikel_terpilih['tampiltautan']; ?></a></p>
</body>
</html>
