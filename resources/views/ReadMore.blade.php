<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cucci Website</title>
    <link rel="stylesheet" href="{{ asset('css/stylesreadmore.css') }}">
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
    <div class="content">
    <div class="header1">
        <h1>TITLE</h1>
    </div>
    <div class="txt-before">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam ut nunc eget facilisis. Cras luctus ultricies eros, non semper turpis luctus in. Nulla cursus fermentum augue non pellentesque. Donec vitae magna quis elit aliquet convallis. Duis non magna neque. Duis nulla ex, tincidunt consectetur vestibulum ut, scelerisque a dolor. Etiam ultricies malesuada massa quis varius. Pellentesque placerat risus ac elementum lobortis. Sed posuere magna ut tortor ornare rhoncus. Nulla facilisi. Donec in tempor ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        <br>
        <br>
        Nunc accumsan sollicitudin cursus. Duis tincidunt rutrum efficitur. Vivamus fringilla elit vitae leo volutpat imperdiet. Cras cursus bibendum diam vel viverra. Aliquam elementum nunc sed ex porttitor, eget lobortis risus pretium. Sed blandit risus massa, id hendrerit mauris lacinia id. Sed nec leo leo. Pellentesque at est pellentesque, ornare libero imperdiet, molestie nibh. Vestibulum eu orci ac massa posuere posuere a maximus tellus. Integer in tortor laoreet, porttitor felis a, rhoncus quam. Cras sit amet faucibus neque, at luctus metus. Pellentesque accumsan nunc velit, congue pharetra sem laoreet eu. Sed vel feugiat felis. Quisque pretium neque arcu, nec luctus purus luctus ut. Curabitur id vulputate metus.</p>
    </div>
    <div class="placeholder">
        <img src="{{ asset('images/placeholder.png') }}" alt="placeholder" width="150">
    </div>
    <div class="txt-after">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam ut nunc eget facilisis. Cras luctus ultricies eros, non semper turpis luctus in. Nulla cursus fermentum augue non pellentesque. Donec vitae magna quis elit aliquet convallis. Duis non magna neque. Duis nulla ex, tincidunt consectetur vestibulum ut, scelerisque a dolor. Etiam ultricies malesuada massa quis varius. Pellentesque placerat risus ac elementum lobortis. Sed posuere magna ut tortor ornare rhoncus. Nulla facilisi. Donec in tempor ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        <br>
        <br>
        Nunc accumsan sollicitudin cursus. Duis tincidunt rutrumaefficitur. Vivamus fringilla elit vitae leo volutpat imperdiet. Cras cursus bibendum diam vel viverra. Aliquam elementum nunc sed ex porttitor, eget lobortis risus pretium. Sed blandit risus massa, id hendrerit mauris lacinia id. Sed nec leo leo. Pellentesque at est pellentesque, ornare libero imperdiet, molestie nibh. Vestibulum eu orci ac massa posuere posuere a maximus tellus. Integer in tortor laoreet, porttitor felis a, rhoncus quam. Cras sit amet faucibus neque, at luctus metus. Pellentesque accumsan nunc velit, congue pharetra sem laoreet eu. Sed vel feugiat felis. Quisque pretium neque arcu, nec luctus purus luctus ut. Curabitur id vulputate metus.
        </p>
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
