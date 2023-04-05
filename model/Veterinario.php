<?php

require_once'./persistence/Banco.php';

function Veterinario($CFMV,$nome_vet,$nasc_vet,$tel_vet,$data_visita, $cuidados_vet, $id_ovl){
	$banco=new Banco();

	$sql="insert into veterinario_ovl values($CFMV,'$nome_vet','$nasc_vet','$tel_vet','$data_visita','$cuidados_vet', $id_ovl)";
	
		$resp=$banco->executar($sql);
		if (!$resp){ //se ñ possuir resposta
			return false;
		}else{//caso ao contrario
			return true;
		}
	}

function retornaUltimoVet(){ //retornar o ultimo veterinario :D
	$banco=new Banco();
	$sql="select max(CFMV) from veterinario_ovl";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	

		while ($linha=$consulta->fetch_assoc()) {
		$codigo=$linha['max(CFMV)'];

	}
		if ($codigo==NULL){
			$codigo=0;
		} 
		echo $codigo;
			return $codigo;
		}
	}

function listarVet($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="id"){
			$sql="select * from veterinario_ovl order by CFMV";
		}else if($ordem=="nome"){
			$sql="select * from veterinario_ovl order by nome_vet";
		}else if($ordem=="nasc"){
			$sql="select * from veterinario_ovl order by nasc_vet";
		}else if($ordem=="tel"){
			$sql="select * from veterinario_ovl order by tel_vet";
		}else if($ordem=="data"){
			$sql="select * from veterinario_ovl order by data_visita";
		}
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}

function buscarVeterinarioOvl($busca){
		$banco=new Banco();
		$sql="select * from veterinario_ovl where CFMV='$busca' or nome_vet like '%$busca%' or nasc_vet='$busca' or tel_vet='$busca' or
		data_visita='$busca' or cuidados_vet='$busca' or id_ovl like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

?>	
<?php

require_once'./persistence/Banco.php';

function VeterinarioCav($CFMV,$Tosa_cav,$Nomevet_cav,$Casqueamento_cav,$Telefone_cav,$Cuidados_cav,$Datavisi_cav,$Identificacao_cav){
	$banco=new Banco();
	$sql="insert into veterinario_cav values($CFMV,'$Tosa_cav','$Nomevet_cav','$Casqueamento_cav','$Telefone_cav','$Cuidados_cav','$Datavisi_cav',$Identificacao_cav)";

		$resp=$banco->executar($sql);
		if (!$resp){
			return false;
		}else{
			return true;
		}
	}

function retornaUltimoVetCav(){
	$banco=new Banco();
	$sql="select max(Identificacao_cav) from veterinario_cav";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(Identificacao_cav)'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

function listarVetCav($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="veterinario_cav"){
			$sql="select * from veterinario_cav order by CFMV";
		}else if($ordem=="tosa"){	
			$sql="select * from veterinario_cav order by Tosa_cav";
		}else if($ordem=="nomevetcav"){
			$sql="select * from veterinario_cav order by Nomevet_cav";
		}else if($ordem=="casc"){
			$sql="select * from veterinario_cav order by Casqueamento_cav";
		}else if($ordem=="telcav"){
			$sql="select * from veterinario_cav order by Telefonevet_cav";
		}else if($ordem=="cuidadoscav"){
			$sql="select * from veterinario_cav order by  Cuidados_cav";
		}else if($ordem=="datavisi"){
			$sql="select * from veterinario_cav order by Datavisi_cav";
		}
		

		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}

function buscarVeterinarioCav($busca){
		$banco=new Banco();
		$sql="select * from veterinario_cav where CFMV='$busca' or Tosa_cav like '%$busca%' or Nomevet_cav='$busca' or Casqueamento_cav='$busca' or
		Telefonevet_cav='$busca' or Cuidados_cav='$busca' or Datavisi_cav like '%$busca%' or Identificacao_cav like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

?>	
<?php
require_once 'cabecalho.php';
require_once'./persistence/Banco.php';

function VeterinarioVac($CFMV,$Datavisita_vac,$Nomevet_vac,$Telefonevet_vac,$nascvet_vac,$Cuidados_vac,$Casqueamento_vac,$Identificacao_vac){
	$banco=new Banco();
	$sql="insert into veterinario_vac values($CFMV,'$Datavisita_vac','$Nomevet_vac','$Telefonevet_vac','$nascvet_vac','$Cuidados_vac','$Casqueamento_vac',$Identificacao_vac)";
	
		$resp=$banco->executar($sql);
		if (!$resp){
			return false;
		}else{
			return true;
		}
	}

function retornaUltimoVetVac(){
	$banco=new Banco();
	$sql="select max(Identificacao_vac) from veterinario_vac";
	$consulta=$banco->consultar($sql);
	if (!$consulta) {
		return false;
	}else{	
		while ($linha=$consulta->fetch_assoc()){
		$codigo=$linha['max(Identificacao_vac)'];
	}
		if ($codigo==NULL){
			$codigo=0;
		} 
			return $codigo;
		}
	}

function listarVetVac($ordem){
  $banco=new Banco();
		if($ordem==""||$ordem=="veterinario_vac"){
			$sql="select * from veterinario_vac order by CFMV";
		}else if($ordem=="datavac"){
			$sql="select * from veterinario_vac order by Datavisita_vac";
		}else if($ordem=="nomevac"){
			$sql="select * from veterinario_vac order by Nomevet_vac";
		}else if($ordem=="telvac"){
			$sql="select * from veterinario_vac order by Telefonevet_vac";
		}else if($ordem=="nascvac"){
			$sql="select * from veterinario_vac order by nascvet_vac";
		}else if($ordem=="cuidadosvac"){
			$sql="select * from veterinario_vac order by  Cuidados_vac";
		}else if($ordem=="casvac"){
			$sql="select * from veterinario_vac order by Casqueamento_vac";
		}else if($ordem=="idvac"){
			$sql="select * from veterinario_vac order by Identificacao_vac";
}
		
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}

function buscarVeterinarioVac($busca){
		$banco=new Banco();
		$sql="select * from veterinario_vac where CFMV='$busca' or Datavisita_vac like '%$busca%' or Nomevet_vac='$busca' or Casqueamento_vac='$busca' or
		Telefonevet_vac='$busca' or nascvet_vac='$busca' or Identificacao_vac like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

?>	
</body> 
	</html>