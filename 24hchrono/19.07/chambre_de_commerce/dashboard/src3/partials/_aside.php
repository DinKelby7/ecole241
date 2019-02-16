  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       <div class="ulogo">
         <a href="index-2.html">
            <!-- logo for regular state and mobile devices -->
            <span><?= __NAME__ ?></span>
          </a>
        </div>
        <div class="image">
          <img src="../images/people.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p><?= $nom ?></p>
        </div>
      </div>
      <!-- sidebar menu -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="nav-devider"></li>
         <li class="active">
          <a href="../../index.php">
            <i class="fa fa-home"></i> <span>Accueil</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-tachometer-alt"></i> <span>Tableau de bord</span>
          </a>
        </li> 
        <?php  
          if (isset($statut)) {

            switch ($statut) {
              case 'admin':
                include "partials/_adminLinks.php";
                break;
              case 'entreprise':
                include "partials/entLinks.php";
                break;
              case 'partenaire':
                include "partials/_invLinks.php";
                break;
            }
          } 
        ?>  
      </ul>
    </section>
  </aside>