<?php

	include("cadeira.php");
	
	$c1 = new Cadeira("Azul","5.3","Ferro","10","120",true,"0.85","0.4");
	
	$c1->aumentar(0.5);

	$c1->material = "espuma";

	$c2 = new Cadeira("Preta","0.9","Plástico","5","40",false,"0.4","0.4");

?>

<table border="1">
	<tr>
		<th>cor</th>
		<th>peso</th>
		<th>material</th>
		<th>durabilidade</th>
		<th>encosto</th>
		<th>regulagem miníma</th>
		<th>regulagem máxima</th>
		<th>tamanho</th>
		<th>custo</th>
	</tr>

<?php
	$c1->escreve_linha();

	$c2->escreve_linha();
?>
</table>		 