<?php
$nama = "Bevan Tri Ramadiyas";
$posisi = "Mahasiswa Teknik Informatika";
$email = "bevantriramadiyas@gmail.com";
$telepon = "1234-5678-10293";

$skills = [
    "HTML & CSS" => 90,
    "JavaScript" => 85,
    "PHP" => 80
];
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bio - <?= $nama ?></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav class="navbar">
            <h1>MyBio</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section id="home" class="hero">
            <img src="Foto Jas.jpg" alt="Profile" class="profile">
            <h1><?= $nama ?></h1>
            <p><?= $posisi ?></p>
            <button onclick="downloadCV()">Download CV</button>
        </section>

        <section id="about" class="about">
            <h2>About Me</h2>
            <div class="info">
                <p><strong>Nama:</strong> <?= $nama ?></p>
                <p><strong>Email:</strong> <?= $email ?></p>
                <p><strong>Telepon:</strong> <?= $telepon ?></p>
            </div>
            <p>Saya mahasiswa yang tertarik dengan web development.</p>
        </section>

        <section id="skills" class="skills">
            <h2>My Skills</h2>
            <?php foreach($skills as $skill => $level): ?>
            <div class="skill-bar">
                <span><?php echo $skill; ?></span>
                 </div class="progress">
                     <div class="fill" style="width: <?php echo $level; ?>%"></div>            
                </div>    
                <span class="percent"><?php echo $level; ?>%</span>
            </div>
            <?php endforeach; ?>
        </section>

        <section id="contact" class="contact">
            <h2>Contact Me</h2>
            <form id="contactForm" onsubmit="kirimPesan(event)">
                <input type="text" id="nama" placeholder="Nama Anda" required>
                <input type="email" id="email" placeholder="Email Anda" required>
                <textarea id="pesan" placeholder="Pesan Anda" required> </textarea>
                <button type="submit">Kirim</button>
            </form>
            <p>Saya mahasiswa yang tertarik dengan web development.</p>
        </section>
    </body>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $nama; ?></p>
    </footer>

    <script src="script.js"></script>
</html>