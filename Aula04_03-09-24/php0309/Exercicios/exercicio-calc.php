<?php

function Maior($num1, $num2, $num3, $acao)
{
    // $num1 = $_POST['num1'];
    // $num2 = $_POST['num2'];
    // $num3 = $_POST['num3'];
    if ($acao == "calcularMaior") {

        if ($num1 > $num2 && $num1 > $num3) {
            echo ('O número ' . $num1 . ' é maior que o número ' . $num2 . ' e ' . $num3);
        } else if ($num2 > $num1 && $num2 > $num3) {
            echo ('O número ' . $num2 . ' é maior que o número ' . $num1 . ' e ' . $num3);
        } else if ($num3 > $num1 && $num3 > $num2) {
            echo ('O número ' . $num3 . ' é maior que o número ' . $num1 . ' e ' . $num2);
        }
    }
}
// Maior($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["acao"]);
