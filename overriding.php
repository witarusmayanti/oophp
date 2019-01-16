<?php


class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;


	
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;


	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";


}

    public function getInfoProduk() {
    	$str = "{this->judul} | {this->getLabel()} (Rp. {this->harga})";


    	return $str;
    }

}


class komik extends produk {
     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
	parent::__construct($judul, $penulis, $penerbit, $harga);
    
    $this->jmlHalaman = $jmlHalaman;


    }

    public function getInfoProduk(){
    	$str = "Komik : ".parent:: getInfoProduk()." - {$this->jmlHalaman} Halaman.";
    	return $str;
    }

}

class Game extends produk {
	public $waktuMain;

	 public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
	parent::__construct($judul, $penulis, $penerbit, $harga);
         $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
    	$str = "Game : ".parent:: getInfoProduk()." - {$this->waktuMain} Jam.";
    	return $str;
}
}

class cetakInfoProduk {
public function cetak ( produk $produk) {
	$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	return $str;

}

}


$produk1 = new komik("Tommy&Jerry", "Wita Rusmayanti", "Agung Pratama", 20000, 100, 0);
$produk2 = new Game("Zombi", "Aulya Azahra", "Ryan Pratama", 280000, 0, 30);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk1->getInfoProduk();