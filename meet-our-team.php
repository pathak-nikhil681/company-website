<?php include('header.php'); ?>

<style>
    .team-section {
        padding: 50px 20px;
        background-color: #f8f9fa;

    }

    .team-heading {
        font-size: 50px;
        font-weight: 700;
        color: #000000;
        margin-left: 35px;

    }

    .team-paragraph {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin-left: 35px;
        line-height: 1.6;

    }

    .team-paragraph-2 {
        font-size: 1.2rem;
        color: #181717;
        margin-left: 35px;
        margin-top: 60px;


    }

    .breadcrumb-link {
        color: #020202;
        text-decoration: none;

    }

    .breadcrumb-link:hover {
        text-decoration: underline;

    }

    @media (max-width: 768px) {
        .team-heading {
            font-size: 30px;
            font-weight: bold;
            margin-left: 20px;
        }

        .team-paragraph {
            font-size: 20px;
            margin-left: 10px;
            padding: 0 15px;

        }

        .team-paragraph-2 {
            font-size: 20px;
            margin-left: 10px;
            padding: 0 15px;

        }
    }

    @media (max-width: 480px) {
        .team-heading {
            font-size: 30px;
            font-weight: bold;
            margin-left: 20px;
        }

        .team-paragraph {
            font-size: 20px;
            margin-left: 10px;
            padding: 0 10px;

        }

        .team-paragraph-2 {
            font-size: 20px;
            margin-left: 10px;
            padding: 0 15px;

        }
    }


    .boss-section {
        background-color: rgb(255, 255, 255);
        color: white;
        text-align: center;
        padding: 50px 20px;
    }

    .section-heading {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 30px;
        color: rgb(44, 42, 42);
        margin-bottom: 40px;
        font-weight: 500;
    }

    .boss-card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        background-color: #f5f5f5;
        gap: 20px;
        /* Add some space between cards */
        flex-wrap: wrap;
        /* Allow wrapping for smaller screens */
    }

    .boss-card {
        text-align: center;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        flex: 1 1 calc(50% - 40px);
        /* Each card takes up 50% of the row, minus gaps */
        margin: 10px;
        /* Add some margin for spacing */
    }

    .boss-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .boss-name {
        font-size: 24px;
        font-weight: bold;
        color: #333333;
        margin: 10px 0;
    }

    .boss-position {
        font-size: 18px;
        color: #777777;
    }

    /* Media query for small screens */
    @media (max-width: 768px) {
        .boss-card-container {
            flex-direction: column;
            /* Stack cards vertically */
        }

        .boss-card {
            flex: 1 1 100%;
            /* Each card takes full width */
        }

        .section-heading {
            font-size: 24px;
            /* Reduce heading size on smaller screens */
        }

        .boss-image {
            height: 200px;
            /* Reduce image height for smaller screens */
        }
    }



    .team-card {
        text-align: center;
        background-color: #000000;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(177, 177, 177, 0.1);
        max-width: 300px;
    }

    .team-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .team-name {
        font-size: 24px;
        font-weight: bold;
        color: #ffffff;
        margin: 10px 0;
    }

    .team-position {
        font-size: 18px;
        color: #ffffff;
    }

    .employee-heading {
        font-size: 40px;
        color: #000000;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .employee-gallery {
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        /* 8 images per row */
        gap: 10px;
        /* Space between the images */
        margin: 20px;
    }

    .employee-item {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 100%;
        /* This creates a perfect square for the images */
    }

    .employee-item img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image covers the div without distortion */
        transition: transform 0.3s ease;
        /* Smooth hover effect */
    }

    .employee-item:hover img {
        transform: scale(1.1);
        /* Zoom effect on hover */
    }

    .employee-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        /* Transparent black background */
        color: white;
        text-align: center;
        padding: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
        /* Smooth transition for hover effect */
    }

    .employee-item:hover .employee-info {
        opacity: 1;
        /* Show employee name on hover */
    }

    /* Mobile responsiveness */
    @media (max-width: 1200px) {
        .employee-gallery {
            grid-template-columns: repeat(4, 1fr);
            /* 4 images per row on smaller screens */
        }
    }

    @media (max-width: 768px) {
        .employee-gallery {
            grid-template-columns: repeat(3, 1fr);
            /* 3 images per row for tablets */
        }
    }

    @media (max-width: 480px) {
        .employee-gallery {
            grid-template-columns: repeat(2, 1fr);
            /* 2 images per row for mobile devices */
        }
    }

    /* Two Sections Container */
    .two-sections {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin: 20px;
        gap: 20px;
    }

    /* Left Section */
    .left-section {
        flex: 1;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .left-section h2 {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #333;
    }

    .left-section p {
        font-size: 1rem;
        color: #666;
        line-height: 1.5;
    }

    /* Right Section */
    .right-section {
        flex: 1;
        padding: 20px;
        margin-left: 30px;
    }

    .content-box {
        border: 2px solid red;
        padding: 20px;
        text-align: center;
        border-radius: 15px;
    }

    .content-box p {
        font-size: 1rem;
        color: #333;
        margin-bottom: 15px;
    }

    .action-button {
        padding: 10px 20px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 15px;
        font-size: 1rem;
        cursor: pointer;

    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .two-sections {
            flex-direction: column;
            align-items: center;
            /* Centers both sections vertically */
        }

        .left-section,
        .right-section {
            flex: none;
            width: 100%;
            padding: 0 20px;
            /* Add padding for small screens */
        }

        .content-box {
            width: 90%;
            max-width: 300px;
            /* Centers and limits the box width on smaller screens */
        }
    }
</style>

<div class="team-section">
    <h2 class="team-heading">Meet the <span style="color: red;">Team</span></h2>
    <p class="team-paragraph">
        Where Expertise, Passion, and Dedication Converge to Drive Excellence
    </p>
    <p class="team-paragraph-2">
        <a href="index.html" class="breadcrumb-link">Home</a> ------------
        <a href="meet-our-team.html" class="breadcrumb-link">Meet the team</a>
    </p>
</div>

<div class="boss-section">
    <h3 class="section-heading">Each member brings a unique blend of expertise, passion, and dedication to the
        table, working together to deliver exceptional results for our clients</h3>

    <div class="boss-card-container">
        <!-- CEO Card -->
        <div class="boss-card">
            <img src="img/boss.jpg" alt="Boss Image" class="boss-image">
            <h2 class="boss-name">Ankush Saraswat</h2>
            <p class="boss-position">CEO & Founder, TechnoTwist</p>
        </div>

        <!-- CTO Card -->
        <div class="boss-card">
            <img src="img/cto2.jpeg" alt="CTO Image" class="boss-image">
            <h2 class="boss-name">Ram Nivas Sharma</h2>
            <p class="boss-position">CTO, TechnoTwist</p>
        </div>
    </div>
</div>

<!-- Testimonial Start -->
<div class="container-fluid training overflow-hidden py-5" style="background-color: rgb(0, 0, 0);">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">

            <h1 style="color: #ddd;">Real People Create Real Results</h1>

        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">

            <div class="team-card">
                <img src="img/hr.jpg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Akshita Parashar</h2>
                <p class="team-position">HR Executive</p>
            </div>

            <div class="team-card">
                <img src="img/st-6.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Manish Soni</h2>
                <p class="team-position">Backend Devloper</p>
            </div>
            <div class="team-card">
                <img src="img/st-2.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Kanta Sharma</h2>
                <p class="team-position">Fronted Devloper</p>
            </div>
            <div class="team-card">
                <img src="img/nikhil.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Nikhil Pathak</h2>
                <p class="team-position">Fronted Devloper</p>
            </div>
            <div class="team-card">
                <img src="img/st-6.jpeg" alt="Boss Image" class="team-image">
                <h2 class="team-name">Somesh Chobey</h2>
                <p class="team-position">App Devloper</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<div class="employee-section">
    <h2 class="employee-heading">Teamwork is the only way we work</h2>
    <div class="employee-gallery">
        <div class="employee-item">
            <img src="img/st-6.jpeg" alt="Employee 1">
            <div class="employee-info">Ram Nivas Sharma</div>
        </div>

        <div class="employee-item">
            <img src="img/hr.jpg" alt="Employee 2">
            <div class="employee-info">Akshita Parashar</div>
        </div>

        <div class="employee-item">
            <img src="img/st-6.jpeg" alt="Employee 3">
            <div class="employee-info">Manish Soni</div>
        </div>

        <div class="employee-item">
            <img src="img/st-1.jpeg" alt="Employee 3">
            <div class="employee-info">Kanta Sharma</div>
        </div>

        <div class="employee-item">
            <img src="img/nikhil.jpeg" alt="Employee 3">
            <div class="employee-info">Nikhil Pathak</div>
        </div>

        <div class="employee-item">
            <img src="img/st-6.jpeg" alt="Employee 3">
            <div class="employee-info">Somesh Chobey</div>
        </div>


        <!-- Add more employee items as needed -->
    </div>
</div>

<div class="two-sections">
    <!-- Left Section -->
    <div class="left-section">
        <h2>Ready to take your career to the next level?</h2>
        <p>Our dynamic team of organised thinkers, creative innovators, and trendsetting experts collaborates to
            empower & deliver exceptional value through cutting-edge technology services worldwide.</p>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <div class="content-box">
            <p>Ready for a Change? Checkout Our Current openings</p>
            <a href="careers.php" class="action-button">Learn More</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>