<?php
   $conn = mysqli_connect("sql302.epizy.com", "epiz_33013415", "VTDew7j8RlIBKR", "epiz_33013415_myDB");
   #$conn = mysqli_connect("localhost", "root", "Idropmydick23", "exams");
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
      $sql = "SELECT subjects.title, schedule.date, subject_to_specialities.id_speciality, specialities.title as `nazv spec`
       FROM `schedule`
       INNER JOIN subjects ON subjects.id = schedule.id_subject  
       INNER JOIN subject_to_specialities ON  subject_to_specialities.id_subject = subjects.id
       INNER JOIN specialities ON specialities.id = subject_to_specialities.id_speciality 
       WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
      $result = $conn->query($sql);
      



   
      if ($result->num_rows > 0) {
     // output data of each row
         while($row = $result->fetch_assoc()) {     // TODO: когда две и > cпециальностей на одну дату, то заново создается шапка и название таблицы, переделать
            #$number = $row["id_subject"];
           # $sql_1 = "SELECT `title` FROM `subjects` WHERE id = ". $number. ";";
            #$result_1 = $conn->query($sql_1);
            #$row_1 = $result->fetch_assoc();
            #echo $sql_1;
            #$sql_2 = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
            #$result_2 = $conn->query($sql_2);
            #$sql_3 = "SELECT * FROM `schedule` WHERE DAYOFMONTH(`date`) = ".$_GET['day'].";";
            #$result_3 = $conn->query($sql_3);
            # <td class="."calendar-day ".">" . $row["id"]. "</td>

       echo "<div class="."calendar-item>"."   
         <div class="."calendar-head".">Exams</div>
         <table>
         <tr>
           <th>Nazv predmeta</th>
           <th>DATA AND VREMYA</th>
           <th>KODE ITEM</th>
           <th>NAZV SPEC</th>
         </tr>
         <table>
            <tr>
            
            <td class="."calendar-day "."> " . $row["title"]. "</td>
            <td class="."calendar-day "."> " . $row["date"]. "</td>
            <td class="."calendar-day "."> " . $row["id_speciality"]. "</td>
            <td class="."calendar-day "."> " . $row["nazv spec"]. "</td>
            <br>
            </table>
            </div>
            </div>";
         }
      } else {
      echo "0 results";
      }
   
   
   }
   




   mysqli_close($conn);




#echo "NO exams today YAY";




?>