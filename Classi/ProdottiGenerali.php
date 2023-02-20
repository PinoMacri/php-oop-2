<?php
class ProdottiGenerali {
    public $prodotti_per_cani;
    public $prodotti_per_gatti;
    public function __construct(ProdottoPerCane $prodotti_per_cani, ProdottoPerGatto $prodotti_per_gatti){
        $this->prodotti_per_cani = $prodotti_per_cani;
        $this->prodotti_per_gatti = $prodotti_per_gatti;
    }
}
