<font size="+2"><P ALIGN="CENTER">USUŃ KOMUNIKAT</P></font>

<?php

$connection = @mysql_connect('localhost', 'root', '')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('mzk', $connection)
    or die('Nie mogę połączyć się z bazą danych');
	
$sql_query="SELECT * FROM komunikaty";
$result_set=@mysql_query($sql_query);
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM komunikaty WHERE id_kom=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: delete_komunikat.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Komunikaty | Administrator</title>

<script type="text/javascript">
function delete_id(id)
{
 if(confirm('Jesteś pewien, że chcesz usunąć ten komunikat ?'))
 {
  window.location.href='delete_komunikat.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>



    <table align="center">
    <tr>
    
    <th>NAZWA</th>
   
    <th>USUŃ</th>
    </tr>
    <?php
 if(@mysql_num_rows($result_set)>0)
 {
  while($row=mysql_fetch_row($result_set))
  {
   ?>
   
   <style type="text/css">
    
table
{
 width:90%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:#000;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
</style>
            <tr>
            <td><?php echo $row[1]; ?></td>
           
           
            
            <td align="left"><a href="javascript:delete_id(<?php echo $row[0]; ?>)"><img src="b_drop.png" alt="USUŃ" /></a></td>
            </tr>
            <?php
  }
 }
 else
 {
  ?>
        <tr>
        <th colspan="4">There's No data found !!!</th>
        </tr>
        <?php
 }
 ?>
    </table>
 



</center>
</body>
</html>