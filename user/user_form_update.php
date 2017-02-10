<?php
require_once '../inc/config.php';

// $username = $_GET['username'];

$username = isset($_GET['username']) ? $_GET['username'] : null;
//atau:
//$page = isset($_GET['page']) ? $_GET['page'] : false;
//atau bisa juga dengan:
//$page = isset($_GET['page']) ? $_GET['page'] : "";

$query = "SELECT * FROM user WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());
$data = mysql_fetch_array($result) or die(mysql_error());
?>

<?php
require_once '../template/header.php';
?>

<script>
	$(document).ready(function() {
		$("#form_update").validate({
			rules : {
				password : "required",
				passwordc : {
					equalTo : "#password"
				}
			}
		});
	}); 
</script>
<div class="container">

	<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>

	<br />
	<br />

	<form action="user_act_update.php" method="post" id="form_update" name="form_update">
		<input type="hidden" name="username" value="<?php echo $username; ?>" />

		<div class="control-group">
			<label for="password">Password : </label>
			<div class="controls">
				<input value="<?php echo $data['password']; ?>" type="password" name="password" placeholder="Password"  class="required"/>
			</div>
		</div>

		<?
		if (isset($_GET['confirm'])) {
			echo "<div id='form_alert_update' style='color:#DD1144' class='alert alert-success'>";
			echo "<a class='close' data-dismiss='alert' href='#'>x</a>Data berhasil diupdate!";
			echo "</div>";
		}
		?>

		<div class="control-group">
			<button type="submit" value="update" class="btn btn-primary">
				<i class="icon icon-pencil"></i> Update
			</button>
		</div>
	</form>
</div>
</body>
</html>