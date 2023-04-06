<?php 
require_once 'cabecalho.php';
require_once 'model/Vacina.php';


$consulta=listarVacinaCavalo();
if(!$consulta){
	echo "<h5>Nenhuma vacina cadastrada!</h5>";
}else{

    echo "<table id='listarVacina'>";
        echo "<tr>";
            echo "<th class='ident'>Id Vacina</th>";
            echo "<th class='nome'>Nome</th>";
            echo "<th class='data'>Tipo</th>";
            echo "<th class='data'>Aplicaçao</th>";
            echo "<th class='data'>Proxima aplicação</th>";
            echo "<th class='ident'>ID Equino</th>";
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
    echo "</table>";
}

?>
</body>
</html>