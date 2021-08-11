<html>
<head>
<title> Transfer Form</title>
<link rel="stylesheet" media="screen" href="style1.css" >
</head>
<body bgcolor="#28F3F0">
<table width="60%" height="91" border="0" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="red">
<font size="5">
<a href="officerpanel.php">HOME</a> 
 
</font>
</td>
</tr>
<td height="5" bgcolor="#FFFFFF"><tr>
<td>
	<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONER</h2>
<form action="validatetransfer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">


<tr>
<td><b>Prisoner Id </b> </td>
<td><select name="Nid" required>
    <option value="">--Select prisoner Id--</option>
    <?php
    mysql_connect('localhost', 'root', '');
    mysql_select_db('prisonpro');
 $msql = mysql_query("SELECT * FROM prisoner");
 while($m_row = mysql_fetch_array($msql))        
        echo("<option value = '" . $m_row['id'] . "'>" . $m_row['id'] . "</option>");
    ?>
</select></td>
</tr>





<tr><td bgcolor="#FFFFFF"><b>From Prison:</b></td>
        <td style="margin: 0; padding: 0;">
            <select id="from" name="from" class="reg_fields" required style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
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
           <select id="to" name="to" class="reg_fields" required style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
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
<tr><td><label for="date"><b>Date of Transfer:</b></label></td>
		      	

    <td> <input type="date" id="date" name="date" class="reg_fields" required/></td>
     
                        </tr>
  <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>

</table>
</body>
</html>