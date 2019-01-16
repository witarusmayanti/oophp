<?php

require_once 'App/init.php';

$produk1 = new Komik("Tommy&Jerry", "Wita Rusmayanti", "Agung Pratama", 200000, 100, 100);

$produk2 = new Game("Zombi", "Aulya Azahra", "Ryan Anggara", 280000, 30);


$cetakproduk = new cetakInfoProduk();
$cetakproduk->tambahProduk( $produk1);
$cetakproduk->tambahProduk( $produk2);
echo $cetakproduk->cetak();

echo "<hr>";

new coba();