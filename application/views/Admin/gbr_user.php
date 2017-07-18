<!DOCTYPE html>
<html>
  <head>
    <title>Admin Magang PJB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../asset/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=400,width=1000,left=100,top=80');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
  </head>
  <?php
	if (!isset($_SESSION['username'])){
	header("Location:index");
	}
?>
  <body>
	<?php
		include('header.php');
	?>
    <div class="page-content" style="margin-top:110px">
		<div class="container">
	        <div class="row">
	        <div class="col-md-12">
					<?php
						if($pesan != null){
							echo 
						'<div class="alert alert-success alert-dismissable" style="text-align:center">
						        <label style="text-align:center">'.$pesan.'</label>
						    </div>';
						}
					    ?>
				</div>
	           	<div class="col-md-12">
  					<div class="content-box-large" style="    margin-top: 50px;
    margin-bottom: 200px;">
  						<div class="panel-heading">
							<h2>Ubah Background User</h2>
						</div>
  						<div class="panel-body">
  							<form method="post" enctype="multipart/form-data" action="<?=base_url()?>Admin/Login/simpanGbrUser" accept-charset="utf-8" class="form-horizontal">									 
								<div class="form-group" style="margin-left: 2px;">
									<label for="exampleInputFile">
										File input
									</label>
									<input type="file" name="userfile" id="userfile">
								</div>
								<button type="submit" class="btn btn-default">
									Submit
								</button>
							</form>
  					  	</div>
  					</div>
				</div>
			</div>
		</div>
	</div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016  <a href='http://www.ptpjb.com'>PT. PJB</a>
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../asset/js/bootstrap.min.js"></script>

    <script src="../../asset/js/jquery.dataTables.min.js"></script>

    <script src="../../asset/js/dataTables.bootstrap.js"></script>

    <script src="../../asset/js/custom.js"></script>
    <script src="../../asset/js/tables.js"></script>
  </body>
</html>