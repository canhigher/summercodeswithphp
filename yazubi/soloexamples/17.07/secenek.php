<?php
if ($_POST) {

	echo "formdan gelen bilgiler aşağıdadır;";
	echo "Adı ve soyadı:".$_POST['adsoyad']."<br/>";
	echo "Cinsiyeti:".$_POST['cinsiyet']."<br/>";
	echo "Bilinen diller";
	foreach ($_POST['dil'] as $anahtar => $deger) {
		echo $deger."<br/>";
	}

}
?>