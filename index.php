<?php

include("r.php");
include("meni.php");
include("config.php");

	$baza=spoji();
	$sql="SELECT * FROM udruga ORDER BY naziv";
	$upit= mysqli_query ($con,$sql);
	$rez = mysqli_fetch_array ($upit);
				
				
	
		
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Poèetna</title>
		<link href="kribenkov.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		
		
	<h1>HOME</h1>
	<p>Dobrodošli na stranice sportske udruge!</p>
	<?php
	if (!isset ($_SESSION['user_id'])){
		echo "Niste prijavljeni!";
	}?>
		
	<table  id="udruge" border= "1">
	<thead>
		<tr>
		<th>Naziv udruge</th>
		</tr>
				
	</thead>
	<tbody>
				
	<?php while ($rez=mysqli_fetch_array($upit)){ 
					
	?>
	<tr>
		<?php 
			echo "<td><a href=\"udruga.php?udrugaID=".$rez['udruga_id']."\">"?><?php echo $rez["naziv"]; ?></a></td>
	</tr>
		<?php }?>
	</table>                       
	</body>
</html>
