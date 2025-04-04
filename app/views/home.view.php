<?php $data['pageTitle'] = "incredible education platform - Learning made easy";
$this->view('includes/head',$data);
?> 

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
                style="background-image: url('<?=ROOT?>/assets/img/pexels-pixabay-355952.jpg');">
                <div class="content">
                    <h2><a href="single-post">Unlock Your Potential with Online Learning</a></h2>
                    <p>Discover the benefits of online education. Learn at your own pace, access quality materials, and achieve academic excellence.</p>
                </div>
            </div>

         
            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/assets/img/pexels-pixabay-163064.jpg');">
                <div class="content">
                    <h2><a href="single-post">Best A-Level & O-Level Courses in Uganda</a></h2>
                    <p>Our platform provides top-notch A-Level and O-Level courses to help students excel in national and international exams.</p>
                </div>
            </div>

   
           
            <div class="swiper-slide d-flex align-items-center position-relative" 
    style="background-image: url('<?=ROOT?>/assets/img/pexels-emily-ranquist-493228-1205651.jpg');">
    
  
    <div class="content">
        <h2><a href="single-post">Campus & Professional Skills Training</a></h2>
        <p>Get ready for the job market with campus courses in IT, Business, and more. Develop skills that employers value.</p>
    </div>

  
    <div class="position-absolute top-0 end-0 bg-secondary p-4 rounded shadow-lg text-center d-none d-xl-block" 
    style="max-width: 350px; margin: 20px;">
    <h3 class="text-dark">Keep Learning, Keep Growing!</h3>
    <p class="text-light">Education is the key to unlocking opportunities. Stay curious, stay motivated, and achieve your goals.</p>
</div>


</div>


            <div class="swiper-slide"
                style="background-image: url('<?=ROOT?>/assets/img/learning-slide-4.jpg');">
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



<style>
    .card-hover {
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
    }

    .card-hover:hover {
        border-left: 4px solid #0d6efd;
        background-color: #f8f9fa; 
    }
</style>
<div class="container-fluid mb-4 bg-light ">
<div class="col-12 col-md-6 mt-5 ml-md-5 p-5  ">

    <a href="interactive-learning.php" class="text-decoration-none text-dark">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <h5 class="card-title">Interactive Learning Experience</h5>
                <p class="card-text">Master concepts through hands-on projects, interactive quizzes, and real-time feedback powered by smart technology.</p>
            </div>
        </div>
    </a>

    <a href="certification-prep.php" class="text-decoration-none text-dark">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <h5 class="card-title">Career-Boosting Certifications</h5>
                <p class="card-text">Prepare for globally recognized exams with practical simulations and earn certificates that boost your CV and skills profile.</p>
            </div>
        </div>
    </a>

    <a href="analytics.php" class="text-decoration-none text-dark">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    Progress Tracking & Analytics
                    <span class="badge bg-primary">Enterprise Plan</span>
                </h5>
                <p class="card-text">Monitor learning outcomes with intelligent dashboards—ideal for schools, businesses, and education partners.</p>
            </div>
        </div>
    </a>

    <a href="custom-learning-paths.php" class="text-decoration-none text-dark">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    Personalized Learning Paths
                    <span class="badge bg-primary">Enterprise Plan</span>
                </h5>
                <p class="card-text">Design unique journeys for your learners by customizing modules, adding your own content, and aligning with your curriculum.</p>
            </div>
        </div>
    </a>

</div>
</div>

       







<div class="container my-2">

<div class="accordion" id="academicAccordion">

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-primary" type="button" data-bs-toggle="collapse" 
                data-bs-target="#topic1" aria-expanded="false" aria-controls="topic1">
                <i class="bi bi-book me-2"></i> Understanding Calculus: Fundamentals & Applications
            </button>
        </h2>
        <div id="topic1" class="accordion-collapse collapse" data-bs-parent="#academicAccordion">
            <div class="accordion-body">
                Calculus is the study of change and motion. In this module, you'll explore **derivatives, integrals, and their real-world applications** in physics, engineering, and economics.
            </div>
        </div>
    </div>

   
    <div class="accordion-item mt-1" data-aos="fade-up" data-aos-delay="400">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed text-white bg-primary" type="button" data-bs-toggle="collapse" 
                data-bs-target="#topic2" aria-expanded="false" aria-controls="topic2">
                <i class="bi bi-journal-bookmark me-2"></i> Effective Study Techniques for Academic Success
            </button>
        </h2>
        <div id="topic2" class="accordion-collapse collapse" data-bs-parent="#academicAccordion2">
            <div class="accordion-body">
                Learn powerful study methods like **active recall, the Feynman technique, and spaced repetition** to retain information better and improve exam performance.
            </div>
        </div>
    </div>

</div>


</div>





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
                <a href="course-details"><img src="<?=ROOT?>\assets\img\pexels-emily-ranquist-493228-1205651.jpg" alt="" class="img-fluid"></a>
                <div class="course-meta"><span class="category">O Level</span> <span class="mx-1">•</span>
                    <span>Updated 2025</span>
                </div>
                <h2><a href="course-details">Mathematics for O Level: Master the Fundamentals</a></h2>
                <p class="mb-4 d-block">Comprehensive guide to O Level Mathematics with step-by-step solutions.</p>

                <div class="d-flex align-items-center instructor">
                    <div class="photo">
                    <img src="<?=ROOT?>/assets/img/pexels-emily-ranquist-493228-1205651.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- <div class="name">
                        <h3 class="m-0 p-0">Dr. Jane Doe</h3>
                    </div> -->
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
<?php $this->view('includes/scriptfiles',$data) ?>