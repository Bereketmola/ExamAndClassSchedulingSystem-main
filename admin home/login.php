<?php
session_start();
	class user{
		public $con;
		public function __construct(){
			$this->con = new mysqli('localhost', 'root', '', 'ocss');
			if(mysqli_connect_error()){
				echo "Error :could not connect to Database";
				exit;
			}
		}
		public function check_login(){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$query="SELECT * FROM admin WHERE  user_name='$username' and password='$password'";
			$result = mysqli_query($this->con, $query);
			if(mysqli_num_rows($result)==1){
				$row = mysqli_fetch_array($result);
			$_SESSION['user_name']=$row['user_name'];
			  $_SESSION['password']=$row['password'];
			  $_SESSION['acount_type']=$row['acount_type'];
			  $_SESSION['faculty']=$row['faculty'];
			  $_SESSION['department']=$row['department'];
			  $_SESSION['fullname'] = $row['full_name'];
			  $_SESSION['id']=$row['id'];
			  if($_SESSION['acount_type']=='department dean'){
			  	header('location:department dean/addinstructor.php');
			  }
			  if($_SESSION['acount_type']=='instructor'){
			  	header('location:instructor/viewschedule.php');
			  }
			   if($_SESSION['acount_type']=='admin'){
			  	header('location:admin/adminhome.php');
			  }
			  if($_SESSION['acount_type']=='faculty dean'){
			  	header('location:faculty dean/adddepartment.php');
			  }
			}
			else
				echo "<img src='images/images/error1.png' width=20px><b style='color:red;'> Invalid Password !!</b>" ;
		}
	}
?>