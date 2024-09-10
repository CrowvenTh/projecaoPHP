<?php
class Comanda {
    public function calculaComanda(){
        $mesa = $_POST['mesa'];
        $total = $_POST['total'];
        $clientes = $_POST['clientes'];

        if ($clientes && $total > 0) {
            $valorTotal = $total / $clientes;
        }

        echo (
            '<br> Mesa: ' . $mesa .
            '<br> Qtd de Clientes: ' . $clientes .
            '<br> Total: ' . $total .
            '<br> Valor pago por cada cliente: R$' . $valorTotal);
    }
}
