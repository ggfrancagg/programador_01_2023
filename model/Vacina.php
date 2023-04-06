<?php
require_once './persistence/Banco.php'; 


function vacinaVaca($IDvasc_vac,$Nomevasc_vac,$Tipovasc_vac,$Dataapli_vac,$proximaapli_vac,$Identificacao_vac){ 
	$banco=new Banco();
	$sql="insert into vacina_vac values($IDvasc_vac,'$Nomevasc_vac','$Tipovasc_vac','$Dataapli_vac','$proximaapli_vac',$Identificacao_vac)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


function vacinaCavalo($IDvac_cav,$Dataapli_cav,$proximaapli_cav,$Tipovasc_cav,$Nomevasc_cav,$Identificacao_cav){ 
	$banco=new Banco();
	$sql="insert into vacina_cav values($IDvac_cav,'$Dataapli_cav','$proximaapli_cav','$Tipovasc_cav','$Nomevasc_cav',$Identificacao_cav)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}

function vacinaOvelha($IDvasc_ovl,$Nomevasc_ovl,$Tipovasc_ovl,$Dataapli_ovl,$proximaapli_ovl,$id_ovl){
	$banco=new Banco();
	$sql="insert into vacina_ovl values($IDvasc_ovl,'$Nomevasc_ovl','$Tipovasc_ovl','$Dataapli_ovl','$proximaapli_ovl',$id_ovl)";
	$resp=$banco->executar($sql);
	if($resp){
		return true;
	}else{
		return false;
	}
}


//GERAR CÓDIGO DE ID


function retornaUltimaVacCavalo(){ 
	$banco=new Banco();
	$sql="select max(IDvac_cav) from vacina_cav";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvac_cav)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}


function retornaUltimaVacVaca(){ 
	$banco=new Banco();
	$sql="select max(IDvasc_vac) from vacina_vac";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvasc_vac)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}

	function retornaUltimaVacOvelha(){ 
	$banco=new Banco();
	$sql="select max(IDvasc_ovl) from vacina_ovl";
	$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$codigo=$linha['max(IDvasc_ovl)'];
			}
			if($codigo==NULL){
				$codigo=0;
			}
			return $codigo;
		}
	}

function buscarVacinaVac($busca){
		$banco=new Banco();
		$sql="select * from vacina_vac where IDvasc_vac='$busca' or Nomevasc_vac like '%$busca%' or Tipovasc_vac='$busca' or
		Dataapli_vac='$busca' or proximaapli_vac='$busca' or Identificacao_vac='$busca'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}



function buscarVacinaCav($busca){
		$banco=new Banco();
		$sql="select * from vacina_cav where IDvac_cav='$busca' or Dataapli_cav like '%$busca%' or proximaapli_cav='$busca' or 
		Tipovasc_cav='$busca' or Nomevasc_cav='$busca' or Identificacao_cav like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}


	function buscarVacinaOvl($busca){
		$banco=new Banco();
		$sql="select * from vacina_ovl where IDvasc_ovl='$busca' or Nomevasc_ovl like '%$busca%' or Tipovasc_ovl='$busca' or 
		Dataapli_ovl='$busca' or proximaapli_ovl='$busca' or id_ovl='$busca'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
function listarVacinaVaca(){
     $banco=new Banco();
     $sql="select * from vacina_vac order by IDvasc_vac";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}

function listarVacinaOvelha(){
     $banco=new Banco();
     $sql="select * from vacina_ovl order by id_ovl";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}

function listarVacinaCavalo(){
     $banco=new Banco();
     $sql="select * from vacina_cav order by IDvac_cav";
     $consulta=$banco->consultar($sql);
     if(!$consulta){
        return false;
     }else{
        return $consulta;
     }
}


function acharVacinaVac($idvac){
      $banco=new Banco();
      $sql="select * from vacina_vac where IDvasc_vac=$idvac";
      $consulta=$banco->consultar($sql);
      if (!$consulta) {
        return false;
     }else{
        return $consulta; 
     }
}

function alterarVacinaVaca($IDvasc_vac,$Nomevasc_vac,$Tipovasc_vac,$Dataapli_vac,$proximaapli_vac,$Identificacao_vac){
     $banco=new Banco();
     $sql="update vacina_vac set Nomevasc_vac='$Nomevasc_vac',Tipovasc_vac='$Tipovasc_vac',Dataapli_vac='$Dataapli_vac',proximaapli_vac='$proximaapli_vac',Identificacao_vac=$Identificacao_vac where IDvasc_vac=$IDvasc_vac"; 
     $resposta=$banco->executar($sql);
     if (!$resposta) {
         return false;
     }else{
        return true;
     }
}

function alterarVacinaCavalo($IDvac_cav,$Nomevasc_cav,$Tipovasc_cav,$Dataapli_cav,$proximaapli_cav,$Identificacao_cav){
     $banco=new Banco();
     $sql="update vacina_cav set Dataapli_cav='$Dataapli_cav',proximaapli_cav='$proximaapli_cav',Tipovasc_cav='$Tipovasc_cav',Nomevasc_cav='$Nomevasc_cav',Identificacao_cav=$Identificacao_cav where IDvac_cav=$IDvac_cav"; 
     $resposta=$banco->executar($sql);
     if (!$resposta) {
         return false;
     }else{
        return true;
     }
}

function alterarVacinaOvelha($IDvasc_ovl,$Nomevasc_ovl,$Tipovasc_ovl,$Dataapli_ovl,$proximaapli_ovl,$id_ovl){
     $banco=new Banco();
     $sql="update vacina_ovl set Nomevasc_ovl='$Nomevasc_ovl',Tipovasc_ovl='$Tipovasc_ovl',Dataapli_ovl='$Dataapli_ovl',proximaapli_ovl='$proximaapli_ovl',id_ovl=$id_ovl where IDvasc_ovl=$IDvasc_ovl"; 
     $resposta=$banco->executar($sql);
     if (!$resposta) {
         return false;
     }else{
        return true;
     }
}

function acharVacinaOvl($idov){
      $banco=new Banco();
      $sql="select * from vacina_ovl where IDvasc_ovl=$idov";
      $consulta=$banco->consultar($sql);
      if (!$consulta) {
        return false;
     }else{
        return $consulta; 
     }
}

function alterarOvelha($IDvasc_ovl,$Nomevasc_ovl,$Tipovasc_ovl,$Dataapli_ovl,$proximaapli_ovl,$id_ovl){
     $banco=new Banco();
     $sql="update ovelha set Nomevasc_ovl='$Nomevasc_ovl',Tipovasc_ovl=$Tipovasc_ovl,Dataapli_ovl=$Dataapli_ovl,proximaapli_ovl=$proximaapli_ovl,id_ovl=$id_ovl where IDvasc_ovl=$IDvasc_ovl";
     $resposta=$banco->executar($sql);
     if (!$resposta) {
         return false;
     }else{
        return true;
     }
}

function acharVacinaCav($idcav){
      $banco=new Banco();
      $sql="select * from vacina_cav where IDvac_cav=$idcav";
      $consulta=$banco->consultar($sql);
      if (!$consulta) {
        return false;
     }else{
        return $consulta; 
     }
}

function alterarCavalo($IDvac_cav,$Dataapli_cav,$proximaapli_cav,$Tipovasc_cav,$Nomevasc_cav,$Identificacao_cav){
     $banco=new Banco();
     $sql="update cavalo set Nomevasc_cav='$Nomevasc_cav',Tipovasc_cav=$Tipovasc_cav,Dataapli_cav=$Dataapli_cav,proximaapli_cav=$proximaapli_cav,Identificacao_cav=$Identificacao_cav where IDvac_cav=$IDvac_cav";
     $resposta=$banco->executar($sql);
     if (!$resposta) {
         return false;
     }else{
        return true;
     }
}


?>


</body>
</html>