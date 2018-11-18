<?php  

$lessons = array("fizik","mat","kimya","ingilizce");

echo array_unshift($lessons,"fen");
echo join("-",$lessons);


?>