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
        font-size: 38px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: #ffffff;
        margin-bottom: 10px;
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
        width: 200px;
        padding: 10px 20px;
        background-color: #b42c2c;
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
        display: block;
        margin: 0 auto;
        margin-top: 20px;

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

    /* Main Container */
    .main-container {
        padding: 20px;
    }

    /* Top Section */
    .top-section {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .left-section {
        margin-top: 50px;
        margin-left: 50px;
    }

    .right-section {
        width: 48%;
        margin-top: 60px;
    }

    .left-section p,
    .right-section p {
        font-size: 16px;
        color: #000000;
    }

    .demo-button,
    .contact-button {
        font-size: 16px;
        padding: 10px 20px;
        margin-bottom: 10px;

        border: none;
        border-radius: 50px;
        cursor: pointer;
    }

    .demo-button {
        background-color: #3a3a3a;
        /* Blue background */
        color: #ffffff;
    }

    .contact-button {

        background-color: #ffffff;
        color: #2c2a2a;
        border: 1px solid black;
        border-radius: 50px;
    }

    .left-section h3 {
        font-size: 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #d60a0a;
    }

    /* Responsive Design for Tablets */
    @media (max-width: 768px) {
        .top-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .left-section {
            margin-left: 0;
            margin-top: 20px;
        }

        .right-section {
            width: 100%;
            margin-top: 20px;
        }

        .left-section h3 {
            font-size: 40px;
        }

        .right-section p {
            font-size: 16px;
        }
    }

    /* Responsive Design for Small Screens (Mobile) */
    @media (max-width: 480px) {
        .top-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .left-section {
            margin-left: 0;
            margin-top: 10px;
        }

        .right-section {
            width: 100%;
            margin-top: 15px;
        }

        .left-section h3 {
            font-size: 35px;
        }

        .left-section p,
        .right-section p {
            font-size: 14px;
        }
    }

    /* Cards Section */
    .cards-section {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        flex-basis: calc(25% - 20px);
        /* 4 cards in one row */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card i.icon {
        font-size: 40px;
        /* Adjust icon size */
        color: #d60a0a;
        /* Icon color */
        margin-bottom: 10px;
        /* Space between icon and heading */
    }

    .card h4 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #000000;
    }

    .card p {
        font-size: 16px;
        color: #333;
    }

    /* Responsive Design for Tablets */
    @media (max-width: 768px) {
        .cards-section {
            flex-wrap: wrap;
        }

        .card {
            flex-basis: calc(50% - 20px);
            /* 2 cards in one row */
        }
    }

    /* Responsive Design for Small Screens (Mobile) */
    @media (max-width: 480px) {
        .card {
            flex-basis: 100%;
            /* 1 card per row */
        }
    }

    /* Main Section */
    .ecommerce-section {
        text-align: center;
        margin: 40px auto;
    }

    /* Section Heading */
    .ecommerce-section h2 {
        font-size: 40px;
        color: #000000;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Ecommerce Grid */
    .ecommerce-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Center images in the row */
        gap: 25px;
        /* 10px gap between items */
    }

    /* Individual Ecommerce Item */
    .ecommerce-item {
        position: relative;
        width: calc(30% - 10px);
        /* Reduced size to decrease image width, still maintaining 10px gap */
        overflow: hidden;

    }

    .ecommerce-item img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;

    }

    .ecommerce-name {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .ecommerce-description {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(212, 208, 208, 0.7);
        /* Transparent black background */
        color: white;
        text-align: center;
        padding: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
        /* Smooth transition for hover effect */
    }

    .ecommerce-item:hover .ecommerce-description {
        opacity: 1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .ecommerce-item {
            width: calc(50% - 10px);
            /* 2 items per row on tablets */
        }

        .ecommerce-section h2 {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-left: 10px;
            margin-right: 10px;
            /* Slightly smaller on tablets */
        }


    }

    @media (max-width: 480px) {
        .ecommerce-item {
            width: calc(100% - 20px);
            /* 1 item per row with 10px margin on both sides */
            margin-left: 10px;
            margin-right: 10px;
        }

        .ecommerce-section h2 {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-left: 10px;
            margin-right: 10px;
            /* Slightly smaller on tablets */
        }
    }

    .tool-section,
    .tool-section h2 {
        text-align: center;
        color: #000000;
        font-size: 35px;
        font-weight: 700;
    }

    .paragraph-container {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
    }

    .paragraph-container p {
        font-size: 16px;
        font-weight: 300;
        color: #666;
        line-height: 1.6;
    }

    @media (max-width: 768px) {

        .tool-section h2 {
            font-size: 35px;
            margin-left: 10px;
            margin-right: 10px;

        }

        .paragraph-container p {
            font-size: 14px;
            margin-left: 10px;
            margin-right: 10px;
            color: #524f4f;
        }
    }


    .card-container {
        display: flex;
        flex-wrap: wrap;
        /* Allow cards to wrap to the next row */
        gap: 10px;
        padding: 0 40px;
        justify-content: center;
        margin-bottom: 20px;
    }

    .tool-card {
        flex: 0 1 calc(50% - 10px);
        /* Two cards per row with a gap */
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    /* Other styles remain the same */
    .card-icon {
        font-size: 30px;
        color: #dd1d27;
        text-align: left;
        margin-bottom: 10px;
    }

    .card-title {
        font-size: 25px;
        color: #000;
        font-weight: bold;
        margin: 10px 0;
        text-align: left;
    }

    .card-list {
        list-style: none;
        padding: 0;
        text-align: left;
    }

    .card-list li {
        font-size: 15px;
        font-weight: 100;
        margin: 5px 0;
        position: relative;
        padding-left: 20px;
    }

    .card-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #000000;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .card-container {
            padding: 0 20px;
            /* Reduce padding on smaller screens */
            justify-content: center;
            /* Center align cards */
        }

        .tool-card {
            flex: 1 1 100%;
            /* Full width on small screens */
            margin-bottom: 20px;
            /* Add space between cards */
        }

        .card-title {
            font-size: 22px;
            /* Adjust heading size */
        }

        .card-list li {
            font-size: 16px;
            /* Adjust list item size */
        }
    }

    @media (max-width: 480px) {
        .card-title {
            font-size: 20px;
            /* Smaller title size for mobile */
        }

        .card-list li {
            font-size: 14px;
            /* Smaller list item size for mobile */
        }
    }

    .heights-container {
        background-color: black;
        color: white;
        padding: 40px 20px;
        text-align: center;

    }

    .heights-heading {
        font-size: 44px;
        color: #ffffff;
        margin-bottom: 30px;

    }

    .heights-card-container {
        display: flex;
        gap: 10px;
        justify-content: center;
        flex-wrap: wrap;

    }

    .heights-card {
        background-color: #000000;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 100%;
        max-width: 300px;
        border: 1px solid gray;
        border-radius: 10px;
        /* Optional max width for card */
    }

    .heights-card-icon {
        font-size: 40px;
        margin-bottom: 10px;
        color: red;
    }

    .heights-card-title {
        font-size: 22px;
        font-weight: 600;
        margin: 10px 0;
        color: White;
    }

    .heights-card-paragraph {
        font-size: 16px;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .card-container {
            padding: 0 20px;
            /* Reduce padding on smaller screens */
            justify-content: center;
            /* Center align cards */
        }

        .tool-card {
            flex: 1 1 100%;
            /* Full width on small screens */
            margin-bottom: 20px;
            /* Add space between cards */
        }

        .card-title {
            font-size: 22px;
            /* Adjust heading size */
        }

        .card-list li {
            font-size: 16px;
            /* Adjust list item size */
        }
    }
</style>

<div class="contact-section">
    <div class="left-side">
        <h2 class="section-heading">Scale your business to new heights with our <b>Custom e-Commerce marketplace
                solutions</b></h2>

        <p class="section-paragraph-2">Managing GMV of
            $7 Million+ per Month
            for Clients</p>
        <a href="custom-ecommerce-marketplace.php" target="_blank">
            <button class="contact-button">Request a Demo</button>
        </a>

    </div>

    <div class="right-side form-container">
        <h2 class="form-heading">Schedule Demo</h2>
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
            <div class="g-recaptcha" data-sitekey="6LcdTH4qAAAAAEkCtkxTpanoGJliQbAYnfmeMYqr"></div>

            <button type="submit" class="submit-btn">Schedule Demo</button>
        </form>
    </div>
</div>

<div class="main-container">
    <!-- Top Section with 2 parts -->
    <div class="top-section">
        <!-- Left Section -->
        <div class="left-section">
            <p><b>Why Choose</b></p>
            <h3>TechnoTwist?</h3>
        </div>
        <!-- Right Section -->
        <div class="right-section">
            <p>We create online stores that perfectly match your ideas, ensuring easy management of products,
                prices, and seamless connections with other tools.</p>
        </div>
    </div>
    <!-- Cards Section -->
    <div class="cards-section">
        <!-- Card 1 -->
        <div class="card">
            <i class="fas fa-bolt icon"></i> <!-- Icon added -->
            <h4>Lightning Speed</h4>
            <p>100% faster loading, beyond Shopify standards</p>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <i class="fas fa-network-wired icon"></i> <!-- Icon added -->
            <h4>Headless Commerce</h4>
            <p>Explore headless commerce for flexibility that surpasses Shopify</p>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <i class="fas fa-people-arrows icon"></i> <!-- Icon added -->
            <h4>B2B, B2C & C2C Marketplace</h4>
            <p>Building a marketplace which is far from Shopify's limitations</p>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <i class="fas fa-boxes icon"></i> <!-- Icon added -->
            <h4>D2C Inventory</h4>
            <p>User-friendly design with visually appealing aesthetics</p>
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

<div class="ecommerce-section">
    <h2>TechnoTwist is best fit for a Multiple eCommerce Niches</h2>

    <div class="ecommerce-grid">
        <!-- eCommerce 1 -->
        <div class="ecommerce-item">
            <img src="img/fashion2.jpg" alt="Ecommerce 1">
            <div class="ecommerce-name">Fashion</div>
            <div class="ecommerce-description">
                <p>TechnoTwist empowers you to create a trendy marketplace that makes shopping easy & more
                    accessible</p>
            </div>
        </div>

        <!-- eCommerce 2 -->
        <div class="ecommerce-item">
            <img src="img/electronics.jpg" alt="Ecommerce 2">
            <div class="ecommerce-name">Electronics</div>
            <div class="ecommerce-description">
                <p>Shape the future of tech retail. Make a sleek online space for gadget lovers with smooth
                    inventory management and easy transactions.</p>
            </div>
        </div>

        <!-- eCommerce 3 -->
        <div class="ecommerce-item">
            <img src="img/hair.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Hair & Beauty</div>
            <div class="ecommerce-description">
                <p>Help beauty brands connect with confident customers. Design a user-friendly online store for
                    modern hair & beauty shoppers.</p>
            </div>
        </div>

        <!-- eCommerce 4 -->
        <div class="ecommerce-item">
            <img src="img/food.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Food</div>
            <div class="ecommerce-description">
                <p>With TechnoTwist, build a marketplace that brings food lovers.</p>
            </div>
        </div>

        <!-- eCommerce 5 -->
        <div class="ecommerce-item">
            <img src="img/perfume.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Perfume</div>
            <div class="ecommerce-description">
                <p>TechnoTwist enhances the online fragrance shopping experience for customers and for businesses to
                    showcase it easily.</p>
            </div>
        </div>

        <!-- eCommerce 6 -->
        <div class="ecommerce-item">
            <img src="img/furnicture.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Furniture</div>
            <div class="ecommerce-description">
                <p>Craft a stunning online furniture store filled with the latest trends and styles.</p>
            </div>
        </div>

        <!-- eCommerce 7 -->
        <div class="ecommerce-item">
            <img src="img/sports.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Sports</div>
            <div class="ecommerce-description">
                <p>Create vibrant online communities for sports enthusiasts. Bring athletes and fans together with
                    all they need.</p>
            </div>
        </div>

        <!-- eCommerce 8 -->
        <div class="ecommerce-item">
            <img src="img/jewellery.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Jewellery</div>
            <div class="ecommerce-description">
                <p>Manage inventory, showcase popular pieces, and offer an easy-to-shop experience.</p>
            </div>
        </div>

        <!-- eCommerce 9 -->
        <div class="ecommerce-item">
            <img src="img/handmade.jpg" alt="Ecommerce 3">
            <div class="ecommerce-name">Handmade</div>
            <div class="ecommerce-description">
                <p>Showcase your special creations and connect with enthusiastic buyers looking for unique handmade
                    products.</p>
            </div>
        </div>

        <!-- Add more ecommerce items as needed -->
    </div>
</div>

<div class="tool-section">
    <h2>Marketplace Management with Powerful Admin Tools!</h2>
    <div class="paragraph-container">
        <p>Our eCommerce platform is built with your business goals in mind. Easily manage your Single/Multi-vendor
            marketplace
            with a comprehensive set of features designed to help you achieve your business objectives and market
            goals effortlessly.</p>
    </div>

    <div class="card-container">
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-box"></i></div>
            <div class="card-title">Product /Inventory management</div>
            <ul class="card-list">
                <li>Multi-Vendor / Single-Vendor</li>
                <li>One product multiple seller</li>
                <li>Product variants (via Size, Color, Price, Specification etc.)</li>
                <li>Tier pricing management(based on Quantity)</li>
                <li>Bulk upload/download Inventory</li>
            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-credit-card"></i></div>
            <div class="card-title">Multiple Payment option</div>
            <ul class="card-list">
                <li>Third-Party Payment Gateway (Razor Pay, CC Avenue etc.)</li>
                <li>International Payment Gateway (Paypal, Authorize .Net)</li>
                <li>Cash on Deliver</li>
                <li>Buy Now Pay Later (BNPL) + EMI Integration</li>
            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-truck"></i></div>
            <div class="card-title">Multiple Shipping</div>
            <ul class="card-list">
                <li>Fedx, Blue Dart, DHL, Aramex etc Integration</li>
                <li>Shipping Aggregator - Shiprocket Integration</li>
                <li>International Courier Integration</li>
                <li>Hyperlocal Delivery Integration / Customization</li>
                <li>Manage Delivery PIN Code Manually</li>
            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-file-invoice"></i></div>
            <div class="card-title">Tax/ shipping label /Invoice management</div>
            <ul class="card-list">
                <li>Seller / Customer Invoice Management</li>
                <li>Manage Tax (Domestic / International)</li>
                <li>Payment Reconciliation (Automation)</li>
                <li>Track Shipping (Multiple Warehouse Management)</li>
                <li>TDS / TCS Reconciliation</li>
            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-money-bill-wave"></i></div>
            <div class="card-title">Price Management</div>
            <ul class="card-list">
                <li>Personalized Commission based on Product Category, Seller, Brand or even Product</li>
                <li>Auto calculation of shipping charges (Local, Zonal & National Territory)</li>
                <li>Volumetric Weight Management to calculate estimated price</li>
                <li>Custom Coupon & Discount Management</li>
                <li>Advance Flash Sale Management</li>
            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-chart-bar"></i></div>
            <div class="card-title">
                Analytics reports & marketing</div>
            <ul class="card-list">
                <li>Facebook / Google Analytics in-depth Integration</li>
                <li>Generate Reports in 1 click for products, sales, customers, orders, sellers, etc.</li>
                <li>Engagement via push notifications, in-app, web, sms, WhatsApp, Automated Emails, etc.</li>
                <li>Cohort / RFM analysis</li>

            </ul>
        </div>
        <div class="tool-card">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <div class="card-title">Segmentation / Analysis / Engagement</div>
            <ul class="card-list">
                <li>Segment audience based on expected behavior - dynamic audience</li>
                <li>Engage with the audience via Automated Campaign, Drip Campaign, and personalized Journey
                </li>
                <li>Analyze behavior on various parameters like time, action, inaction etc</li>
                <li>Optimized Checkout Funnel for better ROI and data-driven Approach</li>

            </ul>
        </div>
    </div>

</div>

<div class="heights-container">
    <h2 class="heights-heading">Take your business to new heights with TechnoTwist</h2>
    <div class="heights-card-container">
        <div class="heights-card">
            <div class="heights-card-icon">🎨</div> <!-- Personalized Storefront Design -->
            <div class="heights-card-title">Personalized Storefront Design</div>
            <p class="heights-card-paragraph">Show your brand value and aesthetic with a customized design.</p>
        </div>
        <div class="heights-card">
            <div class="heights-card-icon">🔌</div> <!-- Custom Plugins & Integrations -->
            <div class="heights-card-title">Custom Plugins & Integrations</div>
            <p class="heights-card-paragraph">Enhance your business efficiency by integrating essential tools,
                custom plugins.</p>
        </div>
        <div class="heights-card">
            <div class="heights-card-icon">⏱️</div> <!-- Minimal down time -->
            <div class="heights-card-title">Minimal Down Time</div>
            <p class="heights-card-paragraph">Implementing rolling updates and continuous deployment strategies to
                minimize downtime.</p>
        </div>
        <div class="heights-card hidden-card">
            <div class="heights-card-icon">📦</div> <!-- Controlled Shipping -->
            <div class="heights-card-title">Controlled Shipping</div>
            <p class="heights-card-paragraph">Control shipping by selecting the shipping partner of your choice.</p>
        </div>
        <div class="heights-card hidden-card">
            <div class="heights-card-icon">🔄</div> <!-- Returns & Exchange -->
            <div class="heights-card-title">Returns & Exchange</div>
            <p class="heights-card-paragraph">For specific products or all products, integrate the returns &
                exchange policy.</p>
        </div>
    </div>

</div>

<!-- Testimonial Start -->
<div class="container-fluid training overflow-hidden py-5" style="background-color: rgb(0, 0, 0);">
    <div>
        <h1 class="white-centered">Focused Admin, Seller & Customer Features</h1>

        <div class="tabs-container">
            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">


            <ul>
                <li title="Frontend">
                    <label for="tab1" role="button">
                        <h5>For Admins</h5>
                    </label>
                </li>
                <li title="Backend">
                    <label for="tab2" role="button">
                        <h5>For Sellers</h5>
                    </label>
                </li>
                <li title="Mobile">
                    <label for="tab3" role="button">
                        <h5>For Customers</h5>
                    </label>
                </li>

            </ul>

            <div class="slider-container">
                <div class="indicator"></div>
            </div>

            <div class="content-container">
                <section>
                    <div class="heights-card-container">
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-store"></i></div>
                            <div class="heights-card-title" sty>Seller / Vendor Management</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-th-list"></i></div>
                            <div class="heights-card-title">Category Management</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-search"></i></div>
                            <div class="heights-card-title">Personalized Attribute Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-coins"></i></div>
                            <div class="heights-card-title">Commission Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-user-shield"></i></div>
                            <div class="heights-card-title">User Roles & Account Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-boxes"></i></div>
                            <div class="heights-card-title">Product/Inventory Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-tags"></i></div>
                            <div class="heights-card-title">Offers/Coupon/Flash Sale Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-receipt"></i></div>
                            <div class="heights-card-title">Payment Reconciliation</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-clipboard-list"></i></div>
                            <div class="heights-card-title">Order Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                            <div class="heights-card-title">Invoice, Tax, Shipping Label Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-shipping-fast"></i></div>
                            <div class="heights-card-title">Shipping Process Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-cog"></i></div>
                            <div class="heights-card-title">Policy & Setting Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-warehouse"></i></div>
                            <div class="heights-card-title">Warehouse Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-file-alt"></i></div>
                            <div class="heights-card-title">Content Management</div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="heights-card-container">
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-store"></i></div>
                            <div class="heights-card-title">Product/Inventory Management</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-th-list"></i></div>
                            <div class="heights-card-title">Tier Pricing Management</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-search"></i></div>
                            <div class="heights-card-title">Warehouse Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-coins"></i></div>
                            <div class="heights-card-title">Warehouse Stock Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-user-shield"></i></div>
                            <div class="heights-card-title">Offers/Coupon Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-boxes"></i></div>
                            <div class="heights-card-title">Order Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-tags"></i></div>
                            <div class="heights-card-title">Invoice & Shipping Label Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-receipt"></i></div>
                            <div class="heights-card-title">Shipping Process Management</div>
                        </div>

                    </div>
                </section>
                <section>
                    <div class="heights-card-container">
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-palette"></i></div>
                            <div class="heights-card-title">Dynamic/Premium Homepage Design</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-th-list"></i></div>
                            <div class="heights-card-title">Category Aesthetic Page</div>
                        </div>
                        <div class="heights-card">
                            <div class="heights-card-icon"><i class="fas fa-search"></i></div>
                            <div class="heights-card-title">Quick Search Functionality</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-credit-card"></i></div>
                            <div class="heights-card-title">Quick Checkout Process</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-shopping-cart"></i></div>
                            <div class="heights-card-title">Optimized Checkout Journey</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="heights-card-title">Customized Pages for Hyperlocal Areas</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-box-open"></i></div>
                            <div class="heights-card-title">Minimum Order Quantity (MOQ) Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-dollar-sign"></i></div>
                            <div class="heights-card-title">Minimum Order Value (MOV) Management</div>
                        </div>
                        <div class="heights-card hidden-card">
                            <div class="heights-card-icon"><i class="fas fa-heart"></i></div>
                            <div class="heights-card-title">Personalized Cart Management</div>
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

<div class="main-container">
    <!-- Top Section with 2 parts -->
    <div class="top-section">
        <!-- Left Section -->
        <div class="left-section">
            <h3>Discover All-in-One eCommerce with TechnoTwist</h3>
            <p>where innovation meets all your business needs</p>
        </div>
        <!-- Right Section -->
        <div class="right-section">
            <a href="custom-ecommerce-marketplace.php" class="button-link">
                <button class="demo-button">Request a Demo</button>
            </a>
            <a href="contact-us.php" class="button-link">
                <button class="contact-button">Contact Us</button>
            </a>
        </div>

    </div>


</div>

<?php include('footer.php'); ?>