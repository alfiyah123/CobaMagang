<!DOCTYPE html>
<html>
  <head>
    <title>Admin PJB Magang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  </head>
  <?php
session_start();
if (isset($_SESSION['username'])){
header("Location:home");
}
?>
  <body class="login-bg">
  <!--
  	<div class="header" style="padding-bottom:60px; padding-top:10px;">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <div class="logo">
	                 <img src='<?=base_url()?>User/Home/load_logo' style='width:250px; height:50px;'>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
-->
<div class="container-fluid">
	<div class="row">
			<nav class="navbar navbar-default" role="navigation" style="height:80px; padding-top:15px; background-color:#2a2e3a">
				<div class="navbar-header" style="margin-top:-15px">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#"><img src='<?=base_url()?>User/Home/load_logo' style='width:150px; height:45px;'></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
				</div>
				
			</nav>
	</div>
</div>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <center><h6>Sign In</h6></center>
							<form method="post" name="formlogin" action="proseslogin">
			                <input class="form-control" type="text" name="username" placeholder="Username">
			                <input class="form-control" type="password" name="password" placeholder="Password"></br>
							<input type="submit" name="Submit" value="Login" class="btn btn-primary signup">
								</form>
			            </div>
			        </div>


			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../asset/js/bootstrap.min.js"></script>
    <script src="../../asset/js/custom.js"></script>
  </body>
</html>