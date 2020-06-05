<?php
// Classe padre Prodotto
include_once __DIR__ . '/Prodotto.php'; 
// Classe figlia Tastiera
class Tastiera extends Prodotto {
    public $materiale_keycap;
    public $modello_switch;
    public $materiale_pcb;
    // Constructor
    public function __construct($_categoria, $_prezzo,  $_sconto_perc, $_materiale_keycap, $_modello_switch, $_materiale_pcb) {
        parent::__construct($_categoria, $_prezzo, $_sconto_perc);
        $this->materiale_keycap = $_materiale_keycap;
        $this->modello_switch = $_modello_switch;
        $this->materiale_pcb = $_materiale_pcb;
    }
    // Constructor ...$params
    /*public function __construct($_materiale_keycap, $_modello_switch, $_materiale_pcb, ...$params) {
        parent::__construct(...$params);
        $this->materiale_keycap = $_materiale_keycap;
        $this->modello_switch = $_modello_switch;
        $this->materiale_pcb = $_materiale_pcb;
    }*/    
}
// Mostare a schermo -> Constructor ...$params. Richiede l'inserimento nel costruct di tutte le propietà della classe padre
/*$tastiera = new Tastiera('ABS', 'Cherry Red', 'Metallo', 'Elettronica', 50, 10);
var_dump($tastiera);*/