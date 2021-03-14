<!DOCTYPE html>
<html>
<body>


	<?php
	require_once 'baglan.php';
ini_set("display_errors",1);//htaları gilzer

if($_POST["islem"] == "ekle")
{
	//var_dump($_POST);die;
	$kaydet=$db->prepare("INSERT INTO customers SET
		users_id   =:users_id,
		cars_id	   =:cars_id,
		bas_zaman  =:bas_zaman,
		bit_zaman  =:bit_zaman,
		bas_konum  =:bas_konum,
		bit_konum  =:bit_konum
		
		");


	$insert=$kaydet->execute(array(
		'users_id'  => $_SESSION['users_id'],
		'cars_id'   => $_POST['cars_id'],
		'bas_zaman' => $_POST['bas_zaman'],
		'bit_zaman' => $_POST['bit_zaman'],
		'bas_konum' => $_POST['bas_konum'],
		'bit_konum' => $_POST['bit_konum']
		
		
	));

	if ($insert)
	{
		Header("Location:personel.php?durum=ok");
	}

	else
	{
		Header("Location:index.php?durum=no");
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
