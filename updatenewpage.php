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
          <h1 style="color: #fff;">KİRALAMA BİLGİLERİNİ GÜNCELLE</h1>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>

  <?php

  @$id=$_GET["id"];
  $sorgu =  $db->prepare("SELECT * FROM customers WHERE id=?");
  $sorgu -> execute(array($id)); //kontrol ettirdim değişkenlerimi
  $islem =  $sorgu->fetch();




  if($_POST)
  {

    $kullaniciguncelle=$db->prepare("UPDATE customers SET
      bas_zaman  =:bas_zaman,
      bit_zaman  =:bit_zaman,
      bas_konum  =:bas_konum,
      bit_konum  =:bit_konum
      WHERE
      id =:id
      ");


    $update=$kullaniciguncelle->execute(array(
      'bas_zaman' => $_POST['bas_zaman'],
      'bit_zaman' => $_POST['bit_zaman'],
      'bas_konum' => $_POST['bas_konum'],
      'bit_konum' => $_POST['bit_konum'],
      'id'        => $_POST['id']


    ));

    if ($update)
    {
      Header("Location:personel.php?durum=ok");
    }

    else
    {
      Header("Location:index.php?durum=no");
    }
  }
  ?>


  <br><br>
   <p></p>


   <form action="updatenewpage.php?id=<?php echo $id; ?>" method="POST">

    <input type="hidden" class="form-control" name="islem" value="guncelle" >
    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" >
    <label>Başlangıç Zamanı</label>
    <input type="date" required="" name="bas_zaman" placeholder="Başlangıç Zamanı" value="<?php echo $islem['bas_zaman'] ?>">
    <label>Bitiş Zamanı</label>
    <input type="date" required="" name="bit_zaman" placeholder="Bitiş Zamanı"     value="<?php echo $islem['bit_zaman'] ?>">
    <label>Başlangıç Konum</label>
    <input type="text" required="" name="bas_konum" placeholder="Başlangıç Konum"  value="<?php echo $islem['bas_konum'] ?>">
    <label>Başlangıç Konum</label>
    <input type="text" required="" name="bit_konum" placeholder="Bitiş Konum"      value="<?php echo $islem['bit_konum'] ?>">

    <button type="submit" href="personel.php" name="guncelle" >GÜNCELLE</button><br><br>
    <br><br>
    <br><br>

  </form>

  <?php 

  $customerssor = $db->prepare("SELECT * FROM cars ORDER BY model ASC");

  $customerssor->execute(); ?>

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