<?php
class ProdottoPerGatto {
    public $titolo;
    public $tipo;
    public $costo;
    public $immagine;
    public $categoria;
    public function __construct($titolo, $tipo, $costo, $immagine, $categoria){
        $this->titolo = $titolo;
        $this->tipo = $tipo;
        $this->costo = $costo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}