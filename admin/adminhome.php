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
<script src="validation.js"></script>
<link rel="stylesheet" href="../sweetalert/sweetalert.css">
<script>
  function updateaccount()
  {
   swal({
    title: "",
    text: "Chenge your password for more security perpose",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Chenge",
    cancelButtonText: "Don't Chenge",
    closeOnConfirm: false,
    animation: "slide-from-top"
  },
  function(isConfirm){
    if (isConfirm) {
      window.location = "chengeaccount.php";
    } 
  });
  }
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
  $(document).ready(function(){
      $("input").focus(function(){
          $("#sucess").css("display", "inline").hide();
      });
  }); 
  </script>
</head>
<body>  <?php
  $sel = "SELECT * from admin where faculty = '$_SESSION[faculty]' and user_name = '$_SESSION[user_name]' and password = '$_SESSION[password]'";
  $rs = mysqli_query($con, $sel)or die(mysqli_error($con));
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
        <?php include_once 'navigation.php' ?>
        <div id='content'>
          <?php include_once 'collomenone.php'; ?>
            <div class="formstyle" id='coltwo'>
              <!--Faculty-->
              <div id='faculty2'>
                <form id='addfacultyform' action='' method='POST'>
                    <h1>Add Department Dean</h1>
                    <table><tr><th><label>Department Name </label><th>:<th><input id = 'strng' type="text" name="facultyname" placeholder="Department Name"
                    onkeypress="return onlyAlphabets(event,this);" required></tr>
                      <tr><th><label>Campus </label><th>:<th><select name = 'campus' required>
                        <option></option>
                        <?php
                        $con = mysqli_connect('localhost', 'root', '','ocss');
                        $sel = "SELECT * from campus";
                        $rt = mysqli_query($con,$sel)or die(mysqli_error($con));
                        while($row = mysqli_fetch_array($rt)){
                          ?>
                          <option><?php echo $row['campus_name']; ?>
                          <?php
                        }
                        ?>
                      </tr>
                      <tr><th colspan=2><input type="submit" value="Add" name = 'addfac'><input type='reset' value='Cancel'>
                        <td id = 'sucess'>            
                          <?php 
                    if(isset($_POST['addfac'])){
                      include_once 'faculty.php';
                      $fn = $_POST['facultyname'];
                      $cm = $_POST['campus'];
                      $fn = strtoupper($fn);
                      if(!empty($fn)&&!empty($cm)){
                        $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                        $sel = "SELECT * from faculty where faculty_name = '$fn'";
                        $resl = mysqli_query($con, $sel);
                        if(mysqli_num_rows($resl) == 0){
                          $addfac = new faculty();
                          $add = $addfac->addfaculty($fn, $cm);
                        }
                        else 
                          echo "<img src='../images/images/error1.png' width=20px><i style='color:red;'> Don't save existed faculty !!</i>" ;
                      }
                    }
                    ?>

                      </tr>
                    </table>
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
              
        </div>
    </div>
</body>
</html>
<?php
}
else
header('location:../index.php');
?>   