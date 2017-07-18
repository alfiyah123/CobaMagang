<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>PT PJB - Produsen Listrik Terpercaya</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../asset/css/bootstrap.css" >
    <!--
    <link href="../../asset/css/mdb.min.css" rel="stylesheet">
    -->
    <link rel="stylesheet" href="../../asset/css/css.css">
    <link rel="stylesheet" href="../../asset/css/components.css">
    <link rel="stylesheet" href="../../asset/css/login.css">

    <link rel="stylesheet" href="../../asset/css/prettyPhoto.css">
    <link rel="stylesheet" href="../../asset/css/style.css">

</head>

<?php
	if (!isset($_SESSION['id_magang'])){
	header("Location:index");
	}
?>

<body>
    <div id="main-container">
        <div class="page-wrapper">
            <div id="header">
                <div class="section-boxed section-header">
                    <div id="logo-container">
                        <a href=""><img src="<?=base_url()?>User/Home/load_logo"></a>
                    </div>  
                    <div class="mobile-nav">
                        <span class="mob-nav-btn">Menu</span>
                    </div>
                    <div id="navigation-container">
                        <div id="menu-container">
                            <div id="menu">
                                <ul id="menu-main-menu" class="menu">
                                    <li id="menu-item-1146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1146"><a title="Log Out" href="logout">Logout</a></li>
                                </ul>                   
                            </div>
                        </div> 
                    </div> 
                    <div class="clear"></div>       
                    <div id="navigation-line"></div>
                </div>
            </div>
        </div>
<?php
	foreach ($data as $key) {
		$status = $key->status;
		$tipe = $key->tipe;
		$konfirmasi = $key->konfirmasi;
	}	
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

	foreach ($data2 as $key) {
		$gbr = $key->gambar;
	}
		
?>

<div id="full-width">
	<div class="custom-page-content">
		<div id="message">
			<?php
				if(count($nama) == 1){
					$pesanNama = "Hai ".$nama[0];
				}else{
					$pesanNama = "Hai ".$nama[0] ." & ". $nama[1];
				}
			
				if($status == 0){
					$pesan = 'Terkait dengan proposal '.$tipe.' yang telah anda ajukan. <br> Saat ini proposal anda masih dalam proses. <br> Terima kasih';
					echo 
					'<div id="pemberitahuan" style="background: url('.base_url().'uploads/background/'.$gbr.') no-repeat center center fixed;">
						  <div class="text-vcenter">
							    <i><h3 style="margin-bottom:30px">'.$pesanNama.' </h3></i>
							    <i><h3 style="margin-bottom:30px">'.$pesan.'</h3></i>
						  </div>
					</div>';
				}else if($status == 1){
					if($konfirmasi == 'Belum dikonfirmasi'){
						$pesan = 'Kami informasikan bahwa Anda <strong>diterima</strong> untuk '.$tipe.' di PT PJB. <br> Apakah Anda menyetujui untuk melakukan '.$tipe.' di PT PJB ?';
						$pesan1 = 'Terima kasih atas konfirmasinya. <br>Untuk informasi lebih lanjut. <br> Silakan klik link download dibawah ini <br> untuk mengunduh file peraturan Kerja Praktek/penelitian di PT PJB';
						$pesan2 = 'Terima kasih atas konfirmasinya';
						echo
						'<div id="pemberitahuan" style="background: url('.base_url().'uploads/background/'.$gbr.') no-repeat center center fixed;">
							  <div class="text-vcenter">
								    <i><h3 style="margin-bottom:30px">'.$pesanNama.' </h3></i>
								    <div id="konfirmasi">
									    <i><h3 style="margin-bottom:30px">'.$pesan.'</h3></i>
									    <button id="btnTerima" class="btnKonfirmasi">Terima</button>
									    <button id="btnTolak" class="btnKonfirmasi">Batal</button>
								    </div>
								    <div id="terima">
								    	<i><h3 style="margin-bottom:30px">'.$pesan1.'</h3></i>
									    <a href="download_file"><button id="download_file" class="btnKonfirmasi">Download File</button></a>
								    </div>
								    <div id=tolak>
								    	<i><h3 style="margin-bottom:30px">'.$pesan2.'</h3></i>
								    </div>
							  </div>
						</div>';
					}
					else if($konfirmasi == 'Diterima'){
						$pesan1 = 'Terima kasih atas konfirmasinya. <br>Untuk informasi lebih lanjut. <br> Silakan klik link download dibawah ini <br> untuk mengunduh file peraturan Kerja Praktek/penelitian di PT PJB';
						echo
						'<div id="pemberitahuan" style="background: url('.base_url().'uploads/background/'.$gbr.') no-repeat center center fixed;">
							  <div class="text-vcenter">
								    <i><h3 style="margin-bottom:30px">'.$pesanNama.' </h3></i>
								    <div id="terima1">
								    	<i><h3 style="margin-bottom:30px">'.$pesan1.'</h3></i>
									    <a href="download_file"><button id="download_file" class="btnKonfirmasi">Download File</button></a>
								    </div>
							  </div>
						</div>';
					}else{
						$pesan2 = 'Terima kasih atas konfirmasinya';
						echo
						'<div id="pemberitahuan" style="background: url('.base_url().'uploads/background/'.$gbr.') no-repeat center center fixed;">
							  <div class="text-vcenter">
								    <i><h3 style="margin-bottom:30px">'.$pesanNama.' </h3></i>
								    <div id=tolak1>
								    	<i><h3 style="margin-bottom:30px">'.$pesan2.'</h3></i>
								    </div>
							  </div>
						</div>';
					}
				}else{
					$pesan = 'Terima kasih atas pengajuan '.$tipe.' di PT PJB. <br> Namun kami mohon maaf kerena ketidak tersediaan tempat, <br> PT PJB belum dapat menerima permohonan saudara';
					echo
					'<div id="pemberitahuan" style="background: url('.base_url().'uploads/background/'.$gbr.') no-repeat center center fixed;">
						  <div class="text-vcenter">
							    <i><h3 style="margin-bottom:30px">'.$pesanNama.' </h3></i>
							    <i><h3 style="margin-bottom:30px">'.$pesan.'</h3></i>
						  </div>
					</div>';
				}
			?>
		</div>
	</div>
</div>

<?php		
	include("footer.php");
?>