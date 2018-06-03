<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$Id_Pesanan = $_GET['user'];

$sql = "DELETE FROM pes WHERE Id_Pesanan='$Id_Pesanan'";
if($konek->query($sql)){
  echo "Data pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar pesan</a>";
?>

<html>
 <body background='abc.jpg'> </html>