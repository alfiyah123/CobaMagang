<?php
	include("header.php");
?>
<div id="tahap1a">
	<div class="row breadcrumbs margin-bottom-40" style="margin-top:80px">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>Tahap 7-1</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if($error != null){
					echo 
				'<div class="alert alert-danger alert-dismissable" style="text-align:center">
				        <label style="text-align:center">'.$error.'</label>
				    </div>';
				}
				    ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"> 
	            <div class="portlet box blue">
	            	<div class="portlet-title">
	            		<div class="caption">Input File</div>
	            	</div>
	            	<div class="portlet-body form">
						<form id="formUploadDocument" method="post" enctype="multipart/form-data" action="<?=base_url()?>User/Register/simpan" accept-charset="utf-8" class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label col-md-3">Nomor Surat Pengantar</label>
									<div class="col-md-9">
										<input type="text" name="nomor_surat" id="nomor_surat" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Perihal Surat Pangantar</label>
									<div class="col-md-9">
										<input type="text" name="perihal_surat" id="perihal_surat" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Tanggal Surat Pangantar</label>
									<div class="col-md-9">
										<input type="date" name="tgl_surat" id="tgl_surat" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Upload Scan Surat Pengantar Institusi</label>
									<div class="col-md-9">
										<input type="file" name="userfile" id="userfile">
										<div class="well" style="margin-top:10px">
											<ol style="font-size : 80%">
												<li>File yang dikirim harus dengan format jpeg/jpg/png/bmp/gif</li>
												<li>Ukuran file maksimal 1MB</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-offset-3 col-md-9">
											<button id="simpanUploadDocument" type="submit" class="btn green">Next</button> 
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
<?php
	include("footer.php");
?>