<?php 

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 20000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 35000);

$infoProduk1 = new CetakInfoProduk();
$infoProduk2 = new CetakInfoProduk();


// echo "Komik : $produk3->judul, $produk3->penulis";
echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo $infoProduk2->cetak($produk2);

