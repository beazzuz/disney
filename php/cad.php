<?php
session_start();
ob_start();
//Verifica se botao cadastrar foi selecionado
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "<font color= 'white'> Necessário preencher todos os campos </font>";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "<font color= 'white'> A senha deve ter no minímo 6 caracteres </font>";
	}elseif(stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "<font color= 'white'>Caracter ( & ) utilizado na senha é inválido </font>";
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<font color= 'white'> Este usuário já está sendo usado </font>";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<font color= 'white'> Este e-mail já está cadastrado </font>";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, usuario, email,  senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['usuario']. "',
						'" .$dados['email']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($sql, $result_usuario);
		if(mysqli_insert_id($sql)){
			$_SESSION['msgcad'] = "<font color= 'white'> Usuário cadastrado com sucesso </font>";
			header("Location:log.php");
		}else{
			$_SESSION['msg'] = "<font color= 'white'> Erro ao cadastrar o usuário </font>";
		}
	}
	
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Disney</title> 
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:700,400' rel='stylesheet' 'text/css'>
<link rel="stylesheet" type="text/css" href="../css/min.css">
<link rel="stylesheet" type="text/css" href="../css/theme.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">

 
</head>
<body  background="../img/fundo2.png">   
  <div class="menu">
    
	  <h5><a href="../index.html">Disney</a></h5>
	  
	 

 </div>
 
 
 
 <form method="post" action="">
 
 <div class="container">

 <h2>Registre-se</h2>

 <?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<p>Forneça as informações a seguir</p>
    <label class="lab0">Nome:</label>
    <input class="input" type="text" name="nome"   placeholder="Ex: Seu Nome"/><br><br>
  
	<label class="lab0">Usuário:</label>
    <input class="input" name="usuario"  placeholder="Ex: Seu Sobrenome"/> <br><br>
  
	<label class="lab0">Email:</label>
    <input class="input" name="email"  placeholder="email@email.com.br"/> <br><br>
  
	<label class="lab0">Senha:</label>
	
    <input class="input" type="password" name="senha"  placeholder="crie sua senha"/>
  <p><a  href="log.php">Já é registrado? Clique Aqui.</a><p>
	<input type="submit" name="btnCadUsuario" value="Registrar"  class="botao1">
 
     
	 
 </form>
 
 

	
  </body>