<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$pasien = query("SELECT * FROM pasien");

if( isset($_POST["cari"]) ) {
    $pasien = cari($_POST["keyword"]);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body bgcolor="green">


<div class="container">
<a href="user/user.php" class="btn btn-dark">home</a>
<p></p>
<a href="logout.php" class="btn btn-primary">Logout</a>
<h2 align="center">Daftar Pasien</h2>


<a href="tambah.php" class="btn btn-primary">Tambah data pasien</a>

<br><br>

<form action="" method="post">
      
    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>

<br>
<table  class="table table-dark table-hover" border="1" cellpadding="10" cellspacing="0" >

<tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $pasien as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["alamat"] ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
</div>

</body>
</html>