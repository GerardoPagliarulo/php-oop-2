<?php
/**********************
 *  CLASSE PRODOTTO  *
***********************/
class Prodotto {
    public $categoria;
    public $prezzo;
    public $sconto_perc;
    // Constructor
    public function __construct($_categoria, $_prezzo, $_sconto_perc) {
        $this->categoria = $_categoria;
        $this->prezzo = $_prezzo;
        $this->sconto_perc = $_sconto_perc;
    }
    // Methods 
    public function prezzoScontato() {
        $sconto = $this->prezzo * $this->sconto_perc / 100;
        $prezzo_scontato = $this->prezzo - $sconto;
        return number_format($prezzo_scontato, 2, ',', '.');
    }
}