<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" width="150">
        </div>
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="home">Home</a></li>
                <li><a href="{{ route('about_us') }}" class="about_us">About Us</a></li>
                <li><a href="{{ route('gallery') }}" class="gallery">Gallery</a></li>
                <li><a href="{{ route('OurServices') }}" class="our_service">Our Service</a></li>
                <li><a href="#" class="contact_us">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div class="placeholder-lecucci">
        <div class="lecucimg">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>
        <div class="intro-text">
            <p>Le Cucci menyediakan layanan Laundry & Dry Clean dengan teknologi terkini, bahan pembersih berkualitas, dan tenaga ahli yang memastikan pakaian Anda terjaga kebersihannya dan tetap awet. </p>
        </div>
    </div>
    <section class="content-section">
        <div class="content-left">
            <img src="{{ asset('images/pae.png') }}" alt="Pak'e">
        </div>
        <div class="content-right">
            <p>
                Le Cucci adalah layanan Laundry & Dry Clean terpercaya yang tentunya menggunakan teknologi modern, formula pembersih premium, dan tenaga profesional berpengalaman untuk merawat semua jenis pakaian Anda.
                <br>
                <br>
                Kami memastikan setiap pakaian dibersihkan dengan teliti, aman, dan ramah lingkungan, sehingga tetap terjaga kualitasnya. Le Cucci berkomitmen untuk menjadi mitra terbaik Anda dalam menjaga kebersihan dan keindahan pakaian.
            </p>
        </div>
    </section>
    <div class="container">
        <div class="image-box">
            <img src="{{ asset('images/placeholder.png') }}" alt="img">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/placeholder.png') }}" alt="img">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/placeholder.png') }}" alt="img">
        </div>
    </div>
    <section class="content-section">
        <div class="content-left">
            <img src="{{ asset('images/homepage.png') }}" alt="Pak'e">
        </div>
        <div class="content-right">
            <p>
                Le Cucci sudah menjadi pilihan utama para profesional dan merek pakaian terkemuka, baik lokal maupun internasional. Dengan standar kualitas yang tinggi dan hasil yang konsisten, kami telah membangun kepercayaan dari klien-klien terbaik, termasuk merek pakaian terkenal yang mempercayakan perawatan produk mereka kepada kami.
            </p>
        </div>
    </section>
    <footer>
        <div class="footer-links">
            <a href="#contact">Contact Us </a>|
            <a href="#cookie-policy">Cookie Policy </a>|
            <a href="#privacy-policy">Privacy Policy </a>|
            <a href="#terms">Terms & Condition</a>
          </div>
          <div class="footer-contact">
                <div class="text-contact">
                <span>CONTACT</span>
                <br><span>Whatsapp: +62 877 1010 002</span></br>
                </div>
          </div>
          <div class="footer-social">
            <div class="social-items">
                <span>ON SOCIAL MEDIA</span>
                <div class="social-icons">
                <a href="#facebook" class="social-icon">
                    <i class="bi bi-facebook fs-5"></i>
                </a>
                <a href="#instagram" class="social-icon">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#whatsapp" class="social-icon">
                    <i class="bi bi-whatsapp"></i>
                </a>
                </div>
            </div>
          </div>
          <div class="footer-copyright">
            Copyright © 2010 Lé Cucci
          </div>
    </footer>
</body>

</html>
