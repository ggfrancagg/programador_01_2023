<?php 
require_once 'cabecalho.php';
require_once 'model/Vacina.php';


$consulta=listarVacinaCavalo();
if(!$consulta){
	echo "<h2>Nenhuma vacina cadastrada!</h2>";
}else{
	echo "<table>";
	echo "<tr>";
    echo "<th>ID Vacina</th>";
    echo "<th>Nome Vacina</th>";
    echo "<th>Tipo de Vacina</th>";
    echo "<th>Data de Aplicação</th>";
    echo "<th>Proxima Aplicação</th>";
    echo "<th>Identificação Cavalo</th>";
    echo "</tr>";

    while($linha=$consulta->fetch_assoc()){
    	echo "<tr>";
    	echo "<td>".$linha['IDvac_cav']."</td>";
    	echo "<td>".$linha['Nomevasc_cav']."</td>";
    	echo "<td>".$linha['Tipovasc_cav']."</td>"; 
    	echo "<td>".$linha['Dataapli_cav']."</td>";
    	echo "<td>".$linha['proximaapli_cav']."</td>";
    	echo "<td>".$linha['Identificacao_cav']."</td>";
    	echo "</tr>";
    }
}

?>
</body>
</html>