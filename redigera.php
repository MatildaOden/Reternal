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
	// Update information to database
	require_once 'assets/functions/data.update.php';
  // Gets header design
  require_once 'assets/include/header.php';
  // Login session
	require_once 'assets/functions/session.login.php';
	// Checks session
	require_once 'assets/functions/session.check.php';
?>
<main class="container mt-5">
  <!-- Edit product information form --> 
  <h5>Redigera <?php echo $row['produktnamn'];?></h5>
  <form class="mt-4" action="redigera.php" method="post">
    <div class="form-group">
      <label for="produktnamn">Produkttitel</label>
      <input type="text" class="form-control" name="produktnamn" value="<?php echo $row['produktnamn'];?>">
    </div>
    <div class="form-group mt-4">
      <label for="produktbeskrivning">Produktbeskrivning</label>
      <textarea class="form-control" name="produktbeskrivning" maxlength="4000" rows="3" value="<?php echo $row['produktbeskrivning'];?>"></textarea>
      <small id="formGroupHelpInline" class="text-muted">
        Max 300 ord.
      </small>
    </div>
    <div class="row">
      <div class="form-group col-xs-2 mt-2 ml-3">
        <label for="produktpris">Pris</label>
        <input type="text" class="form-control" name="produktpris" value="<?php echo $row['produktpris'];?>">
      </div>
      <p class="col-xs-2 mt-4 pt-4 ml-2">
        SEK
      </p>
    </div>
    <!-- Back to previous page --> 
    <a href="javascript:history.go(-1)" class="btn btn-outline-dark mt-3 rounded-0 buttondesign ">
      <i class="fas fa-chevron-circle-left mr-2"></i>Tillbaka
    </a>
    <!-- Upload changes --> 
    <button type="submit" class="btn btn-outline-dark mt-3 rounded-0 buttondesign" name="modify">Ladda upp ändringar</button>
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  </form>
</main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>
<!--jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>