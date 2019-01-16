<?php

interface Infoproduk {
	public function getInfoProduk();

}

abstract class produk {
	protected $judul,
	        $penulis,
	        $penerbit,
	        $harga,
	        $diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

public function setjudul( $judul ) {
	$this-> judul = $judul;


}

public function getjudul(){


	return $this-> judul;
}

public function serpenulis( $penulis ) {
	$this->penulis = $penulis;

}

public function getpenulis() {
	return $this-> penulis;

}


public function setpenerbit( $penerbit ) {
	$this-> penerbit;

}

public function getpenerbit() {
	return $this-> penerbit;

}

public function setdiskon( $diskon) {
	$this->diskon = $diskon;

    }
public function getdiskon(){
	return $this-> diskon;
}


public function setharga( $harga ) {
	$this->harga = $harga;

}


    public function getharga() {
    	return $this->harga - ( $this->harga * $this->diskon / 100 );
    }


    public function getLabel() {
    	return "$this->penulis, $this->penerbit";
    }

abstract public function getInfo();



    }
class Komik extends produk
    implements InfoProduk{


    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
    	parent::__construct($judul, $penulis, $penerbit, $harga);

    	$this->jmlHalaman = $jmlHalaman;


    }


public function getInfo() {

	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



	return $str;

}

    public function getInfoProduk(){
	     $str = "komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman.";

	return $str;
   }

}
   
class Game extends produk implements Infoproduk {


	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
    	parent::__construct($judul, $penulis, $penerbit, $harga);

    	$this->waktuMain = $waktuMain;
    }


public function getInfo() {

	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



	return $str;


}

	public function getInfoProduk(){
		$str = "Game: ".$this->getInfo(). " - {$this->waktuMain} Jam.";
		return $str;
}
}

class cetakInfoProduk {
	public $daftarProduk = array();

	public function tambahproduk( produk $produk ){
		$this->daftarProduk[] = $produk;

	}


public function cetak () {
	$str = "DAFTAR PRODUK : <br>";

	foreach ($this->daftarProduk as $p) {
		$str .= "-{$p->getInfoProduk()} <br>";

    }
    return $str;

}

}




$produk1 = new komik("Tommy&Jerry", "Wita Rusmayanti", "Agung Pratama", 200000, 100);

$produk2 = new Game("Zombi", "Aulya Azahra", "Ryan Anggara", 280000,30);


$cetakproduk = new cetakInfoProduk();
$cetakproduk->tambahProduk( $produk1);
$cetakproduk->tambahProduk( $produk2);
echo $cetakproduk->cetak();