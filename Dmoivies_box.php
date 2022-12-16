<?php 
include('security.php');
include('CheckLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
<style>
  .nav_aliment{
    right:0 !important;
  }
</style>
</head>
<body>
<div class="body3">
    <h6 class="text4_bg">Copyright C All Right Reserved</h6>
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
    <br>
    <br>
    <br>
    <br>
    <ul class="nav_aliment" style="right:0;">
            <div>
               <li class="center_il"><a href="#" class="nav_link"><b>GENRE</b></a></li>
               <form action="Dmoivies_box.php" method="POST" >
                <?php
            $query = "SELECT * FROM genre";
            $query_run = mysqli_query($connection, $query);
           
            if(mysqli_num_rows($query_run) > 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                <li class="center_il"><button type="submit" value="<?php echo $row['Genre_ID']; ?>" name="Genre_ID"><?php echo $row['Genre_Name']; ?></button></li>
                
                <?php
                }}
                ?>
                </form>
            </div>
        </ul>

<!-- <form action="Dmoivies_box_video.php" method="post">
<div class="crd">
     <div class="card">
  <img src=admin/<?php //echo $row['M_Image']; ?> alt="Avatar" style="width:245px; height: 160px; border-radius: 20px; padding-bottom: 10px;">
  <div class="container" style="border-bottom-right-radius: 9%; border-bottom-left-radius: 9%; width: 215px; background-color: white;">
    <h4 style="color: #424443; margin-bottom: 10px;"><b><?php //echo $row['M_Title']; ?></b></h4> 
    <h6 style="margin-bottom: 10px;"><?php //echo $row['M_Description']; ?></h6> 
    <input type="hidden" name="M_Video" value="<?php //echo $row['M_Video']; ?>">
    <button type="submit" class="button button5">Watch now</button>
  </div>
</div>
  </form>
 -->
<div class="moviecontainer" style="margin:0 auto;width:90%;position:relative;top:60px">
<form action="Dmoivies_box_video.php" method="post"> 
<?php 
$query = "SELECT * FROM movie";
$query_run = mysqli_query($connection, $query);
$query1 = "SELECT * FROM movie";
$query_run1 = mysqli_query($connection, $query1);


if(isset($_POST['Genre_ID'])){

  if(mysqli_num_rows($query_run1) > 0){
    while($row1 = mysqli_fetch_assoc($query_run1)){
      if($row1['Genre_ID'] === $_POST['Genre_ID']){
               $x=$row1['Movie_ID'];
               $GLOBALS[$x]=$x;
  
  ?>
    <div class="mcard" style="width:250px;height:400px;background-color:white;overflow:hidden;border-radius:5px;display:inline-block;margin:1%;">
      <div class="image" style="background-image:url('admin/<?php echo $row1['M_Image']; ?>');background-size:cover;width:100%;height:50%;background-color:green;"></div>
      <h2 style="margin-top:10px;text-align:center;"><?php echo $row1['M_Title']; ?></h2>
      <p style="width:80%;margin-left:10%;font-size:12px;"><?php echo $row1['M_Description']; ?></p><br>
      <input type="hidden" name="M_Video" value="<?php echo $row1['M_Video']; ?>">
      <button type="submit" class="button button5">Watch now</button>
    </div>
    <?php 
    }}}}

if(mysqli_num_rows($query_run) > 0){
  while($row = mysqli_fetch_assoc($query_run)){
            $x=$row['Movie_ID'];
          if(!isset($GLOBALS[$x]) ){
          $GLOBALS[$x]=$x;

?>
  <div class="mcard" style="width:250px;height:400px;background-color:white;overflow:hidden;border-radius:5px;display:inline-block;margin:1%;">
    <div class="image" style="background-image:url('admin/<?php echo $row['M_Image']; ?>');background-size:cover;width:100%;height:50%;background-color:green;"></div>
    <h2 style="margin-top:10px;text-align:center;"><?php echo $row['M_Title']; ?></h2>
    <p style="width:80%;margin-left:10%;font-size:12px;"><?php echo $row['M_Description']; ?></p><br>
    <input type="hidden" name="M_Video" value="<?php echo $row['M_Video']; ?>">
    <button type="submit" class="button button5">Watch now</button>
  </div>
  <?php 
 }}}

 
?>
</form>
</div>
</div>

</div>
</div>
 </div>
</body>
</html>