	<script type="text/javascript" src="../../asset/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../asset/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../asset/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../asset/js/mdb.min.js"></script>

    <script type="text/javascript" src="../../asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../asset/js/scripts.js"></script>
	<script type="text/javascript" src="../../asset/js/wp-embed.min.js"></script>
	<script type="text/javascript" src="../../asset/js/main.js"></script>
	<script type="text/javascript" src="../../asset/js/comment-reply.min.js"></script>

	<script type="text/javascript">var PEXETO = PEXETO || {};PEXETO.lightboxOptions = {"theme":"pp_default","animation_speed":"normal","overlay_gallery":false,"allow_resize":true};PEXETO.disableRightClick=false;PEXETO.stickyHeader=true;jQuery(document).ready(function($){
					PEXETO.init.initSite();$(".pexeto-contact-form").each(function(){
			$(this).pexetoContactForm({"wrongCaptchaText":"The text you have entered did not match the text on the image. Please try again.","failText":"An error occurred. Message not sent.","validationErrorText":"Please complete all the fields correctly","messageSentText":"Message sent"});
		});});</script>

    	<div id="footer" class="center">
		    <div class="cols-wrapper footer-widgets section-boxed cols-4">
				<div class="col">
					<div class="footer-box widget_nav_menu" id="nav_menu-2">
						<h4 class="title">Hubungi Kami :</h4>
						<div class="menu-footer-about-container">
							<ul id="menu-footer-about" class="menu">
								<li id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293">Jl. Ketintang Baru No. 11, Surabaya</li>
								<li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291"> Jawa Timur, Indonesia (60231)</li>
								<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292">Telp. (+62-31) 8283180, (+62-31) 8283183</li>
								<li id="menu-item-294" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-294">E-Mail. info@ptpjb.com</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="footer-box widget_nav_menu" id="nav_menu-3">
						<h4 class="title">SUSTAINABILITY DEVELOPMENT</h4>
						<div class="menu-footer-participate-container">
							<ul id="menu-footer-participate" class="menu">
								<li id="menu-item-296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296"><a title="XL Online Learning Login" href="http://www.ptpjb.com/id/component/content/120-berita-media/11032-lingkungan-dan-k3.html?Itemid=800">Lingkungan K3</a></li>
								<li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a title="Program News &amp; CSR Events" href="http://www.ptpjb.com/id/component/content/120-berita-media/1973-kebijakan-csr.html?Itemid=800">Kebijakan CSR</a></li>
								<li id="menu-item-298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-298"><a title="Corporate (CSR) Partnerships" href="http://www.ptpjb.com/id/component/content/120-berita-media/1688-5s.html?Itemid=800">5 S</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="footer-box widget_nav_menu" id="nav_menu-4">
						<h4 class="title">Connect</h4>
						<div class="menu-footer-connect-container">
							<ul id="menu-footer-connect" class="menu">
								<li id="menu-item-302" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302"><a title="XL Future Leaders on Facebook" target="_blank" href="http://www.facebook.com/xlfutureleaders">Facebook</a></li>
								<li id="menu-item-303" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-303"><a title="XL Future Leaders on Twitter" target="_blank" href="http://www.twitter.com/xlfutureleaders">Twitter</a></li>
								<li id="menu-item-1496" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1496"><a href="https://www.instagram.com/xlfutureleaders/">Instagram</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="section-boxed"></div>
				</div>
			</div>
		</div>

	</div>

</body>

<script>
	$(document).ready(function() {
		var jmlAnggota;
		var data;
		var data1;
		var data2;
		var data3;
		var data4;
		var data5;
		var data6;
		var data7;
		var data8;
		var j;
		var vals;
	   	var year;
	   	var month;
	   	var day;
	   	var nomor = 2;

	   	// for(var i = 2; i<10; i++){
	   	// 	$('#'+i).hide();
	   	// }
	   	var cc = 1;
		$('#jml_anggota').hide();
		$('#lblAnggota').hide();
		$('#for_research').hide();
		$('#tahap'+cc).hide();
		$('#tahap3').hide();
		$('#tahap4').hide();
		$('#tahap5').hide();
		$('#tahap2a').hide();
		$('#tahap3a').hide();
		$('#tahap4a').hide();
		$('#tahap5a').hide();

		$('.pusat').hide();
		$('.unit1').hide();
		$('#gFakultas').hide('fast');
		$('#gSemester').hide('fast');
		$('#gFakultas1').hide('fast');
		$('#gSemester1').hide('fast');


		$('#pesan_email').hide();
		$('#pesan_email_gagal').hide();
		$('#pesan_email_sukses').hide();
		$('#pesan_email1').hide();
		$('#pesan_tipe').hide();
		$('#pesan_password').hide();
		$('#pesan_unit').hide();
		$('#pesan_tgl_mulai').hide();
		$('#pesan_tgl_keluar').hide();
		$('#pesan_tgl_masuk').hide();
		$('#pesan_anggota').hide();

		$('#pesan_nama').hide();
		$('#pesan_tmpt_lahir').hide();
		$('#pesan_tgl_lahir').hide();
		$('#pesan_alamat_rumah').hide();
		$('#pesan_kota').hide();
		$('#pesan_no_telp_rumah').hide();
		$('#pesan_no_hp').hide();
		$('#pesan_agama').hide();
		$('#pesan_hobi').hide();

		$('#pesan_institusi').hide();
		$('#pesan_nomor_induk').hide();
		$('#pesan_jurusan').hide();
		$('#pesan_semester').hide();
		$('#pesan_no_telp_institusi').hide();
		$('#pesan_alamat_institusi').hide();
		$('#pesan_nama_pembimbing').hide();
		$('#pesan_no_telp_pembimbing').hide();
		$('#pesan_fakultas').hide();
		$('#pesan_konsentrasi_jurusan').hide();

		$('#pesan_nama1').hide();
		$('#pesan_tmpt_lahir1').hide();
		$('#pesan_tgl_lahir1').hide();
		$('#pesan_alamat_rumah1').hide();
		$('#pesan_kota1').hide();
		$('#pesan_no_telp_rumah1').hide();
		$('#pesan_no_hp1').hide();
		$('#pesan_agama1').hide();
		$('#pesan_hobi1').hide();

		$('#pesan_institusi1').hide();
		$('#pesan_nomor_induk1').hide();
		$('#pesan_jurusan1').hide();
		$('#pesan_semester1').hide();
		$('#pesan_no_telp_institusi1').hide();
		$('#pesan_alamat_institusi1').hide();
		$('#pesan_nama_pembimbing1').hide();
		$('#pesan_no_telp_pembimbing1').hide();
		$('#pesan_fakultas1').hide();
		$('#pesan_konsentrasi_jurusan1').hide();


		$('#terima').hide();
		$('#tolak').hide();

		$('#pesan_kelebihan1').hide();
		$('#pesan_kelebihan2').hide();
		$('#pesan_kelebihan3').hide();
		$('#pesan_kelemahan1').hide();
		$('#pesan_kelemahan2').hide();
		$('#pesan_kelemahan3').hide();

		$('#pesan_kelebihan11').hide();
		$('#pesan_kelebihan21').hide();
		$('#pesan_kelebihan31').hide();
		$('#pesan_kelemahan11').hide();
		$('#pesan_kelemahan21').hide();
		$('#pesan_kelemahan31').hide();
		
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!

		var yyyy = today.getFullYear();
		if(dd<10){
		    dd='0'+dd
		} 
		if(mm<10){
		    mm='0'+mm
		} 
		var today = yyyy+ '-' +mm+ '-' +dd;

		$('#tgl_masuk').val(today);

		$('input[name=tipe]').change(function(){
		    if((this.value) == 'Penelitian'){
		        $('#for_research').show('slow');
		    }else{
		       	$('#for_research').hide('slow');
		    }
		});

		$('input[name=jenjang_pendidikan]').change(function(){
		    if((this.value) == 'Universitas/Perguruan Tinggi'){
		        $('#gFakultas').show('slow');
				$('#gSemester').show('slow');
		    }else{
		       	$('#gFakultas').hide('slow');
				$('#gSemester').hide('slow');
		    }
		});

		$('input[name=jenjang_pendidikan1]').change(function(){
		    if((this.value) == 'Universitas/Perguruan Tinggi'){
		        $('#gFakultas1').show('slow');
				$('#gSemester1').show('slow');
		    }else{
		       	$('#gFakultas1').hide('slow');
				$('#gSemester1').hide('slow');
		    }
		});
	

		$('#email').focus(function(){
			$('#pesan_email1').hide();
			$('#pesan_email_gagal').hide();
			$('#pesan_email_sukses').hide();
			$('#pesan_email').show('slow');
		});

		$('#password').focus(function(){
			var nilai_email = $('#email').val();
			if(nilai_email == ''){
				$('#pesan_email').hide();
				$('#pesan_email1').fadeIn('slow');
			}else{				
				$.ajax({
					type:'POST',
					url: '<?=base_url()?>User/Register/cek_email',
					data: "email="+nilai_email,
					success: function(msg){
						$('#pesan_email').hide();
						//karna di server pembatas setiap data adalah |
						//maka kita split dan akan membentuk array
						var hasil = msg;
							//masukkan ke masing-masing textfield
						if(hasil == 0){
						 	$('#pesan_email_gagal').fadeIn('slow');
						}else{
							$('#pesan_email_sukses').fadeIn('slow');
						}
					},
					error: function(){
						alert('error');
					}
				});
			}

			return false;
		});

		$( "#tgl_mulai1" ).change(function(e) {
		   vals = e.target.value.split('-');
		   year = vals[0];
		   month = vals[1];

		   month = parseInt(month) + 1;

		   if(month == 13){
		   		month = 1;
		   		year = parseInt(year) + 1;
		   }

		   if(month == 14){
		   		month = 2;
		   		year = parseInt(year) + 1;
		   }

		   if(month < 10){
		   		month = '0' + month;
		   }

		   if(year%4 == 0){
		   		if(month == '02'){
		   			day = '29';
		   		}else if(month == '07' || month == '01' || month == '03' || month == '05' || month == '08' || month == '10' || month == '12'){
			   		day = '31';
			   	}else{
			   		day = '30';
			   	}
		   }else{
			   if(month == '02'){
			   		day = '28';
			   }else if(month == '07' || month == '01' || month == '03' || month == '05' || month == '08' || month == '10' || month == '12'){
			   		day = '31';
			   }else{
			   		day = '30';
			   }
			}

		   var maks = year +'-'+ month +'-'+ day;
		   document.getElementById("tgl_keluar").setAttribute("max", maks);
		});
		

		$('#unit').change(function(){
			$('.pusat').hide();
			$('.unit1').hide();

			if($("#unit").val() == 'Kantor Pusat'){
				$('.pusat').show();
			}else{
				$('.unit1').show();
			}
		})

		$('#simpanUtama').click(function()
		{	
			$('#pesan_email1').hide();
			$('#pesan_tipe').hide();
			$('#pesan_password').hide();
			$('#pesan_unit').hide();
			$('#pesan_tgl_mulai').hide();
			$('#pesan_tgl_keluar').hide();
			$('#pesan_tgl_masuk').hide();
			$('#pesan_anggota').hide();

			// $('#'+(nomor-1)).hide();
			// $('#'+nomor).show();
			// nomor++;

			if($('input[name=tipe]').val() == ''){
				$('#pesan_tipe'),fadeIn('slow');
			}else if($('#anggota').val() == ''){
				$('#pesan_anggota').fadeIn('slow');
			}else if($('#email').val() == ''){
				$('#pesan_email1').fadeIn('slow');
			}else if($('#password').val() == ''){
				$('#pesan_password').fadeIn('slow');
			}else if($('#unit').val() == ''){
				$('#pesan_unit').fadeIn('slow');
			}else if($('#tgl_mulai').val() == ''){
				$('#pesan_tgl_mulai').fadeIn('slow');
			}else if($('#tgl_keluar').val() == ''){
				$('#pesan_tgl_keluar').fadeIn('slow');
			}else{

				var tgl_mulai = $('#tgl_mulai1').val() + '-01';

				data = $("#formUtama").serialize() + '&tgl_masuk='+ $('#tgl_masuk').val() + '&tgl_mulai='+ tgl_mulai;

				jmlAnggota = $('#anggota').val();
				j = jmlAnggota;

				/**
				$.ajax({
					type : 'POST',
					url  : $('#formUtama').attr("action"),
					data : data,
					success :  function()
					   {
					   alert("success");						
					   $("#tahap1").hide(function()
							{
								$('html, body').animate({scrollTop:0}, 'normal');
								$('<h2 class="card-title" id="juduul1" >Tahap 2 (Anggota '+ i +')</h2>').show('slow').appendTo('#judul2');
								$('<h2 class="card-title" id="juduul2" >Tahap 2 (Anggota '+ i +')</h2>').show('slow').appendTo('#judul3');
								$('<h2 class="card-title" id="juduul3" >Tahap 2 (Anggota '+ i +')</h2>').show('slow').appendTo('#judul4');
								i++;
								$('#tahap2').show('slow');
							});		
					   },
					error : function(){
						alert("Fail");
					}
					*/
				   $("#tahap1").fadeOut(function()
						{
							$('html, body').animate({scrollTop:0}, 'normal');
							$('#tahap2').fadeIn('slow');
						});	


			}
		
			
	
			return false;
		});


		$('#simpanPersonal').click(function()
		{	

			$('#pesan_nama').hide();
			$('#pesan_tmpt_lahir').hide();
			$('#pesan_tgl_lahir').hide();
			$('#pesan_alamat_rumah').hide();
			$('#pesan_kota').hide();
			$('#pesan_no_telp_rumah').hide();
			$('#pesan_no_hp').hide();
			$('#pesan_agama').hide();
			$('#pesan_hobi').hide();

			if($('#nama').val() == ''){
				$('#pesan_nama').fadeIn('slow');
			}else if($('#tmpt_lahir').val() == ''){
				$('#pesan_tmpt_lahir').fadeIn('slow');
			}else if($('#tgl_lahir').val() == ''){
				$('#pesan_tgl_lahir').fadeIn('slow');
			}else if($('#alamat_rumah').val() == ''){
				$('#pesan_alamat_rumah').fadeIn('slow');
			}else if($('#kota').val() == ''){
				$('#pesan_kota').fadeIn('slow');
			}else if($('#no_telp_rumah').val() == ''){
				$('#pesan_no_telp_rumah').fadeIn('slow');
			}else if($('#no_hp').val() == ''){
				$('#pesan_no_hp').fadeIn('slow');
			}else if($('#agama').val() == ''){
				$('#pesan_agama').fadeIn('slow');
			}else if($('#hobi').val() == ''){
				$('#pesan_hobi').fadeIn('slow');
			}else{
			
				data1 =data + '&' + $("#formPersonal").serialize();
			
			   $("#tahap2").fadeOut(function()
				{
					$('html, body').animate({scrollTop:0}, 'normal');
					$('#tahap3').fadeIn('slow');
				});
			}

			return false;
		});

		$("#simpanOrganisasi1").click(function()
			{
				data3 = data7 + '&' +$('#formOrganisasi').serialize();

				if(j != 1){
					$("#tahap4").fadeOut(function(){
						$('html, body').animate({scrollTop:0}, 'normal');
						if(jmlAnggota != '1'){
							$('#tahap2a').fadeIn('slow');
						}else{
							alert("Pengisian Berhasil");
						}
					});
				}else{
					$.ajax({
						type : 'POST',
						url	 : $('#formPendidikan').attr("action"),
						data : data3,
						success : function(){
								window.location = 'uploadSuratPengantar'
						},
						error :function(){
							window.location = 'uploadSuratPengantar'
							alert("gagal");
						} 
					});
				}

				return false;
			});

		$('#simpanPendidikan').click(function()
		{	

			$('#pesan_institusi').hide();
			$('#pesan_nomor_induk').hide();
			$('#pesan_jurusan').hide();
			$('#pesan_semester').hide();
			$('#pesan_no_telp_institusi').hide();
			$('#pesan_alamat_institusi').hide();
			$('#pesan_nama_pembimbing').hide();
			$('#pesan_no_telp_pembimbing').hide();
			$('#pesan_fakultas').hide();
			$('#pesan_konsentrasi_jurusan').hide();

			if($('#institusi').val() == ''){
				$('#pesan_institusi').fadeIn('slow');
			}else if($('#nomor_induk').val() == ''){
				$('#pesan_nomor_induk').fadeIn('slow');
			//}else if($('#fakultas').val() == '' && $('#gFakultas').hide() == false){
			//	$('#pesan_fakultas').fadeIn('slow');
			}else if($('#jurusan').val() == ''){
				$('#pesan_jurusan').fadeIn('slow');
			}else if($('#konsentrasi_jurusan').val() == ''){
				$('#pesan_konsentrasi_jurusan').fadeIn('slow');
			//}else if($('#semester').val() == '' && $('#gSemester').hide() == false){
			//	$('#pesan_semester').fadeIn('slow');
			}else if($('#no_telp_institusi').val() == ''){
				$('#pesan_no_telp_institusi').fadeIn('slow');
			}else if($('#alamat_institusi').val() == ''){
				$('#pesan_alamat_institusi').fadeIn('slow');
			}else if($('#nama_pembimbing').val() == ''){
				$('#pesan_nama_pembimbing').fadeIn('slow');
			}else if($('#no_telp_pembimbing').val() == ''){
				$('#pesan_no_telp_pembimbing').fadeIn('slow');
			}else{
		
			data2 =  data1 + '&' +$("#formPendidikan").serialize();

			$("#tahap3").fadeOut(function()
			{
				$('html, body').animate({scrollTop:0}, 'normal');
				$('#tahap5').fadeIn('slow');
			});	
			}		
	   
			return false;
			
		});

		$('#simpanPersonal1').click(function()
		{	

			$('#pesan_nama1').hide();
			$('#pesan_tmpt_lahir1').hide();
			$('#pesan_tgl_lahir1').hide();
			$('#pesan_alamat_rumah1').hide();
			$('#pesan_kota1').hide();
			$('#pesan_no_telp_rumah1').hide();
			$('#pesan_no_hp1').hide();
			$('#pesan_agama1').hide();
			$('#pesan_hobi1').hide();

			if($('#nama1').val() == ''){
				$('#pesan_nama1').fadeIn('slow');
			}else if($('#tmpt_lahir1').val() == ''){
				$('#pesan_tmpt_lahir1').fadeIn('slow');
			}else if($('#tgl_lahir1').val() == ''){
				$('#pesan_tgl_lahir1').fadeIn('slow');
			}else if($('#alamat_rumah1').val() == ''){
				$('#pesan_alamat_rumah1').fadeIn('slow');
			}else if($('#kota1').val() == ''){
				$('#pesan_kota1').fadeIn('slow');
			}else if($('#no_telp_rumah1').val() == ''){
				$('#pesan_no_telp_rumah1').fadeIn('slow');
			}else if($('#no_hp1').val() == ''){
				$('#pesan_no_hp1').fadeIn('slow');
			}else if($('#agama1').val() == ''){
				$('#pesan_agama1').fadeIn('slow');
			}else if($('#hobi1').val() == ''){
				$('#pesan_hobi1').fadeIn('slow');
			}else{
			
			data4 = data3 + '&' + $("#formPersonal1").serialize();
				   $("#tahap2a").fadeOut(function()
					{
						$('html, body').animate({scrollTop:0}, 'normal');
						$('#tahap3a').fadeIn('slow');
					});
				}

			return false;
		});

		$('#simpanPendidikan1').click(function()
		{	

			$('#pesan_institusi1').hide();
			$('#pesan_nomor_induk1').hide();
			$('#pesan_jurusan1').hide();
			$('#pesan_semester1').hide();
			$('#pesan_no_telp_institusi1').hide();
			$('#pesan_alamat_institusi1').hide();
			$('#pesan_nama_pembimbing1').hide();
			$('#pesan_no_telp_pembimbing1').hide();
			$('#pesan_fakultas1').hide();
			$('#pesan_konsentrasi_jurusan1').hide();

			if($('#institusi1').val() == ''){
				$('#pesan_institusi1').fadeIn('slow');
			}else if($('#nomor_induk1').val() == ''){
				$('#pesan_nomor_induk1').fadeIn('slow');
			//}else if($('#fakultas1').val() == '' && $('#gFakultas1').hide() == false){
			//	$('#pesan_fakultas1').fadeIn('slow');
			}else if($('#jurusan1').val() == ''){
				$('#pesan_jurusan1').fadeIn('slow');
			}else if($('#konsentrasi_jurusan1').val() == ''){
				$('#pesan_konsentrasi_jurusan1').fadeIn('slow');
			//}else if($('#semester1').val() == '' && $('#gSemester1').hide() == false){
			//	$('#pesan_semester1').fadeIn('slow');
			}else if($('#no_telp_institusi1').val() == ''){
				$('#pesan_no_telp_institusi1').fadeIn('slow');
			}else if($('#alamat_institusi1').val() == ''){
				$('#pesan_alamat_institusi1').fadeIn('slow');
			}else if($('#nama_pembimbing1').val() == ''){
				$('#pesan_nama_pembimbing1').fadeIn('slow');
			}else if($('#no_telp_pembimbing1').val() == ''){
				$('#pesan_no_telp_pembimbing1').fadeIn('slow');
			}else{
		
			data5 =  data4 + '&' +$("#formPendidikan1").serialize();

			/**
			$.ajax({
				type : 'POST',
				url  : $('#formPendidikan').attr("action"),
				data : data2,
				success :  function()
				   {
				   alert("success");						
				   $("#tahap3").hide(function()
						{
							$('html, body').animate({scrollTop:0}, 'normal');
							$('#tahap4').show('slow');
						});			
				   },
				error : function(){
					alert("Fail");
				}
			});
	*/
			$("#tahap3a").fadeOut(function()
			{
				$('html, body').animate({scrollTop:0}, 'normal');
				$('#tahap5a').fadeIn('slow');
			});		
			}	
	   
			return false;
			
		});

		$("#simpanOrganisasi11").click(function()
			{
				data6 = data8 + '&' +$('#formOrganisasi1').serialize();

					$.ajax({
						type : 'POST',
						url	 : $('#formPendidikan1').attr("action"),
						data : data6,
						success : function(){
								window.location = 'uploadSuratPengantar'
						},
						error :function(){
							alert("gagal");
						} 
					});
				
				return false;
			});

		$('#simpanKelebihan').click(function(){
			$('#pesan_kelebihan1').hide();
			$('#pesan_kelebihan2').hide();
			$('#pesan_kelebihan3').hide();
			$('#pesan_kelemahan1').hide();
			$('#pesan_kelemahan2').hide();
			$('#pesan_kelemahan3').hide();

			if($('#kelebihan1').val() == ''){
				$('#pesan_kelebihan1').fadeIn('slow');
			}else if($('#kelebihan2').val() == ''){
				$('#pesan_kelebihan2').fadeIn('slow');
			}else if($('#kelebihan3').val() == ''){
				$('#pesan_kelebihan3').fadeIn('slow');
			}else if($('#kelemahan1').val() == ''){
				$('#pesan_kelemahan1').fadeIn('slow');
			}else if($('#kelemahan2').val() == ''){
				$('#pesan_kelemahan2').fadeIn('slow');
			}else if($('#kelemahan3').val() == ''){
				$('#pesan_kelemahan3').fadeIn('slow');
			}else{

				data7 =  data2 + '&' +$("#formKelebihan").serialize();

				$("#tahap5").fadeOut(function()
				{
					$('html, body').animate({scrollTop:0}, 'normal');
					$('#tahap4').fadeIn('slow');
				});	
			}		
	   
			return false;
			
		});

		$('#simpanKelebihan1').click(function(){
			$('#pesan_kelebihan11').hide();
			$('#pesan_kelebihan21').hide();
			$('#pesan_kelebihan31').hide();
			$('#pesan_kelemahan11').hide();
			$('#pesan_kelemahan21').hide();
			$('#pesan_kelemahan31').hide();

			if($('#kelebihan11').val() == ''){
				$('#pesan_kelebihan11').fadeIn('slow');
			}else if($('#kelebihan21').val() == ''){
				$('#pesan_kelebihan21').fadeIn('slow');
			}else if($('#kelebihan31').val() == ''){
				$('#pesan_kelebihan31').fadeIn('slow');
			}else if($('#kelemahan11').val() == ''){
				$('#pesan_kelemahan11').fadeIn('slow');
			}else if($('#kelemahan21').val() == ''){
				$('#pesan_kelemahan21').fadeIn('slow');
			}else if($('#kelemahan31').val() == ''){
				$('#pesan_kelemahan31').fadeIn('slow');
			}else{

				data8 =  data5 + '&' +$("#formKelebihan1").serialize();

				$("#tahap5a").fadeOut(function()
				{
					$('html, body').animate({scrollTop:0}, 'normal');
					$('#tahap4a').fadeIn('slow');
				});	
			}		
	   
			return false;
			
		});

		$('#lala').click(function(){
			$('html, body').animate({scrollTop:500}, 'slow');
		});

		$('#btnTerima').click(function(){
			var data = 'konfirmasi=Diterima'
			$.ajax({
				type : 'POST',
				url	 : '<?=base_url()?>User/Login/konfirmasi',
				data : data,
				success : function(){
					$('#konfirmasi').fadeOut('slow');
					$('#terima').show('slow');
				},
				error :function(){
					alert("gagal");
				} 
			});
			return false;
		}); 

		$('#btnTolak').click(function(){
			var data = 'konfirmasi=Ditolak'
			$.ajax({
				type : 'POST',
				url	 : '<?=base_url()?>User/Login/konfirmasi',
				data : data,
				success : function(){
					$('#konfirmasi').fadeOut('slow');
					$('#tolak').show('slow')
				},
				error :function(){
					alert("gagal");
				} 
			});
			return false;
		});

		$('#kembaliPersonal').click(function(){
			$('#tahap2').fadeOut(function(){
				$('#tahap1').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliPersonal1').click(function(){
			$('#tahap2a').fadeOut(function(){
				$('#tahap4').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliPendidikan').click(function(){
			$('#tahap3').fadeOut(function(){
				$('#tahap2').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliPendidikan1').click(function(){
			$('#tahap3a').fadeOut(function(){
				$('#tahap2a').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliKelebihan').click(function(){
			$('#tahap5').fadeOut(function(){
				$('#tahap3').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliKelebihan1').click(function(){
			$('#tahap5a').fadeOut(function(){
				$('#tahap3a').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliOrganisasi').click(function(){
			$('#tahap4').fadeOut(function(){
				$('#tahap5').fadeIn('slow');
			});
			return false;
		});

		$('#kembaliOrganisasi1').click(function(){
			$('#tahap4a').fadeOut(function(){
				$('#tahap5a').fadeIn('slow');
			});
			return false;
		});


	});
</script>


</html>