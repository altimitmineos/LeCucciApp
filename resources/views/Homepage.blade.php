<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
            <img src="{{ asset('images/Logo1.png') }}" alt="Logo">
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
            <img src="{{ asset('images/kiri.png') }}" alt="img">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/tengah.png') }}" alt="img">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/kanan.png') }}" alt="img">
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/kiri.png') }}" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/tengah.png') }}"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/kanan.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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
