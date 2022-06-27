<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/cssformstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/cssformstyle.css">
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<script src="../js/jquery.min.js"></script>
<script src="../js/slidform.js"></script>
<script src="../jquery/jquery.js"></script>
<script src="validation.js"></script>
</head>
<body>  
    <div id='container'>
      <div id = 'logo'>
        </div>
        <div id='content'>
          <?php include_once 'collomenone.php'; ?>
            <div class="formstyle" id='coltwo'>
              <!--campuse-->
              <?php
              if(isset($_GET['i'])){
                $ii = $_GET['i'];
                $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                $query="SELECT * FROM campus WHERE campus_name='$ii'";
                $result=mysqli_query($con,$query)or die(mysqli_error($con));
                $nrow = mysqli_num_rows($result);
                $row=mysqli_fetch_array($result)or die(mysqli_error($con));
                $cn = $row['campus_name'];
                $loc = $row['location'];
              }
              ?>
              <div id='campus'>
                <form id='addcampusform' action='' method='POST'>
                    <h1>Modifay Campus Information</h1>
                    <table><tr><th><label>Campus Name </label><th id='sapce'>:<th><input type="text" name="campusname" placeholder="Campus Name"
                    id = 'strng' onkeypress="return onlyAlphabets(event,this);" required
                      value= '<?php echo $cn;?>'></tr>
                      <tr><th><label>Location </label><th>:<th><input type="text" name="location" placeholder="Location" required
                      id = 'strng2' onkeypress="return onlyAlphabets(event,this);" value = '<?php echo $loc;?>'></tr>
                      <tr><th colspan='3'><input type="submit" value="Edit" name='edit'><input type='reset' value='Cancel'></tr>
                    </table>
                  </form>
              </div><?php 
              if(isset($_POST['edit'])){
                          $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                          $cn = $_POST['campusname'];
                          $loc = $_POST['location'];
                          $upd = "UPDATE campus SET campus_name = '$cn', location = '$loc' where campus_name = '$cn'";
                          mysqli_query($con, $upd)or die(mysqli_error($con));
                          header('location:viewcampus.php');
                      }


              ?>
            <script>
              $(document).ready(function() {
                 $('#sub-faculty').hide();
                $('#sub-account').hide();
                $('#faculty').click(function() {
                  $('#sub-campus').hide();
                  $('#sub-account').hide();
                  $('#sub-faculty').slideDown(800);
               });
                $('#campus').click(function() {
                  $('#sub-account').hide();
                  $('#sub-faculty').hide();
                  $('#sub-campus').show();
                  $('#sub-campus').slideUp(800);
                  $('#sub-campus').slideDown(800);
                });
                $('#account').click(function() {
                  $('#sub-campus').hide();
                  $('#sub-faculty').hide();
                  $('#sub-account').slideDown(800);
                });
              });
            </script>
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