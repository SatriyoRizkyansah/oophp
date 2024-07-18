<?php 

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

require_once('App/init.php');

// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 20000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 35000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();


new ProdukUser();
echo "<br>";
new ServiceUser();
