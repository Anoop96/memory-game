<html>
<body>
<?php

    session_start();

     $username ="user";
     $password ="password";

     if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
        header("Location: success.php");
     }
     if(isset($_POST['username'])&&isset($_POST['password'])){
        if($_POST['username']== $username && $_POST['password'] == $password)
        {
        	$_SESSION['username']=$_POST['username'];
        	$_SESSION['password']=$_POST['password'];
          $_SESSION['loggedin']=true;
             header("Location: success.php");
        }
      }

?>
</body>
</html>