<?php
	include("header.php");
?>
<!--Start your project here-->                            
<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div id="tahap1d">
					<div class="row breadcrumbs margin-bottom-40" style="margin-top:80px">
						<div class="container">
							<div class="col-md-4 col-sm-4">
								<h1>Tahap 8</h1>
							</div>
						</div>
					</div>
					<div class="container">
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
						<div class="row">
							<div class="col-md-12">
					            <div class="portlet box blue">
					            	<div class="portlet-title">
					            		<div class="caption">Input File</div>
					            	</div>
					            	<div class="portlet-body form">
										<form id="formUploadDocument3" method="post" enctype="multipart/form-data" action="<?=base_url()?>User/Register/simpanFotoAnggota1" accept-charset="utf-8" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">Upload Foto Anggota 2</label>
													<div class="col-md-9">
														<input type="file" name="userfile">
														<div class="well" style="margin-top:10px">
															<ol style="font-size : 80%">
																<li>File yang dikirim harus dengan format jpg/png</li>
																<li>Ukuran file maksimal 300kb</li>
															</ol>
														</div>
													</div>	
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-12">
														<div class="col-md-offset-3 col-md-9">
															<button id="simpanUploadDocument3" type="submit" class="btn green">Next</button> 
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
            </div>
        </div>
</div>
</div>

<?php
	include("footer.php");
?>
