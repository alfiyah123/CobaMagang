<?php
	include("header.php");
?>
<!--
<div class="carousel slide" id="carousel-791333"  style="margin-top:130px">
	<ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#carousel-791333">
		</li>
		<li data-slide-to="1" data-target="#carousel-791333">
		</li>
		<li data-slide-to="2" data-target="#carousel-791333">
		</li>
		<li data-slide-to="3" data-target="#carousel-791333">
		</li>
		<li data-slide-to="4" data-target="#carousel-791333">
		</li>
		<li data-slide-to="5" data-target="#carousel-791333">
		</li>
		<li data-slide-to="6" data-target="#carousel-791333">
		</li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img alt="" src="<?=base_url()?>User/Home/slider1" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider2" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider3" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider4" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider5" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider6" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="item">
			<img alt="" src="<?=base_url()?>User/Home/slider7" style="width:100%">
			<div class="carousel-caption">
			</div>
		</div>
	</div> <a class="left carousel-control" href="#carousel-791333" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-791333" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
-->
<?php
	if($data != null){
		foreach ($data as $key) {
			$gbr = $key->gambar;
		}
	}
?>
<div id="home" class="home" style="background: url(<?=base_url()?>uploads/background/<?php echo $gbr?>) no-repeat center center fixed;">
  <div class="text-vcenter">
    <i><h3 style="margin-bottom:30px">"Menjadi perusahaan pembangkit tenaga listrik Indonesia<br>
    yang terkemuka dengan standar kelas dunia"</h3></i>
    <button id="lala">CHECK NOW</button>
  </div>
</div>
<div id="full-width">
	<div class="custom-page-content">
		<div class="section-boxed">
			<div class="cols-wrapper cols-2">
				<div class="col">
					<div class="info-box">
						<h1 style="text-align: center;">Informasi</h1>
						<hr style="height:1px">
						<ol style="font-size:15px">
							<li>Aplikasi ini diperuntukkan bagi para pelajar yang masih aktif pada institusinya</li>
							<li>Pendaftaran tidak dipungut biaya <strong>(GRATIS)</strong></li>
							<li>Jika anda belum terdaftar silakan klik link <a href="">Registrasi</a> atau klik link login untuk yang telah terdaftar.</li>
							<li>Proses <a href="">Registrasi</a> harus diselesaikan sampai tahap 8</li>
							<li>Siapkan dokumen kelengkapan seperti Proposal <em><b>(melampirkan curriculum vitae dan Transkrip Nilai)</b></em> dan Foto 3x4 sesuai dengan format yang diminta</li>
							<li>Permintaan Kerja Praktek atau Penelitian <strong>HANYA</strong> melalui aplikasi ini.</li>
							<li>Jika anda tidak bisa login atau password anda lupa, klik link <a href="">Lupa Password</a></li>
						</ol>
					</div>
				</div>
				<div class="col nomargin">
					<div class="info-box">
						<h1 style="text-align: center;">Ketentuan</h1>
						<hr style="height:1px">
						<ol style="font-size:15px">
							<li>Pengajuan Proposal Kerja Praktek/ Penelitian minimal <strong>2 Bulan </strong> sebelum pelaksanaan Kerja Praktek / Penelitian</li>
							<li>Pelaksanan <strong>Kerja Praktek / Penelitian</strong> hanya dilaksanakan per tanggal 1 pada setiap bulannya</li>
							<li>Satu kelompok maksismal terdiri dari 2 orang.</p>
							<li>Pelaksanaan <strong>Kerja Praktek / Penelitian</strong> maksimal selama 2 Bulan</li>
							<li>Informasi penerimaan Kerja Praktek dapat dilihat pada saat <em>Login</em></li>
							<li>Permintaan Kerja Praktek / Penelitian akan diproses maksimal selama 1 bulan</li>
						</ol>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</div>
				<p style="text-align: center;">
				</p>
			</div>
			
			<!--
			<div id="all">
				<img src="<?=base_url()?>User/Home/slider7" alt="latar" style="width: 91.5%; margin-bottom:20px">
			</div>
			<div id="logo">
				<h3>Visi</h3>
				<p>"Ini visi kita ini visi kita ini visi kita ini visi kita"</p>
			</div>
			-->
			<hr>
			<h2 style="text-align: center;">&nbsp;Frequently Asked Questions</h2>
			<p>&nbsp;</p>
			<div class="cols-wrapper cols-2">
				<div class="col">
					<h3>Apakah bisa pelaksanaan Kerja Praktek dimulai di tengah bulan ?</h3>
					<p>Pelaksanaan Kerja Praktek di PT. PJB dimulai per tanggal 1 awal Bulan</p>
					
					<h3>File apa saja yang perlu disiapkan sebelum apply proposal Kerja Praktek ?</h3>
					<p>Proposal, Surat Pengantar dari Universitas, Foto.</p>

					<h3>Selama pelaksanaan Kerja Praktek / Penelitian apakah akan mendapatkan asuransi keselamatan kerja ?</h3>
					<p>PT PJB tidak menyediakan asuransi keselamatan kerja baik untuk peserta Kerja Praktek maupun Penelitian</p>
				</div>
				<div class="col nomargin">
					<h3>Bagaimana pengaturan waktu pelaksanaan Kerja Praktek</h3>
					<p>Untuk pengaturan waktu pelaksanaan Kerja Praktek dilakukan setiap hari senin-jum'at</p>

					<h3>Untuk biaya akomodasi apakah ditanggung oleh pihak PJB</h3>
					<p>Tidak, biaya akomodasi ditanggung oleh pribadi masing-masing</p>
					
					<h3>Fasilitas apa saja yang diberikan PT PJB untuk Kerja Praktek / Penelitian ?</h3>
					<p>Fasilitas untuk anggota <b>Kerja Praktek</b>, PT PJB memberikan fasilitas berupa kupon makan siang. 
					Sedangkan, untuk <b>Penelitian</b> tidak mendapatkan fasilitas tersebut.</p>
				</div>
			</div>
			<p>&nbsp;</p>
		</div>
	</div>
</div> <!-- end main content holder (#content/#full-width) -->
<div class="clear"></div>

<?php
	include("footer.php");
?>