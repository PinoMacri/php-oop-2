<?php
require_once __DIR__ . "./Caratteristiche.php";
class Cucce extends ProdottoPerCane
{
    use Icon;
    public $colore;
    public function __construct(
        $nome,
        $categoria,
        $prezzo,
        $foto,
        $tipo,
        $colore,
    )
    {
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->colore = $colore;
    }
}