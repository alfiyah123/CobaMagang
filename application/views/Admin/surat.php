<?php
	header("Content-Type: application/vnd.ms-word;name='word'");
	header("Content-disposition: attachment; filename=form_konfirmasi.doc");
?>

<style>
	@page Section1{
		size : 8.27in 11.69in;
		margin : 1cm 2cm 1cm 2cm;
		mso-page-orientation : potrait;
	}

	div.Section1{
		page:Section1;
	}
</style>

<?php
	$nama = array();

	for($i = 0; $i<count($data1); $i++){
		if($i == 0){
			foreach ($data1 as $key) {
				$nama[$i] = $key->nama_lengkap;
				break;
			}
		}else{
			foreach ($data1 as $key) {
				$nama[$i] = $key->nama_lengkap;
			}
		}
	}

	if(count($nama) == 1){
		$namaAnggota = $nama[0];
	}else{
		$namaAnggota = $nama[0] .'<br>'. $nama[1];
	}

	foreach ($data1 as $key) {
		$institusi = $key->institusi;
		$alamat_institusi = $key->alamat_institusi;
		$jurusan = $key->jurusan;
		$fakultas = $key->fakultas;
	}

	foreach ($data as $key) {
		$tipe = $key->tipe;
		$tgl_masuk = $key->tgl_masuk;
		$tgl_mulai = $key->tgl_mulai;
		$tgl_keluar = $key->tgl_keluar;
		$nomor_surat = $key->nomor_surat;
		$perihal_surat = $key->perihal_surat;
		$tgl_surat = $key->tgl_surat;
		$unit = $key->unit;
		$nomor = $key->no_surat_konfirmasi;
		$nomor_bulan = $key->bulan_surat_konfirmasi;
		$nomor_tahun = $key->tahun_surat_konfirmasi;
	}

	if($nomor_bulan < 10){
		$nomor_bulan = '0'.$nomor_bulan;
	}

	$bulanIndo = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	$tahun = substr($tgl_surat, 0,4);
	$bulan = substr($tgl_surat, 5,2);
	$tgl = substr($tgl_surat, 8,2);
	$formatMasuk = $tgl.' '.$bulanIndo[(int)$bulan-1].' '.$tahun;

	$tahun1 = substr($tgl_mulai, 0,4);
	$bulan1 = substr($tgl_mulai, 5,2);
	$tgl1 = substr($tgl_mulai, 8,2);
	$formatMulai = $tgl1.' '.$bulanIndo[(int)$bulan1-1].' '.$tahun1;

	$tahun2 = substr($tgl_keluar, 0,4);
	$bulan2 = substr($tgl_keluar, 5,2);
	$tgl2 = substr($tgl_keluar, 8,2);
	$formatKeluar = $tgl2.' '.$bulanIndo[(int)$bulan2-1].' '.$tahun2;
?>
<div class="Section1">
	<div id="logo" style="text-align:center">
		<img src="<?=base_url()?>uploads/logo_surat.png">
		
		<table>
			<tr>
				<td>
					<?php
						echo 
			strtoupper("<p><b>formulir konfirmasi program ".$tipe."</b></p>");
					?>
				</td>
			</tr>
			<tr>
				<td style="text-align:center">
					<?php
						echo
			'<p style="font-family:Times New Roman; font-size:normal; line-height: 0px;">
			Nomor:'.$nomor.'/KP/'.$nomor_bulan.'/'.$nomor_tahun.'/PJB</p>';
					?>
				</td>
			</tr>
			
			
		</table>
	
	</div>
	<div id="isi">
		<table>
			<tr>
				<td colspan="3">
					<br>				
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p style="font-family:Times New Roman; font-size:normal;">Menunjuk kepada surat (terlampir)</p>
				</t>
			</tr>
			<tr style="font-family:Times New Roman; font-size:normal">
	            <td style="width:100px">Dari</td>
				<td>:</td>
	            <td><?php echo $institusi?></td>
	        </tr>
	        <tr style="font-family:Times New Roman; font-size:normal">
	            <td style="width:100px">Nomor</td>
				<td>:</td>
	            <td><?php echo $nomor_surat?></td>
	        </tr>
	         <tr style="font-family:Times New Roman; font-size:normal">
	            <td style="width:100px">Tanggal</td>
				<td>:</td>
	            <td><?php echo $formatMasuk?></td>
	        </tr>
	         <tr style="font-family:Times New Roman; font-size:normal">
	            <td style="width:100px">Perihal</td>
				<td>:</td>
	            <td><?php echo $perihal_surat?></td>
	        </tr>
        </table>
	</div>
	<div id="isi2">
		<p style="font-family:Times New Roman; font-size:normal;  margin-bottom:-100px">Dengan ini disampaikan hal-hal sebagai berikut :</p>
		<ol style="margin-left: 0px; margin-top:-100px">
			<li>
				<p style="font-family:Times New Roman; margin-left: 20px; font-size:normal;  margin-bottom:-100px">Menerangkan bahwa yang disebut  dibawah ini, yaitu :</p>
				<table style="margin-left: 20px;">
					<?php
						echo
							'<tr style="font-family:Times New Roman; font-size:normal">
					            <td style="width:150px">Nama</td>
								<td>:</td>
					            <td>'.$nama[0].'</td>
					        </tr>';
						if(count($nama) == 2){
							echo
							'<tr style="font-family:Times New Roman; font-size:normal">
					            <td style="width:150px"></td>
								<td></td>
					            <td>'.$nama[1].'</td>
					        </tr>';
				        }
			        ?>
			        <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Jurusan</td>
						<td>:</td>
			            <td><?php echo $jurusan?></td>
			        </tr>
			         <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Fakultas</td>
						<td>:</td>
			            <td><?php echo $fakultas?></td>
			        </tr>
			         <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Sekolah / Universitas</td>
						<td>:</td>
			            <td><?php echo $institusi?></td>
			        </tr>
			        <tr>
			        	<td  colspan="3">
			        		 <?php
			        		 echo '';
					echo '<p style="font-family:Times New Roman; font-size:normal;  margin-bottom:-100px">Ingin melaksanakan '.$tipe.' di PT.Pembangkit Jawa-Bali '.$unit.'</>';
				?>
			        	</td>
			        </tr>
		        </table>
		       
			</li>
			<li>
				<?php
					echo '<p style="font-family:Times New Roman;margin-left: 20px; font-size:normal; margin-left: 20px; margin-bottom:-100px">Sesuai dengan Jurusan maksud '.$tipe.' kegiatan '.$tipe.' tersebut diusulkan dilaksanakan di :</p>';
				?>
				<table style="margin-left : 20px">
				 	<tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Subdit / Bidang</td>
						<td>:</td>
			            <td></td>
			        </tr>
			         <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Waktu</td>
						<td>:</td>
			            <td><?php echo $formatMulai.' s.d '.$formatKeluar?></td>
			        </tr>
				</table>
			</li>
			<li>
				<?php
					echo '<p style="font-family:Times New Roman; margin-left: 20px;font-size:normal; margin-left: 20px; margin-bottom:-100px">Kesediaan menerima siswa untuk melaksanakan '.$tipe.' di Subdit Bidang Saudara</p>';
				?>
				<table style="margin-left : 20px;">
				 	<tr style="font-family:Times New Roman; font-size:normal; ">
			            <td style="width:150px; border: 1.5px solid black;">Bersedia</td>
						<td style="width:150px; border-right: 1.5px solid black; border-top: 1.5px solid black; border-bottom: 1.5px solid black;">Tidak Bersedia</td>
			        </tr>
			        <tr>
			        	<td colspan="3">
			        		<p style="font-family:Times New Roman; font-size:12px; line-height: 0px;">*) Coret yang tidak perlu</p>
			        	</td>
			        </tr>
				</table>
			</li>
			<li>
				<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px; margin-bottom:-100px">Menunjuk</p>
				<table style="margin-left : 20px">
				 	<tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Nama</td>
						<td>:</td>
			            <td><br>....................................................................................................</td>
			        </tr>
			         <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">NID</td>
						<td>:</td>
			            <td><br>....................................................................................................</td>
			        </tr>
			        <tr style="font-family:Times New Roman; font-size:normal">
			            <td style="width:150px">Jabatan</td>
						<td>:</td>
			            <td><br>....................................................................................................</td>
			        </tr>
			        <tr>
			        	<td colspan="3">
			        		<?php
			        		echo '';
					echo
					'<p style="font-family:Times New Roman; font-size:normal; line-height: 0px;">Sebagai pembimbing siswa selama melakukan kegiatan '.$tipe.' di Divisi Bidang</p>'
				?>	
			        	</td>
			        </tr>
				</table>		
			</li>
			<li>
					<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px;line-height: 0px;">Konfirmasi kesediaan agar segera disampaikan kembali kepada kami, selambatnya 1 (satu) minggu setelah formulir ini diterima</p>
			</li>
		</ol>
	</div>
	<div id="isi4">
		<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px; margin-bottom:-100px">Surabaya,</p>
		<div id="kolom" style="text-align:center">
			<table>
				<tr>
					<td style="width:300px; text-align:center">
						<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px;">KABID KCSR</p>
					</td>
					<td style="width:300px; text-align:center">
						<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px;">MCSR</p>
					</td>
				</tr>
				<tr>
					<td style="width:300px; text-align:center">
						<br><br><br><br><br>				
					</td>
					<td style="width:300px; text-align:center">
						<br><br><br><br><br>				
					</td>
				</tr>
				<tr>
					<td style="width:300px; text-align:center">
						<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px;">DINA PERMATA SHARI</p>
					</td>
					<td style="width:300px; text-align:center">
						<p style="font-family:Times New Roman; font-size:normal; margin-left: 20px;">SONDANG OINIKE L</p>
					</td>
				</tr>
			</table>
		</div>
		</div>
			
                