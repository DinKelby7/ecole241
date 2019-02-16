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
        Gestionnaire du site
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="breadcrumb-item active">Investisseurs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-md-12 col-lg-12">
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
            	<!-- Nav tabs -->
				<div class="vtabs">
					<ul class="nav nav-tabs tabs-vertical" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Ajouter un evenement</span> </a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Ajouter un article</span> </a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Ajouter un document</span> </a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Ajouter une annonce</span> </a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home4" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Modifier les preferences du site</span> </a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Modifier l'apparence du site</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home4" role="tabpanel">
							<div class="pad">
								<div class="box">
						            <div class="box-header">
						              <!-- tools box -->
						              <div class="pull-right box-tools">
						                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
						                        title="Collapse">
						                  <i class="fa fa-minus"></i></button>
						                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
						                        title="Remove">
						                  <i class="fa fa-times"></i></button>
						              </div>
						              <!-- /. tools -->
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						              <form>
						                <textarea class="textarea w-p100 b-1 p-10" placeholder="Place some text here" ></textarea>
						              </form>
						            </div>
						        </div>
						          <!-- /.box -->
							</div>
						</div>
						<div class="tab-pane pad" id="profile4" role="tabpanel">2</div>
						<div class="tab-pane pad" id="messages4" role="tabpanel">3</div>
					</div>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

<?php  include "partials/_footer.php";?>