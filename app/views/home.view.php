<?php $this->view('includes/head',$data); ?>
<?php $this->view('includes/topnav',$data); ?>

<?php   $this->view('includes/header',$data); ?>


<body class="index-page">



<main class="main">

<section id="slider" class="slider section dark-background">

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">

        <script type="application/json" class="swiper-config">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "centeredSlides": true,
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            },
            "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
            }
        }
        </script>

        <div class="swiper-wrapper">

            <!-- Slide 1: Online Learning Benefits -->
            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/zenblog/assets/img/learning-slide-1.jpg');">
                <div class="content">
                    <h2><a href="single-post">Unlock Your Potential with Online Learning</a></h2>
                    <p>Discover the benefits of online education. Learn at your own pace, access quality materials, and achieve academic excellence.</p>
                </div>
            </div>

            <!-- Slide 2: Best A-Level & O-Level Courses -->
            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/zenblog/assets/img/learning-slide-2.jpg');">
                <div class="content">
                    <h2><a href="single-post">Best A-Level & O-Level Courses in Uganda</a></h2>
                    <p>Our platform provides top-notch A-Level and O-Level courses to help students excel in national and international exams.</p>
                </div>
            </div>

            <!-- Slide 3: Campus & Professional Skills -->
            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/zenblog/assets/img/learning-slide-3.jpg');">
                <div class="content">
                    <h2><a href="single-post">Campus & Professional Skills Training</a></h2>
                    <p>Get ready for the job market with campus courses in IT, Business, and more. Develop skills that employers value.</p>
                </div>
            </div>

            <!-- Slide 4: Learn Anytime, Anywhere -->
            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/zenblog/assets/img/learning-slide-4.jpg');">
                <div class="content">
                    <h2><a href="single-post">Learn Anytime, Anywhere with Our Mobile-Friendly Platform</a></h2>
                    <p>Study on the go! Our mobile-friendly platform ensures you can access learning materials anytime, from anywhere.</p>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>
    </div>

</div>

</section>

<section id="courses-category" class="courses-category section">


<div class="container section-title" data-aos="fade-up">
    <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>O & A Level Courses</h2>
        <p><a href="courses">See All Courses</a></p>
    </div>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">
        <div class="col-lg-4">
            <div class="course-list lg">
                <a href="course-details"><img src="<?=ROOT?>/assets/img/course-math.jpg" alt="" class="img-fluid"></a>
                <div class="course-meta"><span class="category">O Level</span> <span class="mx-1">•</span>
                    <span>Updated 2025</span>
                </div>
                <h2><a href="course-details">Mathematics for O Level: Master the Fundamentals</a></h2>
                <p class="mb-4 d-block">Comprehensive guide to O Level Mathematics with step-by-step solutions.</p>

                <div class="d-flex align-items-center instructor">
                    <div class="photo"><img src="<?=ROOT?>/assets/img/instructor-math.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                        <h3 class="m-0 p-0">Dr. Jane Doe</h3>
                    </div>
                </div>
            </div>

            <div class="course-list border-bottom">
                <div class="course-meta"><span class="category">A Level</span> <span class="mx-1">•</span>
                    <span>Updated 2025</span>
                </div>
                <h2 class="mb-2"><a href="course-details">Advanced Physics for A Level</a></h2>
                <span class="instructor mb-3 d-block">Prof. John Smith</span>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-5">
                <div class="col-lg-4 border-start custom-border">
                    <div class="course-list">
                        <a href="course-details"><img src="<?=ROOT?>/assets/img/course-html.jpg" alt="" class="img-fluid"></a>
                        <div class="course-meta"><span class="category">Web Development</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2><a href="course-details">HTML & CSS: Beginner to Advanced</a></h2>
                    </div>
                    <div class="course-list">
                        <a href="course-details"><img src="<?=ROOT?>/assets/img/course-js.jpg" alt="" class="img-fluid"></a>
                        <div class="course-meta"><span class="category">Web Development</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2><a href="course-details">JavaScript Essentials for Beginners</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 border-start custom-border">
                    <div class="course-list">
                        <a href="course-details"><img src="<?=ROOT?>/assets/img/course-php.jpg" alt="" class="img-fluid"></a>
                        <div class="course-meta"><span class="category">Backend Development</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2><a href="course-details">PHP & MySQL: Dynamic Websites</a></h2>
                    </div>
                    <div class="course-list">
                        <a href="course-details"><img src="<?=ROOT?>/assets/img/course-excel.jpg" alt="" class="img-fluid"></a>
                        <div class="course-meta"><span class="category">Data Analysis</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2><a href="course-details">Mastering Excel: From Basics to Advanced</a></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-list border-bottom">
                        <div class="course-meta"><span class="category">O Level</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2 class="mb-2"><a href="course-details">Chemistry for O Level</a></h2>
                        <span class="instructor mb-3 d-block">Dr. Emily Brown</span>
                    </div>
                    <div class="course-list border-bottom">
                        <div class="course-meta"><span class="category">A Level</span> <span class="mx-1">•</span> <span>Updated 2025</span></div>
                        <h2 class="mb-2"><a href="course-details">Economics for A Level: Core Principles</a></h2>
                        <span class="instructor mb-3 d-block">Prof. Mark Wilson</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</section>
</main>

<?php $this->view('includes/footer',$data) ?>