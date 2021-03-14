<?php require_once 'baglan.php'; ?>
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
  <!-- ***** Preloader End ***** -->

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
  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="color: #fff;">HOŞGELDİNİZ</h1>
          <span><h4 style="color: #fff;"><?php echo $_SESSION['ad']; ?></h4></span><br>
          <h5 style="color: #fff;">KİRALADIĞINIZ ARAÇLARI AŞAĞIDA GÖRÜNTÜLEYEBİLİRSİNİZ<h5><br>

            <div class="row">
              <?php 
              $sorgu =  $db->query("SELECT customers.id,customers.bas_zaman,customers.bit_zaman,customers.bas_konum,customers.bit_konum,cars.yakit,cars.model,cars.gunluk_kira,cars.image FROM customers, cars WHERE customers.cars_id=cars.id AND customers.users_id=".$_SESSION['users_id']);

              while($row = $sorgu->fetch(PDO::FETCH_ASSOC))
              {

                ?>
                <div class="col-md-4">
                  <div class="service-item">
                    <img src="<?php echo $row['image']; ?>" alt="">
                    <div class="down-content">
                      <span>KİRALANAN ARAÇ</span><br>
                      <h4><?php echo $row['model']//.'<br>'.$row['yakit'] ?></h4> 
                      <div style="margin-bottom:10px;">
                        
                        <h6>ALIŞ TARİHİ: <?php echo date("d-m-Y", strtotime($row['bas_zaman'])); //.'<br>'.$row['yakit'] ?></h6>
                        <h6>TESLİM TARİHİ: <?php echo date("d-m-Y", strtotime($row['bit_zaman'])); ?></h6><br>

                        <h6>BAŞLANGIÇ KONUM: <?php echo $row['bas_konum']?></h6>
                        <h6>BİTİŞ KONUM: <?php echo $row['bit_konum']?></h6><br>

                        <h6>GÜNLÜK KİRA: <?php echo $row['gunluk_kira']; ?></h6><?php


                        $ilktarih=date("d.m.Y", strtotime($row['bas_zaman']));//bu ilk kayıt tarihi olsun

                        $sontarih=date("d.m.Y", strtotime($row['bit_zaman']));//buda şu anki tarih olsun

                        $ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom

                        $sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom

                        $fark=($sontarihstr-$ilktarihstr)/86400;//sondan ilki çıkarıp 86400 e bölüyoz bu bize günü verecek?> 

                        <h6>KİRALANAN GÜN SAYISI: <?php echo $fark; ?></h6><br>
                        <h6>ÖDENECEK TUTAR : <?php echo ltrim($row['gunluk_kira']*$fark, "-")." TL" ;?></h6>


                        <br>
                        <br>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('KİRALADIĞINIZ ARACI İPTAL ETMEK İSTEDİĞİNİZE EMİN MİSİNİZ?')">SİL</a>
                        <a href="updatenewpage.php?id=<?php echo $row['id']; ?>">GÜNCELLE</a>
                      </div>
                      <!--<p><?php echo $row['gunluk_kira']; ?></p>  -->

                    </div>
                  </div>
                  <br>
                </div>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
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