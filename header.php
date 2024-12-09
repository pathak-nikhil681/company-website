<?php
$base_url = "/technotwist";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TechnoTwist</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= $base_url ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= $base_url ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= $base_url ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= $base_url ?>/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a class="contact-link me-4">
                        <i class="fas fa-envelope me-2"></i>info@technotwist.in
                    </a>
                    <a class="contact-link me-0">
                        <i class="fas fa-phone-alt me-2"></i>+91 98286 92328
                    </a>
                </div>

            </div>
            <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
                        href="https://www.facebook.com/twistintechnology/"><i
                            class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
                        href="https://www.linkedin.com/company/technology-twist/"><i
                            class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2"
                        href="https://www.instagram.com/technotwistbhl/"><i
                            class="fab fa-instagram fw-normal text-secondary"></i></a>

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="contact-us.php" class="contact-link me-2">Help</a>
                    <small class="separator">/</small>
                    <a href="contact-us.php" class="contact-link mx-2">Support</a>
                    <small class="separator">/</small>
                    <a href="contact-us.php" class="contact-link ms-2">Contact</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-scroll shadow-0 border-bottom border-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= $base_url ?>/index.php">
                <img src="<?= $base_url ?>/img/technology_twist_logo.jpeg" alt="TechnoTwist Logo" style="height: 40px;">
            </a>
            <a class="navbar-brand" href="<?= $base_url ?>/index.php">
                <h2><span class="brand-color">Techno</span><span class="brand-color-white">Twist</span></h2>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <!-- Mega Menu Dropdown -->
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                E-Commerce Frameworks
                                            </p>
                                            <a href="<?= $base_url ?>/services/opencart.php"
                                                class="list-group-item list-group-item-action">Opencart
                                                Devlopment</a>
                                            <a href="<?= $base_url ?>/services/woo-commerce-development.php"
                                                class="list-group-item list-group-item-action">Woo Commerce
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/shopify-development.php"
                                                class="list-group-item list-group-item-action">Shopify
                                                Development</a>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Frontend Development
                                            </p>
                                            <a href="<?= $base_url ?>/services/html-development.php"
                                                class="list-group-item list-group-item-action">HTML
                                                Development</a>

                                            <a href="<?= $base_url ?>/services/react-js-development.php"
                                                class="list-group-item list-group-item-action">ReactJS
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/angular-js-development.php"
                                                class="list-group-item list-group-item-action">AngularJS
                                                Development</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Back-End Development
                                            </p>
                                            <a href="<?= $base_url ?>/services/laravel-development.php"
                                                class="list-group-item list-group-item-action">Laravel
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/nodeJs-development.php"
                                                class="list-group-item list-group-item-action">NodeJS
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/wordpress-development.php"
                                                class="list-group-item list-group-item-action">WordPress
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/codeigniter-development.php"
                                                class="list-group-item list-group-item-action">CodeIgniter
                                                Development</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Mobile app Development
                                            </p>
                                            <a href="<?= $base_url ?>/services/flutter-app-development.php"
                                                class="list-group-item list-group-item-action">Flutter App
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/native-ios-app-development.php"
                                                class="list-group-item list-group-item-action">IOS app
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/native-android-app-development.php"
                                                class="list-group-item list-group-item-action">Android App
                                                Development</a>
                                            <a href="<?= $base_url ?>/services/react-native-app-development.php"
                                                class="list-group-item list-group-item-action">React Native
                                                Development</a>

                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row (Newly Added) -->
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                UI/UX Designing
                                            </p>
                                            <a href="<?= $base_url ?>/services/mobile-app-design.php"
                                                class="list-group-item list-group-item-action">Mobile app design</a>
                                            <a href="<?= $base_url ?>/services/responsive-web-design.php"
                                                class="list-group-item list-group-item-action">Responsive Web design</a>
                                            <a href="<?= $base_url ?>/services/design-prototyping.php"
                                                class="list-group-item list-group-item-action">Design prototypinig</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                BPO & BPM Development
                                            </p>
                                            <a href="<?= $base_url ?>/services/data-entry-outsoursing-devlopment.php"
                                                class="list-group-item list-group-item-action">Data Entry
                                                Outsourcing</a>
                                            <a href="<?= $base_url ?>/services/process-automation-devlopment.php"
                                                class="list-group-item list-group-item-action">Process Automation</a>
                                            <a href="<?= $base_url ?>/services/workflow-management.php"
                                                class="list-group-item list-group-item-action">Workflow Management</a>
                                            <a href="<?= $base_url ?>/services/business-analytics.php"
                                                class="list-group-item list-group-item-action">Business Analytics</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                QA Testing & Support
                                            </p>
                                            <a href="<?= $base_url ?>/services/software-testing.php"
                                                class="list-group-item list-group-item-action">Software Testing</a>
                                            <a href="<?= $base_url ?>/services/support-and-maintenance.php"
                                                class="list-group-item list-group-item-action">Support & maintenance</a>
                                            <a href="<?= $base_url ?>/services/mobile-testing.php"
                                                class="list-group-item list-group-item-action">Mobile Testing</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Digital Marketing
                                            </p>
                                            <a href="<?= $base_url ?>/services/search-engine-optimization.php"
                                                class="list-group-item list-group-item-action">SEO</a>
                                            <a href="<?= $base_url ?>/services/social-media-optimization.php"
                                                class="list-group-item list-group-item-action">SMO</a>
                                            <a href="<?= $base_url ?>/services/content-marketing.php"
                                                class="list-group-item list-group-item-action">Content Marketing</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>/custom-ecommerce-marketplace.php">Marketplace Development</a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hire Devlopers
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Hire Java Script Developer
                                            </p>

                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-full-stack-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire full Stack Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-react-js-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire React JS Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-mern-stack-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire MERN Stack Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-mean-stack-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire MEAN Stack Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-node-js-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Node Js. Developer</a>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Hire Web Developer
                                            </p>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-php-developers.php"
                                                class="list-group-item list-group-item-action">Hire PHP
                                                Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-laravel-developers.php"
                                                class="list-group-item list-group-item-action">Hire Laravel
                                                Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-paython-devlopers.php"
                                                class="list-group-item list-group-item-action">Hire Paython
                                                Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-aspdot-net-developers.php"
                                                class="list-group-item list-group-item-action">Hire ASP. Net
                                                Developer</a>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                E-Commerce & CMS
                                            </p>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-wordpress-developer.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Wordpress Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-shopify-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Shopify Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-woocommerce-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire WooCommerce Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-opencart-devlopers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Opencart Developer</a>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Hire Mobile Developers
                                            </p>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-flutter-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Flutter Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-android-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire Android Developer</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-react-native-developers.php"
                                                class="list-group-item list-group-item-action">
                                                Hire React Native Developer</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                                Hire ERP & CRM Developer
                                            </p>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-sap-devlopers.php"
                                                class="list-group-item list-group-item-action">Hire SAP Devlopers</a>
                                            <a href="<?= $base_url ?>/hire_devlopers/hire-dedicated-salesforce-devlopers.php"
                                                class="list-group-item list-group-item-action">Hire Salesforce
                                                Devlopers</a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown1" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Work
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/portfolio.php">
                                    <i class="fas fa-briefcase"></i> Portfolio
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/case-studies.php">
                                    <i class="fas fa-file-alt"></i> Case Studies
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownCompany" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/about-us.php">
                                    <i class="fas fa-info-circle me-2"></i> About Us
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/careers.php">
                                    <i class="fas fa-briefcase me-2"></i> Careers
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/life-at-technotwist.php">
                                    <i class="fas fa-heart me-2"></i> Life of Technotwist
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $base_url ?>/meet-our-team.php">
                                    <i class="fas fa-users me-2"></i> Meet Our Team
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $base_url ?>/contact-us.php">
                            <button type="button" class="btn btn-danger ms-3">Contact Us</button>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->