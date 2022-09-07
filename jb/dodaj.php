<?PHP

	$password = "";

	$conn = mysqli_connect("localhost", "root", $password, "dane");
	
	$gat = $_POST["gatunek"];
	$tyt = $_POST["tytul"];
	$rok = $_POST["rok"];
	$oce = $_POST["ocena"];
	
	$sql = "INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES($gat, \"$tyt\", $rok, $oce)";

	if(mysqli_query($conn, $sql)) {
		echo "Film ".$_POST['tytul']." został dodany do bazy";
	} else {
		echo "error error haslo nieprawidlowe";
	}
	
	mysqli_close($conn);

?>