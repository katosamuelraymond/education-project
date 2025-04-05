
<?php 
$data['pageTitle'] = "Sign Up - incredible education platform";

$this->view('includes/head',$data); ?>




<?php   $this->view('includes/header',$data); ?>

<body>

<main>
    <div class="container">

      <section class="section register min-vh-100  d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center ">
                <a href="<?=ROOT?>" class="logo d-flex align-items-center w-auto">
                  <img src="<?=ROOT?>/niceadmin/assets/img/logo.png" alt="">
                  
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-6">
                      <label for="yourName" class="form-label">First Name</label>
                      <input value="<?= set_value('firstname');?>" type="text" name="firstname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                      
                      
                    </div>
                    <div class="col-6">
                      <label for="yourName2" class="form-label">Last Name</label>
                      <input value="<?= htmlspecialchars(set_value('lastname'));?>" type="text" name="lastname" class="form-control  <?= !empty($errors['lastname']) ? "border-danger": ""; ?>" id="yourName2" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                     
                      <?php if (!empty($errors['lastname'])): ?>
                      <small class="text-danger"><?= $errors['lastname']; ?></small>
                       <?php endif; ?>
                      </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input value="<?= htmlspecialchars(set_value('email'));?>" type="email" name="email" class="form-control  <?= !empty($errors['email']) ? "border-danger": ""; ?>" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      
                      <?php  if(!empty($errors['email'])):?>
                        <small class="text-danger"><?= $errors['email'];?></small>
                      <?php endif;?>

                    </div>
 
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input value="<?= set_value('password');?>" type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Retype Password</label>
                      <input value="<?= set_value('retype_password'); ?>" type="password" name="retype_password" class="form-control" id="yourPassword2" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input <?= set_value('terms') ? 'checked':''; ?> class="form-check-input" name="terms" type="checkbox" value="1" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?=ROOT?>/login">Log in</a></p>
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
<?php $this->view('includes/scriptfiles',$data) ?>

