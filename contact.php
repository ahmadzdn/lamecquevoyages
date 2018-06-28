<?PHP

$title = "Bienvenue !";
include('templates/header.php');

?>
	<body>
		<div id="fh5co-wrapper">

            <?PHP include('templates/menu.php'); ?>
		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Contact</h3>

					</div>
				</div>
				<form action="#">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Information</h3>
                            <ul class="contact-info">
								<li><i class="icon-location-pin"></i>Adresse</li>
								<li><i class="icon-phone2"></i>+ 33</li>
								<li><i class="icon-mail"></i><a href="#">email</a></li>

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
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Envoyer" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>


	<div id="map" class="fh5co-map"></div>


            <?PHP include('templates/footer.php'); ?>





	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>



	</body>
</html>

