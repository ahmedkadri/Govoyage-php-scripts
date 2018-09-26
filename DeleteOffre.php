<?php
require_once('connect.php');



$id_offre=$_GET['IdVol'];



$sql = "delete from offre_vol where IdVol='$IdVol'";

if (mysqli_query($conn, $sql)) {
    echo "successfully deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>