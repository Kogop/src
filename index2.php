<?php

   $conn = mysqli_connect("localhost", "root", "Idropmydick23", "exams");
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }


   if (!isset($_GET['day'])) {
      require_once('./htmlpart.php');
      echo "NO exams today YAY ";
      
   
     
   } else {
      require_once('./htmlpart.php');
      #echo " Exams today ((((   ";
      #print_r($_GET);
      $sql = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
      $result = $conn->query($sql);
      $sql_1 = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
      $result_1 = $conn->query($sql_1);
      $sql_2 = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
      $result_2 = $conn->query($sql_2);
      $sql_3 = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
      $result_3 = $conn->query($sql_3);



   
      if ($result->num_rows > 0) {
     // output data of each row
         while($row = $result->fetch_assoc()) {
       echo "<div class="."calendar-item>"."   
         <div class="."calendar-head".">Exams</div>
         <table>
         <tr>
           <th>ID</th>
           <th>id_subject</th>
           <th>DATE</th>
         </tr>
         <table>
            <tr>
            <td class="."calendar-day ".">" . $row["id"]. "</td>
            <td class="."calendar-day "."> " . $row["id_subject"]. "</td>
            <td class="."calendar-day "."> " . $row["date"]. "</td><br></table></div></div>";
         }
      } else {
      echo "0 results";
      }
   
   
   }
   




   mysqli_close($conn);




#echo "NO exams today YAY";




?>