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

<header class="menu">
     <nav >
	  <h5><a href="../index.html">Disney</a></h5>
	 </nav>
 
 </header>

<form type="text" action="valida.php" method="post">
 
 <div class="container2">
 <h2>Entrar</h2>
<?php
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
 
<p class="cd">Forneça as informações a seguir</p>


	<label class="lab0">Usuário:</label>
    <input class="input" type="text" name="usuario"  placeholder="Usuário"/> <br><br>
	<label class="lab0">Senha:</label>
    <input class="input" type="password" name="senha"  placeholder="Sua senha"/>
    <p><a href="cad.php">Não é cadastrado? Clique Aqui.</a><p>
	<input type="submit" name="acessar" value="Entrar"  class="botao1">
  
     
	 
 </form>
 
 

	
  </body>