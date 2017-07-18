<html>
<head>
	<title>CARIKODE</title>
</head>
<body>
 
	<?php echo $error;?>
 
	<?php echo form_open_multipart('User/Register/simpan');?>
 
	<input type="file" name="userfile" size="20" />
 
	<br /><br />
 
	<input type="submit" value="upload" />
 
</form>
 
</body>
</html>