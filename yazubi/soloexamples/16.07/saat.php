<?php
$saat=date("H");
if ($saat<=05) {
	echo "gece sonrası";
}
elseif ($saat>22) {
	echo "gece";
}
elseif ($saat>18) {
	echo "akşam";
}
elseif ($saat>14) {
	echo "öğlen";
}
?>