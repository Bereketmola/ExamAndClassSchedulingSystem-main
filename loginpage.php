<?php 
if(isset($_POST['username']) && isset($_POST['password'])){

    $con = new mysqli('localhost', 'root', '', 'ocss');
    if(mysqli_connect_error()){
        echo "Error :could not connect to Database";
        exit;
    }

$username = $_POST['username'];
$password = md5($_POST['password']);

$query="SELECT * FROM admin WHERE  user_name='$username' and password='$password'";
$result = mysqli_query($con, $query);
print_r($result);
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
{
    $_SESSION['errorpassword'] = 'yes';
    header('location:forgotpassword.php');
}
}

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
<link rel="icon" href="images/images/our logo.png" size=18x18 type="image/png">
<script src="js/jquery.min.js"></script>
<style>
#topnav #index {
	text-decoration: underline;
	color: #efefef;
	border-radius:2px;
}
</style>
</head>
<body>
<!-- start header -->
<div id='container'>
	<?php include_once 'navigation.php'; ?>
<div id='content2'>
	<h1 align='center'>Wellcome to Online Scheduling System | login</h1>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <div>
            <label for="username">Username:</label>
            <br>
            <input type="text" name="username" id="username" placeholder="Username" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <br>
        <div>
            
        <p><input type = 'submit' name = 'submit' value = 'Login'></p>
        </div>
    </form>
</div>
</div>
</div>

<div id = 'footer'>
	<?php include_once 'department dean/footer.php'; ?>
</div>
</body>
</html>	