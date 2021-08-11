<html>
<head>

<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="0" bgcolor="WHITE" align="center" width="54%">
     <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
      
<tr bgcolor="purple">
<td align="center">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>prisoner Id:</b></td>
<td width="100%" bgcolor="#FFFFFF"><input type="text" name="Nid"  size=8 maxlength=8 required placeholder="00001111" />

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname"  size=20 maxlength=20 required placeholder="full name" />
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="date" name="dob" required />

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  size=12 maxlength=12 required placeholder="address"/>
</tr>
<tr><td width="34%" bgcolor="#FFFFFF"><b>states:</b></td>
    <td> <select name="county" required>
		<option>Karnataka</option>
		<option>Andhra Pradesh</option>
		<option>kerala</option>
                <option>Tamil Nadu</option>
		<option>Maharastra</option>
		<option>Madhya Pradesh</option>
                <option>Uttara pradesh</option></select></td></tr>
	
        <tr><td><b>Gender:</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
     <td> <select name="education" required>
		<option>Never</option>
		<option>matriculation or below</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
        <option>Above</option></select></td></tr>
		
<tr><td width="44%" bgcolor="#FFFFFF"><b>Marital Status:</b></td>
    <td> <select name="status" required>
		<option>Divorced</option>
		<option>Married</option>
                <option>Single</option></select></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
    <td> <select name="offence" required>
        <option>Murder</option>
		<option>Robbery</option>
		<option>Rape</option>
        <option>Kidnapping</option>
        <option>Other</option></select></td></tr>
		
		<tr>
<td bgcolor="#FFFFFF"><b>Date Of Imprisonment:</b></td>
<td bgcolor="#FFFFFF"><input type="date" name="date"  required />



</tr>

<tr>
   <td height="26" bgcolor="blue" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>

</table>
</body>
</html>