<?php
$dep = $_SESSION['department'];
$year1 = 'First Year';
  $ss = "SELECT * from course where department = '$dep' and year = '$year1'";
  $rss = mysqli_query($con, $ss);
  $nr = mysqli_num_rows($rss);
  if($nr > 0){
    echo '<center><b>'.$year1.'</b>';
        echo '<table><tr><td id = "td">';
    if($nr == 1){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']." :</p>";
        }
       echo "<select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      } 
    if($nr == 2){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      }

      if($nr == 3){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'FirstYear3' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }

      if($nr == 4){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear3' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear4' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 5){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear3' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear4' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'FirstYear5' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 6){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear3' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear4' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear5' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear6' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
    if($nr == 7){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FirstYear1' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear2' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear3' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear4' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear5' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear6' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FirstYear7' id = 'select' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
  }
$year2 = 'Second Year';
  $ss = "SELECT * from course where department = '$dep' and year = '$year2'";
  $rss = mysqli_query($con, $ss);
  $nr = mysqli_num_rows($rss);
  if($nr > 0){
    echo '<td><center><b>'.$year2.'</b>';
        echo '<table><tr><td id = "td">';
    if($nr == 1){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']." :</p>";
        }
       echo "<select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      } 
    if($nr == 2){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      }

      if($nr == 3){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'SecondYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }

      if($nr == 4){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 5){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'SecondYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 6){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
    if($nr == 7){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'SecondYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'SecondYear7' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
    echo '<tr>';
  }
  $year3 = 'Thrid Year';
  $ss = "SELECT * from course where department = '$dep' and year = '$year3'";
  $rss = mysqli_query($con, $ss);
  $nr = mysqli_num_rows($rss);
  if($nr > 0){
    echo '<td><center><b>'.$year3.'</b>';
        echo '<table><tr><td id = "td">';
    if($nr == 1){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']." :</p>";
        }
       echo "<select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      } 
    if($nr == 2){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      }

      if($nr == 3){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'ThridYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }

      if($nr == 4){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 5){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'ThridYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 6){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
    if($nr == 7){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'ThridYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'ThridYear7' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
  }
$se = "SELECT * from fandd where department_name = '$dep'";
$rst = mysqli_query($con, $se)or die(mysqli_error($con));
$row = mysqli_fetch_array($rst);
$ys = $row['year'];
if($ys == 4){
  include '4thyear.php';
}
if($ys == 5){
  include '4thyear.php';
  echo '<tr>';
  include '5thyear.php';
  echo '</tr>';
}
if($ys == 6){
  include '4thyear.php';
  echo '<tr>';
  include '5thyear.php';
  include '6thyear.php';
  echo '</tr>';
}
if($ys == 7){
  include '4thyear.php';
  echo '<tr>';
  include '5thyear.php';
  include '6thyear.php';
  echo '</tr><tr>';
  include '7thyear.php';
  echo '</tr>';
}
?>