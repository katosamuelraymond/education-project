<?php $this->view('includes/head', $data); ?>
<?php $this->view('includes/header', $data); ?>

<main class="main my-5">
    <div class="container mt-5">
        <h2 class="text-center">Apply to Become a Trainer</h2>

        <?php if (!empty($data['error'])): ?>
            <div class="alert alert-danger"><?= $data['error'] ?></div>
        <?php endif; ?>

        <div class="d-flex justify-content-between">
           
            <div class="trainer-carousel" style="flex: 1; width: 50%; padding-right: 20px;">
                <div id="trainerCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="path_to_your_image1.jpg" class="d-block w-100" alt="Trainer Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="path_to_your_image2.jpg" class="d-block w-100" alt="Trainer Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="path_to_your_image3.jpg" class="d-block w-100" alt="Trainer Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#trainerCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#trainerCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Form Section (50% width) -->
            <div class="form-section" style="flex: 1; width: 50%; padding-left: 20px;">
                <form action="<?= ROOT ?>/trainers/apply" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject of Expertise</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Brief Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>

                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter Profile</label>
                        <input type="url" class="form-control" id="twitter" name="twitter">
                    </div>

                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook Profile</label>
                        <input type="url" class="form-control" id="facebook" name="facebook">
                    </div>

                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram Profile</label>
                        <input type="url" class="form-control" id="instagram" name="instagram">
                    </div>

                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn Profile</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $this->view('includes/footer', $data); ?>
<?php $this->view('includes/scriptfiles',$data) ?>

