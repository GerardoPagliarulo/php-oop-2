<?php
// Classe padre Prodotto
include_once __DIR__ . '/Prodotto.php'; 
// Classe figlia Televisore
class Televisore extends Prodotto {
    public $risoluzione;
    public $pollici;
    // Constructor
    public function __construct($_categoria, $_prezzo, $_sconto_perc, $_risoluzione, $_pollici) {
        parent::__construct($_categoria, $_prezzo, $_sconto_perc);
        $this->risoluzione = $_risoluzione;
        $this->pollici = $_pollici;
    }
    // Methods
    public function prezzoScontato() {
        return parent::prezzoScontato() - 50;
    }    
}