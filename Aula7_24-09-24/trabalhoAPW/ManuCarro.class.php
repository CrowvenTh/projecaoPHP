<?php
class ManuCarro{

private string $servico;
private float $valorservico;
private int $qtdp;
private float $valorp;

public function calcularCustoManutencao(){
    if (isset($_POST['calcular'])) {
    $resultado = $valorservico =$_POST['valor1'] + ($valorp = $_POST['valorp']* $qtdp = $_POST['qtdp']);
    return $resultado;
    }
  }
}

?>