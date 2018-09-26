<?php
require_once('connect.php');





$sql = "SELECT * FROM  govoyage.offre_croisiere";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $xml->addChild('offre_croisiere');
        $mydata->addChild('IdCroisiere',$row['IdCroisiere']);
        $mydata->addChild('Reduction',$row['Reduction']);
        $mydata->addChild('Nomcrois',$row['Nomcrois']);
        $mydata->addChild('Prix',$row['Prix']);
		$mydata->addChild('Date_Debut',$row['Date_Debut']);
		$mydata->addChild('Date_Fin',$row['Date_Fin']);
		$mydata->addChild('NombrePlace',$row['NombrePlace']);
       $mydata->addChild('DateDepart',$row['DateDepart']);
       $mydata->addChild('NBJour',$row['NBJour']);
       $mydata->addChild('VilleDepart',$row['VilleDepart']);
       $mydata->addChild('VilleDestination',$row['VilleDestination']);
       $mydata->addChild('Description',$row['Description']);
         }
} else {
    echo "0 results";
}
$conn->close();
header ("Content-Type:text/xml");
	 echo($xml->asXML());
	 
?>