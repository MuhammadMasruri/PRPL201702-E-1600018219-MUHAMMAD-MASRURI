<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//membuat table pesan / order
$sql = "CREATE TABLE pesan (
	idcustomer INT(15)NOT NULL , 
	idmenu VARCHAR(15) NOT NULL, 
	namacustomer VARCHAR (15) NOT NULL,
	makanan VARCHAR (15) NOT NULL,
	minuman VARCHAR (15) NOT NULL,
	jumlah int (15) NOT NULL, 
	tanggal VARCHAR (15) NOT NULL,
	catatan VARCHAR (50) NOT NULL,
	
	FOREIGN KEY (idcustomer) REFERENCES customer(idcustomer),
	FOREIGN KEY (idmenu)REFERENCES menu(idmenu)
)";

if($konek->query($sql)){
  echo "Table Pesan BERHASIL dibuat!<br/>";
}else{
  echo "Table Pesan GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
<html>
 <body background='abc.jpg'> </html>