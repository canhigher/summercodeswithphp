<?php
session_start();
echo'Merhaba'.$_SESSION['ad'];
echo'<br/>';
echo"IP adresi:".$_SESSION['ip'];
echo'<br/>';
echo"mail adressin:".$_SESSION["mail"]




?>