<!-- Custom Navbar CSS -->
<style>
    .navbar {
        color: white !important;
        position: fixed;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 1rem;
        z-index: 10000;
        background: rgba(0, 0, 0, 0.53);
        backdrop-filter: blur(6px);
        width: 100%;
    }

    .navbar a {
        color: white !important;
        text-decoration: none !important;
    }
    .dropdown-menu a {
        color: black !important;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        margin-right: 10px;
        width: 50px;
        height: 40px;
    }

    .navbar-brand span {
        font-weight: bold;
        font-size: 1.1rem;
        font-family: 'Trebuchet MS', sans-serif;
    }

    .navbar-nav .nav-link {
        position: relative;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link::after {
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0;
        height: 2px;
        background-color: white;
        transition: width 0.3s ease;
    }
    

    .navbar-nav .nav-link::after {
        display: none !important;
        width: 100%;
    }

   .navbar-nav .nav-link:hover,
    .navbar-nav .dropdown-item:hover {
        background-color: white;
        color: black !important;
        border-radius: 25px !important;
        box-shadow: none !important;
    }
    .navbar-nav .nav-link:focus,
    .navbar-nav .dropdown-item:focus {
        /* background-color: white !important; */
        /* color: black !important; */
        outline: none !important;
        box-shadow: none !important;
        border-radius: 25px !important;
        transition: background-color 0.3s ease, color 0.3s ease;

    }

     .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #97182c !important;
        color: white !important;
        border-radius: 10px;
    }
    .dropdown-menu {
        background-color: rgba(255, 255, 255, 0.94) !important;
        border-radius: 10px !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
    }

    .dropdown-item {
        color: black ;
        border-radius: 6px;
    }


    .navbar .dropdown-toggle::after {
        display: none;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .dropdown-submenu:hover > .dropdown-menu {
        opacity: 1;
        visibility: visible;
    }

    .navbar .btn {
        color: black;
        font-weight: bold;
        border-radius: 30px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .navbar .btn:hover {
        background-color: #c43047;
        color: white;
    }
</style>

<!-- Navbar Blade -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/College-Logo.png') }}" alt="Logo">
            <span>K.T.Patil College of Engineering and Technology</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- About -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}">Vision & Mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('leadership') }}">Meet Our Leadership</a></li>
                        <li><a class="dropdown-item" href="{{ route('Governing_members') }}">Governing Members</a></li>
                    </ul>
                </li>

                <!-- Academics -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="academicDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                    <ul class="dropdown-menu" aria-labelledby="academicDropdown">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('courses') }}">Courses</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('ugprogram') }}">UG</a></li>
                                <li><a class="dropdown-item" href="{{ route('diploma') }}">Diploma</a></li>
                                <li><a class="dropdown-item" href="{{ route('pgprogram') }}">PG</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('department') }}">Departments</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('computer') }}">Computer</a></li>
                                <li><a class="dropdown-item" href="{{ route('eee') }}">Electrical & Electronics</a></li>
                                <li><a class="dropdown-item" href="{{ route('mechanical') }}">Mechanical</a></li>
                                <li><a class="dropdown-item" href="{{ route('electronics') }}">Electronics & Telecommunication</a></li>
                                <li><a class="dropdown-item" href="{{ route('civil') }}">Civil Engineering</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Others -->
                <li class="nav-item"><a class="nav-link" href="{{ route('admission') }}">Admission</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Events & Notices</a>
                    <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                        <li><a class="dropdown-item" href="{{ route('notice') }}">Notices</a></li>
                        <li><a class="dropdown-item" href="#">Seminars</a></li>
                        <li><a class="dropdown-item" href="#">Fests</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('comittee') }}">Committees</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('placements') }}">Placements & Alumni</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallary') }}">Gallery</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Others</a>
                    <ul class="dropdown-menu" aria-labelledby="othersDropdown">
                        <li><a class="dropdown-item" href="{{ route('certificate') }}">Accreditation</a></li>
                        <li><a class="dropdown-item" href="#">Seminars</a></li>
                        <li><a class="dropdown-item" href="#">Fests</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contacts')}}" class="btn ms-lg-3">Get in Touch</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Dropdown submenu handling -->
<script>
    // Enable top-level dropdown on hover
    document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
      dropdown.addEventListener('mouseenter', function () {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = new bootstrap.Dropdown(toggle);
        menu.show();
      });

      dropdown.addEventListener('mouseleave', function () {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = new bootstrap.Dropdown(toggle);
        menu.hide();
      });
    });

    // Enable dropdown-submenu on hover
    document.querySelectorAll('.dropdown-submenu').forEach(function (submenu) {
      submenu.addEventListener('mouseenter', function () {
        const submenuToggle = submenu.querySelector('.dropdown-toggle');
        const submenuMenu = submenu.querySelector('.dropdown-menu');

        // Show the submenu
        if (submenuMenu) {
          submenuMenu.classList.add('show');
          submenuMenu.style.opacity = '1';
          submenuMenu.style.visibility = 'visible';
        }
      });

      submenu.addEventListener('mouseleave', function () {
        const submenuMenu = submenu.querySelector('.dropdown-menu');

        // Hide the submenu
        if (submenuMenu) {
          submenuMenu.classList.remove('show');
          submenuMenu.style.opacity = '0';
          submenuMenu.style.visibility = 'hidden';
        }
      });
    });
  </script>
