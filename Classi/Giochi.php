<?php
require_once __DIR__ . "./Caratteristiche.php";
class Giochi extends ProdottoPerCane
{
    use Icon;
    public $materiale;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $materiale)
    {
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->materiale = $materiale;
    }
}