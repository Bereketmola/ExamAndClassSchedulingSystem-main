<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
                $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
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
                $query="SELECT * FROM faculty_manager WHERE id='$ii'";
                $result=mysqli_query($con,$query)or die(mysqli_error($con));
                $nrow = mysqli_num_rows($result);
                $row=mysqli_fetch_array($result)or die(mysqli_error($con));
                $fan = $row['full_name'];
                $id = $row['id'];
              ?>
              <div id='faculty2'>
                  <form id='managefacultymanagerform' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
                    <h1>Edite Faculty Manager</h1>
                    <table><tr><th><label>Full Name </label><th id='sapce'>:<th><input type="text" name="firstname" placeholder="First Name" 
                      required value = '<?php echo $fan; ?>'></tr>
                      <tr><th><label>ID </label><th id='sapce'>:<th><input type="text" name="id" value = '<?php echo $id;?>' placeholder="ID" required
                        ></tr>
                      <tr><th><label>Manages</label> <th>:<th><select name='faculty'>
                         <?php 
                      $query="SELECT faculty_name FROM faculty";
                      $resuilt=mysqli_query($con,$query)or die('<h2>query error</h2>');
                      while($row=mysqli_fetch_array($resuilt)){ 
                         ?>
                         <option><?php echo $row['faculty_name'];?></option>
                         <?php } ?>
                      <tr><th colspan='3'><input type="submit" value="Modifay" name='modifay' ></tr>
                        <?php 
                      }
                        if(isset($_POST['modifay'])){
                          $fn = $_POST['firstname'];
                          $fac = $_POST['faculty'];
                            $upd = "UPDATE faculty_manager SET full_name = '$fn', faculty = '$fac' where id = '$_GET[i]'";
                            mysqli_query($con, $upd)or die(mysqli_error($con));
                            header('location:managefacultymanager.php');
                      }

                        ?>
                     
                    </table>
                  </form>
                </div>
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