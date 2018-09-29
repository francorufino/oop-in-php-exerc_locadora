<?php
class locacao{
private $cliente;

public function __construct($cliente){
  $this->cliente = $cliente;
}

public function calcularDiaria($veiculoASerAlugado, $qtdDias){
  return $qtdDias * $veiculoASerAlugado->getValorDiaria();
}

}





 ?>
