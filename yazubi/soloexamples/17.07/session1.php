<?php
session_start();
$_SESSION['ad']="Can Yüksel";
$ip=$_SERVER['REMOTE_ADDR'];
$_SESSION['ip']="$ip";
$_SESSION["mail"]="amazing@gmail.com";

?>
<a href="session_oku.php">Okumak İçin Tıklayın.</a>