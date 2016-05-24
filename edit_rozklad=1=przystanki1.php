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
			<div class="optionL">  <A style="text-decoration: none;" href="rozklad.php"><font color=#00000>ROZKŁAD</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_cennik.php"><font color=#00000>CENY BILETÓW</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_regulamin.php"><font color=#00000>REGULAMIN</a></div>
            <div class="optionL">  <A style="text-decoration: none;" href="edit_kontakt.php"><font color=#00000>KONTAKT</a></div>
			<p>
					<form action="logout.php" method="post">
	
	

		<a href="logout.php">Wyloguj się</a> </p>
  
	
        
			
		
	</form>
		</div>
		
		<div id="content">
			<div class="title">
<font size="+2"><P ALIGN="CENTER"><B>EDYCJA ROZKŁADU JAZDY</B></P></font>
<font size="+2"><P ALIGN="CENTER"><B>LINIA NR 1</B></P></font>
<font size="+2"><P ALIGN="CENTER"><B>EDYCJA LISTY PRZYSTANKÓW</B></P></font>




<table  cellpadding="8" align=center>
<tr bgcolor="#7F7575">
<td><?php 
$myFile = "rozklad/1/kierunki";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
echo $lines[0];




?></td>

</tr>
<tr bgcolor="#7F7575">
<td><?php
$plik1 = 'rozklad/1/przystanki_1';
if(isset($_POST['tresc1'])){
    file_put_contents($plik1, $_POST['tresc1']);
}

echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
<center><textarea name="tresc1" cols="35" rows="35">'.file_get_contents($plik1).'</textarea>
<p><input type="submit" name="form1" value="Zapisz1"></center>
</form>';


?> </td>  




</table>
</center>




</div>
<center>
<td><A style="text-decoration: none;" href="edit_rozklad=1=kierunki.php"><font color="black"><font size="4">Edytuj kierunki jazdy</font></font></a> </td>  </br>
<td><A style="text-decoration: none;" href="edit_rozklad=1=przystanki.php"><font color="black"><font size="4">Edytuj przystanki</font></font></a> </td>  </br>
<td><A style="text-decoration: none;" href="edit_rozklad=1=godziny.php"><font color="black"><font size="4">Edytuj godziny</font></font></a> </td>  </br>
</center>




</body>
</html>
			 
			</div>
		
		<div id="footer">
			MZK Koszalin 2016. <p> &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>