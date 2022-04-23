<?php
require_once "Lingkaran.php";

echo "NILAI PHI" . Lingkaran::PHI ;
$ling1 = new Lingkaran (9);
$ling2 = new Lingkaran (8);

echo "<br/>Luas Lingkaran1".$ling1->getLuas();
echo "<br>Luas Lingkaran2".$ling2->getLuas();

echo "Keliling Lingkaran1".$ling1->getKel();
echo "<br>Keliling Lingkaran2".$ling2->getKel();
?>