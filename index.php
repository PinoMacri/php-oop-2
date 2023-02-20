<?php
//! L'E-Commerce vende Prodotti per Cani e Gatti
include __DIR__ . "/Classi/ProdottiGenerali.php";
//! Prodotto per il Cane:
include __DIR__ . "/Classi/ProdottiPerCani.php";
//! CANE: Sotto Categorie
//* Cucce
include __DIR__ . "/Classi/Cucce.php";
//* Giochi
include __DIR__ . "/Classi/Giochi.php";
//* Cibo
include __DIR__ . "/Classi/Cibo.php";
//! CANE: Istanze
include __DIR__ . "/Istanze/Istanze.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "./head.html" ?>
<body>
<?php include __DIR__ . "./cani.php" ?>
</body>
</html>