<?php
  //init session management
  session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// Opens database connection
	require_once 'assets/config/db.php';
	// Gets information from database
	require_once 'assets/functions/select-id.php';
  // Gets header design
  require_once 'assets/include/header.php';
 	// Process data to database
   require_once 'assets/functions/session.login.php';
?>
<main class="container mt-5">
	<section class="knappar mb-2">
		<?php     
      // Checks if user is logged in     
      if (isset($_SESSION['id']) && $_SESSION['id'] == 1) {          ?>
	  	<a class="btn btn-outline-dark mt-3 rounded-0 buttondesign" href="redigera.php?id=<?php echo $row['id']; ?>" role="button"><i class="fas fa-pencil-alt mr-2"></i> Redigera produkt </a>
			<a class="btn btn-outline-dark mt-3 rounded-0 buttondesign" href="radera.php?id=<?php echo $row['id']; ?>" role="button"><i class="far fa-trash-alt mr-2"></i> Ta bort produkt </a>
     <?php }     
     ?> 
	</section>
  <!-----------------------
  PRODUCT INFORMATION AND IMAGES
  ---------------------->
	<div class="row">
    <!-- Product images -->
		<section class="col-md-6"> 
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">   
          <?php echo 
            '<img src="assets/photos/'.$row['thumb'].'" class=" w-100 produktbild" alt="produktbild 1">' 
          ?>
					<div class="carousel-item active">
					</div>
					<div class="carousel-item">
						<img src="https://unsplash.it/250/335/?random" class="d-block w-100" alt="produktbild 2">
					</div>
					<div class="carousel-item">
						<img src="https://unsplash.it/250/335/?random" class="d-block w-100" alt="produktbild 3">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Föregående</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Nästa</span>
				</a>
			</div>
		</section>
    <!-- Product iNformation -->
		<section class="col-md-6">
			<h5 class="produkttitel"><?php echo $row['produktnamn']; ?></h5> 
			<h5 class="pris"><span class="produktpris"><?php echo $row['produktpris']; ?></span> KR</h5>
			<p class="mt-3 produktbeskrivning"><?php echo $row['produktbeskrivning']; ?> </p>
			<h6 class="mt-3">Välj färg</h6>
      <img src="assets/images/colors.png" alt="colorpick" class="colorpick">
			<a class="btn btn-outline-dark mt-5 rounded-0 buttondesign add-to-cart" href="produkter.php" role="button">LÄGG I VARUKORG</a>
		</section>
	</div>
  <!-----------------------
  CARDS WITH SIMILAR PRODUCTS 
   ---------------------->
    <section class="container mt-5">
      <h5 class="mb-3">Liknande produkter</h5>
      <div class="card-deck">
        <div class="card border-0 mt-2">
          <img src="assets/images/pads.jpg" class="rounded-0 card-img-top" alt="Tvättbara bomullsrondeller">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Tvättbara bomullsrondeller</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">65kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="Bambutandborste med fodral">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambutandborste med fodral</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">85kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/kasse.png" class="rounded-0 card-img-top" alt="Återanvändbar fruktpåse">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar fruktpåse</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/organicup.png" class="rounded-0 card-img-top" alt="Organicup Menskopp">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">OrganiCup Menskopp - Vit</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">150kr</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>