<?php 

include_once("config.php");

if(isset($_POST['Submit'])){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$harga=$_POST['harga'];

	
	$result = mysqli_query($mysqli, "INSERT INTO produk (id,nama,harga)"."VALUES('$id','$nama','$harga')");

	echo "<script>alert('tambah maklumat berjaya'); "."window.location='test.php'</script>";

} else {
	?>
<html>
<head>
	<title>TAMBAH REKOD</title>
</head>
<style type="text/css">
	.nav{
	overflow: hidden;
	background-color: black;
	  text-align: center;

}

.nav a{
	display: inline-block;
	list-style-type: none;
	color: black;
	padding: 16px 16px;
	text-decoration: none;
	font-size: 20px;
}
.nav a:hover{
	background-color: white;
	color: pink;
}
.nav.a.active{
	background-color: pink;
	color: black;
}

.li{
	display: inline-block;
	list-style-type: none;
	

}
</style>

<body>
	<center>
		<div class="nav">
		<a href="dead.php" style="float: left;"><b>Barangan</b></a>
		<a href="test.php">Home</a>
		<a href="add.php">Tambah Barang</a>
		<a href="add.php">Form</a>
	</div>

	<center> <h2>TAMBAH REKOD BARANGAN DAN HARGA</h2>
	<fieldset>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama Produk</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Add"></td>
		</tr>
		</table>
	</form>

<BR><a href="test.php">Kembali ke Laman Utama</a>
	</fieldset>
	</center>
<?php
}
 ?>
 </body>
</html>