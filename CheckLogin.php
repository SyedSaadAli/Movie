<?php
if(isset($_SESSION['Email']))
{

} else{
	header('location: signin.php');
}
?>