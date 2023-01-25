<?php
  //init session management
  session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// Opens database connection
	require_once 'assets/config/db.php';
	// Gets information from database
	require_once 'assets/functions/data.select.php';
  // Gets header design
  require_once 'assets/include/header.php';
 	// Process data to database
   require_once 'assets/functions/session.login.php';
?>
<!-----------------
SORTING PRODUCTS BY CATEGORIES OR OTHER 
-------------------->
<main class="container d-flex">
  <section class="product-list">
    <ul class="product-list mt-5 pt-5">
      <h6>PRODUKTKATEGORIER</h6>
      <li>Nyheter</li>
      <li>Köksartiklar</li>
      <li>Hudvård</li>
      <li>Hygien</li>
      <li>Skönhet</li>
      <li>Hushåll</li>
    </ul>
    <ul class="sort-list pt-4">
      <h6>SORTERA EFTER</h6>
      <li><input type="checkbox" class="mr-2">Nyligen tillagd</li>
      <li><input type="checkbox" class="mr-2">Kampanj</li>
      <li><input type="checkbox" class="mr-2">Popularitet</li>
      <li><input type="checkbox" class="mr-2">Lägsta pris</li>
    </ul>
  </section>
  <!--------------------
  PAGE HEADER
  -------------------->
  <section class="mt-5 pt-3">
    <!-- page header -->
    <li class="filtrera dropdown ml-5 mb-3 pl-2"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Filtrera</a>
      <form class="dropdown-menu">
        <ul class="hide-product-list mt-3">
          <h6>PRODUKTKATEGORIER</h6>
          <li>Nyheter</li>
          <li>Köksartiklar</li>
          <li>Hudvård</li>
          <li>Hygien</li>
          <li>Skönhet</li>
          <li>Hushåll</li>
        </ul>
        <ul class="hide-sort-list pt-4">
          <h6>SORTERA EFTER</h6>
          <li><input type="checkbox" class="mr-2">Nyligen tillagd</li>
          <li><input type="checkbox" class="mr-2">Kampanj</li>
          <li><input type="checkbox" class="mr-2">Popularitet</li>
          <li><input type="checkbox" class="mr-2">Lägsta pris</li>
        </ul>
      </form>
    </li>
    <div class="d-flex">
      <!-- shows number of products -->
      <h6 class="ml-5 container clearfix">
        Visar alla - 247 artiklar hittades
      </h6>
      <!-- shows upload button if user is logged in -->
      <?php     
        // Checks if user is logged in     
        if (isset($_SESSION['id']) && $_SESSION['id'] == 1) {         
          echo '                    
            <a class="btn btn-outline-dark mt-3 rounded-0 buttondesign" href="laddaupp.php" role="button">Lägg till ny produkt</a> ';   
        }     
      ?> 
    </div>
    <!-----------------------
    SHOWS PRODUCTS
    ---------------------->
    <div class="card-deck ml-5 product-div">
        <?php
        // Checks whether database is empty
        if ($stmt->rowCount() > 0) {
          // Gets products from database
          while ($row = $stmt->fetch()) {
            // Prints out products to HTML
            echo '
              <div class="card border-0 mt-2 product-card">
                <a href="produktsida.php?id='.$row['id'].'">
                   <img src="assets/photos/'.$row['thumb'].'" class="rounded-0  card-img-top product-pic"  alt="Produktbild"> 
                    <div class="card-body product-text">
                      <h6 class="card-title mt-n3 ml-n3 product-text">'.$row['produktnamn'].'</h6>
                      <div class="d-flex justify-content-between product-price">
                        <p class="card-text mt-n2 ml-n3">'.$row['produktpris'].' SEK</p>
                      </div>
                    </div>
                </a>
              </div>
            ';
          }
        } else {
          echo ' 
          inget innehåll finns
          ';	
        }
      ?>
    </div>
    <!-- button - show more products --> 
    <div class="d-flex justify-content-center ml-5">
      <a class="btn btn-secondary btn-sm mt-3 button-view-more rounded-0" href="#" role="button">Visa fler</a>  
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