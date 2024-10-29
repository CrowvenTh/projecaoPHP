<?php
class Aluguel
{
    public function calcularCustoTotal()
    {
        $duracao = $_POST['diasqtd'];
        $imovel = $_POST['imovel'];

        if ($_POST['calcula']) {
            if ($imovel == 'Apartamento'  && $duracao > 0) {
                $valorDiaria = $duracao * 65.90;
                echo ('<br>Tipo de imóvel: '.$imovel.'<br>Dias: '.$duracao. '<br>Valor total: R$' . $valorDiaria);
            } elseif ($imovel == 'Casa' && $duracao > 0) {
                $valorDiaria = $duracao * 135.20;
                echo ('<br>Tipo de imóvel: '.$imovel.'<br>Dias: '.$duracao. '<br>Valor total: R$' . $valorDiaria);
            } elseif ($imovel == 'Kitnet' && $duracao > 0) {
                $valorDiaria = $duracao * 35.30;
                echo ('<br>Tipo de imóvel: '.$imovel.'<br>Dias: '.$duracao. '<br>Valor total: R$' . $valorDiaria);
            }
        }
    }
}
