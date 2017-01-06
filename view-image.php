<?php
include 'sistem/config/conn-data.php';
if(isset($_GET['id_identitas'])) {
    $sql = "SELECT * FROM identitas WHERE id_identitas=" . $_GET['id_identitas'];
    $result = mysqli_query($conn,"$sql")
    or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error());
    $row = mysqli_fetch_array($result);
    echo $row["logo"];
    }
    mysqli_close($conn);
 ?>
