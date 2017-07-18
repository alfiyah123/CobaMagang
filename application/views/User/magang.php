<div id="tahap1">
	<div class="row breadcrumbs margin-bottom-40" style="margin-top:80px">
	    <div class="container">
	    	<div class="col-md-4 col-sm-4"><h1>Tahap 1 - 3 </h1>
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
						<form accept-charset="utf-8" class="form-horizontal" id="formUtama">
							<div class="form-body">
								<div class="form-group">    
									<label class="control-label col-md-3">Tipe </label>
									<div class="control-label col-md-8">
										<div class="col-md-3" style="text-align:left">
											<input type="radio" name="tipe" value="Kerja Praktek" checked> Kerja Praktek
										</div>
										<div class="col-md-3" style="text-align:left">
											<input type="radio" name="tipe" value="Penelitian" > Penelitian
										</div>
									</div>
								</div>
								<div class="form-group" id='pesan_tipe'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan tipe registrasi terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Jumlah Anggota</label>
									<div class="control-label col-md-8">
										<select class="form-control" name="anggota" id="anggota">
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
								<div class="form-group" id='pesan_anggota'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan jumlah anggota terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Email</label>
									<div class="col-md-9">
										<input type="text" name="email" class="form-control" id="email">
									</div>
								</div>
								<div class="form-group" id='pesan_email1'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan email terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group" id='pesan_email'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<img  src="<?=base_url()?>User/Home/load_loading">
										</div>
									</div>
								</div>
								<div class="form-group" id='pesan_email_gagal'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label>Mohon maaf email sudah terdaftar, silakan menggunakan email yang lain</label>
										</div>
									</div>
								</div>
								<div class="form-group" id='pesan_email_sukses'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<img  style="width:20px" src="<?=base_url()?>User/Home/load_ok">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Password (untuk masuk kembali)</label>
									<div class="col-md-9">
										<input type="password" name="password" class="form-control" id="password">
									</div>
								</div>
								<div class="form-group" id='pesan_password'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan password terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Unit Penempatan Kerja Praktek / Penelitian</label>
									<div class="col-md-9">
										<select class="form-control" name="unit" id="unit">
											<option value="">Pilih Unit</option>
											<option value="Kantor Pusat">Kantor Pusat</option>
											<option value="UP Muara Tawar" >UP Muara Tawar</option>
											<option value="UP Muara Karang" >UP Muara Karang</option>
											<option value="Badan Pengelola Waduk Cirata" >Badan Pengelola Waduk Cirata</option>
											<option value="UP Cirata" >UP Cirata</option>
											<option value="UP Gresik" >UP Gresik</option>
											<option value="UP Brantas" >UP Brantas</option>
											<option value="UP Paiton" >UP Paiton</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Jurusan</label>
									<div class="col-md-9">
										<select class="form-control" name="jrsan" id="jrsan">
											<option value="">Pilih Jurusan</option>
											<option class="pusat" value="Teknik Informatika">Teknik Informatika</option>
											<option class="pusat" value="Teknik Komputer">Teknik Komputer</option>
											<option class="pusat" value="Teknik Mesin">Teknik Mesin</option>
											<option class="unit1" value="Teknik Sipil">Teknik Sipil</option>
											<option class="unit1" value="Teknik Informasi">Teknik Informasi</option>
										</select>
									</div>
								</div>
								<div class="form-group" id='pesan_unit'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan unit penempatan Kerja Praktek / penelitian terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Tanggal Registrasi</label>
									<div class="col-md-9">
										<input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" disabled>
									</div>
								</div>
								<div class="form-group" id='pesan_tgl_masuk'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan jumlah anggota terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Tanggal Permintaan Kerja Praktek / penelitian</label>
									<div class="col-md-3">
										<input type="month" name="tgl_mulai1" id="tgl_mulai1" class="form-control">
									</div>
									<label class="control-label col-md-4" style="font-size:11.5px; color:green">Tanggal Permintaan Kerja Praktek / penelitian hanya untuk tanggal 1</label>
								</div>
								<div class="form-group" id='pesan_tgl_mulai'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan batas awal tanggal permintaan Kerja Praktek terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Sampai Tanggal</label>
										<div class="col-md-9">
											<input type="date" name="tgl_keluar" id="tgl_keluar" class="form-control" max="">
										</div>
								</div>
								<div class="form-group" id='pesan_tgl_keluar'>
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<div>
											<label style="color:red; font-size:10px">Masukkan batas akhir tanggal permintaan Kerja Praktek terlebih dahulu</label>
										</div>
									</div>
								</div>
								<div id="for_research">
									<div class="form-group">
										<label class="control-label col-md-3">Program</label>
											<div class="col-md-9">
												<input type="text" name="program" id="program" class="form-control">
											</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Judul Penulisan Ilmiah</label>
											<div class="col-md-9">
												<input type="text" name="judul_penulisan" id="judul_penulisan" class="form-control">
											</div>
									</div>
								</div>
							</div>
							<div class="form-actions fluid">
								<div class="row" >
									<div class="col-md-12">
										<div class="col-md-offset-3 col-md-3" >
											<button id="simpanUtama" type="submit" class="btn green">Next</button> 
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