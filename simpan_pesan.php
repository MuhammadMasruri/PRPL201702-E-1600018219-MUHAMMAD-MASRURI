<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}	
	//$idpelanggan = $_POST['idpelanggan'];  
$username = $_POST['username'];
$tanggal = $_POST['tanggal'];
$bayar = $_POST['bayar'];
$alamat = $_POST['alamat'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$order7 = $_POST['order7'];
$order8 = $_POST['order8'];
$order9 = $_POST['order9'];
$order10 = $_POST['order10'];
$order11 = $_POST['order11'];
$order12 = $_POST['order12'];
$order13 = $_POST['order13'];
$order14 = $_POST['order14'];
$order15 = $_POST['order15'];
$order16 = $_POST['order16'];
$order17 = $_POST['order17'];
$order18 = $_POST['order18'];
$dibayar = $_POST['dibayar'];
$kembalian = $_POST['kembalian1'];
$Diskon = $_POST['diskon'];
$Total = $_POST['total'];
$totalbarang = $_POST['totalbarang'];

// membuat table pesan

$sql = "INSERT INTO pes (Nama_Customer,Alamat,Tanggal,order1,order2,order3,order4,order5,order6,order7,order8,order9,order10,order11,order12,order13,order14,order15,order16,order17,order18,Jumlah_Total,Jumlah_Barang,Diskon,Jumlah_Bayar,Uang_Anda,Kembalian)VALUES ('$username','$alamat','$tanggal','$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12','$order13','$order14','$order15','$order16','$order17','$order18','$Total','$totalbarang','$Diskon','$bayar','$dibayar','$kembalian')";

if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>

<html>
 <body background='abc.jpg'> </html>