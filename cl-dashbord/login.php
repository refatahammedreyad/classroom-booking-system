<?php  session_start();   
if(isset($_SESSION['use']))  
 {
    header("Location:class_dashbord.php"); 
 }
if(isset($_POST['login']))   
{
     $user = $_POST['name'];
     $pass = $_POST['pass'];
      if($user == "Admin" && $pass == "1234")
         {                                    
          $_SESSION['use']=$user;
          echo '<script type="text/javascript"> window.open("class_dashbord.php","_self");</script>';            //  On Successful Login redirects to home.php
        }
        else
        {
          echo "invalid UserName or Password";        
        }
}
 ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log In </title>
  <link rel="stylesheet" href="./style_login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>

<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">	
			<div class="login">
				<form  action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="name" placeholder="Username" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					<button name="login" type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
