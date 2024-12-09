<?php include('header.php'); ?>

<style>
    .black-background-div {
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        /* Adjust height as needed */
        width: 100%;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }



    h1 {
        font-size: 50px;
        margin: 0;
        color: #ffffff;
    }


    /* Responsive styling for mobile screens */
    @media (max-width: 600px) {
        .black-background-div {
            height: auto;
            /* Let the div adjust its height automatically */
            padding: 40px 20px;
            /* Extra padding for smaller screens */
        }

        h1 {
            font-size: 25px;

        }
    }


    /* Second div for centered heading and justified paragraph */
    .text-container {
        background-color: #f0f0f0;
        padding: 30px;
        margin: 20px auto;
        width: 80%;
    }

    .text-container h2 {
        text-align: center;
        font-size: 40px;
        color: black;
        font-weight: bold;
    }

    .text-container p {
        text-align: justify;
        font-size: 16px;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 600px) {

        /* Adjust the text container for mobile */
        .text-container {
            width: 90%;
            padding: 20px;
        }

        .text-container h2 {
            font-size: 25px;
            font-weight: bold;
        }

        .text-container p {
            font-size: 14px;
        }
    }


    .unique-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
        margin-bottom: 30px;

    }

    .card-heading {
        font-size: 30px;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 15px;
    }

    .card-description {
        font-size: 1rem;
        color: #6c757d;
        flex-grow: 1;
    }

    @media (max-width: 768px) {
        .unique-card {
            margin-bottom: 30px;
            min-height: auto;
        }
    }
</style>

<div class="black-background-div">
    <h1><span style="color: red;">TECHNOLOGY TWIST</span> is founded with the vision of producing innovative and
        affordable IT Enabled solutions. ”
        You name IT, We make IT. “</h1>

</div>

<div class="text-container">
    <h2>Leveraging tech to drive a better IT experience</h2>
    <p style="margin-top: 25px;">
        We offer fully customized website development and software development service based on the client’s
        requirements and their business goals. We make the right use of modern technologies like Flutter, PHP, Ajax,
        ANDROID etc. and high quality of creativity. We develop custom Mobile applications which not only establish
        easy and effective interaction with your customers but also make you one of the industry leaders.
    </p>
</div>

<div class="container-fluid training overflow-hidden py-5">
    <div>
        <h1 class="irreplaceable-centered">Bringing innovation and uniqueness to tech solutions</h1>
        <div class="container">
            <div class="row">
                <!-- Card 1: What We Do -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fas fa-tasks icon"></i>
                            <h5 class="irreplaceable-title">What We Do</h5>
                            <p class="irreplaceable-text">We craft innovative digital experiences to captivate
                                audiences, helping brands thrive across diverse industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Why Choose Us -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fas fa-thumbs-up icon"></i>
                            <h5 class="irreplaceable-title">Why Choose Us</h5>
                            <p class="irreplaceable-text">Over 200 businesses trust us to deliver results, driving
                                success with expertise and dedication.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: How Can We Help -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fas fa-hands-helping icon"></i>
                            <h5 class="irreplaceable-title">How Can We Help</h5>
                            <p class="irreplaceable-text">Empowering businesses to excel with tailored strategies
                                for the evolving digital landscape.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Button -->
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="contact-us.php">Let's
                        Discuss</a>
                </div>
            </div>
        </div>
        <h1 class="irreplaceable-centered" style="margin-top: 40px;">Offshore outsourcing excellence</h1>
        <div class="container">
            <div class="row">
                <!-- Card 1: Software Development Outsourcing -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-external-link-alt fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">Software Development Outsourcing</h5>
                            <p class="irreplaceable-text">Comprehensive services from consulting to development,
                                ensuring seamless product delivery.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Custom Software Development -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-cogs fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">Custom Software Development</h5>
                            <p class="irreplaceable-text">Tailored software solutions to enhance efficiency and
                                boost business growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Software Product Development -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-laptop-code fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">Software Product Development</h5>
                            <p class="irreplaceable-text">Turning ideas into impactful products, designed to
                                captivate and engage users.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div>
    <p style="text-align: center; font-weight: bold; margin-top: 50px;">OUR NEW IDENTITY</p>
    <h2 style="text-align: center;"><span style="color: red; font-weight: bold;">Why TechnoTwist</span> </h2>


    <h4
        style="font-size: 18px; line-height: 1.6; text-align: justify; padding: 20px; max-width: 100%; box-sizing: border-box;">
        The name "TechnoTwist" is a fusion of two powerful concepts. "Techno" represents our unwavering commitment
        to leveraging technology to solve complex business challenges, transforming ideas into impactful
        solutions.<br><br>

        The word "Twist" reflects our innovative approach, bringing fresh perspectives and creative problem-solving
        to every project we undertake. It signifies our ability to adapt and redefine what's possible in the digital
        realm.<br><br>

        Together, "TechnoTwist" stands for a blend of technological prowess and forward-thinking innovation,
        ensuring our clients stay ahead in a rapidly evolving digital landscape.
    </h4>
</div>

<!-- Countries We Offer Start -->
<div class="container-fluid country1 overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <h1 class="display-5 mb-4"><span style="color: #23242a;">Our work speaks for</span> <span
                    style="color: red;">itself</span></h1>
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

<div class="container py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-bullseye fa-3x mb-2"></i>

                <h5 class="card-heading">Our Mission</h5>
                <p class="card-description"> At TechnoTwist, our mission is to empower businesses with innovative
                    technology solutions that drive efficiency, growth, and digital transformation. We strive to be
                    the trusted partner that helps our clients unlock new opportunities, enhance customer
                    experiences, and stay competitive in an ever-changing digital landscape. By embracing
                    cutting-edge technologies and a customer-centric approach, we aim to deliver solutions that not
                    only meet but exceed expectations.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fa fa-eye fa-3x mb-2"></i>

                <h5 class="card-heading">Our Vision</h5>
                <p class="card-description"> Our vision is to lead the way in digital innovation, shaping the future
                    of technology for businesses worldwide. We aspire to create a world where technology seamlessly
                    integrates with business objectives, driving transformative growth and sustainable success. By
                    fostering a culture of creativity, collaboration, and continuous learning, TechnoTwist envisions
                    being at the forefront of the digital revolution, helping organizations thrive in the new era of
                    technology.</p>
            </div>
        </div>


    </div>
</div>

<!-- irreplaceable Start -->
<div class="container-fluid training overflow-hidden py-5">
    <div>
        <h1 class="irreplaceable-centered">Our Perks Are Unmatched</h1>
        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-globe fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">24/7 Time Zone Flexibility</h5>
                            <p class="irreplaceable-text">
                                At TechnoTwist, we leverage time zone differences to ensure round-the-clock
                                productivity. Our team is always aligned to your schedule, enabling smooth
                                collaboration, no matter where you are.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-comments fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">Transparent Communication</h5>
                            <p class="irreplaceable-text">
                                Communication is at the core of our approach. We believe in clear, consistent, and
                                transparent communication to build trust and keep you informed at every step of the
                                project.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4">
                    <div class="irreplaceable text-center">
                        <div class="irreplaceable-body">
                            <i class="fa fa-mobile fa-3x mb-2"></i>
                            <h5 class="irreplaceable-title">Adherence to Global Standards</h5>
                            <p class="irreplaceable-text">
                                Our team at TechnoTwist adheres to the highest global standards in software
                                development, ensuring each solution we deliver is robust, scalable, and
                                future-proof.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>