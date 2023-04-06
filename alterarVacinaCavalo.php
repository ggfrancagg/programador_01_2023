<?php 
 require_once 'cabecalho.php';

if(isset($_POST['IDvac_cav'])){
   $IDvac_cav=$_POST['IDvac_cav'];
   require_once 'model/Vacina.php';
   $consulta=acharVacinaCav($IDvac_cav);
   if (!$consulta){
   	   return "<h2>Vacina não encontrada!</h2>";
   }else{
   	  while($linha=$consulta->fetch_assoc()){ 
?>
<form action="alterarVacina.php" method="POST">
	<h1>Alterar Vacina</h1>
	<p>Nome da Vacina<input type="text" name="nome" size="40" maxlength="40" value="<?php echo $linha['Nomevasc_cav']; ?>"></p>
	<p>Tipo da Vacina<input type="text" name="tipo" size="40" maxlength="40" value="<?php echo $linha['Tipovasc_cav']; ?>"></p>
	<p>Data da Aplicação<input type="date" name="data" value="<?php echo $linha['Dataapli_cav']; ?>"></p>
	<p>Proxima Aplicação<input type="date" name="proxima" value="<?php echo $linha['proximaapli_cav']; ?>"></p>
  <p>Identificação Equino<input type="text" size="30" maxlength="30" value="<?php echo $linha['Identificacao_cav']; ?>"></p>
		
       <input type="hidden" name="IDvasc_cav" value="<?php echo $linha['IDvac_cav']; ?>">
	   <p><input type="submit" class="enviar" name="Cadastrar"></p>
</form>	



<?php 
      }	
   }
} 

if (isset($_POST['nome'])) {
	    $nome=$_POST['nome'];
    	$tipo=$_POST['tipo'];
    	$data=$_POST['data'];
    	$proxima=$_POST['proxima'];
      $identificacao=$_POST['identificacao'];
    	$IDvac_cav=$_POST['IDvac_cav'];

    	require_once 'model/Vacina.php';
    	$resposta=alterarCavalo($IDvac_cav,$nome,$tipo,$data,$proxima,$identificacao);
    	if (!$resposta) {
    		echo "<h2>Erro na tentativa de alterar!</h2>";
    	}else{
    		echo "<h2>Alterado com sucesso!</h2>";
    	}
}
?>
</body>
</html>