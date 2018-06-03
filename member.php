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
<body><center>
<b><a href="index.html">Home</a></b>
<br>

<h1><b><u>Daftar Member</u><b></h1> 

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


  $sql="SELECT * FROM  customer";

$data = $konek->query($sql);


echo "<b><tr><td>No.</td><td>Id Customer</td><td>Nama Customer</td><td>Email Customer</td><td>Alamat Customer</td><td colspan=1><center> Aksi</center></td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><p>".$no++."</td>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['emailcustomer']."</td>";
	  echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td><a href='delete_customer.php?user=".$row['idcustomer']."'>Hapus</a></td>";
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