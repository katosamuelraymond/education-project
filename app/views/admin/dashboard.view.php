<?php 
$data['pageTitle'] = "Dashboard - incredible education platform";
$this->view('admin/includes/admin.head',$data);


$this->view('admin/includes/admin.header',$data);
$this->view('admin/admin.aside',$data);

?>
 <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=ROOT?>">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>

<div class="col-lg-8">
    <div class="row">
    </div>
</div>

<div class="col-lg-4">

</div>
</main>


<?=$this->view('admin/includes/admin.footer',$data);?>
<?php $this->view('admin/includes/admin.scripts',$data) ?>
