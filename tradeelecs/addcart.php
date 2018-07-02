<?php
session_start();
if(isset($_SESSION['user_id']))
{
    $link=mysqli_connect("localhost","root","","tradeelecs");
            $qry="insert into cart values('$_SESSION[user_id]','$_GET[id]','$_GET[nm]')";
            //echo "insert into cart('$_SESSION[user_id]','$_GET[id]','$_GET[nm]')";
            $resultset=mysqli_query($link,$qry);
            if($resultset)
            header("location:cart.php?nm=$_GET[nm]&id=$_GET[id]");
}
else
{
   
    header("location:signin.php");
}

?>