<?php 

$servername = "localhost";
$username = "root";
$sifre = "";
$dbname = "yazubi";


$isim = $_GET['name'];
$nick= $_GET['k_adi'];
$pass= $_GET['pass'];

if (empty($isim) || empty($pass) || empty($nick)) {
	header("Location: /yazubi/bootstrap/yeniuye.php");
	die();
}
try {
  	// SQL CONNECT
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $sifre);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	// SQL QUERY
	$sql = "INSERT INTO uyeler (isim,kullanici_adi,sifre) VALUES ('".$isim."','".$nick."','".$pass."')";
	$conn->exec($sql);
	header("Location: /yazubi/bootstrap/listele.php");
	die();
}catch (PDOException $e) {
  print_r($e->getMessage());
}

?>