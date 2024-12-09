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
        color: #d80c0c;

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
    <h2 class="team-heading">Blogs</h2>
    <p class="team-paragraph">
        Read Our Thoughts And Insights On The Latest Tech And Business Trends
    </p>
    <p class="team-paragraph-2">
        <a href="index.html" class="breadcrumb-link">Home</a> ------------
        <a href="blog.html" class="breadcrumb-link">Blogs</a>
    </p>
</div>

<?php include('footer.php'); ?>