<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
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
	<form id="frmReg" method="POST" action="validatevisitor.php">
       <h2 id="hdr_title">Visitors Registration Form  </h2>
            <div class="control_input">
                <label for="Nid" class="label">Prisoner ID</label><input type="text" id="Nid" name="Nid" class="reg_fields" required placeholder="097765"/>
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required placeholder="full name"/>
            </div>
            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="address"/>
            </div>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="uemail" class="label">Date</label>
                    </td>
                    <td><input type="date" id="date" name="date" class="reg_fields" required /></td>

                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="timein" class="label">Time In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select required id="timein" name="timein" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                           <option>12:00am</option>
                           <option>12:30am</option>
                           <option>1:00pm</option>
                           <option>1:30pm</option>
                          <option>2:00pm</option>
                           <option>2:30pm</option>
                           <option>3:00pm</option>
                           <option>3:30pm</option>
                           <option>4:00pm</option>
                           <option>4:30pm</option>
                           <option>5:00pm</option>
                           
                        </select>
                    </td>
                </table>
                </div class="control_input">

              <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="timeout" class="label">Time Out</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select  required id="timeout" name="timeout" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                           <option>12:00am</option>
                           <option>12:30am</option>
                           <option>1:00pm</option>
                           <option>1:30pm</option>
                           
                            <option>2:00pm</option>
                           <option>2:30pm</option>
                           <option>3:00pm</option>
                           <option>3:30pm</option>
                           <option>4:00pm</option>
                           <option>4:30pm</option>
                           <option>5:00pm</option>
                           
                        </select>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="uemail" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"  size=11  maxlength=11 
                class="reg_fields" required placeholder="074565558" class="reg_fields"/>
            </div class="control_input">

        

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Relationship</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select required id="relationship" name="relationship" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
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
                    <select required id="prisoner" name="prisoner" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
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
                <input type="submit" name="signup" id="signup" value="Submit" title="" border="0">
            </div>
            
            <div id="validation_msg">
            </div>
    
</td>
</tr>

</table>
</body>
</html>