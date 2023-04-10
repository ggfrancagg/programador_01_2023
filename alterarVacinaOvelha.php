<?php 
 require_once 'cabecalho.php';

if(isset($_POST['IDvasc_ovl'])){
   $IDvasc_ovl=$_POST['IDvasc_ovl'];
   require_once 'model/Vacina.php';
   $consulta=acharVacinaOvl($IDvasc_ovl);
   if (!$consulta){
   	   return "<h5>Vacina não encontrada!</h5>";
   }else{
   	  while($linha=$consulta->fetch_assoc()){ 
?>
<form id="cadanimal"  action="alterarVacinaOvelha.php" method="POST">
	<h1>Alterar Vacina</h1>
</br>
	<p>Nome da Vacina: <input type="text" name="nome" size="40" maxlength="40" value="<?php echo $linha['Nomevasc_ovl']; ?>"></p>
	<p>Tipo da Vacina: <input type="text" name="tipo" size="40" maxlength="40" value="<?php echo $linha['Tipovasc_ovl']; ?>"></p>
	<p>Data da Aplicação: <input type="date" name="data" value="<?php echo $linha['Dataapli_ovl']; ?>"></p>
	<p>Proxima Aplicação: <input type="date" name="proxima" value="<?php echo $linha['proximaapli_ovl']; ?>"></p>
  <p>Identificação Ovino: <input type="text" name="identificacao" size="30" maxlength="30" value="<?php echo $linha['id_ovl']; ?>"></p>
		
       <input type="hidden" name="IDvasc_ovl" value="<?php echo $linha['IDvasc_ovl']; ?>">
	   <h3><input type="submit" onclick='mostra()' class="enviar" name="Cadastrar"></h3>
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
      }	
   }
} 

if (isset($_POST['nome'])) {
	    $nome=$_POST['nome'];
    	$tipo=$_POST['tipo'];
    	$data=$_POST['data'];
    	$proxima=$_POST['proxima'];
        $identificacao=$_POST['identificacao'];      
    	$IDvasc_ovl=$_POST['IDvasc_ovl'];

    	require_once 'model/Vacina.php';
    	$resposta=alterarVacinaOvelha($IDvasc_ovl,$nome,$tipo,$data,$proxima,$identificacao);
    	if (!$resposta) {
    		echo "<h5>Erro na tentativa de alterar!</h5>";
    	}else{
    		echo "<h5>Alterado com sucesso!</h5>";
    	}
}
?>

<script src="js/mensagem.js"></script>
</body>
</html>