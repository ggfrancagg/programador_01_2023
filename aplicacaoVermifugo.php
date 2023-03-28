<?php require_once 'cabecalho.php'; ?>

<form class="vermifugo" action="aplicacaoVermifugo.php" method="POST">
	<h1>&#8853; Vermifugação &#8853;</h1>
</br>
<?php

	require_once "model/Vermifugo.php";
	require_once "model/Vaca.php";
	require_once "model/Cavalo.php";
	require_once "model/Ovelha.php";

	
	
	$consulta=listarCavalo();