<html>
<head>
<title> Officer Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body bgcolor="yellow">
<table width="45%" height="81" border="0" align="center" bgcolor="#FFFFFF">

     <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
      <tr>
<td height="33" align="center" bgcolor="purple">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<td>
<form action="processofficer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<tr><td width="34%" bgcolor="#FFFFFF"><b>identification Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" required placeholder="9666" /></td>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Telephone Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Phone" size=10 maxlength=10 required placeholder="07888889"/></td>
	
</tr>

<tr><td bgcolor="#FFFFFF"><b>From Prison:</b></td>
     <td style="margin: 0; padding: 0;">
                    <select id="from" name="from" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option value="">--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td>
 </tr>
                 
	<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
        <td style="margin: 0; padding: 0;">
                    <select id="to" name="to" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option value="">--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td></tr>
        
<tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="date" name="date" required  /></td>
</tr>

  <td height="26" bgcolor="#FFFFFF" align="center">
  <input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>

</tr>
</table>
</body>
</html>