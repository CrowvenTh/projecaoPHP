<?php

$valor = $_POST['valor'];
$parcela = $_POST['parcela'];

if($parcela <= 1){
    $total = +$valor - $valor * 0.10;
    echo ('Total da compra: R$' . $valor . ' ,dividido em ' . $parcela . 'x com 10% de desconto. <br> Valor Total: R$' . $total);
} else if ($parcela <= 3) {
    $total = +$valor + $valor * 0.05;
    echo ('Total da compra: R$' . $valor . ' ,dividido em ' . $parcela . 'x com 5% de juros. <br> Valor Total: R$' . $total);
} else {
    $total = +$valor + $valor * 0.10;
    echo ('Total da compra: R$' . $valor . ' ,dividido em ' . $parcela . 'x com 10% de juros. <br> Valor Total: R$' . $total);
}
?>