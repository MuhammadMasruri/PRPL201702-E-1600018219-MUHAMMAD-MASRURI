<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> RESTORAN BEKEN </h1>
		<h2> BILL PEMBAYARAN </h2>
		<h3> Kubangwunggu Ketanggaungan Brebes</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "restoranbeken";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from pes where Id_Pesanan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<h3><tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['Nama_Customer']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> SOTO Tauco Khas Tegal </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order1']*15000;
		echo "</td>";
		echo "<td>".$row['order1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Sate Blengong Khas Brebes </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order2']*20000;
		echo "</td>";
		echo "<td>".$row['order2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> SALMON SEEDED MUSTARD</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order3']*75000;
		echo "</td>";
		echo "<td>".$row['order3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> CHICKEN HOT PLATE </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order4']*20000;
		echo "</td>";
		echo "<td>".$row['order4']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> NASGOR SOMETHING HOT PLATE </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order5']*20000;
		echo "</td>";
		echo "<td>".$row['order5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Pisang Nugget </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order6']*25000;
		echo "</td>";
		echo "<td>".$row['order6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Martabak Pelangi dan Mozarella </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order7']*50000;
		echo "</td>";
		echo "<td>".$row['order7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Ikan Gurami </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order8']*60000;
		echo "</td>";
		echo "<td>".$row['order8']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> Kepiting Saus Asam Manis </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order9']*75000;
		echo "</td>";
		echo "<td>".$row['order9']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Ball Soup </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order10']*25000;
		echo "</td>";
		echo "<td>".$row['order10']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Paket Komplit Mantap</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order11']*220000;
		echo "</td>";
		echo "<td>".$row['order11']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> KUE RAINBOW CAKE</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order12']*20000;
		echo "</td>";
		echo "<td>".$row['order12']."</td>";
		echo "</tr>";

		
		echo "<tr>";
		echo "<td> KING MANGO THAI </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order13']*25000;
		echo "</td>";
		echo "<td>".$row['order13']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Thai Tea </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order14']*20000;
		echo "</td>";
		echo "<td>".$row['order14']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> ES TEH  </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order15']*3000;
		echo "</td>";
		echo "<td>".$row['order15']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> AIR MINERAL </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order16']*5000;
		echo "</td>";
		echo "<td>".$row['order16']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> COCA COLA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order17']*10000;
		echo "</td>";
		echo "<td>".$row['order17']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> JUS BUAH SEGAR </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order18']*20000;
		echo "</td>";
		echo "<td>".$row['order18']."</td>";
		echo "</tr>";
		
		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Jumlah_Barang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Jumlah_Total'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG ANDA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Uang_Anda'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['Kembalian'];
		echo "</td>";
		echo "</tr>";
		
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>