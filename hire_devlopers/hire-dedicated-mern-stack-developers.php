<?php include('../header.php'); ?>

<style>
    .custom-img {
        max-width: 200px;
        /* You can adjust this value */
        height: auto;
        /* Maintain aspect ratio */
        display: block;
        /* Make the image a block element */
        margin: 0 auto;
        /* Center the image horizontally */
    }

    /* Optional: Customize centering specifically for mobile */
    @media (max-width: 768px) {
        .custom-img {
            max-width: 60%;
            /* On mobile, you can make the image full width */
        }
    }


    .card {
        min-height: 200px;
        /* Adjust this value as needed for consistent height */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Center content vertically within the card */
    }


    /* General Styles for the Unique Cards */
    /* Styles for H2 and H4 */
    .section-card-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #d13434;
        /* Set the h2 color to black */
        margin-bottom: 20px;
    }

    .section-card-subtitle {
        font-size: 1.25rem;
        color: #6c757d;
        /* Muted text for h4 */
        margin-bottom: 40px;
        margin-left: 20px;
        /* Increase margin on the left */
        margin-right: 20px;
        /* Increase margin on the right */
    }

    .unique-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        min-height: 300px;
        /* Set a minimum height to ensure equal size */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .unique-card:hover {
        transform: translateY(-10px);
    }

    .card-heading {
        font-size: 1.5rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 15px;
    }

    .card-description {
        font-size: 1rem;
        color: #6c757d;
        flex-grow: 1;
        /* Allows description to grow and fill space */
    }

    /* Adjust for smaller screens */
    @media (max-width: 768px) {
        .unique-card {
            margin-bottom: 30px;
            min-height: auto;
            /* Remove the minimum height for smaller screens */
        }
    }
</style>

<!-- about start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Text Column -->
            <div class="col-xl-7 col-lg-6 col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Hire
                    <span style="color: red;">MERN Stack Developer</span>
                </h1>
                <p class="mb-4">TechnoTwist can help you hire a MERN Stack developer from India in just 24 hours.
                    Transform your project with the expertise of our top MERN Stack developers, elevating aesthetics
                    and user experience through performance-driven solutions.
                </p>
            </div>
            <!-- Image Column -->
            <div class="col-xl-5 col-lg-6 col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded text-center">
                    <img src="../img/mern2.jpeg" style="width: 300px; height: auto;" alt="Image">
                </div>

            </div>
        </div>
        <p>
            <a href="../index.html">Home</a> ------ Hire Developers ------ Hire JavaScript Developers ------
            <a href="hire-dedicated-mern-stack-developers.html"><B>Mern Stack Developer</B></a>
        </p>
    </div>
</div>
<!-- about end -->

<!-- services card start -->
<div style="background-color: #23242a;">
    <div style="text-align: center; background-color: #23242a; padding: 20px;">
        <!-- H5: SERVICES -->
        <h5 style="color: white; font-size: 1.5rem; margin-bottom: 10px;">SERVICES</h5>

        <!-- H2: Our Vue.JS Developers Expertise -->
        <h2 style="color: white; font-size: 2.5rem; font-weight: bold; margin-bottom: 20px;">
            Our MERN Stack Developers Expertise
        </h2>

        <!-- Button: Hire a Vue.JS Developer Now -->
        <button
            style="background-color: red; color: white; padding: 12px 20px; border: none; border-radius: 50px; font-size: 1.2rem; cursor: pointer;">
            Hire a MERN Stack Developer
        </button>
    </div>
    <div class="container py-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Custom CMS Development</h5>
                        <p class="card-text">Our MERN stack developers specialise in crafting exceptional,
                            user-friendly, and interactive Content Management Systems (CMS). Whether for small
                            businesses or large-scale enterprises, our team ensures the development of CMS solutions
                            that cater to diverse needs and provide seamless content management experiences.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Enterprise Application Development</h5>
                        <p class="card-text">Entrust our team with enterprise application development, leveraging
                            the power of the MERN stack. We focus on creating scalable and robust solutions that
                            meet the unique requirements of large-scale businesses. Our expertise extends to
                            developing applications that streamline operations and enhance overall enterprise
                            efficiency.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">eCommerce Development</h5>
                        <p class="card-text">In the realm of eCommerce, our MERN stack developers excel in creating
                            tailored solutions that elevate online businesses. From intuitive user interfaces to
                            robust backend systems, our team ensures a seamless and secure shopping experience,
                            contributing to the success and growth of eCommerce ventures.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Migration & Integration, Porting Web Apps</h5>
                        <p class="card-text">Our MERN stack proficiency extends to migration, integration, and web
                            app porting services. Whether it's transitioning to newer technologies, integrating
                            systems for improved functionality, or porting web applications across platforms, our
                            developers ensure a smooth and efficient process, minimising disruptions and optimising
                            performance.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Quality Assurance</h5>
                        <p class="card-text">Ensuring the reliability and performance of applications is paramount.
                            Our MERN stack developers implement rigorous quality assurance processes to identify and
                            rectify potential issues, delivering high-quality, error-free solutions that meet and
                            exceed client expectations.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">MERN Stack API Development</h5>
                        <p class="card-text">Our expertise in the MERN stack extends to API development, providing
                            seamless communication between different software components. Our developers create
                            robust APIs that enhance interoperability, enabling efficient data exchange and
                            integration across various platforms and systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- services card end -->


<div class="text-center my-5">
    <h2 class="section-card-title">Why hire MERN Stack developers from TechnoTwist?</h2>
    <h4 class="section-card-subtitle">Our MERN stack developers are committed to excellence in software development.
        Upholding coding best practices, prioritising quality through rigorous unit testing, engaging in
        collaborative code reviews, and employing advanced code quality metrics.</h4>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-database fa-3x mb-3"></i>
                <h5 class="card-heading">Upholding Coding Best Practices</h5>
                <p class="card-description">TechnoTwist MERN stack developers consistently follow coding best
                    practices, ensuring the creation of efficient, scalable, and industry-standard code for robust
                    applications.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-cogs fa-3x mb-3"></i>
                <h5 class="card-heading">Unit Testing</h5>
                <p class="card-description">Prioritising quality, our MERN stack developers at TechnoTwist implement
                    rigorous unit testing methodologies to detect and address issues early on, guaranteeing the
                    reliability and stability of your applications.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                <h5 class="card-heading">Code Review Practices</h5>
                <p class="card-description">With a collaborative approach our developers conduct thorough code
                    reviews, fostering knowledge sharing and maintaining the integrity of the codebase throughout
                    the development process.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-laptop-code fa-3x mb-3"></i>
                <h5 class="card-heading">Code Quality Metrics</h5>
                <p class="card-description">Ensuring continuous monitoring for optimal performance, readability, and
                    adherence to coding standards. This focus on code quality guarantees the delivery of
                    maintainable and scalable applications.</p>
            </div>
        </div>
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
                        <img src="../img/it1.jpg" class="img-fluid w-100 rounded" alt="Image">
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
                        <img src="../img/it2.jpeg" class="img-fluid w-100 rounded" alt="Image">
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
                        <img src="../img/it3.jpeg" class="img-fluid w-100 rounded" alt="Image">
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
                        <img src="../img/it5.jpg" class="img-fluid w-100 rounded" alt="Image">
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

<!-- Testimonial Start -->
<div class="container-fluid training overflow-hidden py-5" style="background-color: rgb(0, 0, 0);">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-danger px-3">TALENT PROFILES</h5>
            </div>
            <h1 style="color: #ddd;">Hire Best Remote Developers</h1>

        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
            <div class="team-card">
                <img src="../img/hr.jpg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Akshita Parashar</h2>
                <p class="team-position">HR Executive</p>

            </div>
            <div class="team-card">
                <img src="../img/st-6.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Manish Soni</h2>
                <p class="team-position">Backend Developer</p>
                <div class="button-group">
                    <button class="telent_profile_btn">CSS</button>
                    <button class="telent_profile_btn">PHP</button>
                    <button class="telent_profile_btn">JavaScript</button>
                </div>
            </div>
            <div class="team-card">
                <img src="../img/st-2.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Kanta Sharma</h2>
                <p class="team-position">App Developer</p>
                <div class="button-group">
                    <button class="telent_profile_btn">HTML</button>
                    <button class="telent_profile_btn">CSS</button>
                    <button class="telent_profile_btn">JavaScript</button>
                </div>
            </div>
            <div class="team-card">
                <img src="../img/nikhil.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Nikhil Pathak</h2>
                <p class="team-position">Fronted Developer</p>
                <div class="button-group">
                    <button class="telent_profile_btn">HTML</button>
                    <button class="telent_profile_btn">CSS</button>
                    <button class="telent_profile_btn">PHP</button>
                </div>
            </div>
            <div class="team-card">
                <img src="../img/st-6.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Somesh Chobey</h2>
                <p class="team-position">App Developer</p>
                <div class="button-group">
                    <button class="telent_profile_btn">HTML</button>
                    <button class="telent_profile_btn">CSS</button>
                    <button class="telent_profile_btn">JavaScript</button>
                </div>
            </div>

            <!-- Repeat other cards similarly -->
        </div>

    </div>

    <div>
        <h1 class="white-centered">Our Dedicated Experts</h1>

        <div class="tabs-container">
            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <input type="radio" id="tab5" name="tab-control"> <!-- Added missing tab -->

            <ul>
                <li title="Frontend">
                    <label for="tab1" role="button">
                        <h5>Javascript Developer</h5>
                    </label>
                </li>
                <li title="Backend">
                    <label for="tab2" role="button">
                        <h5>Mobile Developer</h5>
                    </label>
                </li>
                <li title="Mobile">
                    <label for="tab3" role="button">
                        <h5>Web Developer</h5>
                    </label>
                </li>
                <li title="Database">
                    <label for="tab4" role="button">
                        <h5>e-Commerce & CMS</h5>
                    </label>
                </li>
                <li title="CMS">
                    <label for="tab5" role="button">
                        <h5>Hire Quality Analyst</h5>
                    </label>
                </li>
            </ul>

            <div class="slider-container">
                <div class="indicator"></div>
            </div>

            <div class="content-container">
                <section>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/vue devloper.png" alt="Vue Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Vue JS Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/full stack.png" alt="Full Stack Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Full Stack Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/reactjs.png" alt="React Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">React JS Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/Mern Stack.png" alt="MERN Stack Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">MERN Stack Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/Mern Stack.png" alt="MEAN Stack Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">MEAN Stack Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/nodejs.png" alt="Node JS Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Node JS Developer</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/android.png" alt="Android Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Android Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/ios.png" alt="IOS Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">IOS Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/reactjs.png" alt="React Native Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">React Native Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/pwa.png" alt="PWA Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">PWA Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/flutter.png" alt="Flutter Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Flutter Developer</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/aspnet.png" alt="ASP.Net Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">ASP.Net Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/php.png" alt="PHP Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">PHP Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/laravel.png" alt="Laravel Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Laravel Developer</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/wordpress.png" alt="Wordpress Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Wordpress Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/shopify.png" alt="Shopify Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Shopify Developer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/woocommerce.png" alt="Magento Developer"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">WooCommerce Developer</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-box p-4 text-center">
                                <div class="card-icon mb-3">
                                    <img src="../img/manual qa.png" alt="Quality Analyst"
                                        style="width: 50px; height: auto;">
                                </div>
                                <h4 class="mb-3">Manual QA</h4>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

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
                        <img src="../img/training-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        <div class="training-title-name">
                            <a class="h4 text-white mb-0">Lords Convent School</a>
                        </div>
                    </div>
                    <div class="training-content bg-secondary rounded-bottom p-4">
                        <h4 class="text-white">Lords Convent School</h4>
                        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                            veritatis.</p>
                        <a class="btn btn-secondary rounded-pill text-white p-0" href="https://lordsconventschoolbhilwara/"
                            target="_blank">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="../img/training-2.jpg" class="img-fluid w-100 rounded" alt="Image">
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
                        <img src="../img/training-3.jpg" class="img-fluid w-100 rounded" alt="Image">
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
                        <img src="../img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
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
                    href="../portfolio.php">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- Office Project End -->

<!-- Uses technology Start -->
<div>
    <h2 class="center-text">Technologies <span style="color: red;">We Use</span></h2>
    <div class="custom-tabs">
        <input type="radio" id="custom-tab1" name="custom-tab-control" checked>
        <input type="radio" id="custom-tab2" name="custom-tab-control">
        <input type="radio" id="custom-tab3" name="custom-tab-control">
        <input type="radio" id="custom-tab4" name="custom-tab-control">
        <input type="radio" id="custom-tab5" name="custom-tab-control">

        <ul>
            <li title="Frontend">
                <label for="custom-tab1" role="button">
                    <h5>Frontend Development</h5>
                </label>
            </li>
            <li title="Backend">
                <label for="custom-tab2" role="button">
                    <h5>Backend Development</h5>
                </label>
            </li>
            <li title="Mobile">
                <label for="custom-tab3" role="button">
                    <h5>Mobile Development</h5>
                </label>
            </li>
            <li title="Database">
                <label for="custom-tab4" role="button">
                    <h5>Database</h5>
                </label>
            </li>
            <li title="CMS">
                <label for="custom-tab5" role="button">
                    <h5>CMS</h5>
                </label>
            </li>
        </ul>

        <div class="custom-slider">
            <div class="custom-indicator"></div>
        </div>

        <div class="custom-content">
            <section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/html5.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">HTML5</h4>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/css3.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">CSS3</h4>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/reactjs.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">ReactJS</h4>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/angular js.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">AngularJS</h4>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/vue.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Vue.js</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/aspnet.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">ASP.net</h4>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/netcore.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">.net Core</h4>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/c.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">C#</h4>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/laravel.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Laravel</h4>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/php.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">PHP</h4>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/codeiginter.png" alt="HTML Icon"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Codeigniter</h4>
                        </div>
                    </div>
                    <!-- Card 7 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/python.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Python</h4>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/nodejs.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Node JS</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/android.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">android</h4>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/ios.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">IOS Development</h4>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/react.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">React Native</h4>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/flutter.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Flutter</h4>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/kotlin.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Kotlin</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/mssql.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">MS-SQL</h4>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/mysql.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">MY-SQL</h4>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/mongodb.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Mongo DB</h4>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/firebase.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Firebase</h4>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/redis.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Redis</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/wordpress.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Wordpress</h4>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/shopify.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Shopify</h4>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/mangento.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Magento</h4>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="custom-card p-4 text-center">
                            <div class="card-icon mb-3">
                                <img src="../img/strapi.png" alt="HTML Icon" style="width: 50px; height: auto;">
                            </div>
                            <h4 class="mb-3">Strapi</h4>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

</div>
<!-- Uses technology End -->

<?php include('../footer.php'); ?>