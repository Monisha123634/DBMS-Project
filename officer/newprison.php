<html>
<head>
 
  
       <link href="style1.css" rel="stylesheet" type="text/css">
       <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
</head>
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
      
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
	     	   <font size="4">   
           <a href="officerpanel.php">HOME</a>  
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="validatenewprison.php">
       <h2 id="hdr_title">Add New Prison  </h2>
            <div class="control_input">
            <label for="pno" class="label">Prison No</label><input type="text" id="pno" name="pno" size=5  maxlength=5 
                class="reg_fields" required placeholder="-XXXX/XX"  >
            </div>
            <div class="control_input">
                <label for="Pname" class="label">Prison Name</label><input type="text" id="pname" name="pname" class="reg_fields" required placeholder="name">
            </div>
             
            <div class="control_input">
                <label for="location" class="label">Location</label><input type="text" id="location" name="location" class="reg_fields" required placeholder="location">
            </div>

            <div class="control_input">               
                        <label for="opendate" class="label">Open Date</label>
                        <input type="date" id="date" name="date"   class="reg_fields" required  class="reg_fields"/>
            </div>
                    
                    
            
            <div class="control_input">
                <label for="contact" class="label">Telephone no.</label><input type="text" id="contact" name="contact"  size=11  maxlength=11 
                class="reg_fields" required placeholder="074565558" class="reg_fields"/>
            </div>

            

                <div class="control_input">
                <table>
                     <td>
                        <label for="Campus" class="label">Capacity</label><input type="text" id="Campus" name="Campus"   class="reg_fields" required placeholder="1000" />

                    </td>
                 </table>
                  </div>

            <div class="control_input">
                <input type="submit" name="signup" id="Add" value="Add " title="" border="0">
            </div>
            
            <div id="validation_msg">
            </div>
    </form>
</td>
</tr>

</table>
</body>
</html>