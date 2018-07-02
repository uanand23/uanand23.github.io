<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Mobile form</title>
</head>
<body>
<h1>Television Details</h1>
<form name="tvfrm">
<table border="1" cellspacing="0">
<tr><td>Category_id</td><td><input type="number" name="C_id"/></td></tr>
<tr><td>Tv_id</td><td><input type="text" name="M_id"/></td></tr>
<tr><td>Add Date</td><td><input type="date" name="Add_Date"/></td></tr>
<tr><td>Brand</td>
<td>
<select name="brand" >
<option value="choose">choose</option>
<option value="Samsung">Samsung</option>
<option value="Micromax">Micromax</option>
<option value="Lg">Lg</option>
</select>
</td>
</tr>
<tr><td>Model</td><td><input type="text" name="Model"/></td></tr>
<tr><td>Color</td><td><input type="text" name="Color"/></td></tr>
<tr><td>Display size</td><td><input type="text" name="Display_size"/></td></tr>
<tr><td>USB</td><td><input type="text" name="USB"/></td></tr>
<tr><td>Power_consumption</td><td><input type="text" name="Os"/></td></tr>
<tr><td>Sound Technology</td><td><input type="text" name="Sound_Technology"/></td></tr>
<tr><td>Price</td><td><input type="text"/></td></tr>
<tr><td>Other Details</td><td><textarea name="Other_Details"></textarea></td></tr>
<tr><td>Warranty</td><td><input type="text"/></td></tr>
<tr><td>Quantity Available</td><td><input type="text"/></td></tr>
<tr><td>Image</td><td><input type="file" name="mob_image"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="Ssubmit"/></td></tr>
</table>
</form>
</body>
</html>

<?php
?>