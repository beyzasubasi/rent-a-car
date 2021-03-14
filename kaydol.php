<?php require_once 'baglan.php'; 



  $kaydet=$db->prepare("INSERT INTO users SET
    ad         =:ad,
    soyad      =:soyad,
    kadi       =:kadi,
    tc_no      =:tc_no,
    tel_no     =:tel_no,
    mail       =:mail,
    parola     =:parola  ");



  $insert=$kaydet->execute(array(

    'ad'        => $_POST['ad'],
    'soyad'     => $_POST['soyad'],
    'kadi'      => $_POST['kadi'],
    'tc_no'     => $_POST['tc_no'],
    'tel_no'    => $_POST['tel_no'],
    'mail'      => $_POST['mail'],
    'parola'    => $_POST['parola']  ));




  if ($insert)
  {
    Header("Location:login2.php?durum=ok");
  }

  else
  {
    Header("Location:login2.php?durum=no");
  }





?>

