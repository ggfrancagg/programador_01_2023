<?php
require_once 'cabecalho.php';
?>


<form action="index.php" method="POST" class="login">
	<h1>Login</h1>
	</br>
	<p>Usuário: <input type="text" name="usuario" size="30" maxlength="30" placeholder="CPF" required></p>
	<p>Senha:   <input type="password" name="senha" size="10" maxlength="10" required></p>
</br></br>
	<h3><input type="submit" value="Login"></p>
</br>
</form>

<?php
	if(isset($_POST['usuario'])){
		$usuario=$_POST['usuario'];
		$senha=$_POST['senha'];
		require_once 'model/Usuario.php';
		$resposta=login($usuario,$senha);
		if ($resposta) { 
			echo "<h2>Login com Sucesso! &#8205;</h2>";
			$teste=criarSessao(true,$usuario);
			echo "<meta http-equiv='refresh'content='2; url=//localhost/profGabriel/ProjetoIntegrador/principal.php'>"; //COLOCAR O ENDEREÇO CORRETO
		}else{
			echo "<h2>Erro na tentativa de Login! Redigite</h2>"; 
		}
		}


?>



</body>
</html>