
<?php
  session_start();
  // Gets header design
  require_once 'assets/include/header.php';
  // Opens database connection
	require_once 'assets/config/db.php';
  // Process data to database
   require_once 'assets/functions/session.login.php';
?>
<?php     
// Checks if an action is set     
if (isset($_GET['login'])) {         
  // Checks which action is set         
  switch($_GET['login']) {             
    case 'empty':                
      echo '                    
      <div class="alert alert-warning">                         
      Du har inte angett något användarnamn eller lösenord!                     
      </div> ';                 
      break;            
    case 'error':                 
      echo '                     
      <div class="alert alert-danger">                         
      Du har angett felaktigt användarnamn eller lösenord!                     
      </div> ';                 
      break;        
  }     
} 
?> 
  <main> 
    <!--===========================
    CAROUSEL
    ============================-->
    <section id="carouselExampleCaptions" class="carousel slide hide-small" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <!-- Carousel images -->
      <div class="carousel-inner">
        <section class="carousel-item active">
          <img src="assets/images/karusellEtt.png" class="d-block w-100 img-fluid" alt="Karusell-bild">
          <div class="carousel-caption caption1 mx-auto">
            <p class="first-line">Hos oss kan du uppleva</p>
            <h5>KLIMATSMART SHOPPING</h5>
            <a class="btn btn-outline-dark mt-3 start-shopping" href="produkter.php" role="button">Börja shoppa</a>
          </div>
        </section>
        <section class="carousel-item">
          <img src="assets/images/karusell2.png" class="d-block w-100 img-fluid" alt="Karusell-bild">
          <div class="carousel-caption caption2 mx-auto">
           <p>För att hjälpa dig sänka ditt klimatavtryck är <strong>100%</strong> av våra produkter producerade i Sverige.</p>
           <p> Från företag till dörr med så kort transportsträcka som möjligt.</p>
           <a class="btn btn-outline-dark know-more-button" href="kontakt.php" role="button">Jag vill veta mer!</a>
          </div>
        </section>
      <!-- Left and right controls -->
      <a class="carousel-control-prev carousel-right" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next carousel-left" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
    </section>
    <!--===========================
    CARDS NEW PRODUCTS
    ============================-->
    <section class="container mt-5">
      <h5 class="mb-3">Nyheter</h5>
      <div class="card-deck">
        <div class="card border-0 mt-2">
          <img src="assets/images/kasse.png" class="rounded-0 card-img-top" alt="Återanvändbar fruktpåse">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar fruktpåse</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/metalstraw.jpg" class="rounded-0 card-img-top" alt="Metallsugrör">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Ihopfällbart metallsugrör</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">80 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/pads.jpg" class="rounded-0 card-img-top" alt="Bomullsrondeller">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Tvättbara bomullsrondeller</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">65 kr</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container clearfix">
        <a class="btn btn-secondary btn-sm mt-3 button-products rounded-0" href="produkter.php" role="button">Se alla nyheter</a>
      </div>
    </section>
    <!--===========================
    CARDS POPULAR PRODUCTS
    ============================-->
    <section class="container mt-5">
      <h5 class="mb-3">Populära produkter</h5>
      <div class="card-deck">
        <div class="card border-0 mt-2">
          <a href="produktsida.php"><img src="assets/images/swabbySmall.jpg" class="rounded-0  card-img-top" alt="Återanvändbara tops"></a>
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar tops</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/bambu.jpg" class="rounded-0 card-img-top" alt="Bambusugrör">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambusugrör - Flerpack</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">80 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="Bambutandborste">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambutandborste - Rosa</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">45 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/organicup.png" class="rounded-0 card-img-top" alt="Organicup menskopp">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">OrganiCup Menskopp - Vit</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">150 kr</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container clearfix">
       <a class="btn btn-secondary btn-sm mt-3 button-products rounded-0" href="produkter.php" role="button">Se alla produkter</a>
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