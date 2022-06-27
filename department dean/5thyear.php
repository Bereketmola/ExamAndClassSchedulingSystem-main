<?php
  $year5 = 'Fifth Year';
  $ss = "SELECT * from course where department = '$dep' and year = '$year5'";
  $rss = mysqli_query($con, $ss);
  $nr = mysqli_num_rows($rss);
  if($nr > 0){
    echo '<td><center><b>'.$year5.'</b>';
        echo '<table><tr><td id = "td">';
    if($nr == 1){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']." :</p>";
        }
       echo "<select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      } 
    if($nr == 2){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.</tr></table>";
      }

      if($nr == 3){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'FifthYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }

      if($nr == 4){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 5){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
        echo "<select name = 'FifthYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
      }
      if($nr == 6){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
    if($nr == 7){
        while($row = mysqli_fetch_array($rss)){
          echo "<p>".$row['course_title']."  :</p>";
        }
       echo "<td><select name = 'FifthYear1' required><option></option><option>1:00</option><option>1:30</option><option>2</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear2' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear3' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear4' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear5' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear6' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select>Hr.";
       echo "<select name = 'FifthYear7' required><option></option><option>1:00</option><option>1:30</option><option>2:00</option><option>2:30</option><option>3:00</option></select> Hr.</tr></table>";
    }
  }
  ?>