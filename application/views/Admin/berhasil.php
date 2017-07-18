<?php
	$nama = array();
	$institusi = array();
	$jurusan = array();
	if($data != null){
		$nama = explode('|', $data['nama']);
		$institusi = explode('|', $data['institusi']);
		$jurusan = explode('|', $data['jurusan']);
	}
?>

<html>
<head>
<title>Data Kerja Praktek</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../asset/css/styles.css" rel="stylesheet">
</head>
<body>
<?php
	session_start();
	if (!isset($_SESSION['username'])){
	header("Location:./index.php");
	}
?>
	<center><h3>Data Anggota</h3></center><hr style="size:2px; color:#000000;"></hr>
	<div class="page-content">
			<div class="container">
	        <div class="row">
	           <div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Sekolah/Universitas</th>
								<th>Jurusan</th>
							</tr>
						</thead>
						<tbody>
							<?php
								for($i = 1; $i<count($nama); $i++){
									echo 
									"<tr>
						              <td>".$i."</td>
						              <td>".$nama[$i]."</td>
									  <td>".$institusi[$i]."</td>
									  <td>".$jurusan[$i]."</td>
									  </tr>";
								}
							?>
						</tbody>
					</table>
  				</div>
			</div></div></div>
	        </div>
			
</body>
</html>