<?php
class Pizzaria
{
    public function calcularPedido()
    {
        $qtd = $_POST['quantidade'];
        $cod = $_POST['codigo'];
        $tam = $_POST['tamanho'];

        if ($tam == "G") {
            $valor = 45.90;
            $tam = "Grande";
        } elseif ($tam == "M") {
            $valor = 39.60;
            $tam = "Média";
        } else {
            $valor = 26.90;
            $tam = "Pequena";
        }

        switch ($cod) {
            case 01:
                $sabor = 'Calabresa';
                break;
            case 02:
                $sabor = 'Portuguesa';
                break;
            case 03:
                $sabor = 'Quatro Queijos';
                break;
            case 04:
                $sabor = 'Chocolate';
                break;
            case 05:
                $sabor = 'Romeu & Julieta';
                break;
        }
        echo('<br> Sabor: '.$sabor.
             '<br> Tamanho: '.$tam.
             '<br> Quantidade: '.$qtd.
             '<br> Total: R$'.$valor * $qtd);
    }
}
