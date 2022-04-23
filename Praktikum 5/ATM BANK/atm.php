<?php
require_once 'class bankakun.php';

$ab1 = new BankAccount('PGB', 5000000, 'Pogba');
$ab2 = new BankAccount('MSI', 25000000, 'Messi');

echo 'sebelum transfer<br/>';
$ab1->cetak();
echo '<hr/>';
$ab2->cetak();
// rashford transfer ke amad 1200
$ab1->transfer($ab2, 5200);
echo '<hr/>sesudah transfer<br/>';
$ab1->cetak();
echo '<hr/>';
$ab2->cetak();