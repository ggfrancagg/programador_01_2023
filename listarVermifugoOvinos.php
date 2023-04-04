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
$num_linhas=ultimoVermOvelha();
if($num_linhas<1){
	echo "<h2>Não há vermífugo cadastrado!</h2>";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Id vermífugo</th>";
	echo "<th>Nome do vermífugo</th>";
	echo "<th>Marca do vermífugo</th>";
	echo "<th>Lote de vermífugo</th>";
	echo "<th> Data de fabricaçao</th>";
	echo "<th>Validade do vermífugo</th>";
	echo "<th>Aplicação do vermífugo</th>";
	echo "<th>Próxima aplicação</th>";
	echo "<th>Identificação do ovino</th>";
	echo "</tr>";
	$consulta=listarVermifOvino($inicio,$fim);
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
	echo "<td>".$linha['id_ovl']."<td>";
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


