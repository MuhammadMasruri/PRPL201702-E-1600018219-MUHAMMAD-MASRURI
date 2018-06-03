<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$namacustomer=$_POST['namacustomer'];
$emailcustomer=$_POST['emailcustomer'];
$alamatcustomer=$_POST['alamatcustomer'];


// membuat table customer
$sql = "INSERT INTO customer(namacustomer, emailcustomer, alamatcustomer) VALUES ('$namacustomer', '$emailcustomer','$alamatcustomer')";

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