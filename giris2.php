<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<?php  //3)giriş kontrol


		if(isset($_SESSION['kadi'])) //session da kadi yoksa giriş sayfasına gönder diyorum
		{
			//echo 'HOŞGELDİNİZ..';
			//echo $_SESSION['ad'];
			Header("Location:personel.php?durum=ok");
			//echo '<br><a href="cikis.php">ÇIKIŞ YAP</a>';
		}
		else
		{
			Header("Location:login2.php");
		}


		?>

	</body>
	</html>