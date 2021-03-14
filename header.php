

<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php"><h2>VENTACAV <em> ARAÇ KİRALAMA</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">ANASAYFA
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fleet.php">FİLOMUZ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="offers.php">REZERVASYON</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">HAKKIMIZDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">BİZE ULAŞIN</a>
          </li>

          <?php if (isset($_SESSION['kadi'])) { ?>


           <li class="nav-item">
            <a class="nav-link" href="personel.php"><?php echo $_SESSION['ad']; ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cikis.php">ÇIKIŞ YAP</a>
          </li>
        <?php } else { ?>

          <li class="nav-item">
            <a class="nav-link" href="login.php">GİRİŞ YAP</a>
          </li>

        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
</header>