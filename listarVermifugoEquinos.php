<?php
require_once 'cabecalho.php';
require_once 'model/Vermifugo.php';
if(isset($_GET['fim'])){
	$inicio=$_GET['fim'];
	$inicio++;
	$fim=$inicio+4;
}else{
	$inicio=1;
	$fim=5;
}
$num_linhas=ultimoVermCavalo("");
if($num_linhas<1){
	echo "<h2>Não há vermífugo cadastrado!</h2>";
}else{

	echo "<table>";
	echo "<tr>";
<<<<<<< HEAD
	echo "<th>Id vermífugo</th>";
	echo "<th>Nome do vermífugo</th>";
	echo "<th>Marca do vermífugo</th>";
	echo "<th>Lote de vermífugo</th>";
	echo "<th>Data de fabricação</th>";
	echo "<th>Validade do vermífugo</th>";
	echo "<th>Aplicação do vermífugo</th>";
	echo "<th>Próxima aplicação</th>";
	echo "<th>Identificação do equino</th>";
=======
	echo "<th>Id vermifugo</th>";
	echo "<th>Nome do vermifugo</th>";
	echo "<th>Marca do vermifugo</h2>";
	echo "<th> Lote de vermifugo</th>";
	echo "<th> Data de fabricaçao</th>";
	echo "<th>Validade do vermifugo</th>";
	echo "<th>Aplicaçao do vermifugo</th>";
	echo "<th>Proxima aplicaçao</th>";
	echo "<th>Identificaçao do cavalo</th>";
>>>>>>> 918fcd976ca78afc6e8fb717cb3493993f0a5c99
	echo "</tr>";
	$consulta=listarVermifEquino($inicio,$fim);
	require_once 'model/Vermifugo.php';
	while ($linha=$consulta->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$linha['Id_verm']."</td>";
	echo "<td>".$linha['Nome_verm']."</td>";
	echo "<td>".$linha['Marca_verm']."</td>";
	echo "<td>".$linha['Lote_verm']."<td>";
	echo "<td>".$linha['Fabricacao_verm']."<td>";
	echo "<td>".$linha['Validade_verm']."<td>";
	echo "<td>".$linha['aplicacao_verm']."<td>";
	echo "<td>".$linha['proximaapli_verm']."<td>";
	echo "<td>".$linha['Identificacao_cav']."<td>";
	echo "</tr>";
	}

echo "</table>";
if($fim<$num_linhas){
	echo "<form action='Vermifugo.php' method='GET'";
	echo "<input type='hidden' name='fim' value='$fim'>";
	echo "<p><input type='submit' value='proxima'></p>";
	echo "</form>";
}
}


?>
</body>
</html>


