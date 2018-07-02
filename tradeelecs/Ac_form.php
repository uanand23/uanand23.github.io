<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Ac_form</title>
</head>
<body>
<h1>Ac Details</h1>
<form name="Acfrm">
<table border="1" cellspacing="0">
<tr><td>Category_id</td><td><input type="number" name="C_id"/></td></tr>
<tr><td>Ac_id</td><td><input type="text" name="M_id"/></td></tr>
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
<tr><td>Turbo Mode</td><td><select>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td></tr>
<tr><td>Auto Restart</td><td><select>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td></tr>
<tr><td>Timer</td><td><select>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td></tr>
<tr><td>Power Requirements</td><td><input type="text" name="Power_Requirements"/></td></tr>
<tr><td>Price</td><td><input type="number"/></td></tr>
<tr><td>Other Details</td><td><textarea name="Other_Details"></textarea></td></tr>
<tr><td>Warranty</td><td><textarea name="warranty"></textarea></td></tr>
<tr><td>Quantity Available</td><td><input type="text"/></td></tr>
<tr><td>Image</td><td><input type="file" name="mob_image"/></td></tr>
<tr><td colspan="2"><input type="submit" name="sub" value="submit"/></td></tr>
</table>
</form>


</body>
</html>