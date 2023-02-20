<?php
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