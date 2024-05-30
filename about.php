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
    <title>About Us</title>
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
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Pricing</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/beginning.jpeg" class="img-fluid" alt="Contact">
                <h1 class="text-center mt-3">How it began</h1>
                <p class="text-center">It was the eighties. Physical activity was almost synonymous with self-indulgence.
                    In a small garage, the seed of change was planted: learn how it grew to become the global Wellness Solution Provider.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/technogym_village_hero.jpeg" class="img-fluid" alt="Contact">
                <h1 class="text-center mt-3">The BioStrength Village</h1>
                <p class="text-center">Our headquarters is a hotbed of innovation created according to environmental principles.
                    Most importantly, it’s the place where we live and breathe Wellness everyday.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Movement, in numbers</h2>
                <p>If 50 million people in the world train on our equipment every day, it’s not just a matter of chance. We are the global experts of exercise, be it for fitness, health or sports.
                    Reaching over 100 countries in the world, we brought wellness through movement to thousands of locations around the world.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="text-center">Who is BioStrength?</h3>
                <p>BioStrength is a leading company in the field of commercial and home gym equipment. Known all over the world as "The Wellness Company", its goal is to help develop the philosophy of fitness and well-being and turn it into a true lifestyle. To do so, BioStrength provides people with gym equipment of the highest quality, together with other services like content and programs.
                    Biostrength’s outstanding fitness products are equally chosen by people for their home gym equipment and by organizations or sports and medical centers due to their unmatched quality and reliability.
                    This is partly a direct result of the decades of experience gained as the official supplier to nine Olympic and Paralympic Games, concrete evidence that anyone choosing BioStrength is choosing to train on equipment able to meet professional athletes’ needs, but is still designed for all types of users, from beginners to professionals.
                </p>
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

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>