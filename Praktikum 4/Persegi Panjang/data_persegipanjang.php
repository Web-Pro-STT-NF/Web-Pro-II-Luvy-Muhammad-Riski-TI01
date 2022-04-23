<?php
require_once "class_persegipanjang.php";
 
$PP1 = new PersegiPanjang (19, 15);
$PP2 = new PersegiPanjang (17, 8);

echo "Luas Persegi Panjang 1: ".$PP1->getLuas();
echo "<br/>Luas Persegi Panjang 2: ".$PP2->getLuas();
echo "<br><br>Keliling Persegi Panjang1: ".$PP1->getKeliling();
echo "<br>Keliling Persegi Panjang2: ".$PP2->getKeliling();
?>