<?PHP

$title = "Bienvenue !";
include('templates/header.php');

?>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?PHP include('templates/menu.php'); ?>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/background.jpeg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Vol</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hôtel</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
                                            <form action="">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Départ:</label>
													<input type="text" class="form-control" id="from-place" required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Arrivée:</label>
													<input type="text" class="form-control" id="to-place" required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Date de départ:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Date d'arrivée:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Classe d'avion:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Economique</option>
														<option value="economy">Affaire</option>
														<option value="first">Première</option>
														<option value="business">Economique première</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adultes:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>

											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Enfants:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>

                                                <div class="col-sm-12 col-sm-6 mt">
                                                    <section>
                                                        <input type="checkbox" id="myCheck"  onclick="myFunction()">  &nbsp;<label for="class">Mes dates sont flexibles (+/- 3 jours)</label>
                                                    </section>
                                                </div>


											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Voir nos offres">
											</div>
										</div>
                                     </form>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Return:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
											</div>
										</div>
									 </div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">

                                    <h2>Une <b>omra</b> sans se ruiner</h2>
									<h3>Accomplissez la omra selon la sunna, en toute sérénité</h3>
								    <p><a class="btn btn-primary btn-lg" href="#">En savoir plus</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-map"></i>
							</span>
							<div class="feature-copy">
								<h3>Confort et proximité.</h3>
								<p>A Médine et à la Mecque, vous logerez dans nos hôtels 3 et 4 étoiles, situés à quelques minutes des deux Mosquées Sacrées.</p>

							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paper-plane"></i>
							</span>
							<div class="feature-copy">
								<h3>Compagnies internationales.</h3>
								<p>Partenaires de notre agence, vous voyagerez avec des compagnies régulières telles que la Saudia Airlines, la Royal Jordanian Airlines ou encore Egyptair.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-user"></i>
							</span>
							<div class="feature-copy">
								<h3>Un encadrement de qualité.</h3>
								<p>Notre équipe vous suivra tout au long de votre séjour. Vous serez formés sur place aux rites du pèlerinage et guidés lors de l'accomplissement de ceux-ci.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-accessibility"></i>
							</span>
							<div class="feature-copy">
								<h3>Votre Omra, mais pas seulement.</h3>
								<p>Vous visiterez des lieux chargés d’histoire : la Bataille d’Uhud, la Mosquée de Quba, le Cimetière du Baqi.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet2"></i>
							</span>
							<div class="feature-copy">
								<h3>Un prix attractif</h3>
								<p>A remplir.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer, apprenez</h3>
								<p>Vous assisterez à des cours et des conférences dispensés par les plus grands savants de notre époque, au sein du Haram de Médine et de Mekka.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Choisissez votre offre</h3>
						<p>Avec possibilité de paiement en plusieurs fois</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="https://oumma.com/wp-content/uploads/2017/02/hajj-758x569.jpg" alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3 class="text-center"><a href="#"><b>DECEMBRE</b></a></h3>
                                    Du 20 au 30
                                    <span class="comment"><a href="">1 090<i class="icon-coin-euro"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="https://oumma.com/wp-content/uploads/2017/02/hajj-758x569.jpg" alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3 class="text-center"><a href="#"><b>JANVIER</b></a></h3>
                                    Du 04 au 14
                                    <span class="comment"><a href="">949<i class="icon-coin-euro"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="https://oumma.com/wp-content/uploads/2017/02/hajj-758x569.jpg" alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3 class="text-center"><a href="#"><b>MARS</b></a></h3>
                                    du 15 au 25 (+/- 2jrs)
                                    <span class="comment"><a href="">949<i class="icon-coin-euro"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="https://oumma.com/wp-content/uploads/2017/02/hajj-758x569.jpg" alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3 class="text-center"><a href="#"><b>AVRIL</b></a></h3>
                                    du 20 au 30 (+/- 2jrs)
                                    <span class="comment"><a href="">949<i class="icon-coin-euro"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>


					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-outline btn-lg" href="#">Indisponible? Crée ton offre sur mesure <i class="icon-arrow-right22"></i></a></p>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Avis client</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo; Ce texte généré aléatoirement (lorem ipsum) peut être utilisé dans vos maquettes (webdesign, sites internet, livres, affiches...) gratuitement. Ce texte est entièrement libre de droit. &rdquo;</p>
						</blockquote>
						<p class="author">Nom Prenom <span class="subtext">19 ans</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo; Ce texte généré aléatoirement (lorem ipsum) peut être utilisé dans vos maquettes (webdesign, sites internet, livres, affiches...) gratuitement. Ce texte est entièrement libre de droit. &rdquo;</p>
                        </blockquote>
                        <p class="author">Nom Prenom <span class="subtext">19 ans</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo; Ce texte généré aléatoirement (lorem ipsum) peut être utilisé dans vos maquettes (webdesign, sites internet, livres, affiches...) gratuitement. Ce texte est entièrement libre de droit. &rdquo;</p>
                        </blockquote>
                        <p class="author">Nom Prenom <span class="subtext">19 ans</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

            <?PHP include('templates/footer.php'); ?>
	</body>
</html>

