<?php
//^ ----- PHP -----^//
//! L'E-Commerce vende Prodotti per Cani e Gatti
include __DIR__ . "/Classi/ProdottiGenerali.php";
//! Prodotto per il Cane:
include __DIR__ . "/Classi/ProdottiPerCani.php";
//! Prodotto per il Gatto:
include __DIR__ . "/Classi/ProdottiPerGatti.php";
//! CANE&GATTO: Sotto Categorie
//* Giochi
include __DIR__ . "/Classi/Giochi.php";
//* Cibo
include __DIR__ . "/Classi/Cibo.php";
//* Cucce
include __DIR__ . "/Classi/Cucce.php";
//! CANE: Istanze
include __DIR__ . "/Istanze/IstanzeCani.php";
//! GATTO: Istanze
include __DIR__ . "/Istanze/IstanzeGatti.php";
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include __DIR__ . "./head.html" ?>
<body>
<!-- Sezione Cani -->
<?php include __DIR__ . "./cani.php" ?>
<!-- Sezione Gatti -->
<?php include __DIR__ . "./gatti.php" ?>
</body>
</html>