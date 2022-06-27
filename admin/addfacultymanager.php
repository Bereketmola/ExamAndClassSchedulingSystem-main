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
            <div class="formstyle" id='coltwo'>
              
              <!--Faculty-->
              <div id='faculty2'>
                  <form id='managefacultymanagerform' action='' method='POST'>
                    <h1>Add Department Manager</h1>
                    <table><tr><th><label>Fist Name </label><th id='sapce'>:<th><input type="text" name="firstname" placeholder="First Name" 
                      id = 'strng' onkeypress="return onlyAlphabets(event,this);"  required></tr>
                      <tr><th><label>Last Name </label><th>:<th><input type="text" name="lastname" placeholder="Last Name"
                      id = 'strng2' onkeypress="return onlyAlphabets(event,this);"  required></tr>
                      <tr><th><label>ID </label><th id='sapce'>:<th><input type="text" name="id" placeholder="ID"
                      id = 'strng3'  required></tr>
                      <tr><th><label>Manages</label> <th>:<th><select name='maneges'>
                      <?php 
                      $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                      $query="SELECT faculty_name FROM faculty";
                      $resuilt=mysqli_query($con,$query)or die('<h2>query error</h2>');
                      while($row=mysqli_fetch_array($resuilt)){ 
                         ?>
                         <option><?php echo $row['faculty_name']; ?></option>
                         <?php } ?>
                      <tr><th colspan='2'><input type="submit" value="Add" name='addfm' ><input type='reset' value = 'Cancel'>
                        <td id = 'sucess'>
                          <?php 
              if(isset($_POST['addfm'])){
                include_once 'faculty.php';
                $fn = $_POST['firstname'];
                $ln = $_POST['lastname'];
                $id = $_POST['id'];
                $fac = $_POST['maneges'];$fn = $fn.' '.$ln;
                if(!empty($fn)&&!empty($ln)&&!empty($id)&&!empty($fac)){
                  $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                  $sel = "SELECT * from faculty_manager where faculty = '$fac'";
                  $resl = mysqli_query($con, $sel);
                  if(mysqli_num_rows($resl) == 0){                 
                    $adfm = new faculty();
                    $a = $adfm->addfacultymanager($fn, $ln, $id, $fac);
                  }
                  else 
                   echo "<img src='../images/images/error1.png' width=20px><b style='color:red;'>Don't save $fac exist !!</b>" ;
                }
              }
              ?>
                      </tr>
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
        
    </div>
</body>
</html>
<?php
}
else
header('location:../index.php');
?>   