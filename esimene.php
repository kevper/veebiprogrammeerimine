<?php
	//kommentaar, paar muutujat järgmisena
	$myName = "Kevin";
	$MyFamilyName = "Perle";
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
	echo (round($totheend / 60));
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
	echo "<p>Täna on ";
	echo date("d.m.Y") .", kell lehe avamisel oli " .date("H:i:s");
	echo", käes on " . $partofday.".</p>";
	?>
	
	
	
	
	
	
	
	
	</body>









</html>