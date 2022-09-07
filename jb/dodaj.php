<?PHP

	$password = "";

	$conn = mysqli_connect("localhost", "root", $password, "dane");
	
	$gat = $_POST["gatunek"];
	$tyt = $_POST["tytul"];
	$rok = $_POST["rok"];
	$oce = $_POST["ocena"];
	
	$sql = 'INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES($_POST["gatunek"], $_POST["tytul"], $_POST["rok"], $_POST["ocena"])';
	
	$sql1 = 'INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES(1, 1, 1, 1)';
	
	$sql1 = "INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES($gat, \"$tyt\", $rok, $oce)";
	
	echo $_POST["gatunek"];
	echo "<br>";
	echo $_POST["tytul"];
	echo "<br>";
	echo $_POST["rok"];
	echo "<br>";
	echo $_POST["ocena"];
	echo "<br>";
	
	if(mysqli_query($conn, $sql1)) {
		echo "Film ".$_POST['tytul']." został dodany do bazy";
	} else {
		echo "error error haslo nieprawidlowe";
	}
	
	mysqli_close($conn);

?>