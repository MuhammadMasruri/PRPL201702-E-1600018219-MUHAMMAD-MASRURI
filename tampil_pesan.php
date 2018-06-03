<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM pesan";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Pesan</h1>";
echo "<table border='1'>";
echo "<tr><td>idcustomer</td><td>idmenu</td><td>namacustomer</td><td>makanan</td><td>minuman</td><td>jumlah</td><td>tanggal</td><td>catatan</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
   echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['idmenu']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
	echo "<td>".$row['makanan']."</td>";
    echo "<td>".$row['minuman']."</td>";
    echo "<td>".$row['jumlah']."</td>";
	echo "<td>".$row['tanggal']."</td>";
    echo "<td>".$row['catatan']."</td>";
   
    echo "<td><a href='delete_pesan.php?namacustomer=".$row['namacustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>

<html>
 <body background='abc.jpg'> </html>