<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>









<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>MZK Koszalin</title>
	<meta name="description" content="MZK Koszalin informacje, rozkłady jazdy" />
	<meta name="keywords" content="mzk, koszalin, rozkład, autobusy, komunikacja" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
	
	<div id="container">
	
		<div id="logo">
			
		</div>
		
		
		
		<div id="topbar">
			<div id="topbarL">
				<img src="lgo.png" /> <br>
				
			</div>
			<div id="topbarR">
				<span class="bigtitle">MZK Koszalin</span>
				<div style="height: 15px;"></div>
				Miejski Zakład Komunikacji 
				Spółka z o. o. w Koszalinie <br>
				75–736 KOSZALIN, ul. Gnieźnieńska 9 <br>
                tel:(94) 342 66 84, fax: (94) 342 27 68
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
		PANEL ADMINA
		<p>
			<div class="optionL">  <A style="text-decoration: none;" href="log_in.php?go=1"><font color=#00000>KOMUNIKATY</A></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_rozklad.php"><font color=#00000>ROZKŁAD</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_cennik.php"><font color=#00000>CENY BILETÓW</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_regulamin.php"><font color=#00000>REGULAMIN</a></div>
            <div class="optionL">  <A style="text-decoration: none;" href="edit_kontakt.php"><font color=#00000>KONTAKT</a></div>
			
			
			<div class="optionL">  <A style="text-decoration: none;" href="edit_linie.php"><font color=#00000>EDYTUJ LINIE</a></div>
			
			
			<p>
			<form action="logout.php" method="post">
	
	<?php

	echo "<p>Witaj ".$_SESSION['user'].'!	<a href="logout.php">Wyloguj się</a> </p>';
  
	
        ?>
		</div>
		
		<div id="content">
			<?php
				switch ( $_GET['go'] = empty($_GET['go']) ? '' : (int)$_GET['go'])
				        
				{
				case 1:
					 ?>
					 <A style="text-decoration: none;" href="list_komunikat.php"><font color=#00000>Dodaj komunikat</A><br/>
					 <A style="text-decoration: none;" href="edit_komunikat2.php"><font color=#00000>Edytuj komunikat</A><br/>
					 <A style="text-decoration: none;" href="list_komunikat1.php"><font color=#00000>Usuń komunikat</A><br/>
					<?php
					  break;
				case 2:
					 
					  break;
				case 3:
					
					  break;
				case 4:
					  
					  break;
				case 5:
					   
					  break; 
			    case 6:
					   
					  break;
			
				case 7:
				        
					  break;
				
				   default: 
					?>
					
					<font size="+2"><P ALIGN="CENTER"><b>PANEL ADMINISTRATORA</B></font><br/><p>
					W tym miejscu możesz zarządzać stroną.<br/>
					Wybierając odpowiedni dział z menu po lewej możesz edytować informacje.<br/><p>
				
					<b>KOMUNIKATY:</B><br/>
					> dodaj nowy komunikat<br/>
					> edytuj wybrany komunikat<br/>
					> usuń komunikat<br/><p>
					<b>CENY BILETÓW</B><br/>
					> edytuj ceny biletów<br/><p>
					<b>REGULAMIN</B><br/>
					> edytuj regulamin<br/><p>
					<b>KONTAKT</B><br/>
					> edytuj kontakt<br/></P>
					<?php
				}
				?>
			
			</div>
		
		<div id="footer">
			MZK Koszalin 2016. <p> &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>