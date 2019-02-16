<?php
	//Constantes 
	include "core/constant/_constant.php";

	$title = "About";

	//Header+navbar 
	include "core/partials/_header.php";
?>
			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>A propos</h2>
							<ul class="bread-list">
								<li><a href="index.php">Acceuil<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="about-us.html">A propos de nous</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Breadcrumbs -->

			<!-- About Us -->
			<section id="about-us" class="about-us section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="tabs-main center-nav">	
								<div class="nav-main">
									<!-- Tab Menu -->
									<ul class="nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#about" role="tab" data-toggle="tab"><i class="fa fa-user"></i><span>A propos</span></a></li>
										<li role="presentation"><a href="#story" role="tab" data-toggle="tab"><i class="fa fa-pencil"></i><span>Notre Histoire</span></a></li>
										<li role="presentation"><a href="#photo" role="tab"  data-toggle="tab"><i class="fa fa-photo"></i><span>Gallerie Photo</span></a></li>
									</ul>
								</div>
								<!--/ End Tab Menu -->
								<div class="tab-content">
									<!-- About Us Tab -->
									<div role="tabpanel" class="tab-pane fade in active" id="about">
										<div class="about-inner">
											<div class="row">
												<div class="col-md-5 col-sm-12 col-xs-12">
													<!-- About Image -->
													<div class="single-image">
														<img src="assets/images/Eric-Raynard-Ndama.jpg" alt="">
														<!-- Tab Video -->
														<a href="https://www.youtube.com/watch?v=Lw1gU07fruI" class="video-popup mfp-iframe"><i class="fa fa-play"></i></a>
														<!--/ End tab video -->
													</div>
												</div>
												<!-- End About Image -->
												<div class="col-md-7 col-sm-12 col-xs-12">
													<div class="content">
														<h2 class="tab-title">Qui nous somme?</h2>
														<p class="text">La Chambre de Commerce est un organe représentatif des intérets de l'ensemble des opérateurs économiques exercant légalement sur leterritoire national. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. </p>
														<p class="text">C’est un établissement public, doté d’une personnalité juridique et placé sous la tutelle du Ministère en charge de l’Economie. La Chambre de Commerce du Gabon jouit d’une autonomie financière. Toute entreprise légalement constituée au Gabon est d’office membre de la Chambre de Commerce. Toutefois, le Bureau actuel suscite une adhésion volontaire moyennant des frais d’adhésion s’élevant à 30 000 F CFA et payable une seule fois.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--/ End About Us Tab -->
									<!-- Story Tab -->
									<div role="tabpanel" class="tab-pane fade in" id="story">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="content">
													<h2 class="tab-title">Our Story</h2>
													<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet magna vitae ligula varius imperdiet. Donec ultrices aliquet eleifend. Pellentesque nec mauris at libero imperdiet fermentum.Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper purus suscipit ultricies tincidunt. Nulla eget turpis ac leo euismod pharetra at nec diam.
														Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper </p>
													<p class="text">Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper  Nulla eget turpis ac leo euismod pharetra at nec diam.
														Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. </p>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Story Tab -->
									<!-- Gallery Tab -->
									<div role="tabpanel" class="tab-pane fade in" id="photo">
										<div class="photo-gallery">
											<div class="row fix">		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/gallery-1.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/team/arton1257.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/team/arton1257.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/gallery-2.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/gallery-3.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/gallery-3.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/gallery-4.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/gallery-4.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/gallery-5.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/gallery-5.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>		
												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<img src="assets/images/gallery-6.jpg" alt=""/>
														<a data-fancybox="gallery" href="assets/images/gallery-6.jpg"><i class="fa fa-search"></i></a>
														<div class="caption">
															<p>Gallery Caption</p>
														</div>
													</div>
												</div>			
											</div>
										</div>
									</div>
									<!--/ End Gallery Tab  -->
									<!-- challanges Tab -->
									<div role="tabpanel" class="tab-pane fade in" id="challanges">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="content">
													<h2 class="tab-title">Our Challanges</h2>
													<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet magna vitae ligula varius imperdiet. Donec ultrices aliquet eleifend. Pellentesque nec mauris at libero imperdiet fermentum.Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper purus suscipit ultricies tincidunt. Nulla eget turpis ac leo euismod pharetra at nec diam.
														Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper </p>
													<p class="text">Nulla eget turpis ac leo euismod pharetra at nec diam.
														Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat.  Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper</p>
												</div>
											</div>
										</div>
									</div>
									<!--/ End challanges Tab -->
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End About Us -->

			<?php include "core/partials/_footer.php"; ?>