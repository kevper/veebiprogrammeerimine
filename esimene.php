<?php
	//kommentaar, paar muutujat järgmisena
	$myName = "Kevin";
	$MyFamilyName = "Perle";
	
	$monthnamesET = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktooboer", "november", "detsember"];
	//var_dump($monthnamesET);
	echo $monthnamesET[8];
	//$monthnow = $monthnamesET [date]("n")-1;
	//vaatame, mis kell on ja määrame päeva osa
	$hournow = date("H");
	//echo $hournow; 
	$partofday = "";
	if ( $hournow < 8){     // < > <= => !=
	$partofday = "varajane hommik";
	}
	if ( $partofday >= 8 and $hournow < 16) {
		$partofday = "koolipäev";
	}
	if ($hournow > 16){
		$partofday = "vaba aeg";
	}
	//echo $partofday;
	
	//kui palju on koolipäeva lõpuni jäänud
	$timenow = strtotime(date("d.m.Y H:i:s"));
	//echo $timenow;
	$schooldayend = strtotime(date("d.m.Y" ." " ."15:45"));
	//echo $schooldayend;
	$totheend = $schooldayend - $timenow;
	//echo (round($totheend / 60));
	
	//vanus
	$mybirthyear;
	$agenotice = "";
	//var_dump($_POST);
	if ( isset($_POST["birthyear"]) ) {
		$mybirthyear = $_POST["birthyear"];
		$myage = date("Y") - $_POST["birthyear"];
		//echo $myage;
		$agenotice = "Teie vanus on ligikaudu " . $myage ." aastat.</p>";
		
		$agenotice .= "<p>Olete elanud järgnevatel aastatel:</p>";
		$agenotice .= "<ul>";
		$yearnow = date("Y");
		for ($i = $mybirthyear; $i <= $yearnow; $i ++) {
			$agenotice .= "<li>" .$i ."</li> \n";
		}
		$agenotice .= "</ul>";
	}
	
	//tsükkel
	/*for ($i = 0; $i < 50; $i ++ )
		echo "ha";
	*/
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title>Lehenimi</title>
</head>
<body>
<?php
	//echo $myName ." " .$MyFamilyName;
?>
	<h1>veebiprogremine</h1>
	<p>See õppetöö raames loodud leht vist ei sisalda tõsiseltvõetavat sisu</p>

	<?php
	echo "<p>See on esimene jupp php abil väljastatud teksti</p>";
	//echo "<p>Täna on ";
	//echo date("d. ") .$monthnow  .date(" Y") .", kell lehe avamisel oli " .date("H:i:s");
	echo", käes on " . $partofday.".</p>";
	?>
	
	<h2>Aastaarvudest</h2>
	<form method="POST">
		<label> Teie sünniaasta: </label>
		<input type="number" name="birthyear" min="1990" max="2017" value="<?php echo $mybirthyear; ?>"> 
		<input type= "submit" name="submitbirthyear" value="Kinnita">
	
	</form>

<?php
	if ($agenotice != "") {
		echo $agenotice;
	}
?>	
	
	
	</body>
</html>