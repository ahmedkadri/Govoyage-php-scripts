<?php

require_once('connect.php');

$sql = "SELECT * FROM offre_vol";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $xml->addChild('offre_vol');
  $mydata->addAttribute('id',$row['id']);
        $mydata->addAttribute('last_name',$row['last_name']);
        $mydata->addAttribute('first_name',$row['first_name']);
    $mydata->addAttribute('date_naissance',$row['date_naissance']);
    $mydata->addAttribute('email',$row['email']);
    $mydata->addAttribute('telephone',$row['telephone']);
    $mydata->addAttribute('username',$row['username']);
    $mydata->addAttribute('password',$row['password']);
  
    $mydata->addAttribute('date_inscription',$row['date_inscription']);
    $mydata->addAttribute('sexe',$row['sexe']);
  
    
    
         }
} else {
    echo "0 results";
}
$conn->close();
header ("Content-Type:text/xml");
   echo($xml->asXML());

   ?>