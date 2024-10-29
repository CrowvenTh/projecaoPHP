<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Imóveis</title>
    <link rel="stylesheet" href="index.css">
    <?php include('Aluguel.Class.php') ?>
    <link rel="icon" href="https://img.freepik.com/vetores-premium/um-fundo-marrom-com-o-logotipo-da-imobiliaria_893986-105.jpg" type="image/x-icon">
</head>

<body>
    <form name="form" method="post">
        <h1>Alugue um Imóvel!</h1>
        <table>
            <tr>
                <th>Imóvel</th>
                <th>Diária</th>
            </tr>
            <tr>
                <td>Apartamento</td>
                <td>R$65,90</td>
            </tr>
            <tr>
                <td>Casa</td>
                <td>R$135,20</td>
            </tr>
            <tr>
                <td>Kitnet</td>
                <td>R$35,30</td>
            </tr>
        </table>
        <br>

        <label>Tipo de imóvel desejado</label>
        <br>
        <select name="imovel">
            <option value="Apartamento">Apartamento</option>
            <option value="Casa">Casa</option>
            <option value="Kitnet">Kitnet</option>
        </select>

        <br>
        <br>
        <label>Quantos dias o imóvel sera alugado ?</label><br>
        <input name="diasqtd" type="number" placeholder="Ex. 31">
        <br>
        <br>
        <input type="submit" name="calcula" value="Selecionar">
        <br>
        <br>

            <?php
            $aluguel = new Aluguel();

            $aluguel->calcularCustoTotal();
            ?>
        

    </form>

</body>

</html>