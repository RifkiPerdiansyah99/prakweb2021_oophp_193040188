<?php 

// jualan produk
// komik
// game 
class produk {
 public $judul = "Judul",
        $penulis= "Penulis",
        $penerbit = "Penerbit",
        $harga = 0;

        public function getLabel(){
            return "$this->penulis,$this->penerbit";
        }
}

// $produk1 = new Produk();
// $produk1 -> Judul = "Naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul ="Uncahrted";
// $produk2 -> tambahProperty = "Hehehe";
// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shounen jump";
$produk3->harga = 30000;



$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis ="Neil Drukmann";
$produk4->penerbit ="Sony Computer";
$produk4->harga = 25000;

echo"komik :" . $produk3->getLabel();
echo"<br>";
echo "Game : " . $produk4->getLabel();
?>