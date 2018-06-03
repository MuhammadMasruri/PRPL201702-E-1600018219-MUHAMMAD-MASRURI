<html>
<head>
  <title>Login Form</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css"><<br><br><br><br><br><br>
<div class="login">	<table border=0>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<center><h2 style='color:red';>Username atau password salah</h2></center>";
        }
    ?><center>
	
		<tr><td colspan=3>
		<h1>Selamat Datang</h1></td></tr>
	  <tr><td colspan=3>
	  Masukan Username dan Password<br></td></tr>
      <form method="post" action="cek_login.php"><tr><td>
      <p><label>Username</td><td>:</td><td><input type="text" name="username" placeholder="Username or Email"></p></td></tr>
		<tr><td>
        <p><label>Password</td><td>:</td><td><input type="password" name="password" placeholder="Masukan Password"></p></p></td></tr>
		<tr><td colspan=3>
        <p class="submit"><input type="submit" name="commit" value="Login" class="tombol"></p></td></tr>
		
      </form>
 
  </table>
</body>
</html> 