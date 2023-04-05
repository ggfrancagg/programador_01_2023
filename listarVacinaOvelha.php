<?php 
require_once 'cabecalho.php';
require_once 'model/Vacina.php';


$consulta=listarVacinaOvelha();
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
    echo "<th>Identificação ovelha</th>";
    echo "</tr>";

    while($linha=$consulta->fetch_assoc()){
    	echo "<tr>";
    	echo "<td>".$linha['IDvasc_ovl']."</td>";
    	echo "<td>".$linha['Nomevasc_ovl']."</td>";
    	echo "<td>".$linha['Tipovasc_ovl']."</td>"; 
    	echo "<td>".$linha['Dataapli_ovl']."</td>";
    	echo "<td>".$linha['proximaapli_ovl']."</td>";
    	echo "<td>".$linha['id_ovl']."</td>";
    	echo "</tr>";
    }
}

?>
</body>
</html>