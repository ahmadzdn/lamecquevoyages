<?PHP include('templates/header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    table{
        font-size:20px;
    }

</style>

	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?PHP include('templates/menu.php'); ?>
            <img src="http://picpickle.com/p.php?m=download&id=373425" class="omra" />
		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Omra deluxe</h3>
					</div>
				</div>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"><i class="glyphicon glyphicon-bed"></i> x 4</th>
                        <th scope="col"><i class="glyphicon glyphicon-bed"></i> x 3</th>
                        <th scope="col"><i class="glyphicon glyphicon-bed"></i> x 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Adulte</th>
                        <td>1 290 € par personne</td>
                        <td>1 390 € par personne</td>
                        <td>1 490 € par personne</td>
                    </tr>
                    <tr>
                        <th scope="row">Enfant de 2 à 11 ans</th>
                        <td>1 220 € par enfant</td>
                        <td>1 320 € par enfant</td>
                        <td>1 420 € par enfant</td>
                    </tr>

                    <tr>
                        <th scope="row">Enfant de 2 à 6 ans (sans lit)</th>
                        <td>950 €</td>
                        <td>950 €</td>
                        <td>950 €</td>

                    </tr>

                    <tr>
                        <th scope="row">Bébé de - 2 ans</th>
                        <td>250 €</td>
                        <td>250 €</td>
                        <td>250 €</td>

                    </tr>
                    </tbody>
                </table><br><br>


				<form action="#">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">L'offre comprend</h3><br>
                            <ul class="contact-info">
                                <li><i class="icon-airplane"></i> Visa & Billet</li>
                                <li><i class="icon-office"></i> Hôtel</li>
                                <li><i class="icon-rocket"></i> Transfert</li>
                                <li><i class="icon-star-full"></i>Lamecque<br>
                                    Hôtel 5 🌟 en face de la mosquée sacré
                                    (Swiss hôtel,zamzam pullman,hilton ou similaire)</li>
                                <li><i class="icon-star-full"></i>Medine<br>
                                    Hôtel 5 🌟 a quelques mètres du masjid nabawi
                                    (Zamzam pullman, Millenium,golden tulipes ou similaire)
                                    Petit déjeuner (buffet à volonté)</li>
								<li><i class="icon-user"></i>Cours d'etudiants en science sur les rites de la omra et sa récompense</li>
								<li><i class="icon-flag"></i>Accompagnateur bilingue</li>
								<li><i class="icon-map"></i>visite de medine(masjid quba, cimetière des martyrs de la bataille d'uhud, dégustation lait de chamelle et visite palemerais)</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Prénom">
									</div>
								</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Numéro de téléphone">
                                    </div>
                                </div>
                                <hr>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre de personne:</label>
                                        <select id="monselect" class="form-control">
                                            <option value="valeur1">1</option>
                                            <option value="valeur2">2</option>
                                            <option value="valeur3">3</option>
                                            <option value="valeur3">4</option>
                                            <option value="valeur3">5</option>
                                            <option value="valeur3">6</option>
                                            <option value="valeur3">7</option>
                                            <option value="valeur3">8</option>
                                            <option value="valeur3">9</option>
                                            <option value="valeur3">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre d'enfant:</label>
                                        <select id="monselect" class="form-control">
                                            <option value="valeur1">0</option>
                                            <option value="valeur2">1</option>
                                            <option value="valeur3">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" class="form-control" id="" cols="30" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>

								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Contactez" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	<?PHP include('templates/footer.php'); ?>

	</body>
</html>

