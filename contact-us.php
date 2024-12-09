<?php include('header.php'); ?>

<style>
    .contact-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        background-color: black;
        padding: 40px;
        color: white;
        min-height: 100vh;
    }

    .left-side {
        width: 45%;
        margin-top: 80px;
    }

    .right-side {
        width: 45%;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        color: black;
        margin-top: 30px;
    }

    .section-heading {
        font-size: 50px;
        font-weight: bold;
        color: #ffffff;
        margin-bottom: 10px;
    }

    .section-paragraph-1 {
        font-size: 35px;
        color: #cccccc;
        margin-bottom: 20px;
    }

    .section-paragraph-2 {
        font-size: 20px;
        color: #cccccc;
        margin-bottom: 30px;
    }


    .contact-button {
        padding: 10px 20px;
        background-color: #000000;
        color: white;
        border: 1px solid #ffffff;
        border-radius: 50px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
    }

    .form-heading {
        font-size: 36px;
        font-weight: bold;
        color: #000000;
        margin-bottom: 10px;
        text-align: left;
    }

    .form-paragraph {
        font-size: 16px;
        color: #181717;
        margin-bottom: 20px;
        text-align: left;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-row {
        display: flex;
        justify-content: space-between;
    }

    .half-width {
        width: 48%;
    }

    label {
        font-size: 16px;
        font-weight: bold;
        color: #070707;
        display: block;
        margin-bottom: 5px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #cccccc;
        font-size: 16px;
    }

    textarea {
        resize: vertical;
    }

    button.submit-btn {
        width: 150px;
        padding: 10px 20px;
        background-color: #b42c2c;
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
        display: block;
        /* Ensure the button behaves as a block-level element */
        margin: 0 auto;
        /* Centers the button horizontally */
    }



    /* Mobile Responsive */
    @media (max-width: 768px) {
        .contact-section {
            flex-direction: column;
            align-items: center;
        }

        .left-side,
        .right-side {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .form-container {
            padding: 20px;
        }

        .form-heading {
            font-size: 24px;
        }

        .form-paragraph,
        .section-paragraph {
            font-size: 14px;
        }

        .section-heading {
            font-size: 46px;
        }

        .form-row {
            flex-direction: column;
        }

        .half-width {
            width: 100%;
        }
    }


    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 30px;
    }

    .map-container iframe {
        width: 100%;
        height: 400px;
        border: 0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Add responsive styles */
    @media (max-width: 768px) {
        .map-container iframe {
            height: 300px;
        }
    }
</style>

<div class="contact-section">
    <div class="left-side">
        <h2 class="section-heading">Contact Us</h2>
        <p class="section-paragraph-1">We want to learn more about your project and talk about how our services will
            work for you.</p>
        <p class="section-paragraph-2">Get response within
            24 business hours</p>
        <a href="contact-us.php" target="_blank">
            <button class="contact-button">Schedule a meeting</button>
        </a>

    </div>

    <div class="right-side form-container">
        <h2 class="form-heading">Have an idea?</h2>
        <p class="form-paragraph">You can reach us anytime via technotwist@gmail.com</p>

        <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group half-width">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Please Enter Your Name" required>
                </div>

                <div class="form-group half-width">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Please Enter Your Email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Please Enter Your Phone Number" required>
            </div>

            <div class="form-group">
                <label for="message">Describe your idea</label>
                <textarea id="message" name="message" placeholder="Tell us a little about the project..." rows="4"
                    required></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>

<!-- Countries We Offer Start -->
<div class="container-fluid country1 overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <h1 class="display-5 mb-4">Our work speaks for <span style="color: red;">itself</span></h1>
            <p class="mb-0">With numerous successful projects delivered across various industries, our team
                consistently ensures timely delivery and high-quality results.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="country1-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/it1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country1-name">
                        <a class="text-white fs-4">Years of Experience</a>
                        <h2 id="years-of-experience" style="color: rgb(228, 18, 18);; font-size: 60px;">9+</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="country1-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/it2.jpeg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country1-name">
                        <a class="text-white fs-4">Projects Completed</a>
                        <h2 id="years-of-experience" style="color: rgb(228, 18, 18);; font-size: 60px;">150+</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                <div class="country1-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/it3.jpeg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country1-name">
                        <a class="text-white fs-4">Industries Served</a>
                        <h2 id="years-of-experience" style="color: rgb(228, 18, 18);; font-size: 60px;">50+</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                <div class="country1-item">
                    <div class="rounded overflow-hidden">
                        <img src="img/it5.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="country1-name">
                        <a class="text-white fs-4">Countries Served</a>
                        <h2 id="years-of-experience" style="color: rgb(228, 18, 18); font-size: 60px;">12+</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Countries We Offer End -->

<!-- Office Project Start -->
<div class="container-fluid training overflow-hidden bg-light py-5">

    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">RECENT WORK</h5>
            </div>
            <h1 class="display-5 mb-4">Some of our favourite projects</h1>

        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a class="h4 text-white mb-0">Lords Convent School</a>

                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">

                        <h4 class="text-white">Lords Convent School</h4>

                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0"
                            href="https://lordsconventschoolbhilwara/" target="_blank">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a class="h4 text-white mb-0">Apex Law Services</a>

                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">

                        <h4 class="text-white">Apex Law Services</h4>

                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="https://apexlawservices.com/"
                            target="_blank">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a class="h4 text-white mb-0">Satguru Travel</a>

                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">

                        <h4 class="text-white">Satguru Travel</h4>

                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="https://satgurutravel.tn/"
                            target="_blank">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a class="h4 text-white mb-0">Sn Publicity</a>

                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">

                        <h4 class="text-white">Sn Publicity</h4>

                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="https://snpublicity.com/"
                            target="_blank">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                    href="portfolio.php">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Office Project End -->

<!-- Google Map Section -->
<div class="container-fluid py-5" style="margin-bottom: 30px;">
    <div class="container">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.343419428463!2d74.6297753739933!3d25.359804425097856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968c236105d40fb%3A0xb848b6c6f5c36a32!2sTechnology%20Twist!5e0!3m2!1sen!2sin!4v1731406892185!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>