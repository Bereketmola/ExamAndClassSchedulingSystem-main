<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
  $dep = $_SESSION['department'];
  $fac = $_SESSION['faculty'];
  $sem = 'first semister';
  $type = 'classroom schedule';
  $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
  $query="SELECT * FROM section_information WHERE department='$dep'";
  $rr = mysqli_query($con, $query);
  $nmrrr = mysqli_num_rows($rr);
    //about section
  $seci = "SELECT * from section_information where department = '$dep' order by number desc";
  $resul = mysqli_query($con, $seci)or die(mysql_error($con));
  $row = mysqli_fetch_array($resul);
  $sec = $row['number'];
  //checking for room assignement  
$sr = "SELECT * from room_information where department = '$dep'";
$rs = mysqli_query($con, $sr); $nrr = mysqli_num_rows($rs);
  //for identifying course code of the department
  if(str_word_count($dep) == 1){
    $cod = substr($dep, 0, 4);
    $cod = strtolower($cod);
  }
  if(str_word_count($dep) >= 2){
    $arr = explode(' ',trim($dep));
    $ft = substr($arr[0], 0, 2);
    $sco = substr($arr[1], 0, 2);
    $couco = $ft.''.$sco;
    $cod = strtolower($couco);
  }
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
</script>
</head>
<body>  
<?php
if(!isset($_POST['semister'])){
  $selc = "SELECT * from course_information WHERE department = '$dep'";
  $rs = mysqli_query($con, $selc);
  $nr = mysqli_num_rows($rs);
  if($nr == 0){
    ?>
    <?php
  }}?>

    <div id='container'>
        <div id=''>
        </div>
        <div id='content'>
            <?php include_once 'colommen_one.php'; ?>
                    <script>
                    $(document).ready(function() {
                        $('#sub-room').hide(); $('#sub-stud').hide();
                        $('#sub-message').hide();
                        $('#sub-account').hide();                
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
 <?php if($nmrrr == 0){echo 'sdsd';?>
    <script type="text/javascript">
 swal({
  title:'',
  text: " pleace add section Information !!!",
  type: "warning",
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "OK",
  animation: "slide-from-bottom",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    window.location = "addsection.php";
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } 
  else {
      swal("Cancelled", "Your imaginary file is safe : ", "error");
  }
});
</script>
 <?php } ?>
            <div class="formstyle" id='coltwo'>
              <?php
              $dep = $_SESSION['department'];
              $query="SELECT * FROM instructor_information WHERE department='$dep'";
              $rs=mysqli_query($con,$query)or die(mysqli_error($con));
              $nr = mysqli_num_rows($rs);
              if($nr == 0){
                echo '<center><i style = "color:red;">Please add instructor information first </i><a href = "addinstructor.php"> add</a>';
              }
               ?>
              <!--course-->
                 <div id='course2'>
                <form method = 'POST'>
                    <h1>Add All Course</h1>
                    <table><tr><th><label>Course Name </label><th id='sapce'>:<th><input type="text" name="course_title" placeholder="Course Title"
                    id = 'strng' onkeypress="return onlyAlphabets(event,this);" required/></tr>
                      <tr><th><label>Course Code </label><th>:<th><input type="text" name="course_code" placeholder="Course Id" id = 'courseid'
                        value = '<?php echo $cod; ?>' required/></tr>
                      <tr><th><label>Credit Hour </label><th>:<th><select name="credit_hour"  required/>
                        <option></option>
                        <?php 
                        for($w = 1; $w <= 5; $w++){
                          ?>
                          <option><?php echo $w; ?></option>
                          <?php } ?>
                        </select>
                      </tr>
                      <tr><th><label>Instructor </label><th>:<th><select name='instructor' >
                        <option value=''></option>
                      <?php
                      $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                      $query="SELECT * FROM instructor_information WHERE department='$dep'";
                      $resuilt=mysqli_query($con,$query)or die('<h2>query error</h2>');
                      $query2="SELECT * FROM instotherdep WHERE to_department='$dep'";
                      $resuilt2=mysqli_query($con,$query2)or die('<h2>query error</h2>');
                      while($row=mysqli_fetch_array($resuilt)){ 
                       ?>
                       <option><?php echo $row['first_name']; ?></option>
                       <?php } ?>
                       <optgroup label="From Other Department">
                      <?php while($row=mysqli_fetch_array($resuilt2)){ 
                       ?>

                       <option><?php echo $row['instructor']; ?></option>
                       <?php } ?> </optgroup>


                      </select>
                     </tr>
                      </tr>
                      <tr><th><label>Year </label><th>:<th>
                        <select name = 'year' required/>
                        <option></option>
                        <?php 
                    $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                    $sse="SELECT * from fandd where department_name='$dep'";
                    $rsse=mysqli_query($con, $sse)or die("wow ".mysqli_error($con));
                    $row=mysqli_fetch_array($rsse);
                    $ys=$row['year'];
                    if($ys==3){?>
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Thrid Year</option>
                        <?php }
                    else if($ys==4){?>
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Thrid Year</option>
                        <option>Fourth Year</option>
                        <?php }
                    else if($ys==5){?>
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Thrid Year</option>
                        <option>Fourth Year</option>
                        <option>Fifth Year</option>
                        <?php }
                    else if($ys==6){?>
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Thrid Year</option>
                        <option>Fourth Year</option>
                        <option>Fifth Year</option>
                        <option>Sixth Year</option>
                        <?php }
                    else if($ys==7){?>
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Thrid Year</option>
                        <option>Fourth Year</option>
                        <option>Fifth Year</option>
                        <option>Sixth Year</option>
                        <option>Seventh year</option>
                        <?php }?>
                       </select>
                      </tr>
                      </i></tr>
                      <tr><th colspan= 3><hr></tr>
                      <tr><th colspan='2'><input type="submit" value="Add" name = 'addblock'/><input type='reset' value='Cancel'>
                        <th id = 'sucess'>
                          <?php 
                            if($nrr == 0){
                              echo '<center><i style = "color:red;" >ClassRoom are not assigned to your department';
                            }
                          if(isset($_POST['addblock'])){
                            if($nrr >= 1){
                            include_once 'course.php';
                            $_SESSION['course_title'] = $_POST['course_title'];
                            $_SESSION['course_code'] = $_POST['course_code'];
                            $_SESSION['credit_hour'] = $_POST['credit_hour'];
                            $_SESSION['instructor'] = $_POST['instructor'];
                            $_SESSION['year'] = $_POST['year'];
                            $ct = $_POST['course_title'];
                            $cc = $_POST['course_code'];
                            $ch = $_POST['credit_hour'];
                            $in = $_POST['instructor'];
                            $ye = $_POST['year'];
                            $con = mysqli_connect('localhost', 'root', '', 'ocss');
                            $sel = "SELECT * from course where department = '$dep' and course_code = '$cc'";
                            $rts = mysqli_query($con, $sel)or die(mysqli_error($con));
                            $nm = mysqli_num_rows($rts);
                              if($nm == 0){                              
                              $addblock = new course();
                              $block = $addblock->addblockcourse();
                              if($_SESSION['ckecking'] == 'trure'){
                                $ci = "INSERT into course VALUES('$fac', '$dep', '$sem', '$ct','$cc', '$ch', '$in', '$ye','$type')";
                                mysqli_query($con, $ci)or die(mysqli_error($con));
                                echo "<img src='../images/images/succes.png' width=25px>
                                <a href='manageblockcourse.php'>View Record</a>"; 
                                }                             
                              }
                              else
                                echo 'this is exited course';
                            }
                          }
                          ?>
                      </tr>
                    </table>

                  </form>
                </div>
              <!--end of course-->
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