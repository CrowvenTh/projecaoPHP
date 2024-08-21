<?php
$n = $_POST['num'];

for($contador = 0; $contador < $n; $contador++){
    if($contador % 2 == 0){
        echo('<p bgcolor="blue">'.$contador.'</p>');
    } else {
        echo('<p>'.$contador.'</p>');
    }
}
?>