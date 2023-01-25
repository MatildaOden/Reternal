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
	// Delete information from database
	require_once 'assets/functions/data.delete.php'; 
  // Gets header design
  require_once 'assets/include/header.php';
  // Login session
	require_once 'assets/functions/session.login.php';
	// Checks session
	require_once 'assets/functions/session.check.php';
?>
<?php
  // Gets footer design
  require_once 'assets/include/header.php';
?>
  <main class="container mt-5 more-height">
		<form action="radera.php" method="post">
      <h5 class="mb-5">
        Är du säker på att du vill ta bort produkten?
      </h5>
      <!-- Confirm delete --> 
      <button type="submit" class="btn btn-outline-dark rounded-0 buttondesign mt-3" name="delete">
        <i class="fas fa-trash-alt mr-2"></i>Ja, radera!
      </button>
      <!-- Back to previous page -->
      <a href="javascript:history.go(-1)" class="btn btn-outline-dark rounded-0 buttondesign mt-3 ml-4">
        <i class="fas fa-chevron-circle-left mr-2"></i>Nej, gå tillbaka!
      </a>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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
