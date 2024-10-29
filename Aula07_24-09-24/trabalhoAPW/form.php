<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('ManuCarro.class.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Av1</title>
    <link rel ="stylesheet" type="text/css" href="estilo.css">
</head>

<body >
    <center>
        
    <form method="post" action=""> 
<table>
<tr>
<td>Serviço:  </td><td><select name="sevico">
        <option value="Balanceamento">Balanceamento</option>
        <option value="Alinhamento">Alinhamento</option>
        <option value="Troca de Óleo">Troca de Óleo</option>
        <option value="Suspensão e Freios">Suspensão e Freios</option>
        <option value="Consertos e Reparos">Consertos e Reparos</option>
        </select></td>
</tr>
<tr>
<td>Valor Serviço: </td><td><input type=text name=valor1 ></td>
</tr>
<tr>
<td>Selecione a peça:</td><td> <select name="pecas">
        <option value="peca1">Radiador</option>
        <option value="peca2">Parafuso</option>
        <option value="peca3">Filtro de Óleo</option>
        </select> </td>
</tr>
<tr>
<td> Valor da peça: </td><td><input type=number name=valorp > </td>
</tr>
<tr>
<td>Quantidade de peças: </td><td><input type=number name=qtdp > </td>
</tr>
</table>

<input type="submit" name="calcular" value="Calcular "/> 
</form>
<?php
   
    $total= new ManuCarro();
        echo "<h1>Total a pagar: ".$total -> calcularCustoManutencao()."</h1>";
    ?>
</center>
</body>
</html>