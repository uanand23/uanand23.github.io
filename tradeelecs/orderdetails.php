<html>
<head>
<body>
<form method="POST">
<fieldset>
<legend>DELIVERY ADDRESS</legend>
<table border="2" cellspacing="0">
<tr><td>Name</td><td><input type="text" name="name"/></td></tr>
<tr><td>local area</td><td><input type="text" name="local"/></td></tr>
<tr><td>city</td><td><input type="text" name="city"/></td></tr>
<tr><td>district</td><td><input type="text" name="district"/></td></tr>
<tr><td>state</td><td><input type="text" name="state"/></td></tr>
<tr><td>pin code</td><td><input type="text" name="pin"/></td></tr>
<tr><td>Mobile</td><td><input type="text" name="Mobile"/></td></tr>
</table>
</fieldset><br /><br />
<fieldset>
<legend>product quantity</legend>
<table border="2" cellspacing="0">
<tr><td>quantity</td><td><input type="text" name="quantity"/></td></tr>
</table>
</fieldset>
<fieldset>
<legend>PAYMENT OPTION</legend>
<input type="radio" name="r2" value="CASH ON DELIVERY" readonly checked  />CASH ON DELIVERY<br /><br />
<input type="radio" name="r2" value="DEBIT CARD" readonly />DEBIT CARD<br /><br />
<input type="radio" name="r2" value="ONLINE BANKING" readonly />ONLINE BANKING<br /><br />
</fieldset><br /><br />
<center><input type="submit" name="sub1" value="submit"/></center>
</form>
</body>
</head>
</html>

<?php



?>