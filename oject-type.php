<?php

//jualan produk
//komik
//game


class Produk{
	public $judul,
		   $penulis, 
		   $penerbit, 
		   $harga; 



// method

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}
	public function getlabel() {
		return "$this->penulis, $this->penerbit, " ;
	}

}



class CetakInfoProduk {

	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



// object
$produk1 = new Produk("Black Clover","Masashi Kishimoto", "Shonen Jump", 350000);


$produk2 = new Produk("God Of War", "Abdil", "Bandai Namco", 230000);




// Nampil
echo "Komik :" . $produk1->getlabel();
echo "<br>";
echo "Game :" . $produk2->getlabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);