<?php
$servername = "localhost";
$username = "root";
$sifre = "";
$dbname = "yazubi";

try {

  	// BURADA CONNECT YAPIYORUZ.
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $sifre);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//BURADA SİLME İŞLEMİ GERÇEKLEŞECEKTİR.
	$sql = "DELETE FROM uyeler WHERE id='".$_GET['id']."'";
	$conn->exec($sql);
	header("Location: /yazubi/bootstrap/listele.php");
	die();
}catch (PDOException $e) {
  print_r($e->getMessage());
}
?>