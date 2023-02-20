<?php
class Giochi extends ProdottoPerCane {
    public $materiale;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo, $materiale){
        parent::__construct($nome, $categoria, $prezzo, $foto, $tipo);
        $this->materiale=$materiale;
    }
}