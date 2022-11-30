<?php

   $sql = "SELECT subjects.title, schedule.date, specialities.code, specialities.title as `nazv spec`
       FROM schedule
       INNER JOIN subjects ON subjects.id = schedule.id_subject  
       INNER JOIN subject_to_specialities ON  subject_to_specialities.id_subject = subjects.id
       INNER JOIN specialities ON specialities.id = subject_to_specialities.id_speciality 
       WHERE DAYOFMONTH(date) = " . $_GET['day'] . ";";
   $result = $conn->query($sql);





   if ($result->num_rows > 0) {
      // output data of each row

      $out = "<div class=" . "calendar-item>" . "   
     <div class=" . "calendar-head" . ">Exams</div>
     <table>
     <tr>
       <th>Nazv predmeta</th>
       <th>DATA AND VREMYA</th>
       <th>KODE SPEC</th>
       <th>NAZV SPEC</th>
     </tr>
     <table>
        <tr>
        ";
      while ($row = $result->fetch_assoc()) {
         $out .= "
            <td class=" . "calendar-day " . "> " . $row["title"] . "</td>
            <td class=" . "calendar-day " . "> " . $row["date"] . "</td>
            <td class=" . "calendar-day " . "> " . $row["code"] . "</td>
            <td class=" . "calendar-day " . "> " . $row["nazv spec"] . "</td>
            </tr>";
      }
      $out .= "</table>
         </div>
         </div>";
      echo $out;
   } else {
       $outt = "<div class="."mb-3"."><h1>Экзаменов в этот день нет</h1></div>";
      echo $outt;
   }
?>
   <?php $sql_1 = "select subjects.title 
      from subjects
      ;";
   $result_1 = $conn->query($sql_1);

   ?>