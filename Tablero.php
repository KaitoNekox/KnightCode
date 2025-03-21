<?php
namespace AjedrezPHP;

class Tablero {
    public array $tablero = [];

    public function __construct() {
        $this->inicializar();
    }

    private function inicializar() {
        $this->tablero = [
            ['TN', 'CN', 'AN', 'DN', 'RN', 'AN', 'CN', 'TN'],
            ['PN', 'PN', 'PN', 'PN', 'PN', 'PN', 'PN', 'PN'],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            ['PB', 'PB', 'PB', 'PB', 'PB', 'PB', 'PB', 'PB'],
            ['TB', 'CB', 'AB', 'DB', 'RB', 'AB', 'CB', 'TB']
        ];
    }

    public function mostrar() {
        foreach ($this->tablero as $fila) {
            foreach ($fila as $pieza) {
                echo ($pieza ?? "--") . " ";
            }
            echo PHP_EOL;
        }
    }

    public function mover(string $origen, string $destino) {
        list($origenX, $origenY) = $this->convertirCoordenadas($origen);
        list($destinoX, $destinoY) = $this->convertirCoordenadas($destino);

        $this->tablero[$destinoX][$destinoY] = $this->tablero[$origenX][$origenY];
        $this->tablero[$origenX][$origenY] = null;
    }

    private function convertirCoordenadas(string $pos): array {
        $letras = ['A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7];
        return [8 - intval($pos[1]), $letras[$pos[0]]];
    }
}
