

<head>
    <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #f44336;
}
</style>
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

	<table align="center" border="0" bgcolor="#yellow" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
	     	   <font size="4">   
           <a href="userpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="dependval.php">
       <h2 id="hdr_title">Register dependent </h2>
            <div class="control_input">
                <label for="id" class="label"> prisoner's id</label><input type="text" id="id" name="id" class="reg_fields" required placeholder="0000111"/>
            </div>

            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" required placeholder="full name"/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="age" class="label">age</label><input type="text" id="age" name="age" class="reg_fields" required placeholder="000"/>
            

                    </td>
                    
                    
                    </tr></table>
                </div>
            </div>

            <div class="control_input">           
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="address" class="label">address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="full address"/>
            

                    </td>
                  
                    
                    </tr></table>
                </div>
            </div>
            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected" >Male</option>
                            <option >Female</option>
                            <option>other</other>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="phone" class="label">phone no:</label><input type="text" id="phone" name="phone" size="10" maxlength="10" class="reg_fields" required placeholder="phone no."/>

                    </td>
                    
                   
                    </tr></table>
                </div><br>
             
                 
            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">relationship</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="relationship" name="relationship" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option>Parent</option>
                           <option>Friend</option>
                           <option>Wife</option>
                           <option>Husband</option>
                           <option>Daughter/Son</option>
                           <option>Relative</option>
                          <option>other</option>
                        </select>
                    </td>
                </table>
                </div>
 <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Prisoner Name</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prisoner" name="prisoner" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                     <option value="">--Select prisoner name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM prisoner");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['Full_Name'] . "'>" . $m_row['Full_Name'] . "</option>");
                    ?>
                     </select></td>
                 </table>
                </div>                
            <div class="control_input">
                <input  align="right"type="submit" name="signup" id="Add" value="add " title="" border="0">
            </div>
            
            <div id="validation_msg">
            </div>
    
</td>
</tr>

</table>
</body>
</html>