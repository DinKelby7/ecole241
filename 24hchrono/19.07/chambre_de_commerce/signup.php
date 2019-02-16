<?php
	//Constantes 
	include "core/constant/_constant.php";
	$title = "Inscription";
	//Header+navbar 
	include "core/partials/_header.php"; 
?>

			<!-- Start Contact -->
			<section id="contact-us" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Nous somme content de vous revoir</h1>
								<p>Veuillez vous connecter pour beneficier de plusieurs offres concernant votre domaine d'activite etc...</p>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Contact Form -->
						<div class="col-md-6 col-md-offset-3 col-xs-12">
							<form class="form" method="post" action="core/functions/_signup.php">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="nom" placeholder="Entrez votre nom" required="required">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" name="email" placeholder="Votre Email" required="required">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="password" name="password" placeholder="Votre mot de passe" required="required">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										  <select class="form-control" name="statut" style="border-radius: 0 !important;">
										    <option value="">Vous etes ?</option>
										    <option value="entreprise">Entreprise</option>
										    <option value="etudiant">Etudiant</option>
										    <option value="partenaire">Partenaire</option>
										  </select>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group button">	
											<button type="submit" name="inscription" class="btn primary">Nous rejoindre</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End Login Form -->

					</div>
				</div>
			</section>
			<!--/ End Contact -->

			<?php include "core/partials/_footer.php"; ?>