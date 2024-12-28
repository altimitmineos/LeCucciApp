<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link rel="stylesheet" href="{{ asset('css/stylescontactus.css') }}">
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
                <li><a href="{{ route('ContactUs')  }}" class="contact_us">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div class="placeholder-gallery">
        <div class="gallery-text">
            <h1>CONTACT US</h1>
        </div>
        <div class="contact-info">
            <p class="contact-heading">
                Do you have any questions? Or need assistance? Contact us. We will help you with your inquiry.
            </p>
            <div class="info-row">
                <span class="label">Phone/Whatsapp:</span>
                <span class="value">+62 877101002</span>
            </div>
            <div class="info-row">
                <span class="label">Email:</span>
                <span class="value">info@lecucci.com</span>
            </div>
            <div class="info-row">
                <span class="label">Address:</span>
                <span class="value">
                    KOMP MPR RI - Jl Anggrek No C 88 Cilandak Barat, Jakarta, Indonesia 12430
                </span>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div id="popup" class="popup">
        <div class="popup-content">
            <p>{{ session('success') }}</p>
            <button id="closePopup">OK</button>
        </div>
    </div>
    @endif
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="email">Email (Optional)</label>
        <input type="email" id="email" name="email">

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
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
