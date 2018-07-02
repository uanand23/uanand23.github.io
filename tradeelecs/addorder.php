<?php
 
session_start();
if(isset($_SESSION['user_id']))
{ include_once("orderdetails.php");
    if(isset($_POST['sub1']))
    {
   $link=mysqli_connect("localhost","root","","tradeelecs");
            $qry="insert into orderplace values('$_SESSION[user_id]','$_POST[Mobile]','$_GET[id]','$_POST[name]','$_POST[local]','$_POST[city]','$_POST[district]','$_POST[state]','$_POST[pin]','','$_GET[nm]','$_POST[r2]','$_POST[quantity]')";
            //echo "insert into cart('$_SESSION[user_id]','$_GET[id]','$_GET[nm]')";
            $resultset=mysqli_query($link,$qry);
           if($resultset)
            header("location:order.php");
           }
}
else
{
   // echo "welcome";
    header("location:signin.php");
}

?>