<?php


$kelime2="Merhabalar";
//	echo strrev($kelime1);
echo '<br/>';
//echo strcmp($kelime1, $kelime2);
//$sira =strpos($kelime1,'a');
//echo $sira;
$kelime1="Selamlar";

$positions = [];
for ($i=0;$i<strlen($kelime1); $i++){ 
	if($kelime1[$i] == "a"){
		$positions[] = $i;
	}
}

print_r($positions);			
?>