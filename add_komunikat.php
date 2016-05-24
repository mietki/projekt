<html>
<head>

</head>
<body bgcolor="gainsboro" >
<center>
<link rel="stylesheet" href="add.css" type="text/css" />

<font size="+2"><P ALIGN="CENTER">DODAJ KOMUNIKAT</P></font>

<form action="add_database_komunikat.php" method="post" enctype='multipart/form-data' onsubmit="return validate(this);">

 
 
 <p align="left"><b>*NAZWA:</B> </br><p align="left"><input type="text" name="nazwa" style="font-size: 20px; width: 800px; height: 40px" />


  <p align="left"><b>*OPIS:</B> </br><p align="left"> <textarea name="opis" cols="98" rows="20"></textarea> 
<br>

  
  
</select>
<p align="left"><b>GRAFIKA:</B> </br><p align="left">
<input type="file" name="file" /> </br>
</br>
<input type="reset" value="Wyczyść wszystko" />
<p>

<input type="submit" value="DODAJ KOMUNIKAT"  style="font-size: 16px; width: 310px; height: 50px" /></br><P>


* -pola obowiązkowe <p>
</form>
 
 
</body>
</html>
</form> 
</center>
</body>
</html>