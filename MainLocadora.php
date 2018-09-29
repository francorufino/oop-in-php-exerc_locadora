<?php
require "Cliente.php";
require "Veiculo.php";
require "VeiculoEconomico.php";
require "Locacao.php";
require "VeiculoFamilia.php";
require "VeiculoLuxo.php";

$cliente = new Cliente ("Andreza", "Campbell");
$fiatUno = new VeiculoEconomico("DRE-1717");
$locacao = new Locacao($cliente);
echo $locacao->calcularDiaria($fiatUno, 3);

echo "<br><br>";

$cliente2 = new Cliente ("Lucas", "Prado");
$grandCaravan = new VeiculoFamilia("LUC-0707");
$locacao2 = new Locacao($cliente2);
echo $locacao2->calcularDiaria($grandCaravan, 3);

echo "<br><br>";

$cliente3 = new Cliente ("Nicolas", "Prado");
$mercedez = new VeiculoLuxo ("NIC-7171");
$locacao3 = new Locacao($cliente3);
echo $locacao3->calcularDiaria($mercedez,3);

 ?>
