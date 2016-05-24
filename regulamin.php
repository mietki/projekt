<!DOCTYPE html>
<html>
<body>
<font size="+2"><P ALIGN="CENTER">REGULAMIN</P></font>
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

$sql = "SELECT * FROM regulamin ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
?>

<font size="+3"> <P ALIGN="CENTER"><B><?php echo  $row['data'] ; ?></B></font> <br>
<P ALIGN="LEFT"><?php echo  $row['opis'] ; ?> <br></p>



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
