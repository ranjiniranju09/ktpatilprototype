<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.T.Patil College of Engineering and Technology</title>

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">--}}

    <!-- PDF.js (if needed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
</head>

<body style="overflow-x: hidden; overflow-y: auto;">
    <header>
        @include('partials.menu')
    </header>

    <div class="main-content">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Bootstrap 5.3.3 JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Optional: jQuery only if used in your custom scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->

    <!-- Custom Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hamburger menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const navUl = document.querySelector('.main-navbar ul');
            if (menuToggle && navUl) {
                menuToggle.addEventListener('click', function() {
                    navUl.classList.toggle('show');
                });
            }

            // Scroll effect for main-navbar
            const mainNavbar = document.querySelector('.main-navbar');
            function handleNavbarBg() {
                if (window.scrollY > 0) {
                    mainNavbar.classList.add('scrolled');
                } else {
                    mainNavbar.classList.remove('scrolled');
                }
            }
            if (mainNavbar) {
                window.addEventListener('scroll', handleNavbarBg);
                handleNavbarBg(); // On page load
            }
        });
    </script>
</body>
</html>
