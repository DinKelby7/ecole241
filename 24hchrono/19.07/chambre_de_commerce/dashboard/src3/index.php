<?php  
// header+navbar
include "partials/_header.php";
  include "partials/_aside.php";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tableau de bord</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
    <?php 
    // Selection de contenu admin
    if (isset($statut)) {

      switch ($statut) {
        case 'admin':
          include "partials/_dashAdmin.php";
          break;
        case 'entreprise':
          include "partials/_dashEnt.php";
          break;
        case 'partenaire':
          include "partials/_dashInv.php";
          break;
      }
    } 

  ?>
    </section>
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "partials/_footer.php"; ?>
