<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
	</head>
	
	<body>
	
<?php

	include("Pessoa.php");
		
	$p = new Pessoa(
					$_POST["nome"],
					$_POST["email"],
					$_POST["cpf"],
					$_POST["sexo"],
					$_POST["data_nascimento"]					
					);

	$p->exibe_dados();

?>
</body>
</html>