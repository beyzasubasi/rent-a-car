<!DOCTYPE html>
<html>
<body>


<?php
require_once 'baglan.php';

ini_set("display_errors",1);//hataları gizler

if($_POST["messages"] == "add")
{
	//var_dump($_POST);die;
	$kaydet=$db->prepare("INSERT INTO message SET
		ad_soyad =:ad_soyad,
		mail	 =:mail,
		konu     =:konu,
		mesaj    =:mesaj
		
		");


	$insert=$kaydet->execute(array(
		'ad_soyad' => $_POST['ad_soyad'],
		'mail'     => $_POST['mail'],
		'konu'     => $_POST['konu'],
		'mesaj'    => $_POST['mesaj']
	
		
	));

	if ($insert)
	{
		Header("Location:contact.php?durum=ok");
	}

	else
	{
		Header("Location:contact.php?durum=no");
	}
}
/*
else if($_POST["islem"] == "uyeGiris"){
	echo "burda";
}
*/
//elif($_POST["islem"] == "ekle")  //buraya mesaj için olan değişkenleri koy elifle girsin değişkenler indexte var
 //{

?>
 

</body>
</html>


