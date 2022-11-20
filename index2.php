<?php




if (!isset($_GET['day'])) {
   require_once('./htmlpart.php');
   echo "NO exams today YAY ";
   

  
} else {
   require_once('./htmlpart.php');
   echo " Exams today ((((";
   print_r($_GET);
}

#echo "NO exams today YAY";




?>