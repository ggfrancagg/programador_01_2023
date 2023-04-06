<?php require_once 'cabecalho.php';
echo "</br>";
echo "<h1>Home - Início</h1>";
echo "</br>";
echo "<p>Hoje é ".date("d/m/Y")."</p>";
echo "</br>";
require_once 'model/Vaca.php';
require_once 'model/Cavalo.php';
require_once 'model/Ovelha.php';
$consulta1=verificarVacinaCavalo(date("Y-m-d"));
$consulta2=verificarVacinaVaca(date("Y-m-d"));
$consulta3=verificarVacinaOvelha(date("Y-m-d"));

if (!$consulta1&&!$consulta2&&!$consulta3) {
	echo "<div id='push'>";
	echo "<h2>Dia comum</h2>";
	echo "</br>";
	echo "<p>Nada programado para hoje!</p>";
	echo "</div>";
}else{
	
	if($consulta1){
	while ($linha=$consulta1->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['Nome_cav']."</h2>";
		echo "</br>";
		echo "<p>Vacine</p>";
		echo "</div>";
	}
}
	if($consulta2){
	while ($linha=$consulta2->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['Nome_vac']."</h2>";
		echo "</br>";
		echo "<p>Vacine</p>";
		echo "</div>";
	}
}
	if($consulta3){
	while ($linha=$consulta3->fetch_assoc()) {
		echo "<div id='push'>";
		echo "<h2>Hoje tem vacina para ".$linha['nome_ovl']."</h2>";
		echo "</br>";
		echo "<p>Vacine</p>";
		echo "</div>";
	}
	}
		
}
?>
</body>
</html>
