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
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}

}


// object
$produk1 = new Produk("harga","cabe merah", "sekarang", "750000");




$produk3 = new Produk("Downhill");



// Nampil
echo "A :" . $produk1->getlabel();
echo "<br>";
echo "A :" . $produk1->getlabel();

// echo "Game :" . $produk3->getlabel();