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
  <!-- Reternals historia -->
  <div class="row">
    <section class="col-md-6">
      <img src="assets/images/andrea.jpg" class="card-img-top img-fluid andrea" alt="Andrea Rodriguez">
    </section>
    <section class="col-md-6">
      <h5 class="">Reternals historia</h5>
      <h6 class="">Personen bakom</h6>
      <p class="mt-3 companyinfo">Reternal startades 2019 av Andrea Rodriguez på Hisingen, Göteborg. Andrea vill locka fler unga till att handla miljömedvetet i en inbjudande digital miljö. Förutom att skapa egna produkter är Andrea och Reternal åter-försäljare åt flertalet miljöinriktade
        företag som också producerar sina produkter i Sverige för att kunna erbjuda våra kunder en möjlighet att köpa sina produkter på ett och samma ställe för att undvika onödiga fraktutsläpp.<br> Saknar vi någon produkt du önskar? Hör av dig!
      </p>
    </section>
  </div>
  <!-- Reternals vision -->
  <div class="row mt-5">
    <section class="col-md-6">
      <h5 class="environmentrubrik">Reternals vision</h5>
      <h6 class="environmentrubrik">Klimatet i fokus</h6>
      <p class="mt-3 environmentinfo">Reternals fokus i alla stadier är klimatet. Vi bryr oss om våra kunders önskan att minska sina klimatavtryck och erbjuder därför bara produkter som är producerade i Sverige och fraktar inte utomlands. Detta för att hålla transportsträckan så kort
        som möjligt och undvika onödiga fraktutsläpp. Vi säljer hållbara alternativ till miljö-förstörande engångsprodukter för att spara på jordens resurser. <br> Tillsammans gör vi skillnad!
      </p>
    </section>
    <section class="col-md-6">
      <img src="assets/images/skog.jpg" class="img-fluid" alt="Skog-klimat i fokus">
    </section>
  </div>
  <!-- Kontaktinformation -->
  <div class="row mt-5">
    <section class="col-md-6">
      <h5>Kontakta oss</h5>
      <p class="mt-3">Reternal@support.se <br> 031-365 20 40 <br> Södra Allégatan 5 <br> 413 01 Göteborg <br> Västra Götaland
      </p>
    </section>
    <section class="col-md-6">
      <h5 class="follow-us">Följ oss på sociala medier</h5>
      <p class="mt-3">Facebook.com/reternal <br> Instagram.com/reternal <br> Twitter.com/reternal
      </p>
      <i class="fab fa-facebook-square"></i>
      <i class="fab fa-instagram-square ml-2"></i>
      <i class="fab fa-twitter-square ml-2"></i>
    </section>
  </div>
  <!-- Google maps -->
  <h5 class="mt-5 mb-4">Hitta till oss</h5>
  <iframe class="mb-5" width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=s%C3%B6dra%20allegatan%205%20g%C3%B6teborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>