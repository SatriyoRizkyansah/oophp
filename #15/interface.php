<?php 

interface InfoProduk{
    public function getInfoProduk();
}

 abstract class Produk {
    protected $judul,
            $penulis,
            $penerbit,
            $diskon,
            $harga;

    function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    

    //Setter dan Getter
    public function setJudul($judul){
        return $this->judul = $judul;
    }
    
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        return $this->penulis = $penulis;
    }
    
    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        return $this->penerbit = $penerbit;
    }
    
    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        return $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik :". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;
    
    public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam.";

        return $str;
    }

    
}

class CetakInfoProduk {

    public $daftarProduk = [];

    public function tambahProduk (Produk $produk){
         $this->daftarProduk[] = $produk;
    }

    public function cetak( ) {
        $str = "DAFTAR PRODUK <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 20000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 35000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

