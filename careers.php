<?php include('header.php'); ?>

<style>
    .black-background-div {
        background-color: black;

        display: flex;
        justify-content: center;

        height: 250px;

        width: 100%;

        padding: 20px;
        box-sizing: border-box;
        flex-direction: column;

    }

    .heading {
        color: rgb(253, 253, 253);
        font-size: 50px;
        margin-bottom: 10px;
        font-weight: bold;
        margin-left: 35px;

    }

    .paragraph {
        color: azure;
        font-size: 20px;
        line-height: 1.5;
        max-width: 800px;
        margin-left: 35px;

    }

    .full-width-image {
        width: 100%;
        height: fit-content;

        overflow: hidden;

    }

    .full-width-image img {
        width: 100%;
        height: auto;
        display: block;

    }

    /* Responsive Design for Mobile Devices */
    @media (max-width: 768px) {
        .black-background-div {
            height: 220px;
            padding: 15px;
            text-align: center;

        }

        .heading {
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 0;
            margin-right: 0;

        }

        .paragraph {
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: 0;
            margin-right: 0;
            max-width: 100%;

        }


    }

    .black-background-2-div {

        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
        flex-direction: column;

    }

    .heading-2 {
        color: rgb(7, 7, 7);
        font-size: 35px;
        margin-top: 20px;
        font-weight: bold;
    }


    .container {
        max-width: 1200px;
        margin: auto;
    }


    .card-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .card-heading2 {
        font-size: 40px;
        font-weight: 700;
        color: #c72a2a;
        text-align: center;


    }



    .unique-card {
        background-color: #000000;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(138, 68, 68, 0.1);
        transition: transform 0.3s ease;
        min-height: 130px;
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 30px;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
        text-align: center;
        border: 1px solid #c4c1c1;
        /* Add this line to show a white border */
    }


    .unique-card:hover {
        transform: translateY(-10px);
    }

    .card-heading-2 {
        font-size: 25px;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .card-description {
        font-size: 15px;
        color: #cac5c5;
        flex-grow: 1;
        text-align: justify;
    }

    /* Icons */
    .unique-card i {
        font-size: 24px;
        color: #f8f8f8;
        margin-bottom: 20px;

    }

    /* Responsive card layout */
    @media (max-width: 992px) {
        .col-lg-4 {
            width: 50%;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .col-md-6 {
            width: 100%;
            margin-bottom: 30px;
        }
    }
</style>

<div class="black-background-div">
    <div class="content">
        <h2 class="heading">Join Our Visionary Team Today</h2>
        <p class="paragraph">Your path to success starts here</p>
    </div>
</div>

<div class="full-width-image">
    <img src="img/carousel-4.jpg" alt="Responsive Image">
</div>

<div class="black-background-2-div">
    <div class="content">
        <h2 class="heading-2">See all Job Openings</h2>

    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Text Column -->
            <div class="col-xl-7 col-lg-6 col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="display-5 mb-4" style="font-size: 35px;color: black;"> <span
                        style="color: red;">1.</span> Never stop Learning

                </h5>
                <p class="mb-2">Learning is the key to success. creating a path for continuous growth and
                    achievement
                </p>
                <h5 class="display-5 mb-4" style="font-size: 35px;color: black;"> <span
                        style="color: red;">2.</span> Work on the next big thing

                </h5>
                <p class="mb-2">Engage in diverse projects for brands, handling a variety of tasks essential to the
                    brand's success. Gain valuable hands-on experience and expand your skill set.
                </p>
            </div>
            <!-- Image Column -->
            <div class="col-xl-5 col-lg-6 col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded text-center">
                    <img src="img/carousel-4.jpg" class="img-fluid custom-img" alt="Image">
                </div>

            </div>
        </div>

        <div class="row g-5" style="margin-top: 50px;">
            <!-- Image Column -->
            <div class="col-xl-5 col-lg-6 col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded text-center">
                    <img src="img/carousel-4.jpg" class="img-fluid custom-img" alt="Image">
                </div>

            </div>

            <div class="col-xl-7 col-lg-6 col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="display-5 mb-4" style="font-size: 35px;color: black;"> <span
                        style="color: red;">3.</span> Give respect and take respect

                </h5>
                <p class="mb-2">Promote, maintain, and create a friendly environment for professional growth at
                TechnoTwist where mutual respect is essential.
                </p>
                <h5 class="display-5 mb-4" style="font-size: 35px;color: black;"> <span
                        style="color: red;">4.</span> Enjoy your work

                </h5>
                <p class="mb-2">Do what you love. We provide you a positive work environment that supports your
                    well-being, allowing you to live your passion and work with enjoyment.
                </p>
            </div>


        </div>
    </div>
</div>

<div style="background-color: #000000;">

    <div class="card-heading2">Our Core Values</div>
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-heart fa-3x"></i>
                <h5 class="card-heading-2">Be Empathetic</h5>
                <p class="card-description">Show care and understanding towards others. Empathy builds strong
                    relationships.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-bolt fa-3x"></i>
                <h5 class="card-heading-2">Take Charge</h5>
                <p class="card-description">Lead with confidence and take responsibility for important decisions.
                </p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-chart-line fa-3x"></i>
                <h5 class="card-heading-2">Focus on Growth</h5>
                <p class="card-description">Always look for ways to grow both personally and professionally.</p>
            </div>
        </div>
    </div>

    <!-- Add another row of cards if needed -->
    <div class="row g-4 mt-4">
        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-check-circle fa-3x"></i>
                <h5 class="card-heading-2">Accountability</h5>
                <p class="card-description">Clear communication helps in avoiding misunderstandings and building
                    trust.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-users fa-3x"></i>
                <h5 class="card-heading-2">Team Building</h5>
                <p class="card-description">Collaborate effectively with others to achieve shared goals.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-comments fa-3x"></i>
                <h5 class="card-heading-2">Communicate</h5>
                <p class="card-description">Clear communication helps in avoiding misunderstandings and building
                    trust.</p>
            </div>
        </div>
    </div>
</div>

<!-- Cards Start -->
<div class="container-fluid counter-facts py-5">
    <div class="container py-5">
        <h2 style="text-align: center; color: #000000;font-size: 40px; font-weight: bold;">Seeking for Job
            Opportunities</h2>
        <div class="row g-4">
            <div class="container-fluid features overflow-hidden py-5">
                <div class="container">
                    <div class="row g-4 justify-content-center text-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item text-center p-4">
                                <div class="feature-icon p-3 mb-4">
                                    <i class="fas fa-phone-alt fa-lg"></i>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-3">Call us at</h5>
                                    <p class="mb-3">+91 98286 92328
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item text-center p-4">
                                <div class="feature-icon p-3 mb-4">
                                    <i class="fas fa-envelope fa-lg"></i>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-3">Send a mail</h5>
                                    <p class="mb-3">info@technotwist.in
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cards End -->

<?php include('footer.php'); ?>