<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
  $dep = $_SESSION['department'];
  $con = mysqli_connect('localhost', 'root', '', 'ocss');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Department Manager page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/cssformstyle.css">
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css" media="all" />
<script src="../js/jquery.min.js"></script>
<script src="../sweetalert/sweetalert.min.js"></script>
<script src="../sweetalert/sweetalert-devmin.js"></script>
<link rel="stylesheet" href="../sweetalert/sweetalert.css">
<script src="../jquery/jquery.js"></script>
<script src="../admin/validation.js"></script>
  <script>
  $(document).ready(function(){
      $("input").focus(function(){
          $("#sucess").css("display", "inline").hide();
      });
  });
  function updateaccount()
  {
   swal({
    title: "",
    text: "Change your password for security purpose",
    type: "warning",
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Change",
    closeOnConfirm: false,
    animation: "slide-from-top"
  },
  function(isConfirm){
    if (isConfirm) {
      window.location = "chengeaccount.php";
    } 
  });
  }
  </script>
</head>
<body>  
  <?php
  $sel = "SELECT * from admin where department = '$dep' and user_name = '$_SESSION[user_name]' and password = '$_SESSION[password]'";
  $rs = mysqli_query($con, $sel);
  $row = mysqli_fetch_array($rs);
  if($row['updated'] == 'no'){
    ?><script>
    updateaccount();
    </script>
    <?php
  }
?>
    <div id='container'>
      <div id = ''>
        </div>
        <div id='content'>
           <?php
           include_once'colommen_one.php';
           ?>
                  <script>
                      $(document).ready(function() {
                        $('#sub-room').hide();
                        $('#sub-stud').hide();
                        $('#sub-message').hide();
                        $('#sub-account').hide();
                        $('#sub-course').hide();    
                        $('#sub-section').hide();
                        $('#sub-schedule').hide();
                        $('#account').click(function() {
                           $('#sub-instructor').hide();
                           $('#sub-room').hide();
                           $('#sub-message').hide();
                           $('#sub-stud').hide();
                           $('#sub-course').hide();
                           $('#sub-section').hide();
                           $('#sub-schedule').hide();
                            $('#sub-account').slideDown(800);
                        });
                        
                        $('#instructor').click(function() {
                          $('#sub-room').hide();
                          $('#sub-stud').hide();
                          $('#sub-message').hide();
                          $('#sub-account').hide();
                          $('#sub-course').hide();
                          $('#sub-section').hide();
                          $('#sub-schedule').hide();
                          $('#sub-instructor').slideDown(800);
                        });
                       
                        $('#room').click(function() {
                        $('#sub-account').hide();$('#sub-stud').hide();
                         $('#sub-instructor').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-room').slideDown(800);
                        });  
                        $('#message').click(function() {
                          $('#sub-account').hide();$('#sub-stud').hide();
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-message').slideDown(800);
                        });
                        $('#course').click(function() {
                          $('#sub-account').hide();$('#sub-stud').hide();
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-message').show();
                         $('#sub-message').hide();
                         $('#sub-section').hide();
                         $('#sub-schedule').hide();
                         $('#sub-course').slideDown(800);
                        });
                        $('#section').click(function() {
                        $('#sub-account').hide();$('#sub-stud').hide();
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-schedule').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').slideDown(800);
                        });
                        $('#schedule').click(function() {
                        $('#sub-account').hide();$('#sub-stud').hide();
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();     
                         $('#sub-schedule').slideDown(800);
                        });
                        $('#student').click(function() {
                        $('#sub-account').hide();
                         $('#sub-instructor').hide();
                         $('#sub-room').hide();
                         $('#sub-schedule').hide();
                         $('#sub-message').hide();
                         $('#sub-course').hide();
                         $('#sub-section').hide();   
                         $('#sub-stud').slideDown(800);
                        });
                                       
                });
                </script>
            <div class="formstyle" id='coltwo'>
              <!--instructor-->
              <div id='instructor2'>
                <form id='addinstructorform' method='POST'>
                    <h1>Add instructor</h1>
                    <table><tr><th><label>First Name </label><th id='sapce'>:<th><input type="text" name="firstname" placeholder="First Name"
                    id = 'strng' onkeypress="return onlyAlphabets(event,this);" required></tr>
                      <tr><th><label>Last Name </label><th>:<th><input type="text" name="lastname" placeholder="Last Name"
                      id = 'strng2' onkeypress="return onlyAlphabets(event,this);" required></tr>
                      <tr><th><label>ID </label><th>:<th><input type="text" name="id" placeholder="Instructor ID" id = 'strng4' required></tr>
                      <tr><th><label>Rank </label><th>:<th><input type="text" name="status" placeholder="Status"
                        id = 'strng3' onkeypress="return onlyAlphabets(event,this);" required></tr>
                      <tr><th colspan = 3><hr></tr>
                      <tr><th colspan='2'><input type="submit" value="Add" name = 'addinst'><input type='reset' value='Cancel'>
                        <th id = 'sucess'>
                          <?php 
                          if(isset($_POST['addinst'])){
                            $fn = $_POST['firstname'];
                            $ln = $_POST['lastname'];
                            $id = $_POST['id'];
                            $st = $_POST['status'];
                            $fn = ucfirst($fn);
                            $ln = ucfirst($ln);
                            $ln = $fn.' '.$ln;
                            $dep = $_SESSION['department'];
                            $seln = "SELECT * from instructor_information where department = '$dep' and instructor_id = '$id'";
                            $rslt = mysqli_query($con, $seln)or die(mysql_error($con));
                            $nmb = mysqli_num_rows($rslt);
                            if($nmb == 0){
                              include_once 'instructor.php';
                              $add = new instructor();
                              $addisn = $add->addinstructor($dep, $ln, $id, $st);
                            }
                            else
                              echo "<img src='../images/images/error1.png' width=15px> <b style='color:red; font-family:Bradley Hand ITC;'>
                          Don't Save Exist Instructor</b>";
                          }
                          ?>
                      </tr>
                    </table>
                  </form>
                </div>
              <!--End of instructor-->
            </div>
            <div id='colthree'>
                <?php
                include_once 'link.php';
                ?>
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