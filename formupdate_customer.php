<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoranbeken");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_GET['idcustomer'];

$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
$row = mysqli_fetch_array($customer);

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data Restoran</title>
  </head>
 <body background='abc.jpg'>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data customer</h1>
    <form action="update_customer.php" method="post">
      <td><input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>"/></td>

      <table>
        <tr>
          <td>id customer</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
        </tr>
        <tr>
          <td>nama customer</td>
          <td>:</td>
          <td><input type="text" name="namacustomer" value="<?php echo $row['namacustomer'];?>"></td>
        </tr>
		<tr>
          <td>email customer</td>
          <td>:</td>
          <td><input type="text" name="emailcustomer" value="<?php echo $row['emailcustomer'];?>"></td>
        </tr>
        <tr>
          <td>alamat customer</td>
          <td>:</td>
          <td><textarea name="alamatcustomer" value="" rows="8" cols="40"><?php echo $row['alamatcustomer'];?></textarea></td>
        </tr>
        <tr>
          <td>makanan</td>
          <td>:</td>
          <td><input type="text" name="menumakanan" value="<?php echo $row['menumakanan'];?>"></td>
        </tr>
        <tr>
          <td>minuman</td>
          <td>:</td>
          <td><input type="text" name="menuminuman" value="<?php echo $row['menuminuman'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
