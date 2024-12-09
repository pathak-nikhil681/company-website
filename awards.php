<?php include('header.php');?>
<style>
    .team-section {
        padding: 50px 20px;
        background-color: #000000;

    }

    .team-heading {
        font-size: 50px;
        font-weight: 700;
        color: #ffffff;
        margin-left: 35px;

    }

    .team-paragraph {
        font-size: 1.2rem;
        color: #ffffff;
        max-width: 800px;
        margin-left: 35px;
        line-height: 1.6;

    }

    .team-paragraph-2 {
        font-size: 1.2rem;
        color: #f3eeee;
        margin-left: 35px;
        margin-top: 60px;


    }

    .breadcrumb-link {
        color: #ffffff;
        text-decoration: none;

    }

    .breadcrumb-link:hover {
        text-decoration: underline;

    }

    @media (max-width: 768px) {
        .team-heading {
            font-size: 35px;
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
            font-size: 35px;
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
</style>

<div class="team-section">
    <h2 class="team-heading">Our <span style="color: rgb(141, 4, 4);">Awards</span></h2>
    <p class="team-paragraph">
        Our awards aren't just trophies; they're proof of the trust we keep, showing the value we provide and the
        lasting impact we aim for.
    </p>
    <p class="team-paragraph-2">
        <a href="index.html" class="breadcrumb-link">Home</a> ------------
        <a href="awards.html" class="breadcrumb-link">Awards</a>
    </p>
</div>
<?php include('footer.php');?>
