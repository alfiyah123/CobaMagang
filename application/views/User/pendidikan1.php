<div id="tahap3a">
	<div class="row breadcrumbs margin-bottom-40" style="margin-top:80px">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>Tahap 5 (Anggota 2)</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	            <div class="portlet box blue">
	            	<div class="portlet-title">
	            		<div class="caption">Input Profil</div>
	            	</div>
	            	<div class="portlet-body form">
						<form id="formPendidikan1" action="<?=base_url()?>User/Register/simpan_data_personal1" accept-charset="utf-8" class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-3">Jenjang Pendidikan</label>
									<div class="control-label col-md-8">
										<div class="col-md-3" style="text-align:left">
											<input type="radio" name="jenjang_pendidikan1" value="SMA/SMK" checked> SMA/SMK
										</div>
										<div class="col-md-5" style="text-align:left">
											<input type="radio" name="jenjang_pendidikan1" value="Universitas/Perguruan Tinggi"> Universitas/Perguruan Tinggi
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Institusi</label>
									<div class="col-md-9">
										<input type="text" name="institusi1" id="institusi1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_institusi1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan nama institusi terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Nomor Induk Siswa/Mahasiswa</label>
									<div class="col-md-9">
										<input type="text" name="nomor_induk1" id="nomor_induk1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_nomor_induk1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan nomor induk mahasiswa terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group" id="gFakultas1">
									<label class="control-label col-md-3">Fakultas</label>
									<div class="col-md-9">
										<input type="text" name="fakultas1" id="fakultas1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_fakultas1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan fakultas terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Jurusan</label>
									<div class="col-md-9">
										<input type="text" name="jurusan1" id="jurusan1" class="form-control">
										
									</div>
								</div>
								<div class="form-group" id='pesan_jurusan1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan jurusan terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Konsentrasi Jurusan</label>
									<div class="col-md-9">
										<input type="text" name="konsentrasi_jurusan1" id="konsentrasi_jurusan1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_konsentrasi_jurusan1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan konsentrasi jurusan terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group" id="gSemester1">
									<label class="control-label col-md-3">Semester</label>
									<div class="col-md-9">
										<input type="text" name="semester1" id="semester1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_semester1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan semester terlebih dahulu</label>
										</div>
									</div>
								</div>			        	
								<div class="form-group">
									<label class="control-label col-md-3">No. Telepon Institusi</label>
									<div class="col-md-9">
										<input type="text" name="no_telp_institusi1" id="no_telp_institusi1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_no_telp_institusi1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan no. telp institusi terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Alamat Institusi</label>
									<div class="col-md-9">
										<input type="text" name="alamat_institusi1" id="alamat_institusi1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_alamat_institusi1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan alamat institusi terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Nama Guru/Dosen Pembimbing</label>
									<div class="col-md-9">
										<input type="text" name="nama_pembimbing1" id="nama_pembimbing1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_nama_pembimbing1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan nama Guru/Dosen pembimbing terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">No Telp Guru/Dosen Pembimbing</label>
									<div class="col-md-9">
										<input type="text" name="no_telp_pembimbing1" id="no_telp_pembimbing1" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_no_telp_pembimbing1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan no. telp Guru/Dosen pembimbing terlebih dahulu</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-offset-3 col-md-3">
											<button id="kembaliPendidikan1" class="btn green">Back</button> 
										</div>
										<div class="col-md-offset-3 col-md-3">
											<button id="simpanPendidikan1" type="submit" class="btn green">Next</button> 
										</div>
									</div>
								</div>
							</div>
				    	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>