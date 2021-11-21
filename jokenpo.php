<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<?php
	session_start();
?>
<form action="" method="POST">
	
	<h3>Escolha a sua jogada:</h3>
<p>
	<input type="radio" name="escolha" value="Pedra" checked> pedra<br>&nbsp;&nbsp;
	<input type="radio" name="escolha" value="Papel"> papel<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="escolha" value="Tesoura"> tesoura<br><br>
	<input type="submit" name="Enviar" value="Jogar">
</p>
<hr>
<?php

if (isset($_POST["Enviar"]))
{	
	echo "string";
	
	#Sorteio do Computador
	$sorteio = rand(1,3);

	#armazenando imagens nas variáveis
	$pedra = "pedra.png";
	$papel = "papel.png";
	$tesoura = "tesoura.png";

	#Armazenando a opção feita pelo usuário vindo do name "escolha"
	$escolha = $_POST["escolha"];

	#estrutura para o usuário
		
		#Estrutura "PEDRA"
		#Sorteio 1 = Pedra
	if ($escolha == "Pedra" && $sorteio == 1 )
		{
			
			echo "<img src='$pedra' alt='image' width='200' height='130'>";
			$resultado = "Empate";
				
		}		
		#Sorteio 2 = Papel
	if ($escolha == "Pedra" && $sorteio == 2)
		{
		
			echo "<img src='$pedra' alt='image' width='200' height='130'>";
			$resultado = "Derrota";
				
		}			
		#Sorteio 3 = Tesoura
	if ($escolha == "Pedra" && $sorteio == 3)
		{
		
			echo "<img src='$pedra' alt='image' width='200' height='130'>";		
			$resultado = "Vitória";
		
		}


		#Estrutura "PAPEL"
		#Sorteio 1 = Pedra
	if ($escolha == "Papel" && $sorteio == 1)
		{	

			echo "<img src='$papel' alt='image' width='200' height='130'>";	
			$resultado = "Vitória";
		
		}
		#Sorteio 2 = Papel
	if ($escolha == "Papel" && $sorteio == 2)
		{

			echo "<img src='$papel' alt='image' width='200' height='130'>";	
			$resultado = "Empate";

		}
		#Sorteio 3 = Tesoura
	if ($escolha == "Papel" && $sorteio == 3)
		{

			echo "<img src='$papel' alt='image' width='200' height='130'>";	
			$resultado = "Derrota";
			
		}


		#Estrutura "TESOURA"	
		#Sorteio 1 = Pedra
	if ($escolha == "Tesoura" && $sorteio == 1) 
		{
			
			echo "<img src='$tesoura' alt='image' width='200' height='130'>"; 
			$resultado = "Derrota";
				
		}
		#Sorteio 2 = Papel
	if ($escolha == "Tesoura" && $sorteio == 2) 
		{
				
			echo "<img src='$tesoura' alt='image' width='200' height='130'>"; 
			$resultado = "Vitória";	
	
		}
		#Sorteio 3 = Tesoura 
	if ($escolha == "Tesoura" && $sorteio == 3) 
		{	

			echo "<img src='$tesoura' alt='image' width='200' height='130'>"; 
			$resultado = "Empate";
					
		}

	#estrutura para o computador
	if ($sorteio == 1)
	#Sorteio 1 = Pedra 
	{
		echo "<img src='$pedra' alt='image' width='200' height='130'>";
	}
	elseif ($sorteio == 2) 
	#Sorteio 2 = Papel
	{
		echo "<img src='$papel' alt='image' width='200' height='130'>";
	}
	else
		#Sorteio 3 = Tesoura
	{
		echo "<img src='$tesoura' alt='image' width='200' height='130'>";
	}

	#Somatória de pontuação pontuação
	if ($resultado == "Vitória") 
	{
		$_SESSION["ptsUsuario"] = $_SESSION["ptsUsuario"] + 1;
		#2° maneira mais prática
		#$_SESSION["ptsUsuario"] += 1;

	}
	if ($resultado == "Derrota") 
	{
		$_SESSION["ptsComputador"] = $_SESSION["ptsComputador"] + 1;
		#2° maneira mais prática
		#$_SESSION["ptsComputador"] += 1;
	}
	
	
	#exibindo resultado do jogo
	echo "<br><br>";
	echo "<br>";
	echo "Placar:<br><br>";
	echo "<b>$resultado<br></b>";
	echo "Pontuação Usuario: " . $_SESSION["ptsUsuario"];
	echo "<br>";
	echo "Pontuação Computador: " . $_SESSION["ptsComputador"];
				
}

?>
</form>
</div>