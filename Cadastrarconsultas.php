<?php require_once 'cabecalho.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="Cadastrarconsultas.php">
		<h1> Cadastrar consultas </h1>
		<p>Id consulta:<input type="number" name="consulta" size="11"></p>
		<p>Id do animal:<input type="number" name="animal" size="11"></p>
		<p>CFMV:<input type="text" name="cfmv" size="20"></p>
		<p>Data da consulta:<input type="date" name="data"></p>
		<p> Horario da consulta<input type="time" name="horario"></p>
		<p><input type="submit" name="enviar" value="Cadastrar"></p>

<?php 
	if (isset($_POST['enviar'])) {
		$idC=$_POST['consulta'];
		$idA=$_POST['animal'];
		$code=$_POST['cfmv'];
		$Data=$_POST['data'];
		$Hora=$_POST['horario'];
		

	