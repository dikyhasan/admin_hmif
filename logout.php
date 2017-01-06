<?php
session_start();
unset($_SESSION['namaadminhima']);
unset($_SESSION['passworadminhima']);
session_destroy();
header("Location: http://localhost/website-hmif/wp-admin/");
 ?>
