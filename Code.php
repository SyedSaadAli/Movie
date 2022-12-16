<?php 

include('security.php');

// echo "Working";



//--------------------------------------------------------------------------------------------

if(isset($_POST['SignUp_Btn']))
{


  if($_POST['Password'] == $_POST['CP']){

  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
 

  $query = "INSERT INTO user (First_Name,Last_Name,Email,Password) VALUES 
  ('$FName','$LName','$Email','$Password')";
  $query_run = mysqli_query($connection, $query);
header('Location: signin.php');
  

}else{
   $_SESSION['status'] = "Password And Confirm Password Do Not Match!";
        $_SESSION['status_code'] = "success";
   header('Location: signup.php');
     
}

}
//--------------------------------------------------------------------------------------------



if(isset($_POST['signin_btn']))
{

  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

     $query = "SELECT * FROM admin";
    $query_run = mysqli_query($connection, $query);

     if(mysqli_num_rows($query_run) > 0){
                while($row1 = mysqli_fetch_assoc($query_run)){
                   if($row1['Email']==$Email AND $row1['Password']==$Password ){
                     echo "Working";
                     $_SESSION['Email'] = $row1['Email'];
                     header('Location: admin/index.php');
                   }

                }
             }


    $query2 = "SELECT * FROM user";
    $query_run2 = mysqli_query($connection, $query2);

     if(mysqli_num_rows($query_run2) > 0){
                while($row2 = mysqli_fetch_assoc($query_run2)){
                   if($row2['Email'] === $Email AND $row2['Password'] ===  $Password ){
                     $_SESSION['Email'] = $row2['Email'] ;
                     
                    
                      header('Location: index.php');
                      exit();
                   }

                }
             }

                exit();
            if(!isset($_SESSION['Email'])){
   $_SESSION['status'] = "Wrong Email And Password !";
   $_SESSION['status_code'] = "success";
   header('Location: signin.php');
     
}

}

//--------------------------------------------------------------------------------------------

?>