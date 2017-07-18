<div id="tahap3">
	<div class="row breadcrumbs margin-bottom-40" style="margin-top:80px">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>Tahap 5 (Anggota 1)</h1>
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
						<form id="formPendidikan" action="<?=base_url()?>User/Register/simpan_data_personal" accept-charset="utf-8" class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-3">Jenjang Pendidikan</label>
									<div class="control-label col-md-8">
										<div class="col-md-3" style="text-align:left">
											<input type="radio" name="jenjang_pendidikan" value="SMA/SMK" checked> SMA/SMK
										</div>
										<div class="col-md-5" style="text-align:left">
											<input type="radio" name="jenjang_pendidikan" value="Universitas/Perguruan Tinggi"> Universitas/Perguruan Tinggi
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Institusi</label>
									<div class="col-md-9">
										<input type="text" name="institusi" id="institusi" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_institusi'>
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
										<input type="text" name="nomor_induk" id="nomor_induk" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_nomor_induk'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan nomor induk mahasiswa terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group" id="gFakultas" >
									<label class="control-label col-md-3">Fakultas</label>
									<div class="col-md-9">
										<input type="text" name="fakultas" id="fakultas"  class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_fakultas'>
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
										<input type="text" name="jurusan" id="jurusan" class="form-control">
										
									</div>
								</div>
								<div class="form-group" id='pesan_jurusan'>
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
										<input type="text" name="konsentrasi_jurusan" id="konsentrasi_jurusan" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_konsentrasi_jurusan'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan konsentrasi jurusan terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group"  id="gSemester" >
									<label class="control-label col-md-3">Semester</label>
									<div class="col-md-9">
										<input type="text" name="semester"  id="semester" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_semester'>
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
										<input type="text" name="no_telp_institusi" id="no_telp_institusi" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_no_telp_institusi'>
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
										<input type="text" name="alamat_institusi" id="alamat_institusi" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_alamat_institusi'>
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
										<input type="text" name="nama_pembimbing" id="nama_pembimbing" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_nama_pembimbing'>
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
										<input type="text" name="no_telp_pembimbing" id="no_telp_pembimbing" class="form-control">
									</div>
								</div>
								<div class="form-group" id='pesan_no_telp_pembimbing'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan no. telp pembimbing terlebih dahulu</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-offset-3 col-md-3">
											<button id="kembaliPendidikan" class="btn green">Back</button> 
										</div>
										<div class="col-md-offset-3 col-md-3">
											<button id="simpanPendidikan" type="submit" class="btn green">Next</button> 
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