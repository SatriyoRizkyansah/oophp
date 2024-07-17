<?php 

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this-> tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str.= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 20000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 35000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


// $infoProduk1 = new CetakInfoProduk();
// $infoProduk2 = new CetakInfoProduk();


// // echo "Komik : $produk3->judul, $produk3->penulis";
// echo "Komik : " .$produk1->getLabel();
// echo "<br>";
// echo $infoProduk1->cetak($produk1);
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// echo $infoProduk2->cetak($produk2);

