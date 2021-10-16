<?php

//jualan produk
//komik
//game


class Produk{

	// property
	public $judul,
		   $penulis, 
		   $penerbit, 
		   $harga, 
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;



// method
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman =0, $waktuMain = 0, $tipe){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}
	public function getlabel() {
		return "$this->penulis, $this->penerbit " ;
	}

	public function getInfoLengkap(){

		// komik : Black Clover | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if($this->tipe == "Komik"){
			$str .= "-{$this->jmlHalaman} Halaman.";
		}
		else if ($this->tipe =="Game"){
			$str .= "-{$this->waktuMain} Jam.";
		}
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
$produk1 = new Produk("Black Clover","Masashi Kishimoto", "Shonen Jump", 350000, 100, 0, "Komik");


$produk2 = new Produk("God Of War", "Rifki", "Bandai Namco", 230000,0 , 50, "Game");



// Nampil

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();