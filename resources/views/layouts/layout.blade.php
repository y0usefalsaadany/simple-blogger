<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Important Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Our Title Page -->
        <title> Article Bloger </title>
        <!-- Our Icon Page -->
        <link rel="icon" href="./images/external-article.png">
        <!-- CDN Links -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <style>
        .search{
            padding: 8px;
            border: none;
            border-radius: 6px;
            outline: none;
            background: none;
            box-shadow: var(--box-shadow);
            color: var(--main-color);
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <body>
        <!-- Start Navbar Section -->
        <section class="nav">
            <nav class="container">
                <div class="logo">
                    <h1> Article  </h1>
                </div>
                <form action="/find" method="get">
                    @csrf
                    <input class="search" type="search" name="search" placeholder="Article Title" required>
                </form>
                <ul class="links">
                    <li>
                        <a href="/" class="active"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="/add-article"> <i class="fas fa-project-diagram"></i> Add Article </a>
                    </li>
                </ul>
            </nav>
        </section>
@yield('content')
<!-- Start Footer -->
<footer>
    <h3>Created By Mahmoud Saber</h3>
    <div class="social">
        <a href="https://www.linkedin.com/in/mahmoud-saber-49a483214/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://github.com/Rogar-IQ" target="_blank"><i class="fab fa-github-alt"></i></a>
        <a href="https://www.facebook.com/RogarIQ147" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/Mahmoud46267002" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</footer> 
<!-- End Footer -->

<!-- Main Script -->
<script src="js/jQuery.3.5.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>