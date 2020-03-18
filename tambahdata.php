<!DOCTYPE html>

<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Menambahkan data</h2>
	<br/>
	<a href="manipulasidata.php"><<< kembali</a>
	<h3>Tambah data mahasiswa</h3>
	<form method="post" action="tambahaksi.php">
		<table>
			<tr>
				<td>nim</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>
