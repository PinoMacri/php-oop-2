<?php
require_once __DIR__ . "./Caratteristiche.php";
class Cibo extends ProdottoPerCane
{
    use Icon;
    public $ingredienti;
    public $peso;
    public $calorie;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $ingredienti, $peso, $calorie)
    {
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->ingredienti = $ingredienti;
        $this->peso = $peso;
        $this->calorie = $calorie;

    }
}