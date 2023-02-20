<?php
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