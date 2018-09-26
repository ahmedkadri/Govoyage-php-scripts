<?php
require_once('connect.php');



$prix=$_GET['prix'];
$date_debut=$_GET['date_debut'];
$date_fin=$_GET['date_fin'];
$destination=$_GET['destination'];
$disponibiliter=$_GET['disponibiliter'];
$description=$_GET['description'];


$sql = "INSERT INTO offre_vol ( prix, date_debut,date_fin,destination,disponibiliter,description)
VALUES ( '$prix','$date_debut','$date_fin','$destination','$disponibiliter','$description')";

if (mysqli_query($conn, $sql)) {
    echo "successfully added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>