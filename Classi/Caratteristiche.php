<?php
trait Icon
{
    public $icona_categoria;
    public function setIcona($icona_categoria)
    {
        $this->icona_categoria = $icona_categoria;
        return $this;
    }
}