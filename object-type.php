<?php


class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;


	  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;


	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}


}


class cetakInfoProduk {
public function cetak ( produk $produk) {
	$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
	return $str;
}

}



$produk1 = new produk("Tommy&Jerry", "Wita Rusmayanti", "Agung Pratama", 200000);
$produk2 = new produk("Zombi", "Aulya Azahra", "Ryan Pratama", 280000);




echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new cetakInfoProduk();
echo $infoproduk1->cetak($produk1);







