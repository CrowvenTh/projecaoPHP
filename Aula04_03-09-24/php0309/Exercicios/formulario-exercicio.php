<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("exercicio-calc.php");
    ?>
</head>

<body>
    <form method="POST" action="">
        Calculadora<br>

        Número1: <input type="text" name=num1><br />
        Número2: <input type="text" name=num2><br />
        Número3: <input type="text" name=num3><br />

        <button type="submit" name=acao value=calcularMaior>Calcular</button>
    </form>
    <?php
    Maior($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["acao"]);
    ?>

</body>

</html>