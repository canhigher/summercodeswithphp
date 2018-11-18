<?php
$servername = "localhost";
$username = "root";
$sifre = "";
$dbname = "yazubi";
$user = $_GET['isim'];
$nick = $_GET['kullanici_adi'];
$pass = $_GET['sifre'];
		try 
	{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $sifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO uyeler (isim,kullanici_adi,sifre) VALUES ('".$user."','".$nick."','".$pass."')";
    $conn->exec($sql);
    echo "kayit olusturuldu";
	}
		catch(PDOException $e)
	{
	print_r($e->getMessage());
	}?> 
<html>
<form method="get" action="listele.php"> 
<input type="submit" value="listele"></h2>
</form>
</html>