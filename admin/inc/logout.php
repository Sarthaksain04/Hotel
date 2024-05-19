<?php 

   require('C:\xampp\htdocs\Hotel\admin\inc\essentials.php');

   session_start();
   session_destroy();
   redirect('index.php');
 



?>