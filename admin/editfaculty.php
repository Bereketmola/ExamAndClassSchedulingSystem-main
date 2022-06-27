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
</head>
<body>  
    <div id='container'>
      <div id = 'logo'>
        </div>
        <div id='content'>
          <?php include_once 'collomenone.php'; ?>
            <div class="formstyle" id='coltwo'>
              <!--Faculty-->
              <?php
              if(isset($_GET['i'])){
                $ii = $_GET['i'];
                $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                $query="SELECT * FROM faculty WHERE faculty_name='$ii'";
                $result=mysqli_query($con,$query)or die(mysqli_error($con));
                $nrow = mysqli_num_rows($result);
                $row=mysqli_fetch_array($result)or die(mysqli_error($con));
                $fan = $row['faculty_name'];
                $cam = $row['campus'];
              }
              ?>
              <div id='faculty2'>
                  <form id='managefacultymanagerform' action='' method='POST'>
                    <h1>Manage Faculty </h1>
                    <table><tr><th><label>Faculty Name </label><th id='sapce'>:<th><input type="text" name="facultyname" placeholder="Faculty Name" required
                      value = '<?php echo $fan; ?>'></tr>
                      <tr><th><label>Campus </label><th>:<th><input type="text" name="campus" placeholder="campus" required value = '<?php echo $cam; ?>'></tr>
                      <tr><th colspan='3'><input type="submit" value="Edit" name='modifay' ></tr>
                    </table>
                  </form>
                </div>
                <?php 
                        if(isset($_POST['modifay'])){
                          $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                          $fn = $_POST['facultyname'];
                          $ln = $_POST['campus'];
                          $upd = "UPDATE faculty SET faculty_name = '$fn', campus = '$ln' where faculty_name = '$fn'";
                          mysqli_query($con, $upd)or die(mysqli_error($con));
                          header('location:managfaculty.php');
                      }
                ?>
            <script>
              $(document).ready(function() {
                $('#sub-campus').hide();
                $('#sub-account').hide();
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
              <!--End of Faculty-->
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