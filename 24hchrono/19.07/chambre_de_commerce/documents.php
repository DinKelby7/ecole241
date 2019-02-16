<?php
	//Constantes 
	include "core/constant/_constant.php";

	$title = "Documents";

	//Header+navbar 
	include "core/partials/_header.php";
?>

			<!-- Start Breadcrumbs -->
			<div class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="call-to-main">
								<h2> <span>Nous mettons a votre disopsition un Certificat d'origine</span></h2>
								<a href="contact.html" class="btn primary">Reserver</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Espace Ventes</h2>
							<ul class="bread-list">
								<li><a href="index-2.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="blog-grid-layout.html">Espace Ventes</a></li>
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
						<div class="col-md-10">
							<div class="row">
								<form action="">
									<div class="col-md-6"> <input type="text" class="form-control" id="pwd" placeholder="Entrer votre recherche" name="pwd"></div>
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
									<div class="col-md-2"><a href="#" class="btn radius">Rechercher</a></div>
								</form>

							</div>
						</div>
					</div>
				</div><br>
				<div class="container">

					<div class="row">
						<div class="blog-main">
							<div class="col-md-3">
								<div class="single-sidebar category">
									<h2><span>Categories</span></h2>
									<ul>
										<li class="active"><a href="#">Espaces de Travail</a></li>			
										<li><a href="#">Salles</a></li>			
										<li><a href="#">Documents</a></li>			
										<li><a href="#">Centre de Formation</a></li>					
									</ul>
								</div>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/document1.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Certificat d'Origine</a></h2>

												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Acheter</button>
												</form>
											</div>					
										</div>
										<!--/ End Single Post -->
									</div>

									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/document2.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Bases de données Entreprises</a></h2>


												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Télécharger</button>
												</form>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/document3.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Fiche Observation Economique</a></h2>


												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Télécharger</button>
												</form>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/document4.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Statistiques mensuelle</a></h2>


												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Télécharger</button>
												</form>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/docment5.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Fiche consulaire</a></h2>


												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Télécharger</button>
												</form>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog slider">
											<div class="blog-post">
												<div class="blog-head">
													<img src="images/document2.PNG" alt="#">
												</div>
												<div class="blog-info">
													<h2><a href="blog-single.html">Modèle Tableau statistique</a></h2>


												</div>
												<form action="/action_page.php">
													<button type="submit" class="btn btn-default">Télécharger</button>
												</form>
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