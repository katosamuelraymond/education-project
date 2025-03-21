<footer id="footer" class="footer dark-background text-light pt-5 pb-4">
    <div class="container">
        <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-3 col-md-6">
                <a href="<?=ROOT?>" class="logo d-flex align-items-center text-decoration-none">
                    <h3 class="sitename text-white fw-bold fs-4"><?=APPNAME?></h3>
                </a>
                <p class="mt-3 fs-5">Your trusted platform for A-Level, O-Level, and Campus courses in Uganda. Learn from anywhere, anytime.</p>
                <div class="footer-contact mt-3 fs-5">
                    <p><i class="bi bi-geo-alt"></i> Plot 24, Kampala Road, Kampala, Uganda</p>
                    <p><i class="bi bi-telephone"></i> +256 701 234 567</p>
                    <p><i class="bi bi-envelope"></i> support@<?= strtolower(APPNAME) ?>.ug</p>
                </div>
                <div class="social-links mt-3 d-flex">
                    <a href="#" class="me-2 fs-4"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="me-2 fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-2 fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="me-2 fs-4"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Course Categories -->
            <div class="col-lg-3 col-md-6">
                <h4 class="fs-4">Explore Courses</h4>
                <ul class="list-unstyled fs-5">
                    <li><a href="#">A-Level Courses</a></li>
                    <li><a href="#">O-Level Courses</a></li>
                    <li><a href="#">Campus Courses</a></li>
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Business & Marketing</a></li>
                </ul>
            </div>

            <!-- Student Section -->
            <div class="col-lg-3 col-md-6">
                <h4 class="fs-4">For Students</h4>
                <ul class="list-unstyled fs-5">
                    <li><a href="#">Student Dashboard</a></li>
                    <li><a href="#">My Courses</a></li>
                    <li><a href="#">Certificates</a></li>
                    <li><a href="#">Reviews & Ratings</a></li>
                    <li><a href="#">Community</a></li>
                </ul>
            </div>

            <!-- Instructor Section -->
            <div class="col-lg-3 col-md-6">
                <h4 class="fs-4">For Instructors</h4>
                <ul class="list-unstyled fs-5">
                    <li><a href="<?= ROOT ?>/trainers/apply" >Become a Trainer</a>
                    </li>
                    <li><a href="#">Instructor Dashboard</a></li>
                    <li><a href="#">Course Creation</a></li>
                    <li><a href="#">Instructor Resources</a></li>
                    <li><a href="#">Instructor Support</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Full-Width Separator Line -->
    <div class="full-width-line"></div>

    <!-- Copyright Section -->
    <div class="text-center py-3 fs-5 copyright-bg">
        <p class="mb-0">© <?= date('Y') ?> <strong class="sitename"><?=APPNAME?></strong>. All Rights Reserved.</p>
    </div>

    <!-- Scroll to Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?=ROOT?>/zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=ROOT?>/zenblog/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?=ROOT?>/zenblog/assets/vendor/aos/aos.js"></script>
    <script src="<?=ROOT?>/zenblog/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?=ROOT?>/zenblog/assets/js/main.js"></script>

    <style>
        /* Full-width separator line */
        .full-width-line {
            width: 100%;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.2);
            margin-top: 20px;
        }

        /* Copyright Section Background */
        .copyright-bg {
            background-color: rgba(0, 0, 0, 0.85);
        }
    </style>
</footer>
