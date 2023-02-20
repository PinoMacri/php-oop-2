<?php
class Cucce extends ProdottoPerCane {
    public $colore;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $colore){
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->colore = $colore;
    }
}