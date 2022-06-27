<?php
session_start();
if(isset($_SESSION['user_name'])&&isset($_SESSION['password']))
{
  $dep = $_SESSION['department'];
$con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
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
<script src="../js/jquery.min.js"></script><script src="../jquery/jquery.js"></script>
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
    <div id='container'>
      <div id = ''>
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
                                       
                });
                </script>
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
                    <h1>Add Common Course</h1>
                    <table><tr><th><label>Course Name </label><th id='sapce'>:<th><input type="text" name="course_title"
                    id = 'strng' onkeypress="return onlyAlphabets(event,this);" placeholder="Course Title" required/></tr>
                      <tr><th><label>Course Code </label><th>:<th><input type="text" name="course_code" placeholder="Course Id" required
                        value = '<?php echo $cod; ?>'/></tr>
                      <tr><th><label>Credit Hour </label><th>:<th><select name="credit_hour"  required/>
                        <option></option>
                        <?php 
                        for($w = 1; $w <= 5; $w++){
                          ?>
                          <option><?php echo $w; ?></option>
                          <?php } ?>
                        </select>
                      </tr>
                      <tr><th><label>Instructor </label><th>:<th><select name = 'instructor' required/>
                        <option></option>
                        <?php 
                        $dep = $_SESSION['department'];
                        $con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
                        $query="SELECT * FROM instructor_information WHERE department='$dep'";
                        $resuilt=mysqli_query($con,$query)or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($resuilt)){ 
                         ?>
                         <option><?php echo $row['first_name']; ?></option>
                         <?php } ?>
                       </select></tr>
                      </tr>
                      <tr><th><label>To Department </label><th>:<th>
                        <select name = 'todeparment' required/>
                        <option></option>
                        <?php 
                        $dep = $_SESSION['department'];
                        $query="SELECT * FROM fandd WHERE department_name != '$dep'";
                        $resuilt=mysqli_query($con,$query)or die(mysqli_error($con));
                        while($row=mysqli_fetch_array($resuilt)){ 
                         ?>
                         <option><?php echo $row['department_name']; ?></option>
                         <?php } ?>
                       </select>
                      </tr>
                      <tr><th colspan= 3><hr><tr>
                      <tr><th colspan='2'><input type="submit" value="Add" name = 'addcom'/><input type='reset' value='Cancel'>
                        <th id = 'sucess'><?php 
                        if(isset($_POST['addcom'])){
                          $cd = $_POST['course_title'];
                          $cc = $_POST['course_code'];
                          $ch = $_POST['credit_hour'];
                          $inst = $_POST['instructor'];
                          $tdep = $_POST['todeparment'];
                          $_SESSION['coursecode'] = $_POST['course_code'];
                          $_SESSION['title'] = $_POST['course_title'];
                          $_SESSION['inst'] = $_POST['instructor'];
                          $_SESSION['todep'] = $_POST['todeparment'];
                          $tdep = strtoupper($tdep);
                          include_once 'course.php';
                          $addcom = new course();
                          $add = $addcom->addcommencourse($cd, $cc, $ch, $inst, $tdep);
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