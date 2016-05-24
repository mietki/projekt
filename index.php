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
		<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: log_in.php');
		exit();
	}

?>
		
		
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
			<div class="optionL">  <A style="text-decoration: none;" href="index.php?go=1"><font color=#00000>KOMUNIKATY</A></div>
			<div class="optionL">  <A style="text-decoration: none;" href="rozklad.php" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;"><font color=#00000>ROZKŁAD </a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="http://mapka.mzk.koszalin.pl" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;"><font color=#00000>MAPA LINII </a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="index.php?go=3"><font color=#00000>CENY BILETÓW</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="index.php?go=4"><font color=#00000>REGULAMIN</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="http://rewizor.eu/#mandat" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;"><font color=#00000>KONTROLA</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="https://gopay24.pl/koszalin" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;"><font color=#00000>KUP BILET</a></div>
			
			<div class="optionL">  <A style="text-decoration: none;" href="index.php?go=5"><font color=#00000>KONTAKT</a></div>
			<p>
			<p>
			
			<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		
	

		<hr>

<p>
		<input type="submit" value="Zaloguj się" />
		<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
	</form>
		</div>
		
		<div id="content">
			<?php
				switch ( $_GET['go'] = empty($_GET['go']) ? '' : (int)$_GET['go'])
				        
				{
				case 1:
					 
					  include("komunikaty.php");
					  break;
				case 2:
					 
					break;
				case 3:
					include("cennik.php");
					  break;
				case 4:
					  include("regulamin.php");
					  break;
				case 5:
					   include("kontakt.php");
					  break; 
			   
				
				   default: 
					    
				}
				?>
			
			</div>
		
		<div id="footer">
			MZK Koszalin 2016. <p> &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>