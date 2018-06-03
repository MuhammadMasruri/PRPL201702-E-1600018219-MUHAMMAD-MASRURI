<html>
<head>
  <style>
    body{
     font-family: 'Courier New';
     background-color: #16a085;
    }
    table{
      border-radius: 5px;
      border: #ccc 1px solid;
      background-color: #eaebec;

    }
    table td {
    padding: 10px 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
    a{

      text-decoration: none;
    }
  </style>
</head>
<body>
<center>
<b><a href="index.html">Home</a></b>
<h1>Daftar Pesanan </h1>

<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<table>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "restoranbeken";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM pes";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  pes where Nama_Customer like '%$qcari%' or Tanggal like '%$qcari' or Alamat like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  pes where Tanggal between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  pes ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<b><tr><td>No.</td><td>Id Pesanan</td><td>Nama Customer</td><td>Alamat Customer</td><td>Tanggal Pesan</td><td>Total Barang</td><td>Total Biaya</td><td colspan=2><center> Aksi</center></td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><p>".$no++."</td>";
    echo "<td>".$row['Id_Pesanan']."</td>";
    echo "<td>".$row['Nama_Customer']."</td>";
    echo "<td>".$row['Alamat']."</td>";
	  echo "<td>".$row['Tanggal']."</td>";
	  echo "<td>".$row['Jumlah_Barang']."</td>";
	  echo "<td>".$row['Jumlah_Bayar']."</td>";
    echo "<td><a href='struck.php?user=".$row['Id_Pesanan']."'>Cetak</a></td>";
    echo "<td><a href='delete_pesan.php?user=".$row['Id_Pesanan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>

</body>
</html>