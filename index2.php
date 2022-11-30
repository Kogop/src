<?php
#$conn = mysqli_connect("sql302.epizy.com", "epiz_33013415", "VTDew7j8RlIBKR", "epiz_33013415_myDB");
$conn = mysqli_connect("localhost", "root", "Idropmydick23", "exams");
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}


if (!isset($_GET['day'])) {
   require_once('./index.php');
   echo "NO exams today YAY ";
} else {
   #require_once('./htmlpart.php');
   #echo " Exams today ((((   ";
   #print_r($_GET); 
   ?>
   <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title><?= $title = "Exams Schedule" ?></title>
  <!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
-->
  <link rel="stylesheet" href="./styles.css">
</head>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">тоже Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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
   <div  style="width:300px; align-content: center;">
   <form action="" method="POST">
   
        <div class="mb-3" style="padding: 15px; align-content: center;">
         <label for="">Выберите время экзамена</label>
         <input type="time" name="exam_time" id="time_input">
        </div>
    
      <div class="mb-3" style="padding: 15px;">
         <label for="">Введите название дисциплины</label>
         <select class="form-select" aria-label="Default select example" name="title">
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
      <div class="mb-3" style="padding: 15px;">
         <button type="submit" class="btn btn-primary" name="submit_btn">Добавить экзамен</button>

      </div>
   </form>
   </div>
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