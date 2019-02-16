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
        Profile
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-tachometer-alt"></i> Accueil</a></li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-3 col-12">

          <!-- Profile Image -->
          <div class="box bg-inverse bg-dark bg-hexagons-white">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="../images/people.png" alt="User profile picture">

              <h3 class="profile-username text-center">Billy Marc</h3>

              <p class="text-center">DELTA AGRICOLE.</p>
        
            
              <div class="row">
                <div class="col-12">
                  <div class="profile-user-info">
                    <p><i class="fa fa-envelope pr-15"></i>Liam@yahoo.com </p>
                    <p><i class="fa fa-phone pr-15"></i>+241 061 69 061</p>
                    <p><i class="fa fa-map-marker pr-15"></i>1213, Agondge, AKANDA, GABON</p>
                    <p class="mt-25">Reseaux sociaux</p>
                    <div class="user-social-acount">
                      <button class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
                      <button class="btn btn-block btn-social btn-instagram"><i class="fa fa-instagram"></i> Instagram</button>
                      <button class="btn btn-block btn-social btn-google"><i class="fa fa-google-plus"></i> Google</button>
                    </div>
                    <div class="map-box mt-25 mb-0">
                      <iframe src="https://www.google.com/maps/place/Libreville/data=!4m2!3m1!1s0x107f3b8a5438f3ed:0x7bc2e2f27cd22bc2?ved=2ahUKEwjxlZDIja7gAhXCwcQBHTnhAs0Q8gEwAHoECAAQAQ" height="150" class="w-p100 b-0" allowfullscreen></iframe>
                    </div>
                  </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Parametres</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                 <ul class="timeline2">
                  <li>
                    <div class="timeline-badge bg-info"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                      <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                    </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge bg-warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                      <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper.</p>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge bg-danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                    </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge bg-info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                      <hr>
                      <div class="btn-group">
                        <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon ti-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                    </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge bg-success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
                    </div>
                    </div>
                  </li>
                </ul>
                
              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="settings">
                <form class="form-horizontal form-element col-12">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Nom</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Mot de passe</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Localisation</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Contact</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Secteur d'activite</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <div class="checkbox">
                        <input type="checkbox" id="basic_checkbox_1" checked="">
            <label for="basic_checkbox_1"> J'accepte les</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Termes & Conditions d'utilisation de ce service</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success">Modifier</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php  include "partials/_footer.php";?>
