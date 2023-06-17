<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Startup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/contact">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/product">Product List</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/category">Product Categories </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/offer">Offer Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/cart">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Festible</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>

                </form>
                <ul></ul>
                <button class="btn btn-outline-success" type="submit"><a class="nav-link" href="http://127.0.0.1:8000/login">Log In</a></button>
                <button class="btn btn-outline-primary" type="submit"><a class="nav-link" href="http://127.0.0.1:8000/register">Register</a></button>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <header class="hero bg-primary text-white text-center py-5" style="margin-top: 50px;">
        @yield('header')
    </header>

    <!-- Features section -->
    <section class="features py-5">
        @yield('features')
    </section>

    <!-- Call-to-action section -->
    <section class="call-to-action bg-light py-5">
        <div class="container text-center">
            <h2>Ready to get started?</h2>
            <p>Contact us now and start your journey with us.</p>
            <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </section>

    <footer class="bg-dark text-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque.</p>
                </div>
                <div class="col-md-3">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Contact Us</h3>
                    <p>123 Street, City, Country</p>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1 234 5678</p>
                </div>
            </div>
        </div>
        <div class="text-center py-3 bg-secondary">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>