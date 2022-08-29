<?php
  $login = $_POST['txtLogin'];
  $senha = $_POST['txtSenha'];

  if (($login == 'adm' && $senha == '1234')) {
  			 session_start();
  			 $_SESSION['login-session'] = $login;
  			 $_SESSION['senha-session'] = $senha;
     header("location: AreaRestrita/indexAreaRestrita.php");
     
   }
   
   else{
   				header("location: index.php"); 
   	}


?> 