<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link rel="stylesheet" href="{{ asset('css/stylesourservices.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
    <div class="placeholder-gallery">
        <div class="gallery-text">
            <h1>OUR SERVICES</h1>
        </div>
        <div class="intro-text">
            <p>Le Cucci menawarkan layanan laundry, dry cleaning, dan pembersihan karpet, sepatu, tas, serta bed cover dengan kualitas tinggi, dilengkapi layanan express dan antar-jemput gratis. </p>
        </div>
    </div>
    <div class="container">
        <div class="container-left">
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <div class="wet-cleaning">
                        <h1>Laundry & Wet Cleaning</h1>
                        <div class="line"></div>
                        <p>sikit sikit</p>
                    </div>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Express Service</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Carpet Cleaning</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Shoes</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
        </div>
        <div class="container-right">
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Dry Clean</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Delivery Service</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Bag Cleaning</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
            </div>
            <div class="container-b-a">
                <div class="container-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Pak'e">
                </div>
                <div class="right">
                    <h1>Bed Cover</h1>
                    <div class="line"></div>
                    <p>sikit sikit</p>
                </div>
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
