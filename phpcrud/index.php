
<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA KELAS 1 D3 IT A</title>
	<style>
		h2 {
			text-align: center;
		}
		
	</style>
</head>
<body>

	<h2>DATA MAHASISWA KELAS 1 D3 IT A</h2>
	<br/>
	<a href="tambah.php">+ INPUT DATA MAHASISWA</a>
	<br/>
	<br/>
	<table border="1" style="margin-left: 50px;">
		<tr>
			<th>id anggota</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Asal SMA</th>
			<th>Matkul Favorit</th>
            <th>Opsi</th>
		</tr>
		<?php 
		// include 'koneksi php';
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT * FROM db_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NRP']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Jenis_Kelamin']; ?></td>
				<td><?php echo $d['Jurusan']; ?></td>
				<td><?php echo $d['Email']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['No_Hp']; ?></td>
				<td><?php echo $d['Asal_SMA']; ?></td>
				<td><?php echo $d['Matkul_Favorit']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
