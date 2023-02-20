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
    public $nome_prodotto;
    public $prezzo_prodotto;
    public $foto_prodotto;
    public function __construct($nome_prodotto, $prezzo_prodotto, $foto_prodotto){
        $this->nome_prodotto = $nome_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        $this->foto_prodotto = $foto_prodotto;
    }
}
//* CANE: Sotto-Categoria
class Cucce extends ProdottoPerCane {
    public $colore_cuccia;
    public $tipo_cuccia;
    public function __construct($nome_prodotto, $prezzo_prodotto, $foto_prodotto, $colore_cuccia, $tipo_cuccia){
        parent::__construct($nome_prodotto, $prezzo_prodotto, $foto_prodotto);
        $this->colore_cuccia = $colore_cuccia;
        $this->tipo_cuccia = $tipo_cuccia;
    }
}
$cuccia_stoffa = new Cucce("Cuccia in Stoffa", "€14,00", "<img src='./knuffelwuff-lettino-per-cani-lotte-in-velluto-con-raffinato-effetto-tessuto-a-mano.jpg' alt=''>", "Grigio", "Kennel" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <ul> 
        <ul> <?php foreach ($cuccia_stoffa as $descrizione_prodotto) : ?>
            <li>
            <?php echo $descrizione_prodotto?>
            </li>
            <?php endforeach; ?>
        </ul>
    </ul>
</body>
</html>