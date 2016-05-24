

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Baza wydarze񠫵lturalnych Bytowa</title>
	<meta name="description" content="Serwis poݷi뤯ny systemowi Linux. Naucz si꡷szystkiego, co chcesz wiedzie桯 Linuxie!" />
	<meta name="keywords" content="linux, kurs, nauka, poznaj, co to jest linux, ubuntu, debian, mint, fedora, wybierz dystrybucjꬠinstalacja linux, polecenia, terminal, bash" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="style1.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
	<html lang="pl">
	<div id="container">
	<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head></head>
<body>
  

		
		
		
		
		<div id="topbar">
			
				<div id="logo">
			Baza wydarzeń kulturalnych Bytowa.
		</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
		
			
			<div class="optiontITLE">PANEL ADMINA</a></div>
			<P>
            <div class="optionL"><a href="index.php?go=1">DODAJ</a></div>
			<div class="optionL"><a href="logout.php">WYLOGUJ</a></div>
			
			
		<p>
			<div class="optionTitle"></a></div>
		
		</div>
		
		<div id="content">
		

			 <?php
// odbieramy dane z formularza
$nazwa = $_POST['nazwa'];
$kategoria = $_POST['kategoria'];
$opis = $_POST['opis'];
$miejsce = $_POST['miejsce'];
$kontakt = $_POST['kontakt'];
$organizator = $_POST['organizator'];
$data = $_POST['data'];
$godzina = $_POST['godzina'];
$minuta = $_POST['minuta'];

//file
$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
if($nazwa and $kategoria and $opis and $miejsce and $kontakt and $organizator and $data and $godzina and $minuta) { 
if(move_uploaded_file($file_loc,$folder.$final_file))
	{
    // łączymy się z bazą danych
    $connection = @mysql_connect('localhost', 'root', '')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('wydarzenia', $connection)
    or die('Nie mogę połączyć się z bazą danych');
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO ogloszenie2 (nazwa, kategoria, opis, miejsce, kontakt, organizator, data, godzina, minuta, file,type,size)
                                          	values ('$nazwa', '$kategoria',
	                                                '$opis', '$miejsce',
													 '$kontakt', '$organizator', '$data',
													 '$godzina', '$minuta', '$final_file','$file_type','$new_size')");
    
    if($ins) echo "Wydarzenie zostało poprawnie dodane do bazy";
    else echo "Błąd, nie udało się dodać nowego wydarzenia";
    
    mysql_close($connection);

}
}
?> 
<p>
<form action="log_in.php" method="post">
						
							<input type="submit" value="Dodaj następne" />
						
						</form>			
		</div>	
		
		<div id="footer">
			Baza wydarzeń kulturalnych Bytowa &copy; <p> Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	
</body>
</html>