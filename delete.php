<?php 
	require_once 'baglan.php';


	$id= $_GET["id"];

	$customerssor=$db->prepare("DELETE FROM customers WHERE id='{$id}'");
	$customerssor->execute();


	Header("Location:personel.php?durum=ok");
    ?>

	




