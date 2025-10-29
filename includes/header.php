<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Denstista -</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="language" content="English" />
    <meta name="title" content="The Owlish Mind" />
    <meta name="url" content="https://owlishmind.com" />
    <meta name="identifier-URL" content="https://owlishmind.com" />
    <meta name="description"
        content="Join group therapy at The Owlish Mind to heal from social anxiety, grief, & stress. Build resilience in Maharashtra. Book now!">
    <meta name="keywords"
        content="remediation services, cognitive training, social skills, learning challenges, The Owlish Mind, Southern Maharashtra, child therapy">
    <meta name="author" content="The Owlish Mind" />

    <!-- Favicon -->
    <link href="/theowlishmind/assets/images/Owlishmind-fav.png" rel="icon" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/animate.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/magnific-popup.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/aos.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/ionicons.min.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/jquery.timepicker.css" />

    <link rel="stylesheet" href="/theowlishmind/assets/css/flaticon.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/icomoon.css" />
    <link rel="stylesheet" href="/theowlishmind/assets/css/style.css" />
</head>

<body>
    <div class="py-md-5 py-4 border-bottom">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                    <a class="navbar-brand" href="/theowlishmind/index">
                        <img src="/theowlishmind/assets/images/owlish-mind_logo.png" alt="The Owlish Mind Logo"
                            height="70" />
                    </a>
                </div>
                <div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                    <div class="icon d-flex justify-content-center align-items-center order-md-last">
                        <span class="icon-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-0 pl-3 text">
                        <p class="con">
                            <span>Free Call</span> <span>+91 7385507338</span>
                        </p>
                        <p class="con">
                            T-2, Third floor, S square, Regular Corner complex, 100 ft circle, Kolhapur Rd, Sangli,
                            Maharashtra 416416
                        </p>
                    </div>
                </div>
                <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr">
                            <span>Open Hours</span>
                        </p>
                        <p class="time">
                            <span>Mon - Sat:</span> <span>10:00am - 6:00pm</span> Sun: Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item <?php echo ($current_page === 'index.php') ? 'active' : ''; ?>">
                        <a href="/theowlishmind/index" class="nav-link pl-0">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page === 'about.php') ? 'active' : ''; ?>">
                        <a href="/theowlishmind/pages/about" class="nav-link">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="doctor" class="nav-link">Doctor</a>
                    </li> -->
                    <li class="nav-item <?php echo ($current_page === 'services.php') ? 'active' : ''; ?>">
                        <a href="/theowlishmind/pages/services" class="nav-link">Services</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="pricing" class="nav-link">Pricing</a>
                    </li> -->
                    <li class="nav-item <?php echo ($current_page === 'blog.php') ? 'active' : ''; ?>">
                        <a href="/theowlishmind/pages/blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item <?php echo ($current_page === 'contact.php') ? 'active' : ''; ?>">
                        <a href="/theowlishmind/pages/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->