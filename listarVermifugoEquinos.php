<?php
require_once 'cabecalho.php';
require_once 'model/Vermifugo.php';
 
$consulta=listarVermifugoEquinos();
if(!$consulta){
	echo "<h2>Nenhuma Vermifugo cadastrado!</h2>";
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
	echo "<th>Proxima aplicação</th>";
	echo "<th>Identificação Cavalo</th>";
	echo "</tr>";

    while($linha=$consulta->fetch_assoc()){
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
  }


?> 
</body>
</html>


