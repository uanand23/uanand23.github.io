<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Ac_form</title>
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

<form name="Acfrm" method="POST" enctype="multipart/form-data">
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
        <center><h1>AC Details</h1></center>
<table border="1" cellspacing="0" align="center">
<tr><td>Category_id</td><td><input type="number" name="C_id"/></td></tr>
<tr><td>p_id</td><td><input type="text" name="p_id"/></td></tr>
<tr><td>Add Date</td><td><input type="date" name="Add_Date"/></td></tr>
<tr><td>Brand</td>
<td>
<select name="brand" >
<option value="Choose">--Choose--</option>
<option value="Samsung">Samsung</option>
<option value="Micromax">Micromax</option>
<option value="Voltas">Voltas</option>
<option value="Lg">Lg</option>
<option value="Lloyd">Lloyd</option>
</select>
</td>
</tr>
<tr><td>Model</td><td><input type="text" name="Model"/></td></tr>
<tr><td>Color</td><td><input type="text" name="Color"/></td></tr>
<tr><td>Capacity</td><td><input type="text" name="Capacity"/></td></tr>
<tr><td>Cooling Capicity</td><td><input type="text" name="Cooling_Capacity"/></td></tr>
<tr><td>Pannel Display</td><td><input type="text" name="Pannel_Display"/></td></tr>
<tr><td>Turbo Mode</td><td><input type="text" name="Turbo_Mode"/></td></tr>
<tr><td>Auto Restart</td><td><input type="text" name="Auto_Restart"/></td></tr>
<tr><td>Timer</td><td><input type="text" name="Timer"/></td></tr>
<tr><td>Power Requirements</td><td><input type="text" name="Power_Requirement"/></td></tr>
<tr><td>Price</td><td><input type="text" name="Price"/></td></tr>
<tr><td>Other Details</td><td><textarea name="Other_Details"></textarea></td></tr>
<tr><td>Warranty</td><td><textarea name="warranty"></textarea></td></tr>
<tr><td>Quantity Available</td><td><input type="number" name="Quantity_Available"/></td></tr>
<tr><td>Image</td><td><input type="file" name="Image"/></td></tr>
<tr><td colspan="2"><input type="submit" name="sub" value="submit"/></td></tr>
</table>

<?php

if(isset($_SESSION['user_id']))
{
if(isset($_POST['sub']))
{ 
    $imgpath=null;
    if($_FILES['Image']['error']==0)
    {
        $tmpname=$_FILES['Image']['tmp_name'];
        $tpath=$_SERVER['DOCUMENT_ROOT']."tradeelecs/Pictures/".$_FILES['Image']['name'];
        if(move_uploaded_file($tmpname,$tpath))
        {
           
            $imgpath="Pictures/".$_FILES['Image']['name'];
            
        }
        else
        {
            echo "file not uploaded successfully";
        }
    }  
$link=mysqli_connect("localhost","root","","tradeelecs");
$qry= "insert into $_GET[nm] values($_POST[C_id],'$_POST[p_id]','$_POST[Add_Date]','$_POST[brand]','$_POST[Model]','$_POST[Color]','$_POST[Capacity]','$_POST[Cooling_Capacity]','$_POST[Pannel_Display]','$_POST[Turbo_Mode]','$_POST[Auto_Restart]','$_POST[Timer]','$_POST[Power_Requirement]','$_POST[Price]','$_POST[Other_Details]','$_POST[warranty]','$_POST[Quantity_Available]','$imgpath')";
$res=mysqli_query($link,$qry);
echo $res;
if($res)
echo "INSERTED";
else
echo "not";
}
}
else
{
   header("location:signin.php"); 
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