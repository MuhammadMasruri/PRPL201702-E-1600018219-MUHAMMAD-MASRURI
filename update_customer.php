<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST['idcustomer'];
$namacustomer= $_POST['namacustomer'];
$emailcustomer= $_POST['emailcustomer'];
$alamatcustomer = $_POST['alamatcustomer'];
$menumakanan= $_POST['menumakanan'];
$menuminuman= $_POST['menuminuman'];

$sql = "UPDATE customer SET namacustomer='$namacustomer', emailcustomer='$emailcustomer', alamatcustomer='$alamatcustomer',menumakanan='$menumakanan',menuminuman='$menuminuman' WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data customer BERHASIL diedit!<br/>";
}else{
  echo "Data customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>

<html>
 <body background='abc.jpg'> </html>