﻿<!DOCTYPE HTML>
<html>

<head>


<meta charset="UTF-8">

<meta name="description" content="sport si alimentatie" />

<meta name="keywords" content="sport,alimentatie"/>

<title> Stil de viață sănătos </title>

<link rel="stylesheet" href="../CSS/cindex.css" >

<link rel="stylesheet" href="../CSS/ctext.css" >

</head>


<body>

 <?php
	 
    if(isset($_COOKIE['utilizator']))
	
	echo "<a href=\"ManagerCont.php\" id=\"ls\">Utilizator,".$_COOKIE['utilizator']."</a>";
	
?>


  <br>
  <br>
  <br>
  <br>


<a href="index.php">

<img src="Logo.gif" id="logo" > 

</a>



<div id="meniuri">
  
  
  	<a href="../index.php" class="mbuton">Home</a>
    
    <a href="../Nutritie.php" class="mbuton"> Nutriție </a>
    
    <a href="../Utilitati.php" class="mbuton">Utilități</a>
    
    <a href="Forum.php" class="mbuton">Forum</a>
    
     <?php
	 
    if(!isset($_COOKIE['utilizator']))
	
	echo "<a href=\"../SignUp.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Login/
    Sign up</a>";
	
	else echo "<a href=\"ManagerCont.php\" class=\"mbuton\" style=\"padding:4px 0px 0px 0px; height:46px;\">Manager Cont</a>";
	
	?>
 
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="continut">
  <?php
  echo"
 <p id=\"Titlu2\">IMC-ul dvs. este ".$_COOKIE['IMC']." </p>"
 
  ?>
</div>


</body>

</html>