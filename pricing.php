<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pricing</title>
    <style>
        body {
            padding-top: 56px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo-removebg-preview.png" style="width:30%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php if (isset($_SESSION["username"])) : ?>
                        <li class="nav-item">
                            <a href="php/logout.php" class="btn btn-md btn-outline-success  ms-2">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-md btn-outline-success  ms-2">Login</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button" aria-controls="offcanvasCart">
                            <i class="bi bi-cart"></i> <span id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contact-header">
        <img src="img/strength_listing-hero.jpg" alt="Pricing">
        <h1>Pricing</h1>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Shoulder Press</h5>
                        <img src="img/shoulder_press.jpeg" class="card-img-top" alt="Shoulder Press"><br><br>
                        <h5>$9500</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Shoulder Press" data-price="9500" data-image="img/shoulder_press.jpeg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Chest Press</h5>
                        <img src="img/chest_press.jpeg" class="card-img-top" alt="Chest Press"><br><br>
                        <h5>$9700</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Chest Press" data-price="9700" data-image="img/chest_press.jpeg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reverse Pec Dec Fly</h5>
                        <img src="img/rear_fly_n.jpg" class="card-img-top" alt="Reverse Pec Dec Fly"><br><br>
                        <h5>$9200</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Reverse Pec Dec Fly" data-price="9200" data-image="img/rear_fly_n.jpg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Leg Press</h5>
                        <img src="img/leg_press.jpeg" class="card-img-top" alt="Leg Press"><br><br>
                        <h5>$9750</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Leg Press" data-price="9750" data-image="img/leg_press.jpeg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Seated Leg Curl</h5>
                        <img src="img/leg_curl_n.jpg" class="card-img-top" alt="Seated Leg Curl"><br><br>
                        <h5>$9400</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Seated Leg Curl" data-price="9400" data-image="img/leg_curl_n.jpg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lower Back Extension</h5>
                        <img src="img/lower_back.jpeg" class="card-img-top" alt="Lower Back Extension"><br><br>
                        <h5>$9100</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-primary add-to-cart" data-title="Lower Back Extension" data-price="9100" data-image="img/lower_back.jpeg"><i class="bi bi-cart-plus"></i> Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCartLabel">Shopping Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group" id="cart-items">

            </ul>
            <div class="mt-3">
                <h5>Total: $<span id="cart-total">0</span></h5>
                <button type="button" class="btn btn-primary w-100">Checkout</button>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">About Us</h5>
                    <p>
                        BioStrength is a leading provider in the field of commercial and home gym equipment, known for our innovative and high-quality products.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="pricing.php" class="text-white text-decoration-none">Pricing</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">420th Dahye Avenue, Beirut, Lebanon</li>
                        <li class="mb-2">Phone: +961 76 644 046</li>
                        <li class="mb-2">Email: info@BioStrength.com</li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none"><i class="bi bi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark">
            © 2024 BioStrength. All Rights Reserved.
        </div>
    </footer>

    <script src="js/cart.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>