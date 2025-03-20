<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
       
        <a class="navbar-brand" href="<?=ROOT?>">
        <img src="<?=ROOT?>/NiceAdmin/assets/img/logo.png" alt="" height="40"> 
        </a>

        <div class="" id="">
            <ul class=" ms-auto"> 
               
                <li class="nav-item">
                    <a class=" btn btn-primary" href="<?=ROOT?>/login">Login</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="<?=ROOT?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?=ROOT?>/NiceAdmin/assets/img/logo.png" alt="">
            <h1 class="sitename"><?=APPNAME?></h1>
        </a>


        <?php $this->view("includes/nav") ?>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>
