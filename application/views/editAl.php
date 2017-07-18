<?php
	foreach ($data_mhs as $row) {
		$id = $row->id_mhs;
		$nama_depan = $row->nama_depan;
		$nama_belakang = $row->nama_belakang;
	}
?>

<html>
	<head>
		<title>
			Ini Web Pertama
		</title>
	</head>
	<body>
		<form method="post" action="<?=base_url()?>Saya/update_data/<?=$id?>">
			<input type="text" name="nama_depan" value= '<?php $id ?>' placeholder="Nama Depan"><br>
			<input type="text" name="nama_belakang" placeholder="Nama Belakang"><br>
			<button type="submit">Simpan</button>
		</form>

	</body>
</html>