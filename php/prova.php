

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
<body  background="../img/sal.jpg">   
  <div class="menu">
    
	  <nav>
	 <p>Disney</p>
	  <ul>
	  <li><a href="sair.php">Sair</a></li>
		
	  </ul>
	 </nav>
	 

 </div>
 

     
  
  


<div class="container4">

<?php 
	
	$data= date('d/m/y');
	session_start();
	if(!empty($_SESSION['id'])){
		echo "<font color='white' size='4.5'>Olá, ".$_SESSION ['nome']." obrigado por participar da nossa prova! <br></font>";
		echo "<font color='white' size='4'>Hoje é dia ".$data."<br><br></font>";
	}else{
		$_SESSION['msgcad'] = "<font color='white' size='5'>Área restrita, é necessario estar logado para abrir a página</font>";
	header("Location: log.php");	
	}
	
	include "conexao.php";
	$nota = 0;
	$nome = $_SESSION ['nome'];
	$p1= $_POST['p1'];
	$p2= $_POST['p2'];
	$p3= $_POST['p3'];
	$p4= $_POST['p4'];
	$p5= $_POST['p5'];
	$p6= $_POST['p6'];
	$p7= $_POST['p7'];
	$p8= $_POST['p8'];
	$p9= $_POST['p9'];
	$p10= $_POST['p10'];
	
	
	if ($p1 == "b") {
		echo "<font color='white' size='4'>1- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>1- Resposta incorreta, resposta correta (b) Oito Eras.<br><br></font>";
	}
	
	if ($p2 == "c") {
		echo "<font color='white' size='4'>2- Resposta Correta!<br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color= 'white' size='4'>2- Resposta incorreta, resposta correta (c) Mortimer Mouse.<br><br></font>";
	}
	
	if ($p3 == "b") {
		echo "<font color='white' size='4'>3- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>3- Resposta incorreta, resposta correta (b) Walter Elias Disney. <br><br></font>";
	}
	
	if ($p4 == "a") {
		echo "<font color='white' size='4'>4- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>4- Resposta incorreta, resposta correta (a) Star Wars.<br><br></font>";
	} 
	
if ($p5 == "c") {
		echo "<font color='white' size='4'>5- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>5- Resposta incorreta, resposta correta (c) Oito Estúdios.<br><br></font>";
	}
	
	if ($p6 == "a") {
		echo "<font color='white' size='4'>6- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>6- Resposta incorreta, resposta correta (a) Frozen - Uma Aventura Congelante.<br><br></font>";
	}
	  
	 if ($p7 == "b") {
		echo "<font color='white' size='4'>7- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>7- Resposta incorreta, resposta correta (b) Marvel Cinematic Universe.<br><br></font>";
	}
	   
	  
	 if ($p8 == "c") {
		echo "<font color='white' size='4'>8- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>8- Resposta incorreta, resposta correta (c) Rei Leão.<br><br></font>";
	} 
	  
	   if ($p9 == "c") {
		echo "<font color='white' size='4'9- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>9- Resposta incorreta, resposta correta (c) Seis.<br><br></font>";
	} 
	  
	  if ($p10 == "a") {
		echo "<font color='white' size='4'>10- Resposta Correta! <br><br></font>";
		$nota = $nota + 1;
	}else{
	
		echo "<font color='white' size='4'>10- Resposta incorreta, resposta correta (a) Era do Retorno.<br><br></font>";
	}   
	
	
	echo "<font color='white' size='4'><br>Sua nota final é: ".$nota."<br></font>" ;

	
	$sql -> query("insert into prova(id, nome, data, nota)values(null,'$nome','$data','$nota')");
?> 


</div>





</body>
</html>
