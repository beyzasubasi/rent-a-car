<?php 
  session_start();
try 
{
 $db = new PDO("mysql:host=localhost;dbname=ventacav", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION )));
} 
catch ( PDOException $e )
{
 print $e->getMessage();
}

?>