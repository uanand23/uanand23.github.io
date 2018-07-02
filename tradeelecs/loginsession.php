<?php
session_start();
if(isset($_SESSION['user_id']))
{
    echo "welcome";
    header("location:adminlogin.php");
}
else
{
 header("location:signin.php");
}




?>