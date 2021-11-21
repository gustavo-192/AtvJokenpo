<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">
<?php
#iniciando variável
 	session_start();
 	$_SESSION["ptsUsuario"] = 0;
 	$_SESSION["ptsComputador"] = 0;
?>
<form action="jokenpo.php" method="POST">
<h1>Pedra-Papel-Tesoura</h1>
<h3>Venha jogar!!!</h3> 
<input type="submit"  value="Jogar">
</form>
</div>