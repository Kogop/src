<?php
#$conn = mysqli_connect("sql302.epizy.com", "epiz_33013415", "VTDew7j8RlIBKR", "epiz_33013415_myDB");
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
      echo "0 results";
   }
?>
   <?php $sql_1 = "select subjects.title 
      from subjects
      ;";
   $result_1 = $conn->query($sql_1);

   ?>
   <form action="" method="POST">
      <div class="POST-group">
         <label for="">Выберите время экзамена</label>
         <input type="time" name="exam_time" id="time_input">

      </div>
      <div class="POST-group">
         <label for="">Введите название дисциплины</label>
         <select name="title">
            <?php
            while ($row_1 = $result_1->fetch_assoc()) { var_dump($row_1);   ?>
               <option value="<?php echo $row_1['title'];  ?>">
                     <?php echo $row_1['title'];   ?>
               </option>
            <?php
            
            }
            ?>
         </select>

      </div>
      <div class="POST-group">
         <button type="submit" name="submit_btn">Добавить экзамен</button>

      </div>
   </form>

<?php
   if (isset($_POST['submit_btn'])) {
      //TODO сделать сейчас добавление времени и экза в бд
         #var_dump($_POST);
         #var_dump($_GET);
      $sql_2 = "INSERT INTO schedule(date) VALUES("."'2022-12-". $_GET['day']." ". $_POST['exam_time'].":00'".");";
      #echo $sql_2;
      $result_2 = $conn->query($sql_2);
      #while ($row_2 = $result_2->fetch_assoc()) {
         $sql_3 = "SELECT id FROM subjects WHERE title ='". $_POST['title']."';";
         #var_dump($_POST['title']);
         $result_3 = $conn->query($sql_3);
         while ($row_2 = $result_3->fetch_assoc()) {
            $sql_4 = "UPDATE schedule SET id_subject = ". $row_2['id'] ." WHERE date ="."'2022-12-". $_GET['day']." ". $_POST['exam_time'].":00';";
            #var_dump($sql_2);
            #var_dump($row_2);
            $result_4 = $conn->query($sql_4);
            
         }
        # var_dump($sql_2);
      #}
      

      
      

     
    

   }
}





mysqli_close($conn);




#echo "NO exams today YAY";




?>