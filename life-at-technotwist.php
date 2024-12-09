<?php include('header.php'); ?>

<style>
    .black-background-div {
        background-color: black;
        padding: 20px;

    }

    .heading {
        font-size: 40px;
        color: aliceblue;
        font-weight: bold;
        margin-bottom: 20px;
        margin-left: 35px;
    }

    .image-with-margin {
        width: calc(100% - 40px);
        display: block;
        margin: 0 auto;
        margin-left: 20px;
        margin-right: 20px;

    }

    .image-gallery-container {
        margin: 20px;
    }

    .gallery-heading {
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        color: #000;
    }

    .image-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: space-between;
    }

    .image-item {
        flex-basis: calc(25% - 10px);
        box-sizing: border-box;
    }

    .image-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    /* Responsive design for tablets and smaller devices */
    @media (max-width: 768px) {
        .image-item {
            flex-basis: calc(50% - 10px);
            /* 2 images per row */
        }
    }

    @media (max-width: 480px) {
        .image-item {
            flex-basis: calc(100% - 10px);
            /* 1 image per row on smaller screens */
        }
    }
</style>

<div class="black-background-div">
    <div class="content">
        <h2 class="heading">Life at <span style="color: red;">TechnoTwist</span></h2>
        <img src="img/flex.jpeg" alt="Life at TechnoTwist" class="image-with-margin">
    </div>
</div>

<div class="image-gallery-container">
    <h2 class="gallery-heading">We take pride in our work and joy in our play.</h2>
    <div class="image-gallery">
        <div class="image-item">
            <img src="img/gallery1.jpeg" alt="Image 1">
        </div>
        <div class="image-item">
            <img src="img/gallery2.jpeg" alt="Image 2">
        </div>
        <div class="image-item">
            <img src="img/gallery3.jpeg" alt="Image 3">
        </div>
        <div class="image-item">
            <img src="img/gallery4.jpeg" alt="Image 4">
        </div>
        <div class="image-item">
            <img src="img/gallery5.jpeg" alt="Image 5">
        </div>

    </div>
</div>

<?php include('footer.php'); ?>