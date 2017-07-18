<?php
	include("header.php");
?>

<div class="login" style="margin-top : 110px">
<div class="login-screen" style="height: 250px;
    margin-bottom: 30px;">
		
		<div class="app-title">
			<h1>Lupa Password</h1>
		</div>

		<div class="login-form">

			<form accept-charset="utf-8" class="form-horizontal" id="formUtama" method="post" action="<?=base_url()?>User/Login/user_lupa">
				<div class="form-group">
					<div class="col-md-12">
						<input type="text" class="validate" value="" placeholder="email" id="email_password" name="email_password" style="width: 90%; margin-bottom:-8px; height:40px" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12" style="text-align:center">
						<button type="submit" class="btn btn-primary btn-small btn-block" style="width: 90%; margin-top: 20px; margin-left: 10px;">Cek Password</button>
					</div>
				</div>
			</form>

			
		</div>
	</div>

	<?php
		if($data != null){
			foreach ($data as $key) {
				$email = $key->email;
				$password = $key->password;
			}
			echo 
				'<div class="alert alert-info alert-dismissable">
			        <h3 style="color:#31708f"><strong>Your Data</strong></h3>
			        <label><strong>email :</strong> '.$email.'</label>
			        <label><strong>password :</strong> '.$password.'</label>
			    </div>';
		}
	?>
	</div>
</div>
<?php
	include("footer.php");
?>