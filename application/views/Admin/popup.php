<html>
<head>
<title>Data Kelompok Magang</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../asset/css/styles.css" rel="stylesheet">

</head>
<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=800,width=800,left=100,top=80');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<body>
<?php
	session_start();
	if (!isset($_SESSION['username'])){
	header("Location:./index.php");
	}
?>
	<center><h3>Data Kelompok Magang</h3></center><hr style="size:2px; color:#000000;"></hr>
	<div class="page-content">
			<div class="container">
	        <div class="row">
	           <div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Nama Lengkap</th>
								<th>Institusi</th>
								<th>Jurusan</th>
								<th>CV</th>
							</tr>
						</thead>
						<tbody>
							<?php
          foreach ($data as $key) {
          	$id_magang = $key->id_magang;
          	$id_anggota = $key->id_anggota;
            echo
            "<tr>
              <td>".$key->nama_lengkap."</td>
              <td>".$key->institusi."</td>
			  <td>".$key->jurusan."</td>"; ?>
			  <td><button class="btn btn-info" onclick="return popitup('cv?id_magang=<?php echo $id_magang;?>&&id_anggota=<?php echo $id_anggota;?>')">CV</button></td>
			  <?php 
			  echo "</tr>\n";
          }
        ?>
						</tbody>
					</table>
  				</div>

				<center><a href="downloadProposal?id=<?php echo $id_magang;?>" class="btn btn-success">Download Proposal KP</a></center><br>
				<center><a href="downloadSuratPengantar?id=<?php echo $id_magang;?>" class="btn btn-success">Download Surat Pengantar</a></center><br>
				<center><a href="surat?id=<?php echo $id_magang;?>" class="btn btn-success">Download Form Konfirmasi </a></center>
			</div></div></div>
	        </div>
			
</body>
</html>