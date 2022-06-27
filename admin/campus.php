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
              <!--campuse-->
              <div id='campus'>
                <form id='addcampusform' action='' method='POST'>
                    <h1>Add Campus</h1>
                    <table><tr><th><label>Campus Name </label><th id='sapce'>:<th><input type="text" name="campusname" placeholder="Campus Name"
                    id = 'strng' onkeypress="return onlyAlphabets(event,this);" required></tr>
                      <tr><th><label>Location </label><th>:<th><input type="text" name="location" placeholder="Location"
                      id = 'strng2' onkeypress="return onlyAlphabets(event,this);" /></tr>
                      <tr><th colspan='2'><input type="submit" value="Add" name='addcampus'><input type='reset' value='Cancel'>
                        <th id = 'sucess'>
                           <?php 
              if(isset($_POST['addcampus'])){
                include_once "camous.php";
                $cn = $_POST['campusname'];
                $loc = $_POST['location'];
                $cn = strtoupper($cn);
                if(!empty($cn)&&!empty($loc)){
                  $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                  $sel = "SELECT * from campus where campus_name = '$cn'";
                  $resl = mysqli_query($con, $sel);
                  if(mysqli_num_rows($resl) == 0){
                    $addcm = new campus();
                    $ac = $addcm->addcampus($cn, $loc);
                  }
                 else 
                  echo "<img src='../images/images/error1.png' width=20px><b style='color:red;'> Don't save existed data !!</b>" ;
                }
              }
              ?>
                      </tr>
                    </table>
                  </form>
              </div>
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
        
    </div>
</body>
</html>
<?php
}
else
header('location:../index.php');
?>   