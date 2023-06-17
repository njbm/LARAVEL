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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Your Startup</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <header class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to Your Startup</h1>
            <p class="lead">A brief description of your startup goes here.</p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

    <!-- Features section -->
    <section class="features py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Feature 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
                </div>
                <div class="col-md-4">
                    <h2>Feature 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
                </div>
                <div class="col-md-4">
                    <h2>Feature 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a dui id nisl vestibulum pellentesque. Aliquam erat volutpat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-action section -->
    <section class="call-to-action bg-light py-5">
        <div class="container text-center">
            <h2>Ready to get started?</h2>
            <p>Contact us now and start your journey with us.</p>
            <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>