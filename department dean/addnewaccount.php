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
<script src = "../admin/validation.js"></script>
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
            <?php include_once 'colommen_one.php'; ?>
                    <script>
                    $(document).ready(function() {
                        $('#sub-room').hide(); $('#sub-stud').hide();   
                        $('#sub-message').hide();
                        $('#sub-course').hide();                  
                        $('#sub-instructor').hide();
                        $('#sub-section').hide();
                        $('#sub-schedule').hide();
                        $('#account').click(function() {
                           $('#sub-instructor').hide(); $('#sub-stud').hide();   
                           $('#sub-room').hide();
                           $('#sub-message').hide();
                           $('#sub-course').hide();
                           $('#sub-section').hide();
                           $('#sub-schedule').hide();
                            $('#sub-account').slideDown(800);
                        });
                        
                        $('#instructor').click(function() {
                          $('#sub-room').hide(); $('#sub-stud').hide();   
                          $('#sub-message').hide();
                          $('#sub-account').hide();
                          $('#sub-course').hide();
                          $('#sub-section').hide();
                          $('#sub-schedule').hide();
                          $('#sub-instructor').slideDown(800);
                        });
                       
                        $('#room').click(function() {
                          $('#sub-account').hide(); $('#sub-stud').hide();   
                         $('#sub-instructor').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-room').slideDown(800);
                        });  
                        $('#message').click(function() {
                          $('#sub-account').hide(); $('#sub-stud').hide();   
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-message').slideDown(800);
                        });
                        $('#course').click(function() {
                          $('#sub-account').hide(); $('#sub-stud').hide();   
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-message').show();
                         $('#sub-message').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-course').slideDown(800);
                        });
                        $('#section').click(function() {
                        $('#sub-account').hide(); $('#sub-stud').hide();   
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-schedule').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').slideDown(800);
                        });
                        $('#schedule').click(function() {
                        $('#sub-account').hide(); $('#sub-stud').hide();   
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').slideDown(800);
                        });
                        $('#student').click(function() {
                           $('#sub-instructor').hide();
                           $('#sub-room').hide();
                           $('#sub-message').hide();
                           $('#sub-course').hide();
                           $('#sub-section').hide();
                           $('#sub-schedule').hide();
                            $('#sub-account').hide();
                            $('#sub-stud').slideDown(800);
                        });               
                });
                </script>
            <div class="formstyle" id='coltwo'>
              <!--Account-->
              <div id='account2'>
                  <form id='addaccountform' method = 'POST'>
                    <h1>Add New Account</h1>
                    <table><tr><th><label>User Name </label><th id='sapce'>:<th><input type="text" name="username" id = 'strng2'
                      placeholder="User Name" required></tr>
                      <tr><th><label>Password </label><th>:<th><input type="password" name="pass" placeholder="Password"
                      id = 'strng' required></tr>
                      <tr><th><label>To </label><th>:
                        <th><select name = 'to' required>
                          <option></option>
                          <?php
                          $con = mysqli_connect('localhost','root','','ocss');
                          $sel = "SELECT * from instructor_information WHERE department = '$dep'";
                          $res = mysqli_query($con, $sel)or die(mysqli_error($con));
                          while($row = mysqli_fetch_array($res)){
                            ?><option><?php echo $row['first_name']; ?></option>
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
                $sela = "SELECT * from admin WHERE full_name = '$to'";
                $rs = mysqli_query($con, $sela)or die(mysqli_error($con));
                $nr1 = mysqli_num_rows($rs);
                if($nr1 == 0){
                  $sela2 = "SELECT * from admin WHERE user_name = '$un' and password = '$pass'";
                  $rs2 = mysqli_query($con, $sela2)or die(mysqli_error($con));
                  $nr2 = mysqli_num_rows($rs2);
                  if($nr2 == 0){
                    $pass = md5($pass);
                    $selm = "SELECT * from instructor_information where department = '$dep' and first_name = '$to'";
                    $rs2 = mysqli_query($con, $selm)or die(mysqli_error($con));$row = mysqli_fetch_array($rs2);
                    $inad = "INSERT into admin values('$un', '$pass','$to','$row[instructor_id]', '$fac', '$row[department]','instructor','','', 'no')";
                    mysqli_query($con, $inad);
                    $inad = "INSERT into back_up values('$to','$row[instructor_id]','instructor','$un','$pass')";
                    mysqli_query($con, $inad);
                    echo "<img src='../images/images/succes.png' width=25px> <b style='color:green;'>
                    <a href='manageaccount.php'>View Record</a></b>";
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