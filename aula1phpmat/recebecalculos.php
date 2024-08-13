<?php
    $v = $_POST['valor1'];
    if($v > 20){
        echo('O valor '.$v.' é maior que 20');
    } else if ($v < 20){
        echo('O valor '.$v.' é menor que 20');
    } else {
        echo('O valor '.$v.' é igual a 20');
    }
?>
