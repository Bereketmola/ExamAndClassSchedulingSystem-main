<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
$oldpass = $_SESSION['password'];
$username =$_SESSION['user_name'];
$fac = $_SESSION['faculty'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/cssformstyle.css">
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css" media="all" />
<script src="../js/jquery.min.js"></script>
<script src="../jquery/jquery.js"></script>
</head>
<body>  
    <div id='container'>
      <div id = 'logo'>
        </div>
        <div id='content'>
            <?php include_once 'collomenone.php'; ?>
                    <script>
              $(document).ready(function() {
                 $('#sub-faculty').hide();
                $('#sub-campus').hide();
                $('#faculty').click(function() {
                  $('#sub-campus').hide();
                  $('#sub-account').hide();
                  $('#sub-faculty').slideDown(800);
               });
                $('#campus').click(function() {
                  $('#sub-account').hide();
                  $('#sub-faculty').hide();
                  $('#sub-campus').slideDown(800);
                });
                $('#account').click(function() {
                  $('#sub-campus').hide();
                  $('#sub-faculty').hide();
                  $('#sub-account').slideDown(800);
                });
              });
                </script>
            <div class="formstyle" id='coltwo'>
              <!--Account-->
              <div id='account2'>
                  <form action = '' method = 'POST' id='addaccountform'>
                    <h1>Chenge User Name And Password</h1>
                   <table><tr><th><label>Old Passwored </label><th id='sapce'>:<th><input type="password" name="oldpass" 
                      placeholder="Old Password" required></tr>
                      <tr><th><label>New Password </label><th>:<th><input type="password" name="newpass" placeholder="New Password" required></tr>
                      <tr><th><label>Confirm Password </label><th>:<th><input type="password" name="confrim" placeholder="Confirm Password" required></tr>
                      <tr><th><label>New User Name </label><th>:<th><input type="text" name="newun" placeholder="New username" required></tr>
                      <tr><th><label>Email Address </label><th>:<th><input type="email" name="email" placeholder="Email Address" required></tr>
                      <tr><th><label>Phone Number </label><th>:<th><input type="text" name="phone" placeholder="Your Phone number" required></tr>
                      <tr><th colspan='2'><input type="submit" value="chenge" name = "chenge"><input type='reset' value='Cancel'>
                        <th>
                          <?php
                          if(isset($_POST['chenge'])){
                           include_once 'updateaccount.php';
                        }

              ?>
                      </tr>
                    </table>
                  </form>
              </div>
              <!--End Account-->
            </div>
            <div id='colthree'>
                <?php include_once 'link.php'; ?>
            </div><!--end of colo 3---->
        </div><!--endofcontent---->
        <div id='footer'>
          <?php include_once '../department dean/footer.php'; ?>
        </div>
    </div>
</body>
</html>     
<?php
}
else
header('location:../index.php');
?>