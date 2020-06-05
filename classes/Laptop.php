<?php
// Classe padre Prodotto
include_once __DIR__ . '/Prodotto.php'; 
// Classe figlia Laptop
class Laptop extends Prodotto {
    public $marca;
    public $cpu;
    public $scheda_video;
    public $software;
    // Constructor
    public function __construct($_categoria, $_prezzo, $_marca, $_cpu, $_scheda_video, $_software) {
        parent::__construct($_categoria, $_prezzo, $_sconto_perc);
        $this->marca = $_marca;
        $this->cpu = $_cpu;
        $this->scheda_video = $_scheda_video;
        $this->software = $_software;
    }
    // Constructor ...$params
    /*public function __construct($_marca, $_cpu, $_gpu, $_software, ...$params) {
        parent::__construct(...$params);
        $this->marca = $_marca;
        $this->cpu = $_cpu;
        $this->gpu = $_gpu;
        $this->software = $_software;
    }*/
}
// Mostare a schermo -> Constructor ...$params. Richiede l'inserimento nel costruct di tutte le propietà della classe padre
/*$laptop = new Laptop('Asus', 'Intel i5', 'Nvidia GTX950M', 'Windows home', 'Elettronica', 50, 10);
var_dump($laptop);*/