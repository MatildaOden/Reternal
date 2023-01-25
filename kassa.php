<?php
  //init session management
  session_start();
  // Gets header design
  require_once 'assets/include/header.php';
  // Opens database connection
	require_once 'assets/config/db.php';
  // Process data to database
  require_once 'assets/functions/session.login.php';
?>
<main class="container mt-5">
  <div class="row">
    <!-- Formulär -->
    <section class="col-md-6">
      <h5>
        Kassa
      </h5>
      <div class="checkout-form">
        <h6>
          Personuppgifter
        </h6>
        <form>
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Fullständigt namn">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Gatuadress">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Postnummer">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Stad">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="E-postadress">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Telefonnummer">
        </form>
        <h6 class="mt-4">
          Kortuppgifter
        </h6>
        <form>
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Namn på kort">
          <input type="text" class="form-control mt-3 checkout-form" id="formGroupExampleInput" placeholder="Kortnummer">
          <div class="col-md-6 ml-n3">
            <label for="formGroupExampleInput" class="mt-3">Utgångsdatum</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="XX / XX">
          </div>
          <div class="col-md-6 ml-n3">
            <label for="formGroupExampleInput" class="mt-3">CVC</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="XXX">
          </div>
        </form>
        <a class="btn btn-outline-dark btn-block mt-5 rounded-0 buttondesign checkoutbutton" href="#" role="button">GENOMFÖR KÖP</a>
      </div>
    </section>
    <!-- VARUKORG -->
    <section class="col-md-6 basket">
      <h6 class="mt-4">
        Din varukorg
      </h6>
      <img src="assets/images/swabbySmall.jpg" class="d-block checkout-preview" alt="produktbild 3">
      <p class="checkout-product">
        Återanvändbar tops <br> 120kr <br> Färg: Grön
      </p>
      <p class="product-cost">Produktsumma</p>
      <p class="shipping">Frakt</p>
      <p class="total-price">Totalpris</p>
    </section>
  </div>
</main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>