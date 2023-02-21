<?php
//! Istanze Gatti
//* Cucce
// Cuccia in Stoffa
$cuccia_peluche = new Cucce(
    "<h4>Cuccia in Peluche</h4>",
    "<p>Categoria: Cucce</p>",
    "<p>Prezzo: €28,00</p>",
    "<img class='img-fluid' src='./immagini/61oqlA-K8FL._AC_SL1500_.jpg' alt=''>",
    "<p>Tipo di Cuccia: Lavabile</p>",
    "<p>Colore: Grigio</p>"
);
$cuccia_peluche->setIcona("<i class='fa-solid fa-cat'></i>");
//* Giochi
// Gioco Osso di Gomma
$cuccia_cotone = new Cucce(
    "<h4>Cuccia in Cotone</h4>",
    "<p>Categoria: Cucce</p>",
    "<p>Prezzo: €45,84</p>",
    "<img class='img-fluid' src='./Immagini/71EcMOqPgLL._AC_SL1500_.jpg' alt=''>",
    "<p>Tipo di Cuccia: Lavabile</p>",
    "<p>Materiale: Cotone</p>"
);
$cuccia_cotone->setIcona("<i class='fa-solid fa-cat'></i>");
$gioco_molla = new Giochi(
    "<h4>Molla</h4>",
    "<p>Categoria: Giochi</p>",
    "<p>Prezzo: €94,20</p>",
    "<img class='img-fluid' src='./Immagini/81BDOrLvHML._AC_SL1500_.jpg' alt=''>",
    "<p>Tipo di Gioco: Molla Stimolatrice</p>",
    "<p>Materiale: Ferro</p>"
);
$gioco_molla->setIcona("<i class='fa-solid fa-cat'></i>");
//* Cibo
$bocconcini_carne = new Cibo(
    "<h4>Bocconcini di Pollo</h4>",
    "<p>Categoria: Cibo</p>",
    "<p>Prezzo: €30,99</p>",
    "<img class='img-fluid p-4' src='./Immagini/81WlsuYpdTL._AC_SL1500_.jpg' alt=''>",
    "<p>Tipo di Prodotto: Bocconcini</p>",
    "<p>Ingredienti: Pollo, Manzo</p>",
    "<p>Peso: 1500gr cad.</p>",
    "<p>Valori Nutrizionali: 499Kcal</p>",
);
$bocconcini_carne->setIcona("<i class='fa-solid fa-cat'></i>");