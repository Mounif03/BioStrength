<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <title>BioStrength</title>
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

    <div style="background-color: black;">
        <div class="header-section">
            <h1>Stop guessing, start precision training</h1>
            <p>Most people don't know how to train strength properly. Common strength training mistakes, such as wrong workloads, range of motion, reps, tempo and rest time, could delay your progress and set you up for injury.</p>
        </div>
        <video src="vid/StrengthVideo.mp4" class="object-fit-fill" style="width: 100%;" autoplay loop></video>
    </div>
    <br><br>

    <div class="check" style="margin-bottom: 15px; text-align: center;">
        <h2>Goal Programs</h2>
        <p>Choose from Tone, Power, Hypertrophy, and Strong, then Biostrength’s AI technology will design a personalized program that guides you as you progress.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom: 75px;">
        <div class="col">
            <div class="card h-100">
                <img src="img/strong.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Build your muscles</h5>
                    <p class="card-text">Add muscle mass while sculpting your body.
                        This program adds extra load to the
                        eccentric phase of movements, when
                        muscles are lengthening, to promote the
                        breakdown of muscle fiber for added mass.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/build.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Become stronger
                    </h5>
                    <p class="card-text">Push your muscles to the max. With this
                        program's use of viscous resistance, the
                        faster you push, the more challenging the
                        resistance becomes.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/tone.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tone your entire body
                    </h5>
                    <p class="card-text">Get more muscle tone with less strain. The
                        Tone program uses elastic resistance with a
                        gradual workload increase to improve
                        muscle tone throughout the entire range of
                        movement.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="check" style="margin-bottom: 15px; text-align: center;">
        <h2>Browse the line</h2>
        <a href="pricing.php" class="btn btn-md btn-outline-primary ms-2">Check Pricing</a>
    </div>

    <div class="card-group">
        <div class="card">
            <img src="img/shoulder_press.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Shoulder Press</h5>
                <p class="card-text">This machine focuses on the deltoid muscles in the shoulders.
                    It involves pushing the handles upward against resistance, mimicking a vertical press motion.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/chest_press.jpeg" class="card-img-top" alt="Chest Press">
            <div class="card-body">
                <h5 class="card-title">Chest Press</h5>
                <p class="card-text">This machine targets the chest muscles (pectoralis major and minor), deltoids, and triceps.
                    It involves pushing the handles forward against resistance to simulate a bench press motion.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/rear_fly_n.jpg" class="card-img-top" alt="Reverse Pec Dec Fly">
            <div class="card-body">
                <h5 class="card-title">Reverse Pec Dec Fly</h5>
                <p class="card-text">Also known as the rear deltoid machine, it targets the rear deltoid muscles.
                    Users sit facing the machine and pull the handles backward, squeezing the shoulder blades together.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/leg_press.jpeg" class="card-img-top" alt="Leg Press">
            <div class="card-body">
                <h5 class="card-title">Leg Press</h5>
                <p class="card-text">This machine primarily targets the quadriceps, hamstrings, and glutes.
                    It involves pushing a weighted platform away from the body using the legs while seated.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/leg_curl_n.jpg" class="card-img-top" alt="Seated Leg Curl">
            <div class="card-body">
                <h5 class="card-title">Seated Leg Curl</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                    This machine isolates the hamstrings. Users typically sit up straight and curl their legs against resistance by bending at the knees</p>
            </div>
        </div>
        <div class="card">
            <img src="img/lower_back.jpeg" class="card-img-top" alt="Lower Back Extension">
            <div class="card-body">
                <h5 class="card-title">Lower Back Extension</h5>
                <p class="card-text">Also called the back extension machine, it strengthens the lower back muscles (erector spinae).
                    Users lean forward from a seated position against resistance, extending the spine.</p>
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

    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>