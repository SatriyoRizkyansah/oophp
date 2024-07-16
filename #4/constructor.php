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

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->tambahProperty = "hahahah";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 20000);

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 35000);

// echo "Komik : $produk3->judul, $produk3->penulis";
echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
