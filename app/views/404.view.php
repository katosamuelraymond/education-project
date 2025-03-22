<?php $this->view('includes/head', $data); ?>
<?php $this->view('includes/header', $data); ?>

<body>

    <main>
        <div class="container">

        <main>
    <div class="container">
        <section class="section error-404 min-vh-100 d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <!-- Image Section -->
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?=ROOT?>/assets/img/not-found.svg" class="img-fluid" alt="Page Not Found">
                </div>
                <!-- Text Section -->
                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
                    <h1>404</h1>
                    <h2>The page you are looking for doesn't exist.</h2>
                    <a class="btn btn-primary mt-3" href="home">Back to Home</a>
                </div>
            </div>
        </section>
    </div>
</main>


        </div>
    </main>
    <?php $this->view('includes/footer', $data); ?>

 