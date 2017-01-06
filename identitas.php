<?php
include 'sistem/config/conn-data.php';
$query_data = mysqli_query($conn, "SELECT * FROM identitas WHERE id_identitas = '1'");
$ambil_data = mysqli_fetch_assoc($query_data);
extract($ambil_data);
 ?>
