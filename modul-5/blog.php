<?php
$artikel = [
    ["judul" => "Belajar Mandiri di Era Digital", "tanggal" => "2024-03-19", "refleksi" => "PHP adalah bahasa yang sangat berguna.", "gambar" => "gambar1.jpg"],
    ["judul" => "Upgrade Diri Menjadi Lebih Baik Setiap hari", "tanggal" => "2025-01-03", "refleksi" => "Pengembangan web adalah bidang yang menarik.", "gambar" => "gambar2.jpg"],
];

function getRandomQuote($quotes) {
    return $quotes[array_rand($quotes)];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Reflektif</title>
</head>
<body>
<nav>
    <a href="profil.php">Profil</a> | 
    <a href="timeline.php">Timeline Pengalaman Kuliah</a> |
    <a href="blog.php">Blog Relaktif</a>
</nav>
<br>
    <h1>Daftar Artikel Blog Relaktif</h1>
    <table align="center" cellpadding="10" width="600px">
        <tr>
            <td>Nama</td>
            <td>: Fika Anjani</td>
            <td rowspan="5"><img src="IMG-20240923-WA0012.jpg" height="200px" width="170px"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: Jl. Raya Arjosari Rejoso Pasuruan</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>: Pasuruan, 23 Agustus 2006</td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>: 0831-1228-6000</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: anjanifika232@gmail.com</td>
        </tr>
    </table>
    <ul>
        <?php foreach ($artikel as $index => $art): ?>
            <li>
                <a href="artikel.php?id=<?php echo $index; ?>"><?php echo $art['judul']; ?></a> - <?php echo $art['tanggal']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
