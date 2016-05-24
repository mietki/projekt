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
			<p>
			
		
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
<font size="+2"><P ALIGN="CENTER">EDYCJA CENNIKA</P></font>
</div>
<div class="divB">
<div class="divD">
<p>Wybierz datę cennika, który chcesz edytować</p>
<?php
$connection = @mysql_connect("localhost", "root", "");
$db = mysql_select_db("mzk", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did_kom'];
$jednorazowyn = $_GET['djednorazowyn'];
$jednorazowyu = $_GET['djednorazowyu'];
$karnet11n = $_GET['dkarnet11n'];
$karnet11u = $_GET['dkarnet11u'];
$czasowy60mn = $_GET['dczasowy60mn'];
$czasowy60mu = $_GET['dczasowy60mu'];
$czasowy24hn = $_GET['dczasowy24hn'];
$czasowy24hu = $_GET['dczasowy24hu'];
$okres30dn = $_GET['dokres30dn'];
$okres30du = $_GET['dokres30du'];
$okres7dn = $_GET['dokres7dn'];
$inne = $_GET['dinne'];
$data = $_GET['ddata'];


$query = mysql_query("update cennik set
data='$data', 
jednorazowyn  ='$jednorazowyn'
jednorazowyu ='jednorazowyu'
karnet11n ='$karnet11n'
karnet11u ='dkarnet11u'
czasowy60mn='$czasowy60mn'
czasowy60mu='$czasowy60mu'
czasowy24hn='$czasowy24hn'
czasowy24hu ='$czasowy24hu'
okres30dn='$okres30dn'
okres30du='$okres30du'
okres7dn ='$okres7dn'
inne ='$inne'

where id_cen='$id'", $connection);
}
$query = mysql_query("select * from cennik", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='edit_cennik.php?update={$row['id_cen']}'>{$row['data']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from cennik where id_cen=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";

echo "<hr/>";
echo"<input class='input' type='hidden' name='did_kom' value='{$row1['id_cen']}' />";

?>
<p align="left"><b>DATA DODANIA CENNIKA:</B> </br>

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

<p align="left"><b>CENA BILETU JEDNORAZOWEGO ULGOWEGO:</B> </br>

<?php
echo"<input class='input' type='text' name='djednorazowyu' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['jednorazowyu']}' />";
echo  "<br />";
?>

<p align="left"><b>CENA BILETU JEDNORAZOWEGO NORMALNEGO:</B> </br>
<?php
echo"<input class='input' type='text' name='djednorazowyn' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['jednorazowyn']}' />";
echo "<br />";
?>

<p align="left"><b>CENA KARNETU 11 BILETÓW JEDNORAZOWYCH NORMALNYCH</B> </br>
<?php
echo"<input class='input' type='text' name='dkarnet11n' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['karnet11n']}' />";
echo "<br />";
?>

<p align="left"><b>CENA KARNETU 11 BILETÓW JEDNORAZOWYCH ULGOWYCH</B> </br>
<?php
echo"<input class='input' type='text' name='dkarnet11u' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['karnet11u']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU CZASOWEGO 60minut NORMALNY</B> </br>
<?php
echo"<input class='input' type='text' name='dczasowy60mn' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['czasowy60mn']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU CZASOWEGO 60minut ULGOWY</B> </br>
<?php
echo"<input class='input' type='text' name='dczasowy60mu' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['czasowy60mu']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU CZASOWEGO 60godzin NORMALNY</B> </br>
<?php
echo"<input class='input' type='text' name='dczasowy24hn' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['czasowy24hn']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU CZASOWEGO 60godzin ULGOWY</B> </br>
<?php
echo"<input class='input' type='text' name='dczasowy24hu' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['czasowy24hu']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU NA OKRES 30dni NORMALNY</B> </br>
<?php
echo"<input class='input' type='text' name='dokres30dn' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['okres30dn']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU NA OKRES 30dni ULGOWY</B> </br>
<?php
echo"<input class='input' type='text' name='dokres30du' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['okres30du']}' />";
echo "<br />";
?>

<p align="left"><b>CENA BILETU NA OKRES 7dni NORMALNY</B> </br>
<?php
echo"<input class='input' type='text' name='dokres7dn' style='font-size: 20px; width: 400px; height: 40px' value='{$row1['okres7dn']}' />";
echo "<br />";
?>

<p align="left"><b>INNE BILETY / INFORMACJE DODATKOWE</B> </br>
<?php
echo "<textarea rows='20' cols='98' name='dinne'>{$row1['inne']}";
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
<Span>Cennik został zaktualizowany</span></div>';
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