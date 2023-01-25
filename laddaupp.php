<?php
  //init session management
  session_start();
	// Opens database connection
	require_once 'assets/config/db.php';
	// Register information to database
	require_once 'assets/functions/data.insert.php';
  // Gets header design
  require_once 'assets/include/header.php';
  // Process uploaded photo     
  require_once 'assets/functions/photo.upload.php'; 
	// Process data to database
	require_once 'assets/functions/session.login.php';
	// Process data to database
	require_once 'assets/functions/session.check.php';
?>
<main class="container mt-5">
  <!-----------------------
  UPLOAD PRODUCT INFORMATION
  ---------------------->
  <section>
    <h5>Steg 1/2: Lägg till produkt</h5>
    <!-- Form product information -->
    <form class="mt-4 laddaupp.php" action="laddaupp.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="produktnamn">Produkttitel</label>
        <input type="text" class="form-control" name="produktnamn" placeholder="Skriv din titel här">
      </div>
      <div class="form-group mt-4">
        <label for="produktbeskrivning">Produktbeskrivning</label>
        <textarea class="form-control" name="produktbeskrivning" maxlength="4000" rows="3"></textarea>
        <small id="formGroupHelpInline" class="text-muted">
        Max 300 ord.
        </small>
      </div>
      <div class="form-group row mt-3">
        <div class="col-xs-2 ml-3">
          <label for="produktpris">Pris</label>
          <input type="text" class="form-control" name="produktpris" placeholder="Pris">
        </div>
        <p class="col-xs-2 mt-4 pt-3 ml-2">
          SEK
        </p>
      </div>
      <!-- Back to previous page button -->
      <a href="produkter.php" class="btn btn-outline-dark mt-3 rounded-0 buttondesign">        
        <i class="fas fa-chevron-circle-left mr-2"></i>
        Tillbaka
      </a>
      <!-- next step button -->
      <button type="submit" class="btn btn-outline-dark mt-3 ml-3 rounded-0 buttondesign" name="upload">Fortsätt</button>
    </form>
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