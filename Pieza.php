<?php
namespace AjedrezPHP;

class Pieza {
    public string $tipo;
    public string $color;

    public function __construct(string $tipo, string $color) {
        $this->tipo = $tipo;
        $this->color = $color;
    }

    public function __toString() {
        return $this->color[0] . $this->tipo[0]; // Ejemplo: "PN" para Peón Negro
    }
}
