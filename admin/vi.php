<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{

  $con = mysqli_connect('localhost', 'root', '', 'ocss');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/cssformstyle.css" rel="stylesheet" type="text/css" />
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<script src="../js/jquery.min.js"></script>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert/sweetalert.min.js"></script>
<script src="../sweetalert/sweetalert-devmin.js"></script>
<link rel="stylesheet" href="../sweetalert/sweetalert.css">
<script>
              $(document).ready(function() {
                $('#sub-campus').hide();
                $('#sub-account').hide();
                $('#sub-faculty').hide();
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
                <form id='addfacultyform' action='' method='POST'>
                    <h1>Video as tutorial</h1>
    <video controls width="630" height="400">
        <source src="../vedios/video 1.mp4" type="video/mp4" >
    </video><br>Dwonloade <a href = '../vedios/video 1.mp4' download>( <i class="fa fa-download" ></i> </a> )
                  </form>
                </div>
              <!--End of Faculty-->
            </div>
            <div id='colthree'>
              <?php include_once 'link.php'; ?>
            </div>
            <!--end of colo 3---->
        </div>
        <!--endofcontent---->
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