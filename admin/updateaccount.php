<?php
$con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
if(isset($_POST['chenge'])){
	$old = $_SESSION['password'];
	$oldpass = md5($_POST['oldpass']);
	$newpass = $_POST['newpass'];
	$conpass = $_POST['confrim'];
	$newun = $_POST['newun'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$dep = $_SESSION['department'];
	$fac = $_SESSION['faculty'];
	$fullname = $_SESSION['fullname'];
	$id = $_SESSION['id'];
	$at = $_SESSION['acount_type'];
	$phone = '+251'.$phone;
	if($oldpass == $old && $newpass == $conpass){
		if(strlen($phone) == 13 && substr($phone, 1, 4) == 2519 ){
			$newpass = md5($newpass);
			$up = "UPDATE admin SET user_name = '$newun', password = '$newpass' , department = '$dep' , faculty = '$fac', email = '$email',
			phone = '$phone' , full_name = '$fullname' , acount_type = '$at', updated = 'yes' where id = '$id'";
			mysqli_query($con, $up)or die(mysqli_error($con));
			echo "<img src='../images/images/succes.png' width=25px>
				 <i>account is changed</i>";
			}
			else{
				echo "<i style = 'color:red;'>invalide phone formate</i>";
			}
	}
	else{
		echo "<i style='color:red;'>old password don't match</i>";
	}


}
?>