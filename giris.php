<?php require_once 'baglan.php';  //2)giriş işlemi


$kadi    =trim($_POST['kadi']);
$parola  =trim($_POST['parola']); //


$sorgu =  $db->prepare("SELECT * FROM users WHERE kadi=? and parola=?");
$sorgu -> execute(array($kadi, $parola)); //kontrol ettirdim değişkenlerimi
$islem =  $sorgu->fetch();

if($sorgu->rowCount())
{
	$_SESSION['users_id'] = $islem['id'];  //ya burada ya da offers 75te yapılabilir 
	$_SESSION['ad']       = $islem['ad'];
	$_SESSION['soyad']    = $islem['soyad'];
	$_SESSION['kadi']     = $islem['kadi'];

}
header("location: giris2.php");


?>
