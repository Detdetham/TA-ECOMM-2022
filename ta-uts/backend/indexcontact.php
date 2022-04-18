<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Form Email</title>
</head>
<body>
 
	<h1>Contact Form Email</h1>
	
	<form action="kirim.php" method="post">
		<p><input type="text" name="nama" placeholder="Nama anda" size="30" required /></p>
		<p><input type="email" name="email" placeholder="Email valid" size="30" required /></p>
		<p><input type="text" name="judul" placeholder="Subjek pesan email" size="50" required /></p>
		<p><textarea name="pesan" placeholder="Pesan anda" rows="7" cols="50" required></textarea>
		<p><input type="submit" name="kirim" value="Kirim Pesan" /> <input type="reset" value="Hapus Text" /></p>
	</form>
	
</body>
</html>
<?php } ?>