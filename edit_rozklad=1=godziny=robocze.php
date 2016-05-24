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
<font size="+2"><P ALIGN="CENTER"><B>EDYCJA GODZIN</B></P></font>
<font size="+2"><P ALIGN="CENTER"><B>DNI ROBOCZE</B></P></font>
<center>
<table border="1" >
  <tr bgcolor="#7F7575">
    <td><center>Przystanek</center></td>
    <td><center>Godzina</center></td>		
   
  </tr>
  <tr bgcolor="#7F7575">
    <td align="right" valign="top">

	<?php 
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">

<?php 
 echo $lines[0];

?>

</font>


<br/>
<?php 
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">

<?php 
 echo $lines[1];

?>
</font>


<br/>
<?php 
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[2];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[3];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[4];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[5];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[6];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[7];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[8];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[9];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[10];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[11];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[12];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[13];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[14];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[15];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[16];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[17];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[18];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[19];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[20];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[21];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[22];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[23];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[24];

?>
</font>


<br/>
<?php################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[25];

?>
</font>


<br/>
<?php
################################################################ przystanek 
$myFile = "rozklad/1/przystanki_1";
$lines = file($myFile);
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
 
?> 
<font size="+1">
<?php 
 echo $lines[26];

?>
</font>


<br/>
<?php

######################################################################### godziny
?>
</td>
 <td align="left" valign="top"> <?php
$plik = 'rozklad/1/1_1';
if(isset($_POST['tresc'])){
    file_put_contents($plik, $_POST['tresc']);
}

echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
<center><textarea name="tresc" cols="45" rows="28" align= "left" p style="font-size:139%;">'.file_get_contents($plik).'</textarea>
<p><input type="submit" value="Zapisz"></center>
</form>';


?></td>   	
   
  </tr>
  <tr>
    <td></td>
   
   
  </tr>
</table>





</div>





</body>
</html>
			 
			</div>
		
		<div id="footer">
			MZK Koszalin 2016. <p> &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>