<html>
<?php 
	
	if($dataMagang != null){
		foreach ($dataMagang as $key) {
			$tgl_mulai = $key->tgl_mulai;
			$tgl_keluar = $key->tgl_keluar;
		}
	} 

	if($dataAnggota != null){
		foreach ($dataAnggota as $key) {
			$nama = $key->nama_lengkap;
			$jurusan = $key->jurusan;
			$fakultas = $key->fakultas;
			$institusi = $key->institusi;
			$foto == $key->foto;
 		}
	}
		
?>
<body>
<center><img src="images/logopjb2.png" style="width:150px; height:50px;"></center><br>
<center><h2>Data Diri Anggota Kerja Praktek</h2></center><br>
<div style="float:right;"><img src="<?=base_url()?>uploads/foto_anggota/<?php echo $foto?>" style="width:150px; height:175px; float:right;" /></div><br>
<table style="width:100%;">
  <tr> 
    <td style="width:180px;">Nama</td>
    <td>: <?php echo $nama?> </td>
  </tr><br><br>
  <tr>
    <td>Jurusan</td>
    <td>: <?php echo $jurusan?></td>
  </tr><br><br>
  <tr>
    <td>Fakultas</td>
    <td>: <?php echo $fakultas?></td>
  </tr><br><br>
<tr>
    <td>Sekolah/Univ</td>
    <td>: <?php echo $institusi?></td>
  </tr><br><br>
  <?php
  $dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);
$monthList = array(
	'Jan' => 'Januari',
	'Feb' => 'Februari',
	'Mar' => 'Maret',
	'Apr' => 'April',
	'May' => 'Mei',
	'Jun' => 'Juni',
	'Jul' => 'Juli',
	'Aug' => 'Agustus',
	'Sep' => 'September',
	'Oct' => 'Oktober',
	'Nov' => 'November',
	'Dec' => 'Desember'
);
$tglmsk = explode('-', $tgl_mulai);
$monthmsk = date('M', strtotime($d1['tgl_mulai']));
$tglkeluar = explode('-', $tgl_keluar);
$monthkeluar = date('M', strtotime($d1['tgl_keluar']));
?>
<tr>
    <td>Waktu Pelaksanaan</td>
    <td>: <?php echo $tglmsk[2]?> <?php echo $monthList[$monthmsk]?> <?php echo $tglmsk[0]?> sd <?php echo $tglkeluar[2]?> <?php echo $monthList[$monthkeluar]?> <?php echo $tglkeluar[0]?></td>
  </tr><br><br>
<tr>
<td>Kelebihan</td>
	<?php
	$i = 1;
	foreach ($dataKelebihan as $key) {
		if($i==1){
			echo "<td>: ".$key->kelebihan."</td></tr>";
		}
		else if($i>1){
			echo "<tr><td></td><td>&nbsp;&nbsp;".$key->kelebihan."</td></tr>";
		}
		$i++;
	}
	
	?>
  </tr><br><br>
<tr>
<td>Kelemahan</td>
	<?php
	$i = 1;
	foreach ($dataKelemahan as $key) {
		if($i==1){
			echo "<td>: ".$key->kelemahan."</td></tr>";
		}
		else if($i>1){
			echo "<tr><td></td><td>&nbsp;&nbsp;".$key->kelemahan."</td></tr>";
		}
		$i++;
	}
	
	?>
  </tr><br><br>
<tr>
    <td>Pengalaman Organisasi</td><td>:</td>
    <?php
    if($dataOrganisasi == null){
    	echo '<td> - </td>';
    }
    ?>
  	</tr><br><br>
  	<?php
  	if($dataOrganisasi != null){
  		echo'
		  <tr>
		  <td style="border: 2px solid #C6C6C6;"><center>Nama Organisasi</center></td>
				<td style="border: 2px solid #C6C6C6;"><center>Tahun Organisasi</center></td>
				<td style="border: 2px solid #C6C6C6;"><center>Jabatan</center></td>
				</tr><br><br>';

		foreach ($dataOrganisasi as $key) {
			echo'<tr>
  
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->nama_organisasi.'</center></td>
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->tahun_organisasi.'</center></td>
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->jabatan.'</center></td>

			</tr><br><br>';
		}
  
  	}
  	?>
<tr>
    <td>Pelatihan</td><td>:</td><?php
 <?php
    if($dataTraining == null){
    	echo '<td> - </td>';
    }
    ?>
  	</tr><br><br>
  	<?php
  	if($dataTraining != null){
  		echo'
		  <tr>
		  <td style="border: 2px solid #C6C6C6;"><center>Nama Training</center></td>
				<td style="border: 2px solid #C6C6C6;"><center>Tahun Training</center></td>
				<td style="border: 2px solid #C6C6C6;"><center>Jabatan</center></td>
				</tr><br><br>';

		foreach ($dataTraining as $key) {
			echo'<tr>
  
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->nama_Training.'</center></td>
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->tahun_Training.'</center></td>
			<td style="border: 1px solid #C6C6C6;"><center>'.$key->penanggungjawab.'</center></td>

			</tr><br><br>';
		}
  
  	}
  	?>

	
</table>
</body>
</html>