<html>
<!-- Método: $_POST | Action em branco porque executaremos na própria página -->
<head>
<?php  include ('Calculadora.Class.php') ?>
</head>
<body>
	<form name ="form" method="post" action="">
		<!-- Input que receberá o primeiro valor a ser calculado -->
		Valor 1:<input type="text" name="v1" placeholder="Valor 1" /></br>

		<!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->
		Operacao:<select name="operacao">
			<option value="soma">+</option>
			<option value="subtrai">-</option>
			<option value="multiplica">*</option>
			<option value="divide">/</option>
		</select></br>

		<!-- Input que receberá o segundo valor a ser calculado -->
		Valor 2:<input type="text" name="v2" placeholder="Valor 2" /></br>

		<!-- Input que enviará os valores para a função de cálculo -->
		<input type="submit" name="doCalc" value="Calcular" />
	</form>
	<?php
	# Instancia a classe CALCULADORA()
        $minhacalculadora = new Calculadora();
        
        # Executa o meto Calcular
        echo $minhacalculadora->calcular();
	?>
  </body>
<html>
	