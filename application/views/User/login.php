<?php
	include("header.php");
?>
<?php
//session_start();
if (isset($_SESSION['id_magang'])){
header("Location:home");
}
?>
<div class="login" style="margin-top: 110px;">
	<div id="message">
		<?php
			if($data != null){
				if($data == '1'){
					$pesan = "Maaf email belum terdaftar, silakan register terlebih dahulu";

					echo 
					'<div class="alert alert-danger alert-dismissable">
				        <label style="text-align:center">'.$pesan.'</label>
				    </div>';
				}else{
					$pesan = "Password salah";
					echo 
					'<div class="alert alert-danger alert-dismissable" style="text-align: center;">
				        <label style="text-align:center">'.$pesan.'</label>
				    </div>';
				}
			}
		?>
	</div>
	<div class="login-screen">
		
		<div class="app-title">
			<h1>Login</h1>
		</div>

		<div class="login-form">

			<form accept-charset="utf-8" class="form-horizontal" id="formUtama" method="post" action="<?=base_url()?>User/Login/login_user">
				<div class="form-group">
					<div class="col-md-12">
						<input type="text" class="validate" value="" placeholder="email" id="login_email" name="login_email" style="width: 90%; margin-bottom:-8px; height:40px" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<input type="password" class="validate" value="" placeholder="password" id="login_password" name="login_password" style="width: 90%; margin-bottom:-8px; height:40px" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12" style="text-align:center">
						<button type="submit" class="btn btn-primary btn-small btn-block" style="width: 90%; margin-top: 20px; margin-left: 10px;">login</button>
						<a class="login-link" href="lupa_password">Lost your password?</a>
					</div>
				</div>
			</form>

			
		</div>
	</div>
</div>

<?php
	include("footer.php");
?>