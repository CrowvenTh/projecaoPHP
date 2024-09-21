<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria La'Venture </title>
    <link rel="stylesheet" href="index.css">
    <?php include('Pizzaria.Class.php') ?>
    <link rel="icon" href="https://th.bing.com/th/id/R.77056eec41d836b11970451c129fbd2a?rik=AU9Gr40covR9Vg&pid=ImgRaw&r=0" type="image/x-icon">
</head>

<body>
    <form name="form" method="post">
        <h1>Bem vindo!</h1>
        <h3>Cardápio</h3>
        <table>
            <tr>
                <th>Código</th>
                <th>Sabor</th>
            </tr>
            <tr>
                <td>01</td>
                <td>Calabresa</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Portuguesa</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Quatro Queijos</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Chocolate</td>
            </tr>
            <tr>
                <td>05</td>
                <td>Romeu & Julieta</td>
            </tr>
            </table>
            <table>
                <th>Tamanho</th>
                <th>Preço</th>
            </tr>
            <tr>
                <td>Grande</td>
                <td>R$ 45,90</td>
            </tr>
            <tr>
                <td>Média</td>
                <td>R$ 39,60</td>
            </tr>
            <tr>
                <td>Pequena</td>
                <td>R$ 26,90</td>
            </tr>
        </table>
        <h3>Faça seu pedido</h3>

        <label>Sabor</label><br>
        <select name="codigo">
            <option value="00">Selecione</option>
            <option value="01">Calabresa</option>
            <option value="02">Portuguesa</option>
            <option value="03">Quatro Queijos</option>
            <option value="04">Chocolate</option>
            <option value="05">Romeu & Julieta</option>
        </select>
        <br>

        <label>Tamanho</label><br>
        <select name="tamanho">
            <option value="">Selecione</option>
            <option value="G">Grande</option>
            <option value="M">Médio</option>
            <option value="P">pequeno</option>
        </select>
        <br>
        <label>Quantidade</label><br>
        <input type="number" name="quantidade" placeholder="Ex.: 2">
        <br>
        <input type="submit" name="pedir" value="Realizar Pedido">

        <?php
        $pedido = new Pizzaria();

        $pedido->calcularPedido();
        ?>
    </form>

</body>

</html>