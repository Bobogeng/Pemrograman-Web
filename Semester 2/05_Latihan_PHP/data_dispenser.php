<?php
require_once "class_dispenser.php";
$susu = new Gelas("Susu", 2000);
$susu->cetak();
echo ("</br>");
$susu->cetakDispenser();
echo ("</br>");
$susu->isi(250);
echo ("</br>");
$susu->cetakDispenser();
echo ("</br>");
$susu->isiUlang(5);
echo ("</br>");
$susu->cetakDispenser();
