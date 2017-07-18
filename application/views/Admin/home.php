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
				<center><h2><?php echo"Unit ".$_SESSION['unit']."";?></h2></center>
			</div>
			<div class="row">
	           <div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-heading">
					<h3>Data Peserta Kerja Praktek Per Bulan</h3>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Bulan</th>
								<th>Jumlah</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Januari</td>
								<td><?php echo $data['januari']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[1];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Februari</td>
								<td><?php echo $data['februari']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[2];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Maret</td>
								<td><?php echo $data['maret']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[3];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>April</td>
								<td><?php echo $data['april']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[4];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Mei</td>
								<td><?php echo $data['mei']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[5];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Juni</td>
								<td><?php echo $data['juni']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[6];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Juli</td>
								<td><?php echo $data['juli']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[7];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Agustus</td>
								<td><?php echo $data['agustus']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[8];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>9</td>
								<td>September</td>
								<td><?php echo $data['september']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[9];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>10</td>
								<td>Oktober</td>
								<td><?php echo $data['oktober']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[10];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>11</td>
								<td>November</td>
								<td><?php echo $data['november']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[11];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>12</td>
								<td>Desember</td>
								<td><?php echo $data['desember']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data[12];?>')">Detail</button></td>
							</tr>
						</tbody>
					</table>
					<?php
						$data_id = $data[1].'|'.$data[2].'|'.$data[3].'|'.$data[4].'|'.$data[5].'|'.$data[6].'|'.$data[7].'|'.$data[8].'|'.$data[9].'|'.$data[10].'|'.$data[11].'|'.$data[12];
					?>
					<td><button class="btn btn-success" onclick="return popitup('cetak?id=<?php echo $data_id;?>')">Cetak Rekap Kerja Praktek</button></td>
  				</div>
  			</div>
			</div></div>

			<div class="row">
	           <div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-heading">
					<h3>Data Peserta Penelitian Per Bulan</h3>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Bulan</th>
								<th>Jumlah</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Januari</td>
								<td><?php echo $data1['januari']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[1];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Februari</td>
								<td><?php echo $data1['februari']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[2];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Maret</td>
								<td><?php echo $data1['maret']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[3];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>April</td>
								<td><?php echo $data1['april']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[4];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Mei</td>
								<td><?php echo $data1['mei']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[5];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Juni</td>
								<td><?php echo $data1['juni']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[6];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Juli</td>
								<td><?php echo $data1['juli']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[7];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Agustus</td>
								<td><?php echo $data1['agustus']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[8];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>9</td>
								<td>September</td>
								<td><?php echo $data1['september']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[9];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>10</td>
								<td>Oktober</td>
								<td><?php echo $data1['oktober']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[10];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>11</td>
								<td>November</td>
								<td><?php echo $data1['november']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[11];?>')">Detail</button></td>
							</tr>
							<tr>
								<td>12</td>
								<td>Desember</td>
								<td><?php echo $data1['desember']; ?></td>
								<td><button class="btn btn-info" onclick="return popitup('detailTot?id=<?php echo $data1[12];?>')">Detail</button></td>
							</tr>
						</tbody>
					</table>
					<?php
						$data_id1 = $data1[1].'|'.$data1[2].'|'.$data1[3].'|'.$data1[4].'|'.$data1[5].'|'.$data1[6].'|'.$data1[7].'|'.$data1[8].'|'.$data1[9].'|'.$data1[10].'|'.$data1[11].'|'.$data1[12];
					?>
					<td><button class="btn btn-success" onclick="return popitup('cetak?id=<?php echo $data_id1;?>')">Cetak Rekap Penelitian</button></td>
  				</div>
  			</div>
			</div></div>
			</div>
	        </div>
	   
			

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016  <a href='http://www.ptpjb.com'>PT. PJB</a>
            </div>
            
         </div>
      </footer>


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