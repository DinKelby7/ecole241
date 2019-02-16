<?php  
// header+navbar
include "partials/_header.php";
  include "partials/_aside.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Espace membres</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="breadcrumb-item active">Membres</li>
      </ol>
    </section>

 	<!-- Main content -->
    <section class="content">	  	
<div class="col-12">
			<div class="box">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						<li class="box-label"><a href="javascript:void(0)">Contacts <span>2</span></a></li>
						<li class="divider"></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white mt-10">+ Nouveau statut</a></li>	
					</ul>					  
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
		  <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Add Lable</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-12">Name of Label</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="type name"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Select Number of people</label>
									<div class="col-md-12">
										<select class="form-control">
											<option>All Contacts</option>
											<option>10</option>
											<option>20</option>
											<option>30</option>
											<option>40</option>
											<option>Custome</option>
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
							<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h3 class="box-title">Contacts / Employee List</h3>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>No</th>
							<th>Nom</th>
							<th>Email</th>
							<th>Statut</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>admin</td>
							<td>admin@admin</td>
							<td>admin</td>
							<td>12-02-2019</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Supprimer"><i class=" fa fa-trash" aria-hidden="true"></i></button>
								<button type="button" class="btn btn-sm btn-info-outline" data-toggle="tooltip" data-original-title="Details"><i class=" fa fa-eye" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>ent</td>
							<td>ent@ccaimag.com</td>
							<td>entreprise</td>
							<td>14-02-2019</td>
							<td>
								<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Supprimer"><i class=" fa fa-trash" aria-hidden="true"></i></button>
								<button type="button" class="btn btn-sm btn-info-outline" data-toggle="tooltip" data-original-title="Details"><i class=" fa fa-eye" aria-hidden="true"></i></button>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-contact">Ajouter un membre</button>
							</td>							
							<td colspan="7">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
				  <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel2">Add New Contact</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<form class="form-horizontal form-element">												
												<div class="col-md-12 m-b-20">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Nom"> </div>
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Email"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Designation"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Age"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Date of joining"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Salary"> 
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   </div>

  <?php include "partials/_footer.php"; ?>