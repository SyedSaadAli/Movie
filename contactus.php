<?php 

include('security.php');
include('CheckLogin.php');

if(isset($_POST['contact']))
{
  $F_Name = $_POST['F_Name'];
  $L_Name = $_POST['L_Name'];
  $Email = $_POST['Email'];
  $Message = $_POST['Message'];
  

  $query = "INSERT INTO contact (First_Name,Last_Name,Email,Message) VALUES 
  ('$F_Name','$L_Name','$Email','$Message')";
  $query_run = mysqli_query($connection, $query);
  

   if($query_run)
    {
        $_SESSION['status'] = "Message Delivered !";
        $_SESSION['status_code'] = "success";
        header('Location: contactus.php');
    }
    else
    {
        $_SESSION['status'] = "Message Not Delivered !";
        $_SESSION['status_code'] = "error";
        header('Location: contactus.php');
    }
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>

</head>
<body>
<div class="body_contact">
<nav class="nav_bg">
        <ul class="nav_aliment">
            <h3 class="logo_set"><a class="logo_web" href="index.php">DMOVIES</a></h3>
            <div>
                <li class="center_il"><a href="index.php" class="nav_link">HOME</a></li>
                <li class="center_il"><a href="About_us.php" class="nav_link">ABOUT US</a></li>
                <li class="center_il"><a href="Dmoivies_box.php" class="nav_link">MOVIES</a></li>
                <li class="center_il"><a href="contactus.php" class="nav_link">CONTACT US</a></li>
                <li class="center_il"><a href="signin.php" class="nav_link">SIGNIN</a></li>
                <li class="center_il"><a href="signup.php" class="nav_link">SIGNUP</a></li>
                <li class="center_il"><a href="logout.php" class="nav_link">LOGOUT</a></li>

            </div>
        </ul>
    </nav>
           
             
             <div class="container22">
    <div class="form">
            <h2 style="color: white; margin-left: 130px; margin-bottom: 10px; margin-top: 10px; text-decoration: underline;">Contact</h2>
      <form class="signUp" action="contactus.php" method="post">
        <div class="formGroup">
          <input type="text" id="userName" name="F_Name" placeholder="First Name" autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="text" name="L_Name" placeholder="Last Name" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="email" id="password" name="Email" placeholder="Email" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="text" id="confirmPassword" name="Message" placeholder=" Massage" required autocomplete="off">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="submit" name="contact" class="btn2">Send</button>
        </div>

      </form>
          

     <h6 class="text10_bg">Copyright C All Right Reserved</h6>
 </div>
</body>
</html>


