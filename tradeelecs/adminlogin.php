<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function selec(val)
        {
            
            if(val.localeCompare("choose")!=0)
            { 
              //alert(window.location.href);
                window.location=val+".php?loc="+window.location.href;
            }
            
        }   
        </script>
</head>
<body>
<form name="product" method="POST">
<div class="header">
            <div class="innner-header">
                <div class="logo">
                    <a href="#">  TradeElecs</a>
                </div>
                <div class="header-link">
                    <select name="sel" onchange="selec(this.value)">;
                    <?php
                    session_start();
                     if(isset($_SESSION['user_id']))
                    {
                        echo "<option>$_SESSION[user_id]</option>";
                    }
                    ?>
                    <option>Logout</option>
                     </select>
                </div>
            </div>
        </div>
 <center><big>ABOUT ITEM<br /><br /></big>
<select name="category">
<option >---category---</option>
<?php
session_start();
if(isset($_SESSION['user_id']))
{
 $link=mysqli_connect("localhost","root","","tradeelecs");
$qry="select c_type from Category";
$resultset=mysqli_query($link,$qry);
while($r=mysqli_fetch_row($resultset))
 echo "<option>$r[0]</option>";
echo "</select>
<input type='submit' name='show' value='show'/>
<input type='submit' name='add' value='ADD'/>
<input type='submit'name='logout' value='Log OUT''/>
<br /><br />";

echo "<big>ABOUT CUSTOMER<br /><br /></big>";
 echo "<input type='submit' name='show1' value='show'/><br><br>";
 
 

if((isset($_POST['show'])))
{
 
$tab=<<<Tab
<table border=2 align="center" bgcolor=rgba(0,0,0,.2)>
<tr><th>Category id</th><th>Category type</th><th>item id</th><th>brand</th><th>model</th><th>color</th><th>other_details</th></tr>
Tab;
$link=mysqli_connect("localhost","root","","tradeelecs");
$qry="select * from $_POST[category]";
echo $_POST['category'];
$resultset=mysqli_query($link,$qry);
echo $tab;
while($r=mysqli_fetch_row($resultset))
{
   
  
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td></tr>";

}
echo "</table>";
}
if((isset($_POST['add'])))
{
    $var= $_POST['category'].".php?nm=".$_POST['category'];
 header("location:$var");
}
}
else
{
   header("location:signin.php"); 
}
/*if((isset($_POST['logout'])))
{
    session_destroy();
    header("location:signin.php");
}*/
if((isset($_POST['show1'])))
{
    
    $tab=<<<Tab
<table border=2 align="center" bgcolor=rgba(0,0,0,.2)>
<tr><th>Name</th><th>Mobile</th><th>E-mail</th></tr>
Tab;
$link=mysqli_connect("localhost","root","","tradeelecs");
$qry="select * from login";

$resultset=mysqli_query($link,$qry);
echo $tab;
while($r=mysqli_fetch_row($resultset))
{
   
  
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td></tr>";

}
echo "</table>";
    
}

?>
<div class="footer">
            <div class="container">
                <p><center>Copyright © TradeElecs. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
            </div>
        </div>
</form>
</body>
</html>
