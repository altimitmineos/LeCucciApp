<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
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
                <li><a href="#" class="our_service">Our Service</a></li>
                <li><a href="#" class="contact_us">Contact Us</a></li>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
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
                <a href="#" class="read_more">>>Read More</a></li>
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
                <a href="#facebook" class="social-icon">🔵</a>
                <a href="#instagram" class="social-icon">🟣</a>
                <a href="#whatsapp" class="social-icon">🟢</a>
                </div>
            </div>
          </div>
          <div class="footer-copyright">
            Copyright © 2010 Lé Cucci
          </div>
    </footer>
</body>
</html>
