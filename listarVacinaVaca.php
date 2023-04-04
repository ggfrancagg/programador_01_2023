<?php 
require_once 'cabecalho.php';
require_once 'model/Vacina.php';


$consulta=listarVacinaVaca();
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
    echo "<th>Identificação Bovino</th>";
    echo "</tr>";

    while($linha=$consulta->fetch_assoc()){
    	echo "<tr>";
    	echo "<td>".$linha['IDvasc_vac']."</td>";
    	echo "<td>".$linha['Nomevasc_vac']."</td>";
    	echo "<td>".$linha['Tipovasc_vac']."</td>"; 
    	echo "<td>".$linha['Dataapli_vac']."</td>";
    	echo "<td>".$linha['proximaapli_vac']."</td>";
    	echo "<td>".$linha['Identificacao_vac']."</td>";
    	echo "</tr>";
    }
}

?>
</body>
</html>
    	