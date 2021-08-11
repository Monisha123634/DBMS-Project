<hmtl>

<head>
    <style> 
 input[type=submit] {
  background-color: #af0ad3;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

	<table align="center" border="0"  width="400" cellpadding="9" cellspacing="0" height="300">
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
	<form id="frmReg" method="POST" action="prisonerval.php">
       <h2 id="hdr_title">Register Prisoner </h2>
           <div class="control_input">
                <label for="Nid" class="label">Prisoner ID</label><input type="text" id="Nid" name="Nid" class="reg_fields" required placeholder="0000321"/>
            </div>
            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" required placeholder="full name"/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="date1" class="label">Birth Date</label><input type="date" id="date1" name="date1" class="reg_fields" required placeholder="yyyy-mm-dd"/>
            

                    </td>
                    
                    
                    </tr></table>
                </div>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="date2" class="label">Date In</label><input type="date" id="date2" name="date2" class="reg_fields" required placeholder="yyyy-mm-dd"/>
            

                    </td>
                  
                    
                    </tr></table>
                </div>
            </div>

             <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="date3" class="label">Date Out</label><input type="date"  id="date3" name="date3" class="reg_fields" required placeholder="yyyy-mm-dd"
                    </td>
                    
                   
                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="address"/>
            </div>
            
             <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="states" class="label">states</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="states" name="states" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected" ></option>
                            <option >karnataka</option>
                             <option >kerala</option>
                            <option >tamil nadu</option>
                           <option>andhra pradesh</option>
                           <option >maharastra</option>
                           <option>madhya pradesh</option>
                           <option>uttar pradesh</option></select></td></tr>
                        
                    </table>
                </div></br>

            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender"required class="reg_fields"required style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected" >Male</option>
                            <option >Female</option>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Education Level</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" name="education" class="reg_fields" required style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected">Never</option>
                            <option >matriculation or below</option>
                            <option>Certificate</option>
                            <option>Diploma</option>
                            <option>Bachelor Degree</option>
                            <option>PGD</option>
                            <option>other</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="status" class="label">Maritial Status</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="status" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected">Divorced</option>
                            <option >Married</option>
                            <option >Single</option>
                            </td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div><br/>
             
                 
              



                <div class="control_input">
                <label for="Pname" class="label">Offence</label>
                <textarea cols="17" rows="4" name="offence" required placeholder="write the offence"></textarea>
                </div>

                 <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Sentence</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="sentence" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                            <option selected="selected" >3 months</option>
                            <option >6 months</option>
                            <option >1 year</option>
                            <option >2 years</option>
                            <option >3 year</option>
                            <option >5 year</option>
                            <option >7 year</option>
                            <option >10 year</option>
                            <option>lifetime</option></select></td></tr></td></tr>
                     
         </table>
                </div></br>


            
             
             <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Campus" class="label">Prison</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prison" name="prison" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;">
                     <option value="">--Select prison--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
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