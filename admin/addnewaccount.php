<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
$oldpass = $_SESSION['password'];
$username =$_SESSION['user_name'];
$fac = $_SESSION['faculty'];
$dep = $_SESSION['department'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Faculty Manaager page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/cssformstyle.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" href="../css/cssformstyle.css">
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css" media="all" />
<script src="../js/jquery.min.js"></script>
<script src="../jquery/jquery.js"></script> 
<script src="validation.js"></script>
<script>
  $(document).ready(function(){
      $("input").focus(function(){
          $("#sucess").css("display", "inline").hide();
      });
  });
  </script>
</head>
<body>  
    <div id='container'>
      <div id = ''>
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
                  <form id='addaccountform' method = 'POST'>
                    <h1>Add New Account</h1>
                    <table><tr><th><label>User Name </label><th id='sapce'>:<th><input type="text" name="username" id = 'strng'
                      placeholder="User Name" required></tr>
                      <tr><th><label>Password </label><th>:<th><input type="password" name="pass" placeholder="Password" id = 'strng2'
                       required></tr>
                      <tr><th><label>To </label><th>:
                        <th><select name = 'to' required>
                          <option></option>
                          <?php
                          $con = mysqli_connect('localhost','root','','ocss');
                          $sel = "SELECT * from faculty_manager";
                          $res = mysqli_query($con, $sel)or die(mysqli_error($con));
                          while($row = mysqli_fetch_array($res)){
                            ?><option><?php echo $row['full_name']; ?></option>
                            <?php
                          } 
                            ?></select>
                        </tr>
                      <tr><th colspan='2'><input type="submit" value="ADD" name = "Add"><input type='reset' value='Cancel'>
                        <th id = 'sucess'>
                          <?php
              if(isset($_POST['Add'])){
                $un = $_POST['username'];
                $pass = $_POST['pass'];
                $to = $_POST['to'];
                $pass = mysqli_real_escape_string($con, $_POST['pass']);
                $sela = "SELECT * from admin WHERE full_name = '$to'";
                $rs = mysqli_query($con, $sela)or die(mysqli_error($con));
                $nr1 = mysqli_num_rows($rs);
                if($nr1 == 0){
                  $sela2 = "SELECT * from admin WHERE user_name = '$un' and password = '$pass'";
                  $rs2 = mysqli_query($con, $sela2)or die(mysqli_error($con));
                  $nr2 = mysqli_num_rows($rs2);
                  if($nr2 == 0){
                    $selm = "SELECT * from faculty_manager where full_name = '$to'";
                    $rs2 = mysqli_query($con, $selm)or die(mysqli_error($con));
                    $row = mysqli_fetch_array($rs2);
                    $pass = md5($pass);
                    $inad = "INSERT into admin values('$un', '$pass','$to','$row[id]', '$row[faculty]', '','faculty dean','','', 'no')";
                    mysqli_query($con, $inad);
                    $inad = "INSERT into back_up values('$to','$row[id]','faculty dean','$un','$pass')";
                    mysqli_query($con, $inad);
                    echo "<img src='../images/images/succes.png' width=25px>
                    <a href='manageaccount.php'>View Record</a>";
                  }
                  else{
                    echo 'existed password';
                  }

                }
                else{
                  echo 'account is ordey added for '.$to;
                }
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
        
    </div>
      
</body>
</html>  
<?php
}
else
header('location:../index.php');
?>    