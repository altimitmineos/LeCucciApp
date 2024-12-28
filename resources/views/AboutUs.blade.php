<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/stylesabt.css') }}">
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
                <li><a href="{{ route('ContactUs')  }}" class="contact_us">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div class="header-text">
        <h1>About Lé Cucci</h1>
    </div>
    <section class="content-section">
        <div class="content-left">
            <img src="{{ asset('images/placeholder.png') }}" alt="Pak'e">
        </div>
        <div class="content-right">
            <p>
                Le Cucci adalah layanan Laundry & Dry Clean yang berdedikasi untuk memberikan perawatan terbaik bagi pakaian Anda, dengan fokus pada kualitas, ketelitian, dan inovasi. Kami percaya bahwa setiap pakaian memiliki nilai lebih, dan tugas kami adalah menjaga agar pakaian Anda memiliki usia pakai yang lebih panjang, tetap terawat, dan terlihat seperti baru.
            </p>
        </div>
    </section>
    <div class="what-we">
        <div class="container-left-what">
            <div class="what-text-header">
                <h1>What we do differently</h1>
            </div>
            <div class="what-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="{{ route('ReadMore') }}" class="read_more">>>Read More</a></li>
            </div>
        </div>
        <div class="container-right-what">
            <img src="{{ asset('images/placeholder.png') }}" alt="Pak'e">
        </div>
    </div>
    <div class="what-use">
        <div class="use-container">
            <div class="use-text-header">
                <h1>What we use</h1>
            </div>
            <div class="use-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div>
        <div class="container-what">
            <div class="image-1">
                <img src="{{ asset('images/placeholder.png') }}" alt="img">
            </div>
            <div class="image-2">
                <img src="{{ asset('images/placeholder.png') }}" alt="img">
            </div>
            <div class="image-3">
                <img src="{{ asset('images/placeholder.png') }}" alt="img">
            </div>
            <div class="image-4">
                <img src="{{ asset('images/placeholder.png') }}" alt="img">
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/placeholder.png') }}" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/placeholder.png') }}"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/placeholder.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/placeholder.png') }}" class="d-block w-100" alt="...">
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
    </div>
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
