<?php
//init session management
  session_start();
	// Opens database connection
	require_once 'assets/config/db.php';
  // Gets header design
  require_once 'assets/include/header.php';
 // Process uploaded photo to database    
  require_once 'assets/functions/photo.resize.php'; 
?>
<!-- JCrop CSS --> 
<link rel="stylesheet" href="assets/css/jcrop.min.css"> 
<!-- Choose cropping --> 
<main class="container mt-5">
  <h5>Beskär produktbild</h5>
  <form action="resize.php" method="post" onsubmit="return checkCoords();">
    <img src="assets/photos/<?php echo $_SESSION['file_original']; ?>" alt="" id="target">
    <input type="hidden" id="x" name="x">             
    <input type="hidden" id="y" name="y">             
    <input type="hidden" id="w" name="w">             
    <input type="hidden" id="h" name="h"> 
    <div class="form-group mt-3">
      <button type="submit" class="btn btn-primary" name="photo-resize">Ladda upp</button>
    </div>
  </form>
</main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>
  <!--jQuery first, then Popper.js, then Bootstrap JS, then Jcrop JS, then resize JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.Jcrop.min.js"></script>
<script src="assets/js/resize.js"></script>