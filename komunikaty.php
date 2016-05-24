<!DOCTYPE html>
<html>
<body>
<font size="10PX"><P ALIGN="CENTER">KOMUNIKATY</P></font>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mzk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM komunikaty ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
?>
<a style="text-decoration: none;" href="uploads/<?php echo $row['file'] ?>" target="_blank"><font color=#FFFFFF>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;powiększ obrazek</font></a></P>
<img src="uploads/<?php echo $row['file'] ?>" WIDTH="260" HEIGHT="360" align="left" "></a>  <br>

<font size="+3"> <P ALIGN="CENTER"><B><?php echo  $row['nazwa'] ; ?></B></font> <br>
<?php echo  $row['opis'] ; ?> <br>


<IMG SRC="KRESKA.png" WIDTH="920" HEIGHT="10" BORDER="0">
</P>
<p>


<p>
   <?php
   }
		                                  
 
}

$conn->close();
?> 


</body>
</html>
