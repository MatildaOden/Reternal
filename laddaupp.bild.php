<?php
  //init session management
  session_start();
	// Opens database connection
	require_once 'assets/config/db.php';
  // Gets header design
  require_once 'assets/include/header.php';
  // Process uploaded photo     
  require_once 'assets/functions/photo.upload.php'; 
	// Process form data to database
	require_once 'assets/functions/session.login.php';
	// Process form data to database
	require_once 'assets/functions/session.check.php';
?>
<main class="container mt-5">  
   <!-----------------------
  UPLOAD PRODUCT IMAGE
  ---------------------->
  <section>
    <h5>Steg 2/2: Välj produktbild</h5>  
    <?php         
     // Shows potential errors during upload         
     require_once 'assets/include/notifications.upload.php';     
    ?>
    <!-- Form product image -->
    <form class="mt-4 laddaupp.php" action="laddaupp.bild.php" method="post" enctype="multipart/form-data">
      <div class="form-group mt-4">
        <label for="produktbild">Ladda upp produktbild (jpg, png, gif)</label>
        <input type="file" class="form-control-file" id="customFile" name="photo">
      </div>
      <!-- go to crop image page -->
      <button type="submit" class="btn btn-outline-dark mt-3 rounded-0 buttondesign" name="photo_upload"> Beskär bild</button>
      </a>
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

