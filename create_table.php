<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer int(15) NOT NULL PRIMARY KEY,
  namacustomer VARCHAR(30),
  emailcustomer VARCHAR(50),
  alamatcustomer VARCHAR(50)
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