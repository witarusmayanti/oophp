<?php

// require_once 'produk/InfoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/cetakInfoProduk.php';


spl_autoload_register(function( $class){
	require_once __DIR__ .'/produk.php/' . $class . '.php';

});