<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table menu
$sql = "CREATE TABLE menu(
  idmenu VARCHAR(15) NOT NULL PRIMARY KEY,
  namamenu VARCHAR(30),
  harga int 
)";

if($konek->query($sql)){
  echo "Table customer BERHASIL dibuat!<br/>";
}else{
  echo "Table customer GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>

<html>
 <body background='abc.jpg'> </html>