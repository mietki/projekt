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
			<div class="optionL">  <A style="text-decoration: none;" href="log_in.php"><font color=#00000>ROZKŁAD</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_cennik.php"><font color=#00000>CENY BILETÓW</a></div>
			<div class="optionL">  <A style="text-decoration: none;" href="edit_regulamin.php"><font color=#00000>REGULAMIN</a></div>
            <div class="optionL">  <A style="text-decoration: none;" href="edit_kontakt.php"><font color=#00000>KONTAKT</a></div>
			<p>
					<form action="logout.php" method="post">
	
	

	<a href="logout.php">Wyloguj się</a> </p>
  
	
       
			
		
	</form>
		</div>
		
		<div id="content">
			
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<font size="+2"><P ALIGN="CENTER">EDYCJA REGULAMINU</P></font>
</div>
<div class="divB">
<div class="divD">
<p>Wybierz datę regulaminu, który chcesz edytować</p>
<?php
$connection = @mysql_connect("localhost", "root", "");
$db = mysql_select_db("mzk", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did_reg'];
$data = $_GET['ddata'];
$opis = $_GET['dopis'];



$query = mysql_query("update regulamin set
data='$data', 
opis='$opis'

where id_reg='$id'", $connection);
}
$query = mysql_query("select * from regulamin", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='edit_regulamin.php?update={$row['id_reg']}'>{$row['data']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from regulamin where id_reg=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";

echo "<hr/>";
echo"<input class='input' type='hidden' name='did_reg' value='{$row1['id_reg']}' />";

?>
<p align="left"><b>DATA DODANIA REGULAMINU:</B> </br>

 <!doctype html>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

 <br>
 <?php
echo"<input class='input' id='datepicker' type='text' name='ddata' style='font-size: 20px; width: 400px; height: 40px'  value='{$row1['data']}' />";
echo "<br />";
?>


<p align="left"><b>REGULAMIN:</B> </br>
<?php
echo "<textarea rows='20' cols='98' name='dopis'>{$row1['opis']}";
echo "</textarea>";
?>



















<p>
<p align="center">
<?php
echo "<input class='submit' type='submit' name='submit' value='zaktualizuj' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Regulamin został zaktualizowany</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>
			
			</div>
		
		<div id="footer">
			MZK Koszalin 2016. <p> &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>