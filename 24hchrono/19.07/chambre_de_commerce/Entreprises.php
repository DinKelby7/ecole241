<?php
	//Constantes 
	include "core/constant/_constant.php";

	$title = "Entreprises";

	//Header+navbar 
	include "core/partials/_header.php";
?>
		
			<!-- Start Breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
						<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="call-to-main">
										<h2> <span>Nous mettons a votre disopsition un large catalogue d'entreprises Gabonaises </span></h2>
									</div>
								</div>
							</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Espace Entreprises</h2>
							<ul class="bread-list">
								<li><a href="index-2.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="blog-grid-layout.html">Espace Entreprises</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Breadcrumbs -->
			
			<!-- Start Blog -->
			<section id="blog-main" class="blog-main archive grid section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
								<div class="row" style="padding: 0 !important;">
									<form action="">
										<div class="col-md-6 m-0"> <input type="text" class="form-control" id="pwd" placeholder="Entrer votre recherche" name="pwd"></div>
										<div class="col-md-2">
											<select name="form-action" class="form-control">
												<option value="">Libreville</option>
												<option value="">Port-Gentil</option>
												<option value="">Franceville</option>
											</select>
										</div>
										<div class="col-md-2">
											<select name="form-action" class="form-control">
												<option value="">Charbonnage</option>
												<option value="">Nzeng-Ayong</option>
												<option value="">Louis</option>
											</select>
										</div>
										<div class="col-md-2 p-0"><a href="#" class="btn btn-success">Rechercher</a></div>
									</form>
									
								</div>
						</div>
					</div>
				</div><br>
				<div class="container">
						
					<div class="row">
						<div class="blog-main">
							
							<div class="col-md-10 col-md-offset-1 col-xs-9 hauteur">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
												<div class="blog-post">
														<div class="blog-head">
															<img src="assets/images/project/logo1.png" alt="#">
														</div>
														<div class="blog-info">
															<h2><a href="blog-single.html">CAISTAB</a></h2>
														
														</div>
														<a href="#" class="btn btn-default">Voir plus</a>
													</div>					
										</div>
										<!--/ End Single Post -->
									</div>
									
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
												<div class="blog-post">
														<div class="blog-head">
															<img src="assets/images/project/Averda5.png" alt="#" style="height: 180px;">
														</div>
														<div class="blog-info">
															<h2><a href="Averda.html">Averda</a></h2>
															
															
														</div>
														
														<a href="Averda.html" class="btn btn-default">Voir plus</a>
													</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="assets/images/project/logo-gabon-television.png" alt="#" style="height: 180px;">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Gabon Televisions</a></h2>
													
													
												</div>
												<a href="Averda.html" class="btn btn-default">Voir plus</a>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									
									
									
								</div>
								<div class="row">
									<div class="col-md-12">
										<!-- Start Pagination -->
										<div class="pagination-main">
											<ul class="pagination">
												<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li class="active"><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#">6</a></li>
												<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
											</ul>
										</div>
										<!--/ End Pagination -->
									</div>
								</div>			
							</div>
						</div>						
					</div>
				</div>
			</section>
			<!--/ End Blog -->	
			
			<!-- Start Call-To-Action -->
			<section class="call-to-action">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							
						</div>
					</div>
				</div>
			</section>
			<!--/ End Call-To-Action -->
		
			<?php include "core/partials/_footer.php"; ?>