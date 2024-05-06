<?php

class Historia {
    public $historiador;
    public $historias;

    public function __construct($historiador, $historias) {
        $this->historiador = $historiador;
        $this->historias = $historias;
    }

    public function getHistoriador() {
        return $this->historiador;
    }

    public function getHistorias() {
        return $this->historias;
    }
}

$historia2 = new Historia("enzo", "takashi");

echo "Historiador: " . $historia2->getHistoriador();
echo "\nHistórias: " . $historia2->getHistorias();
?>