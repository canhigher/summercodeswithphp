<?php
$dizi = array(1, 2, 3, 4);
foreach ($dizi as &$değer) {
    $değer = $değer * 2;
    	echo $değer;
}

?>
