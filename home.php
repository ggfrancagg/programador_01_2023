<?php require_once 'cabecalho.php';

echo "<h1>Home - Inicio</h1>";
echo "</br>";
echo "</br>";
echo "<p>Hoje é ".date("d/m/Y")."</p>";
echo "</br>";
require_once 'model/Vaca.php';
require_once 'model/Cavalo.php';
require_once 'model/Ovelha.php';
$consulta=verificarVacina(date("Y-m-d"));
if (!$consulta) {
	echo "<div id='push'>";
	echo "<h2>Dia comum</h2>";
	echo "</br>";
	echo "<h2>Nada programado para hoje!</h2>";
	echo "</div>";
}else{
	while ($linha=$consulta->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['nome_vac']."</h2>";
		echo "</br>";
		echo "<h2>Vacine</h2>";
		echo "</div>";
	}
}
?>
</body>
</html>
