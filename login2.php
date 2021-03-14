<?php require_once 'baglan.php'; // 1)kaydol sayfasındaki giriş yapa tıklayınca giriş yaptırmak için gelen sayfa ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>  

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-envelope"></i>ventacav@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>000-000-0000</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'header.php'; ?>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color: #fff;">GİRİŞ YAP</h1>
          <span style="color: #fff;">ARAÇ KİRALAMAK İÇİN HEMEN GİRİŞ YAPIN</span>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
    <div class="more-info-content">
      <div class="row">
        <div class="col-md-6">
          <div class="left-image">
            <img src="assets/images/4973ac66eebac3569ecf4d39165daf3c.jpg" class="img-fluid" alt="">
            <br><br>
            <br><br>

          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="right-content">

            <span>HEMEN</span>
            <h3><b>GİRİŞ YAP<b></h3><br>
            <p></p>



            <form action="giris.php" method="POST">
              <!-- <form action="islem.php" method="POST"> <input type="hidden" class="form-control" name="islem" value="uyeGiris" > -->


                <label>Kullanıcı Adı</label>
                <input type="text" name="kadi" placeholder="Kullanıcı Adınızı Giriniz" required=""><br><br>

                <label>Parola</label>
                <input type="password" name="parola" placeholder="Parolanızı Giriniz" required=""><br><br>

                <button type="submit" class="filled-button">GİRİŞ YAP</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Starts Here -->
  <?php require_once 'footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
        }
      }
    </script>

  </body>
  </html>