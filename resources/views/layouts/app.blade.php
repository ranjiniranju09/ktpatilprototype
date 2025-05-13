<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> K.T.Patil College of Engineering and Technology</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your custom CSS -->


    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body style="overflow-x: hidden; overflow-y: auto;">
    <header >
        @include('partials.menu')
    </header>
</body>
    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hamburger menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const navUl = document.querySelector('.main-navbar ul');
            menuToggle.addEventListener('click', function() {
                navUl.classList.toggle('show');
            });

            // Scroll effect for main-navbar
            const mainNavbar = document.querySelector('.main-navbar');
            function handleNavbarBg() {
                if (window.scrollY > 0) {
                    mainNavbar.classList.add('scrolled');
                } else {
                    mainNavbar.classList.remove('scrolled');
                }
            }
            window.addEventListener('scroll', handleNavbarBg);
            handleNavbarBg(); // Run on page load
        });
    </script>

</html>
