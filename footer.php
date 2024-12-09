<footer style="background-color: #deded5;">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <a class="navbar-brand" href="<?= $base_url ?>/index.php">
                    <img src="<?= $base_url ?>/img/technology_twist_logo.jpeg" alt="TechnoTwist Logo" style="height: 60px;">
                </a>
                <p style="color: black;font-weight:600; margin-top: 20px;">
                    "Our IT company provides the best digital solutions to unlock the
                    potential for your business growth."
                </p>


                <div class="mt-4">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/twistintechnology/" type="button" class="btn btn-floating btn-danger btn-lg"><i class="fab fa-facebook-f"></i></a>
                    <!-- Dribbble -->
                    <a href="https://www.instagram.com/technotwistbhl/" type="button" class="btn btn-floating btn-danger btn-lg"><i class="fab fa-instagram"></i></a>
                    <!-- Twitter -->
                    <a href="https://www.linkedin.com/company/technology-twist/" type="button" class="btn btn-floating btn-danger btn-lg"><i class="fab fa-linkedin"></i></a>
                    <!-- Google + -->

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Get In Touch</h5>
                <ul class="fa-ul" style="margin-left: 1.65em; color:black">
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">C-61,<br> R K
                            Colony,Bhilwara,Rajasthan 311001 </span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                            class="ms-2">technologytwist@gmail.com</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+91 98286
                            92328</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+91 98286
                            92328</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">opening hours</h5>
                <table class="table" style="border-color: #666;">
                    <tbody>
                        <tr>
                            <td style="color: black;">Mon - Fri:</td>
                            <td style="color: black;">8am - 9pm</td>
                        </tr>
                        <tr>
                            <td style="color: black;">Sat - Sun:</td>
                            <td style="color: black;">Holiday</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: black;">
        © 2024 Copyright:
        <a style="color: red;" href="https://technotwist.in/">technotwist.in</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $base_url ?>/lib/wow/wow.min.js"></script>
  <script src="<?= $base_url ?>/lib/easing/easing.min.js"></script>
  <script src="<?= $base_url ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= $base_url ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?= $base_url ?>/lib/owlcarousel/owl.carousel.min.js"></script>


  <!-- Template Javascript -->
  <script src="<?= $base_url ?>/js/main.js"></script>
  <script>
    // Initialization for ES Users
    import { Tab, initMDB } from "mdb-ui-kit";

    initMDB({ Tab });
  </script>
  <script>
    // Select all FAQ items
    const faqItems = document.querySelectorAll(".faq-item");

    // Loop through each FAQ item and attach a click event
    faqItems.forEach((item) => {
      item.addEventListener("click", () => {
        // Toggle the 'active' class on the clicked FAQ item
        item.classList.toggle("active");

        // Collapse other FAQ items when one is opened
        faqItems.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.classList.remove("active");
          }
        });
      });
    });
  </script>
</body>

</html>