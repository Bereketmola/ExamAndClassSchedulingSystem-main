<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
if(isset($_GET['delete_id'])){
  $df = $_GET['delete_id'];
    $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
     $sql_query="DELETE FROM faculty WHERE faculty_name='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));
     $sql_query="DELETE FROM admin WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM department_manager WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM course WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM course_information WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM exam_schedule WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM faculty_manager WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     $sql_query="DELETE FROM fandd WHERE faculty='$df'";
     mysqli_query($con, $sql_query)or die(mysqli_error($con));

     header("Location: managfaculty.php");
}
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
<script src="../sweetalert/sweetalert.min.js"></script>
<script src="../sweetalert/sweetalert-devmin.js"></script>
<link rel="stylesheet" href="../sweetalert/sweetalert.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/slidform.js"></script>
<script src="../jquery/jquery.js"></script>
<script type="text/javascript">
function delete_faculty(id)
{
 swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  cancelButtonText: "No",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    window.location = "managfaculty.php?delete_id="+id;
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
      swal("Cancelled", "Your imaginary file is safe : "+id, "error");
  }
});
}
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
                  <form id='managefacultymanagerform'>
                    <h1>Manage Department</h1>
                     <?php 
                      include_once 'faculty.php';
                      $mf = new faculty();
                      $manag = $mf->managefaculty();
                      ?>
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