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
			<div class="row" style="text-align:center">
				<h2><?php echo"Unit ".$_SESSION['unit']."";?></h2>
			</div>
	        <div class="row">
	           <div class="col-md-12">
  					<div class="content-box-large">
  						<div class="panel-heading">
							<h3>Data Pelamar Kerja Praktek</h3>
						</div>
		  				<div class="panel-body">
		  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Id Magang</th>
										<th>Tanggal Masuk</th>
										<th>Unit</th>
										<th>Anggota</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if($data != null){
									         foreach ($data as $key) {
									            echo
									            "<tr>
									              <td>".$key->id_magang."</td>
									              <td>".$key->tgl_masuk."</td>
												  <td>".$key->unit."</td>";?>
												  <td><button class="btn btn-info" onclick="return popitup('detail?id=<?php echo $key->id_magang;?>')">Detail</button></td>
									              <td>
												  <a href="proses?proses=terima&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-success">Setujui</a>
												  <a href="proses?proses=tolak&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-danger">Tolak</a>
												  </td>
												  <?php echo " </tr>\n";
									        }
									    }
									?>
								</tbody>
							</table>
  						</div>
  					</div>
				</div>
			</div>
		</div>
	   
	   	<div class="container">
	        <div class="row">
	          	<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<h3>Data Pelamar Kerja Praktek Diterima</h3>
						</div>
		  				<div class="panel-body">
		  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="examplea">
								<thead>
									<tr>
										<th>Id Magang</th>
										<th>Tanggal Masuk</th>
										<th>Unit</th>
										<th>Anggota</th>
										<th>Action</th>
										<th>Konfirmasi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if($data1 != null){
									        foreach ($data1 as $key) {
									            echo
									            "<tr>
									              <td>".$key->id_magang."</td>
									              <td>".$key->tgl_masuk."</td>
												  <td>".$key->unit."</td>";?>
												  <td><button class="btn btn-info" onclick="return popitup('detail?id=<?php echo $key->id_magang;?>')">Detail</button></td>
									              <td>
												  <a href="proses?proses=tolak&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-success">Tolak</a>
												  <a href="proses?proses=hapus&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-danger">Hapus</a>
												  </td>
												 <?php
												 	echo
												  	"<td>".$key->konfirmasi."</td>"
												  ?>
												  <?php echo " </tr>\n";
									        }
									    }
									?>
								</tbody>
							</table>
  						</div>
  					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<h3>Data Pelamar Kerja Praktek Ditolak</h3>
						</div>
		  				<div class="panel-body">
		  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="examplea">
								<thead>
									<tr>
										<th>Id Magang</th>
										<th>Tanggal Masuk</th>
										<th>Unit</th>
										<th>Anggota</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
          								if($data2 != null){
									        foreach ($data2 as $key) {
									            echo
									            "<tr>
									              <td>".$key->id_magang."</td>
									              <td>".$key->tgl_masuk."</td>
												  <td>".$key->unit."</td>";?>
												  <td><button class="btn btn-info" onclick="return popitup('detail?id=<?php echo $key->id_magang;?>')">Detail</button></td>
									              <td>
												  <a href="proses?proses=terima&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-success">Setujui</a>
												  <a href="proses?proses=hapus&&id=<?php echo $key->id_magang;?>&&kelas=0" class="btn btn-danger">Hapus</a>
												  </td>
												  <?php echo " </tr>\n";
									        }
									    }
									?>
								</tbody>
							</table>
  						</div>
  					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					 <center><a href="hapusSemuaKerjaPraktek" class="btn btn-success">Hapus Data 1 Tahun</a>
		  					 <a href="cetaklaporankp" class="btn btn-info" >Laporan Rekap</a></center>
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