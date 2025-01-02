<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Joe</title>
    <link rel="shortcut icon" href="images/cj-logo-sq.png" type="image/x-icon">
    <link href="./crypto-css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./crypto-css/crypto.css" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/vendor/aos/aos.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        
        .offer-sub-button {
            position: absolute;
            left:28%;
            bottom:-6%;
        }
        @media(max-width:767px){
            .offer-sub-button {
                position: absolute;
                left:20%;
                bottom:-4%;
            }
         }
        /* Basic styling for the plans container */
        .plans-container {
            display: flex;
            justify-content: space-around;
            /* Space around the plans */
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
            gap: 20px;
            /* Space between the plans */
        }

        /* Styling for each plan */
        .plan1,
        .plan2 {
            flex: 1;
            /* Allows the plans to grow and shrink as needed */
            min-width: 500px;
            /* Ensures a minimum width for the plans */
            max-width: 100%;
            /* Prevents plans from exceeding the container width */
            box-sizing: border-box;
            /* Includes padding and border in the element's total width and height */
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .plans-container {
                flex-direction: column;
            }
        }

        .modal-header {
            /* background-color: #bb5cea;  */
            background-image: linear-gradient(90deg, #c766ef, #7928d2 51.04%, #2b0c52);
            color: #fff;
        }

        .modal-footer {
            border-top: 1px solid #e9ecef;
        }

        .btn-primary {
            /* background-color: #bb5cea; */
            /* border-color: #bb5cea; */
            background-image: linear-gradient(90deg, #c766ef, #7928d2 51.04%, #2b0c52);

        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

        .form-control {
            border-radius: .375rem;
        }

        .form-label {
            font-weight: bold;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container-fluid  sticky-nav">
        <header class="d-flex flex-wrap align-items-center justify-content-between py-2 container">
            <a href="#home"
                class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
                <img src="./images/cj-logo.png" style="height: 100px; width: 200px;" />
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-item">
                <li><a href="#" class="nav-link px-2 link-secondary list-items-header">Home</a></li>
                <li><a href="#about" class="nav-link px-2 link-dark list-items-header">About</a></li>
                <li><a href="#feature" class="nav-link px-2 link-dark list-items-header">Features</a></li>
                <li><a href="#pricing" class="nav-link px-2 link-dark list-items-header">Pricing</a></li>
                <li><a href="#faqs" class="nav-link px-2 link-dark list-items-header">FAQs</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a type="button" class="btn btn-primary me-2 subscribe-btn" href="#pricing">Join for Free</a>
                <button type="button" class="btn brn-primary login-btn"
                    style="background: #f7f8fa; border: 1px solid #eceff3; border-radius: 5px;">Login</button>
                <button class="btn off-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <img src="images/list.svg" alt="">
                </button>

                <div class="offcanvas offcanvas-end custom-off" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header pt-3">
                        <a href="/"
                            class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none ">
                            <img src="./images/cj-logo-sq.png" style="height: 75px !important; width: 75px !important; border-radius:50% !important;" />
                        </a>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="row g-2">
                            <div class="col-6"><button class="btn off-login-btn w-100">Login</button></div>
                            <div class="col-6"><a class="btn btn-primary w-100 text-white" data-bs-dismiss="offcanvas" aria-label="Close" href="#pricing">Join for Free</a></div>
                        </div>
                        <div class="row g-2">
                            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-item d-block pt-2 w-100" style="text-align: left;">
                                <li class="py-1"><a href="#" class="nav-link px-0 link-secondary list-items-header" data-bs-dismiss="offcanvas" aria-label="Close">Home</a></li>
                                <li class="py-1"><a href="#about" class="nav-link px-0 link-dark list-items-header" data-bs-dismiss="offcanvas" aria-label="Close">About</a></li>
                                <li class="py-1"><a href="#feature" class="nav-link px-0 link-dark list-items-header" data-bs-dismiss="offcanvas" aria-label="Close">Features</a></li>
                                <li class="py-1"><a href="#pricing" class="nav-link px-0 link-dark list-items-header" data-bs-dismiss="offcanvas" aria-label="Close">Pricing</a></li>
                                <li class="py-1"><a href="#faqs" class="nav-link px-0 link-dark list-items-header" data-bs-dismiss="offcanvas" aria-label="Close">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <section id="home" style="padding: 160px  0px 0px;" class="bg-white">
        <div class="banner-text" data-aos="fade-right" data-aos-delay="500">
            <div class="container">
                <div class="w-100 h-100">
                    <div class="banner-content">
                        <h1>Crypto Made Clear, <br>Success Made Simple!</h1>
                        <span class="text-capitalize">
                            dedicated to making cryptocurrency investing easy, accessible, and profitable for everyone.
                            Whether you're a complete beginner or someone looking to expand your knowledge, CryptoJoe is
                            designed to guide you through every step of your crypto journey.
                        </span>
                        <a type="button" class="btn btn-primary text-white" href="#pricing">Start For Free Today</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image-bg">
            <div class="background-layer-banner w-100 h-100" style="position: absolute; z-index : 1; left:0;"></div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Join us for Free</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" action="?" method="post">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input name="last_name" type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input name="phone" type="tel" class="form-control" id="phone" required>
                            <input type="hidden" name="join_free" value="1" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="contactForm" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container-wrapper">

        <section class="container-fluid after-hero-div">
            <div class="container" data-aos="fade-left" data-aos-delay="500">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/img.svg" alt="DP">
                        <span class="mx-2 small-text-wrapper" style="color: #fff;">Trusted by 500+ successful investors</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="container-fluid" id="about" style="padding: 140px 0px;">
            <div class="container">
                <div class="text-center pb-4">
                    <h2 class="invest-heading"  data-aos="fade-up"> Invest to Learn </h2>
                </div>
                <div class="image-responsive">
                    <img src="images/horizontal-line.svg" alt="horizontal-line" style="width: 100%;"  data-aos="fade-left"
                        class="horizontal-line">
                    <div class="row pt-4">
                        <div class="col-md-4">
                            <p class="invest-paragraph"  data-aos="fade-up">
                                Our experts commit to quality market research across 1,000’s of crypto assets
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="invest-paragraph" data-aos="fade-up">
                                We curate the trades were going to execute and quantify the level of risk
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="invest-paragraph" data-aos="fade-up">
                                We share all the information you need to replicate our success
                            </p>
                        </div>
                    </div>
                </div>
                <div class="image-resposive2">
                    <div class="item">
                        <img src="images/1.svg" alt=""  data-aos="fade-up">
                        <div class="vcontent"  data-aos="fade-right">
                            Our experts commit to quality market research across 1,000’s of crypto assets
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/2.svg" alt="" data-aos="fade-up">
                        <div class="vcontent"  data-aos="fade-right">
                            We curate the trades were going to execute and quantify the level of risk
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/3.svg" alt="" data-aos="fade-up">
                        <div class="vcontent3"  data-aos="fade-right">
                            We share all the information you need to replicate our success
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="container-fluid services section" style="padding-top: 6rem" id="about">
            <div class="container" style="padding: 0px 10px 40px;">
                <h2 class="explore-heading mb-4" data-aos="fade-left">How it works</h2>
                <div class="row" style="padding-top: 50px;">
                    <div class="container">
                        <div class="row gy-4">

                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-item item-indigo position-relative">
                                    <i class="bi bi-calendar4-week icon"></i>
                                    <h3>Education</h3>
                                    <p>We take our premium research and transform it into bite-sized, actionable education videos and guides, making complex crypto concepts easy to understand and empowering you to take confident steps in your  journey.</p>
                                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-item item-red position-relative">
                                    <i class="bi bi-bounding-box-circles icon"></i>
                                    <h3>Premium Research</h3>
                                    <p>We provide premium research to back our educational content, ensuring you have access to the accurate, up-to-date insights in the market.</p>
                                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item item-cyan position-relative">
                                    <i class="bi bi-activity icon"></i>
                                    <h3>Results</h3>
                                    <p>By using CryptoJoe's education, you'll not only gain the knowledge you need but also develop the skills to apply it confidently in the real world, allowing you to transfer what you’ve learned into actionable strategies for long-term success </p>
                                    <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End Service Item -->



                        </div>
                    </div>
                </div>
                <div style="font-size: 14px; margin-top: 80px; text-align: center; color: #fff !important;">Not sure on what product is right for
                    you? Check out our <a href="#" style="color:#bb5cea !important;"><strong>products.</strong></a></div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="container">
                <div class="row mx-2">
                    <div class="card mb-3 px-0 about-card">
                        <div class="background-layer w-100 h-100" style="position: absolute;  top:0; z-index : 1; left:0; border-radius: 6px;"></div>

                        <div class="row g-0 align-items-center" style="position: static; z-index : 2;">
                            <div class="col-lg-9 col-md-8 order-2 order-md-1">
                                <div class="card-body  crypto-card-heading" data-aos="zoom-in-up">
                                    <h3 class="card-title">Who is <em>Crypto Joe?</em> </h3>
                                    <p class="card-text" style="text-align:left">With over a decade of experience in the cryptocurrency industry,
                                        <em>Crypto Joe</em> is a trusted name among high net worth individuals in the UK, managing
                                        portfolios exceeding £1 million. <em>Crypto Joe</em> excels in strategic trading and
                                        delivering expert insights to enhance portfolio performance and increase net worth.
                                    </p>
                                    <p class="card-text" style="text-align:left">
                                        Recognizing that many people miss out on crypto opportunities due to perceived
                                        complexity and cost, we established our community to make expert advice accessible
                                        to everyone. Our mission is to bring the same level of expertise used to manage
                                        million-pound portfolios directly to you, in simple and practical ways. Join us and
                                        unlock the potential of cryptocurrency with confidence.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 order-1 order-md-2 text-center about-img" data-aos="zoom-in-left">
                                <img src="images/Joe .jpg" class="img-fluid rounded-end" style="border-radius:50%;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid testimonials section" style="" id="feature">
            <div class="container">
                <div class="text-center pb-4">
                    <h2 class="meet-heading mb-3" data-aos="fade-bottom">Meet traders & investors like you</h2>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="500">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 1
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper" data-aos="zoom-out-up">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Very grateful for the <em>Crypto Joe</em> community! The big thing for me is they are
                                    actually transparent about risk levels on trades. this allowed me to grow at a
                                    pace suited to me and not have extra stress about risky trades when just
                                    beginning.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>William</h3>
                                    <!-- <h4>Ceo &amp; Founder</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    I tried many platforms before but this si by far the most personal and helpful!
                                    <em>Crypto Joe</em> make things simple and gave me confidence when investing. In the last
                                    month I managed to quit the 9-5 I hate thanks to the service! Big love guys!
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Oliver</h3>
                                    <!-- <h4>Designer</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <em>Crypto Joe</em> never lets me down. When starting I had 0 experience but hated I was
                                    missing out on the Crypto opportunity. <em>Crypto Joe</em> not only got me quick results
                                    but taught me the skills and knowledge to build real wealth.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>James</h3>
                                    <!-- <h4>Store Owner</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Very grateful for the <em>Crypto Joe</em> community! The big thing for me is they are
                                    actually transparent about risk levels on trades. this allowed me to grow at a
                                    pace suited to me and not have extra stress about risky trades when just
                                    beginning.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>William</h3>
                                    <!-- <h4>Ceo &amp; Founder</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    I tried many platforms before but this si by far the most personal and helpful!
                                    <em>Crypto Joe</em> make things simple and gave me confidence when investing. In the last
                                    month I managed to quit the 9-5 I hate thanks to the service! Big love guys!
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Oliver</h3>
                                    <!-- <h4>Designer</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <em>Crypto Joe</em> never lets me down. When starting I had 0 experience but hated I was
                                    missing out on the Crypto opportunity. <em>Crypto Joe</em> not only got me quick results
                                    but taught me the skills and knowledge to build real wealth.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>James</h3>
                                    <!-- <h4>Store Owner</h4> -->
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
    </div>

    <div class="main-container-wrapper">



        <section class="container-fluid" id="pricing">
            <div class="container">
                <h3 class="instant-heading text-center mb-4">Join the platform for Crypto Winners Today!</h3> <!-- Centered heading and margin-bottom added -->

                <div class="row mt-5">
                    <!-- Plan 1 -->
                    <!-- <div class="col-lg-6 mb-4">
                        <div class="card offer-card">
                            <div class="offer text-center">
                                <strong style="font-size: 17px;">100% <br></strong><small>OFF</small>
                            </div>
                            <div class="content" style="padding: 30px 24px 24px;">
                                <div class="time text-center">
                                    <button type="button" class="btn btn-secondary btn-sm offer-month" style="text-decoration: line-through;" disabled>Monthly</button>
                                    <button type="button" class="btn btn-secondary btn-sm offer-month" style="text-decoration: line-through;" disabled>Yearly</button>
                                    <button type="button" class="btn btn-primary btn-sm">Forever &#9733;</button>
                                </div>
                                <div class="price text-center">
                                    <span style="font-size: 20px;">EDUCATION</span> <br>
                                    <span>Join Our Community</span>
                                </div>
                                <hr>
                                <div class="list">
                                    <ul>
                                        <li><strong>Basics:</strong> We teach you the foundations for your Crypto journey from setting up accounts to making your first trade.</li>
                                        <li><strong>Education:</strong> Our experts bring you the hottest news in Crypto to enhance your skills ready to go to market.</li>
                                        <li><strong>Community:</strong> We make you feel part of the winners team through our community chat. Here we post all the education you need for your first steps to success.</li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary offer-sub-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Join Now</button>
                            </div>
                        </div>
                        <div class="offer-card d-flex align-items-center justify-content-center flex-lg-row flex-column  mt-2 p-3 gap-2">
                            <h4 class="cfree mb-0" style="font-size: 32px;">CFREE</h4>
                            <div class="cfreep">Create a free account today to stay
                                up to date with our latest research.</div>
                            <div class="cfreeb">
                                <button type="button" class="btn btn-secondary btn-price flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Get
                                    Started Free</button>
                            </div>
                        </div>
                    </div> -->

                    <!-- Plan 2 -->
                    <div class="col-12 mb-4">
                        <div class="card offer-card">
                            <div class="offer text-center">
                                <strong style="font-size: 16px;">£24.99</strong><br><small style="font-size: 10px !important;">Per Month</small>
                            </div>
                            <div class="content" style="padding: 30px 24px 24px;">
                                <div class="time text-center">
                                    <button type="button" class="btn btn-primary btn-sm">Monthly &#9733;</button>
                                </div>
                                <div class="price text-center">
                                    <span class="first-span">PREMIUM MEMBERS CLUB</span> <br>
                                    <span>1 Month Free</span><br>
                                    <span>£24.99 /Month</span>
                                </div>
                                <hr>
                                <div class="list">
                                    <ul>
                                        <li><strong class="text-lowercase text-capitalize">Beginners Blue Print For Success:</strong> CryptoJoe offers comprehensive video modules that provide you with exact, step-by-step instructions, guiding you from a beginner to a successful investor.</li>
                                        <li><strong class="text-lowercase text-capitalize">Crypto Mastery & MentorShip:</strong> From easy-to-follow video tutorials to live webinars and personalized 1-on-1 Q&A sessions with Joe himself, we ensure you have the support and knowledge to confidently navigate your crypto journey.</li>
                                        <li><strong class="text-lowercase text-capitalize">Trade Execution:</strong> we share expert tips and actionable pointers on trade execution and investment opportunities, closely aligned with the strategies our experts use to manage 7-figure portfolios. This gives you exclusive insights into high-level decision-making, so you can apply the same proven techniques to grow your own crypto investments.</li>
                                        <li><strong class="text-lowercase text-capitalize">Exclusive Community Benefits:</strong> By joining CryptoJoe, you'll become part of our exclusive community, where you’ll receive daily updates on trades, investment opportunities, education, and the latest news from the crypto world. Plus, you’ll be invited to in-person events with guest speakers, webinars, and more, providing you with direct access to industry leaders and valuable networking opportunities.</li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary offer-sub-button" onclick="subscribe_free_trial()">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="faqs">
            <div class="container">
                <h2 class="text-center faq-heading" style="padding: 40px 0px; font-size: 36px; font-weight: 800px; color:#ffff;">Frequently Asked
                    Questions</h2>
                <div class="accordions-list">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-none mb-2" data-aos="fade-left" data-aos-delay="200">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is <em>Crypto Joe?</em>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The world of Crypto has many opportunities however is a complicated industry for
                                    beginners. <em>Crypto Joe</em> offers essential support to capitalise on these opportunities
                                    without been an expert.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2" data-aos="fade-left" data-aos-delay="400">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I cancel my subscription?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Of course! While we are confident we'll deliver on getting you results, you cancel at
                                    any time on your account page.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2" data-aos="fade-left" data-aos-delay="600">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can we trust your team?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <em>Crypto Joe</em> is backed by traders trusted by high net worth individuals in the UK to manage
                                    their Crypto trades. Managing portfolios worth multi millions, our experts have proven
                                    skin in the game.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2" data-aos="fade-left" data-aos-delay="800">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Is <em>Crypto Joe</em> suitable for beginners?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    This is why we are here! We hate to see people not take the opportunity of making money
                                    through Crypto because it feels to complicated. We break it down step by step for people
                                    new in the game.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" style="margin-top: 60px;">
            <div class="container" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="pre-footer">
                    <ul class="" style="list-style-type: none;">
                        <li>Education</li>
                        <li>Privacy Policy</li>
                        <li>Terms & Conditions</li>
                        <li>Contact Us</li>
                        <li>Library</li>
                    </ul>
                    <div class="d-flex justify-content-center mt-4">
                        <span class="social-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                <path
                                    d="M11.0256 0H13.1722L8.48225 5.50731L14 13H9.67983L6.2965 8.45512L2.42433 13H0.2765L5.29317 7.10916L0 0.0005993H4.42983L7.48825 4.15475L11.0256 0ZM10.2725 11.6804H11.4619L3.7835 1.25068H2.50717L10.2725 11.6804Z"
                                    fill="#bb5cea"></path>
                            </svg>
                        </span>
                        <span class="social-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path
                                    d="M12.0013 1.83301H10.0013C9.11725 1.83301 8.2694 2.1842 7.64428 2.80932C7.01916 3.43444 6.66797 4.28229 6.66797 5.16634V7.16634H4.66797V9.83301H6.66797V15.1663H9.33464V9.83301H11.3346L12.0013 7.16634H9.33464V5.16634C9.33464 4.98953 9.40487 4.81996 9.5299 4.69494C9.65492 4.56991 9.82449 4.49967 10.0013 4.49967H12.0013V1.83301Z"
                                    fill="#bb5cea"></path>
                            </svg>
                        </span>
                        <span class="social-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path
                                    d="M11.334 1.83325H4.66732C2.82637 1.83325 1.33398 3.32564 1.33398 5.16659V11.8333C1.33398 13.6742 2.82637 15.1666 4.66732 15.1666H11.334C13.1749 15.1666 14.6673 13.6742 14.6673 11.8333V5.16659C14.6673 3.32564 13.1749 1.83325 11.334 1.83325Z"
                                    fill="#bb5cea"></path>
                                <path
                                    d="M10.6678 8.07996C10.75 8.63479 10.6553 9.20143 10.3969 9.6993C10.1386 10.1972 9.72987 10.6009 9.22886 10.8531C8.72784 11.1052 8.16007 11.193 7.6063 11.1039C7.05252 11.0148 6.54095 10.7533 6.14433 10.3567C5.74772 9.96012 5.48626 9.44854 5.39715 8.89477C5.30804 8.34099 5.39582 7.77322 5.64799 7.27221C5.90017 6.77119 6.3039 6.36245 6.80176 6.10412C7.29963 5.84578 7.86628 5.75102 8.42111 5.83329C8.98706 5.91721 9.51101 6.18093 9.91557 6.58549C10.3201 6.99006 10.5839 7.51401 10.6678 8.07996Z"
                                    stroke="#EEF2F6" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.666 4.83325H11.6727" stroke="#bb5cea" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <footer class="container-fluid">
        <div class="container text-center" style="max-width: 740px !important;">
            <div>
                <p class="disclaimer mt-5 " style="color: #ffff; font-size: 14px;">Disclaimer: Not financial or
                    investment advice. Any capital-related decisions
                    you
                    make are your full responsibility.</p>
            </div>
            <div>
                <p style="color: #ffff; font-size: 14px;">© 2024 Cryptonary. All rights reserved.</p>
            </div>
        </div>
    </footer>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script src="assets/vendor/aos/aos.js"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $('#owl-carousel1').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: false,

        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            700: {
                items: 2
            },
            900: {
                items: 2.4
            },
            1150: {
                items: 2.8
            },
            1300: {
                items: 3.1
            },
            1450: {
                items: 3.5
            }
        }
    })
    $('#owl-carousel2').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        center: true,

        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            510: {
                items: 1.3
            },
            650: {
                items: 1.6
            },
            780: {
                items: 2
            },
            950: {
                items: 2.4
            },
            1150: {
                items: 2.8
            },
            1300: {
                items: 3.1
            },
            1450: {
                items: 3.5
            }
        }
    })
</script>
<script>
    AOS.init();
</script>