<?php 
session_start();
include_once("conexao.php");

$acessar = filter_input(INPUT_POST,'acessar',FILTER_SANITIZE_STRING);
IF($acessar){
	$usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
	if((!empty($usuario))AND(!empty($senha))){
		$result_usuario = "select * from usuarios where usuario='$usuario' LIMIT 1";
		
		$resultado_usuario = mysqli_query($sql,$result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha,$row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location:pro.php");
			}else{
				$_SESSION['msgcad'] = "<font color= 'white'> Senha incorreto! </font>";
				header("Location:log.php");
			}				
		}
	}else{
		$_SESSION['msgcad']="<font color= 'white'>Login e senha incorreto!</font>";
				header("Location:log.php");
	}
}else{
	$_SESSION['msgcad']="<font color= 'white'>Página não encontrada!</font>";
				header("Location:log.php");
}



?>