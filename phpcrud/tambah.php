<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NRP</td>
				<td><input type="number" name="NRP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td><input type="text" name="Jenis_Kelamin"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="Jurusan"></td>
			</tr>
			<tr>			
				<td>Email</td>
				<td><input type="email" name="Email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="number" name="Alamat"></td>
			</tr>
			<tr>
				<td>NoHP</td>
				<td><input type="text" name="No_Hp"></td>
			</tr>
			<tr>			
				<td>ASAL SMA</td>
				<td><input type="text" name="Asal_SMA"></td>
			</tr>
			<tr>
				<td>MATKUL</td>
				<td><input type="number" name="Matkul_Favorit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>