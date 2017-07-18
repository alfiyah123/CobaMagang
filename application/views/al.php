<html>
	<head>
		<title>
			Ini Web Pertama
		</title>
	</head>
	<body>
		<form method="post" action="<?=base_url()?>User/Register/simpan_data_utama">
			<input type="text" name="tipe" placeholder="Nama Depan"><br>
			<input type="text" name="anggota" placeholder="Nama Belakang"><br>
			<button type="submit">Simpan</button>
		</form>

		<table border="1">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th>Nama Depan</th>
					<th>Nama Belakang</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if($data != null){
					foreach ($data as $key) {
						echo "<tr>
							<td>".$key->id_mhs."</td>
							<td>".$key->nama_depan."</td>
							<td>".$key->nama_belakang."</td>
							<td><a href=\"".base_url()."Saya/edit/".$key->id_mhs."\">Edit</a></td>
							<td><a href=\"".base_url()."Saya/delete/".$key->id_mhs."\">Delete</a></td>
						</tr>";
					}
				}
				?>
			</tbody>
		</table>
	</body>
</html>