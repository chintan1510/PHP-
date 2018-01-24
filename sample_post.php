<?php
   setcookie("name", "John Watkin", mktime()+10, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
   session_start();
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies";
		echo $_COOKIE["name"]. "<br />";
		print_r($_POST);
      echo $_SESSION['name'];
      ?>


   </body>
   
</html>