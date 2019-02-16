<?php  
// header+navbar
include "partials/_header.php";
  include "partials/_aside.php";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Profile</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box bg-info bg-deathstar-dark">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded img-fluid mx-auto d-block" src="../images/5.jpg" alt="User profile picture">

              <h2 class="profile-username text-center mb-0"><?= $nom ?></h2>

              <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i><?= $mail ?></h4>
        
              <div class="row social-states">
                <div class="col-6 text-right"><a href="#" class="link text-white"><i class="ion ion-ios-people-outline"></i> 254</a></div>
                <div class="col-6 text-left"><a href="#" class="link text-white"><i class="ion ion-images"></i> 54</a></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="box box-solid bg-black">
      <div class="box-header with-border">
        <h3 class="box-title">Details</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
        <div class="col-12">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" placeholder="<?= $nom ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input class="form-control" type="email" placeholder="<?= $mail ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Statut</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" placeholder="<?= $statut ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-yellow">Modifier</button>
            </div>
          </div>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "partials/_footer.php"; ?>