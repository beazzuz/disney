<?php 
	session_start();
	if(!empty($_SESSION['id'])){
		
	}else{
		$_SESSION['msg'] = "<font color:'#fff'>Área restrita, é necessario estar logado para abrir a página</font>";
	header("Location: log.php");	
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
<body background="../img/fundoofc.png" >   
   

<header class="menu">
     <nav >
	  <h5><a href="../index.html">Disney</a></h5>
	 </nav>
 
 </header>

 
 
 
 <form method="post" action="prova.php">
 
 <div class="container3">

 <h2>Prova</h2>
<p>Responda as questão a seguir</p>
    <label class="quest">1- Quantas eras existem?</label><br>
    <input type="radio" name="p1" value="a" class="state" >a) Nove Eras<br><br>
   <input type="radio" name="p1"  value="b">b) Oito Eras<br><br>
    <input type="radio" name="p1" value="c">c) Sete Eras<br><br>
	
	
	  <label class="quest">2- Qual foi o primeiro nome escolhido para o Mickey Mouse?</label><br>
    <input type="radio" name="p2" value="a">a) Morley Mouse<br><br>
   <input type="radio" name="p2" value="b">b) Maurice Mouse<br><br>
    <input type="radio" name="p2" value="c">c) Mortimer Mouse<br><br>
	
	<label class="quest">3- Qual é o nome completo de Walt Disney?</label><br>
    <input type="radio" name="p3" value="a" >a) Walt louis Disney<br><br>
   <input type="radio" name="p3"  value="b">b) Walter Elias Disney<br><br>
    <input type="radio" name="p3" value="c">c) Walter robert Disney<br><br>
	
   <label class="quest">4- Qual é a saga mais antiga?</label><br>
    <input type="radio" name="p4" value="a" >a) Star Wars<br><br>
   <input type="radio" name="p4"  value="b">b) Toy Story<br><br>
    <input type="radio" name="p4" value="c">c) Piratas do Caribe<br><br>

 <label class="quest">5- A Disney Studios engloba uma coleção de estúdios cinematográficos respeitados, quantos estúdios foram citados no site?</label><br>
    <input type="radio" name="p5" value="a" >a) Seis Estúdios <br><br>
   <input type="radio" name="p5"  value="b">b) Dez Estúdios<br><br>
    <input type="radio" name="p5" value="c">c) Oito Estúdios<br><br>

 <label class="quest">6- Qual foi a animação com maior bilheteria?</label><br>
    <input type="radio" name="p6" value="a" >a) Frozen - Uma Aventura Congelante<br><br>
   <input type="radio" name="p6"  value="b">b) Toy Story 3<br><br>
    <input type="radio" name="p6" value="c">c) Os incríveis<br><br>
	
	 <label class="quest">7- Qual saga possuí mais filmes?</label><br>
    <input type="radio" name="p7" value="a" >a) Star Wars <br><br>
   <input type="radio" name="p7"  value="b">b) Marvel Cinematic Universe<br><br>
    <input type="radio" name="p7" value="c">c) Piratas do Caribe<br><br>
	
	 <label class="quest">8- Qual é a maior Live Action?</label><br>
    <input type="radio" name="p8" value="a" >a) Bela e a Fera<br><br>
   <input type="radio" name="p8"  value="b">b) Aladdin<br><br>
    <input type="radio" name="p8" value="c">c) Rei Leão<br><br>
	
	 <label class="quest">9- Quantos parques existem pelo mundo?</label><br>
    <input type="radio" name="p9" value="a" >a) Quatro<br><br>
   <input type="radio" name="p9"  value="b">b) Cinco<br><br>
    <input type="radio" name="p9" value="c">c) Seis<br><br>
	
	 <label class="quest">10- Em que era a Disney está agora?</label><br>
    <input type="radio" name="p10" value="a" >a) Era do Retorno<br><br>
   <input type="radio" name="p10"  value="b">b) Era da Renascença<br><br>
    <input type="radio" name="p10" value="c">c) Era Contemporânea<br><br>
	
	<input type="submit" value="Enviar Respostas"  class="botao3">
 
     
	 
 </form>
 
 

	
  </body>