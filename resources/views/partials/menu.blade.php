<style>
    /* .navbar {
        padding: 1rem;
        background: linear-gradient(80deg,rgb(251, 251, 251),rgb(161, 16, 43));
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    } */
   
    .navbar {
    position: sticky;
    top: 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 1rem;
    z-index: 9999;
    background: rgba(0, 0, 0, 0.53); /*semi-transparent for blending*/
    backdrop-filter: blur(6px); /* optional: blur for glass effect */
}



    .navbar a,
    .navbar {
        color: white !important;
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
        /* white-space: nowrap; */
        font-size: 1.1rem;
        /* color: black; */
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .dropdown-item:hover {
        /* background-color: transparent !important; */
        background-color: white;
        color: black !important;
        border-radius: 25px !important;
        box-shadow: none !important;
    }

    .navbar-nav .nav-link:focus,
    .navbar-nav .dropdown-item:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #97182c !important;
        color: white !important;
        border-radius: 10px;
    }

    .dropdown-menu {
        background-color: rgba(255, 255, 255, 0.94) !important;
        border-radius: 8px !important;
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
        color: black !important;
        border-radius: 6px !important;
    }

    .dropdown-item:hover {
        background-color: rgb(159, 28, 51) !important;
        color: white !important;
        border-radius: 8px !important;
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
    }

    .navbar .btn {
        /* background-color: white; */
        color:rgb(0, 0, 0);
        font-weight: bold;
        border-radius: 30px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .navbar .btn:hover {
        background-color: #c43047;
        color: white;
    }
    

</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/College-Logo.png') }}" alt="Logo">
            <span>K.T.Patil College of Engineering and Technology</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}">Vision & Mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('leadership')}}">Meet Our Leadership </a></li>
                        <li><a class="dropdown-item" href="{{ route('Governing_members')}}">Governing Members</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="academicDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Academic
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="academicDropdown">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('courses')}}">Courses</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('ugprogram')}}">UG</a></li>
                                <li><a class="dropdown-item" href="{{ route('diploma')}}">Diploma</a></li>
                                <li><a class="dropdown-item" href="{{ route('pgprogram')}}">PG</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Departments</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('computer')}}">Computer</a></li>
                                <li><a class="dropdown-item" href="{{ route('eee')}}">Electrical & Electronics</a></li>
                                <li><a class="dropdown-item" href="#">Mechanical</a></li>
                                <li><a class="dropdown-item" href="{{ route('electronics') }}">Electronics & Telecommunication</a></li>
                                <li><a class="dropdown-item" href="{{route('civil')}}">Civil Engineering</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admission
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
                        <li><a class="dropdown-item" href="#">How to Apply</a></li>
                        <li><a class="dropdown-item" href="#">Eligibility</a></li>
                        <li><a class="dropdown-item" href="#">Fees</a></li>
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admission')}}">Admission</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Events & Notices
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                        <li><a class="dropdown-item" href="{{ route('notice')}}">Notices</a></li>
                        <li><a class="dropdown-item" href="#">Seminars</a></li>
                        <li><a class="dropdown-item" href="#">Fests</a></li>
                    </ul>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Feedbacks</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comittee')}}">Committes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('placements')}}">Placements & Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallary') }}">Gallery</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="btn ms-lg-3">Get in Touch</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdowns = document.querySelectorAll('.navbar .dropdown');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseover', function () {
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                instance.show();
            });

            dropdown.addEventListener('mouseleave', function () {
                const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
                const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                instance.hide();
            });
        });

        const submenus = document.querySelectorAll('.dropdown-submenu');

        submenus.forEach(function (submenu) {
            submenu.addEventListener('mouseover', function () {
                const dropdownMenu = submenu.querySelector('.dropdown-menu');
                if (dropdownMenu) dropdownMenu.classList.add('show');
            });

            submenu.addEventListener('mouseleave', function () {
                const dropdownMenu = submenu.querySelector('.dropdown-menu');
                if (dropdownMenu) dropdownMenu.classList.remove('show');
            });
        });
    });
</script>
