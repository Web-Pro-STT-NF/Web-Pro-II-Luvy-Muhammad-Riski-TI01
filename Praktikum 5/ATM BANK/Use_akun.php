<?php

require_once 'class.php';

$ac1 = new Account('PGB', 10000);
echo 'sebelum menabung:<br>';
$ac1->cetak();
$ac1->deposit(800);
echo '<br/>setelah menabung 200<br>';
$ac1->cetak();

$ac2 = new Account('MSI', 1000);