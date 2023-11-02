<?php

   if(isset($_POST['submit']) )
   {
      echo("First name: " . $_POST['myname'] . "<br />\\n");
      echo("Last name: " . $_POST['mynumber'] . "<br />\\n");
     echo "<script type=\"text/javascript\">".
     "alert('hi');".
     "</script>";
   }
?>
