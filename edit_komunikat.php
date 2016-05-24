
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
<h2>Edycja komunikatu.</h2>
</div>
<div class="divB">
<div class="divD">
<p>Wybierz nazwę komunikatu, którą chcesz edytować</p>
<?php
$connection = @mysql_connect("localhost", "root", "");
$db = mysql_select_db("mzk", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did_kom'];
$nazwa = $_GET['dnazwa'];
$opis = $_GET['dopis'];

$query = mysql_query("update komunikaty set
nazwa='$nazwa', opis='$opis' where id_kom='$id'", $connection);
}
$query = mysql_query("select * from komunikaty", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='edit_komunikat.php?update={$row['id_kom']}'>{$row['nazwa']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from komunikaty where id_kom=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";

echo "<hr/>";
echo"<input class='input' type='hidden' name='did_kom' value='{$row1['id_kom']}' />";

?>
<p align="left"><b>NAZWA:</B> </br>
<?php
echo"<input class='input' type='text' name='dnazwa' style='font-size: 20px; width: 800px; height: 40px' value='{$row1['nazwa']}' />";
echo "<br />";
?>
<p align="left"><b>OPIS:</B> </br>
<?php
echo "<textarea rows='20' cols='98' name='dopis'>{$row1['opis']}";
echo "</textarea>";
?>
<p>
<p align="center">
<?php
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
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