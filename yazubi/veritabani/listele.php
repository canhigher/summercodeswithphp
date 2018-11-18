<?php
$servername = "localhost";
$username = "root";
$sifre = "";
$dbname = "yazubi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $sifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "işlem başarısız." . $e->getMessage();
}

$stmt = $conn->query("SELECT * FROM uyeler");

$uyeler = $stmt->fetchAll();

foreach ($dizi as $key => $elaman) {
	echo $key. " => " ; print_r($elaman);echo"<br>";
}

exit;
foreach ($uyeler as  $uye) {
	echo $uye['id']." -- ".$uye['isim'] . " -- " . $uye['kullanici_adi'] ."<br/>\n";
}
