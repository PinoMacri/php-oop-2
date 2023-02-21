<?php
class ProdottoPerCane
{
    public $nome;
    public $categoria;
    public $prezzo;
    public $foto;
    public $tipo;
    public function __construct($nome, $categoria, $prezzo, $foto, $tipo)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->setPrezzo($prezzo);
        $this->foto = $foto;
        $this->tipo = $tipo;
    }
    public function setPrezzo($prezzo)
    {
        if (strlen($prezzo) < 5) {
            throw new Exception("Non è stato inserito il prezzo!");
        }
        $this->prezzo = $prezzo;
    }
}