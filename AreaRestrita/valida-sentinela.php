<?php

   session_start();
  
   if (($_SESSION['login-session'] != 'adm') 
   || ($_SESSION['senha-session'] != '1234')){
      header("location:../index.php");
                  			
   }

?> 