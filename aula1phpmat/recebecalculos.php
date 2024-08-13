<?php
    $v = $_POST['valor1'];

    $dobro = $v * 2;
    echo('O dobro de '.$v.' é igual a '.$dobro);

    $bol = $v;
    if($bol % 2 != 0){
        echo('<p> O número '.$bol.' é impar </p>');
    } else {
        echo('<p> O número '.$bol.' é par </p>');

    }

    for($cont = 1; $cont < $v; $cont++){
        echo('<p>Valor atual: '.$cont);
    }
    /* 
if($v > 20){
    echo('O valor '.$v.' é maior que 20');
    } else if ($v < 20){
        echo('O valor '.$v.' é menor que 20');
    } else {
        echo('O valor '.$v.' é igual a 20');
    }
    */
?>
    