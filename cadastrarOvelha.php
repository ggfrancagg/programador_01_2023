<?php require_once 'cabecalho.php'; ?>


<form action="cadastrarOvelha.php" method="POST" id="cadastro">
	<h1>&#128017; Cadastro de Ovino &#128017;</h1>
	</br>
	<p>Nome: 
	<input type="text" name="nome" size="80" maxlength="80" pattern="[A-Za-çÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" required></p>
	<p>Idade: 
	<input type="number" name="idade" size="75" maxlength="75" required></p>
	<p>Sexo: 
   	<input type="radio" name="sexo" value="F"> Fêmea
	<input type="radio" name="sexo" value="M"> Macho </p>
    <p>Raça: 
    <input type="text" name="raca" size="75" maxlength="75" pattern="[A-Za-çÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" required></p>
    <p>Cor: 
    <input type="text" name="cor" required></p>
    <p>Peso:  
    <input type="text" name="peso" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use ponto e não virgula ex:9.99" required></p>
    <p>Altura:  
    <input type="text" name="altura" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use ponto e não virgula ex:9.99" required></p>
    <br>

    </br>
    <h3><input type="submit" onclick="mostra()" class="enviar" value="Cadastrar"></h3>

</form>
<div id="load">
  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>A</div>
  <div>O</div>
  <div>L</div>
</div>

<?php
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$idade=$_POST['idade'];
	$sexo=$_POST['sexo'];
	$raca=$_POST['raca'];
	$cor=$_POST['cor'];
	$peso=$_POST['peso'];
	$altura=$_POST['altura'];
	require_once 'model/Ovelha.php';
	$codigo=retornaUltimaOvelha();
	if($codigo>=0){
		$codigo++;
		$resposta=cadastrarOvelha($codigo,$nome,$idade,$raca,$sexo,$cor,$peso,$altura);
		if(!$resposta){
			echo "<h5>Falha na tentativa de cadastro!</h5>";
		}else{
			echo "<h5>Cadastrado com sucesso!</h5>";
		}
	}else{
		echo "<h5>Não há ovino cadastrado</h5>";
	}
}

?>

<script src="js/mensagem.js"></script>

</body>
</html>