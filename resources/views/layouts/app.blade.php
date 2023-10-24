<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tag
  -->
  <title>A+</title>
  <meta name="title" content="A+">
  <meta name="description" content="This is an education website made by Tasmim.com">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('./assets/images/logofav.png' )}}" type="image/svg+xml">

  <!--
    - custom bootstrap link
  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--
    - custom css link
  -->
  @yield('css')
  <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">
  <!--
    - Icon font awesome
  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="{{ asset('./assets/images/hero-bg.svg') }}">
  <link rel="preload" as="image" href="{{ asset('./assets/images/hero-banner-1.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('./assets/images/hero-banner-2.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('./assets/images/hero-shape-1.svg') }}">
  <link rel="preload" as="image" href="{{ asset('./assets/images/hero-shape-2.png') }}">
@livewireStyles
</head>

<body id="top" style="padding-top:100px;">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">


      <a href="/" class="logo">
        <img
          src="{{ asset('./assets/images/logonav.png') }}"
          width="162"
          height="50"
          alt="A+ logo"
        />
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="/" class="logo">
            <img
              src="{{ asset('./assets/images/logo.png') }}"
              width="162"
              height="50"
              alt="A+ logo"
            />
          </a>

          <button
            class="nav-close-btn"
            aria-label="close menu"
            data-nav-toggler
          >
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="/" class="navbar-link" data->Home</a>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              myLearn
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('desktop') }}">My desktop</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('mybooks') }}">My books</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('myexbooks') }}"
                  >My exercise books</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('homework') }}">Homework</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="login.html">My licences</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="3d_encyclopaedias.html"
                  >Purchase new book</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="login.html"
                  >Activate new code</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('fav') }}">Favourite</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('uploads') }}">My uploads</a>
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Media library
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('all3d') }}"
                  >interactive content</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('all3d') }}">3D scenes</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('alltools') }}"
                  >Tools and games</a
                >
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('allquiz') }}">Quiz</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="login.html"
                  >Picture dictionary</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('3dency') }}"
                  >3D encyclopaedia</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('allvideos') }}">Videos</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('allimages') }}">Images</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="audios.html">Audios</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('alldigital') }}">
                  Learning materials
                </a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('alldigital') }}"
                  >Digital lessons</a
                >
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('3dency') }}">Books</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('myexbooks') }}"
                  >Exercise books</a
                >
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              3D scenes
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('all3d') }}"
                  >3D scenes</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('bio3d') }}">Biology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('geo3d') }}">Geography</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('phy3d') }}">Physics</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('che3d') }}">Chemistry</a>
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('math3d') }}">Maths</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('teck3d') }}">Technology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('his3d') }}">History</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('visual3d') }}">Visual Arts</a>
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Digital lessons
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('alldigital') }}">
                  Digital lessons
                </a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('engdigital') }}">English</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('biodigital') }}">Biology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('geodigital') }}">Geography</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('phydigital') }}">Physics</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('chedigital') }}">Chemistry</a>
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('mathdigital') }}">Maths</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('techdigital') }}">Technology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('hisdigital') }}">History</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('visualdigital') }}">Visual Arts</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('litdigital') }}">Literature</a>
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Tools
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('alltools') }}">
                  Tools and games
                </a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('biotools') }}">Biology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('geotools') }}">Geography</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('phytools') }}">Physics</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('chetools') }}">Chemistry</a>
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('mathtools') }}">Maths</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('histools') }}">History</a>
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('musictools') }}">Music</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('langtools') }}">Languages</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('generaltools') }}">General</a>
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Videos
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('allvideos') }}">
                  Videos
                </a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('biovideos') }}">Biology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('geovideos') }}">Geography</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('phyvideos') }}">Physics</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('chevideos') }}">Chemistry</a>
              </li>
              <li><a class="dropdown-item navbar-link" href="{{ route('mathvideos') }}">Maths</a></li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('techvideos') }}">Technology</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('hisvideos') }}">History</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('visualvideos') }}">Visual Arts</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('tutvideos') }}">Tutorials</a>
              </li>
            </ul>
          </li>

          <li class="dropdown navbar-item">
            <a
              class="dropdown-toggle navbar-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Products
            </a>
            <ul class="dropdown-menu drop">
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('products') }}">All Products</a>
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('products') }}#book"
                  >A+ Book</a
                >
              </li>
              <li>
                <a class="dropdown-item navbar-link" href="{{ route('products') }}#web"
                  >A+ WEB</a
                >
              </li>
            </ul>
          </li>
          <li class="dropdown navbar-item">
            <a
              class="navbar-link"
              href="{{ route('shop') }}"
              role="button"
              aria-expanded="false"
            >
              Shop
            </a>

          </li>
          </li>

          </li>

        </ul>
      </nav>

      <div class="header-actions">
        <button
          class="header-action-btn"
          aria-label="toggle search"
          title="Search"
        >
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="login.html" class="abtn has-before">
          <span class="span">Log In Now</span>

          <ion-icon
            name="arrow-forward-outline"
            aria-hidden="true"
          ></ion-icon>
        </a>

        <button
          class="header-action-btn"
          aria-label="open menu"
          data-nav-toggler
        >
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>



  {{$slot}}


  <!--
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="/" class="logo">
            <img src="{{ asset('./assets/images/logo.png') }}" width="162" height="50" alt="">
          </a>

          <!-- <p class="footer-brand-text">
            Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
          </p> -->

          <div class="wrapper">
            <span class="span">Address:</span>

            <address class="address">49A maraghi street</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+01110487092" class="footer-link">01110487092</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@tasmim.com" class="footer-link">info@tasmim.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="#about" class="footer-link">Educational software</a>
          </li>

          <li>
            <a href="#courses" class="footer-link">Pricing</a>
          </li>

          <li>
            <a href="shop.html" class="footer-link">shop</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="images.html" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="register.html" class="footer-link">Registration</a>
          </li>

          <li>
            <a href="login.html" class="footer-link">Sign In</a>
          </li>

          <li>
            <a href="3d.html" class="footer-link">3D scenes</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="abtn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2022 All Rights Reserved by <a href="https://eltasmem.com/" class="copyright-link">tasmim.com</a>
        </p>

      </div>
    </div>

  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="{{ asset('./assets/js/script.js') }}" defer></script>

  <!--
    - ionicon link
  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  @yield('js')
  @livewireScripts
</body>

</html>
