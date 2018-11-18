<?php

$benim_kedim = new Hayvan("Mümin",12);

echo $benim_kedim->	;

class Canlı
{
	public $dis_sayisi;

	function __construct()
	{
		$this->dis_sayisi = 12;
	}

	public function nefesAl(){
		echo "hah hoh";
	}
}

class Hayvan extends Canlı  
{
	public $yas;
	public $name;

	function __construct($name,$gelen_yas)
	{
		parent::__construct();
		$this->yas = $gelen_yas;
		$this->name = $name;
	}

	function sesCikar(){
		echo  "hav hav";
	}
}




?> 