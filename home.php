<?php require_once 'cabecalho.php';

echo "<h1 id='home'>Home - Inicio</h1>";
echo "<p id='home'>Hoje é ".date("d/m/Y")."</p>";

require_once 'model/Vaca.php';
$consulta=verificarVacina(date("Y-m-d"));
if (!$consulta) {
	echo "<div id='push'>";
	echo "<h2>Dia comum</h2>";
	echo "<p>Nada programado para hoje!</p>";
	echo "</div>";
}else{
	while ($linha=$consulta->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['nome_vac']."</h2>";
		echo "<p>Vacine</p>";
		echo "</div>";
	}
}
?>
</body>
</html>
