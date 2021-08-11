<html>
<head>
<title> Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="60%" height="91" border="1" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="green">
<font size="5">
<a href="userpanel.php">HOME</a> 
 
</font>
</td>
</tr>
<td height="5" bgcolor="#FFFFFF"><tr>
<td>
	<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONER</h2>
<form action="validatetransfer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
    <td width="34%" bgcolor="#FFFFFF"><b>prisoner Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" size=7  maxlength=5 name="Nid" required placeholder="000999" /></td>
</tr>


<tr><td bgcolor="#FFFFFF"><b>From Prison:</b></td>
    <td>  <select id="From" name="From" class="reg_fields" required style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option value="">--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td>
	<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
         <td>  <select id="To" name="To" class="reg_fields" required style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option value="">--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td>
			<tr><td><label for="on"><b>Date of Transfer:</b></label>
     <td width="66%" bgcolor="#FFFFFF"><input type="date" name="date" required placeholder="yyyy-mm-dd" /></td>

		      	
</tr>
        
<!-- <tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" /></td>
</tr>
 -->
  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>

</table>
</body>
</html>