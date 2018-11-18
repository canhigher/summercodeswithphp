<?php
if (!_$POST){
?>
<form method="post" action="">
Cep Telefonunuz:<br/>
<input type="text" name="tel" value="" /><br />
<input type="submit" value="gonder" /><br />
</form>
<?php
}
else{
	$tel=ltrim($_POST['tel']),'0';
if (!is_int($tel) && (strlen($tel>10))|| (strlen($tel<10))) {
	echo "Telefonunuzun numarasını düzgün girin.";
}
else{
	echo "telefon numaranız uygun formatta";
}

}

?>