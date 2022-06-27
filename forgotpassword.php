<?php 
$_SESSION['errorpassword'] = 'no';
$con = mysqli_connect('localhost','root','','ocss');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="js/jquery.min.js"></script>
<style>
#forgot{
	text-decoration: underline;
	cursor: pointer;
	color: blue;
}
</style>
 <script>
  $(document).ready(function(){
  	$('#forgotpassword2').hide();
  	$('#forgot').click(function() {
  		$('#forgotpassword').hide();
  		$('#forgotpassword2').slideDown(400);

  	});
      $("input").focus(function(){
          $("#error").css("display", "inline").hide();
      });
  });
  </script>
</head>
<body>
<!-- start header -->
<div id='container'>
	<?php include_once 'navigation.php'; ?>
<div id='content4'>
	<div id = 'dontforgot'>
		<p><i class="fa fa-hand-o-right"></i> If possible don't forgot password, but if your forgot password follow the following steps</p>
		<p>
			<ul>
				<li>1, Click forgot passwordlink
				<li>2, Enter your id and securty code
				<li>3, Login with defaulte username and password
				<li>4, Change your default username and password whane you lgoed 
		</p>
	</div>
	<div id = 'forgotpassword'>
		<form method='POST'>
				<h2>Log In</h2>
				<?php if($_SESSION['errorpassword'] == 'yes') {
				echo '<center><i id = "error" style = "color:red">invalid username or password !!</i></center>';
			} ?>
				<p><input type = 'text' name = 'username' placeholder = 'User Name' required></p>
				<p><input type = 'password' name = 'password' placeholder = 'Password' required></p>
				<p><input type = 'submit' name = 'submit' value = 'Login'></p>
				<i id = 'forgot'>Forgot Password</i>
		</form>
		<?php 
				if(isset($_POST['sub'])){
					$scode = $_POST['code'];
					$id = $_POST['id'];
					$idd = $id.'@#$';
					$sebc = "SELECT * from back_up where id = '$id'";
					$rs = mysqli_query($con, $sebc);
					$nbr = mysqli_num_rows($rs);
					$row = mysqli_fetch_array($rs);
					if($nbr >= 1 && $scode == $idd){
						$up = "UPDATE admin SET user_name = '$row[user_name]', password = '$row[password]', updated = 'no' where id = '$id'";
						mysqli_query($con, $up)or die(mysqli_error($con));
						echo '<center id = "forgot">Password Reseted login know</center>';
					}
					else{
						echo '<center><i style = "color:red">please enter valide id and Securty code</i></center>';
					}
			?><script>
			$(document).ready(function(){
				$('#error').hide();
			});
			</script>
			<?php }
			if(isset($_POST['submit'])){
				echo 'loged';
			}
		 ?>
	</div>
	<div id = 'forgotpassword2'>
		<form method='POST'>
			<h2>Give Your Info</h2>
			<p><input type = 'text' name = 'id' placeholder = 'your Id' required><p>
				<p><input type = 'text' name = 'code' placeholder = 'Your Securty Code' required></p>
				<p><input type = 'submit' name = 'sub' value = "Reset">
				</p>
		</form>
	</div>
	<div id="cal">

		<div id = 'departments'>
				<?php include_once 'viewscheduleandexam.php'; ?>
			
		</div>
	</div>
</div>	
</div>
<div id = 'footer'>
	<?php include_once 'department dean/footer.php'; ?>
</div>
</body>
</html>		