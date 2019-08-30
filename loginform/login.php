<?php  session_start();  // session starts with the help of this function 


if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Ank" && $pass == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         header("Location:welcome.php");

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
?> 