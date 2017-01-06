<?php
//include konek database
include 'sistem/config/conn-admin.php';
include 'sistem/fungsi/fungsi.php';

	$email_cr = anti_injeksi($_POST['email_cr']);
	$injeksi_email = mysqli_real_escape_string($conn, $email_cr);
  $query  = "SELECT * FROM admin WHERE BINARY email = '$injeksi_email'";
  $login  = mysqli_query($conn, $query);
  $ketemu = mysqli_num_rows($login);
  if ($ketemu == 1){
    $cetak     = mysqli_fetch_array($login);
    extract($cetak);
    $id_admin_cek = $id_admin;
    //password baru
    $pass="129FAasdsk25kwBjakjDlff"; $panjang='8'; $len=strlen($pass);
	$start=$len-$panjang; $xx=rand('0',$start);
	$yy=str_shuffle($pass);
	$passwordbaru=substr($yy, $xx, $panjang);

  	// title atau subject email
	$title = "Permintaan Password Baru";
	// isi pesan email disertai password
	$pesan = "
	<html>
	<style>
	.layout{
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}
	.header{
		background-color: #555;
		border-radius:3px;
		padding: 6px;
		text-align:center;
		color: #fff;
	}

	.doff{
		color:#555;
	}
	</style>
	<body>
	<div class=\"layout\">
		<div class=\"header\">
			<h3>Developer HMIF<br><small>Universitas Komputer Indonesia</small></h3>
		</div><br>
		Kami telah mengatur ulang password Anda, Berikut Data beserta password baru Anda :<br><br>
		<table>
		<tr>
			<td><b>Nama Lengkap</b><td>: ".$nama_lengkap."</td></td>
		</tr>
		<tr>
			<td><b>Email</b><td>: ".$email."</td></td>
		</tr>
		<tr>
			<td><b>Divisi</b><td>: ".$divisi."</td></td>
		</tr>
		<tr>
			<td><b>Username</b><td>: <b>".$username."</b></td></td>
		</tr>
		<tr>
			<td><b>Password Baru</b><td>: <b>".$passwordbaru."</b></td></td>
		</tr>
		</table>
			<p>Anda dapat login kembali dengan password baru Anda ke <a href=\"http://localhost/website-hmif/wp-admin/\" target=\"_blank\" style=\"text-decoration:none;font-weight:bold;\">Website Administrator</a>.</p>
			<p><br><br>
	    Developer HMIF<br>
			Universitas Komputer Indonesia
			</p>
			<center>
			<small>
			<p class=\"doff\">Allrights reserved &copy; ".date("Y")." HMIF UNIKOM.<br>
			<a href=\"http://www.himaif.unikom.ac.id/\" target=\"_blank\" style=\"text-decoration:none;\">Website Utama</a></p>
			</small>
			</center>
   	</div>
	</body>
	</html>";
	// header email berisi alamat pengirim
  $header = "From: Developer HMIF<no-reply@himaif.unikom.ac.id> \r\n";
	$header .= "MIME-Version: 1.0 \r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	// mengirim email
	$kirimEmail = mail($injeksi_email, $title, $pesan, $header);
	// cek status pengiriman email
	if ($kirimEmail){
		$password_ganti = $conn->real_escape_string(md5($passwordbaru));
    	$query2 = mysqli_query($conn, "UPDATE admin SET password = '$password_ganti' WHERE id_admin = '$id_admin_cek'");
		if ($query2){
			header("Location: lost-password.php?auth=123131adajjadl131jakdl12");
		}else{
     		header("location: lost-password.php?auth=2131kjadlaljaipqwepoad1131");
		}
	}
  }
  else{
     header("location:  lost-password.php?auth=2131kjadlaljaipqwepoad1131");
  }
 ?>
