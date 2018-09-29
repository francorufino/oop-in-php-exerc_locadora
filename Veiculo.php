<?php
abstract class Veiculo{
  private $placa;
  private $valorDiaria;

  public function __construct($placa, $valorDiaria){
    $this->placa = $placa;
    $this->valorDiaria=$valorDiaria;
  }


public function getValorDiaria(){
  return $this->valorDiaria;
}



}








 ?>
