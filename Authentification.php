
<?php
require_once('connect.php');



$Login=$_GET['Login'];
$Password=$_GET['Password'];


$resultat = "SELECT * FROM govoyage.user where Login='$Login' and MotDePasse='$Password'";

$req = mysql_query($resultat);
	$data = mysql_fetch_array($req);
	if(mysql_num_rows($req)){
		
		echo $data['IdUser'];
	}
	else echo "no";

?>