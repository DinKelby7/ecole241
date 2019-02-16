<?php  
// header+navbar
include "partials/_header.php";
  include "partials/_aside.php";
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mes investisseurs
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="breadcrumb-item active">IInvestisseurs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box bg-pale-yellow">
    <div class="box-body p-0">
      <div class="row">
        <div class="col-lg-3">
          <div>
            <input class="form-control text-dark p-30 bg-yellow" type="text" data-ref="input-search" placeholder="Rechercher investisseur">
          </div>
        </div>
        <div class="col-lg-9">          
          <ul class="list-inline mb-0 text-center">
            <li data-filter="all"><a href="#" class="btn text-bold list-link hover-yellow p-15">Tous</a></li>
            <li data-filter=".ong"><a href="#" class="btn text-bold list-link hover-yellow p-15">ONG</a></li>
            <li data-filter=".financier"><a href="#" class="btn text-bold list-link hover-yellow p-15">Etablissement financier</a></li>
            <li data-filter=".prive"><a href="#" class="btn text-bold list-link hover-yellow p-15">Prive</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-12">
        <div class="box bg-pale-dark">
        <div class="box-body p-0">
          <div class="media-list media-list-hover media-list-divided radio-group radios-filter">
          <div class="media">
            <div class="radio">
              <input name="group1" value="all" type="radio" class="with-gap radio-col-yellow" id="radio_0">
              <label for="radio_0" class="mb-0 font-weight-600">tous</label>
            </div>
          </div>
          <div class="media">
            <div class="radio">
              <input name="group1" value=".ong" type="radio" class="with-gap radio-col-yellow" id="radio_1">
              <label for="radio_1" class="mb-0 font-weight-600">Ong</label>
            </div>
          </div>
          <div class="media">
            <div class="radio">
              <input name="group1" value=".financier" type="radio" class="with-gap radio-col-yellow" id="radio_2">
              <label for="radio_2" class="mb-0 font-weight-600">Etablissements financier</label>
            </div>
          </div>
          <div class="media">
            <div class="radio">
              <input name="group1" value=".prive" type="radio" class="with-gap radio-col-yellow" id="radio_3">
              <label for="radio_3" class="mb-0 font-weight-600">Prive</label>
            </div>
          </div>
          </div>
        </div>
            </div>        
      </div>
      <div class="col-lg-9 col-12">
        <div class="row ico-filter" data-ref="ico-filter">
          <div class="col-6 col-lg-4">
            <div class="box box-body bg-hexagons-dark ong pull-up">
              <div class="flexbox align-items-center">
              <label class="toggler toggler-yellow">
                <input type="checkbox">
                <i class="fa fa-star"></i>
              </label>
              <div class="dropdown">
                <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="fa fa-cog"></i></a>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(13px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-fill"><i class="fa fa-fw fa-user"></i> information</a>
                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                <!-- <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> supprimer</a>
                </div>
              </div>
              </div>
              <div class="text-center pt-3">
              <a href="#">
                <img class="avatar avatar-xxl" src="http://www.keva-in.org/wp-content/uploads/2018/01/Logo-KEVA_Horiz-1024x270.png" alt="">
              </a>
              <h5 class="mt-15 mb-0"><a href="#">KEVA INITIATIVE</a></h5>
              <span>ong</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-4">
            <div class="box box-body bg-hexagons-dark ong pull-up">
              <div class="flexbox align-items-center">
              <label class="toggler toggler-yellow">
                <input type="checkbox">
                <i class="fa fa-star"></i>
              </label>
              <div class="dropdown">
                <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="fa fa-cog"></i></a>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(13px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-fill"><i class="fa fa-fw fa-user"></i> information</a>
                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                <!-- <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> supprimer</a>
                </div>
              </div>
              </div>
              <div class="text-center pt-3">
              <a href="#">
                <img class="avatar avatar-xxl" src="https://www.olamgroup.com/content/dam/olamgroup/icons/olam-colour.svg" alt="">
              </a>
              <h5 class="mt-15 mb-0"><a href="#">OLAM</a></h5>
              <span>Prive</span>
              </div>
            </div>
          </div>        
      </div>
      <nav>
        <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#">
          <span class="ion-ios-arrow-thin-left"></span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#">
          <span class="ion-ios-arrow-thin-right"></span>
          </a>
        </li>
        </ul>
      </nav>
      </div> 
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
  	
<!-- MODALS -->
<!-- Modal -->
        <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Informations</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <p>

              L’ONG KEVA Initiative est une ONG environnementale créée en 2016 ayant son siège à Libreville.

              KEVA INITIATIVE a pour mission de contribuer à la gestion des terres et des ressources en harmonie avec le bien-être de l’homme Les activités de KEVA INITIATIVE sont organisées autour de trois objectifs majeurs : <br>

                  Développer les connaissances, informations et outils nécessaires à la gestion durable des ressources naturelles ; <br>
                  Développer des méthodes et solutions pour l’amélioration des pratiques en vue du maintien d’un environnement sain en harmonie avec le bien-être humain ; <br>
                  Accompagner les parties prenantes sur la voie du développement durable. <br>

              Notre conviction qui constitue notre hypothèse de travail est que de meilleures informations permettent une meilleure prise de décision et de meilleurs pratiques pour assurer le développement durable. <br>

              Sur cette base, notre travail est encadré par les valeurs suivantes : Organisation, transparence, bonne gouvernance, Crédibilité, fiabilité, Expertise, compétence, Partenariat, collaboration, accompagnement.
              </p>
            <br><br><br><br><br><br>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Envoyer un message</button>
            </div>
          </div>
          </div>
        </div>
        <!-- /.modal -->

  <!-- ./Modals -->
  <?php  include "partials/_footer.php";?>
