<?php
$pengalaman_kuliah = [
    ["tahun" => "03-08-2024", "kegiatan" => "Hari pertama kuliah.", "deskripsi" => "Ketika pertama kali masuk universitas, aku merasa jiwa-jiwa antusiasku keluar dan bersemangat. Aku bertemu banyak teman baru, suasana baru serta dosen yang inspiratif. Suasana akademik yang kondusif bikin aku semakin termotivasi untuk belajar terus menerus tanpa kenal lelah"],
    ["tahun" => "29-08-2024", "kegiatan" => "Masuk UKM Fakultas yaitu UKM-ITC.", "deskripsi" => "Aku mengikuti UKM-ITC. Mengapa? karena aku bener-bener baru masuk ke dalam dunia IT/percodingan. Sekolahku dulu Madrasah Aliyah yang sangat minim tentang IT. Meskipun itu pertama kali bagi saya dan saya juga memulai dari nol untuk belajar,saya tidak akan pantang menyerah untuk belajar lebih giat."],
    ["tahun" => "17-09-2024", "kegiatan" => "Mengikuti seminar TECHSTART.", "deskripsi" => "Ikut seminar TECHSTART yang ngebahas dunia teknologi dan percodingan. Seru banget! Banyak ilmu baru yang aku dapet, mulai dari dasar-dasar ngoding sampai teknologi kekinian kayak AI dan cloud computing. Benar-benar nambah wawasan dan bikin makin semangat buat ngembangin skill di dunia IT!"],
    ["tahun" => "26-04-2025", "kegiatan" => "Mengikuti seminar Fochus Group Discussion.", "deskripsi" => "Di seminar FGD itu bisa ngobrolin topik seru bareng orang-orang keren! Banyak insight baru yang bikin makin terbuka pikirannya. Seru banget bisa diskusi bareng, tukar pendapat, dan dapet banyak insight dari berbagai sudut pandang. Pengalaman yang bener-bener nambah wawasan!"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Pengalaman Kuliah</title>
    <style>
        .timeline {
            position: relative;
            padding: 20px;
        }
        .event {
            margin: 20px 0;
            padding-left: 20px;
            border-left: 2px solid #000;
        }
    </style>
</head>
<body>
<nav>
    <a href="profil.php">Profil</a> | 
    <a href="timeline.php">Timeline Pengalaman Kuliah</a> |
    <a href="blog.php">Blog Relaktif</a>
</nav>
<br>
    <h1>Timeline Pengalaman Kuliah</h1>
    <div class="timeline">
        <?php foreach ($pengalaman_kuliah as $event): ?>
            <div class="event">
                <strong><?php echo $event['tahun']; ?></strong>: <?php echo $event['kegiatan']; ?> <br> <?php echo $event['deskripsi']; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
