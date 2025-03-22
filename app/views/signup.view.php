
<?php $this->view('includes/head',$data); ?>
<?php   $this->view('includes/header',$data); ?>

<body>

    <main>
    <div class="container">

<section class="section register min-vh-95 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="<?=ROOT?>" class="logo d-flex align-items-center w-auto">
                        <!-- Reduced image size -->
                        <img src="<?=ROOT?>/assets/img/logo.png" alt="" style="width: 50px; height: 50px;">
                        <span class="d-none d-lg-block"><?=APPNAME?></span>
                    </a>
                </div>

                <div class="card mb-3 shadow-lg" style="border-radius: 10px; background-color: #f8f9fa;">
                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 text-primary">Create an Account</h5>
                            <p class="text-center small text-muted">Enter your personal details to create an account</p>
                        </div>

                        <form action="" method="post" class="row g-3 needs-validation" novalidate>
                            <div class="col-6">
                                <label for="yourName" class="form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" required>
                                <div class="invalid-feedback">Please, enter your first name!</div>
                            </div>
                            <div class="col-6">
                                <label for="yourName" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" required>
                                <div class="invalid-feedback">Please, enter your last name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" id="yourEmail" required>
                                <div class="invalid-feedback">Please enter a valid Email address!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>
                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the
                                        <a href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit" style="background-color: #007bff;">Create Account</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0">Already have an account? <a href="<?=ROOT?>/login" style="color: #007bff;">Log in</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</div>

    </main>
    <?php $this->view('includes/footer', $data); ?>
