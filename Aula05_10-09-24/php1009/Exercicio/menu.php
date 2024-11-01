<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<link href="menu.css" rel="stylesheet" />
<link rel="icon" href="https://mir-s3-cdn-cf.behance.net/project_modules/fs/1e8feb109720503.5fda2a433c12d.jpg" type="image/x-icon">
<?php include('Comanda.Class.php') ?>

<body>
    <img name="logo" src="data:image/jpeg;base64,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">
    <br>
    <br>
    <form name="form" method="post">

        Número da mesa <br>
        <input type="number" name="mesa"> <br>
        Quantidade de clientes <br>
        <input type="number" name="clientes"> <br>
        Valor total <br>
        <input type="number" name="total"> <br>
        <br>
        <input type="submit" name="calcula" value="Enviar">

    </form>
    <?php
    $comanda = new Comanda();

    $comanda->calculaComanda();
    ?>
</body>

</html>