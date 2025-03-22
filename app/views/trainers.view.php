
<?php $this->view('includes/head', $data); ?>


<?php $this->view('includes/header', $data); ?>

<body class="index-page">
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Meet Our Expert Trainers</h1>
          <p class="mb-0">Our highly skilled trainers are dedicated to delivering top-quality education.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?= ROOT ?>">Home</a></li>
        <li class="current">Trainers</li>
      </ol>
    </div>
  </nav>
</div>


<section id="trainers" class="section trainers">
  <div class="container">
    <div class="row gy-5">

    <?php if (!empty($trainers)): ?>
    <?php foreach ($trainers as $trainer): ?>
      <div class="col-lg-4 col-md-6 member" data-aos="fade-up">
        <div class="member-img">
          <img src="<?= ROOT ?>/assets/img/trainers/<?= htmlspecialchars($trainer['image']) ?>" class="img-fluid" alt="<?= htmlspecialchars($trainer['name']) ?>">
          <div class="social">
            <a href="<?= htmlspecialchars($trainer['twitter']) ?>"><i class="bi bi-twitter-x"></i></a>
            <a href="<?= htmlspecialchars($trainer['facebook']) ?>"><i class="bi bi-facebook"></i></a>
            <a href="<?= htmlspecialchars($trainer['instagram']) ?>"><i class="bi bi-instagram"></i></a>
            <a href="<?= htmlspecialchars($trainer['linkedin']) ?>"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4><?= htmlspecialchars($trainer['name']) ?></h4>
          <span><?= htmlspecialchars($trainer['subject']) ?></span>
          <p><?= htmlspecialchars($trainer['description']) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-center">No trainers available.</p>
<?php endif; ?>


    </div>
  </div>
</section>
</main>

<?php $this->view('includes/footer', $data); ?>
