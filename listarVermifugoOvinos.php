<?php
require_once 'cabecalho.php';
require_once 'model/Vermifugo.php';

$consulta=listarVermifugoOvinos();
if(!$consulta){
	echo "<h5>Nenhuma Vermifugo cadastrado!</h5>";
}else{

	echo "<table id=listarbicho>";
		echo "<tr>";
			echo "<th class='ident'>Id vermifugo</th>";
			echo "<th class='nome'>Nome do vermifugo</th>";
			echo "<th class='nome'>Marca</th>";
			echo "<th class='nome'>Lote</th>";
			echo "<th class='data'>Data de fabricaçao</th>";
			echo "<th class='data'>Validade</th>";
			echo "<th class='data'>Aplicaçao</th>";
			echo "<th class='data'>Proxima aplicação</th>";
			echo "<th class='ident'>ID Ovino</th>";
	echo "</tr>";

    while($linha=$consulta->fetch_assoc()){
    	echo "<tr>";
			echo "<td>".$linha['Id_verm']."</td>";
			echo "<td>".$linha['Nome_verm']."</td>";
			echo "<td>".$linha['Marca_verm']."</td>";
			echo "<td>".$linha['Lote_verm']."</td>";
			echo "<td>".$linha['Fabricacao_verm']."</td>";
			echo "<td>".$linha['Validade_verm']."</td>";
			echo "<td>".$linha['aplicacao_verm']."</td>";
			echo "<td>".$linha['proximaapli_verm']."</td>";
			echo "<td>".$linha['id_ovl']."</td>";
		echo "</tr>";
	}
	echo "</table>";
  }


?>
</body>
</html>


