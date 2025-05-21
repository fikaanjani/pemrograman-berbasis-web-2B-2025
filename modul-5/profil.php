<?php

function isValidInput($data) {
    return !empty(trim($data));
}

$error = null;
$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : [];
    $pengalaman = trim($_POST['pengalaman']);
    $software = isset($_POST['software']) ? $_POST['software'] : [];
    $os = isset($_POST['os']) ? $_POST['os'] : '';
    $tingkat_php = isset($_POST['tingkat_php']) ? $_POST['tingkat_php'] : '';

    // Validasi input
    if (empty($bahasa) || !isValidInput($pengalaman) || empty($software) || !isValidInput($os) || !isValidInput($tingkat_php)) {
        $error = "Semua isian wajib diisi dan dipilih!";
    } else {
        ob_start();
        ?>

        <h2 align="center">Hasil Input Profil</h2>
        <table border="1" cellpadding="10" width="600px" align="center">
            <tr>
                <td>Bahasa Pemrograman</td>
                <td> <?= htmlspecialchars(implode(", ", $bahasa)) ?></td>
            </tr>
            <tr>
                <td>Pengalaman Membuat Proyek</td>
                <td> <?= nl2br(htmlspecialchars($pengalaman)) ?></td>
            </tr>
            <tr>
                <td>Software yang Sering Digunakan</td>
                <td> <?= htmlspecialchars(implode(", ", $software)) ?></td>
            </tr>
            <tr>
                <td>Sistem Operasi</td>
                <td> <?= htmlspecialchars($os) ?></td>
            </tr>
            <tr>
                <td>Tingkat Penguasaan PHP</td>
                <td> <?= htmlspecialchars($tingkat_php) ?></td>
            </tr>
        </table>
        <?php
        if (count($bahasa) > 2) {
            echo "<p align='center'><strong>Anda cukup berpengalaman dalam pemrograman!</strong></p>";
        }
        $result = ob_get_clean();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Profil Interaktif Mahasiswa</title>
    <script>
    // Fungsi untuk menambah input bahasa pemrograman
    function tambahBahasa() {
        var container = document.getElementById('container-bahasa');
        var inputBaru = document.createElement('input');
        inputBaru.type = 'text';
        inputBaru.name = 'bahasa[]';
        inputBaru.placeholder = 'Tambah bahasa pemrograman';
        container.appendChild(document.createElement('br'));
        container.appendChild(inputBaru);
    }
    </script>
</head>
<body>
    <nav>
        <a href="profil.php">Profil</a> | 
        <a href="timeline.php">Timeline Pengalaman Kuliah</a> |
        <a href="blog.php">Blog Relaktif</a>
    </nav>
    <br>
    
    <h1 align="center">Profil Interaktif Mahasiswa</h1>
    <hr width="100%">
    
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
    <hr width="100%">
    <br>

    <!-- Menampilkan pesan error jika ada -->
    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <!-- Menampilkan hasil input jika ada -->
    <?php if ($result): ?>
        <div><?= $result ?></div>
        <hr>
    <?php endif; ?>

    <!-- Form untuk input data -->
    <form method="post" action="">
        <label>Bahasa Pemrograman yang Dikuasai:<br>
            <div id="container-bahasa">
                <input type="text" name="bahasa[]" placeholder="Contoh: PHP" required>
            </div>
            <button type="button" onclick="tambahBahasa()">Tambah Bahasa</button>
        </label><br><br>

        <label>Pengalaman Membuat Proyek:<br>
            <textarea name="pengalaman" rows="4" cols="40" required></textarea>
        </label><br><br>

        <label>Software yang sering digunakan:<br>
            <input type="checkbox" name="software[]" value="VS Code"> VS Code<br>
            <input type="checkbox" name="software[]" value="XAMPP"> XAMPP<br>
            <input type="checkbox" name="software[]" value="Git"> Git<br>
            <input type="checkbox" name="software[]" value="Sublime Text"> Sublime Text<br>
            <input type="checkbox" name="software[]" value="Docker"> Docker<br>
        </label><br>

        <label>Sistem Operasi yang digunakan:<br>
            <input type="radio" name="os" value="Windows" required> Windows<br>
            <input type="radio" name="os" value="Linux" required> Linux<br>
            <input type="radio" name="os" value="Mac" required> Mac<br>
        </label><br>

        <label>Tingkat Penguasaan PHP:<br>
            <select name="tingkat_php" required>
                <option value="">-- Pilih --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Mahir">Mahir</option>
            </select>
        </label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
