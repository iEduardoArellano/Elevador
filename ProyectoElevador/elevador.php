<?php
class Elevador {
public $sube;
public $baja;
public $pisoActual;
public $limitePisos;
public $limitPisosinf;

public function subir () {
if (($this->pisoActual + $this->sube) <= $this->limitePisos) {
echo “Subiendo al piso ” . ($this->pisoActual + $this->baja) . “<br>”;
} else {
echo “Piso solicitado ” . $this->pisoActual + $this->sube . “<br>”;
echo “Piso invalido. Supera el limite<br>”;
}
}

public function bajar () {
if (($this->pisoActual – $this->baja) >= $this->limitPisosinf) {
echo “Bajando al piso ” . ($this->pisoActual – $this->baja) . “<br>”;
} else {
echo “Piso solicitado ” . $this->pisoActual – $this->baja . “<br>”;
echo “Piso Invalido. No existen pisos mas inferiores al piso ” . $this->limitPisosinf;
}
}

public function verificarPisosubir() {
$this->pisoActual = $this->pisoActual + $this->sube;
if ($this->pisoActual <= $this->limitePisos) {
echo “Piso ” . $this->pisoActual . ” Verificado<br><br>”;
} else {
$this->pisoActual = $this->pisoActual – $this->sube;
echo “El piso no puede ser verificado.Por lo tanto el elevador no se movera<br>Piso Actual ” . $this->pisoActual . “<br>”;
}
}

public function verificarPisobajar () {
$this->pisoActual = $this->pisoActual – $this->baja;
if ($this->pisoActual >= $this->limitPisosinf) {
echo “Piso ” . $this->pisoActual . ” Verificado<br><br>”;
} else {
$this->pisoActual = $this->pisoActual + $this->baja;
echo “El piso no puede ser verificado.Por lo tanto el elevador no se movera<br>Piso Actual ” . $this->pisoActual . “<br>”;
}
}

}
?>