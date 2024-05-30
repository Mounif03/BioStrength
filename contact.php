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
    <title>Contact Us</title>
    <style>
        body,
        html {
            overflow-x: hidden;
        }

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
                        <a class="nav-link" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item">
                            <a href="php/logout.php" class="btn btn-md btn-outline-success ms-2">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-md btn-outline-success ms-2">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contact-header">
        <img src="img/technogym_village_hero.jpeg" alt="Contact">
        <h1>Contact</h1>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Get in Touch</h5>
                        <p class="card-text">
                            Address: 420th Dahye Avenue, Beirut, Lebanon<br>
                            Phone: +961 76 644 046<br>
                            Email: info@BioStrength.com
                        </p>
                        <form action="php/process_contact.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="3" name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="contact">Send</button>
                        </form>
                    </div>
                </div>
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