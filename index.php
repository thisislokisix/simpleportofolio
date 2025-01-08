<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portofolio</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h1>Halo, Saya [Nama Anda]</h1>
        <p>Selamat datang di dashboard portofolio saya. Saya seorang pengembang web dengan fokus pada pengembangan antarmuka pengguna yang ramah dan modern.</p>
    </section>

    <section id="projects">
        <h2>Proyek Saya</h2>
        <div class="project">
            <h3>Proyek 1</h3>
            <p>Deskripsi singkat tentang proyek ini.</p>
        </div>
        <div class="project">
            <h3>Proyek 2</h3>
            <p>Deskripsi singkat tentang proyek ini.</p>
        </div>
        <!-- Tambahkan proyek lainnya di sini -->
    </section>

    <section id="contact">
        <h2>Kontak</h2>
        <form action="submit.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 [Nama Anda]. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
