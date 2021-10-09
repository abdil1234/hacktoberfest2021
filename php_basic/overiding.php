<?php

//jualan produk
//komik
//game


class Produk{

	// property
	public $judul,
		   $penulis, 
		   $penerbit, 
		   $harga; 
		 

// method
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
		

	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit " ;
	}

	public function getInfoProduk(){
	
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

}


class Komik extends Produk{
public $jmlHalaman;	

public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){


	parent::__construct( $judul, $penulis,
	$penerbit, $harga );

	$this->jmlHalaman = $jmlHalaman;

}

public function getInfoProduk(){

	$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

	return $str;
	
	}

}


class Game extends Produk{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){

	$str = "Game : " . parent::getInfoProduk() ." - {$this->waktuMain} Jam.";

	return $str;
	
	}

}



class CetakInfoProduk {

	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



// object
$produk1 = new Komik("Black Clover","Masashi Kishimoto", "Shonen Jump", 350000, 100, );


$produk2 = new Game("God Of War", "Rifki", "Bandai Namco", 230000, 50 );



// Nampil

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();