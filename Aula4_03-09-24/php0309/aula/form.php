<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <!-- <?php
    include('menu.php');
    ?> assim o menu dos outras paginas não fica visível-->
    <form method="POST" action="desconto.php">
        <center>
            <fieldset>
                <h3>Insira o valor da venda e da quantidade de parcelas:</h3>
                Valor da venda: <input type="text" name="n1"><br><br>
                Quantidade de Parcelas: <input type="text" name="n2"><br><br>
                <button type="submit" class="btn btn-primary" name="acao">Enviar</button>
            </fieldset>
        </center>
    </form>
</body>

</html>