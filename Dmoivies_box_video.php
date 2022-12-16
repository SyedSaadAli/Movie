<?php 
include('security.php');
include('CheckLogin.php');
$M_Video = $_POST['M_Video'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
<style>
    .genreelement{
        right:0 !important; 
    }
</style>
</head>
<body>
<div class="body3">
<nav class="nav_bg">
    <h6 class="text15_bg">Copyright C All Right Reserved</h6>
        <ul class="nav_aliment">
            <h3 class="logo_set"><a class="logo_web" href="index.php">DMOVIES</a></h3>
            <div>
                <li class="center_il"><a href="index.php" class="nav_link">HOME</a></li>
                <li class="center_il"><a href="About_us.php" class="nav_link">ABOUT US</a></li>
                <li class="center_il"><a href="Dmoivies_box.php" class="nav_link">MOVIES</a></li>
                <li class="center_il"><a href="contactus.php" class="nav_link">CONTACT US</a></li>
                

            </div>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <ul class="nav_aliment genreelements" style="right:0;">
            <div>
            
<!--                
                <li class="center_il"><a href="#" class="nav_link HOVER_LINKS">THRILLER</a></li>
                <li class="center_il"><a href="#" class="nav_link HOVER_LINKS">ADVENTURE</a></li>
                <li class="center_il"><a href="#" class="nav_link HOVER_LINKS">MYSTERY</a></li>  -->
        </ul>
        
        <div class="video">
        <video width="720" height="340" controls><source src="admin/<?php echo $M_Video; ?>" type="video/mp4"></video>
        </div>
 </div>
</body>
</html>