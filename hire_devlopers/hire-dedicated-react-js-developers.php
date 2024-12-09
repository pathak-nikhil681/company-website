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
                    <span style="color: red;">ReactJS Developer</span>
                </h1>
                <p class="mb-4">TechnoTwist can help you hire a React Js developer from India in just 24 hours.
                    Transform your project with the expertise of our top ReactJS developers, elevating aesthetics
                    and user experience through performance-driven frontend solutions.
                </p>
            </div>
            <!-- Image Column -->
            <div class="col-xl-5 col-lg-6 col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded text-center">
                    <img src="../img/reactjs2.png" style="width: 150px; height: auto;" alt="Image">
                </div>

            </div>
        </div>
        <p>
            <a href="../index.html">Home</a> ------ Hire Developers ------ Hire Java script developers ------
            <a href="hire-dedicated-react-js-developers.html"><B>React Js Developer</B></a>
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
            Our React Js Developers Expertise
        </h2>

        <!-- Button: Hire a Vue.JS Developer Now -->
        <button
            style="background-color: red; color: white; padding: 12px 20px; border: none; border-radius: 50px; font-size: 1.2rem; cursor: pointer;">
            Hire a React Js Developer
        </button>
    </div>
    <div class="container py-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Web Development Strategy</h5>
                        <p class="card-text">Developing a successful web application involves creating a solid plan
                            that aligns with your business objectives. To achieve this, it's crucial to establish a
                            robust architecture that can support the growth and scalability of your applications.
                            Additionally, optimising workflows ensures that the development process is efficient and
                            effective, contributing to the overall success of your business objectives.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Dashboard Creation</h5>
                        <p class="card-text">Our approach to dashboard development revolves around harnessing the
                            capabilities of ReactJS, a powerful JavaScript library. By leveraging the rich ReactJS
                            ecosystem, we create dynamic and interactive dashboards that enhance data visualisation
                            and improve performance. These dashboards not only present information in a
                            user-friendly manner but also contribute to a seamless and engaging user experience.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Migration Services</h5>
                        <p class="card-text">Transitioning your application to the latest version of React should be
                            a smooth and beneficial process. Our migration services focus on maximising component
                            reusability, making the migration effortless. This ensures that your application stays
                            up-to-date with the latest technologies, providing a sustainable and adaptable
                            foundation for future developments.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">PWAs for Better Performance</h5>
                        <p class="card-text">Progressive Web Apps (PWAs) are at the forefront of modern application
                            development. Our PWA development services are designed to create cutting-edge apps that
                            not only look visually appealing but also significantly enhance conversion rates. By
                            embracing the intrinsic appeal and dynamic user experience of PWAs, your business can
                            stay ahead in the competitive digital landscape.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">eCommerce Boost</h5>
                        <p class="card-text">Elevate your eCommerce business by enlisting the expertise of our
                            top-notch React front end developers. A well-crafted React front end can transform the
                            user interface of your online store, leading to a substantial increase in the Return on
                            Investment (ROI) of your eCommerce projects.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card text-center h-100 p-4">
                    <div class="card-body">
                        <h5 class="card-title">Single Page Applications (SPA)</h5>
                        <p class="card-text">Building enterprise-grade single page applications for both web and
                            mobile platforms is essential for managing dynamic content efficiently. Our development
                            approach focuses on creating SPAs that provide a smooth and responsive user experience.
                            Whether it's content management or intricate workflows, SPAs offer a streamlined
                            solution for delivering engaging and interactive applications across various devices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- services card end -->


<div class="text-center my-5">
    <h2 class="section-card-title">Why hire React Js developers from TechnoTwist?</h2>
    <h4 class="section-card-subtitle">At TechnoTwist, we offer specialised hiring models for app development,
        ensuring
        flexibility to scale resources and adapt to changing project needs. Additionally, our React Js developers
        excel in swift project comprehension, guaranteeing seamless execution in alignment with your business
        objectives.</h4>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-database fa-3x mb-3"></i>
                <h5 class="card-heading">Project Flexibility</h5>
                <p class="card-description">Access hiring models tailored to your app development needs, providing
                    flexibility for scaling resources and adapting to evolving project requirements.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-cogs fa-3x mb-3"></i>
                <h5 class="card-heading">Quick Understanding</h5>
                <p class="card-description">Hire React Js developers from TechnoTwist for swift project comprehension,
                    ensuring seamless execution aligned with your business objectives.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                <h5 class="card-heading">Rapid Set-up</h5>
                <p class="card-description">Leverage ReactJS experts with rapid onboarding capabilities, integrating
                    smoothly into your workflows for a swift project commencement.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="unique-card text-center p-4">
                <i class="fas fa-laptop-code fa-3x mb-3"></i>
                <h5 class="card-heading">Cost Savings</h5>
                <p class="card-description">Opt for outsourced ReactJS developers to save on IT infrastructure,
                    training, and retention costs, directing resources efficiently to core business activities.</p>
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