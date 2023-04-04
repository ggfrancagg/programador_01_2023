<?php
require_once 'cabecalho.php';
require_once 'model/Vermifugo.php';
if(isset($_GET['fim'])){
	$$inicio=$_GET['fim'];
	$inicio++;
	$fim=$inicio+4;
}else{
	$inicio=1;
	$fim=5;
}
$num_linhas=ultimoVermVaca("");
if($num_linhas<1){
	echo "<h2>Não há Vermifugo cadastrado!</h2>";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Id vermifugo</th>";
	echo "<th>Nome do vermifugo</th>";
	echo "<th>Marca do vermifugo</th>";
	echo "<th> Lote de vermifugo</th>";
	echo "<th> Data de fabricaçao</th>";
	echo "<th>Validade do vermifugo</th>";
	echo "<th>Aplicaçao do vermifugo</th>";
	echo "<th>Proxima aplicaçao</th>";
	echo "<th>Identificaçao do bovino</th>";
	echo "</tr>";
	$consulta=listarVermiBovino($inicio,$fim);
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
	echo "<td>".$linha['Identificacao_vac']."<td>";
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


