<?php
include 'sistem/config/conn-admin.php';
include 'sistem/fungsi/fungsi.php';

if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
  $username_anti_injeksi = anti_injeksi($_POST['username']);
  $password_anti_injeksi = anti_injeksi(md5($_POST['password']));

  $username_anti_injeksi = mysqli_real_escape_string($conn, $username_anti_injeksi);
  $password_anti_injeksi = mysqli_real_escape_string($conn, $password_anti_injeksi);
  //pengecekan input kolom
  if (!ctype_alnum($username_anti_injeksi) || !ctype_alnum($password_anti_injeksi)){
     header("Location: http://localhost/website-hmif/wp-admin/");
  }else{
    $query_login = mysqli_query($conn, "SELECT * FROM admin WHERE BINARY username = '$username_anti_injeksi' AND password = '$password_anti_injeksi' AND aktif = 'Y'");
    $hitung_data = mysqli_num_rows($query_login);
    if ($hitung_data > 0){
       $cetak = mysqli_fetch_array($query_login);
       extract($cetak);
       session_start();
       $_SESSION['namaadminhima'] = $username_anti_injeksi;
       $_SESSION['passworadminhima'] = $password_anti_injeksi;
       $id_admin = session_id();
       session_regenerate_id();
       $id_admin_baru = session_id();
       mysqli_query($conn, "UPDATE admin SET id_admin = '$id_admin_baru' WHERE username = '$username_anti_injeksi'");
       header("Location: sistem/home/home.php");
    }else{
      header("Location: index.php?auth=d11dasda121331adad");
    }
  }
}else{
  header("Location: http://localhost/website-hmif/wp-admin/");
}
 ?>
