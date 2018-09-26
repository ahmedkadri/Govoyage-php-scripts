<?php
require_once('connect.php');


$sql = "SELECT * FROM offre_vol";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $xml->addChild('offre_vol');
        $mydata->addAttribute('IdVol',$row['IdVol']);
        $mydata->addAttribute('Reduction',$row['Reduction']);
        $mydata->addAttribute('Prix',$row['Prix']);
        $mydata->addAttribute('Date_Debut',$row['Date_Debut']);
		$mydata->addAttribute('Date_Fin',$row['Date_Fin']);
		$mydata->addAttribute('NombrePlace',$row['NombrePlace']);
		$mydata->addAttribute('DateVol',$row['DateVol']);
       $mydata->addAttribute('PaysDestination',$row['PaysDestination']);
       $mydata->addAttribute('PaysDepart',$row['PaysDepart']);
       $mydata->addAttribute('Description',$row['Description']);
       $mydata->addAttribute('NomVol',$row['NomVol']);
         }
} else {
    echo "0 results";
}
$conn->close();
header ("Content-Type:text/xml");
	 echo($xml->asXML());
	 
?>