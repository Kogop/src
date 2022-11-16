   <?php  
   
    require_once('./htmlpart/htmlpart.php');
      $title = "hello, world";
      #print_r(get_loaded_extensions());
      #phpinfo(1);
      $connect = mysqli_connect("localhost", "root", "Idropmydick23", "exams");
      if (!$connect) {
         echo "ERROR: Can't connect to database";
      }










    
   ?>
    
   
 