<?php
//! L'E-Commerce vende Prodotti per Cani e Gatti
class ProdottiGenerali {
    public $cani;
    public $gatti;
    public function __construct($cani, $gatti){
        $this->cani = $cani;
        $this->gatti = $gatti;
    }
}
//! Prodotto per il Cane:
class ProdottoPerCane {
    public $nome;
    public $categoria;
    public $prezzo;
    public $foto;
    public $tipo;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->foto = $foto;
        $this->tipo = $tipo;
    }
}
//! CANE: Sotto Categorie
//* Cucce
class Cucce extends ProdottoPerCane {
    public $colore;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $colore){
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->colore = $colore;
    }
}
//* Giochi
class Giochi extends ProdottoPerCane {
    public $materiale;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $materiale){
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->materiale=$materiale;
    }
}
//* Cibo
class Cibo extends ProdottoPerCane {
    public $ingredienti;
    public $peso;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $ingredienti, $peso, $calorie){
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->ingredienti=$ingredienti;
        $this->peso=$peso;
        $this->calorie=$calorie;
    }
}
//! CANE: Singoli Prodotti
//* Cucce
// Cuccia in Stoffa
$cuccia_stoffa = new Cucce (
"<h4>Cuccia in Stoffa</h4>", 
"<p>Categoria: Cucce</p>",
"<p>Prezzo: €14,00</p>", 
"<img class='img-fluid' src='./knuffelwuff-lettino-per-cani-lotte-in-velluto-con-raffinato-effetto-tessuto-a-mano.jpg' alt=''>",
"<p>Tipo di Cuccia: Kennel</p>",
"<p>Colore: Grigio</p>" );
//* Giochi
// Gioco Osso di Gomma
$gioco_osso = new Giochi (
"<h4>Osso di Gomma</h4>", 
"<p>Categoria: Giochi</p>",
"<p>Prezzo: €5,00</p>", 
"<img class='img-fluid' src='./imac-osso-small-large-foam-gioco-per-cane-.jpg' alt=''>",
"<p>Tipo di Gioco: Osso</p>",
"<p>Materiale: Gomma</p>"
);
$gioco_palla = new Giochi (
    "<h4>Palla di Plastica</h4>", 
    "<p>Categoria: Giochi</p>",
    "<p>Prezzo: €9,80</p>", 
    "<img class='img-fluid' src='./palla-5-sensi-gioco-per-cani.jpg' alt=''>",
    "<p>Tipo di Gioco: Palla</p>",
    "<p>Materiale: Plastica</p>" 
);
//* Cibo
$scatoletta_carne = new Cibo (
    "<h4>Scatoletta di Pollo</h4>", 
    "<p>Categoria: Cibo</p>",
    "<p>Prezzo: €3,99</p>", 
    "<img class='img-fluid' src='./584d73df00255_0000.webp' alt=''>",
    "<p>Tipo di Prodotto: Scatoletta</p>",
    "<p>Ingredienti: Pollo, Cereali</p>",
    "<p>Peso: 150gr</p>",
    "<p>Valori Nutrizionali: 287Kcal</p>",
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<div class="container">
    <div class="row text-center">
        <h2 class="p-3">
            Prodotti per Cani
        </h2>
    </div>
    <div class="row">
      <ul class="col-3"> 
            <?php foreach ($cuccia_stoffa as $descrizione_cuccia_stoffa) : ?>
            <li>
            <?php echo $descrizione_cuccia_stoffa?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($gioco_osso as $descrizione_gioco_osso) : ?>
            <li>
            <?php echo $descrizione_gioco_osso?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($gioco_palla as $descrizione_gioco_palla) : ?>
            <li>
            <?php echo $descrizione_gioco_palla?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($scatoletta_carne as $descrizione_scatoletta_carne) : ?>
            <li>
            <?php echo $descrizione_scatoletta_carne?>
            </li>
            <?php endforeach; ?>
      </ul>
    </div>
</div>

</body>
</html>