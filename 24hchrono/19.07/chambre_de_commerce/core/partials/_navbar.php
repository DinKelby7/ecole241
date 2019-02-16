<header id="header" class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<!-- Logo -->
				<div class="logo">
					<a href="index.php"><img src="assets/images/logo7.jpg" alt="logo"></a>
				</div>
				<!--/ End Logo -->
				<div class="mobile-nav"></div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<!-- Header Widget -->
				<div class="header-widget">
					<!-- Single Widget -->
					<div class="single-widget">
						<i class="fa fa-clock-o"></i>
						<h4>Ouvertures</h4>
						<p><?= __HOURS__ ?></p>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="single-widget">
						<i class="fa fa-envelope"></i>
						<h4> Addresse Email</h4>
						<p><a href="mailto:contact@cci-gabon.com"><?= __MAIL__ ?></a></p>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="single-widget">
						<i class="fa fa-phone"></i>
						<h4>Tel:</h4>
						<p><?= __PHONE__ ?></p>
					</div>
					<!--/ End Single Widget -->
				</div>
				<!--/ End Header Widget -->
			</div>
		</div>
	</div>
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="nav-area">
						<!-- Main Menu -->
						<nav class="mainmenu">
							<div class="collapse navbar-collapse">	
								<ul class="nav navbar-nav">
									<li class="<?php echo ($title == "Accueil" ? "active" : "")?>">
										<a href="index.php">Acceuil</a>
									</li>
									<li class="<?php echo ($title == "A propos" ? "active" : "")?>">
										<a href="about-us.php">CCAIMAG</a></li>			
									<li><a href="#project">Investir au Gabon<i class="fa fa-angle-down"></i></a>
										<ul class="drop-down">
											<li><a href="#">Secteurs d'activité</a></li>
											<li><a href="faq.php">La Gabon en Bref</a></li>
											<li><a href="pricing-table.php">Offre d'investissement</a></li>
											<li><a href="testimonial.php">La creation d'entreprises</a></li>
										</ul>
									</li>	
									<li><a href="#">services<i class="fa fa-angle-down"></i></a>
										<ul class="drop-down">
											<li><a href="espace-vente.php">Espace Vente</a></li>
											<li><a href="services.php">Espace Formation</a></li>
											<li><a href="service-single-left.php">Formation</a></li>
											<li><a href="service-single.php">Bulletin d'information Economique</a></li>
											<li><a href="service-single-full.php">Observatoire Economique</a></li>
										</ul>
									</li>
									<li><a href="#">Projets<i class="fa fa-angle-down"></i></a>
										<ul class="drop-down">

											<li><a href="projects-3-column.php">CAMC-CA</a></li>
											<li><a href="projects-2-column.php">CGA-GA</a></li>
											<li><a href="projects-2-column.php">BSTPG</a></li>

										</ul>
									</li>
									<li  class="<?php echo ($title == "Entreprises" ? "active" : "")?>">
										<a href="Entreprises.php">Entreprises</a>
									</li>
								</ul>
								<ul class="nav navbar-nav nav-right" style="float: right;">
									<?php if (isset($_SESSION['user_session'])) {?>
										<li class="<?php echo ($title == "Dashboard" ? "active" : "")?>">
											<a href="dashboard/src3/index.php" class="btn btn-warning">Tableau de bord</a>
										</li>
										<li>
											<a href="unset.php" class="btn btn-warning">Se deconnecter</a>
										</li>
									<?php }else { ?>

									<li class="<?php echo ($title == "Inscription" ? "active" : "")?>">
										<a href="signup.php" class="btn btn-warning">Rejoignez-nous</a>
									</li>
									<li class="<?php echo ($title == "Connexion" ? "active" : "")?>">
										<a href="login.php">Connexion</a>
									</li>
									<?php } ?>
									
								</ul>
							</div>
						</nav>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>