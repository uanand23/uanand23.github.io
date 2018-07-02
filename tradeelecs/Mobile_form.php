<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Karunesh" />

	<title>Mobile form</title>
</head>
<body>
<h1>Mobile Details</h1>
<form name="mobilefrm">
<table border="1" cellspacing="0">
<tr><td>Category_id</td><td><input type="number" name="C_id"/></td></tr>
<tr><td>Mobile_id</td><td><input type="text" name="M_id"/></td></tr>
<tr><td>Add Date</td><td><input type="date" name="Add_Date"/></td></tr>
<tr><td>Brand</td>
<td>
<select name="brand" >
<option value="choose">choose</option>
<option value="Samsung">Samsung</option>
<option value="Micromax">Micromax</option>
<option value="Oppo">Oppo</option>
<option value="Vivo">Vivo</option>
<option value="Apple">Apple</option>
<option value="Redmi">Redmi</option>
<option value="Gionee">Gionee</option>
<option value="Lenovo">Lenovo</option>
<option value="Motorola">Motorola</option>
</select>
</td>
</tr>
<tr><td>Model</td><td><input type="text" name="Model" /></td></tr>
<tr><td>Color</td><td><input type="text" name="Color"/></td></tr>
<tr><td>Resolution</td><td><input type="text" name="Resolution"/></td></tr>
<tr><td>Os</td><td><input type="text" name="Os"/></td></tr>
<tr><td>Processor</td><td><input type="text" name="Processor"/></td></tr>
<tr><td>Internal Storage</td><td><input type="number" name="Internal_Storage"/></td></tr>
<tr><td>Ram</td><td><input type="number" name="Ram" /></td></tr>
<tr><td>Primary Camera</td><td><input type="number" name="Primary_Camera"/></td></tr>
<tr><td>Secondary Camera</td><td><input type="number" name="Secondary_Camera"/></td></tr>
<tr><td>Price</td><td><input type="text"/></td></tr>
<tr><td>Other Details</td><td><textarea name="Other_Details"></textarea></td></tr>
<tr><td>Warranty</td><td><input type="text"/></td></tr>
<tr><td>Quantity Available</td><td><input type="text"/></td></tr>
<tr><td>Image</td><td><input type="file" name="mob_image"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="submit"/></td></tr>
</table>
</form>
</body>
</html>