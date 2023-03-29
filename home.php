<?php require_once 'cabecalho.php';

echo "<h1>Home - Inicio</h1>";
echo "<p>Hoje é ".date("d/m/Y")."</p>";

require_once 'model/Vaca.php';
require_once 'model/Cavalo.php';
require_once 'model/Ovelha.php';
$consulta=verificarVacinaCavalo(date("Y-m-d"));
$consulta=verificarVacinaVaca(date("Y-m-d"));
$consulta=verificarVacinaOvelha(date("Y-m-d"));
if (!$consulta) {
	echo "<div id='push'>";
	echo "<h2>Dia comum</h2>";
	echo "<p>Nada programado para hoje!</p>";
	echo "</div>";
}else{
	while ($linha=$consulta->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['Nome_vac']."</h2>";
		echo "<h2>Hoje tem vacina para ".$linha['nome_olv']."</h2>";
		echo "<h2>Hoje tem vacina para ".$linha['Nome_cav']."</h2>";
		echo "<p>Vacine</p>";
		echo "</div>";
	}
}
?>
</body>
</html>
