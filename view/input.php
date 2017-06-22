<?php
require('/../assets/layout_form.css'); // untuk tampilan form
$data_tanggal = date("Y-m-d");
$val_form = '';
    	if(isset($_POST['submit'])) {
			session_start();
			$val_form = 'hidden="hidden"';
			$user =$_POST['username'];
			$pass =$_POST['password'];
			$token =$_POST['token'];
			$auto_timer =$_POST['auto_timer'];
			$max_status =$_POST['max_status'];

			$_SESSION['user'] = $_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			$_SESSION['token'] = $_POST['token'];
			$_SESSION['max_status'] = $_POST['max_status'];

		echo "
			<script type='text/javascript'>
			var auto_refresh = setInterval(
			function () {
			$('#load_content').load('lib/libfacebook.php').fadeIn('slow');
			}, $auto_timer); // refresh setiap 300000 milliseconds = 5 menit
			</script>
			";
}
else
{
			session_start();
		if (isset($_SESSION['user'])) {
			session_destroy();
			echo"
			<script>
				window.alert('Silahkan Login dulu !');
			</script>
			";
	}
}
?>
<div id="input_form" <?php echo $val_form;?>>
<h2 align="center">Silahkan Isi Data Facebook</h2>
<form action="" method="POST">
<table>
 <tr><td>Username :</td><td><input type="text" name="username" id="username" class="texbox" required="required" size="53px" value="" <?php echo $val_form;?>></td></tr>
 <tr><td>Password :</td><td><input type="password" name="password" id="password" class="texbox" required="required" size="53px" value="" <?php echo $val_form;?>></td></tr>
 <tr><td>Token :</td><td><textarea cols="40" rows="3" name="token" class="texarea" id="token" required="required" size="15px" placeholder="Masukkan Token Facebook Anda" <?php echo $val_form;?>></textarea></td></tr>
 <tr><td>Maximal status:<td><select name="max_status" id="max_status" class="texbox" required="required" <?php echo $val_form;?>>
 <option></option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <tr><td>Auto Timer:<td><select name="auto_timer" id="auto_timer" class="texbox" required="required" <?php echo $val_form;?>>
 <option></option>
 <option>60000</option>
 <option>120000</option>
 <option>180000</option>
 <option>240000</option>
 <option>300000</option>
 <option>360000</option>
 <option>420000</option>
 <option>480000</option>
 <option>540000</option>
 <option>600000</option>
 <tr><td colspan="2" align="right"><input type="submit" name="submit" value="Mulai"<?php echo $val_form;?>><input type="reset" name="reset" value="Bersihkan"<?php echo $val_form;?>></td></tr>
 </table>
<br>
</form>
</div>
