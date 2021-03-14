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
          <h1 style="color: #fff;">REZERVASYON</h1>
          <span style="color: #fff;">İSTEDİĞİNİZ ARACA İSTEDİĞİNİZ KONUMDAN İSTEDİĞİNİZ SÜREDE ULAŞABİLME GARANTİSİ!</span>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
       <!-- <?php 

//$sorgu =  $db->prepare("SELECT * FROM users WHERE id=?"); //ya burada yaparım ya da giris.php 12 deki gibil
//$sorgu -> execute(array($_SESSION['users_id'])); //kontrol ettirdim değişkenlerimi
//$islem =  $sorgu->fetch();

//echo $islem["ad"];
       ?> !-->
       <div class="row">

        <?php 
        $sorgu =  $db->query("SELECT * FROM cars ");

        while($row = $sorgu->fetch(PDO::FETCH_ASSOC))
        {

          ?>


          <div class="col-md-4">
            <div class="service-item">
              <img src="<?php echo $row['image']?>" alt="">
              <div class="down-content">
                <h4><?php echo $row['model']; ?></h4>
                <div style="margin-bottom:10px;">
                  <span>HEMEN KİRALAMAK İÇİN TIKLAYIN</span><br>
                </div>
                <!--<p><?php echo $row['gunluk_kira'].$row['yakit']; ?></p> -->

                <?php if(isset($_SESSION['kadi'])){ ?>
                  <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="degiskenAta(<?php echo $row['id']; ?>);" class="filled-button">KİRALA</a>
                <?php } else{ ?>

                  <a href="giris.php" class="filled-button">GİRİŞ YAPIN</a>
                <?php } ?>
              </div>
            </div>
            <br>
          </div>

        <?php } ?>

        <br> 
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
  </div>


  <!-- Footer Starts Here -->
  <?php require_once 'footer.php'; ?>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">KİRALA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="islem.php" method="POST" id="contact">
            <div class="row">
             <div class="col-md-6">
              <div class="form-group">
                <fieldset>
                  <input type="hidden" class="form-control" name="islem" value="ekle" >
                  <input type="text" class="form-control" name="bas_konum" placeholder="Başlangıç Konumu" required="">
                </fieldset>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <fieldset>
                  <input type="text" class="form-control" name="bit_konum" placeholder="Bitiş Konumu" required="">
                </fieldset>
              </div>
            </div>
          </div>
          <input type="text" name="cars_id" id="cars_id" hidden="hidden" value="">

          <div class="row">
           <div class="col-md-6">
            <div class="form-group">
              <fieldset>
                <input type="date" class="form-control" name="bas_zaman" placeholder="Başlangıç Tarih/Zaman" required="">
              </fieldset>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <fieldset>
                <input type="date" class="form-control" name="bit_zaman" placeholder="Bitiş Tarih/Zaman" required="">
              </fieldset>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">VAZGEÇ</button>
        <button type="submit" onclick="myFunction();" class="btn btn-primary">KİRALA</button>

      </div>
    </form>
  </div>

</div>
</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script type="text/javascript">

  var degisken = "";

  function myFunction() {
    alert("KİRALAMAK İSTİYOR MUSUNUZ?");
    document.getElementById('contact').submit();
  }

  function degiskenAta(id) {
    degisken = id;
    document.getElementById('cars_id').value = degisken;
  }

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