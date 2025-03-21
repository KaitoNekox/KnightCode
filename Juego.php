<?php
namespace AjedrezPHP;

class Juego {
    private Tablero $tablero;

    public function __construct() {
        $this->tablero = new Tablero();
    }

    public function iniciar() {
        echo "Bienvenido al Ajedrez en PHP. Escribe movimientos como 'E2 E4'.\n";
        while (true) {
            $this->tablero->mostrar();
            echo "Movimiento: ";
            $entrada = trim(fgets(STDIN));
            if (strtolower($entrada) === "salir") break;

            $mov = explode(" ", $entrada);
            if (count($mov) == 2) {
                $this->tablero->mover($mov[0], $mov[1]);
            } else {
                echo "Formato incorrecto. Usa 'E2 E4'.\n";
            }
        }
    }
}
